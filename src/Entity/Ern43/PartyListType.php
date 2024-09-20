<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing PartyListType
 *
 * A Composite containing details of one or more Parties.
 * XSD Type: PartyList
 */
class PartyListType
{
    /**
     * A Composite containing details of a Party.
     *
     * @var \DedexBundle\Entity\Ern43\PartyType[] $party
     */
    private $party = [
        
    ];

    /**
     * Adds as party
     *
     * A Composite containing details of a Party.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\PartyType $party
     */
    public function addToParty(\DedexBundle\Entity\Ern43\PartyType $party)
    {
        $this->party[] = $party;
        return $this;
    }

    /**
     * isset party
     *
     * A Composite containing details of a Party.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParty($index)
    {
        return isset($this->party[$index]);
    }

    /**
     * unset party
     *
     * A Composite containing details of a Party.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParty($index)
    {
        unset($this->party[$index]);
    }

    /**
     * Gets as party
     *
     * A Composite containing details of a Party.
     *
     * @return \DedexBundle\Entity\Ern43\PartyType[]
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * A Composite containing details of a Party.
     *
     * @param \DedexBundle\Entity\Ern43\PartyType[] $party
     * @return self
     */
    public function setParty(array $party)
    {
        $this->party = $party;
        return $this;
    }
}

