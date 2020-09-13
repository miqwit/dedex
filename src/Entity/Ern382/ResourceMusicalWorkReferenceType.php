<?php

namespace DedexBundle\Entity\Ern382;

/**
 * Class representing ResourceMusicalWorkReferenceType
 *
 * A Composite containing a
 *  ResourceMusicalWorkReference.
 * XSD Type: ResourceMusicalWorkReference
 */
class ResourceMusicalWorkReferenceType
{

    /**
     * The number indicating the order of the
     *  MusicalWork in a group of MusicalWorks within a Medley, SoundRecording or other
     *  Resource.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * The total Duration of the MusicalWork that
     *  has been used in a specified context (this may be less than the total Duration of
     *  the MusicalWork) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case
     *  characters indicate variables, upper case characters are part of the xs:string,
     *  e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds
     *  section ss may include fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S).
     *
     * @var \DateInterval $durationUsed
     */
    private $durationUsed = null;

    /**
     * The Flag indicating whether the
     *  MusicalWork is a Fragment (=true) or not (=false).
     *
     * @var bool $isFragment
     */
    private $isFragment = null;

    /**
     * A Reference for a MusicalWork (specific to
     *  this Message). This is a LocalMusicalWorkAnchorReference starting with the letter
     *  W.
     *
     * @var string $resourceMusicalWorkReference
     */
    private $resourceMusicalWorkReference = null;

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the
     *  MusicalWork in a group of MusicalWorks within a Medley, SoundRecording or other
     *  Resource.
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
     * The number indicating the order of the
     *  MusicalWork in a group of MusicalWorks within a Medley, SoundRecording or other
     *  Resource.
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
     * The total Duration of the MusicalWork that
     *  has been used in a specified context (this may be less than the total Duration of
     *  the MusicalWork) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case
     *  characters indicate variables, upper case characters are part of the xs:string,
     *  e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds
     *  section ss may include fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S).
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
     * The total Duration of the MusicalWork that
     *  has been used in a specified context (this may be less than the total Duration of
     *  the MusicalWork) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case
     *  characters indicate variables, upper case characters are part of the xs:string,
     *  e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds
     *  section ss may include fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S).
     *
     * @param \DateInterval $durationUsed
     * @return self
     */
    public function setDurationUsed(\DateInterval $durationUsed)
    {
        $this->durationUsed = $durationUsed;
        return $this;
    }

    /**
     * Gets as isFragment
     *
     * The Flag indicating whether the
     *  MusicalWork is a Fragment (=true) or not (=false).
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
     * The Flag indicating whether the
     *  MusicalWork is a Fragment (=true) or not (=false).
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
     * A Reference for a MusicalWork (specific to
     *  this Message). This is a LocalMusicalWorkAnchorReference starting with the letter
     *  W.
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
     * A Reference for a MusicalWork (specific to
     *  this Message). This is a LocalMusicalWorkAnchorReference starting with the letter
     *  W.
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

