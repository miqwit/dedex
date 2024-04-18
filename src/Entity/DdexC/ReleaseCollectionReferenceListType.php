<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing ReleaseCollectionReferenceListType
 *
 * A ddex:Composite containing a list of ddex:ReleaseCollectionReferences.
 * XSD Type: ReleaseCollectionReferenceList
 */
class ReleaseCollectionReferenceListType
{
    /**
     * The number of referenced ddexC:Collections (typically Chapters).
     *
     * @var int $numberOfCollections
     */
    private $numberOfCollections = null;

    /**
     * A ddex:Composite containing a ddex:ReleaseCollectionReference for a ddex:Collection (specific to this ddex:Message). The referenced ddex:Collection has to be of ddex:CollectionType ddex:Series, ddex:Season or ddex:Episode.
     *
     * @var \DedexBundle\Entity\DdexC\ReleaseCollectionReferenceType[] $releaseCollectionReference
     */
    private $releaseCollectionReference = [
        
    ];

    /**
     * Gets as numberOfCollections
     *
     * The number of referenced ddexC:Collections (typically Chapters).
     *
     * @return int
     */
    public function getNumberOfCollections()
    {
        return $this->numberOfCollections;
    }

    /**
     * Sets a new numberOfCollections
     *
     * The number of referenced ddexC:Collections (typically Chapters).
     *
     * @param int $numberOfCollections
     * @return self
     */
    public function setNumberOfCollections($numberOfCollections)
    {
        $this->numberOfCollections = $numberOfCollections;
        return $this;
    }

    /**
     * Adds as releaseCollectionReference
     *
     * A ddex:Composite containing a ddex:ReleaseCollectionReference for a ddex:Collection (specific to this ddex:Message). The referenced ddex:Collection has to be of ddex:CollectionType ddex:Series, ddex:Season or ddex:Episode.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ReleaseCollectionReferenceType $releaseCollectionReference
     */
    public function addToReleaseCollectionReference(\DedexBundle\Entity\DdexC\ReleaseCollectionReferenceType $releaseCollectionReference)
    {
        $this->releaseCollectionReference[] = $releaseCollectionReference;
        return $this;
    }

    /**
     * isset releaseCollectionReference
     *
     * A ddex:Composite containing a ddex:ReleaseCollectionReference for a ddex:Collection (specific to this ddex:Message). The referenced ddex:Collection has to be of ddex:CollectionType ddex:Series, ddex:Season or ddex:Episode.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseCollectionReference($index)
    {
        return isset($this->releaseCollectionReference[$index]);
    }

    /**
     * unset releaseCollectionReference
     *
     * A ddex:Composite containing a ddex:ReleaseCollectionReference for a ddex:Collection (specific to this ddex:Message). The referenced ddex:Collection has to be of ddex:CollectionType ddex:Series, ddex:Season or ddex:Episode.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseCollectionReference($index)
    {
        unset($this->releaseCollectionReference[$index]);
    }

    /**
     * Gets as releaseCollectionReference
     *
     * A ddex:Composite containing a ddex:ReleaseCollectionReference for a ddex:Collection (specific to this ddex:Message). The referenced ddex:Collection has to be of ddex:CollectionType ddex:Series, ddex:Season or ddex:Episode.
     *
     * @return \DedexBundle\Entity\DdexC\ReleaseCollectionReferenceType[]
     */
    public function getReleaseCollectionReference()
    {
        return $this->releaseCollectionReference;
    }

    /**
     * Sets a new releaseCollectionReference
     *
     * A ddex:Composite containing a ddex:ReleaseCollectionReference for a ddex:Collection (specific to this ddex:Message). The referenced ddex:Collection has to be of ddex:CollectionType ddex:Series, ddex:Season or ddex:Episode.
     *
     * @param \DedexBundle\Entity\DdexC\ReleaseCollectionReferenceType[] $releaseCollectionReference
     * @return self
     */
    public function setReleaseCollectionReference(array $releaseCollectionReference)
    {
        $this->releaseCollectionReference = $releaseCollectionReference;
        return $this;
    }
}

