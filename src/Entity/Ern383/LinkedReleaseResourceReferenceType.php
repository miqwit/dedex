<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing LinkedReleaseResourceReferenceType
 *
 * A Composite containing details of a
 *  LinkedReleaseResourceReference for a Resource which is linked to a
 *  ContentItem.
 * XSD Type: LinkedReleaseResourceReference
 */
class LinkedReleaseResourceReferenceType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * A Composite containing a Description of
     *  the link for the ReleaseResourceReference.
     *
     * @var string $linkDescription
     */
    private $linkDescription = null;

    /**
     * The Language and script for the
     *  LinkDescription as defined in IETF RfC 5646. The default is the same as
     *  indicated for the containing composite. Language and Script are provided as
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
     * Gets as linkDescription
     *
     * A Composite containing a Description of
     *  the link for the ReleaseResourceReference.
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
     * A Composite containing a Description of
     *  the link for the ReleaseResourceReference.
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
     * The Language and script for the
     *  LinkDescription as defined in IETF RfC 5646. The default is the same as
     *  indicated for the containing composite. Language and Script are provided as
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
     * The Language and script for the
     *  LinkDescription as defined in IETF RfC 5646. The default is the same as
     *  indicated for the containing composite. Language and Script are provided as
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

