<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing AppliedRoyaltyRateType
 *
 * A ddex:Composite containing details of an applied ddex:RoyaltyRate.
 * XSD Type: AppliedRoyaltyRate
 */
class AppliedRoyaltyRateType
{
    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * The ddex:Type of the numeric value specified for the ddex:RoyaltyRate. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $valueType
     */
    private $valueType = null;

    /**
     * A ddex:Type of ddex:RoyaltyRate upon which the per unit royalty is calculated.
     *
     * @var string $royaltyRateType
     */
    private $royaltyRateType = null;

    /**
     * The ddex:Namespace of the ddex:RoyaltyRateType if it is ddex:UserDefined. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $namespace
     */
    private $namespace = null;

    /**
     * A ddex:UserDefined value of the ddex:RoyaltyRateType if it is ddex:UserDefined. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $userDefinedValue
     */
    private $userDefinedValue = null;

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
     * Gets as valueType
     *
     * The ddex:Type of the numeric value specified for the ddex:RoyaltyRate. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getValueType()
    {
        return $this->valueType;
    }

    /**
     * Sets a new valueType
     *
     * The ddex:Type of the numeric value specified for the ddex:RoyaltyRate. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $valueType
     * @return self
     */
    public function setValueType($valueType)
    {
        $this->valueType = $valueType;
        return $this;
    }

    /**
     * Gets as royaltyRateType
     *
     * A ddex:Type of ddex:RoyaltyRate upon which the per unit royalty is calculated.
     *
     * @return string
     */
    public function getRoyaltyRateType()
    {
        return $this->royaltyRateType;
    }

    /**
     * Sets a new royaltyRateType
     *
     * A ddex:Type of ddex:RoyaltyRate upon which the per unit royalty is calculated.
     *
     * @param string $royaltyRateType
     * @return self
     */
    public function setRoyaltyRateType($royaltyRateType)
    {
        $this->royaltyRateType = $royaltyRateType;
        return $this;
    }

    /**
     * Gets as namespace
     *
     * The ddex:Namespace of the ddex:RoyaltyRateType if it is ddex:UserDefined. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Sets a new namespace
     *
     * The ddex:Namespace of the ddex:RoyaltyRateType if it is ddex:UserDefined. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $namespace
     * @return self
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
        return $this;
    }

    /**
     * Gets as userDefinedValue
     *
     * A ddex:UserDefined value of the ddex:RoyaltyRateType if it is ddex:UserDefined. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getUserDefinedValue()
    {
        return $this->userDefinedValue;
    }

    /**
     * Sets a new userDefinedValue
     *
     * A ddex:UserDefined value of the ddex:RoyaltyRateType if it is ddex:UserDefined. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $userDefinedValue
     * @return self
     */
    public function setUserDefinedValue($userDefinedValue)
    {
        $this->userDefinedValue = $userDefinedValue;
        return $this;
    }
}

