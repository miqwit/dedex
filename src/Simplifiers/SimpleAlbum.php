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

namespace DedexBundle\Simplifiers;

use DateTime;
use DateTimeImmutable;
use DedexBundle\Entity\Ern382\ImageType;
use DedexBundle\Entity\Ern382\NewReleaseMessage;
use DedexBundle\Entity\Ern382\ReleaseDealType;
use DedexBundle\Entity\Ern382\ReleaseDetailsByTerritoryType;
use DedexBundle\Entity\Ern382\ReleaseType;
use Exception;
use Throwable;

/**
 * A simplified release album.
 * Consider only country Worldwide.
 * Expects one deal for the release, and one deal per track.
 *
 * @author Mickaël Arcos <miqwit>
 */
class SimpleAlbum extends SimpleEntity {

	/**
	 * @var NewReleaseMessage 
	 */
	private $ern;

	/**
	 * @var ReleaseType 
	 */
	private $ddexReleaseAlbum;

	/**
	 *
	 * @var ReleaseDetailsByTerritoryType
	 */
	private $ddexDetails;

	/**
	 * Index is reference, like "A10". The resource can be a SoundRecording, 
	 * an Image, etc.
	 * 
	 * @var array
	 */
	private $resourcesByReference;

	/**
	 * @var SimpleImage
	 */
	private $frontCoverImage;

	/**
	 * Sound recordings indexed by cd_num and track_num
	 * For example $tracksPerCd[1][5] is the fifth track of CD 1.
	 * Index starts at 1. It is a string in the XML, converted to int here.
	 * 
	 * @var array 
	 */
	private $tracksPerCd = [];
	
	/**
	 * @var array
	 */
	private $dealsByReleaseReference;
	/**
	 * "A2" => deal
	 * @var array
	 */
	private $dealsByResourceReference;
	
	/**
	 * @var array
	 */
	private $trackReleasesByReference;
	
	/**
	 * @var SimpleDeal
	 */
	private $deal;

	/**
	 * @param NewReleaseMessage $ern type DedexBundle\Entity\Ern382\NewReleaseMessage or
	 * DedexBundle\Entity\Ern4&\NewReleaseMessage
	 */
	public function __construct($ern) {
		$this->ern = $ern;

		// Find release of type MainRelease from this ERN
		foreach ($this->ern->getReleaseList()->getRelease() as $release) {
			foreach ($release->getReleaseType() as $type) {
                if (strtolower($type->value()) === 'trackrelease') {
					$this->trackReleasesByReference[$release->getReleaseReference()[0]] = $release;
				} else {
					$this->ddexReleaseAlbum = $release;
				}
			}
		}

		if ($this->ddexReleaseAlbum === null) {
			throw new Exception("No Album release found in this release message");
		}
		
		// index deals
		$this->indexDealsByReleaseReference();
		$this->deal = $this->dealsByReleaseReference[$this->ddexReleaseAlbum->getReleaseReference()[0]];
		
		// index resources
		$this->ddexDetails = $this->getDetailsByTerritory($this->ddexReleaseAlbum, "release", "worldwide");
		$this->indexResources();
	}
	
	/**
	 * Browe all release deals from ern and store them both in this->dealsByReleaseReference 
	 * (such as R1, R2, etc) and this->dealsByResourceReference (such as A1, A2, ...)
	 */
	private function indexDealsByReleaseReference() {
		foreach ($this->ern->getDealList()->getReleaseDeal() as $releaseDeal) {
			/* @var $releaseDeal ReleaseDealType */
			$this->dealsByReleaseReference[$releaseDeal->getDealReleaseReference()[0]] = new SimpleDeal($releaseDeal);
			
			// find release for this deal
			$deal_release_reference = $releaseDeal->getDealReleaseReference()[0];
			if (!array_key_exists($deal_release_reference, $this->trackReleasesByReference)) {
				// This is the album release
				continue;
			}
			
			$corresponding_track_release = $this->trackReleasesByReference[$deal_release_reference];
			$resource_ref = $this->getResourcesReferencesFromTrackRelease($corresponding_track_release);
			$this->dealsByResourceReference[$resource_ref] = $releaseDeal;
		}
	}
	
	/**
	 * Get the resource references for a given release.
	 * Assumption: each release references only one resource, except the Album release 
	 *   (not covered here)
	 */
	private function getResourcesReferencesFromTrackRelease($release) {
		/* @var $release ReleaseType */
		foreach ($release->getReleaseResourceReferenceList() as $rrrl) {
			if (strtolower($rrrl->getReleaseResourceType()) === "primaryresource") {
				// Suppose there is only one primary resource
				return $rrrl->value();
			}
		}
	}
	
	/**
	 * Return the deals corresponding to the album release
	 * @return SimpleDeal|null
	 */
	public function getDeal(): ?SimpleDeal {
		return $this->deal;
	}

	/**
	 * Only consider SoundRecording and Image and Text
	 */
	private function indexResourcesByReference() {
		$all_resources = array_merge(
						$this->ern->getResourceList()->getSoundRecording(),
						$this->ern->getResourceList()->getImage(),
//						$this->ern->getResourceList()->getText(),
		);
		foreach ($all_resources as $res) {
			$this->resourcesByReference[$res->getResourceReference()] = $res;
		}
	}

	/**
	 * Handler to get a resource by its reference, used in all DDEX file.
	 * Need to call indexResourcesByReference first
	 * 
	 * @param string $reference
	 * @return type
	 * @throws Exception
	 */
	private function getResourceByReference(string $reference) {
		if (!array_key_exists($reference, $this->resourcesByReference)) {
			throw new Exception("This reference $reference was not indexed in this SimpleAlbum, or not found in XML file");
		}

		return $this->resourcesByReference[$reference];
	}

	/**
	 * Populate 
	 * 	$this->tracksPerCd
	 *  $this->frontCoverImage
	 * 
	 * Each track will have its deal attached.
	 */
	private function indexResources() {
		$this->indexResourcesByReference();

		/* @var $release_details ReleaseDetailsByTerritoryType */
		$release_details = $this->getDetailsByTerritory($this->ddexReleaseAlbum, "release", "worldwide");

		// Suppose there is one group level per CD
		foreach ($release_details->getResourceGroup() as $group_main) {
			foreach ($group_main->getResourceGroup() as $group_cd) {
				$cd_num = (int) $group_cd->getSequenceNumber();
				$this->tracksPerCd[$cd_num] = [];

				foreach ($group_cd->getResourceGroupContentItem() as $item) {
					$track_num = (int) $item->getSequenceNumber();
					$track_reference = $item->getReleaseResourceReference()->value();
					
					if (!array_key_exists($track_reference, $this->resourcesByReference)) {
						continue;
					}
					$track = $this->resourcesByReference[$track_reference];
					
					// Find deal for this track (sound recording)
					// Find release first. Assumption: one release per track
					$track_deal = array_key_exists($track_reference, $this->dealsByResourceReference) 
									? new SimpleDeal($this->dealsByResourceReference[$track_reference]) 
									: null;
					
					$this->tracksPerCd[$cd_num][$track_num] = new SimpleTrack($track, $track_deal);
				}
			}

			// Expect images at main level group
			// Only consider FrontCoverImage
			foreach ($group_main->getResourceGroupContentItem() as $item) {
				foreach ($item->getResourceType() as $type) {
					if (strtolower($type->value()) === "image") {
						/* @var $image ImageType */
						$image = $this->getResourceByReference($item->getReleaseResourceReference()->value());
						if (strtolower($image->getImageType()) === "frontcoverimage") {
							$this->frontCoverImage = new SimpleImage($image);
						}
					}
				}
			}
		}
	}

	/**
	 * Return the SimpleImage corresponding to the FrontCover
	 * @return SimpleImage
	 */
	public function getImageFrontCover(): SimpleImage {
		return $this->frontCoverImage;
	}

	/**
	 * First index is CD number (first-level group number) and second one
	 * is the track number in the CD (second-level group number).
	 * 
	 * Indices start at 1, not 0. For exemple $tracks[1][5] is the fifth track
	 * of CD 1. It is of type SimpleTrack.
	 * 
	 * @return array[]
	 */
	public function getTracksPerCd(): array {
		return $this->tracksPerCd;
	}

	/**
	 * Return the DDEX release corresponding to the album
	 * @return ReleaseType
	 */
	public function getDdexRelease() {
		return $this->ddexReleaseAlbum;
	}

	/**
	 * Title as set in the Referencetitle>TitleText tag
	 * @return string|null
	 */
	private function getReferenceTitle(): ?string {
		try {
			return $this->ddexReleaseAlbum->getReferenceTitle()->getTitleText()->value();
		} catch (Throwable $ex) {
			return null;
		}
	}

	/**
	 * Example DisplayTitle or FormalTitle
	 * @param string $type
	 * @return type
	 */
	private function getTitleByType(string $type) {
		try {
			foreach ($this->ddexDetails->getTitle() as $title) {
				if (strtolower($title->getTitleType()) === strtolower($type)) {
					return $title->getTitleText()->value();
				}
			}
		} catch (Throwable $ex) {
			// do nothing
		}

		return null;
	}

	/**
	 * Release title as displayed in the Title of type DisplayTitle
	 * @return string|null
	 */
	private function getDisplayTitle(): ?string {
		return $this->getTitleByType("displaytitle");
	}

	/**
	 * Release title as displayed in the Title of type FormalTitle
	 * @return string|null
	 */
	private function getFormalTitle(): ?string {
		return $this->getTitleByType("formaltitle");
	}

	/**
	 * Get title from ReferenceTitle, or DisplayTitle or FormalTitle, in that order
	 * @return string|null
	 */
	public function getTitle(): ?string {
		$title = $this->getReferenceTitle();

		if ($title === null) {
			$title = $this->getDisplayTitle();
		}

		if ($title === null) {
			$title = $this->getFormalTitle();
		}

		return $title;
	}

	/**
	 * Assumption: there is only one label
	 * 
	 * @return string|null
	 */
	public function getLabelName(): ?string {
		try {
			return $this->ddexDetails->getLabelName()[0]->value();
		} catch (Throwable $ex) {
			return null;
		}
	}

	/**
	 * Concatenate DisplayArtists, ResourceContributors and IndirectResourceContributors
	 * in the same array.
	 * Ignores sequence numbering
	 * @return SimpleArtist
	 */
	public function getArtists() {
		$artists = [];

		foreach ($this->ddexDetails->getDisplayArtist() as $artist) {
			try {
				$name = $artist->getPartyName()[0]->getFullName();
				$role = $this->getUserDefinedValue($artist->getArtistRole()[0]);
				$artists[] = new SimpleArtist($name, $role);
			} catch (Throwable $ex) {
				// skip this artist
				continue;
			}
		}

		return $artists;
	}
	
	/**
	 * Assumption: only one parental warning type
	 * 
	 * @return string|null
	 */
	public function getParentalWarningType(): ?string {
		try {
			return $this->getUserDefinedValue($this->ddexDetails->getParentalWarningType()[0]);
		} catch (Throwable $ex) {
			return null;
		}
	}
	
	/**
	 * Assumption: only one genre
	 * 
	 * @return string|null
	 */
	public function getGenre(): ?string {
		try {
			return $this->ddexDetails->getGenre()[0]->getGenreText()->value();
		} catch (Throwable $ex) {
			return null;
		} catch (Exception $ex) {
			return null;
		}
	}
	
	/**
	 * Assumption: only one subgenre
	 * 
	 * @return string|null
	 */
	public function getSubGenre(): ?string {
		try {
			return $this->ddexDetails->getGenre()[0]->getSubGenre()->value();
		} catch (Throwable $ex) {
			return null;
		} catch (Exception $ex) {
			return null;
		}
	}
	
	/**
	 * 
	 * @return DateTimeImmutable
	 */
	public function getOriginalReleaseDate(): ?DateTimeImmutable {
		try {
			return DateTimeImmutable::createFromFormat("Y-m-d", $this->ddexDetails->getOriginalReleaseDate()->value());
		} catch (Throwable $ex) {
			return null;
		} catch (Exception $ex) {
			return null;
		}
	}
	
	/**
	 * 
	 * @return DateTimeImmutable
	 */
	public function getOriginalDigitalReleaseDate(): ?DateTimeImmutable {
		try {
			return DateTimeImmutable::createFromFormat("Y-m-d", $this->ddexDetails->getOriginalDigitalReleaseDate()->value());
		} catch (Throwable $ex) {
			return null;
		} catch (Exception $ex) {
			return null;
		}
	}
	
	/**
	 * Assumption: there is only one PLine info. Use first one only (if any).
	 * 
	 * @return int|null
	 */
	public function getPLineYear(): ?int {
		try {
			return (int) $this->ddexReleaseAlbum->getPLine()[0]->getYear();
		} catch (Throwable $ex) {
			return null;
		} catch (Exception $ex) {
			return null;
		}
	}
	
	/**
	 * Assumption: there is only one PLine info. Use first one only (if any).
	 * 
	 * @return string|null
	 */
	public function getPLineText(): ?string {
		try {
			return $this->ddexReleaseAlbum->getPLine()[0]->getPLineText();
		} catch (Throwable $ex) {
			return null;
		} catch (Exception $ex) {
			return null;
		}
	}
	
	/**
	 * Assumption: there is only one CLine info. Use first one only (if any).
	 * 
	 * @return int|null
	 */
	public function getCLineYear(): ?int {
		try {
			return (int) $this->ddexReleaseAlbum->getCLine()[0]->getYear();
		} catch (Throwable $ex) {
			return null;
		} catch (Exception $ex) {
			return null;
		}
	}
	
	/**
	 * Assumption: there is only one CLine info. Use first one only (if any).
	 * 
	 * @return string|null
	 */
	public function getCLineText(): ?string {
		try {
			return $this->ddexReleaseAlbum->getCLine()[0]->getCLineText();
		} catch (Throwable $ex) {
			return null;
		} catch (Exception $ex) {
			return null;
		}
	}

}
