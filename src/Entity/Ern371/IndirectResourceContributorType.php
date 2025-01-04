<?php

namespace DedexBundle\Entity\Ern371;

/**
 * Class representing IndirectResourceContributorType
 *
 * A Composite containing details of the Name,
 *  Identifier and role(s) of an indirect Contributor to a Resource.
 * XSD Type: IndirectResourceContributor
 */
class IndirectResourceContributorType
{
    /**
     * The number indicating the order of the
     *  indirect ResourceContributor in a group of ResourceContributors that have contributed
     *  to a Resource. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Composite containing details of
     *  the PartyId for the Party. If no Namespace is given, the Identifier is a
     *  DdexPartyId (DPID). Note that DPIDs are not normally used to identify
     *  Artists, Producers or other Creators.
     *
     * @var \DedexBundle\Entity\Ern371\PartyIdType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * A Composite containing details of
     *  the PartyName(s).
     *
     * @var \DedexBundle\Entity\Ern371\PartyNameType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * A Composite containing details of a role
     *  played by the indirect Contributor.
     *
     * @var \DedexBundle\Entity\Ern371\MusicalWorkContributorRoleType[] $indirectResourceContributorRole
     */
    private $indirectResourceContributorRole = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the
     *  indirect ResourceContributor in a group of ResourceContributors that have contributed
     *  to a Resource. This is represented in an XML schema as an XML Attribute.
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * The number indicating the order of the
     *  indirect ResourceContributor in a group of ResourceContributors that have contributed
     *  to a Resource. This is represented in an XML schema as an XML Attribute.
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Adds as partyId
     *
     * A Composite containing details of
     *  the PartyId for the Party. If no Namespace is given, the Identifier is a
     *  DdexPartyId (DPID). Note that DPIDs are not normally used to identify
     *  Artists, Producers or other Creators.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern371\PartyIdType $partyId
     */
    public function addToPartyId(\DedexBundle\Entity\Ern371\PartyIdType $partyId)
    {
        $this->partyId[] = $partyId;
        return $this;
    }

    /**
     * isset partyId
     *
     * A Composite containing details of
     *  the PartyId for the Party. If no Namespace is given, the Identifier is a
     *  DdexPartyId (DPID). Note that DPIDs are not normally used to identify
     *  Artists, Producers or other Creators.
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
     * A Composite containing details of
     *  the PartyId for the Party. If no Namespace is given, the Identifier is a
     *  DdexPartyId (DPID). Note that DPIDs are not normally used to identify
     *  Artists, Producers or other Creators.
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
     * A Composite containing details of
     *  the PartyId for the Party. If no Namespace is given, the Identifier is a
     *  DdexPartyId (DPID). Note that DPIDs are not normally used to identify
     *  Artists, Producers or other Creators.
     *
     * @return \DedexBundle\Entity\Ern371\PartyIdType[]
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A Composite containing details of
     *  the PartyId for the Party. If no Namespace is given, the Identifier is a
     *  DdexPartyId (DPID). Note that DPIDs are not normally used to identify
     *  Artists, Producers or other Creators.
     *
     * @param \DedexBundle\Entity\Ern371\PartyIdType[] $partyId
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
     * A Composite containing details of
     *  the PartyName(s).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern371\PartyNameType $partyName
     */
    public function addToPartyName(\DedexBundle\Entity\Ern371\PartyNameType $partyName)
    {
        $this->partyName[] = $partyName;
        return $this;
    }

    /**
     * isset partyName
     *
     * A Composite containing details of
     *  the PartyName(s).
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
     * A Composite containing details of
     *  the PartyName(s).
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
     * A Composite containing details of
     *  the PartyName(s).
     *
     * @return \DedexBundle\Entity\Ern371\PartyNameType[]
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A Composite containing details of
     *  the PartyName(s).
     *
     * @param \DedexBundle\Entity\Ern371\PartyNameType[] $partyName
     * @return self
     */
    public function setPartyName(array $partyName = null)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Adds as indirectResourceContributorRole
     *
     * A Composite containing details of a role
     *  played by the indirect Contributor.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern371\MusicalWorkContributorRoleType $indirectResourceContributorRole
     */
    public function addToIndirectResourceContributorRole(\DedexBundle\Entity\Ern371\MusicalWorkContributorRoleType $indirectResourceContributorRole)
    {
        $this->indirectResourceContributorRole[] = $indirectResourceContributorRole;
        return $this;
    }

    /**
     * isset indirectResourceContributorRole
     *
     * A Composite containing details of a role
     *  played by the indirect Contributor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndirectResourceContributorRole($index)
    {
        return isset($this->indirectResourceContributorRole[$index]);
    }

    /**
     * unset indirectResourceContributorRole
     *
     * A Composite containing details of a role
     *  played by the indirect Contributor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndirectResourceContributorRole($index)
    {
        unset($this->indirectResourceContributorRole[$index]);
    }

    /**
     * Gets as indirectResourceContributorRole
     *
     * A Composite containing details of a role
     *  played by the indirect Contributor.
     *
     * @return \DedexBundle\Entity\Ern371\MusicalWorkContributorRoleType[]
     */
    public function getIndirectResourceContributorRole()
    {
        return $this->indirectResourceContributorRole;
    }

    /**
     * Sets a new indirectResourceContributorRole
     *
     * A Composite containing details of a role
     *  played by the indirect Contributor.
     *
     * @param \DedexBundle\Entity\Ern371\MusicalWorkContributorRoleType[] $indirectResourceContributorRole
     * @return self
     */
    public function setIndirectResourceContributorRole(array $indirectResourceContributorRole = null)
    {
        $this->indirectResourceContributorRole = $indirectResourceContributorRole;
        return $this;
    }
}

