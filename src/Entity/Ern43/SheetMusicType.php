<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing SheetMusicType
 *
 * A Composite containing details of a SheetMusic.
 * XSD Type: SheetMusic
 */
class SheetMusicType
{
    /**
     * The Language and script for the Elements of the SheetMusic as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The Flag indicating whether the SheetMusic is provided in a addition to the Resources that form part of the Release (=true) or not (=false). If the flag is set to false (or absent) the SheetMusic is part of at least one Release in the message. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isSupplemental
     */
    private $isSupplemental = null;

    /**
     * The Identifier (specific to the Message) of the SheetMusic within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A Composite containing details of the Type of the SheetMusic.
     *
     * @var \DedexBundle\Entity\Ern43\SheetMusicTypeType $type
     */
    private $type = null;

    /**
     * A Composite containing details of Identifiers of the SheetMusic.
     *
     * @var \DedexBundle\Entity\Ern43\SheetMusicIdType[] $resourceId
     */
    private $resourceId = [
        
    ];

    /**
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the SheetMusic.
     *
     * @var \DedexBundle\Entity\Ern43\MusicalWorkIdType[] $workId
     */
    private $workId = [
        
    ];

    /**
     * A Composite containing details of a Title of the SheetMusic as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     *
     * @var \DedexBundle\Entity\Ern43\DisplayTitleTextType[] $displayTitleText
     */
    private $displayTitleText = [
        
    ];

    /**
     * A Composite containing details of a Title of the SheetMusic as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @var \DedexBundle\Entity\Ern43\DisplayTitleType[] $displayTitle
     */
    private $displayTitle = [
        
    ];

    /**
     * A Composite containing details of an AdditionalTitle of the SheetMusic. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @var \DedexBundle\Entity\Ern43\AdditionalTitleType[] $additionalTitle
     */
    private $additionalTitle = [
        
    ];

    /**
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one SheetMusic from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a SheetMusic that has been derived from another SheetMusic by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
     *
     * @var \DedexBundle\Entity\Ern43\VersionTypeType[] $versionType
     */
    private $versionType = [
        
    ];

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/genres
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @var \DedexBundle\Entity\Ern43\DisplayArtistNameWithDefaultType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A Composite containing details of the DisplayArtist for the SheetMusic. The DisplayArtist may be described through Name, Identifier and Roles.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/genres
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @var \DedexBundle\Entity\Ern43\DisplayArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * A Composite containing details of a Contributor to the SheetMusic.
     *
     * @var \DedexBundle\Entity\Ern43\ContributorType[] $contributor
     */
    private $contributor = [
        
    ];

    /**
     * A Composite containing details of RightsController of Rights in the SheetMusic.
     *
     * @var \DedexBundle\Entity\Ern43\ResourceRightsControllerType[] $resourceRightsController
     */
    private $resourceRightsController = [
        
    ];

    /**
     * A Composite containing details of RightsController of Rights in the Work.
     *
     * @var \DedexBundle\Entity\Ern43\WorkRightsControllerType[] $workRightsController
     */
    private $workRightsController = [
        
    ];

    /**
     * A Composite containing details of the CLine for the SheetMusic.
     *
     * @var \DedexBundle\Entity\Ern43\CLineWithDefaultType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured in the SheetMusic.
     *
     * @var \DedexBundle\Entity\Ern43\CourtesyLineWithDefaultType[] $courtesyLine
     */
    private $courtesyLine = [
        
    ];

    /**
     * A Composite containing details of the Date and Place of the Event in which the SheetMusic was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern43\EventDateWithoutFlagsType $creationDate
     */
    private $creationDate = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the SheetMusic was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern43\FulfillmentDateWithTerritoryType[] $firstPublicationDate
     */
    private $firstPublicationDate = [
        
    ];

    /**
     * A Composite containing details of the classification of the SheetMusic according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @var \DedexBundle\Entity\Ern43\ParentalWarningTypeWithTerritoryType[] $parentalWarningType
     */
    private $parentalWarningType = [
        
    ];

    /**
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current SheetMusic.
     *
     * @var \DedexBundle\Entity\Ern43\RelatedReleaseType[] $relatedRelease
     */
    private $relatedRelease = [
        
    ];

    /**
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current SheetMusic.
     *
     * @var \DedexBundle\Entity\Ern43\RelatedResourceType[] $relatedResource
     */
    private $relatedResource = [
        
    ];

    /**
     * The Flag indicating whether the SheetMusic contains content that is hidden in some way from the Consumer (=true) or not (=false).
     *
     * @var bool $containsHiddenContent
     */
    private $containsHiddenContent = null;

    /**
     * The Language of the Lyrics of the SheetMusic as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant].
     *
     * @var string $languageOfLyrics
     */
    private $languageOfLyrics = null;

    /**
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current SheetMusic.
     *
     * @var \DedexBundle\Entity\Ern43\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     */
    private $resourceContainedResourceReferenceList = null;

    /**
     * A Composite containing technical details of the SheetMusic.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-binaries/communicating-binaries
     *
     * @var \DedexBundle\Entity\Ern43\TechnicalSheetMusicDetailsType[] $technicalDetails
     */
    private $technicalDetails = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the SheetMusic as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The Language and script for the Elements of the SheetMusic as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }

    /**
     * Gets as isSupplemental
     *
     * The Flag indicating whether the SheetMusic is provided in a addition to the Resources that form part of the Release (=true) or not (=false). If the flag is set to false (or absent) the SheetMusic is part of at least one Release in the message. This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsSupplemental()
    {
        return $this->isSupplemental;
    }

    /**
     * Sets a new isSupplemental
     *
     * The Flag indicating whether the SheetMusic is provided in a addition to the Resources that form part of the Release (=true) or not (=false). If the flag is set to false (or absent) the SheetMusic is part of at least one Release in the message. This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isSupplemental
     * @return self
     */
    public function setIsSupplemental($isSupplemental)
    {
        $this->isSupplemental = $isSupplemental;
        return $this;
    }

    /**
     * Gets as resourceReference
     *
     * The Identifier (specific to the Message) of the SheetMusic within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
     *
     * @return string
     */
    public function getResourceReference()
    {
        return $this->resourceReference;
    }

    /**
     * Sets a new resourceReference
     *
     * The Identifier (specific to the Message) of the SheetMusic within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
     *
     * @param string $resourceReference
     * @return self
     */
    public function setResourceReference($resourceReference)
    {
        $this->resourceReference = $resourceReference;
        return $this;
    }

    /**
     * Gets as type
     *
     * A Composite containing details of the Type of the SheetMusic.
     *
     * @return \DedexBundle\Entity\Ern43\SheetMusicTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A Composite containing details of the Type of the SheetMusic.
     *
     * @param \DedexBundle\Entity\Ern43\SheetMusicTypeType $type
     * @return self
     */
    public function setType(\DedexBundle\Entity\Ern43\SheetMusicTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as resourceId
     *
     * A Composite containing details of Identifiers of the SheetMusic.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\SheetMusicIdType $resourceId
     */
    public function addToResourceId(\DedexBundle\Entity\Ern43\SheetMusicIdType $resourceId)
    {
        $this->resourceId[] = $resourceId;
        return $this;
    }

    /**
     * isset resourceId
     *
     * A Composite containing details of Identifiers of the SheetMusic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceId($index)
    {
        return isset($this->resourceId[$index]);
    }

    /**
     * unset resourceId
     *
     * A Composite containing details of Identifiers of the SheetMusic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceId($index)
    {
        unset($this->resourceId[$index]);
    }

    /**
     * Gets as resourceId
     *
     * A Composite containing details of Identifiers of the SheetMusic.
     *
     * @return \DedexBundle\Entity\Ern43\SheetMusicIdType[]
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * Sets a new resourceId
     *
     * A Composite containing details of Identifiers of the SheetMusic.
     *
     * @param \DedexBundle\Entity\Ern43\SheetMusicIdType[] $resourceId
     * @return self
     */
    public function setResourceId(array $resourceId)
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * Adds as workId
     *
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the SheetMusic.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\MusicalWorkIdType $workId
     */
    public function addToWorkId(\DedexBundle\Entity\Ern43\MusicalWorkIdType $workId)
    {
        $this->workId[] = $workId;
        return $this;
    }

    /**
     * isset workId
     *
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the SheetMusic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWorkId($index)
    {
        return isset($this->workId[$index]);
    }

    /**
     * unset workId
     *
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the SheetMusic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWorkId($index)
    {
        unset($this->workId[$index]);
    }

    /**
     * Gets as workId
     *
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the SheetMusic.
     *
     * @return \DedexBundle\Entity\Ern43\MusicalWorkIdType[]
     */
    public function getWorkId()
    {
        return $this->workId;
    }

    /**
     * Sets a new workId
     *
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the SheetMusic.
     *
     * @param \DedexBundle\Entity\Ern43\MusicalWorkIdType[] $workId
     * @return self
     */
    public function setWorkId(array $workId = null)
    {
        $this->workId = $workId;
        return $this;
    }

    /**
     * Adds as displayTitleText
     *
     * A Composite containing details of a Title of the SheetMusic as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
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
     * A Composite containing details of a Title of the SheetMusic as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
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
     * A Composite containing details of a Title of the SheetMusic as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
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
     * A Composite containing details of a Title of the SheetMusic as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
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
     * A Composite containing details of a Title of the SheetMusic as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
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
     * A Composite containing details of a Title of the SheetMusic as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
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
     * A Composite containing details of a Title of the SheetMusic as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
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
     * A Composite containing details of a Title of the SheetMusic as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
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
     * A Composite containing details of a Title of the SheetMusic as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
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
     * A Composite containing details of a Title of the SheetMusic as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
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
     * A Composite containing details of an AdditionalTitle of the SheetMusic. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
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
     * A Composite containing details of an AdditionalTitle of the SheetMusic. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
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
     * A Composite containing details of an AdditionalTitle of the SheetMusic. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
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
     * A Composite containing details of an AdditionalTitle of the SheetMusic. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
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
     * A Composite containing details of an AdditionalTitle of the SheetMusic. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
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
     * Adds as versionType
     *
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one SheetMusic from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a SheetMusic that has been derived from another SheetMusic by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\VersionTypeType $versionType
     */
    public function addToVersionType(\DedexBundle\Entity\Ern43\VersionTypeType $versionType)
    {
        $this->versionType[] = $versionType;
        return $this;
    }

    /**
     * isset versionType
     *
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one SheetMusic from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a SheetMusic that has been derived from another SheetMusic by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVersionType($index)
    {
        return isset($this->versionType[$index]);
    }

    /**
     * unset versionType
     *
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one SheetMusic from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a SheetMusic that has been derived from another SheetMusic by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVersionType($index)
    {
        unset($this->versionType[$index]);
    }

    /**
     * Gets as versionType
     *
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one SheetMusic from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a SheetMusic that has been derived from another SheetMusic by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
     *
     * @return \DedexBundle\Entity\Ern43\VersionTypeType[]
     */
    public function getVersionType()
    {
        return $this->versionType;
    }

    /**
     * Sets a new versionType
     *
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one SheetMusic from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a SheetMusic that has been derived from another SheetMusic by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
     *
     * @param \DedexBundle\Entity\Ern43\VersionTypeType[] $versionType
     * @return self
     */
    public function setVersionType(array $versionType = null)
    {
        $this->versionType = $versionType;
        return $this;
    }

    /**
     * Adds as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/genres
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @param \DedexBundle\Entity\Ern43\DisplayArtistNameWithDefaultType[] $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(array $displayArtistName)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as displayArtist
     *
     * A Composite containing details of the DisplayArtist for the SheetMusic. The DisplayArtist may be described through Name, Identifier and Roles.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/genres
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\DisplayArtistType $displayArtist
     */
    public function addToDisplayArtist(\DedexBundle\Entity\Ern43\DisplayArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A Composite containing details of the DisplayArtist for the SheetMusic. The DisplayArtist may be described through Name, Identifier and Roles.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/genres
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayArtist($index)
    {
        return isset($this->displayArtist[$index]);
    }

    /**
     * unset displayArtist
     *
     * A Composite containing details of the DisplayArtist for the SheetMusic. The DisplayArtist may be described through Name, Identifier and Roles.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/genres
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayArtist($index)
    {
        unset($this->displayArtist[$index]);
    }

    /**
     * Gets as displayArtist
     *
     * A Composite containing details of the DisplayArtist for the SheetMusic. The DisplayArtist may be described through Name, Identifier and Roles.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/genres
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @return \DedexBundle\Entity\Ern43\DisplayArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A Composite containing details of the DisplayArtist for the SheetMusic. The DisplayArtist may be described through Name, Identifier and Roles.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/genres
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @param \DedexBundle\Entity\Ern43\DisplayArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist = null)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Adds as contributor
     *
     * A Composite containing details of a Contributor to the SheetMusic.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\ContributorType $contributor
     */
    public function addToContributor(\DedexBundle\Entity\Ern43\ContributorType $contributor)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * isset contributor
     *
     * A Composite containing details of a Contributor to the SheetMusic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContributor($index)
    {
        return isset($this->contributor[$index]);
    }

    /**
     * unset contributor
     *
     * A Composite containing details of a Contributor to the SheetMusic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContributor($index)
    {
        unset($this->contributor[$index]);
    }

    /**
     * Gets as contributor
     *
     * A Composite containing details of a Contributor to the SheetMusic.
     *
     * @return \DedexBundle\Entity\Ern43\ContributorType[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Sets a new contributor
     *
     * A Composite containing details of a Contributor to the SheetMusic.
     *
     * @param \DedexBundle\Entity\Ern43\ContributorType[] $contributor
     * @return self
     */
    public function setContributor(array $contributor = null)
    {
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * Adds as resourceRightsController
     *
     * A Composite containing details of RightsController of Rights in the SheetMusic.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\ResourceRightsControllerType $resourceRightsController
     */
    public function addToResourceRightsController(\DedexBundle\Entity\Ern43\ResourceRightsControllerType $resourceRightsController)
    {
        $this->resourceRightsController[] = $resourceRightsController;
        return $this;
    }

    /**
     * isset resourceRightsController
     *
     * A Composite containing details of RightsController of Rights in the SheetMusic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceRightsController($index)
    {
        return isset($this->resourceRightsController[$index]);
    }

    /**
     * unset resourceRightsController
     *
     * A Composite containing details of RightsController of Rights in the SheetMusic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceRightsController($index)
    {
        unset($this->resourceRightsController[$index]);
    }

    /**
     * Gets as resourceRightsController
     *
     * A Composite containing details of RightsController of Rights in the SheetMusic.
     *
     * @return \DedexBundle\Entity\Ern43\ResourceRightsControllerType[]
     */
    public function getResourceRightsController()
    {
        return $this->resourceRightsController;
    }

    /**
     * Sets a new resourceRightsController
     *
     * A Composite containing details of RightsController of Rights in the SheetMusic.
     *
     * @param \DedexBundle\Entity\Ern43\ResourceRightsControllerType[] $resourceRightsController
     * @return self
     */
    public function setResourceRightsController(array $resourceRightsController = null)
    {
        $this->resourceRightsController = $resourceRightsController;
        return $this;
    }

    /**
     * Adds as workRightsController
     *
     * A Composite containing details of RightsController of Rights in the Work.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\WorkRightsControllerType $workRightsController
     */
    public function addToWorkRightsController(\DedexBundle\Entity\Ern43\WorkRightsControllerType $workRightsController)
    {
        $this->workRightsController[] = $workRightsController;
        return $this;
    }

    /**
     * isset workRightsController
     *
     * A Composite containing details of RightsController of Rights in the Work.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWorkRightsController($index)
    {
        return isset($this->workRightsController[$index]);
    }

    /**
     * unset workRightsController
     *
     * A Composite containing details of RightsController of Rights in the Work.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWorkRightsController($index)
    {
        unset($this->workRightsController[$index]);
    }

    /**
     * Gets as workRightsController
     *
     * A Composite containing details of RightsController of Rights in the Work.
     *
     * @return \DedexBundle\Entity\Ern43\WorkRightsControllerType[]
     */
    public function getWorkRightsController()
    {
        return $this->workRightsController;
    }

    /**
     * Sets a new workRightsController
     *
     * A Composite containing details of RightsController of Rights in the Work.
     *
     * @param \DedexBundle\Entity\Ern43\WorkRightsControllerType[] $workRightsController
     * @return self
     */
    public function setWorkRightsController(array $workRightsController = null)
    {
        $this->workRightsController = $workRightsController;
        return $this;
    }

    /**
     * Adds as cLine
     *
     * A Composite containing details of the CLine for the SheetMusic.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\CLineWithDefaultType $cLine
     */
    public function addToCLine(\DedexBundle\Entity\Ern43\CLineWithDefaultType $cLine)
    {
        $this->cLine[] = $cLine;
        return $this;
    }

    /**
     * isset cLine
     *
     * A Composite containing details of the CLine for the SheetMusic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCLine($index)
    {
        return isset($this->cLine[$index]);
    }

    /**
     * unset cLine
     *
     * A Composite containing details of the CLine for the SheetMusic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCLine($index)
    {
        unset($this->cLine[$index]);
    }

    /**
     * Gets as cLine
     *
     * A Composite containing details of the CLine for the SheetMusic.
     *
     * @return \DedexBundle\Entity\Ern43\CLineWithDefaultType[]
     */
    public function getCLine()
    {
        return $this->cLine;
    }

    /**
     * Sets a new cLine
     *
     * A Composite containing details of the CLine for the SheetMusic.
     *
     * @param \DedexBundle\Entity\Ern43\CLineWithDefaultType[] $cLine
     * @return self
     */
    public function setCLine(array $cLine = null)
    {
        $this->cLine = $cLine;
        return $this;
    }

    /**
     * Adds as courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured in the SheetMusic.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\CourtesyLineWithDefaultType $courtesyLine
     */
    public function addToCourtesyLine(\DedexBundle\Entity\Ern43\CourtesyLineWithDefaultType $courtesyLine)
    {
        $this->courtesyLine[] = $courtesyLine;
        return $this;
    }

    /**
     * isset courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured in the SheetMusic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCourtesyLine($index)
    {
        return isset($this->courtesyLine[$index]);
    }

    /**
     * unset courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured in the SheetMusic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCourtesyLine($index)
    {
        unset($this->courtesyLine[$index]);
    }

    /**
     * Gets as courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured in the SheetMusic.
     *
     * @return \DedexBundle\Entity\Ern43\CourtesyLineWithDefaultType[]
     */
    public function getCourtesyLine()
    {
        return $this->courtesyLine;
    }

    /**
     * Sets a new courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured in the SheetMusic.
     *
     * @param \DedexBundle\Entity\Ern43\CourtesyLineWithDefaultType[] $courtesyLine
     * @return self
     */
    public function setCourtesyLine(array $courtesyLine = null)
    {
        $this->courtesyLine = $courtesyLine;
        return $this;
    }

    /**
     * Gets as creationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SheetMusic was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern43\EventDateWithoutFlagsType
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets a new creationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SheetMusic was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern43\EventDateWithoutFlagsType $creationDate
     * @return self
     */
    public function setCreationDate(?\DedexBundle\Entity\Ern43\EventDateWithoutFlagsType $creationDate = null)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Adds as firstPublicationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SheetMusic was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\FulfillmentDateWithTerritoryType $firstPublicationDate
     */
    public function addToFirstPublicationDate(\DedexBundle\Entity\Ern43\FulfillmentDateWithTerritoryType $firstPublicationDate)
    {
        $this->firstPublicationDate[] = $firstPublicationDate;
        return $this;
    }

    /**
     * isset firstPublicationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SheetMusic was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFirstPublicationDate($index)
    {
        return isset($this->firstPublicationDate[$index]);
    }

    /**
     * unset firstPublicationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SheetMusic was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFirstPublicationDate($index)
    {
        unset($this->firstPublicationDate[$index]);
    }

    /**
     * Gets as firstPublicationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SheetMusic was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern43\FulfillmentDateWithTerritoryType[]
     */
    public function getFirstPublicationDate()
    {
        return $this->firstPublicationDate;
    }

    /**
     * Sets a new firstPublicationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SheetMusic was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern43\FulfillmentDateWithTerritoryType[] $firstPublicationDate
     * @return self
     */
    public function setFirstPublicationDate(array $firstPublicationDate = null)
    {
        $this->firstPublicationDate = $firstPublicationDate;
        return $this;
    }

    /**
     * Adds as parentalWarningType
     *
     * A Composite containing details of the classification of the SheetMusic according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\ParentalWarningTypeWithTerritoryType $parentalWarningType
     */
    public function addToParentalWarningType(\DedexBundle\Entity\Ern43\ParentalWarningTypeWithTerritoryType $parentalWarningType)
    {
        $this->parentalWarningType[] = $parentalWarningType;
        return $this;
    }

    /**
     * isset parentalWarningType
     *
     * A Composite containing details of the classification of the SheetMusic according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParentalWarningType($index)
    {
        return isset($this->parentalWarningType[$index]);
    }

    /**
     * unset parentalWarningType
     *
     * A Composite containing details of the classification of the SheetMusic according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParentalWarningType($index)
    {
        unset($this->parentalWarningType[$index]);
    }

    /**
     * Gets as parentalWarningType
     *
     * A Composite containing details of the classification of the SheetMusic according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return \DedexBundle\Entity\Ern43\ParentalWarningTypeWithTerritoryType[]
     */
    public function getParentalWarningType()
    {
        return $this->parentalWarningType;
    }

    /**
     * Sets a new parentalWarningType
     *
     * A Composite containing details of the classification of the SheetMusic according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param \DedexBundle\Entity\Ern43\ParentalWarningTypeWithTerritoryType[] $parentalWarningType
     * @return self
     */
    public function setParentalWarningType(array $parentalWarningType = null)
    {
        $this->parentalWarningType = $parentalWarningType;
        return $this;
    }

    /**
     * Adds as relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current SheetMusic.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\RelatedReleaseType $relatedRelease
     */
    public function addToRelatedRelease(\DedexBundle\Entity\Ern43\RelatedReleaseType $relatedRelease)
    {
        $this->relatedRelease[] = $relatedRelease;
        return $this;
    }

    /**
     * isset relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current SheetMusic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedRelease($index)
    {
        return isset($this->relatedRelease[$index]);
    }

    /**
     * unset relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current SheetMusic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedRelease($index)
    {
        unset($this->relatedRelease[$index]);
    }

    /**
     * Gets as relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current SheetMusic.
     *
     * @return \DedexBundle\Entity\Ern43\RelatedReleaseType[]
     */
    public function getRelatedRelease()
    {
        return $this->relatedRelease;
    }

    /**
     * Sets a new relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current SheetMusic.
     *
     * @param \DedexBundle\Entity\Ern43\RelatedReleaseType[] $relatedRelease
     * @return self
     */
    public function setRelatedRelease(array $relatedRelease = null)
    {
        $this->relatedRelease = $relatedRelease;
        return $this;
    }

    /**
     * Adds as relatedResource
     *
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current SheetMusic.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\RelatedResourceType $relatedResource
     */
    public function addToRelatedResource(\DedexBundle\Entity\Ern43\RelatedResourceType $relatedResource)
    {
        $this->relatedResource[] = $relatedResource;
        return $this;
    }

    /**
     * isset relatedResource
     *
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current SheetMusic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedResource($index)
    {
        return isset($this->relatedResource[$index]);
    }

    /**
     * unset relatedResource
     *
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current SheetMusic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedResource($index)
    {
        unset($this->relatedResource[$index]);
    }

    /**
     * Gets as relatedResource
     *
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current SheetMusic.
     *
     * @return \DedexBundle\Entity\Ern43\RelatedResourceType[]
     */
    public function getRelatedResource()
    {
        return $this->relatedResource;
    }

    /**
     * Sets a new relatedResource
     *
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current SheetMusic.
     *
     * @param \DedexBundle\Entity\Ern43\RelatedResourceType[] $relatedResource
     * @return self
     */
    public function setRelatedResource(array $relatedResource = null)
    {
        $this->relatedResource = $relatedResource;
        return $this;
    }

    /**
     * Gets as containsHiddenContent
     *
     * The Flag indicating whether the SheetMusic contains content that is hidden in some way from the Consumer (=true) or not (=false).
     *
     * @return bool
     */
    public function getContainsHiddenContent()
    {
        return $this->containsHiddenContent;
    }

    /**
     * Sets a new containsHiddenContent
     *
     * The Flag indicating whether the SheetMusic contains content that is hidden in some way from the Consumer (=true) or not (=false).
     *
     * @param bool $containsHiddenContent
     * @return self
     */
    public function setContainsHiddenContent($containsHiddenContent)
    {
        $this->containsHiddenContent = $containsHiddenContent;
        return $this;
    }

    /**
     * Gets as languageOfLyrics
     *
     * The Language of the Lyrics of the SheetMusic as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant].
     *
     * @return string
     */
    public function getLanguageOfLyrics()
    {
        return $this->languageOfLyrics;
    }

    /**
     * Sets a new languageOfLyrics
     *
     * The Language of the Lyrics of the SheetMusic as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant].
     *
     * @param string $languageOfLyrics
     * @return self
     */
    public function setLanguageOfLyrics($languageOfLyrics)
    {
        $this->languageOfLyrics = $languageOfLyrics;
        return $this;
    }

    /**
     * Adds as resourceContainedResourceReference
     *
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current SheetMusic.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\ResourceContainedResourceReferenceType $resourceContainedResourceReference
     */
    public function addToResourceContainedResourceReferenceList(\DedexBundle\Entity\Ern43\ResourceContainedResourceReferenceType $resourceContainedResourceReference)
    {
        $this->resourceContainedResourceReferenceList[] = $resourceContainedResourceReference;
        return $this;
    }

    /**
     * isset resourceContainedResourceReferenceList
     *
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current SheetMusic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceContainedResourceReferenceList($index)
    {
        return isset($this->resourceContainedResourceReferenceList[$index]);
    }

    /**
     * unset resourceContainedResourceReferenceList
     *
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current SheetMusic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceContainedResourceReferenceList($index)
    {
        unset($this->resourceContainedResourceReferenceList[$index]);
    }

    /**
     * Gets as resourceContainedResourceReferenceList
     *
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current SheetMusic.
     *
     * @return \DedexBundle\Entity\Ern43\ResourceContainedResourceReferenceType[]
     */
    public function getResourceContainedResourceReferenceList()
    {
        return $this->resourceContainedResourceReferenceList;
    }

    /**
     * Sets a new resourceContainedResourceReferenceList
     *
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current SheetMusic.
     *
     * @param \DedexBundle\Entity\Ern43\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     * @return self
     */
    public function setResourceContainedResourceReferenceList(array $resourceContainedResourceReferenceList = null)
    {
        $this->resourceContainedResourceReferenceList = $resourceContainedResourceReferenceList;
        return $this;
    }

    /**
     * Adds as technicalDetails
     *
     * A Composite containing technical details of the SheetMusic.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-binaries/communicating-binaries
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\TechnicalSheetMusicDetailsType $technicalDetails
     */
    public function addToTechnicalDetails(\DedexBundle\Entity\Ern43\TechnicalSheetMusicDetailsType $technicalDetails)
    {
        $this->technicalDetails[] = $technicalDetails;
        return $this;
    }

    /**
     * isset technicalDetails
     *
     * A Composite containing technical details of the SheetMusic.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-binaries/communicating-binaries
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalDetails($index)
    {
        return isset($this->technicalDetails[$index]);
    }

    /**
     * unset technicalDetails
     *
     * A Composite containing technical details of the SheetMusic.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-binaries/communicating-binaries
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalDetails($index)
    {
        unset($this->technicalDetails[$index]);
    }

    /**
     * Gets as technicalDetails
     *
     * A Composite containing technical details of the SheetMusic.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-binaries/communicating-binaries
     *
     * @return \DedexBundle\Entity\Ern43\TechnicalSheetMusicDetailsType[]
     */
    public function getTechnicalDetails()
    {
        return $this->technicalDetails;
    }

    /**
     * Sets a new technicalDetails
     *
     * A Composite containing technical details of the SheetMusic.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-binaries/communicating-binaries
     *
     * @param \DedexBundle\Entity\Ern43\TechnicalSheetMusicDetailsType[] $technicalDetails
     * @return self
     */
    public function setTechnicalDetails(array $technicalDetails = null)
    {
        $this->technicalDetails = $technicalDetails;
        return $this;
    }
}

