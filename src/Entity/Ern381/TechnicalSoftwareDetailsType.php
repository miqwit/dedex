<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing TechnicalSoftwareDetailsType
 *
 * A Composite containing technical details of a Software.
 * XSD Type: TechnicalSoftwareDetails
 */
class TechnicalSoftwareDetailsType
{
    /**
     * The Language and script for the Elements of the TechnicalSoftwareDetails as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The Identifier (specific to the Message) of the TechnicalSoftwareDetails within the Release which contains it. This is a LocalTechnicalResourceDetailsAnchor starting with the letter T.
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
     * A Composite containing details of a Type of OperatingSystem.
     *
     * @var \DedexBundle\Entity\Ern381\OperatingSystemTypeType $operatingSystemType
     */
    private $operatingSystemType = null;

    /**
     * The Flag indicating whether the Software is technically a preview of the parent Resource (=true) or not (=false). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
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
     * A Composite containing details of when a consumer is able to get hold of the Software.
     *
     * @var \DedexBundle\Entity\Ern381\FulfillmentDateType $consumerFulfillmentDate
     */
    private $consumerFulfillmentDate = null;

    /**
     * A Composite containing a Description providing details of how a DSP can obtain a File that contains the Software.
     *
     * @var \DedexBundle\Entity\Ern381\DescriptionType[] $fileAvailabilityDescription
     */
    private $fileAvailabilityDescription = [
        
    ];

    /**
     * A Composite containing details of a File containing the Software that a DSP can obtain.
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
     * The Language and script for the Elements of the TechnicalSoftwareDetails as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the TechnicalSoftwareDetails as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Identifier (specific to the Message) of the TechnicalSoftwareDetails within the Release which contains it. This is a LocalTechnicalResourceDetailsAnchor starting with the letter T.
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
     * The Identifier (specific to the Message) of the TechnicalSoftwareDetails within the Release which contains it. This is a LocalTechnicalResourceDetailsAnchor starting with the letter T.
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
     * Gets as operatingSystemType
     *
     * A Composite containing details of a Type of OperatingSystem.
     *
     * @return \DedexBundle\Entity\Ern381\OperatingSystemTypeType
     */
    public function getOperatingSystemType()
    {
        return $this->operatingSystemType;
    }

    /**
     * Sets a new operatingSystemType
     *
     * A Composite containing details of a Type of OperatingSystem.
     *
     * @param \DedexBundle\Entity\Ern381\OperatingSystemTypeType $operatingSystemType
     * @return self
     */
    public function setOperatingSystemType(?\DedexBundle\Entity\Ern381\OperatingSystemTypeType $operatingSystemType = null)
    {
        $this->operatingSystemType = $operatingSystemType;
        return $this;
    }

    /**
     * Gets as isPreview
     *
     * The Flag indicating whether the Software is technically a preview of the parent Resource (=true) or not (=false). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
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
     * The Flag indicating whether the Software is technically a preview of the parent Resource (=true) or not (=false). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
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
     * A Composite containing details of when a consumer is able to get hold of the Software.
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
     * A Composite containing details of when a consumer is able to get hold of the Software.
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
     * A Composite containing a Description providing details of how a DSP can obtain a File that contains the Software.
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
     * A Composite containing a Description providing details of how a DSP can obtain a File that contains the Software.
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
     * A Composite containing a Description providing details of how a DSP can obtain a File that contains the Software.
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
     * A Composite containing a Description providing details of how a DSP can obtain a File that contains the Software.
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
     * A Composite containing a Description providing details of how a DSP can obtain a File that contains the Software.
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
     * A Composite containing details of a File containing the Software that a DSP can obtain.
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
     * A Composite containing details of a File containing the Software that a DSP can obtain.
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
     * A Composite containing details of a File containing the Software that a DSP can obtain.
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
     * A Composite containing details of a File containing the Software that a DSP can obtain.
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
     * A Composite containing details of a File containing the Software that a DSP can obtain.
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

