<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing AspectRatioType
 *
 * A Composite containing an AspectRatio and an AspectRatioType.
 * XSD Type: AspectRatio
 */
class AspectRatioType
{
    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * The Type of the AspectRatio. This is represented in an XML schema as an XML Attribute. If this Attribute is not provided, it is assumed that the AspectRatio is a PixelAspectRatio.
     *
     * @var string $aspectRatioType
     */
    private $aspectRatioType = null;

    /**
     * The Flag indicating whether the AspectRatio value applies to a cropped resource (=true) or not (=false). If the Flag is not set, it is assumed that this is the ratio of the un-cropped resource. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $appliesToCroppedResource
     */
    private $appliesToCroppedResource = null;

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
     * The Type of the AspectRatio. This is represented in an XML schema as an XML Attribute. If this Attribute is not provided, it is assumed that the AspectRatio is a PixelAspectRatio.
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
     * The Type of the AspectRatio. This is represented in an XML schema as an XML Attribute. If this Attribute is not provided, it is assumed that the AspectRatio is a PixelAspectRatio.
     *
     * @param string $aspectRatioType
     * @return self
     */
    public function setAspectRatioType($aspectRatioType)
    {
        $this->aspectRatioType = $aspectRatioType;
        return $this;
    }

    /**
     * Gets as appliesToCroppedResource
     *
     * The Flag indicating whether the AspectRatio value applies to a cropped resource (=true) or not (=false). If the Flag is not set, it is assumed that this is the ratio of the un-cropped resource. This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getAppliesToCroppedResource()
    {
        return $this->appliesToCroppedResource;
    }

    /**
     * Sets a new appliesToCroppedResource
     *
     * The Flag indicating whether the AspectRatio value applies to a cropped resource (=true) or not (=false). If the Flag is not set, it is assumed that this is the ratio of the un-cropped resource. This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $appliesToCroppedResource
     * @return self
     */
    public function setAppliesToCroppedResource($appliesToCroppedResource)
    {
        $this->appliesToCroppedResource = $appliesToCroppedResource;
        return $this;
    }
}

