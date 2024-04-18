<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing TariffReferenceType
 *
 * A Composite containing details of a Reference to a TextDocument containing details of a Tariff.
 * XSD Type: TariffReference
 */
class TariffReferenceType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The Language and script of the TariffReference (and the TariffSubReference if applicable) as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The Reference to a TextDocument containing more specific details of a Tariff. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script of the TariffReference (and the TariffSubReference if applicable) as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script of the TariffReference (and the TariffSubReference if applicable) as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Reference to a TextDocument containing more specific details of a Tariff. This is represented in an XML schema as an XML Attribute.
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
     * The Reference to a TextDocument containing more specific details of a Tariff. This is represented in an XML schema as an XML Attribute.
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

