<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing BitRateType
 *
 * A ddex:Composite containing a ddex:BitRate and a ddex:UnitOfMeasure.
 * XSD Type: BitRate
 */
class BitRateType
{
    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * The ddex:UnitOfMeasure of the ddexC:BitRate. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $unitOfMeasure
     */
    private $unitOfMeasure = null;

    /**
     * Construct
     *
     * @param float $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param float $value
     * @return float
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as unitOfMeasure
     *
     * The ddex:UnitOfMeasure of the ddexC:BitRate. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->unitOfMeasure;
    }

    /**
     * Sets a new unitOfMeasure
     *
     * The ddex:UnitOfMeasure of the ddexC:BitRate. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $unitOfMeasure
     * @return self
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        $this->unitOfMeasure = $unitOfMeasure;
        return $this;
    }
}

