<?php

namespace DedexBundle\Entity\Ern;

/**
 * Class representing ICPNType
 *
 * A Composite containing details of an
 *  ICPN.
 * XSD Type: ICPN
 */
class ICPNType
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The Flag indicating whether the ICPN is
     *  specifically an EAN (=true) or a UPC (=false). This is represented in an XML
     *  schema as an XML Attribute. This attribute is deprecated. DDEX advises that it
     *  will be removed at a future date and therefore recommends against using
     *  it.
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
     * The Flag indicating whether the ICPN is
     *  specifically an EAN (=true) or a UPC (=false). This is represented in an XML
     *  schema as an XML Attribute. This attribute is deprecated. DDEX advises that it
     *  will be removed at a future date and therefore recommends against using
     *  it.
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
     * The Flag indicating whether the ICPN is
     *  specifically an EAN (=true) or a UPC (=false). This is represented in an XML
     *  schema as an XML Attribute. This attribute is deprecated. DDEX advises that it
     *  will be removed at a future date and therefore recommends against using
     *  it.
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

