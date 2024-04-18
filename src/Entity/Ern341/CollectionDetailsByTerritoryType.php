<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing CollectionDetailsByTerritoryType
 *
 * A ddex:Composite containing details of ddex:Descriptors and other attributes of a ddex:Collection which may vary according to ddex:Territory of release.
 * XSD Type: CollectionDetailsByTerritory
 */
class CollectionDetailsByTerritoryType
{
    /**
     * A ddex:Territory to which the ddex:Collection details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A ddex:Territory to which the ddex:Collection details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @var string[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Title of the ddex:Collection.
     *
     * @var \DedexBundle\Entity\DdexC\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:Collection.
     *
     * @var \DedexBundle\Entity\DdexC\ResourceContributorType[] $contributor
     */
    private $contributor = [
        
    ];

    /**
     * The ddex:Flag indicating whether the ddex:Collection is complete (=True) or not (=False). Only one of the Elements ddex:IsComplete here and in the Collection is valid for a given Collection.
     *
     * @var bool $isComplete
     */
    private $isComplete = null;

    /**
     * A ddex:Composite containing details of a ddex:Character in the ddex:Collection. A ddex:Character may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @var \DedexBundle\Entity\DdexC\CharacterType[] $character
     */
    private $character = [
        
    ];

    /**
     * Adds as territoryCode
     *
     * A ddex:Territory to which the ddex:Collection details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:Collection details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:Collection details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:Collection details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:Collection details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:Collection details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:Collection details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:Collection details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:Collection details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:Collection details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
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
     * A ddex:Composite containing details of a ddex:Title of the ddex:Collection.
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
     * A ddex:Composite containing details of a ddex:Title of the ddex:Collection.
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
     * A ddex:Composite containing details of a ddex:Title of the ddex:Collection.
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
     * A ddex:Composite containing details of a ddex:Title of the ddex:Collection.
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
     * A ddex:Composite containing details of a ddex:Title of the ddex:Collection.
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
     * Adds as contributor
     *
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:Collection.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ResourceContributorType $contributor
     */
    public function addToContributor(\DedexBundle\Entity\DdexC\ResourceContributorType $contributor)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * isset contributor
     *
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:Collection.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContributor($index)
    {
        return isset($this->contributor[$index]);
    }

    /**
     * unset contributor
     *
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:Collection.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContributor($index)
    {
        unset($this->contributor[$index]);
    }

    /**
     * Gets as contributor
     *
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:Collection.
     *
     * @return \DedexBundle\Entity\DdexC\ResourceContributorType[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Sets a new contributor
     *
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:Collection.
     *
     * @param \DedexBundle\Entity\DdexC\ResourceContributorType[] $contributor
     * @return self
     */
    public function setContributor(array $contributor = null)
    {
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * Gets as isComplete
     *
     * The ddex:Flag indicating whether the ddex:Collection is complete (=True) or not (=False). Only one of the Elements ddex:IsComplete here and in the Collection is valid for a given Collection.
     *
     * @return bool
     */
    public function getIsComplete()
    {
        return $this->isComplete;
    }

    /**
     * Sets a new isComplete
     *
     * The ddex:Flag indicating whether the ddex:Collection is complete (=True) or not (=False). Only one of the Elements ddex:IsComplete here and in the Collection is valid for a given Collection.
     *
     * @param bool $isComplete
     * @return self
     */
    public function setIsComplete($isComplete)
    {
        $this->isComplete = $isComplete;
        return $this;
    }

    /**
     * Adds as character
     *
     * A ddex:Composite containing details of a ddex:Character in the ddex:Collection. A ddex:Character may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\CharacterType $character
     */
    public function addToCharacter(\DedexBundle\Entity\DdexC\CharacterType $character)
    {
        $this->character[] = $character;
        return $this;
    }

    /**
     * isset character
     *
     * A ddex:Composite containing details of a ddex:Character in the ddex:Collection. A ddex:Character may be described through ddex:Name, ddex:Identifier and Roles.
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
     * A ddex:Composite containing details of a ddex:Character in the ddex:Collection. A ddex:Character may be described through ddex:Name, ddex:Identifier and Roles.
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
     * A ddex:Composite containing details of a ddex:Character in the ddex:Collection. A ddex:Character may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @return \DedexBundle\Entity\DdexC\CharacterType[]
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * Sets a new character
     *
     * A ddex:Composite containing details of a ddex:Character in the ddex:Collection. A ddex:Character may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @param \DedexBundle\Entity\DdexC\CharacterType[] $character
     * @return self
     */
    public function setCharacter(array $character = null)
    {
        $this->character = $character;
        return $this;
    }
}

