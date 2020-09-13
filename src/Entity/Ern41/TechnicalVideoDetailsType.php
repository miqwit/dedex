<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing TechnicalVideoDetailsType
 *
 * A Composite containing technical details of a Video.
 * XSD Type: TechnicalVideoDetails
 */
class TechnicalVideoDetailsType
{

    /**
     * The Language and script for the Elements of the TechnicalSoundRecordingDetails as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Territory to which the TechnicalVideoDetails apply. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string $applicableTerritoryCode
     */
    private $applicableTerritoryCode = null;

    /**
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isDefault
     */
    private $isDefault = null;

    /**
     * The Identifier (specific to the Message) of the TechnicalVideoDetails within the Release which contains it. This is a LocalTechnicalResourceDetailsAnchor starting with the letter T.
     *
     * @var string $technicalResourceDetailsReference
     */
    private $technicalResourceDetailsReference = null;

    /**
     * A Composite containing the overall BitRate and a UnitOfMeasure (the default is kbps).
     *
     * @var \DedexBundle\Entity\Ern\BitRateType $overallBitRate
     */
    private $overallBitRate = null;

    /**
     * A Composite containing details of a ContainerFormat.
     *
     * @var \DedexBundle\Entity\Ern\ContainerFormatType $containerFormat
     */
    private $containerFormat = null;

    /**
     * A Composite containing details of a Type of VideoCodec.
     *
     * @var \DedexBundle\Entity\Ern\VideoCodecTypeType $videoCodecType
     */
    private $videoCodecType = null;

    /**
     * A Composite containing the BitRate for the video data and a UnitOfMeasure (the default is kbps).
     *
     * @var \DedexBundle\Entity\Ern\BitRateType $videoBitRate
     */
    private $videoBitRate = null;

    /**
     * A Composite containing the Rate for a number of frames shown in the Video in a specific Period of Time and a UnitOfMeasure (the default is Hz, interlaced).
     *
     * @var \DedexBundle\Entity\Ern\FrameRateType $frameRate
     */
    private $frameRate = null;

    /**
     * A Composite containing the vertical Extent of an Image of the Video and a UnitOfMeasure (the default is Pixels).
     *
     * @var \DedexBundle\Entity\Ern\ExtentType $imageHeight
     */
    private $imageHeight = null;

    /**
     * A Composite containing the horizontal Extent of an Image of the Video and a UnitOfMeasure (the default is Pixels).
     *
     * @var \DedexBundle\Entity\Ern\ExtentType $imageWidth
     */
    private $imageWidth = null;

    /**
     * A Composite containing the ratio formed by dividing the ImageHeight by the ImageWidth.
     *
     * @var \DedexBundle\Entity\Ern\AspectRatioType $aspectRatio
     */
    private $aspectRatio = null;

    /**
     * A Composite containing details of the core part of the Video.
     *
     * @var \DedexBundle\Entity\Ern\CoreAreaType $coreArea
     */
    private $coreArea = null;

    /**
     * An amount of data determining the color of a pixel of an Image of the Video (given in bits per pixel).
     *
     * @var int $colorDepth
     */
    private $colorDepth = null;

    /**
     * A Type of resolution (or definition) in which the Video is provided.
     *
     * @var string $videoDefinitionType
     */
    private $videoDefinitionType = null;

    /**
     * A Composite containing details of a Type of AudioCodec.
     *
     * @var \DedexBundle\Entity\Ern\AudioCodecTypeType $audioCodecType
     */
    private $audioCodecType = null;

    /**
     * A Composite containing the BitRate for the audio data and a UnitOfMeasure (the default is kbps).
     *
     * @var \DedexBundle\Entity\Ern\BitRateType $audioBitRate
     */
    private $audioBitRate = null;

    /**
     * A number of audio channels.
     *
     * @var int $numberOfAudioChannels
     */
    private $numberOfAudioChannels = null;

    /**
     * A Composite containing the SamplingRate for the audio data and a UnitOfMeasure (the default is Hz).
     *
     * @var \DedexBundle\Entity\Ern\SamplingRateType $audioSamplingRate
     */
    private $audioSamplingRate = null;

    /**
     * An amount of audio data in a sample.
     *
     * @var int $audioBitsPerSample
     */
    private $audioBitsPerSample = null;

    /**
     * The Duration of the instantiation of the Video if this differs from the Duration provided for the Video itself (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole Video.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The BitDepth of the File.
     *
     * @var int $bitDepth
     */
    private $bitDepth = null;

    /**
     * The Flag indicating whether the Video is technically a preview of the parent Resource (=true) or not (=false). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
     *
     * @var bool $isPreview
     */
    private $isPreview = null;

    /**
     * A Composite containing details of a preview.
     *
     * @var \DedexBundle\Entity\Ern\SoundRecordingPreviewDetailsType $previewDetails
     */
    private $previewDetails = null;

    /**
     * A Composite containing details of a File containing the Video that a DSP can obtain.
     *
     * @var \DedexBundle\Entity\Ern\FileType $file
     */
    private $file = null;

    /**
     * A Composite containing details of a Fingerprint and its governing algorithm.
     *
     * @var \DedexBundle\Entity\Ern\FingerprintType[] $fingerprint
     */
    private $fingerprint = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the TechnicalSoundRecordingDetails as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The Language and script for the Elements of the TechnicalSoundRecordingDetails as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }

    /**
     * Gets as applicableTerritoryCode
     *
     * A Territory to which the TechnicalVideoDetails apply. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string
     */
    public function getApplicableTerritoryCode()
    {
        return $this->applicableTerritoryCode;
    }

    /**
     * Sets a new applicableTerritoryCode
     *
     * A Territory to which the TechnicalVideoDetails apply. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $applicableTerritoryCode
     * @return self
     */
    public function setApplicableTerritoryCode($applicableTerritoryCode)
    {
        $this->applicableTerritoryCode = $applicableTerritoryCode;
        return $this;
    }

    /**
     * Gets as isDefault
     *
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Sets a new isDefault
     *
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isDefault
     * @return self
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * Gets as technicalResourceDetailsReference
     *
     * The Identifier (specific to the Message) of the TechnicalVideoDetails within the Release which contains it. This is a LocalTechnicalResourceDetailsAnchor starting with the letter T.
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
     * The Identifier (specific to the Message) of the TechnicalVideoDetails within the Release which contains it. This is a LocalTechnicalResourceDetailsAnchor starting with the letter T.
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
     * Gets as overallBitRate
     *
     * A Composite containing the overall BitRate and a UnitOfMeasure (the default is kbps).
     *
     * @return \DedexBundle\Entity\Ern\BitRateType
     */
    public function getOverallBitRate()
    {
        return $this->overallBitRate;
    }

    /**
     * Sets a new overallBitRate
     *
     * A Composite containing the overall BitRate and a UnitOfMeasure (the default is kbps).
     *
     * @param \DedexBundle\Entity\Ern\BitRateType $overallBitRate
     * @return self
     */
    public function setOverallBitRate(\DedexBundle\Entity\Ern\BitRateType $overallBitRate)
    {
        $this->overallBitRate = $overallBitRate;
        return $this;
    }

    /**
     * Gets as containerFormat
     *
     * A Composite containing details of a ContainerFormat.
     *
     * @return \DedexBundle\Entity\Ern\ContainerFormatType
     */
    public function getContainerFormat()
    {
        return $this->containerFormat;
    }

    /**
     * Sets a new containerFormat
     *
     * A Composite containing details of a ContainerFormat.
     *
     * @param \DedexBundle\Entity\Ern\ContainerFormatType $containerFormat
     * @return self
     */
    public function setContainerFormat(\DedexBundle\Entity\Ern\ContainerFormatType $containerFormat)
    {
        $this->containerFormat = $containerFormat;
        return $this;
    }

    /**
     * Gets as videoCodecType
     *
     * A Composite containing details of a Type of VideoCodec.
     *
     * @return \DedexBundle\Entity\Ern\VideoCodecTypeType
     */
    public function getVideoCodecType()
    {
        return $this->videoCodecType;
    }

    /**
     * Sets a new videoCodecType
     *
     * A Composite containing details of a Type of VideoCodec.
     *
     * @param \DedexBundle\Entity\Ern\VideoCodecTypeType $videoCodecType
     * @return self
     */
    public function setVideoCodecType(\DedexBundle\Entity\Ern\VideoCodecTypeType $videoCodecType)
    {
        $this->videoCodecType = $videoCodecType;
        return $this;
    }

    /**
     * Gets as videoBitRate
     *
     * A Composite containing the BitRate for the video data and a UnitOfMeasure (the default is kbps).
     *
     * @return \DedexBundle\Entity\Ern\BitRateType
     */
    public function getVideoBitRate()
    {
        return $this->videoBitRate;
    }

    /**
     * Sets a new videoBitRate
     *
     * A Composite containing the BitRate for the video data and a UnitOfMeasure (the default is kbps).
     *
     * @param \DedexBundle\Entity\Ern\BitRateType $videoBitRate
     * @return self
     */
    public function setVideoBitRate(\DedexBundle\Entity\Ern\BitRateType $videoBitRate)
    {
        $this->videoBitRate = $videoBitRate;
        return $this;
    }

    /**
     * Gets as frameRate
     *
     * A Composite containing the Rate for a number of frames shown in the Video in a specific Period of Time and a UnitOfMeasure (the default is Hz, interlaced).
     *
     * @return \DedexBundle\Entity\Ern\FrameRateType
     */
    public function getFrameRate()
    {
        return $this->frameRate;
    }

    /**
     * Sets a new frameRate
     *
     * A Composite containing the Rate for a number of frames shown in the Video in a specific Period of Time and a UnitOfMeasure (the default is Hz, interlaced).
     *
     * @param \DedexBundle\Entity\Ern\FrameRateType $frameRate
     * @return self
     */
    public function setFrameRate(\DedexBundle\Entity\Ern\FrameRateType $frameRate)
    {
        $this->frameRate = $frameRate;
        return $this;
    }

    /**
     * Gets as imageHeight
     *
     * A Composite containing the vertical Extent of an Image of the Video and a UnitOfMeasure (the default is Pixels).
     *
     * @return \DedexBundle\Entity\Ern\ExtentType
     */
    public function getImageHeight()
    {
        return $this->imageHeight;
    }

    /**
     * Sets a new imageHeight
     *
     * A Composite containing the vertical Extent of an Image of the Video and a UnitOfMeasure (the default is Pixels).
     *
     * @param \DedexBundle\Entity\Ern\ExtentType $imageHeight
     * @return self
     */
    public function setImageHeight(\DedexBundle\Entity\Ern\ExtentType $imageHeight)
    {
        $this->imageHeight = $imageHeight;
        return $this;
    }

    /**
     * Gets as imageWidth
     *
     * A Composite containing the horizontal Extent of an Image of the Video and a UnitOfMeasure (the default is Pixels).
     *
     * @return \DedexBundle\Entity\Ern\ExtentType
     */
    public function getImageWidth()
    {
        return $this->imageWidth;
    }

    /**
     * Sets a new imageWidth
     *
     * A Composite containing the horizontal Extent of an Image of the Video and a UnitOfMeasure (the default is Pixels).
     *
     * @param \DedexBundle\Entity\Ern\ExtentType $imageWidth
     * @return self
     */
    public function setImageWidth(\DedexBundle\Entity\Ern\ExtentType $imageWidth)
    {
        $this->imageWidth = $imageWidth;
        return $this;
    }

    /**
     * Gets as aspectRatio
     *
     * A Composite containing the ratio formed by dividing the ImageHeight by the ImageWidth.
     *
     * @return \DedexBundle\Entity\Ern\AspectRatioType
     */
    public function getAspectRatio()
    {
        return $this->aspectRatio;
    }

    /**
     * Sets a new aspectRatio
     *
     * A Composite containing the ratio formed by dividing the ImageHeight by the ImageWidth.
     *
     * @param \DedexBundle\Entity\Ern\AspectRatioType $aspectRatio
     * @return self
     */
    public function setAspectRatio(\DedexBundle\Entity\Ern\AspectRatioType $aspectRatio)
    {
        $this->aspectRatio = $aspectRatio;
        return $this;
    }

    /**
     * Gets as coreArea
     *
     * A Composite containing details of the core part of the Video.
     *
     * @return \DedexBundle\Entity\Ern\CoreAreaType
     */
    public function getCoreArea()
    {
        return $this->coreArea;
    }

    /**
     * Sets a new coreArea
     *
     * A Composite containing details of the core part of the Video.
     *
     * @param \DedexBundle\Entity\Ern\CoreAreaType $coreArea
     * @return self
     */
    public function setCoreArea(\DedexBundle\Entity\Ern\CoreAreaType $coreArea)
    {
        $this->coreArea = $coreArea;
        return $this;
    }

    /**
     * Gets as colorDepth
     *
     * An amount of data determining the color of a pixel of an Image of the Video (given in bits per pixel).
     *
     * @return int
     */
    public function getColorDepth()
    {
        return $this->colorDepth;
    }

    /**
     * Sets a new colorDepth
     *
     * An amount of data determining the color of a pixel of an Image of the Video (given in bits per pixel).
     *
     * @param int $colorDepth
     * @return self
     */
    public function setColorDepth($colorDepth)
    {
        $this->colorDepth = $colorDepth;
        return $this;
    }

    /**
     * Gets as videoDefinitionType
     *
     * A Type of resolution (or definition) in which the Video is provided.
     *
     * @return string
     */
    public function getVideoDefinitionType()
    {
        return $this->videoDefinitionType;
    }

    /**
     * Sets a new videoDefinitionType
     *
     * A Type of resolution (or definition) in which the Video is provided.
     *
     * @param string $videoDefinitionType
     * @return self
     */
    public function setVideoDefinitionType($videoDefinitionType)
    {
        $this->videoDefinitionType = $videoDefinitionType;
        return $this;
    }

    /**
     * Gets as audioCodecType
     *
     * A Composite containing details of a Type of AudioCodec.
     *
     * @return \DedexBundle\Entity\Ern\AudioCodecTypeType
     */
    public function getAudioCodecType()
    {
        return $this->audioCodecType;
    }

    /**
     * Sets a new audioCodecType
     *
     * A Composite containing details of a Type of AudioCodec.
     *
     * @param \DedexBundle\Entity\Ern\AudioCodecTypeType $audioCodecType
     * @return self
     */
    public function setAudioCodecType(\DedexBundle\Entity\Ern\AudioCodecTypeType $audioCodecType)
    {
        $this->audioCodecType = $audioCodecType;
        return $this;
    }

    /**
     * Gets as audioBitRate
     *
     * A Composite containing the BitRate for the audio data and a UnitOfMeasure (the default is kbps).
     *
     * @return \DedexBundle\Entity\Ern\BitRateType
     */
    public function getAudioBitRate()
    {
        return $this->audioBitRate;
    }

    /**
     * Sets a new audioBitRate
     *
     * A Composite containing the BitRate for the audio data and a UnitOfMeasure (the default is kbps).
     *
     * @param \DedexBundle\Entity\Ern\BitRateType $audioBitRate
     * @return self
     */
    public function setAudioBitRate(\DedexBundle\Entity\Ern\BitRateType $audioBitRate)
    {
        $this->audioBitRate = $audioBitRate;
        return $this;
    }

    /**
     * Gets as numberOfAudioChannels
     *
     * A number of audio channels.
     *
     * @return int
     */
    public function getNumberOfAudioChannels()
    {
        return $this->numberOfAudioChannels;
    }

    /**
     * Sets a new numberOfAudioChannels
     *
     * A number of audio channels.
     *
     * @param int $numberOfAudioChannels
     * @return self
     */
    public function setNumberOfAudioChannels($numberOfAudioChannels)
    {
        $this->numberOfAudioChannels = $numberOfAudioChannels;
        return $this;
    }

    /**
     * Gets as audioSamplingRate
     *
     * A Composite containing the SamplingRate for the audio data and a UnitOfMeasure (the default is Hz).
     *
     * @return \DedexBundle\Entity\Ern\SamplingRateType
     */
    public function getAudioSamplingRate()
    {
        return $this->audioSamplingRate;
    }

    /**
     * Sets a new audioSamplingRate
     *
     * A Composite containing the SamplingRate for the audio data and a UnitOfMeasure (the default is Hz).
     *
     * @param \DedexBundle\Entity\Ern\SamplingRateType $audioSamplingRate
     * @return self
     */
    public function setAudioSamplingRate(\DedexBundle\Entity\Ern\SamplingRateType $audioSamplingRate)
    {
        $this->audioSamplingRate = $audioSamplingRate;
        return $this;
    }

    /**
     * Gets as audioBitsPerSample
     *
     * An amount of audio data in a sample.
     *
     * @return int
     */
    public function getAudioBitsPerSample()
    {
        return $this->audioBitsPerSample;
    }

    /**
     * Sets a new audioBitsPerSample
     *
     * An amount of audio data in a sample.
     *
     * @param int $audioBitsPerSample
     * @return self
     */
    public function setAudioBitsPerSample($audioBitsPerSample)
    {
        $this->audioBitsPerSample = $audioBitsPerSample;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The Duration of the instantiation of the Video if this differs from the Duration provided for the Video itself (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole Video.
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
     * The Duration of the instantiation of the Video if this differs from the Duration provided for the Video itself (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole Video.
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as bitDepth
     *
     * The BitDepth of the File.
     *
     * @return int
     */
    public function getBitDepth()
    {
        return $this->bitDepth;
    }

    /**
     * Sets a new bitDepth
     *
     * The BitDepth of the File.
     *
     * @param int $bitDepth
     * @return self
     */
    public function setBitDepth($bitDepth)
    {
        $this->bitDepth = $bitDepth;
        return $this;
    }

    /**
     * Gets as isPreview
     *
     * The Flag indicating whether the Video is technically a preview of the parent Resource (=true) or not (=false). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
     *
     * @return bool
     */
    public function getIsPreview()
    {
        return $this->isPreview;
    }

    /**
     * Sets a new isPreview
     *
     * The Flag indicating whether the Video is technically a preview of the parent Resource (=true) or not (=false). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
     *
     * @param bool $isPreview
     * @return self
     */
    public function setIsPreview($isPreview)
    {
        $this->isPreview = $isPreview;
        return $this;
    }

    /**
     * Gets as previewDetails
     *
     * A Composite containing details of a preview.
     *
     * @return \DedexBundle\Entity\Ern\SoundRecordingPreviewDetailsType
     */
    public function getPreviewDetails()
    {
        return $this->previewDetails;
    }

    /**
     * Sets a new previewDetails
     *
     * A Composite containing details of a preview.
     *
     * @param \DedexBundle\Entity\Ern\SoundRecordingPreviewDetailsType $previewDetails
     * @return self
     */
    public function setPreviewDetails(\DedexBundle\Entity\Ern\SoundRecordingPreviewDetailsType $previewDetails)
    {
        $this->previewDetails = $previewDetails;
        return $this;
    }

    /**
     * Gets as file
     *
     * A Composite containing details of a File containing the Video that a DSP can obtain.
     *
     * @return \DedexBundle\Entity\Ern\FileType
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets a new file
     *
     * A Composite containing details of a File containing the Video that a DSP can obtain.
     *
     * @param \DedexBundle\Entity\Ern\FileType $file
     * @return self
     */
    public function setFile(\DedexBundle\Entity\Ern\FileType $file)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * Adds as fingerprint
     *
     * A Composite containing details of a Fingerprint and its governing algorithm.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\FingerprintType $fingerprint
     */
    public function addToFingerprint(\DedexBundle\Entity\Ern\FingerprintType $fingerprint)
    {
        $this->fingerprint[] = $fingerprint;
        return $this;
    }

    /**
     * isset fingerprint
     *
     * A Composite containing details of a Fingerprint and its governing algorithm.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFingerprint($index)
    {
        return isset($this->fingerprint[$index]);
    }

    /**
     * unset fingerprint
     *
     * A Composite containing details of a Fingerprint and its governing algorithm.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFingerprint($index)
    {
        unset($this->fingerprint[$index]);
    }

    /**
     * Gets as fingerprint
     *
     * A Composite containing details of a Fingerprint and its governing algorithm.
     *
     * @return \DedexBundle\Entity\Ern\FingerprintType[]
     */
    public function getFingerprint()
    {
        return $this->fingerprint;
    }

    /**
     * Sets a new fingerprint
     *
     * A Composite containing details of a Fingerprint and its governing algorithm.
     *
     * @param \DedexBundle\Entity\Ern\FingerprintType[] $fingerprint
     * @return self
     */
    public function setFingerprint(array $fingerprint)
    {
        $this->fingerprint = $fingerprint;
        return $this;
    }


}

