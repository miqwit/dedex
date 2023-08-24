<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing MessageNotificationPeriodType
 *
 * A ddex:Composite containing details of a reporting ddex:Period covered by a ddex:Message. It must contain at least one out of ddex:StartDate or ddex:EndDate. The ddex:StartDate must be earlier than the ddex:EndDate if both are provided.
 * XSD Type: MessageNotificationPeriod
 */
class MessageNotificationPeriodType
{
    /**
     * The Date that marks the beginning of the ddex:Period (in ISO 8601:2004 format: YYYY-MM-DD). This cannot be a Date in the future.
     *
     * @var \DateTime $startDate
     */
    private $startDate = null;

    /**
     * The Date that marks the end of the ddex:Period (in ISO 8601:2004 format: YYYY-MM-DD). This cannot be a Date in the future.
     *
     * @var \DateTime $endDate
     */
    private $endDate = null;

    /**
     * Gets as startDate
     *
     * The Date that marks the beginning of the ddex:Period (in ISO 8601:2004 format: YYYY-MM-DD). This cannot be a Date in the future.
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * The Date that marks the beginning of the ddex:Period (in ISO 8601:2004 format: YYYY-MM-DD). This cannot be a Date in the future.
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * The Date that marks the end of the ddex:Period (in ISO 8601:2004 format: YYYY-MM-DD). This cannot be a Date in the future.
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * The Date that marks the end of the ddex:Period (in ISO 8601:2004 format: YYYY-MM-DD). This cannot be a Date in the future.
     *
     * @param \DateTime $endDate
     * @return self
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }
}

