<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing TechnicalInstantiationType
 *
 * A ddex:Composite containing technical details of a ddex:Release.
 * XSD Type: TechnicalInstantiation
 */
class TechnicalInstantiationType
{
    /**
     * A ddex:Type of DRM enforcement.
     *
     * @var string $drmEnforcementType
     */
    private $drmEnforcementType = null;

    /**
     * A ddex:Type of resolution (or definition) in which a ddex:Video is provided.
     *
     * @var string $videoDefinitionType
     */
    private $videoDefinitionType = null;

    /**
     * A ddex:Type of coding used to encode a ddex:Resource.
     *
     * @var string $codingType
     */
    private $codingType = null;

    /**
     * A ddex:Composite containing the ddex:BitRate for the audio data and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @var \DedexBundle\Entity\DdexC\BitRateType $bitRate
     */
    private $bitRate = null;

    /**
     * Gets as drmEnforcementType
     *
     * A ddex:Type of DRM enforcement.
     *
     * @return string
     */
    public function getDrmEnforcementType()
    {
        return $this->drmEnforcementType;
    }

    /**
     * Sets a new drmEnforcementType
     *
     * A ddex:Type of DRM enforcement.
     *
     * @param string $drmEnforcementType
     * @return self
     */
    public function setDrmEnforcementType($drmEnforcementType)
    {
        $this->drmEnforcementType = $drmEnforcementType;
        return $this;
    }

    /**
     * Gets as videoDefinitionType
     *
     * A ddex:Type of resolution (or definition) in which a ddex:Video is provided.
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
     * A ddex:Type of resolution (or definition) in which a ddex:Video is provided.
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
     * Gets as codingType
     *
     * A ddex:Type of coding used to encode a ddex:Resource.
     *
     * @return string
     */
    public function getCodingType()
    {
        return $this->codingType;
    }

    /**
     * Sets a new codingType
     *
     * A ddex:Type of coding used to encode a ddex:Resource.
     *
     * @param string $codingType
     * @return self
     */
    public function setCodingType($codingType)
    {
        $this->codingType = $codingType;
        return $this;
    }

    /**
     * Gets as bitRate
     *
     * A ddex:Composite containing the ddex:BitRate for the audio data and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @return \DedexBundle\Entity\DdexC\BitRateType
     */
    public function getBitRate()
    {
        return $this->bitRate;
    }

    /**
     * Sets a new bitRate
     *
     * A ddex:Composite containing the ddex:BitRate for the audio data and a ddex:UnitOfMeasure (the default is ddex:kbps).
     *
     * @param \DedexBundle\Entity\DdexC\BitRateType $bitRate
     * @return self
     */
    public function setBitRate(?\DedexBundle\Entity\DdexC\BitRateType $bitRate = null)
    {
        $this->bitRate = $bitRate;
        return $this;
    }
}

