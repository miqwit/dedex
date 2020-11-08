<?php

namespace DedexBundle\Simplifiers;

use DateTime;
use DateTimeImmutable;
use DedexBundle\Entity\Ern382\ImageType;
use DedexBundle\Entity\Ern382\NewReleaseMessage;
use DedexBundle\Entity\Ern382\ReleaseDetailsByTerritoryType;
use DedexBundle\Entity\Ern382\ReleaseType;
use Exception;
use Throwable;

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

/**
 * A simplified release album.
 * Consider only country Worldwide.
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
	 * @var type 
	 */
	private $tracksPerCd = [];

	/**
	 * @param NewReleaseMessage $ern type DedexBundle\Entity\Ern382\NewReleaseMessage or
	 * DedexBundle\Entity\Ern4&\NewReleaseMessage
	 */
	public function __construct($ern) {
		$this->ern = $ern;

		// Find release of type MainRelease from this ERN
		foreach ($this->ern->getReleaseList()->getRelease() as $release) {
			foreach ($release->getReleaseType() as $type) {
				if ($type->value() === "Album") {
					$this->ddexReleaseAlbum = $release;
					break 2;
				}
			}
		}

		if ($this->ddexReleaseAlbum === null) {
			throw new Exception("No Album release found in this release message");
		}

		$this->ddexDetails = $this->getDetailsByTerritory($this->ddexReleaseAlbum, "release", "worldwide");
		$this->indexResources();
	}

	/**
	 * Only consider SoundRecording and Image and Text
	 */
	private function indexResourcesByReference() {
		$all_resources = array_merge(
						$this->ern->getResourceList()->getSoundRecording(),
						$this->ern->getResourceList()->getImage(),
						$this->ern->getResourceList()->getText(),
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
					$track = $this->resourcesByReference[$item->getReleaseResourceReference()->value()];
					$this->tracksPerCd[$cd_num][$track_num] = new SimpleTrack($track);
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
	 * @return array
	 */
	public function getTracksPerCd(): array {
		return $this->tracksPerCd;
	}

	/**
	 * 
	 * @return ReleaseType
	 */
	public function getRelease() {
		return $this->ddexReleaseAlbum;
	}

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

	private function getDisplayTitle(): ?string {
		return $this->getTitleByType("displaytitle");
	}

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
	 * Supposes there is only one label. Take first one only (if any).
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
	 * Supposes only one parental warning type
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
	 * Supposes only one genre (and one sub genre)
	 * 
	 * @return string|null
	 */
	public function getGenre(): ?string {
		try {
			return $this->ddexDetails->getGenre()[0]->getGenreText()->value();
		} catch (Throwable $ex) {
			return null;
		}
	}
	
	/**
	 * Supposes only one genre (and one sub genre)
	 * 
	 * @return string|null
	 */
	public function getSubGenre(): ?string {
		try {
			return $this->ddexDetails->getGenre()[0]->getSubGenre()->value();
		} catch (Throwable $ex) {
			return null;
		}
	}
	
	/**
	 * 
	 * @return string|null Formatted YYYY-MM-DD
	 */
	public function getOriginalReleaseDateText(): ?string {
		try {
			return $this->ddexDetails->getOriginalReleaseDate()->value();
		} catch (Exception $ex) {
			return null;
		}
	}
	
	/**
	 * 
	 * @return DateTime
	 */
	public function getOriginalReleaseDate(): ?DateTimeImmutable {
		if ($this->getOriginalReleaseDateText() === null) {
			return null;
		}
		
		return DateTimeImmutable::createFromFormat("Y-m-D", $this->getOriginalReleaseDateText());
	}
	
	/**
	 * 
	 * @return string|null Formatted YYYY-MM-DD
	 */
	public function getOriginalDigitalReleaseDateText(): ?string {
		try {
			return $this->ddexDetails->getOriginalDigitalReleaseDate()->value();
		} catch (Exception $ex) {
			return null;
		}
	}
	
	/**
	 * Spposes there is only one PLine info. Use first one only (if any).
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
	 * Spposes there is only one PLine info. Use first one only (if any).
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
	 * Spposes there is only one CLine info. Use first one only (if any).
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
	 * Spposes there is only one CLine info. Use first one only (if any).
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
