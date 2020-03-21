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

namespace DedexBundle\Entity;

/**
 * Models a date such as <CreationDate IsApproximate="false" IsBefore="false" 
 * IsAfter="false" TerritoryCode="FR">2008-09-26</CreationDate>
 * 
 * @author Mickaël Arcos <miqwit>
 */
class ResourceDate extends TagWithAttributes {

	/**
	 *
	 * @var string
	 */
	private string $CreationDate;

	function getCreationDate(): string {
		return $this->CreationDate;
	}

	function setCreationDate(string $CreationDate): void {
		$this->CreationDate = $CreationDate;
	}

	/**
	 *
	 * @var string
	 */
	private string $IsApproximate;

	function getIsApproximate(): string {
		return $this->IsApproximate;
	}

	function setIsApproximate(string $IsApproximate): void {
		$this->IsApproximate = $IsApproximate;
	}

	/**
	 *
	 * @var string
	 */
	private string $IsBefore;

	function getIsBefore(): string {
		return $this->IsBefore;
	}

	function setIsBefore(string $IsBefore): void {
		$this->IsBefore = $IsBefore;
	}

	/**
	 *
	 * @var string
	 */
	private string $IsAfter;

	function getIsAfter(): string {
		return $this->IsAfter;
	}

	function setIsAfter(string $IsAfter): void {
		$this->IsAfter = $IsAfter;
	}

	/**
	 *
	 * @var string
	 */
	private string $TerritoryCode;

	function getTerritoryCode(): string {
		return $this->TerritoryCode;
	}

	function setTerritoryCode(string $TerritoryCode): void {
		$this->TerritoryCode = $TerritoryCode;
	}

}
