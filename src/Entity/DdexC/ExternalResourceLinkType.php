<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing ExternalResourceLinkType
 *
 * A ddex:Composite containing details of promotional or other material in digital form related to a ddex:Release.
 * XSD Type: ExternalResourceLink
 */
class ExternalResourceLinkType
{
    /**
     * A ddex:URL of the linked external ddex:Resource.
     *
     * @var string[] $uRL
     */
    private $uRL = [
        
    ];

    /**
     * A ddex:Composite containing details about the ddex:Period of ddex:Time during which the ddexC:ExternalResourceLink is active.
     *
     * @var \DedexBundle\Entity\DdexC\PeriodType $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * The ddex:Identifier which provides a communication link to the related external ddex:Resource.
     *
     * @var string $externalLink
     */
    private $externalLink = null;

    /**
     * A ddex:Composite containing details of the ddex:Type of a ddex:Resource pointed to by the ddexC:ExternalResourceLink.
     *
     * @var \DedexBundle\Entity\DdexC\ExternallyLinkedResourceTypeType[] $externallyLinkedResourceType
     */
    private $externallyLinkedResourceType = [
        
    ];

    /**
     * The ddex:FileFormat of the external ddex:Resource.
     *
     * @var string $fileFormat
     */
    private $fileFormat = null;

    /**
     * Adds as uRL
     *
     * A ddex:URL of the linked external ddex:Resource.
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
     * A ddex:URL of the linked external ddex:Resource.
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
     * A ddex:URL of the linked external ddex:Resource.
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
     * A ddex:URL of the linked external ddex:Resource.
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
     * A ddex:URL of the linked external ddex:Resource.
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
     * A ddex:Composite containing details about the ddex:Period of ddex:Time during which the ddexC:ExternalResourceLink is active.
     *
     * @return \DedexBundle\Entity\DdexC\PeriodType
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * A ddex:Composite containing details about the ddex:Period of ddex:Time during which the ddexC:ExternalResourceLink is active.
     *
     * @param \DedexBundle\Entity\DdexC\PeriodType $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?\DedexBundle\Entity\DdexC\PeriodType $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as externalLink
     *
     * The ddex:Identifier which provides a communication link to the related external ddex:Resource.
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
     * The ddex:Identifier which provides a communication link to the related external ddex:Resource.
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
     * A ddex:Composite containing details of the ddex:Type of a ddex:Resource pointed to by the ddexC:ExternalResourceLink.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ExternallyLinkedResourceTypeType $externallyLinkedResourceType
     */
    public function addToExternallyLinkedResourceType(\DedexBundle\Entity\DdexC\ExternallyLinkedResourceTypeType $externallyLinkedResourceType)
    {
        $this->externallyLinkedResourceType[] = $externallyLinkedResourceType;
        return $this;
    }

    /**
     * isset externallyLinkedResourceType
     *
     * A ddex:Composite containing details of the ddex:Type of a ddex:Resource pointed to by the ddexC:ExternalResourceLink.
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
     * A ddex:Composite containing details of the ddex:Type of a ddex:Resource pointed to by the ddexC:ExternalResourceLink.
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
     * A ddex:Composite containing details of the ddex:Type of a ddex:Resource pointed to by the ddexC:ExternalResourceLink.
     *
     * @return \DedexBundle\Entity\DdexC\ExternallyLinkedResourceTypeType[]
     */
    public function getExternallyLinkedResourceType()
    {
        return $this->externallyLinkedResourceType;
    }

    /**
     * Sets a new externallyLinkedResourceType
     *
     * A ddex:Composite containing details of the ddex:Type of a ddex:Resource pointed to by the ddexC:ExternalResourceLink.
     *
     * @param \DedexBundle\Entity\DdexC\ExternallyLinkedResourceTypeType[] $externallyLinkedResourceType
     * @return self
     */
    public function setExternallyLinkedResourceType(array $externallyLinkedResourceType = null)
    {
        $this->externallyLinkedResourceType = $externallyLinkedResourceType;
        return $this;
    }

    /**
     * Gets as fileFormat
     *
     * The ddex:FileFormat of the external ddex:Resource.
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
     * The ddex:FileFormat of the external ddex:Resource.
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

