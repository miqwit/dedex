<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing TariffReferenceType
 *
 * A ddex:Composite containing details of a ddex:Reference to a ddex:TextDocument containing details of a ddex:Tariff.
 * XSD Type: TariffReference
 */
class TariffReferenceType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The ddex:Language and script of the ddexC:TariffReference (and the ddex:TariffSubReference if applicable) as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The ddex:Reference to a ddex:TextDocument containing more specific details of a ddex:Tariff. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $tariffSubReference
     */
    private $tariffSubReference = null;

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
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script of the ddexC:TariffReference (and the ddex:TariffSubReference if applicable) as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script of the ddexC:TariffReference (and the ddex:TariffSubReference if applicable) as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }

    /**
     * Gets as tariffSubReference
     *
     * The ddex:Reference to a ddex:TextDocument containing more specific details of a ddex:Tariff. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getTariffSubReference()
    {
        return $this->tariffSubReference;
    }

    /**
     * Sets a new tariffSubReference
     *
     * The ddex:Reference to a ddex:TextDocument containing more specific details of a ddex:Tariff. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $tariffSubReference
     * @return self
     */
    public function setTariffSubReference($tariffSubReference)
    {
        $this->tariffSubReference = $tariffSubReference;
        return $this;
    }
}

