<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing RightsClaimPolicyType
 *
 * A Composite containing details of a rights claim policy.
 * XSD Type: RightsClaimPolicy
 */
class RightsClaimPolicyType
{
    /**
     * A Composite containing details of Conditions. If more than one Condition is specified, then all of them have to be fulfilled (i.e. they are combined using the logical operator AND).
     *
     * @var \DedexBundle\Entity\Ern43\ConditionForRightsClaimPolicyType[] $condition
     */
    private $condition = [
        
    ];

    /**
     * A Type of rights claim policy.
     *
     * @var string $rightsClaimPolicyType
     */
    private $rightsClaimPolicyType = null;

    /**
     * Adds as condition
     *
     * A Composite containing details of Conditions. If more than one Condition is specified, then all of them have to be fulfilled (i.e. they are combined using the logical operator AND).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\ConditionForRightsClaimPolicyType $condition
     */
    public function addToCondition(\DedexBundle\Entity\Ern43\ConditionForRightsClaimPolicyType $condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * isset condition
     *
     * A Composite containing details of Conditions. If more than one Condition is specified, then all of them have to be fulfilled (i.e. they are combined using the logical operator AND).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCondition($index)
    {
        return isset($this->condition[$index]);
    }

    /**
     * unset condition
     *
     * A Composite containing details of Conditions. If more than one Condition is specified, then all of them have to be fulfilled (i.e. they are combined using the logical operator AND).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCondition($index)
    {
        unset($this->condition[$index]);
    }

    /**
     * Gets as condition
     *
     * A Composite containing details of Conditions. If more than one Condition is specified, then all of them have to be fulfilled (i.e. they are combined using the logical operator AND).
     *
     * @return \DedexBundle\Entity\Ern43\ConditionForRightsClaimPolicyType[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * A Composite containing details of Conditions. If more than one Condition is specified, then all of them have to be fulfilled (i.e. they are combined using the logical operator AND).
     *
     * @param \DedexBundle\Entity\Ern43\ConditionForRightsClaimPolicyType[] $condition
     * @return self
     */
    public function setCondition(array $condition = null)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as rightsClaimPolicyType
     *
     * A Type of rights claim policy.
     *
     * @return string
     */
    public function getRightsClaimPolicyType()
    {
        return $this->rightsClaimPolicyType;
    }

    /**
     * Sets a new rightsClaimPolicyType
     *
     * A Type of rights claim policy.
     *
     * @param string $rightsClaimPolicyType
     * @return self
     */
    public function setRightsClaimPolicyType($rightsClaimPolicyType)
    {
        $this->rightsClaimPolicyType = $rightsClaimPolicyType;
        return $this;
    }
}

