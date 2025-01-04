<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing TechnicalImageDetailsType
 *
 * A Composite containing technical details of an Image.
 * XSD Type: TechnicalImageDetails
 */
class TechnicalImageDetailsType
{
    /**
     * The Language and script for the Elements of the TechnicalImageDetails as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Territory to which the TechnicalImageDetails apply. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * The Identifier (specific to the Message) of the TechnicalImageDetails within the Release which contains it. This is a LocalTechnicalResourceDetailsAnchor starting with the letter T.
     *
     * @var string $technicalResourceDetailsReference
     */
    private $technicalResourceDetailsReference = null;

    /**
     * A Composite containing details of a Type of ImageCodec.
     *
     * @var \DedexBundle\Entity\Ern43\ImageCodecTypeType $imageCodecType
     */
    private $imageCodecType = null;

    /**
     * A Composite containing the vertical Extent of an Image of the Image and a UnitOfMeasure (the default is Pixels).
     *
     * @var \DedexBundle\Entity\Ern43\ExtentType $imageHeight
     */
    private $imageHeight = null;

    /**
     * A Composite containing the horizontal Extent of an Image of the Image and a UnitOfMeasure (the default is Pixels).
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
     * An amount of data determining the color of a Pixel of the Image (given in bits per pixel).
     *
     * @var int $colorDepth
     */
    private $colorDepth = null;

    /**
     * A number of Pixels of the Image displayed in a specific spatial range (given in dpi).
     *
     * @var int $imageResolution
     */
    private $imageResolution = null;

    /**
     * The BitDepth of the File.
     *
     * @var int $bitDepth
     */
    private $bitDepth = null;

    /**
     * The Flag indicating whether the Image is technically a clip of the parent Resource (=true) or not (=false). If the Flag is set to true, the Image described is a clip and the ClipDetails describe how the clip is generated from the full recording described in another TechnicalImageDetails composite. If the Flag is set to false (or left out), the Image described is a 'full' recording and any ClipDetails describe how a clip is generated from said full recording. Note that nothing can be implied from this element as to the conditions under which the clip can be made available.
     *
     * @var bool $isClip
     */
    private $isClip = null;

    /**
     * A Composite containing details of a preview.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-previews/preview-resources
     *
     * @var \DedexBundle\Entity\Ern43\ClipDetailsType[] $clipDetails
     */
    private $clipDetails = [
        
    ];

    /**
     * A Composite containing details of a File containing the Image that a DSP can obtain.
     *
     * @var \DedexBundle\Entity\Ern43\FileType $file
     */
    private $file = null;

    /**
     * A Flag indicating whether a File containing the Image is a provided in a delivery (=true) or not (=false).
     *
     * @var bool $isProvidedInDelivery
     */
    private $isProvidedInDelivery = null;

    /**
     * A Composite containing details of a Fingerprint and its governing algorithm.
     *
     * @var \DedexBundle\Entity\Ern43\FingerprintType[] $fingerprint
     */
    private $fingerprint = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the TechnicalImageDetails as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the TechnicalImageDetails as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * A Territory to which the TechnicalImageDetails apply. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the TechnicalImageDetails apply. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * Gets as imageCodecType
     *
     * A Composite containing details of a Type of ImageCodec.
     *
     * @return \DedexBundle\Entity\Ern43\ImageCodecTypeType
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
     * @param \DedexBundle\Entity\Ern43\ImageCodecTypeType $imageCodecType
     * @return self
     */
    public function setImageCodecType(?\DedexBundle\Entity\Ern43\ImageCodecTypeType $imageCodecType = null)
    {
        $this->imageCodecType = $imageCodecType;
        return $this;
    }

    /**
     * Gets as imageHeight
     *
     * A Composite containing the vertical Extent of an Image of the Image and a UnitOfMeasure (the default is Pixels).
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
     * A Composite containing the vertical Extent of an Image of the Image and a UnitOfMeasure (the default is Pixels).
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
     * A Composite containing the horizontal Extent of an Image of the Image and a UnitOfMeasure (the default is Pixels).
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
     * A Composite containing the horizontal Extent of an Image of the Image and a UnitOfMeasure (the default is Pixels).
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
     * Gets as colorDepth
     *
     * An amount of data determining the color of a Pixel of the Image (given in bits per pixel).
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
     * An amount of data determining the color of a Pixel of the Image (given in bits per pixel).
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
     * A number of Pixels of the Image displayed in a specific spatial range (given in dpi).
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
     * A number of Pixels of the Image displayed in a specific spatial range (given in dpi).
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
     * Gets as isClip
     *
     * The Flag indicating whether the Image is technically a clip of the parent Resource (=true) or not (=false). If the Flag is set to true, the Image described is a clip and the ClipDetails describe how the clip is generated from the full recording described in another TechnicalImageDetails composite. If the Flag is set to false (or left out), the Image described is a 'full' recording and any ClipDetails describe how a clip is generated from said full recording. Note that nothing can be implied from this element as to the conditions under which the clip can be made available.
     *
     * @return bool
     */
    public function getIsClip()
    {
        return $this->isClip;
    }

    /**
     * Sets a new isClip
     *
     * The Flag indicating whether the Image is technically a clip of the parent Resource (=true) or not (=false). If the Flag is set to true, the Image described is a clip and the ClipDetails describe how the clip is generated from the full recording described in another TechnicalImageDetails composite. If the Flag is set to false (or left out), the Image described is a 'full' recording and any ClipDetails describe how a clip is generated from said full recording. Note that nothing can be implied from this element as to the conditions under which the clip can be made available.
     *
     * @param bool $isClip
     * @return self
     */
    public function setIsClip($isClip)
    {
        $this->isClip = $isClip;
        return $this;
    }

    /**
     * Adds as clipDetails
     *
     * A Composite containing details of a preview.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-previews/preview-resources
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\ClipDetailsType $clipDetails
     */
    public function addToClipDetails(\DedexBundle\Entity\Ern43\ClipDetailsType $clipDetails)
    {
        $this->clipDetails[] = $clipDetails;
        return $this;
    }

    /**
     * isset clipDetails
     *
     * A Composite containing details of a preview.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-previews/preview-resources
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClipDetails($index)
    {
        return isset($this->clipDetails[$index]);
    }

    /**
     * unset clipDetails
     *
     * A Composite containing details of a preview.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-previews/preview-resources
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClipDetails($index)
    {
        unset($this->clipDetails[$index]);
    }

    /**
     * Gets as clipDetails
     *
     * A Composite containing details of a preview.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-previews/preview-resources
     *
     * @return \DedexBundle\Entity\Ern43\ClipDetailsType[]
     */
    public function getClipDetails()
    {
        return $this->clipDetails;
    }

    /**
     * Sets a new clipDetails
     *
     * A Composite containing details of a preview.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-previews/preview-resources
     *
     * @param \DedexBundle\Entity\Ern43\ClipDetailsType[] $clipDetails
     * @return self
     */
    public function setClipDetails(array $clipDetails = null)
    {
        $this->clipDetails = $clipDetails;
        return $this;
    }

    /**
     * Gets as file
     *
     * A Composite containing details of a File containing the Image that a DSP can obtain.
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
     * A Composite containing details of a File containing the Image that a DSP can obtain.
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
     * Gets as isProvidedInDelivery
     *
     * A Flag indicating whether a File containing the Image is a provided in a delivery (=true) or not (=false).
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
     * A Flag indicating whether a File containing the Image is a provided in a delivery (=true) or not (=false).
     *
     * @param bool $isProvidedInDelivery
     * @return self
     */
    public function setIsProvidedInDelivery($isProvidedInDelivery)
    {
        $this->isProvidedInDelivery = $isProvidedInDelivery;
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
}

