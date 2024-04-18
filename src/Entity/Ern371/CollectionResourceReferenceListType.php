<?php

namespace DedexBundle\Entity\Ern371;

/**
 * Class representing CollectionResourceReferenceListType
 *
 * A Composite containing a list of
 *  CollectionResourceReferences.
 * XSD Type: CollectionResourceReferenceList
 */
class CollectionResourceReferenceListType
{
    /**
     * A Composite containing a
     *  CollectionResourceReference for a Collection (specific to this
     *  Message).
     *
     * @var \DedexBundle\Entity\Ern371\CollectionResourceReferenceType[] $collectionResourceReference
     */
    private $collectionResourceReference = [
        
    ];

    /**
     * Adds as collectionResourceReference
     *
     * A Composite containing a
     *  CollectionResourceReference for a Collection (specific to this
     *  Message).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern371\CollectionResourceReferenceType $collectionResourceReference
     */
    public function addToCollectionResourceReference(\DedexBundle\Entity\Ern371\CollectionResourceReferenceType $collectionResourceReference)
    {
        $this->collectionResourceReference[] = $collectionResourceReference;
        return $this;
    }

    /**
     * isset collectionResourceReference
     *
     * A Composite containing a
     *  CollectionResourceReference for a Collection (specific to this
     *  Message).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCollectionResourceReference($index)
    {
        return isset($this->collectionResourceReference[$index]);
    }

    /**
     * unset collectionResourceReference
     *
     * A Composite containing a
     *  CollectionResourceReference for a Collection (specific to this
     *  Message).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCollectionResourceReference($index)
    {
        unset($this->collectionResourceReference[$index]);
    }

    /**
     * Gets as collectionResourceReference
     *
     * A Composite containing a
     *  CollectionResourceReference for a Collection (specific to this
     *  Message).
     *
     * @return \DedexBundle\Entity\Ern371\CollectionResourceReferenceType[]
     */
    public function getCollectionResourceReference()
    {
        return $this->collectionResourceReference;
    }

    /**
     * Sets a new collectionResourceReference
     *
     * A Composite containing a
     *  CollectionResourceReference for a Collection (specific to this
     *  Message).
     *
     * @param \DedexBundle\Entity\Ern371\CollectionResourceReferenceType[] $collectionResourceReference
     * @return self
     */
    public function setCollectionResourceReference(array $collectionResourceReference)
    {
        $this->collectionResourceReference = $collectionResourceReference;
        return $this;
    }
}

