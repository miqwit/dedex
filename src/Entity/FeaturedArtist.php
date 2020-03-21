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
 * FeaturedArtist – Some MLCs need data about the contributors to a recording 
 * and the nature of their contributions, so that contributors that are 
 * eligible and qualifying for equitable remuneration can be paid.  The 
 * ‘contribution category’ of a contributor can be ‘featured’ or 
 * ‘non-featured’.  MLCs use the contribution category along with the role 
 * and/or roles in determining remuneration.
 * 
 * A FeaturedArtist is either an individual person or a collective (such as 
 * an orchestra), referred to by their name and/or the identifier used to 
 * designate them within systems such as SCAPR’s IPD.  A FeaturedArtist is a 
 * performer who is prominently featured in relation to the release (as 
 * opposed to a session musician, who would be aNonFeaturedArtist).
 * 
 * There will often be multiple FeaturedArtists, enumerated using the 
 * SequenceNumber attribute.  For each FeaturedArtist, the following are 
 * mandatory:
 * 
 * Name/FullName
 * PartyId/IPN (if available)
 * PartyId/ProprietaryId with sender’s proprietary ID
 * InstrumentType
 * DateAndPlaceOfBirth (if available, place is optional)
 * Performance
 * Territory
 * 
 * Within the DDEX MLC Message it is also possible to carry the information 
 * about performative roles within the ‘ResourceContributor’ composite.  
 * Under present usage however, the principal way of conveying data about 
 * FeaturedArtist and NonFeaturedArtist is within the dedicated composites – 
 * ResourceContributor should be used for non-performing roles, such as 
 * certain studio roles.
 * 
 * @link https://kb.ddex.net/pages/viewpage.action?pageId=9505800
 *
 * @author Mickaël Arcos <miqwit>
 */
class FeaturedArtist extends Multiple {

	function __construct() {
		$this->DateAndPlaceOfBirth = new DateWithTerritoryCode();
		$this->PartyName = new PartyNameArtist();
		$this->ArtistRole = new TagUserDefined();
	}

	/**
	 * @var string
	 */
	private string $SequenceNumber = "";

	function getSequenceNumber(): string {
		return $this->SequenceNumber;
	}

	function setSequenceNumber(string $SequenceNumber): void {
		$this->SequenceNumber = $SequenceNumber;
	}

	/**
	 *
	 *
	  @var array
	 */
	private array $InstrumentTypes = [];

	public function getInstrumentTypes(): array {
		return $this->InstrumentTypes;
	}

	public function createInstrumentType(): string {
		return $this;
	}

	public function setInstrumentType(string $InstrumentType): void {
		$this->InstrumentTypes[] = $InstrumentType;
	}

	/**
	 *
	 * @var string
	 */
	private string $Sex;

	public function getSex(): string {
		return $this->Sex;
	}

	public function setSex(string $Sex): void {
		$this->Sex = $Sex;
	}

	/**
	 *
	 * @var string
	 */
	private string $TerritoryOfResidency;

	public function getTerritoryOfResidency(): string {
		return $this->TerritoryOfResidency;
	}

	public function setTerritoryOfResidency(string $TerritoryOfResidency): void {
		$this->TerritoryOfResidency = $TerritoryOfResidency;
	}

	/**
	 *
	 * @var string
	 */
	private string $TerritoryOfPerformance;

	public function getTerritoryOfPerformance(): string {
		return $this->TerritoryOfPerformance;
	}

	public function setTerritoryOfPerformance(string $TerritoryOfPerformance): void {
		$this->TerritoryOfPerformance = $TerritoryOfPerformance;
	}

	/**
	 *
	 * @var string
	 */
	private string $PerformanceDate;

	public function getPerformanceDate(): string {
		return $this->PerformanceDate;
	}

	public function setPerformanceDate(string $PerformanceDate): void {
		$this->PerformanceDate = $PerformanceDate;
	}

	/**
	 *
	 * @var DateWithTerritoryCode
	 */
	private DateWithTerritoryCode $DateAndPlaceOfBirth;

	public function getDateAndPlaceOfBirth(): DateWithTerritoryCode {
		return $this->DateAndPlaceOfBirth;
	}

	public function setDateAndPlaceOfBirth($DateAndPlaceOfBirth): void {
		if (is_string($DateAndPlaceOfBirth)) {
			$this->DateAndPlaceOfBirth->setData($DateAndPlaceOfBirth);
		} else {
			$this->DateAndPlaceOfBirth = $DateAndPlaceOfBirth;
		}
	}

	/**
	 *
	 * @var array
	 */
	private array $PartyIds = [];

	public function getPartyIds(): array {
		return $this->PartyIds;
	}

	public function createPartyId(): NamespacedTextMultiple {
		$entity = new NamespacedTextMultiple();
		$this->PartyIds[] = $entity;
		return $entity;
	}

	/**
	 *
	 * @var PartyName
	 */
	private PartyNameArtist $PartyName;

	public function getPartyName(): PartyNameArtist {
		return $this->PartyName;
	}

	public function setPartyName(PartyNameArtist $PartyName): void {
		$this->PartyName = $PartyName;
	}

	/**
	 *
	 * @var ArtistRole
	 */
	private TagUserDefined $ArtistRole;

	public function getArtistRole(): TagUserDefined {
		return $this->ArtistRole;
	}

	public function setArtistRole($ArtistRole): void {
		if (is_string($ArtistRole)) {
			$this->ArtistRole->setData($ArtistRole);
		} else {
			$this->ArtistRole = $ArtistRole;
		}
	}

}
