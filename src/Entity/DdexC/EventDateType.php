<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing EventDateType
 *
 * A ddex:Composite containing details of the Date and ddex:Place of an ddex:Event.
 * XSD Type: EventDate
 */
class EventDateType
{
    /**
     * @var \DateTime $__value
     */
    private $__value = null;

    /**
     * The ddex:Flag indicating whether the reported Date is approximate (=True) or exact (=False). This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var bool $isApproximate
     */
    private $isApproximate = null;

    /**
     * The ddex:Flag indicating whether the ddex:Event being described occurred sometime before the reported Date (=True) or not (=False). This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var bool $isBefore
     */
    private $isBefore = null;

    /**
     * The ddex:Flag indicating whether the ddex:Event being described occurred sometime after the reported Date (=True) or not (=False). This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var bool $isAfter
     */
    private $isAfter = null;

    /**
     * The ddex:Territory in which the ddex:Event occurred (represented by an ISO 3166-1 iso3166a2:TerritoryCode). This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $territoryCode
     */
    private $territoryCode = null;

    /**
     * A ddex:Description of the location in which the ddex:Event occurred. It offers the opportunity to describe a place more precisely than using the iso3166a2:TerritoryCode. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $locationDescription
     */
    private $locationDescription = null;

    /**
     * The ddex:Language and script for the ddex:LocationDescription as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Flag indicating whether the reported Date is approximate (=True) or exact (=False). This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Flag indicating whether the reported Date is approximate (=True) or exact (=False). This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Flag indicating whether the ddex:Event being described occurred sometime before the reported Date (=True) or not (=False). This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Flag indicating whether the ddex:Event being described occurred sometime before the reported Date (=True) or not (=False). This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Flag indicating whether the ddex:Event being described occurred sometime after the reported Date (=True) or not (=False). This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Flag indicating whether the ddex:Event being described occurred sometime after the reported Date (=True) or not (=False). This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Territory in which the ddex:Event occurred (represented by an ISO 3166-1 iso3166a2:TerritoryCode). This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Territory in which the ddex:Event occurred (represented by an ISO 3166-1 iso3166a2:TerritoryCode). This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Description of the location in which the ddex:Event occurred. It offers the opportunity to describe a place more precisely than using the iso3166a2:TerritoryCode. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Description of the location in which the ddex:Event occurred. It offers the opportunity to describe a place more precisely than using the iso3166a2:TerritoryCode. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:LocationDescription as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:LocationDescription as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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

