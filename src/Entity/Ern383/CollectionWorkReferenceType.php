<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing CollectionWorkReferenceType
 *
 * A Composite containing a
 *  CollectionWorkReference.
 * XSD Type: CollectionWorkReference
 */
class CollectionWorkReferenceType
{
    /**
     * A Reference for a Work (specific to this
     *  Message). This is a LocalMusicalWorkAnchorReference starting with the letter
     *  W.
     *
     * @var string $collectionWorkReference
     */
    private $collectionWorkReference = null;

    /**
     * The Duration of the use of the Work that
     *  is referenced in the CollectionWorkReference (using the ISO 8601:2004
     *  PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case
     *  characters are part of the xs:string, e.g. one hour, two minutes and three seconds
     *  would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute
     *  and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * Gets as collectionWorkReference
     *
     * A Reference for a Work (specific to this
     *  Message). This is a LocalMusicalWorkAnchorReference starting with the letter
     *  W.
     *
     * @return string
     */
    public function getCollectionWorkReference()
    {
        return $this->collectionWorkReference;
    }

    /**
     * Sets a new collectionWorkReference
     *
     * A Reference for a Work (specific to this
     *  Message). This is a LocalMusicalWorkAnchorReference starting with the letter
     *  W.
     *
     * @param string $collectionWorkReference
     * @return self
     */
    public function setCollectionWorkReference($collectionWorkReference)
    {
        $this->collectionWorkReference = $collectionWorkReference;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The Duration of the use of the Work that
     *  is referenced in the CollectionWorkReference (using the ISO 8601:2004
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
     * The Duration of the use of the Work that
     *  is referenced in the CollectionWorkReference (using the ISO 8601:2004
     *  PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case
     *  characters are part of the xs:string, e.g. one hour, two minutes and three seconds
     *  would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute
     *  and 30.5 seconds would be PT1M30.5S).
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(?\DateInterval $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }
}

