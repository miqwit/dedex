<?php

namespace DedexBundle\Entity\Ern;

/**
 * Class representing UsageType
 *
 * A Composite containing Types and number of
 *  Usages of a Release.
 * XSD Type: Usage
 */
class UsageType
{

    /**
     * A Composite containing details of a nature
     *  of a Service, or a Release, as used by a Consumer.
     *
     * @var \DedexBundle\Entity\Ern\UseTypeType[] $useType
     */
    private $useType = [
        
    ];

    /**
     * A Composite containing details of a
     *  physical interface by which a Consumer is intended to use a Service or
     *  Release.
     *
     * @var \DedexBundle\Entity\Ern\UserInterfaceTypeType[] $userInterfaceType
     */
    private $userInterfaceType = [
        
    ];

    /**
     * A Composite containing details of a
     *  distribution channel intended to be used to disseminate a Service or Release to a
     *  Consumer.
     *
     * @var \DedexBundle\Entity\Ern\DistributionChannelTypeType[] $distributionChannelType
     */
    private $distributionChannelType = [
        
    ];

    /**
     * A Composite containing details of a
     *  Carrier.
     *
     * @var \DedexBundle\Entity\Ern\CarrierTypeType[] $carrierType
     */
    private $carrierType = [
        
    ];

    /**
     * A Composite containing technical details
     *  of the Release.
     *
     * @var \DedexBundle\Entity\Ern\TechnicalInstantiationType $technicalInstantiation
     */
    private $technicalInstantiation = null;

    /**
     * The number of times a Release can be used
     *  under the terms of the Deal.
     *
     * @var int $numberOfUsages
     */
    private $numberOfUsages = null;

    /**
     * Adds as useType
     *
     * A Composite containing details of a nature
     *  of a Service, or a Release, as used by a Consumer.
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
     * A Composite containing details of a nature
     *  of a Service, or a Release, as used by a Consumer.
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
     * A Composite containing details of a nature
     *  of a Service, or a Release, as used by a Consumer.
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
     * A Composite containing details of a nature
     *  of a Service, or a Release, as used by a Consumer.
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
     * A Composite containing details of a nature
     *  of a Service, or a Release, as used by a Consumer.
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
     *  physical interface by which a Consumer is intended to use a Service or
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
     *  physical interface by which a Consumer is intended to use a Service or
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
     *  physical interface by which a Consumer is intended to use a Service or
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
     *  physical interface by which a Consumer is intended to use a Service or
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
     *  physical interface by which a Consumer is intended to use a Service or
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
     * Adds as distributionChannelType
     *
     * A Composite containing details of a
     *  distribution channel intended to be used to disseminate a Service or Release to a
     *  Consumer.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\DistributionChannelTypeType $distributionChannelType
     */
    public function addToDistributionChannelType(\DedexBundle\Entity\Ern\DistributionChannelTypeType $distributionChannelType)
    {
        $this->distributionChannelType[] = $distributionChannelType;
        return $this;
    }

    /**
     * isset distributionChannelType
     *
     * A Composite containing details of a
     *  distribution channel intended to be used to disseminate a Service or Release to a
     *  Consumer.
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
     * A Composite containing details of a
     *  distribution channel intended to be used to disseminate a Service or Release to a
     *  Consumer.
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
     * A Composite containing details of a
     *  distribution channel intended to be used to disseminate a Service or Release to a
     *  Consumer.
     *
     * @return \DedexBundle\Entity\Ern\DistributionChannelTypeType[]
     */
    public function getDistributionChannelType()
    {
        return $this->distributionChannelType;
    }

    /**
     * Sets a new distributionChannelType
     *
     * A Composite containing details of a
     *  distribution channel intended to be used to disseminate a Service or Release to a
     *  Consumer.
     *
     * @param \DedexBundle\Entity\Ern\DistributionChannelTypeType[] $distributionChannelType
     * @return self
     */
    public function setDistributionChannelType(array $distributionChannelType)
    {
        $this->distributionChannelType = $distributionChannelType;
        return $this;
    }

    /**
     * Adds as carrierType
     *
     * A Composite containing details of a
     *  Carrier.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\CarrierTypeType $carrierType
     */
    public function addToCarrierType(\DedexBundle\Entity\Ern\CarrierTypeType $carrierType)
    {
        $this->carrierType[] = $carrierType;
        return $this;
    }

    /**
     * isset carrierType
     *
     * A Composite containing details of a
     *  Carrier.
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
     * A Composite containing details of a
     *  Carrier.
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
     * A Composite containing details of a
     *  Carrier.
     *
     * @return \DedexBundle\Entity\Ern\CarrierTypeType[]
     */
    public function getCarrierType()
    {
        return $this->carrierType;
    }

    /**
     * Sets a new carrierType
     *
     * A Composite containing details of a
     *  Carrier.
     *
     * @param \DedexBundle\Entity\Ern\CarrierTypeType[] $carrierType
     * @return self
     */
    public function setCarrierType(array $carrierType)
    {
        $this->carrierType = $carrierType;
        return $this;
    }

    /**
     * Gets as technicalInstantiation
     *
     * A Composite containing technical details
     *  of the Release.
     *
     * @return \DedexBundle\Entity\Ern\TechnicalInstantiationType
     */
    public function getTechnicalInstantiation()
    {
        return $this->technicalInstantiation;
    }

    /**
     * Sets a new technicalInstantiation
     *
     * A Composite containing technical details
     *  of the Release.
     *
     * @param \DedexBundle\Entity\Ern\TechnicalInstantiationType $technicalInstantiation
     * @return self
     */
    public function setTechnicalInstantiation(\DedexBundle\Entity\Ern\TechnicalInstantiationType $technicalInstantiation)
    {
        $this->technicalInstantiation = $technicalInstantiation;
        return $this;
    }

    /**
     * Gets as numberOfUsages
     *
     * The number of times a Release can be used
     *  under the terms of the Deal.
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
     * The number of times a Release can be used
     *  under the terms of the Deal.
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

