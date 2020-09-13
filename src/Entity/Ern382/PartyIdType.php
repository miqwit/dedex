<?php

namespace DedexBundle\Entity\Ern382;

/**
 * Class representing PartyIdType
 *
 * A Composite containing details of a PartyId. If
 *  no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not
 *  normally used to identify Artists, Producers or other Creators.
 * XSD Type: PartyId
 */
class PartyIdType
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The Namespace of the PartyId if it
     *  belongs to a proprietary Party xs:ID scheme. If the PartyId is a DPID, the
     *  Namespace Element must not be used. This is represented in an XML schema as an
     *  XML Attribute.
     *
     * @var string $namespace
     */
    private $namespace = null;

    /**
     * The Flag indicating whether the PartyId
     *  is a DPID (=true) or not (=false). This is represented in an XML schema as an
     *  XML Attribute.
     *
     * @var bool $isDPID
     */
    private $isDPID = null;

    /**
     * The Flag indicating whether the PartyId
     *  is an ISNI (=true) or not (=false). This is represented in an XML schema as an
     *  XML Attribute.
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
     * The Namespace of the PartyId if it
     *  belongs to a proprietary Party xs:ID scheme. If the PartyId is a DPID, the
     *  Namespace Element must not be used. This is represented in an XML schema as an
     *  XML Attribute.
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
     * The Namespace of the PartyId if it
     *  belongs to a proprietary Party xs:ID scheme. If the PartyId is a DPID, the
     *  Namespace Element must not be used. This is represented in an XML schema as an
     *  XML Attribute.
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
     * The Flag indicating whether the PartyId
     *  is a DPID (=true) or not (=false). This is represented in an XML schema as an
     *  XML Attribute.
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
     * The Flag indicating whether the PartyId
     *  is a DPID (=true) or not (=false). This is represented in an XML schema as an
     *  XML Attribute.
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
     * The Flag indicating whether the PartyId
     *  is an ISNI (=true) or not (=false). This is represented in an XML schema as an
     *  XML Attribute.
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
     * The Flag indicating whether the PartyId
     *  is an ISNI (=true) or not (=false). This is represented in an XML schema as an
     *  XML Attribute.
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

