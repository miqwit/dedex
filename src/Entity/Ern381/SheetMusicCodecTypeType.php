<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing SheetMusicCodecTypeType
 *
 * A Composite containing details of a SheetMusicCodecType.
 * XSD Type: SheetMusicCodecType
 */
class SheetMusicCodecTypeType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The Identifier of the Version of the SheetMusicCodecType. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $version
     */
    private $version = null;

    /**
     * The Namespace of the SheetMusicCodecType. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $namespace
     */
    private $namespace = null;

    /**
     * A UserDefined value of the SheetMusicCodecType. This is represented in an XML schema as an XML Attribute.
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
     * Gets as version
     *
     * The Identifier of the Version of the SheetMusicCodecType. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The Identifier of the Version of the SheetMusicCodecType. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as namespace
     *
     * The Namespace of the SheetMusicCodecType. This is represented in an XML schema as an XML Attribute.
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
     * The Namespace of the SheetMusicCodecType. This is represented in an XML schema as an XML Attribute.
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
     * A UserDefined value of the SheetMusicCodecType. This is represented in an XML schema as an XML Attribute.
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
     * A UserDefined value of the SheetMusicCodecType. This is represented in an XML schema as an XML Attribute.
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

