<?php

namespace DedexBundle\Entity\Ern;

/**
 * Class representing TechnicalSheetMusicDetailsType
 *
 * A Composite containing technical details of a
 *  SheetMusic.
 * XSD Type: TechnicalSheetMusicDetails
 */
class TechnicalSheetMusicDetailsType
{

    /**
     * The Language and script for the Elements of
     *  the TechnicalSheetMusicDetails as defined in IETF RfC 5646. The default is the same
     *  as indicated for the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The Identifier (specific to the Message)
     *  of the TechnicalSheetMusicDetails within the Release which contains it. This is a
     *  LocalTechnicalResourceDetailsAnchor starting with the letter T.
     *
     * @var string $technicalResourceDetailsReference
     */
    private $technicalResourceDetailsReference = null;

    /**
     * A Composite containing details of a Type
     *  of DrmPlatform.
     *
     * @var \DedexBundle\Entity\Ern\DrmPlatformTypeType $drmPlatformType
     */
    private $drmPlatformType = null;

    /**
     * A Composite containing details of a
     *  ContainerFormat.
     *
     * @var \DedexBundle\Entity\Ern\ContainerFormatType $containerFormat
     */
    private $containerFormat = null;

    /**
     * A Composite containing details of a Type
     *  of SheetMusicCodec.
     *
     * @var \DedexBundle\Entity\Ern\SheetMusicCodecTypeType $sheetMusicCodecType
     */
    private $sheetMusicCodecType = null;

    /**
     * The Flag indicating whether the SheetMusic
     *  is technically a preview of the parent Resource (=true) or not (=false). Note that
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
     * @var \DedexBundle\Entity\Ern\PreviewDetailsType $previewDetails
     */
    private $previewDetails = null;

    /**
     * A Composite containing details of a
     *  FulfillmentDate.
     *
     * @var \DedexBundle\Entity\Ern\FulfillmentDateType $fulfillmentDate
     */
    private $fulfillmentDate = null;

    /**
     * A Composite containing details of when a
     *  consumer is able to get hold of the SheetMusic.
     *
     * @var \DedexBundle\Entity\Ern\FulfillmentDateType $consumerFulfillmentDate
     */
    private $consumerFulfillmentDate = null;

    /**
     * A Composite containing a Description
     *  providing details of how a DSP can obtain a File that contains the
     *  SheetMusic.
     *
     * @var \DedexBundle\Entity\Ern\DescriptionType[] $fileAvailabilityDescription
     */
    private $fileAvailabilityDescription = [
        
    ];

    /**
     * A Composite containing details of a
     *  File containing the SheetMusic that a DSP can obtain.
     *
     * @var \DedexBundle\Entity\Ern\FileType[] $file
     */
    private $file = [
        
    ];

    /**
     * A Composite containing details of a
     *  Fingerprint and its governing algorithm.
     *
     * @var \DedexBundle\Entity\Ern\FingerprintType[] $fingerprint
     */
    private $fingerprint = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of
     *  the TechnicalSheetMusicDetails as defined in IETF RfC 5646. The default is the same
     *  as indicated for the containing composite. Language and Script are provided as
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
     *  the TechnicalSheetMusicDetails as defined in IETF RfC 5646. The default is the same
     *  as indicated for the containing composite. Language and Script are provided as
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
     *  of the TechnicalSheetMusicDetails within the Release which contains it. This is a
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
     *  of the TechnicalSheetMusicDetails within the Release which contains it. This is a
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
     * @return \DedexBundle\Entity\Ern\DrmPlatformTypeType
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
     * @param \DedexBundle\Entity\Ern\DrmPlatformTypeType $drmPlatformType
     * @return self
     */
    public function setDrmPlatformType(\DedexBundle\Entity\Ern\DrmPlatformTypeType $drmPlatformType)
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
     * @return \DedexBundle\Entity\Ern\ContainerFormatType
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
     * @param \DedexBundle\Entity\Ern\ContainerFormatType $containerFormat
     * @return self
     */
    public function setContainerFormat(\DedexBundle\Entity\Ern\ContainerFormatType $containerFormat)
    {
        $this->containerFormat = $containerFormat;
        return $this;
    }

    /**
     * Gets as sheetMusicCodecType
     *
     * A Composite containing details of a Type
     *  of SheetMusicCodec.
     *
     * @return \DedexBundle\Entity\Ern\SheetMusicCodecTypeType
     */
    public function getSheetMusicCodecType()
    {
        return $this->sheetMusicCodecType;
    }

    /**
     * Sets a new sheetMusicCodecType
     *
     * A Composite containing details of a Type
     *  of SheetMusicCodec.
     *
     * @param \DedexBundle\Entity\Ern\SheetMusicCodecTypeType $sheetMusicCodecType
     * @return self
     */
    public function setSheetMusicCodecType(\DedexBundle\Entity\Ern\SheetMusicCodecTypeType $sheetMusicCodecType)
    {
        $this->sheetMusicCodecType = $sheetMusicCodecType;
        return $this;
    }

    /**
     * Gets as isPreview
     *
     * The Flag indicating whether the SheetMusic
     *  is technically a preview of the parent Resource (=true) or not (=false). Note that
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
     * The Flag indicating whether the SheetMusic
     *  is technically a preview of the parent Resource (=true) or not (=false). Note that
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
     * @return \DedexBundle\Entity\Ern\PreviewDetailsType
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
     * @param \DedexBundle\Entity\Ern\PreviewDetailsType $previewDetails
     * @return self
     */
    public function setPreviewDetails(\DedexBundle\Entity\Ern\PreviewDetailsType $previewDetails)
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
     * @return \DedexBundle\Entity\Ern\FulfillmentDateType
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
     * @param \DedexBundle\Entity\Ern\FulfillmentDateType $fulfillmentDate
     * @return self
     */
    public function setFulfillmentDate(\DedexBundle\Entity\Ern\FulfillmentDateType $fulfillmentDate)
    {
        $this->fulfillmentDate = $fulfillmentDate;
        return $this;
    }

    /**
     * Gets as consumerFulfillmentDate
     *
     * A Composite containing details of when a
     *  consumer is able to get hold of the SheetMusic.
     *
     * @return \DedexBundle\Entity\Ern\FulfillmentDateType
     */
    public function getConsumerFulfillmentDate()
    {
        return $this->consumerFulfillmentDate;
    }

    /**
     * Sets a new consumerFulfillmentDate
     *
     * A Composite containing details of when a
     *  consumer is able to get hold of the SheetMusic.
     *
     * @param \DedexBundle\Entity\Ern\FulfillmentDateType $consumerFulfillmentDate
     * @return self
     */
    public function setConsumerFulfillmentDate(\DedexBundle\Entity\Ern\FulfillmentDateType $consumerFulfillmentDate)
    {
        $this->consumerFulfillmentDate = $consumerFulfillmentDate;
        return $this;
    }

    /**
     * Adds as fileAvailabilityDescription
     *
     * A Composite containing a Description
     *  providing details of how a DSP can obtain a File that contains the
     *  SheetMusic.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\DescriptionType $fileAvailabilityDescription
     */
    public function addToFileAvailabilityDescription(\DedexBundle\Entity\Ern\DescriptionType $fileAvailabilityDescription)
    {
        $this->fileAvailabilityDescription[] = $fileAvailabilityDescription;
        return $this;
    }

    /**
     * isset fileAvailabilityDescription
     *
     * A Composite containing a Description
     *  providing details of how a DSP can obtain a File that contains the
     *  SheetMusic.
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
     *  SheetMusic.
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
     *  SheetMusic.
     *
     * @return \DedexBundle\Entity\Ern\DescriptionType[]
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
     *  SheetMusic.
     *
     * @param \DedexBundle\Entity\Ern\DescriptionType[] $fileAvailabilityDescription
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
     *  File containing the SheetMusic that a DSP can obtain.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\FileType $file
     */
    public function addToFile(\DedexBundle\Entity\Ern\FileType $file)
    {
        $this->file[] = $file;
        return $this;
    }

    /**
     * isset file
     *
     * A Composite containing details of a
     *  File containing the SheetMusic that a DSP can obtain.
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
     *  File containing the SheetMusic that a DSP can obtain.
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
     *  File containing the SheetMusic that a DSP can obtain.
     *
     * @return \DedexBundle\Entity\Ern\FileType[]
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets a new file
     *
     * A Composite containing details of a
     *  File containing the SheetMusic that a DSP can obtain.
     *
     * @param \DedexBundle\Entity\Ern\FileType[] $file
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
     * @return \DedexBundle\Entity\Ern\FingerprintType[]
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
     * @param \DedexBundle\Entity\Ern\FingerprintType[] $fingerprint
     * @return self
     */
    public function setFingerprint(array $fingerprint)
    {
        $this->fingerprint = $fingerprint;
        return $this;
    }


}

