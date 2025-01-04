<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing CueCreationReferenceType
 *
 * A Composite containing a
 *  CueCreationReference.
 * XSD Type: CueCreationReference
 */
class CueCreationReferenceType
{
    /**
     * A Reference for a Work (specific to
     *  this Message). This is a LocalMusicalWorkAnchorReference starting with the
     *  letter W.
     *
     * @var string $cueWorkReference
     */
    private $cueWorkReference = null;

    /**
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
     *
     * @var string $cueResourceReference
     */
    private $cueResourceReference = null;

    /**
     * Gets as cueWorkReference
     *
     * A Reference for a Work (specific to
     *  this Message). This is a LocalMusicalWorkAnchorReference starting with the
     *  letter W.
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
     * A Reference for a Work (specific to
     *  this Message). This is a LocalMusicalWorkAnchorReference starting with the
     *  letter W.
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
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
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
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
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

