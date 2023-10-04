<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing SoundRecordingCollectionReferenceListType
 *
 * A ddex:Composite containing a list of ddex:SoundRecordingCollectionReferences.
 * XSD Type: SoundRecordingCollectionReferenceList
 */
class SoundRecordingCollectionReferenceListType
{
    /**
     * The number of referenced ddexC:Collections (typically Chapters).
     *
     * @var int $numberOfCollections
     */
    private $numberOfCollections = null;

    /**
     * A ddex:Composite containing a ddex:SoundRecordingCollectionReference for a ddex:Collection (specific to this ddex:Message).
     *
     * @var \DedexBundle\Entity\DdexC\SoundRecordingCollectionReferenceType[] $soundRecordingCollectionReference
     */
    private $soundRecordingCollectionReference = [
        
    ];

    /**
     * Gets as numberOfCollections
     *
     * The number of referenced ddexC:Collections (typically Chapters).
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
     * The number of referenced ddexC:Collections (typically Chapters).
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
     * A ddex:Composite containing a ddex:SoundRecordingCollectionReference for a ddex:Collection (specific to this ddex:Message).
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\SoundRecordingCollectionReferenceType $soundRecordingCollectionReference
     */
    public function addToSoundRecordingCollectionReference(\DedexBundle\Entity\DdexC\SoundRecordingCollectionReferenceType $soundRecordingCollectionReference)
    {
        $this->soundRecordingCollectionReference[] = $soundRecordingCollectionReference;
        return $this;
    }

    /**
     * isset soundRecordingCollectionReference
     *
     * A ddex:Composite containing a ddex:SoundRecordingCollectionReference for a ddex:Collection (specific to this ddex:Message).
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
     * A ddex:Composite containing a ddex:SoundRecordingCollectionReference for a ddex:Collection (specific to this ddex:Message).
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
     * A ddex:Composite containing a ddex:SoundRecordingCollectionReference for a ddex:Collection (specific to this ddex:Message).
     *
     * @return \DedexBundle\Entity\DdexC\SoundRecordingCollectionReferenceType[]
     */
    public function getSoundRecordingCollectionReference()
    {
        return $this->soundRecordingCollectionReference;
    }

    /**
     * Sets a new soundRecordingCollectionReference
     *
     * A ddex:Composite containing a ddex:SoundRecordingCollectionReference for a ddex:Collection (specific to this ddex:Message).
     *
     * @param \DedexBundle\Entity\DdexC\SoundRecordingCollectionReferenceType[] $soundRecordingCollectionReference
     * @return self
     */
    public function setSoundRecordingCollectionReference(array $soundRecordingCollectionReference)
    {
        $this->soundRecordingCollectionReference = $soundRecordingCollectionReference;
        return $this;
    }
}

