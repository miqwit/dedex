<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing TypedSubTitleType
 *
 * A ddex:Composite containing details of a ddex:SubTitle, including ddex:Titles of ddex:Versions used to differentiate different versions of the same ddex:Title, as required by the ddex:GRid and ddex:ISRC ddex:ReferenceDescriptiveMetadataSets.
 * XSD Type: TypedSubTitle
 */
class TypedSubTitleType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The ddex:Language and script of the ddexC:SubTitle as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Type of the ddexC:SubTitle which defines its origin or the function it fulfils. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $subTitleType
     */
    private $subTitleType = null;

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
     * The ddex:Language and script of the ddexC:SubTitle as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script of the ddexC:SubTitle as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Gets as subTitleType
     *
     * A ddex:Type of the ddexC:SubTitle which defines its origin or the function it fulfils. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getSubTitleType()
    {
        return $this->subTitleType;
    }

    /**
     * Sets a new subTitleType
     *
     * A ddex:Type of the ddexC:SubTitle which defines its origin or the function it fulfils. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $subTitleType
     * @return self
     */
    public function setSubTitleType($subTitleType)
    {
        $this->subTitleType = $subTitleType;
        return $this;
    }
}

