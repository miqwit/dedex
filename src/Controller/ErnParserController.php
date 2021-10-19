<?php

/*
 * The MIT License
 *
 * Copyright 2020 Mickaël Arcos <miqwit>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace DedexBundle\Controller;

use DateInterval;
use DateTime;
use DedexBundle\Entity\Ddex;
use DedexBundle\Exception\FileNotFoundException;
use DedexBundle\Exception\RuleValidationException;
use DedexBundle\Exception\VersionNotSupportedException;
use DedexBundle\Exception\XmlLoadException;
use DedexBundle\Exception\XmlParseException;
use DedexBundle\Exception\XsdCompliantException;
use DedexBundle\Rule\Rule;
use Exception;
use ReflectionMethod;
use ReflectionParameter;
use XMLReader;

/**
 * The main generic parser for XML files. Will load elements one by one
 * while browsing. 
 * 
 * It uses the xml_parser_create function and xml_parser_* set.
 * 
 * Three callbacks are used while browsing the XML file, 
 * depending on the encountered event:
 * 
 * - callbackCharacterData
 * - callbackEndElement
 * - callbackStartElement
 * 
 * On top of the regular parsing, rules are tested against the parsed data
 * to validate them. They are run in the validateRules() function, once
 * the parsing is over.
 * 
 * @author Mickaël Arcos <miqwit>
 */
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
   */
  private $ern = null;

  /**
   * key=tag_name and value=current element (object)
   * @var type 
   */
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
   * If true, will validate XML against XSD
   * @var type 
   */
  private $xsd_validation = false;
  
  /**
   * List of rules applied to this parser to validate
   * @var Rule[]
   */
  private $rules = array();
  
  /**
   * Messages from rules
   * @var string[] 
   */
  private $rule_messages = [Rule::LEVEL_ERROR => [], Rule::LEVEL_WARNING => []];

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
   * Add a new rule to validate
   * @param Rule $rule
   */
  public function addRule(Rule $rule) {
    $this->rules[] = $rule;
  }
	
	public function addRuleSet(array $rules) {
		foreach ($rules as $rule) {
			$this->addRule($rule);
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
   * Activate or deactivate XSD validation
   * @param bool $val
   */
  public function setXsdValidation(bool $val) {
    $this->xsd_validation = $val;
  }

  /**
   * Indicates that the next parsed data must be attached to the parent and not
   * as a new object.
   * @var bool
   */
  private bool $set_to_parent = false;

  /**
   * Indicates the tag name under which the next parsed data must be attached to 
   * the parent. If it's isBackFill, then will attach to $parent->setIsBackFill().
   * This property is used to guess the function name.
   * 
   * @var type 
   */
  private string $set_to_parent_tag = "";

  /**
   * These tags and attributes should not be parsed like the other ones.
   * @var array
   */
  private array $ignore_these_tags_or_attributes = [
      "xmlns:ern",
      "xmlns:ernm",
      "xmlns:xs",
      "xmlns:xsi",
      "xs:schemaLocation",
      "xsi:schemaLocation",
      "xmlns:avs",
      "ReleaseResourceReferenceList"  // TODO generic
  ];

  /**
   * Function called when the parser encounters a tag opening
   * 
   * @param type $parser
   * @param string $name The name of the tag
   * @param array $attrs The attributes of the tag
   */
  private function callbackStartElement($parser, string $name, array $attrs) {
    if (in_array($name, $this->ignore_these_tags_or_attributes)) {
      return;
    }

    // Create element here. But to know its type, call its parent getter if any.
    // There is only one case when there is no parent: ern:NewReleaseMessage.
    if ($name === "ern:NewReleaseMessage" || $name === "ernm:NewReleaseMessage") {
      $class_name = $this->ern;
      $name = "NewReleaseMessage";
    } else {
      $parent = end($this->pile);
      $class_name = $this->getTypeOfElementFromDoc(get_class($parent), $name);

      if (!class_exists($class_name)) {
        // Set element to parent class
        $this->set_to_parent = true;
        $this->set_to_parent_tag = $name;
        return; // no attributes in this case
      }
    }
    $elem = $this->instanciateClass($class_name);

    // Tags can have the same names in the hierarchy (like ResourceGroup)
    if (!array_key_exists($name, $this->pile)) {
      $this->pile[$name] = $elem;
    } else {
      $this->pile[$name . "##" . random_int(2, 99999)] = $elem;
    }

    // Will process attributes later
    $this->attrs_to_process[count($this->pile)] = $attrs;
  }

  /**
   * From a class name, instanciate it with a parameter null.
   * DDEX classes for simple elements take the text value as a parameter.
   * When we create an element (callbackStartElement), we don't have access to that
   * textual value yet, so we pass null and the actual valu will be set later
   * (in the callbackCharacterData).
   * 
   * Handles a special case for DateInterval which needs a specific string for
   * construction. Instanciate it with 0 seconds.
   * 
   * @param type $class_name
   * @return DateInterval|\DedexBundle\Controller\class_name
   */
  private function instanciateClass($class_name) {
    if ($class_name === "\DateInterval") {
      // For DateInterval can't instanciate with null
      return new DateInterval("PT0M0S");  // will be erased
    }

    return new $class_name(null);
  }

  /**
   * Function called when the parser encounters a tag ending.
   * Will process attributes of the current element (last in pile) and attach it
   * to its parent. Will delete this element (contained in the parent now).
   * 
   * @param type $parser
   * @param string $name
   */
  private function callbackEndElement($parser, string $name) {
    if (in_array($name, $this->ignore_these_tags_or_attributes)) {
      return;
    }

    if (!$this->set_to_parent) {
      // Process attributes now.
      // Consider each attribute as a setter of current element
      // if attribute is MessageSchemaVersionId on ern:NewReleaseMessage
      // then will call $this->ern->setMESSAGESCHEMAVERSIONID
      if (array_key_exists(count($this->pile), $this->attrs_to_process)) {
        foreach ($this->attrs_to_process[count($this->pile)] as $key => $val) {
          if (in_array($key, $this->ignore_these_tags_or_attributes)) {
            continue;
          }

          $this->callbackStartElement($parser, $key, []);
          $this->callbackCharacterData($parser, $val);
          $this->callbackEndElement($parser, $key);
        }
        array_pop($this->attrs_to_process);
      }

      $this->attachToParent();

      array_pop($this->pile);
    }

    // Reset parent setting
    $this->set_to_parent = false;
    $this->set_to_parent_tag = "";
  }

  /**
   * Attach the last element in pile to the one above it.
   * Guess the function of the parent to attach the child.
   * If only one element, set it to this->ern and return. This is the end
   * of the parsing.
   * 
   * @return type
   */
  private function attachToParent() {
    if (count($this->pile) < 2) {
      // We are done, attach it to $this->ern
      $this->ern = end($this->pile);
      return;
    }

    $keys = array_keys($this->pile);
    $parent_tag = $keys[count($keys) - 2];
    $child_tag = end($keys);

    $parent = $this->pile[$parent_tag];
    $child = $this->pile[$child_tag];

    $func_names = $this->listPossibleFunctionNames("set", $child_tag);
    foreach ($func_names as $func_name) {
      if (!method_exists($parent, $func_name)) {
        continue;
      }
      break;
    }

    $parent->$func_name($child);
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
   * Guess functions for a getter or a setter in the DDEX classes.
   * 
   * @param type $prefix "get" or "set"
   * @param type $tag
   * @return type
   */
  private function listPossibleFunctionNames($prefix, $tag) {
    // It's possible this script added a ##\d+ information at the end of
    // the tag to avoid key duplicate. Remove it here.
    if (strpos($tag, "##") !== false) {
      $tag = preg_replace("/##\d+/", "", $tag);
    }

    $func_names = [
        $prefix . $tag,
        $prefix . $tag . "s",
        $prefix . $tag . "Type",
        $prefix . $tag . "List"
    ];

    // Add to func names also the addTo, because can be array. Will be tested first
    if ($prefix == "set") {
      $func_names = array_merge([
          "addTo" . $tag,
          "addTo" . $tag . "List",
          "create" . $tag,
          "create" . $tag . "List"
              ],
              $func_names);
    }

    return $func_names;
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
    $this->log($value . ": " . implode("->", array_keys($this->pile)));

    // Use last element in pile
    $keys = array_keys($this->pile);

    if ($this->set_to_parent) {
      $elem = end($this->pile);
      $tag = $this->set_to_parent_tag;
    } else {
      $elem = $this->pile[$keys[count($keys) - 2]];
      $tag = end($keys);
    }

    $func_name = $this->getValidFunctionName("set", $tag, $elem);

    // It's possible we're trying to set a text but it's expecting an
    // object (where text should be placed in value).
    $value_inst = $this->instanciateTypeFromDoc($elem, $func_name, $value);

    if ($this->set_to_parent) {
      $elem->$func_name($value_inst);
    } else {
      $this->pile[$tag] = $value_inst;
    }
  }

  /**
   * Tries all funtion of listPossibleFunctionNames on the current element and
   * return the first one that exists.
   * If none exist, throws an exception
   * 
   * @param string $prefix "set" or "get"
   * @param type $tag
   * @param type $elem
   * @return type
   * @throws Exception
   */
  private function getValidFunctionName($prefix, $tag, $elem) {
    $func_names = $this->listPossibleFunctionNames($prefix, $tag);

    $function_used = false;
    foreach ($func_names as $func_name) {
      if (!method_exists($elem, $func_name)) {
        continue;
      }
      $function_used = true;
      break;
    }

    if (!$function_used) {
      throw new Exception("No functions found for this tag: $tag. Path is " . implode(",", array_keys($this->pile)));
    }

    return $func_name;
  }

  private function expectedParamIsArray($class, $func_name) {
    $method = new ReflectionMethod($class, $func_name);

    if (count($method->getParameters()) != 1) {
      throw new Exception("This reflection method only supports 1 parameter");
    }

    /* @var $param ReflectionParameter */
    $param = $method->getParameters()[0];
    $type = $param->getType();

    $is_array = $param->isArray();
    return $is_array;
  }

  /**
   * From the doc of a class and function (guessed from $tag), return the type
   * as a string of the element.
   * 
   * @param type $class
   * @param type $tag
   * @return string
   */
  private function getTypeOfElementFromDoc($class, $tag) {
    $function = $this->getValidFunctionName("get", $tag, $class);

    $rc = new ReflectionMethod($class, $function);
    $doc = $rc->getDocComment();
    preg_match("/@return (\S+).*/", $doc, $matches);
    if (count($matches) > 1) {
      $type = str_replace("[]", "", $matches[1]);
    } else {
			$type = "\\DedexBundle\\Entity\\Ern{$this->version}\\{$tag}Type";
    }
    return $type;
  }

  /**
   * Instanciate an object with type guessed from doc. Use $value_default during
   * instanciation. Special case for DateTime.
   *
   * Based on documentation rather than parameters type because documentation
   * is more comprehensive (as generated by xsd2php)
   * 
   * @param type $class
   * @param type $function
   * @param type $value_default
   * @return \DedexBundle\Controller\type
   */
  private function instanciateTypeFromDoc($class, $function, $value_default) {
    $rc = new ReflectionMethod($class, $function);
    $doc = $rc->getDocComment();
    preg_match("/@param (\S+).*/", $doc, $matches);

    if (count($matches) === 0 || in_array($matches[1], ["string", "int", "bool", "float", "mixed"])) {
      return $value_default;
    }

    $type = $matches[1];
    $this->log("create type $type");
    if ($type == "\DateTime") {
      // Remove milliseconds if any
      $value = preg_replace("/\.\d+\+/", "+", $value_default);
      $format = (mb_strlen($value) > mb_strlen('0000-00-00T00:00:00')) ? "Y-m-d\TH:i:sP" : "Y-m-d\TH:i:s";
      $new_elem = DateTime::createFromFormat($format, $value);
    } else {
      $value = $this->instanciateTypeFromDoc($type, '__construct', $value_default);
      $new_elem = new $type($value);
    }
    return $new_elem;
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
    $supported_versions = ["41", "382"];

    while (($buffer = fgets($fp, 4096)) !== false) {
      $trimed = trim($buffer);
      if (empty($trimed)) {
        continue;
      }

      // Try to find version in this line
      $re = '/xmlns:ernm?="https?:\/\/ddex.net\/xml\/ern\/(\d+)"/m';
      preg_match_all($re, $trimed, $matches, PREG_SET_ORDER, 0);

      if (empty($matches)) {
        continue;
      }

      $version = $matches[0][1];
      break;
    }

    if ($version === null) {
      throw new XmlLoadException("Could not find the xmlns:ern in the beginning of this file.");
    }

    if (!in_array($version, $supported_versions)) {
      throw new VersionNotSupportedException(sprintf("Version found in this XML is %s. Support only versions %s.", $version, implode(",", $supported_versions)));
    }

    rewind($fp);
    return $version;
  }

  /**
   * Validates XML against XSD (according to version).
   * Will load both files in memory.
   * 
   * @param string $file_path
   * @throws XsdCompliantException
   */
  private function validateXml(string $file_path) {
    if (!$this->xsd_validation) {
      return;
    }

    $xml_reader = new XMLReader();
    $xml_reader->open($file_path);

    $xsd_file_path = "xsd/release_notification/{$this->version}/release-notification.xsd";
    $xml_reader->setSchema($xsd_file_path);

    try {
      while ($xml_reader->read()) {
        continue;
      }
    } catch (\Exception $ex) {
      throw new XsdCompliantException("This XML file $file_path does not validates XSD $xsd_file_path. Error: {$ex->getMessage()}");
    }
  }
  
  /**
   * Display all warning messages then error messages, one per line.
   * 
   * @return type
   */
  private function getInvalidatedRuleMessages() {
    $message = "";
		
		foreach (array_merge($this->rule_messages[Rule::LEVEL_WARNING], $this->rule_messages[Rule::LEVEL_ERROR]) as $msg) {
			$message .= "\n- ".$msg;
		}
    
    return $message;
  }
  
  /**
   * Check the new release message validates all rules.
   * Will raise an exception and display all messages if one error pops up.
   * 
   * @throws RuleValidationException
   */
  private function validateRules() {
    foreach ($this->rules as $rule) {
      if (!in_array($this->version, $rule->getSupportedVersions())) {
        continue;
      }
      
      $valid = $rule->validates($this->ern);
      if (!$valid) {
        $this->rule_messages[$rule->getLevel()][] = $rule->getMessage();
      }
    }
    
    if (count($this->rule_messages[Rule::LEVEL_ERROR]) > 0) {
      throw new RuleValidationException("Some rules with level ERROR did not pass.\n"
              . $this->getInvalidatedRuleMessages()
      );
    }
  }
  
  /**
   * Return all messages generated by rules.
   * @return string
   */
  public function getRuleMessages() {
    return $this->getInvalidatedRuleMessages();
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
      throw new FileNotFoundException("File not found: $file_path");
    }

    // Create parser, will be stored in $this->xml_parser
    if (!(list($this->xml_parser, $fp) = $this->newXmlParser($file_path))) {
      throw new XmlLoadException("Can't load XML file: $file_path");
    }

    $this->version = $this->detectVersion($fp); // 382 or 41
    // Validate xml against XSD
    $this->validateXml($file_path);

    // Main entity that will link all entities from XML file
    $classname_with_version = "DedexBundle\\Entity\\Ern{$this->version}\\NewReleaseMessage";
    $this->ern = new $classname_with_version();

    // Parse XML now
    while ($data = fread($fp, 4096)) {
      if (!xml_parse($this->xml_parser, $data, feof($fp))) {
        throw new XmlParseException(sprintf("XML Error: %s at line %d\n",
                        xml_error_string(xml_get_error_code($this->xml_parser)),
                        xml_get_current_line_number($this->xml_parser)));
      }
    }

    // Free parser memory
    xml_parser_free($this->xml_parser);
    
    // Check for rules
    $this->validateRules();

    return $this->ern;
  }

}
