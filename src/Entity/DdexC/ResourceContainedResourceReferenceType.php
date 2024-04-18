<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing ResourceContainedResourceReferenceType
 *
 * A ddex:Composite containing details of a ddex:ResourceContainedResourceReference for the case where one ddex:Resource contains another one.
 * XSD Type: ResourceContainedResourceReference
 */
class ResourceContainedResourceReferenceType
{
    /**
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @var string $resourceContainedResourceReference
     */
    private $resourceContainedResourceReference = null;

    /**
     * The total ddex:Duration of the ddex:Resource that has been used in a specified context (this may be less than the total ddex:Duration of the ddex:Resource) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $durationUsed
     */
    private $durationUsed = null;

    /**
     * The start point of the preview given in seconds from the start of the referenced ddex:Resource.
     *
     * @var float $startPoint
     */
    private $startPoint = null;

    /**
     * A ddex:Composite containing details of the ddex:Purpose of the usage.
     *
     * @var \DedexBundle\Entity\DdexC\PurposeType $purpose
     */
    private $purpose = null;

    /**
     * Gets as resourceContainedResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @return string
     */
    public function getResourceContainedResourceReference()
    {
        return $this->resourceContainedResourceReference;
    }

    /**
     * Sets a new resourceContainedResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @param string $resourceContainedResourceReference
     * @return self
     */
    public function setResourceContainedResourceReference($resourceContainedResourceReference)
    {
        $this->resourceContainedResourceReference = $resourceContainedResourceReference;
        return $this;
    }

    /**
     * Gets as durationUsed
     *
     * The total ddex:Duration of the ddex:Resource that has been used in a specified context (this may be less than the total ddex:Duration of the ddex:Resource) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The total ddex:Duration of the ddex:Resource that has been used in a specified context (this may be less than the total ddex:Duration of the ddex:Resource) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * Gets as startPoint
     *
     * The start point of the preview given in seconds from the start of the referenced ddex:Resource.
     *
     * @return float
     */
    public function getStartPoint()
    {
        return $this->startPoint;
    }

    /**
     * Sets a new startPoint
     *
     * The start point of the preview given in seconds from the start of the referenced ddex:Resource.
     *
     * @param float $startPoint
     * @return self
     */
    public function setStartPoint($startPoint)
    {
        $this->startPoint = $startPoint;
        return $this;
    }

    /**
     * Gets as purpose
     *
     * A ddex:Composite containing details of the ddex:Purpose of the usage.
     *
     * @return \DedexBundle\Entity\DdexC\PurposeType
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Sets a new purpose
     *
     * A ddex:Composite containing details of the ddex:Purpose of the usage.
     *
     * @param \DedexBundle\Entity\DdexC\PurposeType $purpose
     * @return self
     */
    public function setPurpose(?\DedexBundle\Entity\DdexC\PurposeType $purpose = null)
    {
        $this->purpose = $purpose;
        return $this;
    }
}

