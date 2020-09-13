<?php

namespace DedexBundle\Entity\Ern382;

/**
 * Class representing PeriodType
 *
 * A Composite containing details about a Period of
 *  Time. Periods are typically describedby at least a StartDate or EndDate (or
 *  StartDateTime or EndDateTime) where the StartDate(Time) and EndDate(Time) are included
 *  in the Period. Thus a one-day period can be described by using the same date in the
 *  StartDate and EndDate.
 * XSD Type: Period
 */
class PeriodType
{

    /**
     * A Composite containing details of the
     *  Date and Place of an Event that marks the beginning of the Period (in ISO
     *  8601:2004 format: YYYY-MM-DD). The StartDate must be earlier than the EndDate
     *  if both are provided.
     *
     * @var \DedexBundle\Entity\Ern382\EventDateType $startDate
     */
    private $startDate = null;

    /**
     * A Composite containing details of the
     *  Date and Place of an Event that marks the end of the Period (in ISO 8601:2004
     *  format: YYYY-MM-DD). The EndDate must not be earlier than the StartDate if both
     *  are provided.
     *
     * @var \DedexBundle\Entity\Ern382\EventDateType $endDate
     */
    private $endDate = null;

    /**
     * A Composite containing details of the
     *  DateTime and Place of an Event that marks the beginning of the Period (in ISO
     *  8601:2004 format: YYYY-DD-MMThh:mm:ss). The StartDateTime must be earlier than
     *  the EndDateTime if both are provided.
     *
     * @var \DedexBundle\Entity\Ern382\EventDateTimeType $startDateTime
     */
    private $startDateTime = null;

    /**
     * A Composite containing details of the
     *  DateTime and Place of an Event that marks the end of the Period (in ISO
     *  8601:2004 format: YYYY-DD-MMThh:mm:ss). The EndDateTime must not be earlier
     *  than the StartDateTime if both are provided.
     *
     * @var \DedexBundle\Entity\Ern382\EventDateTimeType $endDateTime
     */
    private $endDateTime = null;

    /**
     * Gets as startDate
     *
     * A Composite containing details of the
     *  Date and Place of an Event that marks the beginning of the Period (in ISO
     *  8601:2004 format: YYYY-MM-DD). The StartDate must be earlier than the EndDate
     *  if both are provided.
     *
     * @return \DedexBundle\Entity\Ern382\EventDateType
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * A Composite containing details of the
     *  Date and Place of an Event that marks the beginning of the Period (in ISO
     *  8601:2004 format: YYYY-MM-DD). The StartDate must be earlier than the EndDate
     *  if both are provided.
     *
     * @param \DedexBundle\Entity\Ern382\EventDateType $startDate
     * @return self
     */
    public function setStartDate(\DedexBundle\Entity\Ern382\EventDateType $startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * A Composite containing details of the
     *  Date and Place of an Event that marks the end of the Period (in ISO 8601:2004
     *  format: YYYY-MM-DD). The EndDate must not be earlier than the StartDate if both
     *  are provided.
     *
     * @return \DedexBundle\Entity\Ern382\EventDateType
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * A Composite containing details of the
     *  Date and Place of an Event that marks the end of the Period (in ISO 8601:2004
     *  format: YYYY-MM-DD). The EndDate must not be earlier than the StartDate if both
     *  are provided.
     *
     * @param \DedexBundle\Entity\Ern382\EventDateType $endDate
     * @return self
     */
    public function setEndDate(\DedexBundle\Entity\Ern382\EventDateType $endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Gets as startDateTime
     *
     * A Composite containing details of the
     *  DateTime and Place of an Event that marks the beginning of the Period (in ISO
     *  8601:2004 format: YYYY-DD-MMThh:mm:ss). The StartDateTime must be earlier than
     *  the EndDateTime if both are provided.
     *
     * @return \DedexBundle\Entity\Ern382\EventDateTimeType
     */
    public function getStartDateTime()
    {
        return $this->startDateTime;
    }

    /**
     * Sets a new startDateTime
     *
     * A Composite containing details of the
     *  DateTime and Place of an Event that marks the beginning of the Period (in ISO
     *  8601:2004 format: YYYY-DD-MMThh:mm:ss). The StartDateTime must be earlier than
     *  the EndDateTime if both are provided.
     *
     * @param \DedexBundle\Entity\Ern382\EventDateTimeType $startDateTime
     * @return self
     */
    public function setStartDateTime(\DedexBundle\Entity\Ern382\EventDateTimeType $startDateTime)
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    /**
     * Gets as endDateTime
     *
     * A Composite containing details of the
     *  DateTime and Place of an Event that marks the end of the Period (in ISO
     *  8601:2004 format: YYYY-DD-MMThh:mm:ss). The EndDateTime must not be earlier
     *  than the StartDateTime if both are provided.
     *
     * @return \DedexBundle\Entity\Ern382\EventDateTimeType
     */
    public function getEndDateTime()
    {
        return $this->endDateTime;
    }

    /**
     * Sets a new endDateTime
     *
     * A Composite containing details of the
     *  DateTime and Place of an Event that marks the end of the Period (in ISO
     *  8601:2004 format: YYYY-DD-MMThh:mm:ss). The EndDateTime must not be earlier
     *  than the StartDateTime if both are provided.
     *
     * @param \DedexBundle\Entity\Ern382\EventDateTimeType $endDateTime
     * @return self
     */
    public function setEndDateTime(\DedexBundle\Entity\Ern382\EventDateTimeType $endDateTime)
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }


}

