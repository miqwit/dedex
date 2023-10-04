<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing PLineType
 *
 * A ddex:Composite containing details of a ddex:PLine.
 * XSD Type: PLine
 */
class PLineType
{
    /**
     * The ddex:Language and script of the ddex:PLineText as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Type of ddex:PLine. This is represented in an XML schema as an XML ddex:Attribute. If this ddex:Attribute is not provided, it is assumed that the ddex:PLine is a ddex:OriginalPLine.
     *
     * @var string $pLineType
     */
    private $pLineType = null;

    /**
     * The ddex:Year of the ddexC:PLine.
     *
     * @var int $year
     */
    private $year = null;

    /**
     * The ddex:Name of the company releasing the ddex:Creation. This may be an owner or a licensee of the ddex:Creation.
     *
     * @var string $pLineCompany
     */
    private $pLineCompany = null;

    /**
     * The text of the ddexC:PLine. (Note: DDEX expects to deprecate the use of the PLineText element in a subsequent version of this standard. It will be deprecated once users of the standard are able to provide PLine information in a structured form.)
     *
     * @var string $pLineText
     */
    private $pLineText = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script of the ddex:PLineText as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script of the ddex:PLineText as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Type of ddex:PLine. This is represented in an XML schema as an XML ddex:Attribute. If this ddex:Attribute is not provided, it is assumed that the ddex:PLine is a ddex:OriginalPLine.
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
     * A ddex:Type of ddex:PLine. This is represented in an XML schema as an XML ddex:Attribute. If this ddex:Attribute is not provided, it is assumed that the ddex:PLine is a ddex:OriginalPLine.
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
     * The ddex:Year of the ddexC:PLine.
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
     * The ddex:Year of the ddexC:PLine.
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
     * The ddex:Name of the company releasing the ddex:Creation. This may be an owner or a licensee of the ddex:Creation.
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
     * The ddex:Name of the company releasing the ddex:Creation. This may be an owner or a licensee of the ddex:Creation.
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
     * The text of the ddexC:PLine. (Note: DDEX expects to deprecate the use of the PLineText element in a subsequent version of this standard. It will be deprecated once users of the standard are able to provide PLine information in a structured form.)
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
     * The text of the ddexC:PLine. (Note: DDEX expects to deprecate the use of the PLineText element in a subsequent version of this standard. It will be deprecated once users of the standard are able to provide PLine information in a structured form.)
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

