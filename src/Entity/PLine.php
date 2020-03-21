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
 * The PLine states the rightsholder detail at the time the time when the 
 * recording was published, and is not necessarily the same as the 
 * InitialProducer.  It is the nationality of the InitialProducer that is 
 * one of the 'points of attachment' determining eligibility under the 
 * treaties.  The mandatory fields for PLIne are:
 *   - Year
 *   - PlineText
 * 
 * Since PLineText will be deprecated by DDEX in future versions of the 
 * standard but remains mandatory for the time being, it may be left blank.
 * 
 * @link https://kb.ddex.net/pages/viewpage.action?pageId=9505800
 *
 * @author Mickaël Arcos <miqwit>
 */
class PLine {

	/**
	 *
	 * @var string
	 */
	private string $Year;

	public function getYear(): string {
		return $this->Year;
	}

	public function setYear(string $Year): void {
		$this->Year = $Year;
	}

	/**
	 *
	 * @var string
	 */
	private string $PLineCompany;

	public function getPLineCompany(): string {
		return $this->PLineCompany;
	}

	public function setPLineCompany(string $PLineCompany): void {
		$this->PLineCompany = $PLineCompany;
	}

	/**
	 *
	 * @var string
	 */
	private string $PLineText;

	public function getPLineText(): string {
		return $this->PLineText;
	}

	public function setPLineText(string $PLineText): void {
		$this->PLineText = $PLineText;
	}

}
