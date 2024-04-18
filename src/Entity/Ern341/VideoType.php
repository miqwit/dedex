<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing VideoType
 *
 * A ddex:Composite containing details of a ddex:Video.
 * XSD Type: Video
 */
class VideoType
{
    /**
     * The ddex:Flag indicating whether the ern:Video ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided ern:Video data with the now provided data.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * The ddex:Language and script for the ddex:Elements of the ern:Video as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of the ddex:Type of the ern:Video.
     *
     * @var \DedexBundle\Entity\DdexC\VideoTypeType $videoType
     */
    private $videoType = null;

    /**
     * The ddex:Flag indicating whether the ern:Video is related to an ddex:Artist (=True) or not (=False).
     *
     * @var bool $isArtistRelated
     */
    private $isArtistRelated = null;

    /**
     * A ddex:Composite containing details of an ddex:Identifier of the ern:Video.
     *
     * @var \DedexBundle\Entity\DdexC\VideoIdType[] $videoId
     */
    private $videoId = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:Video.
     *
     * @var \DedexBundle\Entity\DdexC\MusicalWorkIdType[] $indirectVideoId
     */
    private $indirectVideoId = [
        
    ];

    /**
     * The ddex:Identifier (specific to the ddex:Message) of the ern:Video within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A ddex:Composite containing a ddex:VideoCueSheetReference for a ddex:CueSheet (specific to this ddex:Message).
     *
     * @var \DedexBundle\Entity\DdexC\VideoCueSheetReferenceType[] $videoCueSheetReference
     */
    private $videoCueSheetReference = [
        
    ];

    /**
     * A ddex:Composite containing the textual ddex:Description of the reason for the ddex:Identifier being used as a proxy.
     *
     * @var \DedexBundle\Entity\DdexC\ReasonType $reasonForCueSheetAbsence
     */
    private $reasonForCueSheetAbsence = null;

    /**
     * A ddex:Composite containing details of the ddex:ReferenceTitle of the ern:Video.
     *
     * @var \DedexBundle\Entity\DdexC\ReferenceTitleType $referenceTitle
     */
    private $referenceTitle = null;

    /**
     * A ddex:Composite containing details of a ddex:Title of the ern:Video.
     *
     * @var \DedexBundle\Entity\DdexC\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A ddex:Composite containing a ddex:Description of the ddex:Type of instrumentation of the MusicalWork(s) in the ern:Video.
     *
     * @var \DedexBundle\Entity\DdexC\DescriptionType $instrumentationDescription
     */
    private $instrumentationDescription = null;

    /**
     * The ddex:Flag indicating whether the ern:Video is a ddex:Medley (=True) or not (=False).
     *
     * @var bool $isMedley
     */
    private $isMedley = null;

    /**
     * The ddex:Flag indicating whether the ern:Video is a ddex:Potpourri (=True) or not (=False).
     *
     * @var bool $isPotpourri
     */
    private $isPotpourri = null;

    /**
     * The ddex:Flag indicating whether the ern:Video is instrumental (=True) or not (=False).
     *
     * @var bool $isInstrumental
     */
    private $isInstrumental = null;

    /**
     * The ddex:Flag indicating whether the ern:Video is used as background to other audio or audiovisual material (=True) or not (=False).
     *
     * @var bool $isBackground
     */
    private $isBackground = null;

    /**
     * The ddex:Flag indicating whether the ern:Video is hidden in some way from the ddex:Consumer (=True) or not (=False).
     *
     * @var bool $isHiddenResource
     */
    private $isHiddenResource = null;

    /**
     * The ddex:Flag indicating whether the ern:Video is additional to those on the original ddex:Release of which this is a ddex:Version (=True) or not (=False).
     *
     * @var bool $isBonusResource
     */
    private $isBonusResource = null;

    /**
     * The ddex:Flag indicating whether the ern:Video is preceded by a period of silence (=False) or not (=True).
     *
     * @var bool $noSilenceBefore
     */
    private $noSilenceBefore = null;

    /**
     * The ddex:Flag indicating whether the ern:Video is followed by a period of silence (=False) or not (=True).
     *
     * @var bool $noSilenceAfter
     */
    private $noSilenceAfter = null;

    /**
     * A ddex:Flag indicating whether performer information is required (=True) or not (=False) when communicating details of the ern:Video.
     *
     * @var bool $performerInformationRequired
     */
    private $performerInformationRequired = null;

    /**
     * The ddex:Language of the ddex:Performance recorded in the ern:Video (represented by an ISO 639-2 iso639a2:LanguageCode).
     *
     * @var string[] $languageOfPerformance
     */
    private $languageOfPerformance = [
        
    ];

    /**
     * The ddex:Duration of the ern:Video (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ern:Video.
     *
     * @var \DedexBundle\Entity\DdexC\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Collections. The referenced ddex:Collection has to be of ddex:CollectionType ddex:VideoChapter.
     *
     * @var \DedexBundle\Entity\DdexC\SoundRecordingCollectionReferenceListType $videoCollectionReferenceList
     */
    private $videoCollectionReferenceList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:Video.
     *
     * @var \DedexBundle\Entity\DdexC\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     */
    private $resourceMusicalWorkReferenceList = null;

    /**
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:Video.
     *
     * @var \DedexBundle\Entity\DdexC\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     */
    private $resourceContainedResourceReferenceList = null;

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ern:Video was created.
     *
     * @var \DedexBundle\Entity\DdexC\EventDateType $creationDate
     */
    private $creationDate = null;

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ern:Video was originally mastered (in either analogue or digital form).
     *
     * @var \DedexBundle\Entity\DdexC\EventDateType $masteredDate
     */
    private $masteredDate = null;

    /**
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ern:Video which may vary according to ddex:Territory of release.
     *
     * @var \DedexBundle\Entity\Ern341\VideoDetailsByTerritoryType[] $videoDetailsByTerritory
     */
    private $videoDetailsByTerritory = [
        
    ];

    /**
     * Gets as isUpdated
     *
     * The ddex:Flag indicating whether the ern:Video ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided ern:Video data with the now provided data.
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
     * The ddex:Flag indicating whether the ern:Video ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided ern:Video data with the now provided data.
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
     * The ddex:Language and script for the ddex:Elements of the ern:Video as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ern:Video as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Composite containing details of the ddex:Type of the ern:Video.
     *
     * @return \DedexBundle\Entity\DdexC\VideoTypeType
     */
    public function getVideoType()
    {
        return $this->videoType;
    }

    /**
     * Sets a new videoType
     *
     * A ddex:Composite containing details of the ddex:Type of the ern:Video.
     *
     * @param \DedexBundle\Entity\DdexC\VideoTypeType $videoType
     * @return self
     */
    public function setVideoType(?\DedexBundle\Entity\DdexC\VideoTypeType $videoType = null)
    {
        $this->videoType = $videoType;
        return $this;
    }

    /**
     * Gets as isArtistRelated
     *
     * The ddex:Flag indicating whether the ern:Video is related to an ddex:Artist (=True) or not (=False).
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
     * The ddex:Flag indicating whether the ern:Video is related to an ddex:Artist (=True) or not (=False).
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
     * A ddex:Composite containing details of an ddex:Identifier of the ern:Video.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\VideoIdType $videoId
     */
    public function addToVideoId(\DedexBundle\Entity\DdexC\VideoIdType $videoId)
    {
        $this->videoId[] = $videoId;
        return $this;
    }

    /**
     * isset videoId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ern:Video.
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
     * A ddex:Composite containing details of an ddex:Identifier of the ern:Video.
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
     * A ddex:Composite containing details of an ddex:Identifier of the ern:Video.
     *
     * @return \DedexBundle\Entity\DdexC\VideoIdType[]
     */
    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * Sets a new videoId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ern:Video.
     *
     * @param \DedexBundle\Entity\DdexC\VideoIdType[] $videoId
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
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:Video.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\MusicalWorkIdType $indirectVideoId
     */
    public function addToIndirectVideoId(\DedexBundle\Entity\DdexC\MusicalWorkIdType $indirectVideoId)
    {
        $this->indirectVideoId[] = $indirectVideoId;
        return $this;
    }

    /**
     * isset indirectVideoId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:Video.
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
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:Video.
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
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:Video.
     *
     * @return \DedexBundle\Entity\DdexC\MusicalWorkIdType[]
     */
    public function getIndirectVideoId()
    {
        return $this->indirectVideoId;
    }

    /**
     * Sets a new indirectVideoId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:Video.
     *
     * @param \DedexBundle\Entity\DdexC\MusicalWorkIdType[] $indirectVideoId
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
     * The ddex:Identifier (specific to the ddex:Message) of the ern:Video within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
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
     * The ddex:Identifier (specific to the ddex:Message) of the ern:Video within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
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
     * A ddex:Composite containing a ddex:VideoCueSheetReference for a ddex:CueSheet (specific to this ddex:Message).
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\VideoCueSheetReferenceType $videoCueSheetReference
     */
    public function addToVideoCueSheetReference(\DedexBundle\Entity\DdexC\VideoCueSheetReferenceType $videoCueSheetReference)
    {
        $this->videoCueSheetReference[] = $videoCueSheetReference;
        return $this;
    }

    /**
     * isset videoCueSheetReference
     *
     * A ddex:Composite containing a ddex:VideoCueSheetReference for a ddex:CueSheet (specific to this ddex:Message).
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
     * A ddex:Composite containing a ddex:VideoCueSheetReference for a ddex:CueSheet (specific to this ddex:Message).
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
     * A ddex:Composite containing a ddex:VideoCueSheetReference for a ddex:CueSheet (specific to this ddex:Message).
     *
     * @return \DedexBundle\Entity\DdexC\VideoCueSheetReferenceType[]
     */
    public function getVideoCueSheetReference()
    {
        return $this->videoCueSheetReference;
    }

    /**
     * Sets a new videoCueSheetReference
     *
     * A ddex:Composite containing a ddex:VideoCueSheetReference for a ddex:CueSheet (specific to this ddex:Message).
     *
     * @param \DedexBundle\Entity\DdexC\VideoCueSheetReferenceType[] $videoCueSheetReference
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
     * A ddex:Composite containing the textual ddex:Description of the reason for the ddex:Identifier being used as a proxy.
     *
     * @return \DedexBundle\Entity\DdexC\ReasonType
     */
    public function getReasonForCueSheetAbsence()
    {
        return $this->reasonForCueSheetAbsence;
    }

    /**
     * Sets a new reasonForCueSheetAbsence
     *
     * A ddex:Composite containing the textual ddex:Description of the reason for the ddex:Identifier being used as a proxy.
     *
     * @param \DedexBundle\Entity\DdexC\ReasonType $reasonForCueSheetAbsence
     * @return self
     */
    public function setReasonForCueSheetAbsence(?\DedexBundle\Entity\DdexC\ReasonType $reasonForCueSheetAbsence = null)
    {
        $this->reasonForCueSheetAbsence = $reasonForCueSheetAbsence;
        return $this;
    }

    /**
     * Gets as referenceTitle
     *
     * A ddex:Composite containing details of the ddex:ReferenceTitle of the ern:Video.
     *
     * @return \DedexBundle\Entity\DdexC\ReferenceTitleType
     */
    public function getReferenceTitle()
    {
        return $this->referenceTitle;
    }

    /**
     * Sets a new referenceTitle
     *
     * A ddex:Composite containing details of the ddex:ReferenceTitle of the ern:Video.
     *
     * @param \DedexBundle\Entity\DdexC\ReferenceTitleType $referenceTitle
     * @return self
     */
    public function setReferenceTitle(?\DedexBundle\Entity\DdexC\ReferenceTitleType $referenceTitle = null)
    {
        $this->referenceTitle = $referenceTitle;
        return $this;
    }

    /**
     * Adds as title
     *
     * A ddex:Composite containing details of a ddex:Title of the ern:Video.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\TitleType $title
     */
    public function addToTitle(\DedexBundle\Entity\DdexC\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A ddex:Composite containing details of a ddex:Title of the ern:Video.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:Video.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:Video.
     *
     * @return \DedexBundle\Entity\DdexC\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A ddex:Composite containing details of a ddex:Title of the ern:Video.
     *
     * @param \DedexBundle\Entity\DdexC\TitleType[] $title
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
     * A ddex:Composite containing a ddex:Description of the ddex:Type of instrumentation of the MusicalWork(s) in the ern:Video.
     *
     * @return \DedexBundle\Entity\DdexC\DescriptionType
     */
    public function getInstrumentationDescription()
    {
        return $this->instrumentationDescription;
    }

    /**
     * Sets a new instrumentationDescription
     *
     * A ddex:Composite containing a ddex:Description of the ddex:Type of instrumentation of the MusicalWork(s) in the ern:Video.
     *
     * @param \DedexBundle\Entity\DdexC\DescriptionType $instrumentationDescription
     * @return self
     */
    public function setInstrumentationDescription(?\DedexBundle\Entity\DdexC\DescriptionType $instrumentationDescription = null)
    {
        $this->instrumentationDescription = $instrumentationDescription;
        return $this;
    }

    /**
     * Gets as isMedley
     *
     * The ddex:Flag indicating whether the ern:Video is a ddex:Medley (=True) or not (=False).
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
     * The ddex:Flag indicating whether the ern:Video is a ddex:Medley (=True) or not (=False).
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
     * The ddex:Flag indicating whether the ern:Video is a ddex:Potpourri (=True) or not (=False).
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
     * The ddex:Flag indicating whether the ern:Video is a ddex:Potpourri (=True) or not (=False).
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
     * The ddex:Flag indicating whether the ern:Video is instrumental (=True) or not (=False).
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
     * The ddex:Flag indicating whether the ern:Video is instrumental (=True) or not (=False).
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
     * The ddex:Flag indicating whether the ern:Video is used as background to other audio or audiovisual material (=True) or not (=False).
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
     * The ddex:Flag indicating whether the ern:Video is used as background to other audio or audiovisual material (=True) or not (=False).
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
     * The ddex:Flag indicating whether the ern:Video is hidden in some way from the ddex:Consumer (=True) or not (=False).
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
     * The ddex:Flag indicating whether the ern:Video is hidden in some way from the ddex:Consumer (=True) or not (=False).
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
     * The ddex:Flag indicating whether the ern:Video is additional to those on the original ddex:Release of which this is a ddex:Version (=True) or not (=False).
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
     * The ddex:Flag indicating whether the ern:Video is additional to those on the original ddex:Release of which this is a ddex:Version (=True) or not (=False).
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
     * Gets as noSilenceBefore
     *
     * The ddex:Flag indicating whether the ern:Video is preceded by a period of silence (=False) or not (=True).
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
     * The ddex:Flag indicating whether the ern:Video is preceded by a period of silence (=False) or not (=True).
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
     * The ddex:Flag indicating whether the ern:Video is followed by a period of silence (=False) or not (=True).
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
     * The ddex:Flag indicating whether the ern:Video is followed by a period of silence (=False) or not (=True).
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
     * A ddex:Flag indicating whether performer information is required (=True) or not (=False) when communicating details of the ern:Video.
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
     * A ddex:Flag indicating whether performer information is required (=True) or not (=False) when communicating details of the ern:Video.
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
     * The ddex:Language of the ddex:Performance recorded in the ern:Video (represented by an ISO 639-2 iso639a2:LanguageCode).
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
     * The ddex:Language of the ddex:Performance recorded in the ern:Video (represented by an ISO 639-2 iso639a2:LanguageCode).
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
     * The ddex:Language of the ddex:Performance recorded in the ern:Video (represented by an ISO 639-2 iso639a2:LanguageCode).
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
     * The ddex:Language of the ddex:Performance recorded in the ern:Video (represented by an ISO 639-2 iso639a2:LanguageCode).
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
     * The ddex:Language of the ddex:Performance recorded in the ern:Video (represented by an ISO 639-2 iso639a2:LanguageCode).
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
     * Gets as duration
     *
     * The ddex:Duration of the ern:Video (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The ddex:Duration of the ern:Video (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ern:Video.
     *
     * @return \DedexBundle\Entity\DdexC\RightsAgreementIdType
     */
    public function getRightsAgreementId()
    {
        return $this->rightsAgreementId;
    }

    /**
     * Sets a new rightsAgreementId
     *
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ern:Video.
     *
     * @param \DedexBundle\Entity\DdexC\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DedexBundle\Entity\DdexC\RightsAgreementIdType $rightsAgreementId = null)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }

    /**
     * Gets as videoCollectionReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:Collections. The referenced ddex:Collection has to be of ddex:CollectionType ddex:VideoChapter.
     *
     * @return \DedexBundle\Entity\DdexC\SoundRecordingCollectionReferenceListType
     */
    public function getVideoCollectionReferenceList()
    {
        return $this->videoCollectionReferenceList;
    }

    /**
     * Sets a new videoCollectionReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:Collections. The referenced ddex:Collection has to be of ddex:CollectionType ddex:VideoChapter.
     *
     * @param \DedexBundle\Entity\DdexC\SoundRecordingCollectionReferenceListType $videoCollectionReferenceList
     * @return self
     */
    public function setVideoCollectionReferenceList(?\DedexBundle\Entity\DdexC\SoundRecordingCollectionReferenceListType $videoCollectionReferenceList = null)
    {
        $this->videoCollectionReferenceList = $videoCollectionReferenceList;
        return $this;
    }

    /**
     * Adds as resourceMusicalWorkReference
     *
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:Video.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference
     */
    public function addToResourceMusicalWorkReferenceList(\DedexBundle\Entity\DdexC\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference)
    {
        $this->resourceMusicalWorkReferenceList[] = $resourceMusicalWorkReference;
        return $this;
    }

    /**
     * isset resourceMusicalWorkReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:Video.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:Video.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:Video.
     *
     * @return \DedexBundle\Entity\DdexC\ResourceMusicalWorkReferenceType[]
     */
    public function getResourceMusicalWorkReferenceList()
    {
        return $this->resourceMusicalWorkReferenceList;
    }

    /**
     * Sets a new resourceMusicalWorkReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:Video.
     *
     * @param \DedexBundle\Entity\DdexC\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:Video.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ResourceContainedResourceReferenceType $resourceContainedResourceReference
     */
    public function addToResourceContainedResourceReferenceList(\DedexBundle\Entity\DdexC\ResourceContainedResourceReferenceType $resourceContainedResourceReference)
    {
        $this->resourceContainedResourceReferenceList[] = $resourceContainedResourceReference;
        return $this;
    }

    /**
     * isset resourceContainedResourceReferenceList
     *
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:Video.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:Video.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:Video.
     *
     * @return \DedexBundle\Entity\DdexC\ResourceContainedResourceReferenceType[]
     */
    public function getResourceContainedResourceReferenceList()
    {
        return $this->resourceContainedResourceReferenceList;
    }

    /**
     * Sets a new resourceContainedResourceReferenceList
     *
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:Video.
     *
     * @param \DedexBundle\Entity\DdexC\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
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
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ern:Video was created.
     *
     * @return \DedexBundle\Entity\DdexC\EventDateType
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets a new creationDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ern:Video was created.
     *
     * @param \DedexBundle\Entity\DdexC\EventDateType $creationDate
     * @return self
     */
    public function setCreationDate(?\DedexBundle\Entity\DdexC\EventDateType $creationDate = null)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Gets as masteredDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ern:Video was originally mastered (in either analogue or digital form).
     *
     * @return \DedexBundle\Entity\DdexC\EventDateType
     */
    public function getMasteredDate()
    {
        return $this->masteredDate;
    }

    /**
     * Sets a new masteredDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ern:Video was originally mastered (in either analogue or digital form).
     *
     * @param \DedexBundle\Entity\DdexC\EventDateType $masteredDate
     * @return self
     */
    public function setMasteredDate(?\DedexBundle\Entity\DdexC\EventDateType $masteredDate = null)
    {
        $this->masteredDate = $masteredDate;
        return $this;
    }

    /**
     * Adds as videoDetailsByTerritory
     *
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ern:Video which may vary according to ddex:Territory of release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\VideoDetailsByTerritoryType $videoDetailsByTerritory
     */
    public function addToVideoDetailsByTerritory(\DedexBundle\Entity\Ern341\VideoDetailsByTerritoryType $videoDetailsByTerritory)
    {
        $this->videoDetailsByTerritory[] = $videoDetailsByTerritory;
        return $this;
    }

    /**
     * isset videoDetailsByTerritory
     *
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ern:Video which may vary according to ddex:Territory of release.
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
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ern:Video which may vary according to ddex:Territory of release.
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
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ern:Video which may vary according to ddex:Territory of release.
     *
     * @return \DedexBundle\Entity\Ern341\VideoDetailsByTerritoryType[]
     */
    public function getVideoDetailsByTerritory()
    {
        return $this->videoDetailsByTerritory;
    }

    /**
     * Sets a new videoDetailsByTerritory
     *
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ern:Video which may vary according to ddex:Territory of release.
     *
     * @param \DedexBundle\Entity\Ern341\VideoDetailsByTerritoryType[] $videoDetailsByTerritory
     * @return self
     */
    public function setVideoDetailsByTerritory(array $videoDetailsByTerritory)
    {
        $this->videoDetailsByTerritory = $videoDetailsByTerritory;
        return $this;
    }
}

