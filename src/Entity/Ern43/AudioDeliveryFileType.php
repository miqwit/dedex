<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing AudioDeliveryFileType
 *
 * A Composite containing details of one or more audio delivery Files.
 * XSD Type: AudioDeliveryFile
 */
class AudioDeliveryFileType
{
    /**
     * A Type of delivery File.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * A Composite containing details of a ContainerFormat.
     *
     * @var \DedexBundle\Entity\Ern43\ContainerFormatType $containerFormat
     */
    private $containerFormat = null;

    /**
     * A Composite containing details of a Type of AudioCodec.
     *
     * @var \DedexBundle\Entity\Ern43\AudioCodecTypeType $audioCodecType
     */
    private $audioCodecType = null;

    /**
     * A Composite containing the BitRate for the audio data and a UnitOfMeasure (the default is kbps).
     *
     * @var \DedexBundle\Entity\Ern43\BitRateType $bitRate
     */
    private $bitRate = null;

    /**
     * A Composite containing the BitRate for the audio data recording and a UnitOfMeasure (the default is kbps).
     *
     * @var \DedexBundle\Entity\Ern43\BitRateType $originalBitRate
     */
    private $originalBitRate = null;

    /**
     * A number of audio channels. The value may be a string, e.g. '5.1' for surround with six channels one of which is a subwoofer.
     *
     * @var string $numberOfChannels
     */
    private $numberOfChannels = null;

    /**
     * A number of audio objects used to create the auditory experience.
     *
     * @var int $numberOfAudioObjects
     */
    private $numberOfAudioObjects = null;

    /**
     * A Composite containing the sampling rate of the SoundRecording and a UnitOfMeasure (the default is Hz).
     *
     * @var \DedexBundle\Entity\Ern43\SamplingRateType $samplingRate
     */
    private $samplingRate = null;

    /**
     * A Composite containing the sampling rate of the SoundRecording during the recording, and a UnitOfMeasure (the default is Hz).
     *
     * @var \DedexBundle\Entity\Ern43\SamplingRateType $originalSamplingRate
     */
    private $originalSamplingRate = null;

    /**
     * An amount of audio data in a sample.
     *
     * @var int $bitsPerSample
     */
    private $bitsPerSample = null;

    /**
     * The Duration of the instantiation of the SoundRecording if this differs from the Duration provided for the SoundRecording itself (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole SoundRecording.
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
     * A Composite containing details of a File containing the SoundRecording that a DSP can obtain.
     *
     * @var \DedexBundle\Entity\Ern43\FileType $file
     */
    private $file = null;

    /**
     * A Composite containing details of a Fingerprint and its governing algorithm.
     *
     * @var \DedexBundle\Entity\Ern43\FingerprintType[] $fingerprint
     */
    private $fingerprint = [
        
    ];

    /**
     * A Flag indicating whether the File containing the SoundRecording is a provided in a delivery (=true) or not (=false).
     *
     * @var bool $isProvidedInDelivery
     */
    private $isProvidedInDelivery = null;

    /**
     * Gets as type
     *
     * A Type of delivery File.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A Type of delivery File.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as containerFormat
     *
     * A Composite containing details of a ContainerFormat.
     *
     * @return \DedexBundle\Entity\Ern43\ContainerFormatType
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
     * @param \DedexBundle\Entity\Ern43\ContainerFormatType $containerFormat
     * @return self
     */
    public function setContainerFormat(?\DedexBundle\Entity\Ern43\ContainerFormatType $containerFormat = null)
    {
        $this->containerFormat = $containerFormat;
        return $this;
    }

    /**
     * Gets as audioCodecType
     *
     * A Composite containing details of a Type of AudioCodec.
     *
     * @return \DedexBundle\Entity\Ern43\AudioCodecTypeType
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
     * @param \DedexBundle\Entity\Ern43\AudioCodecTypeType $audioCodecType
     * @return self
     */
    public function setAudioCodecType(?\DedexBundle\Entity\Ern43\AudioCodecTypeType $audioCodecType = null)
    {
        $this->audioCodecType = $audioCodecType;
        return $this;
    }

    /**
     * Gets as bitRate
     *
     * A Composite containing the BitRate for the audio data and a UnitOfMeasure (the default is kbps).
     *
     * @return \DedexBundle\Entity\Ern43\BitRateType
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
     * @param \DedexBundle\Entity\Ern43\BitRateType $bitRate
     * @return self
     */
    public function setBitRate(?\DedexBundle\Entity\Ern43\BitRateType $bitRate = null)
    {
        $this->bitRate = $bitRate;
        return $this;
    }

    /**
     * Gets as originalBitRate
     *
     * A Composite containing the BitRate for the audio data recording and a UnitOfMeasure (the default is kbps).
     *
     * @return \DedexBundle\Entity\Ern43\BitRateType
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
     * @param \DedexBundle\Entity\Ern43\BitRateType $originalBitRate
     * @return self
     */
    public function setOriginalBitRate(?\DedexBundle\Entity\Ern43\BitRateType $originalBitRate = null)
    {
        $this->originalBitRate = $originalBitRate;
        return $this;
    }

    /**
     * Gets as numberOfChannels
     *
     * A number of audio channels. The value may be a string, e.g. '5.1' for surround with six channels one of which is a subwoofer.
     *
     * @return string
     */
    public function getNumberOfChannels()
    {
        return $this->numberOfChannels;
    }

    /**
     * Sets a new numberOfChannels
     *
     * A number of audio channels. The value may be a string, e.g. '5.1' for surround with six channels one of which is a subwoofer.
     *
     * @param string $numberOfChannels
     * @return self
     */
    public function setNumberOfChannels($numberOfChannels)
    {
        $this->numberOfChannels = $numberOfChannels;
        return $this;
    }

    /**
     * Gets as numberOfAudioObjects
     *
     * A number of audio objects used to create the auditory experience.
     *
     * @return int
     */
    public function getNumberOfAudioObjects()
    {
        return $this->numberOfAudioObjects;
    }

    /**
     * Sets a new numberOfAudioObjects
     *
     * A number of audio objects used to create the auditory experience.
     *
     * @param int $numberOfAudioObjects
     * @return self
     */
    public function setNumberOfAudioObjects($numberOfAudioObjects)
    {
        $this->numberOfAudioObjects = $numberOfAudioObjects;
        return $this;
    }

    /**
     * Gets as samplingRate
     *
     * A Composite containing the sampling rate of the SoundRecording and a UnitOfMeasure (the default is Hz).
     *
     * @return \DedexBundle\Entity\Ern43\SamplingRateType
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
     * @param \DedexBundle\Entity\Ern43\SamplingRateType $samplingRate
     * @return self
     */
    public function setSamplingRate(?\DedexBundle\Entity\Ern43\SamplingRateType $samplingRate = null)
    {
        $this->samplingRate = $samplingRate;
        return $this;
    }

    /**
     * Gets as originalSamplingRate
     *
     * A Composite containing the sampling rate of the SoundRecording during the recording, and a UnitOfMeasure (the default is Hz).
     *
     * @return \DedexBundle\Entity\Ern43\SamplingRateType
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
     * @param \DedexBundle\Entity\Ern43\SamplingRateType $originalSamplingRate
     * @return self
     */
    public function setOriginalSamplingRate(?\DedexBundle\Entity\Ern43\SamplingRateType $originalSamplingRate = null)
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
     * The Duration of the instantiation of the SoundRecording if this differs from the Duration provided for the SoundRecording itself (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole SoundRecording.
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
     * The Duration of the instantiation of the SoundRecording if this differs from the Duration provided for the SoundRecording itself (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole SoundRecording.
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
     * Gets as file
     *
     * A Composite containing details of a File containing the SoundRecording that a DSP can obtain.
     *
     * @return \DedexBundle\Entity\Ern43\FileType
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
     * @param \DedexBundle\Entity\Ern43\FileType $file
     * @return self
     */
    public function setFile(?\DedexBundle\Entity\Ern43\FileType $file = null)
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
     * @param \DedexBundle\Entity\Ern43\FingerprintType $fingerprint
     */
    public function addToFingerprint(\DedexBundle\Entity\Ern43\FingerprintType $fingerprint)
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
     * @return \DedexBundle\Entity\Ern43\FingerprintType[]
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
     * @param \DedexBundle\Entity\Ern43\FingerprintType[] $fingerprint
     * @return self
     */
    public function setFingerprint(array $fingerprint = null)
    {
        $this->fingerprint = $fingerprint;
        return $this;
    }

    /**
     * Gets as isProvidedInDelivery
     *
     * A Flag indicating whether the File containing the SoundRecording is a provided in a delivery (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsProvidedInDelivery()
    {
        return $this->isProvidedInDelivery;
    }

    /**
     * Sets a new isProvidedInDelivery
     *
     * A Flag indicating whether the File containing the SoundRecording is a provided in a delivery (=true) or not (=false).
     *
     * @param bool $isProvidedInDelivery
     * @return self
     */
    public function setIsProvidedInDelivery($isProvidedInDelivery)
    {
        $this->isProvidedInDelivery = $isProvidedInDelivery;
        return $this;
    }
}

