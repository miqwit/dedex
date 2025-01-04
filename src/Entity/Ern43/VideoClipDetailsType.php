<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing VideoClipDetailsType
 *
 * A Composite containing details of a clip.
 * XSD Type: VideoClipDetails
 */
class VideoClipDetailsType
{
    /**
     * The Identifier (specific to the Message) of the TechnicalSoundRecordingDetails within the Release which contains it. This is a LocalTechnicalResourceDetailsAnchor starting with the letter T.
     *
     * @var string $technicalResourceDetailsReference
     */
    private $technicalResourceDetailsReference = null;

    /**
     * A Type of clip.
     *
     * @var \DedexBundle\Entity\Ern43\ClipTypeType $clipType
     */
    private $clipType = null;

    /**
     * A Composite containing details of a StartTime, EndTime and a Duration of the clip.
     *
     * @var \DedexBundle\Entity\Ern43\TimingType[] $timing
     */
    private $timing = [
        
    ];

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
     * A Composite containing details of a delivery File.
     *
     * @var \DedexBundle\Entity\Ern43\VideoDeliveryFileType[] $deliveryFile
     */
    private $deliveryFile = [
        
    ];

    /**
     * Gets as technicalResourceDetailsReference
     *
     * The Identifier (specific to the Message) of the TechnicalSoundRecordingDetails within the Release which contains it. This is a LocalTechnicalResourceDetailsAnchor starting with the letter T.
     *
     * @return string
     */
    public function getTechnicalResourceDetailsReference()
    {
        return $this->technicalResourceDetailsReference;
    }

    /**
     * Sets a new technicalResourceDetailsReference
     *
     * The Identifier (specific to the Message) of the TechnicalSoundRecordingDetails within the Release which contains it. This is a LocalTechnicalResourceDetailsAnchor starting with the letter T.
     *
     * @param string $technicalResourceDetailsReference
     * @return self
     */
    public function setTechnicalResourceDetailsReference($technicalResourceDetailsReference)
    {
        $this->technicalResourceDetailsReference = $technicalResourceDetailsReference;
        return $this;
    }

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
     * Adds as timing
     *
     * A Composite containing details of a StartTime, EndTime and a Duration of the clip.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\TimingType $timing
     */
    public function addToTiming(\DedexBundle\Entity\Ern43\TimingType $timing)
    {
        $this->timing[] = $timing;
        return $this;
    }

    /**
     * isset timing
     *
     * A Composite containing details of a StartTime, EndTime and a Duration of the clip.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTiming($index)
    {
        return isset($this->timing[$index]);
    }

    /**
     * unset timing
     *
     * A Composite containing details of a StartTime, EndTime and a Duration of the clip.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTiming($index)
    {
        unset($this->timing[$index]);
    }

    /**
     * Gets as timing
     *
     * A Composite containing details of a StartTime, EndTime and a Duration of the clip.
     *
     * @return \DedexBundle\Entity\Ern43\TimingType[]
     */
    public function getTiming()
    {
        return $this->timing;
    }

    /**
     * Sets a new timing
     *
     * A Composite containing details of a StartTime, EndTime and a Duration of the clip.
     *
     * @param \DedexBundle\Entity\Ern43\TimingType[] $timing
     * @return self
     */
    public function setTiming(array $timing = null)
    {
        $this->timing = $timing;
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

    /**
     * Adds as deliveryFile
     *
     * A Composite containing details of a delivery File.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\VideoDeliveryFileType $deliveryFile
     */
    public function addToDeliveryFile(\DedexBundle\Entity\Ern43\VideoDeliveryFileType $deliveryFile)
    {
        $this->deliveryFile[] = $deliveryFile;
        return $this;
    }

    /**
     * isset deliveryFile
     *
     * A Composite containing details of a delivery File.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeliveryFile($index)
    {
        return isset($this->deliveryFile[$index]);
    }

    /**
     * unset deliveryFile
     *
     * A Composite containing details of a delivery File.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeliveryFile($index)
    {
        unset($this->deliveryFile[$index]);
    }

    /**
     * Gets as deliveryFile
     *
     * A Composite containing details of a delivery File.
     *
     * @return \DedexBundle\Entity\Ern43\VideoDeliveryFileType[]
     */
    public function getDeliveryFile()
    {
        return $this->deliveryFile;
    }

    /**
     * Sets a new deliveryFile
     *
     * A Composite containing details of a delivery File.
     *
     * @param \DedexBundle\Entity\Ern43\VideoDeliveryFileType[] $deliveryFile
     * @return self
     */
    public function setDeliveryFile(array $deliveryFile = null)
    {
        $this->deliveryFile = $deliveryFile;
        return $this;
    }
}

