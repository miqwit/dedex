<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing RightsTypeType
 *
 * A Composite containing details of a
 *  RightsType.
 * XSD Type: RightsType
 */
class RightsTypeType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * A Territory to which the RightsType
     *  applies. The RightsType is defined according to the jurisdiction of this
     *  Territory. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly
     *  encouraged; TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
     *
     * @var mixed $territoryCode
     */
    private $territoryCode = null;

    /**
     * The Namespace of the RightsType. This
     *  is represented in an XML schema as an XML Attribute.
     *
     * @var string $namespace
     */
    private $namespace = null;

    /**
     * A UserDefined value of the RightsType.
     *  This is represented in an XML schema as an XML Attribute.
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
     * A Territory to which the RightsType
     *  applies. The RightsType is defined according to the jurisdiction of this
     *  Territory. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly
     *  encouraged; TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
     *
     * @return mixed
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory to which the RightsType
     *  applies. The RightsType is defined according to the jurisdiction of this
     *  Territory. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly
     *  encouraged; TIS TerritoryCodes should only be used if both MessageSender and
     *  MessageRecipient are familiar with this standard.
     *
     * @param mixed $territoryCode
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
     * The Namespace of the RightsType. This
     *  is represented in an XML schema as an XML Attribute.
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
     * The Namespace of the RightsType. This
     *  is represented in an XML schema as an XML Attribute.
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
     * A UserDefined value of the RightsType.
     *  This is represented in an XML schema as an XML Attribute.
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
     * A UserDefined value of the RightsType.
     *  This is represented in an XML schema as an XML Attribute.
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

