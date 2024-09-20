<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing RelatedPartyType
 *
 * A Composite containing details of a PartyRelatedPartyReference for the case where one Party is related to another one.
 * XSD Type: RelatedParty
 */
class RelatedPartyType
{
    /**
     * A Reference for a related Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $partyRelatedPartyReference
     */
    private $partyRelatedPartyReference = null;

    /**
     * A Type of relationship between two Parties.
     *
     * @var \DedexBundle\Entity\Ern43\PartyRelationshipTypeType $partyRelationshipType
     */
    private $partyRelationshipType = null;

    /**
     * Gets as partyRelatedPartyReference
     *
     * A Reference for a related Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string
     */
    public function getPartyRelatedPartyReference()
    {
        return $this->partyRelatedPartyReference;
    }

    /**
     * Sets a new partyRelatedPartyReference
     *
     * A Reference for a related Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $partyRelatedPartyReference
     * @return self
     */
    public function setPartyRelatedPartyReference($partyRelatedPartyReference)
    {
        $this->partyRelatedPartyReference = $partyRelatedPartyReference;
        return $this;
    }

    /**
     * Gets as partyRelationshipType
     *
     * A Type of relationship between two Parties.
     *
     * @return \DedexBundle\Entity\Ern43\PartyRelationshipTypeType
     */
    public function getPartyRelationshipType()
    {
        return $this->partyRelationshipType;
    }

    /**
     * Sets a new partyRelationshipType
     *
     * A Type of relationship between two Parties.
     *
     * @param \DedexBundle\Entity\Ern43\PartyRelationshipTypeType $partyRelationshipType
     * @return self
     */
    public function setPartyRelationshipType(\DedexBundle\Entity\Ern43\PartyRelationshipTypeType $partyRelationshipType)
    {
        $this->partyRelationshipType = $partyRelationshipType;
        return $this;
    }
}

