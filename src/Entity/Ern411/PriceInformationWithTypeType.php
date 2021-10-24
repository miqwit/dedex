<?php

namespace DedexBundle\Entity\Ern411;

/**
 * Class representing PriceInformationWithTypeType
 *
 * A Composite containing details of a Price.
 * XSD Type: PriceInformationWithType
 */
class PriceInformationWithTypeType
{

    /**
     * A Type of the Price. This is represented in an XML schema as an XML Attribute. If no value is provided, a StandardRetailPrice is assumed.
     *
     * @var string $priceType
     */
    private $priceType = null;

    /**
     * A Composite containing further details of the Price, including a Price code that informs the DSP of the Price the Release should be offered at, often in combination with a rate card. This element should not be combined with WholesalePricePerUnit or BulkOrderWholesalePricePerUnit.
     *
     * @var \DedexBundle\Entity\Ern411\PriceTypeType $priceCode
     */
    private $priceCode = null;

    /**
     * A Composite containing details of a wholesale Price for a single unit of Usage, which informs the informs the DSP of the Price the Release should be offered at. Note that this Price applies to all UseTypes referenced in a DealTerm Composite. This element should not be combined with PriceType.
     *
     * @var \DedexBundle\Entity\Ern411\PriceType $wholesalePricePerUnit
     */
    private $wholesalePricePerUnit = null;

    /**
     * A Composite containing details of a wholesale Price for a single unit, which informs the informs the DSP of the Price the Release should be offered at. Note that the size of a bulk order is defined in the contract between MessageSender and the MessageRecipient. This element should not be combined with PriceType.
     *
     * @var \DedexBundle\Entity\Ern411\PriceType $bulkOrderWholesalePricePerUnit
     */
    private $bulkOrderWholesalePricePerUnit = null;

    /**
     * A Composite containing details of a suggested retail Price.
     *
     * @var \DedexBundle\Entity\Ern411\PriceType $suggestedRetailPrice
     */
    private $suggestedRetailPrice = null;

    /**
     * Gets as priceType
     *
     * A Type of the Price. This is represented in an XML schema as an XML Attribute. If no value is provided, a StandardRetailPrice is assumed.
     *
     * @return string
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * Sets a new priceType
     *
     * A Type of the Price. This is represented in an XML schema as an XML Attribute. If no value is provided, a StandardRetailPrice is assumed.
     *
     * @param string $priceType
     * @return self
     */
    public function setPriceType($priceType)
    {
        $this->priceType = $priceType;
        return $this;
    }

    /**
     * Gets as priceCode
     *
     * A Composite containing further details of the Price, including a Price code that informs the DSP of the Price the Release should be offered at, often in combination with a rate card. This element should not be combined with WholesalePricePerUnit or BulkOrderWholesalePricePerUnit.
     *
     * @return \DedexBundle\Entity\Ern411\PriceTypeType
     */
    public function getPriceCode()
    {
        return $this->priceCode;
    }

    /**
     * Sets a new priceCode
     *
     * A Composite containing further details of the Price, including a Price code that informs the DSP of the Price the Release should be offered at, often in combination with a rate card. This element should not be combined with WholesalePricePerUnit or BulkOrderWholesalePricePerUnit.
     *
     * @param \DedexBundle\Entity\Ern411\PriceTypeType $priceCode
     * @return self
     */
    public function setPriceCode(\DedexBundle\Entity\Ern411\PriceTypeType $priceCode)
    {
        $this->priceCode = $priceCode;
        return $this;
    }

    /**
     * Gets as wholesalePricePerUnit
     *
     * A Composite containing details of a wholesale Price for a single unit of Usage, which informs the informs the DSP of the Price the Release should be offered at. Note that this Price applies to all UseTypes referenced in a DealTerm Composite. This element should not be combined with PriceType.
     *
     * @return \DedexBundle\Entity\Ern411\PriceType
     */
    public function getWholesalePricePerUnit()
    {
        return $this->wholesalePricePerUnit;
    }

    /**
     * Sets a new wholesalePricePerUnit
     *
     * A Composite containing details of a wholesale Price for a single unit of Usage, which informs the informs the DSP of the Price the Release should be offered at. Note that this Price applies to all UseTypes referenced in a DealTerm Composite. This element should not be combined with PriceType.
     *
     * @param \DedexBundle\Entity\Ern411\PriceType $wholesalePricePerUnit
     * @return self
     */
    public function setWholesalePricePerUnit(\DedexBundle\Entity\Ern411\PriceType $wholesalePricePerUnit)
    {
        $this->wholesalePricePerUnit = $wholesalePricePerUnit;
        return $this;
    }

    /**
     * Gets as bulkOrderWholesalePricePerUnit
     *
     * A Composite containing details of a wholesale Price for a single unit, which informs the informs the DSP of the Price the Release should be offered at. Note that the size of a bulk order is defined in the contract between MessageSender and the MessageRecipient. This element should not be combined with PriceType.
     *
     * @return \DedexBundle\Entity\Ern411\PriceType
     */
    public function getBulkOrderWholesalePricePerUnit()
    {
        return $this->bulkOrderWholesalePricePerUnit;
    }

    /**
     * Sets a new bulkOrderWholesalePricePerUnit
     *
     * A Composite containing details of a wholesale Price for a single unit, which informs the informs the DSP of the Price the Release should be offered at. Note that the size of a bulk order is defined in the contract between MessageSender and the MessageRecipient. This element should not be combined with PriceType.
     *
     * @param \DedexBundle\Entity\Ern411\PriceType $bulkOrderWholesalePricePerUnit
     * @return self
     */
    public function setBulkOrderWholesalePricePerUnit(\DedexBundle\Entity\Ern411\PriceType $bulkOrderWholesalePricePerUnit)
    {
        $this->bulkOrderWholesalePricePerUnit = $bulkOrderWholesalePricePerUnit;
        return $this;
    }

    /**
     * Gets as suggestedRetailPrice
     *
     * A Composite containing details of a suggested retail Price.
     *
     * @return \DedexBundle\Entity\Ern411\PriceType
     */
    public function getSuggestedRetailPrice()
    {
        return $this->suggestedRetailPrice;
    }

    /**
     * Sets a new suggestedRetailPrice
     *
     * A Composite containing details of a suggested retail Price.
     *
     * @param \DedexBundle\Entity\Ern411\PriceType $suggestedRetailPrice
     * @return self
     */
    public function setSuggestedRetailPrice(\DedexBundle\Entity\Ern411\PriceType $suggestedRetailPrice)
    {
        $this->suggestedRetailPrice = $suggestedRetailPrice;
        return $this;
    }


}

