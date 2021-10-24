<?php

namespace DedexBundle\Entity\Ern411;

/**
 * Class representing MessagingPartyWithoutCodeType
 *
 * A Composite containing details of a MessagingParty.
 * XSD Type: MessagingPartyWithoutCode
 */
class MessagingPartyWithoutCodeType
{

    /**
     * An Identifier of a Party according to the DdexPartyId standard DDEX-DPID.
     *
     * @var string $partyId
     */
    private $partyId = null;

    /**
     * A Composite containing details of the PartyNames for the Party handling the Message.
     *
     * @var \DedexBundle\Entity\Ern411\PartyNameWithoutCodeType $partyName
     */
    private $partyName = null;

    /**
     * A Composite containing a TradingName for the Party handling the Message.
     *
     * @var string $tradingName
     */
    private $tradingName = null;

    /**
     * Gets as partyId
     *
     * An Identifier of a Party according to the DdexPartyId standard DDEX-DPID.
     *
     * @return string
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * An Identifier of a Party according to the DdexPartyId standard DDEX-DPID.
     *
     * @param string $partyId
     * @return self
     */
    public function setPartyId($partyId)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Gets as partyName
     *
     * A Composite containing details of the PartyNames for the Party handling the Message.
     *
     * @return \DedexBundle\Entity\Ern411\PartyNameWithoutCodeType
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
     * @param \DedexBundle\Entity\Ern411\PartyNameWithoutCodeType $partyName
     * @return self
     */
    public function setPartyName(\DedexBundle\Entity\Ern411\PartyNameWithoutCodeType $partyName)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Gets as tradingName
     *
     * A Composite containing a TradingName for the Party handling the Message.
     *
     * @return string
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
     * @param string $tradingName
     * @return self
     */
    public function setTradingName($tradingName)
    {
        $this->tradingName = $tradingName;
        return $this;
    }


}

