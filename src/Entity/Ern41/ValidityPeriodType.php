<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing ValidityPeriodType
 *
 * A Composite containing details about a ValidityPeriod of Time. Periods are typically describedby at least a StartDate or EndDate where the StartDate and EndDate are included in the Period. Thus a one-day period can be described by using the same date in the StartDate and EndDate.
 * XSD Type: ValidityPeriod
 */
class ValidityPeriodType
{

    /**
     * A Composite containing details of the Date and Place of an Event that marks the beginning of the Period (in ISO 8601:2004 format: YYYY-MM-DD). The StartDate must be no later than the EndDate if both are provided.
     *
     * @var \DedexBundle\Entity\Ern\EventDateType $startDate
     */
    private $startDate = null;

    /**
     * A Composite containing details of the Date and Place of an Event that marks the end of the Period (in ISO 8601:2004 format: YYYY-MM-DD). The EndDate must not be earlier than the StartDate if both are provided.
     *
     * @var \DedexBundle\Entity\Ern\EventDateType $endDate
     */
    private $endDate = null;

    /**
     * Gets as startDate
     *
     * A Composite containing details of the Date and Place of an Event that marks the beginning of the Period (in ISO 8601:2004 format: YYYY-MM-DD). The StartDate must be no later than the EndDate if both are provided.
     *
     * @return \DedexBundle\Entity\Ern\EventDateType
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * A Composite containing details of the Date and Place of an Event that marks the beginning of the Period (in ISO 8601:2004 format: YYYY-MM-DD). The StartDate must be no later than the EndDate if both are provided.
     *
     * @param \DedexBundle\Entity\Ern\EventDateType $startDate
     * @return self
     */
    public function setStartDate(\DedexBundle\Entity\Ern\EventDateType $startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * A Composite containing details of the Date and Place of an Event that marks the end of the Period (in ISO 8601:2004 format: YYYY-MM-DD). The EndDate must not be earlier than the StartDate if both are provided.
     *
     * @return \DedexBundle\Entity\Ern\EventDateType
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * A Composite containing details of the Date and Place of an Event that marks the end of the Period (in ISO 8601:2004 format: YYYY-MM-DD). The EndDate must not be earlier than the StartDate if both are provided.
     *
     * @param \DedexBundle\Entity\Ern\EventDateType $endDate
     * @return self
     */
    public function setEndDate(\DedexBundle\Entity\Ern\EventDateType $endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }


}

