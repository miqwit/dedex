<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing DelegatedUsageRightsType
 *
 * A Composite containing details of the kinds of usage for which Rights have been delegated.
 * XSD Type: DelegatedUsageRights
 */
class DelegatedUsageRightsType
{
    /**
     * A Composite containing details of the use for which Rights are delegated.
     *
     * @var \DedexBundle\Entity\Ern43\UseTypeType[] $useType
     */
    private $useType = [
        
    ];

    /**
     * A Composite containing details about a Period of Time for which the delegation of usage Rights applies. Periods are typically described by at least a StartDate or EndDate.
     *
     * @var \DedexBundle\Entity\Ern43\PeriodType $periodOfRightsDelegation
     */
    private $periodOfRightsDelegation = null;

    /**
     * A Territory for which the delegation of usage rights applies.
     *
     * @var \DedexBundle\Entity\Ern43\AllTerritoryCodeType[] $territoryOfRightsDelegation
     */
    private $territoryOfRightsDelegation = [
        
    ];

    /**
     * Adds as useType
     *
     * A Composite containing details of the use for which Rights are delegated.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\UseTypeType $useType
     */
    public function addToUseType(\DedexBundle\Entity\Ern43\UseTypeType $useType)
    {
        $this->useType[] = $useType;
        return $this;
    }

    /**
     * isset useType
     *
     * A Composite containing details of the use for which Rights are delegated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUseType($index)
    {
        return isset($this->useType[$index]);
    }

    /**
     * unset useType
     *
     * A Composite containing details of the use for which Rights are delegated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUseType($index)
    {
        unset($this->useType[$index]);
    }

    /**
     * Gets as useType
     *
     * A Composite containing details of the use for which Rights are delegated.
     *
     * @return \DedexBundle\Entity\Ern43\UseTypeType[]
     */
    public function getUseType()
    {
        return $this->useType;
    }

    /**
     * Sets a new useType
     *
     * A Composite containing details of the use for which Rights are delegated.
     *
     * @param \DedexBundle\Entity\Ern43\UseTypeType[] $useType
     * @return self
     */
    public function setUseType(array $useType)
    {
        $this->useType = $useType;
        return $this;
    }

    /**
     * Gets as periodOfRightsDelegation
     *
     * A Composite containing details about a Period of Time for which the delegation of usage Rights applies. Periods are typically described by at least a StartDate or EndDate.
     *
     * @return \DedexBundle\Entity\Ern43\PeriodType
     */
    public function getPeriodOfRightsDelegation()
    {
        return $this->periodOfRightsDelegation;
    }

    /**
     * Sets a new periodOfRightsDelegation
     *
     * A Composite containing details about a Period of Time for which the delegation of usage Rights applies. Periods are typically described by at least a StartDate or EndDate.
     *
     * @param \DedexBundle\Entity\Ern43\PeriodType $periodOfRightsDelegation
     * @return self
     */
    public function setPeriodOfRightsDelegation(?\DedexBundle\Entity\Ern43\PeriodType $periodOfRightsDelegation = null)
    {
        $this->periodOfRightsDelegation = $periodOfRightsDelegation;
        return $this;
    }

    /**
     * Adds as territoryOfRightsDelegation
     *
     * A Territory for which the delegation of usage rights applies.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\AllTerritoryCodeType $territoryOfRightsDelegation
     */
    public function addToTerritoryOfRightsDelegation(\DedexBundle\Entity\Ern43\AllTerritoryCodeType $territoryOfRightsDelegation)
    {
        $this->territoryOfRightsDelegation[] = $territoryOfRightsDelegation;
        return $this;
    }

    /**
     * isset territoryOfRightsDelegation
     *
     * A Territory for which the delegation of usage rights applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryOfRightsDelegation($index)
    {
        return isset($this->territoryOfRightsDelegation[$index]);
    }

    /**
     * unset territoryOfRightsDelegation
     *
     * A Territory for which the delegation of usage rights applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryOfRightsDelegation($index)
    {
        unset($this->territoryOfRightsDelegation[$index]);
    }

    /**
     * Gets as territoryOfRightsDelegation
     *
     * A Territory for which the delegation of usage rights applies.
     *
     * @return \DedexBundle\Entity\Ern43\AllTerritoryCodeType[]
     */
    public function getTerritoryOfRightsDelegation()
    {
        return $this->territoryOfRightsDelegation;
    }

    /**
     * Sets a new territoryOfRightsDelegation
     *
     * A Territory for which the delegation of usage rights applies.
     *
     * @param \DedexBundle\Entity\Ern43\AllTerritoryCodeType[] $territoryOfRightsDelegation
     * @return self
     */
    public function setTerritoryOfRightsDelegation(array $territoryOfRightsDelegation = null)
    {
        $this->territoryOfRightsDelegation = $territoryOfRightsDelegation;
        return $this;
    }
}

