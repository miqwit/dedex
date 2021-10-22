<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing ResourceContainedResourceReferenceType
 *
 * A Composite containing details of a ResourceContainedResourceReference for the case where one Resource contains another one.
 * XSD Type: ResourceContainedResourceReference
 */
class ResourceContainedResourceReferenceType
{

    /**
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @var string $resourceContainedResourceReference
     */
    private $resourceContainedResourceReference = null;

    /**
     * The total Duration of the Resource that has been used in a specified context (this may be less than the total Duration of the Resource) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $durationUsed
     */
    private $durationUsed = null;

    /**
     * The start point of the preview given in seconds from the start of the referenced Resource.
     *
     * @var float $startPoint
     */
    private $startPoint = null;

    /**
     * A Composite containing details of the Purpose of the usage.
     *
     * @var \DedexBundle\Entity\Ern41\PurposeType $purpose
     */
    private $purpose = null;

    /**
     * Gets as resourceContainedResourceReference
     *
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
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
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
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
     * The total Duration of the Resource that has been used in a specified context (this may be less than the total Duration of the Resource) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * The total Duration of the Resource that has been used in a specified context (this may be less than the total Duration of the Resource) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * Gets as startPoint
     *
     * The start point of the preview given in seconds from the start of the referenced Resource.
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
     * The start point of the preview given in seconds from the start of the referenced Resource.
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
     * A Composite containing details of the Purpose of the usage.
     *
     * @return \DedexBundle\Entity\Ern41\PurposeType
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Sets a new purpose
     *
     * A Composite containing details of the Purpose of the usage.
     *
     * @param \DedexBundle\Entity\Ern41\PurposeType $purpose
     * @return self
     */
    public function setPurpose(\DedexBundle\Entity\Ern41\PurposeType $purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }


}

