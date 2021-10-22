<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing ReleaseDealType
 *
 * A Composite containing details of one or more Deals pertaining to one or more Releases.
 * XSD Type: ReleaseDeal
 */
class ReleaseDealType
{

    /**
     * The Identifier (specific to the Message) of a Release in the Deal. This is a LocalReleaseAnchorReference starting with the letter R.
     *
     * @var string[] $dealReleaseReference
     */
    private $dealReleaseReference = [
        
    ];

    /**
     * A Composite containing details of a Deal governing the Usage of all Releases identified in the ReleaseDeal Composite.
     *
     * @var \DedexBundle\Entity\Ern41\DealType[] $deal
     */
    private $deal = [
        
    ];

    /**
     * Adds as dealReleaseReference
     *
     * The Identifier (specific to the Message) of a Release in the Deal. This is a LocalReleaseAnchorReference starting with the letter R.
     *
     * @return self
     * @param string $dealReleaseReference
     */
    public function addToDealReleaseReference($dealReleaseReference)
    {
        $this->dealReleaseReference[] = $dealReleaseReference;
        return $this;
    }

    /**
     * isset dealReleaseReference
     *
     * The Identifier (specific to the Message) of a Release in the Deal. This is a LocalReleaseAnchorReference starting with the letter R.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDealReleaseReference($index)
    {
        return isset($this->dealReleaseReference[$index]);
    }

    /**
     * unset dealReleaseReference
     *
     * The Identifier (specific to the Message) of a Release in the Deal. This is a LocalReleaseAnchorReference starting with the letter R.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDealReleaseReference($index)
    {
        unset($this->dealReleaseReference[$index]);
    }

    /**
     * Gets as dealReleaseReference
     *
     * The Identifier (specific to the Message) of a Release in the Deal. This is a LocalReleaseAnchorReference starting with the letter R.
     *
     * @return string[]
     */
    public function getDealReleaseReference()
    {
        return $this->dealReleaseReference;
    }

    /**
     * Sets a new dealReleaseReference
     *
     * The Identifier (specific to the Message) of a Release in the Deal. This is a LocalReleaseAnchorReference starting with the letter R.
     *
     * @param string $dealReleaseReference
     * @return self
     */
    public function setDealReleaseReference(array $dealReleaseReference)
    {
        $this->dealReleaseReference = $dealReleaseReference;
        return $this;
    }

    /**
     * Adds as deal
     *
     * A Composite containing details of a Deal governing the Usage of all Releases identified in the ReleaseDeal Composite.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\DealType $deal
     */
    public function addToDeal(\DedexBundle\Entity\Ern41\DealType $deal)
    {
        $this->deal[] = $deal;
        return $this;
    }

    /**
     * isset deal
     *
     * A Composite containing details of a Deal governing the Usage of all Releases identified in the ReleaseDeal Composite.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeal($index)
    {
        return isset($this->deal[$index]);
    }

    /**
     * unset deal
     *
     * A Composite containing details of a Deal governing the Usage of all Releases identified in the ReleaseDeal Composite.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeal($index)
    {
        unset($this->deal[$index]);
    }

    /**
     * Gets as deal
     *
     * A Composite containing details of a Deal governing the Usage of all Releases identified in the ReleaseDeal Composite.
     *
     * @return \DedexBundle\Entity\Ern41\DealType[]
     */
    public function getDeal()
    {
        return $this->deal;
    }

    /**
     * Sets a new deal
     *
     * A Composite containing details of a Deal governing the Usage of all Releases identified in the ReleaseDeal Composite.
     *
     * @param \DedexBundle\Entity\Ern41\DealType[] $deal
     * @return self
     */
    public function setDeal(array $deal)
    {
        $this->deal = $deal;
        return $this;
    }


}

