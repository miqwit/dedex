<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing CollectionWorkReferenceType
 *
 * A ddex:Composite containing a ddex:CollectionWorkReference.
 * XSD Type: CollectionWorkReference
 */
class CollectionWorkReferenceType
{
    /**
     * A ddex:Reference for a ddex:Work (specific to this ddex:Message). This is a ddex:LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @var string $collectionWorkReference
     */
    private $collectionWorkReference = null;

    /**
     * The ddex:Duration of the use of the ddex:Work that is referenced in the ddex:CollectionWorkReference (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * Gets as collectionWorkReference
     *
     * A ddex:Reference for a ddex:Work (specific to this ddex:Message). This is a ddex:LocalMusicalWorkAnchorReference starting with the letter W.
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
     * A ddex:Reference for a ddex:Work (specific to this ddex:Message). This is a ddex:LocalMusicalWorkAnchorReference starting with the letter W.
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
     * The ddex:Duration of the use of the ddex:Work that is referenced in the ddex:CollectionWorkReference (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The ddex:Duration of the use of the ddex:Work that is referenced in the ddex:CollectionWorkReference (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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

