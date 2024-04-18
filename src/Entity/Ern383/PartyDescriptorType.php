<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing PartyDescriptorType
 *
 * A Composite containing details of a Party.
 *  Parties are typically described through Names and/or Identifiers.
 * XSD Type: PartyDescriptor
 */
class PartyDescriptorType
{
    /**
     * A Composite containing details of the
     *  PartyId for the Party. If no Namespace is given, the Identifier is a
     *  DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists,
     *  Producers or other Creators.
     *
     * @var \DedexBundle\Entity\Ern383\PartyIdType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * A Composite containing details of the
     *  PartyName(s).
     *
     * @var \DedexBundle\Entity\Ern383\PartyNameType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * Adds as partyId
     *
     * A Composite containing details of the
     *  PartyId for the Party. If no Namespace is given, the Identifier is a
     *  DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists,
     *  Producers or other Creators.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\PartyIdType $partyId
     */
    public function addToPartyId(\DedexBundle\Entity\Ern383\PartyIdType $partyId)
    {
        $this->partyId[] = $partyId;
        return $this;
    }

    /**
     * isset partyId
     *
     * A Composite containing details of the
     *  PartyId for the Party. If no Namespace is given, the Identifier is a
     *  DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists,
     *  Producers or other Creators.
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
     * A Composite containing details of the
     *  PartyId for the Party. If no Namespace is given, the Identifier is a
     *  DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists,
     *  Producers or other Creators.
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
     * A Composite containing details of the
     *  PartyId for the Party. If no Namespace is given, the Identifier is a
     *  DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists,
     *  Producers or other Creators.
     *
     * @return \DedexBundle\Entity\Ern383\PartyIdType[]
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A Composite containing details of the
     *  PartyId for the Party. If no Namespace is given, the Identifier is a
     *  DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists,
     *  Producers or other Creators.
     *
     * @param \DedexBundle\Entity\Ern383\PartyIdType[] $partyId
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
     * A Composite containing details of the
     *  PartyName(s).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\PartyNameType $partyName
     */
    public function addToPartyName(\DedexBundle\Entity\Ern383\PartyNameType $partyName)
    {
        $this->partyName[] = $partyName;
        return $this;
    }

    /**
     * isset partyName
     *
     * A Composite containing details of the
     *  PartyName(s).
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
     * A Composite containing details of the
     *  PartyName(s).
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
     * A Composite containing details of the
     *  PartyName(s).
     *
     * @return \DedexBundle\Entity\Ern383\PartyNameType[]
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A Composite containing details of the
     *  PartyName(s).
     *
     * @param \DedexBundle\Entity\Ern383\PartyNameType[] $partyName
     * @return self
     */
    public function setPartyName(array $partyName = null)
    {
        $this->partyName = $partyName;
        return $this;
    }
}

