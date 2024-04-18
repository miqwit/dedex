<?php

namespace DedexBundle\Entity\Ern371;

/**
 * Class representing CollectionWorkReferenceListType
 *
 * A Composite containing a list of
 *  CollectionWorkReferences.
 * XSD Type: CollectionWorkReferenceList
 */
class CollectionWorkReferenceListType
{
    /**
     * A Composite containing a
     *  CollectionWorkReference for a Collection (specific to this
     *  Message).
     *
     * @var \DedexBundle\Entity\Ern371\CollectionWorkReferenceType[] $collectionWorkReference
     */
    private $collectionWorkReference = [
        
    ];

    /**
     * Adds as collectionWorkReference
     *
     * A Composite containing a
     *  CollectionWorkReference for a Collection (specific to this
     *  Message).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern371\CollectionWorkReferenceType $collectionWorkReference
     */
    public function addToCollectionWorkReference(\DedexBundle\Entity\Ern371\CollectionWorkReferenceType $collectionWorkReference)
    {
        $this->collectionWorkReference[] = $collectionWorkReference;
        return $this;
    }

    /**
     * isset collectionWorkReference
     *
     * A Composite containing a
     *  CollectionWorkReference for a Collection (specific to this
     *  Message).
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
     * A Composite containing a
     *  CollectionWorkReference for a Collection (specific to this
     *  Message).
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
     * A Composite containing a
     *  CollectionWorkReference for a Collection (specific to this
     *  Message).
     *
     * @return \DedexBundle\Entity\Ern371\CollectionWorkReferenceType[]
     */
    public function getCollectionWorkReference()
    {
        return $this->collectionWorkReference;
    }

    /**
     * Sets a new collectionWorkReference
     *
     * A Composite containing a
     *  CollectionWorkReference for a Collection (specific to this
     *  Message).
     *
     * @param \DedexBundle\Entity\Ern371\CollectionWorkReferenceType[] $collectionWorkReference
     * @return self
     */
    public function setCollectionWorkReference(array $collectionWorkReference)
    {
        $this->collectionWorkReference = $collectionWorkReference;
        return $this;
    }
}

