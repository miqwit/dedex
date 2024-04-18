<?php

namespace DedexBundle\Entity\Ern371;

/**
 * Class representing CatalogReleaseReferenceListType
 *
 * A Composite containing a list of
 *  CatalogReleaseReferences.
 * XSD Type: CatalogReleaseReferenceList
 */
class CatalogReleaseReferenceListType
{
    /**
     * A Reference for a Release (specific to
     *  this Message) that is part of the catalog. This is a LocalReleaseAnchorReference
     *  starting with the letter R.
     *
     * @var string[] $catalogReleaseReference
     */
    private $catalogReleaseReference = [
        
    ];

    /**
     * Adds as catalogReleaseReference
     *
     * A Reference for a Release (specific to
     *  this Message) that is part of the catalog. This is a LocalReleaseAnchorReference
     *  starting with the letter R.
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
     * A Reference for a Release (specific to
     *  this Message) that is part of the catalog. This is a LocalReleaseAnchorReference
     *  starting with the letter R.
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
     * A Reference for a Release (specific to
     *  this Message) that is part of the catalog. This is a LocalReleaseAnchorReference
     *  starting with the letter R.
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
     * A Reference for a Release (specific to
     *  this Message) that is part of the catalog. This is a LocalReleaseAnchorReference
     *  starting with the letter R.
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
     * A Reference for a Release (specific to
     *  this Message) that is part of the catalog. This is a LocalReleaseAnchorReference
     *  starting with the letter R.
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

