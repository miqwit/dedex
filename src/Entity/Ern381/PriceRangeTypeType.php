<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing PriceRangeTypeType
 *
 * A Composite containing details of a PriceRangeType.
 * XSD Type: PriceRangeType
 */
class PriceRangeTypeType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The Namespace of the PriceRangeType. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $namespace
     */
    private $namespace = null;

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
     * The Namespace of the PriceRangeType. This is represented in an XML schema as an XML Attribute.
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
     * The Namespace of the PriceRangeType. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $namespace
     * @return self
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
        return $this;
    }
}

