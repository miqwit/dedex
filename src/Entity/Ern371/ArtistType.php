<?php

namespace DedexBundle\Entity\Ern371;

/**
 * Class representing ArtistType
 *
 * A Composite containing details of an Artist. An
 *  Artist may be described through Name, Identifier and Roles.
 * XSD Type: Artist
 */
class ArtistType
{
    /**
     * The number indicating the order of the Artist
     *  in a group of Artists. This is represented in an XML schema as an XML Attribute.
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
     *  played by the Artist in relation to other Artists.
     *
     * @var \DedexBundle\Entity\Ern371\ArtistRoleType[] $artistRole
     */
    private $artistRole = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the Artist
     *  in a group of Artists. This is represented in an XML schema as an XML Attribute.
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
     * The number indicating the order of the Artist
     *  in a group of Artists. This is represented in an XML schema as an XML Attribute.
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
     * Adds as artistRole
     *
     * A Composite containing details of a role
     *  played by the Artist in relation to other Artists.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern371\ArtistRoleType $artistRole
     */
    public function addToArtistRole(\DedexBundle\Entity\Ern371\ArtistRoleType $artistRole)
    {
        $this->artistRole[] = $artistRole;
        return $this;
    }

    /**
     * isset artistRole
     *
     * A Composite containing details of a role
     *  played by the Artist in relation to other Artists.
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
     * A Composite containing details of a role
     *  played by the Artist in relation to other Artists.
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
     * A Composite containing details of a role
     *  played by the Artist in relation to other Artists.
     *
     * @return \DedexBundle\Entity\Ern371\ArtistRoleType[]
     */
    public function getArtistRole()
    {
        return $this->artistRole;
    }

    /**
     * Sets a new artistRole
     *
     * A Composite containing details of a role
     *  played by the Artist in relation to other Artists.
     *
     * @param \DedexBundle\Entity\Ern371\ArtistRoleType[] $artistRole
     * @return self
     */
    public function setArtistRole(array $artistRole)
    {
        $this->artistRole = $artistRole;
        return $this;
    }
}

