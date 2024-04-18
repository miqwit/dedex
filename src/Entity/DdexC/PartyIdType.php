<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing PartyIdType
 *
 * A ddex:Composite containing details of a ddex:PartyId. If no ddex:Namespace is given, the ddex:Identifier is a ddex:DdexPartyId (DPID). Note that DPIDs are not normally used to identify ddex:Artists, ddex:Producers or other ddex:Creators.
 * XSD Type: PartyId
 */
class PartyIdType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The ddex:Namespace of the ddexC:PartyId if it belongs to a proprietary ddex:Party xs:ID scheme. If the ddexC:PartyId is a DPID, the ddex:Namespace ddex:Element must not be used. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $namespace
     */
    private $namespace = null;

    /**
     * The ddex:Flag indicating whether the ddexC:PartyId is a ddex:DPID (=True) or not (=False). This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var bool $isDPID
     */
    private $isDPID = null;

    /**
     * The ddex:Flag indicating whether the ddexC:PartyId is an ddex:ISNI (=True) or not (=False). This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var bool $isISNI
     */
    private $isISNI = null;

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
     * Gets as namespace
     *
     * The ddex:Namespace of the ddexC:PartyId if it belongs to a proprietary ddex:Party xs:ID scheme. If the ddexC:PartyId is a DPID, the ddex:Namespace ddex:Element must not be used. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Sets a new namespace
     *
     * The ddex:Namespace of the ddexC:PartyId if it belongs to a proprietary ddex:Party xs:ID scheme. If the ddexC:PartyId is a DPID, the ddex:Namespace ddex:Element must not be used. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $namespace
     * @return self
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
        return $this;
    }

    /**
     * Gets as isDPID
     *
     * The ddex:Flag indicating whether the ddexC:PartyId is a ddex:DPID (=True) or not (=False). This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return bool
     */
    public function getIsDPID()
    {
        return $this->isDPID;
    }

    /**
     * Sets a new isDPID
     *
     * The ddex:Flag indicating whether the ddexC:PartyId is a ddex:DPID (=True) or not (=False). This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param bool $isDPID
     * @return self
     */
    public function setIsDPID($isDPID)
    {
        $this->isDPID = $isDPID;
        return $this;
    }

    /**
     * Gets as isISNI
     *
     * The ddex:Flag indicating whether the ddexC:PartyId is an ddex:ISNI (=True) or not (=False). This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return bool
     */
    public function getIsISNI()
    {
        return $this->isISNI;
    }

    /**
     * Sets a new isISNI
     *
     * The ddex:Flag indicating whether the ddexC:PartyId is an ddex:ISNI (=True) or not (=False). This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param bool $isISNI
     * @return self
     */
    public function setIsISNI($isISNI)
    {
        $this->isISNI = $isISNI;
        return $this;
    }
}

