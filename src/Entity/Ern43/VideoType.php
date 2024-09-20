<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing VideoType
 *
 * A Composite containing details of a Video.
 * XSD Type: Video
 */
class VideoType
{
    /**
     * The Language and script for the Elements of the Video as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The Flag indicating whether the Video is provided in a addition to the Resources that form part of the Release (=true) or not (=false). If the flag is set to false (or absent) the Video is part of at least one Release in the message. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isSupplemental
     */
    private $isSupplemental = null;

    /**
     * The Flag indicating whether the Video is part of the hierarchical structure indicated by the classical release profile variant used for the Message. If the flag is set to false (or absent) the rules for the classical release profile variant do not apply. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $applyClassicalProfileVariant
     */
    private $applyClassicalProfileVariant = null;

    /**
     * The Identifier (specific to the Message) of the Video within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A Composite containing details of the Type of the Video.
     *
     * @var \DedexBundle\Entity\Ern43\VideoTypeType $type
     */
    private $type = null;

    /**
     * A Composite containing details of a Video that has been created based on the same content as the 'main' Video but specifically for a different encoding for the audio such as immersive audio. It can be the same Video (in accordance with the ISRC standard) but more likely than not will be a different Video because the sound engineer/producer will be different. If an element in this Composite is not provided, the data is assumed to be the same as for the 'main' Video.
     *
     * @var \DedexBundle\Entity\Ern43\VideoEditionType[] $videoEdition
     */
    private $videoEdition = [
        
    ];

    /**
     * A Composite containing details of a Type of the Video based on its content, intended audience, format or technical characteristics.
     *
     * @var \DedexBundle\Entity\Ern43\RecordingFormatType[] $recordingFormat
     */
    private $recordingFormat = [
        
    ];

    /**
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the Video.
     *
     * @var \DedexBundle\Entity\Ern43\MusicalWorkIdType[] $workId
     */
    private $workId = [
        
    ];

    /**
     * A Composite containing details of a Title of the Video as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     *
     * @var \DedexBundle\Entity\Ern43\DisplayTitleTextType[] $displayTitleText
     */
    private $displayTitleText = [
        
    ];

    /**
     * A Composite containing details of a Title of the Video as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @var \DedexBundle\Entity\Ern43\DisplayTitleType[] $displayTitle
     */
    private $displayTitle = [
        
    ];

    /**
     * A Composite containing details of an AdditionalTitle of the Video. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @var \DedexBundle\Entity\Ern43\AdditionalTitleType[] $additionalTitle
     */
    private $additionalTitle = [
        
    ];

    /**
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one Video from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a Video that has been derived from another Video by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
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
     * A Composite containing details of the DisplayArtist for the Video. The DisplayArtist may be described through Name, Identifier and Roles.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/genres
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @var \DedexBundle\Entity\Ern43\DisplayArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * A Composite containing details of a Contributor to the Video.
     *
     * @var \DedexBundle\Entity\Ern43\ContributorType[] $contributor
     */
    private $contributor = [
        
    ];

    /**
     * A Composite containing details of a Character in the Video. A Character may be described through Name, Identifier and Roles.
     *
     * @var \DedexBundle\Entity\Ern43\CharacterType[] $character
     */
    private $character = [
        
    ];

    /**
     * A Composite containing details of RightsController of Rights in the Video.
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
     * A Composite containing an Annotation Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the Video.
     *
     * @var \DedexBundle\Entity\Ern43\CourtesyLineWithDefaultType[] $courtesyLine
     */
    private $courtesyLine = [
        
    ];

    /**
     * The Duration of the Video (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the Video was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern43\EventDateWithoutFlagsType $creationDate
     */
    private $creationDate = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the Video was originally mastered (in either analogue or digital form). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern43\EventDateWithoutFlagsType $masteredDate
     */
    private $masteredDate = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the Video was re-mastered (usually digitally). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern43\EventDateWithoutFlagsType[] $remasteredDate
     */
    private $remasteredDate = [
        
    ];

    /**
     * A Composite containing details of the Date and Place of the Event in which the Video was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern43\FulfillmentDateWithTerritoryType[] $firstPublicationDate
     */
    private $firstPublicationDate = [
        
    ];

    /**
     * A Composite containing details of the classification of the Video according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @var \DedexBundle\Entity\Ern43\ParentalWarningTypeWithTerritoryType[] $parentalWarningType
     */
    private $parentalWarningType = [
        
    ];

    /**
     * A Composite containing details of a rating for the Video.
     *
     * @var \DedexBundle\Entity\Ern43\AvRatingType[] $avRating
     */
    private $avRating = [
        
    ];

    /**
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current Video.
     *
     * @var \DedexBundle\Entity\Ern43\RelatedReleaseType[] $relatedRelease
     */
    private $relatedRelease = [
        
    ];

    /**
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current Video.
     *
     * @var \DedexBundle\Entity\Ern43\RelatedResourceType[] $relatedResource
     */
    private $relatedResource = [
        
    ];

    /**
     * A Type of the Video indicating whether it is a Medley or a Potpourri.
     *
     * @var string $compositeMusicalWorkType
     */
    private $compositeMusicalWorkType = null;

    /**
     * A Reference for a CueSheet (specific to this Message). This is a LocalCueSheetAnchorReference starting with the letter Q.
     *
     * @var string[] $videoCueSheetReference
     */
    private $videoCueSheetReference = [
        
    ];

    /**
     * A Composite containing the textual Description of the reason for the Identifier being used as a proxy.
     *
     * @var \DedexBundle\Entity\Ern43\ReasonType $reasonForCueSheetAbsence
     */
    private $reasonForCueSheetAbsence = null;

    /**
     * A Flag indicating whether the Video is a Cover (=true) or not (=false). This is not legal information, but meant to help consumers to differentiate originals from covers.
     *
     * @var bool $isCover
     */
    private $isCover = null;

    /**
     * A Flag indicating whether the Video relates to a (human) vocal Performance (=true) or not (=false).
     *
     * @var bool $hasVocalPerformance
     */
    private $hasVocalPerformance = null;

    /**
     * A Flag indicating whether the Video relates to a (human) vocal Performance that is not merely background vocals (=true) or not (=false).
     *
     * @var bool $hasForegroundVocalPerformance
     */
    private $hasForegroundVocalPerformance = null;

    /**
     * The Flag indicating whether the Video is instrumental (=true) or not (=false). This element is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @var bool $isInstrumental
     */
    private $isInstrumental = null;

    /**
     * The Flag indicating whether the Video contains content that is hidden in some way from the Consumer (=true) or not (=false).
     *
     * @var bool $containsHiddenContent
     */
    private $containsHiddenContent = null;

    /**
     * The Flag indicating whether the Video is remastered (=true) or not (=false).
     *
     * @var bool $isRemastered
     */
    private $isRemastered = null;

    /**
     * A Role and instrumentation for which a Party is credited.
     *
     * @var \DedexBundle\Entity\Ern43\DisplayCreditsType[] $displayCredits
     */
    private $displayCredits = [
        
    ];

    /**
     * The original Language of the Performance as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant].
     *
     * @var \DedexBundle\Entity\Ern43\LanguageType[] $languageOfPerformance
     */
    private $languageOfPerformance = [
        
    ];

    /**
     * The Language of dubbing used in the Video as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant].
     *
     * @var string[] $languageOfDubbing
     */
    private $languageOfDubbing = [
        
    ];

    /**
     * The Language of SubTitles in the Video as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant].
     *
     * @var string[] $subTitleLanguage
     */
    private $subTitleLanguage = [
        
    ];

    /**
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current Video.
     *
     * @var \DedexBundle\Entity\Ern43\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     */
    private $resourceContainedResourceReferenceList = null;

    /**
     * A Description of the melodic mode of a MusicalWork in the Video.
     *
     * @var string[] $raga
     */
    private $raga = [
        
    ];

    /**
     * A Description of the rhythmic pattern of a MusicalWork in the Video.
     *
     * @var string[] $tala
     */
    private $tala = [
        
    ];

    /**
     * A deity name relating to the Video.
     *
     * @var string[] $deity
     */
    private $deity = [
        
    ];

    /**
     * A Reference for a Chapter (specific to this Message). This is a LocalCollectionAnchorReference starting with the letter X.
     *
     * @var string[] $videoChapterReference
     */
    private $videoChapterReference = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the Video as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the Video as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Flag indicating whether the Video is provided in a addition to the Resources that form part of the Release (=true) or not (=false). If the flag is set to false (or absent) the Video is part of at least one Release in the message. This is represented in an XML schema as an XML Attribute.
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
     * The Flag indicating whether the Video is provided in a addition to the Resources that form part of the Release (=true) or not (=false). If the flag is set to false (or absent) the Video is part of at least one Release in the message. This is represented in an XML schema as an XML Attribute.
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
     * Gets as applyClassicalProfileVariant
     *
     * The Flag indicating whether the Video is part of the hierarchical structure indicated by the classical release profile variant used for the Message. If the flag is set to false (or absent) the rules for the classical release profile variant do not apply. This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getApplyClassicalProfileVariant()
    {
        return $this->applyClassicalProfileVariant;
    }

    /**
     * Sets a new applyClassicalProfileVariant
     *
     * The Flag indicating whether the Video is part of the hierarchical structure indicated by the classical release profile variant used for the Message. If the flag is set to false (or absent) the rules for the classical release profile variant do not apply. This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $applyClassicalProfileVariant
     * @return self
     */
    public function setApplyClassicalProfileVariant($applyClassicalProfileVariant)
    {
        $this->applyClassicalProfileVariant = $applyClassicalProfileVariant;
        return $this;
    }

    /**
     * Gets as resourceReference
     *
     * The Identifier (specific to the Message) of the Video within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
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
     * The Identifier (specific to the Message) of the Video within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
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
     * A Composite containing details of the Type of the Video.
     *
     * @return \DedexBundle\Entity\Ern43\VideoTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A Composite containing details of the Type of the Video.
     *
     * @param \DedexBundle\Entity\Ern43\VideoTypeType $type
     * @return self
     */
    public function setType(\DedexBundle\Entity\Ern43\VideoTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as videoEdition
     *
     * A Composite containing details of a Video that has been created based on the same content as the 'main' Video but specifically for a different encoding for the audio such as immersive audio. It can be the same Video (in accordance with the ISRC standard) but more likely than not will be a different Video because the sound engineer/producer will be different. If an element in this Composite is not provided, the data is assumed to be the same as for the 'main' Video.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\VideoEditionType $videoEdition
     */
    public function addToVideoEdition(\DedexBundle\Entity\Ern43\VideoEditionType $videoEdition)
    {
        $this->videoEdition[] = $videoEdition;
        return $this;
    }

    /**
     * isset videoEdition
     *
     * A Composite containing details of a Video that has been created based on the same content as the 'main' Video but specifically for a different encoding for the audio such as immersive audio. It can be the same Video (in accordance with the ISRC standard) but more likely than not will be a different Video because the sound engineer/producer will be different. If an element in this Composite is not provided, the data is assumed to be the same as for the 'main' Video.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVideoEdition($index)
    {
        return isset($this->videoEdition[$index]);
    }

    /**
     * unset videoEdition
     *
     * A Composite containing details of a Video that has been created based on the same content as the 'main' Video but specifically for a different encoding for the audio such as immersive audio. It can be the same Video (in accordance with the ISRC standard) but more likely than not will be a different Video because the sound engineer/producer will be different. If an element in this Composite is not provided, the data is assumed to be the same as for the 'main' Video.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVideoEdition($index)
    {
        unset($this->videoEdition[$index]);
    }

    /**
     * Gets as videoEdition
     *
     * A Composite containing details of a Video that has been created based on the same content as the 'main' Video but specifically for a different encoding for the audio such as immersive audio. It can be the same Video (in accordance with the ISRC standard) but more likely than not will be a different Video because the sound engineer/producer will be different. If an element in this Composite is not provided, the data is assumed to be the same as for the 'main' Video.
     *
     * @return \DedexBundle\Entity\Ern43\VideoEditionType[]
     */
    public function getVideoEdition()
    {
        return $this->videoEdition;
    }

    /**
     * Sets a new videoEdition
     *
     * A Composite containing details of a Video that has been created based on the same content as the 'main' Video but specifically for a different encoding for the audio such as immersive audio. It can be the same Video (in accordance with the ISRC standard) but more likely than not will be a different Video because the sound engineer/producer will be different. If an element in this Composite is not provided, the data is assumed to be the same as for the 'main' Video.
     *
     * @param \DedexBundle\Entity\Ern43\VideoEditionType[] $videoEdition
     * @return self
     */
    public function setVideoEdition(array $videoEdition)
    {
        $this->videoEdition = $videoEdition;
        return $this;
    }

    /**
     * Adds as recordingFormat
     *
     * A Composite containing details of a Type of the Video based on its content, intended audience, format or technical characteristics.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\RecordingFormatType $recordingFormat
     */
    public function addToRecordingFormat(\DedexBundle\Entity\Ern43\RecordingFormatType $recordingFormat)
    {
        $this->recordingFormat[] = $recordingFormat;
        return $this;
    }

    /**
     * isset recordingFormat
     *
     * A Composite containing details of a Type of the Video based on its content, intended audience, format or technical characteristics.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecordingFormat($index)
    {
        return isset($this->recordingFormat[$index]);
    }

    /**
     * unset recordingFormat
     *
     * A Composite containing details of a Type of the Video based on its content, intended audience, format or technical characteristics.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecordingFormat($index)
    {
        unset($this->recordingFormat[$index]);
    }

    /**
     * Gets as recordingFormat
     *
     * A Composite containing details of a Type of the Video based on its content, intended audience, format or technical characteristics.
     *
     * @return \DedexBundle\Entity\Ern43\RecordingFormatType[]
     */
    public function getRecordingFormat()
    {
        return $this->recordingFormat;
    }

    /**
     * Sets a new recordingFormat
     *
     * A Composite containing details of a Type of the Video based on its content, intended audience, format or technical characteristics.
     *
     * @param \DedexBundle\Entity\Ern43\RecordingFormatType[] $recordingFormat
     * @return self
     */
    public function setRecordingFormat(array $recordingFormat = null)
    {
        $this->recordingFormat = $recordingFormat;
        return $this;
    }

    /**
     * Adds as workId
     *
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the Video.
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
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the Video.
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
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the Video.
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
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the Video.
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
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the Video.
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
     * A Composite containing details of a Title of the Video as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
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
     * A Composite containing details of a Title of the Video as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
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
     * A Composite containing details of a Title of the Video as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
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
     * A Composite containing details of a Title of the Video as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
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
     * A Composite containing details of a Title of the Video as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     *
     * @param \DedexBundle\Entity\Ern43\DisplayTitleTextType[] $displayTitleText
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
     * A Composite containing details of a Title of the Video as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
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
     * A Composite containing details of a Title of the Video as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
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
     * A Composite containing details of a Title of the Video as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
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
     * A Composite containing details of a Title of the Video as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
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
     * A Composite containing details of a Title of the Video as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @param \DedexBundle\Entity\Ern43\DisplayTitleType[] $displayTitle
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
     * A Composite containing details of an AdditionalTitle of the Video. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
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
     * A Composite containing details of an AdditionalTitle of the Video. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
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
     * A Composite containing details of an AdditionalTitle of the Video. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
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
     * A Composite containing details of an AdditionalTitle of the Video. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
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
     * A Composite containing details of an AdditionalTitle of the Video. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
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
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one Video from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a Video that has been derived from another Video by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
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
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one Video from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a Video that has been derived from another Video by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
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
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one Video from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a Video that has been derived from another Video by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
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
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one Video from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a Video that has been derived from another Video by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
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
     * A Composite containing details of a Type of Version given by the releasing party to characterise and differentiate one Video from another with identical or similar Title metadata. VersionTypes may be used for disambiguating a Video that has been derived from another Video by using the value EditedVersion. EditedVersion value is often combined with another VersionType such as RadioVersion.
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
     * A Composite containing details of the DisplayArtist for the Video. The DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of the DisplayArtist for the Video. The DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of the DisplayArtist for the Video. The DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of the DisplayArtist for the Video. The DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of the DisplayArtist for the Video. The DisplayArtist may be described through Name, Identifier and Roles.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/genres
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @param \DedexBundle\Entity\Ern43\DisplayArtistType[] $displayArtist
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
     * A Composite containing details of a Contributor to the Video.
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
     * A Composite containing details of a Contributor to the Video.
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
     * A Composite containing details of a Contributor to the Video.
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
     * A Composite containing details of a Contributor to the Video.
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
     * A Composite containing details of a Contributor to the Video.
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
     * Adds as character
     *
     * A Composite containing details of a Character in the Video. A Character may be described through Name, Identifier and Roles.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\CharacterType $character
     */
    public function addToCharacter(\DedexBundle\Entity\Ern43\CharacterType $character)
    {
        $this->character[] = $character;
        return $this;
    }

    /**
     * isset character
     *
     * A Composite containing details of a Character in the Video. A Character may be described through Name, Identifier and Roles.
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
     * A Composite containing details of a Character in the Video. A Character may be described through Name, Identifier and Roles.
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
     * A Composite containing details of a Character in the Video. A Character may be described through Name, Identifier and Roles.
     *
     * @return \DedexBundle\Entity\Ern43\CharacterType[]
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * Sets a new character
     *
     * A Composite containing details of a Character in the Video. A Character may be described through Name, Identifier and Roles.
     *
     * @param \DedexBundle\Entity\Ern43\CharacterType[] $character
     * @return self
     */
    public function setCharacter(array $character = null)
    {
        $this->character = $character;
        return $this;
    }

    /**
     * Adds as resourceRightsController
     *
     * A Composite containing details of RightsController of Rights in the Video.
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
     * A Composite containing details of RightsController of Rights in the Video.
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
     * A Composite containing details of RightsController of Rights in the Video.
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
     * A Composite containing details of RightsController of Rights in the Video.
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
     * A Composite containing details of RightsController of Rights in the Video.
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
     * Adds as courtesyLine
     *
     * A Composite containing an Annotation Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the Video.
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
     * A Composite containing an Annotation Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the Video.
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
     * A Composite containing an Annotation Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the Video.
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
     * A Composite containing an Annotation Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the Video.
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
     * A Composite containing an Annotation Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the Video.
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
     * Gets as duration
     *
     * The Duration of the Video (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * The Duration of the Video (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * A Composite containing details of the Date and Place of the Event in which the Video was created. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Composite containing details of the Date and Place of the Event in which the Video was created. This is a string with the syntax YYYY[-MM[-DD]].
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
     * Gets as masteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was originally mastered (in either analogue or digital form). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern43\EventDateWithoutFlagsType
     */
    public function getMasteredDate()
    {
        return $this->masteredDate;
    }

    /**
     * Sets a new masteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was originally mastered (in either analogue or digital form). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern43\EventDateWithoutFlagsType $masteredDate
     * @return self
     */
    public function setMasteredDate(?\DedexBundle\Entity\Ern43\EventDateWithoutFlagsType $masteredDate = null)
    {
        $this->masteredDate = $masteredDate;
        return $this;
    }

    /**
     * Adds as remasteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was re-mastered (usually digitally). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\EventDateWithoutFlagsType $remasteredDate
     */
    public function addToRemasteredDate(\DedexBundle\Entity\Ern43\EventDateWithoutFlagsType $remasteredDate)
    {
        $this->remasteredDate[] = $remasteredDate;
        return $this;
    }

    /**
     * isset remasteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was re-mastered (usually digitally). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRemasteredDate($index)
    {
        return isset($this->remasteredDate[$index]);
    }

    /**
     * unset remasteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was re-mastered (usually digitally). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRemasteredDate($index)
    {
        unset($this->remasteredDate[$index]);
    }

    /**
     * Gets as remasteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was re-mastered (usually digitally). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern43\EventDateWithoutFlagsType[]
     */
    public function getRemasteredDate()
    {
        return $this->remasteredDate;
    }

    /**
     * Sets a new remasteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was re-mastered (usually digitally). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern43\EventDateWithoutFlagsType[] $remasteredDate
     * @return self
     */
    public function setRemasteredDate(array $remasteredDate = null)
    {
        $this->remasteredDate = $remasteredDate;
        return $this;
    }

    /**
     * Adds as firstPublicationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Composite containing details of the Date and Place of the Event in which the Video was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Composite containing details of the Date and Place of the Event in which the Video was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Composite containing details of the Date and Place of the Event in which the Video was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Composite containing details of the Date and Place of the Event in which the Video was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Composite containing details of the classification of the Video according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A Composite containing details of the classification of the Video according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A Composite containing details of the classification of the Video according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A Composite containing details of the classification of the Video according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A Composite containing details of the classification of the Video according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param \DedexBundle\Entity\Ern43\ParentalWarningTypeWithTerritoryType[] $parentalWarningType
     * @return self
     */
    public function setParentalWarningType(array $parentalWarningType)
    {
        $this->parentalWarningType = $parentalWarningType;
        return $this;
    }

    /**
     * Adds as avRating
     *
     * A Composite containing details of a rating for the Video.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\AvRatingType $avRating
     */
    public function addToAvRating(\DedexBundle\Entity\Ern43\AvRatingType $avRating)
    {
        $this->avRating[] = $avRating;
        return $this;
    }

    /**
     * isset avRating
     *
     * A Composite containing details of a rating for the Video.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAvRating($index)
    {
        return isset($this->avRating[$index]);
    }

    /**
     * unset avRating
     *
     * A Composite containing details of a rating for the Video.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAvRating($index)
    {
        unset($this->avRating[$index]);
    }

    /**
     * Gets as avRating
     *
     * A Composite containing details of a rating for the Video.
     *
     * @return \DedexBundle\Entity\Ern43\AvRatingType[]
     */
    public function getAvRating()
    {
        return $this->avRating;
    }

    /**
     * Sets a new avRating
     *
     * A Composite containing details of a rating for the Video.
     *
     * @param \DedexBundle\Entity\Ern43\AvRatingType[] $avRating
     * @return self
     */
    public function setAvRating(array $avRating = null)
    {
        $this->avRating = $avRating;
        return $this;
    }

    /**
     * Adds as relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current Video.
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
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current Video.
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
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current Video.
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
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current Video.
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
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current Video.
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
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current Video.
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
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current Video.
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
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current Video.
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
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current Video.
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
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current Video.
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
     * Gets as compositeMusicalWorkType
     *
     * A Type of the Video indicating whether it is a Medley or a Potpourri.
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
     * A Type of the Video indicating whether it is a Medley or a Potpourri.
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
     * Adds as videoCueSheetReference
     *
     * A Reference for a CueSheet (specific to this Message). This is a LocalCueSheetAnchorReference starting with the letter Q.
     *
     * @return self
     * @param string $videoCueSheetReference
     */
    public function addToVideoCueSheetReference($videoCueSheetReference)
    {
        $this->videoCueSheetReference[] = $videoCueSheetReference;
        return $this;
    }

    /**
     * isset videoCueSheetReference
     *
     * A Reference for a CueSheet (specific to this Message). This is a LocalCueSheetAnchorReference starting with the letter Q.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVideoCueSheetReference($index)
    {
        return isset($this->videoCueSheetReference[$index]);
    }

    /**
     * unset videoCueSheetReference
     *
     * A Reference for a CueSheet (specific to this Message). This is a LocalCueSheetAnchorReference starting with the letter Q.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVideoCueSheetReference($index)
    {
        unset($this->videoCueSheetReference[$index]);
    }

    /**
     * Gets as videoCueSheetReference
     *
     * A Reference for a CueSheet (specific to this Message). This is a LocalCueSheetAnchorReference starting with the letter Q.
     *
     * @return string[]
     */
    public function getVideoCueSheetReference()
    {
        return $this->videoCueSheetReference;
    }

    /**
     * Sets a new videoCueSheetReference
     *
     * A Reference for a CueSheet (specific to this Message). This is a LocalCueSheetAnchorReference starting with the letter Q.
     *
     * @param string $videoCueSheetReference
     * @return self
     */
    public function setVideoCueSheetReference(array $videoCueSheetReference = null)
    {
        $this->videoCueSheetReference = $videoCueSheetReference;
        return $this;
    }

    /**
     * Gets as reasonForCueSheetAbsence
     *
     * A Composite containing the textual Description of the reason for the Identifier being used as a proxy.
     *
     * @return \DedexBundle\Entity\Ern43\ReasonType
     */
    public function getReasonForCueSheetAbsence()
    {
        return $this->reasonForCueSheetAbsence;
    }

    /**
     * Sets a new reasonForCueSheetAbsence
     *
     * A Composite containing the textual Description of the reason for the Identifier being used as a proxy.
     *
     * @param \DedexBundle\Entity\Ern43\ReasonType $reasonForCueSheetAbsence
     * @return self
     */
    public function setReasonForCueSheetAbsence(?\DedexBundle\Entity\Ern43\ReasonType $reasonForCueSheetAbsence = null)
    {
        $this->reasonForCueSheetAbsence = $reasonForCueSheetAbsence;
        return $this;
    }

    /**
     * Gets as isCover
     *
     * A Flag indicating whether the Video is a Cover (=true) or not (=false). This is not legal information, but meant to help consumers to differentiate originals from covers.
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
     * A Flag indicating whether the Video is a Cover (=true) or not (=false). This is not legal information, but meant to help consumers to differentiate originals from covers.
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
     * Gets as hasVocalPerformance
     *
     * A Flag indicating whether the Video relates to a (human) vocal Performance (=true) or not (=false).
     *
     * @return bool
     */
    public function getHasVocalPerformance()
    {
        return $this->hasVocalPerformance;
    }

    /**
     * Sets a new hasVocalPerformance
     *
     * A Flag indicating whether the Video relates to a (human) vocal Performance (=true) or not (=false).
     *
     * @param bool $hasVocalPerformance
     * @return self
     */
    public function setHasVocalPerformance($hasVocalPerformance)
    {
        $this->hasVocalPerformance = $hasVocalPerformance;
        return $this;
    }

    /**
     * Gets as hasForegroundVocalPerformance
     *
     * A Flag indicating whether the Video relates to a (human) vocal Performance that is not merely background vocals (=true) or not (=false).
     *
     * @return bool
     */
    public function getHasForegroundVocalPerformance()
    {
        return $this->hasForegroundVocalPerformance;
    }

    /**
     * Sets a new hasForegroundVocalPerformance
     *
     * A Flag indicating whether the Video relates to a (human) vocal Performance that is not merely background vocals (=true) or not (=false).
     *
     * @param bool $hasForegroundVocalPerformance
     * @return self
     */
    public function setHasForegroundVocalPerformance($hasForegroundVocalPerformance)
    {
        $this->hasForegroundVocalPerformance = $hasForegroundVocalPerformance;
        return $this;
    }

    /**
     * Gets as isInstrumental
     *
     * The Flag indicating whether the Video is instrumental (=true) or not (=false). This element is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
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
     * The Flag indicating whether the Video is instrumental (=true) or not (=false). This element is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
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
     * The Flag indicating whether the Video contains content that is hidden in some way from the Consumer (=true) or not (=false).
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
     * The Flag indicating whether the Video contains content that is hidden in some way from the Consumer (=true) or not (=false).
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
     * The Flag indicating whether the Video is remastered (=true) or not (=false).
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
     * The Flag indicating whether the Video is remastered (=true) or not (=false).
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
     * Adds as displayCredits
     *
     * A Role and instrumentation for which a Party is credited.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\DisplayCreditsType $displayCredits
     */
    public function addToDisplayCredits(\DedexBundle\Entity\Ern43\DisplayCreditsType $displayCredits)
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
     * @return \DedexBundle\Entity\Ern43\DisplayCreditsType[]
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
     * @param \DedexBundle\Entity\Ern43\DisplayCreditsType[] $displayCredits
     * @return self
     */
    public function setDisplayCredits(array $displayCredits = null)
    {
        $this->displayCredits = $displayCredits;
        return $this;
    }

    /**
     * Adds as languageOfPerformance
     *
     * The original Language of the Performance as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant].
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\LanguageType $languageOfPerformance
     */
    public function addToLanguageOfPerformance(\DedexBundle\Entity\Ern43\LanguageType $languageOfPerformance)
    {
        $this->languageOfPerformance[] = $languageOfPerformance;
        return $this;
    }

    /**
     * isset languageOfPerformance
     *
     * The original Language of the Performance as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant].
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
     * The original Language of the Performance as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant].
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
     * The original Language of the Performance as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant].
     *
     * @return \DedexBundle\Entity\Ern43\LanguageType[]
     */
    public function getLanguageOfPerformance()
    {
        return $this->languageOfPerformance;
    }

    /**
     * Sets a new languageOfPerformance
     *
     * The original Language of the Performance as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant].
     *
     * @param \DedexBundle\Entity\Ern43\LanguageType[] $languageOfPerformance
     * @return self
     */
    public function setLanguageOfPerformance(array $languageOfPerformance = null)
    {
        $this->languageOfPerformance = $languageOfPerformance;
        return $this;
    }

    /**
     * Adds as languageOfDubbing
     *
     * The Language of dubbing used in the Video as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant].
     *
     * @return self
     * @param string $languageOfDubbing
     */
    public function addToLanguageOfDubbing($languageOfDubbing)
    {
        $this->languageOfDubbing[] = $languageOfDubbing;
        return $this;
    }

    /**
     * isset languageOfDubbing
     *
     * The Language of dubbing used in the Video as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant].
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguageOfDubbing($index)
    {
        return isset($this->languageOfDubbing[$index]);
    }

    /**
     * unset languageOfDubbing
     *
     * The Language of dubbing used in the Video as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant].
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguageOfDubbing($index)
    {
        unset($this->languageOfDubbing[$index]);
    }

    /**
     * Gets as languageOfDubbing
     *
     * The Language of dubbing used in the Video as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant].
     *
     * @return string[]
     */
    public function getLanguageOfDubbing()
    {
        return $this->languageOfDubbing;
    }

    /**
     * Sets a new languageOfDubbing
     *
     * The Language of dubbing used in the Video as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant].
     *
     * @param string $languageOfDubbing
     * @return self
     */
    public function setLanguageOfDubbing(array $languageOfDubbing = null)
    {
        $this->languageOfDubbing = $languageOfDubbing;
        return $this;
    }

    /**
     * Adds as subTitleLanguage
     *
     * The Language of SubTitles in the Video as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant].
     *
     * @return self
     * @param string $subTitleLanguage
     */
    public function addToSubTitleLanguage($subTitleLanguage)
    {
        $this->subTitleLanguage[] = $subTitleLanguage;
        return $this;
    }

    /**
     * isset subTitleLanguage
     *
     * The Language of SubTitles in the Video as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant].
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubTitleLanguage($index)
    {
        return isset($this->subTitleLanguage[$index]);
    }

    /**
     * unset subTitleLanguage
     *
     * The Language of SubTitles in the Video as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant].
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubTitleLanguage($index)
    {
        unset($this->subTitleLanguage[$index]);
    }

    /**
     * Gets as subTitleLanguage
     *
     * The Language of SubTitles in the Video as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant].
     *
     * @return string[]
     */
    public function getSubTitleLanguage()
    {
        return $this->subTitleLanguage;
    }

    /**
     * Sets a new subTitleLanguage
     *
     * The Language of SubTitles in the Video as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant].
     *
     * @param string $subTitleLanguage
     * @return self
     */
    public function setSubTitleLanguage(array $subTitleLanguage = null)
    {
        $this->subTitleLanguage = $subTitleLanguage;
        return $this;
    }

    /**
     * Adds as resourceContainedResourceReference
     *
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current Video.
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
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current Video.
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
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current Video.
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
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current Video.
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
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current Video.
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
     * Adds as raga
     *
     * A Description of the melodic mode of a MusicalWork in the Video.
     *
     * @return self
     * @param string $raga
     */
    public function addToRaga($raga)
    {
        $this->raga[] = $raga;
        return $this;
    }

    /**
     * isset raga
     *
     * A Description of the melodic mode of a MusicalWork in the Video.
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
     * A Description of the melodic mode of a MusicalWork in the Video.
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
     * A Description of the melodic mode of a MusicalWork in the Video.
     *
     * @return string[]
     */
    public function getRaga()
    {
        return $this->raga;
    }

    /**
     * Sets a new raga
     *
     * A Description of the melodic mode of a MusicalWork in the Video.
     *
     * @param string[] $raga
     * @return self
     */
    public function setRaga(array $raga = null)
    {
        $this->raga = $raga;
        return $this;
    }

    /**
     * Adds as tala
     *
     * A Description of the rhythmic pattern of a MusicalWork in the Video.
     *
     * @return self
     * @param string $tala
     */
    public function addToTala($tala)
    {
        $this->tala[] = $tala;
        return $this;
    }

    /**
     * isset tala
     *
     * A Description of the rhythmic pattern of a MusicalWork in the Video.
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
     * A Description of the rhythmic pattern of a MusicalWork in the Video.
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
     * A Description of the rhythmic pattern of a MusicalWork in the Video.
     *
     * @return string[]
     */
    public function getTala()
    {
        return $this->tala;
    }

    /**
     * Sets a new tala
     *
     * A Description of the rhythmic pattern of a MusicalWork in the Video.
     *
     * @param string[] $tala
     * @return self
     */
    public function setTala(array $tala = null)
    {
        $this->tala = $tala;
        return $this;
    }

    /**
     * Adds as deity
     *
     * A deity name relating to the Video.
     *
     * @return self
     * @param string $deity
     */
    public function addToDeity($deity)
    {
        $this->deity[] = $deity;
        return $this;
    }

    /**
     * isset deity
     *
     * A deity name relating to the Video.
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
     * A deity name relating to the Video.
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
     * A deity name relating to the Video.
     *
     * @return string[]
     */
    public function getDeity()
    {
        return $this->deity;
    }

    /**
     * Sets a new deity
     *
     * A deity name relating to the Video.
     *
     * @param string[] $deity
     * @return self
     */
    public function setDeity(array $deity = null)
    {
        $this->deity = $deity;
        return $this;
    }

    /**
     * Adds as videoChapterReference
     *
     * A Reference for a Chapter (specific to this Message). This is a LocalCollectionAnchorReference starting with the letter X.
     *
     * @return self
     * @param string $videoChapterReference
     */
    public function addToVideoChapterReference($videoChapterReference)
    {
        $this->videoChapterReference[] = $videoChapterReference;
        return $this;
    }

    /**
     * isset videoChapterReference
     *
     * A Reference for a Chapter (specific to this Message). This is a LocalCollectionAnchorReference starting with the letter X.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVideoChapterReference($index)
    {
        return isset($this->videoChapterReference[$index]);
    }

    /**
     * unset videoChapterReference
     *
     * A Reference for a Chapter (specific to this Message). This is a LocalCollectionAnchorReference starting with the letter X.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVideoChapterReference($index)
    {
        unset($this->videoChapterReference[$index]);
    }

    /**
     * Gets as videoChapterReference
     *
     * A Reference for a Chapter (specific to this Message). This is a LocalCollectionAnchorReference starting with the letter X.
     *
     * @return string[]
     */
    public function getVideoChapterReference()
    {
        return $this->videoChapterReference;
    }

    /**
     * Sets a new videoChapterReference
     *
     * A Reference for a Chapter (specific to this Message). This is a LocalCollectionAnchorReference starting with the letter X.
     *
     * @param string $videoChapterReference
     * @return self
     */
    public function setVideoChapterReference(array $videoChapterReference = null)
    {
        $this->videoChapterReference = $videoChapterReference;
        return $this;
    }
}

