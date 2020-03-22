<?php

namespace DedexBundle\Entity\Ern;

/**
 * Class representing ExternalResourceLinkType
 *
 * A Composite containing details of promotional or
 *  other material in digital form related to a Release.
 * XSD Type: ExternalResourceLink
 */
class ExternalResourceLinkType
{

    /**
     * A URL of the linked external
     *  Resource.
     *
     * @var string[] $uRL
     */
    private $uRL = [
        
    ];

    /**
     * A Composite containing details about the
     *  Period of Time during which the ExternalResourceLink is active.
     *
     * @var \DedexBundle\Entity\Ern\PeriodType $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * The Identifier which provides a
     *  communication link to the related external Resource.
     *
     * @var string $externalLink
     */
    private $externalLink = null;

    /**
     * A Composite containing details of the Type
     *  of a Resource pointed to by the ExternalResourceLink.
     *
     * @var \DedexBundle\Entity\Ern\ExternallyLinkedResourceTypeType[] $externallyLinkedResourceType
     */
    private $externallyLinkedResourceType = [
        
    ];

    /**
     * The FileFormat of the external
     *  Resource.
     *
     * @var string $fileFormat
     */
    private $fileFormat = null;

    /**
     * Adds as uRL
     *
     * A URL of the linked external
     *  Resource.
     *
     * @return self
     * @param string $uRL
     */
    public function addToURL($uRL)
    {
        $this->uRL[] = $uRL;
        return $this;
    }

    /**
     * isset uRL
     *
     * A URL of the linked external
     *  Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetURL($index)
    {
        return isset($this->uRL[$index]);
    }

    /**
     * unset uRL
     *
     * A URL of the linked external
     *  Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetURL($index)
    {
        unset($this->uRL[$index]);
    }

    /**
     * Gets as uRL
     *
     * A URL of the linked external
     *  Resource.
     *
     * @return string[]
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * A URL of the linked external
     *  Resource.
     *
     * @param string[] $uRL
     * @return self
     */
    public function setURL(array $uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * A Composite containing details about the
     *  Period of Time during which the ExternalResourceLink is active.
     *
     * @return \DedexBundle\Entity\Ern\PeriodType
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * A Composite containing details about the
     *  Period of Time during which the ExternalResourceLink is active.
     *
     * @param \DedexBundle\Entity\Ern\PeriodType $validityPeriod
     * @return self
     */
    public function setValidityPeriod(\DedexBundle\Entity\Ern\PeriodType $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as externalLink
     *
     * The Identifier which provides a
     *  communication link to the related external Resource.
     *
     * @return string
     */
    public function getExternalLink()
    {
        return $this->externalLink;
    }

    /**
     * Sets a new externalLink
     *
     * The Identifier which provides a
     *  communication link to the related external Resource.
     *
     * @param string $externalLink
     * @return self
     */
    public function setExternalLink($externalLink)
    {
        $this->externalLink = $externalLink;
        return $this;
    }

    /**
     * Adds as externallyLinkedResourceType
     *
     * A Composite containing details of the Type
     *  of a Resource pointed to by the ExternalResourceLink.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\ExternallyLinkedResourceTypeType $externallyLinkedResourceType
     */
    public function addToExternallyLinkedResourceType(\DedexBundle\Entity\Ern\ExternallyLinkedResourceTypeType $externallyLinkedResourceType)
    {
        $this->externallyLinkedResourceType[] = $externallyLinkedResourceType;
        return $this;
    }

    /**
     * isset externallyLinkedResourceType
     *
     * A Composite containing details of the Type
     *  of a Resource pointed to by the ExternalResourceLink.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExternallyLinkedResourceType($index)
    {
        return isset($this->externallyLinkedResourceType[$index]);
    }

    /**
     * unset externallyLinkedResourceType
     *
     * A Composite containing details of the Type
     *  of a Resource pointed to by the ExternalResourceLink.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExternallyLinkedResourceType($index)
    {
        unset($this->externallyLinkedResourceType[$index]);
    }

    /**
     * Gets as externallyLinkedResourceType
     *
     * A Composite containing details of the Type
     *  of a Resource pointed to by the ExternalResourceLink.
     *
     * @return \DedexBundle\Entity\Ern\ExternallyLinkedResourceTypeType[]
     */
    public function getExternallyLinkedResourceType()
    {
        return $this->externallyLinkedResourceType;
    }

    /**
     * Sets a new externallyLinkedResourceType
     *
     * A Composite containing details of the Type
     *  of a Resource pointed to by the ExternalResourceLink.
     *
     * @param \DedexBundle\Entity\Ern\ExternallyLinkedResourceTypeType[] $externallyLinkedResourceType
     * @return self
     */
    public function setExternallyLinkedResourceType(array $externallyLinkedResourceType)
    {
        $this->externallyLinkedResourceType = $externallyLinkedResourceType;
        return $this;
    }

    /**
     * Gets as fileFormat
     *
     * The FileFormat of the external
     *  Resource.
     *
     * @return string
     */
    public function getFileFormat()
    {
        return $this->fileFormat;
    }

    /**
     * Sets a new fileFormat
     *
     * The FileFormat of the external
     *  Resource.
     *
     * @param string $fileFormat
     * @return self
     */
    public function setFileFormat($fileFormat)
    {
        $this->fileFormat = $fileFormat;
        return $this;
    }


}

