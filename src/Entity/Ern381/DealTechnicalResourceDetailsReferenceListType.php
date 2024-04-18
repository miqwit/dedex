<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing DealTechnicalResourceDetailsReferenceListType
 *
 * A Composite containing a list of DealTechnicalResourceDetailsReferences.
 * XSD Type: DealTechnicalResourceDetailsReferenceList
 */
class DealTechnicalResourceDetailsReferenceListType
{
    /**
     * A Reference for a Composite specifying technical details of a Resource (specific to this Message). This is a LocalTechnicalResourceDetailsAnchorReference starting with the letter T.
     *
     * @var string[] $dealTechnicalResourceDetailsReference
     */
    private $dealTechnicalResourceDetailsReference = [
        
    ];

    /**
     * Adds as dealTechnicalResourceDetailsReference
     *
     * A Reference for a Composite specifying technical details of a Resource (specific to this Message). This is a LocalTechnicalResourceDetailsAnchorReference starting with the letter T.
     *
     * @return self
     * @param string $dealTechnicalResourceDetailsReference
     */
    public function addToDealTechnicalResourceDetailsReference($dealTechnicalResourceDetailsReference)
    {
        $this->dealTechnicalResourceDetailsReference[] = $dealTechnicalResourceDetailsReference;
        return $this;
    }

    /**
     * isset dealTechnicalResourceDetailsReference
     *
     * A Reference for a Composite specifying technical details of a Resource (specific to this Message). This is a LocalTechnicalResourceDetailsAnchorReference starting with the letter T.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDealTechnicalResourceDetailsReference($index)
    {
        return isset($this->dealTechnicalResourceDetailsReference[$index]);
    }

    /**
     * unset dealTechnicalResourceDetailsReference
     *
     * A Reference for a Composite specifying technical details of a Resource (specific to this Message). This is a LocalTechnicalResourceDetailsAnchorReference starting with the letter T.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDealTechnicalResourceDetailsReference($index)
    {
        unset($this->dealTechnicalResourceDetailsReference[$index]);
    }

    /**
     * Gets as dealTechnicalResourceDetailsReference
     *
     * A Reference for a Composite specifying technical details of a Resource (specific to this Message). This is a LocalTechnicalResourceDetailsAnchorReference starting with the letter T.
     *
     * @return string[]
     */
    public function getDealTechnicalResourceDetailsReference()
    {
        return $this->dealTechnicalResourceDetailsReference;
    }

    /**
     * Sets a new dealTechnicalResourceDetailsReference
     *
     * A Reference for a Composite specifying technical details of a Resource (specific to this Message). This is a LocalTechnicalResourceDetailsAnchorReference starting with the letter T.
     *
     * @param string $dealTechnicalResourceDetailsReference
     * @return self
     */
    public function setDealTechnicalResourceDetailsReference(array $dealTechnicalResourceDetailsReference)
    {
        $this->dealTechnicalResourceDetailsReference = $dealTechnicalResourceDetailsReference;
        return $this;
    }
}

