<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing FulfillmentDateType
 *
 * A Composite containing details of a FulfillmentDate.
 * XSD Type: FulfillmentDate
 */
class FulfillmentDateType
{
    /**
     * A Date after which an end user can receive the Resource (in ISO 8601:2004 format: YYYY-MM-DD). If no FulfillmentDate is provided the FulfillmentDate is the StartDate of the respective Deal.
     *
     * @var string $fulfillmentDate
     */
    private $fulfillmentDate = null;

    /**
     * The Identifier (specific to the Message) of a Release for a Resource. This is a LocalReleaseAnchorReference starting with the letter R.
     *
     * @var string[] $resourceReleaseReference
     */
    private $resourceReleaseReference = [
        
    ];

    /**
     * Gets as fulfillmentDate
     *
     * A Date after which an end user can receive the Resource (in ISO 8601:2004 format: YYYY-MM-DD). If no FulfillmentDate is provided the FulfillmentDate is the StartDate of the respective Deal.
     *
     * @return string
     */
    public function getFulfillmentDate()
    {
        return $this->fulfillmentDate;
    }

    /**
     * Sets a new fulfillmentDate
     *
     * A Date after which an end user can receive the Resource (in ISO 8601:2004 format: YYYY-MM-DD). If no FulfillmentDate is provided the FulfillmentDate is the StartDate of the respective Deal.
     *
     * @param string $fulfillmentDate
     * @return self
     */
    public function setFulfillmentDate($fulfillmentDate)
    {
        $this->fulfillmentDate = $fulfillmentDate;
        return $this;
    }

    /**
     * Adds as resourceReleaseReference
     *
     * The Identifier (specific to the Message) of a Release for a Resource. This is a LocalReleaseAnchorReference starting with the letter R.
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
     * The Identifier (specific to the Message) of a Release for a Resource. This is a LocalReleaseAnchorReference starting with the letter R.
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
     * The Identifier (specific to the Message) of a Release for a Resource. This is a LocalReleaseAnchorReference starting with the letter R.
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
     * The Identifier (specific to the Message) of a Release for a Resource. This is a LocalReleaseAnchorReference starting with the letter R.
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
     * The Identifier (specific to the Message) of a Release for a Resource. This is a LocalReleaseAnchorReference starting with the letter R.
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

