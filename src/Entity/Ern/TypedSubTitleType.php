<?php

namespace DedexBundle\Entity\Ern;

/**
 * Class representing TypedSubTitleType
 *
 * A Composite containing details of a SubTitle,
 *  including Titles of Versions used to differentiate different versions of the same Title,
 *  as required by the GRid and ISRC ReferenceDescriptiveMetadataSets.
 * XSD Type: TypedSubTitle
 */
class TypedSubTitleType
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The Language and script of the SubTitle
     *  as defined in IETF RfC 5646. The default is the same as indicated for the
     *  containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Type of the SubTitle which defines
     *  its origin or the function it fulfils. This is represented in an XML schema as
     *  an XML Attribute.
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
     * The Language and script of the SubTitle
     *  as defined in IETF RfC 5646. The default is the same as indicated for the
     *  containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
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
     * The Language and script of the SubTitle
     *  as defined in IETF RfC 5646. The default is the same as indicated for the
     *  containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
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
     * A Type of the SubTitle which defines
     *  its origin or the function it fulfils. This is represented in an XML schema as
     *  an XML Attribute.
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
     * A Type of the SubTitle which defines
     *  its origin or the function it fulfils. This is represented in an XML schema as
     *  an XML Attribute.
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

