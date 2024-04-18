<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing SoftwareDetailsByTerritoryType
 *
 * A Composite containing details of Descriptors, Dates and other attributes of a Software application which may vary according to Territory of release.
 * XSD Type: SoftwareDetailsByTerritory
 */
class SoftwareDetailsByTerritoryType
{
    /**
     * The Language and script for the Elements of the SoftwareDetailsByTerritory as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Territory to which the Software details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DedexBundle\Entity\Ern381\CurrentTerritoryCodeType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory to which the Software details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DedexBundle\Entity\Ern381\CurrentTerritoryCodeType[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Composite containing details of a Title of the Software.
     *
     * @var \DedexBundle\Entity\Ern381\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing details of a Contributor to the Software.
     *
     * @var \DedexBundle\Entity\Ern381\DetailedResourceContributorType[] $resourceContributor
     */
    private $resourceContributor = [
        
    ];

    /**
     * A Composite containing details of an indirect Contributor to the Software.
     *
     * @var \DedexBundle\Entity\Ern381\IndirectResourceContributorType[] $indirectResourceContributor
     */
    private $indirectResourceContributor = [
        
    ];

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer. A Resource-level DisplayArtistName shall only be provided if it differs from the DisplayArtistName for a Release that contains the Resource and is communicated in the same XML message.
     *
     * @var \DedexBundle\Entity\Ern381\NameType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A Composite containing details of the PLine for the Software.
     *
     * @var \DedexBundle\Entity\Ern381\PLineType[] $pLine
     */
    private $pLine = [
        
    ];

    /**
     * A Composite containing details of the CLine for the Software.
     *
     * @var \DedexBundle\Entity\Ern381\CLineType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured in the Software.
     *
     * @var \DedexBundle\Entity\Ern381\CourtesyLineType $courtesyLine
     */
    private $courtesyLine = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the Software was published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern381\EventDateType $resourceReleaseDate
     */
    private $resourceReleaseDate = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the Software was originally published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern381\EventDateType $originalResourceReleaseDate
     */
    private $originalResourceReleaseDate = null;

    /**
     * A Composite containing details of a FulfillmentDate.
     *
     * @var \DedexBundle\Entity\Ern381\FulfillmentDateType $fulfillmentDate
     */
    private $fulfillmentDate = null;

    /**
     * A Composite containing details of a Description of the Software containing Keywords.
     *
     * @var \DedexBundle\Entity\Ern381\KeywordsType[] $keywords
     */
    private $keywords = [
        
    ];

    /**
     * A Composite containing details of a Synopsis of the Software.
     *
     * @var \DedexBundle\Entity\Ern381\SynopsisType $synopsis
     */
    private $synopsis = null;

    /**
     * A Composite containing details of a Genre to which the Software belongs.
     *
     * @var \DedexBundle\Entity\Ern381\GenreType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * A Composite containing details of the classification of the Software according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @var \DedexBundle\Entity\Ern381\ParentalWarningTypeType[] $parentalWarningType
     */
    private $parentalWarningType = [
        
    ];

    /**
     * A Composite containing technical details of the Software.
     *
     * @var \DedexBundle\Entity\Ern381\TechnicalSoftwareDetailsType[] $technicalSoftwareDetails
     */
    private $technicalSoftwareDetails = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the SoftwareDetailsByTerritory as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the SoftwareDetailsByTerritory as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * A Territory to which the Software details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the Software details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the Software details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the Software details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the Software details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the Software details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the Software details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the Software details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the Software details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the Software details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Composite containing details of a Title of the Software.
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
     * A Composite containing details of a Title of the Software.
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
     * A Composite containing details of a Title of the Software.
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
     * A Composite containing details of a Title of the Software.
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
     * A Composite containing details of a Title of the Software.
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
     * Adds as resourceContributor
     *
     * A Composite containing details of a Contributor to the Software.
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
     * A Composite containing details of a Contributor to the Software.
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
     * A Composite containing details of a Contributor to the Software.
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
     * A Composite containing details of a Contributor to the Software.
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
     * A Composite containing details of a Contributor to the Software.
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
     * A Composite containing details of an indirect Contributor to the Software.
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
     * A Composite containing details of an indirect Contributor to the Software.
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
     * A Composite containing details of an indirect Contributor to the Software.
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
     * A Composite containing details of an indirect Contributor to the Software.
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
     * A Composite containing details of an indirect Contributor to the Software.
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
     * Adds as pLine
     *
     * A Composite containing details of the PLine for the Software.
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
     * A Composite containing details of the PLine for the Software.
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
     * A Composite containing details of the PLine for the Software.
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
     * A Composite containing details of the PLine for the Software.
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
     * A Composite containing details of the PLine for the Software.
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
     * Adds as cLine
     *
     * A Composite containing details of the CLine for the Software.
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
     * A Composite containing details of the CLine for the Software.
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
     * A Composite containing details of the CLine for the Software.
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
     * A Composite containing details of the CLine for the Software.
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
     * A Composite containing details of the CLine for the Software.
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
     * Gets as courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured in the Software.
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
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured in the Software.
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
     * Gets as resourceReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Software was published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Composite containing details of the Date and Place of the Event in which the Software was published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Composite containing details of the Date and Place of the Event in which the Software was originally published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Composite containing details of the Date and Place of the Event in which the Software was originally published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Composite containing details of a Description of the Software containing Keywords.
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
     * A Composite containing details of a Description of the Software containing Keywords.
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
     * A Composite containing details of a Description of the Software containing Keywords.
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
     * A Composite containing details of a Description of the Software containing Keywords.
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
     * A Composite containing details of a Description of the Software containing Keywords.
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
     * A Composite containing details of a Synopsis of the Software.
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
     * A Composite containing details of a Synopsis of the Software.
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
     * Adds as genre
     *
     * A Composite containing details of a Genre to which the Software belongs.
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
     * A Composite containing details of a Genre to which the Software belongs.
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
     * A Composite containing details of a Genre to which the Software belongs.
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
     * A Composite containing details of a Genre to which the Software belongs.
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
     * A Composite containing details of a Genre to which the Software belongs.
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
     * A Composite containing details of the classification of the Software according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A Composite containing details of the classification of the Software according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A Composite containing details of the classification of the Software according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A Composite containing details of the classification of the Software according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A Composite containing details of the classification of the Software according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * Adds as technicalSoftwareDetails
     *
     * A Composite containing technical details of the Software.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\TechnicalSoftwareDetailsType $technicalSoftwareDetails
     */
    public function addToTechnicalSoftwareDetails(\DedexBundle\Entity\Ern381\TechnicalSoftwareDetailsType $technicalSoftwareDetails)
    {
        $this->technicalSoftwareDetails[] = $technicalSoftwareDetails;
        return $this;
    }

    /**
     * isset technicalSoftwareDetails
     *
     * A Composite containing technical details of the Software.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalSoftwareDetails($index)
    {
        return isset($this->technicalSoftwareDetails[$index]);
    }

    /**
     * unset technicalSoftwareDetails
     *
     * A Composite containing technical details of the Software.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalSoftwareDetails($index)
    {
        unset($this->technicalSoftwareDetails[$index]);
    }

    /**
     * Gets as technicalSoftwareDetails
     *
     * A Composite containing technical details of the Software.
     *
     * @return \DedexBundle\Entity\Ern381\TechnicalSoftwareDetailsType[]
     */
    public function getTechnicalSoftwareDetails()
    {
        return $this->technicalSoftwareDetails;
    }

    /**
     * Sets a new technicalSoftwareDetails
     *
     * A Composite containing technical details of the Software.
     *
     * @param \DedexBundle\Entity\Ern381\TechnicalSoftwareDetailsType[] $technicalSoftwareDetails
     * @return self
     */
    public function setTechnicalSoftwareDetails(array $technicalSoftwareDetails = null)
    {
        $this->technicalSoftwareDetails = $technicalSoftwareDetails;
        return $this;
    }
}

