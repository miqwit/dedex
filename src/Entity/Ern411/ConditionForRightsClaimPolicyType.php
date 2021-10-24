<?php

namespace DedexBundle\Entity\Ern411;

/**
 * Class representing ConditionForRightsClaimPolicyType
 *
 * A Composite containing details of a Condition.
 * XSD Type: ConditionForRightsClaimPolicy
 */
class ConditionForRightsClaimPolicyType
{

    /**
     * The numeric value of the Condition.
     *
     * @var float $value
     */
    private $value = null;

    /**
     * A UnitOfMeasure for the condition value.
     *
     * @var string $unit
     */
    private $unit = null;

    /**
     * A Creation that is used as a reference when the unit is Percent, so it can be expressed whether the value is a percentage of the reference Resource for which rights are claimed or of a consumer's UserGeneratedContent.
     *
     * @var string $referenceCreation
     */
    private $referenceCreation = null;

    /**
     * A Relator expressing the accuracy of the condition value.
     *
     * @var string $relationalRelator
     */
    private $relationalRelator = null;

    /**
     * Gets as value
     *
     * The numeric value of the Condition.
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The numeric value of the Condition.
     *
     * @param float $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as unit
     *
     * A UnitOfMeasure for the condition value.
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * A UnitOfMeasure for the condition value.
     *
     * @param string $unit
     * @return self
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Gets as referenceCreation
     *
     * A Creation that is used as a reference when the unit is Percent, so it can be expressed whether the value is a percentage of the reference Resource for which rights are claimed or of a consumer's UserGeneratedContent.
     *
     * @return string
     */
    public function getReferenceCreation()
    {
        return $this->referenceCreation;
    }

    /**
     * Sets a new referenceCreation
     *
     * A Creation that is used as a reference when the unit is Percent, so it can be expressed whether the value is a percentage of the reference Resource for which rights are claimed or of a consumer's UserGeneratedContent.
     *
     * @param string $referenceCreation
     * @return self
     */
    public function setReferenceCreation($referenceCreation)
    {
        $this->referenceCreation = $referenceCreation;
        return $this;
    }

    /**
     * Gets as relationalRelator
     *
     * A Relator expressing the accuracy of the condition value.
     *
     * @return string
     */
    public function getRelationalRelator()
    {
        return $this->relationalRelator;
    }

    /**
     * Sets a new relationalRelator
     *
     * A Relator expressing the accuracy of the condition value.
     *
     * @param string $relationalRelator
     * @return self
     */
    public function setRelationalRelator($relationalRelator)
    {
        $this->relationalRelator = $relationalRelator;
        return $this;
    }


}

