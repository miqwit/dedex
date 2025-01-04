<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing PercentageType
 *
 * A Composite containing details of a PercentageRate.
 * XSD Type: Percentage
 */
class PercentageType
{
    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * A Flag indicating whether a PercentageRate is given as a value in the range [0,1] (=true) instead of a value in the range [0,100] (=false). This is represented in an XML schema as an XML Attribute. Absence of this attribute is synonymous with false.
     *
     * @var bool $hasMaxValueOfOne
     */
    private $hasMaxValueOfOne = null;

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
     * Gets as hasMaxValueOfOne
     *
     * A Flag indicating whether a PercentageRate is given as a value in the range [0,1] (=true) instead of a value in the range [0,100] (=false). This is represented in an XML schema as an XML Attribute. Absence of this attribute is synonymous with false.
     *
     * @return bool
     */
    public function getHasMaxValueOfOne()
    {
        return $this->hasMaxValueOfOne;
    }

    /**
     * Sets a new hasMaxValueOfOne
     *
     * A Flag indicating whether a PercentageRate is given as a value in the range [0,1] (=true) instead of a value in the range [0,100] (=false). This is represented in an XML schema as an XML Attribute. Absence of this attribute is synonymous with false.
     *
     * @param bool $hasMaxValueOfOne
     * @return self
     */
    public function setHasMaxValueOfOne($hasMaxValueOfOne)
    {
        $this->hasMaxValueOfOne = $hasMaxValueOfOne;
        return $this;
    }
}

