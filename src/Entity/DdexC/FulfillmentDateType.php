<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing FulfillmentDateType
 *
 * A ddex:Composite containing details of a ddex:FulfillmentDate.
 * XSD Type: FulfillmentDate
 */
class FulfillmentDateType
{
    /**
     * A Date after which an end user can receive the ddex:Resource (in ISO 8601:2004 format: YYYY-MM-DD). If no ddexC:FulfillmentDate is provided the ddexC:FulfillmentDate is the ddex:StartDate of the respective ddex:Deal.
     *
     * @var \DateTime $fulfillmentDate
     */
    private $fulfillmentDate = null;

    /**
     * The ddex:Identifier (specific to the ddex:Message) of a ddex:Release for a ddex:Resource. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @var string[] $resourceReleaseReference
     */
    private $resourceReleaseReference = [
        
    ];

    /**
     * Gets as fulfillmentDate
     *
     * A Date after which an end user can receive the ddex:Resource (in ISO 8601:2004 format: YYYY-MM-DD). If no ddexC:FulfillmentDate is provided the ddexC:FulfillmentDate is the ddex:StartDate of the respective ddex:Deal.
     *
     * @return \DateTime
     */
    public function getFulfillmentDate()
    {
        return $this->fulfillmentDate;
    }

    /**
     * Sets a new fulfillmentDate
     *
     * A Date after which an end user can receive the ddex:Resource (in ISO 8601:2004 format: YYYY-MM-DD). If no ddexC:FulfillmentDate is provided the ddexC:FulfillmentDate is the ddex:StartDate of the respective ddex:Deal.
     *
     * @param \DateTime $fulfillmentDate
     * @return self
     */
    public function setFulfillmentDate(\DateTime $fulfillmentDate)
    {
        $this->fulfillmentDate = $fulfillmentDate;
        return $this;
    }

    /**
     * Adds as resourceReleaseReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of a ddex:Release for a ddex:Resource. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @return self
     * @param string $resourceReleaseReference
     */
    public function addToResourceReleaseReference($resourceReleaseReference)
    {
        $this->resourceReleaseReference[] = $resourceReleaseReference;
        return $this;
    }

    /**
     * isset resourceReleaseReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of a ddex:Release for a ddex:Resource. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceReleaseReference($index)
    {
        return isset($this->resourceReleaseReference[$index]);
    }

    /**
     * unset resourceReleaseReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of a ddex:Release for a ddex:Resource. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceReleaseReference($index)
    {
        unset($this->resourceReleaseReference[$index]);
    }

    /**
     * Gets as resourceReleaseReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of a ddex:Release for a ddex:Resource. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @return string[]
     */
    public function getResourceReleaseReference()
    {
        return $this->resourceReleaseReference;
    }

    /**
     * Sets a new resourceReleaseReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of a ddex:Release for a ddex:Resource. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @param string $resourceReleaseReference
     * @return self
     */
    public function setResourceReleaseReference(array $resourceReleaseReference = null)
    {
        $this->resourceReleaseReference = $resourceReleaseReference;
        return $this;
    }
}

