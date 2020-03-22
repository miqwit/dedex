<?php

namespace DedexBundle\Entity\Ern;

/**
 * Class representing PerformanceType
 *
 * A Composite containing details of a
 *  Performance.
 * XSD Type: Performance
 */
class PerformanceType
{

    /**
     * The territory of the
     *  Performance.
     *
     * @var \DedexBundle\Entity\Ern\AllTerritoryCodeType $territory
     */
    private $territory = null;

    /**
     * A Composite containing details of the Date
     *  of the Performance. This is a string with the syntax YYYY[-MM[-DD]]. The Place of
     *  the Performance should not be specified in the TerritoryCode and
     *  LocationDescription attributes. Instead, the sibling Territory element should be
     *  used.
     *
     * @var \DedexBundle\Entity\Ern\EventDateType $date
     */
    private $date = null;

    /**
     * Gets as territory
     *
     * The territory of the
     *  Performance.
     *
     * @return \DedexBundle\Entity\Ern\AllTerritoryCodeType
     */
    public function getTerritory()
    {
        return $this->territory;
    }

    /**
     * Sets a new territory
     *
     * The territory of the
     *  Performance.
     *
     * @param \DedexBundle\Entity\Ern\AllTerritoryCodeType $territory
     * @return self
     */
    public function setTerritory(\DedexBundle\Entity\Ern\AllTerritoryCodeType $territory)
    {
        $this->territory = $territory;
        return $this;
    }

    /**
     * Gets as date
     *
     * A Composite containing details of the Date
     *  of the Performance. This is a string with the syntax YYYY[-MM[-DD]]. The Place of
     *  the Performance should not be specified in the TerritoryCode and
     *  LocationDescription attributes. Instead, the sibling Territory element should be
     *  used.
     *
     * @return \DedexBundle\Entity\Ern\EventDateType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * A Composite containing details of the Date
     *  of the Performance. This is a string with the syntax YYYY[-MM[-DD]]. The Place of
     *  the Performance should not be specified in the TerritoryCode and
     *  LocationDescription attributes. Instead, the sibling Territory element should be
     *  used.
     *
     * @param \DedexBundle\Entity\Ern\EventDateType $date
     * @return self
     */
    public function setDate(\DedexBundle\Entity\Ern\EventDateType $date)
    {
        $this->date = $date;
        return $this;
    }


}

