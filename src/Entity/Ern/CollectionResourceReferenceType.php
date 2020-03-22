<?php

namespace DedexBundle\Entity\Ern;

/**
 * Class representing CollectionResourceReferenceType
 *
 * A Composite containing a
 *  CollectionResourceReference.
 * XSD Type: CollectionResourceReference
 */
class CollectionResourceReferenceType
{

    /**
     * The number indicating the order of the
     *  Resources in a group of Resources.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
     *
     * @var string $collectionResourceReference
     */
    private $collectionResourceReference = null;

    /**
     * The Duration of the use of the Resource
     *  that is referenced in the CollectionResourceReference (using the ISO 8601:2004
     *  PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case
     *  characters are part of the xs:string, e.g. one hour, two minutes and three seconds
     *  would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute
     *  and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the
     *  Resources in a group of Resources.
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
     *  Resources in a group of Resources.
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
     * Gets as collectionResourceReference
     *
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
     *
     * @return string
     */
    public function getCollectionResourceReference()
    {
        return $this->collectionResourceReference;
    }

    /**
     * Sets a new collectionResourceReference
     *
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
     *
     * @param string $collectionResourceReference
     * @return self
     */
    public function setCollectionResourceReference($collectionResourceReference)
    {
        $this->collectionResourceReference = $collectionResourceReference;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The Duration of the use of the Resource
     *  that is referenced in the CollectionResourceReference (using the ISO 8601:2004
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
     * The Duration of the use of the Resource
     *  that is referenced in the CollectionResourceReference (using the ISO 8601:2004
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


}

