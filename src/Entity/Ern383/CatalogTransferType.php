<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing CatalogTransferType
 *
 * A Composite containing details of a
 *  CatalogTransfer.
 * XSD Type: CatalogTransfer
 */
class CatalogTransferType
{
    /**
     * A Flag indicating whether the
     *  CatalogTransfer has been made (=true) or still needs to be made
     *  (=false).
     *
     * @var bool $catalogTransferCompleted
     */
    private $catalogTransferCompleted = null;

    /**
     * A Composite containing details of the Date
     *  and Place of the Event in which the catalog is or was transferred. This is a
     *  string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern383\EventDateType $effectiveTransferDate
     */
    private $effectiveTransferDate = null;

    /**
     * A Composite containing details of one or
     *  more Releases contained in the catalog that is or was
     *  transferred.
     *
     * @var string[] $catalogReleaseReferenceList
     */
    private $catalogReleaseReferenceList = null;

    /**
     * A Territory to which the
     *  CatalogTransfer applies. Either this Element or ExcludedTerritory must be
     *  present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”)
     *  is strongly encouraged; TIS TerritoryCodes should only be used if both
     *  MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DedexBundle\Entity\Ern383\AllTerritoryCodeType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory to which the
     *  CatalogTransfer does not apply. Either this Element or Territory must be
     *  present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”)
     *  is strongly encouraged; TIS TerritoryCodes should only be used if both
     *  MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DedexBundle\Entity\Ern383\AllTerritoryCodeType[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Composite containing details of the old
     *  RightsController.
     *
     * @var \DedexBundle\Entity\Ern383\PartyDescriptorType $transferringFrom
     */
    private $transferringFrom = null;

    /**
     * A Composite containing details of the new
     *  RightsController.
     *
     * @var \DedexBundle\Entity\Ern383\PartyDescriptorType $transferringTo
     */
    private $transferringTo = null;

    /**
     * Gets as catalogTransferCompleted
     *
     * A Flag indicating whether the
     *  CatalogTransfer has been made (=true) or still needs to be made
     *  (=false).
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
     * A Flag indicating whether the
     *  CatalogTransfer has been made (=true) or still needs to be made
     *  (=false).
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
     * A Composite containing details of the Date
     *  and Place of the Event in which the catalog is or was transferred. This is a
     *  string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern383\EventDateType
     */
    public function getEffectiveTransferDate()
    {
        return $this->effectiveTransferDate;
    }

    /**
     * Sets a new effectiveTransferDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the catalog is or was transferred. This is a
     *  string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern383\EventDateType $effectiveTransferDate
     * @return self
     */
    public function setEffectiveTransferDate(?\DedexBundle\Entity\Ern383\EventDateType $effectiveTransferDate = null)
    {
        $this->effectiveTransferDate = $effectiveTransferDate;
        return $this;
    }

    /**
     * Adds as catalogReleaseReference
     *
     * A Composite containing details of one or
     *  more Releases contained in the catalog that is or was
     *  transferred.
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
     * A Composite containing details of one or
     *  more Releases contained in the catalog that is or was
     *  transferred.
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
     * A Composite containing details of one or
     *  more Releases contained in the catalog that is or was
     *  transferred.
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
     * A Composite containing details of one or
     *  more Releases contained in the catalog that is or was
     *  transferred.
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
     * A Composite containing details of one or
     *  more Releases contained in the catalog that is or was
     *  transferred.
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
     * A Territory to which the
     *  CatalogTransfer applies. Either this Element or ExcludedTerritory must be
     *  present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”)
     *  is strongly encouraged; TIS TerritoryCodes should only be used if both
     *  MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\AllTerritoryCodeType $territoryCode
     */
    public function addToTerritoryCode(\DedexBundle\Entity\Ern383\AllTerritoryCodeType $territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory to which the
     *  CatalogTransfer applies. Either this Element or ExcludedTerritory must be
     *  present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”)
     *  is strongly encouraged; TIS TerritoryCodes should only be used if both
     *  MessageSender and MessageRecipient are familiar with this standard.
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
     *  CatalogTransfer applies. Either this Element or ExcludedTerritory must be
     *  present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”)
     *  is strongly encouraged; TIS TerritoryCodes should only be used if both
     *  MessageSender and MessageRecipient are familiar with this standard.
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
     *  CatalogTransfer applies. Either this Element or ExcludedTerritory must be
     *  present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”)
     *  is strongly encouraged; TIS TerritoryCodes should only be used if both
     *  MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DedexBundle\Entity\Ern383\AllTerritoryCodeType[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory to which the
     *  CatalogTransfer applies. Either this Element or ExcludedTerritory must be
     *  present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”)
     *  is strongly encouraged; TIS TerritoryCodes should only be used if both
     *  MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DedexBundle\Entity\Ern383\AllTerritoryCodeType[] $territoryCode
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
     *  CatalogTransfer does not apply. Either this Element or Territory must be
     *  present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”)
     *  is strongly encouraged; TIS TerritoryCodes should only be used if both
     *  MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\AllTerritoryCodeType $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode(\DedexBundle\Entity\Ern383\AllTerritoryCodeType $excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A Territory to which the
     *  CatalogTransfer does not apply. Either this Element or Territory must be
     *  present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”)
     *  is strongly encouraged; TIS TerritoryCodes should only be used if both
     *  MessageSender and MessageRecipient are familiar with this standard.
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
     *  CatalogTransfer does not apply. Either this Element or Territory must be
     *  present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”)
     *  is strongly encouraged; TIS TerritoryCodes should only be used if both
     *  MessageSender and MessageRecipient are familiar with this standard.
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
     *  CatalogTransfer does not apply. Either this Element or Territory must be
     *  present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”)
     *  is strongly encouraged; TIS TerritoryCodes should only be used if both
     *  MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DedexBundle\Entity\Ern383\AllTerritoryCodeType[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A Territory to which the
     *  CatalogTransfer does not apply. Either this Element or Territory must be
     *  present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”)
     *  is strongly encouraged; TIS TerritoryCodes should only be used if both
     *  MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DedexBundle\Entity\Ern383\AllTerritoryCodeType[] $excludedTerritoryCode
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
     * A Composite containing details of the old
     *  RightsController.
     *
     * @return \DedexBundle\Entity\Ern383\PartyDescriptorType
     */
    public function getTransferringFrom()
    {
        return $this->transferringFrom;
    }

    /**
     * Sets a new transferringFrom
     *
     * A Composite containing details of the old
     *  RightsController.
     *
     * @param \DedexBundle\Entity\Ern383\PartyDescriptorType $transferringFrom
     * @return self
     */
    public function setTransferringFrom(\DedexBundle\Entity\Ern383\PartyDescriptorType $transferringFrom)
    {
        $this->transferringFrom = $transferringFrom;
        return $this;
    }

    /**
     * Gets as transferringTo
     *
     * A Composite containing details of the new
     *  RightsController.
     *
     * @return \DedexBundle\Entity\Ern383\PartyDescriptorType
     */
    public function getTransferringTo()
    {
        return $this->transferringTo;
    }

    /**
     * Sets a new transferringTo
     *
     * A Composite containing details of the new
     *  RightsController.
     *
     * @param \DedexBundle\Entity\Ern383\PartyDescriptorType $transferringTo
     * @return self
     */
    public function setTransferringTo(\DedexBundle\Entity\Ern383\PartyDescriptorType $transferringTo)
    {
        $this->transferringTo = $transferringTo;
        return $this;
    }
}

