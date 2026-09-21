<?php

namespace DedexBundle\Entity\Ern431;

/**
 * Class representing ImageType
 *
 * A Composite containing details of an Image.
 * XSD Type: Image
 */
class ImageType
{
    /**
     * The Language and script for the Elements of the Image as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. A list of common language/script combinations has been published in the Language Metadata Table (LMT) at https://www.mesaonline.org/lmt by the Media & Entertainment Services Alliance. Other language/script combinations allowed by IETF RfC 5646 are also valid. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The Flag indicating whether the Image is provided in addition to the Resources that form part of the Release (=true) or not (=false). If the flag is set to false (or absent) the Image is part of at least one Release in the message. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isSupplemental
     */
    private $isSupplemental = null;

    /**
     * The Identifier (specific to the Message) of the Image within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A Composite containing details of the Type of the Image.
     *
     * @var \DedexBundle\Entity\Ern431\ImageTypeType $type
     */
    private $type = null;

    /**
     * A Composite containing details of Identifiers of the Image.
     *
     * @var \DedexBundle\Entity\Ern431\ResourceProprietaryIdType[] $resourceId
     */
    private $resourceId = [
        
    ];

    /**
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @var \DedexBundle\Entity\Ern431\DisplayTitleTextType[] $displayTitleText
     */
    private $displayTitleText = [
        
    ];

    /**
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @var \DedexBundle\Entity\Ern431\DisplayTitleType[] $displayTitle
     */
    private $displayTitle = [
        
    ];

    /**
     * A Composite containing details of a FormalTitle of the Image. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @var \DedexBundle\Entity\Ern431\DisplayTitleType[] $formalTitle
     */
    private $formalTitle = [
        
    ];

    /**
     * A Composite containing details of a GroupingTitle of the Image. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @var \DedexBundle\Entity\Ern431\DisplayTitleType[] $groupingTitle
     */
    private $groupingTitle = [
        
    ];

    /**
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one Image from another with identical or similar Title metadata. VersionTypes may be used for disambiguating an Image that has been derived from another Image by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
     *
     * @var \DedexBundle\Entity\Ern431\VersionTypeType[] $versionType
     */
    private $versionType = [
        
    ];

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @var \DedexBundle\Entity\Ern431\DisplayArtistNameWithOriginalLanguageType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A Composite containing details of the DisplayArtist for the Image. The DisplayArtist may be described through Name, Identifier and Roles.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @var \DedexBundle\Entity\Ern431\DisplayArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * A Composite containing details of a Contributor to the Image.
     *
     * @var \DedexBundle\Entity\Ern431\ContributorType[] $contributor
     */
    private $contributor = [
        
    ];

    /**
     * A Composite containing details of RightsController of Rights in the Image.
     *
     * @var \DedexBundle\Entity\Ern431\ResourceRightsControllerType[] $resourceRightsController
     */
    private $resourceRightsController = [
        
    ];

    /**
     * A Composite containing details of RightsController of Rights in the Work.
     *
     * @var \DedexBundle\Entity\Ern431\WorkRightsControllerType[] $workRightsController
     */
    private $workRightsController = [
        
    ];

    /**
     * A Composite containing details of the CLine for the Image.
     *
     * @var \DedexBundle\Entity\Ern431\CLineType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured on the Image.
     *
     * @var \DedexBundle\Entity\Ern431\CourtesyLineType[] $courtesyLine
     */
    private $courtesyLine = [
        
    ];

    /**
     * A Composite containing details of the Date and Place of the Event in which the Image was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern431\EventDateWithoutFlagsType $creationDate
     */
    private $creationDate = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the Image was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern431\FulfillmentDateType[] $firstPublicationDate
     */
    private $firstPublicationDate = [
        
    ];

    /**
     * A Composite containing details of the classification of the Image according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @var \DedexBundle\Entity\Ern431\ParentalWarningTypeWithStandardType[] $parentalWarningType
     */
    private $parentalWarningType = [
        
    ];

    /**
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current Image.
     *
     * @var \DedexBundle\Entity\Ern431\RelatedReleaseType[] $relatedRelease
     */
    private $relatedRelease = [
        
    ];

    /**
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current Image.
     *
     * @var \DedexBundle\Entity\Ern431\RelatedResourceType[] $relatedResource
     */
    private $relatedResource = [
        
    ];

    /**
     * A Type of the Image indicating the contribution of GenerativeAI. If the value of this element is All, only Contributors of type GenerativeAI shall be specified. If the value of this element is None, no Contributors with AiContribution set to Partly or All shall be specified.
     *
     * @var string $containsAI
     */
    private $containsAI = null;

    /**
     * The Flag indicating whether the Image contains content that is hidden in some way from the Consumer (=true) or not (=false).
     *
     * @var bool $containsHiddenContent
     */
    private $containsHiddenContent = null;

    /**
     * A Composite containing a Description of the subject of the Image.
     *
     * @var \DedexBundle\Entity\Ern431\DescriptionWithTerritoryType[] $description
     */
    private $description = [
        
    ];

    /**
     * A Composite containing technical details of the Image.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-binaries/communicating-binaries
     *
     * @var \DedexBundle\Entity\Ern431\TechnicalImageDetailsType[] $technicalDetails
     */
    private $technicalDetails = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the Image as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. A list of common language/script combinations has been published in the Language Metadata Table (LMT) at https://www.mesaonline.org/lmt by the Media & Entertainment Services Alliance. Other language/script combinations allowed by IETF RfC 5646 are also valid. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the Image as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. A list of common language/script combinations has been published in the Language Metadata Table (LMT) at https://www.mesaonline.org/lmt by the Media & Entertainment Services Alliance. Other language/script combinations allowed by IETF RfC 5646 are also valid. This is represented in an XML schema as an XML Attribute.
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
     * The Flag indicating whether the Image is provided in addition to the Resources that form part of the Release (=true) or not (=false). If the flag is set to false (or absent) the Image is part of at least one Release in the message. This is represented in an XML schema as an XML Attribute.
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
     * The Flag indicating whether the Image is provided in addition to the Resources that form part of the Release (=true) or not (=false). If the flag is set to false (or absent) the Image is part of at least one Release in the message. This is represented in an XML schema as an XML Attribute.
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
     * The Identifier (specific to the Message) of the Image within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
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
     * The Identifier (specific to the Message) of the Image within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
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
     * A Composite containing details of the Type of the Image.
     *
     * @return \DedexBundle\Entity\Ern431\ImageTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A Composite containing details of the Type of the Image.
     *
     * @param \DedexBundle\Entity\Ern431\ImageTypeType $type
     * @return self
     */
    public function setType(\DedexBundle\Entity\Ern431\ImageTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as resourceId
     *
     * A Composite containing details of Identifiers of the Image.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\ResourceProprietaryIdType $resourceId
     */
    public function addToResourceId(\DedexBundle\Entity\Ern431\ResourceProprietaryIdType $resourceId)
    {
        $this->resourceId[] = $resourceId;
        return $this;
    }

    /**
     * isset resourceId
     *
     * A Composite containing details of Identifiers of the Image.
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
     * A Composite containing details of Identifiers of the Image.
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
     * A Composite containing details of Identifiers of the Image.
     *
     * @return \DedexBundle\Entity\Ern431\ResourceProprietaryIdType[]
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * Sets a new resourceId
     *
     * A Composite containing details of Identifiers of the Image.
     *
     * @param \DedexBundle\Entity\Ern431\ResourceProprietaryIdType[] $resourceId
     * @return self
     */
    public function setResourceId(array $resourceId)
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * Adds as displayTitleText
     *
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\DisplayTitleTextType $displayTitleText
     */
    public function addToDisplayTitleText(\DedexBundle\Entity\Ern431\DisplayTitleTextType $displayTitleText)
    {
        $this->displayTitleText[] = $displayTitleText;
        return $this;
    }

    /**
     * isset displayTitleText
     *
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
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
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
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
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @return \DedexBundle\Entity\Ern431\DisplayTitleTextType[]
     */
    public function getDisplayTitleText()
    {
        return $this->displayTitleText;
    }

    /**
     * Sets a new displayTitleText
     *
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @param \DedexBundle\Entity\Ern431\DisplayTitleTextType[] $displayTitleText
     * @return self
     */
    public function setDisplayTitleText(?array $displayTitleText = null)
    {
        $this->displayTitleText = $displayTitleText;
        return $this;
    }

    /**
     * Adds as displayTitle
     *
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\DisplayTitleType $displayTitle
     */
    public function addToDisplayTitle(\DedexBundle\Entity\Ern431\DisplayTitleType $displayTitle)
    {
        $this->displayTitle[] = $displayTitle;
        return $this;
    }

    /**
     * isset displayTitle
     *
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
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
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
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
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @return \DedexBundle\Entity\Ern431\DisplayTitleType[]
     */
    public function getDisplayTitle()
    {
        return $this->displayTitle;
    }

    /**
     * Sets a new displayTitle
     *
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @param \DedexBundle\Entity\Ern431\DisplayTitleType[] $displayTitle
     * @return self
     */
    public function setDisplayTitle(?array $displayTitle = null)
    {
        $this->displayTitle = $displayTitle;
        return $this;
    }

    /**
     * Adds as formalTitle
     *
     * A Composite containing details of a FormalTitle of the Image. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\DisplayTitleType $formalTitle
     */
    public function addToFormalTitle(\DedexBundle\Entity\Ern431\DisplayTitleType $formalTitle)
    {
        $this->formalTitle[] = $formalTitle;
        return $this;
    }

    /**
     * isset formalTitle
     *
     * A Composite containing details of a FormalTitle of the Image. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFormalTitle($index)
    {
        return isset($this->formalTitle[$index]);
    }

    /**
     * unset formalTitle
     *
     * A Composite containing details of a FormalTitle of the Image. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFormalTitle($index)
    {
        unset($this->formalTitle[$index]);
    }

    /**
     * Gets as formalTitle
     *
     * A Composite containing details of a FormalTitle of the Image. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return \DedexBundle\Entity\Ern431\DisplayTitleType[]
     */
    public function getFormalTitle()
    {
        return $this->formalTitle;
    }

    /**
     * Sets a new formalTitle
     *
     * A Composite containing details of a FormalTitle of the Image. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param \DedexBundle\Entity\Ern431\DisplayTitleType[] $formalTitle
     * @return self
     */
    public function setFormalTitle(?array $formalTitle = null)
    {
        $this->formalTitle = $formalTitle;
        return $this;
    }

    /**
     * Adds as groupingTitle
     *
     * A Composite containing details of a GroupingTitle of the Image. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\DisplayTitleType $groupingTitle
     */
    public function addToGroupingTitle(\DedexBundle\Entity\Ern431\DisplayTitleType $groupingTitle)
    {
        $this->groupingTitle[] = $groupingTitle;
        return $this;
    }

    /**
     * isset groupingTitle
     *
     * A Composite containing details of a GroupingTitle of the Image. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGroupingTitle($index)
    {
        return isset($this->groupingTitle[$index]);
    }

    /**
     * unset groupingTitle
     *
     * A Composite containing details of a GroupingTitle of the Image. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGroupingTitle($index)
    {
        unset($this->groupingTitle[$index]);
    }

    /**
     * Gets as groupingTitle
     *
     * A Composite containing details of a GroupingTitle of the Image. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return \DedexBundle\Entity\Ern431\DisplayTitleType[]
     */
    public function getGroupingTitle()
    {
        return $this->groupingTitle;
    }

    /**
     * Sets a new groupingTitle
     *
     * A Composite containing details of a GroupingTitle of the Image. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param \DedexBundle\Entity\Ern431\DisplayTitleType[] $groupingTitle
     * @return self
     */
    public function setGroupingTitle(?array $groupingTitle = null)
    {
        $this->groupingTitle = $groupingTitle;
        return $this;
    }

    /**
     * Adds as versionType
     *
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one Image from another with identical or similar Title metadata. VersionTypes may be used for disambiguating an Image that has been derived from another Image by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\VersionTypeType $versionType
     */
    public function addToVersionType(\DedexBundle\Entity\Ern431\VersionTypeType $versionType)
    {
        $this->versionType[] = $versionType;
        return $this;
    }

    /**
     * isset versionType
     *
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one Image from another with identical or similar Title metadata. VersionTypes may be used for disambiguating an Image that has been derived from another Image by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
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
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one Image from another with identical or similar Title metadata. VersionTypes may be used for disambiguating an Image that has been derived from another Image by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
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
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one Image from another with identical or similar Title metadata. VersionTypes may be used for disambiguating an Image that has been derived from another Image by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
     *
     * @return \DedexBundle\Entity\Ern431\VersionTypeType[]
     */
    public function getVersionType()
    {
        return $this->versionType;
    }

    /**
     * Sets a new versionType
     *
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one Image from another with identical or similar Title metadata. VersionTypes may be used for disambiguating an Image that has been derived from another Image by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
     *
     * @param \DedexBundle\Entity\Ern431\VersionTypeType[] $versionType
     * @return self
     */
    public function setVersionType(?array $versionType = null)
    {
        $this->versionType = $versionType;
        return $this;
    }

    /**
     * Adds as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\DisplayArtistNameWithOriginalLanguageType $displayArtistName
     */
    public function addToDisplayArtistName(\DedexBundle\Entity\Ern431\DisplayArtistNameWithOriginalLanguageType $displayArtistName)
    {
        $this->displayArtistName[] = $displayArtistName;
        return $this;
    }

    /**
     * isset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @return \DedexBundle\Entity\Ern431\DisplayArtistNameWithOriginalLanguageType[]
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @param \DedexBundle\Entity\Ern431\DisplayArtistNameWithOriginalLanguageType[] $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(?array $displayArtistName = null)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as displayArtist
     *
     * A Composite containing details of the DisplayArtist for the Image. The DisplayArtist may be described through Name, Identifier and Roles.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\DisplayArtistType $displayArtist
     */
    public function addToDisplayArtist(\DedexBundle\Entity\Ern431\DisplayArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A Composite containing details of the DisplayArtist for the Image. The DisplayArtist may be described through Name, Identifier and Roles.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
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
     * A Composite containing details of the DisplayArtist for the Image. The DisplayArtist may be described through Name, Identifier and Roles.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
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
     * A Composite containing details of the DisplayArtist for the Image. The DisplayArtist may be described through Name, Identifier and Roles.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @return \DedexBundle\Entity\Ern431\DisplayArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A Composite containing details of the DisplayArtist for the Image. The DisplayArtist may be described through Name, Identifier and Roles.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @param \DedexBundle\Entity\Ern431\DisplayArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(?array $displayArtist = null)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Adds as contributor
     *
     * A Composite containing details of a Contributor to the Image.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\ContributorType $contributor
     */
    public function addToContributor(\DedexBundle\Entity\Ern431\ContributorType $contributor)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * isset contributor
     *
     * A Composite containing details of a Contributor to the Image.
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
     * A Composite containing details of a Contributor to the Image.
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
     * A Composite containing details of a Contributor to the Image.
     *
     * @return \DedexBundle\Entity\Ern431\ContributorType[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Sets a new contributor
     *
     * A Composite containing details of a Contributor to the Image.
     *
     * @param \DedexBundle\Entity\Ern431\ContributorType[] $contributor
     * @return self
     */
    public function setContributor(?array $contributor = null)
    {
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * Adds as resourceRightsController
     *
     * A Composite containing details of RightsController of Rights in the Image.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\ResourceRightsControllerType $resourceRightsController
     */
    public function addToResourceRightsController(\DedexBundle\Entity\Ern431\ResourceRightsControllerType $resourceRightsController)
    {
        $this->resourceRightsController[] = $resourceRightsController;
        return $this;
    }

    /**
     * isset resourceRightsController
     *
     * A Composite containing details of RightsController of Rights in the Image.
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
     * A Composite containing details of RightsController of Rights in the Image.
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
     * A Composite containing details of RightsController of Rights in the Image.
     *
     * @return \DedexBundle\Entity\Ern431\ResourceRightsControllerType[]
     */
    public function getResourceRightsController()
    {
        return $this->resourceRightsController;
    }

    /**
     * Sets a new resourceRightsController
     *
     * A Composite containing details of RightsController of Rights in the Image.
     *
     * @param \DedexBundle\Entity\Ern431\ResourceRightsControllerType[] $resourceRightsController
     * @return self
     */
    public function setResourceRightsController(?array $resourceRightsController = null)
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
     * @param \DedexBundle\Entity\Ern431\WorkRightsControllerType $workRightsController
     */
    public function addToWorkRightsController(\DedexBundle\Entity\Ern431\WorkRightsControllerType $workRightsController)
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
     * @return \DedexBundle\Entity\Ern431\WorkRightsControllerType[]
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
     * @param \DedexBundle\Entity\Ern431\WorkRightsControllerType[] $workRightsController
     * @return self
     */
    public function setWorkRightsController(?array $workRightsController = null)
    {
        $this->workRightsController = $workRightsController;
        return $this;
    }

    /**
     * Adds as cLine
     *
     * A Composite containing details of the CLine for the Image.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\CLineType $cLine
     */
    public function addToCLine(\DedexBundle\Entity\Ern431\CLineType $cLine)
    {
        $this->cLine[] = $cLine;
        return $this;
    }

    /**
     * isset cLine
     *
     * A Composite containing details of the CLine for the Image.
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
     * A Composite containing details of the CLine for the Image.
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
     * A Composite containing details of the CLine for the Image.
     *
     * @return \DedexBundle\Entity\Ern431\CLineType[]
     */
    public function getCLine()
    {
        return $this->cLine;
    }

    /**
     * Sets a new cLine
     *
     * A Composite containing details of the CLine for the Image.
     *
     * @param \DedexBundle\Entity\Ern431\CLineType[] $cLine
     * @return self
     */
    public function setCLine(?array $cLine = null)
    {
        $this->cLine = $cLine;
        return $this;
    }

    /**
     * Adds as courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured on the Image.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\CourtesyLineType $courtesyLine
     */
    public function addToCourtesyLine(\DedexBundle\Entity\Ern431\CourtesyLineType $courtesyLine)
    {
        $this->courtesyLine[] = $courtesyLine;
        return $this;
    }

    /**
     * isset courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured on the Image.
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
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured on the Image.
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
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured on the Image.
     *
     * @return \DedexBundle\Entity\Ern431\CourtesyLineType[]
     */
    public function getCourtesyLine()
    {
        return $this->courtesyLine;
    }

    /**
     * Sets a new courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured on the Image.
     *
     * @param \DedexBundle\Entity\Ern431\CourtesyLineType[] $courtesyLine
     * @return self
     */
    public function setCourtesyLine(?array $courtesyLine = null)
    {
        $this->courtesyLine = $courtesyLine;
        return $this;
    }

    /**
     * Gets as creationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Image was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern431\EventDateWithoutFlagsType
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets a new creationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Image was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern431\EventDateWithoutFlagsType $creationDate
     * @return self
     */
    public function setCreationDate(?\DedexBundle\Entity\Ern431\EventDateWithoutFlagsType $creationDate = null)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Adds as firstPublicationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Image was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\FulfillmentDateType $firstPublicationDate
     */
    public function addToFirstPublicationDate(\DedexBundle\Entity\Ern431\FulfillmentDateType $firstPublicationDate)
    {
        $this->firstPublicationDate[] = $firstPublicationDate;
        return $this;
    }

    /**
     * isset firstPublicationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Image was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Composite containing details of the Date and Place of the Event in which the Image was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Composite containing details of the Date and Place of the Event in which the Image was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern431\FulfillmentDateType[]
     */
    public function getFirstPublicationDate()
    {
        return $this->firstPublicationDate;
    }

    /**
     * Sets a new firstPublicationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Image was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern431\FulfillmentDateType[] $firstPublicationDate
     * @return self
     */
    public function setFirstPublicationDate(?array $firstPublicationDate = null)
    {
        $this->firstPublicationDate = $firstPublicationDate;
        return $this;
    }

    /**
     * Adds as parentalWarningType
     *
     * A Composite containing details of the classification of the Image according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\ParentalWarningTypeWithStandardType $parentalWarningType
     */
    public function addToParentalWarningType(\DedexBundle\Entity\Ern431\ParentalWarningTypeWithStandardType $parentalWarningType)
    {
        $this->parentalWarningType[] = $parentalWarningType;
        return $this;
    }

    /**
     * isset parentalWarningType
     *
     * A Composite containing details of the classification of the Image according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A Composite containing details of the classification of the Image according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A Composite containing details of the classification of the Image according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return \DedexBundle\Entity\Ern431\ParentalWarningTypeWithStandardType[]
     */
    public function getParentalWarningType()
    {
        return $this->parentalWarningType;
    }

    /**
     * Sets a new parentalWarningType
     *
     * A Composite containing details of the classification of the Image according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param \DedexBundle\Entity\Ern431\ParentalWarningTypeWithStandardType[] $parentalWarningType
     * @return self
     */
    public function setParentalWarningType(?array $parentalWarningType = null)
    {
        $this->parentalWarningType = $parentalWarningType;
        return $this;
    }

    /**
     * Adds as relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current Image.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\RelatedReleaseType $relatedRelease
     */
    public function addToRelatedRelease(\DedexBundle\Entity\Ern431\RelatedReleaseType $relatedRelease)
    {
        $this->relatedRelease[] = $relatedRelease;
        return $this;
    }

    /**
     * isset relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current Image.
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
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current Image.
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
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current Image.
     *
     * @return \DedexBundle\Entity\Ern431\RelatedReleaseType[]
     */
    public function getRelatedRelease()
    {
        return $this->relatedRelease;
    }

    /**
     * Sets a new relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current Image.
     *
     * @param \DedexBundle\Entity\Ern431\RelatedReleaseType[] $relatedRelease
     * @return self
     */
    public function setRelatedRelease(?array $relatedRelease = null)
    {
        $this->relatedRelease = $relatedRelease;
        return $this;
    }

    /**
     * Adds as relatedResource
     *
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current Image.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\RelatedResourceType $relatedResource
     */
    public function addToRelatedResource(\DedexBundle\Entity\Ern431\RelatedResourceType $relatedResource)
    {
        $this->relatedResource[] = $relatedResource;
        return $this;
    }

    /**
     * isset relatedResource
     *
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current Image.
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
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current Image.
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
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current Image.
     *
     * @return \DedexBundle\Entity\Ern431\RelatedResourceType[]
     */
    public function getRelatedResource()
    {
        return $this->relatedResource;
    }

    /**
     * Sets a new relatedResource
     *
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current Image.
     *
     * @param \DedexBundle\Entity\Ern431\RelatedResourceType[] $relatedResource
     * @return self
     */
    public function setRelatedResource(?array $relatedResource = null)
    {
        $this->relatedResource = $relatedResource;
        return $this;
    }

    /**
     * Gets as containsAI
     *
     * A Type of the Image indicating the contribution of GenerativeAI. If the value of this element is All, only Contributors of type GenerativeAI shall be specified. If the value of this element is None, no Contributors with AiContribution set to Partly or All shall be specified.
     *
     * @return string
     */
    public function getContainsAI()
    {
        return $this->containsAI;
    }

    /**
     * Sets a new containsAI
     *
     * A Type of the Image indicating the contribution of GenerativeAI. If the value of this element is All, only Contributors of type GenerativeAI shall be specified. If the value of this element is None, no Contributors with AiContribution set to Partly or All shall be specified.
     *
     * @param string $containsAI
     * @return self
     */
    public function setContainsAI($containsAI)
    {
        $this->containsAI = $containsAI;
        return $this;
    }

    /**
     * Gets as containsHiddenContent
     *
     * The Flag indicating whether the Image contains content that is hidden in some way from the Consumer (=true) or not (=false).
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
     * The Flag indicating whether the Image contains content that is hidden in some way from the Consumer (=true) or not (=false).
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
     * Adds as description
     *
     * A Composite containing a Description of the subject of the Image.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\DescriptionWithTerritoryType $description
     */
    public function addToDescription(\DedexBundle\Entity\Ern431\DescriptionWithTerritoryType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * A Composite containing a Description of the subject of the Image.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * A Composite containing a Description of the subject of the Image.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * A Composite containing a Description of the subject of the Image.
     *
     * @return \DedexBundle\Entity\Ern431\DescriptionWithTerritoryType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A Composite containing a Description of the subject of the Image.
     *
     * @param \DedexBundle\Entity\Ern431\DescriptionWithTerritoryType[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as technicalDetails
     *
     * A Composite containing technical details of the Image.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-binaries/communicating-binaries
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\TechnicalImageDetailsType $technicalDetails
     */
    public function addToTechnicalDetails(\DedexBundle\Entity\Ern431\TechnicalImageDetailsType $technicalDetails)
    {
        $this->technicalDetails[] = $technicalDetails;
        return $this;
    }

    /**
     * isset technicalDetails
     *
     * A Composite containing technical details of the Image.
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
     * A Composite containing technical details of the Image.
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
     * A Composite containing technical details of the Image.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-binaries/communicating-binaries
     *
     * @return \DedexBundle\Entity\Ern431\TechnicalImageDetailsType[]
     */
    public function getTechnicalDetails()
    {
        return $this->technicalDetails;
    }

    /**
     * Sets a new technicalDetails
     *
     * A Composite containing technical details of the Image.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-binaries/communicating-binaries
     *
     * @param \DedexBundle\Entity\Ern431\TechnicalImageDetailsType[] $technicalDetails
     * @return self
     */
    public function setTechnicalDetails(?array $technicalDetails = null)
    {
        $this->technicalDetails = $technicalDetails;
        return $this;
    }
}

