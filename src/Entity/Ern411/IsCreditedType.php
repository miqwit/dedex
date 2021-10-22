<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing IsCreditedType
 *
 * A Composite containing details of a Flag indicating whether the Contributor is credited as having played a role in creating the Recording.
 * XSD Type: IsCredited
 */
class IsCreditedType
{

    /**
     * @var bool $__value
     */
    private $__value = null;

    /**
     * A Flag indicating whether this information may be shared (=true) or not (=false). If the Flag is not present, the Contributor may be credited.
     *
     * @var bool $mayBeShared
     */
    private $mayBeShared = null;

    /**
     * Construct
     *
     * @param bool $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param bool $value
     * @return bool
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
     * Gets as mayBeShared
     *
     * A Flag indicating whether this information may be shared (=true) or not (=false). If the Flag is not present, the Contributor may be credited.
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
     * A Flag indicating whether this information may be shared (=true) or not (=false). If the Flag is not present, the Contributor may be credited.
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

