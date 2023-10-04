<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing TechnicalVideoDetailsType
 *
 * A ddex:Composite containing technical details of a ddex:Video.
 * XSD Type: TechnicalVideoDetails
 */
class TechnicalVideoDetailsType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the TechnicalSoundRecordingDetails as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The ddex:Identifier (specific to the ddex:Message) of the ern:TechnicalVideoDetails within the ddex:Release which contains it. This is a ddex:LocalTechnicalResourceDetailsAnchor starting with the letter T.
     *
     * @var string $technicalResourceDetailsReference
     */
    private $technicalResourceDetailsReference = null;

    /**
     * A ddex:Composite containing details of a ddex:Type of ddex:DrmPlatform.
     *
     * @var \DedexBundle\Entity\DdexC\DrmPlatformTypeType $drmPlatformType
     */
    private $drmPlatformType = null;

    /**
     * A ddex:Composite containing the overall ddex:BitRate and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @var \DedexBundle\Entity\DdexC\BitRateType $overallBitRate
     */
    private $overallBitRate = null;

    /**
     * A ddex:Composite containing details of a ddex:ContainerFormat.
     *
     * @var \DedexBundle\Entity\DdexC\ContainerFormatType $containerFormat
     */
    private $containerFormat = null;

    /**
     * A ddex:Composite containing details of a ddex:Type of ddex:VideoCodec.
     *
     * @var \DedexBundle\Entity\DdexC\VideoCodecTypeType $videoCodecType
     */
    private $videoCodecType = null;

    /**
     * A ddex:Composite containing the ddex:BitRate for the video data and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @var \DedexBundle\Entity\DdexC\BitRateType $videoBitRate
     */
    private $videoBitRate = null;

    /**
     * A ddex:Composite containing the ddex:Rate for a number of frames shown in the ddex:Video in a specific ddex:Period of ddex:Time and a ddex:UnitOfMeasure (the default is ddex:Hz, interlaced).
     *
     * @var \DedexBundle\Entity\DdexC\FrameRateType $frameRate
     */
    private $frameRate = null;

    /**
     * A ddex:Composite containing the vertical ddex:Extent of an ddex:Image of the ddex:Video and a ddex:UnitOfMeasure (the default is pixels).
     *
     * @var \DedexBundle\Entity\DdexC\ExtentType $imageHeight
     */
    private $imageHeight = null;

    /**
     * A ddex:Composite containing the horizontal ddex:Extent of an ddex:Image of the ddex:Video and a ddex:UnitOfMeasure (the default is pixels).
     *
     * @var \DedexBundle\Entity\DdexC\ExtentType $imageWidth
     */
    private $imageWidth = null;

    /**
     * The ratio formed by dividing the ddex:ImageHeight by the ddex:ImageWidth.
     *
     * @var float $aspectRatio
     */
    private $aspectRatio = null;

    /**
     * An amount of data determining the color of a pixel of an ddex:Image of the ddex:Video (given in bits per pixel).
     *
     * @var int $colorDepth
     */
    private $colorDepth = null;

    /**
     * A ddex:Type of resolution (or definition) in which the ddex:Video is provided.
     *
     * @var string $videoDefinitionType
     */
    private $videoDefinitionType = null;

    /**
     * A ddex:Composite containing details of a ddex:Type of ddex:AudioCodec.
     *
     * @var \DedexBundle\Entity\DdexC\AudioCodecTypeType $audioCodecType
     */
    private $audioCodecType = null;

    /**
     * A ddex:Composite containing the ddex:BitRate for the audio data and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @var \DedexBundle\Entity\DdexC\BitRateType $audioBitRate
     */
    private $audioBitRate = null;

    /**
     * A number of audio channels.
     *
     * @var int $numberOfAudioChannels
     */
    private $numberOfAudioChannels = null;

    /**
     * A ddex:Composite containing the ddex:SamplingRate for the audio data and a ddex:UnitOfMeasure (the default is ddex:Hz).
     *
     * @var \DedexBundle\Entity\DdexC\SamplingRateType $audioSamplingRate
     */
    private $audioSamplingRate = null;

    /**
     * An amount of audio data in a sample.
     *
     * @var int $audioBitsPerSample
     */
    private $audioBitsPerSample = null;

    /**
     * The ddex:Duration of the instantiation of the ern:Video if this differs from the ddex:Duration provided for the ern:Video itself (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole ern:Video.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The ddex:Flag indicating whether the ern:Video needs to be processed (=True) or not (=False) (typically: transcoded) by the ddex:MessageRecipient before being delivered to ddex:Consumers.
     *
     * @var bool $resourceProcessingRequired
     */
    private $resourceProcessingRequired = null;

    /**
     * The ddex:Duration of the ern:Video that may be sold to a ddex:Consumer if the ern:Video provided is not intended to be provided to ddex:Consumers 'as is' but will need to be transcoded into an appropriate format by the ddex:MessageRecipient or any other ddex:DSP handling the ddex:Release before it is sold (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $usableResourceDuration
     */
    private $usableResourceDuration = null;

    /**
     * The ddex:Flag indicating whether the ddex:Video is technically a preview of the parent ddex:Resource (=True) or not (=False). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
     *
     * @var bool $isPreview
     */
    private $isPreview = null;

    /**
     * A ddex:Composite containing details of a preview.
     *
     * @var \DedexBundle\Entity\Ern341\SoundRecordingPreviewDetailsType $previewDetails
     */
    private $previewDetails = null;

    /**
     * A ddex:Composite containing details of a ddex:FulfillmentDate.
     *
     * @var \DedexBundle\Entity\DdexC\FulfillmentDateType $fulfillmentDate
     */
    private $fulfillmentDate = null;

    /**
     * A ddex:Composite containing details of when a consumer is able to get hold of the ddex:Video.
     *
     * @var \DedexBundle\Entity\DdexC\FulfillmentDateType $consumerFulfillmentDate
     */
    private $consumerFulfillmentDate = null;

    /**
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:Video.
     *
     * @var \DedexBundle\Entity\DdexC\DescriptionType[] $fileAvailabilityDescription
     */
    private $fileAvailabilityDescription = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:File containing the ddex:Video that a ddex:DSP can obtain.
     *
     * @var \DedexBundle\Entity\DdexC\FileType[] $file
     */
    private $file = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Fingerprint and its governing algorithm.
     *
     * @var \DedexBundle\Entity\DdexC\FingerprintType[] $fingerprint
     */
    private $fingerprint = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the TechnicalSoundRecordingDetails as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the TechnicalSoundRecordingDetails as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Identifier (specific to the ddex:Message) of the ern:TechnicalVideoDetails within the ddex:Release which contains it. This is a ddex:LocalTechnicalResourceDetailsAnchor starting with the letter T.
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
     * The ddex:Identifier (specific to the ddex:Message) of the ern:TechnicalVideoDetails within the ddex:Release which contains it. This is a ddex:LocalTechnicalResourceDetailsAnchor starting with the letter T.
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
     * A ddex:Composite containing details of a ddex:Type of ddex:DrmPlatform.
     *
     * @return \DedexBundle\Entity\DdexC\DrmPlatformTypeType
     */
    public function getDrmPlatformType()
    {
        return $this->drmPlatformType;
    }

    /**
     * Sets a new drmPlatformType
     *
     * A ddex:Composite containing details of a ddex:Type of ddex:DrmPlatform.
     *
     * @param \DedexBundle\Entity\DdexC\DrmPlatformTypeType $drmPlatformType
     * @return self
     */
    public function setDrmPlatformType(?\DedexBundle\Entity\DdexC\DrmPlatformTypeType $drmPlatformType = null)
    {
        $this->drmPlatformType = $drmPlatformType;
        return $this;
    }

    /**
     * Gets as overallBitRate
     *
     * A ddex:Composite containing the overall ddex:BitRate and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @return \DedexBundle\Entity\DdexC\BitRateType
     */
    public function getOverallBitRate()
    {
        return $this->overallBitRate;
    }

    /**
     * Sets a new overallBitRate
     *
     * A ddex:Composite containing the overall ddex:BitRate and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @param \DedexBundle\Entity\DdexC\BitRateType $overallBitRate
     * @return self
     */
    public function setOverallBitRate(?\DedexBundle\Entity\DdexC\BitRateType $overallBitRate = null)
    {
        $this->overallBitRate = $overallBitRate;
        return $this;
    }

    /**
     * Gets as containerFormat
     *
     * A ddex:Composite containing details of a ddex:ContainerFormat.
     *
     * @return \DedexBundle\Entity\DdexC\ContainerFormatType
     */
    public function getContainerFormat()
    {
        return $this->containerFormat;
    }

    /**
     * Sets a new containerFormat
     *
     * A ddex:Composite containing details of a ddex:ContainerFormat.
     *
     * @param \DedexBundle\Entity\DdexC\ContainerFormatType $containerFormat
     * @return self
     */
    public function setContainerFormat(?\DedexBundle\Entity\DdexC\ContainerFormatType $containerFormat = null)
    {
        $this->containerFormat = $containerFormat;
        return $this;
    }

    /**
     * Gets as videoCodecType
     *
     * A ddex:Composite containing details of a ddex:Type of ddex:VideoCodec.
     *
     * @return \DedexBundle\Entity\DdexC\VideoCodecTypeType
     */
    public function getVideoCodecType()
    {
        return $this->videoCodecType;
    }

    /**
     * Sets a new videoCodecType
     *
     * A ddex:Composite containing details of a ddex:Type of ddex:VideoCodec.
     *
     * @param \DedexBundle\Entity\DdexC\VideoCodecTypeType $videoCodecType
     * @return self
     */
    public function setVideoCodecType(?\DedexBundle\Entity\DdexC\VideoCodecTypeType $videoCodecType = null)
    {
        $this->videoCodecType = $videoCodecType;
        return $this;
    }

    /**
     * Gets as videoBitRate
     *
     * A ddex:Composite containing the ddex:BitRate for the video data and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @return \DedexBundle\Entity\DdexC\BitRateType
     */
    public function getVideoBitRate()
    {
        return $this->videoBitRate;
    }

    /**
     * Sets a new videoBitRate
     *
     * A ddex:Composite containing the ddex:BitRate for the video data and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @param \DedexBundle\Entity\DdexC\BitRateType $videoBitRate
     * @return self
     */
    public function setVideoBitRate(?\DedexBundle\Entity\DdexC\BitRateType $videoBitRate = null)
    {
        $this->videoBitRate = $videoBitRate;
        return $this;
    }

    /**
     * Gets as frameRate
     *
     * A ddex:Composite containing the ddex:Rate for a number of frames shown in the ddex:Video in a specific ddex:Period of ddex:Time and a ddex:UnitOfMeasure (the default is ddex:Hz, interlaced).
     *
     * @return \DedexBundle\Entity\DdexC\FrameRateType
     */
    public function getFrameRate()
    {
        return $this->frameRate;
    }

    /**
     * Sets a new frameRate
     *
     * A ddex:Composite containing the ddex:Rate for a number of frames shown in the ddex:Video in a specific ddex:Period of ddex:Time and a ddex:UnitOfMeasure (the default is ddex:Hz, interlaced).
     *
     * @param \DedexBundle\Entity\DdexC\FrameRateType $frameRate
     * @return self
     */
    public function setFrameRate(?\DedexBundle\Entity\DdexC\FrameRateType $frameRate = null)
    {
        $this->frameRate = $frameRate;
        return $this;
    }

    /**
     * Gets as imageHeight
     *
     * A ddex:Composite containing the vertical ddex:Extent of an ddex:Image of the ddex:Video and a ddex:UnitOfMeasure (the default is pixels).
     *
     * @return \DedexBundle\Entity\DdexC\ExtentType
     */
    public function getImageHeight()
    {
        return $this->imageHeight;
    }

    /**
     * Sets a new imageHeight
     *
     * A ddex:Composite containing the vertical ddex:Extent of an ddex:Image of the ddex:Video and a ddex:UnitOfMeasure (the default is pixels).
     *
     * @param \DedexBundle\Entity\DdexC\ExtentType $imageHeight
     * @return self
     */
    public function setImageHeight(?\DedexBundle\Entity\DdexC\ExtentType $imageHeight = null)
    {
        $this->imageHeight = $imageHeight;
        return $this;
    }

    /**
     * Gets as imageWidth
     *
     * A ddex:Composite containing the horizontal ddex:Extent of an ddex:Image of the ddex:Video and a ddex:UnitOfMeasure (the default is pixels).
     *
     * @return \DedexBundle\Entity\DdexC\ExtentType
     */
    public function getImageWidth()
    {
        return $this->imageWidth;
    }

    /**
     * Sets a new imageWidth
     *
     * A ddex:Composite containing the horizontal ddex:Extent of an ddex:Image of the ddex:Video and a ddex:UnitOfMeasure (the default is pixels).
     *
     * @param \DedexBundle\Entity\DdexC\ExtentType $imageWidth
     * @return self
     */
    public function setImageWidth(?\DedexBundle\Entity\DdexC\ExtentType $imageWidth = null)
    {
        $this->imageWidth = $imageWidth;
        return $this;
    }

    /**
     * Gets as aspectRatio
     *
     * The ratio formed by dividing the ddex:ImageHeight by the ddex:ImageWidth.
     *
     * @return float
     */
    public function getAspectRatio()
    {
        return $this->aspectRatio;
    }

    /**
     * Sets a new aspectRatio
     *
     * The ratio formed by dividing the ddex:ImageHeight by the ddex:ImageWidth.
     *
     * @param float $aspectRatio
     * @return self
     */
    public function setAspectRatio($aspectRatio)
    {
        $this->aspectRatio = $aspectRatio;
        return $this;
    }

    /**
     * Gets as colorDepth
     *
     * An amount of data determining the color of a pixel of an ddex:Image of the ddex:Video (given in bits per pixel).
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
     * An amount of data determining the color of a pixel of an ddex:Image of the ddex:Video (given in bits per pixel).
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
     * A ddex:Type of resolution (or definition) in which the ddex:Video is provided.
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
     * A ddex:Type of resolution (or definition) in which the ddex:Video is provided.
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
     * A ddex:Composite containing details of a ddex:Type of ddex:AudioCodec.
     *
     * @return \DedexBundle\Entity\DdexC\AudioCodecTypeType
     */
    public function getAudioCodecType()
    {
        return $this->audioCodecType;
    }

    /**
     * Sets a new audioCodecType
     *
     * A ddex:Composite containing details of a ddex:Type of ddex:AudioCodec.
     *
     * @param \DedexBundle\Entity\DdexC\AudioCodecTypeType $audioCodecType
     * @return self
     */
    public function setAudioCodecType(?\DedexBundle\Entity\DdexC\AudioCodecTypeType $audioCodecType = null)
    {
        $this->audioCodecType = $audioCodecType;
        return $this;
    }

    /**
     * Gets as audioBitRate
     *
     * A ddex:Composite containing the ddex:BitRate for the audio data and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @return \DedexBundle\Entity\DdexC\BitRateType
     */
    public function getAudioBitRate()
    {
        return $this->audioBitRate;
    }

    /**
     * Sets a new audioBitRate
     *
     * A ddex:Composite containing the ddex:BitRate for the audio data and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @param \DedexBundle\Entity\DdexC\BitRateType $audioBitRate
     * @return self
     */
    public function setAudioBitRate(?\DedexBundle\Entity\DdexC\BitRateType $audioBitRate = null)
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
     * A ddex:Composite containing the ddex:SamplingRate for the audio data and a ddex:UnitOfMeasure (the default is ddex:Hz).
     *
     * @return \DedexBundle\Entity\DdexC\SamplingRateType
     */
    public function getAudioSamplingRate()
    {
        return $this->audioSamplingRate;
    }

    /**
     * Sets a new audioSamplingRate
     *
     * A ddex:Composite containing the ddex:SamplingRate for the audio data and a ddex:UnitOfMeasure (the default is ddex:Hz).
     *
     * @param \DedexBundle\Entity\DdexC\SamplingRateType $audioSamplingRate
     * @return self
     */
    public function setAudioSamplingRate(?\DedexBundle\Entity\DdexC\SamplingRateType $audioSamplingRate = null)
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
     * The ddex:Duration of the instantiation of the ern:Video if this differs from the ddex:Duration provided for the ern:Video itself (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole ern:Video.
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
     * The ddex:Duration of the instantiation of the ern:Video if this differs from the ddex:Duration provided for the ern:Video itself (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole ern:Video.
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
     * The ddex:Flag indicating whether the ern:Video needs to be processed (=True) or not (=False) (typically: transcoded) by the ddex:MessageRecipient before being delivered to ddex:Consumers.
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
     * The ddex:Flag indicating whether the ern:Video needs to be processed (=True) or not (=False) (typically: transcoded) by the ddex:MessageRecipient before being delivered to ddex:Consumers.
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
     * The ddex:Duration of the ern:Video that may be sold to a ddex:Consumer if the ern:Video provided is not intended to be provided to ddex:Consumers 'as is' but will need to be transcoded into an appropriate format by the ddex:MessageRecipient or any other ddex:DSP handling the ddex:Release before it is sold (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The ddex:Duration of the ern:Video that may be sold to a ddex:Consumer if the ern:Video provided is not intended to be provided to ddex:Consumers 'as is' but will need to be transcoded into an appropriate format by the ddex:MessageRecipient or any other ddex:DSP handling the ddex:Release before it is sold (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The ddex:Flag indicating whether the ddex:Video is technically a preview of the parent ddex:Resource (=True) or not (=False). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
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
     * The ddex:Flag indicating whether the ddex:Video is technically a preview of the parent ddex:Resource (=True) or not (=False). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
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
     * A ddex:Composite containing details of a preview.
     *
     * @return \DedexBundle\Entity\Ern341\SoundRecordingPreviewDetailsType
     */
    public function getPreviewDetails()
    {
        return $this->previewDetails;
    }

    /**
     * Sets a new previewDetails
     *
     * A ddex:Composite containing details of a preview.
     *
     * @param \DedexBundle\Entity\Ern341\SoundRecordingPreviewDetailsType $previewDetails
     * @return self
     */
    public function setPreviewDetails(?\DedexBundle\Entity\Ern341\SoundRecordingPreviewDetailsType $previewDetails = null)
    {
        $this->previewDetails = $previewDetails;
        return $this;
    }

    /**
     * Gets as fulfillmentDate
     *
     * A ddex:Composite containing details of a ddex:FulfillmentDate.
     *
     * @return \DedexBundle\Entity\DdexC\FulfillmentDateType
     */
    public function getFulfillmentDate()
    {
        return $this->fulfillmentDate;
    }

    /**
     * Sets a new fulfillmentDate
     *
     * A ddex:Composite containing details of a ddex:FulfillmentDate.
     *
     * @param \DedexBundle\Entity\DdexC\FulfillmentDateType $fulfillmentDate
     * @return self
     */
    public function setFulfillmentDate(?\DedexBundle\Entity\DdexC\FulfillmentDateType $fulfillmentDate = null)
    {
        $this->fulfillmentDate = $fulfillmentDate;
        return $this;
    }

    /**
     * Gets as consumerFulfillmentDate
     *
     * A ddex:Composite containing details of when a consumer is able to get hold of the ddex:Video.
     *
     * @return \DedexBundle\Entity\DdexC\FulfillmentDateType
     */
    public function getConsumerFulfillmentDate()
    {
        return $this->consumerFulfillmentDate;
    }

    /**
     * Sets a new consumerFulfillmentDate
     *
     * A ddex:Composite containing details of when a consumer is able to get hold of the ddex:Video.
     *
     * @param \DedexBundle\Entity\DdexC\FulfillmentDateType $consumerFulfillmentDate
     * @return self
     */
    public function setConsumerFulfillmentDate(?\DedexBundle\Entity\DdexC\FulfillmentDateType $consumerFulfillmentDate = null)
    {
        $this->consumerFulfillmentDate = $consumerFulfillmentDate;
        return $this;
    }

    /**
     * Adds as fileAvailabilityDescription
     *
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:Video.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\DescriptionType $fileAvailabilityDescription
     */
    public function addToFileAvailabilityDescription(\DedexBundle\Entity\DdexC\DescriptionType $fileAvailabilityDescription)
    {
        $this->fileAvailabilityDescription[] = $fileAvailabilityDescription;
        return $this;
    }

    /**
     * isset fileAvailabilityDescription
     *
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:Video.
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
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:Video.
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
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:Video.
     *
     * @return \DedexBundle\Entity\DdexC\DescriptionType[]
     */
    public function getFileAvailabilityDescription()
    {
        return $this->fileAvailabilityDescription;
    }

    /**
     * Sets a new fileAvailabilityDescription
     *
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain a ddex:File that contains the ddex:Video.
     *
     * @param \DedexBundle\Entity\DdexC\DescriptionType[] $fileAvailabilityDescription
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
     * A ddex:Composite containing details of a ddex:File containing the ddex:Video that a ddex:DSP can obtain.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\FileType $file
     */
    public function addToFile(\DedexBundle\Entity\DdexC\FileType $file)
    {
        $this->file[] = $file;
        return $this;
    }

    /**
     * isset file
     *
     * A ddex:Composite containing details of a ddex:File containing the ddex:Video that a ddex:DSP can obtain.
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
     * A ddex:Composite containing details of a ddex:File containing the ddex:Video that a ddex:DSP can obtain.
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
     * A ddex:Composite containing details of a ddex:File containing the ddex:Video that a ddex:DSP can obtain.
     *
     * @return \DedexBundle\Entity\DdexC\FileType[]
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets a new file
     *
     * A ddex:Composite containing details of a ddex:File containing the ddex:Video that a ddex:DSP can obtain.
     *
     * @param \DedexBundle\Entity\DdexC\FileType[] $file
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
     * A ddex:Composite containing details of a ddex:Fingerprint and its governing algorithm.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\FingerprintType $fingerprint
     */
    public function addToFingerprint(\DedexBundle\Entity\DdexC\FingerprintType $fingerprint)
    {
        $this->fingerprint[] = $fingerprint;
        return $this;
    }

    /**
     * isset fingerprint
     *
     * A ddex:Composite containing details of a ddex:Fingerprint and its governing algorithm.
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
     * A ddex:Composite containing details of a ddex:Fingerprint and its governing algorithm.
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
     * A ddex:Composite containing details of a ddex:Fingerprint and its governing algorithm.
     *
     * @return \DedexBundle\Entity\DdexC\FingerprintType[]
     */
    public function getFingerprint()
    {
        return $this->fingerprint;
    }

    /**
     * Sets a new fingerprint
     *
     * A ddex:Composite containing details of a ddex:Fingerprint and its governing algorithm.
     *
     * @param \DedexBundle\Entity\DdexC\FingerprintType[] $fingerprint
     * @return self
     */
    public function setFingerprint(array $fingerprint = null)
    {
        $this->fingerprint = $fingerprint;
        return $this;
    }
}

