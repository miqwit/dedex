<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing ResourceContainedResourceReferenceListType
 *
 * A Composite containing details of one or more
 *  ResourceContainedResourceReferences.
 * XSD Type: ResourceContainedResourceReferenceList
 */
class ResourceContainedResourceReferenceListType
{
    /**
     * A Composite containing details of a
     *  ResourceContainedResourceReference.
     *
     * @var \DedexBundle\Entity\Ern383\ResourceContainedResourceReferenceType[] $resourceContainedResourceReference
     */
    private $resourceContainedResourceReference = [
        
    ];

    /**
     * Adds as resourceContainedResourceReference
     *
     * A Composite containing details of a
     *  ResourceContainedResourceReference.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\ResourceContainedResourceReferenceType $resourceContainedResourceReference
     */
    public function addToResourceContainedResourceReference(\DedexBundle\Entity\Ern383\ResourceContainedResourceReferenceType $resourceContainedResourceReference)
    {
        $this->resourceContainedResourceReference[] = $resourceContainedResourceReference;
        return $this;
    }

    /**
     * isset resourceContainedResourceReference
     *
     * A Composite containing details of a
     *  ResourceContainedResourceReference.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceContainedResourceReference($index)
    {
        return isset($this->resourceContainedResourceReference[$index]);
    }

    /**
     * unset resourceContainedResourceReference
     *
     * A Composite containing details of a
     *  ResourceContainedResourceReference.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceContainedResourceReference($index)
    {
        unset($this->resourceContainedResourceReference[$index]);
    }

    /**
     * Gets as resourceContainedResourceReference
     *
     * A Composite containing details of a
     *  ResourceContainedResourceReference.
     *
     * @return \DedexBundle\Entity\Ern383\ResourceContainedResourceReferenceType[]
     */
    public function getResourceContainedResourceReference()
    {
        return $this->resourceContainedResourceReference;
    }

    /**
     * Sets a new resourceContainedResourceReference
     *
     * A Composite containing details of a
     *  ResourceContainedResourceReference.
     *
     * @param \DedexBundle\Entity\Ern383\ResourceContainedResourceReferenceType[] $resourceContainedResourceReference
     * @return self
     */
    public function setResourceContainedResourceReference(array $resourceContainedResourceReference)
    {
        $this->resourceContainedResourceReference = $resourceContainedResourceReference;
        return $this;
    }
}

