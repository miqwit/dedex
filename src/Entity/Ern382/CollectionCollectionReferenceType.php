<?php

namespace DedexBundle\Entity\Ern382;

/**
 * Class representing CollectionCollectionReferenceType
 *
 * A Composite containing a
 *  CollectionCollectionReference.
 * XSD Type: CollectionCollectionReference
 */
class CollectionCollectionReferenceType
{

    /**
     * The number indicating the order of the
     *  Collection in a group of Collections within a Medley, SoundRecording or other
     *  Collection.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Reference for a Collection (specific to
     *  this Message). This is a LocalCollectionAnchorReference starting with the letter
     *  X. The referenced Collection has to be of CollectionType Series, Season or
     *  Episode.
     *
     * @var string $collectionCollectionReference
     */
    private $collectionCollectionReference = null;

    /**
     * The start time of the Creation, measured
     *  from the start of the Resource from which the CueSheet is referenced (using the
     *  ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate
     *  variables, upper case characters are part of the xs:string, e.g. one hour, two
     *  minutes and three seconds would be PT1H2M3S). The seconds section ss may include
     *  fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S).
     *
     * @var \DateInterval $startTime
     */
    private $startTime = null;

    /**
     * The Duration of the use of the Creation
     *  that is referenced in the CueCreationReference (using the ISO 8601:2004
     *  PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case
     *  characters are part of the xs:string, e.g. one hour, two minutes and three seconds
     *  would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute
     *  and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The end time of the Creation, measured
     *  from the start of the Resource from which the CueSheet is referenced (using the
     *  ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate
     *  variables, upper case characters are part of the xs:string, e.g. one hour, two
     *  minutes and three seconds would be PT1H2M3S). The seconds section ss may include
     *  fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S).
     *
     * @var \DateInterval $endTime
     */
    private $endTime = null;

    /**
     * A Date on which the Collection or Resource
     *  was included in the parent Collection.
     *
     * @var \DateTime $inclusionDate
     */
    private $inclusionDate = null;

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the
     *  Collection in a group of Collections within a Medley, SoundRecording or other
     *  Collection.
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
     *  Collection in a group of Collections within a Medley, SoundRecording or other
     *  Collection.
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
     * Gets as collectionCollectionReference
     *
     * A Reference for a Collection (specific to
     *  this Message). This is a LocalCollectionAnchorReference starting with the letter
     *  X. The referenced Collection has to be of CollectionType Series, Season or
     *  Episode.
     *
     * @return string
     */
    public function getCollectionCollectionReference()
    {
        return $this->collectionCollectionReference;
    }

    /**
     * Sets a new collectionCollectionReference
     *
     * A Reference for a Collection (specific to
     *  this Message). This is a LocalCollectionAnchorReference starting with the letter
     *  X. The referenced Collection has to be of CollectionType Series, Season or
     *  Episode.
     *
     * @param string $collectionCollectionReference
     * @return self
     */
    public function setCollectionCollectionReference($collectionCollectionReference)
    {
        $this->collectionCollectionReference = $collectionCollectionReference;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * The start time of the Creation, measured
     *  from the start of the Resource from which the CueSheet is referenced (using the
     *  ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate
     *  variables, upper case characters are part of the xs:string, e.g. one hour, two
     *  minutes and three seconds would be PT1H2M3S). The seconds section ss may include
     *  fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S).
     *
     * @return \DateInterval
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * The start time of the Creation, measured
     *  from the start of the Resource from which the CueSheet is referenced (using the
     *  ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate
     *  variables, upper case characters are part of the xs:string, e.g. one hour, two
     *  minutes and three seconds would be PT1H2M3S). The seconds section ss may include
     *  fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S).
     *
     * @param \DateInterval $startTime
     * @return self
     */
    public function setStartTime(\DateInterval $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The Duration of the use of the Creation
     *  that is referenced in the CueCreationReference (using the ISO 8601:2004
     *  PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case
     *  characters are part of the xs:string, e.g. one hour, two minutes and three seconds
     *  would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute
     *  and 30.5 seconds would be PT1M30.5S).
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The Duration of the use of the Creation
     *  that is referenced in the CueCreationReference (using the ISO 8601:2004
     *  PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case
     *  characters are part of the xs:string, e.g. one hour, two minutes and three seconds
     *  would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute
     *  and 30.5 seconds would be PT1M30.5S).
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * The end time of the Creation, measured
     *  from the start of the Resource from which the CueSheet is referenced (using the
     *  ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate
     *  variables, upper case characters are part of the xs:string, e.g. one hour, two
     *  minutes and three seconds would be PT1H2M3S). The seconds section ss may include
     *  fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S).
     *
     * @return \DateInterval
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * The end time of the Creation, measured
     *  from the start of the Resource from which the CueSheet is referenced (using the
     *  ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate
     *  variables, upper case characters are part of the xs:string, e.g. one hour, two
     *  minutes and three seconds would be PT1H2M3S). The seconds section ss may include
     *  fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S).
     *
     * @param \DateInterval $endTime
     * @return self
     */
    public function setEndTime(\DateInterval $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * Gets as inclusionDate
     *
     * A Date on which the Collection or Resource
     *  was included in the parent Collection.
     *
     * @return \DateTime
     */
    public function getInclusionDate()
    {
        return $this->inclusionDate;
    }

    /**
     * Sets a new inclusionDate
     *
     * A Date on which the Collection or Resource
     *  was included in the parent Collection.
     *
     * @param \DateTime $inclusionDate
     * @return self
     */
    public function setInclusionDate(\DateTime $inclusionDate)
    {
        $this->inclusionDate = $inclusionDate;
        return $this;
    }


}

