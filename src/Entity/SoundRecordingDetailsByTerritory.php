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
 * Each SoundRecording node must include one or more 
 * SoundRecordingDetailsByTerritory nodes.  The first 
 * SoundRecordingDetailsByTerritory node includes data which would apply for 
 * this SoundRecording in all territories as a default, unless specifically 
 * overridden by further information provided in subsequent 
 * SoundRecordingDetailsByTerritory nodes. Most implementers of the MLC message 
 * currently specify that only one SoundRecordingDetailsByTerritory node should 
 * be supplied per SoundRecording. (This does not preclude the delivery of 
 * multi-territory rights ownership information.)
 * 
 * @link https://kb.ddex.net/pages/viewpage.action?pageId=9505800
 * @link https://kb.ddex.net/pages/viewpage.action?pageId=13477806
 *
 * @author Mickaël Arcos <miqwit>
 */
class SoundRecordingDetailsByTerritory {

	function __construct() {
	}

	/**
	 * TerritoryCode – This defines the territory or territories covered by this 
	 * node.  ‘Worldwide’ is defined as an allowed value.  When listing an 
	 * exception (i.e. to Worldwide) an ExcludedTerritoryCode should be used. 
	 * 
	 * @link https://kb.ddex.net/pages/viewpage.action?pageId=9505800
	 * 
	 * @var string
	 */
	private string $TerritoryCode;

	public function getTerritoryCode(): string {
		return $this->TerritoryCode;
	}

	public function setTerritoryCode(string $TerritoryCode): void {
		$this->TerritoryCode = $TerritoryCode;
	}
	
	/**
	 * Title –  In SoundRecordingDetailsByTerritory’ this tag can be used to 
	 * express the title in another language, or an alternative title applicable 
	 * in a given territory.  This is in accordance with ERN-3 profile rules.  
	 * See also: Title LanguageAndScriptCode/TitleText/SubTitle.
	 * 
	 * @link https://kb.ddex.net/pages/viewpage.action?pageId=9505800
	 * 
	 * @var array 
	 */
	private array $titles = [];
	
	public function getTitles(): array {
		return $this->titles;
	}
	
	public function createTitle(): Title {
		$title = new Title();
		$this->titles[] = $title;
		return $title;
	}
	
	/**
	 * Set to true when this SoundRecording finished parsing. Can't add new
	 * values to this one in this parsing.
	 * 
	 * @var bool 
	 */
	private bool $locked = false;
	
	function getLocked(): bool {
		return $this->locked;
	}

	function setLocked(bool $locked): void {
		$this->locked = $locked;
	}

}
