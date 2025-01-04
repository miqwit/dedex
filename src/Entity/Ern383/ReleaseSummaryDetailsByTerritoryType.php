<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing ReleaseSummaryDetailsByTerritoryType
 *
 * A Composite containing summary details of
 *  Descriptors and other attributes of a Release which may vary according to Territory of
 *  Release.
 * XSD Type: ReleaseSummaryDetailsByTerritory
 */
class ReleaseSummaryDetailsByTerritoryType
{
    /**
     * The Language and script for the Elements of
     *  the ReleaseSummaryDetailsByTerritory as defined in IETF RfC 5646. The default is the
     *  same as indicated for the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Territory to which the
     *  ReleaseSummaryDetailsByTerritory apply. Either this Element or
     *  ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes
     *  (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should
     *  only be used if both MessageSender and MessageRecipient are familiar with this
     *  standard.
     *
     * @var \DedexBundle\Entity\Ern383\CurrentTerritoryCodeType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory to which the
     *  ReleaseSummaryDetailsByTerritory do not apply. Either this Element or Territory
     *  shall be present, but not both. The use of ISO TerritoryCodes (or the term
     *  'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if
     *  both MessageSender and MessageRecipient are familiar with this
     *  standard.
     *
     * @var \DedexBundle\Entity\Ern383\CurrentTerritoryCodeType[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Composite containing the Name to be used
     *  by a DSP when presenting Artist details of the Release to a
     *  Consumer.
     *
     * @var \DedexBundle\Entity\Ern383\NameType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A Composite containing the Name of the
     *  Label for the Release. The use of multiple LabelNames is discouraged unless used
     *  to communicate label names in different languages and/or
     *  scripts.
     *
     * @var \DedexBundle\Entity\Ern383\LabelNameType[] $labelName
     */
    private $labelName = [
        
    ];

    /**
     * A Composite containing details of
     *  Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s)
     *  used in the Release.
     *
     * @var \DedexBundle\Entity\Ern383\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of
     *  the ReleaseSummaryDetailsByTerritory as defined in IETF RfC 5646. The default is the
     *  same as indicated for the containing composite. Language and Script are provided as
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
     *  the ReleaseSummaryDetailsByTerritory as defined in IETF RfC 5646. The default is the
     *  same as indicated for the containing composite. Language and Script are provided as
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
     * A Territory to which the
     *  ReleaseSummaryDetailsByTerritory apply. Either this Element or
     *  ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes
     *  (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should
     *  only be used if both MessageSender and MessageRecipient are familiar with this
     *  standard.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\CurrentTerritoryCodeType $territoryCode
     */
    public function addToTerritoryCode(\DedexBundle\Entity\Ern383\CurrentTerritoryCodeType $territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory to which the
     *  ReleaseSummaryDetailsByTerritory apply. Either this Element or
     *  ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes
     *  (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should
     *  only be used if both MessageSender and MessageRecipient are familiar with this
     *  standard.
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
     * A Territory to which the
     *  ReleaseSummaryDetailsByTerritory apply. Either this Element or
     *  ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes
     *  (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should
     *  only be used if both MessageSender and MessageRecipient are familiar with this
     *  standard.
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
     * A Territory to which the
     *  ReleaseSummaryDetailsByTerritory apply. Either this Element or
     *  ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes
     *  (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should
     *  only be used if both MessageSender and MessageRecipient are familiar with this
     *  standard.
     *
     * @return \DedexBundle\Entity\Ern383\CurrentTerritoryCodeType[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory to which the
     *  ReleaseSummaryDetailsByTerritory apply. Either this Element or
     *  ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes
     *  (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should
     *  only be used if both MessageSender and MessageRecipient are familiar with this
     *  standard.
     *
     * @param \DedexBundle\Entity\Ern383\CurrentTerritoryCodeType[] $territoryCode
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
     * A Territory to which the
     *  ReleaseSummaryDetailsByTerritory do not apply. Either this Element or Territory
     *  shall be present, but not both. The use of ISO TerritoryCodes (or the term
     *  'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if
     *  both MessageSender and MessageRecipient are familiar with this
     *  standard.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\CurrentTerritoryCodeType $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode(\DedexBundle\Entity\Ern383\CurrentTerritoryCodeType $excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A Territory to which the
     *  ReleaseSummaryDetailsByTerritory do not apply. Either this Element or Territory
     *  shall be present, but not both. The use of ISO TerritoryCodes (or the term
     *  'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if
     *  both MessageSender and MessageRecipient are familiar with this
     *  standard.
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
     * A Territory to which the
     *  ReleaseSummaryDetailsByTerritory do not apply. Either this Element or Territory
     *  shall be present, but not both. The use of ISO TerritoryCodes (or the term
     *  'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if
     *  both MessageSender and MessageRecipient are familiar with this
     *  standard.
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
     * A Territory to which the
     *  ReleaseSummaryDetailsByTerritory do not apply. Either this Element or Territory
     *  shall be present, but not both. The use of ISO TerritoryCodes (or the term
     *  'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if
     *  both MessageSender and MessageRecipient are familiar with this
     *  standard.
     *
     * @return \DedexBundle\Entity\Ern383\CurrentTerritoryCodeType[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A Territory to which the
     *  ReleaseSummaryDetailsByTerritory do not apply. Either this Element or Territory
     *  shall be present, but not both. The use of ISO TerritoryCodes (or the term
     *  'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if
     *  both MessageSender and MessageRecipient are familiar with this
     *  standard.
     *
     * @param \DedexBundle\Entity\Ern383\CurrentTerritoryCodeType[] $excludedTerritoryCode
     * @return self
     */
    public function setExcludedTerritoryCode(array $excludedTerritoryCode = null)
    {
        $this->excludedTerritoryCode = $excludedTerritoryCode;
        return $this;
    }

    /**
     * Adds as displayArtistName
     *
     * A Composite containing the Name to be used
     *  by a DSP when presenting Artist details of the Release to a
     *  Consumer.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\NameType $displayArtistName
     */
    public function addToDisplayArtistName(\DedexBundle\Entity\Ern383\NameType $displayArtistName)
    {
        $this->displayArtistName[] = $displayArtistName;
        return $this;
    }

    /**
     * isset displayArtistName
     *
     * A Composite containing the Name to be used
     *  by a DSP when presenting Artist details of the Release to a
     *  Consumer.
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
     *  by a DSP when presenting Artist details of the Release to a
     *  Consumer.
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
     *  by a DSP when presenting Artist details of the Release to a
     *  Consumer.
     *
     * @return \DedexBundle\Entity\Ern383\NameType[]
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A Composite containing the Name to be used
     *  by a DSP when presenting Artist details of the Release to a
     *  Consumer.
     *
     * @param \DedexBundle\Entity\Ern383\NameType[] $displayArtistName
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
     * A Composite containing the Name of the
     *  Label for the Release. The use of multiple LabelNames is discouraged unless used
     *  to communicate label names in different languages and/or
     *  scripts.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\LabelNameType $labelName
     */
    public function addToLabelName(\DedexBundle\Entity\Ern383\LabelNameType $labelName)
    {
        $this->labelName[] = $labelName;
        return $this;
    }

    /**
     * isset labelName
     *
     * A Composite containing the Name of the
     *  Label for the Release. The use of multiple LabelNames is discouraged unless used
     *  to communicate label names in different languages and/or
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
     *  Label for the Release. The use of multiple LabelNames is discouraged unless used
     *  to communicate label names in different languages and/or
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
     *  Label for the Release. The use of multiple LabelNames is discouraged unless used
     *  to communicate label names in different languages and/or
     *  scripts.
     *
     * @return \DedexBundle\Entity\Ern383\LabelNameType[]
     */
    public function getLabelName()
    {
        return $this->labelName;
    }

    /**
     * Sets a new labelName
     *
     * A Composite containing the Name of the
     *  Label for the Release. The use of multiple LabelNames is discouraged unless used
     *  to communicate label names in different languages and/or
     *  scripts.
     *
     * @param \DedexBundle\Entity\Ern383\LabelNameType[] $labelName
     * @return self
     */
    public function setLabelName(array $labelName = null)
    {
        $this->labelName = $labelName;
        return $this;
    }

    /**
     * Gets as rightsAgreementId
     *
     * A Composite containing details of
     *  Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s)
     *  used in the Release.
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
     *  used in the Release.
     *
     * @param \DedexBundle\Entity\Ern383\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DedexBundle\Entity\Ern383\RightsAgreementIdType $rightsAgreementId = null)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }
}

