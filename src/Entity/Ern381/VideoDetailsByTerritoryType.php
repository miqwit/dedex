<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing VideoDetailsByTerritoryType
 *
 * A Composite containing details of Descriptors and other attributes of a Video which may vary according to Territory of release.
 * XSD Type: VideoDetailsByTerritory
 */
class VideoDetailsByTerritoryType
{
    /**
     * The Language and script for the Elements of the SoundRecordingDetailsByTerritory as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Territory to which the SoundRecording details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DedexBundle\Entity\Ern381\CurrentTerritoryCodeType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory to which the SoundRecording details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DedexBundle\Entity\Ern381\CurrentTerritoryCodeType[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Composite containing details of a Title of the SoundRecording.
     *
     * @var \DedexBundle\Entity\Ern381\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing details of the DisplayArtist for the SoundRecording. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @var \DedexBundle\Entity\Ern381\ArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * A Composite containing details of a DisplayConductor for the Video. A DisplayConductor may be described through Name, Identifier and Roles.
     *
     * @var \DedexBundle\Entity\Ern381\ArtistType[] $displayConductor
     */
    private $displayConductor = [
        
    ];

    /**
     * A Composite containing details of a Contributor to the Video.
     *
     * @var \DedexBundle\Entity\Ern381\DetailedResourceContributorType[] $resourceContributor
     */
    private $resourceContributor = [
        
    ];

    /**
     * A Composite containing details of an indirect Contributor to the SoundRecording.
     *
     * @var \DedexBundle\Entity\Ern381\IndirectResourceContributorType[] $indirectResourceContributor
     */
    private $indirectResourceContributor = [
        
    ];

    /**
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s) used in the SoundRecording.
     *
     * @var \DedexBundle\Entity\Ern381\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer. A Resource-level DisplayArtistName shall only be provided if it differs from the DisplayArtistName for a Release that contains the Resource and is communicated in the same XML message.
     *
     * @var \DedexBundle\Entity\Ern381\NameType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A Composite containing the Name of the Label under which the Release is to be marketed. The use of multiple LabelNames is discouraged unless used to communicate label names in different languages and/or scripts.
     *
     * @var \DedexBundle\Entity\Ern381\LabelNameType[] $labelName
     */
    private $labelName = [
        
    ];

    /**
     * A Composite containing details of RightsController of Rights in the Video.
     *
     * @var \DedexBundle\Entity\Ern381\TypedRightsControllerType[] $rightsController
     */
    private $rightsController = [
        
    ];

    /**
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was re-mastered (usually digitally). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern381\EventDateType $remasteredDate
     */
    private $remasteredDate = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern381\EventDateType $resourceReleaseDate
     */
    private $resourceReleaseDate = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was originally published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern381\EventDateType $originalResourceReleaseDate
     */
    private $originalResourceReleaseDate = null;

    /**
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @var \DedexBundle\Entity\Ern381\PLineType[] $pLine
     */
    private $pLine = [
        
    ];

    /**
     * A Composite containing an Annotation Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the Video.
     *
     * @var \DedexBundle\Entity\Ern381\CourtesyLineType $courtesyLine
     */
    private $courtesyLine = null;

    /**
     * The number indicating the order of the Video in a group of Videos in a Release.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Composite containing details of a HostSoundCarrier on which the Video appears (e.g., the CD on which it was originally released). This Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of Video information.
     *
     * @var \DedexBundle\Entity\Ern381\HostSoundCarrierType[] $hostSoundCarrier
     */
    private $hostSoundCarrier = [
        
    ];

    /**
     * A Composite containing a Comment about the promotion and marketing of the Video.
     *
     * @var \DedexBundle\Entity\Ern381\CommentType $marketingComment
     */
    private $marketingComment = null;

    /**
     * A Composite containing details of a Genre to which the Video belongs.
     *
     * @var \DedexBundle\Entity\Ern381\GenreType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * A Composite containing details of the classification of the Video according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @var \DedexBundle\Entity\Ern381\ParentalWarningTypeType[] $parentalWarningType
     */
    private $parentalWarningType = [
        
    ];

    /**
     * A Composite containing details of a rating for the Video.
     *
     * @var \DedexBundle\Entity\Ern381\AvRatingType[] $avRating
     */
    private $avRating = [
        
    ];

    /**
     * A Composite containing details of a FulfillmentDate.
     *
     * @var \DedexBundle\Entity\Ern381\FulfillmentDateType $fulfillmentDate
     */
    private $fulfillmentDate = null;

    /**
     * A Composite containing details of a Description of the Video containing Keywords.
     *
     * @var \DedexBundle\Entity\Ern381\KeywordsType[] $keywords
     */
    private $keywords = [
        
    ];

    /**
     * A Composite containing details of a Synopsis of the Video.
     *
     * @var \DedexBundle\Entity\Ern381\SynopsisType $synopsis
     */
    private $synopsis = null;

    /**
     * A Composite containing details of the CLine for the Video.
     *
     * @var \DedexBundle\Entity\Ern381\CLineType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * A Composite containing technical details of the Video.
     *
     * @var \DedexBundle\Entity\Ern381\TechnicalVideoDetailsType[] $technicalVideoDetails
     */
    private $technicalVideoDetails = [
        
    ];

    /**
     * A Composite containing details of a Character in the Video. A Character may be described through Name, Identifier and Roles.
     *
     * @var \DedexBundle\Entity\Ern381\CharacterType[] $character
     */
    private $character = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the SoundRecordingDetailsByTerritory as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the SoundRecordingDetailsByTerritory as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Adds as territoryCode
     *
     * A Territory to which the SoundRecording details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\CurrentTerritoryCodeType $territoryCode
     */
    public function addToTerritoryCode(\DedexBundle\Entity\Ern381\CurrentTerritoryCodeType $territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory to which the SoundRecording details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the SoundRecording details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the SoundRecording details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DedexBundle\Entity\Ern381\CurrentTerritoryCodeType[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory to which the SoundRecording details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DedexBundle\Entity\Ern381\CurrentTerritoryCodeType[] $territoryCode
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
     * A Territory to which the SoundRecording details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\CurrentTerritoryCodeType $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode(\DedexBundle\Entity\Ern381\CurrentTerritoryCodeType $excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A Territory to which the SoundRecording details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the SoundRecording details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the SoundRecording details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DedexBundle\Entity\Ern381\CurrentTerritoryCodeType[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A Territory to which the SoundRecording details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DedexBundle\Entity\Ern381\CurrentTerritoryCodeType[] $excludedTerritoryCode
     * @return self
     */
    public function setExcludedTerritoryCode(array $excludedTerritoryCode = null)
    {
        $this->excludedTerritoryCode = $excludedTerritoryCode;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title of the SoundRecording.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\TitleType $title
     */
    public function addToTitle(\DedexBundle\Entity\Ern381\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title of the SoundRecording.
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
     * A Composite containing details of a Title of the SoundRecording.
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
     * A Composite containing details of a Title of the SoundRecording.
     *
     * @return \DedexBundle\Entity\Ern381\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title of the SoundRecording.
     *
     * @param \DedexBundle\Entity\Ern381\TitleType[] $title
     * @return self
     */
    public function setTitle(array $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as displayArtist
     *
     * A Composite containing details of the DisplayArtist for the SoundRecording. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\ArtistType $displayArtist
     */
    public function addToDisplayArtist(\DedexBundle\Entity\Ern381\ArtistType $displayArtist)
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
     * @return \DedexBundle\Entity\Ern381\ArtistType[]
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
     * @param \DedexBundle\Entity\Ern381\ArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist = null)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Adds as displayConductor
     *
     * A Composite containing details of a DisplayConductor for the Video. A DisplayConductor may be described through Name, Identifier and Roles.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\ArtistType $displayConductor
     */
    public function addToDisplayConductor(\DedexBundle\Entity\Ern381\ArtistType $displayConductor)
    {
        $this->displayConductor[] = $displayConductor;
        return $this;
    }

    /**
     * isset displayConductor
     *
     * A Composite containing details of a DisplayConductor for the Video. A DisplayConductor may be described through Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayConductor($index)
    {
        return isset($this->displayConductor[$index]);
    }

    /**
     * unset displayConductor
     *
     * A Composite containing details of a DisplayConductor for the Video. A DisplayConductor may be described through Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayConductor($index)
    {
        unset($this->displayConductor[$index]);
    }

    /**
     * Gets as displayConductor
     *
     * A Composite containing details of a DisplayConductor for the Video. A DisplayConductor may be described through Name, Identifier and Roles.
     *
     * @return \DedexBundle\Entity\Ern381\ArtistType[]
     */
    public function getDisplayConductor()
    {
        return $this->displayConductor;
    }

    /**
     * Sets a new displayConductor
     *
     * A Composite containing details of a DisplayConductor for the Video. A DisplayConductor may be described through Name, Identifier and Roles.
     *
     * @param \DedexBundle\Entity\Ern381\ArtistType[] $displayConductor
     * @return self
     */
    public function setDisplayConductor(array $displayConductor = null)
    {
        $this->displayConductor = $displayConductor;
        return $this;
    }

    /**
     * Adds as resourceContributor
     *
     * A Composite containing details of a Contributor to the Video.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\DetailedResourceContributorType $resourceContributor
     */
    public function addToResourceContributor(\DedexBundle\Entity\Ern381\DetailedResourceContributorType $resourceContributor)
    {
        $this->resourceContributor[] = $resourceContributor;
        return $this;
    }

    /**
     * isset resourceContributor
     *
     * A Composite containing details of a Contributor to the Video.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceContributor($index)
    {
        return isset($this->resourceContributor[$index]);
    }

    /**
     * unset resourceContributor
     *
     * A Composite containing details of a Contributor to the Video.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceContributor($index)
    {
        unset($this->resourceContributor[$index]);
    }

    /**
     * Gets as resourceContributor
     *
     * A Composite containing details of a Contributor to the Video.
     *
     * @return \DedexBundle\Entity\Ern381\DetailedResourceContributorType[]
     */
    public function getResourceContributor()
    {
        return $this->resourceContributor;
    }

    /**
     * Sets a new resourceContributor
     *
     * A Composite containing details of a Contributor to the Video.
     *
     * @param \DedexBundle\Entity\Ern381\DetailedResourceContributorType[] $resourceContributor
     * @return self
     */
    public function setResourceContributor(array $resourceContributor = null)
    {
        $this->resourceContributor = $resourceContributor;
        return $this;
    }

    /**
     * Adds as indirectResourceContributor
     *
     * A Composite containing details of an indirect Contributor to the SoundRecording.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\IndirectResourceContributorType $indirectResourceContributor
     */
    public function addToIndirectResourceContributor(\DedexBundle\Entity\Ern381\IndirectResourceContributorType $indirectResourceContributor)
    {
        $this->indirectResourceContributor[] = $indirectResourceContributor;
        return $this;
    }

    /**
     * isset indirectResourceContributor
     *
     * A Composite containing details of an indirect Contributor to the SoundRecording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndirectResourceContributor($index)
    {
        return isset($this->indirectResourceContributor[$index]);
    }

    /**
     * unset indirectResourceContributor
     *
     * A Composite containing details of an indirect Contributor to the SoundRecording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndirectResourceContributor($index)
    {
        unset($this->indirectResourceContributor[$index]);
    }

    /**
     * Gets as indirectResourceContributor
     *
     * A Composite containing details of an indirect Contributor to the SoundRecording.
     *
     * @return \DedexBundle\Entity\Ern381\IndirectResourceContributorType[]
     */
    public function getIndirectResourceContributor()
    {
        return $this->indirectResourceContributor;
    }

    /**
     * Sets a new indirectResourceContributor
     *
     * A Composite containing details of an indirect Contributor to the SoundRecording.
     *
     * @param \DedexBundle\Entity\Ern381\IndirectResourceContributorType[] $indirectResourceContributor
     * @return self
     */
    public function setIndirectResourceContributor(array $indirectResourceContributor = null)
    {
        $this->indirectResourceContributor = $indirectResourceContributor;
        return $this;
    }

    /**
     * Gets as rightsAgreementId
     *
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s) used in the SoundRecording.
     *
     * @return \DedexBundle\Entity\Ern381\RightsAgreementIdType
     */
    public function getRightsAgreementId()
    {
        return $this->rightsAgreementId;
    }

    /**
     * Sets a new rightsAgreementId
     *
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s) used in the SoundRecording.
     *
     * @param \DedexBundle\Entity\Ern381\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DedexBundle\Entity\Ern381\RightsAgreementIdType $rightsAgreementId = null)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }

    /**
     * Adds as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer. A Resource-level DisplayArtistName shall only be provided if it differs from the DisplayArtistName for a Release that contains the Resource and is communicated in the same XML message.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\NameType $displayArtistName
     */
    public function addToDisplayArtistName(\DedexBundle\Entity\Ern381\NameType $displayArtistName)
    {
        $this->displayArtistName[] = $displayArtistName;
        return $this;
    }

    /**
     * isset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer. A Resource-level DisplayArtistName shall only be provided if it differs from the DisplayArtistName for a Release that contains the Resource and is communicated in the same XML message.
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer. A Resource-level DisplayArtistName shall only be provided if it differs from the DisplayArtistName for a Release that contains the Resource and is communicated in the same XML message.
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer. A Resource-level DisplayArtistName shall only be provided if it differs from the DisplayArtistName for a Release that contains the Resource and is communicated in the same XML message.
     *
     * @return \DedexBundle\Entity\Ern381\NameType[]
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer. A Resource-level DisplayArtistName shall only be provided if it differs from the DisplayArtistName for a Release that contains the Resource and is communicated in the same XML message.
     *
     * @param \DedexBundle\Entity\Ern381\NameType[] $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(array $displayArtistName = null)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as labelName
     *
     * A Composite containing the Name of the Label under which the Release is to be marketed. The use of multiple LabelNames is discouraged unless used to communicate label names in different languages and/or scripts.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\LabelNameType $labelName
     */
    public function addToLabelName(\DedexBundle\Entity\Ern381\LabelNameType $labelName)
    {
        $this->labelName[] = $labelName;
        return $this;
    }

    /**
     * isset labelName
     *
     * A Composite containing the Name of the Label under which the Release is to be marketed. The use of multiple LabelNames is discouraged unless used to communicate label names in different languages and/or scripts.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLabelName($index)
    {
        return isset($this->labelName[$index]);
    }

    /**
     * unset labelName
     *
     * A Composite containing the Name of the Label under which the Release is to be marketed. The use of multiple LabelNames is discouraged unless used to communicate label names in different languages and/or scripts.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLabelName($index)
    {
        unset($this->labelName[$index]);
    }

    /**
     * Gets as labelName
     *
     * A Composite containing the Name of the Label under which the Release is to be marketed. The use of multiple LabelNames is discouraged unless used to communicate label names in different languages and/or scripts.
     *
     * @return \DedexBundle\Entity\Ern381\LabelNameType[]
     */
    public function getLabelName()
    {
        return $this->labelName;
    }

    /**
     * Sets a new labelName
     *
     * A Composite containing the Name of the Label under which the Release is to be marketed. The use of multiple LabelNames is discouraged unless used to communicate label names in different languages and/or scripts.
     *
     * @param \DedexBundle\Entity\Ern381\LabelNameType[] $labelName
     * @return self
     */
    public function setLabelName(array $labelName = null)
    {
        $this->labelName = $labelName;
        return $this;
    }

    /**
     * Adds as rightsController
     *
     * A Composite containing details of RightsController of Rights in the Video.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\TypedRightsControllerType $rightsController
     */
    public function addToRightsController(\DedexBundle\Entity\Ern381\TypedRightsControllerType $rightsController)
    {
        $this->rightsController[] = $rightsController;
        return $this;
    }

    /**
     * isset rightsController
     *
     * A Composite containing details of RightsController of Rights in the Video.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightsController($index)
    {
        return isset($this->rightsController[$index]);
    }

    /**
     * unset rightsController
     *
     * A Composite containing details of RightsController of Rights in the Video.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightsController($index)
    {
        unset($this->rightsController[$index]);
    }

    /**
     * Gets as rightsController
     *
     * A Composite containing details of RightsController of Rights in the Video.
     *
     * @return \DedexBundle\Entity\Ern381\TypedRightsControllerType[]
     */
    public function getRightsController()
    {
        return $this->rightsController;
    }

    /**
     * Sets a new rightsController
     *
     * A Composite containing details of RightsController of Rights in the Video.
     *
     * @param \DedexBundle\Entity\Ern381\TypedRightsControllerType[] $rightsController
     * @return self
     */
    public function setRightsController(array $rightsController = null)
    {
        $this->rightsController = $rightsController;
        return $this;
    }

    /**
     * Gets as remasteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was re-mastered (usually digitally). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern381\EventDateType
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
     * @param \DedexBundle\Entity\Ern381\EventDateType $remasteredDate
     * @return self
     */
    public function setRemasteredDate(?\DedexBundle\Entity\Ern381\EventDateType $remasteredDate = null)
    {
        $this->remasteredDate = $remasteredDate;
        return $this;
    }

    /**
     * Gets as resourceReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern381\EventDateType
     */
    public function getResourceReleaseDate()
    {
        return $this->resourceReleaseDate;
    }

    /**
     * Sets a new resourceReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern381\EventDateType $resourceReleaseDate
     * @return self
     */
    public function setResourceReleaseDate(?\DedexBundle\Entity\Ern381\EventDateType $resourceReleaseDate = null)
    {
        $this->resourceReleaseDate = $resourceReleaseDate;
        return $this;
    }

    /**
     * Gets as originalResourceReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was originally published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern381\EventDateType
     */
    public function getOriginalResourceReleaseDate()
    {
        return $this->originalResourceReleaseDate;
    }

    /**
     * Sets a new originalResourceReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was originally published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern381\EventDateType $originalResourceReleaseDate
     * @return self
     */
    public function setOriginalResourceReleaseDate(?\DedexBundle\Entity\Ern381\EventDateType $originalResourceReleaseDate = null)
    {
        $this->originalResourceReleaseDate = $originalResourceReleaseDate;
        return $this;
    }

    /**
     * Adds as pLine
     *
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\PLineType $pLine
     */
    public function addToPLine(\DedexBundle\Entity\Ern381\PLineType $pLine)
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
     * @return \DedexBundle\Entity\Ern381\PLineType[]
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
     * @param \DedexBundle\Entity\Ern381\PLineType[] $pLine
     * @return self
     */
    public function setPLine(array $pLine = null)
    {
        $this->pLine = $pLine;
        return $this;
    }

    /**
     * Gets as courtesyLine
     *
     * A Composite containing an Annotation Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the Video.
     *
     * @return \DedexBundle\Entity\Ern381\CourtesyLineType
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
     * @param \DedexBundle\Entity\Ern381\CourtesyLineType $courtesyLine
     * @return self
     */
    public function setCourtesyLine(?\DedexBundle\Entity\Ern381\CourtesyLineType $courtesyLine = null)
    {
        $this->courtesyLine = $courtesyLine;
        return $this;
    }

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the Video in a group of Videos in a Release.
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * The number indicating the order of the Video in a group of Videos in a Release.
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Adds as hostSoundCarrier
     *
     * A Composite containing details of a HostSoundCarrier on which the Video appears (e.g., the CD on which it was originally released). This Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of Video information.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\HostSoundCarrierType $hostSoundCarrier
     */
    public function addToHostSoundCarrier(\DedexBundle\Entity\Ern381\HostSoundCarrierType $hostSoundCarrier)
    {
        $this->hostSoundCarrier[] = $hostSoundCarrier;
        return $this;
    }

    /**
     * isset hostSoundCarrier
     *
     * A Composite containing details of a HostSoundCarrier on which the Video appears (e.g., the CD on which it was originally released). This Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of Video information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHostSoundCarrier($index)
    {
        return isset($this->hostSoundCarrier[$index]);
    }

    /**
     * unset hostSoundCarrier
     *
     * A Composite containing details of a HostSoundCarrier on which the Video appears (e.g., the CD on which it was originally released). This Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of Video information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHostSoundCarrier($index)
    {
        unset($this->hostSoundCarrier[$index]);
    }

    /**
     * Gets as hostSoundCarrier
     *
     * A Composite containing details of a HostSoundCarrier on which the Video appears (e.g., the CD on which it was originally released). This Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of Video information.
     *
     * @return \DedexBundle\Entity\Ern381\HostSoundCarrierType[]
     */
    public function getHostSoundCarrier()
    {
        return $this->hostSoundCarrier;
    }

    /**
     * Sets a new hostSoundCarrier
     *
     * A Composite containing details of a HostSoundCarrier on which the Video appears (e.g., the CD on which it was originally released). This Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of Video information.
     *
     * @param \DedexBundle\Entity\Ern381\HostSoundCarrierType[] $hostSoundCarrier
     * @return self
     */
    public function setHostSoundCarrier(array $hostSoundCarrier = null)
    {
        $this->hostSoundCarrier = $hostSoundCarrier;
        return $this;
    }

    /**
     * Gets as marketingComment
     *
     * A Composite containing a Comment about the promotion and marketing of the Video.
     *
     * @return \DedexBundle\Entity\Ern381\CommentType
     */
    public function getMarketingComment()
    {
        return $this->marketingComment;
    }

    /**
     * Sets a new marketingComment
     *
     * A Composite containing a Comment about the promotion and marketing of the Video.
     *
     * @param \DedexBundle\Entity\Ern381\CommentType $marketingComment
     * @return self
     */
    public function setMarketingComment(?\DedexBundle\Entity\Ern381\CommentType $marketingComment = null)
    {
        $this->marketingComment = $marketingComment;
        return $this;
    }

    /**
     * Adds as genre
     *
     * A Composite containing details of a Genre to which the Video belongs.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\GenreType $genre
     */
    public function addToGenre(\DedexBundle\Entity\Ern381\GenreType $genre)
    {
        $this->genre[] = $genre;
        return $this;
    }

    /**
     * isset genre
     *
     * A Composite containing details of a Genre to which the Video belongs.
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
     * A Composite containing details of a Genre to which the Video belongs.
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
     * A Composite containing details of a Genre to which the Video belongs.
     *
     * @return \DedexBundle\Entity\Ern381\GenreType[]
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Sets a new genre
     *
     * A Composite containing details of a Genre to which the Video belongs.
     *
     * @param \DedexBundle\Entity\Ern381\GenreType[] $genre
     * @return self
     */
    public function setGenre(array $genre = null)
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * Adds as parentalWarningType
     *
     * A Composite containing details of the classification of the Video according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\ParentalWarningTypeType $parentalWarningType
     */
    public function addToParentalWarningType(\DedexBundle\Entity\Ern381\ParentalWarningTypeType $parentalWarningType)
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
     * @return \DedexBundle\Entity\Ern381\ParentalWarningTypeType[]
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
     * @param \DedexBundle\Entity\Ern381\ParentalWarningTypeType[] $parentalWarningType
     * @return self
     */
    public function setParentalWarningType(array $parentalWarningType = null)
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
     * @param \DedexBundle\Entity\Ern381\AvRatingType $avRating
     */
    public function addToAvRating(\DedexBundle\Entity\Ern381\AvRatingType $avRating)
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
     * @return \DedexBundle\Entity\Ern381\AvRatingType[]
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
     * @param \DedexBundle\Entity\Ern381\AvRatingType[] $avRating
     * @return self
     */
    public function setAvRating(array $avRating = null)
    {
        $this->avRating = $avRating;
        return $this;
    }

    /**
     * Gets as fulfillmentDate
     *
     * A Composite containing details of a FulfillmentDate.
     *
     * @return \DedexBundle\Entity\Ern381\FulfillmentDateType
     */
    public function getFulfillmentDate()
    {
        return $this->fulfillmentDate;
    }

    /**
     * Sets a new fulfillmentDate
     *
     * A Composite containing details of a FulfillmentDate.
     *
     * @param \DedexBundle\Entity\Ern381\FulfillmentDateType $fulfillmentDate
     * @return self
     */
    public function setFulfillmentDate(?\DedexBundle\Entity\Ern381\FulfillmentDateType $fulfillmentDate = null)
    {
        $this->fulfillmentDate = $fulfillmentDate;
        return $this;
    }

    /**
     * Adds as keywords
     *
     * A Composite containing details of a Description of the Video containing Keywords.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\KeywordsType $keywords
     */
    public function addToKeywords(\DedexBundle\Entity\Ern381\KeywordsType $keywords)
    {
        $this->keywords[] = $keywords;
        return $this;
    }

    /**
     * isset keywords
     *
     * A Composite containing details of a Description of the Video containing Keywords.
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
     * A Composite containing details of a Description of the Video containing Keywords.
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
     * A Composite containing details of a Description of the Video containing Keywords.
     *
     * @return \DedexBundle\Entity\Ern381\KeywordsType[]
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets a new keywords
     *
     * A Composite containing details of a Description of the Video containing Keywords.
     *
     * @param \DedexBundle\Entity\Ern381\KeywordsType[] $keywords
     * @return self
     */
    public function setKeywords(array $keywords = null)
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * Gets as synopsis
     *
     * A Composite containing details of a Synopsis of the Video.
     *
     * @return \DedexBundle\Entity\Ern381\SynopsisType
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Sets a new synopsis
     *
     * A Composite containing details of a Synopsis of the Video.
     *
     * @param \DedexBundle\Entity\Ern381\SynopsisType $synopsis
     * @return self
     */
    public function setSynopsis(?\DedexBundle\Entity\Ern381\SynopsisType $synopsis = null)
    {
        $this->synopsis = $synopsis;
        return $this;
    }

    /**
     * Adds as cLine
     *
     * A Composite containing details of the CLine for the Video.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\CLineType $cLine
     */
    public function addToCLine(\DedexBundle\Entity\Ern381\CLineType $cLine)
    {
        $this->cLine[] = $cLine;
        return $this;
    }

    /**
     * isset cLine
     *
     * A Composite containing details of the CLine for the Video.
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
     * A Composite containing details of the CLine for the Video.
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
     * A Composite containing details of the CLine for the Video.
     *
     * @return \DedexBundle\Entity\Ern381\CLineType[]
     */
    public function getCLine()
    {
        return $this->cLine;
    }

    /**
     * Sets a new cLine
     *
     * A Composite containing details of the CLine for the Video.
     *
     * @param \DedexBundle\Entity\Ern381\CLineType[] $cLine
     * @return self
     */
    public function setCLine(array $cLine = null)
    {
        $this->cLine = $cLine;
        return $this;
    }

    /**
     * Adds as technicalVideoDetails
     *
     * A Composite containing technical details of the Video.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\TechnicalVideoDetailsType $technicalVideoDetails
     */
    public function addToTechnicalVideoDetails(\DedexBundle\Entity\Ern381\TechnicalVideoDetailsType $technicalVideoDetails)
    {
        $this->technicalVideoDetails[] = $technicalVideoDetails;
        return $this;
    }

    /**
     * isset technicalVideoDetails
     *
     * A Composite containing technical details of the Video.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalVideoDetails($index)
    {
        return isset($this->technicalVideoDetails[$index]);
    }

    /**
     * unset technicalVideoDetails
     *
     * A Composite containing technical details of the Video.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalVideoDetails($index)
    {
        unset($this->technicalVideoDetails[$index]);
    }

    /**
     * Gets as technicalVideoDetails
     *
     * A Composite containing technical details of the Video.
     *
     * @return \DedexBundle\Entity\Ern381\TechnicalVideoDetailsType[]
     */
    public function getTechnicalVideoDetails()
    {
        return $this->technicalVideoDetails;
    }

    /**
     * Sets a new technicalVideoDetails
     *
     * A Composite containing technical details of the Video.
     *
     * @param \DedexBundle\Entity\Ern381\TechnicalVideoDetailsType[] $technicalVideoDetails
     * @return self
     */
    public function setTechnicalVideoDetails(array $technicalVideoDetails = null)
    {
        $this->technicalVideoDetails = $technicalVideoDetails;
        return $this;
    }

    /**
     * Adds as character
     *
     * A Composite containing details of a Character in the Video. A Character may be described through Name, Identifier and Roles.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\CharacterType $character
     */
    public function addToCharacter(\DedexBundle\Entity\Ern381\CharacterType $character)
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
     * @return \DedexBundle\Entity\Ern381\CharacterType[]
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
     * @param \DedexBundle\Entity\Ern381\CharacterType[] $character
     * @return self
     */
    public function setCharacter(array $character = null)
    {
        $this->character = $character;
        return $this;
    }
}

