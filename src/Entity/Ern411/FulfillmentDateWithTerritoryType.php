<?php

namespace DedexBundle\Entity\Ern411;

/**
 * Class representing FulfillmentDateWithTerritoryType
 *
 * A Composite containing details of a FulfillmentDate.
 * XSD Type: FulfillmentDateWithTerritory
 */
class FulfillmentDateWithTerritoryType
{

    /**
     * A Territory to which the FulfillmentDate applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string $applicableTerritoryCode
     */
    private $applicableTerritoryCode = null;

    /**
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isDefault
     */
    private $isDefault = null;

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
     * Gets as applicableTerritoryCode
     *
     * A Territory to which the FulfillmentDate applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string
     */
    public function getApplicableTerritoryCode()
    {
        return $this->applicableTerritoryCode;
    }

    /**
     * Sets a new applicableTerritoryCode
     *
     * A Territory to which the FulfillmentDate applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $applicableTerritoryCode
     * @return self
     */
    public function setApplicableTerritoryCode($applicableTerritoryCode)
    {
        $this->applicableTerritoryCode = $applicableTerritoryCode;
        return $this;
    }

    /**
     * Gets as isDefault
     *
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Sets a new isDefault
     *
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isDefault
     * @return self
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
        return $this;
    }

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
    public function setResourceReleaseReference(array $resourceReleaseReference)
    {
        $this->resourceReleaseReference = $resourceReleaseReference;
        return $this;
    }


}

