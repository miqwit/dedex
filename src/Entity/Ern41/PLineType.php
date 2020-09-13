<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing PLineType
 *
 * A Composite containing details of a PLine.
 * XSD Type: PLine
 */
class PLineType
{

    /**
     * The Language and script of the PLineText as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Type of PLine. This is represented in an XML schema as an XML Attribute. If this Attribute is not provided, it is assumed that the PLine is an OriginalPLine.
     *
     * @var string $pLineType
     */
    private $pLineType = null;

    /**
     * The Year of the PLine.
     *
     * @var int $year
     */
    private $year = null;

    /**
     * The Name of the company releasing the Creation. This may be an owner or a Licensee of the Creation.
     *
     * @var string $pLineCompany
     */
    private $pLineCompany = null;

    /**
     * The text of the PLine.
     *
     * @var string $pLineText
     */
    private $pLineText = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script of the PLineText as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script of the PLineText as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as pLineType
     *
     * A Type of PLine. This is represented in an XML schema as an XML Attribute. If this Attribute is not provided, it is assumed that the PLine is an OriginalPLine.
     *
     * @return string
     */
    public function getPLineType()
    {
        return $this->pLineType;
    }

    /**
     * Sets a new pLineType
     *
     * A Type of PLine. This is represented in an XML schema as an XML Attribute. If this Attribute is not provided, it is assumed that the PLine is an OriginalPLine.
     *
     * @param string $pLineType
     * @return self
     */
    public function setPLineType($pLineType)
    {
        $this->pLineType = $pLineType;
        return $this;
    }

    /**
     * Gets as year
     *
     * The Year of the PLine.
     *
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Sets a new year
     *
     * The Year of the PLine.
     *
     * @param int $year
     * @return self
     */
    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

    /**
     * Gets as pLineCompany
     *
     * The Name of the company releasing the Creation. This may be an owner or a Licensee of the Creation.
     *
     * @return string
     */
    public function getPLineCompany()
    {
        return $this->pLineCompany;
    }

    /**
     * Sets a new pLineCompany
     *
     * The Name of the company releasing the Creation. This may be an owner or a Licensee of the Creation.
     *
     * @param string $pLineCompany
     * @return self
     */
    public function setPLineCompany($pLineCompany)
    {
        $this->pLineCompany = $pLineCompany;
        return $this;
    }

    /**
     * Gets as pLineText
     *
     * The text of the PLine.
     *
     * @return string
     */
    public function getPLineText()
    {
        return $this->pLineText;
    }

    /**
     * Sets a new pLineText
     *
     * The text of the PLine.
     *
     * @param string $pLineText
     * @return self
     */
    public function setPLineText($pLineText)
    {
        $this->pLineText = $pLineText;
        return $this;
    }


}

