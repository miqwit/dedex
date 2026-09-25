<?php

namespace DedexBundle\Entity\Ern431;

/**
 * Class representing GenreCategoryType
 *
 * A Composite containing details of a Genre Category.
 * XSD Type: GenreCategory
 */
class GenreCategoryType
{
    /**
     * A Territory to which the Genre Category applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $applicableTerritoryCode
     */
    private $applicableTerritoryCode = null;

    /**
     * A Composite containing details of a Genre Category value.
     *
     * @var \DedexBundle\Entity\Ern431\GenreCategoryValueType $value
     */
    private $value = null;

    /**
     * A Composite containing a Description of the Genre Category.
     *
     * @var \DedexBundle\Entity\Ern431\TextWithoutTerritoryType[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as applicableTerritoryCode
     *
     * A Territory to which the Genre Category applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard. This is represented in an XML schema as an XML Attribute.
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
     * A Territory to which the Genre Category applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard. This is represented in an XML schema as an XML Attribute.
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
     * Gets as value
     *
     * A Composite containing details of a Genre Category value.
     *
     * @return \DedexBundle\Entity\Ern431\GenreCategoryValueType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * A Composite containing details of a Genre Category value.
     *
     * @param \DedexBundle\Entity\Ern431\GenreCategoryValueType $value
     * @return self
     */
    public function setValue(\DedexBundle\Entity\Ern431\GenreCategoryValueType $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Adds as description
     *
     * A Composite containing a Description of the Genre Category.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\TextWithoutTerritoryType $description
     */
    public function addToDescription(\DedexBundle\Entity\Ern431\TextWithoutTerritoryType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * A Composite containing a Description of the Genre Category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * A Composite containing a Description of the Genre Category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * A Composite containing a Description of the Genre Category.
     *
     * @return \DedexBundle\Entity\Ern431\TextWithoutTerritoryType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A Composite containing a Description of the Genre Category.
     *
     * @param \DedexBundle\Entity\Ern431\TextWithoutTerritoryType[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

