<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing SoundRecordingPreviewDetailsType
 *
 * A Composite containing details of a preview.
 * XSD Type: SoundRecordingPreviewDetails
 */
class SoundRecordingPreviewDetailsType
{
    /**
     * A Composite containing a Description of the Type of Part that the preview relates to, e.g. chorus or intro.
     *
     * @var \DedexBundle\Entity\Ern381\DescriptionType $partType
     */
    private $partType = null;

    /**
     * The start point of the preview given in seconds from the start of the Resource.
     *
     * @var float $startPoint
     */
    private $startPoint = null;

    /**
     * The end point of the preview given in seconds from the start of the Resource.
     *
     * @var float $endPoint
     */
    private $endPoint = null;

    /**
     * The Duration of the preview, measured from the StartPoint.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The position of the preview measured in Pixels or millimetres from the top left corner of the Resource.
     *
     * @var float $topLeftCorner
     */
    private $topLeftCorner = null;

    /**
     * The position of the preview measured in Pixels or millimetres from the bottom right corner of the Resource.
     *
     * @var float $bottomRightCorner
     */
    private $bottomRightCorner = null;

    /**
     * A Type of expression indicating how this should be perceived, e.g. as instruction (meaning that this has to be done to create the preview) or as information (meaning that this has been done to craete the preview).
     *
     * @var string $expressionType
     */
    private $expressionType = null;

    /**
     * Gets as partType
     *
     * A Composite containing a Description of the Type of Part that the preview relates to, e.g. chorus or intro.
     *
     * @return \DedexBundle\Entity\Ern381\DescriptionType
     */
    public function getPartType()
    {
        return $this->partType;
    }

    /**
     * Sets a new partType
     *
     * A Composite containing a Description of the Type of Part that the preview relates to, e.g. chorus or intro.
     *
     * @param \DedexBundle\Entity\Ern381\DescriptionType $partType
     * @return self
     */
    public function setPartType(?\DedexBundle\Entity\Ern381\DescriptionType $partType = null)
    {
        $this->partType = $partType;
        return $this;
    }

    /**
     * Gets as startPoint
     *
     * The start point of the preview given in seconds from the start of the Resource.
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
     * The start point of the preview given in seconds from the start of the Resource.
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
     * The end point of the preview given in seconds from the start of the Resource.
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
     * The end point of the preview given in seconds from the start of the Resource.
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
     * Gets as duration
     *
     * The Duration of the preview, measured from the StartPoint.
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The Duration of the preview, measured from the StartPoint.
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(?\DateInterval $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as topLeftCorner
     *
     * The position of the preview measured in Pixels or millimetres from the top left corner of the Resource.
     *
     * @return float
     */
    public function getTopLeftCorner()
    {
        return $this->topLeftCorner;
    }

    /**
     * Sets a new topLeftCorner
     *
     * The position of the preview measured in Pixels or millimetres from the top left corner of the Resource.
     *
     * @param float $topLeftCorner
     * @return self
     */
    public function setTopLeftCorner($topLeftCorner)
    {
        $this->topLeftCorner = $topLeftCorner;
        return $this;
    }

    /**
     * Gets as bottomRightCorner
     *
     * The position of the preview measured in Pixels or millimetres from the bottom right corner of the Resource.
     *
     * @return float
     */
    public function getBottomRightCorner()
    {
        return $this->bottomRightCorner;
    }

    /**
     * Sets a new bottomRightCorner
     *
     * The position of the preview measured in Pixels or millimetres from the bottom right corner of the Resource.
     *
     * @param float $bottomRightCorner
     * @return self
     */
    public function setBottomRightCorner($bottomRightCorner)
    {
        $this->bottomRightCorner = $bottomRightCorner;
        return $this;
    }

    /**
     * Gets as expressionType
     *
     * A Type of expression indicating how this should be perceived, e.g. as instruction (meaning that this has to be done to create the preview) or as information (meaning that this has been done to craete the preview).
     *
     * @return string
     */
    public function getExpressionType()
    {
        return $this->expressionType;
    }

    /**
     * Sets a new expressionType
     *
     * A Type of expression indicating how this should be perceived, e.g. as instruction (meaning that this has to be done to create the preview) or as information (meaning that this has been done to craete the preview).
     *
     * @param string $expressionType
     * @return self
     */
    public function setExpressionType($expressionType)
    {
        $this->expressionType = $expressionType;
        return $this;
    }
}

