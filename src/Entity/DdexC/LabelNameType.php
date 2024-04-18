<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing LabelNameType
 *
 * A ddex:Composite containing details of a ddex:LabelName.
 * XSD Type: LabelName
 */
class LabelNameType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The ddex:Language and script of the ddexC:LabelName as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Type of ddex:LabelName. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $labelNameType
     */
    private $labelNameType = null;

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
     * The ddex:Language and script of the ddexC:LabelName as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script of the ddexC:LabelName as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Gets as labelNameType
     *
     * A ddex:Type of ddex:LabelName. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getLabelNameType()
    {
        return $this->labelNameType;
    }

    /**
     * Sets a new labelNameType
     *
     * A ddex:Type of ddex:LabelName. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $labelNameType
     * @return self
     */
    public function setLabelNameType($labelNameType)
    {
        $this->labelNameType = $labelNameType;
        return $this;
    }
}

