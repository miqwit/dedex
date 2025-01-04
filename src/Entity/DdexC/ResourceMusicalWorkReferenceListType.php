<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing ResourceMusicalWorkReferenceListType
 *
 * A ddex:Composite containing a list of ddex:ResourceMusicalWorkReferences.
 * XSD Type: ResourceMusicalWorkReferenceList
 */
class ResourceMusicalWorkReferenceListType
{
    /**
     * A ddex:Composite containing a ddex:ResourceMusicalWorkReference for a ddex:MusicalWork (specific to this ddex:Message).
     *
     * @var \DedexBundle\Entity\DdexC\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReference
     */
    private $resourceMusicalWorkReference = [
        
    ];

    /**
     * Adds as resourceMusicalWorkReference
     *
     * A ddex:Composite containing a ddex:ResourceMusicalWorkReference for a ddex:MusicalWork (specific to this ddex:Message).
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference
     */
    public function addToResourceMusicalWorkReference(\DedexBundle\Entity\DdexC\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference)
    {
        $this->resourceMusicalWorkReference[] = $resourceMusicalWorkReference;
        return $this;
    }

    /**
     * isset resourceMusicalWorkReference
     *
     * A ddex:Composite containing a ddex:ResourceMusicalWorkReference for a ddex:MusicalWork (specific to this ddex:Message).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceMusicalWorkReference($index)
    {
        return isset($this->resourceMusicalWorkReference[$index]);
    }

    /**
     * unset resourceMusicalWorkReference
     *
     * A ddex:Composite containing a ddex:ResourceMusicalWorkReference for a ddex:MusicalWork (specific to this ddex:Message).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceMusicalWorkReference($index)
    {
        unset($this->resourceMusicalWorkReference[$index]);
    }

    /**
     * Gets as resourceMusicalWorkReference
     *
     * A ddex:Composite containing a ddex:ResourceMusicalWorkReference for a ddex:MusicalWork (specific to this ddex:Message).
     *
     * @return \DedexBundle\Entity\DdexC\ResourceMusicalWorkReferenceType[]
     */
    public function getResourceMusicalWorkReference()
    {
        return $this->resourceMusicalWorkReference;
    }

    /**
     * Sets a new resourceMusicalWorkReference
     *
     * A ddex:Composite containing a ddex:ResourceMusicalWorkReference for a ddex:MusicalWork (specific to this ddex:Message).
     *
     * @param \DedexBundle\Entity\DdexC\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReference
     * @return self
     */
    public function setResourceMusicalWorkReference(array $resourceMusicalWorkReference)
    {
        $this->resourceMusicalWorkReference = $resourceMusicalWorkReference;
        return $this;
    }
}

