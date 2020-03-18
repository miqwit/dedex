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
 * Description of SoundRecordingId
 *
 * @author Mickaël Arcos <miqwit>
 */
class SoundRecordingId {

	function __construct() {
		$this->catalogNumber = new NamespacedText();
		$this->proprietaryId = new NamespacedText();
	}

	/**
	 * The IsReplaced flag in the SoundRecordingId tag indicates whether this 
	 * Identifier is old and has been replaced by a new one (=true) or not 
	 * (=false). The Flag may only be set to True when the new Identifier is also 
	 * provided.
	 * 
	 * @link https://kb.ddex.net/display/HBK/Implementation%3A+SoundRecording
	 * 
	 * @var string
	 */
	private string $isReplaced;

	function getIsReplaced(): string {
		return $this->isReplaced;
	}

	function setIsReplaced(string $isReplaced): void {
		$this->isReplaced = $isReplaced;
	}

	private string $isrc;

	function getIsrc(): string {
		return $this->isrc;
	}

	function setIsrc(string $isrc): void {
		$this->isrc = $isrc;
	}

	/**
	 * contains a record company’s internal ID
	 * 
	 * @link https://kb.ddex.net/display/HBK/Implementation%3A+SoundRecording
	 * 
	 * @var string
	 */
	private NamespacedText $catalogNumber;

	function getCatalogNumber(): NamespacedText {
		return $this->catalogNumber;
	}

	function setCatalogNumber(NamespacedText $catalogNumber): void {
		$this->catalogNumber = $catalogNumber;
	}

	/**
	 * contains a receiving MLC’s internal ID
	 * 
	 * @link https://kb.ddex.net/display/HBK/Implementation%3A+SoundRecording
	 * 
	 * @var string
	 */
	private NamespacedText $proprietaryId;

	function getProprietaryId(): NamespacedText {
		return $this->proprietaryId;
	}

	function setProprietaryId(NamespacedText $proprietaryId): void {
		$this->proprietaryId = $proprietaryId;
	}

}
