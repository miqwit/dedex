<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing PeriodWithStartDateType
 *
 * A Composite containing details about a Period of Time with a mandatory StartDate or StartDateTime.
 * Explanatory Note: This Composite is named PeriodWithStartDate to disambiguate it from the basic Period Composite.
 * XSD Type: PeriodWithStartDate
 */
class PeriodWithStartDateType
{
    /**
     * A Composite containing details of the Date and Place of an Event that marks the beginning of the Period (in ISO 8601 format: YYYY-MM-DD). The StartDate must be no later than the EndDate if both are provided. StartDate and EndDate are deprecated and StartDateTime/EndDateTime should be used instead. DDEX advises that StartDate and EndDate may be removed at a future date and therefore recommends against using them.
     *
     * @var \DedexBundle\Entity\Ern43\EventDateWithCurrentTerritoryType $startDate
     */
    private $startDate = null;

    /**
     * A Composite containing details of the Date and Place of an Event that marks the end of the Period (in ISO 8601 format: YYYY-MM-DD). The EndDate must not be earlier than the StartDate if both are provided. StartDate and EndDate are deprecated and StartDateTime/EndDateTime should be used instead. DDEX advises that StartDate and EndDate may be removed at a future date and therefore recommends against using them.
     *
     * @var \DedexBundle\Entity\Ern43\EventDateWithCurrentTerritoryType $endDate
     */
    private $endDate = null;

    /**
     * A Composite containing details of the DateTime and Place of an Event that marks the beginning of the Period (in ISO 8601 format: YYYY-MM-DDThh:mm:ss). The StartDateTime must be no later than the EndDateTime if both are provided.
     *
     * @var \DedexBundle\Entity\Ern43\EventDateTimeWithoutFlagsType $startDateTime
     */
    private $startDateTime = null;

    /**
     * A Composite containing details of the DateTime and Place of an Event that marks the end of the Period (in ISO 8601 format: YYYY-MM-DDThh:mm:ss). The EndDateTime must not be earlier than the StartDateTime if both are provided.
     *
     * @var \DedexBundle\Entity\Ern43\EventDateTimeWithoutFlagsType $endDateTime
     */
    private $endDateTime = null;

    /**
     * Gets as startDate
     *
     * A Composite containing details of the Date and Place of an Event that marks the beginning of the Period (in ISO 8601 format: YYYY-MM-DD). The StartDate must be no later than the EndDate if both are provided. StartDate and EndDate are deprecated and StartDateTime/EndDateTime should be used instead. DDEX advises that StartDate and EndDate may be removed at a future date and therefore recommends against using them.
     *
     * @return \DedexBundle\Entity\Ern43\EventDateWithCurrentTerritoryType
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * A Composite containing details of the Date and Place of an Event that marks the beginning of the Period (in ISO 8601 format: YYYY-MM-DD). The StartDate must be no later than the EndDate if both are provided. StartDate and EndDate are deprecated and StartDateTime/EndDateTime should be used instead. DDEX advises that StartDate and EndDate may be removed at a future date and therefore recommends against using them.
     *
     * @param \DedexBundle\Entity\Ern43\EventDateWithCurrentTerritoryType $startDate
     * @return self
     */
    public function setStartDate(?\DedexBundle\Entity\Ern43\EventDateWithCurrentTerritoryType $startDate = null)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * A Composite containing details of the Date and Place of an Event that marks the end of the Period (in ISO 8601 format: YYYY-MM-DD). The EndDate must not be earlier than the StartDate if both are provided. StartDate and EndDate are deprecated and StartDateTime/EndDateTime should be used instead. DDEX advises that StartDate and EndDate may be removed at a future date and therefore recommends against using them.
     *
     * @return \DedexBundle\Entity\Ern43\EventDateWithCurrentTerritoryType
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * A Composite containing details of the Date and Place of an Event that marks the end of the Period (in ISO 8601 format: YYYY-MM-DD). The EndDate must not be earlier than the StartDate if both are provided. StartDate and EndDate are deprecated and StartDateTime/EndDateTime should be used instead. DDEX advises that StartDate and EndDate may be removed at a future date and therefore recommends against using them.
     *
     * @param \DedexBundle\Entity\Ern43\EventDateWithCurrentTerritoryType $endDate
     * @return self
     */
    public function setEndDate(?\DedexBundle\Entity\Ern43\EventDateWithCurrentTerritoryType $endDate = null)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Gets as startDateTime
     *
     * A Composite containing details of the DateTime and Place of an Event that marks the beginning of the Period (in ISO 8601 format: YYYY-MM-DDThh:mm:ss). The StartDateTime must be no later than the EndDateTime if both are provided.
     *
     * @return \DedexBundle\Entity\Ern43\EventDateTimeWithoutFlagsType
     */
    public function getStartDateTime()
    {
        return $this->startDateTime;
    }

    /**
     * Sets a new startDateTime
     *
     * A Composite containing details of the DateTime and Place of an Event that marks the beginning of the Period (in ISO 8601 format: YYYY-MM-DDThh:mm:ss). The StartDateTime must be no later than the EndDateTime if both are provided.
     *
     * @param \DedexBundle\Entity\Ern43\EventDateTimeWithoutFlagsType $startDateTime
     * @return self
     */
    public function setStartDateTime(?\DedexBundle\Entity\Ern43\EventDateTimeWithoutFlagsType $startDateTime = null)
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    /**
     * Gets as endDateTime
     *
     * A Composite containing details of the DateTime and Place of an Event that marks the end of the Period (in ISO 8601 format: YYYY-MM-DDThh:mm:ss). The EndDateTime must not be earlier than the StartDateTime if both are provided.
     *
     * @return \DedexBundle\Entity\Ern43\EventDateTimeWithoutFlagsType
     */
    public function getEndDateTime()
    {
        return $this->endDateTime;
    }

    /**
     * Sets a new endDateTime
     *
     * A Composite containing details of the DateTime and Place of an Event that marks the end of the Period (in ISO 8601 format: YYYY-MM-DDThh:mm:ss). The EndDateTime must not be earlier than the StartDateTime if both are provided.
     *
     * @param \DedexBundle\Entity\Ern43\EventDateTimeWithoutFlagsType $endDateTime
     * @return self
     */
    public function setEndDateTime(?\DedexBundle\Entity\Ern43\EventDateTimeWithoutFlagsType $endDateTime = null)
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }
}

