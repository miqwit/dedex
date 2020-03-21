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
 * Description of DelegatedUsageRights
 *
 * @author Mickaël Arcos <miqwit>
 */
class DelegatedUsageRights {

	function __construct() {
		$this->PeriodOfRightsDelegation = new PeriodOfRightsDelegation();
	}

	/**
	 *
	 * @var array
	 */
	private array $UseTypes = [];

	public function getUseTypes(): array {
		return $this->UseTypes;
	}

	public function createUseType(): string {
		return $this;
	}

	public function setUseType(string $UseType): void {
		$this->UseTypes[] = $UseType;
	}

	/**
	 *
	 * @var PeriodOfRightsDelegation
	 */
	private PeriodOfRightsDelegation $PeriodOfRightsDelegation;

	public function getPeriodOfRightsDelegation(): PeriodOfRightsDelegation {
		return $this->PeriodOfRightsDelegation;
	}

	public function setPeriodOfRightsDelegation(PeriodOfRightsDelegation $PeriodOfRightsDelegation): void {
		$this->PeriodOfRightsDelegation = $PeriodOfRightsDelegation;
	}

	/**
	 * Expressed as ISO 3166-1 alpha-2 codes or Worldwide
	 * 
	 * @link https://kb.ddex.net/pages/viewpage.action?pageId=9505800
	 * 
	 * @var string
	 */
	private string $TerritoryOfRightsDelegation;

	public function getTerritoryOfRightsDelegation(): string {
		return $this->TerritoryOfRightsDelegation;
	}

	public function setTerritoryOfRightsDelegation(string $TerritoryOfRightsDelegation): void {
		$this->TerritoryOfRightsDelegation = $TerritoryOfRightsDelegation;
	}

}
