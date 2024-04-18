<?php

namespace DedexBundle\Entity\Ern371;

/**
 * Class representing AspectRatioType
 *
 * A Composite containing an AspectRatio and an
 *  AspectRatioType.
 * XSD Type: AspectRatio
 */
class AspectRatioType
{
    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * The Type of the AspectRatio. This is
     *  represented in an XML schema as an XML Attribute. If this Attribute is not
     *  provided, it is assumed that the AspectRatio is a
     *  PixelAspectRatio.
     *
     * @var string $aspectRatioType
     */
    private $aspectRatioType = null;

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
     * Gets as aspectRatioType
     *
     * The Type of the AspectRatio. This is
     *  represented in an XML schema as an XML Attribute. If this Attribute is not
     *  provided, it is assumed that the AspectRatio is a
     *  PixelAspectRatio.
     *
     * @return string
     */
    public function getAspectRatioType()
    {
        return $this->aspectRatioType;
    }

    /**
     * Sets a new aspectRatioType
     *
     * The Type of the AspectRatio. This is
     *  represented in an XML schema as an XML Attribute. If this Attribute is not
     *  provided, it is assumed that the AspectRatio is a
     *  PixelAspectRatio.
     *
     * @param string $aspectRatioType
     * @return self
     */
    public function setAspectRatioType($aspectRatioType)
    {
        $this->aspectRatioType = $aspectRatioType;
        return $this;
    }
}

