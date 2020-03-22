<?php

namespace DedexBundle\Entity\Ern;

/**
 * Class representing ArtistDelegatedUsageRightsType
 *
 * A Composite containing details of the kinds of
 *  usage for which rights have been delegated by an Artist.
 * XSD Type: ArtistDelegatedUsageRights
 */
class ArtistDelegatedUsageRightsType
{

    /**
     * A Composite containing details of the use
     *  for which rights are delegated.
     *
     * @var \DedexBundle\Entity\Ern\UseTypeType[] $useType
     */
    private $useType = [
        
    ];

    /**
     * A Composite containing details of a
     *  physical interface by which a Consumer uses a Service or
     *  Release.
     *
     * @var \DedexBundle\Entity\Ern\UserInterfaceTypeType[] $userInterfaceType
     */
    private $userInterfaceType = [
        
    ];

    /**
     * A Composite containing details about a
     *  Period of Time for which the delegation of usage rights applies. Periods are
     *  typically described by at least a StartDate or EndDate.
     *
     * @var \DedexBundle\Entity\Ern\PeriodType $periodOfRightsDelegation
     */
    private $periodOfRightsDelegation = null;

    /**
     * A Territory for which the delegation of
     *  usage rights applies.
     *
     * @var \DedexBundle\Entity\Ern\CurrentTerritoryCodeType[] $territoryOfRightsDelegation
     */
    private $territoryOfRightsDelegation = [
        
    ];

    /**
     * A Type of membership of the
     *  Artist.
     *
     * @var string $membershipType
     */
    private $membershipType = null;

    /**
     * Adds as useType
     *
     * A Composite containing details of the use
     *  for which rights are delegated.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\UseTypeType $useType
     */
    public function addToUseType(\DedexBundle\Entity\Ern\UseTypeType $useType)
    {
        $this->useType[] = $useType;
        return $this;
    }

    /**
     * isset useType
     *
     * A Composite containing details of the use
     *  for which rights are delegated.
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
     * A Composite containing details of the use
     *  for which rights are delegated.
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
     * A Composite containing details of the use
     *  for which rights are delegated.
     *
     * @return \DedexBundle\Entity\Ern\UseTypeType[]
     */
    public function getUseType()
    {
        return $this->useType;
    }

    /**
     * Sets a new useType
     *
     * A Composite containing details of the use
     *  for which rights are delegated.
     *
     * @param \DedexBundle\Entity\Ern\UseTypeType[] $useType
     * @return self
     */
    public function setUseType(array $useType)
    {
        $this->useType = $useType;
        return $this;
    }

    /**
     * Adds as userInterfaceType
     *
     * A Composite containing details of a
     *  physical interface by which a Consumer uses a Service or
     *  Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\UserInterfaceTypeType $userInterfaceType
     */
    public function addToUserInterfaceType(\DedexBundle\Entity\Ern\UserInterfaceTypeType $userInterfaceType)
    {
        $this->userInterfaceType[] = $userInterfaceType;
        return $this;
    }

    /**
     * isset userInterfaceType
     *
     * A Composite containing details of a
     *  physical interface by which a Consumer uses a Service or
     *  Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserInterfaceType($index)
    {
        return isset($this->userInterfaceType[$index]);
    }

    /**
     * unset userInterfaceType
     *
     * A Composite containing details of a
     *  physical interface by which a Consumer uses a Service or
     *  Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserInterfaceType($index)
    {
        unset($this->userInterfaceType[$index]);
    }

    /**
     * Gets as userInterfaceType
     *
     * A Composite containing details of a
     *  physical interface by which a Consumer uses a Service or
     *  Release.
     *
     * @return \DedexBundle\Entity\Ern\UserInterfaceTypeType[]
     */
    public function getUserInterfaceType()
    {
        return $this->userInterfaceType;
    }

    /**
     * Sets a new userInterfaceType
     *
     * A Composite containing details of a
     *  physical interface by which a Consumer uses a Service or
     *  Release.
     *
     * @param \DedexBundle\Entity\Ern\UserInterfaceTypeType[] $userInterfaceType
     * @return self
     */
    public function setUserInterfaceType(array $userInterfaceType)
    {
        $this->userInterfaceType = $userInterfaceType;
        return $this;
    }

    /**
     * Gets as periodOfRightsDelegation
     *
     * A Composite containing details about a
     *  Period of Time for which the delegation of usage rights applies. Periods are
     *  typically described by at least a StartDate or EndDate.
     *
     * @return \DedexBundle\Entity\Ern\PeriodType
     */
    public function getPeriodOfRightsDelegation()
    {
        return $this->periodOfRightsDelegation;
    }

    /**
     * Sets a new periodOfRightsDelegation
     *
     * A Composite containing details about a
     *  Period of Time for which the delegation of usage rights applies. Periods are
     *  typically described by at least a StartDate or EndDate.
     *
     * @param \DedexBundle\Entity\Ern\PeriodType $periodOfRightsDelegation
     * @return self
     */
    public function setPeriodOfRightsDelegation(\DedexBundle\Entity\Ern\PeriodType $periodOfRightsDelegation)
    {
        $this->periodOfRightsDelegation = $periodOfRightsDelegation;
        return $this;
    }

    /**
     * Adds as territoryOfRightsDelegation
     *
     * A Territory for which the delegation of
     *  usage rights applies.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\CurrentTerritoryCodeType $territoryOfRightsDelegation
     */
    public function addToTerritoryOfRightsDelegation(\DedexBundle\Entity\Ern\CurrentTerritoryCodeType $territoryOfRightsDelegation)
    {
        $this->territoryOfRightsDelegation[] = $territoryOfRightsDelegation;
        return $this;
    }

    /**
     * isset territoryOfRightsDelegation
     *
     * A Territory for which the delegation of
     *  usage rights applies.
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
     * A Territory for which the delegation of
     *  usage rights applies.
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
     * A Territory for which the delegation of
     *  usage rights applies.
     *
     * @return \DedexBundle\Entity\Ern\CurrentTerritoryCodeType[]
     */
    public function getTerritoryOfRightsDelegation()
    {
        return $this->territoryOfRightsDelegation;
    }

    /**
     * Sets a new territoryOfRightsDelegation
     *
     * A Territory for which the delegation of
     *  usage rights applies.
     *
     * @param \DedexBundle\Entity\Ern\CurrentTerritoryCodeType[] $territoryOfRightsDelegation
     * @return self
     */
    public function setTerritoryOfRightsDelegation(array $territoryOfRightsDelegation)
    {
        $this->territoryOfRightsDelegation = $territoryOfRightsDelegation;
        return $this;
    }

    /**
     * Gets as membershipType
     *
     * A Type of membership of the
     *  Artist.
     *
     * @return string
     */
    public function getMembershipType()
    {
        return $this->membershipType;
    }

    /**
     * Sets a new membershipType
     *
     * A Type of membership of the
     *  Artist.
     *
     * @param string $membershipType
     * @return self
     */
    public function setMembershipType($membershipType)
    {
        $this->membershipType = $membershipType;
        return $this;
    }


}

