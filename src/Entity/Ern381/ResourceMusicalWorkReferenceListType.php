<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing ResourceMusicalWorkReferenceListType
 *
 * A Composite containing a list of ResourceMusicalWorkReferences.
 * XSD Type: ResourceMusicalWorkReferenceList
 */
class ResourceMusicalWorkReferenceListType
{
    /**
     * A Composite containing a ResourceMusicalWorkReference for a MusicalWork (specific to this Message).
     *
     * @var \DedexBundle\Entity\Ern381\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReference
     */
    private $resourceMusicalWorkReference = [
        
    ];

    /**
     * Adds as resourceMusicalWorkReference
     *
     * A Composite containing a ResourceMusicalWorkReference for a MusicalWork (specific to this Message).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference
     */
    public function addToResourceMusicalWorkReference(\DedexBundle\Entity\Ern381\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference)
    {
        $this->resourceMusicalWorkReference[] = $resourceMusicalWorkReference;
        return $this;
    }

    /**
     * isset resourceMusicalWorkReference
     *
     * A Composite containing a ResourceMusicalWorkReference for a MusicalWork (specific to this Message).
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
     * A Composite containing a ResourceMusicalWorkReference for a MusicalWork (specific to this Message).
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
     * A Composite containing a ResourceMusicalWorkReference for a MusicalWork (specific to this Message).
     *
     * @return \DedexBundle\Entity\Ern381\ResourceMusicalWorkReferenceType[]
     */
    public function getResourceMusicalWorkReference()
    {
        return $this->resourceMusicalWorkReference;
    }

    /**
     * Sets a new resourceMusicalWorkReference
     *
     * A Composite containing a ResourceMusicalWorkReference for a MusicalWork (specific to this Message).
     *
     * @param \DedexBundle\Entity\Ern381\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReference
     * @return self
     */
    public function setResourceMusicalWorkReference(array $resourceMusicalWorkReference)
    {
        $this->resourceMusicalWorkReference = $resourceMusicalWorkReference;
        return $this;
    }
}

