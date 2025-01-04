<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing ResourceUsageType
 *
 * A ddex:Composite containing details of one or more Usages that govern a ddex:Resource.
 * XSD Type: ResourceUsage
 */
class ResourceUsageType
{
    /**
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @var string[] $dealResourceReference
     */
    private $dealResourceReference = [
        
    ];

    /**
     * A ddex:Composite containing the ddex:Types and number of Usages applicable to the ddex:Resource.
     *
     * @var \DedexBundle\Entity\DdexC\UsageType[] $usage
     */
    private $usage = [
        
    ];

    /**
     * Adds as dealResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @return self
     * @param string $dealResourceReference
     */
    public function addToDealResourceReference($dealResourceReference)
    {
        $this->dealResourceReference[] = $dealResourceReference;
        return $this;
    }

    /**
     * isset dealResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDealResourceReference($index)
    {
        return isset($this->dealResourceReference[$index]);
    }

    /**
     * unset dealResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDealResourceReference($index)
    {
        unset($this->dealResourceReference[$index]);
    }

    /**
     * Gets as dealResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @return string[]
     */
    public function getDealResourceReference()
    {
        return $this->dealResourceReference;
    }

    /**
     * Sets a new dealResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @param string $dealResourceReference
     * @return self
     */
    public function setDealResourceReference(array $dealResourceReference = null)
    {
        $this->dealResourceReference = $dealResourceReference;
        return $this;
    }

    /**
     * Adds as usage
     *
     * A ddex:Composite containing the ddex:Types and number of Usages applicable to the ddex:Resource.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\UsageType $usage
     */
    public function addToUsage(\DedexBundle\Entity\DdexC\UsageType $usage)
    {
        $this->usage[] = $usage;
        return $this;
    }

    /**
     * isset usage
     *
     * A ddex:Composite containing the ddex:Types and number of Usages applicable to the ddex:Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsage($index)
    {
        return isset($this->usage[$index]);
    }

    /**
     * unset usage
     *
     * A ddex:Composite containing the ddex:Types and number of Usages applicable to the ddex:Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsage($index)
    {
        unset($this->usage[$index]);
    }

    /**
     * Gets as usage
     *
     * A ddex:Composite containing the ddex:Types and number of Usages applicable to the ddex:Resource.
     *
     * @return \DedexBundle\Entity\DdexC\UsageType[]
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * A ddex:Composite containing the ddex:Types and number of Usages applicable to the ddex:Resource.
     *
     * @param \DedexBundle\Entity\DdexC\UsageType[] $usage
     * @return self
     */
    public function setUsage(array $usage)
    {
        $this->usage = $usage;
        return $this;
    }
}

