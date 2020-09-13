<?php

namespace DedexBundle\Controller;

use DedexBundle\Entity\Ddex;
use DedexBundle\Entity\Ern\NewReleaseMessage;
use Exception;

class ErnParserController {

  /**
   * The xml parser as returned by xml_parser_create
   * @var resource
   */
  private $xml_parser = null;
  
  /**
   * @var string
   */
  private $version = null;

  /**
   * NewReleaseMessage object from the right entity based on version, like:
   *     \DedexBundle\Entity\Ern382\NewReleaseMessage
   * or  \DedexBundle\Entity\Ern41\NewReleaseMessage
   * @var $ern \DedexBundle\Entity\Ern\NewReleaseMessage
   */
  private $ern = null;

  /**
   * Store the current tag we are browsing while parsing
   * @var string
   */
  private $current_tag_name = null;
  private $pile = array();

  /**
   * Contains a list of ids (spl_object_id) of objects that had a closed
   * element, so they are not reused for data erasement.
   * 
   * @var array 
   */
  private $closed_objects = [];

  /**
   * If true, display logs (for debugging purpose mainly)
   * @var bool
   */
  private $display_log = false;

  /**
   * Array of arrays (by depth level) of attributes to process.
   * Process the attributes of the current level when we leave the level (element ends)
   * @var type 
   */
  private $attrs_to_process = [];

  /**
   * Log something (will echo if display_log is true)
   * @param type $message
   */
  private function log($message) {
    if ($this->display_log) {
      echo $message . "\n";
    }
  }

  /**
   * Activate or deactivate logs
   * @param bool $val
   */
  public function setDisplayLog(bool $val) {
    $this->display_log = $val;
  }

  /**
   * Function called when the parser encounters a tag opening
   * 
   * @param type $parser
   * @param string $name The name of the tag
   * @param array $attrs The attributes of the tag
   */
  private function callbackStartElement($parser, string $name, array $attrs) {
    $this->current_tag_name = $name;
    $this->pile[] = $name;

    // Will process attributes later
    $this->attrs_to_process[count($this->pile)] = $attrs;
  }

  /**
   * Function called when the parser encounters a tag ending.
   * 
   * @param type $parser
   * @param string $name
   */
  private function callbackEndElement($parser, string $name) {
    // Process attributes now.
    // Consider each attribute as a setter of current element
    // if attribute is MessageSchemaVersionId on ern:NewReleaseMessage
    // then will call $this->ern->setMESSAGESCHEMAVERSIONID
    if (array_key_exists(count($this->pile), $this->attrs_to_process)) {
      foreach ($this->attrs_to_process[count($this->pile)] as $key => $val) {
        $this->callbackStartElement($parser, $key, []);
        $this->callbackCharacterData($parser, $val);
        $this->callbackEndElement($parser, $key);
      }
      $this->attrs_to_process[count($this->pile)] = [];
    }

    if ($this->current_tag_name == $name) {
      $this->log("close tag " . implode(",", $this->pile));
      $this->closed_objects[$name] = true;
    }

    array_pop($this->pile);

    if (count($this->pile) > 0) {
      $this->current_tag_name = $this->pile[count($this->pile) - 1];
    }
  }

  /**
   * Return a clean version of tag with symbols compatible with function names.
   * : becomes _
   * 
   * @param string $tag string to clean
   * @return string
   */
  public function cleanTag($tag) {
    return str_replace(":", "_", $tag);
  }

  /**
   * From the current pile of tag, set the value to the last element.
   * If the pile is ['ERN:NEWRELEASEMESSAGE', 'MESSAGEHEADER', 
   * 'MESSAGERECIPIENT', 'PARTYID'], then will call 
   * $this->ern->getMESSAGEHEADER()->getMESSAGERECIPIENT()->setPARTYID($value)
   * 
   * @param type $value Value to set
   */
  private function setCurrentElement($value) {
    $this->log($value . ": " . implode("->", $this->pile));

    $depth = -1;
    $elem = $this->ern;

    foreach ($this->pile as $tag) {
      $depth++;
      $tag = $this->cleanTag($tag);

      if (strtoupper($tag) == "ERN_NEWRELEASEMESSAGE") {
        continue;
      }

      $prefix = "get";
      if ($depth == (count($this->pile) - 1)) {
        $prefix = "set";
      }

      $func_names = [$prefix . $tag, $prefix . $tag . "s", $prefix . $tag . "Type"];

      // Add to func names also the addTo, because can be array. Will be tested first
      if ($prefix == "set") {
        $func_names = array_merge(["addTo" . $tag, "create" . $tag], $func_names);
      }

      foreach ($func_names as $func_name) {
        if (!method_exists($elem, $func_name)) {
          continue;
        }

        if ($prefix == "set") {
          // It's possible we're trying to set a text but it's expecting an
          // object (where text should be placed in value).
          $value_inst = $this->instanciateTypeFromDoc($elem, $func_name, $value);
          $elem->$func_name($value_inst);
          return;
        } else {
          // get
          $elem_use = $elem->$func_name($value);

          // If array, take last element if not empty
          if (is_array($elem_use) && count($elem_use) > 0) {
            $elem_use = $elem_use[count($elem_use) - 1];

            // Maybe the last element is closed, if so, consider $elem_use as
            // null and will create a new element to be added to the list
            if (array_key_exists($tag, $this->closed_objects)) {
              unset($this->closed_objects[$tag]);
              $elem_use = []; // fake empty array to create new object in next case below
            }
          }

          // If this element is null, create a new instance for it
          if ($elem_use === null || $elem_use === []) {
            $class_name = $this->getTypeOfElementFromDoc($elem, $func_name, $tag);
//						$class_name = "\\DedexBundle\\Entity\\Ern\\" . $tag . "Type";
            $new_elem = new $class_name($value); // Give value as default param. Needed for simple tags
            if (is_array($elem_use)) {
              $setter = "addTo" . $tag;
            } else {
              $setter = "set" . $tag;
            }
            $elem->$setter($new_elem);
            $elem = $new_elem;
            break;
          }

          $elem = $elem_use;
        }

        break;
      }
    }
  }

  private function getTypeOfElementFromDoc($class, $function, $tag) {
    $rc = new \ReflectionMethod($class, $function);
    $doc = $rc->getDocComment();
    preg_match("/@return (\S+).*/", $doc, $matches);
    if (count($matches) > 1) {
      $type = str_replace("[]", "", $matches[1]);
    } else {
      $type = "\\DedexBundle\\Entity\\Ern\\" . $tag . "Type";
    }
    return $type;
  }

  private function instanciateTypeFromDoc($class, $function, $value_default) {
    $rc = new \ReflectionMethod($class, $function);
    $doc = $rc->getDocComment();
    preg_match("/@param (\S+).*/", $doc, $matches);
    if (count($matches) > 1 && !in_array($matches[1], ["string", "int", "bool", "float", "mixed"])) {
      $type = $matches[1];
      $this->log("create type $type");
      $new_elem = new $type($value_default);
      return $new_elem;
    } else {
      return $value_default;
    }
  }

  /**
   * Function called when data is encountered in the XML file
   * 
   * @param type $parser
   * @param string $data
   */
  private function callbackCharacterData($parser, string $data) {
    $data_clean = trim($data);
    if ($data_clean === "") {
      // do nothing
      return;
    }

    $this->setCurrentElement($data_clean);
  }

  /**
   * Creates the parser and affect the callback functions
   * 
   * @param string $file
   * @return boolean
   */
  private function newXmlParser(string $file) {
    // Create parser
    $this->xml_parser = xml_parser_create();

    // Activate case folding
    xml_parser_set_option($this->xml_parser, XML_OPTION_CASE_FOLDING, 0);

    // Set callback functions
    xml_set_element_handler($this->xml_parser, [$this, "callbackStartElement"], [$this, "callbackEndElement"]);
    xml_set_character_data_handler($this->xml_parser, [$this, "callbackCharacterData"]);
    // xml_set_external_entity_ref_handler($this->xml_parser, "externalEntityRefHandler");
    // Open file
    if (!($fp = @fopen($file, "r"))) {
      return false;
    }

    return array($this->xml_parser, $fp);
  }

  /**
   * Look for text xmlns:ern="http://ddex.net/xml/ern/382" or 41 in XML file
   * @param filedescription $fp Open wml file. Considered as valid XML file at this point
   * @return string version such as "382" or "41"
   * @throws Exception
   */
  private function detectVersion($fp) {
    $version = null;
    
    while (($buffer = fgets($fp, 4096)) !== false) {
      $trimed = trim($buffer);
      if (empty($trimed)) {
        continue;
      }
      
      // Try to find version in this line
      $re = '/xmlns:ern="https?:\/\/ddex.net\/xml\/ern\/(\d+)"/m';
      preg_match_all($re, $trimed, $matches, PREG_SET_ORDER, 0);

      if (empty($matches)) {
        continue;
      }
      
      $version = $matches[0][1];
      $supported_versions = ["41", "382"];
      if (!in_array($version, $supported_versions)) {
        throw new Exception(sprintf("Version found in this XML is %s. Support only versions %s.", $version, implode(",", $supported_versions)));
      }
    }
    if (!feof($fp)) {
      throw new Exception("Could not find the xmlns:ern in the beginning of this file.");
    }
      
    rewind($fp);
    return $version;
  }

  /**
   * This is the main parsing function that will go through the whole XML
   * 
   * @param string $file_path Location of XML path
   * @return Ddex The main entity modelling the full DDex file
   * @throws Exception If file not found or XML can't be loaded
   */
  public function parse(string $file_path) {
    if (!file_exists($file_path)) {
      throw new Exception("File not found: $file_path");
    }

    // Create parser, will be stored in $this->xml_parser
    if (!(list($this->xml_parser, $fp) = $this->newXmlParser($file_path))) {
      throw new Exception("Can't load XML file: $file_path");
    }

    $this->version = $this->detectVersion($fp); // 382 or 41
    
    // Main entity that will link all entities from XML file
    $classname_with_version = "DedexBundle\\Entity\\Ern{$this->version}\\NewReleaseMessage";
    $this->ern = new $classname_with_version();

    // Parse XML now
    while ($data = fread($fp, 4096)) {
      if (!xml_parse($this->xml_parser, $data, feof($fp))) {
        die(sprintf("XML Error: %s at line %d\n",
                        xml_error_string(xml_get_error_code($this->xml_parser)),
                        xml_get_current_line_number($this->xml_parser)));
      }
    }

    // Free parser memory
    xml_parser_free($this->xml_parser);

    return $this->ern;
  }

}
