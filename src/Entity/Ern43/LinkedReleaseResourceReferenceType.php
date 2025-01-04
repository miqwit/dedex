<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing LinkedReleaseResourceReferenceType
 *
 * A Composite containing details of a LinkedReleaseResourceReference for a Resource which is linked to a ContentItem.
 * XSD Type: LinkedReleaseResourceReference
 */
class LinkedReleaseResourceReferenceType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * A description of the link for the ReleaseResourceReference.
     *
     * @var string $linkDescription
     */
    private $linkDescription = null;

    /**
     * The Language and script for the LinkDescription as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The Namespace of the LinkDescription. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $namespace
     */
    private $namespace = null;

    /**
     * A UserDefined value of the LinkDescription. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $userDefinedValue
     */
    private $userDefinedValue = null;

    /**
     * The number indicating the order of the Resource in a group of Resources within the Release. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * The Flag indicating whether the reference is part of a set of references to multiple files (=true) or not (=false). If the Flag is not set, the reference is assumed not to be a multi-file reference. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isMultiFile
     */
    private $isMultiFile = null;

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
     * Gets as linkDescription
     *
     * A description of the link for the ReleaseResourceReference.
     *
     * @return string
     */
    public function getLinkDescription()
    {
        return $this->linkDescription;
    }

    /**
     * Sets a new linkDescription
     *
     * A description of the link for the ReleaseResourceReference.
     *
     * @param string $linkDescription
     * @return self
     */
    public function setLinkDescription($linkDescription)
    {
        $this->linkDescription = $linkDescription;
        return $this;
    }

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the LinkDescription as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the LinkDescription as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as namespace
     *
     * The Namespace of the LinkDescription. This is represented in an XML schema as an XML Attribute.
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
     * The Namespace of the LinkDescription. This is represented in an XML schema as an XML Attribute.
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
     * A UserDefined value of the LinkDescription. This is represented in an XML schema as an XML Attribute.
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
     * A UserDefined value of the LinkDescription. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $userDefinedValue
     * @return self
     */
    public function setUserDefinedValue($userDefinedValue)
    {
        $this->userDefinedValue = $userDefinedValue;
        return $this;
    }

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the Resource in a group of Resources within the Release. This is represented in an XML schema as an XML Attribute.
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * The number indicating the order of the Resource in a group of Resources within the Release. This is represented in an XML schema as an XML Attribute.
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Gets as isMultiFile
     *
     * The Flag indicating whether the reference is part of a set of references to multiple files (=true) or not (=false). If the Flag is not set, the reference is assumed not to be a multi-file reference. This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsMultiFile()
    {
        return $this->isMultiFile;
    }

    /**
     * Sets a new isMultiFile
     *
     * The Flag indicating whether the reference is part of a set of references to multiple files (=true) or not (=false). If the Flag is not set, the reference is assumed not to be a multi-file reference. This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isMultiFile
     * @return self
     */
    public function setIsMultiFile($isMultiFile)
    {
        $this->isMultiFile = $isMultiFile;
        return $this;
    }
}

