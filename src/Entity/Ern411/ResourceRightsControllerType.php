<?php

namespace DedexBundle\Entity\Ern411;

/**
 * Class representing ResourceRightsControllerType
 *
 * A Composite containing details of a RightsController for a Resource. RightsControllers are typically described by Name, Identifier and Role(s).
 * XSD Type: ResourceRightsController
 */
class ResourceRightsControllerType
{

    /**
     * The number indicating the order of the RightsController in a group of RightsControllers. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $rightsControllerPartyReference
     */
    private $rightsControllerPartyReference = null;

    /**
     * A role that describes the Party involved in the administration of Rights.
     *
     * @var string[] $rightsControllerRole
     */
    private $rightsControllerRole = [
        
    ];

    /**
     * The Flag indicating whether the RightSharePercentage is unknown (=true) or not (=false).
     *
     * @var bool $rightShareUnknown
     */
    private $rightShareUnknown = null;

    /**
     * The share of the licensed Rights owned by the RightsController. RightShare information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%). If no information is given, 100% is assumed.
     *
     * @var \DedexBundle\Entity\Ern411\PercentageType $rightSharePercentage
     */
    private $rightSharePercentage = null;

    /**
     * A Composite containing details of the kinds of usage for which rights have been delegated.
     *
     * @var \DedexBundle\Entity\Ern411\DelegatedUsageRightsType[] $delegatedUsageRights
     */
    private $delegatedUsageRights = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the RightsController in a group of RightsControllers. This is represented in an XML schema as an XML Attribute.
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
     * The number indicating the order of the RightsController in a group of RightsControllers. This is represented in an XML schema as an XML Attribute.
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
     * Gets as rightsControllerPartyReference
     *
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string
     */
    public function getRightsControllerPartyReference()
    {
        return $this->rightsControllerPartyReference;
    }

    /**
     * Sets a new rightsControllerPartyReference
     *
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $rightsControllerPartyReference
     * @return self
     */
    public function setRightsControllerPartyReference($rightsControllerPartyReference)
    {
        $this->rightsControllerPartyReference = $rightsControllerPartyReference;
        return $this;
    }

    /**
     * Adds as rightsControllerRole
     *
     * A role that describes the Party involved in the administration of Rights.
     *
     * @return self
     * @param string $rightsControllerRole
     */
    public function addToRightsControllerRole($rightsControllerRole)
    {
        $this->rightsControllerRole[] = $rightsControllerRole;
        return $this;
    }

    /**
     * isset rightsControllerRole
     *
     * A role that describes the Party involved in the administration of Rights.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightsControllerRole($index)
    {
        return isset($this->rightsControllerRole[$index]);
    }

    /**
     * unset rightsControllerRole
     *
     * A role that describes the Party involved in the administration of Rights.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightsControllerRole($index)
    {
        unset($this->rightsControllerRole[$index]);
    }

    /**
     * Gets as rightsControllerRole
     *
     * A role that describes the Party involved in the administration of Rights.
     *
     * @return string[]
     */
    public function getRightsControllerRole()
    {
        return $this->rightsControllerRole;
    }

    /**
     * Sets a new rightsControllerRole
     *
     * A role that describes the Party involved in the administration of Rights.
     *
     * @param string $rightsControllerRole
     * @return self
     */
    public function setRightsControllerRole(array $rightsControllerRole)
    {
        $this->rightsControllerRole = $rightsControllerRole;
        return $this;
    }

    /**
     * Gets as rightShareUnknown
     *
     * The Flag indicating whether the RightSharePercentage is unknown (=true) or not (=false).
     *
     * @return bool
     */
    public function getRightShareUnknown()
    {
        return $this->rightShareUnknown;
    }

    /**
     * Sets a new rightShareUnknown
     *
     * The Flag indicating whether the RightSharePercentage is unknown (=true) or not (=false).
     *
     * @param bool $rightShareUnknown
     * @return self
     */
    public function setRightShareUnknown($rightShareUnknown)
    {
        $this->rightShareUnknown = $rightShareUnknown;
        return $this;
    }

    /**
     * Gets as rightSharePercentage
     *
     * The share of the licensed Rights owned by the RightsController. RightShare information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%). If no information is given, 100% is assumed.
     *
     * @return \DedexBundle\Entity\Ern411\PercentageType
     */
    public function getRightSharePercentage()
    {
        return $this->rightSharePercentage;
    }

    /**
     * Sets a new rightSharePercentage
     *
     * The share of the licensed Rights owned by the RightsController. RightShare information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%). If no information is given, 100% is assumed.
     *
     * @param \DedexBundle\Entity\Ern411\PercentageType $rightSharePercentage
     * @return self
     */
    public function setRightSharePercentage(\DedexBundle\Entity\Ern411\PercentageType $rightSharePercentage)
    {
        $this->rightSharePercentage = $rightSharePercentage;
        return $this;
    }

    /**
     * Adds as delegatedUsageRights
     *
     * A Composite containing details of the kinds of usage for which rights have been delegated.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\DelegatedUsageRightsType $delegatedUsageRights
     */
    public function addToDelegatedUsageRights(\DedexBundle\Entity\Ern411\DelegatedUsageRightsType $delegatedUsageRights)
    {
        $this->delegatedUsageRights[] = $delegatedUsageRights;
        return $this;
    }

    /**
     * isset delegatedUsageRights
     *
     * A Composite containing details of the kinds of usage for which rights have been delegated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDelegatedUsageRights($index)
    {
        return isset($this->delegatedUsageRights[$index]);
    }

    /**
     * unset delegatedUsageRights
     *
     * A Composite containing details of the kinds of usage for which rights have been delegated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDelegatedUsageRights($index)
    {
        unset($this->delegatedUsageRights[$index]);
    }

    /**
     * Gets as delegatedUsageRights
     *
     * A Composite containing details of the kinds of usage for which rights have been delegated.
     *
     * @return \DedexBundle\Entity\Ern411\DelegatedUsageRightsType[]
     */
    public function getDelegatedUsageRights()
    {
        return $this->delegatedUsageRights;
    }

    /**
     * Sets a new delegatedUsageRights
     *
     * A Composite containing details of the kinds of usage for which rights have been delegated.
     *
     * @param \DedexBundle\Entity\Ern411\DelegatedUsageRightsType[] $delegatedUsageRights
     * @return self
     */
    public function setDelegatedUsageRights(array $delegatedUsageRights)
    {
        $this->delegatedUsageRights = $delegatedUsageRights;
        return $this;
    }


}

