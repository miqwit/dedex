<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing SoundRecordingCollectionReferenceType
 *
 * A ddex:Composite containing details of a ddex:SoundRecordingCollectionReference.
 * XSD Type: SoundRecordingCollectionReference
 */
class SoundRecordingCollectionReferenceType
{
    /**
     * The number indicating the order of the ddex:Collection in a group of ddex:Collections within a ddex:Medley, ddex:SoundRecording or other ddex:Collection.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A ddex:Reference for a ddex:Collection (specific to this ddex:Message). This is a ddex:LocalCollectionAnchorReference starting with the letter X. The referenced ddex:Collection has to be of ddex:CollectionType ddex:Series, ddex:Season or ddex:Episode.
     *
     * @var string $soundRecordingCollectionReference
     */
    private $soundRecordingCollectionReference = null;

    /**
     * The start time of the ddex:Creation, measured from the start of the ddex:Resource from which the ddex:CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $startTime
     */
    private $startTime = null;

    /**
     * The ddex:Duration of the use of the ddex:Creation that is referenced in the ddex:CueCreationReference (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The end time of the ddex:Creation, measured from the start of the ddex:Resource from which the ddex:CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $endTime
     */
    private $endTime = null;

    /**
     * A ddex:Type of ddex:Collection in the context of a ddex:Video. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $releaseResourceType
     */
    private $releaseResourceType = null;

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the ddex:Collection in a group of ddex:Collections within a ddex:Medley, ddex:SoundRecording or other ddex:Collection.
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
     * The number indicating the order of the ddex:Collection in a group of ddex:Collections within a ddex:Medley, ddex:SoundRecording or other ddex:Collection.
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
     * A ddex:Reference for a ddex:Collection (specific to this ddex:Message). This is a ddex:LocalCollectionAnchorReference starting with the letter X. The referenced ddex:Collection has to be of ddex:CollectionType ddex:Series, ddex:Season or ddex:Episode.
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
     * A ddex:Reference for a ddex:Collection (specific to this ddex:Message). This is a ddex:LocalCollectionAnchorReference starting with the letter X. The referenced ddex:Collection has to be of ddex:CollectionType ddex:Series, ddex:Season or ddex:Episode.
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
     * The start time of the ddex:Creation, measured from the start of the ddex:Resource from which the ddex:CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The start time of the ddex:Creation, measured from the start of the ddex:Resource from which the ddex:CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The ddex:Duration of the use of the ddex:Creation that is referenced in the ddex:CueCreationReference (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The ddex:Duration of the use of the ddex:Creation that is referenced in the ddex:CueCreationReference (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The end time of the ddex:Creation, measured from the start of the ddex:Resource from which the ddex:CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The end time of the ddex:Creation, measured from the start of the ddex:Resource from which the ddex:CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * A ddex:Type of ddex:Collection in the context of a ddex:Video. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Type of ddex:Collection in the context of a ddex:Video. This is represented in an XML schema as an XML ddex:Attribute.
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

