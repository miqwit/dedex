<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing PartyRelationshipTypeType
 *
 * A Composite containing details of a PartyRelationshipType.
 * XSD Type: PartyRelationshipType
 */
class PartyRelationshipTypeType
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The Namespace of the PartyRelationshipType. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $namespace
     */
    private $namespace = null;

    /**
     * A UserDefined value of the PartyRelationshipType. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $userDefinedValue
     */
    private $userDefinedValue = null;

    /**
     * A Flag indicating whether this information may be shared (=true) or not (=false). If the Flag is not present, the information may be shared.
     *
     * @var bool $mayBeShared
     */
    private $mayBeShared = null;

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
     * The Namespace of the PartyRelationshipType. This is represented in an XML schema as an XML Attribute.
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
     * The Namespace of the PartyRelationshipType. This is represented in an XML schema as an XML Attribute.
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
     * A UserDefined value of the PartyRelationshipType. This is represented in an XML schema as an XML Attribute.
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
     * A UserDefined value of the PartyRelationshipType. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $userDefinedValue
     * @return self
     */
    public function setUserDefinedValue($userDefinedValue)
    {
        $this->userDefinedValue = $userDefinedValue;
        return $this;
    }

    /**
     * Gets as mayBeShared
     *
     * A Flag indicating whether this information may be shared (=true) or not (=false). If the Flag is not present, the information may be shared.
     *
     * @return bool
     */
    public function getMayBeShared()
    {
        return $this->mayBeShared;
    }

    /**
     * Sets a new mayBeShared
     *
     * A Flag indicating whether this information may be shared (=true) or not (=false). If the Flag is not present, the information may be shared.
     *
     * @param bool $mayBeShared
     * @return self
     */
    public function setMayBeShared($mayBeShared)
    {
        $this->mayBeShared = $mayBeShared;
        return $this;
    }


}

