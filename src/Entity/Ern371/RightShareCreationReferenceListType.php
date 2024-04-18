<?php

namespace DedexBundle\Entity\Ern371;

/**
 * Class representing RightShareCreationReferenceListType
 *
 * A Composite containing a list of
 *  RightShareCreationReferences.
 * XSD Type: RightShareCreationReferenceList
 */
class RightShareCreationReferenceListType
{
    /**
     * A Reference for a Work (specific to this
     *  Message) that is part of the RightShare. This is a LocalMusicalWorkAnchorReference
     *  starting with the letter W.
     *
     * @var string[] $rightShareWorkReference
     */
    private $rightShareWorkReference = [
        
    ];

    /**
     * A Reference for a Resource (specific to
     *  this Message) that is part of the RightShare. This is a
     *  LocalResourceAnchorReference starting with the letter A. The RightShare covers the
     *  Works used in the Resource(s).
     *
     * @var string[] $rightShareResourceReference
     */
    private $rightShareResourceReference = [
        
    ];

    /**
     * A Reference for a Release (specific to
     *  this Message) that is part of the RightShare. This is a
     *  LocalReleaseAnchorReference starting with the letter R. The RightShare covers the
     *  Works used in the Release(s).
     *
     * @var string[] $rightShareReleaseReference
     */
    private $rightShareReleaseReference = [
        
    ];

    /**
     * Adds as rightShareWorkReference
     *
     * A Reference for a Work (specific to this
     *  Message) that is part of the RightShare. This is a LocalMusicalWorkAnchorReference
     *  starting with the letter W.
     *
     * @return self
     * @param string $rightShareWorkReference
     */
    public function addToRightShareWorkReference($rightShareWorkReference)
    {
        $this->rightShareWorkReference[] = $rightShareWorkReference;
        return $this;
    }

    /**
     * isset rightShareWorkReference
     *
     * A Reference for a Work (specific to this
     *  Message) that is part of the RightShare. This is a LocalMusicalWorkAnchorReference
     *  starting with the letter W.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightShareWorkReference($index)
    {
        return isset($this->rightShareWorkReference[$index]);
    }

    /**
     * unset rightShareWorkReference
     *
     * A Reference for a Work (specific to this
     *  Message) that is part of the RightShare. This is a LocalMusicalWorkAnchorReference
     *  starting with the letter W.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightShareWorkReference($index)
    {
        unset($this->rightShareWorkReference[$index]);
    }

    /**
     * Gets as rightShareWorkReference
     *
     * A Reference for a Work (specific to this
     *  Message) that is part of the RightShare. This is a LocalMusicalWorkAnchorReference
     *  starting with the letter W.
     *
     * @return string[]
     */
    public function getRightShareWorkReference()
    {
        return $this->rightShareWorkReference;
    }

    /**
     * Sets a new rightShareWorkReference
     *
     * A Reference for a Work (specific to this
     *  Message) that is part of the RightShare. This is a LocalMusicalWorkAnchorReference
     *  starting with the letter W.
     *
     * @param string $rightShareWorkReference
     * @return self
     */
    public function setRightShareWorkReference(array $rightShareWorkReference = null)
    {
        $this->rightShareWorkReference = $rightShareWorkReference;
        return $this;
    }

    /**
     * Adds as rightShareResourceReference
     *
     * A Reference for a Resource (specific to
     *  this Message) that is part of the RightShare. This is a
     *  LocalResourceAnchorReference starting with the letter A. The RightShare covers the
     *  Works used in the Resource(s).
     *
     * @return self
     * @param string $rightShareResourceReference
     */
    public function addToRightShareResourceReference($rightShareResourceReference)
    {
        $this->rightShareResourceReference[] = $rightShareResourceReference;
        return $this;
    }

    /**
     * isset rightShareResourceReference
     *
     * A Reference for a Resource (specific to
     *  this Message) that is part of the RightShare. This is a
     *  LocalResourceAnchorReference starting with the letter A. The RightShare covers the
     *  Works used in the Resource(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightShareResourceReference($index)
    {
        return isset($this->rightShareResourceReference[$index]);
    }

    /**
     * unset rightShareResourceReference
     *
     * A Reference for a Resource (specific to
     *  this Message) that is part of the RightShare. This is a
     *  LocalResourceAnchorReference starting with the letter A. The RightShare covers the
     *  Works used in the Resource(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightShareResourceReference($index)
    {
        unset($this->rightShareResourceReference[$index]);
    }

    /**
     * Gets as rightShareResourceReference
     *
     * A Reference for a Resource (specific to
     *  this Message) that is part of the RightShare. This is a
     *  LocalResourceAnchorReference starting with the letter A. The RightShare covers the
     *  Works used in the Resource(s).
     *
     * @return string[]
     */
    public function getRightShareResourceReference()
    {
        return $this->rightShareResourceReference;
    }

    /**
     * Sets a new rightShareResourceReference
     *
     * A Reference for a Resource (specific to
     *  this Message) that is part of the RightShare. This is a
     *  LocalResourceAnchorReference starting with the letter A. The RightShare covers the
     *  Works used in the Resource(s).
     *
     * @param string $rightShareResourceReference
     * @return self
     */
    public function setRightShareResourceReference(array $rightShareResourceReference = null)
    {
        $this->rightShareResourceReference = $rightShareResourceReference;
        return $this;
    }

    /**
     * Adds as rightShareReleaseReference
     *
     * A Reference for a Release (specific to
     *  this Message) that is part of the RightShare. This is a
     *  LocalReleaseAnchorReference starting with the letter R. The RightShare covers the
     *  Works used in the Release(s).
     *
     * @return self
     * @param string $rightShareReleaseReference
     */
    public function addToRightShareReleaseReference($rightShareReleaseReference)
    {
        $this->rightShareReleaseReference[] = $rightShareReleaseReference;
        return $this;
    }

    /**
     * isset rightShareReleaseReference
     *
     * A Reference for a Release (specific to
     *  this Message) that is part of the RightShare. This is a
     *  LocalReleaseAnchorReference starting with the letter R. The RightShare covers the
     *  Works used in the Release(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightShareReleaseReference($index)
    {
        return isset($this->rightShareReleaseReference[$index]);
    }

    /**
     * unset rightShareReleaseReference
     *
     * A Reference for a Release (specific to
     *  this Message) that is part of the RightShare. This is a
     *  LocalReleaseAnchorReference starting with the letter R. The RightShare covers the
     *  Works used in the Release(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightShareReleaseReference($index)
    {
        unset($this->rightShareReleaseReference[$index]);
    }

    /**
     * Gets as rightShareReleaseReference
     *
     * A Reference for a Release (specific to
     *  this Message) that is part of the RightShare. This is a
     *  LocalReleaseAnchorReference starting with the letter R. The RightShare covers the
     *  Works used in the Release(s).
     *
     * @return string[]
     */
    public function getRightShareReleaseReference()
    {
        return $this->rightShareReleaseReference;
    }

    /**
     * Sets a new rightShareReleaseReference
     *
     * A Reference for a Release (specific to
     *  this Message) that is part of the RightShare. This is a
     *  LocalReleaseAnchorReference starting with the letter R. The RightShare covers the
     *  Works used in the Release(s).
     *
     * @param string $rightShareReleaseReference
     * @return self
     */
    public function setRightShareReleaseReference(array $rightShareReleaseReference = null)
    {
        $this->rightShareReleaseReference = $rightShareReleaseReference;
        return $this;
    }
}

