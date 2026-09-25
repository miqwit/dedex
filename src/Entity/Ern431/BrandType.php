<?php

namespace DedexBundle\Entity\Ern431;

/**
 * Class representing BrandType
 *
 * A Composite containing details of a Brand.
 * XSD Type: Brand
 */
class BrandType
{
    /**
     * The Identifier (specific to the Message) of the Brand. This is a LocalPartyAnchor starting with the letter P.
     *
     * @var string $brandReference
     */
    private $brandReference = null;

    /**
     * A Composite containing details of a ProprietaryId for the Brand.
     *
     * @var \DedexBundle\Entity\Ern431\ProprietaryIdentifierType[] $brandId
     */
    private $brandId = [
        
    ];

    /**
     * A Composite containing details of the BrandName(s).
     *
     * @var \DedexBundle\Entity\Ern431\PartyNameWithTerritoryType[] $brandName
     */
    private $brandName = [
        
    ];

    /**
     * Gets as brandReference
     *
     * The Identifier (specific to the Message) of the Brand. This is a LocalPartyAnchor starting with the letter P.
     *
     * @return string
     */
    public function getBrandReference()
    {
        return $this->brandReference;
    }

    /**
     * Sets a new brandReference
     *
     * The Identifier (specific to the Message) of the Brand. This is a LocalPartyAnchor starting with the letter P.
     *
     * @param string $brandReference
     * @return self
     */
    public function setBrandReference($brandReference)
    {
        $this->brandReference = $brandReference;
        return $this;
    }

    /**
     * Adds as brandId
     *
     * A Composite containing details of a ProprietaryId for the Brand.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\ProprietaryIdentifierType $brandId
     */
    public function addToBrandId(\DedexBundle\Entity\Ern431\ProprietaryIdentifierType $brandId)
    {
        $this->brandId[] = $brandId;
        return $this;
    }

    /**
     * isset brandId
     *
     * A Composite containing details of a ProprietaryId for the Brand.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBrandId($index)
    {
        return isset($this->brandId[$index]);
    }

    /**
     * unset brandId
     *
     * A Composite containing details of a ProprietaryId for the Brand.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBrandId($index)
    {
        unset($this->brandId[$index]);
    }

    /**
     * Gets as brandId
     *
     * A Composite containing details of a ProprietaryId for the Brand.
     *
     * @return \DedexBundle\Entity\Ern431\ProprietaryIdentifierType[]
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * Sets a new brandId
     *
     * A Composite containing details of a ProprietaryId for the Brand.
     *
     * @param \DedexBundle\Entity\Ern431\ProprietaryIdentifierType[] $brandId
     * @return self
     */
    public function setBrandId(?array $brandId = null)
    {
        $this->brandId = $brandId;
        return $this;
    }

    /**
     * Adds as brandName
     *
     * A Composite containing details of the BrandName(s).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\PartyNameWithTerritoryType $brandName
     */
    public function addToBrandName(\DedexBundle\Entity\Ern431\PartyNameWithTerritoryType $brandName)
    {
        $this->brandName[] = $brandName;
        return $this;
    }

    /**
     * isset brandName
     *
     * A Composite containing details of the BrandName(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBrandName($index)
    {
        return isset($this->brandName[$index]);
    }

    /**
     * unset brandName
     *
     * A Composite containing details of the BrandName(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBrandName($index)
    {
        unset($this->brandName[$index]);
    }

    /**
     * Gets as brandName
     *
     * A Composite containing details of the BrandName(s).
     *
     * @return \DedexBundle\Entity\Ern431\PartyNameWithTerritoryType[]
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * Sets a new brandName
     *
     * A Composite containing details of the BrandName(s).
     *
     * @param \DedexBundle\Entity\Ern431\PartyNameWithTerritoryType[] $brandName
     * @return self
     */
    public function setBrandName(?array $brandName = null)
    {
        $this->brandName = $brandName;
        return $this;
    }
}

