<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing TechnicalVideoDetailsType
 *
 * A Composite containing technical details of a
 *  Video.
 * XSD Type: TechnicalVideoDetails
 */
class TechnicalVideoDetailsType
{
    /**
     * The Language and script for the Elements of
     *  the TechnicalSoundRecordingDetails as defined in IETF RfC 5646. The default is the
     *  same as indicated for the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The Identifier (specific to the Message)
     *  of the TechnicalVideoDetails within the Release which contains it. This is a
     *  LocalTechnicalResourceDetailsAnchor starting with the letter T.
     *
     * @var string $technicalResourceDetailsReference
     */
    private $technicalResourceDetailsReference = null;

    /**
     * A Composite containing details of a Type
     *  of DrmPlatform.
     *
     * @var \DedexBundle\Entity\Ern383\DrmPlatformTypeType $drmPlatformType
     */
    private $drmPlatformType = null;

    /**
     * A Composite containing the overall BitRate
     *  and a UnitOfMeasure (the default is kbps).
     *
     * @var \DedexBundle\Entity\Ern383\BitRateType $overallBitRate
     */
    private $overallBitRate = null;

    /**
     * A Composite containing details of a
     *  ContainerFormat.
     *
     * @var \DedexBundle\Entity\Ern383\ContainerFormatType $containerFormat
     */
    private $containerFormat = null;

    /**
     * A Composite containing details of a Type
     *  of VideoCodec.
     *
     * @var \DedexBundle\Entity\Ern383\VideoCodecTypeType $videoCodecType
     */
    private $videoCodecType = null;

    /**
     * A Composite containing the BitRate for the
     *  video data and a UnitOfMeasure (the default is kbps).
     *
     * @var \DedexBundle\Entity\Ern383\BitRateType $videoBitRate
     */
    private $videoBitRate = null;

    /**
     * A Composite containing the Rate for a
     *  number of frames shown in the Video in a specific Period of Time and a
     *  UnitOfMeasure (the default is Hz, interlaced).
     *
     * @var \DedexBundle\Entity\Ern383\FrameRateType $frameRate
     */
    private $frameRate = null;

    /**
     * A Composite containing the vertical Extent
     *  of an Image of the Video and a UnitOfMeasure (the default is
     *  Pixels).
     *
     * @var \DedexBundle\Entity\Ern383\ExtentType $imageHeight
     */
    private $imageHeight = null;

    /**
     * A Composite containing the horizontal
     *  Extent of an Image of the Video and a UnitOfMeasure (the default is
     *  Pixels).
     *
     * @var \DedexBundle\Entity\Ern383\ExtentType $imageWidth
     */
    private $imageWidth = null;

    /**
     * A Composite containing the ratio formed by
     *  dividing the ImageHeight by the ImageWidth.
     *
     * @var \DedexBundle\Entity\Ern383\AspectRatioType $aspectRatio
     */
    private $aspectRatio = null;

    /**
     * An amount of data determining the color of
     *  a pixel of an Image of the Video (given in bits per pixel).
     *
     * @var int $colorDepth
     */
    private $colorDepth = null;

    /**
     * A Type of resolution (or definition) in
     *  which the Video is provided.
     *
     * @var string $videoDefinitionType
     */
    private $videoDefinitionType = null;

    /**
     * A Composite containing details of a Type
     *  of AudioCodec.
     *
     * @var \DedexBundle\Entity\Ern383\AudioCodecTypeType $audioCodecType
     */
    private $audioCodecType = null;

    /**
     * A Composite containing the BitRate for the
     *  audio data and a UnitOfMeasure (the default is kbps).
     *
     * @var \DedexBundle\Entity\Ern383\BitRateType $audioBitRate
     */
    private $audioBitRate = null;

    /**
     * A number of audio
     *  channels.
     *
     * @var int $numberOfAudioChannels
     */
    private $numberOfAudioChannels = null;

    /**
     * A Composite containing the SamplingRate
     *  for the audio data and a UnitOfMeasure (the default is Hz).
     *
     * @var \DedexBundle\Entity\Ern383\SamplingRateType $audioSamplingRate
     */
    private $audioSamplingRate = null;

    /**
     * An amount of audio data in a
     *  sample.
     *
     * @var int $audioBitsPerSample
     */
    private $audioBitsPerSample = null;

    /**
     * The Duration of the instantiation of the
     *  Video if this differs from the Duration provided for the Video itself (using the
     *  ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate
     *  variables, upper case characters are part of the xs:string, e.g. one hour, two
     *  minutes and three seconds would be PT1H2M3S). The seconds section ss may include
     *  fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S). This element must
     *  only be used if and when there are no royalty reporting implications on this
     *  change in duration and when the specific technical instantiation is a clip taken
     *  from a technical instantiation representing the whole Video.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The Flag indicating whether the Video
     *  needs to be processed (=true) or not (=false) (typically: transcoded) by the
     *  MessageRecipient before being delivered to Consumers.
     *
     * @var bool $resourceProcessingRequired
     */
    private $resourceProcessingRequired = null;

    /**
     * The Duration of the Video that may be sold
     *  to a Consumer if the Video provided is not intended to be provided to Consumers
     *  'as is' but will need to be transcoded into an appropriate format by the
     *  MessageRecipient or any other DSP handling the Release before it is sold (using
     *  the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate
     *  variables, upper case characters are part of the xs:string, e.g. one hour, two
     *  minutes and three seconds would be PT1H2M3S). The seconds section ss may include
     *  fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S).
     *
     * @var \DateInterval $usableResourceDuration
     */
    private $usableResourceDuration = null;

    /**
     * The Flag indicating whether the Video is
     *  technically a preview of the parent Resource (=true) or not (=false). Note that
     *  nothing can be implied from this element as to the conditions under which the
     *  preview can be made available.
     *
     * @var bool $isPreview
     */
    private $isPreview = null;

    /**
     * A Composite containing details of a
     *  preview.
     *
     * @var \DedexBundle\Entity\Ern383\SoundRecordingPreviewDetailsType $previewDetails
     */
    private $previewDetails = null;

    /**
     * A Composite containing details of a
     *  FulfillmentDate.
     *
     * @var \DedexBundle\Entity\Ern383\FulfillmentDateType $fulfillmentDate
     */
    private $fulfillmentDate = null;

    /**
     * A Composite containing details of when a
     *  consumer is able to get hold of the Video.
     *
     * @var \DedexBundle\Entity\Ern383\FulfillmentDateType $consumerFulfillmentDate
     */
    private $consumerFulfillmentDate = null;

    /**
     * A Composite containing a Description
     *  providing details of how a DSP can obtain a File that contains the
     *  Video.
     *
     * @var \DedexBundle\Entity\Ern383\DescriptionType[] $fileAvailabilityDescription
     */
    private $fileAvailabilityDescription = [
        
    ];

    /**
     * A Composite containing details of a
     *  File containing the Video that a DSP can obtain.
     *
     * @var \DedexBundle\Entity\Ern383\FileType[] $file
     */
    private $file = [
        
    ];

    /**
     * A Composite containing details of a
     *  Fingerprint and its governing algorithm.
     *
     * @var \DedexBundle\Entity\Ern383\FingerprintType[] $fingerprint
     */
    private $fingerprint = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of
     *  the TechnicalSoundRecordingDetails as defined in IETF RfC 5646. The default is the
     *  same as indicated for the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
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
     * The Language and script for the Elements of
     *  the TechnicalSoundRecordingDetails as defined in IETF RfC 5646. The default is the
     *  same as indicated for the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
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
     * Gets as technicalResourceDetailsReference
     *
     * The Identifier (specific to the Message)
     *  of the TechnicalVideoDetails within the Release which contains it. This is a
     *  LocalTechnicalResourceDetailsAnchor starting with the letter T.
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
     * The Identifier (specific to the Message)
     *  of the TechnicalVideoDetails within the Release which contains it. This is a
     *  LocalTechnicalResourceDetailsAnchor starting with the letter T.
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
     * Gets as drmPlatformType
     *
     * A Composite containing details of a Type
     *  of DrmPlatform.
     *
     * @return \DedexBundle\Entity\Ern383\DrmPlatformTypeType
     */
    public function getDrmPlatformType()
    {
        return $this->drmPlatformType;
    }

    /**
     * Sets a new drmPlatformType
     *
     * A Composite containing details of a Type
     *  of DrmPlatform.
     *
     * @param \DedexBundle\Entity\Ern383\DrmPlatformTypeType $drmPlatformType
     * @return self
     */
    public function setDrmPlatformType(?\DedexBundle\Entity\Ern383\DrmPlatformTypeType $drmPlatformType = null)
    {
        $this->drmPlatformType = $drmPlatformType;
        return $this;
    }

    /**
     * Gets as overallBitRate
     *
     * A Composite containing the overall BitRate
     *  and a UnitOfMeasure (the default is kbps).
     *
     * @return \DedexBundle\Entity\Ern383\BitRateType
     */
    public function getOverallBitRate()
    {
        return $this->overallBitRate;
    }

    /**
     * Sets a new overallBitRate
     *
     * A Composite containing the overall BitRate
     *  and a UnitOfMeasure (the default is kbps).
     *
     * @param \DedexBundle\Entity\Ern383\BitRateType $overallBitRate
     * @return self
     */
    public function setOverallBitRate(?\DedexBundle\Entity\Ern383\BitRateType $overallBitRate = null)
    {
        $this->overallBitRate = $overallBitRate;
        return $this;
    }

    /**
     * Gets as containerFormat
     *
     * A Composite containing details of a
     *  ContainerFormat.
     *
     * @return \DedexBundle\Entity\Ern383\ContainerFormatType
     */
    public function getContainerFormat()
    {
        return $this->containerFormat;
    }

    /**
     * Sets a new containerFormat
     *
     * A Composite containing details of a
     *  ContainerFormat.
     *
     * @param \DedexBundle\Entity\Ern383\ContainerFormatType $containerFormat
     * @return self
     */
    public function setContainerFormat(?\DedexBundle\Entity\Ern383\ContainerFormatType $containerFormat = null)
    {
        $this->containerFormat = $containerFormat;
        return $this;
    }

    /**
     * Gets as videoCodecType
     *
     * A Composite containing details of a Type
     *  of VideoCodec.
     *
     * @return \DedexBundle\Entity\Ern383\VideoCodecTypeType
     */
    public function getVideoCodecType()
    {
        return $this->videoCodecType;
    }

    /**
     * Sets a new videoCodecType
     *
     * A Composite containing details of a Type
     *  of VideoCodec.
     *
     * @param \DedexBundle\Entity\Ern383\VideoCodecTypeType $videoCodecType
     * @return self
     */
    public function setVideoCodecType(?\DedexBundle\Entity\Ern383\VideoCodecTypeType $videoCodecType = null)
    {
        $this->videoCodecType = $videoCodecType;
        return $this;
    }

    /**
     * Gets as videoBitRate
     *
     * A Composite containing the BitRate for the
     *  video data and a UnitOfMeasure (the default is kbps).
     *
     * @return \DedexBundle\Entity\Ern383\BitRateType
     */
    public function getVideoBitRate()
    {
        return $this->videoBitRate;
    }

    /**
     * Sets a new videoBitRate
     *
     * A Composite containing the BitRate for the
     *  video data and a UnitOfMeasure (the default is kbps).
     *
     * @param \DedexBundle\Entity\Ern383\BitRateType $videoBitRate
     * @return self
     */
    public function setVideoBitRate(?\DedexBundle\Entity\Ern383\BitRateType $videoBitRate = null)
    {
        $this->videoBitRate = $videoBitRate;
        return $this;
    }

    /**
     * Gets as frameRate
     *
     * A Composite containing the Rate for a
     *  number of frames shown in the Video in a specific Period of Time and a
     *  UnitOfMeasure (the default is Hz, interlaced).
     *
     * @return \DedexBundle\Entity\Ern383\FrameRateType
     */
    public function getFrameRate()
    {
        return $this->frameRate;
    }

    /**
     * Sets a new frameRate
     *
     * A Composite containing the Rate for a
     *  number of frames shown in the Video in a specific Period of Time and a
     *  UnitOfMeasure (the default is Hz, interlaced).
     *
     * @param \DedexBundle\Entity\Ern383\FrameRateType $frameRate
     * @return self
     */
    public function setFrameRate(?\DedexBundle\Entity\Ern383\FrameRateType $frameRate = null)
    {
        $this->frameRate = $frameRate;
        return $this;
    }

    /**
     * Gets as imageHeight
     *
     * A Composite containing the vertical Extent
     *  of an Image of the Video and a UnitOfMeasure (the default is
     *  Pixels).
     *
     * @return \DedexBundle\Entity\Ern383\ExtentType
     */
    public function getImageHeight()
    {
        return $this->imageHeight;
    }

    /**
     * Sets a new imageHeight
     *
     * A Composite containing the vertical Extent
     *  of an Image of the Video and a UnitOfMeasure (the default is
     *  Pixels).
     *
     * @param \DedexBundle\Entity\Ern383\ExtentType $imageHeight
     * @return self
     */
    public function setImageHeight(?\DedexBundle\Entity\Ern383\ExtentType $imageHeight = null)
    {
        $this->imageHeight = $imageHeight;
        return $this;
    }

    /**
     * Gets as imageWidth
     *
     * A Composite containing the horizontal
     *  Extent of an Image of the Video and a UnitOfMeasure (the default is
     *  Pixels).
     *
     * @return \DedexBundle\Entity\Ern383\ExtentType
     */
    public function getImageWidth()
    {
        return $this->imageWidth;
    }

    /**
     * Sets a new imageWidth
     *
     * A Composite containing the horizontal
     *  Extent of an Image of the Video and a UnitOfMeasure (the default is
     *  Pixels).
     *
     * @param \DedexBundle\Entity\Ern383\ExtentType $imageWidth
     * @return self
     */
    public function setImageWidth(?\DedexBundle\Entity\Ern383\ExtentType $imageWidth = null)
    {
        $this->imageWidth = $imageWidth;
        return $this;
    }

    /**
     * Gets as aspectRatio
     *
     * A Composite containing the ratio formed by
     *  dividing the ImageHeight by the ImageWidth.
     *
     * @return \DedexBundle\Entity\Ern383\AspectRatioType
     */
    public function getAspectRatio()
    {
        return $this->aspectRatio;
    }

    /**
     * Sets a new aspectRatio
     *
     * A Composite containing the ratio formed by
     *  dividing the ImageHeight by the ImageWidth.
     *
     * @param \DedexBundle\Entity\Ern383\AspectRatioType $aspectRatio
     * @return self
     */
    public function setAspectRatio(?\DedexBundle\Entity\Ern383\AspectRatioType $aspectRatio = null)
    {
        $this->aspectRatio = $aspectRatio;
        return $this;
    }

    /**
     * Gets as colorDepth
     *
     * An amount of data determining the color of
     *  a pixel of an Image of the Video (given in bits per pixel).
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
     * An amount of data determining the color of
     *  a pixel of an Image of the Video (given in bits per pixel).
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
     * A Type of resolution (or definition) in
     *  which the Video is provided.
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
     * A Type of resolution (or definition) in
     *  which the Video is provided.
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
     * A Composite containing details of a Type
     *  of AudioCodec.
     *
     * @return \DedexBundle\Entity\Ern383\AudioCodecTypeType
     */
    public function getAudioCodecType()
    {
        return $this->audioCodecType;
    }

    /**
     * Sets a new audioCodecType
     *
     * A Composite containing details of a Type
     *  of AudioCodec.
     *
     * @param \DedexBundle\Entity\Ern383\AudioCodecTypeType $audioCodecType
     * @return self
     */
    public function setAudioCodecType(?\DedexBundle\Entity\Ern383\AudioCodecTypeType $audioCodecType = null)
    {
        $this->audioCodecType = $audioCodecType;
        return $this;
    }

    /**
     * Gets as audioBitRate
     *
     * A Composite containing the BitRate for the
     *  audio data and a UnitOfMeasure (the default is kbps).
     *
     * @return \DedexBundle\Entity\Ern383\BitRateType
     */
    public function getAudioBitRate()
    {
        return $this->audioBitRate;
    }

    /**
     * Sets a new audioBitRate
     *
     * A Composite containing the BitRate for the
     *  audio data and a UnitOfMeasure (the default is kbps).
     *
     * @param \DedexBundle\Entity\Ern383\BitRateType $audioBitRate
     * @return self
     */
    public function setAudioBitRate(?\DedexBundle\Entity\Ern383\BitRateType $audioBitRate = null)
    {
        $this->audioBitRate = $audioBitRate;
        return $this;
    }

    /**
     * Gets as numberOfAudioChannels
     *
     * A number of audio
     *  channels.
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
     * A number of audio
     *  channels.
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
     * A Composite containing the SamplingRate
     *  for the audio data and a UnitOfMeasure (the default is Hz).
     *
     * @return \DedexBundle\Entity\Ern383\SamplingRateType
     */
    public function getAudioSamplingRate()
    {
        return $this->audioSamplingRate;
    }

    /**
     * Sets a new audioSamplingRate
     *
     * A Composite containing the SamplingRate
     *  for the audio data and a UnitOfMeasure (the default is Hz).
     *
     * @param \DedexBundle\Entity\Ern383\SamplingRateType $audioSamplingRate
     * @return self
     */
    public function setAudioSamplingRate(?\DedexBundle\Entity\Ern383\SamplingRateType $audioSamplingRate = null)
    {
        $this->audioSamplingRate = $audioSamplingRate;
        return $this;
    }

    /**
     * Gets as audioBitsPerSample
     *
     * An amount of audio data in a
     *  sample.
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
     * An amount of audio data in a
     *  sample.
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
     * The Duration of the instantiation of the
     *  Video if this differs from the Duration provided for the Video itself (using the
     *  ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate
     *  variables, upper case characters are part of the xs:string, e.g. one hour, two
     *  minutes and three seconds would be PT1H2M3S). The seconds section ss may include
     *  fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S). This element must
     *  only be used if and when there are no royalty reporting implications on this
     *  change in duration and when the specific technical instantiation is a clip taken
     *  from a technical instantiation representing the whole Video.
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
     * The Duration of the instantiation of the
     *  Video if this differs from the Duration provided for the Video itself (using the
     *  ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate
     *  variables, upper case characters are part of the xs:string, e.g. one hour, two
     *  minutes and three seconds would be PT1H2M3S). The seconds section ss may include
     *  fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S). This element must
     *  only be used if and when there are no royalty reporting implications on this
     *  change in duration and when the specific technical instantiation is a clip taken
     *  from a technical instantiation representing the whole Video.
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
     * Gets as resourceProcessingRequired
     *
     * The Flag indicating whether the Video
     *  needs to be processed (=true) or not (=false) (typically: transcoded) by the
     *  MessageRecipient before being delivered to Consumers.
     *
     * @return bool
     */
    public function getResourceProcessingRequired()
    {
        return $this->resourceProcessingRequired;
    }

    /**
     * Sets a new resourceProcessingRequired
     *
     * The Flag indicating whether the Video
     *  needs to be processed (=true) or not (=false) (typically: transcoded) by the
     *  MessageRecipient before being delivered to Consumers.
     *
     * @param bool $resourceProcessingRequired
     * @return self
     */
    public function setResourceProcessingRequired($resourceProcessingRequired)
    {
        $this->resourceProcessingRequired = $resourceProcessingRequired;
        return $this;
    }

    /**
     * Gets as usableResourceDuration
     *
     * The Duration of the Video that may be sold
     *  to a Consumer if the Video provided is not intended to be provided to Consumers
     *  'as is' but will need to be transcoded into an appropriate format by the
     *  MessageRecipient or any other DSP handling the Release before it is sold (using
     *  the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate
     *  variables, upper case characters are part of the xs:string, e.g. one hour, two
     *  minutes and three seconds would be PT1H2M3S). The seconds section ss may include
     *  fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S).
     *
     * @return \DateInterval
     */
    public function getUsableResourceDuration()
    {
        return $this->usableResourceDuration;
    }

    /**
     * Sets a new usableResourceDuration
     *
     * The Duration of the Video that may be sold
     *  to a Consumer if the Video provided is not intended to be provided to Consumers
     *  'as is' but will need to be transcoded into an appropriate format by the
     *  MessageRecipient or any other DSP handling the Release before it is sold (using
     *  the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate
     *  variables, upper case characters are part of the xs:string, e.g. one hour, two
     *  minutes and three seconds would be PT1H2M3S). The seconds section ss may include
     *  fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S).
     *
     * @param \DateInterval $usableResourceDuration
     * @return self
     */
    public function setUsableResourceDuration(?\DateInterval $usableResourceDuration = null)
    {
        $this->usableResourceDuration = $usableResourceDuration;
        return $this;
    }

    /**
     * Gets as isPreview
     *
     * The Flag indicating whether the Video is
     *  technically a preview of the parent Resource (=true) or not (=false). Note that
     *  nothing can be implied from this element as to the conditions under which the
     *  preview can be made available.
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
     * The Flag indicating whether the Video is
     *  technically a preview of the parent Resource (=true) or not (=false). Note that
     *  nothing can be implied from this element as to the conditions under which the
     *  preview can be made available.
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
     * A Composite containing details of a
     *  preview.
     *
     * @return \DedexBundle\Entity\Ern383\SoundRecordingPreviewDetailsType
     */
    public function getPreviewDetails()
    {
        return $this->previewDetails;
    }

    /**
     * Sets a new previewDetails
     *
     * A Composite containing details of a
     *  preview.
     *
     * @param \DedexBundle\Entity\Ern383\SoundRecordingPreviewDetailsType $previewDetails
     * @return self
     */
    public function setPreviewDetails(?\DedexBundle\Entity\Ern383\SoundRecordingPreviewDetailsType $previewDetails = null)
    {
        $this->previewDetails = $previewDetails;
        return $this;
    }

    /**
     * Gets as fulfillmentDate
     *
     * A Composite containing details of a
     *  FulfillmentDate.
     *
     * @return \DedexBundle\Entity\Ern383\FulfillmentDateType
     */
    public function getFulfillmentDate()
    {
        return $this->fulfillmentDate;
    }

    /**
     * Sets a new fulfillmentDate
     *
     * A Composite containing details of a
     *  FulfillmentDate.
     *
     * @param \DedexBundle\Entity\Ern383\FulfillmentDateType $fulfillmentDate
     * @return self
     */
    public function setFulfillmentDate(?\DedexBundle\Entity\Ern383\FulfillmentDateType $fulfillmentDate = null)
    {
        $this->fulfillmentDate = $fulfillmentDate;
        return $this;
    }

    /**
     * Gets as consumerFulfillmentDate
     *
     * A Composite containing details of when a
     *  consumer is able to get hold of the Video.
     *
     * @return \DedexBundle\Entity\Ern383\FulfillmentDateType
     */
    public function getConsumerFulfillmentDate()
    {
        return $this->consumerFulfillmentDate;
    }

    /**
     * Sets a new consumerFulfillmentDate
     *
     * A Composite containing details of when a
     *  consumer is able to get hold of the Video.
     *
     * @param \DedexBundle\Entity\Ern383\FulfillmentDateType $consumerFulfillmentDate
     * @return self
     */
    public function setConsumerFulfillmentDate(?\DedexBundle\Entity\Ern383\FulfillmentDateType $consumerFulfillmentDate = null)
    {
        $this->consumerFulfillmentDate = $consumerFulfillmentDate;
        return $this;
    }

    /**
     * Adds as fileAvailabilityDescription
     *
     * A Composite containing a Description
     *  providing details of how a DSP can obtain a File that contains the
     *  Video.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\DescriptionType $fileAvailabilityDescription
     */
    public function addToFileAvailabilityDescription(\DedexBundle\Entity\Ern383\DescriptionType $fileAvailabilityDescription)
    {
        $this->fileAvailabilityDescription[] = $fileAvailabilityDescription;
        return $this;
    }

    /**
     * isset fileAvailabilityDescription
     *
     * A Composite containing a Description
     *  providing details of how a DSP can obtain a File that contains the
     *  Video.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFileAvailabilityDescription($index)
    {
        return isset($this->fileAvailabilityDescription[$index]);
    }

    /**
     * unset fileAvailabilityDescription
     *
     * A Composite containing a Description
     *  providing details of how a DSP can obtain a File that contains the
     *  Video.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFileAvailabilityDescription($index)
    {
        unset($this->fileAvailabilityDescription[$index]);
    }

    /**
     * Gets as fileAvailabilityDescription
     *
     * A Composite containing a Description
     *  providing details of how a DSP can obtain a File that contains the
     *  Video.
     *
     * @return \DedexBundle\Entity\Ern383\DescriptionType[]
     */
    public function getFileAvailabilityDescription()
    {
        return $this->fileAvailabilityDescription;
    }

    /**
     * Sets a new fileAvailabilityDescription
     *
     * A Composite containing a Description
     *  providing details of how a DSP can obtain a File that contains the
     *  Video.
     *
     * @param \DedexBundle\Entity\Ern383\DescriptionType[] $fileAvailabilityDescription
     * @return self
     */
    public function setFileAvailabilityDescription(array $fileAvailabilityDescription = null)
    {
        $this->fileAvailabilityDescription = $fileAvailabilityDescription;
        return $this;
    }

    /**
     * Adds as file
     *
     * A Composite containing details of a
     *  File containing the Video that a DSP can obtain.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\FileType $file
     */
    public function addToFile(\DedexBundle\Entity\Ern383\FileType $file)
    {
        $this->file[] = $file;
        return $this;
    }

    /**
     * isset file
     *
     * A Composite containing details of a
     *  File containing the Video that a DSP can obtain.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFile($index)
    {
        return isset($this->file[$index]);
    }

    /**
     * unset file
     *
     * A Composite containing details of a
     *  File containing the Video that a DSP can obtain.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFile($index)
    {
        unset($this->file[$index]);
    }

    /**
     * Gets as file
     *
     * A Composite containing details of a
     *  File containing the Video that a DSP can obtain.
     *
     * @return \DedexBundle\Entity\Ern383\FileType[]
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets a new file
     *
     * A Composite containing details of a
     *  File containing the Video that a DSP can obtain.
     *
     * @param \DedexBundle\Entity\Ern383\FileType[] $file
     * @return self
     */
    public function setFile(array $file = null)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * Adds as fingerprint
     *
     * A Composite containing details of a
     *  Fingerprint and its governing algorithm.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\FingerprintType $fingerprint
     */
    public function addToFingerprint(\DedexBundle\Entity\Ern383\FingerprintType $fingerprint)
    {
        $this->fingerprint[] = $fingerprint;
        return $this;
    }

    /**
     * isset fingerprint
     *
     * A Composite containing details of a
     *  Fingerprint and its governing algorithm.
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
     * A Composite containing details of a
     *  Fingerprint and its governing algorithm.
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
     * A Composite containing details of a
     *  Fingerprint and its governing algorithm.
     *
     * @return \DedexBundle\Entity\Ern383\FingerprintType[]
     */
    public function getFingerprint()
    {
        return $this->fingerprint;
    }

    /**
     * Sets a new fingerprint
     *
     * A Composite containing details of a
     *  Fingerprint and its governing algorithm.
     *
     * @param \DedexBundle\Entity\Ern383\FingerprintType[] $fingerprint
     * @return self
     */
    public function setFingerprint(array $fingerprint = null)
    {
        $this->fingerprint = $fingerprint;
        return $this;
    }
}

