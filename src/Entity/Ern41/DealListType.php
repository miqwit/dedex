<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing DealListType
 *
 * A Composite containing details of one or more Deals governing the Usage of the Releases in the Message.
 * XSD Type: DealList
 */

class DealListType
{
    /**
     * A Composite containing details of a ReleaseDeal.
     *
     * @var \DedexBundle\Entity\Ern41\ReleaseDealType[] $releaseDeal
     */
    private $releaseDeal = [
        
    ];

    /**
     * Adds as party
     *
     * A Composite containing details of a ReleaseDeal.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\ReleaseDealType $releaseDeal
     */
    public function addToReleaseDeal(\DedexBundle\Entity\Ern41\ReleaseDealType $releaseDeal)
    {
        $this->releaseDeal[] = $releaseDeal;
        return $this;
    }

    /**
     * isset party
     *
     * A Composite containing details of a ReleaseDeal.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseDeal($index)
    {
        return isset($this->releaseDeal[$index]);
    }

    /**
     * unset party
     *
     * A Composite containing details of a ReleaseDeal.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseDeal($index)
    {
        unset($this->releaseDeal[$index]);
    }

    /**
     * Gets as party
     *
     * A Composite containing details of a ReleaseDeal.
     *
     * @return \DedexBundle\Entity\Ern41\ReleaseDealType[]
     */
    public function getReleaseDeal()
    {
        return $this->releaseDeal;
    }

    /**
     * Sets a new party
     *
     * A Composite containing details of a ReleaseDeal.
     *
     * @param \DedexBundle\Entity\Ern41\ReleaseDealType[] $releaseDeal
     * @return self
     */
    public function setReleaseDeal(array $releaseDeal)
    {
        $this->releaseDeal = $releaseDeal;
        return $this;
    }

}