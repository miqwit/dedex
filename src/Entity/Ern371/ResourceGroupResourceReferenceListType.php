<?php

namespace DedexBundle\Entity\Ern371;

/**
 * Class representing ResourceGroupResourceReferenceListType
 *
 * A Composite containing a list of
 *  ResourceGroupResourceReferences.
 * XSD Type: ResourceGroupResourceReferenceList
 */
class ResourceGroupResourceReferenceListType
{
    /**
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
     *
     * @var string[] $resourceGroupResourceReference
     */
    private $resourceGroupResourceReference = [
        
    ];

    /**
     * Adds as resourceGroupResourceReference
     *
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
     *
     * @return self
     * @param string $resourceGroupResourceReference
     */
    public function addToResourceGroupResourceReference($resourceGroupResourceReference)
    {
        $this->resourceGroupResourceReference[] = $resourceGroupResourceReference;
        return $this;
    }

    /**
     * isset resourceGroupResourceReference
     *
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceGroupResourceReference($index)
    {
        return isset($this->resourceGroupResourceReference[$index]);
    }

    /**
     * unset resourceGroupResourceReference
     *
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceGroupResourceReference($index)
    {
        unset($this->resourceGroupResourceReference[$index]);
    }

    /**
     * Gets as resourceGroupResourceReference
     *
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
     *
     * @return string[]
     */
    public function getResourceGroupResourceReference()
    {
        return $this->resourceGroupResourceReference;
    }

    /**
     * Sets a new resourceGroupResourceReference
     *
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
     *
     * @param string $resourceGroupResourceReference
     * @return self
     */
    public function setResourceGroupResourceReference(array $resourceGroupResourceReference)
    {
        $this->resourceGroupResourceReference = $resourceGroupResourceReference;
        return $this;
    }
}

