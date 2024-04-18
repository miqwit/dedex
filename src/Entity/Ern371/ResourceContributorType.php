<?php

namespace DedexBundle\Entity\Ern371;

/**
 * Class representing ResourceContributorType
 *
 * A Composite containing details of the Name,
 *  Identifier and role(s) of a Contributor to a Resource.
 * XSD Type: ResourceContributor
 */
class ResourceContributorType
{
    /**
     * The number indicating the order of the
     *  ResourceContributor in a group of ResourceContributors that have contributed to a
     *  Resource. This is represented in an XML schema as an XML Attribute.
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
     *  played by the Contributor.
     *
     * @var \DedexBundle\Entity\Ern371\ResourceContributorRoleType[] $resourceContributorRole
     */
    private $resourceContributorRole = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the
     *  ResourceContributor in a group of ResourceContributors that have contributed to a
     *  Resource. This is represented in an XML schema as an XML Attribute.
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
     *  ResourceContributor in a group of ResourceContributors that have contributed to a
     *  Resource. This is represented in an XML schema as an XML Attribute.
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
     * Adds as resourceContributorRole
     *
     * A Composite containing details of a role
     *  played by the Contributor.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern371\ResourceContributorRoleType $resourceContributorRole
     */
    public function addToResourceContributorRole(\DedexBundle\Entity\Ern371\ResourceContributorRoleType $resourceContributorRole)
    {
        $this->resourceContributorRole[] = $resourceContributorRole;
        return $this;
    }

    /**
     * isset resourceContributorRole
     *
     * A Composite containing details of a role
     *  played by the Contributor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceContributorRole($index)
    {
        return isset($this->resourceContributorRole[$index]);
    }

    /**
     * unset resourceContributorRole
     *
     * A Composite containing details of a role
     *  played by the Contributor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceContributorRole($index)
    {
        unset($this->resourceContributorRole[$index]);
    }

    /**
     * Gets as resourceContributorRole
     *
     * A Composite containing details of a role
     *  played by the Contributor.
     *
     * @return \DedexBundle\Entity\Ern371\ResourceContributorRoleType[]
     */
    public function getResourceContributorRole()
    {
        return $this->resourceContributorRole;
    }

    /**
     * Sets a new resourceContributorRole
     *
     * A Composite containing details of a role
     *  played by the Contributor.
     *
     * @param \DedexBundle\Entity\Ern371\ResourceContributorRoleType[] $resourceContributorRole
     * @return self
     */
    public function setResourceContributorRole(array $resourceContributorRole = null)
    {
        $this->resourceContributorRole = $resourceContributorRole;
        return $this;
    }
}

