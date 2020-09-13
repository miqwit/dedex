<?php

namespace DedexBundle\Entity\Ern382;

/**
 * Class representing TechnicalSoundRecordingDetailsType
 *
 * A Composite containing technical details of a
 *  SoundRecording.
 * XSD Type: TechnicalSoundRecordingDetails
 */
class TechnicalSoundRecordingDetailsType
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
     *  of the TechnicalSoundRecordingDetails within the Release which contains it. This
     *  is a LocalTechnicalResourceDetailsAnchor starting with the letter
     *  T.
     *
     * @var string $technicalResourceDetailsReference
     */
    private $technicalResourceDetailsReference = null;

    /**
     * A Composite containing details of a Type
     *  of DrmPlatform.
     *
     * @var \DedexBundle\Entity\Ern382\DrmPlatformTypeType $drmPlatformType
     */
    private $drmPlatformType = null;

    /**
     * A Composite containing details of a
     *  ContainerFormat.
     *
     * @var \DedexBundle\Entity\Ern382\ContainerFormatType $containerFormat
     */
    private $containerFormat = null;

    /**
     * A Composite containing details of a Type
     *  of AudioCodec.
     *
     * @var \DedexBundle\Entity\Ern382\AudioCodecTypeType $audioCodecType
     */
    private $audioCodecType = null;

    /**
     * A Composite containing the BitRate for the
     *  audio data and a UnitOfMeasure (the default is kbps).
     *
     * @var \DedexBundle\Entity\Ern382\BitRateType $bitRate
     */
    private $bitRate = null;

    /**
     * A number of audio
     *  channels.
     *
     * @var int $numberOfChannels
     */
    private $numberOfChannels = null;

    /**
     * A Composite containing the sampling rate
     *  of the SoundRecording and a UnitOfMeasure (the default is Hz).
     *
     * @var \DedexBundle\Entity\Ern382\SamplingRateType $samplingRate
     */
    private $samplingRate = null;

    /**
     * An amount of audio data in a
     *  sample.
     *
     * @var int $bitsPerSample
     */
    private $bitsPerSample = null;

    /**
     * The Duration of the instantiation of the
     *  SoundRecording if this differs from the Duration provided for the SoundRecording
     *  itself (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case
     *  characters indicate variables, upper case characters are part of the xs:string,
     *  e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds
     *  section ss may include fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S). This element must only be used if and when there are no royalty
     *  reporting implications on this change in duration and when the specific technical
     *  instantiation is a clip taken from a technical instantiation representing the
     *  whole SoundRecording.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The Flag indicating whether the
     *  SoundRecording needs to be processed (=true) or not (=false) (typically:
     *  transcoded) by the MessageRecipient before being delivered to
     *  Consumers.
     *
     * @var bool $resourceProcessingRequired
     */
    private $resourceProcessingRequired = null;

    /**
     * The Duration of the SoundRecording that
     *  may be sold to a Consumer if the SoundRecording provided is not intended to be
     *  provided to Consumers 'as is' but will need to be transcoded into an appropriate
     *  format by the MessageRecipient or any other DSP handling the Release before it is
     *  sold (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters
     *  indicate variables, upper case characters are part of the xs:string, e.g. one
     *  hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may
     *  include fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S).
     *
     * @var \DateInterval $usableResourceDuration
     */
    private $usableResourceDuration = null;

    /**
     * The Flag indicating whether the
     *  SoundRecording is technically a preview of the parent Resource (=true) or not
     *  (=false). Note that nothing can be implied from this element as to the conditions
     *  under which the preview can be made available.
     *
     * @var bool $isPreview
     */
    private $isPreview = null;

    /**
     * A Composite containing details of a
     *  preview.
     *
     * @var \DedexBundle\Entity\Ern382\SoundRecordingPreviewDetailsType $previewDetails
     */
    private $previewDetails = null;

    /**
     * A Composite containing details of a
     *  FulfillmentDate.
     *
     * @var \DedexBundle\Entity\Ern382\FulfillmentDateType $fulfillmentDate
     */
    private $fulfillmentDate = null;

    /**
     * A Composite containing details of when a
     *  consumer is able to get hold of the SoundRecording.
     *
     * @var \DedexBundle\Entity\Ern382\FulfillmentDateType $consumerFulfillmentDate
     */
    private $consumerFulfillmentDate = null;

    /**
     * A Composite containing a Description
     *  providing details of how a DSP can obtain a File that contains the
     *  SoundRecording.
     *
     * @var \DedexBundle\Entity\Ern382\DescriptionType[] $fileAvailabilityDescription
     */
    private $fileAvailabilityDescription = [
        
    ];

    /**
     * A Composite containing details of a
     *  File containing the SoundRecording that a DSP can obtain.
     *
     * @var \DedexBundle\Entity\Ern382\FileType[] $file
     */
    private $file = [
        
    ];

    /**
     * A Composite containing details of a
     *  Fingerprint and its governing algorithm.
     *
     * @var \DedexBundle\Entity\Ern382\FingerprintType[] $fingerprint
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
     *  of the TechnicalSoundRecordingDetails within the Release which contains it. This
     *  is a LocalTechnicalResourceDetailsAnchor starting with the letter
     *  T.
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
     *  of the TechnicalSoundRecordingDetails within the Release which contains it. This
     *  is a LocalTechnicalResourceDetailsAnchor starting with the letter
     *  T.
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
     * @return \DedexBundle\Entity\Ern382\DrmPlatformTypeType
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
     * @param \DedexBundle\Entity\Ern382\DrmPlatformTypeType $drmPlatformType
     * @return self
     */
    public function setDrmPlatformType(\DedexBundle\Entity\Ern382\DrmPlatformTypeType $drmPlatformType)
    {
        $this->drmPlatformType = $drmPlatformType;
        return $this;
    }

    /**
     * Gets as containerFormat
     *
     * A Composite containing details of a
     *  ContainerFormat.
     *
     * @return \DedexBundle\Entity\Ern382\ContainerFormatType
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
     * @param \DedexBundle\Entity\Ern382\ContainerFormatType $containerFormat
     * @return self
     */
    public function setContainerFormat(\DedexBundle\Entity\Ern382\ContainerFormatType $containerFormat)
    {
        $this->containerFormat = $containerFormat;
        return $this;
    }

    /**
     * Gets as audioCodecType
     *
     * A Composite containing details of a Type
     *  of AudioCodec.
     *
     * @return \DedexBundle\Entity\Ern382\AudioCodecTypeType
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
     * @param \DedexBundle\Entity\Ern382\AudioCodecTypeType $audioCodecType
     * @return self
     */
    public function setAudioCodecType(\DedexBundle\Entity\Ern382\AudioCodecTypeType $audioCodecType)
    {
        $this->audioCodecType = $audioCodecType;
        return $this;
    }

    /**
     * Gets as bitRate
     *
     * A Composite containing the BitRate for the
     *  audio data and a UnitOfMeasure (the default is kbps).
     *
     * @return \DedexBundle\Entity\Ern382\BitRateType
     */
    public function getBitRate()
    {
        return $this->bitRate;
    }

    /**
     * Sets a new bitRate
     *
     * A Composite containing the BitRate for the
     *  audio data and a UnitOfMeasure (the default is kbps).
     *
     * @param \DedexBundle\Entity\Ern382\BitRateType $bitRate
     * @return self
     */
    public function setBitRate(\DedexBundle\Entity\Ern382\BitRateType $bitRate)
    {
        $this->bitRate = $bitRate;
        return $this;
    }

    /**
     * Gets as numberOfChannels
     *
     * A number of audio
     *  channels.
     *
     * @return int
     */
    public function getNumberOfChannels()
    {
        return $this->numberOfChannels;
    }

    /**
     * Sets a new numberOfChannels
     *
     * A number of audio
     *  channels.
     *
     * @param int $numberOfChannels
     * @return self
     */
    public function setNumberOfChannels($numberOfChannels)
    {
        $this->numberOfChannels = $numberOfChannels;
        return $this;
    }

    /**
     * Gets as samplingRate
     *
     * A Composite containing the sampling rate
     *  of the SoundRecording and a UnitOfMeasure (the default is Hz).
     *
     * @return \DedexBundle\Entity\Ern382\SamplingRateType
     */
    public function getSamplingRate()
    {
        return $this->samplingRate;
    }

    /**
     * Sets a new samplingRate
     *
     * A Composite containing the sampling rate
     *  of the SoundRecording and a UnitOfMeasure (the default is Hz).
     *
     * @param \DedexBundle\Entity\Ern382\SamplingRateType $samplingRate
     * @return self
     */
    public function setSamplingRate(\DedexBundle\Entity\Ern382\SamplingRateType $samplingRate)
    {
        $this->samplingRate = $samplingRate;
        return $this;
    }

    /**
     * Gets as bitsPerSample
     *
     * An amount of audio data in a
     *  sample.
     *
     * @return int
     */
    public function getBitsPerSample()
    {
        return $this->bitsPerSample;
    }

    /**
     * Sets a new bitsPerSample
     *
     * An amount of audio data in a
     *  sample.
     *
     * @param int $bitsPerSample
     * @return self
     */
    public function setBitsPerSample($bitsPerSample)
    {
        $this->bitsPerSample = $bitsPerSample;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The Duration of the instantiation of the
     *  SoundRecording if this differs from the Duration provided for the SoundRecording
     *  itself (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case
     *  characters indicate variables, upper case characters are part of the xs:string,
     *  e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds
     *  section ss may include fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S). This element must only be used if and when there are no royalty
     *  reporting implications on this change in duration and when the specific technical
     *  instantiation is a clip taken from a technical instantiation representing the
     *  whole SoundRecording.
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
     *  SoundRecording if this differs from the Duration provided for the SoundRecording
     *  itself (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case
     *  characters indicate variables, upper case characters are part of the xs:string,
     *  e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds
     *  section ss may include fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S). This element must only be used if and when there are no royalty
     *  reporting implications on this change in duration and when the specific technical
     *  instantiation is a clip taken from a technical instantiation representing the
     *  whole SoundRecording.
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
     * Gets as resourceProcessingRequired
     *
     * The Flag indicating whether the
     *  SoundRecording needs to be processed (=true) or not (=false) (typically:
     *  transcoded) by the MessageRecipient before being delivered to
     *  Consumers.
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
     * The Flag indicating whether the
     *  SoundRecording needs to be processed (=true) or not (=false) (typically:
     *  transcoded) by the MessageRecipient before being delivered to
     *  Consumers.
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
     * The Duration of the SoundRecording that
     *  may be sold to a Consumer if the SoundRecording provided is not intended to be
     *  provided to Consumers 'as is' but will need to be transcoded into an appropriate
     *  format by the MessageRecipient or any other DSP handling the Release before it is
     *  sold (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters
     *  indicate variables, upper case characters are part of the xs:string, e.g. one
     *  hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may
     *  include fractions (e.g. one minute and 30.5 seconds would be
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
     * The Duration of the SoundRecording that
     *  may be sold to a Consumer if the SoundRecording provided is not intended to be
     *  provided to Consumers 'as is' but will need to be transcoded into an appropriate
     *  format by the MessageRecipient or any other DSP handling the Release before it is
     *  sold (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters
     *  indicate variables, upper case characters are part of the xs:string, e.g. one
     *  hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may
     *  include fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S).
     *
     * @param \DateInterval $usableResourceDuration
     * @return self
     */
    public function setUsableResourceDuration(\DateInterval $usableResourceDuration)
    {
        $this->usableResourceDuration = $usableResourceDuration;
        return $this;
    }

    /**
     * Gets as isPreview
     *
     * The Flag indicating whether the
     *  SoundRecording is technically a preview of the parent Resource (=true) or not
     *  (=false). Note that nothing can be implied from this element as to the conditions
     *  under which the preview can be made available.
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
     * The Flag indicating whether the
     *  SoundRecording is technically a preview of the parent Resource (=true) or not
     *  (=false). Note that nothing can be implied from this element as to the conditions
     *  under which the preview can be made available.
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
     * @return \DedexBundle\Entity\Ern382\SoundRecordingPreviewDetailsType
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
     * @param \DedexBundle\Entity\Ern382\SoundRecordingPreviewDetailsType $previewDetails
     * @return self
     */
    public function setPreviewDetails(\DedexBundle\Entity\Ern382\SoundRecordingPreviewDetailsType $previewDetails)
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
     * @return \DedexBundle\Entity\Ern382\FulfillmentDateType
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
     * @param \DedexBundle\Entity\Ern382\FulfillmentDateType $fulfillmentDate
     * @return self
     */
    public function setFulfillmentDate(\DedexBundle\Entity\Ern382\FulfillmentDateType $fulfillmentDate)
    {
        $this->fulfillmentDate = $fulfillmentDate;
        return $this;
    }

    /**
     * Gets as consumerFulfillmentDate
     *
     * A Composite containing details of when a
     *  consumer is able to get hold of the SoundRecording.
     *
     * @return \DedexBundle\Entity\Ern382\FulfillmentDateType
     */
    public function getConsumerFulfillmentDate()
    {
        return $this->consumerFulfillmentDate;
    }

    /**
     * Sets a new consumerFulfillmentDate
     *
     * A Composite containing details of when a
     *  consumer is able to get hold of the SoundRecording.
     *
     * @param \DedexBundle\Entity\Ern382\FulfillmentDateType $consumerFulfillmentDate
     * @return self
     */
    public function setConsumerFulfillmentDate(\DedexBundle\Entity\Ern382\FulfillmentDateType $consumerFulfillmentDate)
    {
        $this->consumerFulfillmentDate = $consumerFulfillmentDate;
        return $this;
    }

    /**
     * Adds as fileAvailabilityDescription
     *
     * A Composite containing a Description
     *  providing details of how a DSP can obtain a File that contains the
     *  SoundRecording.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\DescriptionType $fileAvailabilityDescription
     */
    public function addToFileAvailabilityDescription(\DedexBundle\Entity\Ern382\DescriptionType $fileAvailabilityDescription)
    {
        $this->fileAvailabilityDescription[] = $fileAvailabilityDescription;
        return $this;
    }

    /**
     * isset fileAvailabilityDescription
     *
     * A Composite containing a Description
     *  providing details of how a DSP can obtain a File that contains the
     *  SoundRecording.
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
     *  SoundRecording.
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
     *  SoundRecording.
     *
     * @return \DedexBundle\Entity\Ern382\DescriptionType[]
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
     *  SoundRecording.
     *
     * @param \DedexBundle\Entity\Ern382\DescriptionType[] $fileAvailabilityDescription
     * @return self
     */
    public function setFileAvailabilityDescription(array $fileAvailabilityDescription)
    {
        $this->fileAvailabilityDescription = $fileAvailabilityDescription;
        return $this;
    }

    /**
     * Adds as file
     *
     * A Composite containing details of a
     *  File containing the SoundRecording that a DSP can obtain.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\FileType $file
     */
    public function addToFile(\DedexBundle\Entity\Ern382\FileType $file)
    {
        $this->file[] = $file;
        return $this;
    }

    /**
     * isset file
     *
     * A Composite containing details of a
     *  File containing the SoundRecording that a DSP can obtain.
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
     *  File containing the SoundRecording that a DSP can obtain.
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
     *  File containing the SoundRecording that a DSP can obtain.
     *
     * @return \DedexBundle\Entity\Ern382\FileType[]
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets a new file
     *
     * A Composite containing details of a
     *  File containing the SoundRecording that a DSP can obtain.
     *
     * @param \DedexBundle\Entity\Ern382\FileType[] $file
     * @return self
     */
    public function setFile(array $file)
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
     * @param \DedexBundle\Entity\Ern382\FingerprintType $fingerprint
     */
    public function addToFingerprint(\DedexBundle\Entity\Ern382\FingerprintType $fingerprint)
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
     * @return \DedexBundle\Entity\Ern382\FingerprintType[]
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
     * @param \DedexBundle\Entity\Ern382\FingerprintType[] $fingerprint
     * @return self
     */
    public function setFingerprint(array $fingerprint)
    {
        $this->fingerprint = $fingerprint;
        return $this;
    }


}

