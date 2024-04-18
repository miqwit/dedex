<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing DSPType
 *
 * A Composite containing details of a DSP acting as a Licensee in a commercial relationship.
 * XSD Type: DSP
 */
class DSPType
{
    /**
     * The Language and script for the Elements of the DSP as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, Producers or other Creators.
     *
     * @var \DedexBundle\Entity\Ern381\PartyIdType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * A Composite containing details of the PartyName(s).
     *
     * @var \DedexBundle\Entity\Ern381\PartyNameType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * A Composite containing a TradingName of the DSP.
     *
     * @var \DedexBundle\Entity\Ern381\NameType $tradingName
     */
    private $tradingName = null;

    /**
     * A URL for the DSP's web site.
     *
     * @var string[] $uRL
     */
    private $uRL = [
        
    ];

    /**
     * The Territory from which the DSP operates. This Territory may differ from the one in which SalesTransactions occur. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DedexBundle\Entity\Ern381\CurrentTerritoryCodeType $territoryCode
     */
    private $territoryCode = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the DSP as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the DSP as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Adds as partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, Producers or other Creators.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\PartyIdType $partyId
     */
    public function addToPartyId(\DedexBundle\Entity\Ern381\PartyIdType $partyId)
    {
        $this->partyId[] = $partyId;
        return $this;
    }

    /**
     * isset partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, Producers or other Creators.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyId($index)
    {
        return isset($this->partyId[$index]);
    }

    /**
     * unset partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, Producers or other Creators.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyId($index)
    {
        unset($this->partyId[$index]);
    }

    /**
     * Gets as partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, Producers or other Creators.
     *
     * @return \DedexBundle\Entity\Ern381\PartyIdType[]
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, Producers or other Creators.
     *
     * @param \DedexBundle\Entity\Ern381\PartyIdType[] $partyId
     * @return self
     */
    public function setPartyId(array $partyId = null)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Adds as partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\PartyNameType $partyName
     */
    public function addToPartyName(\DedexBundle\Entity\Ern381\PartyNameType $partyName)
    {
        $this->partyName[] = $partyName;
        return $this;
    }

    /**
     * isset partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyName($index)
    {
        return isset($this->partyName[$index]);
    }

    /**
     * unset partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyName($index)
    {
        unset($this->partyName[$index]);
    }

    /**
     * Gets as partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @return \DedexBundle\Entity\Ern381\PartyNameType[]
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @param \DedexBundle\Entity\Ern381\PartyNameType[] $partyName
     * @return self
     */
    public function setPartyName(array $partyName = null)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Gets as tradingName
     *
     * A Composite containing a TradingName of the DSP.
     *
     * @return \DedexBundle\Entity\Ern381\NameType
     */
    public function getTradingName()
    {
        return $this->tradingName;
    }

    /**
     * Sets a new tradingName
     *
     * A Composite containing a TradingName of the DSP.
     *
     * @param \DedexBundle\Entity\Ern381\NameType $tradingName
     * @return self
     */
    public function setTradingName(?\DedexBundle\Entity\Ern381\NameType $tradingName = null)
    {
        $this->tradingName = $tradingName;
        return $this;
    }

    /**
     * Adds as uRL
     *
     * A URL for the DSP's web site.
     *
     * @return self
     * @param string $uRL
     */
    public function addToURL($uRL)
    {
        $this->uRL[] = $uRL;
        return $this;
    }

    /**
     * isset uRL
     *
     * A URL for the DSP's web site.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetURL($index)
    {
        return isset($this->uRL[$index]);
    }

    /**
     * unset uRL
     *
     * A URL for the DSP's web site.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetURL($index)
    {
        unset($this->uRL[$index]);
    }

    /**
     * Gets as uRL
     *
     * A URL for the DSP's web site.
     *
     * @return string[]
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * A URL for the DSP's web site.
     *
     * @param string[] $uRL
     * @return self
     */
    public function setURL(array $uRL = null)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Gets as territoryCode
     *
     * The Territory from which the DSP operates. This Territory may differ from the one in which SalesTransactions occur. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DedexBundle\Entity\Ern381\CurrentTerritoryCodeType
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * The Territory from which the DSP operates. This Territory may differ from the one in which SalesTransactions occur. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DedexBundle\Entity\Ern381\CurrentTerritoryCodeType $territoryCode
     * @return self
     */
    public function setTerritoryCode(?\DedexBundle\Entity\Ern381\CurrentTerritoryCodeType $territoryCode = null)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }
}

