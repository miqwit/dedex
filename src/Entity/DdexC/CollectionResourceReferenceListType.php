<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing CollectionResourceReferenceListType
 *
 * A ddex:Composite containing a list of ddex:CollectionResourceReferences.
 * XSD Type: CollectionResourceReferenceList
 */
class CollectionResourceReferenceListType
{
    /**
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @var string[] $collectionResourceReference
     */
    private $collectionResourceReference = [
        
    ];

    /**
     * Adds as collectionResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @return self
     * @param string $collectionResourceReference
     */
    public function addToCollectionResourceReference($collectionResourceReference)
    {
        $this->collectionResourceReference[] = $collectionResourceReference;
        return $this;
    }

    /**
     * isset collectionResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
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
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
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
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @return string[]
     */
    public function getCollectionResourceReference()
    {
        return $this->collectionResourceReference;
    }

    /**
     * Sets a new collectionResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @param string $collectionResourceReference
     * @return self
     */
    public function setCollectionResourceReference(array $collectionResourceReference)
    {
        $this->collectionResourceReference = $collectionResourceReference;
        return $this;
    }
}

