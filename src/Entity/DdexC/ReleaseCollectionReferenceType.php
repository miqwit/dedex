<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing ReleaseCollectionReferenceType
 *
 * A ddex:Composite containing details of a ddex:ReleaseCollectionReference.
 * XSD Type: ReleaseCollectionReference
 */
class ReleaseCollectionReferenceType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * A ddex:Type of ddex:Collection in the context of a ddex:Release. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Type of ddex:Collection in the context of a ddex:Release. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Type of ddex:Collection in the context of a ddex:Release. This is represented in an XML schema as an XML ddex:Attribute.
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

