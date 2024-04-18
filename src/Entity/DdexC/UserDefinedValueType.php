<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing UserDefinedValueType
 *
 * A ddex:Composite containing details of a ddex:UserDefinedValue.
 * XSD Type: UserDefinedValue
 */
class UserDefinedValueType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The ddex:Namespace of the ddexC:UserDefinedValue. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $namespace
     */
    private $namespace = null;

    /**
     * A textual ddex:Description of the ddex:Type or function of the ddexC:UserDefinedValue. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * The ddex:Language and script of the ddex:Description as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Namespace of the ddexC:UserDefinedValue. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Namespace of the ddexC:UserDefinedValue. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A textual ddex:Description of the ddex:Type or function of the ddexC:UserDefinedValue. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A textual ddex:Description of the ddex:Type or function of the ddexC:UserDefinedValue. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script of the ddex:Description as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script of the ddex:Description as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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

