<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing CLineType
 *
 * A ddex:Composite containing details of a ddex:CLine.
 * XSD Type: CLine
 */
class CLineType
{
    /**
     * The ddex:Language and script of the ddex:CLineText as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The ddex:Year of the ddexC:CLine.
     *
     * @var int $year
     */
    private $year = null;

    /**
     * The ddex:Name of the company releasing the ddex:Creation. This may be an owner or a licensee of the ddex:Creation.
     *
     * @var string $cLineCompany
     */
    private $cLineCompany = null;

    /**
     * The text of the ddexC:CLine. (Note: DDEX expects to deprecate the use of the CLineText element in a subsequent version of this standard. It will be deprecated once users of the standard are able to provide CLine information in a structured form.)
     *
     * @var string $cLineText
     */
    private $cLineText = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script of the ddex:CLineText as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script of the ddex:CLineText as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Year of the ddexC:CLine.
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
     * The ddex:Year of the ddexC:CLine.
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
     * The ddex:Name of the company releasing the ddex:Creation. This may be an owner or a licensee of the ddex:Creation.
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
     * The ddex:Name of the company releasing the ddex:Creation. This may be an owner or a licensee of the ddex:Creation.
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
     * The text of the ddexC:CLine. (Note: DDEX expects to deprecate the use of the CLineText element in a subsequent version of this standard. It will be deprecated once users of the standard are able to provide CLine information in a structured form.)
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
     * The text of the ddexC:CLine. (Note: DDEX expects to deprecate the use of the CLineText element in a subsequent version of this standard. It will be deprecated once users of the standard are able to provide CLine information in a structured form.)
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

