<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing CollectionResourceReferenceType
 *
 * A ddex:Composite containing a ddex:CollectionResourceReference.
 * XSD Type: CollectionResourceReference
 */
class CollectionResourceReferenceType
{
    /**
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @var string $collectionResourceReference
     */
    private $collectionResourceReference = null;

    /**
     * The ddex:Duration of the use of the ddex:Resource that is referenced in the ddex:CollectionResourceReference (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * Gets as collectionResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
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
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
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
     * The ddex:Duration of the use of the ddex:Resource that is referenced in the ddex:CollectionResourceReference (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The ddex:Duration of the use of the ddex:Resource that is referenced in the ddex:CollectionResourceReference (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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

