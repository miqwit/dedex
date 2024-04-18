<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing VideoType
 *
 * A Composite containing details of a
 *  Video.
 * XSD Type: Video
 */
class VideoType
{
    /**
     * The Flag indicating whether the Video Element
     *  was updated (=true) or not (=false). When this Boolean Flag is set to true, the
     *  MessageRecipient is expected to replace any previously provided Video data with the
     *  now provided data. This attribute is deprecated. DDEX advises that it may be removed
     *  at a future date and therefore recommends against using it.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * The Language and script for the Elements of
     *  the Video as defined in IETF RfC 5646. The default is the same as indicated for the
     *  containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of the Type
     *  of the Video.
     *
     * @var \DedexBundle\Entity\Ern383\VideoTypeType $videoType
     */
    private $videoType = null;

    /**
     * The Flag indicating whether the Video is
     *  related to an Artist (=true) or not (=false).
     *
     * @var bool $isArtistRelated
     */
    private $isArtistRelated = null;

    /**
     * A Composite containing details of an
     *  Identifier of the Video.
     *
     * @var \DedexBundle\Entity\Ern383\VideoIdType[] $videoId
     */
    private $videoId = [
        
    ];

    /**
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the Video.
     *
     * @var \DedexBundle\Entity\Ern383\MusicalWorkIdType[] $indirectVideoId
     */
    private $indirectVideoId = [
        
    ];

    /**
     * The Identifier (specific to the Message)
     *  of the Video within the Release which contains it. This is a LocalResourceAnchor
     *  starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A Composite containing a
     *  VideoCueSheetReference for a CueSheet (specific to this
     *  Message).
     *
     * @var \DedexBundle\Entity\Ern383\VideoCueSheetReferenceType[] $videoCueSheetReference
     */
    private $videoCueSheetReference = [
        
    ];

    /**
     * A Composite containing the textual
     *  Description of the reason for the Identifier being used as a
     *  proxy.
     *
     * @var \DedexBundle\Entity\Ern383\ReasonType $reasonForCueSheetAbsence
     */
    private $reasonForCueSheetAbsence = null;

    /**
     * A Composite containing details of the
     *  ReferenceTitle of the Video.
     *
     * @var \DedexBundle\Entity\Ern383\ReferenceTitleType $referenceTitle
     */
    private $referenceTitle = null;

    /**
     * A Composite containing details of a Title
     *  of the Video.
     *
     * @var \DedexBundle\Entity\Ern383\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing a Description of
     *  the Type of instrumentation of the MusicalWork(s) in the Video.
     *
     * @var \DedexBundle\Entity\Ern383\DescriptionType $instrumentationDescription
     */
    private $instrumentationDescription = null;

    /**
     * The Flag indicating whether the Video is a
     *  Medley (=true) or not (=false).
     *
     * @var bool $isMedley
     */
    private $isMedley = null;

    /**
     * The Flag indicating whether the Video is a
     *  Potpourri (=true) or not (=false).
     *
     * @var bool $isPotpourri
     */
    private $isPotpourri = null;

    /**
     * The Flag indicating whether the Video is
     *  instrumental (=true) or not (=false).
     *
     * @var bool $isInstrumental
     */
    private $isInstrumental = null;

    /**
     * The Flag indicating whether the Video is
     *  used as background to other audio or audiovisual material (=true) or not
     *  (=false).
     *
     * @var bool $isBackground
     */
    private $isBackground = null;

    /**
     * The Flag indicating whether the Video is
     *  hidden in some way from the Consumer (=true) or not (=false).
     *
     * @var bool $isHiddenResource
     */
    private $isHiddenResource = null;

    /**
     * The Flag indicating whether the Video is
     *  additional to those on the original Release of which this is a Version (=true) or
     *  not (=false). This element is deprecated. DDEX advises that it may be removed at a
     *  future date and therefore recommends against using it. The IsBonusResource element
     *  in ResourceGroupContentItem should be used instead.
     *
     * @var bool $isBonusResource
     */
    private $isBonusResource = null;

    /**
     * A Flag indicating whether a DSP shall
     *  (=true) or shall not (=false) make the Video available during the pre-oder period.
     *  If the Flag is not set or set to false, the Video shall not be made
     *  available.
     *
     * @var bool $hasPreOrderFulfillment
     */
    private $hasPreOrderFulfillment = null;

    /**
     * The Flag indicating whether the Video is
     *  remastered (=true) or not (=false).
     *
     * @var bool $isRemastered
     */
    private $isRemastered = null;

    /**
     * The Flag indicating whether the Video is
     *  preceded by a period of silence (=false) or not (=true).
     *
     * @var bool $noSilenceBefore
     */
    private $noSilenceBefore = null;

    /**
     * The Flag indicating whether the Video is
     *  followed by a period of silence (=false) or not (=true).
     *
     * @var bool $noSilenceAfter
     */
    private $noSilenceAfter = null;

    /**
     * A Flag indicating whether performer
     *  information is required (=true) or not (=false) when communicating details of the
     *  Video.
     *
     * @var bool $performerInformationRequired
     */
    private $performerInformationRequired = null;

    /**
     * The original Language of the Performance
     *  recorded in the Video (represented by an ISO 639-2
     *  LanguageCode).
     *
     * @var string[] $languageOfPerformance
     */
    private $languageOfPerformance = [
        
    ];

    /**
     * The Language of dubbing used in the Video
     *  (represented by an ISO 639-2 LanguageCode).
     *
     * @var string[] $languageOfDubbing
     */
    private $languageOfDubbing = [
        
    ];

    /**
     * The Language of SubTitles in the Video
     *  (represented by an ISO 639-2 LanguageCode).
     *
     * @var string[] $subTitleLanguage
     */
    private $subTitleLanguage = [
        
    ];

    /**
     * The Duration of the Video (using the ISO
     *  8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables,
     *  upper case characters are part of the xs:string, e.g. one hour, two minutes and
     *  three seconds would be PT1H2M3S). The seconds section ss may include fractions
     *  (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * A Composite containing details of
     *  Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s)
     *  used in the Video.
     *
     * @var \DedexBundle\Entity\Ern383\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A Composite containing details of one or
     *  more Collections. The referenced Collection has to be of CollectionType
     *  VideoChapter.
     *
     * @var \DedexBundle\Entity\Ern383\SoundRecordingCollectionReferenceListType $videoCollectionReferenceList
     */
    private $videoCollectionReferenceList = null;

    /**
     * A Composite containing details of one or
     *  more MusicalWorks contained in the Video.
     *
     * @var \DedexBundle\Entity\Ern383\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     */
    private $resourceMusicalWorkReferenceList = null;

    /**
     * A Composite containing details of
     *  ResourceContainedResourceReferences referring to a Resource that is contained in
     *  the current Video.
     *
     * @var \DedexBundle\Entity\Ern383\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     */
    private $resourceContainedResourceReferenceList = null;

    /**
     * A Composite containing details of the Date
     *  and Place of the Event in which the Video was created. This is a string with the
     *  syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern383\EventDateType $creationDate
     */
    private $creationDate = null;

    /**
     * A Composite containing details of the Date
     *  and Place of the Event in which the Video was originally mastered (in either
     *  analogue or digital form). This is a string with the syntax
     *  YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern383\EventDateType $masteredDate
     */
    private $masteredDate = null;

    /**
     * A Composite containing details of the Date
     *  and Place of the Event in which the Video was re-mastered (usually digitally).
     *  This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern383\EventDateType $remasteredDate
     */
    private $remasteredDate = null;

    /**
     * A Composite containing details of
     *  Descriptors and other attributes of the Video which may vary according to
     *  Territory of release.
     *
     * @var \DedexBundle\Entity\Ern383\VideoDetailsByTerritoryType[] $videoDetailsByTerritory
     */
    private $videoDetailsByTerritory = [
        
    ];

    /**
     * The country of
     *  commissioning.
     *
     * @var \DedexBundle\Entity\Ern383\AllTerritoryCodeType $territoryOfCommissioning
     */
    private $territoryOfCommissioning = null;

    /**
     * The number of FeaturedArtists associated
     *  with the Video.
     *
     * @var int $numberOfFeaturedArtists
     */
    private $numberOfFeaturedArtists = null;

    /**
     * The number of NonFeaturedArtists
     *  associated with the Video.
     *
     * @var int $numberOfNonFeaturedArtists
     */
    private $numberOfNonFeaturedArtists = null;

    /**
     * The number of ContractedArtists associated
     *  with the Video.
     *
     * @var int $numberOfContractedArtists
     */
    private $numberOfContractedArtists = null;

    /**
     * The number of NonContractedArtists
     *  associated with the Video.
     *
     * @var int $numberOfNonContractedArtists
     */
    private $numberOfNonContractedArtists = null;

    /**
     * Gets as isUpdated
     *
     * The Flag indicating whether the Video Element
     *  was updated (=true) or not (=false). When this Boolean Flag is set to true, the
     *  MessageRecipient is expected to replace any previously provided Video data with the
     *  now provided data. This attribute is deprecated. DDEX advises that it may be removed
     *  at a future date and therefore recommends against using it.
     *
     * @return bool
     */
    public function getIsUpdated()
    {
        return $this->isUpdated;
    }

    /**
     * Sets a new isUpdated
     *
     * The Flag indicating whether the Video Element
     *  was updated (=true) or not (=false). When this Boolean Flag is set to true, the
     *  MessageRecipient is expected to replace any previously provided Video data with the
     *  now provided data. This attribute is deprecated. DDEX advises that it may be removed
     *  at a future date and therefore recommends against using it.
     *
     * @param bool $isUpdated
     * @return self
     */
    public function setIsUpdated($isUpdated)
    {
        $this->isUpdated = $isUpdated;
        return $this;
    }

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of
     *  the Video as defined in IETF RfC 5646. The default is the same as indicated for the
     *  containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
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
     * The Language and script for the Elements of
     *  the Video as defined in IETF RfC 5646. The default is the same as indicated for the
     *  containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
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
     * Gets as videoType
     *
     * A Composite containing details of the Type
     *  of the Video.
     *
     * @return \DedexBundle\Entity\Ern383\VideoTypeType
     */
    public function getVideoType()
    {
        return $this->videoType;
    }

    /**
     * Sets a new videoType
     *
     * A Composite containing details of the Type
     *  of the Video.
     *
     * @param \DedexBundle\Entity\Ern383\VideoTypeType $videoType
     * @return self
     */
    public function setVideoType(?\DedexBundle\Entity\Ern383\VideoTypeType $videoType = null)
    {
        $this->videoType = $videoType;
        return $this;
    }

    /**
     * Gets as isArtistRelated
     *
     * The Flag indicating whether the Video is
     *  related to an Artist (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsArtistRelated()
    {
        return $this->isArtistRelated;
    }

    /**
     * Sets a new isArtistRelated
     *
     * The Flag indicating whether the Video is
     *  related to an Artist (=true) or not (=false).
     *
     * @param bool $isArtistRelated
     * @return self
     */
    public function setIsArtistRelated($isArtistRelated)
    {
        $this->isArtistRelated = $isArtistRelated;
        return $this;
    }

    /**
     * Adds as videoId
     *
     * A Composite containing details of an
     *  Identifier of the Video.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\VideoIdType $videoId
     */
    public function addToVideoId(\DedexBundle\Entity\Ern383\VideoIdType $videoId)
    {
        $this->videoId[] = $videoId;
        return $this;
    }

    /**
     * isset videoId
     *
     * A Composite containing details of an
     *  Identifier of the Video.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVideoId($index)
    {
        return isset($this->videoId[$index]);
    }

    /**
     * unset videoId
     *
     * A Composite containing details of an
     *  Identifier of the Video.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVideoId($index)
    {
        unset($this->videoId[$index]);
    }

    /**
     * Gets as videoId
     *
     * A Composite containing details of an
     *  Identifier of the Video.
     *
     * @return \DedexBundle\Entity\Ern383\VideoIdType[]
     */
    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * Sets a new videoId
     *
     * A Composite containing details of an
     *  Identifier of the Video.
     *
     * @param \DedexBundle\Entity\Ern383\VideoIdType[] $videoId
     * @return self
     */
    public function setVideoId(array $videoId = null)
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * Adds as indirectVideoId
     *
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the Video.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\MusicalWorkIdType $indirectVideoId
     */
    public function addToIndirectVideoId(\DedexBundle\Entity\Ern383\MusicalWorkIdType $indirectVideoId)
    {
        $this->indirectVideoId[] = $indirectVideoId;
        return $this;
    }

    /**
     * isset indirectVideoId
     *
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the Video.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndirectVideoId($index)
    {
        return isset($this->indirectVideoId[$index]);
    }

    /**
     * unset indirectVideoId
     *
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the Video.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndirectVideoId($index)
    {
        unset($this->indirectVideoId[$index]);
    }

    /**
     * Gets as indirectVideoId
     *
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the Video.
     *
     * @return \DedexBundle\Entity\Ern383\MusicalWorkIdType[]
     */
    public function getIndirectVideoId()
    {
        return $this->indirectVideoId;
    }

    /**
     * Sets a new indirectVideoId
     *
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the Video.
     *
     * @param \DedexBundle\Entity\Ern383\MusicalWorkIdType[] $indirectVideoId
     * @return self
     */
    public function setIndirectVideoId(array $indirectVideoId = null)
    {
        $this->indirectVideoId = $indirectVideoId;
        return $this;
    }

    /**
     * Gets as resourceReference
     *
     * The Identifier (specific to the Message)
     *  of the Video within the Release which contains it. This is a LocalResourceAnchor
     *  starting with the letter A.
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
     * The Identifier (specific to the Message)
     *  of the Video within the Release which contains it. This is a LocalResourceAnchor
     *  starting with the letter A.
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
     * Adds as videoCueSheetReference
     *
     * A Composite containing a
     *  VideoCueSheetReference for a CueSheet (specific to this
     *  Message).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\VideoCueSheetReferenceType $videoCueSheetReference
     */
    public function addToVideoCueSheetReference(\DedexBundle\Entity\Ern383\VideoCueSheetReferenceType $videoCueSheetReference)
    {
        $this->videoCueSheetReference[] = $videoCueSheetReference;
        return $this;
    }

    /**
     * isset videoCueSheetReference
     *
     * A Composite containing a
     *  VideoCueSheetReference for a CueSheet (specific to this
     *  Message).
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
     * A Composite containing a
     *  VideoCueSheetReference for a CueSheet (specific to this
     *  Message).
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
     * A Composite containing a
     *  VideoCueSheetReference for a CueSheet (specific to this
     *  Message).
     *
     * @return \DedexBundle\Entity\Ern383\VideoCueSheetReferenceType[]
     */
    public function getVideoCueSheetReference()
    {
        return $this->videoCueSheetReference;
    }

    /**
     * Sets a new videoCueSheetReference
     *
     * A Composite containing a
     *  VideoCueSheetReference for a CueSheet (specific to this
     *  Message).
     *
     * @param \DedexBundle\Entity\Ern383\VideoCueSheetReferenceType[] $videoCueSheetReference
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
     * A Composite containing the textual
     *  Description of the reason for the Identifier being used as a
     *  proxy.
     *
     * @return \DedexBundle\Entity\Ern383\ReasonType
     */
    public function getReasonForCueSheetAbsence()
    {
        return $this->reasonForCueSheetAbsence;
    }

    /**
     * Sets a new reasonForCueSheetAbsence
     *
     * A Composite containing the textual
     *  Description of the reason for the Identifier being used as a
     *  proxy.
     *
     * @param \DedexBundle\Entity\Ern383\ReasonType $reasonForCueSheetAbsence
     * @return self
     */
    public function setReasonForCueSheetAbsence(?\DedexBundle\Entity\Ern383\ReasonType $reasonForCueSheetAbsence = null)
    {
        $this->reasonForCueSheetAbsence = $reasonForCueSheetAbsence;
        return $this;
    }

    /**
     * Gets as referenceTitle
     *
     * A Composite containing details of the
     *  ReferenceTitle of the Video.
     *
     * @return \DedexBundle\Entity\Ern383\ReferenceTitleType
     */
    public function getReferenceTitle()
    {
        return $this->referenceTitle;
    }

    /**
     * Sets a new referenceTitle
     *
     * A Composite containing details of the
     *  ReferenceTitle of the Video.
     *
     * @param \DedexBundle\Entity\Ern383\ReferenceTitleType $referenceTitle
     * @return self
     */
    public function setReferenceTitle(?\DedexBundle\Entity\Ern383\ReferenceTitleType $referenceTitle = null)
    {
        $this->referenceTitle = $referenceTitle;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title
     *  of the Video.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\TitleType $title
     */
    public function addToTitle(\DedexBundle\Entity\Ern383\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title
     *  of the Video.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTitle($index)
    {
        return isset($this->title[$index]);
    }

    /**
     * unset title
     *
     * A Composite containing details of a Title
     *  of the Video.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTitle($index)
    {
        unset($this->title[$index]);
    }

    /**
     * Gets as title
     *
     * A Composite containing details of a Title
     *  of the Video.
     *
     * @return \DedexBundle\Entity\Ern383\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title
     *  of the Video.
     *
     * @param \DedexBundle\Entity\Ern383\TitleType[] $title
     * @return self
     */
    public function setTitle(array $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as instrumentationDescription
     *
     * A Composite containing a Description of
     *  the Type of instrumentation of the MusicalWork(s) in the Video.
     *
     * @return \DedexBundle\Entity\Ern383\DescriptionType
     */
    public function getInstrumentationDescription()
    {
        return $this->instrumentationDescription;
    }

    /**
     * Sets a new instrumentationDescription
     *
     * A Composite containing a Description of
     *  the Type of instrumentation of the MusicalWork(s) in the Video.
     *
     * @param \DedexBundle\Entity\Ern383\DescriptionType $instrumentationDescription
     * @return self
     */
    public function setInstrumentationDescription(?\DedexBundle\Entity\Ern383\DescriptionType $instrumentationDescription = null)
    {
        $this->instrumentationDescription = $instrumentationDescription;
        return $this;
    }

    /**
     * Gets as isMedley
     *
     * The Flag indicating whether the Video is a
     *  Medley (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsMedley()
    {
        return $this->isMedley;
    }

    /**
     * Sets a new isMedley
     *
     * The Flag indicating whether the Video is a
     *  Medley (=true) or not (=false).
     *
     * @param bool $isMedley
     * @return self
     */
    public function setIsMedley($isMedley)
    {
        $this->isMedley = $isMedley;
        return $this;
    }

    /**
     * Gets as isPotpourri
     *
     * The Flag indicating whether the Video is a
     *  Potpourri (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsPotpourri()
    {
        return $this->isPotpourri;
    }

    /**
     * Sets a new isPotpourri
     *
     * The Flag indicating whether the Video is a
     *  Potpourri (=true) or not (=false).
     *
     * @param bool $isPotpourri
     * @return self
     */
    public function setIsPotpourri($isPotpourri)
    {
        $this->isPotpourri = $isPotpourri;
        return $this;
    }

    /**
     * Gets as isInstrumental
     *
     * The Flag indicating whether the Video is
     *  instrumental (=true) or not (=false).
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
     * The Flag indicating whether the Video is
     *  instrumental (=true) or not (=false).
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
     * Gets as isBackground
     *
     * The Flag indicating whether the Video is
     *  used as background to other audio or audiovisual material (=true) or not
     *  (=false).
     *
     * @return bool
     */
    public function getIsBackground()
    {
        return $this->isBackground;
    }

    /**
     * Sets a new isBackground
     *
     * The Flag indicating whether the Video is
     *  used as background to other audio or audiovisual material (=true) or not
     *  (=false).
     *
     * @param bool $isBackground
     * @return self
     */
    public function setIsBackground($isBackground)
    {
        $this->isBackground = $isBackground;
        return $this;
    }

    /**
     * Gets as isHiddenResource
     *
     * The Flag indicating whether the Video is
     *  hidden in some way from the Consumer (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsHiddenResource()
    {
        return $this->isHiddenResource;
    }

    /**
     * Sets a new isHiddenResource
     *
     * The Flag indicating whether the Video is
     *  hidden in some way from the Consumer (=true) or not (=false).
     *
     * @param bool $isHiddenResource
     * @return self
     */
    public function setIsHiddenResource($isHiddenResource)
    {
        $this->isHiddenResource = $isHiddenResource;
        return $this;
    }

    /**
     * Gets as isBonusResource
     *
     * The Flag indicating whether the Video is
     *  additional to those on the original Release of which this is a Version (=true) or
     *  not (=false). This element is deprecated. DDEX advises that it may be removed at a
     *  future date and therefore recommends against using it. The IsBonusResource element
     *  in ResourceGroupContentItem should be used instead.
     *
     * @return bool
     */
    public function getIsBonusResource()
    {
        return $this->isBonusResource;
    }

    /**
     * Sets a new isBonusResource
     *
     * The Flag indicating whether the Video is
     *  additional to those on the original Release of which this is a Version (=true) or
     *  not (=false). This element is deprecated. DDEX advises that it may be removed at a
     *  future date and therefore recommends against using it. The IsBonusResource element
     *  in ResourceGroupContentItem should be used instead.
     *
     * @param bool $isBonusResource
     * @return self
     */
    public function setIsBonusResource($isBonusResource)
    {
        $this->isBonusResource = $isBonusResource;
        return $this;
    }

    /**
     * Gets as hasPreOrderFulfillment
     *
     * A Flag indicating whether a DSP shall
     *  (=true) or shall not (=false) make the Video available during the pre-oder period.
     *  If the Flag is not set or set to false, the Video shall not be made
     *  available.
     *
     * @return bool
     */
    public function getHasPreOrderFulfillment()
    {
        return $this->hasPreOrderFulfillment;
    }

    /**
     * Sets a new hasPreOrderFulfillment
     *
     * A Flag indicating whether a DSP shall
     *  (=true) or shall not (=false) make the Video available during the pre-oder period.
     *  If the Flag is not set or set to false, the Video shall not be made
     *  available.
     *
     * @param bool $hasPreOrderFulfillment
     * @return self
     */
    public function setHasPreOrderFulfillment($hasPreOrderFulfillment)
    {
        $this->hasPreOrderFulfillment = $hasPreOrderFulfillment;
        return $this;
    }

    /**
     * Gets as isRemastered
     *
     * The Flag indicating whether the Video is
     *  remastered (=true) or not (=false).
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
     * The Flag indicating whether the Video is
     *  remastered (=true) or not (=false).
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
     * Gets as noSilenceBefore
     *
     * The Flag indicating whether the Video is
     *  preceded by a period of silence (=false) or not (=true).
     *
     * @return bool
     */
    public function getNoSilenceBefore()
    {
        return $this->noSilenceBefore;
    }

    /**
     * Sets a new noSilenceBefore
     *
     * The Flag indicating whether the Video is
     *  preceded by a period of silence (=false) or not (=true).
     *
     * @param bool $noSilenceBefore
     * @return self
     */
    public function setNoSilenceBefore($noSilenceBefore)
    {
        $this->noSilenceBefore = $noSilenceBefore;
        return $this;
    }

    /**
     * Gets as noSilenceAfter
     *
     * The Flag indicating whether the Video is
     *  followed by a period of silence (=false) or not (=true).
     *
     * @return bool
     */
    public function getNoSilenceAfter()
    {
        return $this->noSilenceAfter;
    }

    /**
     * Sets a new noSilenceAfter
     *
     * The Flag indicating whether the Video is
     *  followed by a period of silence (=false) or not (=true).
     *
     * @param bool $noSilenceAfter
     * @return self
     */
    public function setNoSilenceAfter($noSilenceAfter)
    {
        $this->noSilenceAfter = $noSilenceAfter;
        return $this;
    }

    /**
     * Gets as performerInformationRequired
     *
     * A Flag indicating whether performer
     *  information is required (=true) or not (=false) when communicating details of the
     *  Video.
     *
     * @return bool
     */
    public function getPerformerInformationRequired()
    {
        return $this->performerInformationRequired;
    }

    /**
     * Sets a new performerInformationRequired
     *
     * A Flag indicating whether performer
     *  information is required (=true) or not (=false) when communicating details of the
     *  Video.
     *
     * @param bool $performerInformationRequired
     * @return self
     */
    public function setPerformerInformationRequired($performerInformationRequired)
    {
        $this->performerInformationRequired = $performerInformationRequired;
        return $this;
    }

    /**
     * Adds as languageOfPerformance
     *
     * The original Language of the Performance
     *  recorded in the Video (represented by an ISO 639-2
     *  LanguageCode).
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
     * The original Language of the Performance
     *  recorded in the Video (represented by an ISO 639-2
     *  LanguageCode).
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
     * The original Language of the Performance
     *  recorded in the Video (represented by an ISO 639-2
     *  LanguageCode).
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
     * The original Language of the Performance
     *  recorded in the Video (represented by an ISO 639-2
     *  LanguageCode).
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
     * The original Language of the Performance
     *  recorded in the Video (represented by an ISO 639-2
     *  LanguageCode).
     *
     * @param string $languageOfPerformance
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
     * The Language of dubbing used in the Video
     *  (represented by an ISO 639-2 LanguageCode).
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
     * The Language of dubbing used in the Video
     *  (represented by an ISO 639-2 LanguageCode).
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
     * The Language of dubbing used in the Video
     *  (represented by an ISO 639-2 LanguageCode).
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
     * The Language of dubbing used in the Video
     *  (represented by an ISO 639-2 LanguageCode).
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
     * The Language of dubbing used in the Video
     *  (represented by an ISO 639-2 LanguageCode).
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
     * The Language of SubTitles in the Video
     *  (represented by an ISO 639-2 LanguageCode).
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
     * The Language of SubTitles in the Video
     *  (represented by an ISO 639-2 LanguageCode).
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
     * The Language of SubTitles in the Video
     *  (represented by an ISO 639-2 LanguageCode).
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
     * The Language of SubTitles in the Video
     *  (represented by an ISO 639-2 LanguageCode).
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
     * The Language of SubTitles in the Video
     *  (represented by an ISO 639-2 LanguageCode).
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
     * Gets as duration
     *
     * The Duration of the Video (using the ISO
     *  8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables,
     *  upper case characters are part of the xs:string, e.g. one hour, two minutes and
     *  three seconds would be PT1H2M3S). The seconds section ss may include fractions
     *  (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * The Duration of the Video (using the ISO
     *  8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables,
     *  upper case characters are part of the xs:string, e.g. one hour, two minutes and
     *  three seconds would be PT1H2M3S). The seconds section ss may include fractions
     *  (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * Gets as rightsAgreementId
     *
     * A Composite containing details of
     *  Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s)
     *  used in the Video.
     *
     * @return \DedexBundle\Entity\Ern383\RightsAgreementIdType
     */
    public function getRightsAgreementId()
    {
        return $this->rightsAgreementId;
    }

    /**
     * Sets a new rightsAgreementId
     *
     * A Composite containing details of
     *  Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s)
     *  used in the Video.
     *
     * @param \DedexBundle\Entity\Ern383\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DedexBundle\Entity\Ern383\RightsAgreementIdType $rightsAgreementId = null)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }

    /**
     * Gets as videoCollectionReferenceList
     *
     * A Composite containing details of one or
     *  more Collections. The referenced Collection has to be of CollectionType
     *  VideoChapter.
     *
     * @return \DedexBundle\Entity\Ern383\SoundRecordingCollectionReferenceListType
     */
    public function getVideoCollectionReferenceList()
    {
        return $this->videoCollectionReferenceList;
    }

    /**
     * Sets a new videoCollectionReferenceList
     *
     * A Composite containing details of one or
     *  more Collections. The referenced Collection has to be of CollectionType
     *  VideoChapter.
     *
     * @param \DedexBundle\Entity\Ern383\SoundRecordingCollectionReferenceListType $videoCollectionReferenceList
     * @return self
     */
    public function setVideoCollectionReferenceList(?\DedexBundle\Entity\Ern383\SoundRecordingCollectionReferenceListType $videoCollectionReferenceList = null)
    {
        $this->videoCollectionReferenceList = $videoCollectionReferenceList;
        return $this;
    }

    /**
     * Adds as resourceMusicalWorkReference
     *
     * A Composite containing details of one or
     *  more MusicalWorks contained in the Video.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference
     */
    public function addToResourceMusicalWorkReferenceList(\DedexBundle\Entity\Ern383\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference)
    {
        $this->resourceMusicalWorkReferenceList[] = $resourceMusicalWorkReference;
        return $this;
    }

    /**
     * isset resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or
     *  more MusicalWorks contained in the Video.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceMusicalWorkReferenceList($index)
    {
        return isset($this->resourceMusicalWorkReferenceList[$index]);
    }

    /**
     * unset resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or
     *  more MusicalWorks contained in the Video.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceMusicalWorkReferenceList($index)
    {
        unset($this->resourceMusicalWorkReferenceList[$index]);
    }

    /**
     * Gets as resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or
     *  more MusicalWorks contained in the Video.
     *
     * @return \DedexBundle\Entity\Ern383\ResourceMusicalWorkReferenceType[]
     */
    public function getResourceMusicalWorkReferenceList()
    {
        return $this->resourceMusicalWorkReferenceList;
    }

    /**
     * Sets a new resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or
     *  more MusicalWorks contained in the Video.
     *
     * @param \DedexBundle\Entity\Ern383\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     * @return self
     */
    public function setResourceMusicalWorkReferenceList(array $resourceMusicalWorkReferenceList = null)
    {
        $this->resourceMusicalWorkReferenceList = $resourceMusicalWorkReferenceList;
        return $this;
    }

    /**
     * Adds as resourceContainedResourceReference
     *
     * A Composite containing details of
     *  ResourceContainedResourceReferences referring to a Resource that is contained in
     *  the current Video.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\ResourceContainedResourceReferenceType $resourceContainedResourceReference
     */
    public function addToResourceContainedResourceReferenceList(\DedexBundle\Entity\Ern383\ResourceContainedResourceReferenceType $resourceContainedResourceReference)
    {
        $this->resourceContainedResourceReferenceList[] = $resourceContainedResourceReference;
        return $this;
    }

    /**
     * isset resourceContainedResourceReferenceList
     *
     * A Composite containing details of
     *  ResourceContainedResourceReferences referring to a Resource that is contained in
     *  the current Video.
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
     * A Composite containing details of
     *  ResourceContainedResourceReferences referring to a Resource that is contained in
     *  the current Video.
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
     * A Composite containing details of
     *  ResourceContainedResourceReferences referring to a Resource that is contained in
     *  the current Video.
     *
     * @return \DedexBundle\Entity\Ern383\ResourceContainedResourceReferenceType[]
     */
    public function getResourceContainedResourceReferenceList()
    {
        return $this->resourceContainedResourceReferenceList;
    }

    /**
     * Sets a new resourceContainedResourceReferenceList
     *
     * A Composite containing details of
     *  ResourceContainedResourceReferences referring to a Resource that is contained in
     *  the current Video.
     *
     * @param \DedexBundle\Entity\Ern383\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     * @return self
     */
    public function setResourceContainedResourceReferenceList(array $resourceContainedResourceReferenceList = null)
    {
        $this->resourceContainedResourceReferenceList = $resourceContainedResourceReferenceList;
        return $this;
    }

    /**
     * Gets as creationDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the Video was created. This is a string with the
     *  syntax YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern383\EventDateType
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets a new creationDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the Video was created. This is a string with the
     *  syntax YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern383\EventDateType $creationDate
     * @return self
     */
    public function setCreationDate(?\DedexBundle\Entity\Ern383\EventDateType $creationDate = null)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Gets as masteredDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the Video was originally mastered (in either
     *  analogue or digital form). This is a string with the syntax
     *  YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern383\EventDateType
     */
    public function getMasteredDate()
    {
        return $this->masteredDate;
    }

    /**
     * Sets a new masteredDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the Video was originally mastered (in either
     *  analogue or digital form). This is a string with the syntax
     *  YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern383\EventDateType $masteredDate
     * @return self
     */
    public function setMasteredDate(?\DedexBundle\Entity\Ern383\EventDateType $masteredDate = null)
    {
        $this->masteredDate = $masteredDate;
        return $this;
    }

    /**
     * Gets as remasteredDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the Video was re-mastered (usually digitally).
     *  This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern383\EventDateType
     */
    public function getRemasteredDate()
    {
        return $this->remasteredDate;
    }

    /**
     * Sets a new remasteredDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the Video was re-mastered (usually digitally).
     *  This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern383\EventDateType $remasteredDate
     * @return self
     */
    public function setRemasteredDate(?\DedexBundle\Entity\Ern383\EventDateType $remasteredDate = null)
    {
        $this->remasteredDate = $remasteredDate;
        return $this;
    }

    /**
     * Adds as videoDetailsByTerritory
     *
     * A Composite containing details of
     *  Descriptors and other attributes of the Video which may vary according to
     *  Territory of release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\VideoDetailsByTerritoryType $videoDetailsByTerritory
     */
    public function addToVideoDetailsByTerritory(\DedexBundle\Entity\Ern383\VideoDetailsByTerritoryType $videoDetailsByTerritory)
    {
        $this->videoDetailsByTerritory[] = $videoDetailsByTerritory;
        return $this;
    }

    /**
     * isset videoDetailsByTerritory
     *
     * A Composite containing details of
     *  Descriptors and other attributes of the Video which may vary according to
     *  Territory of release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVideoDetailsByTerritory($index)
    {
        return isset($this->videoDetailsByTerritory[$index]);
    }

    /**
     * unset videoDetailsByTerritory
     *
     * A Composite containing details of
     *  Descriptors and other attributes of the Video which may vary according to
     *  Territory of release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVideoDetailsByTerritory($index)
    {
        unset($this->videoDetailsByTerritory[$index]);
    }

    /**
     * Gets as videoDetailsByTerritory
     *
     * A Composite containing details of
     *  Descriptors and other attributes of the Video which may vary according to
     *  Territory of release.
     *
     * @return \DedexBundle\Entity\Ern383\VideoDetailsByTerritoryType[]
     */
    public function getVideoDetailsByTerritory()
    {
        return $this->videoDetailsByTerritory;
    }

    /**
     * Sets a new videoDetailsByTerritory
     *
     * A Composite containing details of
     *  Descriptors and other attributes of the Video which may vary according to
     *  Territory of release.
     *
     * @param \DedexBundle\Entity\Ern383\VideoDetailsByTerritoryType[] $videoDetailsByTerritory
     * @return self
     */
    public function setVideoDetailsByTerritory(array $videoDetailsByTerritory)
    {
        $this->videoDetailsByTerritory = $videoDetailsByTerritory;
        return $this;
    }

    /**
     * Gets as territoryOfCommissioning
     *
     * The country of
     *  commissioning.
     *
     * @return \DedexBundle\Entity\Ern383\AllTerritoryCodeType
     */
    public function getTerritoryOfCommissioning()
    {
        return $this->territoryOfCommissioning;
    }

    /**
     * Sets a new territoryOfCommissioning
     *
     * The country of
     *  commissioning.
     *
     * @param \DedexBundle\Entity\Ern383\AllTerritoryCodeType $territoryOfCommissioning
     * @return self
     */
    public function setTerritoryOfCommissioning(?\DedexBundle\Entity\Ern383\AllTerritoryCodeType $territoryOfCommissioning = null)
    {
        $this->territoryOfCommissioning = $territoryOfCommissioning;
        return $this;
    }

    /**
     * Gets as numberOfFeaturedArtists
     *
     * The number of FeaturedArtists associated
     *  with the Video.
     *
     * @return int
     */
    public function getNumberOfFeaturedArtists()
    {
        return $this->numberOfFeaturedArtists;
    }

    /**
     * Sets a new numberOfFeaturedArtists
     *
     * The number of FeaturedArtists associated
     *  with the Video.
     *
     * @param int $numberOfFeaturedArtists
     * @return self
     */
    public function setNumberOfFeaturedArtists($numberOfFeaturedArtists)
    {
        $this->numberOfFeaturedArtists = $numberOfFeaturedArtists;
        return $this;
    }

    /**
     * Gets as numberOfNonFeaturedArtists
     *
     * The number of NonFeaturedArtists
     *  associated with the Video.
     *
     * @return int
     */
    public function getNumberOfNonFeaturedArtists()
    {
        return $this->numberOfNonFeaturedArtists;
    }

    /**
     * Sets a new numberOfNonFeaturedArtists
     *
     * The number of NonFeaturedArtists
     *  associated with the Video.
     *
     * @param int $numberOfNonFeaturedArtists
     * @return self
     */
    public function setNumberOfNonFeaturedArtists($numberOfNonFeaturedArtists)
    {
        $this->numberOfNonFeaturedArtists = $numberOfNonFeaturedArtists;
        return $this;
    }

    /**
     * Gets as numberOfContractedArtists
     *
     * The number of ContractedArtists associated
     *  with the Video.
     *
     * @return int
     */
    public function getNumberOfContractedArtists()
    {
        return $this->numberOfContractedArtists;
    }

    /**
     * Sets a new numberOfContractedArtists
     *
     * The number of ContractedArtists associated
     *  with the Video.
     *
     * @param int $numberOfContractedArtists
     * @return self
     */
    public function setNumberOfContractedArtists($numberOfContractedArtists)
    {
        $this->numberOfContractedArtists = $numberOfContractedArtists;
        return $this;
    }

    /**
     * Gets as numberOfNonContractedArtists
     *
     * The number of NonContractedArtists
     *  associated with the Video.
     *
     * @return int
     */
    public function getNumberOfNonContractedArtists()
    {
        return $this->numberOfNonContractedArtists;
    }

    /**
     * Sets a new numberOfNonContractedArtists
     *
     * The number of NonContractedArtists
     *  associated with the Video.
     *
     * @param int $numberOfNonContractedArtists
     * @return self
     */
    public function setNumberOfNonContractedArtists($numberOfNonContractedArtists)
    {
        $this->numberOfNonContractedArtists = $numberOfNonContractedArtists;
        return $this;
    }
}

