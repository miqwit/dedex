<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing TechnicalImageDetailsType
 *
 * A Composite containing technical details of a Image.
 * XSD Type: TechnicalImageDetails
 */
class TechnicalImageDetailsType
{
    /**
     * The Language and script for the Elements of the TechnicalImageDetails as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The Identifier (specific to the Message) of the TechnicalImageDetails within the Release which contains it. This is a LocalTechnicalResourceDetailsAnchor starting with the letter T.
     *
     * @var string $technicalResourceDetailsReference
     */
    private $technicalResourceDetailsReference = null;

    /**
     * A Composite containing details of a Type of DrmPlatform.
     *
     * @var \DedexBundle\Entity\Ern381\DrmPlatformTypeType $drmPlatformType
     */
    private $drmPlatformType = null;

    /**
     * A Composite containing details of a ContainerFormat.
     *
     * @var \DedexBundle\Entity\Ern381\ContainerFormatType $containerFormat
     */
    private $containerFormat = null;

    /**
     * A Composite containing details of a Type of ImageCodec.
     *
     * @var \DedexBundle\Entity\Ern381\ImageCodecTypeType $imageCodecType
     */
    private $imageCodecType = null;

    /**
     * A Composite containing the vertical Extent of an Image of the Image and a UnitOfMeasure (the default is Pixels).
     *
     * @var \DedexBundle\Entity\Ern381\ExtentType $imageHeight
     */
    private $imageHeight = null;

    /**
     * A Composite containing the horizontal Extent of an Image of the Image and a UnitOfMeasure (the default is Pixels).
     *
     * @var \DedexBundle\Entity\Ern381\ExtentType $imageWidth
     */
    private $imageWidth = null;

    /**
     * A Composite containing the ratio formed by dividing the ImageHeight by the ImageWidth.
     *
     * @var \DedexBundle\Entity\Ern381\AspectRatioType $aspectRatio
     */
    private $aspectRatio = null;

    /**
     * An amount of data determining the color of a pixel of the Image (given in bits per pixel).
     *
     * @var int $colorDepth
     */
    private $colorDepth = null;

    /**
     * A number of pixels of the Image displayed in a specific spatial range (given in dpi).
     *
     * @var int $imageResolution
     */
    private $imageResolution = null;

    /**
     * The Flag indicating whether the Image is technically a preview of the parent Resource (=true) or not (=false). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
     *
     * @var bool $isPreview
     */
    private $isPreview = null;

    /**
     * A Composite containing details of a preview.
     *
     * @var \DedexBundle\Entity\Ern381\PreviewDetailsType $previewDetails
     */
    private $previewDetails = null;

    /**
     * A Composite containing details of a FulfillmentDate.
     *
     * @var \DedexBundle\Entity\Ern381\FulfillmentDateType $fulfillmentDate
     */
    private $fulfillmentDate = null;

    /**
     * A Composite containing details of when a consumer is able to get hold of the Image.
     *
     * @var \DedexBundle\Entity\Ern381\FulfillmentDateType $consumerFulfillmentDate
     */
    private $consumerFulfillmentDate = null;

    /**
     * A Composite containing a Description providing details of how a DSP can obtain a File that contains the Image.
     *
     * @var \DedexBundle\Entity\Ern381\DescriptionType[] $fileAvailabilityDescription
     */
    private $fileAvailabilityDescription = [
        
    ];

    /**
     * A Composite containing details of a File containing the Image that a DSP can obtain.
     *
     * @var \DedexBundle\Entity\Ern381\FileType[] $file
     */
    private $file = [
        
    ];

    /**
     * A Composite containing details of a Fingerprint and its governing algorithm.
     *
     * @var \DedexBundle\Entity\Ern381\FingerprintType[] $fingerprint
     */
    private $fingerprint = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the TechnicalImageDetails as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the TechnicalImageDetails as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Identifier (specific to the Message) of the TechnicalImageDetails within the Release which contains it. This is a LocalTechnicalResourceDetailsAnchor starting with the letter T.
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
     * The Identifier (specific to the Message) of the TechnicalImageDetails within the Release which contains it. This is a LocalTechnicalResourceDetailsAnchor starting with the letter T.
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
     * A Composite containing details of a Type of DrmPlatform.
     *
     * @return \DedexBundle\Entity\Ern381\DrmPlatformTypeType
     */
    public function getDrmPlatformType()
    {
        return $this->drmPlatformType;
    }

    /**
     * Sets a new drmPlatformType
     *
     * A Composite containing details of a Type of DrmPlatform.
     *
     * @param \DedexBundle\Entity\Ern381\DrmPlatformTypeType $drmPlatformType
     * @return self
     */
    public function setDrmPlatformType(?\DedexBundle\Entity\Ern381\DrmPlatformTypeType $drmPlatformType = null)
    {
        $this->drmPlatformType = $drmPlatformType;
        return $this;
    }

    /**
     * Gets as containerFormat
     *
     * A Composite containing details of a ContainerFormat.
     *
     * @return \DedexBundle\Entity\Ern381\ContainerFormatType
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
     * @param \DedexBundle\Entity\Ern381\ContainerFormatType $containerFormat
     * @return self
     */
    public function setContainerFormat(?\DedexBundle\Entity\Ern381\ContainerFormatType $containerFormat = null)
    {
        $this->containerFormat = $containerFormat;
        return $this;
    }

    /**
     * Gets as imageCodecType
     *
     * A Composite containing details of a Type of ImageCodec.
     *
     * @return \DedexBundle\Entity\Ern381\ImageCodecTypeType
     */
    public function getImageCodecType()
    {
        return $this->imageCodecType;
    }

    /**
     * Sets a new imageCodecType
     *
     * A Composite containing details of a Type of ImageCodec.
     *
     * @param \DedexBundle\Entity\Ern381\ImageCodecTypeType $imageCodecType
     * @return self
     */
    public function setImageCodecType(?\DedexBundle\Entity\Ern381\ImageCodecTypeType $imageCodecType = null)
    {
        $this->imageCodecType = $imageCodecType;
        return $this;
    }

    /**
     * Gets as imageHeight
     *
     * A Composite containing the vertical Extent of an Image of the Image and a UnitOfMeasure (the default is Pixels).
     *
     * @return \DedexBundle\Entity\Ern381\ExtentType
     */
    public function getImageHeight()
    {
        return $this->imageHeight;
    }

    /**
     * Sets a new imageHeight
     *
     * A Composite containing the vertical Extent of an Image of the Image and a UnitOfMeasure (the default is Pixels).
     *
     * @param \DedexBundle\Entity\Ern381\ExtentType $imageHeight
     * @return self
     */
    public function setImageHeight(?\DedexBundle\Entity\Ern381\ExtentType $imageHeight = null)
    {
        $this->imageHeight = $imageHeight;
        return $this;
    }

    /**
     * Gets as imageWidth
     *
     * A Composite containing the horizontal Extent of an Image of the Image and a UnitOfMeasure (the default is Pixels).
     *
     * @return \DedexBundle\Entity\Ern381\ExtentType
     */
    public function getImageWidth()
    {
        return $this->imageWidth;
    }

    /**
     * Sets a new imageWidth
     *
     * A Composite containing the horizontal Extent of an Image of the Image and a UnitOfMeasure (the default is Pixels).
     *
     * @param \DedexBundle\Entity\Ern381\ExtentType $imageWidth
     * @return self
     */
    public function setImageWidth(?\DedexBundle\Entity\Ern381\ExtentType $imageWidth = null)
    {
        $this->imageWidth = $imageWidth;
        return $this;
    }

    /**
     * Gets as aspectRatio
     *
     * A Composite containing the ratio formed by dividing the ImageHeight by the ImageWidth.
     *
     * @return \DedexBundle\Entity\Ern381\AspectRatioType
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
     * @param \DedexBundle\Entity\Ern381\AspectRatioType $aspectRatio
     * @return self
     */
    public function setAspectRatio(?\DedexBundle\Entity\Ern381\AspectRatioType $aspectRatio = null)
    {
        $this->aspectRatio = $aspectRatio;
        return $this;
    }

    /**
     * Gets as colorDepth
     *
     * An amount of data determining the color of a pixel of the Image (given in bits per pixel).
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
     * An amount of data determining the color of a pixel of the Image (given in bits per pixel).
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
     * Gets as imageResolution
     *
     * A number of pixels of the Image displayed in a specific spatial range (given in dpi).
     *
     * @return int
     */
    public function getImageResolution()
    {
        return $this->imageResolution;
    }

    /**
     * Sets a new imageResolution
     *
     * A number of pixels of the Image displayed in a specific spatial range (given in dpi).
     *
     * @param int $imageResolution
     * @return self
     */
    public function setImageResolution($imageResolution)
    {
        $this->imageResolution = $imageResolution;
        return $this;
    }

    /**
     * Gets as isPreview
     *
     * The Flag indicating whether the Image is technically a preview of the parent Resource (=true) or not (=false). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
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
     * The Flag indicating whether the Image is technically a preview of the parent Resource (=true) or not (=false). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
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
     * @return \DedexBundle\Entity\Ern381\PreviewDetailsType
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
     * @param \DedexBundle\Entity\Ern381\PreviewDetailsType $previewDetails
     * @return self
     */
    public function setPreviewDetails(?\DedexBundle\Entity\Ern381\PreviewDetailsType $previewDetails = null)
    {
        $this->previewDetails = $previewDetails;
        return $this;
    }

    /**
     * Gets as fulfillmentDate
     *
     * A Composite containing details of a FulfillmentDate.
     *
     * @return \DedexBundle\Entity\Ern381\FulfillmentDateType
     */
    public function getFulfillmentDate()
    {
        return $this->fulfillmentDate;
    }

    /**
     * Sets a new fulfillmentDate
     *
     * A Composite containing details of a FulfillmentDate.
     *
     * @param \DedexBundle\Entity\Ern381\FulfillmentDateType $fulfillmentDate
     * @return self
     */
    public function setFulfillmentDate(?\DedexBundle\Entity\Ern381\FulfillmentDateType $fulfillmentDate = null)
    {
        $this->fulfillmentDate = $fulfillmentDate;
        return $this;
    }

    /**
     * Gets as consumerFulfillmentDate
     *
     * A Composite containing details of when a consumer is able to get hold of the Image.
     *
     * @return \DedexBundle\Entity\Ern381\FulfillmentDateType
     */
    public function getConsumerFulfillmentDate()
    {
        return $this->consumerFulfillmentDate;
    }

    /**
     * Sets a new consumerFulfillmentDate
     *
     * A Composite containing details of when a consumer is able to get hold of the Image.
     *
     * @param \DedexBundle\Entity\Ern381\FulfillmentDateType $consumerFulfillmentDate
     * @return self
     */
    public function setConsumerFulfillmentDate(?\DedexBundle\Entity\Ern381\FulfillmentDateType $consumerFulfillmentDate = null)
    {
        $this->consumerFulfillmentDate = $consumerFulfillmentDate;
        return $this;
    }

    /**
     * Adds as fileAvailabilityDescription
     *
     * A Composite containing a Description providing details of how a DSP can obtain a File that contains the Image.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\DescriptionType $fileAvailabilityDescription
     */
    public function addToFileAvailabilityDescription(\DedexBundle\Entity\Ern381\DescriptionType $fileAvailabilityDescription)
    {
        $this->fileAvailabilityDescription[] = $fileAvailabilityDescription;
        return $this;
    }

    /**
     * isset fileAvailabilityDescription
     *
     * A Composite containing a Description providing details of how a DSP can obtain a File that contains the Image.
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
     * A Composite containing a Description providing details of how a DSP can obtain a File that contains the Image.
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
     * A Composite containing a Description providing details of how a DSP can obtain a File that contains the Image.
     *
     * @return \DedexBundle\Entity\Ern381\DescriptionType[]
     */
    public function getFileAvailabilityDescription()
    {
        return $this->fileAvailabilityDescription;
    }

    /**
     * Sets a new fileAvailabilityDescription
     *
     * A Composite containing a Description providing details of how a DSP can obtain a File that contains the Image.
     *
     * @param \DedexBundle\Entity\Ern381\DescriptionType[] $fileAvailabilityDescription
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
     * A Composite containing details of a File containing the Image that a DSP can obtain.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\FileType $file
     */
    public function addToFile(\DedexBundle\Entity\Ern381\FileType $file)
    {
        $this->file[] = $file;
        return $this;
    }

    /**
     * isset file
     *
     * A Composite containing details of a File containing the Image that a DSP can obtain.
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
     * A Composite containing details of a File containing the Image that a DSP can obtain.
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
     * A Composite containing details of a File containing the Image that a DSP can obtain.
     *
     * @return \DedexBundle\Entity\Ern381\FileType[]
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets a new file
     *
     * A Composite containing details of a File containing the Image that a DSP can obtain.
     *
     * @param \DedexBundle\Entity\Ern381\FileType[] $file
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
     * A Composite containing details of a Fingerprint and its governing algorithm.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\FingerprintType $fingerprint
     */
    public function addToFingerprint(\DedexBundle\Entity\Ern381\FingerprintType $fingerprint)
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
     * @return \DedexBundle\Entity\Ern381\FingerprintType[]
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
     * @param \DedexBundle\Entity\Ern381\FingerprintType[] $fingerprint
     * @return self
     */
    public function setFingerprint(array $fingerprint = null)
    {
        $this->fingerprint = $fingerprint;
        return $this;
    }
}

