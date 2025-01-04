<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing ClipDetailsType
 *
 * A Composite containing details of a clip.
 * XSD Type: ClipDetails
 */
class ClipDetailsType
{
    /**
     * A Type of clip.
     *
     * @var \DedexBundle\Entity\Ern43\ClipTypeType $clipType
     */
    private $clipType = null;

    /**
     * The position of the top left corner of the clip measured in Pixels from the top left corner of the Resource. The position is given as two coordinate values separated by a comma, the top left pixel being 0,0.
     *
     * @var string $topLeftCorner
     */
    private $topLeftCorner = null;

    /**
     * The position of the bottom right corner of the clip measured in Pixels from the top left corner of the Resource. The position is given as two coordinate values separated by a comma, the top left pixel being 0,0.
     *
     * @var string $bottomRightCorner
     */
    private $bottomRightCorner = null;

    /**
     * A Type of expression indicating how this should be perceived, e.g. as instruction (meaning that this has to be done to create the clip) or as information (meaning that this has been done to craete the clip).
     *
     * @var string $expressionType
     */
    private $expressionType = null;

    /**
     * Gets as clipType
     *
     * A Type of clip.
     *
     * @return \DedexBundle\Entity\Ern43\ClipTypeType
     */
    public function getClipType()
    {
        return $this->clipType;
    }

    /**
     * Sets a new clipType
     *
     * A Type of clip.
     *
     * @param \DedexBundle\Entity\Ern43\ClipTypeType $clipType
     * @return self
     */
    public function setClipType(\DedexBundle\Entity\Ern43\ClipTypeType $clipType)
    {
        $this->clipType = $clipType;
        return $this;
    }

    /**
     * Gets as topLeftCorner
     *
     * The position of the top left corner of the clip measured in Pixels from the top left corner of the Resource. The position is given as two coordinate values separated by a comma, the top left pixel being 0,0.
     *
     * @return string
     */
    public function getTopLeftCorner()
    {
        return $this->topLeftCorner;
    }

    /**
     * Sets a new topLeftCorner
     *
     * The position of the top left corner of the clip measured in Pixels from the top left corner of the Resource. The position is given as two coordinate values separated by a comma, the top left pixel being 0,0.
     *
     * @param string $topLeftCorner
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
     * The position of the bottom right corner of the clip measured in Pixels from the top left corner of the Resource. The position is given as two coordinate values separated by a comma, the top left pixel being 0,0.
     *
     * @return string
     */
    public function getBottomRightCorner()
    {
        return $this->bottomRightCorner;
    }

    /**
     * Sets a new bottomRightCorner
     *
     * The position of the bottom right corner of the clip measured in Pixels from the top left corner of the Resource. The position is given as two coordinate values separated by a comma, the top left pixel being 0,0.
     *
     * @param string $bottomRightCorner
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
     * A Type of expression indicating how this should be perceived, e.g. as instruction (meaning that this has to be done to create the clip) or as information (meaning that this has been done to craete the clip).
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
     * A Type of expression indicating how this should be perceived, e.g. as instruction (meaning that this has to be done to create the clip) or as information (meaning that this has been done to craete the clip).
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

