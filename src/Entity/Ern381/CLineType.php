<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing CLineType
 *
 * A Composite containing details of a CLine.
 * XSD Type: CLine
 */
class CLineType
{
    /**
     * The Language and script of the CLineText as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The Year of the CLine.
     *
     * @var int $year
     */
    private $year = null;

    /**
     * The Name of the company releasing the Creation. This may be an owner or a licensee of the Creation.
     *
     * @var string $cLineCompany
     */
    private $cLineCompany = null;

    /**
     * The text of the CLine.
     *
     * @var string $cLineText
     */
    private $cLineText = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script of the CLineText as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script of the CLineText as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as year
     *
     * The Year of the CLine.
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
     * The Year of the CLine.
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
     * Gets as cLineCompany
     *
     * The Name of the company releasing the Creation. This may be an owner or a licensee of the Creation.
     *
     * @return string
     */
    public function getCLineCompany()
    {
        return $this->cLineCompany;
    }

    /**
     * Sets a new cLineCompany
     *
     * The Name of the company releasing the Creation. This may be an owner or a licensee of the Creation.
     *
     * @param string $cLineCompany
     * @return self
     */
    public function setCLineCompany($cLineCompany)
    {
        $this->cLineCompany = $cLineCompany;
        return $this;
    }

    /**
     * Gets as cLineText
     *
     * The text of the CLine.
     *
     * @return string
     */
    public function getCLineText()
    {
        return $this->cLineText;
    }

    /**
     * Sets a new cLineText
     *
     * The text of the CLine.
     *
     * @param string $cLineText
     * @return self
     */
    public function setCLineText($cLineText)
    {
        $this->cLineText = $cLineText;
        return $this;
    }
}

