<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing HdrVideoDynamicMetadataTypeType
 *
 * A Composite containing details of HDR video dynamic metadata.
 * XSD Type: HdrVideoDynamicMetadataType
 */
class HdrVideoDynamicMetadataTypeType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The Identifier of the Version of the HdrVideoDynamicMetadataType. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $version
     */
    private $version = null;

    /**
     * The Flag indicating whether SDR Derivation is permitted by the content owner (=true) or not (=false). If this Flag is not set or set to false, Dolby Vision metadata can be used by a DSP to derive SDR video from the HDR source video using Dolby tools. If this Flag is set to true, this is not permitted and the content provider will provide a separate SDR video track. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $sdrDerivationPermitted
     */
    private $sdrDerivationPermitted = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as version
     *
     * The Identifier of the Version of the HdrVideoDynamicMetadataType. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The Identifier of the Version of the HdrVideoDynamicMetadataType. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as sdrDerivationPermitted
     *
     * The Flag indicating whether SDR Derivation is permitted by the content owner (=true) or not (=false). If this Flag is not set or set to false, Dolby Vision metadata can be used by a DSP to derive SDR video from the HDR source video using Dolby tools. If this Flag is set to true, this is not permitted and the content provider will provide a separate SDR video track. This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getSdrDerivationPermitted()
    {
        return $this->sdrDerivationPermitted;
    }

    /**
     * Sets a new sdrDerivationPermitted
     *
     * The Flag indicating whether SDR Derivation is permitted by the content owner (=true) or not (=false). If this Flag is not set or set to false, Dolby Vision metadata can be used by a DSP to derive SDR video from the HDR source video using Dolby tools. If this Flag is set to true, this is not permitted and the content provider will provide a separate SDR video track. This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $sdrDerivationPermitted
     * @return self
     */
    public function setSdrDerivationPermitted($sdrDerivationPermitted)
    {
        $this->sdrDerivationPermitted = $sdrDerivationPermitted;
        return $this;
    }
}

