<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing MessagingPartyType
 *
 * A Composite containing details of a MessagingParty.
 * XSD Type: MessagingParty
 */
class MessagingPartyType
{
    /**
     * The Language and script for the Elements of the MessagingParty as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of the PartyId for the Party handling the Message. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, Producers or other Creators.
     *
     * @var \DedexBundle\Entity\Ern381\PartyIdType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * A Composite containing details of the PartyNames for the Party handling the Message.
     *
     * @var \DedexBundle\Entity\Ern381\PartyNameType $partyName
     */
    private $partyName = null;

    /**
     * A Composite containing a TradingName for the Party handling the Message.
     *
     * @var \DedexBundle\Entity\Ern381\NameType $tradingName
     */
    private $tradingName = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the MessagingParty as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the MessagingParty as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * A Composite containing details of the PartyId for the Party handling the Message. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, Producers or other Creators.
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
     * A Composite containing details of the PartyId for the Party handling the Message. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, Producers or other Creators.
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
     * A Composite containing details of the PartyId for the Party handling the Message. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, Producers or other Creators.
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
     * A Composite containing details of the PartyId for the Party handling the Message. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, Producers or other Creators.
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
     * A Composite containing details of the PartyId for the Party handling the Message. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, Producers or other Creators.
     *
     * @param \DedexBundle\Entity\Ern381\PartyIdType[] $partyId
     * @return self
     */
    public function setPartyId(array $partyId)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Gets as partyName
     *
     * A Composite containing details of the PartyNames for the Party handling the Message.
     *
     * @return \DedexBundle\Entity\Ern381\PartyNameType
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A Composite containing details of the PartyNames for the Party handling the Message.
     *
     * @param \DedexBundle\Entity\Ern381\PartyNameType $partyName
     * @return self
     */
    public function setPartyName(?\DedexBundle\Entity\Ern381\PartyNameType $partyName = null)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Gets as tradingName
     *
     * A Composite containing a TradingName for the Party handling the Message.
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
     * A Composite containing a TradingName for the Party handling the Message.
     *
     * @param \DedexBundle\Entity\Ern381\NameType $tradingName
     * @return self
     */
    public function setTradingName(?\DedexBundle\Entity\Ern381\NameType $tradingName = null)
    {
        $this->tradingName = $tradingName;
        return $this;
    }
}

