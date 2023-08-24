<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing CollectionWorkReferenceListType
 *
 * A ddex:Composite containing a list of ddex:CollectionWorkReferences.
 * XSD Type: CollectionWorkReferenceList
 */
class CollectionWorkReferenceListType
{
    /**
     * A ddex:Composite containing a ddex:CollectionWorkReference for a ddex:Collection (specific to this ddex:Message).
     *
     * @var \DedexBundle\Entity\Ern341\CollectionWorkReferenceType[] $collectionWorkReference
     */
    private $collectionWorkReference = [
        
    ];

    /**
     * Adds as collectionWorkReference
     *
     * A ddex:Composite containing a ddex:CollectionWorkReference for a ddex:Collection (specific to this ddex:Message).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\CollectionWorkReferenceType $collectionWorkReference
     */
    public function addToCollectionWorkReference(\DedexBundle\Entity\Ern341\CollectionWorkReferenceType $collectionWorkReference)
    {
        $this->collectionWorkReference[] = $collectionWorkReference;
        return $this;
    }

    /**
     * isset collectionWorkReference
     *
     * A ddex:Composite containing a ddex:CollectionWorkReference for a ddex:Collection (specific to this ddex:Message).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCollectionWorkReference($index)
    {
        return isset($this->collectionWorkReference[$index]);
    }

    /**
     * unset collectionWorkReference
     *
     * A ddex:Composite containing a ddex:CollectionWorkReference for a ddex:Collection (specific to this ddex:Message).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCollectionWorkReference($index)
    {
        unset($this->collectionWorkReference[$index]);
    }

    /**
     * Gets as collectionWorkReference
     *
     * A ddex:Composite containing a ddex:CollectionWorkReference for a ddex:Collection (specific to this ddex:Message).
     *
     * @return \DedexBundle\Entity\Ern341\CollectionWorkReferenceType[]
     */
    public function getCollectionWorkReference()
    {
        return $this->collectionWorkReference;
    }

    /**
     * Sets a new collectionWorkReference
     *
     * A ddex:Composite containing a ddex:CollectionWorkReference for a ddex:Collection (specific to this ddex:Message).
     *
     * @param \DedexBundle\Entity\Ern341\CollectionWorkReferenceType[] $collectionWorkReference
     * @return self
     */
    public function setCollectionWorkReference(array $collectionWorkReference)
    {
        $this->collectionWorkReference = $collectionWorkReference;
        return $this;
    }
}

