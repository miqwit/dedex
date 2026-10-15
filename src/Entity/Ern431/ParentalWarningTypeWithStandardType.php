<?php

namespace DedexBundle\Entity\Ern431;

/**
 * Class representing ParentalWarningTypeWithStandardType
 *
 * A Composite containing details of a ParentalWarningType.
 * Explanatory Note: This Composite is named ParentalWarningTypeWithStandard to disambiguate it from the basic ParentalWarningType Composite.
 * XSD Type: ParentalWarningTypeWithStandard
 */
class ParentalWarningTypeWithStandardType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * A Territory to which the ParentalWarningType applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $applicableTerritoryCode
     */
    private $applicableTerritoryCode = null;

    /**
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isDefault
     */
    private $isDefault = null;

    /**
     * The Namespace of the ParentalWarningType. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $typeNamespace
     */
    private $typeNamespace = null;

    /**
     * A UserDefined value of the ParentalWarningType. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $typeUserDefinedValue
     */
    private $typeUserDefinedValue = null;

    /**
     * The ParentalWarningStandard that applies to the ParentalWarningType. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $parentalWarningStandard
     */
    private $parentalWarningStandard = null;

    /**
     * The Namespace of the ParentalWarningStandard. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $standardNamespace
     */
    private $standardNamespace = null;

    /**
     * A UserDefined value of the ParentalWarningStandard. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $standardUserDefinedValue
     */
    private $standardUserDefinedValue = null;

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
     * Gets as applicableTerritoryCode
     *
     * A Territory to which the ParentalWarningType applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getApplicableTerritoryCode()
    {
        return $this->applicableTerritoryCode;
    }

    /**
     * Sets a new applicableTerritoryCode
     *
     * A Territory to which the ParentalWarningType applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $applicableTerritoryCode
     * @return self
     */
    public function setApplicableTerritoryCode($applicableTerritoryCode)
    {
        $this->applicableTerritoryCode = $applicableTerritoryCode;
        return $this;
    }

    /**
     * Gets as isDefault
     *
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Sets a new isDefault
     *
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isDefault
     * @return self
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * Gets as typeNamespace
     *
     * The Namespace of the ParentalWarningType. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getTypeNamespace()
    {
        return $this->typeNamespace;
    }

    /**
     * Sets a new typeNamespace
     *
     * The Namespace of the ParentalWarningType. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $typeNamespace
     * @return self
     */
    public function setTypeNamespace($typeNamespace)
    {
        $this->typeNamespace = $typeNamespace;
        return $this;
    }

    /**
     * Gets as typeUserDefinedValue
     *
     * A UserDefined value of the ParentalWarningType. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getTypeUserDefinedValue()
    {
        return $this->typeUserDefinedValue;
    }

    /**
     * Sets a new typeUserDefinedValue
     *
     * A UserDefined value of the ParentalWarningType. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $typeUserDefinedValue
     * @return self
     */
    public function setTypeUserDefinedValue($typeUserDefinedValue)
    {
        $this->typeUserDefinedValue = $typeUserDefinedValue;
        return $this;
    }

    /**
     * Gets as parentalWarningStandard
     *
     * The ParentalWarningStandard that applies to the ParentalWarningType. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getParentalWarningStandard()
    {
        return $this->parentalWarningStandard;
    }

    /**
     * Sets a new parentalWarningStandard
     *
     * The ParentalWarningStandard that applies to the ParentalWarningType. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $parentalWarningStandard
     * @return self
     */
    public function setParentalWarningStandard($parentalWarningStandard)
    {
        $this->parentalWarningStandard = $parentalWarningStandard;
        return $this;
    }

    /**
     * Gets as standardNamespace
     *
     * The Namespace of the ParentalWarningStandard. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getStandardNamespace()
    {
        return $this->standardNamespace;
    }

    /**
     * Sets a new standardNamespace
     *
     * The Namespace of the ParentalWarningStandard. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $standardNamespace
     * @return self
     */
    public function setStandardNamespace($standardNamespace)
    {
        $this->standardNamespace = $standardNamespace;
        return $this;
    }

    /**
     * Gets as standardUserDefinedValue
     *
     * A UserDefined value of the ParentalWarningStandard. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getStandardUserDefinedValue()
    {
        return $this->standardUserDefinedValue;
    }

    /**
     * Sets a new standardUserDefinedValue
     *
     * A UserDefined value of the ParentalWarningStandard. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $standardUserDefinedValue
     * @return self
     */
    public function setStandardUserDefinedValue($standardUserDefinedValue)
    {
        $this->standardUserDefinedValue = $standardUserDefinedValue;
        return $this;
    }
}

