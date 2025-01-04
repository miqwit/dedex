<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing IndirectResourceContributorType
 *
 * A ddex:Composite containing details of the ddex:Name, ddex:Identifier and role(s) of an indirect ddex:Contributor to a ddex:Resource.
 * XSD Type: IndirectResourceContributor
 */
class IndirectResourceContributorType
{
    /**
     * The number indicating the order of the indirect ResourceContributor in a group of ResourceContributors that have contributed to a ddex:Resource. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A ddex:Composite containing details of the ddex:PartyId for the ddex:Party. If no ddex:Namespace is given, the ddex:Identifier is a ddex:DdexPartyId (DPID). Note that DPIDs are not normally used to identify ddex:Artists, ddex:Producers or other ddex:Creators.
     *
     * @var \DedexBundle\Entity\DdexC\PartyIdType $partyId
     */
    private $partyId = null;

    /**
     * A ddex:Composite containing details of the PartyName(s).
     *
     * @var \DedexBundle\Entity\DdexC\PartyNameType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * A ddex:Composite containing details of a role played by the indirect ddex:Contributor.
     *
     * @var \DedexBundle\Entity\DdexC\MusicalWorkContributorRoleType[] $indirectResourceContributorRole
     */
    private $indirectResourceContributorRole = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the indirect ResourceContributor in a group of ResourceContributors that have contributed to a ddex:Resource. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The number indicating the order of the indirect ResourceContributor in a group of ResourceContributors that have contributed to a ddex:Resource. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Gets as partyId
     *
     * A ddex:Composite containing details of the ddex:PartyId for the ddex:Party. If no ddex:Namespace is given, the ddex:Identifier is a ddex:DdexPartyId (DPID). Note that DPIDs are not normally used to identify ddex:Artists, ddex:Producers or other ddex:Creators.
     *
     * @return \DedexBundle\Entity\DdexC\PartyIdType
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A ddex:Composite containing details of the ddex:PartyId for the ddex:Party. If no ddex:Namespace is given, the ddex:Identifier is a ddex:DdexPartyId (DPID). Note that DPIDs are not normally used to identify ddex:Artists, ddex:Producers or other ddex:Creators.
     *
     * @param \DedexBundle\Entity\DdexC\PartyIdType $partyId
     * @return self
     */
    public function setPartyId(?\DedexBundle\Entity\DdexC\PartyIdType $partyId = null)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Adds as partyName
     *
     * A ddex:Composite containing details of the PartyName(s).
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\PartyNameType $partyName
     */
    public function addToPartyName(\DedexBundle\Entity\DdexC\PartyNameType $partyName)
    {
        $this->partyName[] = $partyName;
        return $this;
    }

    /**
     * isset partyName
     *
     * A ddex:Composite containing details of the PartyName(s).
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
     * A ddex:Composite containing details of the PartyName(s).
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
     * A ddex:Composite containing details of the PartyName(s).
     *
     * @return \DedexBundle\Entity\DdexC\PartyNameType[]
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A ddex:Composite containing details of the PartyName(s).
     *
     * @param \DedexBundle\Entity\DdexC\PartyNameType[] $partyName
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
     * A ddex:Composite containing details of a role played by the indirect ddex:Contributor.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\MusicalWorkContributorRoleType $indirectResourceContributorRole
     */
    public function addToIndirectResourceContributorRole(\DedexBundle\Entity\DdexC\MusicalWorkContributorRoleType $indirectResourceContributorRole)
    {
        $this->indirectResourceContributorRole[] = $indirectResourceContributorRole;
        return $this;
    }

    /**
     * isset indirectResourceContributorRole
     *
     * A ddex:Composite containing details of a role played by the indirect ddex:Contributor.
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
     * A ddex:Composite containing details of a role played by the indirect ddex:Contributor.
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
     * A ddex:Composite containing details of a role played by the indirect ddex:Contributor.
     *
     * @return \DedexBundle\Entity\DdexC\MusicalWorkContributorRoleType[]
     */
    public function getIndirectResourceContributorRole()
    {
        return $this->indirectResourceContributorRole;
    }

    /**
     * Sets a new indirectResourceContributorRole
     *
     * A ddex:Composite containing details of a role played by the indirect ddex:Contributor.
     *
     * @param \DedexBundle\Entity\DdexC\MusicalWorkContributorRoleType[] $indirectResourceContributorRole
     * @return self
     */
    public function setIndirectResourceContributorRole(array $indirectResourceContributorRole = null)
    {
        $this->indirectResourceContributorRole = $indirectResourceContributorRole;
        return $this;
    }
}

