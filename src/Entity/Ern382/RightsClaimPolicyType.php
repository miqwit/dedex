<?php

namespace DedexBundle\Entity\Ern382;

/**
 * Class representing RightsClaimPolicyType
 *
 * A Composite containing details of a rights claim
 *  policy.
 * XSD Type: RightsClaimPolicy
 */
class RightsClaimPolicyType
{

    /**
     * A Composite containing details of
     *  conditions.
     *
     * @var \DedexBundle\Entity\Ern382\ConditionType[] $condition
     */
    private $condition = [
        
    ];

    /**
     * A Type of rights claim
     *  policy.
     *
     * @var string $rightsClaimPolicyType
     */
    private $rightsClaimPolicyType = null;

    /**
     * Adds as condition
     *
     * A Composite containing details of
     *  conditions.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\ConditionType $condition
     */
    public function addToCondition(\DedexBundle\Entity\Ern382\ConditionType $condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * isset condition
     *
     * A Composite containing details of
     *  conditions.
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
     * A Composite containing details of
     *  conditions.
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
     * A Composite containing details of
     *  conditions.
     *
     * @return \DedexBundle\Entity\Ern382\ConditionType[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * A Composite containing details of
     *  conditions.
     *
     * @param \DedexBundle\Entity\Ern382\ConditionType[] $condition
     * @return self
     */
    public function setCondition(array $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as rightsClaimPolicyType
     *
     * A Type of rights claim
     *  policy.
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
     * A Type of rights claim
     *  policy.
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

