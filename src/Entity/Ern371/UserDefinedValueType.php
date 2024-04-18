<?php

namespace DedexBundle\Entity\Ern371;

/**
 * Class representing UserDefinedValueType
 *
 * A Composite containing details of a
 *  UserDefinedValue.
 * XSD Type: UserDefinedValue
 */
class UserDefinedValueType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The Namespace of the UserDefinedValue.
     *  This is represented in an XML schema as an XML Attribute.
     *
     * @var string $namespace
     */
    private $namespace = null;

    /**
     * A textual Description of the Type or
     *  function of the UserDefinedValue. This is represented in an XML schema as an
     *  XML Attribute.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * The Language and script of the
     *  Description as defined in IETF RfC 5646. The default is the same as indicated
     *  for the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

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
     * The Namespace of the UserDefinedValue.
     *  This is represented in an XML schema as an XML Attribute.
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
     * The Namespace of the UserDefinedValue.
     *  This is represented in an XML schema as an XML Attribute.
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
     * Gets as description
     *
     * A textual Description of the Type or
     *  function of the UserDefinedValue. This is represented in an XML schema as an
     *  XML Attribute.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A textual Description of the Type or
     *  function of the UserDefinedValue. This is represented in an XML schema as an
     *  XML Attribute.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script of the
     *  Description as defined in IETF RfC 5646. The default is the same as indicated
     *  for the containing composite. Language and Script are provided as
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
     *  Description as defined in IETF RfC 5646. The default is the same as indicated
     *  for the containing composite. Language and Script are provided as
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
}

