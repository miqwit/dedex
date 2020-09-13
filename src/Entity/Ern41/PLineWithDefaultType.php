<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing PLineWithDefaultType
 *
 * A Composite containing details of a PLine.
 * XSD Type: PLineWithDefault
 */
class PLineWithDefaultType
{

    /**
     * A Territory to which the PLine applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * The Language and script of the PLineText as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

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
     * Gets as applicableTerritoryCode
     *
     * A Territory to which the PLine applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the PLine applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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

