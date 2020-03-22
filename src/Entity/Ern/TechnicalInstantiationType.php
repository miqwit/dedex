<?php

namespace DedexBundle\Entity\Ern;

/**
 * Class representing TechnicalInstantiationType
 *
 * A Composite containing technical details of a
 *  Release.
 * XSD Type: TechnicalInstantiation
 */
class TechnicalInstantiationType
{

    /**
     * A Type of DRM
     *  enforcement.
     *
     * @var string $drmEnforcementType
     */
    private $drmEnforcementType = null;

    /**
     * A Type of resolution (or definition) in
     *  which a Video is provided.
     *
     * @var string $videoDefinitionType
     */
    private $videoDefinitionType = null;

    /**
     * A Type of coding used to encode a
     *  Resource.
     *
     * @var string $codingType
     */
    private $codingType = null;

    /**
     * A Composite containing the BitRate for the
     *  audio data and a UnitOfMeasure (the default is kbps).
     *
     * @var \DedexBundle\Entity\Ern\BitRateType $bitRate
     */
    private $bitRate = null;

    /**
     * Gets as drmEnforcementType
     *
     * A Type of DRM
     *  enforcement.
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
     * A Type of DRM
     *  enforcement.
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
     * A Type of resolution (or definition) in
     *  which a Video is provided.
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
     * A Type of resolution (or definition) in
     *  which a Video is provided.
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
     * A Type of coding used to encode a
     *  Resource.
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
     * A Type of coding used to encode a
     *  Resource.
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
     * A Composite containing the BitRate for the
     *  audio data and a UnitOfMeasure (the default is kbps).
     *
     * @return \DedexBundle\Entity\Ern\BitRateType
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
     * @param \DedexBundle\Entity\Ern\BitRateType $bitRate
     * @return self
     */
    public function setBitRate(\DedexBundle\Entity\Ern\BitRateType $bitRate)
    {
        $this->bitRate = $bitRate;
        return $this;
    }


}

