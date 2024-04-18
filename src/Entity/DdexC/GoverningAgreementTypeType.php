<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing GoverningAgreementTypeType
 *
 * A ddex:Composite containing details of a ddex:GoverningAgreementType.
 * XSD Type: GoverningAgreementType
 */
class GoverningAgreementTypeType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The ddex:Namespace of the ddexC:GoverningAgreementType. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $namespace
     */
    private $namespace = null;

    /**
     * A ddex:UserDefined value of the ddexC:GoverningAgreementType. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $userDefinedValue
     */
    private $userDefinedValue = null;

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
     * Gets as namespace
     *
     * The ddex:Namespace of the ddexC:GoverningAgreementType. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Namespace of the ddexC:GoverningAgreementType. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:UserDefined value of the ddexC:GoverningAgreementType. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:UserDefined value of the ddexC:GoverningAgreementType. This is represented in an XML schema as an XML ddex:Attribute.
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

