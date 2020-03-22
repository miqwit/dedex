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
 * HostSoundCarrier’s ReleaseId - at least one of the following sub elements is mandatory:
 *   ICPN
 *   CatalogNumber
 *   CatalogNumber
 *   ProprietaryId
 *
 * @author Mickaël Arcos <miqwit>
 */
class HostSoundCarrier extends Multiple {
	
	function __construct() {
		$this->ReleaseId = new ReleaseId();
		$this->Title = new Title();
	}

		/**
	 *
	 * @var ReleaseId
	 */
	private ReleaseId $ReleaseId;

	public function getReleaseId(): ReleaseId {
		return $this->ReleaseId;
	}

	public function setReleaseId(ReleaseId $ReleaseId): void {
		$this->ReleaseId = $ReleaseId;
	}

	/**
	 *
	 * @var Title
	 */
	private Title $Title;

	public function getTitle(): Title {
		return $this->Title;
	}

	public function setTitle(Title $Title): void {
		$this->Title = $Title;
	}

	/**
	 *
	 * @var array
	 */
	private array $DisplayArtists = [];

	public function getDisplayArtists(): array {
		return $this->DisplayArtists;
	}

	public function createDisplayArtist(): DisplayArtist {
		$entity = new DisplayArtist();
		$this->DisplayArtists[] = $entity;
		return $entity;
	}

	/**
	 *
	 * @var string
	 */
	private string $TrackNumber;

	public function getTrackNumber(): string {
		return $this->TrackNumber;
	}

	public function setTrackNumber(string $TrackNumber): void {
		$this->TrackNumber = $TrackNumber;
	}

	/**
	 *
	 * @var string
	 */
	private string $SideNumber;

	public function getSideNumber(): string {
		return $this->SideNumber;
	}

	public function setSideNumber(string $SideNumber): void {
		$this->SideNumber = $SideNumber;
	}

	/**
	 *
	 * @var string
	 */
	private string $CarrierType;

	public function getCarrierType(): string {
		return $this->CarrierType;
	}

	public function setCarrierType(string $CarrierType): void {
		$this->CarrierType = $CarrierType;
	}

	/**
	 *
	 * @var string
	 */
	private string $NumberOfSoundRecordingsClaimedInCarrier;

	public function getNumberOfSoundRecordingsClaimedInCarrier(): string {
		return $this->NumberOfSoundRecordingsClaimedInCarrier;
	}

	public function setNumberOfSoundRecordingsClaimedInCarrier(string $NumberOfSoundRecordingsClaimedInCarrier): void {
		$this->NumberOfSoundRecordingsClaimedInCarrier = $NumberOfSoundRecordingsClaimedInCarrier;
	}

	/**
	 *
	 * @var string
	 */
	private string $CompilationType;

	public function getCompilationType(): string {
		return $this->CompilationType;
	}

	public function setCompilationType(string $CompilationType): void {
		$this->CompilationType = $CompilationType;
	}

	/**
	 *
	 * @var string
	 */
	private string $IsPhysicalDistribution;

	public function getIsPhysicalDistribution(): string {
		return $this->IsPhysicalDistribution;
	}

	public function setIsPhysicalDistribution(string $IsPhysicalDistribution): void {
		$this->IsPhysicalDistribution = $IsPhysicalDistribution;
	}

	/**
	 *
	 * @var string
	 */
	private string $IsHiddenResource;

	public function getIsHiddenResource(): string {
		return $this->IsHiddenResource;
	}

	public function setIsHiddenResource(string $IsHiddenResource): void {
		$this->IsHiddenResource = $IsHiddenResource;
	}

	/**
	 *
	 * @var string
	 */
	private string $IsBonusResource;

	public function getIsBonusResource(): string {
		return $this->IsBonusResource;
	}

	public function setIsBonusResource(string $IsBonusResource): void {
		$this->IsBonusResource = $IsBonusResource;
	}

	/**
	 *
	 * @var string
	 */
	private string $IsInternalCompilation;

	public function getIsInternalCompilation(): string {
		return $this->IsInternalCompilation;
	}

	public function setIsInternalCompilation(string $IsInternalCompilation): void {
		$this->IsInternalCompilation = $IsInternalCompilation;
	}

}
