<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing ReleaseVisibilityType
 *
 * A Composite containing details of Dates specifying when a Release can be shown to Consumers.
 * XSD Type: ReleaseVisibility
 */
class ReleaseVisibilityType
{
    /**
     * A Flag indicating whether a DSP shall show the availability dates to Consumers (=false) or not (=true). Absence of a this Flag means that no restriction is communicated. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $doNotDisplayDates
     */
    private $doNotDisplayDates = null;

    /**
     * The Identifier (specific to the Message) of the visibility date. This is a LocalVisibilityAnchor starting with the letter V.
     *
     * @var string $visibilityReference
     */
    private $visibilityReference = null;

    /**
     * A Territory in which the visibility dates apply. Either this Element or ExcludedTerritory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory in which the visibility dates do not apply. Either this Element or Territory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A DateTime on which the Release is made first available for display. If no ReleaseDisplayStartDateTime is provided, the StartDate for the Deal is used instead. The ReleaseDisplayStartDateTime may not be later than the StartDate for the Deal. If the MessageRecipient is not able to cater for such granular display policies, the MessageRecipient may be forced to not display any Release information until a much later date. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @var \DateTime $releaseDisplayStartDateTime
     */
    private $releaseDisplayStartDateTime = null;

    /**
     * A DateTime on which the cover art is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no CoverArtPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The CoverArtPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @var \DateTime $coverArtPreviewStartDateTime
     */
    private $coverArtPreviewStartDateTime = null;

    /**
     * A DateTime on which the full Track list is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no TrackListingPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The TrackListingPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This element is not applicable on Track Releases. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @var \DateTime $fullTrackListingPreviewStartDateTime
     */
    private $fullTrackListingPreviewStartDateTime = null;

    /**
     * A DateTime on which an audio or video clip (of type preview only) is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). This may only be used if there is no TrackRelease composite in the NewReleaseMessage. If no ClipPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The ClipPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @var \DateTime $clipPreviewStartDateTime
     */
    private $clipPreviewStartDateTime = null;

    /**
     * Gets as doNotDisplayDates
     *
     * A Flag indicating whether a DSP shall show the availability dates to Consumers (=false) or not (=true). Absence of a this Flag means that no restriction is communicated. This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getDoNotDisplayDates()
    {
        return $this->doNotDisplayDates;
    }

    /**
     * Sets a new doNotDisplayDates
     *
     * A Flag indicating whether a DSP shall show the availability dates to Consumers (=false) or not (=true). Absence of a this Flag means that no restriction is communicated. This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $doNotDisplayDates
     * @return self
     */
    public function setDoNotDisplayDates($doNotDisplayDates)
    {
        $this->doNotDisplayDates = $doNotDisplayDates;
        return $this;
    }

    /**
     * Gets as visibilityReference
     *
     * The Identifier (specific to the Message) of the visibility date. This is a LocalVisibilityAnchor starting with the letter V.
     *
     * @return string
     */
    public function getVisibilityReference()
    {
        return $this->visibilityReference;
    }

    /**
     * Sets a new visibilityReference
     *
     * The Identifier (specific to the Message) of the visibility date. This is a LocalVisibilityAnchor starting with the letter V.
     *
     * @param string $visibilityReference
     * @return self
     */
    public function setVisibilityReference($visibilityReference)
    {
        $this->visibilityReference = $visibilityReference;
        return $this;
    }

    /**
     * Adds as territoryCode
     *
     * A Territory in which the visibility dates apply. Either this Element or ExcludedTerritory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType $territoryCode
     */
    public function addToTerritoryCode(\DedexBundle\Entity\Ern43\CurrentTerritoryCodeType $territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory in which the visibility dates apply. Either this Element or ExcludedTerritory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryCode($index)
    {
        return isset($this->territoryCode[$index]);
    }

    /**
     * unset territoryCode
     *
     * A Territory in which the visibility dates apply. Either this Element or ExcludedTerritory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryCode($index)
    {
        unset($this->territoryCode[$index]);
    }

    /**
     * Gets as territoryCode
     *
     * A Territory in which the visibility dates apply. Either this Element or ExcludedTerritory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory in which the visibility dates apply. Either this Element or ExcludedTerritory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType[] $territoryCode
     * @return self
     */
    public function setTerritoryCode(array $territoryCode = null)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Adds as excludedTerritoryCode
     *
     * A Territory in which the visibility dates do not apply. Either this Element or Territory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode(\DedexBundle\Entity\Ern43\CurrentTerritoryCodeType $excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A Territory in which the visibility dates do not apply. Either this Element or Territory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludedTerritoryCode($index)
    {
        return isset($this->excludedTerritoryCode[$index]);
    }

    /**
     * unset excludedTerritoryCode
     *
     * A Territory in which the visibility dates do not apply. Either this Element or Territory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludedTerritoryCode($index)
    {
        unset($this->excludedTerritoryCode[$index]);
    }

    /**
     * Gets as excludedTerritoryCode
     *
     * A Territory in which the visibility dates do not apply. Either this Element or Territory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A Territory in which the visibility dates do not apply. Either this Element or Territory must be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType[] $excludedTerritoryCode
     * @return self
     */
    public function setExcludedTerritoryCode(array $excludedTerritoryCode = null)
    {
        $this->excludedTerritoryCode = $excludedTerritoryCode;
        return $this;
    }

    /**
     * Gets as releaseDisplayStartDateTime
     *
     * A DateTime on which the Release is made first available for display. If no ReleaseDisplayStartDateTime is provided, the StartDate for the Deal is used instead. The ReleaseDisplayStartDateTime may not be later than the StartDate for the Deal. If the MessageRecipient is not able to cater for such granular display policies, the MessageRecipient may be forced to not display any Release information until a much later date. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @return \DateTime
     */
    public function getReleaseDisplayStartDateTime()
    {
        return $this->releaseDisplayStartDateTime;
    }

    /**
     * Sets a new releaseDisplayStartDateTime
     *
     * A DateTime on which the Release is made first available for display. If no ReleaseDisplayStartDateTime is provided, the StartDate for the Deal is used instead. The ReleaseDisplayStartDateTime may not be later than the StartDate for the Deal. If the MessageRecipient is not able to cater for such granular display policies, the MessageRecipient may be forced to not display any Release information until a much later date. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @param \DateTime $releaseDisplayStartDateTime
     * @return self
     */
    public function setReleaseDisplayStartDateTime(?\DateTime $releaseDisplayStartDateTime = null)
    {
        $this->releaseDisplayStartDateTime = $releaseDisplayStartDateTime;
        return $this;
    }

    /**
     * Gets as coverArtPreviewStartDateTime
     *
     * A DateTime on which the cover art is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no CoverArtPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The CoverArtPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @return \DateTime
     */
    public function getCoverArtPreviewStartDateTime()
    {
        return $this->coverArtPreviewStartDateTime;
    }

    /**
     * Sets a new coverArtPreviewStartDateTime
     *
     * A DateTime on which the cover art is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no CoverArtPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The CoverArtPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @param \DateTime $coverArtPreviewStartDateTime
     * @return self
     */
    public function setCoverArtPreviewStartDateTime(?\DateTime $coverArtPreviewStartDateTime = null)
    {
        $this->coverArtPreviewStartDateTime = $coverArtPreviewStartDateTime;
        return $this;
    }

    /**
     * Gets as fullTrackListingPreviewStartDateTime
     *
     * A DateTime on which the full Track list is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no TrackListingPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The TrackListingPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This element is not applicable on Track Releases. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @return \DateTime
     */
    public function getFullTrackListingPreviewStartDateTime()
    {
        return $this->fullTrackListingPreviewStartDateTime;
    }

    /**
     * Sets a new fullTrackListingPreviewStartDateTime
     *
     * A DateTime on which the full Track list is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no TrackListingPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The TrackListingPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This element is not applicable on Track Releases. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @param \DateTime $fullTrackListingPreviewStartDateTime
     * @return self
     */
    public function setFullTrackListingPreviewStartDateTime(?\DateTime $fullTrackListingPreviewStartDateTime = null)
    {
        $this->fullTrackListingPreviewStartDateTime = $fullTrackListingPreviewStartDateTime;
        return $this;
    }

    /**
     * Gets as clipPreviewStartDateTime
     *
     * A DateTime on which an audio or video clip (of type preview only) is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). This may only be used if there is no TrackRelease composite in the NewReleaseMessage. If no ClipPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The ClipPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @return \DateTime
     */
    public function getClipPreviewStartDateTime()
    {
        return $this->clipPreviewStartDateTime;
    }

    /**
     * Sets a new clipPreviewStartDateTime
     *
     * A DateTime on which an audio or video clip (of type preview only) is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). This may only be used if there is no TrackRelease composite in the NewReleaseMessage. If no ClipPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The ClipPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @param \DateTime $clipPreviewStartDateTime
     * @return self
     */
    public function setClipPreviewStartDateTime(?\DateTime $clipPreviewStartDateTime = null)
    {
        $this->clipPreviewStartDateTime = $clipPreviewStartDateTime;
        return $this;
    }
}

