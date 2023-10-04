<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing CatalogReleaseReferenceListType
 *
 * A ddex:Composite containing a list of CatalogReleaseReferences.
 * XSD Type: CatalogReleaseReferenceList
 */
class CatalogReleaseReferenceListType
{
    /**
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message) that is part of the catalog. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @var string[] $catalogReleaseReference
     */
    private $catalogReleaseReference = [
        
    ];

    /**
     * Adds as catalogReleaseReference
     *
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message) that is part of the catalog. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @return self
     * @param string $catalogReleaseReference
     */
    public function addToCatalogReleaseReference($catalogReleaseReference)
    {
        $this->catalogReleaseReference[] = $catalogReleaseReference;
        return $this;
    }

    /**
     * isset catalogReleaseReference
     *
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message) that is part of the catalog. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCatalogReleaseReference($index)
    {
        return isset($this->catalogReleaseReference[$index]);
    }

    /**
     * unset catalogReleaseReference
     *
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message) that is part of the catalog. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCatalogReleaseReference($index)
    {
        unset($this->catalogReleaseReference[$index]);
    }

    /**
     * Gets as catalogReleaseReference
     *
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message) that is part of the catalog. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @return string[]
     */
    public function getCatalogReleaseReference()
    {
        return $this->catalogReleaseReference;
    }

    /**
     * Sets a new catalogReleaseReference
     *
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message) that is part of the catalog. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @param string $catalogReleaseReference
     * @return self
     */
    public function setCatalogReleaseReference(array $catalogReleaseReference)
    {
        $this->catalogReleaseReference = $catalogReleaseReference;
        return $this;
    }
}

