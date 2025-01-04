<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing RelatedReleaseType
 *
 * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to a Resource, Release or Product.
 * XSD Type: RelatedRelease
 */
class RelatedReleaseType
{
    /**
     * A Composite containing details of the Type of the relationship between the two Releases.
     *
     * @var \DedexBundle\Entity\Ern43\ReleaseRelationshipTypeType $releaseRelationshipType
     */
    private $releaseRelationshipType = null;

    /**
     * A Composite containing details of ReleaseIds. If available, a GRid shall always to be used. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @var \DedexBundle\Entity\Ern43\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     *
     * @var \DedexBundle\Entity\Ern43\DisplayTitleTextType[] $displayTitleText
     */
    private $displayTitleText = [
        
    ];

    /**
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @var \DedexBundle\Entity\Ern43\DisplayTitleType[] $displayTitle
     */
    private $displayTitle = [
        
    ];

    /**
     * A Composite containing details of an AdditionalTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @var \DedexBundle\Entity\Ern43\AdditionalTitleType[] $additionalTitle
     */
    private $additionalTitle = [
        
    ];

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/genres
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @var \DedexBundle\Entity\Ern43\DisplayArtistNameWithDefaultType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A Reference for a label of the Release (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var \DedexBundle\Entity\Ern43\ReleaseLabelReferenceType[] $releaseLabelReference
     */
    private $releaseLabelReference = [
        
    ];

    /**
     * A Composite containing details of the Date and Place of the Event in which the related Release was or will be first made available for Usage in its current form, whether for physical or electronic/online distribution (in ISO 8601 format: YYYY-MM-DD).
     *
     * @var \DedexBundle\Entity\Ern43\EventDateWithoutFlagsType $releaseDate
     */
    private $releaseDate = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the collection of tracks for the Release (e.g. the equivalent physical album on vinyl) was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601 format: YYYY-MM-DD).
     *
     * @var \DedexBundle\Entity\Ern43\EventDateWithoutFlagsType $originalReleaseDate
     */
    private $originalReleaseDate = null;

    /**
     * Gets as releaseRelationshipType
     *
     * A Composite containing details of the Type of the relationship between the two Releases.
     *
     * @return \DedexBundle\Entity\Ern43\ReleaseRelationshipTypeType
     */
    public function getReleaseRelationshipType()
    {
        return $this->releaseRelationshipType;
    }

    /**
     * Sets a new releaseRelationshipType
     *
     * A Composite containing details of the Type of the relationship between the two Releases.
     *
     * @param \DedexBundle\Entity\Ern43\ReleaseRelationshipTypeType $releaseRelationshipType
     * @return self
     */
    public function setReleaseRelationshipType(\DedexBundle\Entity\Ern43\ReleaseRelationshipTypeType $releaseRelationshipType)
    {
        $this->releaseRelationshipType = $releaseRelationshipType;
        return $this;
    }

    /**
     * Gets as releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid shall always to be used. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @return \DedexBundle\Entity\Ern43\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid shall always to be used. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @param \DedexBundle\Entity\Ern43\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(\DedexBundle\Entity\Ern43\ReleaseIdType $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Adds as displayTitleText
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\DisplayTitleTextType $displayTitleText
     */
    public function addToDisplayTitleText(\DedexBundle\Entity\Ern43\DisplayTitleTextType $displayTitleText)
    {
        $this->displayTitleText[] = $displayTitleText;
        return $this;
    }

    /**
     * isset displayTitleText
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayTitleText($index)
    {
        return isset($this->displayTitleText[$index]);
    }

    /**
     * unset displayTitleText
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayTitleText($index)
    {
        unset($this->displayTitleText[$index]);
    }

    /**
     * Gets as displayTitleText
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     *
     * @return \DedexBundle\Entity\Ern43\DisplayTitleTextType[]
     */
    public function getDisplayTitleText()
    {
        return $this->displayTitleText;
    }

    /**
     * Sets a new displayTitleText
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     *
     * @param \DedexBundle\Entity\Ern43\DisplayTitleTextType[] $displayTitleText
     * @return self
     */
    public function setDisplayTitleText(array $displayTitleText = null)
    {
        $this->displayTitleText = $displayTitleText;
        return $this;
    }

    /**
     * Adds as displayTitle
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\DisplayTitleType $displayTitle
     */
    public function addToDisplayTitle(\DedexBundle\Entity\Ern43\DisplayTitleType $displayTitle)
    {
        $this->displayTitle[] = $displayTitle;
        return $this;
    }

    /**
     * isset displayTitle
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayTitle($index)
    {
        return isset($this->displayTitle[$index]);
    }

    /**
     * unset displayTitle
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayTitle($index)
    {
        unset($this->displayTitle[$index]);
    }

    /**
     * Gets as displayTitle
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @return \DedexBundle\Entity\Ern43\DisplayTitleType[]
     */
    public function getDisplayTitle()
    {
        return $this->displayTitle;
    }

    /**
     * Sets a new displayTitle
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @param \DedexBundle\Entity\Ern43\DisplayTitleType[] $displayTitle
     * @return self
     */
    public function setDisplayTitle(array $displayTitle = null)
    {
        $this->displayTitle = $displayTitle;
        return $this;
    }

    /**
     * Adds as additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\AdditionalTitleType $additionalTitle
     */
    public function addToAdditionalTitle(\DedexBundle\Entity\Ern43\AdditionalTitleType $additionalTitle)
    {
        $this->additionalTitle[] = $additionalTitle;
        return $this;
    }

    /**
     * isset additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalTitle($index)
    {
        return isset($this->additionalTitle[$index]);
    }

    /**
     * unset additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalTitle($index)
    {
        unset($this->additionalTitle[$index]);
    }

    /**
     * Gets as additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return \DedexBundle\Entity\Ern43\AdditionalTitleType[]
     */
    public function getAdditionalTitle()
    {
        return $this->additionalTitle;
    }

    /**
     * Sets a new additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param \DedexBundle\Entity\Ern43\AdditionalTitleType[] $additionalTitle
     * @return self
     */
    public function setAdditionalTitle(array $additionalTitle = null)
    {
        $this->additionalTitle = $additionalTitle;
        return $this;
    }

    /**
     * Adds as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/genres
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\DisplayArtistNameWithDefaultType $displayArtistName
     */
    public function addToDisplayArtistName(\DedexBundle\Entity\Ern43\DisplayArtistNameWithDefaultType $displayArtistName)
    {
        $this->displayArtistName[] = $displayArtistName;
        return $this;
    }

    /**
     * isset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/genres
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayArtistName($index)
    {
        return isset($this->displayArtistName[$index]);
    }

    /**
     * unset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/genres
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayArtistName($index)
    {
        unset($this->displayArtistName[$index]);
    }

    /**
     * Gets as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/genres
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @return \DedexBundle\Entity\Ern43\DisplayArtistNameWithDefaultType[]
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/genres
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @param \DedexBundle\Entity\Ern43\DisplayArtistNameWithDefaultType[] $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(array $displayArtistName = null)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as releaseLabelReference
     *
     * A Reference for a label of the Release (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\ReleaseLabelReferenceType $releaseLabelReference
     */
    public function addToReleaseLabelReference(\DedexBundle\Entity\Ern43\ReleaseLabelReferenceType $releaseLabelReference)
    {
        $this->releaseLabelReference[] = $releaseLabelReference;
        return $this;
    }

    /**
     * isset releaseLabelReference
     *
     * A Reference for a label of the Release (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseLabelReference($index)
    {
        return isset($this->releaseLabelReference[$index]);
    }

    /**
     * unset releaseLabelReference
     *
     * A Reference for a label of the Release (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseLabelReference($index)
    {
        unset($this->releaseLabelReference[$index]);
    }

    /**
     * Gets as releaseLabelReference
     *
     * A Reference for a label of the Release (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return \DedexBundle\Entity\Ern43\ReleaseLabelReferenceType[]
     */
    public function getReleaseLabelReference()
    {
        return $this->releaseLabelReference;
    }

    /**
     * Sets a new releaseLabelReference
     *
     * A Reference for a label of the Release (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param \DedexBundle\Entity\Ern43\ReleaseLabelReferenceType[] $releaseLabelReference
     * @return self
     */
    public function setReleaseLabelReference(array $releaseLabelReference = null)
    {
        $this->releaseLabelReference = $releaseLabelReference;
        return $this;
    }

    /**
     * Gets as releaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the related Release was or will be first made available for Usage in its current form, whether for physical or electronic/online distribution (in ISO 8601 format: YYYY-MM-DD).
     *
     * @return \DedexBundle\Entity\Ern43\EventDateWithoutFlagsType
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Sets a new releaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the related Release was or will be first made available for Usage in its current form, whether for physical or electronic/online distribution (in ISO 8601 format: YYYY-MM-DD).
     *
     * @param \DedexBundle\Entity\Ern43\EventDateWithoutFlagsType $releaseDate
     * @return self
     */
    public function setReleaseDate(?\DedexBundle\Entity\Ern43\EventDateWithoutFlagsType $releaseDate = null)
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    /**
     * Gets as originalReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the collection of tracks for the Release (e.g. the equivalent physical album on vinyl) was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601 format: YYYY-MM-DD).
     *
     * @return \DedexBundle\Entity\Ern43\EventDateWithoutFlagsType
     */
    public function getOriginalReleaseDate()
    {
        return $this->originalReleaseDate;
    }

    /**
     * Sets a new originalReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the collection of tracks for the Release (e.g. the equivalent physical album on vinyl) was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601 format: YYYY-MM-DD).
     *
     * @param \DedexBundle\Entity\Ern43\EventDateWithoutFlagsType $originalReleaseDate
     * @return self
     */
    public function setOriginalReleaseDate(?\DedexBundle\Entity\Ern43\EventDateWithoutFlagsType $originalReleaseDate = null)
    {
        $this->originalReleaseDate = $originalReleaseDate;
        return $this;
    }
}

