<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing EventDateTimeType
 *
 * A Composite containing details of the DateTime and Place of an Event.
 * XSD Type: EventDateTime
 */
class EventDateTimeType
{

    /**
     * @var \DateTime $__value
     */
    private $__value = null;

    /**
     * The Flag indicating whether the reported DateTime is approximate (=true) or exact (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isApproximate
     */
    private $isApproximate = null;

    /**
     * The Flag indicating whether the Event being described occurred sometime before the reported DateTime (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isBefore
     */
    private $isBefore = null;

    /**
     * The Flag indicating whether the Event being described occurred sometime after the reported DateTime (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isAfter
     */
    private $isAfter = null;

    /**
     * The Territory in which the Event occurred. This is represented in an XML schema as an XML Attribute. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string $territoryCode
     */
    private $territoryCode = null;

    /**
     * A Description of the location in which the Event occurred. It offers the opportunity to describe a place more precisely than using the TerritoryCode. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $locationDescription
     */
    private $locationDescription = null;

    /**
     * The Language and script for the LocationDescription as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * Construct
     *
     * @param \DateTime $value
     */
    public function __construct(\DateTime $value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param \DateTime $value
     * @return \DateTime
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
     * The Flag indicating whether the reported DateTime is approximate (=true) or exact (=false). This is represented in an XML schema as an XML Attribute.
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
     * The Flag indicating whether the reported DateTime is approximate (=true) or exact (=false). This is represented in an XML schema as an XML Attribute.
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
     * Gets as isBefore
     *
     * The Flag indicating whether the Event being described occurred sometime before the reported DateTime (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsBefore()
    {
        return $this->isBefore;
    }

    /**
     * Sets a new isBefore
     *
     * The Flag indicating whether the Event being described occurred sometime before the reported DateTime (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isBefore
     * @return self
     */
    public function setIsBefore($isBefore)
    {
        $this->isBefore = $isBefore;
        return $this;
    }

    /**
     * Gets as isAfter
     *
     * The Flag indicating whether the Event being described occurred sometime after the reported DateTime (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsAfter()
    {
        return $this->isAfter;
    }

    /**
     * Sets a new isAfter
     *
     * The Flag indicating whether the Event being described occurred sometime after the reported DateTime (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isAfter
     * @return self
     */
    public function setIsAfter($isAfter)
    {
        $this->isAfter = $isAfter;
        return $this;
    }

    /**
     * Gets as territoryCode
     *
     * The Territory in which the Event occurred. This is represented in an XML schema as an XML Attribute. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * The Territory in which the Event occurred. This is represented in an XML schema as an XML Attribute. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $territoryCode
     * @return self
     */
    public function setTerritoryCode($territoryCode)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Gets as locationDescription
     *
     * A Description of the location in which the Event occurred. It offers the opportunity to describe a place more precisely than using the TerritoryCode. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getLocationDescription()
    {
        return $this->locationDescription;
    }

    /**
     * Sets a new locationDescription
     *
     * A Description of the location in which the Event occurred. It offers the opportunity to describe a place more precisely than using the TerritoryCode. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $locationDescription
     * @return self
     */
    public function setLocationDescription($locationDescription)
    {
        $this->locationDescription = $locationDescription;
        return $this;
    }

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the LocationDescription as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The Language and script for the LocationDescription as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }


}

