<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing ReleaseCollectionReferenceListType
 *
 * A Composite containing a list of
 *  ReleaseCollectionReferences.
 * XSD Type: ReleaseCollectionReferenceList
 */
class ReleaseCollectionReferenceListType
{
    /**
     * The number of referenced Collections
     *  (typically Chapters).
     *
     * @var int $numberOfCollections
     */
    private $numberOfCollections = null;

    /**
     * A Composite containing a
     *  ReleaseCollectionReference for a Collection (specific to this Message). The
     *  referenced Collection has to be of CollectionType Series, Season or
     *  Episode.
     *
     * @var \DedexBundle\Entity\Ern383\ReleaseCollectionReferenceType[] $releaseCollectionReference
     */
    private $releaseCollectionReference = [
        
    ];

    /**
     * Gets as numberOfCollections
     *
     * The number of referenced Collections
     *  (typically Chapters).
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
     * The number of referenced Collections
     *  (typically Chapters).
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
     * A Composite containing a
     *  ReleaseCollectionReference for a Collection (specific to this Message). The
     *  referenced Collection has to be of CollectionType Series, Season or
     *  Episode.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\ReleaseCollectionReferenceType $releaseCollectionReference
     */
    public function addToReleaseCollectionReference(\DedexBundle\Entity\Ern383\ReleaseCollectionReferenceType $releaseCollectionReference)
    {
        $this->releaseCollectionReference[] = $releaseCollectionReference;
        return $this;
    }

    /**
     * isset releaseCollectionReference
     *
     * A Composite containing a
     *  ReleaseCollectionReference for a Collection (specific to this Message). The
     *  referenced Collection has to be of CollectionType Series, Season or
     *  Episode.
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
     * A Composite containing a
     *  ReleaseCollectionReference for a Collection (specific to this Message). The
     *  referenced Collection has to be of CollectionType Series, Season or
     *  Episode.
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
     * A Composite containing a
     *  ReleaseCollectionReference for a Collection (specific to this Message). The
     *  referenced Collection has to be of CollectionType Series, Season or
     *  Episode.
     *
     * @return \DedexBundle\Entity\Ern383\ReleaseCollectionReferenceType[]
     */
    public function getReleaseCollectionReference()
    {
        return $this->releaseCollectionReference;
    }

    /**
     * Sets a new releaseCollectionReference
     *
     * A Composite containing a
     *  ReleaseCollectionReference for a Collection (specific to this Message). The
     *  referenced Collection has to be of CollectionType Series, Season or
     *  Episode.
     *
     * @param \DedexBundle\Entity\Ern383\ReleaseCollectionReferenceType[] $releaseCollectionReference
     * @return self
     */
    public function setReleaseCollectionReference(array $releaseCollectionReference)
    {
        $this->releaseCollectionReference = $releaseCollectionReference;
        return $this;
    }
}

