<?php

namespace DedexBundle\Entity\Ern411;

/**
 * Class representing PhysicalReturnsType
 *
 * A Composite containing details of physical returns.
 * XSD Type: PhysicalReturns
 */
class PhysicalReturnsType
{

    /**
     * The Flag indicating whether physical returns are allowed (=true) or not (=false).
     *
     * @var bool $physicalReturnsAllowed
     */
    private $physicalReturnsAllowed = null;

    /**
     * A Date which is the latest one for physical returns (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var string $latestDateForPhysicalReturns
     */
    private $latestDateForPhysicalReturns = null;

    /**
     * Gets as physicalReturnsAllowed
     *
     * The Flag indicating whether physical returns are allowed (=true) or not (=false).
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
     * The Flag indicating whether physical returns are allowed (=true) or not (=false).
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
     * @return string
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
     * @param string $latestDateForPhysicalReturns
     * @return self
     */
    public function setLatestDateForPhysicalReturns($latestDateForPhysicalReturns)
    {
        $this->latestDateForPhysicalReturns = $latestDateForPhysicalReturns;
        return $this;
    }


}

