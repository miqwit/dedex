<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing TaxRateType
 *
 * A ddex:Composite containing details of a ddex:TaxRate.
 * XSD Type: TaxRate
 */
class TaxRateType
{
    /**
     * The ddexC:TaxRate as a percentage.
     *
     * @var float $rate
     */
    private $rate = null;

    /**
     * A ddex:Composite containing details of the ddex:Type of ddex:Tax.
     *
     * @var \DedexBundle\Entity\DdexC\TaxTypeType[] $taxType
     */
    private $taxType = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:Type of ddex:Tax according to its scope.
     *
     * @var \DedexBundle\Entity\DdexC\TaxScopeType[] $taxScope
     */
    private $taxScope = [
        
    ];

    /**
     * Gets as rate
     *
     * The ddexC:TaxRate as a percentage.
     *
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * The ddexC:TaxRate as a percentage.
     *
     * @param float $rate
     * @return self
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Adds as taxType
     *
     * A ddex:Composite containing details of the ddex:Type of ddex:Tax.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\TaxTypeType $taxType
     */
    public function addToTaxType(\DedexBundle\Entity\DdexC\TaxTypeType $taxType)
    {
        $this->taxType[] = $taxType;
        return $this;
    }

    /**
     * isset taxType
     *
     * A ddex:Composite containing details of the ddex:Type of ddex:Tax.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxType($index)
    {
        return isset($this->taxType[$index]);
    }

    /**
     * unset taxType
     *
     * A ddex:Composite containing details of the ddex:Type of ddex:Tax.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxType($index)
    {
        unset($this->taxType[$index]);
    }

    /**
     * Gets as taxType
     *
     * A ddex:Composite containing details of the ddex:Type of ddex:Tax.
     *
     * @return \DedexBundle\Entity\DdexC\TaxTypeType[]
     */
    public function getTaxType()
    {
        return $this->taxType;
    }

    /**
     * Sets a new taxType
     *
     * A ddex:Composite containing details of the ddex:Type of ddex:Tax.
     *
     * @param \DedexBundle\Entity\DdexC\TaxTypeType[] $taxType
     * @return self
     */
    public function setTaxType(array $taxType)
    {
        $this->taxType = $taxType;
        return $this;
    }

    /**
     * Adds as taxScope
     *
     * A ddex:Composite containing details of the ddex:Type of ddex:Tax according to its scope.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\TaxScopeType $taxScope
     */
    public function addToTaxScope(\DedexBundle\Entity\DdexC\TaxScopeType $taxScope)
    {
        $this->taxScope[] = $taxScope;
        return $this;
    }

    /**
     * isset taxScope
     *
     * A ddex:Composite containing details of the ddex:Type of ddex:Tax according to its scope.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxScope($index)
    {
        return isset($this->taxScope[$index]);
    }

    /**
     * unset taxScope
     *
     * A ddex:Composite containing details of the ddex:Type of ddex:Tax according to its scope.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxScope($index)
    {
        unset($this->taxScope[$index]);
    }

    /**
     * Gets as taxScope
     *
     * A ddex:Composite containing details of the ddex:Type of ddex:Tax according to its scope.
     *
     * @return \DedexBundle\Entity\DdexC\TaxScopeType[]
     */
    public function getTaxScope()
    {
        return $this->taxScope;
    }

    /**
     * Sets a new taxScope
     *
     * A ddex:Composite containing details of the ddex:Type of ddex:Tax according to its scope.
     *
     * @param \DedexBundle\Entity\DdexC\TaxScopeType[] $taxScope
     * @return self
     */
    public function setTaxScope(array $taxScope)
    {
        $this->taxScope = $taxScope;
        return $this;
    }
}

