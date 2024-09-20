<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing EventDateWithDefaultType
 *
 * A Composite containing details of the Date and Place of an Event.
 * Explanatory Note: This Composite is named EventDateWithDefault to disambiguate it from the basic EventDate Composite.
 * XSD Type: EventDateWithDefault
 */
class EventDateWithDefaultType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The Flag indicating whether the reported Date is approximate (=true) or exact (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isApproximate
     */
    private $isApproximate = null;

    /**
     * The Territory in which the Event occurred. This is represented in an XML schema as an XML Attribute. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string $applicableTerritoryCode
     */
    private $applicableTerritoryCode = null;

    /**
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isDefault
     */
    private $isDefault = null;

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
     * Gets as isApproximate
     *
     * The Flag indicating whether the reported Date is approximate (=true) or exact (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsApproximate()
    {
        return $this->isApproximate;
    }

    /**
     * Sets a new isApproximate
     *
     * The Flag indicating whether the reported Date is approximate (=true) or exact (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isApproximate
     * @return self
     */
    public function setIsApproximate($isApproximate)
    {
        $this->isApproximate = $isApproximate;
        return $this;
    }

    /**
     * Gets as applicableTerritoryCode
     *
     * The Territory in which the Event occurred. This is represented in an XML schema as an XML Attribute. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string
     */
    public function getApplicableTerritoryCode()
    {
        return $this->applicableTerritoryCode;
    }

    /**
     * Sets a new applicableTerritoryCode
     *
     * The Territory in which the Event occurred. This is represented in an XML schema as an XML Attribute. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $applicableTerritoryCode
     * @return self
     */
    public function setApplicableTerritoryCode($applicableTerritoryCode)
    {
        $this->applicableTerritoryCode = $applicableTerritoryCode;
        return $this;
    }

    /**
     * Gets as isDefault
     *
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Sets a new isDefault
     *
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isDefault
     * @return self
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
        return $this;
    }
}

