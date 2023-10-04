<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing PriceInformationType
 *
 * A ddex:Composite containing details of a ddex:Price.
 * XSD Type: PriceInformation
 */
class PriceInformationType
{
    /**
     * A ddex:Composite containing a ddex:Description of the differences between multiple ddexC:PriceInformation ddex:Composites.
     *
     * @var \DedexBundle\Entity\DdexC\DescriptionType $description
     */
    private $description = null;

    /**
     * A ddex:Composite containing a ddex:Type of ddex:Price according to its value range. Typical examples include 'budget' and 'front line'.
     *
     * @var \DedexBundle\Entity\DdexC\PriceRangeTypeType $priceRangeType
     */
    private $priceRangeType = null;

    /**
     * A ddex:Composite containing further details of the ddex:Price. Often used to refine the ddex:PriceRangeType.
     *
     * @var \DedexBundle\Entity\DdexC\PriceTypeType $priceType
     */
    private $priceType = null;

    /**
     * A ddex:Composite containing details of a wholesale ddex:Price for a single unit of Usage. Note that this ddex:Price applies to all ddex:UseTypes referenced in a DealTerm ddex:Composite.
     *
     * @var \DedexBundle\Entity\DdexC\PriceType $wholesalePricePerUnit
     */
    private $wholesalePricePerUnit = null;

    /**
     * A ddex:Composite containing details of a wholesale ddex:Price for a single unit. Note that the size of a bulk order is defined in the contract between ddex:MessageSender and the ddex:MessageRecipient.
     *
     * @var \DedexBundle\Entity\DdexC\PriceType $bulkOrderWholesalePricePerUnit
     */
    private $bulkOrderWholesalePricePerUnit = null;

    /**
     * A ddex:Composite containing details of a suggested retail ddex:Price.
     *
     * @var \DedexBundle\Entity\DdexC\PriceType $suggestedRetailPrice
     */
    private $suggestedRetailPrice = null;

    /**
     * Gets as description
     *
     * A ddex:Composite containing a ddex:Description of the differences between multiple ddexC:PriceInformation ddex:Composites.
     *
     * @return \DedexBundle\Entity\DdexC\DescriptionType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A ddex:Composite containing a ddex:Description of the differences between multiple ddexC:PriceInformation ddex:Composites.
     *
     * @param \DedexBundle\Entity\DdexC\DescriptionType $description
     * @return self
     */
    public function setDescription(?\DedexBundle\Entity\DdexC\DescriptionType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as priceRangeType
     *
     * A ddex:Composite containing a ddex:Type of ddex:Price according to its value range. Typical examples include 'budget' and 'front line'.
     *
     * @return \DedexBundle\Entity\DdexC\PriceRangeTypeType
     */
    public function getPriceRangeType()
    {
        return $this->priceRangeType;
    }

    /**
     * Sets a new priceRangeType
     *
     * A ddex:Composite containing a ddex:Type of ddex:Price according to its value range. Typical examples include 'budget' and 'front line'.
     *
     * @param \DedexBundle\Entity\DdexC\PriceRangeTypeType $priceRangeType
     * @return self
     */
    public function setPriceRangeType(?\DedexBundle\Entity\DdexC\PriceRangeTypeType $priceRangeType = null)
    {
        $this->priceRangeType = $priceRangeType;
        return $this;
    }

    /**
     * Gets as priceType
     *
     * A ddex:Composite containing further details of the ddex:Price. Often used to refine the ddex:PriceRangeType.
     *
     * @return \DedexBundle\Entity\DdexC\PriceTypeType
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * Sets a new priceType
     *
     * A ddex:Composite containing further details of the ddex:Price. Often used to refine the ddex:PriceRangeType.
     *
     * @param \DedexBundle\Entity\DdexC\PriceTypeType $priceType
     * @return self
     */
    public function setPriceType(?\DedexBundle\Entity\DdexC\PriceTypeType $priceType = null)
    {
        $this->priceType = $priceType;
        return $this;
    }

    /**
     * Gets as wholesalePricePerUnit
     *
     * A ddex:Composite containing details of a wholesale ddex:Price for a single unit of Usage. Note that this ddex:Price applies to all ddex:UseTypes referenced in a DealTerm ddex:Composite.
     *
     * @return \DedexBundle\Entity\DdexC\PriceType
     */
    public function getWholesalePricePerUnit()
    {
        return $this->wholesalePricePerUnit;
    }

    /**
     * Sets a new wholesalePricePerUnit
     *
     * A ddex:Composite containing details of a wholesale ddex:Price for a single unit of Usage. Note that this ddex:Price applies to all ddex:UseTypes referenced in a DealTerm ddex:Composite.
     *
     * @param \DedexBundle\Entity\DdexC\PriceType $wholesalePricePerUnit
     * @return self
     */
    public function setWholesalePricePerUnit(?\DedexBundle\Entity\DdexC\PriceType $wholesalePricePerUnit = null)
    {
        $this->wholesalePricePerUnit = $wholesalePricePerUnit;
        return $this;
    }

    /**
     * Gets as bulkOrderWholesalePricePerUnit
     *
     * A ddex:Composite containing details of a wholesale ddex:Price for a single unit. Note that the size of a bulk order is defined in the contract between ddex:MessageSender and the ddex:MessageRecipient.
     *
     * @return \DedexBundle\Entity\DdexC\PriceType
     */
    public function getBulkOrderWholesalePricePerUnit()
    {
        return $this->bulkOrderWholesalePricePerUnit;
    }

    /**
     * Sets a new bulkOrderWholesalePricePerUnit
     *
     * A ddex:Composite containing details of a wholesale ddex:Price for a single unit. Note that the size of a bulk order is defined in the contract between ddex:MessageSender and the ddex:MessageRecipient.
     *
     * @param \DedexBundle\Entity\DdexC\PriceType $bulkOrderWholesalePricePerUnit
     * @return self
     */
    public function setBulkOrderWholesalePricePerUnit(?\DedexBundle\Entity\DdexC\PriceType $bulkOrderWholesalePricePerUnit = null)
    {
        $this->bulkOrderWholesalePricePerUnit = $bulkOrderWholesalePricePerUnit;
        return $this;
    }

    /**
     * Gets as suggestedRetailPrice
     *
     * A ddex:Composite containing details of a suggested retail ddex:Price.
     *
     * @return \DedexBundle\Entity\DdexC\PriceType
     */
    public function getSuggestedRetailPrice()
    {
        return $this->suggestedRetailPrice;
    }

    /**
     * Sets a new suggestedRetailPrice
     *
     * A ddex:Composite containing details of a suggested retail ddex:Price.
     *
     * @param \DedexBundle\Entity\DdexC\PriceType $suggestedRetailPrice
     * @return self
     */
    public function setSuggestedRetailPrice(?\DedexBundle\Entity\DdexC\PriceType $suggestedRetailPrice = null)
    {
        $this->suggestedRetailPrice = $suggestedRetailPrice;
        return $this;
    }
}

