<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing TitleDisplayInformationType
 *
 * A Composite containing information on how a RecordCompany wishes Artist information to be presented to Consumers as part of the Title (and in addition to displaying the DisplayArtist information).
 * XSD Type: TitleDisplayInformation
 */
class TitleDisplayInformationType
{

    /**
     * The Language and script of the Information as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A number indicating the order of the display artist name in a group of display artist names, to allow sequencing different display artists. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Flag indicating whether the information is displayed in the Title of a Resource (=true) or not (=false).
     *
     * @var bool $isDisplayedInTitle
     */
    private $isDisplayedInTitle = null;

    /**
     * A Descriptor that precedes the display artist name when multiple display artist names are given.
     *
     * @var \DedexBundle\Entity\Ern\PrefixType[] $prefix
     */
    private $prefix = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script of the Information as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script of the Information as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as sequenceNumber
     *
     * A number indicating the order of the display artist name in a group of display artist names, to allow sequencing different display artists. This is represented in an XML schema as an XML Attribute.
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
     * A number indicating the order of the display artist name in a group of display artist names, to allow sequencing different display artists. This is represented in an XML schema as an XML Attribute.
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
     * Gets as isDisplayedInTitle
     *
     * A Flag indicating whether the information is displayed in the Title of a Resource (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsDisplayedInTitle()
    {
        return $this->isDisplayedInTitle;
    }

    /**
     * Sets a new isDisplayedInTitle
     *
     * A Flag indicating whether the information is displayed in the Title of a Resource (=true) or not (=false).
     *
     * @param bool $isDisplayedInTitle
     * @return self
     */
    public function setIsDisplayedInTitle($isDisplayedInTitle)
    {
        $this->isDisplayedInTitle = $isDisplayedInTitle;
        return $this;
    }

    /**
     * Adds as prefix
     *
     * A Descriptor that precedes the display artist name when multiple display artist names are given.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\PrefixType $prefix
     */
    public function addToPrefix(\DedexBundle\Entity\Ern\PrefixType $prefix)
    {
        $this->prefix[] = $prefix;
        return $this;
    }

    /**
     * isset prefix
     *
     * A Descriptor that precedes the display artist name when multiple display artist names are given.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrefix($index)
    {
        return isset($this->prefix[$index]);
    }

    /**
     * unset prefix
     *
     * A Descriptor that precedes the display artist name when multiple display artist names are given.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrefix($index)
    {
        unset($this->prefix[$index]);
    }

    /**
     * Gets as prefix
     *
     * A Descriptor that precedes the display artist name when multiple display artist names are given.
     *
     * @return \DedexBundle\Entity\Ern\PrefixType[]
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Sets a new prefix
     *
     * A Descriptor that precedes the display artist name when multiple display artist names are given.
     *
     * @param \DedexBundle\Entity\Ern\PrefixType[] $prefix
     * @return self
     */
    public function setPrefix(array $prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }


}

