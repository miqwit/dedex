<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing PartyListType
 *
 * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
 * XSD Type: PartyList
 */

class PartyListType
{
    /**
     * A Composite containing details of a Party.
     *
     * @var \DedexBundle\Entity\Ern41\PartyType[] $party
     */
    private $party = [
        
    ];

    /**
     * Adds as party
     *
     * A Composite containing details of a Party.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\PartyType $party
     */
    public function addToParty(\DedexBundle\Entity\Ern41\PartyType $party)
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
     * @return \DedexBundle\Entity\Ern41\PartyType[]
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
     * @param \DedexBundle\Entity\Ern41\PartyType[] $party
     * @return self
     */
    public function setParty(array $party)
    {
        $this->party = $party;
        return $this;
    }

}