<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing AffiliationType
 *
 * A Composite containing details of a business deal with another Party.
 * XSD Type: Affiliation
 */
class AffiliationType
{
    /**
     * The Name of the company.
     *
     * @var string $companyName
     */
    private $companyName = null;

    /**
     * A Reference for an affiliated Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $partyAffiliateReference
     */
    private $partyAffiliateReference = null;

    /**
     * The Type of affiliated Party.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * A Territory to which the affiliation details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory to which the affiliation details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Composite containing details about the Period of Time for which the society affiliation is valid.
     * Further Reading: https://kb.ddex.net/general-implementation-guidance/licensing-the-standards/ddex-party-identifier-(dpid)
     *
     * @var \DedexBundle\Entity\Ern43\ValidityPeriodType $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * A Composite containing details of a rights type.
     *
     * @var \DedexBundle\Entity\Ern43\RightsTypeType[] $rightsType
     */
    private $rightsType = [
        
    ];

    /**
     * Percentage of the specific Right that is represented by the society. A quarter share is represented by '25' (and not 0.25).
     *
     * @var float $percentageOfRightsAssignment
     */
    private $percentageOfRightsAssignment = null;

    /**
     * Gets as companyName
     *
     * The Name of the company.
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * The Name of the company.
     *
     * @param string $companyName
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * Gets as partyAffiliateReference
     *
     * A Reference for an affiliated Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string
     */
    public function getPartyAffiliateReference()
    {
        return $this->partyAffiliateReference;
    }

    /**
     * Sets a new partyAffiliateReference
     *
     * A Reference for an affiliated Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $partyAffiliateReference
     * @return self
     */
    public function setPartyAffiliateReference($partyAffiliateReference)
    {
        $this->partyAffiliateReference = $partyAffiliateReference;
        return $this;
    }

    /**
     * Gets as type
     *
     * The Type of affiliated Party.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The Type of affiliated Party.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as territoryCode
     *
     * A Territory to which the affiliation details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType $territoryCode
     */
    public function addToTerritoryCode(\DedexBundle\Entity\Ern43\CurrentTerritoryCodeType $territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory to which the affiliation details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the affiliation details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the affiliation details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory to which the affiliation details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType[] $territoryCode
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
     * A Territory to which the affiliation details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode(\DedexBundle\Entity\Ern43\CurrentTerritoryCodeType $excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A Territory to which the affiliation details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the affiliation details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the affiliation details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A Territory to which the affiliation details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DedexBundle\Entity\Ern43\CurrentTerritoryCodeType[] $excludedTerritoryCode
     * @return self
     */
    public function setExcludedTerritoryCode(array $excludedTerritoryCode = null)
    {
        $this->excludedTerritoryCode = $excludedTerritoryCode;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * A Composite containing details about the Period of Time for which the society affiliation is valid.
     * Further Reading: https://kb.ddex.net/general-implementation-guidance/licensing-the-standards/ddex-party-identifier-(dpid)
     *
     * @return \DedexBundle\Entity\Ern43\ValidityPeriodType
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * A Composite containing details about the Period of Time for which the society affiliation is valid.
     * Further Reading: https://kb.ddex.net/general-implementation-guidance/licensing-the-standards/ddex-party-identifier-(dpid)
     *
     * @param \DedexBundle\Entity\Ern43\ValidityPeriodType $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?\DedexBundle\Entity\Ern43\ValidityPeriodType $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Adds as rightsType
     *
     * A Composite containing details of a rights type.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\RightsTypeType $rightsType
     */
    public function addToRightsType(\DedexBundle\Entity\Ern43\RightsTypeType $rightsType)
    {
        $this->rightsType[] = $rightsType;
        return $this;
    }

    /**
     * isset rightsType
     *
     * A Composite containing details of a rights type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightsType($index)
    {
        return isset($this->rightsType[$index]);
    }

    /**
     * unset rightsType
     *
     * A Composite containing details of a rights type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightsType($index)
    {
        unset($this->rightsType[$index]);
    }

    /**
     * Gets as rightsType
     *
     * A Composite containing details of a rights type.
     *
     * @return \DedexBundle\Entity\Ern43\RightsTypeType[]
     */
    public function getRightsType()
    {
        return $this->rightsType;
    }

    /**
     * Sets a new rightsType
     *
     * A Composite containing details of a rights type.
     *
     * @param \DedexBundle\Entity\Ern43\RightsTypeType[] $rightsType
     * @return self
     */
    public function setRightsType(array $rightsType = null)
    {
        $this->rightsType = $rightsType;
        return $this;
    }

    /**
     * Gets as percentageOfRightsAssignment
     *
     * Percentage of the specific Right that is represented by the society. A quarter share is represented by '25' (and not 0.25).
     *
     * @return float
     */
    public function getPercentageOfRightsAssignment()
    {
        return $this->percentageOfRightsAssignment;
    }

    /**
     * Sets a new percentageOfRightsAssignment
     *
     * Percentage of the specific Right that is represented by the society. A quarter share is represented by '25' (and not 0.25).
     *
     * @param float $percentageOfRightsAssignment
     * @return self
     */
    public function setPercentageOfRightsAssignment($percentageOfRightsAssignment)
    {
        $this->percentageOfRightsAssignment = $percentageOfRightsAssignment;
        return $this;
    }
}

