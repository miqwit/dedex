<?php

namespace DedexBundle\Entity\Ern411;

/**
 * Class representing SoundRecordingType
 *
 * A Composite containing details of a SoundRecording.
 * XSD Type: SoundRecording
 */
class SoundRecordingType
{

    /**
     * The Language and script for the Elements of the SoundRecording as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The Flag indicating whether the SoundRecording is provided in a addition to the Resources that form part of the Release (=true) or not (=false). If the flag is set to false (or absent) the SoundRecording is part of at least one Release in the message. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isSupplemental
     */
    private $isSupplemental = null;

    /**
     * The Identifier (specific to the Message) of the SoundRecording within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A Composite containing details of the Type of the SoundRecording.
     *
     * @var \DedexBundle\Entity\Ern411\SoundRecordingTypeType $type
     */
    private $type = null;

    /**
     * A Composite containing details of a SoundRecordingId.
     *
     * @var \DedexBundle\Entity\Ern411\SoundRecordingIdType[] $resourceId
     */
    private $resourceId = [
        
    ];

    /**
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the SoundRecording.
     *
     * @var \DedexBundle\Entity\Ern411\MusicalWorkIdType[] $workId
     */
    private $workId = [
        
    ];

    /**
     * A Composite containing details of a Title of the SoundRecording as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @var \DedexBundle\Entity\Ern411\DisplayTitleTextType[] $displayTitleText
     */
    private $displayTitleText = [
        
    ];

    /**
     * A Composite containing details of a Title of the SoundRecording as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @var \DedexBundle\Entity\Ern411\DisplayTitleType[] $displayTitle
     */
    private $displayTitle = [
        
    ];

    /**
     * A Composite containing details of an AdditionalTitle of the SoundRecording. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @var \DedexBundle\Entity\Ern411\AdditionalTitleType[] $additionalTitle
     */
    private $additionalTitle = [
        
    ];

    /**
     * A Composite containing details of a Type of Version of the SoundRecording.
     *
     * @var \DedexBundle\Entity\Ern411\VersionTypeType[] $versionType
     */
    private $versionType = [
        
    ];

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     *
     * @var \DedexBundle\Entity\Ern411\DisplayArtistNameWithDefaultType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A Composite containing details of the DisplayArtist for the SoundRecording. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @var \DedexBundle\Entity\Ern411\DisplayArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * A Composite containing details of a Contributor to the SoundRecording.
     *
     * @var \DedexBundle\Entity\Ern411\ContributorType[] $contributor
     */
    private $contributor = [
        
    ];

    /**
     * A Composite containing details of a Character in the SoundRecording. A Character may be described through Name, Identifier and Roles.
     *
     * @var \DedexBundle\Entity\Ern411\CharacterType[] $character
     */
    private $character = [
        
    ];

    /**
     * A Composite containing details of RightsController of Rights in the SoundRecording.
     *
     * @var \DedexBundle\Entity\Ern411\ResourceRightsControllerType[] $resourceRightsController
     */
    private $resourceRightsController = [
        
    ];

    /**
     * A Composite containing details of RightsController of Rights in the Work.
     *
     * @var \DedexBundle\Entity\Ern411\WorkRightsControllerType[] $workRightsController
     */
    private $workRightsController = [
        
    ];

    /**
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @var \DedexBundle\Entity\Ern411\PLineWithDefaultType[] $pLine
     */
    private $pLine = [
        
    ];

    /**
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the SoundRecording.
     *
     * @var \DedexBundle\Entity\Ern411\CourtesyLineWithDefaultType[] $courtesyLine
     */
    private $courtesyLine = [
        
    ];

    /**
     * The Duration of the SoundRecording (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern411\EventDateWithoutFlagsType $creationDate
     */
    private $creationDate = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was originally mastered (in either analogue or digital form). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern411\EventDateWithoutFlagsType $masteredDate
     */
    private $masteredDate = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was re-mastered (usually digitally). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern411\EventDateWithoutFlagsType $remasteredDate
     */
    private $remasteredDate = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern411\FirstPublicationDateType[] $firstPublicationDate
     */
    private $firstPublicationDate = [
        
    ];

    /**
     * A Composite containing details of the classification of the SoundRecording according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @var \DedexBundle\Entity\Ern411\ParentalWarningTypeWithTerritoryType[] $parentalWarningType
     */
    private $parentalWarningType = [
        
    ];

    /**
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current SoundRecording.
     *
     * @var \DedexBundle\Entity\Ern411\RelatedReleaseType[] $relatedRelease
     */
    private $relatedRelease = [
        
    ];

    /**
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current SoundRecording.
     *
     * @var \DedexBundle\Entity\Ern411\RelatedResourceType[] $relatedResource
     */
    private $relatedResource = [
        
    ];

    /**
     * A Type of the SoundRecording indicating whether it is a Medley or a Potpourri.
     *
     * @var string $compositeMusicalWorkType
     */
    private $compositeMusicalWorkType = null;

    /**
     * A Flag indicating whether the SoundRecording is a Cover (=true) or not (=false). This is not legal information, but meant to help consumers to differentiate originals from covers.
     *
     * @var bool $isCover
     */
    private $isCover = null;

    /**
     * The Flag indicating whether the SoundRecording is instrumental (=true) or not (=false).
     *
     * @var bool $isInstrumental
     */
    private $isInstrumental = null;

    /**
     * The Flag indicating whether the SoundRecording contains content that is hidden in some way from the Consumer (=true) or not (=false).
     *
     * @var bool $containsHiddenContent
     */
    private $containsHiddenContent = null;

    /**
     * The Flag indicating whether the SoundRecording is remastered (=true) or not (=false).
     *
     * @var bool $isRemastered
     */
    private $isRemastered = null;

    /**
     * The Flag indicating whether the SoundRecording meets the criteria to carry the HiResMusic logo, provided the MessageRecipient meets all the other requirements to use it (=true) or not (=false).
     *
     * @var bool $isHiResMusic
     */
    private $isHiResMusic = null;

    /**
     * A Role and instrumentation for which a Party is credited.
     *
     * @var \DedexBundle\Entity\Ern411\DisplayCreditsType[] $displayCredits
     */
    private $displayCredits = [
        
    ];

    /**
     * The Language of the Performance recorded in the SoundRecording (represented by an ISO 639 LanguageCode).
     *
     * @var string[] $languageOfPerformance
     */
    private $languageOfPerformance = [
        
    ];

    /**
     * A configuration of audio channels.
     *
     * @var string $audioChannelConfiguration
     */
    private $audioChannelConfiguration = null;

    /**
     * A Composite containing technical details of the SoundRecording.
     *
     * @var \DedexBundle\Entity\Ern411\TechnicalSoundRecordingDetailsType[] $technicalDetails
     */
    private $technicalDetails = [
        
    ];

    /**
     * A Description of the melodic mode of a MusicalWork in the SoundRecording.
     *
     * @var \DedexBundle\Entity\Ern411\RagaType[] $raga
     */
    private $raga = [
        
    ];

    /**
     * A Description of the rhythmic pattern of a MusicalWork in the SoundRecording.
     *
     * @var \DedexBundle\Entity\Ern411\TalaType[] $tala
     */
    private $tala = [
        
    ];

    /**
     * A deity name relating to the SoundRecording.
     *
     * @var \DedexBundle\Entity\Ern411\DeityType[] $deity
     */
    private $deity = [
        
    ];

    /**
     * A Reference for a Chapter (specific to this Message). This is a LocalCollectionAnchorReference starting with the letter X.
     *
     * @var string[] $audioChapterReference
     */
    private $audioChapterReference = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the SoundRecording as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the SoundRecording as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Flag indicating whether the SoundRecording is provided in a addition to the Resources that form part of the Release (=true) or not (=false). If the flag is set to false (or absent) the SoundRecording is part of at least one Release in the message. This is represented in an XML schema as an XML Attribute.
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
     * The Flag indicating whether the SoundRecording is provided in a addition to the Resources that form part of the Release (=true) or not (=false). If the flag is set to false (or absent) the SoundRecording is part of at least one Release in the message. This is represented in an XML schema as an XML Attribute.
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
     * The Identifier (specific to the Message) of the SoundRecording within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
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
     * The Identifier (specific to the Message) of the SoundRecording within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
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
     * A Composite containing details of the Type of the SoundRecording.
     *
     * @return \DedexBundle\Entity\Ern411\SoundRecordingTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A Composite containing details of the Type of the SoundRecording.
     *
     * @param \DedexBundle\Entity\Ern411\SoundRecordingTypeType $type
     * @return self
     */
    public function setType(\DedexBundle\Entity\Ern411\SoundRecordingTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as resourceId
     *
     * A Composite containing details of a SoundRecordingId.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\SoundRecordingIdType $resourceId
     */
    public function addToResourceId(\DedexBundle\Entity\Ern411\SoundRecordingIdType $resourceId)
    {
        $this->resourceId[] = $resourceId;
        return $this;
    }

    /**
     * isset resourceId
     *
     * A Composite containing details of a SoundRecordingId.
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
     * A Composite containing details of a SoundRecordingId.
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
     * A Composite containing details of a SoundRecordingId.
     *
     * @return \DedexBundle\Entity\Ern411\SoundRecordingIdType[]
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * Sets a new resourceId
     *
     * A Composite containing details of a SoundRecordingId.
     *
     * @param \DedexBundle\Entity\Ern411\SoundRecordingIdType[] $resourceId
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
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the SoundRecording.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\MusicalWorkIdType $workId
     */
    public function addToWorkId(\DedexBundle\Entity\Ern411\MusicalWorkIdType $workId)
    {
        $this->workId[] = $workId;
        return $this;
    }

    /**
     * isset workId
     *
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the SoundRecording.
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
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the SoundRecording.
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
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the SoundRecording.
     *
     * @return \DedexBundle\Entity\Ern411\MusicalWorkIdType[]
     */
    public function getWorkId()
    {
        return $this->workId;
    }

    /**
     * Sets a new workId
     *
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the SoundRecording.
     *
     * @param \DedexBundle\Entity\Ern411\MusicalWorkIdType[] $workId
     * @return self
     */
    public function setWorkId(array $workId)
    {
        $this->workId = $workId;
        return $this;
    }

    /**
     * Adds as displayTitleText
     *
     * A Composite containing details of a Title of the SoundRecording as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\DisplayTitleTextType $displayTitleText
     */
    public function addToDisplayTitleText(\DedexBundle\Entity\Ern411\DisplayTitleTextType $displayTitleText)
    {
        $this->displayTitleText[] = $displayTitleText;
        return $this;
    }

    /**
     * isset displayTitleText
     *
     * A Composite containing details of a Title of the SoundRecording as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
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
     * A Composite containing details of a Title of the SoundRecording as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
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
     * A Composite containing details of a Title of the SoundRecording as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @return \DedexBundle\Entity\Ern411\DisplayTitleTextType[]
     */
    public function getDisplayTitleText()
    {
        return $this->displayTitleText;
    }

    /**
     * Sets a new displayTitleText
     *
     * A Composite containing details of a Title of the SoundRecording as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @param \DedexBundle\Entity\Ern411\DisplayTitleTextType[] $displayTitleText
     * @return self
     */
    public function setDisplayTitleText(array $displayTitleText)
    {
        $this->displayTitleText = $displayTitleText;
        return $this;
    }

    /**
     * Adds as displayTitle
     *
     * A Composite containing details of a Title of the SoundRecording as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\DisplayTitleType $displayTitle
     */
    public function addToDisplayTitle(\DedexBundle\Entity\Ern411\DisplayTitleType $displayTitle)
    {
        $this->displayTitle[] = $displayTitle;
        return $this;
    }

    /**
     * isset displayTitle
     *
     * A Composite containing details of a Title of the SoundRecording as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
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
     * A Composite containing details of a Title of the SoundRecording as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
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
     * A Composite containing details of a Title of the SoundRecording as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @return \DedexBundle\Entity\Ern411\DisplayTitleType[]
     */
    public function getDisplayTitle()
    {
        return $this->displayTitle;
    }

    /**
     * Sets a new displayTitle
     *
     * A Composite containing details of a Title of the SoundRecording as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @param \DedexBundle\Entity\Ern411\DisplayTitleType[] $displayTitle
     * @return self
     */
    public function setDisplayTitle(array $displayTitle)
    {
        $this->displayTitle = $displayTitle;
        return $this;
    }

    /**
     * Adds as additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the SoundRecording. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\AdditionalTitleType $additionalTitle
     */
    public function addToAdditionalTitle(\DedexBundle\Entity\Ern411\AdditionalTitleType $additionalTitle)
    {
        $this->additionalTitle[] = $additionalTitle;
        return $this;
    }

    /**
     * isset additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the SoundRecording. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
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
     * A Composite containing details of an AdditionalTitle of the SoundRecording. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
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
     * A Composite containing details of an AdditionalTitle of the SoundRecording. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return \DedexBundle\Entity\Ern411\AdditionalTitleType[]
     */
    public function getAdditionalTitle()
    {
        return $this->additionalTitle;
    }

    /**
     * Sets a new additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the SoundRecording. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param \DedexBundle\Entity\Ern411\AdditionalTitleType[] $additionalTitle
     * @return self
     */
    public function setAdditionalTitle(array $additionalTitle)
    {
        $this->additionalTitle = $additionalTitle;
        return $this;
    }

    /**
     * Adds as versionType
     *
     * A Composite containing details of a Type of Version of the SoundRecording.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\VersionTypeType $versionType
     */
    public function addToVersionType(\DedexBundle\Entity\Ern411\VersionTypeType $versionType)
    {
        $this->versionType[] = $versionType;
        return $this;
    }

    /**
     * isset versionType
     *
     * A Composite containing details of a Type of Version of the SoundRecording.
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
     * A Composite containing details of a Type of Version of the SoundRecording.
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
     * A Composite containing details of a Type of Version of the SoundRecording.
     *
     * @return \DedexBundle\Entity\Ern411\VersionTypeType[]
     */
    public function getVersionType()
    {
        return $this->versionType;
    }

    /**
     * Sets a new versionType
     *
     * A Composite containing details of a Type of Version of the SoundRecording.
     *
     * @param \DedexBundle\Entity\Ern411\VersionTypeType[] $versionType
     * @return self
     */
    public function setVersionType(array $versionType)
    {
        $this->versionType = $versionType;
        return $this;
    }

    /**
     * Adds as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\DisplayArtistNameWithDefaultType $displayArtistName
     */
    public function addToDisplayArtistName(\DedexBundle\Entity\Ern411\DisplayArtistNameWithDefaultType $displayArtistName)
    {
        $this->displayArtistName[] = $displayArtistName;
        return $this;
    }

    /**
     * isset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
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
     *
     * @return \DedexBundle\Entity\Ern411\DisplayArtistNameWithDefaultType[]
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     *
     * @param \DedexBundle\Entity\Ern411\DisplayArtistNameWithDefaultType[] $displayArtistName
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
     * A Composite containing details of the DisplayArtist for the SoundRecording. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\DisplayArtistType $displayArtist
     */
    public function addToDisplayArtist(\DedexBundle\Entity\Ern411\DisplayArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A Composite containing details of the DisplayArtist for the SoundRecording. The DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of the DisplayArtist for the SoundRecording. The DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of the DisplayArtist for the SoundRecording. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @return \DedexBundle\Entity\Ern411\DisplayArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A Composite containing details of the DisplayArtist for the SoundRecording. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @param \DedexBundle\Entity\Ern411\DisplayArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Adds as contributor
     *
     * A Composite containing details of a Contributor to the SoundRecording.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\ContributorType $contributor
     */
    public function addToContributor(\DedexBundle\Entity\Ern411\ContributorType $contributor)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * isset contributor
     *
     * A Composite containing details of a Contributor to the SoundRecording.
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
     * A Composite containing details of a Contributor to the SoundRecording.
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
     * A Composite containing details of a Contributor to the SoundRecording.
     *
     * @return \DedexBundle\Entity\Ern411\ContributorType[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Sets a new contributor
     *
     * A Composite containing details of a Contributor to the SoundRecording.
     *
     * @param \DedexBundle\Entity\Ern411\ContributorType[] $contributor
     * @return self
     */
    public function setContributor(array $contributor)
    {
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * Adds as character
     *
     * A Composite containing details of a Character in the SoundRecording. A Character may be described through Name, Identifier and Roles.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\CharacterType $character
     */
    public function addToCharacter(\DedexBundle\Entity\Ern411\CharacterType $character)
    {
        $this->character[] = $character;
        return $this;
    }

    /**
     * isset character
     *
     * A Composite containing details of a Character in the SoundRecording. A Character may be described through Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharacter($index)
    {
        return isset($this->character[$index]);
    }

    /**
     * unset character
     *
     * A Composite containing details of a Character in the SoundRecording. A Character may be described through Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharacter($index)
    {
        unset($this->character[$index]);
    }

    /**
     * Gets as character
     *
     * A Composite containing details of a Character in the SoundRecording. A Character may be described through Name, Identifier and Roles.
     *
     * @return \DedexBundle\Entity\Ern411\CharacterType[]
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * Sets a new character
     *
     * A Composite containing details of a Character in the SoundRecording. A Character may be described through Name, Identifier and Roles.
     *
     * @param \DedexBundle\Entity\Ern411\CharacterType[] $character
     * @return self
     */
    public function setCharacter(array $character)
    {
        $this->character = $character;
        return $this;
    }

    /**
     * Adds as resourceRightsController
     *
     * A Composite containing details of RightsController of Rights in the SoundRecording.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\ResourceRightsControllerType $resourceRightsController
     */
    public function addToResourceRightsController(\DedexBundle\Entity\Ern411\ResourceRightsControllerType $resourceRightsController)
    {
        $this->resourceRightsController[] = $resourceRightsController;
        return $this;
    }

    /**
     * isset resourceRightsController
     *
     * A Composite containing details of RightsController of Rights in the SoundRecording.
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
     * A Composite containing details of RightsController of Rights in the SoundRecording.
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
     * A Composite containing details of RightsController of Rights in the SoundRecording.
     *
     * @return \DedexBundle\Entity\Ern411\ResourceRightsControllerType[]
     */
    public function getResourceRightsController()
    {
        return $this->resourceRightsController;
    }

    /**
     * Sets a new resourceRightsController
     *
     * A Composite containing details of RightsController of Rights in the SoundRecording.
     *
     * @param \DedexBundle\Entity\Ern411\ResourceRightsControllerType[] $resourceRightsController
     * @return self
     */
    public function setResourceRightsController(array $resourceRightsController)
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
     * @param \DedexBundle\Entity\Ern411\WorkRightsControllerType $workRightsController
     */
    public function addToWorkRightsController(\DedexBundle\Entity\Ern411\WorkRightsControllerType $workRightsController)
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
     * @return \DedexBundle\Entity\Ern411\WorkRightsControllerType[]
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
     * @param \DedexBundle\Entity\Ern411\WorkRightsControllerType[] $workRightsController
     * @return self
     */
    public function setWorkRightsController(array $workRightsController)
    {
        $this->workRightsController = $workRightsController;
        return $this;
    }

    /**
     * Adds as pLine
     *
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\PLineWithDefaultType $pLine
     */
    public function addToPLine(\DedexBundle\Entity\Ern411\PLineWithDefaultType $pLine)
    {
        $this->pLine[] = $pLine;
        return $this;
    }

    /**
     * isset pLine
     *
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPLine($index)
    {
        return isset($this->pLine[$index]);
    }

    /**
     * unset pLine
     *
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPLine($index)
    {
        unset($this->pLine[$index]);
    }

    /**
     * Gets as pLine
     *
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @return \DedexBundle\Entity\Ern411\PLineWithDefaultType[]
     */
    public function getPLine()
    {
        return $this->pLine;
    }

    /**
     * Sets a new pLine
     *
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @param \DedexBundle\Entity\Ern411\PLineWithDefaultType[] $pLine
     * @return self
     */
    public function setPLine(array $pLine)
    {
        $this->pLine = $pLine;
        return $this;
    }

    /**
     * Adds as courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the SoundRecording.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\CourtesyLineWithDefaultType $courtesyLine
     */
    public function addToCourtesyLine(\DedexBundle\Entity\Ern411\CourtesyLineWithDefaultType $courtesyLine)
    {
        $this->courtesyLine[] = $courtesyLine;
        return $this;
    }

    /**
     * isset courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the SoundRecording.
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
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the SoundRecording.
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
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the SoundRecording.
     *
     * @return \DedexBundle\Entity\Ern411\CourtesyLineWithDefaultType[]
     */
    public function getCourtesyLine()
    {
        return $this->courtesyLine;
    }

    /**
     * Sets a new courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the SoundRecording.
     *
     * @param \DedexBundle\Entity\Ern411\CourtesyLineWithDefaultType[] $courtesyLine
     * @return self
     */
    public function setCourtesyLine(array $courtesyLine)
    {
        $this->courtesyLine = $courtesyLine;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The Duration of the SoundRecording (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The Duration of the SoundRecording (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as creationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern411\EventDateWithoutFlagsType
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets a new creationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern411\EventDateWithoutFlagsType $creationDate
     * @return self
     */
    public function setCreationDate(\DedexBundle\Entity\Ern411\EventDateWithoutFlagsType $creationDate)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Gets as masteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was originally mastered (in either analogue or digital form). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern411\EventDateWithoutFlagsType
     */
    public function getMasteredDate()
    {
        return $this->masteredDate;
    }

    /**
     * Sets a new masteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was originally mastered (in either analogue or digital form). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern411\EventDateWithoutFlagsType $masteredDate
     * @return self
     */
    public function setMasteredDate(\DedexBundle\Entity\Ern411\EventDateWithoutFlagsType $masteredDate)
    {
        $this->masteredDate = $masteredDate;
        return $this;
    }

    /**
     * Gets as remasteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was re-mastered (usually digitally). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern411\EventDateWithoutFlagsType
     */
    public function getRemasteredDate()
    {
        return $this->remasteredDate;
    }

    /**
     * Sets a new remasteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was re-mastered (usually digitally). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern411\EventDateWithoutFlagsType $remasteredDate
     * @return self
     */
    public function setRemasteredDate(\DedexBundle\Entity\Ern411\EventDateWithoutFlagsType $remasteredDate)
    {
        $this->remasteredDate = $remasteredDate;
        return $this;
    }

    /**
     * Adds as firstPublicationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\FirstPublicationDateType $firstPublicationDate
     */
    public function addToFirstPublicationDate(\DedexBundle\Entity\Ern411\FirstPublicationDateType $firstPublicationDate)
    {
        $this->firstPublicationDate[] = $firstPublicationDate;
        return $this;
    }

    /**
     * isset firstPublicationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern411\FirstPublicationDateType[]
     */
    public function getFirstPublicationDate()
    {
        return $this->firstPublicationDate;
    }

    /**
     * Sets a new firstPublicationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern411\FirstPublicationDateType[] $firstPublicationDate
     * @return self
     */
    public function setFirstPublicationDate(array $firstPublicationDate)
    {
        $this->firstPublicationDate = $firstPublicationDate;
        return $this;
    }

    /**
     * Adds as parentalWarningType
     *
     * A Composite containing details of the classification of the SoundRecording according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\ParentalWarningTypeWithTerritoryType $parentalWarningType
     */
    public function addToParentalWarningType(\DedexBundle\Entity\Ern411\ParentalWarningTypeWithTerritoryType $parentalWarningType)
    {
        $this->parentalWarningType[] = $parentalWarningType;
        return $this;
    }

    /**
     * isset parentalWarningType
     *
     * A Composite containing details of the classification of the SoundRecording according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A Composite containing details of the classification of the SoundRecording according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A Composite containing details of the classification of the SoundRecording according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return \DedexBundle\Entity\Ern411\ParentalWarningTypeWithTerritoryType[]
     */
    public function getParentalWarningType()
    {
        return $this->parentalWarningType;
    }

    /**
     * Sets a new parentalWarningType
     *
     * A Composite containing details of the classification of the SoundRecording according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param \DedexBundle\Entity\Ern411\ParentalWarningTypeWithTerritoryType[] $parentalWarningType
     * @return self
     */
    public function setParentalWarningType(array $parentalWarningType)
    {
        $this->parentalWarningType = $parentalWarningType;
        return $this;
    }

    /**
     * Adds as relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current SoundRecording.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\RelatedReleaseType $relatedRelease
     */
    public function addToRelatedRelease(\DedexBundle\Entity\Ern411\RelatedReleaseType $relatedRelease)
    {
        $this->relatedRelease[] = $relatedRelease;
        return $this;
    }

    /**
     * isset relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current SoundRecording.
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
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current SoundRecording.
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
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current SoundRecording.
     *
     * @return \DedexBundle\Entity\Ern411\RelatedReleaseType[]
     */
    public function getRelatedRelease()
    {
        return $this->relatedRelease;
    }

    /**
     * Sets a new relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current SoundRecording.
     *
     * @param \DedexBundle\Entity\Ern411\RelatedReleaseType[] $relatedRelease
     * @return self
     */
    public function setRelatedRelease(array $relatedRelease)
    {
        $this->relatedRelease = $relatedRelease;
        return $this;
    }

    /**
     * Adds as relatedResource
     *
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current SoundRecording.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\RelatedResourceType $relatedResource
     */
    public function addToRelatedResource(\DedexBundle\Entity\Ern411\RelatedResourceType $relatedResource)
    {
        $this->relatedResource[] = $relatedResource;
        return $this;
    }

    /**
     * isset relatedResource
     *
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current SoundRecording.
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
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current SoundRecording.
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
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current SoundRecording.
     *
     * @return \DedexBundle\Entity\Ern411\RelatedResourceType[]
     */
    public function getRelatedResource()
    {
        return $this->relatedResource;
    }

    /**
     * Sets a new relatedResource
     *
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current SoundRecording.
     *
     * @param \DedexBundle\Entity\Ern411\RelatedResourceType[] $relatedResource
     * @return self
     */
    public function setRelatedResource(array $relatedResource)
    {
        $this->relatedResource = $relatedResource;
        return $this;
    }

    /**
     * Gets as compositeMusicalWorkType
     *
     * A Type of the SoundRecording indicating whether it is a Medley or a Potpourri.
     *
     * @return string
     */
    public function getCompositeMusicalWorkType()
    {
        return $this->compositeMusicalWorkType;
    }

    /**
     * Sets a new compositeMusicalWorkType
     *
     * A Type of the SoundRecording indicating whether it is a Medley or a Potpourri.
     *
     * @param string $compositeMusicalWorkType
     * @return self
     */
    public function setCompositeMusicalWorkType($compositeMusicalWorkType)
    {
        $this->compositeMusicalWorkType = $compositeMusicalWorkType;
        return $this;
    }

    /**
     * Gets as isCover
     *
     * A Flag indicating whether the SoundRecording is a Cover (=true) or not (=false). This is not legal information, but meant to help consumers to differentiate originals from covers.
     *
     * @return bool
     */
    public function getIsCover()
    {
        return $this->isCover;
    }

    /**
     * Sets a new isCover
     *
     * A Flag indicating whether the SoundRecording is a Cover (=true) or not (=false). This is not legal information, but meant to help consumers to differentiate originals from covers.
     *
     * @param bool $isCover
     * @return self
     */
    public function setIsCover($isCover)
    {
        $this->isCover = $isCover;
        return $this;
    }

    /**
     * Gets as isInstrumental
     *
     * The Flag indicating whether the SoundRecording is instrumental (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsInstrumental()
    {
        return $this->isInstrumental;
    }

    /**
     * Sets a new isInstrumental
     *
     * The Flag indicating whether the SoundRecording is instrumental (=true) or not (=false).
     *
     * @param bool $isInstrumental
     * @return self
     */
    public function setIsInstrumental($isInstrumental)
    {
        $this->isInstrumental = $isInstrumental;
        return $this;
    }

    /**
     * Gets as containsHiddenContent
     *
     * The Flag indicating whether the SoundRecording contains content that is hidden in some way from the Consumer (=true) or not (=false).
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
     * The Flag indicating whether the SoundRecording contains content that is hidden in some way from the Consumer (=true) or not (=false).
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
     * Gets as isRemastered
     *
     * The Flag indicating whether the SoundRecording is remastered (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsRemastered()
    {
        return $this->isRemastered;
    }

    /**
     * Sets a new isRemastered
     *
     * The Flag indicating whether the SoundRecording is remastered (=true) or not (=false).
     *
     * @param bool $isRemastered
     * @return self
     */
    public function setIsRemastered($isRemastered)
    {
        $this->isRemastered = $isRemastered;
        return $this;
    }

    /**
     * Gets as isHiResMusic
     *
     * The Flag indicating whether the SoundRecording meets the criteria to carry the HiResMusic logo, provided the MessageRecipient meets all the other requirements to use it (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsHiResMusic()
    {
        return $this->isHiResMusic;
    }

    /**
     * Sets a new isHiResMusic
     *
     * The Flag indicating whether the SoundRecording meets the criteria to carry the HiResMusic logo, provided the MessageRecipient meets all the other requirements to use it (=true) or not (=false).
     *
     * @param bool $isHiResMusic
     * @return self
     */
    public function setIsHiResMusic($isHiResMusic)
    {
        $this->isHiResMusic = $isHiResMusic;
        return $this;
    }

    /**
     * Adds as displayCredits
     *
     * A Role and instrumentation for which a Party is credited.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\DisplayCreditsType $displayCredits
     */
    public function addToDisplayCredits(\DedexBundle\Entity\Ern411\DisplayCreditsType $displayCredits)
    {
        $this->displayCredits[] = $displayCredits;
        return $this;
    }

    /**
     * isset displayCredits
     *
     * A Role and instrumentation for which a Party is credited.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayCredits($index)
    {
        return isset($this->displayCredits[$index]);
    }

    /**
     * unset displayCredits
     *
     * A Role and instrumentation for which a Party is credited.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayCredits($index)
    {
        unset($this->displayCredits[$index]);
    }

    /**
     * Gets as displayCredits
     *
     * A Role and instrumentation for which a Party is credited.
     *
     * @return \DedexBundle\Entity\Ern411\DisplayCreditsType[]
     */
    public function getDisplayCredits()
    {
        return $this->displayCredits;
    }

    /**
     * Sets a new displayCredits
     *
     * A Role and instrumentation for which a Party is credited.
     *
     * @param \DedexBundle\Entity\Ern411\DisplayCreditsType[] $displayCredits
     * @return self
     */
    public function setDisplayCredits(array $displayCredits)
    {
        $this->displayCredits = $displayCredits;
        return $this;
    }

    /**
     * Adds as languageOfPerformance
     *
     * The Language of the Performance recorded in the SoundRecording (represented by an ISO 639 LanguageCode).
     *
     * @return self
     * @param string $languageOfPerformance
     */
    public function addToLanguageOfPerformance($languageOfPerformance)
    {
        $this->languageOfPerformance[] = $languageOfPerformance;
        return $this;
    }

    /**
     * isset languageOfPerformance
     *
     * The Language of the Performance recorded in the SoundRecording (represented by an ISO 639 LanguageCode).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguageOfPerformance($index)
    {
        return isset($this->languageOfPerformance[$index]);
    }

    /**
     * unset languageOfPerformance
     *
     * The Language of the Performance recorded in the SoundRecording (represented by an ISO 639 LanguageCode).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguageOfPerformance($index)
    {
        unset($this->languageOfPerformance[$index]);
    }

    /**
     * Gets as languageOfPerformance
     *
     * The Language of the Performance recorded in the SoundRecording (represented by an ISO 639 LanguageCode).
     *
     * @return string[]
     */
    public function getLanguageOfPerformance()
    {
        return $this->languageOfPerformance;
    }

    /**
     * Sets a new languageOfPerformance
     *
     * The Language of the Performance recorded in the SoundRecording (represented by an ISO 639 LanguageCode).
     *
     * @param string $languageOfPerformance
     * @return self
     */
    public function setLanguageOfPerformance(array $languageOfPerformance)
    {
        $this->languageOfPerformance = $languageOfPerformance;
        return $this;
    }

    /**
     * Gets as audioChannelConfiguration
     *
     * A configuration of audio channels.
     *
     * @return string
     */
    public function getAudioChannelConfiguration()
    {
        return $this->audioChannelConfiguration;
    }

    /**
     * Sets a new audioChannelConfiguration
     *
     * A configuration of audio channels.
     *
     * @param string $audioChannelConfiguration
     * @return self
     */
    public function setAudioChannelConfiguration($audioChannelConfiguration)
    {
        $this->audioChannelConfiguration = $audioChannelConfiguration;
        return $this;
    }

    /**
     * Adds as technicalDetails
     *
     * A Composite containing technical details of the SoundRecording.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\TechnicalSoundRecordingDetailsType $technicalDetails
     */
    public function addToTechnicalDetails(\DedexBundle\Entity\Ern411\TechnicalSoundRecordingDetailsType $technicalDetails)
    {
        $this->technicalDetails[] = $technicalDetails;
        return $this;
    }

    /**
     * isset technicalDetails
     *
     * A Composite containing technical details of the SoundRecording.
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
     * A Composite containing technical details of the SoundRecording.
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
     * A Composite containing technical details of the SoundRecording.
     *
     * @return \DedexBundle\Entity\Ern411\TechnicalSoundRecordingDetailsType[]
     */
    public function getTechnicalDetails()
    {
        return $this->technicalDetails;
    }

    /**
     * Sets a new technicalDetails
     *
     * A Composite containing technical details of the SoundRecording.
     *
     * @param \DedexBundle\Entity\Ern411\TechnicalSoundRecordingDetailsType[] $technicalDetails
     * @return self
     */
    public function setTechnicalDetails(array $technicalDetails)
    {
        $this->technicalDetails = $technicalDetails;
        return $this;
    }

    /**
     * Adds as raga
     *
     * A Description of the melodic mode of a MusicalWork in the SoundRecording.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\RagaType $raga
     */
    public function addToRaga(\DedexBundle\Entity\Ern411\RagaType $raga)
    {
        $this->raga[] = $raga;
        return $this;
    }

    /**
     * isset raga
     *
     * A Description of the melodic mode of a MusicalWork in the SoundRecording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRaga($index)
    {
        return isset($this->raga[$index]);
    }

    /**
     * unset raga
     *
     * A Description of the melodic mode of a MusicalWork in the SoundRecording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRaga($index)
    {
        unset($this->raga[$index]);
    }

    /**
     * Gets as raga
     *
     * A Description of the melodic mode of a MusicalWork in the SoundRecording.
     *
     * @return \DedexBundle\Entity\Ern411\RagaType[]
     */
    public function getRaga()
    {
        return $this->raga;
    }

    /**
     * Sets a new raga
     *
     * A Description of the melodic mode of a MusicalWork in the SoundRecording.
     *
     * @param \DedexBundle\Entity\Ern411\RagaType[] $raga
     * @return self
     */
    public function setRaga(array $raga)
    {
        $this->raga = $raga;
        return $this;
    }

    /**
     * Adds as tala
     *
     * A Description of the rhythmic pattern of a MusicalWork in the SoundRecording.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\TalaType $tala
     */
    public function addToTala(\DedexBundle\Entity\Ern411\TalaType $tala)
    {
        $this->tala[] = $tala;
        return $this;
    }

    /**
     * isset tala
     *
     * A Description of the rhythmic pattern of a MusicalWork in the SoundRecording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTala($index)
    {
        return isset($this->tala[$index]);
    }

    /**
     * unset tala
     *
     * A Description of the rhythmic pattern of a MusicalWork in the SoundRecording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTala($index)
    {
        unset($this->tala[$index]);
    }

    /**
     * Gets as tala
     *
     * A Description of the rhythmic pattern of a MusicalWork in the SoundRecording.
     *
     * @return \DedexBundle\Entity\Ern411\TalaType[]
     */
    public function getTala()
    {
        return $this->tala;
    }

    /**
     * Sets a new tala
     *
     * A Description of the rhythmic pattern of a MusicalWork in the SoundRecording.
     *
     * @param \DedexBundle\Entity\Ern411\TalaType[] $tala
     * @return self
     */
    public function setTala(array $tala)
    {
        $this->tala = $tala;
        return $this;
    }

    /**
     * Adds as deity
     *
     * A deity name relating to the SoundRecording.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\DeityType $deity
     */
    public function addToDeity(\DedexBundle\Entity\Ern411\DeityType $deity)
    {
        $this->deity[] = $deity;
        return $this;
    }

    /**
     * isset deity
     *
     * A deity name relating to the SoundRecording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeity($index)
    {
        return isset($this->deity[$index]);
    }

    /**
     * unset deity
     *
     * A deity name relating to the SoundRecording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeity($index)
    {
        unset($this->deity[$index]);
    }

    /**
     * Gets as deity
     *
     * A deity name relating to the SoundRecording.
     *
     * @return \DedexBundle\Entity\Ern411\DeityType[]
     */
    public function getDeity()
    {
        return $this->deity;
    }

    /**
     * Sets a new deity
     *
     * A deity name relating to the SoundRecording.
     *
     * @param \DedexBundle\Entity\Ern411\DeityType[] $deity
     * @return self
     */
    public function setDeity(array $deity)
    {
        $this->deity = $deity;
        return $this;
    }

    /**
     * Adds as audioChapterReference
     *
     * A Reference for a Chapter (specific to this Message). This is a LocalCollectionAnchorReference starting with the letter X.
     *
     * @return self
     * @param string $audioChapterReference
     */
    public function addToAudioChapterReference($audioChapterReference)
    {
        $this->audioChapterReference[] = $audioChapterReference;
        return $this;
    }

    /**
     * isset audioChapterReference
     *
     * A Reference for a Chapter (specific to this Message). This is a LocalCollectionAnchorReference starting with the letter X.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAudioChapterReference($index)
    {
        return isset($this->audioChapterReference[$index]);
    }

    /**
     * unset audioChapterReference
     *
     * A Reference for a Chapter (specific to this Message). This is a LocalCollectionAnchorReference starting with the letter X.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAudioChapterReference($index)
    {
        unset($this->audioChapterReference[$index]);
    }

    /**
     * Gets as audioChapterReference
     *
     * A Reference for a Chapter (specific to this Message). This is a LocalCollectionAnchorReference starting with the letter X.
     *
     * @return string[]
     */
    public function getAudioChapterReference()
    {
        return $this->audioChapterReference;
    }

    /**
     * Sets a new audioChapterReference
     *
     * A Reference for a Chapter (specific to this Message). This is a LocalCollectionAnchorReference starting with the letter X.
     *
     * @param string $audioChapterReference
     * @return self
     */
    public function setAudioChapterReference(array $audioChapterReference)
    {
        $this->audioChapterReference = $audioChapterReference;
        return $this;
    }


}

