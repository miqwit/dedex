<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing PriceType
 *
 * A ddex:Composite containing details of a ddex:Price.
 * XSD Type: Price
 */
class PriceType
{
    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * The ddex:Currency of the ddexC:Price (represented by an ISO 4217 iso4217a:CurrencyCode). This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $currencyCode
     */
    private $currencyCode = null;

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
     * Gets as currencyCode
     *
     * The ddex:Currency of the ddexC:Price (represented by an ISO 4217 iso4217a:CurrencyCode). This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * The ddex:Currency of the ddexC:Price (represented by an ISO 4217 iso4217a:CurrencyCode). This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }
}

