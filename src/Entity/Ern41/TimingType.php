<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing TimingType
 *
 * A Composite containing details of a StartTime and a Duration of a Resource.
 * XSD Type: Timing
 */
class TimingType
{

    /**
     * The start point of the related Resource from the start of the referencing Resource (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $startPoint
     */
    private $startPoint = null;

    /**
     * The total Duration of the related Resource that has been used (this may be less than the total Duration of the Resource) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $durationUsed
     */
    private $durationUsed = null;

    /**
     * Gets as startPoint
     *
     * The start point of the related Resource from the start of the referencing Resource (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @return \DateInterval
     */
    public function getStartPoint()
    {
        return $this->startPoint;
    }

    /**
     * Sets a new startPoint
     *
     * The start point of the related Resource from the start of the referencing Resource (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @param \DateInterval $startPoint
     * @return self
     */
    public function setStartPoint(\DateInterval $startPoint)
    {
        $this->startPoint = $startPoint;
        return $this;
    }

    /**
     * Gets as durationUsed
     *
     * The total Duration of the related Resource that has been used (this may be less than the total Duration of the Resource) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @return \DateInterval
     */
    public function getDurationUsed()
    {
        return $this->durationUsed;
    }

    /**
     * Sets a new durationUsed
     *
     * The total Duration of the related Resource that has been used (this may be less than the total Duration of the Resource) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @param \DateInterval $durationUsed
     * @return self
     */
    public function setDurationUsed(\DateInterval $durationUsed)
    {
        $this->durationUsed = $durationUsed;
        return $this;
    }


}

