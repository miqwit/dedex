<?php

namespace DedexBundle\Entity\Ern411;

/**
 * Class representing TechnicalSoundRecordingDetailsType
 *
 * A Composite containing technical details of a SoundRecording.
 * XSD Type: TechnicalSoundRecordingDetails
 */
class TechnicalSoundRecordingDetailsType
{

    /**
     * The Language and script for the Elements of the TechnicalSoundRecordingDetails as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Territory to which the TechnicalSoundRecordingDetails apply. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * The Identifier (specific to the Message) of the TechnicalSoundRecordingDetails within the Release which contains it. This is a LocalTechnicalResourceDetailsAnchor starting with the letter T.
     *
     * @var string $technicalResourceDetailsReference
     */
    private $technicalResourceDetailsReference = null;

    /**
     * A Composite containing details of a Type of AudioCodec.
     *
     * @var \DedexBundle\Entity\Ern411\AudioCodecTypeType $audioCodecType
     */
    private $audioCodecType = null;

    /**
     * A Composite containing the BitRate for the audio data and a UnitOfMeasure (the default is kbps).
     *
     * @var \DedexBundle\Entity\Ern411\BitRateType $bitRate
     */
    private $bitRate = null;

    /**
     * A Composite containing the BitRate for the audio data recording and a UnitOfMeasure (the default is kbps).
     *
     * @var \DedexBundle\Entity\Ern411\BitRateType $originalBitRate
     */
    private $originalBitRate = null;

    /**
     * A number of audio channels.
     *
     * @var int $numberOfChannels
     */
    private $numberOfChannels = null;

    /**
     * A Composite containing the sampling rate of the SoundRecording and a UnitOfMeasure (the default is Hz).
     *
     * @var \DedexBundle\Entity\Ern411\SamplingRateType $samplingRate
     */
    private $samplingRate = null;

    /**
     * A Composite containing the sampling rate of the SoundRecording during the recording, and a UnitOfMeasure (the default is Hz).
     *
     * @var \DedexBundle\Entity\Ern411\SamplingRateType $originalSamplingRate
     */
    private $originalSamplingRate = null;

    /**
     * An amount of audio data in a sample.
     *
     * @var int $bitsPerSample
     */
    private $bitsPerSample = null;

    /**
     * The Duration of the instantiation of the SoundRecording if this differs from the Duration provided for the SoundRecording itself (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole SoundRecording.
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
     * The Flag indicating whether the SoundRecording is technically a preview of the parent Resource (=true) or not (=false). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
     *
     * @var bool $isPreview
     */
    private $isPreview = null;

    /**
     * A Composite containing details of a preview.
     *
     * @var \DedexBundle\Entity\Ern411\SoundRecordingPreviewDetailsType $previewDetails
     */
    private $previewDetails = null;

    /**
     * A Composite containing details of a File containing the SoundRecording that a DSP can obtain.
     *
     * @var \DedexBundle\Entity\Ern411\FileType $file
     */
    private $file = null;

    /**
     * A Composite containing details of a Fingerprint and its governing algorithm.
     *
     * @var \DedexBundle\Entity\Ern411\FingerprintType[] $fingerprint
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
     * A Territory to which the TechnicalSoundRecordingDetails apply. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the TechnicalSoundRecordingDetails apply. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * Gets as audioCodecType
     *
     * A Composite containing details of a Type of AudioCodec.
     *
     * @return \DedexBundle\Entity\Ern411\AudioCodecTypeType
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
     * @param \DedexBundle\Entity\Ern411\AudioCodecTypeType $audioCodecType
     * @return self
     */
    public function setAudioCodecType(\DedexBundle\Entity\Ern411\AudioCodecTypeType $audioCodecType)
    {
        $this->audioCodecType = $audioCodecType;
        return $this;
    }

    /**
     * Gets as bitRate
     *
     * A Composite containing the BitRate for the audio data and a UnitOfMeasure (the default is kbps).
     *
     * @return \DedexBundle\Entity\Ern411\BitRateType
     */
    public function getBitRate()
    {
        return $this->bitRate;
    }

    /**
     * Sets a new bitRate
     *
     * A Composite containing the BitRate for the audio data and a UnitOfMeasure (the default is kbps).
     *
     * @param \DedexBundle\Entity\Ern411\BitRateType $bitRate
     * @return self
     */
    public function setBitRate(\DedexBundle\Entity\Ern411\BitRateType $bitRate)
    {
        $this->bitRate = $bitRate;
        return $this;
    }

    /**
     * Gets as originalBitRate
     *
     * A Composite containing the BitRate for the audio data recording and a UnitOfMeasure (the default is kbps).
     *
     * @return \DedexBundle\Entity\Ern411\BitRateType
     */
    public function getOriginalBitRate()
    {
        return $this->originalBitRate;
    }

    /**
     * Sets a new originalBitRate
     *
     * A Composite containing the BitRate for the audio data recording and a UnitOfMeasure (the default is kbps).
     *
     * @param \DedexBundle\Entity\Ern411\BitRateType $originalBitRate
     * @return self
     */
    public function setOriginalBitRate(\DedexBundle\Entity\Ern411\BitRateType $originalBitRate)
    {
        $this->originalBitRate = $originalBitRate;
        return $this;
    }

    /**
     * Gets as numberOfChannels
     *
     * A number of audio channels.
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
     * A number of audio channels.
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
     * A Composite containing the sampling rate of the SoundRecording and a UnitOfMeasure (the default is Hz).
     *
     * @return \DedexBundle\Entity\Ern411\SamplingRateType
     */
    public function getSamplingRate()
    {
        return $this->samplingRate;
    }

    /**
     * Sets a new samplingRate
     *
     * A Composite containing the sampling rate of the SoundRecording and a UnitOfMeasure (the default is Hz).
     *
     * @param \DedexBundle\Entity\Ern411\SamplingRateType $samplingRate
     * @return self
     */
    public function setSamplingRate(\DedexBundle\Entity\Ern411\SamplingRateType $samplingRate)
    {
        $this->samplingRate = $samplingRate;
        return $this;
    }

    /**
     * Gets as originalSamplingRate
     *
     * A Composite containing the sampling rate of the SoundRecording during the recording, and a UnitOfMeasure (the default is Hz).
     *
     * @return \DedexBundle\Entity\Ern411\SamplingRateType
     */
    public function getOriginalSamplingRate()
    {
        return $this->originalSamplingRate;
    }

    /**
     * Sets a new originalSamplingRate
     *
     * A Composite containing the sampling rate of the SoundRecording during the recording, and a UnitOfMeasure (the default is Hz).
     *
     * @param \DedexBundle\Entity\Ern411\SamplingRateType $originalSamplingRate
     * @return self
     */
    public function setOriginalSamplingRate(\DedexBundle\Entity\Ern411\SamplingRateType $originalSamplingRate)
    {
        $this->originalSamplingRate = $originalSamplingRate;
        return $this;
    }

    /**
     * Gets as bitsPerSample
     *
     * An amount of audio data in a sample.
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
     * An amount of audio data in a sample.
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
     * The Duration of the instantiation of the SoundRecording if this differs from the Duration provided for the SoundRecording itself (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole SoundRecording.
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
     * The Duration of the instantiation of the SoundRecording if this differs from the Duration provided for the SoundRecording itself (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole SoundRecording.
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
     * The Flag indicating whether the SoundRecording is technically a preview of the parent Resource (=true) or not (=false). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
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
     * The Flag indicating whether the SoundRecording is technically a preview of the parent Resource (=true) or not (=false). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
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
     * @return \DedexBundle\Entity\Ern411\SoundRecordingPreviewDetailsType
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
     * @param \DedexBundle\Entity\Ern411\SoundRecordingPreviewDetailsType $previewDetails
     * @return self
     */
    public function setPreviewDetails(\DedexBundle\Entity\Ern411\SoundRecordingPreviewDetailsType $previewDetails)
    {
        $this->previewDetails = $previewDetails;
        return $this;
    }

    /**
     * Gets as file
     *
     * A Composite containing details of a File containing the SoundRecording that a DSP can obtain.
     *
     * @return \DedexBundle\Entity\Ern411\FileType
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets a new file
     *
     * A Composite containing details of a File containing the SoundRecording that a DSP can obtain.
     *
     * @param \DedexBundle\Entity\Ern411\FileType $file
     * @return self
     */
    public function setFile(\DedexBundle\Entity\Ern411\FileType $file)
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
     * @param \DedexBundle\Entity\Ern411\FingerprintType $fingerprint
     */
    public function addToFingerprint(\DedexBundle\Entity\Ern411\FingerprintType $fingerprint)
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
     * @return \DedexBundle\Entity\Ern411\FingerprintType[]
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
     * @param \DedexBundle\Entity\Ern411\FingerprintType[] $fingerprint
     * @return self
     */
    public function setFingerprint(array $fingerprint)
    {
        $this->fingerprint = $fingerprint;
        return $this;
    }


}

