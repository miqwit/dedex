<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing SoundRecordingCollectionReferenceType
 *
 * A Composite containing details of a SoundRecordingCollectionReference.
 * XSD Type: SoundRecordingCollectionReference
 */
class SoundRecordingCollectionReferenceType
{
    /**
     * The number indicating the order of the Collection in a group of Collections within a Medley, SoundRecording or other Collection.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Reference for a Collection (specific to this Message). This is a LocalCollectionAnchorReference starting with the letter X. The referenced Collection has to be of CollectionType Series, Season or Episode.
     *
     * @var string $soundRecordingCollectionReference
     */
    private $soundRecordingCollectionReference = null;

    /**
     * The start time of the Creation, measured from the start of the Resource from which the CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $startTime
     */
    private $startTime = null;

    /**
     * The Duration of the use of the Creation that is referenced in the CueCreationReference (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The end time of the Creation, measured from the start of the Resource from which the CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $endTime
     */
    private $endTime = null;

    /**
     * A Type of Collection in the context of a Video. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $releaseResourceType
     */
    private $releaseResourceType = null;

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the Collection in a group of Collections within a Medley, SoundRecording or other Collection.
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
     * The number indicating the order of the Collection in a group of Collections within a Medley, SoundRecording or other Collection.
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
     * Gets as soundRecordingCollectionReference
     *
     * A Reference for a Collection (specific to this Message). This is a LocalCollectionAnchorReference starting with the letter X. The referenced Collection has to be of CollectionType Series, Season or Episode.
     *
     * @return string
     */
    public function getSoundRecordingCollectionReference()
    {
        return $this->soundRecordingCollectionReference;
    }

    /**
     * Sets a new soundRecordingCollectionReference
     *
     * A Reference for a Collection (specific to this Message). This is a LocalCollectionAnchorReference starting with the letter X. The referenced Collection has to be of CollectionType Series, Season or Episode.
     *
     * @param string $soundRecordingCollectionReference
     * @return self
     */
    public function setSoundRecordingCollectionReference($soundRecordingCollectionReference)
    {
        $this->soundRecordingCollectionReference = $soundRecordingCollectionReference;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * The start time of the Creation, measured from the start of the Resource from which the CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * The start time of the Creation, measured from the start of the Resource from which the CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @param \DateInterval $startTime
     * @return self
     */
    public function setStartTime(?\DateInterval $startTime = null)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The Duration of the use of the Creation that is referenced in the CueCreationReference (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * The Duration of the use of the Creation that is referenced in the CueCreationReference (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(?\DateInterval $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * The end time of the Creation, measured from the start of the Resource from which the CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * The end time of the Creation, measured from the start of the Resource from which the CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @param \DateInterval $endTime
     * @return self
     */
    public function setEndTime(?\DateInterval $endTime = null)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * Gets as releaseResourceType
     *
     * A Type of Collection in the context of a Video. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getReleaseResourceType()
    {
        return $this->releaseResourceType;
    }

    /**
     * Sets a new releaseResourceType
     *
     * A Type of Collection in the context of a Video. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $releaseResourceType
     * @return self
     */
    public function setReleaseResourceType($releaseResourceType)
    {
        $this->releaseResourceType = $releaseResourceType;
        return $this;
    }
}

