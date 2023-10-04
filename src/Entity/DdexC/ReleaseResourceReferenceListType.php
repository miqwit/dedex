<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing ReleaseResourceReferenceListType
 *
 * A ddex:Composite containing a list of ddex:ReleaseResourceReferences.
 * XSD Type: ReleaseResourceReferenceList
 */
class ReleaseResourceReferenceListType
{
    /**
     * A ddex:Composite containing a ddex:Reference for a ddex:Resource (specific to this ddex:Message). The ddex:LocalAnchorReference in this ddex:Composite is a xs:string starting with the letter A.
     *
     * @var \DedexBundle\Entity\DdexC\ReleaseResourceReferenceType[] $releaseResourceReference
     */
    private $releaseResourceReference = [
        
    ];

    /**
     * Adds as releaseResourceReference
     *
     * A ddex:Composite containing a ddex:Reference for a ddex:Resource (specific to this ddex:Message). The ddex:LocalAnchorReference in this ddex:Composite is a xs:string starting with the letter A.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ReleaseResourceReferenceType $releaseResourceReference
     */
    public function addToReleaseResourceReference(\DedexBundle\Entity\DdexC\ReleaseResourceReferenceType $releaseResourceReference)
    {
        $this->releaseResourceReference[] = $releaseResourceReference;
        return $this;
    }

    /**
     * isset releaseResourceReference
     *
     * A ddex:Composite containing a ddex:Reference for a ddex:Resource (specific to this ddex:Message). The ddex:LocalAnchorReference in this ddex:Composite is a xs:string starting with the letter A.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseResourceReference($index)
    {
        return isset($this->releaseResourceReference[$index]);
    }

    /**
     * unset releaseResourceReference
     *
     * A ddex:Composite containing a ddex:Reference for a ddex:Resource (specific to this ddex:Message). The ddex:LocalAnchorReference in this ddex:Composite is a xs:string starting with the letter A.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseResourceReference($index)
    {
        unset($this->releaseResourceReference[$index]);
    }

    /**
     * Gets as releaseResourceReference
     *
     * A ddex:Composite containing a ddex:Reference for a ddex:Resource (specific to this ddex:Message). The ddex:LocalAnchorReference in this ddex:Composite is a xs:string starting with the letter A.
     *
     * @return \DedexBundle\Entity\DdexC\ReleaseResourceReferenceType[]
     */
    public function getReleaseResourceReference()
    {
        return $this->releaseResourceReference;
    }

    /**
     * Sets a new releaseResourceReference
     *
     * A ddex:Composite containing a ddex:Reference for a ddex:Resource (specific to this ddex:Message). The ddex:LocalAnchorReference in this ddex:Composite is a xs:string starting with the letter A.
     *
     * @param \DedexBundle\Entity\DdexC\ReleaseResourceReferenceType[] $releaseResourceReference
     * @return self
     */
    public function setReleaseResourceReference(array $releaseResourceReference)
    {
        $this->releaseResourceReference = $releaseResourceReference;
        return $this;
    }
}

