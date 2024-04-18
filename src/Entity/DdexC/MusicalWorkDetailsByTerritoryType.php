<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing MusicalWorkDetailsByTerritoryType
 *
 * A ddex:Composite containing details of ddex:Descriptors and other attributes of a ddex:MusicalWork which may vary according to ddex:Territory of release.
 * XSD Type: MusicalWorkDetailsByTerritory
 */
class MusicalWorkDetailsByTerritoryType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ddexC:MusicalWorkDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Territory to which the ddex:MusicalWork details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A ddex:Territory to which the ddex:MusicalWork details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @var string[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A ddex:Composite containing details a ddex:MusicalWorkContributor to the ddex:MusicalWork.
     *
     * @var \DedexBundle\Entity\DdexC\MusicalWorkContributorType[] $musicalWorkContributor
     */
    private $musicalWorkContributor = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddexC:MusicalWorkDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ddexC:MusicalWorkDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Territory to which the ddex:MusicalWork details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:MusicalWork details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:MusicalWork details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:MusicalWork details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:MusicalWork details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:MusicalWork details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:MusicalWork details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:MusicalWork details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:MusicalWork details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:MusicalWork details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
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
     * Adds as musicalWorkContributor
     *
     * A ddex:Composite containing details a ddex:MusicalWorkContributor to the ddex:MusicalWork.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\MusicalWorkContributorType $musicalWorkContributor
     */
    public function addToMusicalWorkContributor(\DedexBundle\Entity\DdexC\MusicalWorkContributorType $musicalWorkContributor)
    {
        $this->musicalWorkContributor[] = $musicalWorkContributor;
        return $this;
    }

    /**
     * isset musicalWorkContributor
     *
     * A ddex:Composite containing details a ddex:MusicalWorkContributor to the ddex:MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicalWorkContributor($index)
    {
        return isset($this->musicalWorkContributor[$index]);
    }

    /**
     * unset musicalWorkContributor
     *
     * A ddex:Composite containing details a ddex:MusicalWorkContributor to the ddex:MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicalWorkContributor($index)
    {
        unset($this->musicalWorkContributor[$index]);
    }

    /**
     * Gets as musicalWorkContributor
     *
     * A ddex:Composite containing details a ddex:MusicalWorkContributor to the ddex:MusicalWork.
     *
     * @return \DedexBundle\Entity\DdexC\MusicalWorkContributorType[]
     */
    public function getMusicalWorkContributor()
    {
        return $this->musicalWorkContributor;
    }

    /**
     * Sets a new musicalWorkContributor
     *
     * A ddex:Composite containing details a ddex:MusicalWorkContributor to the ddex:MusicalWork.
     *
     * @param \DedexBundle\Entity\DdexC\MusicalWorkContributorType[] $musicalWorkContributor
     * @return self
     */
    public function setMusicalWorkContributor(array $musicalWorkContributor)
    {
        $this->musicalWorkContributor = $musicalWorkContributor;
        return $this;
    }
}

