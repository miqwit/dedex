<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing ConditionType
 *
 * A Composite containing details of a condition.
 * XSD Type: Condition
 */
class ConditionType
{
    /**
     * The numeric value of the condition.
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
     * A Relator expressing the accuracy of the condition value.
     *
     * @var string $relationalRelator
     */
    private $relationalRelator = null;

    /**
     * Gets as value
     *
     * The numeric value of the condition.
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
     * The numeric value of the condition.
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

