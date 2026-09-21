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
   * True when this current album is a purged release (to be considered by
   * DSP as a takedown). No tracks or deals or many details expected in this
   * case.
   *
   * @var bool
   */
  private $isPurge;

  /**
   * Party index for ERN 4.x. Maps party references to full names.
   * Null for ERN 3.x where names are inline.
   *
   * @var array|null
   */
  private $partyIndex = null;

  /**
   * Version string as detected by ErnParserController.
   *
   * @var string
   */
  private $version;

  /**
   * @param mixed $ern NewReleaseMessage or PurgeReleaseMessage
   * @param string $version version string as detected by ErnParserController
   */
  public function __construct($ern, string $version) {
    $this->ern = $ern;
    $this->version = $version;

    if ($this->isVersion4x($version)) {
      $this->partyIndex = $this->buildPartyIndex($ern);
    }

    // Special case for PurgedReleasedMessage
    // No releases or deals expected in this case
    $className = (new \ReflectionClass($this->ern))->getShortName();
    if ($className === "PurgeReleaseMessage") {
      $this->ddexReleaseAlbum = $this->ern->getPurgedRelease();
      $this->isPurge = true;
      // Do not continue as most of the rest is irrelevant, like ->getReleaseList
      return $this;
    }

    if ($this->isVersion4x($version)) {
      $this->initFromErn4x();
    } else {
      $this->initFromErn3x();
    }

    return $this;
  }

  /**
   * Initialize from ERN 3.x structure where getReleaseList()->getRelease()
   * returns an array and release details are in DetailsByTerritory.
   */
  private function initFromErn3x() {
    // Find release of type MainRelease from this ERN
    foreach ($this->ern->getReleaseList()->getRelease() as $release) {
      foreach ($release->getReleaseType() as $type) {
        if (in_array(strtolower($type->value()), ["album", "classicalalbum", "single"])) {
          $this->ddexReleaseAlbum = $release;
        } else {
          $this->trackReleasesByReference[$release->getReleaseReference()[0]] = $release;
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
   * Initialize from ERN 4.x structure where getReleaseList()->getRelease()
   * returns a single ReleaseType and there is no DetailsByTerritory.
   */
  private function initFromErn4x() {
    $releaseList = $this->ern->getReleaseList();

    $release = $releaseList->getRelease();
    if ($release === null) {
      throw new Exception("No Album release found in this release message");
    }
    $this->ddexReleaseAlbum = $release;

    // In ERN 4.x, the release object itself acts as the details
    // (no DetailsByTerritory wrapper)
    $this->ddexDetails = $release;

    // Track releases are separate TrackRelease elements
    foreach ($releaseList->getTrackRelease() as $trackRelease) {
      $this->trackReleasesByReference[$trackRelease->getReleaseReference()] = $trackRelease;
    }

    // index deals
    $this->indexDealsByReleaseReference4x();
    $this->deal = $this->dealsByReleaseReference[$this->ddexReleaseAlbum->getReleaseReference()] ?? null;

    // index resources
    $this->indexResourcesByReference();
    $this->indexResourcesFromErn4x();
  }
  
  /**
   * Browe all release deals from ern and store them both in this->dealsByReleaseReference 
   * (such as R1, R2, etc) and this->dealsByResourceReference (such as A1, A2, ...)
   */
  private function indexDealsByReleaseReference() {
    foreach ($this->ern->getDealList()->getReleaseDeal() as $releaseDeal) {
      /* @var $releaseDeal ReleaseDealType */
      $this->dealsByReleaseReference[$releaseDeal->getDealReleaseReference()[0]] = new SimpleDeal($releaseDeal, $this->version);
      
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
   * Index deals for ERN 4.x where a ReleaseDeal can reference multiple
   * releases and TrackRelease has getReleaseResourceReference() directly.
   */
  private function indexDealsByReleaseReference4x() {
    try {
      foreach ($this->ern->getDealList()->getReleaseDeal() as $releaseDeal) {
        $deal = new SimpleDeal($releaseDeal, $this->version);
        foreach ($releaseDeal->getDealReleaseReference() as $ref) {
          $this->dealsByReleaseReference[$ref] = $deal;

          // Map resource reference for track releases
          if (isset($this->trackReleasesByReference[$ref])) {
            $trackRelease = $this->trackReleasesByReference[$ref];
            $resourceRef = $trackRelease->getReleaseResourceReference();
            if ($resourceRef !== null) {
              $this->dealsByResourceReference[$resourceRef] = $releaseDeal;
            }
          }
        }
      }
    } catch (Throwable $ex) {
      // No deals available
    }
  }

  /**
   * Index resources from ERN 4.x structure where ResourceGroup is a single
   * object on the Release, content items use string references, and images
   * are in LinkedReleaseResourceReference.
   */
  private function indexResourcesFromErn4x() {
    $resourceGroup = $this->ddexReleaseAlbum->getResourceGroup();
    if ($resourceGroup === null) {
      return;
    }

    // In ERN 4.x, the ResourceGroup may contain sub-groups (ResourceSubGroupType)
    // or directly contain ResourceGroupContentItems
    $subGroups = $resourceGroup->getResourceGroup();
    if (!empty($subGroups)) {
      // Multi-CD or grouped structure
      foreach ($subGroups as $group_cd) {
        $cd_num = (int) ($group_cd->getSequenceNumber() ?? 1);
        $this->tracksPerCd[$cd_num] = [];
        $this->indexContentItems4x($group_cd->getResourceGroupContentItem(), $cd_num);
      }
    } else {
      // Single group with all content items directly
      $cd_num = 1;
      $this->tracksPerCd[$cd_num] = [];
      $this->indexContentItems4x($resourceGroup->getResourceGroupContentItem(), $cd_num);
    }

    // Image from LinkedReleaseResourceReference on the ResourceGroup
    foreach ($resourceGroup->getLinkedReleaseResourceReference() as $linkedRef) {
      $ref = $linkedRef->value();
      if (array_key_exists($ref, $this->resourcesByReference)) {
        $resource = $this->resourcesByReference[$ref];
        if (strtolower((string) $resource->getType()) === "frontcoverimage") {
          $this->frontCoverImage = new SimpleImage($resource, $this->version);
        }
      }
    }
  }

  /**
   * Index content items from ERN 4.x ResourceGroupContentItem array.
   */
  private function indexContentItems4x(array $contentItems, int $cd_num) {
    // Build set of image references for skipping inline images
    $imageRefs = [];
    foreach ($this->ern->getResourceList()->getImage() as $img) {
      $imageRefs[$img->getResourceReference()] = true;
    }

    foreach ($contentItems as $item) {
      $track_num = (int) $item->getSequenceNumber();
      $track_reference = (string) $item->getReleaseResourceReference();

      if (!array_key_exists($track_reference, $this->resourcesByReference)) {
        continue;
      }

      // Detect inline images (not all ERN 4.x files use LinkedReleaseResourceReference for images)
      if (isset($imageRefs[$track_reference])) {
        $resource = $this->resourcesByReference[$track_reference];
        if (strtolower((string) $resource->getType()) === "frontcoverimage") {
          $this->frontCoverImage = new SimpleImage($resource, $this->version);
        }
        continue;
      }

      $resource = $this->resourcesByReference[$track_reference];

      $track_deal = array_key_exists($track_reference, $this->dealsByResourceReference ?? [])
              ? new SimpleDeal($this->dealsByResourceReference[$track_reference], $this->version)
              : null;

      $this->tracksPerCd[$cd_num][$track_num] = new SimpleTrack($resource, $track_deal, $this->version, $this->partyIndex);
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
//            $this->ern->getResourceList()->getText(),
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
   *   $this->tracksPerCd
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
          $track_deal = array_key_exists($track_reference, $this->dealsByResourceReference ?? []) 
                  ? new SimpleDeal($this->dealsByResourceReference[$track_reference], $this->version) 
                  : null;
          
          $this->tracksPerCd[$cd_num][$track_num] = new SimpleTrack($track, $track_deal, $this->version, $this->partyIndex);
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
              $this->frontCoverImage = new SimpleImage($image, $this->version);
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
   * Get title from ReferenceTitle, or DisplayTitle, FormalTitle,
   * or DisplayTitleText, in that order.
   * @return string|null
   */
  public function getTitle(): ?string {
    if ($this->isVersion4x($this->version)) {
      // ERN 4.x: DisplayTitleText is directly on the Release
      try {
        return $this->ddexReleaseAlbum->getDisplayTitleText()[0]->value();
      } catch (Throwable $ex) {
        return null;
      }
    }

    // ERN 3.x: ReferenceTitle, then DisplayTitle, then FormalTitle
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
    if ($this->isVersion4x($this->version)) {
      // ERN 4.1/4.1.1/4.2: LabelName is a string directly on the Release
      try {
        $label = $this->ddexDetails->getLabelName()[0];
        if ($label !== null) {
          return $label;
        }
      } catch (Throwable $ex) {
        // fall through to releaseLabelReference
      }
      // ERN 4.3: resolve label via releaseLabelReference + partyIndex
        try {
          $ref = (string) $this->ddexDetails->getReleaseLabelReference()[0];
        return $this->partyIndex[$ref] ?? $ref;
        } catch (Throwable $ex) {
          return null;
        }
    }
    // ERN 3.x: LabelName is an object with value()
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
   * @return SimpleArtist[]
   */
  public function getArtists() {
    $displayNames = [];
    if ($this->isVersion4x($this->version)) {
      $displayNames = $this->ddexDetails->getDisplayArtistName() ?? [];
    }
    return $this->resolveDisplayArtists($this->ddexDetails->getDisplayArtist(), $this->partyIndex, $displayNames);
  }
  
  /**
   * Assumption: only one parental warning type
   * 
   * @return string|null
   */
  public function getParentalWarningType(): ?string {
    if ($this->isVersion4x($this->version)) {
      // ERN 4.x: ParentalWarningType has value() method
      try {
        return $this->ddexDetails->getParentalWarningType()[0]->value();
      } catch (Throwable $ex) {
        return null;
      }
    }
    // ERN 3.x: ParentalWarningType may be a UserDefinedValue
    try {
      return $this->getUserDefinedValue($this->ddexDetails->getParentalWarningType()[0]);
    } catch (Throwable $ex) {
      return null;
    }
  }
  
  /**
   * First genre composite of the release. The element is named Genre up to
   * ERN 4.3 and DisplayGenre from ERN 4.3.1.
   *
   * @return mixed the GenreWithTerritory object of the current ERN version
   */
  private function getGenreComposite() {
    if ($this->isVersion431OrLater($this->version)) {
      return $this->ddexDetails->getDisplayGenre()[0];
    }
    return $this->ddexDetails->getGenre()[0];
  }

  /**
   * Assumption: only one genre
   * 
   * @return string|null
   */
  public function getGenre(): ?string {
    if ($this->isVersion4x($this->version)) {
      // ERN 4.x: GenreText is a string directly
      try {
        return $this->getGenreComposite()->getGenreText();
      } catch (Throwable $ex) {
        return null;
      }
    }
    // ERN 3.x: GenreText is an object with value()
    try {
      return $this->ddexDetails->getGenre()[0]->getGenreText()->value();
    } catch (Throwable $ex) {
      return null;
    }
  }
  
  /**
   * Assumption: only one subgenre
   * 
   * @return string|null
   */
  public function getSubGenre(): ?string {
    if ($this->isVersion4x($this->version)) {
      // ERN 4.x: SubGenre is a string directly
      try {
        return $this->getGenreComposite()->getSubGenre();
      } catch (Throwable $ex) {
        return null;
      }
    }
    // ERN 3.x: SubGenre is an object with value()
    try {
      return $this->ddexDetails->getGenre()[0]->getSubGenre()->value();
    } catch (Throwable $ex) {
      return null;
    }
  }
  
  /**
   * 
   * @return DateTimeImmutable
   */
  public function getOriginalReleaseDate(): ?DateTimeImmutable {
    if ($this->isVersion4x($this->version)) {
      // ERN 4.x: OriginalReleaseDate is an array of strings
      try {
        $dates = $this->ddexDetails->getOriginalReleaseDate();
        if (count($dates) > 0) {
          return DateTimeImmutable::createFromFormat("Y-m-d", $dates[0]) ?: null;
        }
      } catch (Throwable $ex) {
        return null;
      }
      return null;
    }
    // ERN 3.x: OriginalReleaseDate is an object with value()
    try {
      return DateTimeImmutable::createFromFormat("Y-m-d", $this->ddexDetails->getOriginalReleaseDate()->value()) ?: null;
    } catch (Throwable $ex) {
      return null;
    }
  }
  
  /**
   * 
   * @return DateTimeImmutable
   */
  public function getOriginalDigitalReleaseDate(): ?DateTimeImmutable {
    if ($this->isVersion4x($this->version)) {
      // ERN 4.x: no OriginalDigitalReleaseDate
      return null;
    }
    // ERN 3.x: OriginalDigitalReleaseDate is an object with value()
    try {
      return DateTimeImmutable::createFromFormat("Y-m-d", $this->ddexDetails->getOriginalDigitalReleaseDate()->value()) ?: null;
    } catch (Throwable $ex) {
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
    }
  }
  
  /**
   * Assumption: there is only one ReleaseId
   * 
   * @return string|null
   */
  public function getGrid(): ?string {
    if ($this->isVersion4x($this->version)) {
      // ERN 4.x: ReleaseId is a single object
      try {
        return $this->ddexReleaseAlbum->getReleaseId()->getGRid();
      } catch (Throwable $ex) {
        return null;
      }
    }
    // ERN 3.x: ReleaseId is an array
    try {
      return $this->ddexReleaseAlbum->getReleaseId()[0]->getGRid();
    } catch (Throwable $ex) {
      return null;
    }
  }
  
  /**
   * Assumption: there is only one ReleaseId
   * 
   * @return string|null
   */
  public function getIcpn(): ?string {
    if ($this->isVersion4x($this->version)) {
      // ERN 4.x: ReleaseId is a single object
      try {
        return $this->ddexReleaseAlbum->getReleaseId()->getICPN();
      } catch (Throwable $ex) {
        return null;
      }
    }
    // ERN 3.x: ReleaseId is an array
    try {
      return $this->ddexReleaseAlbum->getReleaseId()[0]->getICPN();
    } catch (Throwable $ex) {
      return null;
    }
  }
  
  /**
   * Assumption: there is only one ReleaseId
   * 
   * @return string|null
   */
  public function getCatalogNumber(): ?string {
    if ($this->isVersion4x($this->version)) {
      // ERN 4.x: ReleaseId is a single object
      try {
        return $this->ddexReleaseAlbum->getReleaseId()->getCatalogNumber();
      } catch (Throwable $ex) {
        return null;
      }
    }
    // ERN 3.x: ReleaseId is an array
    try {
      return $this->ddexReleaseAlbum->getReleaseId()[0]->getCatalogNumber();
    } catch (Throwable $ex) {
      return null;
    }
  }
  
  /**
   * A release is considered a take down if it's a PurgedAlbum or if there
   * is no deal.
   * 
   * @see https://kb.ddex.net/display/HBK/Takedowns
   * @return bool
   */
  public function isTakedown(): bool {
    return $this->isPurge || $this->getDeal() === null;
  }
  
  /**
   * Returns true if this album is a purged album.
   * 
   * @see also function isTakedown
   * @return bool
   */
  public function isPurge(): bool {
    return $this->isPurge;
  }

}
