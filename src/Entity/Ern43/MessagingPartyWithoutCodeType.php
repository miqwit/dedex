<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing MessagingPartyWithoutCodeType
 *
 * A Composite containing details of a MessagingParty.
 * Explanatory Note: This Composite is named MessagingPartyWithoutCode to disambiguate it from the basic MessagingParty Composite.
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @var \DedexBundle\Entity\Ern43\PartyNameWithoutCodeType $partyName
     */
    private $partyName = null;

    /**
     * A Composite containing a TradingName for the Party handling the Message.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @return \DedexBundle\Entity\Ern43\PartyNameWithoutCodeType
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A Composite containing details of the PartyNames for the Party handling the Message.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @param \DedexBundle\Entity\Ern43\PartyNameWithoutCodeType $partyName
     * @return self
     */
    public function setPartyName(?\DedexBundle\Entity\Ern43\PartyNameWithoutCodeType $partyName = null)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Gets as tradingName
     *
     * A Composite containing a TradingName for the Party handling the Message.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
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

