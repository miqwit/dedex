<?php

namespace DedexBundle\Entity\Ern382;

/**
 * Class representing DealResourceReferenceListType
 *
 * A Composite containing details of one or more
 *  Resources relating to a Deal.
 * XSD Type: DealResourceReferenceList
 */
class DealResourceReferenceListType
{

    /**
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
     *
     * @var string[] $dealResourceReference
     */
    private $dealResourceReference = [
        
    ];

    /**
     * A Composite containing details about the
     *  Period of Time applicable to the Resources.
     *
     * @var \DedexBundle\Entity\Ern382\PeriodType $period
     */
    private $period = null;

    /**
     * Adds as dealResourceReference
     *
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
     *
     * @return self
     * @param string $dealResourceReference
     */
    public function addToDealResourceReference($dealResourceReference)
    {
        $this->dealResourceReference[] = $dealResourceReference;
        return $this;
    }

    /**
     * isset dealResourceReference
     *
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDealResourceReference($index)
    {
        return isset($this->dealResourceReference[$index]);
    }

    /**
     * unset dealResourceReference
     *
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDealResourceReference($index)
    {
        unset($this->dealResourceReference[$index]);
    }

    /**
     * Gets as dealResourceReference
     *
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
     *
     * @return string[]
     */
    public function getDealResourceReference()
    {
        return $this->dealResourceReference;
    }

    /**
     * Sets a new dealResourceReference
     *
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
     *
     * @param string $dealResourceReference
     * @return self
     */
    public function setDealResourceReference(array $dealResourceReference)
    {
        $this->dealResourceReference = $dealResourceReference;
        return $this;
    }

    /**
     * Gets as period
     *
     * A Composite containing details about the
     *  Period of Time applicable to the Resources.
     *
     * @return \DedexBundle\Entity\Ern382\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * A Composite containing details about the
     *  Period of Time applicable to the Resources.
     *
     * @param \DedexBundle\Entity\Ern382\PeriodType $period
     * @return self
     */
    public function setPeriod(\DedexBundle\Entity\Ern382\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }


}

