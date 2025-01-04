<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing CalculationTypeType
 *
 * A ddex:Composite containing details of a ddex:CalculationType.
 * XSD Type: CalculationType
 */
class CalculationTypeType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The number indicating the order of the ddexC:CalculationType in a group of ddex:CalculationTypes. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
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
     * Gets as sequenceNumber
     *
     * The number indicating the order of the ddexC:CalculationType in a group of ddex:CalculationTypes. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * The number indicating the order of the ddexC:CalculationType in a group of ddex:CalculationTypes. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }
}

