<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing ReleaseType
 *
 * A Composite containing details of a DDEX Release.
 * XSD Type: Release
 */
class ReleaseType
{

    /**
     * The Language and script for the Elements of the Release as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The Identifier (specific to the Message) of the Release. Used to link the Release to one or more Deal(s). This is a LocalReleaseAnchor starting with the letter R.
     *
     * @var string $releaseReference
     */
    private $releaseReference = null;

    /**
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers. The RelaseType is a marketing term and more than one value may be provided.
     *
     * @var \DedexBundle\Entity\Ern41\ReleaseTypeForReleaseNotificationType[] $releaseType
     */
    private $releaseType = [
        
    ];

    /**
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @var \DedexBundle\Entity\Ern41\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @var \DedexBundle\Entity\Ern41\DisplayTitleTextType[] $displayTitleText
     */
    private $displayTitleText = [
        
    ];

    /**
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @var \DedexBundle\Entity\Ern41\DisplayTitleType[] $displayTitle
     */
    private $displayTitle = [
        
    ];

    /**
     * A Composite containing details of an AdditionalTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @var \DedexBundle\Entity\Ern41\AdditionalTitleType[] $additionalTitle
     */
    private $additionalTitle = [
        
    ];

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     *
     * @var \DedexBundle\Entity\Ern41\DisplayArtistNameWithDefaultType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A Composite containing details of the DisplayArtist for the Release. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @var \DedexBundle\Entity\Ern41\DisplayArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * A Reference for a label of the Release (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var \DedexBundle\Entity\Ern41\ReleaseLabelReferenceType[] $releaseLabelReference
     */
    private $releaseLabelReference = [
        
    ];

    /**
     * A Composite containing details of the AdministratingRecordCompany for the Release.
     *
     * @var \DedexBundle\Entity\Ern41\AdministratingRecordCompanyWithReferenceType[] $administratingRecordCompany
     */
    private $administratingRecordCompany = [
        
    ];

    /**
     * A Composite containing details of the PLine for the Release.
     *
     * @var \DedexBundle\Entity\Ern41\PLineWithDefaultType[] $pLine
     */
    private $pLine = [
        
    ];

    /**
     * A Composite containing details of the CLine for the Release.
     *
     * @var \DedexBundle\Entity\Ern41\CLineWithDefaultType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the Release.
     *
     * @var \DedexBundle\Entity\Ern41\CourtesyLineWithDefaultType[] $courtesyLine
     */
    private $courtesyLine = [
        
    ];

    /**
     * The sum of the Durations of all Resources contained in the Release (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * A Composite containing details of a Genre to which the Release belongs.
     *
     * @var \DedexBundle\Entity\Ern41\GenreWithTerritoryType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * A Composite containing details of the Date and Place of the Event in which the Release was or will be first made available for Usage in its current form, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY[-MM[-DD]]). This Element is for display and cataloguing purposes only.
     *
     * @var \DedexBundle\Entity\Ern41\EventDateWithDefaultType[] $releaseDate
     */
    private $releaseDate = [
        
    ];

    /**
     * A Composite containing details of the Date and Place of the Event in which the collection of tracks for the Release (e.g. the equivalent physical album on vinyl) was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY[-MM[-DD]]). This Element is for display and cataloguing purposes only.
     *
     * @var \DedexBundle\Entity\Ern41\EventDateWithDefaultType[] $originalReleaseDate
     */
    private $originalReleaseDate = [
        
    ];

    /**
     * A Composite containing details of the classification of the Release according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @var \DedexBundle\Entity\Ern41\ParentalWarningTypeWithTerritoryType[] $parentalWarningType
     */
    private $parentalWarningType = [
        
    ];

    /**
     * A Composite containing details of a rating for the Release.
     *
     * @var \DedexBundle\Entity\Ern41\AvRatingType[] $avRating
     */
    private $avRating = [
        
    ];

    /**
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to this Release.
     *
     * @var \DedexBundle\Entity\Ern41\RelatedReleaseType[] $relatedRelease
     */
    private $relatedRelease = [
        
    ];

    /**
     * A Flag indicating whether the Release is a Compilation (=true) or not (=false).
     *
     * @var bool $isCompilation
     */
    private $isCompilation = null;

    /**
     * The Flag indicating whether the Release is a multiartist Compilation (=true) or not (=false).
     *
     * @var bool $isMultiArtistCompilation
     */
    private $isMultiArtistCompilation = null;

    /**
     * A Composite containing details of a group of some or all of the Resources in the Release. ResourceGroups are used to signal groupings or sequences of Resources within a Release. Examples include individual carriers in a multi-carrier Release or classical Work groupings as well as the default order of Resources within a Release. ResourceGroups are typically not used with Releases that contain only one primary Resource such as TrackReleases.
     *
     * @var \DedexBundle\Entity\Ern41\ResourceGroupType $resourceGroup
     */
    private $resourceGroup = null;

    /**
     * A Composite containing details of promotional or other material related to the Release.
     *
     * @var \DedexBundle\Entity\Ern41\ExternalResourceLinkType[] $externalResourceLink
     */
    private $externalResourceLink = [
        
    ];

    /**
     * A Composite containing details of a Description of the Release containing Keywords.
     *
     * @var \DedexBundle\Entity\Ern41\KeywordsWithTerritoryType[] $keywords
     */
    private $keywords = [
        
    ];

    /**
     * A Composite containing details of a Synopsis of the Release.
     *
     * @var \DedexBundle\Entity\Ern41\SynopsisWithTerritoryType[] $synopsis
     */
    private $synopsis = [
        
    ];

    /**
     * A Description of the melodic mode of a MusicalWork in the Release.
     *
     * @var \DedexBundle\Entity\Ern41\RagaType[] $raga
     */
    private $raga = [
        
    ];

    /**
     * A Description of the rhythmic pattern of a MusicalWork in the Release.
     *
     * @var \DedexBundle\Entity\Ern41\TalaType[] $tala
     */
    private $tala = [
        
    ];

    /**
     * A deity name relating to the Release.
     *
     * @var \DedexBundle\Entity\Ern41\DeityType[] $deity
     */
    private $deity = [
        
    ];

    /**
     * A Description containing an explanation that is required if not all the Tracks are eligible for HiResMusic (e.g. if some tracks were up-sampled to 96 kHz/24 bit from a 44.1 kHz/24 bit source during mastering).
     *
     * @var string $hiResMusicDescription
     */
    private $hiResMusicDescription = null;

    /**
     * The Flag indicating whether the Release is a Soundtrack (=true) or not (=false).
     *
     * @var bool $isSoundtrack
     */
    private $isSoundtrack = null;

    /**
     * The Flag indicating whether the Release meets the criteria to carry the HiResMusic logo, provided the MessageRecipient meets all the other requirements to use it (note that an album with a majority of tracks being eligible but the remainder not being eligible can still carry the logo) (=true) or not (=false).
     *
     * @var bool $isHiResMusic
     */
    private $isHiResMusic = null;

    /**
     * A Composite containing a Comment about the promotion and marketing of the Release.
     *
     * @var \DedexBundle\Entity\Ern41\MarketingCommentType[] $marketingComment
     */
    private $marketingComment = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the Release as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the Release as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as releaseReference
     *
     * The Identifier (specific to the Message) of the Release. Used to link the Release to one or more Deal(s). This is a LocalReleaseAnchor starting with the letter R.
     *
     * @return string
     */
    public function getReleaseReference()
    {
        return $this->releaseReference;
    }

    /**
     * Sets a new releaseReference
     *
     * The Identifier (specific to the Message) of the Release. Used to link the Release to one or more Deal(s). This is a LocalReleaseAnchor starting with the letter R.
     *
     * @param string $releaseReference
     * @return self
     */
    public function setReleaseReference($releaseReference)
    {
        $this->releaseReference = $releaseReference;
        return $this;
    }

    /**
     * Adds as releaseType
     *
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers. The RelaseType is a marketing term and more than one value may be provided.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\ReleaseTypeForReleaseNotificationType $releaseType
     */
    public function addToReleaseType(\DedexBundle\Entity\Ern41\ReleaseTypeForReleaseNotificationType $releaseType)
    {
        $this->releaseType[] = $releaseType;
        return $this;
    }

    /**
     * isset releaseType
     *
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers. The RelaseType is a marketing term and more than one value may be provided.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseType($index)
    {
        return isset($this->releaseType[$index]);
    }

    /**
     * unset releaseType
     *
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers. The RelaseType is a marketing term and more than one value may be provided.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseType($index)
    {
        unset($this->releaseType[$index]);
    }

    /**
     * Gets as releaseType
     *
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers. The RelaseType is a marketing term and more than one value may be provided.
     *
     * @return \DedexBundle\Entity\Ern41\ReleaseTypeForReleaseNotificationType[]
     */
    public function getReleaseType()
    {
        return $this->releaseType;
    }

    /**
     * Sets a new releaseType
     *
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers. The RelaseType is a marketing term and more than one value may be provided.
     *
     * @param \DedexBundle\Entity\Ern41\ReleaseTypeForReleaseNotificationType[] $releaseType
     * @return self
     */
    public function setReleaseType(array $releaseType)
    {
        $this->releaseType = $releaseType;
        return $this;
    }

    /**
     * Gets as releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @return \DedexBundle\Entity\Ern41\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @param \DedexBundle\Entity\Ern41\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(\DedexBundle\Entity\Ern41\ReleaseIdType $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Adds as displayTitleText
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\DisplayTitleTextType $displayTitleText
     */
    public function addToDisplayTitleText(\DedexBundle\Entity\Ern41\DisplayTitleTextType $displayTitleText)
    {
        $this->displayTitleText[] = $displayTitleText;
        return $this;
    }

    /**
     * isset displayTitleText
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
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
     *
     * @return \DedexBundle\Entity\Ern41\DisplayTitleTextType[]
     */
    public function getDisplayTitleText()
    {
        return $this->displayTitleText;
    }

    /**
     * Sets a new displayTitleText
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @param \DedexBundle\Entity\Ern41\DisplayTitleTextType[] $displayTitleText
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
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\DisplayTitleType $displayTitle
     */
    public function addToDisplayTitle(\DedexBundle\Entity\Ern41\DisplayTitleType $displayTitle)
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
     * @return \DedexBundle\Entity\Ern41\DisplayTitleType[]
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
     * @param \DedexBundle\Entity\Ern41\DisplayTitleType[] $displayTitle
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
     * A Composite containing details of an AdditionalTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\AdditionalTitleType $additionalTitle
     */
    public function addToAdditionalTitle(\DedexBundle\Entity\Ern41\AdditionalTitleType $additionalTitle)
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
     * @return \DedexBundle\Entity\Ern41\AdditionalTitleType[]
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
     * @param \DedexBundle\Entity\Ern41\AdditionalTitleType[] $additionalTitle
     * @return self
     */
    public function setAdditionalTitle(array $additionalTitle)
    {
        $this->additionalTitle = $additionalTitle;
        return $this;
    }

    /**
     * Adds as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\DisplayArtistNameWithDefaultType $displayArtistName
     */
    public function addToDisplayArtistName(\DedexBundle\Entity\Ern41\DisplayArtistNameWithDefaultType $displayArtistName)
    {
        $this->displayArtistName[] = $displayArtistName;
        return $this;
    }

    /**
     * isset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
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
     *
     * @return \DedexBundle\Entity\Ern41\DisplayArtistNameWithDefaultType[]
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     *
     * @param \DedexBundle\Entity\Ern41\DisplayArtistNameWithDefaultType[] $displayArtistName
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
     * A Composite containing details of the DisplayArtist for the Release. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\DisplayArtistType $displayArtist
     */
    public function addToDisplayArtist(\DedexBundle\Entity\Ern41\DisplayArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A Composite containing details of the DisplayArtist for the Release. The DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of the DisplayArtist for the Release. The DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of the DisplayArtist for the Release. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @return \DedexBundle\Entity\Ern41\DisplayArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A Composite containing details of the DisplayArtist for the Release. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @param \DedexBundle\Entity\Ern41\DisplayArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Adds as releaseLabelReference
     *
     * A Reference for a label of the Release (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\ReleaseLabelReferenceType $releaseLabelReference
     */
    public function addToReleaseLabelReference(\DedexBundle\Entity\Ern41\ReleaseLabelReferenceType $releaseLabelReference)
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
     * @return \DedexBundle\Entity\Ern41\ReleaseLabelReferenceType[]
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
     * @param \DedexBundle\Entity\Ern41\ReleaseLabelReferenceType[] $releaseLabelReference
     * @return self
     */
    public function setReleaseLabelReference(array $releaseLabelReference)
    {
        $this->releaseLabelReference = $releaseLabelReference;
        return $this;
    }

    /**
     * Adds as administratingRecordCompany
     *
     * A Composite containing details of the AdministratingRecordCompany for the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\AdministratingRecordCompanyWithReferenceType $administratingRecordCompany
     */
    public function addToAdministratingRecordCompany(\DedexBundle\Entity\Ern41\AdministratingRecordCompanyWithReferenceType $administratingRecordCompany)
    {
        $this->administratingRecordCompany[] = $administratingRecordCompany;
        return $this;
    }

    /**
     * isset administratingRecordCompany
     *
     * A Composite containing details of the AdministratingRecordCompany for the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdministratingRecordCompany($index)
    {
        return isset($this->administratingRecordCompany[$index]);
    }

    /**
     * unset administratingRecordCompany
     *
     * A Composite containing details of the AdministratingRecordCompany for the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdministratingRecordCompany($index)
    {
        unset($this->administratingRecordCompany[$index]);
    }

    /**
     * Gets as administratingRecordCompany
     *
     * A Composite containing details of the AdministratingRecordCompany for the Release.
     *
     * @return \DedexBundle\Entity\Ern41\AdministratingRecordCompanyWithReferenceType[]
     */
    public function getAdministratingRecordCompany()
    {
        return $this->administratingRecordCompany;
    }

    /**
     * Sets a new administratingRecordCompany
     *
     * A Composite containing details of the AdministratingRecordCompany for the Release.
     *
     * @param \DedexBundle\Entity\Ern41\AdministratingRecordCompanyWithReferenceType[] $administratingRecordCompany
     * @return self
     */
    public function setAdministratingRecordCompany(array $administratingRecordCompany)
    {
        $this->administratingRecordCompany = $administratingRecordCompany;
        return $this;
    }

    /**
     * Adds as pLine
     *
     * A Composite containing details of the PLine for the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\PLineWithDefaultType $pLine
     */
    public function addToPLine(\DedexBundle\Entity\Ern41\PLineWithDefaultType $pLine)
    {
        $this->pLine[] = $pLine;
        return $this;
    }

    /**
     * isset pLine
     *
     * A Composite containing details of the PLine for the Release.
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
     * A Composite containing details of the PLine for the Release.
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
     * A Composite containing details of the PLine for the Release.
     *
     * @return \DedexBundle\Entity\Ern41\PLineWithDefaultType[]
     */
    public function getPLine()
    {
        return $this->pLine;
    }

    /**
     * Sets a new pLine
     *
     * A Composite containing details of the PLine for the Release.
     *
     * @param \DedexBundle\Entity\Ern41\PLineWithDefaultType[] $pLine
     * @return self
     */
    public function setPLine(array $pLine)
    {
        $this->pLine = $pLine;
        return $this;
    }

    /**
     * Adds as cLine
     *
     * A Composite containing details of the CLine for the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\CLineWithDefaultType $cLine
     */
    public function addToCLine(\DedexBundle\Entity\Ern41\CLineWithDefaultType $cLine)
    {
        $this->cLine[] = $cLine;
        return $this;
    }

    /**
     * isset cLine
     *
     * A Composite containing details of the CLine for the Release.
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
     * A Composite containing details of the CLine for the Release.
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
     * A Composite containing details of the CLine for the Release.
     *
     * @return \DedexBundle\Entity\Ern41\CLineWithDefaultType[]
     */
    public function getCLine()
    {
        return $this->cLine;
    }

    /**
     * Sets a new cLine
     *
     * A Composite containing details of the CLine for the Release.
     *
     * @param \DedexBundle\Entity\Ern41\CLineWithDefaultType[] $cLine
     * @return self
     */
    public function setCLine(array $cLine)
    {
        $this->cLine = $cLine;
        return $this;
    }

    /**
     * Adds as courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\CourtesyLineWithDefaultType $courtesyLine
     */
    public function addToCourtesyLine(\DedexBundle\Entity\Ern41\CourtesyLineWithDefaultType $courtesyLine)
    {
        $this->courtesyLine[] = $courtesyLine;
        return $this;
    }

    /**
     * isset courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the Release.
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
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the Release.
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
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the Release.
     *
     * @return \DedexBundle\Entity\Ern41\CourtesyLineWithDefaultType[]
     */
    public function getCourtesyLine()
    {
        return $this->courtesyLine;
    }

    /**
     * Sets a new courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the Release.
     *
     * @param \DedexBundle\Entity\Ern41\CourtesyLineWithDefaultType[] $courtesyLine
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
     * The sum of the Durations of all Resources contained in the Release (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * The sum of the Durations of all Resources contained in the Release (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * Adds as genre
     *
     * A Composite containing details of a Genre to which the Release belongs.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\GenreWithTerritoryType $genre
     */
    public function addToGenre(\DedexBundle\Entity\Ern41\GenreWithTerritoryType $genre)
    {
        $this->genre[] = $genre;
        return $this;
    }

    /**
     * isset genre
     *
     * A Composite containing details of a Genre to which the Release belongs.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGenre($index)
    {
        return isset($this->genre[$index]);
    }

    /**
     * unset genre
     *
     * A Composite containing details of a Genre to which the Release belongs.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGenre($index)
    {
        unset($this->genre[$index]);
    }

    /**
     * Gets as genre
     *
     * A Composite containing details of a Genre to which the Release belongs.
     *
     * @return \DedexBundle\Entity\Ern41\GenreWithTerritoryType[]
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Sets a new genre
     *
     * A Composite containing details of a Genre to which the Release belongs.
     *
     * @param \DedexBundle\Entity\Ern41\GenreWithTerritoryType[] $genre
     * @return self
     */
    public function setGenre(array $genre)
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * Adds as releaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Release was or will be first made available for Usage in its current form, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY[-MM[-DD]]). This Element is for display and cataloguing purposes only.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\EventDateWithDefaultType $releaseDate
     */
    public function addToReleaseDate(\DedexBundle\Entity\Ern41\EventDateWithDefaultType $releaseDate)
    {
        $this->releaseDate[] = $releaseDate;
        return $this;
    }

    /**
     * isset releaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Release was or will be first made available for Usage in its current form, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY[-MM[-DD]]). This Element is for display and cataloguing purposes only.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseDate($index)
    {
        return isset($this->releaseDate[$index]);
    }

    /**
     * unset releaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Release was or will be first made available for Usage in its current form, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY[-MM[-DD]]). This Element is for display and cataloguing purposes only.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseDate($index)
    {
        unset($this->releaseDate[$index]);
    }

    /**
     * Gets as releaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Release was or will be first made available for Usage in its current form, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY[-MM[-DD]]). This Element is for display and cataloguing purposes only.
     *
     * @return \DedexBundle\Entity\Ern41\EventDateWithDefaultType[]
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Sets a new releaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Release was or will be first made available for Usage in its current form, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY[-MM[-DD]]). This Element is for display and cataloguing purposes only.
     *
     * @param \DedexBundle\Entity\Ern41\EventDateWithDefaultType[] $releaseDate
     * @return self
     */
    public function setReleaseDate(array $releaseDate)
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    /**
     * Adds as originalReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the collection of tracks for the Release (e.g. the equivalent physical album on vinyl) was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY[-MM[-DD]]). This Element is for display and cataloguing purposes only.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\EventDateWithDefaultType $originalReleaseDate
     */
    public function addToOriginalReleaseDate(\DedexBundle\Entity\Ern41\EventDateWithDefaultType $originalReleaseDate)
    {
        $this->originalReleaseDate[] = $originalReleaseDate;
        return $this;
    }

    /**
     * isset originalReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the collection of tracks for the Release (e.g. the equivalent physical album on vinyl) was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY[-MM[-DD]]). This Element is for display and cataloguing purposes only.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOriginalReleaseDate($index)
    {
        return isset($this->originalReleaseDate[$index]);
    }

    /**
     * unset originalReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the collection of tracks for the Release (e.g. the equivalent physical album on vinyl) was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY[-MM[-DD]]). This Element is for display and cataloguing purposes only.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOriginalReleaseDate($index)
    {
        unset($this->originalReleaseDate[$index]);
    }

    /**
     * Gets as originalReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the collection of tracks for the Release (e.g. the equivalent physical album on vinyl) was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY[-MM[-DD]]). This Element is for display and cataloguing purposes only.
     *
     * @return \DedexBundle\Entity\Ern41\EventDateWithDefaultType[]
     */
    public function getOriginalReleaseDate()
    {
        return $this->originalReleaseDate;
    }

    /**
     * Sets a new originalReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the collection of tracks for the Release (e.g. the equivalent physical album on vinyl) was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY[-MM[-DD]]). This Element is for display and cataloguing purposes only.
     *
     * @param \DedexBundle\Entity\Ern41\EventDateWithDefaultType[] $originalReleaseDate
     * @return self
     */
    public function setOriginalReleaseDate(array $originalReleaseDate)
    {
        $this->originalReleaseDate = $originalReleaseDate;
        return $this;
    }

    /**
     * Adds as parentalWarningType
     *
     * A Composite containing details of the classification of the Release according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\ParentalWarningTypeWithTerritoryType $parentalWarningType
     */
    public function addToParentalWarningType(\DedexBundle\Entity\Ern41\ParentalWarningTypeWithTerritoryType $parentalWarningType)
    {
        $this->parentalWarningType[] = $parentalWarningType;
        return $this;
    }

    /**
     * isset parentalWarningType
     *
     * A Composite containing details of the classification of the Release according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A Composite containing details of the classification of the Release according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A Composite containing details of the classification of the Release according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return \DedexBundle\Entity\Ern41\ParentalWarningTypeWithTerritoryType[]
     */
    public function getParentalWarningType()
    {
        return $this->parentalWarningType;
    }

    /**
     * Sets a new parentalWarningType
     *
     * A Composite containing details of the classification of the Release according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param \DedexBundle\Entity\Ern41\ParentalWarningTypeWithTerritoryType[] $parentalWarningType
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
     * A Composite containing details of a rating for the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\AvRatingType $avRating
     */
    public function addToAvRating(\DedexBundle\Entity\Ern41\AvRatingType $avRating)
    {
        $this->avRating[] = $avRating;
        return $this;
    }

    /**
     * isset avRating
     *
     * A Composite containing details of a rating for the Release.
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
     * A Composite containing details of a rating for the Release.
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
     * A Composite containing details of a rating for the Release.
     *
     * @return \DedexBundle\Entity\Ern41\AvRatingType[]
     */
    public function getAvRating()
    {
        return $this->avRating;
    }

    /**
     * Sets a new avRating
     *
     * A Composite containing details of a rating for the Release.
     *
     * @param \DedexBundle\Entity\Ern41\AvRatingType[] $avRating
     * @return self
     */
    public function setAvRating(array $avRating)
    {
        $this->avRating = $avRating;
        return $this;
    }

    /**
     * Adds as relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to this Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\RelatedReleaseType $relatedRelease
     */
    public function addToRelatedRelease(\DedexBundle\Entity\Ern41\RelatedReleaseType $relatedRelease)
    {
        $this->relatedRelease[] = $relatedRelease;
        return $this;
    }

    /**
     * isset relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to this Release.
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
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to this Release.
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
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to this Release.
     *
     * @return \DedexBundle\Entity\Ern41\RelatedReleaseType[]
     */
    public function getRelatedRelease()
    {
        return $this->relatedRelease;
    }

    /**
     * Sets a new relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to this Release.
     *
     * @param \DedexBundle\Entity\Ern41\RelatedReleaseType[] $relatedRelease
     * @return self
     */
    public function setRelatedRelease(array $relatedRelease)
    {
        $this->relatedRelease = $relatedRelease;
        return $this;
    }

    /**
     * Gets as isCompilation
     *
     * A Flag indicating whether the Release is a Compilation (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsCompilation()
    {
        return $this->isCompilation;
    }

    /**
     * Sets a new isCompilation
     *
     * A Flag indicating whether the Release is a Compilation (=true) or not (=false).
     *
     * @param bool $isCompilation
     * @return self
     */
    public function setIsCompilation($isCompilation)
    {
        $this->isCompilation = $isCompilation;
        return $this;
    }

    /**
     * Gets as isMultiArtistCompilation
     *
     * The Flag indicating whether the Release is a multiartist Compilation (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsMultiArtistCompilation()
    {
        return $this->isMultiArtistCompilation;
    }

    /**
     * Sets a new isMultiArtistCompilation
     *
     * The Flag indicating whether the Release is a multiartist Compilation (=true) or not (=false).
     *
     * @param bool $isMultiArtistCompilation
     * @return self
     */
    public function setIsMultiArtistCompilation($isMultiArtistCompilation)
    {
        $this->isMultiArtistCompilation = $isMultiArtistCompilation;
        return $this;
    }

    /**
     * Gets as resourceGroup
     *
     * A Composite containing details of a group of some or all of the Resources in the Release. ResourceGroups are used to signal groupings or sequences of Resources within a Release. Examples include individual carriers in a multi-carrier Release or classical Work groupings as well as the default order of Resources within a Release. ResourceGroups are typically not used with Releases that contain only one primary Resource such as TrackReleases.
     *
     * @return \DedexBundle\Entity\Ern41\ResourceGroupType
     */
    public function getResourceGroup()
    {
        return $this->resourceGroup;
    }

    /**
     * Sets a new resourceGroup
     *
     * A Composite containing details of a group of some or all of the Resources in the Release. ResourceGroups are used to signal groupings or sequences of Resources within a Release. Examples include individual carriers in a multi-carrier Release or classical Work groupings as well as the default order of Resources within a Release. ResourceGroups are typically not used with Releases that contain only one primary Resource such as TrackReleases.
     *
     * @param \DedexBundle\Entity\Ern41\ResourceGroupType $resourceGroup
     * @return self
     */
    public function setResourceGroup(\DedexBundle\Entity\Ern41\ResourceGroupType $resourceGroup)
    {
        $this->resourceGroup = $resourceGroup;
        return $this;
    }

    /**
     * Adds as externalResourceLink
     *
     * A Composite containing details of promotional or other material related to the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\ExternalResourceLinkType $externalResourceLink
     */
    public function addToExternalResourceLink(\DedexBundle\Entity\Ern41\ExternalResourceLinkType $externalResourceLink)
    {
        $this->externalResourceLink[] = $externalResourceLink;
        return $this;
    }

    /**
     * isset externalResourceLink
     *
     * A Composite containing details of promotional or other material related to the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExternalResourceLink($index)
    {
        return isset($this->externalResourceLink[$index]);
    }

    /**
     * unset externalResourceLink
     *
     * A Composite containing details of promotional or other material related to the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExternalResourceLink($index)
    {
        unset($this->externalResourceLink[$index]);
    }

    /**
     * Gets as externalResourceLink
     *
     * A Composite containing details of promotional or other material related to the Release.
     *
     * @return \DedexBundle\Entity\Ern41\ExternalResourceLinkType[]
     */
    public function getExternalResourceLink()
    {
        return $this->externalResourceLink;
    }

    /**
     * Sets a new externalResourceLink
     *
     * A Composite containing details of promotional or other material related to the Release.
     *
     * @param \DedexBundle\Entity\Ern41\ExternalResourceLinkType[] $externalResourceLink
     * @return self
     */
    public function setExternalResourceLink(array $externalResourceLink)
    {
        $this->externalResourceLink = $externalResourceLink;
        return $this;
    }

    /**
     * Adds as keywords
     *
     * A Composite containing details of a Description of the Release containing Keywords.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\KeywordsWithTerritoryType $keywords
     */
    public function addToKeywords(\DedexBundle\Entity\Ern41\KeywordsWithTerritoryType $keywords)
    {
        $this->keywords[] = $keywords;
        return $this;
    }

    /**
     * isset keywords
     *
     * A Composite containing details of a Description of the Release containing Keywords.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKeywords($index)
    {
        return isset($this->keywords[$index]);
    }

    /**
     * unset keywords
     *
     * A Composite containing details of a Description of the Release containing Keywords.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKeywords($index)
    {
        unset($this->keywords[$index]);
    }

    /**
     * Gets as keywords
     *
     * A Composite containing details of a Description of the Release containing Keywords.
     *
     * @return \DedexBundle\Entity\Ern41\KeywordsWithTerritoryType[]
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets a new keywords
     *
     * A Composite containing details of a Description of the Release containing Keywords.
     *
     * @param \DedexBundle\Entity\Ern41\KeywordsWithTerritoryType[] $keywords
     * @return self
     */
    public function setKeywords(array $keywords)
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * Adds as synopsis
     *
     * A Composite containing details of a Synopsis of the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\SynopsisWithTerritoryType $synopsis
     */
    public function addToSynopsis(\DedexBundle\Entity\Ern41\SynopsisWithTerritoryType $synopsis)
    {
        $this->synopsis[] = $synopsis;
        return $this;
    }

    /**
     * isset synopsis
     *
     * A Composite containing details of a Synopsis of the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSynopsis($index)
    {
        return isset($this->synopsis[$index]);
    }

    /**
     * unset synopsis
     *
     * A Composite containing details of a Synopsis of the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSynopsis($index)
    {
        unset($this->synopsis[$index]);
    }

    /**
     * Gets as synopsis
     *
     * A Composite containing details of a Synopsis of the Release.
     *
     * @return \DedexBundle\Entity\Ern41\SynopsisWithTerritoryType[]
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Sets a new synopsis
     *
     * A Composite containing details of a Synopsis of the Release.
     *
     * @param \DedexBundle\Entity\Ern41\SynopsisWithTerritoryType[] $synopsis
     * @return self
     */
    public function setSynopsis(array $synopsis)
    {
        $this->synopsis = $synopsis;
        return $this;
    }

    /**
     * Adds as raga
     *
     * A Description of the melodic mode of a MusicalWork in the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\RagaType $raga
     */
    public function addToRaga(\DedexBundle\Entity\Ern41\RagaType $raga)
    {
        $this->raga[] = $raga;
        return $this;
    }

    /**
     * isset raga
     *
     * A Description of the melodic mode of a MusicalWork in the Release.
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
     * A Description of the melodic mode of a MusicalWork in the Release.
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
     * A Description of the melodic mode of a MusicalWork in the Release.
     *
     * @return \DedexBundle\Entity\Ern41\RagaType[]
     */
    public function getRaga()
    {
        return $this->raga;
    }

    /**
     * Sets a new raga
     *
     * A Description of the melodic mode of a MusicalWork in the Release.
     *
     * @param \DedexBundle\Entity\Ern41\RagaType[] $raga
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
     * A Description of the rhythmic pattern of a MusicalWork in the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\TalaType $tala
     */
    public function addToTala(\DedexBundle\Entity\Ern41\TalaType $tala)
    {
        $this->tala[] = $tala;
        return $this;
    }

    /**
     * isset tala
     *
     * A Description of the rhythmic pattern of a MusicalWork in the Release.
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
     * A Description of the rhythmic pattern of a MusicalWork in the Release.
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
     * A Description of the rhythmic pattern of a MusicalWork in the Release.
     *
     * @return \DedexBundle\Entity\Ern41\TalaType[]
     */
    public function getTala()
    {
        return $this->tala;
    }

    /**
     * Sets a new tala
     *
     * A Description of the rhythmic pattern of a MusicalWork in the Release.
     *
     * @param \DedexBundle\Entity\Ern41\TalaType[] $tala
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
     * A deity name relating to the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\DeityType $deity
     */
    public function addToDeity(\DedexBundle\Entity\Ern41\DeityType $deity)
    {
        $this->deity[] = $deity;
        return $this;
    }

    /**
     * isset deity
     *
     * A deity name relating to the Release.
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
     * A deity name relating to the Release.
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
     * A deity name relating to the Release.
     *
     * @return \DedexBundle\Entity\Ern41\DeityType[]
     */
    public function getDeity()
    {
        return $this->deity;
    }

    /**
     * Sets a new deity
     *
     * A deity name relating to the Release.
     *
     * @param \DedexBundle\Entity\Ern41\DeityType[] $deity
     * @return self
     */
    public function setDeity(array $deity)
    {
        $this->deity = $deity;
        return $this;
    }

    /**
     * Gets as hiResMusicDescription
     *
     * A Description containing an explanation that is required if not all the Tracks are eligible for HiResMusic (e.g. if some tracks were up-sampled to 96 kHz/24 bit from a 44.1 kHz/24 bit source during mastering).
     *
     * @return string
     */
    public function getHiResMusicDescription()
    {
        return $this->hiResMusicDescription;
    }

    /**
     * Sets a new hiResMusicDescription
     *
     * A Description containing an explanation that is required if not all the Tracks are eligible for HiResMusic (e.g. if some tracks were up-sampled to 96 kHz/24 bit from a 44.1 kHz/24 bit source during mastering).
     *
     * @param string $hiResMusicDescription
     * @return self
     */
    public function setHiResMusicDescription($hiResMusicDescription)
    {
        $this->hiResMusicDescription = $hiResMusicDescription;
        return $this;
    }

    /**
     * Gets as isSoundtrack
     *
     * The Flag indicating whether the Release is a Soundtrack (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsSoundtrack()
    {
        return $this->isSoundtrack;
    }

    /**
     * Sets a new isSoundtrack
     *
     * The Flag indicating whether the Release is a Soundtrack (=true) or not (=false).
     *
     * @param bool $isSoundtrack
     * @return self
     */
    public function setIsSoundtrack($isSoundtrack)
    {
        $this->isSoundtrack = $isSoundtrack;
        return $this;
    }

    /**
     * Gets as isHiResMusic
     *
     * The Flag indicating whether the Release meets the criteria to carry the HiResMusic logo, provided the MessageRecipient meets all the other requirements to use it (note that an album with a majority of tracks being eligible but the remainder not being eligible can still carry the logo) (=true) or not (=false).
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
     * The Flag indicating whether the Release meets the criteria to carry the HiResMusic logo, provided the MessageRecipient meets all the other requirements to use it (note that an album with a majority of tracks being eligible but the remainder not being eligible can still carry the logo) (=true) or not (=false).
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
     * Adds as marketingComment
     *
     * A Composite containing a Comment about the promotion and marketing of the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\MarketingCommentType $marketingComment
     */
    public function addToMarketingComment(\DedexBundle\Entity\Ern41\MarketingCommentType $marketingComment)
    {
        $this->marketingComment[] = $marketingComment;
        return $this;
    }

    /**
     * isset marketingComment
     *
     * A Composite containing a Comment about the promotion and marketing of the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMarketingComment($index)
    {
        return isset($this->marketingComment[$index]);
    }

    /**
     * unset marketingComment
     *
     * A Composite containing a Comment about the promotion and marketing of the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMarketingComment($index)
    {
        unset($this->marketingComment[$index]);
    }

    /**
     * Gets as marketingComment
     *
     * A Composite containing a Comment about the promotion and marketing of the Release.
     *
     * @return \DedexBundle\Entity\Ern41\MarketingCommentType[]
     */
    public function getMarketingComment()
    {
        return $this->marketingComment;
    }

    /**
     * Sets a new marketingComment
     *
     * A Composite containing a Comment about the promotion and marketing of the Release.
     *
     * @param \DedexBundle\Entity\Ern41\MarketingCommentType[] $marketingComment
     * @return self
     */
    public function setMarketingComment(array $marketingComment)
    {
        $this->marketingComment = $marketingComment;
        return $this;
    }


}

