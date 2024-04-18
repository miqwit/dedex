<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing PhysicalReturnsType
 *
 * A ddex:Composite containing details of physical returns.
 * XSD Type: PhysicalReturns
 */
class PhysicalReturnsType
{
    /**
     * The ddex:Flag indicating whether physical returns are allowed (=True) or not (=False).
     *
     * @var bool $physicalReturnsAllowed
     */
    private $physicalReturnsAllowed = null;

    /**
     * A Date which is the latest one for physical returns (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DateTime $latestDateForPhysicalReturns
     */
    private $latestDateForPhysicalReturns = null;

    /**
     * Gets as physicalReturnsAllowed
     *
     * The ddex:Flag indicating whether physical returns are allowed (=True) or not (=False).
     *
     * @return bool
     */
    public function getPhysicalReturnsAllowed()
    {
        return $this->physicalReturnsAllowed;
    }

    /**
     * Sets a new physicalReturnsAllowed
     *
     * The ddex:Flag indicating whether physical returns are allowed (=True) or not (=False).
     *
     * @param bool $physicalReturnsAllowed
     * @return self
     */
    public function setPhysicalReturnsAllowed($physicalReturnsAllowed)
    {
        $this->physicalReturnsAllowed = $physicalReturnsAllowed;
        return $this;
    }

    /**
     * Gets as latestDateForPhysicalReturns
     *
     * A Date which is the latest one for physical returns (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return \DateTime
     */
    public function getLatestDateForPhysicalReturns()
    {
        return $this->latestDateForPhysicalReturns;
    }

    /**
     * Sets a new latestDateForPhysicalReturns
     *
     * A Date which is the latest one for physical returns (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param \DateTime $latestDateForPhysicalReturns
     * @return self
     */
    public function setLatestDateForPhysicalReturns(?\DateTime $latestDateForPhysicalReturns = null)
    {
        $this->latestDateForPhysicalReturns = $latestDateForPhysicalReturns;
        return $this;
    }
}

