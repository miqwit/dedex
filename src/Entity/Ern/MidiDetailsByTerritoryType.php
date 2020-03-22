<?php

namespace DedexBundle\Entity\Ern;

/**
 * Class representing MidiDetailsByTerritoryType
 *
 * A Composite containing details of Descriptors
 *  and other attributes of a MIDI which may vary according to Territory of
 *  release.
 * XSD Type: MidiDetailsByTerritory
 */
class MidiDetailsByTerritoryType
{

    /**
     * The Language and script for the Elements of
     *  the MidiDetailsByTerritory as defined in IETF RfC 5646. The default is the same as
     *  indicated for the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Territory to which the MIDI details
     *  apply. Either this Element or ExcludedTerritory shall be present, but not both.
     *  The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged;
     *  TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
     *
     * @var \DedexBundle\Entity\Ern\CurrentTerritoryCodeType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory to which the MIDI details
     *  do not apply. Either this Element or Territory shall be present, but not both.
     *  The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged;
     *  TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
     *
     * @var \DedexBundle\Entity\Ern\CurrentTerritoryCodeType[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Composite containing details of a Title
     *  of the MIDI.
     *
     * @var \DedexBundle\Entity\Ern\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing details of the
     *  DisplayArtist for the MIDI. The DisplayArtist may be described through Name,
     *  Identifier and Roles.
     *
     * @var \DedexBundle\Entity\Ern\ArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * A Composite containing details of a
     *  Contributor to the MIDI.
     *
     * @var \DedexBundle\Entity\Ern\DetailedResourceContributorType[] $resourceContributor
     */
    private $resourceContributor = [
        
    ];

    /**
     * A Composite containing details of an
     *  indirect Contributor to the MIDI.
     *
     * @var \DedexBundle\Entity\Ern\IndirectResourceContributorType[] $indirectResourceContributor
     */
    private $indirectResourceContributor = [
        
    ];

    /**
     * A Composite containing details of
     *  Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s)
     *  used in the MIDI.
     *
     * @var \DedexBundle\Entity\Ern\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A Composite containing the Name to be used
     *  by a DSP when presenting Artist details of the Resource to a Consumer. A
     *  Resource-level DisplayArtistName shall only be provided if it differs from the
     *  DisplayArtistName for a Release that contains the Resource and is communicated in
     *  the same XML message.
     *
     * @var \DedexBundle\Entity\Ern\NameType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A Composite containing the Name of the
     *  Label under which the Release is to be marketed. The use of multiple LabelNames is
     *  discouraged unless used to communicate label names in different languages and/or
     *  scripts.
     *
     * @var \DedexBundle\Entity\Ern\LabelNameType[] $labelName
     */
    private $labelName = [
        
    ];

    /**
     * A Composite containing details of
     *  RightsController of Rights in the MIDI.
     *
     * @var \DedexBundle\Entity\Ern\TypedRightsControllerType[] $rightsController
     */
    private $rightsController = [
        
    ];

    /**
     * A Composite containing details of the Date
     *  and Place of the Event in which the MIDI was re-mastered (usually digitally). This
     *  is a string with the syntax YYYY[-MM[-DD]]. This element is deprecated. DDEX
     *  advises that it may be removed at a future date and therefore recommends against
     *  using it.
     *
     * @var \DedexBundle\Entity\Ern\EventDateType $remasteredDate
     */
    private $remasteredDate = null;

    /**
     * A Composite containing details of the Date
     *  and Place of the Event in which the MIDI was published, whether for physical or
     *  electronic/online distribution. This is a string with the syntax
     *  YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern\EventDateType $resourceReleaseDate
     */
    private $resourceReleaseDate = null;

    /**
     * A Composite containing details of the Date
     *  and Place of the Event in which the MIDI was originally published, whether for
     *  physical or electronic/online distribution. This is a string with the syntax
     *  YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern\EventDateType $originalResourceReleaseDate
     */
    private $originalResourceReleaseDate = null;

    /**
     * A Composite containing details of the
     *  CLine for the MIDI.
     *
     * @var \DedexBundle\Entity\Ern\CLineType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * A Composite containing an Annotation which
     *  acknowledges record companies and/or other Parties giving permission for guests
     *  Artists or others featured on the MIDI.
     *
     * @var \DedexBundle\Entity\Ern\CourtesyLineType $courtesyLine
     */
    private $courtesyLine = null;

    /**
     * The number indicating the order of the
     *  MIDI in a group of MIDIs in a Release.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Composite containing details of a
     *  HostSoundCarrier on which the MIDI appears (e.g., the CD on which it was
     *  originally released). This Composite exists in the Release Notification Message
     *  Suite Standard, to support the identification and matching of MIDI
     *  information.
     *
     * @var \DedexBundle\Entity\Ern\HostSoundCarrierType[] $hostSoundCarrier
     */
    private $hostSoundCarrier = [
        
    ];

    /**
     * A Composite containing a Comment about the
     *  promotion and marketing of the MIDI.
     *
     * @var \DedexBundle\Entity\Ern\CommentType $marketingComment
     */
    private $marketingComment = null;

    /**
     * A Composite containing details of a Genre
     *  to which the MIDI belongs.
     *
     * @var \DedexBundle\Entity\Ern\GenreType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * A Composite containing details of the
     *  classification of the MIDI according to advice which it carries about the level of
     *  explicitness or offensiveness of its content.
     *
     * @var \DedexBundle\Entity\Ern\ParentalWarningTypeType[] $parentalWarningType
     */
    private $parentalWarningType = [
        
    ];

    /**
     * A Composite containing details of a
     *  FulfillmentDate.
     *
     * @var \DedexBundle\Entity\Ern\FulfillmentDateType $fulfillmentDate
     */
    private $fulfillmentDate = null;

    /**
     * A Composite containing details of a
     *  Description of the MIDI containing Keywords.
     *
     * @var \DedexBundle\Entity\Ern\KeywordsType[] $keywords
     */
    private $keywords = [
        
    ];

    /**
     * A Composite containing details of a
     *  Synopsis of the MIDI.
     *
     * @var \DedexBundle\Entity\Ern\SynopsisType $synopsis
     */
    private $synopsis = null;

    /**
     * A Composite containing technical details
     *  of the MIDI.
     *
     * @var \DedexBundle\Entity\Ern\TechnicalMidiDetailsType[] $technicalMidiDetails
     */
    private $technicalMidiDetails = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of
     *  the MidiDetailsByTerritory as defined in IETF RfC 5646. The default is the same as
     *  indicated for the containing composite. Language and Script are provided as
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
     *  the MidiDetailsByTerritory as defined in IETF RfC 5646. The default is the same as
     *  indicated for the containing composite. Language and Script are provided as
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
     * Adds as territoryCode
     *
     * A Territory to which the MIDI details
     *  apply. Either this Element or ExcludedTerritory shall be present, but not both.
     *  The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged;
     *  TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\CurrentTerritoryCodeType $territoryCode
     */
    public function addToTerritoryCode(\DedexBundle\Entity\Ern\CurrentTerritoryCodeType $territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory to which the MIDI details
     *  apply. Either this Element or ExcludedTerritory shall be present, but not both.
     *  The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged;
     *  TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
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
     * A Territory to which the MIDI details
     *  apply. Either this Element or ExcludedTerritory shall be present, but not both.
     *  The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged;
     *  TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
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
     * A Territory to which the MIDI details
     *  apply. Either this Element or ExcludedTerritory shall be present, but not both.
     *  The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged;
     *  TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
     *
     * @return \DedexBundle\Entity\Ern\CurrentTerritoryCodeType[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory to which the MIDI details
     *  apply. Either this Element or ExcludedTerritory shall be present, but not both.
     *  The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged;
     *  TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
     *
     * @param \DedexBundle\Entity\Ern\CurrentTerritoryCodeType[] $territoryCode
     * @return self
     */
    public function setTerritoryCode(array $territoryCode)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Adds as excludedTerritoryCode
     *
     * A Territory to which the MIDI details
     *  do not apply. Either this Element or Territory shall be present, but not both.
     *  The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged;
     *  TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\CurrentTerritoryCodeType $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode(\DedexBundle\Entity\Ern\CurrentTerritoryCodeType $excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A Territory to which the MIDI details
     *  do not apply. Either this Element or Territory shall be present, but not both.
     *  The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged;
     *  TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
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
     * A Territory to which the MIDI details
     *  do not apply. Either this Element or Territory shall be present, but not both.
     *  The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged;
     *  TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
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
     * A Territory to which the MIDI details
     *  do not apply. Either this Element or Territory shall be present, but not both.
     *  The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged;
     *  TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
     *
     * @return \DedexBundle\Entity\Ern\CurrentTerritoryCodeType[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A Territory to which the MIDI details
     *  do not apply. Either this Element or Territory shall be present, but not both.
     *  The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged;
     *  TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
     *
     * @param \DedexBundle\Entity\Ern\CurrentTerritoryCodeType[] $excludedTerritoryCode
     * @return self
     */
    public function setExcludedTerritoryCode(array $excludedTerritoryCode)
    {
        $this->excludedTerritoryCode = $excludedTerritoryCode;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title
     *  of the MIDI.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\TitleType $title
     */
    public function addToTitle(\DedexBundle\Entity\Ern\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title
     *  of the MIDI.
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
     *  of the MIDI.
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
     *  of the MIDI.
     *
     * @return \DedexBundle\Entity\Ern\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title
     *  of the MIDI.
     *
     * @param \DedexBundle\Entity\Ern\TitleType[] $title
     * @return self
     */
    public function setTitle(array $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as displayArtist
     *
     * A Composite containing details of the
     *  DisplayArtist for the MIDI. The DisplayArtist may be described through Name,
     *  Identifier and Roles.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\ArtistType $displayArtist
     */
    public function addToDisplayArtist(\DedexBundle\Entity\Ern\ArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A Composite containing details of the
     *  DisplayArtist for the MIDI. The DisplayArtist may be described through Name,
     *  Identifier and Roles.
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
     * A Composite containing details of the
     *  DisplayArtist for the MIDI. The DisplayArtist may be described through Name,
     *  Identifier and Roles.
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
     * A Composite containing details of the
     *  DisplayArtist for the MIDI. The DisplayArtist may be described through Name,
     *  Identifier and Roles.
     *
     * @return \DedexBundle\Entity\Ern\ArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A Composite containing details of the
     *  DisplayArtist for the MIDI. The DisplayArtist may be described through Name,
     *  Identifier and Roles.
     *
     * @param \DedexBundle\Entity\Ern\ArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Adds as resourceContributor
     *
     * A Composite containing details of a
     *  Contributor to the MIDI.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\DetailedResourceContributorType $resourceContributor
     */
    public function addToResourceContributor(\DedexBundle\Entity\Ern\DetailedResourceContributorType $resourceContributor)
    {
        $this->resourceContributor[] = $resourceContributor;
        return $this;
    }

    /**
     * isset resourceContributor
     *
     * A Composite containing details of a
     *  Contributor to the MIDI.
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
     * A Composite containing details of a
     *  Contributor to the MIDI.
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
     * A Composite containing details of a
     *  Contributor to the MIDI.
     *
     * @return \DedexBundle\Entity\Ern\DetailedResourceContributorType[]
     */
    public function getResourceContributor()
    {
        return $this->resourceContributor;
    }

    /**
     * Sets a new resourceContributor
     *
     * A Composite containing details of a
     *  Contributor to the MIDI.
     *
     * @param \DedexBundle\Entity\Ern\DetailedResourceContributorType[] $resourceContributor
     * @return self
     */
    public function setResourceContributor(array $resourceContributor)
    {
        $this->resourceContributor = $resourceContributor;
        return $this;
    }

    /**
     * Adds as indirectResourceContributor
     *
     * A Composite containing details of an
     *  indirect Contributor to the MIDI.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\IndirectResourceContributorType $indirectResourceContributor
     */
    public function addToIndirectResourceContributor(\DedexBundle\Entity\Ern\IndirectResourceContributorType $indirectResourceContributor)
    {
        $this->indirectResourceContributor[] = $indirectResourceContributor;
        return $this;
    }

    /**
     * isset indirectResourceContributor
     *
     * A Composite containing details of an
     *  indirect Contributor to the MIDI.
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
     * A Composite containing details of an
     *  indirect Contributor to the MIDI.
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
     * A Composite containing details of an
     *  indirect Contributor to the MIDI.
     *
     * @return \DedexBundle\Entity\Ern\IndirectResourceContributorType[]
     */
    public function getIndirectResourceContributor()
    {
        return $this->indirectResourceContributor;
    }

    /**
     * Sets a new indirectResourceContributor
     *
     * A Composite containing details of an
     *  indirect Contributor to the MIDI.
     *
     * @param \DedexBundle\Entity\Ern\IndirectResourceContributorType[] $indirectResourceContributor
     * @return self
     */
    public function setIndirectResourceContributor(array $indirectResourceContributor)
    {
        $this->indirectResourceContributor = $indirectResourceContributor;
        return $this;
    }

    /**
     * Gets as rightsAgreementId
     *
     * A Composite containing details of
     *  Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s)
     *  used in the MIDI.
     *
     * @return \DedexBundle\Entity\Ern\RightsAgreementIdType
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
     *  used in the MIDI.
     *
     * @param \DedexBundle\Entity\Ern\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(\DedexBundle\Entity\Ern\RightsAgreementIdType $rightsAgreementId)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }

    /**
     * Adds as displayArtistName
     *
     * A Composite containing the Name to be used
     *  by a DSP when presenting Artist details of the Resource to a Consumer. A
     *  Resource-level DisplayArtistName shall only be provided if it differs from the
     *  DisplayArtistName for a Release that contains the Resource and is communicated in
     *  the same XML message.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\NameType $displayArtistName
     */
    public function addToDisplayArtistName(\DedexBundle\Entity\Ern\NameType $displayArtistName)
    {
        $this->displayArtistName[] = $displayArtistName;
        return $this;
    }

    /**
     * isset displayArtistName
     *
     * A Composite containing the Name to be used
     *  by a DSP when presenting Artist details of the Resource to a Consumer. A
     *  Resource-level DisplayArtistName shall only be provided if it differs from the
     *  DisplayArtistName for a Release that contains the Resource and is communicated in
     *  the same XML message.
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
     * A Composite containing the Name to be used
     *  by a DSP when presenting Artist details of the Resource to a Consumer. A
     *  Resource-level DisplayArtistName shall only be provided if it differs from the
     *  DisplayArtistName for a Release that contains the Resource and is communicated in
     *  the same XML message.
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
     * A Composite containing the Name to be used
     *  by a DSP when presenting Artist details of the Resource to a Consumer. A
     *  Resource-level DisplayArtistName shall only be provided if it differs from the
     *  DisplayArtistName for a Release that contains the Resource and is communicated in
     *  the same XML message.
     *
     * @return \DedexBundle\Entity\Ern\NameType[]
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A Composite containing the Name to be used
     *  by a DSP when presenting Artist details of the Resource to a Consumer. A
     *  Resource-level DisplayArtistName shall only be provided if it differs from the
     *  DisplayArtistName for a Release that contains the Resource and is communicated in
     *  the same XML message.
     *
     * @param \DedexBundle\Entity\Ern\NameType[] $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(array $displayArtistName)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as labelName
     *
     * A Composite containing the Name of the
     *  Label under which the Release is to be marketed. The use of multiple LabelNames is
     *  discouraged unless used to communicate label names in different languages and/or
     *  scripts.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\LabelNameType $labelName
     */
    public function addToLabelName(\DedexBundle\Entity\Ern\LabelNameType $labelName)
    {
        $this->labelName[] = $labelName;
        return $this;
    }

    /**
     * isset labelName
     *
     * A Composite containing the Name of the
     *  Label under which the Release is to be marketed. The use of multiple LabelNames is
     *  discouraged unless used to communicate label names in different languages and/or
     *  scripts.
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
     * A Composite containing the Name of the
     *  Label under which the Release is to be marketed. The use of multiple LabelNames is
     *  discouraged unless used to communicate label names in different languages and/or
     *  scripts.
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
     * A Composite containing the Name of the
     *  Label under which the Release is to be marketed. The use of multiple LabelNames is
     *  discouraged unless used to communicate label names in different languages and/or
     *  scripts.
     *
     * @return \DedexBundle\Entity\Ern\LabelNameType[]
     */
    public function getLabelName()
    {
        return $this->labelName;
    }

    /**
     * Sets a new labelName
     *
     * A Composite containing the Name of the
     *  Label under which the Release is to be marketed. The use of multiple LabelNames is
     *  discouraged unless used to communicate label names in different languages and/or
     *  scripts.
     *
     * @param \DedexBundle\Entity\Ern\LabelNameType[] $labelName
     * @return self
     */
    public function setLabelName(array $labelName)
    {
        $this->labelName = $labelName;
        return $this;
    }

    /**
     * Adds as rightsController
     *
     * A Composite containing details of
     *  RightsController of Rights in the MIDI.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\TypedRightsControllerType $rightsController
     */
    public function addToRightsController(\DedexBundle\Entity\Ern\TypedRightsControllerType $rightsController)
    {
        $this->rightsController[] = $rightsController;
        return $this;
    }

    /**
     * isset rightsController
     *
     * A Composite containing details of
     *  RightsController of Rights in the MIDI.
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
     * A Composite containing details of
     *  RightsController of Rights in the MIDI.
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
     * A Composite containing details of
     *  RightsController of Rights in the MIDI.
     *
     * @return \DedexBundle\Entity\Ern\TypedRightsControllerType[]
     */
    public function getRightsController()
    {
        return $this->rightsController;
    }

    /**
     * Sets a new rightsController
     *
     * A Composite containing details of
     *  RightsController of Rights in the MIDI.
     *
     * @param \DedexBundle\Entity\Ern\TypedRightsControllerType[] $rightsController
     * @return self
     */
    public function setRightsController(array $rightsController)
    {
        $this->rightsController = $rightsController;
        return $this;
    }

    /**
     * Gets as remasteredDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the MIDI was re-mastered (usually digitally). This
     *  is a string with the syntax YYYY[-MM[-DD]]. This element is deprecated. DDEX
     *  advises that it may be removed at a future date and therefore recommends against
     *  using it.
     *
     * @return \DedexBundle\Entity\Ern\EventDateType
     */
    public function getRemasteredDate()
    {
        return $this->remasteredDate;
    }

    /**
     * Sets a new remasteredDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the MIDI was re-mastered (usually digitally). This
     *  is a string with the syntax YYYY[-MM[-DD]]. This element is deprecated. DDEX
     *  advises that it may be removed at a future date and therefore recommends against
     *  using it.
     *
     * @param \DedexBundle\Entity\Ern\EventDateType $remasteredDate
     * @return self
     */
    public function setRemasteredDate(\DedexBundle\Entity\Ern\EventDateType $remasteredDate)
    {
        $this->remasteredDate = $remasteredDate;
        return $this;
    }

    /**
     * Gets as resourceReleaseDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the MIDI was published, whether for physical or
     *  electronic/online distribution. This is a string with the syntax
     *  YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern\EventDateType
     */
    public function getResourceReleaseDate()
    {
        return $this->resourceReleaseDate;
    }

    /**
     * Sets a new resourceReleaseDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the MIDI was published, whether for physical or
     *  electronic/online distribution. This is a string with the syntax
     *  YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern\EventDateType $resourceReleaseDate
     * @return self
     */
    public function setResourceReleaseDate(\DedexBundle\Entity\Ern\EventDateType $resourceReleaseDate)
    {
        $this->resourceReleaseDate = $resourceReleaseDate;
        return $this;
    }

    /**
     * Gets as originalResourceReleaseDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the MIDI was originally published, whether for
     *  physical or electronic/online distribution. This is a string with the syntax
     *  YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern\EventDateType
     */
    public function getOriginalResourceReleaseDate()
    {
        return $this->originalResourceReleaseDate;
    }

    /**
     * Sets a new originalResourceReleaseDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the MIDI was originally published, whether for
     *  physical or electronic/online distribution. This is a string with the syntax
     *  YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern\EventDateType $originalResourceReleaseDate
     * @return self
     */
    public function setOriginalResourceReleaseDate(\DedexBundle\Entity\Ern\EventDateType $originalResourceReleaseDate)
    {
        $this->originalResourceReleaseDate = $originalResourceReleaseDate;
        return $this;
    }

    /**
     * Adds as cLine
     *
     * A Composite containing details of the
     *  CLine for the MIDI.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\CLineType $cLine
     */
    public function addToCLine(\DedexBundle\Entity\Ern\CLineType $cLine)
    {
        $this->cLine[] = $cLine;
        return $this;
    }

    /**
     * isset cLine
     *
     * A Composite containing details of the
     *  CLine for the MIDI.
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
     * A Composite containing details of the
     *  CLine for the MIDI.
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
     * A Composite containing details of the
     *  CLine for the MIDI.
     *
     * @return \DedexBundle\Entity\Ern\CLineType[]
     */
    public function getCLine()
    {
        return $this->cLine;
    }

    /**
     * Sets a new cLine
     *
     * A Composite containing details of the
     *  CLine for the MIDI.
     *
     * @param \DedexBundle\Entity\Ern\CLineType[] $cLine
     * @return self
     */
    public function setCLine(array $cLine)
    {
        $this->cLine = $cLine;
        return $this;
    }

    /**
     * Gets as courtesyLine
     *
     * A Composite containing an Annotation which
     *  acknowledges record companies and/or other Parties giving permission for guests
     *  Artists or others featured on the MIDI.
     *
     * @return \DedexBundle\Entity\Ern\CourtesyLineType
     */
    public function getCourtesyLine()
    {
        return $this->courtesyLine;
    }

    /**
     * Sets a new courtesyLine
     *
     * A Composite containing an Annotation which
     *  acknowledges record companies and/or other Parties giving permission for guests
     *  Artists or others featured on the MIDI.
     *
     * @param \DedexBundle\Entity\Ern\CourtesyLineType $courtesyLine
     * @return self
     */
    public function setCourtesyLine(\DedexBundle\Entity\Ern\CourtesyLineType $courtesyLine)
    {
        $this->courtesyLine = $courtesyLine;
        return $this;
    }

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the
     *  MIDI in a group of MIDIs in a Release.
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
     * The number indicating the order of the
     *  MIDI in a group of MIDIs in a Release.
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
     * A Composite containing details of a
     *  HostSoundCarrier on which the MIDI appears (e.g., the CD on which it was
     *  originally released). This Composite exists in the Release Notification Message
     *  Suite Standard, to support the identification and matching of MIDI
     *  information.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\HostSoundCarrierType $hostSoundCarrier
     */
    public function addToHostSoundCarrier(\DedexBundle\Entity\Ern\HostSoundCarrierType $hostSoundCarrier)
    {
        $this->hostSoundCarrier[] = $hostSoundCarrier;
        return $this;
    }

    /**
     * isset hostSoundCarrier
     *
     * A Composite containing details of a
     *  HostSoundCarrier on which the MIDI appears (e.g., the CD on which it was
     *  originally released). This Composite exists in the Release Notification Message
     *  Suite Standard, to support the identification and matching of MIDI
     *  information.
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
     * A Composite containing details of a
     *  HostSoundCarrier on which the MIDI appears (e.g., the CD on which it was
     *  originally released). This Composite exists in the Release Notification Message
     *  Suite Standard, to support the identification and matching of MIDI
     *  information.
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
     * A Composite containing details of a
     *  HostSoundCarrier on which the MIDI appears (e.g., the CD on which it was
     *  originally released). This Composite exists in the Release Notification Message
     *  Suite Standard, to support the identification and matching of MIDI
     *  information.
     *
     * @return \DedexBundle\Entity\Ern\HostSoundCarrierType[]
     */
    public function getHostSoundCarrier()
    {
        return $this->hostSoundCarrier;
    }

    /**
     * Sets a new hostSoundCarrier
     *
     * A Composite containing details of a
     *  HostSoundCarrier on which the MIDI appears (e.g., the CD on which it was
     *  originally released). This Composite exists in the Release Notification Message
     *  Suite Standard, to support the identification and matching of MIDI
     *  information.
     *
     * @param \DedexBundle\Entity\Ern\HostSoundCarrierType[] $hostSoundCarrier
     * @return self
     */
    public function setHostSoundCarrier(array $hostSoundCarrier)
    {
        $this->hostSoundCarrier = $hostSoundCarrier;
        return $this;
    }

    /**
     * Gets as marketingComment
     *
     * A Composite containing a Comment about the
     *  promotion and marketing of the MIDI.
     *
     * @return \DedexBundle\Entity\Ern\CommentType
     */
    public function getMarketingComment()
    {
        return $this->marketingComment;
    }

    /**
     * Sets a new marketingComment
     *
     * A Composite containing a Comment about the
     *  promotion and marketing of the MIDI.
     *
     * @param \DedexBundle\Entity\Ern\CommentType $marketingComment
     * @return self
     */
    public function setMarketingComment(\DedexBundle\Entity\Ern\CommentType $marketingComment)
    {
        $this->marketingComment = $marketingComment;
        return $this;
    }

    /**
     * Adds as genre
     *
     * A Composite containing details of a Genre
     *  to which the MIDI belongs.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\GenreType $genre
     */
    public function addToGenre(\DedexBundle\Entity\Ern\GenreType $genre)
    {
        $this->genre[] = $genre;
        return $this;
    }

    /**
     * isset genre
     *
     * A Composite containing details of a Genre
     *  to which the MIDI belongs.
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
     * A Composite containing details of a Genre
     *  to which the MIDI belongs.
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
     * A Composite containing details of a Genre
     *  to which the MIDI belongs.
     *
     * @return \DedexBundle\Entity\Ern\GenreType[]
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Sets a new genre
     *
     * A Composite containing details of a Genre
     *  to which the MIDI belongs.
     *
     * @param \DedexBundle\Entity\Ern\GenreType[] $genre
     * @return self
     */
    public function setGenre(array $genre)
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * Adds as parentalWarningType
     *
     * A Composite containing details of the
     *  classification of the MIDI according to advice which it carries about the level of
     *  explicitness or offensiveness of its content.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\ParentalWarningTypeType $parentalWarningType
     */
    public function addToParentalWarningType(\DedexBundle\Entity\Ern\ParentalWarningTypeType $parentalWarningType)
    {
        $this->parentalWarningType[] = $parentalWarningType;
        return $this;
    }

    /**
     * isset parentalWarningType
     *
     * A Composite containing details of the
     *  classification of the MIDI according to advice which it carries about the level of
     *  explicitness or offensiveness of its content.
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
     * A Composite containing details of the
     *  classification of the MIDI according to advice which it carries about the level of
     *  explicitness or offensiveness of its content.
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
     * A Composite containing details of the
     *  classification of the MIDI according to advice which it carries about the level of
     *  explicitness or offensiveness of its content.
     *
     * @return \DedexBundle\Entity\Ern\ParentalWarningTypeType[]
     */
    public function getParentalWarningType()
    {
        return $this->parentalWarningType;
    }

    /**
     * Sets a new parentalWarningType
     *
     * A Composite containing details of the
     *  classification of the MIDI according to advice which it carries about the level of
     *  explicitness or offensiveness of its content.
     *
     * @param \DedexBundle\Entity\Ern\ParentalWarningTypeType[] $parentalWarningType
     * @return self
     */
    public function setParentalWarningType(array $parentalWarningType)
    {
        $this->parentalWarningType = $parentalWarningType;
        return $this;
    }

    /**
     * Gets as fulfillmentDate
     *
     * A Composite containing details of a
     *  FulfillmentDate.
     *
     * @return \DedexBundle\Entity\Ern\FulfillmentDateType
     */
    public function getFulfillmentDate()
    {
        return $this->fulfillmentDate;
    }

    /**
     * Sets a new fulfillmentDate
     *
     * A Composite containing details of a
     *  FulfillmentDate.
     *
     * @param \DedexBundle\Entity\Ern\FulfillmentDateType $fulfillmentDate
     * @return self
     */
    public function setFulfillmentDate(\DedexBundle\Entity\Ern\FulfillmentDateType $fulfillmentDate)
    {
        $this->fulfillmentDate = $fulfillmentDate;
        return $this;
    }

    /**
     * Adds as keywords
     *
     * A Composite containing details of a
     *  Description of the MIDI containing Keywords.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\KeywordsType $keywords
     */
    public function addToKeywords(\DedexBundle\Entity\Ern\KeywordsType $keywords)
    {
        $this->keywords[] = $keywords;
        return $this;
    }

    /**
     * isset keywords
     *
     * A Composite containing details of a
     *  Description of the MIDI containing Keywords.
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
     * A Composite containing details of a
     *  Description of the MIDI containing Keywords.
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
     * A Composite containing details of a
     *  Description of the MIDI containing Keywords.
     *
     * @return \DedexBundle\Entity\Ern\KeywordsType[]
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets a new keywords
     *
     * A Composite containing details of a
     *  Description of the MIDI containing Keywords.
     *
     * @param \DedexBundle\Entity\Ern\KeywordsType[] $keywords
     * @return self
     */
    public function setKeywords(array $keywords)
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * Gets as synopsis
     *
     * A Composite containing details of a
     *  Synopsis of the MIDI.
     *
     * @return \DedexBundle\Entity\Ern\SynopsisType
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Sets a new synopsis
     *
     * A Composite containing details of a
     *  Synopsis of the MIDI.
     *
     * @param \DedexBundle\Entity\Ern\SynopsisType $synopsis
     * @return self
     */
    public function setSynopsis(\DedexBundle\Entity\Ern\SynopsisType $synopsis)
    {
        $this->synopsis = $synopsis;
        return $this;
    }

    /**
     * Adds as technicalMidiDetails
     *
     * A Composite containing technical details
     *  of the MIDI.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\TechnicalMidiDetailsType $technicalMidiDetails
     */
    public function addToTechnicalMidiDetails(\DedexBundle\Entity\Ern\TechnicalMidiDetailsType $technicalMidiDetails)
    {
        $this->technicalMidiDetails[] = $technicalMidiDetails;
        return $this;
    }

    /**
     * isset technicalMidiDetails
     *
     * A Composite containing technical details
     *  of the MIDI.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalMidiDetails($index)
    {
        return isset($this->technicalMidiDetails[$index]);
    }

    /**
     * unset technicalMidiDetails
     *
     * A Composite containing technical details
     *  of the MIDI.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalMidiDetails($index)
    {
        unset($this->technicalMidiDetails[$index]);
    }

    /**
     * Gets as technicalMidiDetails
     *
     * A Composite containing technical details
     *  of the MIDI.
     *
     * @return \DedexBundle\Entity\Ern\TechnicalMidiDetailsType[]
     */
    public function getTechnicalMidiDetails()
    {
        return $this->technicalMidiDetails;
    }

    /**
     * Sets a new technicalMidiDetails
     *
     * A Composite containing technical details
     *  of the MIDI.
     *
     * @param \DedexBundle\Entity\Ern\TechnicalMidiDetailsType[] $technicalMidiDetails
     * @return self
     */
    public function setTechnicalMidiDetails(array $technicalMidiDetails)
    {
        $this->technicalMidiDetails = $technicalMidiDetails;
        return $this;
    }


}

