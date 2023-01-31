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

use DateInterval;
use DateTimeImmutable;
use DedexBundle\Entity\Ern382\SoundRecordingDetailsByTerritoryType;
use DedexBundle\Entity\Ern382\SoundRecordingType;
use Exception;
use Throwable;

/**
 * A track object with handy getters to access directly DDEX content
 *
 * @author Mickaël Arcos <miqwit>
 */
class SimpleTrack extends SimpleEntity {

	/**
	 *
	 * @var SoundRecordingDetailsByTerritoryType 
	 */
	private $ddexDetails;

	/**
	 * @var SoundRecordingType
	 */
	private $ddexSoundrecording;
	
	/**
	 *
	 * @var SimpleDeal
	 */
	private $deal;

	/**
	 * @param SoundRecordingType $soundrecording
	 */
	public function __construct($soundrecording, ?SimpleDeal $deal) {
		$this->ddexSoundrecording = $soundrecording;
		$this->deal = $deal;

		$this->ddexDetails = $this->getDetailsByTerritory($soundrecording, "soundrecording", "worldwide");
	}
  
  /**
   * Return SoundRecording ddex object
   * @return type
   */
  public function getDdexSoundRecording() {
    return $this->ddexSoundrecording;
  }

	/**
	 * @return string FilePath as given in dedex or empty string if not specified
	 */
	public function getFilePath() {
		try {
			return $this->ddexDetails->getTechnicalSoundRecordingDetails()[0]->getFile()[0]->getFilePath();
		} catch (Throwable $ex) {
			return "";
		}
	}

	/**
	 * @return string FileName as given in dedex or empty string if not specified
	 */
	public function getFileName() {
		try {
			return $this->ddexDetails->getTechnicalSoundRecordingDetails()[0]->getFile()[0]->getFileName();
		} catch (Throwable $ex) {
			return "";
		}
	}

	/**
	 * @return string Concatenation of path and name, as we would normally use this
	 */
	public function getFullPath() {
		if (empty($this->getFilePath())) {
			return $this->getFileName();
		}
		
		$ds = DIRECTORY_SEPARATOR;
		return trim(preg_replace('#('.$ds.'{2,})#', $ds, $this->getFilePath() . DIRECTORY_SEPARATOR . $this->getFileName()), $ds);
	}

	/**
	 * @return string or null
	 */
	public function getIsrc(): ?string {
		try {
			return $this->ddexSoundrecording->getSoundRecordingId()[0]->getISRC();
		} catch (Throwable $ex) {
			return null;
		}
	}

	/**
	 * Fetch the title as given in the ReferenceTitle tag
	 * 
	 * @return string|null
	 */
	private function getReferenceTitle(): ?string {
		try {
			return $this->ddexSoundrecording->getReferenceTitle()->getTitleText()->value();
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
	 * Get the title as in the Title tag with attribute DisplayTitle.
	 * @see $this->getTitleByType
	 * 
	 * @return string|null
	 */
	private function getDisplayTitle(): ?string {
		return $this->getTitleByType("displaytitle");
	}

	/**
	 * Get the title as in the Title tag with attribute FormalTitle.
	 * @see $this->getTitleByType
	 * 
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
	 * Returns duration as specified in XML, in ISO format like PT0H8M7S.
	 * 
	 * If you need seconds, @see getDurationInSeconds()
	 * 
	 * @return string|null
	 */
	public function getDurationIso(): ?string {
		try {
			return $this->ddexSoundrecording->getDuration()->format("PT%hH%iM%sS");
		} catch (Throwable $ex) {
			return null;
		} catch (Exception $ex) {
			return null;
		}
	}

	/**
	 * Converts a dateinterval to seconds
	 * 
	 * @param DateInterval $dateInterval
	 * @return int seconds
	 */
	private function dateIntervalToSeconds($dateInterval) {
		$reference = new DateTimeImmutable();
		$endTime = $reference->add($dateInterval);

		return $endTime->getTimestamp() - $reference->getTimestamp();
	}

	/**
	 * Converts ISO date to seconds 
	 * 
	 * @return int|null
	 */
	public function getDurationInSeconds(): ?int {
		if ($this->getDurationIso() === null) {
			return null;
		}

		try {
			$dateinterval = new DateInterval($this->getDurationIso());
			return $this->dateIntervalToSeconds($dateinterval);
		} catch (Throwable $ex) {
			return null;
		}
	}
	
	/**
	 * 
	 * @return SimpleArtist[]
	 */
	public function getDisplayArtists() {
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
	 * 
	 * @return SimpleArtist
	 */
	public function getArtistsFromResourceContributors() {
		$artists = [];
		
		foreach ($this->ddexDetails->getResourceContributor() as $artist) {
			try {
				$name = $artist->getPartyName()[0]->getFullName();
				$role = $this->getUserDefinedValue($artist->getResourceContributorRole()[0]);
				$artists[] = new SimpleArtist($name, $role);
			} catch (Throwable $ex) {
				// skip this artist
				continue;
			}
		}
		
		return $artists;
	}
	
	/**
	 * 
	 * @return SimpleArtist
	 */
	public function getArtistsFromIndirectResourceContributors() {
		$artists = [];
		
		foreach ($this->ddexDetails->getIndirectResourceContributor() as $artist) {
			try {
				$name = $artist->getPartyName()[0]->getFullName();
				$role = $this->getUserDefinedValue($artist->getIndirectResourceContributorRole()[0]);
				$artists[] = new SimpleArtist($name, $role);
			} catch (Throwable $ex) {
				// skip this artist
				continue;
			}
		}
		
		return $artists;
	}
	
	/**
	 * Concatenate DisplayArtists, ResourceContributors and IndirectResourceContributors
	 * in the same array.
	 * 
	 * Ignores sequence numbering. Keep the order as written in the XML.
	 * 
	 * @return SimpleArtist[]
	 */
	public function getArtists() {
		// Display artists
		$artists = array_merge(
						$this->getDisplayArtists(),
						$this->getArtistsFromResourceContributors(),
						$this->getArtistsFromIndirectResourceContributors()
		);
		
		return $artists;
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
			return (int) $this->ddexDetails->getPLine()[0]->getYear();
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
			return $this->ddexDetails->getPLine()[0]->getPLineText();
		} catch (Throwable $ex) {
			return null;
		} catch (Exception $ex) {
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
		} catch (Exception $ex) {
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
		} catch (Exception $ex) {
			return null;
		}
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
		} catch (Exception $ex) {
			return null;
		}
	}
	
	/**
	 * Supposes one file technical details and one hash sum.
	 * 
	 * @return string|null
	 */
	public function getHashSum(): ?string {
		try {
			return $this->ddexDetails->getTechnicalSoundRecordingDetails()[0]->getFile()[0]->getHashSum()->getHashSum();
		} catch (Throwable $ex) {
			return null;
		} catch (Exception $ex) {
			return null;
		}
	}
	
	/**
	 * Supposes one file technical details and one hash sum.
	 * 
	 * @return string|null
	 */
	public function getHashSumAlgorithm(): ?string {
		try {
			return $this->getUserDefinedValue($this->ddexDetails->getTechnicalSoundRecordingDetails()[0]->getFile()[0]->getHashSum()->getHashSumAlgorithmType());
		} catch (Throwable $ex) {
			return null;
		} catch (Exception $ex) {
			return null;
		}
	}
	
	/**
	 * @return SimpleDeal|null
	 */
	public function getDeal(): ?SimpleDeal {
		return $this->deal;
	}

}
