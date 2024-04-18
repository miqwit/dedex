<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing ArtistType
 *
 * A ddex:Composite containing details of an ddex:Artist. An ddex:Artist may be described through ddex:Name, ddex:Identifier and Roles.
 * XSD Type: Artist
 */
class ArtistType
{
    /**
     * The number indicating the order of the ddexC:Artist in a group of ddex:Artists. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Composite containing details of a role played by the ddexC:Artist in relation to other ddex:Artists.
     *
     * @var \DedexBundle\Entity\DdexC\ArtistRoleType[] $artistRole
     */
    private $artistRole = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the ddexC:Artist in a group of ddex:Artists. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The number indicating the order of the ddexC:Artist in a group of ddex:Artists. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Adds as artistRole
     *
     * A ddex:Composite containing details of a role played by the ddexC:Artist in relation to other ddex:Artists.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ArtistRoleType $artistRole
     */
    public function addToArtistRole(\DedexBundle\Entity\DdexC\ArtistRoleType $artistRole)
    {
        $this->artistRole[] = $artistRole;
        return $this;
    }

    /**
     * isset artistRole
     *
     * A ddex:Composite containing details of a role played by the ddexC:Artist in relation to other ddex:Artists.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArtistRole($index)
    {
        return isset($this->artistRole[$index]);
    }

    /**
     * unset artistRole
     *
     * A ddex:Composite containing details of a role played by the ddexC:Artist in relation to other ddex:Artists.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArtistRole($index)
    {
        unset($this->artistRole[$index]);
    }

    /**
     * Gets as artistRole
     *
     * A ddex:Composite containing details of a role played by the ddexC:Artist in relation to other ddex:Artists.
     *
     * @return \DedexBundle\Entity\DdexC\ArtistRoleType[]
     */
    public function getArtistRole()
    {
        return $this->artistRole;
    }

    /**
     * Sets a new artistRole
     *
     * A ddex:Composite containing details of a role played by the ddexC:Artist in relation to other ddex:Artists.
     *
     * @param \DedexBundle\Entity\DdexC\ArtistRoleType[] $artistRole
     * @return self
     */
    public function setArtistRole(array $artistRole = null)
    {
        $this->artistRole = $artistRole;
        return $this;
    }
}

