<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing CueCreationReferenceType
 *
 * A ddex:Composite containing a ddex:CueCreationReference.
 * XSD Type: CueCreationReference
 */
class CueCreationReferenceType
{
    /**
     * A ddex:Reference for a ddex:Work (specific to this ddex:Message). This is a ddex:LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @var string $cueWorkReference
     */
    private $cueWorkReference = null;

    /**
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @var string $cueResourceReference
     */
    private $cueResourceReference = null;

    /**
     * Gets as cueWorkReference
     *
     * A ddex:Reference for a ddex:Work (specific to this ddex:Message). This is a ddex:LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @return string
     */
    public function getCueWorkReference()
    {
        return $this->cueWorkReference;
    }

    /**
     * Sets a new cueWorkReference
     *
     * A ddex:Reference for a ddex:Work (specific to this ddex:Message). This is a ddex:LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @param string $cueWorkReference
     * @return self
     */
    public function setCueWorkReference($cueWorkReference)
    {
        $this->cueWorkReference = $cueWorkReference;
        return $this;
    }

    /**
     * Gets as cueResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @return string
     */
    public function getCueResourceReference()
    {
        return $this->cueResourceReference;
    }

    /**
     * Sets a new cueResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @param string $cueResourceReference
     * @return self
     */
    public function setCueResourceReference($cueResourceReference)
    {
        $this->cueResourceReference = $cueResourceReference;
        return $this;
    }
}

