<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing UsageType
 *
 * A ddex:Composite containing ddex:Types and number of Usages of a ddex:Release.
 * XSD Type: Usage
 */
class UsageType
{
    /**
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
     *
     * @var \DedexBundle\Entity\DdexC\UseTypeType[] $useType
     */
    private $useType = [
        
    ];

    /**
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer is intended to use a ddex:Service or ddex:Release.
     *
     * @var \DedexBundle\Entity\DdexC\UserInterfaceTypeType[] $userInterfaceType
     */
    private $userInterfaceType = [
        
    ];

    /**
     * A ddex:Composite containing details of a distribution channel intended to be used to disseminate a ddex:Service or ddex:Release to a ddex:Consumer.
     *
     * @var \DedexBundle\Entity\DdexC\DistributionChannelTypeType[] $distributionChannelType
     */
    private $distributionChannelType = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Carrier.
     *
     * @var \DedexBundle\Entity\DdexC\CarrierTypeType[] $carrierType
     */
    private $carrierType = [
        
    ];

    /**
     * A ddex:Composite containing technical details of the ddex:Release.
     *
     * @var \DedexBundle\Entity\DdexC\TechnicalInstantiationType $technicalInstantiation
     */
    private $technicalInstantiation = null;

    /**
     * The number of times a ddex:Release can be used under the terms of the ddex:Deal.
     *
     * @var int $numberOfUsages
     */
    private $numberOfUsages = null;

    /**
     * Adds as useType
     *
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\UseTypeType $useType
     */
    public function addToUseType(\DedexBundle\Entity\DdexC\UseTypeType $useType)
    {
        $this->useType[] = $useType;
        return $this;
    }

    /**
     * isset useType
     *
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
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
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
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
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
     *
     * @return \DedexBundle\Entity\DdexC\UseTypeType[]
     */
    public function getUseType()
    {
        return $this->useType;
    }

    /**
     * Sets a new useType
     *
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
     *
     * @param \DedexBundle\Entity\DdexC\UseTypeType[] $useType
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
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer is intended to use a ddex:Service or ddex:Release.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\UserInterfaceTypeType $userInterfaceType
     */
    public function addToUserInterfaceType(\DedexBundle\Entity\DdexC\UserInterfaceTypeType $userInterfaceType)
    {
        $this->userInterfaceType[] = $userInterfaceType;
        return $this;
    }

    /**
     * isset userInterfaceType
     *
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer is intended to use a ddex:Service or ddex:Release.
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
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer is intended to use a ddex:Service or ddex:Release.
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
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer is intended to use a ddex:Service or ddex:Release.
     *
     * @return \DedexBundle\Entity\DdexC\UserInterfaceTypeType[]
     */
    public function getUserInterfaceType()
    {
        return $this->userInterfaceType;
    }

    /**
     * Sets a new userInterfaceType
     *
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer is intended to use a ddex:Service or ddex:Release.
     *
     * @param \DedexBundle\Entity\DdexC\UserInterfaceTypeType[] $userInterfaceType
     * @return self
     */
    public function setUserInterfaceType(array $userInterfaceType = null)
    {
        $this->userInterfaceType = $userInterfaceType;
        return $this;
    }

    /**
     * Adds as distributionChannelType
     *
     * A ddex:Composite containing details of a distribution channel intended to be used to disseminate a ddex:Service or ddex:Release to a ddex:Consumer.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\DistributionChannelTypeType $distributionChannelType
     */
    public function addToDistributionChannelType(\DedexBundle\Entity\DdexC\DistributionChannelTypeType $distributionChannelType)
    {
        $this->distributionChannelType[] = $distributionChannelType;
        return $this;
    }

    /**
     * isset distributionChannelType
     *
     * A ddex:Composite containing details of a distribution channel intended to be used to disseminate a ddex:Service or ddex:Release to a ddex:Consumer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDistributionChannelType($index)
    {
        return isset($this->distributionChannelType[$index]);
    }

    /**
     * unset distributionChannelType
     *
     * A ddex:Composite containing details of a distribution channel intended to be used to disseminate a ddex:Service or ddex:Release to a ddex:Consumer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDistributionChannelType($index)
    {
        unset($this->distributionChannelType[$index]);
    }

    /**
     * Gets as distributionChannelType
     *
     * A ddex:Composite containing details of a distribution channel intended to be used to disseminate a ddex:Service or ddex:Release to a ddex:Consumer.
     *
     * @return \DedexBundle\Entity\DdexC\DistributionChannelTypeType[]
     */
    public function getDistributionChannelType()
    {
        return $this->distributionChannelType;
    }

    /**
     * Sets a new distributionChannelType
     *
     * A ddex:Composite containing details of a distribution channel intended to be used to disseminate a ddex:Service or ddex:Release to a ddex:Consumer.
     *
     * @param \DedexBundle\Entity\DdexC\DistributionChannelTypeType[] $distributionChannelType
     * @return self
     */
    public function setDistributionChannelType(array $distributionChannelType = null)
    {
        $this->distributionChannelType = $distributionChannelType;
        return $this;
    }

    /**
     * Adds as carrierType
     *
     * A ddex:Composite containing details of a ddex:Carrier.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\CarrierTypeType $carrierType
     */
    public function addToCarrierType(\DedexBundle\Entity\DdexC\CarrierTypeType $carrierType)
    {
        $this->carrierType[] = $carrierType;
        return $this;
    }

    /**
     * isset carrierType
     *
     * A ddex:Composite containing details of a ddex:Carrier.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCarrierType($index)
    {
        return isset($this->carrierType[$index]);
    }

    /**
     * unset carrierType
     *
     * A ddex:Composite containing details of a ddex:Carrier.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCarrierType($index)
    {
        unset($this->carrierType[$index]);
    }

    /**
     * Gets as carrierType
     *
     * A ddex:Composite containing details of a ddex:Carrier.
     *
     * @return \DedexBundle\Entity\DdexC\CarrierTypeType[]
     */
    public function getCarrierType()
    {
        return $this->carrierType;
    }

    /**
     * Sets a new carrierType
     *
     * A ddex:Composite containing details of a ddex:Carrier.
     *
     * @param \DedexBundle\Entity\DdexC\CarrierTypeType[] $carrierType
     * @return self
     */
    public function setCarrierType(array $carrierType = null)
    {
        $this->carrierType = $carrierType;
        return $this;
    }

    /**
     * Gets as technicalInstantiation
     *
     * A ddex:Composite containing technical details of the ddex:Release.
     *
     * @return \DedexBundle\Entity\DdexC\TechnicalInstantiationType
     */
    public function getTechnicalInstantiation()
    {
        return $this->technicalInstantiation;
    }

    /**
     * Sets a new technicalInstantiation
     *
     * A ddex:Composite containing technical details of the ddex:Release.
     *
     * @param \DedexBundle\Entity\DdexC\TechnicalInstantiationType $technicalInstantiation
     * @return self
     */
    public function setTechnicalInstantiation(?\DedexBundle\Entity\DdexC\TechnicalInstantiationType $technicalInstantiation = null)
    {
        $this->technicalInstantiation = $technicalInstantiation;
        return $this;
    }

    /**
     * Gets as numberOfUsages
     *
     * The number of times a ddex:Release can be used under the terms of the ddex:Deal.
     *
     * @return int
     */
    public function getNumberOfUsages()
    {
        return $this->numberOfUsages;
    }

    /**
     * Sets a new numberOfUsages
     *
     * The number of times a ddex:Release can be used under the terms of the ddex:Deal.
     *
     * @param int $numberOfUsages
     * @return self
     */
    public function setNumberOfUsages($numberOfUsages)
    {
        $this->numberOfUsages = $numberOfUsages;
        return $this;
    }
}

