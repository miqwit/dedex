<?php

namespace DedexBundle\Entity\Ern431;

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
     * @var \DedexBundle\Entity\Ern431\PartyType[] $party
     */
    private $party = [
        
    ];

    /**
     * A Composite containing details of a Brand.
     *
     * @var \DedexBundle\Entity\Ern431\BrandType[] $brand
     */
    private $brand = [
        
    ];

    /**
     * Adds as party
     *
     * A Composite containing details of a Party.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\PartyType $party
     */
    public function addToParty(\DedexBundle\Entity\Ern431\PartyType $party)
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
     * @return \DedexBundle\Entity\Ern431\PartyType[]
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
     * @param \DedexBundle\Entity\Ern431\PartyType[] $party
     * @return self
     */
    public function setParty(array $party)
    {
        $this->party = $party;
        return $this;
    }

    /**
     * Adds as brand
     *
     * A Composite containing details of a Brand.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\BrandType $brand
     */
    public function addToBrand(\DedexBundle\Entity\Ern431\BrandType $brand)
    {
        $this->brand[] = $brand;
        return $this;
    }

    /**
     * isset brand
     *
     * A Composite containing details of a Brand.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBrand($index)
    {
        return isset($this->brand[$index]);
    }

    /**
     * unset brand
     *
     * A Composite containing details of a Brand.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBrand($index)
    {
        unset($this->brand[$index]);
    }

    /**
     * Gets as brand
     *
     * A Composite containing details of a Brand.
     *
     * @return \DedexBundle\Entity\Ern431\BrandType[]
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Sets a new brand
     *
     * A Composite containing details of a Brand.
     *
     * @param \DedexBundle\Entity\Ern431\BrandType[] $brand
     * @return self
     */
    public function setBrand(?array $brand = null)
    {
        $this->brand = $brand;
        return $this;
    }
}

