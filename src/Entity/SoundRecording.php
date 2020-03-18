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
 * Each SoundRecording composite itself comprises two main sections of 
 * information, firstly details at the SoundRecording level, which are 
 * invariant across territory; then one or more 
 * SoundRecordingDetailsByTerritory composites containing territory-specific 
 * information for that SoundRecording.
 * 
 * The LanguageAndScriptCode applied at this level applies to all child nodes, 
 * unless overridden in any of the child nodes.
 *
 * @author Mickaël Arcos <miqwit>
 */
class SoundRecording extends Resource {

	function __construct() {
		$this->soundRecordingType = new NamespacedText();
		$this->soundRecordingId = new SoundRecordingId();
		$this->referenceTitle = new ReferenceTitle();
	}

	/**
	 *
	 * @var string 
	 */
	private string $isUpdated;

	function getIsUpdated(): string {
		return $this->isUpdated;
	}

	function setIsUpdated(string $isUpdated): void {
		$this->isUpdated = $isUpdated;
	}

	/**
	 * The LanguageAndScriptCode applied at this level applies to all child 
	 * nodes, unless overridden in any of the child nodes.
	 * 
	 * @link https://kb.ddex.net/display/HBK/Implementation%3A+SoundRecording
	 * 
	 * @var string
	 */
	private string $languageAndScriptCode;

	function getLanguageAndScriptCode(): string {
		return $this->languageAndScriptCode;
	}

	function setLanguageAndScriptCode(string $languageAndScriptCode): void {
		$this->languageAndScriptCode = $languageAndScriptCode;
	}

	/**
	 * SoundRecordingType – in most cases, parties will be communicating details 
	 * of a MusicalWorkSoundRecording; a SoundRecording that is related to a 
	 * musical work (as opposed to SoundRecordingType of an audio book or ambient 
	 * recording, say).
	 * 
	 * @link https://kb.ddex.net/display/HBK/Implementation%3A+SoundRecording
	 * 
	 * @var NamespacedText 
	 */
	private NamespacedText $soundRecordingType;

	function getSoundRecordingType(): NamespacedText {
		return $this->soundRecordingType;
	}

	function setSoundRecordingType($soundRecordingType): void {
		if (is_string($soundRecordingType)) {
			$this->soundRecordingType->setData($soundRecordingType);
		} else {
			$this->soundRecordingType = $soundRecordingType;
		}
	}

	/**
	 * IsArtistRelated - is an optional Boolean that flags whether the resource 
	 * is related to an artist. In most cases this will be set to “true”.
	 * 
	 * @link https://kb.ddex.net/display/HBK/Implementation%3A+SoundRecording
	 * 
	 * @var string 
	 */
	private string $isArtistRelated;

	function getIsArtistRelated(): string {
		return $this->isArtistRelated;
	}

	function setIsArtistRelated(string $isArtistRelated): void {
		$this->isArtistRelated = $isArtistRelated;
	}

	private SoundRecordingId $soundRecordingId;

	function getSoundRecordingId(): SoundRecordingId {
		return $this->soundRecordingId;
	}

	function setSoundRecordingId(SoundRecordingId $soundRecordingId): void {
		$this->soundRecordingId = $soundRecordingId;
	}

	/**
	 * While the  ResourceReference  field is superfluous for the communication 
	 * of claims, it is technically mandatory in the current MLC standard.  Each 
	 * SoundRecording is identified locally within the scope of a single message 
	 * by an anchor reference formed of the letter ‘A’ concatenated with an 
	 * integer that increments for each SoundRecording composite. 
	 * 
	 * The example shows is for the the first SoundRecording. The second would 
	 * contain a value ‘A2’ and so on. These references need only be unique 
	 * within in a given message.
	 * 
	 * @link https://kb.ddex.net/display/HBK/Implementation%3A+SoundRecording
	 * 
	 * @var string 
	 */
	private string $resourceReference;

	function getResourceReference(): string {
		return $this->resourceReference;
	}

	function setResourceReference(string $resourceReference): void {
		$this->resourceReference = $resourceReference;
	}

	/**
	 *
	 * @var ReferenceTitle 
	 */
	private ReferenceTitle $referenceTitle;

	function getReferenceTitle(): ReferenceTitle {
		return $this->referenceTitle;
	}

	function setReferenceTitle(ReferenceTitle $referenceTitle): void {
		$this->referenceTitle = $referenceTitle;
	}

}
