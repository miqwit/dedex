<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing PartyWithRoleType
 *
 * A Composite containing details of a Party.
 * Explanatory Note: This Composite is named PartyWithRole to disambiguate it from the basic mead:Party Composite.
 * XSD Type: PartyWithRole
 */
class PartyWithRoleType
{
    /**
     * An International Standard Name Identifier, the ISO 27729 Standard Identifier for names, of the Party for which information is provided. DDEX will enforce the syntax [0-9]{15}[X0-9] using XML Schema in the future.
     *
     * @var string $iSNI
     */
    private $iSNI = null;

    /**
     * An Identifier of the Party for which information is provided according to the DdexPartyId standard DDEX-DPID.
     *
     * @var string $dPID
     */
    private $dPID = null;

    /**
     * An Interested Party Identifier, a CISAC standard Identifier, of the Party for which information is provided. An IpiNameNumber comprises 11 digits.
     *
     * @var string $ipiNameNumber
     */
    private $ipiNameNumber = null;

    /**
     * An International Performer Number, an IPDA Identifier, of the Party for which information is provided.
     *
     * @var string $iPN
     */
    private $iPN = null;

    /**
     * A Composite containing details of a ProprietaryIdentifier of the Party for which information is provided.
     *
     * @var \DedexBundle\Entity\Ern43\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * A Composite containing details of a Name of the Contributor.
     *
     * @var \DedexBundle\Entity\Ern43\PartyNameWithTerritoryType $partyName
     */
    private $partyName = null;

    /**
     * A Role played by the Contributor.
     *
     * @var \DedexBundle\Entity\Ern43\ResourceContributorRoleType $role
     */
    private $role = null;

    /**
     * Gets as iSNI
     *
     * An International Standard Name Identifier, the ISO 27729 Standard Identifier for names, of the Party for which information is provided. DDEX will enforce the syntax [0-9]{15}[X0-9] using XML Schema in the future.
     *
     * @return string
     */
    public function getISNI()
    {
        return $this->iSNI;
    }

    /**
     * Sets a new iSNI
     *
     * An International Standard Name Identifier, the ISO 27729 Standard Identifier for names, of the Party for which information is provided. DDEX will enforce the syntax [0-9]{15}[X0-9] using XML Schema in the future.
     *
     * @param string $iSNI
     * @return self
     */
    public function setISNI($iSNI)
    {
        $this->iSNI = $iSNI;
        return $this;
    }

    /**
     * Gets as dPID
     *
     * An Identifier of the Party for which information is provided according to the DdexPartyId standard DDEX-DPID.
     *
     * @return string
     */
    public function getDPID()
    {
        return $this->dPID;
    }

    /**
     * Sets a new dPID
     *
     * An Identifier of the Party for which information is provided according to the DdexPartyId standard DDEX-DPID.
     *
     * @param string $dPID
     * @return self
     */
    public function setDPID($dPID)
    {
        $this->dPID = $dPID;
        return $this;
    }

    /**
     * Gets as ipiNameNumber
     *
     * An Interested Party Identifier, a CISAC standard Identifier, of the Party for which information is provided. An IpiNameNumber comprises 11 digits.
     *
     * @return string
     */
    public function getIpiNameNumber()
    {
        return $this->ipiNameNumber;
    }

    /**
     * Sets a new ipiNameNumber
     *
     * An Interested Party Identifier, a CISAC standard Identifier, of the Party for which information is provided. An IpiNameNumber comprises 11 digits.
     *
     * @param string $ipiNameNumber
     * @return self
     */
    public function setIpiNameNumber($ipiNameNumber)
    {
        $this->ipiNameNumber = $ipiNameNumber;
        return $this;
    }

    /**
     * Gets as iPN
     *
     * An International Performer Number, an IPDA Identifier, of the Party for which information is provided.
     *
     * @return string
     */
    public function getIPN()
    {
        return $this->iPN;
    }

    /**
     * Sets a new iPN
     *
     * An International Performer Number, an IPDA Identifier, of the Party for which information is provided.
     *
     * @param string $iPN
     * @return self
     */
    public function setIPN($iPN)
    {
        $this->iPN = $iPN;
        return $this;
    }

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Party for which information is provided.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\ProprietaryIdType $proprietaryId
     */
    public function addToProprietaryId(\DedexBundle\Entity\Ern43\ProprietaryIdType $proprietaryId)
    {
        $this->proprietaryId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Party for which information is provided.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProprietaryId($index)
    {
        return isset($this->proprietaryId[$index]);
    }

    /**
     * unset proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Party for which information is provided.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProprietaryId($index)
    {
        unset($this->proprietaryId[$index]);
    }

    /**
     * Gets as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Party for which information is provided.
     *
     * @return \DedexBundle\Entity\Ern43\ProprietaryIdType[]
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Party for which information is provided.
     *
     * @param \DedexBundle\Entity\Ern43\ProprietaryIdType[] $proprietaryId
     * @return self
     */
    public function setProprietaryId(array $proprietaryId = null)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }

    /**
     * Gets as partyName
     *
     * A Composite containing details of a Name of the Contributor.
     *
     * @return \DedexBundle\Entity\Ern43\PartyNameWithTerritoryType
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A Composite containing details of a Name of the Contributor.
     *
     * @param \DedexBundle\Entity\Ern43\PartyNameWithTerritoryType $partyName
     * @return self
     */
    public function setPartyName(?\DedexBundle\Entity\Ern43\PartyNameWithTerritoryType $partyName = null)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Gets as role
     *
     * A Role played by the Contributor.
     *
     * @return \DedexBundle\Entity\Ern43\ResourceContributorRoleType
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * A Role played by the Contributor.
     *
     * @param \DedexBundle\Entity\Ern43\ResourceContributorRoleType $role
     * @return self
     */
    public function setRole(?\DedexBundle\Entity\Ern43\ResourceContributorRoleType $role = null)
    {
        $this->role = $role;
        return $this;
    }
}

