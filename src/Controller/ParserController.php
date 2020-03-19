<?php

namespace DedexBundle\Controller;

use DedexBundle\Entity\Ddex;
use Exception;

class ParserController {
	
	/**
	 * The xml parser as returned by xml_parser_create
	 * @var resource
	 */
	private $xml_parser = null;
	
	/**
	 * @var $ddex DedexBundle\Entity\Ddex
	 */
	private $ddex = null;
	
	/**
	 * Store the current tag we are browsing while parsing
	 * @var string
	 */
	private $current_tag_name = null;
	
	private $pile = array();

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

		// Consider each attribute as a setter of current element
		// if attribute is MessageSchemaVersionId on ern:NewReleaseMessage
		// then will call $this->ddex->setMESSAGESCHEMAVERSIONID
		foreach ($attrs as $key => $val) {
			$this->callbackStartElement($parser, $key, []);
			$this->callbackCharacterData($parser, $val);
			$this->callbackEndElement($parser, $key);
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
	 * $this->ddex->getMESSAGEHEADER()->getMESSAGERECIPIENT()->setPARTYID($value)
	 * 
	 * @param type $value Value to set
	 */
	private function setCurrentElement($value) {
		$elem = $this->getBeforeLastElem();
		$tag = $this->cleanTag($this->pile[count($this->pile) -1]);
		$func_name = "set".$tag;

		if (method_exists($elem, $func_name)) {
			$elem->$func_name($value);
		} else if (method_exists($elem, "setData")) {
			// Can by a simple tag but complexified because can have properties
			$elem->setData($value);
		} else {
			echo "Warning. Method not found $func_name\n";
		}
	}
	
	/**
	 * Get the element in entities corresponding to the one before parsing
	 * element. If we are in ['ERN:NEWRELEASEMESSAGE', 'MESSAGEHEADER', 
	 * 'MESSAGERECIPIENT', 'PARTYID'] then will return
	 * $this->ddex->getMESSAGEHEADER()->getMESSAGERECIPIENT()
	 * 
	 * @return array last element (getMESSAGERECIPIENT)
	 */
	private function getBeforeLastElem() {
//		var_dump($value.": ".implode("->", $this->pile));
		
		$depth = -1;
		$elem = $this->ddex;
		foreach ($this->pile as $tag) {
			$depth++;
			$tag = $this->cleanTag($tag);
			
			if ($tag == "ERN_NEWRELEASEMESSAGE") {
				continue;
			}
			
			if ($depth == (count($this->pile) - 1)) {
				return $elem;
			} else {
				// If last element, call set, else keep getting nested object
				$func_name = "get".$tag;
				
				if (method_exists($elem, $func_name)) {
					$elem = $elem->$func_name();
				} else {
					// maybe it's a plural (if a list)
					if (method_exists($elem, $func_name."s")) {
						$func_name_plural = $func_name."s";
						$elems = $elem->$func_name_plural();
						// Take last element in list, or create new one if not available
						if (empty($elems) || ($elems[count($elems) -1])->getLocked()) {
							$func_create = "create".$tag;
							$elem = $elem->$func_create();
						} else {
							$elem = $elems[count($elems) -1];
						}
					}
				}
			}
		}
	}
	
	/**
	 * Function called when the parser encounters a tag ending.
	 * 
	 * @param type $parser
	 * @param string $name
	 */
	private function callbackEndElement($parser, string $name) {
		$last_getter = "get".$name."s";
		if (method_exists($this->getBeforeLastElem(), $last_getter)) {
			// There is plural, so it's a list. Lock last element.
			$elems = $this->getBeforeLastElem()->$last_getter();
			$elem = $elems[count($elems) -1]; // last object in list
			$elem->setLocked(true);
		}
		
		if ($this->current_tag_name == $name) {
			$this->current_tag_name = null;
		}
		
		array_pop($this->pile);
	}

	/**
	 * Function called when data is encountered in the XML file
	 * 
	 * @param type $parser
	 * @param string $data
	 */
	private function callbackCharacterData($parser, string $data) {
		if (empty(trim($data))) {
			// do nothing
			return;
		}
		
		$this->setCurrentElement($data);
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
		xml_parser_set_option($this->xml_parser, XML_OPTION_CASE_FOLDING, 1);

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
	 * This is the main parsing function that will go through the whole XML
	 * 
	 * @param string $file_path Location of XML path
	 * @return Ddex The main entity modelling the full DDex file
	 * @throws Exception If file not found or XML can't be loaded
	 */
	public function parse(string $file_path): Ddex {
		if (!file_exists($file_path)) {
			throw new Exception("File not found: $file_path");
		}

		// Create parser, will be stored in $this->xml_parser
		if (!(list($this->xml_parser, $fp) = $this->newXmlParser($file_path))) {
			throw new Exception("Can't load XML file: $file_path");
		}
		
		// Main entity that will link all entities from XML file
		$this->ddex = new Ddex();
		
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

		return $this->ddex;
	}

}
