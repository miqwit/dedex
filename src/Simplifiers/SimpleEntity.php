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

namespace DedexBundle\Simplifiers;

use Exception;

/**
 * This is a parent class for all the Simple Entities. Contains useful handlers
 *
 * @author Mickaël Arcos <miqwit>
 */
class SimpleEntity {
	
	/**
	 * Returns the detailed object for a given territory.
	 * 
	 * @param type $element the Ern element
	 * @param string $type
	 * @param string $territory
	 * @return type
	 * @throws Exception
	 */
	protected function getDetailsByTerritory($element, string $type, string $territory = "worldwide") {
		$function = "get{$type}DetailsByTerritory";
		foreach ($element->$function() as $rdbt) {
			foreach ($rdbt->getTerritoryCode() as $tc) {
				if (strtolower($tc->value()) === strtolower($territory)) {
					$release_details = $rdbt;
					break 2;
				}
			}
		}
		
		if ($release_details === null) {
			throw new Exception("No details found for territory Worldwide");
		}
		
		return $release_details;
	}
	
	/**
	 * Get the UserDefinedValue in property if the value of the element is UserDefinedValue
	 * @param type $object
	 */
	protected function getUserDefinedValue($object) {
		if (strtolower($object->value()) === "userdefined") {
			return $object->getUserDefinedValue();
		}
		
		return $object->value();
	}
}
