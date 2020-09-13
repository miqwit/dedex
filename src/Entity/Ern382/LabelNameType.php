<?php

namespace DedexBundle\Entity\Ern382;

/**
 * Class representing LabelNameType
 *
 * A Composite containing details of a
 *  LabelName.
 * XSD Type: LabelName
 */
class LabelNameType
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The Language and script of the
     *  LabelName as defined in IETF RfC 5646. The default is the same as indicated for
     *  the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Type of LabelName. This is
     *  represented in an XML schema as an XML Attribute.
     *
     * @var string $labelNameType
     */
    private $labelNameType = null;

    /**
     * The Namespace of the ReleaseType. This
     *  is represented in an XML schema as an XML Attribute.
     *
     * @var string $namespace
     */
    private $namespace = null;

    /**
     * A UserDefined value of the ReleaseType.
     *  This is represented in an XML schema as an XML Attribute.
     *
     * @var string $userDefinedValue
     */
    private $userDefinedValue = null;

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
     * The Language and script of the
     *  LabelName as defined in IETF RfC 5646. The default is the same as indicated for
     *  the containing composite. Language and Script are provided as
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
     * The Language and script of the
     *  LabelName as defined in IETF RfC 5646. The default is the same as indicated for
     *  the containing composite. Language and Script are provided as
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
     * Gets as labelNameType
     *
     * A Type of LabelName. This is
     *  represented in an XML schema as an XML Attribute.
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
     * A Type of LabelName. This is
     *  represented in an XML schema as an XML Attribute.
     *
     * @param string $labelNameType
     * @return self
     */
    public function setLabelNameType($labelNameType)
    {
        $this->labelNameType = $labelNameType;
        return $this;
    }

    /**
     * Gets as namespace
     *
     * The Namespace of the ReleaseType. This
     *  is represented in an XML schema as an XML Attribute.
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
     * The Namespace of the ReleaseType. This
     *  is represented in an XML schema as an XML Attribute.
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
     * Gets as userDefinedValue
     *
     * A UserDefined value of the ReleaseType.
     *  This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getUserDefinedValue()
    {
        return $this->userDefinedValue;
    }

    /**
     * Sets a new userDefinedValue
     *
     * A UserDefined value of the ReleaseType.
     *  This is represented in an XML schema as an XML Attribute.
     *
     * @param string $userDefinedValue
     * @return self
     */
    public function setUserDefinedValue($userDefinedValue)
    {
        $this->userDefinedValue = $userDefinedValue;
        return $this;
    }


}

