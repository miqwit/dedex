<?php

namespace DedexBundle\Entity\Ern382;

/**
 * Class representing ReleaseCollectionReferenceType
 *
 * A Composite containing details of a
 *  ReleaseCollectionReference.
 * XSD Type: ReleaseCollectionReference
 */
class ReleaseCollectionReferenceType
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * A Type of Collection in the context of
     *  a Release. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $releaseResourceType
     */
    private $releaseResourceType = null;

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
     * Gets as releaseResourceType
     *
     * A Type of Collection in the context of
     *  a Release. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @return string
     */
    public function getReleaseResourceType()
    {
        return $this->releaseResourceType;
    }

    /**
     * Sets a new releaseResourceType
     *
     * A Type of Collection in the context of
     *  a Release. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @param string $releaseResourceType
     * @return self
     */
    public function setReleaseResourceType($releaseResourceType)
    {
        $this->releaseResourceType = $releaseResourceType;
        return $this;
    }


}

