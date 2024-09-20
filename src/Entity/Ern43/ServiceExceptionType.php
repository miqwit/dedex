<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing ServiceExceptionType
 *
 * A Composite containing details of a Service run by a Party that is an exception to a Condition.
 * XSD Type: ServiceException
 */
class ServiceExceptionType
{
    /**
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @var \DedexBundle\Entity\Ern43\DetailedPartyIdType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @var \DedexBundle\Entity\Ern43\PartyNameType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * A Composite containing a TradingName of the Party.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     *
     * @var \DedexBundle\Entity\Ern43\NameType $tradingName
     */
    private $tradingName = null;

    /**
     * A URL for the Service's web site.
     *
     * @var string[] $uRL
     */
    private $uRL = [
        
    ];

    /**
     * A Composite containing details of an excluded channel provided by the Service. This channel may be specific to an Artist.
     *
     * @var \DedexBundle\Entity\Ern43\ChannelType[] $channel
     */
    private $channel = [
        
    ];

    /**
     * Adds as partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\DetailedPartyIdType $partyId
     */
    public function addToPartyId(\DedexBundle\Entity\Ern43\DetailedPartyIdType $partyId)
    {
        $this->partyId[] = $partyId;
        return $this;
    }

    /**
     * isset partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
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
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
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
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return \DedexBundle\Entity\Ern43\DetailedPartyIdType[]
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @param \DedexBundle\Entity\Ern43\DetailedPartyIdType[] $partyId
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\PartyNameType $partyName
     */
    public function addToPartyName(\DedexBundle\Entity\Ern43\PartyNameType $partyName)
    {
        $this->partyName[] = $partyName;
        return $this;
    }

    /**
     * isset partyName
     *
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @return \DedexBundle\Entity\Ern43\PartyNameType[]
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @param \DedexBundle\Entity\Ern43\PartyNameType[] $partyName
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
     * A Composite containing a TradingName of the Party.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     *
     * @return \DedexBundle\Entity\Ern43\NameType
     */
    public function getTradingName()
    {
        return $this->tradingName;
    }

    /**
     * Sets a new tradingName
     *
     * A Composite containing a TradingName of the Party.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     *
     * @param \DedexBundle\Entity\Ern43\NameType $tradingName
     * @return self
     */
    public function setTradingName(?\DedexBundle\Entity\Ern43\NameType $tradingName = null)
    {
        $this->tradingName = $tradingName;
        return $this;
    }

    /**
     * Adds as uRL
     *
     * A URL for the Service's web site.
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
     * A URL for the Service's web site.
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
     * A URL for the Service's web site.
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
     * A URL for the Service's web site.
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
     * A URL for the Service's web site.
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
     * Adds as channel
     *
     * A Composite containing details of an excluded channel provided by the Service. This channel may be specific to an Artist.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\ChannelType $channel
     */
    public function addToChannel(\DedexBundle\Entity\Ern43\ChannelType $channel)
    {
        $this->channel[] = $channel;
        return $this;
    }

    /**
     * isset channel
     *
     * A Composite containing details of an excluded channel provided by the Service. This channel may be specific to an Artist.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChannel($index)
    {
        return isset($this->channel[$index]);
    }

    /**
     * unset channel
     *
     * A Composite containing details of an excluded channel provided by the Service. This channel may be specific to an Artist.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChannel($index)
    {
        unset($this->channel[$index]);
    }

    /**
     * Gets as channel
     *
     * A Composite containing details of an excluded channel provided by the Service. This channel may be specific to an Artist.
     *
     * @return \DedexBundle\Entity\Ern43\ChannelType[]
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Sets a new channel
     *
     * A Composite containing details of an excluded channel provided by the Service. This channel may be specific to an Artist.
     *
     * @param \DedexBundle\Entity\Ern43\ChannelType[] $channel
     * @return self
     */
    public function setChannel(array $channel = null)
    {
        $this->channel = $channel;
        return $this;
    }
}

