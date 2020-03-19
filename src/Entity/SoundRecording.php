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
		$this->CreationDate = new ResourceDate();
		$this->MasteredDate = new ResourceDate();
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
	 * ReferenceTitle - This is part of the 'reference descriptive metadata' for 
	 * the recording.  It is structured as the TitleText and SubTitle. In the 
	 * DDEX standards, the TitleText is for the normal title of a recording and 
	 * the SubTitle is a catch-all for version and/or subtitle information.  
	 * 
	 * SubTitle is used to differentiate different recorded versions such as 
	 * ‘live’, ‘radio edit’, ‘extended mix’ etc.  The language of the title is 
	 * carried within the tag (represented by an ISO 639 LanguageCode).
	 * 
	 * @link https://kb.ddex.net/display/HBK/Implementation%3A+SoundRecording
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

	/**
	 *
	 * @var string
	 */
	private string $IsMedley;

	function getIsMedley(): string {
		return $this->IsMedley;
	}

	function setIsMedley(string $IsMedley): void {
		$this->IsMedley = $IsMedley;
	}

	/**
	 *
	 * @var string
	 */
	private string $IsPotpourri;

	function getIsPotpourri(): string {
		return $this->IsPotpourri;
	}

	function setIsPotpourri(string $IsPotpourri): void {
		$this->IsPotpourri = $IsPotpourri;
	}

	/**
	 *
	 * @var string
	 */
	private string $IsInstrumental;

	function getIsInstrumental(): string {
		return $this->IsInstrumental;
	}

	function setIsInstrumental(string $IsInstrumental): void {
		$this->IsInstrumental = $IsInstrumental;
	}

	/**
	 *
	 * @var string
	 */
	private string $IsBackground;

	function getIsBackground(): string {
		return $this->IsBackground;
	}

	function setIsBackground(string $IsBackground): void {
		$this->IsBackground = $IsBackground;
	}

	/**
	 *
	 * @var string
	 */
	private string $IsHiddenResource;

	function getIsHiddenResource(): string {
		return $this->IsHiddenResource;
	}

	function setIsHiddenResource(string $IsHiddenResource): void {
		$this->IsHiddenResource = $IsHiddenResource;
	}

	/**
	 *
	 * @var string
	 */
	private string $IsBonusResource;

	function getIsBonusResource(): string {
		return $this->IsBonusResource;
	}

	function setIsBonusResource(string $IsBonusResource): void {
		$this->IsBonusResource = $IsBonusResource;
	}

	/**
	 *
	 * @var string
	 */
	private string $IsComputerGenerated;

	function getIsComputerGenerated(): string {
		return $this->IsComputerGenerated;
	}

	function setIsComputerGenerated(string $IsComputerGenerated): void {
		$this->IsComputerGenerated = $IsComputerGenerated;
	}

	/**
	 *
	 * @var string
	 */
	private string $NoSilenceBefore;

	function getNoSilenceBefore(): string {
		return $this->NoSilenceBefore;
	}

	function setNoSilenceBefore(string $NoSilenceBefore): void {
		$this->NoSilenceBefore = $NoSilenceBefore;
	}

	/**
	 *
	 * @var string
	 */
	private string $NoSilenceAfter;

	function getNoSilenceAfter(): string {
		return $this->NoSilenceAfter;
	}

	function setNoSilenceAfter(string $NoSilenceAfter): void {
		$this->NoSilenceAfter = $NoSilenceAfter;
	}

	/**
	 *
	 * @var string
	 */
	private string $Duration;

	function getDuration(): string {
		return $this->Duration;
	}

	function setDuration(string $Duration): void {
		$this->Duration = $Duration;
	}

	/**
	 * CreationDate - The date of First Fixation / Date of Recording, to the 
	 * year.  (Ref. Rome Convention.)
	 * 
	 * @link https://kb.ddex.net/display/HBK/Implementation%3A+SoundRecording
	 * 
	 * @var ResourceDate
	 */
	private ResourceDate $CreationDate;

	function getCreationDate(): ResourceDate {
		return $this->CreationDate;
	}

	function setCreationDate(string $CreationDate): void {
		$this->CreationDate->setData($CreationDate);
	}

	/**
	 * @var ResourceDate
	 */
	private ResourceDate $MasteredDate;

	function getMasteredDate(): ResourceDate {
		return $this->MasteredDate;
	}

	function setMasteredDate(string $MasteredDate): void {
		$this->MasteredDate->setData($MasteredDate);
	}
	
	/**
	 * Each SoundRecording node must include one or more 
	 * SoundRecordingDetailsByTerritory nodes.  The first 
	 * SoundRecordingDetailsByTerritory node includes data which would apply for 
	 * this SoundRecording in all territories as a default, unless specifically 
	 * overridden by further information provided in subsequent 
	 * SoundRecordingDetailsByTerritory nodes. Most implementers of the MLC 
	 * message currently specify that only one SoundRecordingDetailsByTerritory 
	 * node should be supplied per SoundRecording. (This does not preclude the 
	 * delivery of multi-territory rights ownership information.)
	 * 
	 * @var array 
	 */
	private array $soundRecordingDetailsByTerritorys = [];
	
	public function getSoundRecordingDetailsByTerritorys(): array {
		return $this->soundRecordingDetailsByTerritorys;
	}
	
	public function createSoundRecordingDetailsByTerritory(): SoundRecordingDetailsByTerritory {
		$srdbt = new SoundRecordingDetailsByTerritory();
		$this->soundRecordingDetailsByTerritorys[] = $srdbt;
		return $srdbt;
	}

}
