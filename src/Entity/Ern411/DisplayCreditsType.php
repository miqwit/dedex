<?php

namespace DedexBundle\Entity\Ern411;

/**
 * Class representing DisplayCreditsType
 *
 * A Composite containing details of a Role and instrumentation for which a Party is credited.
 * XSD Type: DisplayCredits
 */
class DisplayCreditsType
{

    /**
     * The Language and script of this Element as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Territory to which this Element applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string $applicableTerritoryCode
     */
    private $applicableTerritoryCode = null;

    /**
     * The Flag indicating whether this Element provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isDefault
     */
    private $isDefault = null;

    /**
     * The textual portion of the display credit.
     *
     * @var string $displayCreditText
     */
    private $displayCreditText = null;

    /**
     * A Reference for a Party credited with the display credit.
     *
     * @var string[] $displayCreditParty
     */
    private $displayCreditParty = [
        
    ];

    /**
     * The Name for the Party as used in the DisplayCreditText. If no such element is present, the DisplayCreditText contains the Name of the credited Party as specified in the PartyName of the Party composite.
     *
     * @var string[] $nameUsedInDisplayCredit
     */
    private $nameUsedInDisplayCredit = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script of this Element as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script of this Element as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as applicableTerritoryCode
     *
     * A Territory to which this Element applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which this Element applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * The Flag indicating whether this Element provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
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
     * The Flag indicating whether this Element provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
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
     * Gets as displayCreditText
     *
     * The textual portion of the display credit.
     *
     * @return string
     */
    public function getDisplayCreditText()
    {
        return $this->displayCreditText;
    }

    /**
     * Sets a new displayCreditText
     *
     * The textual portion of the display credit.
     *
     * @param string $displayCreditText
     * @return self
     */
    public function setDisplayCreditText($displayCreditText)
    {
        $this->displayCreditText = $displayCreditText;
        return $this;
    }

    /**
     * Adds as displayCreditParty
     *
     * A Reference for a Party credited with the display credit.
     *
     * @return self
     * @param string $displayCreditParty
     */
    public function addToDisplayCreditParty($displayCreditParty)
    {
        $this->displayCreditParty[] = $displayCreditParty;
        return $this;
    }

    /**
     * isset displayCreditParty
     *
     * A Reference for a Party credited with the display credit.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayCreditParty($index)
    {
        return isset($this->displayCreditParty[$index]);
    }

    /**
     * unset displayCreditParty
     *
     * A Reference for a Party credited with the display credit.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayCreditParty($index)
    {
        unset($this->displayCreditParty[$index]);
    }

    /**
     * Gets as displayCreditParty
     *
     * A Reference for a Party credited with the display credit.
     *
     * @return string[]
     */
    public function getDisplayCreditParty()
    {
        return $this->displayCreditParty;
    }

    /**
     * Sets a new displayCreditParty
     *
     * A Reference for a Party credited with the display credit.
     *
     * @param string $displayCreditParty
     * @return self
     */
    public function setDisplayCreditParty(array $displayCreditParty)
    {
        $this->displayCreditParty = $displayCreditParty;
        return $this;
    }

    /**
     * Adds as nameUsedInDisplayCredit
     *
     * The Name for the Party as used in the DisplayCreditText. If no such element is present, the DisplayCreditText contains the Name of the credited Party as specified in the PartyName of the Party composite.
     *
     * @return self
     * @param string $nameUsedInDisplayCredit
     */
    public function addToNameUsedInDisplayCredit($nameUsedInDisplayCredit)
    {
        $this->nameUsedInDisplayCredit[] = $nameUsedInDisplayCredit;
        return $this;
    }

    /**
     * isset nameUsedInDisplayCredit
     *
     * The Name for the Party as used in the DisplayCreditText. If no such element is present, the DisplayCreditText contains the Name of the credited Party as specified in the PartyName of the Party composite.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNameUsedInDisplayCredit($index)
    {
        return isset($this->nameUsedInDisplayCredit[$index]);
    }

    /**
     * unset nameUsedInDisplayCredit
     *
     * The Name for the Party as used in the DisplayCreditText. If no such element is present, the DisplayCreditText contains the Name of the credited Party as specified in the PartyName of the Party composite.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNameUsedInDisplayCredit($index)
    {
        unset($this->nameUsedInDisplayCredit[$index]);
    }

    /**
     * Gets as nameUsedInDisplayCredit
     *
     * The Name for the Party as used in the DisplayCreditText. If no such element is present, the DisplayCreditText contains the Name of the credited Party as specified in the PartyName of the Party composite.
     *
     * @return string[]
     */
    public function getNameUsedInDisplayCredit()
    {
        return $this->nameUsedInDisplayCredit;
    }

    /**
     * Sets a new nameUsedInDisplayCredit
     *
     * The Name for the Party as used in the DisplayCreditText. If no such element is present, the DisplayCreditText contains the Name of the credited Party as specified in the PartyName of the Party composite.
     *
     * @param string[] $nameUsedInDisplayCredit
     * @return self
     */
    public function setNameUsedInDisplayCredit(array $nameUsedInDisplayCredit)
    {
        $this->nameUsedInDisplayCredit = $nameUsedInDisplayCredit;
        return $this;
    }


}

