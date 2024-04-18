<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing MidiDetailsByTerritoryType
 *
 * A ddex:Composite containing details of ddex:Descriptors and other attributes of a ddex:MIDI which may vary according to ddex:Territory of release.
 * XSD Type: MidiDetailsByTerritory
 */
class MidiDetailsByTerritoryType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ddexC:MidiDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Territory to which the ddex:MIDI details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A ddex:Territory to which the ddex:MIDI details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @var string[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Title of the ddex:MIDI.
     *
     * @var \DedexBundle\Entity\DdexC\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddex:MIDI. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @var \DedexBundle\Entity\DdexC\ArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:MIDI.
     *
     * @var \DedexBundle\Entity\DdexC\ResourceContributorType[] $resourceContributor
     */
    private $resourceContributor = [
        
    ];

    /**
     * A ddex:Composite containing details of an indirect ddex:Contributor to the ddex:MIDI.
     *
     * @var \DedexBundle\Entity\DdexC\IndirectResourceContributorType[] $indirectResourceContributor
     */
    private $indirectResourceContributor = [
        
    ];

    /**
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ddex:MIDI.
     *
     * @var \DedexBundle\Entity\DdexC\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A ddex:Composite containing the ddex:Name of the ddex:Label under which the ddex:Release is to be marketed.
     *
     * @var \DedexBundle\Entity\DdexC\LabelNameType[] $labelName
     */
    private $labelName = [
        
    ];

    /**
     * A ddex:Composite containing details of ddex:RightsController of Rights in the ddex:MIDI.
     *
     * @var \DedexBundle\Entity\DdexC\RightsControllerType[] $rightsController
     */
    private $rightsController = [
        
    ];

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:MIDI was re-mastered (usually digitally).
     *
     * @var \DedexBundle\Entity\DdexC\EventDateType $remasteredDate
     */
    private $remasteredDate = null;

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:MIDI was originally published, whether for physical or electronic/online distribution.
     *
     * @var \DedexBundle\Entity\DdexC\EventDateType $originalResourceReleaseDate
     */
    private $originalResourceReleaseDate = null;

    /**
     * A ddex:Composite containing details of the ddex:CLine for the ddex:MIDI.
     *
     * @var \DedexBundle\Entity\DdexC\CLineType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * A ddex:Composite containing an ddex:Annotation which acknowledges record companies and/or other Parties giving permission for guests ddex:Artists or others featured on the ddex:MIDI.
     *
     * @var \DedexBundle\Entity\DdexC\CourtesyLineType $courtesyLine
     */
    private $courtesyLine = null;

    /**
     * The number indicating the order of the ddex:MIDI in a group of ddex:MIDIs in a ddex:Release.
     *
     * @var string $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A ddex:Composite containing details of a ddex:HostSoundCarrier on which the ddex:MIDI appears (e.g., the CD on which it was originally released). This ddex:Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of ddex:MIDI information.
     *
     * @var \DedexBundle\Entity\DdexC\HostSoundCarrierType[] $hostSoundCarrier
     */
    private $hostSoundCarrier = [
        
    ];

    /**
     * A ddex:Composite containing a ddex:Comment about the promotion and marketing of the ddex:MIDI.
     *
     * @var \DedexBundle\Entity\DdexC\CommentType $marketingComment
     */
    private $marketingComment = null;

    /**
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:MIDI belongs.
     *
     * @var \DedexBundle\Entity\DdexC\GenreType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * A ddex:Composite containing details of the classification of the ddex:MIDI according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @var \DedexBundle\Entity\DdexC\ParentalWarningTypeType[] $parentalWarningType
     */
    private $parentalWarningType = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:FulfillmentDate.
     *
     * @var \DedexBundle\Entity\DdexC\FulfillmentDateType $fulfillmentDate
     */
    private $fulfillmentDate = null;

    /**
     * A ddex:Composite containing details of a ddex:Description of the ddex:MIDI containing ddex:Keywords.
     *
     * @var \DedexBundle\Entity\DdexC\KeywordsType[] $keywords
     */
    private $keywords = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Synopsis of the ddex:MIDI.
     *
     * @var \DedexBundle\Entity\DdexC\SynopsisType $synopsis
     */
    private $synopsis = null;

    /**
     * A ddex:Composite containing technical details of the ddex:MIDI.
     *
     * @var \DedexBundle\Entity\Ern341\TechnicalMidiDetailsType[] $technicalMidiDetails
     */
    private $technicalMidiDetails = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddexC:MidiDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ddexC:MidiDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Territory to which the ddex:MIDI details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @return self
     * @param string $territoryCode
     */
    public function addToTerritoryCode($territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A ddex:Territory to which the ddex:MIDI details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:MIDI details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:MIDI details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @return string[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A ddex:Territory to which the ddex:MIDI details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @param string $territoryCode
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
     * A ddex:Territory to which the ddex:MIDI details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @return self
     * @param string $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode($excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A ddex:Territory to which the ddex:MIDI details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:MIDI details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:MIDI details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @return string[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A ddex:Territory to which the ddex:MIDI details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @param string $excludedTerritoryCode
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
     * A ddex:Composite containing details of a ddex:Title of the ddex:MIDI.
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
     * A ddex:Composite containing details of a ddex:Title of the ddex:MIDI.
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
     * A ddex:Composite containing details of a ddex:Title of the ddex:MIDI.
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
     * A ddex:Composite containing details of a ddex:Title of the ddex:MIDI.
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
     * A ddex:Composite containing details of a ddex:Title of the ddex:MIDI.
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
     * Adds as displayArtist
     *
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddex:MIDI. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ArtistType $displayArtist
     */
    public function addToDisplayArtist(\DedexBundle\Entity\DdexC\ArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddex:MIDI. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
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
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddex:MIDI. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
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
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddex:MIDI. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @return \DedexBundle\Entity\DdexC\ArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddex:MIDI. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @param \DedexBundle\Entity\DdexC\ArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist = null)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Adds as resourceContributor
     *
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:MIDI.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ResourceContributorType $resourceContributor
     */
    public function addToResourceContributor(\DedexBundle\Entity\DdexC\ResourceContributorType $resourceContributor)
    {
        $this->resourceContributor[] = $resourceContributor;
        return $this;
    }

    /**
     * isset resourceContributor
     *
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:MIDI.
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
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:MIDI.
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
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:MIDI.
     *
     * @return \DedexBundle\Entity\DdexC\ResourceContributorType[]
     */
    public function getResourceContributor()
    {
        return $this->resourceContributor;
    }

    /**
     * Sets a new resourceContributor
     *
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:MIDI.
     *
     * @param \DedexBundle\Entity\DdexC\ResourceContributorType[] $resourceContributor
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
     * A ddex:Composite containing details of an indirect ddex:Contributor to the ddex:MIDI.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\IndirectResourceContributorType $indirectResourceContributor
     */
    public function addToIndirectResourceContributor(\DedexBundle\Entity\DdexC\IndirectResourceContributorType $indirectResourceContributor)
    {
        $this->indirectResourceContributor[] = $indirectResourceContributor;
        return $this;
    }

    /**
     * isset indirectResourceContributor
     *
     * A ddex:Composite containing details of an indirect ddex:Contributor to the ddex:MIDI.
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
     * A ddex:Composite containing details of an indirect ddex:Contributor to the ddex:MIDI.
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
     * A ddex:Composite containing details of an indirect ddex:Contributor to the ddex:MIDI.
     *
     * @return \DedexBundle\Entity\DdexC\IndirectResourceContributorType[]
     */
    public function getIndirectResourceContributor()
    {
        return $this->indirectResourceContributor;
    }

    /**
     * Sets a new indirectResourceContributor
     *
     * A ddex:Composite containing details of an indirect ddex:Contributor to the ddex:MIDI.
     *
     * @param \DedexBundle\Entity\DdexC\IndirectResourceContributorType[] $indirectResourceContributor
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
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ddex:MIDI.
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
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ddex:MIDI.
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
     * Adds as labelName
     *
     * A ddex:Composite containing the ddex:Name of the ddex:Label under which the ddex:Release is to be marketed.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\LabelNameType $labelName
     */
    public function addToLabelName(\DedexBundle\Entity\DdexC\LabelNameType $labelName)
    {
        $this->labelName[] = $labelName;
        return $this;
    }

    /**
     * isset labelName
     *
     * A ddex:Composite containing the ddex:Name of the ddex:Label under which the ddex:Release is to be marketed.
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
     * A ddex:Composite containing the ddex:Name of the ddex:Label under which the ddex:Release is to be marketed.
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
     * A ddex:Composite containing the ddex:Name of the ddex:Label under which the ddex:Release is to be marketed.
     *
     * @return \DedexBundle\Entity\DdexC\LabelNameType[]
     */
    public function getLabelName()
    {
        return $this->labelName;
    }

    /**
     * Sets a new labelName
     *
     * A ddex:Composite containing the ddex:Name of the ddex:Label under which the ddex:Release is to be marketed.
     *
     * @param \DedexBundle\Entity\DdexC\LabelNameType[] $labelName
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
     * A ddex:Composite containing details of ddex:RightsController of Rights in the ddex:MIDI.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\RightsControllerType $rightsController
     */
    public function addToRightsController(\DedexBundle\Entity\DdexC\RightsControllerType $rightsController)
    {
        $this->rightsController[] = $rightsController;
        return $this;
    }

    /**
     * isset rightsController
     *
     * A ddex:Composite containing details of ddex:RightsController of Rights in the ddex:MIDI.
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
     * A ddex:Composite containing details of ddex:RightsController of Rights in the ddex:MIDI.
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
     * A ddex:Composite containing details of ddex:RightsController of Rights in the ddex:MIDI.
     *
     * @return \DedexBundle\Entity\DdexC\RightsControllerType[]
     */
    public function getRightsController()
    {
        return $this->rightsController;
    }

    /**
     * Sets a new rightsController
     *
     * A ddex:Composite containing details of ddex:RightsController of Rights in the ddex:MIDI.
     *
     * @param \DedexBundle\Entity\DdexC\RightsControllerType[] $rightsController
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
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:MIDI was re-mastered (usually digitally).
     *
     * @return \DedexBundle\Entity\DdexC\EventDateType
     */
    public function getRemasteredDate()
    {
        return $this->remasteredDate;
    }

    /**
     * Sets a new remasteredDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:MIDI was re-mastered (usually digitally).
     *
     * @param \DedexBundle\Entity\DdexC\EventDateType $remasteredDate
     * @return self
     */
    public function setRemasteredDate(?\DedexBundle\Entity\DdexC\EventDateType $remasteredDate = null)
    {
        $this->remasteredDate = $remasteredDate;
        return $this;
    }

    /**
     * Gets as originalResourceReleaseDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:MIDI was originally published, whether for physical or electronic/online distribution.
     *
     * @return \DedexBundle\Entity\DdexC\EventDateType
     */
    public function getOriginalResourceReleaseDate()
    {
        return $this->originalResourceReleaseDate;
    }

    /**
     * Sets a new originalResourceReleaseDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:MIDI was originally published, whether for physical or electronic/online distribution.
     *
     * @param \DedexBundle\Entity\DdexC\EventDateType $originalResourceReleaseDate
     * @return self
     */
    public function setOriginalResourceReleaseDate(?\DedexBundle\Entity\DdexC\EventDateType $originalResourceReleaseDate = null)
    {
        $this->originalResourceReleaseDate = $originalResourceReleaseDate;
        return $this;
    }

    /**
     * Adds as cLine
     *
     * A ddex:Composite containing details of the ddex:CLine for the ddex:MIDI.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\CLineType $cLine
     */
    public function addToCLine(\DedexBundle\Entity\DdexC\CLineType $cLine)
    {
        $this->cLine[] = $cLine;
        return $this;
    }

    /**
     * isset cLine
     *
     * A ddex:Composite containing details of the ddex:CLine for the ddex:MIDI.
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
     * A ddex:Composite containing details of the ddex:CLine for the ddex:MIDI.
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
     * A ddex:Composite containing details of the ddex:CLine for the ddex:MIDI.
     *
     * @return \DedexBundle\Entity\DdexC\CLineType[]
     */
    public function getCLine()
    {
        return $this->cLine;
    }

    /**
     * Sets a new cLine
     *
     * A ddex:Composite containing details of the ddex:CLine for the ddex:MIDI.
     *
     * @param \DedexBundle\Entity\DdexC\CLineType[] $cLine
     * @return self
     */
    public function setCLine(array $cLine = null)
    {
        $this->cLine = $cLine;
        return $this;
    }

    /**
     * Gets as courtesyLine
     *
     * A ddex:Composite containing an ddex:Annotation which acknowledges record companies and/or other Parties giving permission for guests ddex:Artists or others featured on the ddex:MIDI.
     *
     * @return \DedexBundle\Entity\DdexC\CourtesyLineType
     */
    public function getCourtesyLine()
    {
        return $this->courtesyLine;
    }

    /**
     * Sets a new courtesyLine
     *
     * A ddex:Composite containing an ddex:Annotation which acknowledges record companies and/or other Parties giving permission for guests ddex:Artists or others featured on the ddex:MIDI.
     *
     * @param \DedexBundle\Entity\DdexC\CourtesyLineType $courtesyLine
     * @return self
     */
    public function setCourtesyLine(?\DedexBundle\Entity\DdexC\CourtesyLineType $courtesyLine = null)
    {
        $this->courtesyLine = $courtesyLine;
        return $this;
    }

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the ddex:MIDI in a group of ddex:MIDIs in a ddex:Release.
     *
     * @return string
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * The number indicating the order of the ddex:MIDI in a group of ddex:MIDIs in a ddex:Release.
     *
     * @param string $sequenceNumber
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
     * A ddex:Composite containing details of a ddex:HostSoundCarrier on which the ddex:MIDI appears (e.g., the CD on which it was originally released). This ddex:Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of ddex:MIDI information.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\HostSoundCarrierType $hostSoundCarrier
     */
    public function addToHostSoundCarrier(\DedexBundle\Entity\DdexC\HostSoundCarrierType $hostSoundCarrier)
    {
        $this->hostSoundCarrier[] = $hostSoundCarrier;
        return $this;
    }

    /**
     * isset hostSoundCarrier
     *
     * A ddex:Composite containing details of a ddex:HostSoundCarrier on which the ddex:MIDI appears (e.g., the CD on which it was originally released). This ddex:Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of ddex:MIDI information.
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
     * A ddex:Composite containing details of a ddex:HostSoundCarrier on which the ddex:MIDI appears (e.g., the CD on which it was originally released). This ddex:Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of ddex:MIDI information.
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
     * A ddex:Composite containing details of a ddex:HostSoundCarrier on which the ddex:MIDI appears (e.g., the CD on which it was originally released). This ddex:Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of ddex:MIDI information.
     *
     * @return \DedexBundle\Entity\DdexC\HostSoundCarrierType[]
     */
    public function getHostSoundCarrier()
    {
        return $this->hostSoundCarrier;
    }

    /**
     * Sets a new hostSoundCarrier
     *
     * A ddex:Composite containing details of a ddex:HostSoundCarrier on which the ddex:MIDI appears (e.g., the CD on which it was originally released). This ddex:Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of ddex:MIDI information.
     *
     * @param \DedexBundle\Entity\DdexC\HostSoundCarrierType[] $hostSoundCarrier
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
     * A ddex:Composite containing a ddex:Comment about the promotion and marketing of the ddex:MIDI.
     *
     * @return \DedexBundle\Entity\DdexC\CommentType
     */
    public function getMarketingComment()
    {
        return $this->marketingComment;
    }

    /**
     * Sets a new marketingComment
     *
     * A ddex:Composite containing a ddex:Comment about the promotion and marketing of the ddex:MIDI.
     *
     * @param \DedexBundle\Entity\DdexC\CommentType $marketingComment
     * @return self
     */
    public function setMarketingComment(?\DedexBundle\Entity\DdexC\CommentType $marketingComment = null)
    {
        $this->marketingComment = $marketingComment;
        return $this;
    }

    /**
     * Adds as genre
     *
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:MIDI belongs.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\GenreType $genre
     */
    public function addToGenre(\DedexBundle\Entity\DdexC\GenreType $genre)
    {
        $this->genre[] = $genre;
        return $this;
    }

    /**
     * isset genre
     *
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:MIDI belongs.
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
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:MIDI belongs.
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
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:MIDI belongs.
     *
     * @return \DedexBundle\Entity\DdexC\GenreType[]
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Sets a new genre
     *
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:MIDI belongs.
     *
     * @param \DedexBundle\Entity\DdexC\GenreType[] $genre
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
     * A ddex:Composite containing details of the classification of the ddex:MIDI according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ParentalWarningTypeType $parentalWarningType
     */
    public function addToParentalWarningType(\DedexBundle\Entity\DdexC\ParentalWarningTypeType $parentalWarningType)
    {
        $this->parentalWarningType[] = $parentalWarningType;
        return $this;
    }

    /**
     * isset parentalWarningType
     *
     * A ddex:Composite containing details of the classification of the ddex:MIDI according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A ddex:Composite containing details of the classification of the ddex:MIDI according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A ddex:Composite containing details of the classification of the ddex:MIDI according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return \DedexBundle\Entity\DdexC\ParentalWarningTypeType[]
     */
    public function getParentalWarningType()
    {
        return $this->parentalWarningType;
    }

    /**
     * Sets a new parentalWarningType
     *
     * A ddex:Composite containing details of the classification of the ddex:MIDI according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param \DedexBundle\Entity\DdexC\ParentalWarningTypeType[] $parentalWarningType
     * @return self
     */
    public function setParentalWarningType(array $parentalWarningType = null)
    {
        $this->parentalWarningType = $parentalWarningType;
        return $this;
    }

    /**
     * Gets as fulfillmentDate
     *
     * A ddex:Composite containing details of a ddex:FulfillmentDate.
     *
     * @return \DedexBundle\Entity\DdexC\FulfillmentDateType
     */
    public function getFulfillmentDate()
    {
        return $this->fulfillmentDate;
    }

    /**
     * Sets a new fulfillmentDate
     *
     * A ddex:Composite containing details of a ddex:FulfillmentDate.
     *
     * @param \DedexBundle\Entity\DdexC\FulfillmentDateType $fulfillmentDate
     * @return self
     */
    public function setFulfillmentDate(?\DedexBundle\Entity\DdexC\FulfillmentDateType $fulfillmentDate = null)
    {
        $this->fulfillmentDate = $fulfillmentDate;
        return $this;
    }

    /**
     * Adds as keywords
     *
     * A ddex:Composite containing details of a ddex:Description of the ddex:MIDI containing ddex:Keywords.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\KeywordsType $keywords
     */
    public function addToKeywords(\DedexBundle\Entity\DdexC\KeywordsType $keywords)
    {
        $this->keywords[] = $keywords;
        return $this;
    }

    /**
     * isset keywords
     *
     * A ddex:Composite containing details of a ddex:Description of the ddex:MIDI containing ddex:Keywords.
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
     * A ddex:Composite containing details of a ddex:Description of the ddex:MIDI containing ddex:Keywords.
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
     * A ddex:Composite containing details of a ddex:Description of the ddex:MIDI containing ddex:Keywords.
     *
     * @return \DedexBundle\Entity\DdexC\KeywordsType[]
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets a new keywords
     *
     * A ddex:Composite containing details of a ddex:Description of the ddex:MIDI containing ddex:Keywords.
     *
     * @param \DedexBundle\Entity\DdexC\KeywordsType[] $keywords
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
     * A ddex:Composite containing details of a ddex:Synopsis of the ddex:MIDI.
     *
     * @return \DedexBundle\Entity\DdexC\SynopsisType
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Sets a new synopsis
     *
     * A ddex:Composite containing details of a ddex:Synopsis of the ddex:MIDI.
     *
     * @param \DedexBundle\Entity\DdexC\SynopsisType $synopsis
     * @return self
     */
    public function setSynopsis(?\DedexBundle\Entity\DdexC\SynopsisType $synopsis = null)
    {
        $this->synopsis = $synopsis;
        return $this;
    }

    /**
     * Adds as technicalMidiDetails
     *
     * A ddex:Composite containing technical details of the ddex:MIDI.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\TechnicalMidiDetailsType $technicalMidiDetails
     */
    public function addToTechnicalMidiDetails(\DedexBundle\Entity\Ern341\TechnicalMidiDetailsType $technicalMidiDetails)
    {
        $this->technicalMidiDetails[] = $technicalMidiDetails;
        return $this;
    }

    /**
     * isset technicalMidiDetails
     *
     * A ddex:Composite containing technical details of the ddex:MIDI.
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
     * A ddex:Composite containing technical details of the ddex:MIDI.
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
     * A ddex:Composite containing technical details of the ddex:MIDI.
     *
     * @return \DedexBundle\Entity\Ern341\TechnicalMidiDetailsType[]
     */
    public function getTechnicalMidiDetails()
    {
        return $this->technicalMidiDetails;
    }

    /**
     * Sets a new technicalMidiDetails
     *
     * A ddex:Composite containing technical details of the ddex:MIDI.
     *
     * @param \DedexBundle\Entity\Ern341\TechnicalMidiDetailsType[] $technicalMidiDetails
     * @return self
     */
    public function setTechnicalMidiDetails(array $technicalMidiDetails = null)
    {
        $this->technicalMidiDetails = $technicalMidiDetails;
        return $this;
    }
}

