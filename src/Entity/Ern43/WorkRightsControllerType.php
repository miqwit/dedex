<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing WorkRightsControllerType
 *
 * A Composite containing details of a RightsController for a Work. RightsControllers are typically described by Name, Identifier and Role(s).
 * XSD Type: WorkRightsController
 */
class WorkRightsControllerType
{
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
     * A type of the RightsController.
     *
     * @var string $rightsControllerType
     */
    private $rightsControllerType = null;

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
     * @var float $rightSharePercentage
     */
    private $rightSharePercentage = null;

    /**
     * The country of registration.
     *
     * @var \DedexBundle\Entity\Ern43\AllTerritoryCodeType[] $territory
     */
    private $territory = [
        
    ];

    /**
     * The Date that marks the beginning of the title (in ISO 8601 format: YYYY-MM-DD).
     *
     * @var string $startDate
     */
    private $startDate = null;

    /**
     * The Date that marks the end of the title (in ISO 8601 format: YYYY-MM-DD).
     *
     * @var string $endDate
     */
    private $endDate = null;

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
     * Gets as rightsControllerType
     *
     * A type of the RightsController.
     *
     * @return string
     */
    public function getRightsControllerType()
    {
        return $this->rightsControllerType;
    }

    /**
     * Sets a new rightsControllerType
     *
     * A type of the RightsController.
     *
     * @param string $rightsControllerType
     * @return self
     */
    public function setRightsControllerType($rightsControllerType)
    {
        $this->rightsControllerType = $rightsControllerType;
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
     * @return float
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
     * @param float $rightSharePercentage
     * @return self
     */
    public function setRightSharePercentage($rightSharePercentage)
    {
        $this->rightSharePercentage = $rightSharePercentage;
        return $this;
    }

    /**
     * Adds as territory
     *
     * The country of registration.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\AllTerritoryCodeType $territory
     */
    public function addToTerritory(\DedexBundle\Entity\Ern43\AllTerritoryCodeType $territory)
    {
        $this->territory[] = $territory;
        return $this;
    }

    /**
     * isset territory
     *
     * The country of registration.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritory($index)
    {
        return isset($this->territory[$index]);
    }

    /**
     * unset territory
     *
     * The country of registration.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritory($index)
    {
        unset($this->territory[$index]);
    }

    /**
     * Gets as territory
     *
     * The country of registration.
     *
     * @return \DedexBundle\Entity\Ern43\AllTerritoryCodeType[]
     */
    public function getTerritory()
    {
        return $this->territory;
    }

    /**
     * Sets a new territory
     *
     * The country of registration.
     *
     * @param \DedexBundle\Entity\Ern43\AllTerritoryCodeType[] $territory
     * @return self
     */
    public function setTerritory(array $territory = null)
    {
        $this->territory = $territory;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * The Date that marks the beginning of the title (in ISO 8601 format: YYYY-MM-DD).
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * The Date that marks the beginning of the title (in ISO 8601 format: YYYY-MM-DD).
     *
     * @param string $startDate
     * @return self
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * The Date that marks the end of the title (in ISO 8601 format: YYYY-MM-DD).
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * The Date that marks the end of the title (in ISO 8601 format: YYYY-MM-DD).
     *
     * @param string $endDate
     * @return self
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }
}

