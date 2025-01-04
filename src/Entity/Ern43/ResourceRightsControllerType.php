<?php

namespace DedexBundle\Entity\Ern43;

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
     * @var string[] $rightsControlType
     */
    private $rightsControlType = [
        
    ];

    /**
     * The Flag indicating whether the RightSharePercentage is unknown (=true) or not (=false).
     *
     * @var bool $rightShareUnknown
     */
    private $rightShareUnknown = null;

    /**
     * The share of the licensed Rights owned by the RightsController. RightShare information is given as a xs:decimal value with up to 6 digits after the decimal point (e.g. '12.5' represents 12.5%). If no information is given, 100% is assumed.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/communication-of-percentages
     *
     * @var \DedexBundle\Entity\Ern43\PercentageType $rightSharePercentage
     */
    private $rightSharePercentage = null;

    /**
     * A Composite containing details of the kinds of usage for which rights have been delegated.
     *
     * @var \DedexBundle\Entity\Ern43\DelegatedUsageRightsType[] $delegatedUsageRights
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
     * Adds as rightsControlType
     *
     * A role that describes the Party involved in the administration of Rights.
     *
     * @return self
     * @param string $rightsControlType
     */
    public function addToRightsControlType($rightsControlType)
    {
        $this->rightsControlType[] = $rightsControlType;
        return $this;
    }

    /**
     * isset rightsControlType
     *
     * A role that describes the Party involved in the administration of Rights.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightsControlType($index)
    {
        return isset($this->rightsControlType[$index]);
    }

    /**
     * unset rightsControlType
     *
     * A role that describes the Party involved in the administration of Rights.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightsControlType($index)
    {
        unset($this->rightsControlType[$index]);
    }

    /**
     * Gets as rightsControlType
     *
     * A role that describes the Party involved in the administration of Rights.
     *
     * @return string[]
     */
    public function getRightsControlType()
    {
        return $this->rightsControlType;
    }

    /**
     * Sets a new rightsControlType
     *
     * A role that describes the Party involved in the administration of Rights.
     *
     * @param string $rightsControlType
     * @return self
     */
    public function setRightsControlType(array $rightsControlType = null)
    {
        $this->rightsControlType = $rightsControlType;
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
     * The share of the licensed Rights owned by the RightsController. RightShare information is given as a xs:decimal value with up to 6 digits after the decimal point (e.g. '12.5' represents 12.5%). If no information is given, 100% is assumed.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/communication-of-percentages
     *
     * @return \DedexBundle\Entity\Ern43\PercentageType
     */
    public function getRightSharePercentage()
    {
        return $this->rightSharePercentage;
    }

    /**
     * Sets a new rightSharePercentage
     *
     * The share of the licensed Rights owned by the RightsController. RightShare information is given as a xs:decimal value with up to 6 digits after the decimal point (e.g. '12.5' represents 12.5%). If no information is given, 100% is assumed.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/communication-of-percentages
     *
     * @param \DedexBundle\Entity\Ern43\PercentageType $rightSharePercentage
     * @return self
     */
    public function setRightSharePercentage(?\DedexBundle\Entity\Ern43\PercentageType $rightSharePercentage = null)
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
     * @param \DedexBundle\Entity\Ern43\DelegatedUsageRightsType $delegatedUsageRights
     */
    public function addToDelegatedUsageRights(\DedexBundle\Entity\Ern43\DelegatedUsageRightsType $delegatedUsageRights)
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
     * @return \DedexBundle\Entity\Ern43\DelegatedUsageRightsType[]
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
     * @param \DedexBundle\Entity\Ern43\DelegatedUsageRightsType[] $delegatedUsageRights
     * @return self
     */
    public function setDelegatedUsageRights(array $delegatedUsageRights = null)
    {
        $this->delegatedUsageRights = $delegatedUsageRights;
        return $this;
    }
}

