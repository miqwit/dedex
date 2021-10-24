<?php

namespace DedexBundle\Entity\Ern411;

/**
 * Class representing CLineWithDefaultType
 *
 * A Composite containing details of a CLine.
 * XSD Type: CLineWithDefault
 */
class CLineWithDefaultType
{

    /**
     * A Territory to which the CLine applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string $applicableTerritoryCode
     */
    private $applicableTerritoryCode = null;

    /**
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isDefault
     */
    private $isDefault = null;

    /**
     * The Language and script of the CLineText as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Name of the company releasing the Creation. This may be an owner or a Licensee of the Creation.
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
     * Gets as applicableTerritoryCode
     *
     * A Territory to which the CLine applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string
     */
    public function getApplicableTerritoryCode()
    {
        return $this->applicableTerritoryCode;
    }

    /**
     * Sets a new applicableTerritoryCode
     *
     * A Territory to which the CLine applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $applicableTerritoryCode
     * @return self
     */
    public function setApplicableTerritoryCode($applicableTerritoryCode)
    {
        $this->applicableTerritoryCode = $applicableTerritoryCode;
        return $this;
    }

    /**
     * Gets as isDefault
     *
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Sets a new isDefault
     *
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isDefault
     * @return self
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script of the CLineText as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script of the CLineText as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Name of the company releasing the Creation. This may be an owner or a Licensee of the Creation.
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
     * The Name of the company releasing the Creation. This may be an owner or a Licensee of the Creation.
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

