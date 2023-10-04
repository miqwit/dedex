<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing CurrentTerritoryCodeType
 *
 * A Composite containing details of a
 *  TerritoryCode.
 * XSD Type: CurrentTerritoryCode
 */
class CurrentTerritoryCodeType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * A standard used for the TerritoryCode.
     *  This is represented in an XML schema as an XML Attribute. If this Attribute is
     *  not provided, it is assumed that the code is a TerritoryCode in accordance with
     *  ISO 3166-1 Alpha 2 standard (or Worldwide).
     *
     * @var string $identifierType
     */
    private $identifierType = null;

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
     * Gets as identifierType
     *
     * A standard used for the TerritoryCode.
     *  This is represented in an XML schema as an XML Attribute. If this Attribute is
     *  not provided, it is assumed that the code is a TerritoryCode in accordance with
     *  ISO 3166-1 Alpha 2 standard (or Worldwide).
     *
     * @return string
     */
    public function getIdentifierType()
    {
        return $this->identifierType;
    }

    /**
     * Sets a new identifierType
     *
     * A standard used for the TerritoryCode.
     *  This is represented in an XML schema as an XML Attribute. If this Attribute is
     *  not provided, it is assumed that the code is a TerritoryCode in accordance with
     *  ISO 3166-1 Alpha 2 standard (or Worldwide).
     *
     * @param string $identifierType
     * @return self
     */
    public function setIdentifierType($identifierType)
    {
        $this->identifierType = $identifierType;
        return $this;
    }
}

