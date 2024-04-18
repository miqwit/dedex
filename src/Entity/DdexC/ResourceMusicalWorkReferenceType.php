<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing ResourceMusicalWorkReferenceType
 *
 * A ddex:Composite containing a ddex:ResourceMusicalWorkReference.
 * XSD Type: ResourceMusicalWorkReference
 */
class ResourceMusicalWorkReferenceType
{
    /**
     * The number indicating the order of the ddex:MusicalWork in a group of ddex:MusicalWorks within a ddex:Medley, ddex:SoundRecording or other ddex:Resource.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * The total ddex:Duration of the ddex:MusicalWork that has been used in a specified context (this may be less than the total ddex:Duration of the ddex:MusicalWork) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $durationUsed
     */
    private $durationUsed = null;

    /**
     * The ddex:Flag indicating whether the ddex:MusicalWork is a ddex:Fragment (=True) or not (=False).
     *
     * @var bool $isFragment
     */
    private $isFragment = null;

    /**
     * A ddex:Reference for a ddex:MusicalWork (specific to this ddex:Message). This is a ddex:LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @var string $resourceMusicalWorkReference
     */
    private $resourceMusicalWorkReference = null;

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the ddex:MusicalWork in a group of ddex:MusicalWorks within a ddex:Medley, ddex:SoundRecording or other ddex:Resource.
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * The number indicating the order of the ddex:MusicalWork in a group of ddex:MusicalWorks within a ddex:Medley, ddex:SoundRecording or other ddex:Resource.
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Gets as durationUsed
     *
     * The total ddex:Duration of the ddex:MusicalWork that has been used in a specified context (this may be less than the total ddex:Duration of the ddex:MusicalWork) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @return \DateInterval
     */
    public function getDurationUsed()
    {
        return $this->durationUsed;
    }

    /**
     * Sets a new durationUsed
     *
     * The total ddex:Duration of the ddex:MusicalWork that has been used in a specified context (this may be less than the total ddex:Duration of the ddex:MusicalWork) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @param \DateInterval $durationUsed
     * @return self
     */
    public function setDurationUsed(?\DateInterval $durationUsed = null)
    {
        $this->durationUsed = $durationUsed;
        return $this;
    }

    /**
     * Gets as isFragment
     *
     * The ddex:Flag indicating whether the ddex:MusicalWork is a ddex:Fragment (=True) or not (=False).
     *
     * @return bool
     */
    public function getIsFragment()
    {
        return $this->isFragment;
    }

    /**
     * Sets a new isFragment
     *
     * The ddex:Flag indicating whether the ddex:MusicalWork is a ddex:Fragment (=True) or not (=False).
     *
     * @param bool $isFragment
     * @return self
     */
    public function setIsFragment($isFragment)
    {
        $this->isFragment = $isFragment;
        return $this;
    }

    /**
     * Gets as resourceMusicalWorkReference
     *
     * A ddex:Reference for a ddex:MusicalWork (specific to this ddex:Message). This is a ddex:LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @return string
     */
    public function getResourceMusicalWorkReference()
    {
        return $this->resourceMusicalWorkReference;
    }

    /**
     * Sets a new resourceMusicalWorkReference
     *
     * A ddex:Reference for a ddex:MusicalWork (specific to this ddex:Message). This is a ddex:LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @param string $resourceMusicalWorkReference
     * @return self
     */
    public function setResourceMusicalWorkReference($resourceMusicalWorkReference)
    {
        $this->resourceMusicalWorkReference = $resourceMusicalWorkReference;
        return $this;
    }
}

