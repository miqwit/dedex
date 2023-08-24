<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing PreviewDetailsType
 *
 * A ddex:Composite containing details of a preview.
 * XSD Type: PreviewDetails
 */
class PreviewDetailsType
{
    /**
     * A ddex:Composite containing a ddex:Description of the ddex:Type of ddex:Part that the preview relates to, e.g. chorus or intro.
     *
     * @var \DedexBundle\Entity\DdexC\DescriptionType $partType
     */
    private $partType = null;

    /**
     * The position of the preview measured in ddex:Pixels or millimetres from the top left corner of the ddex:Resource.
     *
     * @var float $topLeftCorner
     */
    private $topLeftCorner = null;

    /**
     * The position of the preview measured in ddex:Pixels or millimetres from the bottom right corner of the ddex:Resource.
     *
     * @var float $bottomRightCorner
     */
    private $bottomRightCorner = null;

    /**
     * A ddex:Type of expression indicating how this should be perceived, e.g. as instruction (meaning that this has to be done to create the preview) or as information (meaning that this has been done to craete the preview).
     *
     * @var string $expressionType
     */
    private $expressionType = null;

    /**
     * Gets as partType
     *
     * A ddex:Composite containing a ddex:Description of the ddex:Type of ddex:Part that the preview relates to, e.g. chorus or intro.
     *
     * @return \DedexBundle\Entity\DdexC\DescriptionType
     */
    public function getPartType()
    {
        return $this->partType;
    }

    /**
     * Sets a new partType
     *
     * A ddex:Composite containing a ddex:Description of the ddex:Type of ddex:Part that the preview relates to, e.g. chorus or intro.
     *
     * @param \DedexBundle\Entity\DdexC\DescriptionType $partType
     * @return self
     */
    public function setPartType(?\DedexBundle\Entity\DdexC\DescriptionType $partType = null)
    {
        $this->partType = $partType;
        return $this;
    }

    /**
     * Gets as topLeftCorner
     *
     * The position of the preview measured in ddex:Pixels or millimetres from the top left corner of the ddex:Resource.
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
     * The position of the preview measured in ddex:Pixels or millimetres from the top left corner of the ddex:Resource.
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
     * The position of the preview measured in ddex:Pixels or millimetres from the bottom right corner of the ddex:Resource.
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
     * The position of the preview measured in ddex:Pixels or millimetres from the bottom right corner of the ddex:Resource.
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
     * A ddex:Type of expression indicating how this should be perceived, e.g. as instruction (meaning that this has to be done to create the preview) or as information (meaning that this has been done to craete the preview).
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
     * A ddex:Type of expression indicating how this should be perceived, e.g. as instruction (meaning that this has to be done to create the preview) or as information (meaning that this has been done to craete the preview).
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

