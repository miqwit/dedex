<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing CatalogTransferType
 *
 * A ddex:Composite containing details of a ddex:CatalogTransfer.
 * XSD Type: CatalogTransfer
 */
class CatalogTransferType
{
    /**
     * A ddex:Flag indicating whether the ddex:CatalogTransfer has been made (=True) or still needs to be made (=False).
     *
     * @var bool $catalogTransferCompleted
     */
    private $catalogTransferCompleted = null;

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the catalog is or was transferred.
     *
     * @var \DedexBundle\Entity\DdexC\EventDateType $effectiveTransferDate
     */
    private $effectiveTransferDate = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Releases contained in the catalog that is or was transferred.
     *
     * @var string[] $catalogReleaseReferenceList
     */
    private $catalogReleaseReferenceList = null;

    /**
     * A ddex:Territory to which the ddex:CatalogTransfer applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory must be present, but not both.
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A ddex:Territory to which the ddex:CatalogTransfer does not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory must be present, but not both.
     *
     * @var string[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A ddex:Composite containing details of the old ddex:RightsController.
     *
     * @var \DedexBundle\Entity\DdexC\PartyDescriptorType $transferringFrom
     */
    private $transferringFrom = null;

    /**
     * A ddex:Composite containing details of the new ddex:RightsController.
     *
     * @var \DedexBundle\Entity\DdexC\PartyDescriptorType $transferringTo
     */
    private $transferringTo = null;

    /**
     * Gets as catalogTransferCompleted
     *
     * A ddex:Flag indicating whether the ddex:CatalogTransfer has been made (=True) or still needs to be made (=False).
     *
     * @return bool
     */
    public function getCatalogTransferCompleted()
    {
        return $this->catalogTransferCompleted;
    }

    /**
     * Sets a new catalogTransferCompleted
     *
     * A ddex:Flag indicating whether the ddex:CatalogTransfer has been made (=True) or still needs to be made (=False).
     *
     * @param bool $catalogTransferCompleted
     * @return self
     */
    public function setCatalogTransferCompleted($catalogTransferCompleted)
    {
        $this->catalogTransferCompleted = $catalogTransferCompleted;
        return $this;
    }

    /**
     * Gets as effectiveTransferDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the catalog is or was transferred.
     *
     * @return \DedexBundle\Entity\DdexC\EventDateType
     */
    public function getEffectiveTransferDate()
    {
        return $this->effectiveTransferDate;
    }

    /**
     * Sets a new effectiveTransferDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the catalog is or was transferred.
     *
     * @param \DedexBundle\Entity\DdexC\EventDateType $effectiveTransferDate
     * @return self
     */
    public function setEffectiveTransferDate(?\DedexBundle\Entity\DdexC\EventDateType $effectiveTransferDate = null)
    {
        $this->effectiveTransferDate = $effectiveTransferDate;
        return $this;
    }

    /**
     * Adds as catalogReleaseReference
     *
     * A ddex:Composite containing details of one or more ddex:Releases contained in the catalog that is or was transferred.
     *
     * @return self
     * @param string $catalogReleaseReference
     */
    public function addToCatalogReleaseReferenceList($catalogReleaseReference)
    {
        $this->catalogReleaseReferenceList[] = $catalogReleaseReference;
        return $this;
    }

    /**
     * isset catalogReleaseReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:Releases contained in the catalog that is or was transferred.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCatalogReleaseReferenceList($index)
    {
        return isset($this->catalogReleaseReferenceList[$index]);
    }

    /**
     * unset catalogReleaseReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:Releases contained in the catalog that is or was transferred.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCatalogReleaseReferenceList($index)
    {
        unset($this->catalogReleaseReferenceList[$index]);
    }

    /**
     * Gets as catalogReleaseReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:Releases contained in the catalog that is or was transferred.
     *
     * @return string[]
     */
    public function getCatalogReleaseReferenceList()
    {
        return $this->catalogReleaseReferenceList;
    }

    /**
     * Sets a new catalogReleaseReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:Releases contained in the catalog that is or was transferred.
     *
     * @param string $catalogReleaseReferenceList
     * @return self
     */
    public function setCatalogReleaseReferenceList(array $catalogReleaseReferenceList)
    {
        $this->catalogReleaseReferenceList = $catalogReleaseReferenceList;
        return $this;
    }

    /**
     * Adds as territoryCode
     *
     * A ddex:Territory to which the ddex:CatalogTransfer applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory must be present, but not both.
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
     * A ddex:Territory to which the ddex:CatalogTransfer applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory must be present, but not both.
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
     * A ddex:Territory to which the ddex:CatalogTransfer applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory must be present, but not both.
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
     * A ddex:Territory to which the ddex:CatalogTransfer applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory must be present, but not both.
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
     * A ddex:Territory to which the ddex:CatalogTransfer applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory must be present, but not both.
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
     * A ddex:Territory to which the ddex:CatalogTransfer does not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory must be present, but not both.
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
     * A ddex:Territory to which the ddex:CatalogTransfer does not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory must be present, but not both.
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
     * A ddex:Territory to which the ddex:CatalogTransfer does not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory must be present, but not both.
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
     * A ddex:Territory to which the ddex:CatalogTransfer does not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory must be present, but not both.
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
     * A ddex:Territory to which the ddex:CatalogTransfer does not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory must be present, but not both.
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
     * Gets as transferringFrom
     *
     * A ddex:Composite containing details of the old ddex:RightsController.
     *
     * @return \DedexBundle\Entity\DdexC\PartyDescriptorType
     */
    public function getTransferringFrom()
    {
        return $this->transferringFrom;
    }

    /**
     * Sets a new transferringFrom
     *
     * A ddex:Composite containing details of the old ddex:RightsController.
     *
     * @param \DedexBundle\Entity\DdexC\PartyDescriptorType $transferringFrom
     * @return self
     */
    public function setTransferringFrom(\DedexBundle\Entity\DdexC\PartyDescriptorType $transferringFrom)
    {
        $this->transferringFrom = $transferringFrom;
        return $this;
    }

    /**
     * Gets as transferringTo
     *
     * A ddex:Composite containing details of the new ddex:RightsController.
     *
     * @return \DedexBundle\Entity\DdexC\PartyDescriptorType
     */
    public function getTransferringTo()
    {
        return $this->transferringTo;
    }

    /**
     * Sets a new transferringTo
     *
     * A ddex:Composite containing details of the new ddex:RightsController.
     *
     * @param \DedexBundle\Entity\DdexC\PartyDescriptorType $transferringTo
     * @return self
     */
    public function setTransferringTo(\DedexBundle\Entity\DdexC\PartyDescriptorType $transferringTo)
    {
        $this->transferringTo = $transferringTo;
        return $this;
    }
}

