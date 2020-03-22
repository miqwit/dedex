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
 * Description of ReleaseId
 *
 * @author Mickaël Arcos <miqwit>
 */
class ReleaseId {
	
	function __construct() {
		$this->CatalogNumber = new NamespacedText();
		$this->ProprietaryId = new NamespacedText();
	}

		/**
	 *
	 * @var string
	 */
	private string $ISRC;

	public function getISRC(): string {
		return $this->ISRC;
	}

	public function setISRC(string $ISRC): void {
		$this->ISRC = $ISRC;
	}

	/**
	 *
	 * @var string
	 */
	private string $ICPN;

	public function getICPN(): string {
		return $this->ICPN;
	}

	public function setICPN(string $ICPN): void {
		$this->ICPN = $ICPN;
	}

	/**
	 *
	 * @var CatalogNumber
	 */
	private NamespacedText $CatalogNumber;

	public function getCatalogNumber(): NamespacedText {
		return $this->CatalogNumber;
	}

	public function setCatalogNumber($CatalogNumber): void {
		if (is_string($CatalogNumber)) {
			$this->CatalogNumber->setData($CatalogNumber);
		} else {
			$this->CatalogNumber = $CatalogNumber;
		}
	}

	/**
	 *
	 * @var ProprietaryId
	 */
	private NamespacedText $ProprietaryId;

	public function getProprietaryId(): NamespacedText {
		return $this->ProprietaryId;
	}

	public function setProprietaryId($ProprietaryId): void {
		if (is_string($ProprietaryId)) {
			$this->ProprietaryId->setData($ProprietaryId);
		} else {
			$this->ProprietaryId = $ProprietaryId;
		}
	}

}
