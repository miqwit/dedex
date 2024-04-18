<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing TotalRoyaltyAmountType
 *
 * A ddex:Composite containing details of a total ddex:RoyaltyAmount.
 * XSD Type: TotalRoyaltyAmount
 */
class TotalRoyaltyAmountType
{
    /**
     * A ddex:Composite containing details of the ddex:ReleaseType for which the ddex:RoyaltyAmount is calculated.
     *
     * @var \DedexBundle\Entity\DdexC\ReleaseTypeType[] $releaseType
     */
    private $releaseType = [
        
    ];

    /**
     * A ddex:Composite containing details of the RightsType for which the ddex:RoyaltyAmount is calculated.
     *
     * @var \DedexBundle\Entity\DdexC\RightsTypeType[] $rightsType
     */
    private $rightsType = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:RoyaltyAmount due.
     *
     * @var \DedexBundle\Entity\DdexC\RoyaltyAmountType $royaltyAmount
     */
    private $royaltyAmount = null;

    /**
     * Adds as releaseType
     *
     * A ddex:Composite containing details of the ddex:ReleaseType for which the ddex:RoyaltyAmount is calculated.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ReleaseTypeType $releaseType
     */
    public function addToReleaseType(\DedexBundle\Entity\DdexC\ReleaseTypeType $releaseType)
    {
        $this->releaseType[] = $releaseType;
        return $this;
    }

    /**
     * isset releaseType
     *
     * A ddex:Composite containing details of the ddex:ReleaseType for which the ddex:RoyaltyAmount is calculated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseType($index)
    {
        return isset($this->releaseType[$index]);
    }

    /**
     * unset releaseType
     *
     * A ddex:Composite containing details of the ddex:ReleaseType for which the ddex:RoyaltyAmount is calculated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseType($index)
    {
        unset($this->releaseType[$index]);
    }

    /**
     * Gets as releaseType
     *
     * A ddex:Composite containing details of the ddex:ReleaseType for which the ddex:RoyaltyAmount is calculated.
     *
     * @return \DedexBundle\Entity\DdexC\ReleaseTypeType[]
     */
    public function getReleaseType()
    {
        return $this->releaseType;
    }

    /**
     * Sets a new releaseType
     *
     * A ddex:Composite containing details of the ddex:ReleaseType for which the ddex:RoyaltyAmount is calculated.
     *
     * @param \DedexBundle\Entity\DdexC\ReleaseTypeType[] $releaseType
     * @return self
     */
    public function setReleaseType(array $releaseType = null)
    {
        $this->releaseType = $releaseType;
        return $this;
    }

    /**
     * Adds as rightsType
     *
     * A ddex:Composite containing details of the RightsType for which the ddex:RoyaltyAmount is calculated.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\RightsTypeType $rightsType
     */
    public function addToRightsType(\DedexBundle\Entity\DdexC\RightsTypeType $rightsType)
    {
        $this->rightsType[] = $rightsType;
        return $this;
    }

    /**
     * isset rightsType
     *
     * A ddex:Composite containing details of the RightsType for which the ddex:RoyaltyAmount is calculated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightsType($index)
    {
        return isset($this->rightsType[$index]);
    }

    /**
     * unset rightsType
     *
     * A ddex:Composite containing details of the RightsType for which the ddex:RoyaltyAmount is calculated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightsType($index)
    {
        unset($this->rightsType[$index]);
    }

    /**
     * Gets as rightsType
     *
     * A ddex:Composite containing details of the RightsType for which the ddex:RoyaltyAmount is calculated.
     *
     * @return \DedexBundle\Entity\DdexC\RightsTypeType[]
     */
    public function getRightsType()
    {
        return $this->rightsType;
    }

    /**
     * Sets a new rightsType
     *
     * A ddex:Composite containing details of the RightsType for which the ddex:RoyaltyAmount is calculated.
     *
     * @param \DedexBundle\Entity\DdexC\RightsTypeType[] $rightsType
     * @return self
     */
    public function setRightsType(array $rightsType = null)
    {
        $this->rightsType = $rightsType;
        return $this;
    }

    /**
     * Gets as royaltyAmount
     *
     * A ddex:Composite containing details of the ddex:RoyaltyAmount due.
     *
     * @return \DedexBundle\Entity\DdexC\RoyaltyAmountType
     */
    public function getRoyaltyAmount()
    {
        return $this->royaltyAmount;
    }

    /**
     * Sets a new royaltyAmount
     *
     * A ddex:Composite containing details of the ddex:RoyaltyAmount due.
     *
     * @param \DedexBundle\Entity\DdexC\RoyaltyAmountType $royaltyAmount
     * @return self
     */
    public function setRoyaltyAmount(\DedexBundle\Entity\DdexC\RoyaltyAmountType $royaltyAmount)
    {
        $this->royaltyAmount = $royaltyAmount;
        return $this;
    }
}

