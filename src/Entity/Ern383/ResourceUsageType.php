<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing ResourceUsageType
 *
 * A Composite containing details of one or more
 *  Usages that govern a Resource.
 * XSD Type: ResourceUsage
 */
class ResourceUsageType
{
    /**
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
     *
     * @var string[] $dealResourceReference
     */
    private $dealResourceReference = [
        
    ];

    /**
     * A Composite containing the Types and
     *  number of Usages applicable to the Resource.
     *
     * @var \DedexBundle\Entity\Ern383\UsageType[] $usage
     */
    private $usage = [
        
    ];

    /**
     * Adds as dealResourceReference
     *
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
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
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
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
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
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
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
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
     * A Reference for a Resource (specific to
     *  this Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
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
     * A Composite containing the Types and
     *  number of Usages applicable to the Resource.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\UsageType $usage
     */
    public function addToUsage(\DedexBundle\Entity\Ern383\UsageType $usage)
    {
        $this->usage[] = $usage;
        return $this;
    }

    /**
     * isset usage
     *
     * A Composite containing the Types and
     *  number of Usages applicable to the Resource.
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
     * A Composite containing the Types and
     *  number of Usages applicable to the Resource.
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
     * A Composite containing the Types and
     *  number of Usages applicable to the Resource.
     *
     * @return \DedexBundle\Entity\Ern383\UsageType[]
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * A Composite containing the Types and
     *  number of Usages applicable to the Resource.
     *
     * @param \DedexBundle\Entity\Ern383\UsageType[] $usage
     * @return self
     */
    public function setUsage(array $usage)
    {
        $this->usage = $usage;
        return $this;
    }
}

