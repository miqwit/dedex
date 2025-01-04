<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing DealTechnicalResourceDetailsReferenceListType
 *
 * A ddex:Composite containing a list of ddex:DealTechnicalResourceDetailsReferences.
 * XSD Type: DealTechnicalResourceDetailsReferenceList
 */
class DealTechnicalResourceDetailsReferenceListType
{
    /**
     * A ddex:Reference for a ddex:Composite specifying technical details of a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalTechnicalResourceDetailsAnchorReference starting with the letter T.
     *
     * @var string[] $dealTechnicalResourceDetailsReference
     */
    private $dealTechnicalResourceDetailsReference = [
        
    ];

    /**
     * Adds as dealTechnicalResourceDetailsReference
     *
     * A ddex:Reference for a ddex:Composite specifying technical details of a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalTechnicalResourceDetailsAnchorReference starting with the letter T.
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
     * A ddex:Reference for a ddex:Composite specifying technical details of a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalTechnicalResourceDetailsAnchorReference starting with the letter T.
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
     * A ddex:Reference for a ddex:Composite specifying technical details of a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalTechnicalResourceDetailsAnchorReference starting with the letter T.
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
     * A ddex:Reference for a ddex:Composite specifying technical details of a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalTechnicalResourceDetailsAnchorReference starting with the letter T.
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
     * A ddex:Reference for a ddex:Composite specifying technical details of a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalTechnicalResourceDetailsAnchorReference starting with the letter T.
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

