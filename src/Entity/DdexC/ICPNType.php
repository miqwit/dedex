<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing ICPNType
 *
 * A ddex:Composite containing details of an ddex:ICPN.
 * XSD Type: ICPN
 */
class ICPNType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The ddex:Flag indicating whether the ddexC:ICPN is specifically an ddex:EAN (=True) or a ddex:UPC (=False). This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var bool $isEan
     */
    private $isEan = null;

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
     * Gets as isEan
     *
     * The ddex:Flag indicating whether the ddexC:ICPN is specifically an ddex:EAN (=True) or a ddex:UPC (=False). This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return bool
     */
    public function getIsEan()
    {
        return $this->isEan;
    }

    /**
     * Sets a new isEan
     *
     * The ddex:Flag indicating whether the ddexC:ICPN is specifically an ddex:EAN (=True) or a ddex:UPC (=False). This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param bool $isEan
     * @return self
     */
    public function setIsEan($isEan)
    {
        $this->isEan = $isEan;
        return $this;
    }
}

