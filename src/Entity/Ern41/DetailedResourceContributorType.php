<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing DetailedResourceContributorType
 *
 * A Composite containing details of the Name, Identifier and Role(s) of a Contributor to a Resource.
 * XSD Type: DetailedResourceContributor
 */
class DetailedResourceContributorType
{

    /**
     * The number indicating the order of the ResourceContributor in a group of ResourceContributors that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @var \DedexBundle\Entity\Ern\DetailedPartyIdType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * A Composite containing details of the PartyName(s).
     *
     * @var \DedexBundle\Entity\Ern\PartyNameType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * A Composite containing details of a Role played by the Contributor.
     *
     * @var \DedexBundle\Entity\Ern\ContributorRoleType[] $role
     */
    private $role = [
        
    ];

    /**
     * A Type of musical Instrument played by the Artist.
     *
     * @var \DedexBundle\Entity\Ern\InstrumentTypeType[] $instrumentType
     */
    private $instrumentType = [
        
    ];

    /**
     * A Flag indicating whether the Contributor is a featured Artist (=true) or not (=false).
     *
     * @var bool $hasMadeFeaturedContribution
     */
    private $hasMadeFeaturedContribution = null;

    /**
     * A Flag indicating whether the Contributor is an Artist that has a contract for its part in creating the Resource (=true) or not (=false).
     *
     * @var bool $hasMadeContractedContribution
     */
    private $hasMadeContractedContribution = null;

    /**
     * A Role for which the Party is credited.
     *
     * @var \DedexBundle\Entity\Ern\DisplayCreditsType[] $displayCredits
     */
    private $displayCredits = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the ResourceContributor in a group of ResourceContributors that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
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
     * The number indicating the order of the ResourceContributor in a group of ResourceContributors that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
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
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\DetailedPartyIdType $partyId
     */
    public function addToPartyId(\DedexBundle\Entity\Ern\DetailedPartyIdType $partyId)
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
     * @return \DedexBundle\Entity\Ern\DetailedPartyIdType[]
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
     * @param \DedexBundle\Entity\Ern\DetailedPartyIdType[] $partyId
     * @return self
     */
    public function setPartyId(array $partyId)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Adds as partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\PartyNameType $partyName
     */
    public function addToPartyName(\DedexBundle\Entity\Ern\PartyNameType $partyName)
    {
        $this->partyName[] = $partyName;
        return $this;
    }

    /**
     * isset partyName
     *
     * A Composite containing details of the PartyName(s).
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
     *
     * @return \DedexBundle\Entity\Ern\PartyNameType[]
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @param \DedexBundle\Entity\Ern\PartyNameType[] $partyName
     * @return self
     */
    public function setPartyName(array $partyName)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Adds as role
     *
     * A Composite containing details of a Role played by the Contributor.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\ContributorRoleType $role
     */
    public function addToRole(\DedexBundle\Entity\Ern\ContributorRoleType $role)
    {
        $this->role[] = $role;
        return $this;
    }

    /**
     * isset role
     *
     * A Composite containing details of a Role played by the Contributor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRole($index)
    {
        return isset($this->role[$index]);
    }

    /**
     * unset role
     *
     * A Composite containing details of a Role played by the Contributor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRole($index)
    {
        unset($this->role[$index]);
    }

    /**
     * Gets as role
     *
     * A Composite containing details of a Role played by the Contributor.
     *
     * @return \DedexBundle\Entity\Ern\ContributorRoleType[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * A Composite containing details of a Role played by the Contributor.
     *
     * @param \DedexBundle\Entity\Ern\ContributorRoleType[] $role
     * @return self
     */
    public function setRole(array $role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Adds as instrumentType
     *
     * A Type of musical Instrument played by the Artist.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\InstrumentTypeType $instrumentType
     */
    public function addToInstrumentType(\DedexBundle\Entity\Ern\InstrumentTypeType $instrumentType)
    {
        $this->instrumentType[] = $instrumentType;
        return $this;
    }

    /**
     * isset instrumentType
     *
     * A Type of musical Instrument played by the Artist.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstrumentType($index)
    {
        return isset($this->instrumentType[$index]);
    }

    /**
     * unset instrumentType
     *
     * A Type of musical Instrument played by the Artist.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstrumentType($index)
    {
        unset($this->instrumentType[$index]);
    }

    /**
     * Gets as instrumentType
     *
     * A Type of musical Instrument played by the Artist.
     *
     * @return \DedexBundle\Entity\Ern\InstrumentTypeType[]
     */
    public function getInstrumentType()
    {
        return $this->instrumentType;
    }

    /**
     * Sets a new instrumentType
     *
     * A Type of musical Instrument played by the Artist.
     *
     * @param \DedexBundle\Entity\Ern\InstrumentTypeType[] $instrumentType
     * @return self
     */
    public function setInstrumentType(array $instrumentType)
    {
        $this->instrumentType = $instrumentType;
        return $this;
    }

    /**
     * Gets as hasMadeFeaturedContribution
     *
     * A Flag indicating whether the Contributor is a featured Artist (=true) or not (=false).
     *
     * @return bool
     */
    public function getHasMadeFeaturedContribution()
    {
        return $this->hasMadeFeaturedContribution;
    }

    /**
     * Sets a new hasMadeFeaturedContribution
     *
     * A Flag indicating whether the Contributor is a featured Artist (=true) or not (=false).
     *
     * @param bool $hasMadeFeaturedContribution
     * @return self
     */
    public function setHasMadeFeaturedContribution($hasMadeFeaturedContribution)
    {
        $this->hasMadeFeaturedContribution = $hasMadeFeaturedContribution;
        return $this;
    }

    /**
     * Gets as hasMadeContractedContribution
     *
     * A Flag indicating whether the Contributor is an Artist that has a contract for its part in creating the Resource (=true) or not (=false).
     *
     * @return bool
     */
    public function getHasMadeContractedContribution()
    {
        return $this->hasMadeContractedContribution;
    }

    /**
     * Sets a new hasMadeContractedContribution
     *
     * A Flag indicating whether the Contributor is an Artist that has a contract for its part in creating the Resource (=true) or not (=false).
     *
     * @param bool $hasMadeContractedContribution
     * @return self
     */
    public function setHasMadeContractedContribution($hasMadeContractedContribution)
    {
        $this->hasMadeContractedContribution = $hasMadeContractedContribution;
        return $this;
    }

    /**
     * Adds as displayCredits
     *
     * A Role for which the Party is credited.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\DisplayCreditsType $displayCredits
     */
    public function addToDisplayCredits(\DedexBundle\Entity\Ern\DisplayCreditsType $displayCredits)
    {
        $this->displayCredits[] = $displayCredits;
        return $this;
    }

    /**
     * isset displayCredits
     *
     * A Role for which the Party is credited.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayCredits($index)
    {
        return isset($this->displayCredits[$index]);
    }

    /**
     * unset displayCredits
     *
     * A Role for which the Party is credited.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayCredits($index)
    {
        unset($this->displayCredits[$index]);
    }

    /**
     * Gets as displayCredits
     *
     * A Role for which the Party is credited.
     *
     * @return \DedexBundle\Entity\Ern\DisplayCreditsType[]
     */
    public function getDisplayCredits()
    {
        return $this->displayCredits;
    }

    /**
     * Sets a new displayCredits
     *
     * A Role for which the Party is credited.
     *
     * @param \DedexBundle\Entity\Ern\DisplayCreditsType[] $displayCredits
     * @return self
     */
    public function setDisplayCredits(array $displayCredits)
    {
        $this->displayCredits = $displayCredits;
        return $this;
    }


}

