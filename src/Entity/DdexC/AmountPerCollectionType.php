<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing AmountPerCollectionType
 *
 * A ddex:Composite containing details of an ddex:Amount that has to be paid per ddex:Collection.
 * XSD Type: AmountPerCollection
 */
class AmountPerCollectionType
{
    /**
     * The ddex:Amount specified for the ddex:CollectionType.
     *
     * @var float $amount
     */
    private $amount = null;

    /**
     * A ddex:Composite containing details of the ddex:Type of the ddex:Collection.
     *
     * @var \DedexBundle\Entity\DdexC\CollectionTypeType $collectionType
     */
    private $collectionType = null;

    /**
     * Gets as amount
     *
     * The ddex:Amount specified for the ddex:CollectionType.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * The ddex:Amount specified for the ddex:CollectionType.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as collectionType
     *
     * A ddex:Composite containing details of the ddex:Type of the ddex:Collection.
     *
     * @return \DedexBundle\Entity\DdexC\CollectionTypeType
     */
    public function getCollectionType()
    {
        return $this->collectionType;
    }

    /**
     * Sets a new collectionType
     *
     * A ddex:Composite containing details of the ddex:Type of the ddex:Collection.
     *
     * @param \DedexBundle\Entity\DdexC\CollectionTypeType $collectionType
     * @return self
     */
    public function setCollectionType(\DedexBundle\Entity\DdexC\CollectionTypeType $collectionType)
    {
        $this->collectionType = $collectionType;
        return $this;
    }
}

