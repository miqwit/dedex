<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing TechnicalMidiDetailsType
 *
 * A Composite containing technical details of a MIDI.
 * XSD Type: TechnicalMidiDetails
 */
class TechnicalMidiDetailsType
{
    /**
     * The Language and script for the Elements of the TechnicalMidiDetails as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The Identifier (specific to the Message) of the TechnicalMidiDetails within the Release which contains it. This is a LocalTechnicalResourceDetailsAnchor starting with the letter T.
     *
     * @var string $technicalResourceDetailsReference
     */
    private $technicalResourceDetailsReference = null;

    /**
     * The Duration of the instantiation of the MIDI if this differs from the Duration provided for the MIDI itself (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole MIDI.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The Flag indicating whether the MIDI needs to be processed (=true) or not (=false) (typically: transcoded) by the MessageRecipient before being delivered to Consumers.
     *
     * @var bool $resourceProcessingRequired
     */
    private $resourceProcessingRequired = null;

    /**
     * The Duration of the MIDI that may be sold to a Consumer if the MIDI provided is not intended to be provided to Consumers 'as is' but will need to be transcoded into an appropriate format by the MessageRecipient or any other DSP handling the Release before it is sold (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $usableResourceDuration
     */
    private $usableResourceDuration = null;

    /**
     * The Flag indicating whether the MIDI is technically a preview of the parent Resource (=true) or not (=false). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
     *
     * @var bool $isPreview
     */
    private $isPreview = null;

    /**
     * A Composite containing details of a preview.
     *
     * @var \DedexBundle\Entity\Ern381\SoundRecordingPreviewDetailsType $previewDetails
     */
    private $previewDetails = null;

    /**
     * A Composite containing details of a FulfillmentDate.
     *
     * @var \DedexBundle\Entity\Ern381\FulfillmentDateType $fulfillmentDate
     */
    private $fulfillmentDate = null;

    /**
     * A Composite containing details of when a consumer is able to get hold of the MIDI.
     *
     * @var \DedexBundle\Entity\Ern381\FulfillmentDateType $consumerFulfillmentDate
     */
    private $consumerFulfillmentDate = null;

    /**
     * A Composite containing a Description providing details of how a DSP can obtain a File that contains the MIDI.
     *
     * @var \DedexBundle\Entity\Ern381\DescriptionType[] $fileAvailabilityDescription
     */
    private $fileAvailabilityDescription = [
        
    ];

    /**
     * A Composite containing details of a File containing the MIDI that a DSP can obtain.
     *
     * @var \DedexBundle\Entity\Ern381\FileType[] $file
     */
    private $file = [
        
    ];

    /**
     * The number of voices.
     *
     * @var int $numberOfVoices
     */
    private $numberOfVoices = null;

    /**
     * A Type of sound processor.
     *
     * @var \DedexBundle\Entity\Ern381\SoundProcessorTypeType $soundProcessorType
     */
    private $soundProcessorType = null;

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
     * The Language and script for the Elements of the TechnicalMidiDetails as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the TechnicalMidiDetails as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Identifier (specific to the Message) of the TechnicalMidiDetails within the Release which contains it. This is a LocalTechnicalResourceDetailsAnchor starting with the letter T.
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
     * The Identifier (specific to the Message) of the TechnicalMidiDetails within the Release which contains it. This is a LocalTechnicalResourceDetailsAnchor starting with the letter T.
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
     * Gets as duration
     *
     * The Duration of the instantiation of the MIDI if this differs from the Duration provided for the MIDI itself (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole MIDI.
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
     * The Duration of the instantiation of the MIDI if this differs from the Duration provided for the MIDI itself (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S). This element must only be used if and when there are no royalty reporting implications on this change in duration and when the specific technical instantiation is a clip taken from a technical instantiation representing the whole MIDI.
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
     * The Flag indicating whether the MIDI needs to be processed (=true) or not (=false) (typically: transcoded) by the MessageRecipient before being delivered to Consumers.
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
     * The Flag indicating whether the MIDI needs to be processed (=true) or not (=false) (typically: transcoded) by the MessageRecipient before being delivered to Consumers.
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
     * The Duration of the MIDI that may be sold to a Consumer if the MIDI provided is not intended to be provided to Consumers 'as is' but will need to be transcoded into an appropriate format by the MessageRecipient or any other DSP handling the Release before it is sold (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * The Duration of the MIDI that may be sold to a Consumer if the MIDI provided is not intended to be provided to Consumers 'as is' but will need to be transcoded into an appropriate format by the MessageRecipient or any other DSP handling the Release before it is sold (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * The Flag indicating whether the MIDI is technically a preview of the parent Resource (=true) or not (=false). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
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
     * The Flag indicating whether the MIDI is technically a preview of the parent Resource (=true) or not (=false). Note that nothing can be implied from this element as to the conditions under which the preview can be made available.
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
     * @return \DedexBundle\Entity\Ern381\SoundRecordingPreviewDetailsType
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
     * @param \DedexBundle\Entity\Ern381\SoundRecordingPreviewDetailsType $previewDetails
     * @return self
     */
    public function setPreviewDetails(?\DedexBundle\Entity\Ern381\SoundRecordingPreviewDetailsType $previewDetails = null)
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
     * A Composite containing details of when a consumer is able to get hold of the MIDI.
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
     * A Composite containing details of when a consumer is able to get hold of the MIDI.
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
     * A Composite containing a Description providing details of how a DSP can obtain a File that contains the MIDI.
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
     * A Composite containing a Description providing details of how a DSP can obtain a File that contains the MIDI.
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
     * A Composite containing a Description providing details of how a DSP can obtain a File that contains the MIDI.
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
     * A Composite containing a Description providing details of how a DSP can obtain a File that contains the MIDI.
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
     * A Composite containing a Description providing details of how a DSP can obtain a File that contains the MIDI.
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
     * A Composite containing details of a File containing the MIDI that a DSP can obtain.
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
     * A Composite containing details of a File containing the MIDI that a DSP can obtain.
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
     * A Composite containing details of a File containing the MIDI that a DSP can obtain.
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
     * A Composite containing details of a File containing the MIDI that a DSP can obtain.
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
     * A Composite containing details of a File containing the MIDI that a DSP can obtain.
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
     * Gets as numberOfVoices
     *
     * The number of voices.
     *
     * @return int
     */
    public function getNumberOfVoices()
    {
        return $this->numberOfVoices;
    }

    /**
     * Sets a new numberOfVoices
     *
     * The number of voices.
     *
     * @param int $numberOfVoices
     * @return self
     */
    public function setNumberOfVoices($numberOfVoices)
    {
        $this->numberOfVoices = $numberOfVoices;
        return $this;
    }

    /**
     * Gets as soundProcessorType
     *
     * A Type of sound processor.
     *
     * @return \DedexBundle\Entity\Ern381\SoundProcessorTypeType
     */
    public function getSoundProcessorType()
    {
        return $this->soundProcessorType;
    }

    /**
     * Sets a new soundProcessorType
     *
     * A Type of sound processor.
     *
     * @param \DedexBundle\Entity\Ern381\SoundProcessorTypeType $soundProcessorType
     * @return self
     */
    public function setSoundProcessorType(?\DedexBundle\Entity\Ern381\SoundProcessorTypeType $soundProcessorType = null)
    {
        $this->soundProcessorType = $soundProcessorType;
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

