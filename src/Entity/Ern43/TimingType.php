<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing TimingType
 *
 * A Composite containing details of a StartTime, EndTime and a Duration of a Resource.
 * XSD Type: Timing
 */
class TimingType
{
    /**
     * The start point of the related Resource given in seconds from the start of the referencing Resource. If the Resource consists of several intervals of the referencing Resource, the start point is the start point of the first interval used. The value may include fractions of a second (e.g. one minute and 30.5 seconds would be 90.5).
     *
     * @var float $startPoint
     */
    private $startPoint = null;

    /**
     * The end point of the related Resource given in seconds from the start of the referencing Resource. If the Resource consists of several intervals of the referencing Resource, the end point is the end point of the last interval used. The value may include fractions of a second (e.g. one minute and 30.5 seconds would be 90.5).
     *
     * @var float $endPoint
     */
    private $endPoint = null;

    /**
     * The Duration of the related Resource (or of an interval of that Resource) that has been used (this may be less than the total Duration of the Resource) (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). If the Resource consists of several intervals of the referencing Resource, the Duration of each interval used shall be given. The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval[] $durationUsed
     */
    private $durationUsed = [
        
    ];

    /**
     * Gets as startPoint
     *
     * The start point of the related Resource given in seconds from the start of the referencing Resource. If the Resource consists of several intervals of the referencing Resource, the start point is the start point of the first interval used. The value may include fractions of a second (e.g. one minute and 30.5 seconds would be 90.5).
     *
     * @return float
     */
    public function getStartPoint()
    {
        return $this->startPoint;
    }

    /**
     * Sets a new startPoint
     *
     * The start point of the related Resource given in seconds from the start of the referencing Resource. If the Resource consists of several intervals of the referencing Resource, the start point is the start point of the first interval used. The value may include fractions of a second (e.g. one minute and 30.5 seconds would be 90.5).
     *
     * @param float $startPoint
     * @return self
     */
    public function setStartPoint($startPoint)
    {
        $this->startPoint = $startPoint;
        return $this;
    }

    /**
     * Gets as endPoint
     *
     * The end point of the related Resource given in seconds from the start of the referencing Resource. If the Resource consists of several intervals of the referencing Resource, the end point is the end point of the last interval used. The value may include fractions of a second (e.g. one minute and 30.5 seconds would be 90.5).
     *
     * @return float
     */
    public function getEndPoint()
    {
        return $this->endPoint;
    }

    /**
     * Sets a new endPoint
     *
     * The end point of the related Resource given in seconds from the start of the referencing Resource. If the Resource consists of several intervals of the referencing Resource, the end point is the end point of the last interval used. The value may include fractions of a second (e.g. one minute and 30.5 seconds would be 90.5).
     *
     * @param float $endPoint
     * @return self
     */
    public function setEndPoint($endPoint)
    {
        $this->endPoint = $endPoint;
        return $this;
    }

    /**
     * Adds as durationUsed
     *
     * The Duration of the related Resource (or of an interval of that Resource) that has been used (this may be less than the total Duration of the Resource) (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). If the Resource consists of several intervals of the referencing Resource, the Duration of each interval used shall be given. The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @return self
     * @param \DateInterval $durationUsed
     */
    public function addToDurationUsed(\DateInterval $durationUsed)
    {
        $this->durationUsed[] = $durationUsed;
        return $this;
    }

    /**
     * isset durationUsed
     *
     * The Duration of the related Resource (or of an interval of that Resource) that has been used (this may be less than the total Duration of the Resource) (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). If the Resource consists of several intervals of the referencing Resource, the Duration of each interval used shall be given. The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDurationUsed($index)
    {
        return isset($this->durationUsed[$index]);
    }

    /**
     * unset durationUsed
     *
     * The Duration of the related Resource (or of an interval of that Resource) that has been used (this may be less than the total Duration of the Resource) (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). If the Resource consists of several intervals of the referencing Resource, the Duration of each interval used shall be given. The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDurationUsed($index)
    {
        unset($this->durationUsed[$index]);
    }

    /**
     * Gets as durationUsed
     *
     * The Duration of the related Resource (or of an interval of that Resource) that has been used (this may be less than the total Duration of the Resource) (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). If the Resource consists of several intervals of the referencing Resource, the Duration of each interval used shall be given. The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @return \DateInterval[]
     */
    public function getDurationUsed()
    {
        return $this->durationUsed;
    }

    /**
     * Sets a new durationUsed
     *
     * The Duration of the related Resource (or of an interval of that Resource) that has been used (this may be less than the total Duration of the Resource) (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). If the Resource consists of several intervals of the referencing Resource, the Duration of each interval used shall be given. The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @param \DateInterval[] $durationUsed
     * @return self
     */
    public function setDurationUsed(array $durationUsed = null)
    {
        $this->durationUsed = $durationUsed;
        return $this;
    }
}

