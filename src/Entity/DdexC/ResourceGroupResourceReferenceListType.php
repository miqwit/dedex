<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing ResourceGroupResourceReferenceListType
 *
 * A ddex:Composite containing a list of ddex:ResourceGroupResourceReferences.
 * XSD Type: ResourceGroupResourceReferenceList
 */
class ResourceGroupResourceReferenceListType
{
    /**
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @var string[] $resourceGroupResourceReference
     */
    private $resourceGroupResourceReference = [
        
    ];

    /**
     * Adds as resourceGroupResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
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
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
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
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
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
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
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
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
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

