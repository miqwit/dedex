<?php

namespace DedexBundle\Entity\Ern382;

/**
 * Class representing PriceInformationType
 *
 * A Composite containing details of a
 *  Price.
 * XSD Type: PriceInformation
 */
class PriceInformationType
{

    /**
     * A Composite containing further details of
     *  the Price, including a Price code that informs the DSP of the Price the Release
     *  should be offered at, often in combination with a rate card. This element should
     *  not be combined with WholesalePricePerUnit or
     *  BulkOrderWholesalePricePerUnit.
     *
     * @var \DedexBundle\Entity\Ern382\PriceTypeType $priceType
     */
    private $priceType = null;

    /**
     * A Composite containing a Description of
     *  the differences between multiple PriceInformation Composites.
     *
     * @var \DedexBundle\Entity\Ern382\DescriptionType $description
     */
    private $description = null;

    /**
     * A Composite containing a Type of Price
     *  according to its value range. Typical examples include 'budget' and 'front line'.
     *  This is an informative element which is not meant to be used to send instructions
     *  on the Price to be used by the DSP.
     *
     * @var \DedexBundle\Entity\Ern382\PriceRangeTypeType $priceRangeType
     */
    private $priceRangeType = null;

    /**
     * A Composite containing details of a
     *  wholesale Price for a single unit of Usage, which informs the informs the DSP of
     *  the Price the Release should be offered at. Note that this Price applies to all
     *  UseTypes referenced in a DealTerm Composite. This element should not be combined
     *  with PriceType.
     *
     * @var \DedexBundle\Entity\Ern382\PriceType $wholesalePricePerUnit
     */
    private $wholesalePricePerUnit = null;

    /**
     * A Composite containing details of a
     *  wholesale Price for a single unit, which informs the informs the DSP of the Price
     *  the Release should be offered at. Note that the size of a bulk order is defined in
     *  the contract between MessageSender and the MessageRecipient. This element should
     *  not be combined with PriceType.
     *
     * @var \DedexBundle\Entity\Ern382\PriceType $bulkOrderWholesalePricePerUnit
     */
    private $bulkOrderWholesalePricePerUnit = null;

    /**
     * A Composite containing details of a
     *  suggested retail Price.
     *
     * @var \DedexBundle\Entity\Ern382\PriceType $suggestedRetailPrice
     */
    private $suggestedRetailPrice = null;

    /**
     * Gets as priceType
     *
     * A Composite containing further details of
     *  the Price, including a Price code that informs the DSP of the Price the Release
     *  should be offered at, often in combination with a rate card. This element should
     *  not be combined with WholesalePricePerUnit or
     *  BulkOrderWholesalePricePerUnit.
     *
     * @return \DedexBundle\Entity\Ern382\PriceTypeType
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * Sets a new priceType
     *
     * A Composite containing further details of
     *  the Price, including a Price code that informs the DSP of the Price the Release
     *  should be offered at, often in combination with a rate card. This element should
     *  not be combined with WholesalePricePerUnit or
     *  BulkOrderWholesalePricePerUnit.
     *
     * @param \DedexBundle\Entity\Ern382\PriceTypeType $priceType
     * @return self
     */
    public function setPriceType(\DedexBundle\Entity\Ern382\PriceTypeType $priceType)
    {
        $this->priceType = $priceType;
        return $this;
    }

    /**
     * Gets as description
     *
     * A Composite containing a Description of
     *  the differences between multiple PriceInformation Composites.
     *
     * @return \DedexBundle\Entity\Ern382\DescriptionType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A Composite containing a Description of
     *  the differences between multiple PriceInformation Composites.
     *
     * @param \DedexBundle\Entity\Ern382\DescriptionType $description
     * @return self
     */
    public function setDescription(\DedexBundle\Entity\Ern382\DescriptionType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as priceRangeType
     *
     * A Composite containing a Type of Price
     *  according to its value range. Typical examples include 'budget' and 'front line'.
     *  This is an informative element which is not meant to be used to send instructions
     *  on the Price to be used by the DSP.
     *
     * @return \DedexBundle\Entity\Ern382\PriceRangeTypeType
     */
    public function getPriceRangeType()
    {
        return $this->priceRangeType;
    }

    /**
     * Sets a new priceRangeType
     *
     * A Composite containing a Type of Price
     *  according to its value range. Typical examples include 'budget' and 'front line'.
     *  This is an informative element which is not meant to be used to send instructions
     *  on the Price to be used by the DSP.
     *
     * @param \DedexBundle\Entity\Ern382\PriceRangeTypeType $priceRangeType
     * @return self
     */
    public function setPriceRangeType(\DedexBundle\Entity\Ern382\PriceRangeTypeType $priceRangeType)
    {
        $this->priceRangeType = $priceRangeType;
        return $this;
    }

    /**
     * Gets as wholesalePricePerUnit
     *
     * A Composite containing details of a
     *  wholesale Price for a single unit of Usage, which informs the informs the DSP of
     *  the Price the Release should be offered at. Note that this Price applies to all
     *  UseTypes referenced in a DealTerm Composite. This element should not be combined
     *  with PriceType.
     *
     * @return \DedexBundle\Entity\Ern382\PriceType
     */
    public function getWholesalePricePerUnit()
    {
        return $this->wholesalePricePerUnit;
    }

    /**
     * Sets a new wholesalePricePerUnit
     *
     * A Composite containing details of a
     *  wholesale Price for a single unit of Usage, which informs the informs the DSP of
     *  the Price the Release should be offered at. Note that this Price applies to all
     *  UseTypes referenced in a DealTerm Composite. This element should not be combined
     *  with PriceType.
     *
     * @param \DedexBundle\Entity\Ern382\PriceType $wholesalePricePerUnit
     * @return self
     */
    public function setWholesalePricePerUnit(\DedexBundle\Entity\Ern382\PriceType $wholesalePricePerUnit)
    {
        $this->wholesalePricePerUnit = $wholesalePricePerUnit;
        return $this;
    }

    /**
     * Gets as bulkOrderWholesalePricePerUnit
     *
     * A Composite containing details of a
     *  wholesale Price for a single unit, which informs the informs the DSP of the Price
     *  the Release should be offered at. Note that the size of a bulk order is defined in
     *  the contract between MessageSender and the MessageRecipient. This element should
     *  not be combined with PriceType.
     *
     * @return \DedexBundle\Entity\Ern382\PriceType
     */
    public function getBulkOrderWholesalePricePerUnit()
    {
        return $this->bulkOrderWholesalePricePerUnit;
    }

    /**
     * Sets a new bulkOrderWholesalePricePerUnit
     *
     * A Composite containing details of a
     *  wholesale Price for a single unit, which informs the informs the DSP of the Price
     *  the Release should be offered at. Note that the size of a bulk order is defined in
     *  the contract between MessageSender and the MessageRecipient. This element should
     *  not be combined with PriceType.
     *
     * @param \DedexBundle\Entity\Ern382\PriceType $bulkOrderWholesalePricePerUnit
     * @return self
     */
    public function setBulkOrderWholesalePricePerUnit(\DedexBundle\Entity\Ern382\PriceType $bulkOrderWholesalePricePerUnit)
    {
        $this->bulkOrderWholesalePricePerUnit = $bulkOrderWholesalePricePerUnit;
        return $this;
    }

    /**
     * Gets as suggestedRetailPrice
     *
     * A Composite containing details of a
     *  suggested retail Price.
     *
     * @return \DedexBundle\Entity\Ern382\PriceType
     */
    public function getSuggestedRetailPrice()
    {
        return $this->suggestedRetailPrice;
    }

    /**
     * Sets a new suggestedRetailPrice
     *
     * A Composite containing details of a
     *  suggested retail Price.
     *
     * @param \DedexBundle\Entity\Ern382\PriceType $suggestedRetailPrice
     * @return self
     */
    public function setSuggestedRetailPrice(\DedexBundle\Entity\Ern382\PriceType $suggestedRetailPrice)
    {
        $this->suggestedRetailPrice = $suggestedRetailPrice;
        return $this;
    }


}

