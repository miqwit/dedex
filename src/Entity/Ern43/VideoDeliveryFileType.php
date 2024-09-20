<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing VideoDeliveryFileType
 *
 * A Composite containing details of one or more video delivery Files.
 * XSD Type: VideoDeliveryFile
 */
class VideoDeliveryFileType
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
     * A Composite containing details of a Type of VideoCodec.
     *
     * @var \DedexBundle\Entity\Ern43\VideoCodecTypeType $videoCodecType
     */
    private $videoCodecType = null;

    /**
     * A Composite containing the BitRate for the video data and a UnitOfMeasure (the default is kbps).
     *
     * @var \DedexBundle\Entity\Ern43\BitRateType $videoBitRate
     */
    private $videoBitRate = null;

    /**
     * A Composite containing the Rate for a number of frames shown in the Video in a specific Period of Time and a UnitOfMeasure (the default is Hz, interlaced).
     *
     * @var \DedexBundle\Entity\Ern43\FrameRateType $frameRate
     */
    private $frameRate = null;

    /**
     * A Composite containing the vertical Extent of an Image of the Video and a UnitOfMeasure (the default is Pixels).
     *
     * @var \DedexBundle\Entity\Ern43\ExtentType $imageHeight
     */
    private $imageHeight = null;

    /**
     * A Composite containing the horizontal Extent of an Image of the Video and a UnitOfMeasure (the default is Pixels).
     *
     * @var \DedexBundle\Entity\Ern43\ExtentType $imageWidth
     */
    private $imageWidth = null;

    /**
     * A Composite containing the ratio formed by dividing the ImageHeight by the ImageWidth.
     *
     * @var \DedexBundle\Entity\Ern43\AspectRatioType[] $aspectRatio
     */
    private $aspectRatio = [
        
    ];

    /**
     * A Composite containing details of the core part of the Video.
     *
     * @var \DedexBundle\Entity\Ern43\CoreAreaType $coreArea
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
     * @var \DedexBundle\Entity\Ern43\VideoDefinitionTypeType $videoDefinitionType
     */
    private $videoDefinitionType = null;

    /**
     * A Composite containing details of a Type of AudioCodec.
     *
     * @var \DedexBundle\Entity\Ern43\AudioCodecTypeType $audioCodecType
     */
    private $audioCodecType = null;

    /**
     * A Flag indicating whether immersive audio metadata is present in the File (=true) or not (=false).
     *
     * @var bool $hasImmersiveAudioMetadata
     */
    private $hasImmersiveAudioMetadata = null;

    /**
     * An electro-optical transfer function (EOTF) used for the video signal.
     *
     * @var string $electroOpticalTransferFunctionType
     */
    private $electroOpticalTransferFunctionType = null;

    /**
     * A specification for the primary colors.
     *
     * @var string $primaryColorType
     */
    private $primaryColorType = null;

    /**
     * A Composite containing details of Dolby vision metadata. This element may only be used for a VisualFile or AudioVisualFile, and if it is used, an ElectroOpticalTransferFunctionType element must also be present with a value of ST2084. Also, if this Flag is set to StandAlone, there needs to be a further delivery file of type ColorInformationFile.
     *
     * @var \DedexBundle\Entity\Ern43\HdrVideoDynamicMetadataTypeType $hdrVideoDynamicMetadataType
     */
    private $hdrVideoDynamicMetadataType = null;

    /**
     * A Type of HDR video static metadata.
     *
     * @var string $hdrVideoStaticMetadataType
     */
    private $hdrVideoStaticMetadataType = null;

    /**
     * A Composite containing the BitRate for the audio data and a UnitOfMeasure (the default is kbps).
     *
     * @var \DedexBundle\Entity\Ern43\BitRateType $audioBitRate
     */
    private $audioBitRate = null;

    /**
     * A number of audio channels.
     *
     * @var int $numberOfAudioChannels
     */
    private $numberOfAudioChannels = null;

    /**
     * A number of audio objects used to create the auditory experience.
     *
     * @var int $numberOfAudioObjects
     */
    private $numberOfAudioObjects = null;

    /**
     * A Composite containing the SamplingRate for the audio data and a UnitOfMeasure (the default is Hz).
     *
     * @var \DedexBundle\Entity\Ern43\SamplingRateType $audioSamplingRate
     */
    private $audioSamplingRate = null;

    /**
     * An amount of audio data in a sample.
     *
     * @var int $audioBitsPerSample
     */
    private $audioBitsPerSample = null;

    /**
     * The Duration of the instantiation of the Video if this differs from the Duration provided for the Video itself (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole Video.
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
     * A Composite containing details of a File containing the Video that a DSP can obtain.
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
     * A Flag indicating whether the File containing the Video is a provided in a delivery (=true) or not (=false).
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
     * Gets as videoCodecType
     *
     * A Composite containing details of a Type of VideoCodec.
     *
     * @return \DedexBundle\Entity\Ern43\VideoCodecTypeType
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
     * @param \DedexBundle\Entity\Ern43\VideoCodecTypeType $videoCodecType
     * @return self
     */
    public function setVideoCodecType(?\DedexBundle\Entity\Ern43\VideoCodecTypeType $videoCodecType = null)
    {
        $this->videoCodecType = $videoCodecType;
        return $this;
    }

    /**
     * Gets as videoBitRate
     *
     * A Composite containing the BitRate for the video data and a UnitOfMeasure (the default is kbps).
     *
     * @return \DedexBundle\Entity\Ern43\BitRateType
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
     * @param \DedexBundle\Entity\Ern43\BitRateType $videoBitRate
     * @return self
     */
    public function setVideoBitRate(?\DedexBundle\Entity\Ern43\BitRateType $videoBitRate = null)
    {
        $this->videoBitRate = $videoBitRate;
        return $this;
    }

    /**
     * Gets as frameRate
     *
     * A Composite containing the Rate for a number of frames shown in the Video in a specific Period of Time and a UnitOfMeasure (the default is Hz, interlaced).
     *
     * @return \DedexBundle\Entity\Ern43\FrameRateType
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
     * @param \DedexBundle\Entity\Ern43\FrameRateType $frameRate
     * @return self
     */
    public function setFrameRate(?\DedexBundle\Entity\Ern43\FrameRateType $frameRate = null)
    {
        $this->frameRate = $frameRate;
        return $this;
    }

    /**
     * Gets as imageHeight
     *
     * A Composite containing the vertical Extent of an Image of the Video and a UnitOfMeasure (the default is Pixels).
     *
     * @return \DedexBundle\Entity\Ern43\ExtentType
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
     * @param \DedexBundle\Entity\Ern43\ExtentType $imageHeight
     * @return self
     */
    public function setImageHeight(?\DedexBundle\Entity\Ern43\ExtentType $imageHeight = null)
    {
        $this->imageHeight = $imageHeight;
        return $this;
    }

    /**
     * Gets as imageWidth
     *
     * A Composite containing the horizontal Extent of an Image of the Video and a UnitOfMeasure (the default is Pixels).
     *
     * @return \DedexBundle\Entity\Ern43\ExtentType
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
     * @param \DedexBundle\Entity\Ern43\ExtentType $imageWidth
     * @return self
     */
    public function setImageWidth(?\DedexBundle\Entity\Ern43\ExtentType $imageWidth = null)
    {
        $this->imageWidth = $imageWidth;
        return $this;
    }

    /**
     * Adds as aspectRatio
     *
     * A Composite containing the ratio formed by dividing the ImageHeight by the ImageWidth.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\AspectRatioType $aspectRatio
     */
    public function addToAspectRatio(\DedexBundle\Entity\Ern43\AspectRatioType $aspectRatio)
    {
        $this->aspectRatio[] = $aspectRatio;
        return $this;
    }

    /**
     * isset aspectRatio
     *
     * A Composite containing the ratio formed by dividing the ImageHeight by the ImageWidth.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAspectRatio($index)
    {
        return isset($this->aspectRatio[$index]);
    }

    /**
     * unset aspectRatio
     *
     * A Composite containing the ratio formed by dividing the ImageHeight by the ImageWidth.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAspectRatio($index)
    {
        unset($this->aspectRatio[$index]);
    }

    /**
     * Gets as aspectRatio
     *
     * A Composite containing the ratio formed by dividing the ImageHeight by the ImageWidth.
     *
     * @return \DedexBundle\Entity\Ern43\AspectRatioType[]
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
     * @param \DedexBundle\Entity\Ern43\AspectRatioType[] $aspectRatio
     * @return self
     */
    public function setAspectRatio(array $aspectRatio = null)
    {
        $this->aspectRatio = $aspectRatio;
        return $this;
    }

    /**
     * Gets as coreArea
     *
     * A Composite containing details of the core part of the Video.
     *
     * @return \DedexBundle\Entity\Ern43\CoreAreaType
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
     * @param \DedexBundle\Entity\Ern43\CoreAreaType $coreArea
     * @return self
     */
    public function setCoreArea(?\DedexBundle\Entity\Ern43\CoreAreaType $coreArea = null)
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
     * @return \DedexBundle\Entity\Ern43\VideoDefinitionTypeType
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
     * @param \DedexBundle\Entity\Ern43\VideoDefinitionTypeType $videoDefinitionType
     * @return self
     */
    public function setVideoDefinitionType(?\DedexBundle\Entity\Ern43\VideoDefinitionTypeType $videoDefinitionType = null)
    {
        $this->videoDefinitionType = $videoDefinitionType;
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
     * Gets as hasImmersiveAudioMetadata
     *
     * A Flag indicating whether immersive audio metadata is present in the File (=true) or not (=false).
     *
     * @return bool
     */
    public function getHasImmersiveAudioMetadata()
    {
        return $this->hasImmersiveAudioMetadata;
    }

    /**
     * Sets a new hasImmersiveAudioMetadata
     *
     * A Flag indicating whether immersive audio metadata is present in the File (=true) or not (=false).
     *
     * @param bool $hasImmersiveAudioMetadata
     * @return self
     */
    public function setHasImmersiveAudioMetadata($hasImmersiveAudioMetadata)
    {
        $this->hasImmersiveAudioMetadata = $hasImmersiveAudioMetadata;
        return $this;
    }

    /**
     * Gets as electroOpticalTransferFunctionType
     *
     * An electro-optical transfer function (EOTF) used for the video signal.
     *
     * @return string
     */
    public function getElectroOpticalTransferFunctionType()
    {
        return $this->electroOpticalTransferFunctionType;
    }

    /**
     * Sets a new electroOpticalTransferFunctionType
     *
     * An electro-optical transfer function (EOTF) used for the video signal.
     *
     * @param string $electroOpticalTransferFunctionType
     * @return self
     */
    public function setElectroOpticalTransferFunctionType($electroOpticalTransferFunctionType)
    {
        $this->electroOpticalTransferFunctionType = $electroOpticalTransferFunctionType;
        return $this;
    }

    /**
     * Gets as primaryColorType
     *
     * A specification for the primary colors.
     *
     * @return string
     */
    public function getPrimaryColorType()
    {
        return $this->primaryColorType;
    }

    /**
     * Sets a new primaryColorType
     *
     * A specification for the primary colors.
     *
     * @param string $primaryColorType
     * @return self
     */
    public function setPrimaryColorType($primaryColorType)
    {
        $this->primaryColorType = $primaryColorType;
        return $this;
    }

    /**
     * Gets as hdrVideoDynamicMetadataType
     *
     * A Composite containing details of Dolby vision metadata. This element may only be used for a VisualFile or AudioVisualFile, and if it is used, an ElectroOpticalTransferFunctionType element must also be present with a value of ST2084. Also, if this Flag is set to StandAlone, there needs to be a further delivery file of type ColorInformationFile.
     *
     * @return \DedexBundle\Entity\Ern43\HdrVideoDynamicMetadataTypeType
     */
    public function getHdrVideoDynamicMetadataType()
    {
        return $this->hdrVideoDynamicMetadataType;
    }

    /**
     * Sets a new hdrVideoDynamicMetadataType
     *
     * A Composite containing details of Dolby vision metadata. This element may only be used for a VisualFile or AudioVisualFile, and if it is used, an ElectroOpticalTransferFunctionType element must also be present with a value of ST2084. Also, if this Flag is set to StandAlone, there needs to be a further delivery file of type ColorInformationFile.
     *
     * @param \DedexBundle\Entity\Ern43\HdrVideoDynamicMetadataTypeType $hdrVideoDynamicMetadataType
     * @return self
     */
    public function setHdrVideoDynamicMetadataType(?\DedexBundle\Entity\Ern43\HdrVideoDynamicMetadataTypeType $hdrVideoDynamicMetadataType = null)
    {
        $this->hdrVideoDynamicMetadataType = $hdrVideoDynamicMetadataType;
        return $this;
    }

    /**
     * Gets as hdrVideoStaticMetadataType
     *
     * A Type of HDR video static metadata.
     *
     * @return string
     */
    public function getHdrVideoStaticMetadataType()
    {
        return $this->hdrVideoStaticMetadataType;
    }

    /**
     * Sets a new hdrVideoStaticMetadataType
     *
     * A Type of HDR video static metadata.
     *
     * @param string $hdrVideoStaticMetadataType
     * @return self
     */
    public function setHdrVideoStaticMetadataType($hdrVideoStaticMetadataType)
    {
        $this->hdrVideoStaticMetadataType = $hdrVideoStaticMetadataType;
        return $this;
    }

    /**
     * Gets as audioBitRate
     *
     * A Composite containing the BitRate for the audio data and a UnitOfMeasure (the default is kbps).
     *
     * @return \DedexBundle\Entity\Ern43\BitRateType
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
     * @param \DedexBundle\Entity\Ern43\BitRateType $audioBitRate
     * @return self
     */
    public function setAudioBitRate(?\DedexBundle\Entity\Ern43\BitRateType $audioBitRate = null)
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
     * Gets as audioSamplingRate
     *
     * A Composite containing the SamplingRate for the audio data and a UnitOfMeasure (the default is Hz).
     *
     * @return \DedexBundle\Entity\Ern43\SamplingRateType
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
     * @param \DedexBundle\Entity\Ern43\SamplingRateType $audioSamplingRate
     * @return self
     */
    public function setAudioSamplingRate(?\DedexBundle\Entity\Ern43\SamplingRateType $audioSamplingRate = null)
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
     * The Duration of the instantiation of the Video if this differs from the Duration provided for the Video itself (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole Video.
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
     * The Duration of the instantiation of the Video if this differs from the Duration provided for the Video itself (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole Video.
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
     * A Composite containing details of a File containing the Video that a DSP can obtain.
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
     * A Composite containing details of a File containing the Video that a DSP can obtain.
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
     * A Flag indicating whether the File containing the Video is a provided in a delivery (=true) or not (=false).
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
     * A Flag indicating whether the File containing the Video is a provided in a delivery (=true) or not (=false).
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

