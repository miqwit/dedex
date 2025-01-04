<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing SoundRecordingCollectionReferenceListType
 *
 * A Composite containing a list of SoundRecordingCollectionReferences.
 * XSD Type: SoundRecordingCollectionReferenceList
 */
class SoundRecordingCollectionReferenceListType
{
    /**
     * The number of referenced Collections (typically Chapters).
     *
     * @var int $numberOfCollections
     */
    private $numberOfCollections = null;

    /**
     * A Composite containing a SoundRecordingCollectionReference for a Collection (specific to this Message).
     *
     * @var \DedexBundle\Entity\Ern381\SoundRecordingCollectionReferenceType[] $soundRecordingCollectionReference
     */
    private $soundRecordingCollectionReference = [
        
    ];

    /**
     * Gets as numberOfCollections
     *
     * The number of referenced Collections (typically Chapters).
     *
     * @return int
     */
    public function getNumberOfCollections()
    {
        return $this->numberOfCollections;
    }

    /**
     * Sets a new numberOfCollections
     *
     * The number of referenced Collections (typically Chapters).
     *
     * @param int $numberOfCollections
     * @return self
     */
    public function setNumberOfCollections($numberOfCollections)
    {
        $this->numberOfCollections = $numberOfCollections;
        return $this;
    }

    /**
     * Adds as soundRecordingCollectionReference
     *
     * A Composite containing a SoundRecordingCollectionReference for a Collection (specific to this Message).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\SoundRecordingCollectionReferenceType $soundRecordingCollectionReference
     */
    public function addToSoundRecordingCollectionReference(\DedexBundle\Entity\Ern381\SoundRecordingCollectionReferenceType $soundRecordingCollectionReference)
    {
        $this->soundRecordingCollectionReference[] = $soundRecordingCollectionReference;
        return $this;
    }

    /**
     * isset soundRecordingCollectionReference
     *
     * A Composite containing a SoundRecordingCollectionReference for a Collection (specific to this Message).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSoundRecordingCollectionReference($index)
    {
        return isset($this->soundRecordingCollectionReference[$index]);
    }

    /**
     * unset soundRecordingCollectionReference
     *
     * A Composite containing a SoundRecordingCollectionReference for a Collection (specific to this Message).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSoundRecordingCollectionReference($index)
    {
        unset($this->soundRecordingCollectionReference[$index]);
    }

    /**
     * Gets as soundRecordingCollectionReference
     *
     * A Composite containing a SoundRecordingCollectionReference for a Collection (specific to this Message).
     *
     * @return \DedexBundle\Entity\Ern381\SoundRecordingCollectionReferenceType[]
     */
    public function getSoundRecordingCollectionReference()
    {
        return $this->soundRecordingCollectionReference;
    }

    /**
     * Sets a new soundRecordingCollectionReference
     *
     * A Composite containing a SoundRecordingCollectionReference for a Collection (specific to this Message).
     *
     * @param \DedexBundle\Entity\Ern381\SoundRecordingCollectionReferenceType[] $soundRecordingCollectionReference
     * @return self
     */
    public function setSoundRecordingCollectionReference(array $soundRecordingCollectionReference)
    {
        $this->soundRecordingCollectionReference = $soundRecordingCollectionReference;
        return $this;
    }
}

