<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing RightsTypeType
 *
 * A ddex:Composite containing details of a RightsType.
 * XSD Type: RightsType
 */
class RightsTypeType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * A ddex:Territory to which the ddexC:RightsType applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode). The ddexC:RightsType is defined according to the jurisdiction of this ddex:Territory.
     *
     * @var string $territoryCode
     */
    private $territoryCode = null;

    /**
     * The ddex:Namespace of the ddexC:RightsType. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $namespace
     */
    private $namespace = null;

    /**
     * A ddex:UserDefined value of the ddexC:RightsType. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Gets as territoryCode
     *
     * A ddex:Territory to which the ddexC:RightsType applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode). The ddexC:RightsType is defined according to the jurisdiction of this ddex:Territory.
     *
     * @return string
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A ddex:Territory to which the ddexC:RightsType applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode). The ddexC:RightsType is defined according to the jurisdiction of this ddex:Territory.
     *
     * @param string $territoryCode
     * @return self
     */
    public function setTerritoryCode($territoryCode)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Gets as namespace
     *
     * The ddex:Namespace of the ddexC:RightsType. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Namespace of the ddexC:RightsType. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:UserDefined value of the ddexC:RightsType. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:UserDefined value of the ddexC:RightsType. This is represented in an XML schema as an XML ddex:Attribute.
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

