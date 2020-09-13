<?php

namespace DedexBundle\Entity\Ern382;

/**
 * Class representing ConsumerRentalPeriodType
 *
 * A Composite containing details of a Period a DSP
 *  may rent something to a Customer.
 * XSD Type: ConsumerRentalPeriod
 */
class ConsumerRentalPeriodType
{

    /**
     * @var \DateInterval $__value
     */
    private $__value = null;

    /**
     * A Flag indicating whether a Period can
     *  be extended after the end of a Deal (=true) or not (=false). This is
     *  represented in an XML schema as an XML Attribute.
     *
     * @var bool $isExtensible
     */
    private $isExtensible = null;

    /**
     * Construct
     *
     * @param \DateInterval $value
     */
    public function __construct(\DateInterval $value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param \DateInterval $value
     * @return \DateInterval
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
     * Gets as isExtensible
     *
     * A Flag indicating whether a Period can
     *  be extended after the end of a Deal (=true) or not (=false). This is
     *  represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsExtensible()
    {
        return $this->isExtensible;
    }

    /**
     * Sets a new isExtensible
     *
     * A Flag indicating whether a Period can
     *  be extended after the end of a Deal (=true) or not (=false). This is
     *  represented in an XML schema as an XML Attribute.
     *
     * @param bool $isExtensible
     * @return self
     */
    public function setIsExtensible($isExtensible)
    {
        $this->isExtensible = $isExtensible;
        return $this;
    }


}

