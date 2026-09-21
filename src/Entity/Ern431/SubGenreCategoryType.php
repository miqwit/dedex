<?php

namespace DedexBundle\Entity\Ern431;

/**
 * Class representing SubGenreCategoryType
 *
 * A Composite containing details of a SubGenre within the classical genre.
 * XSD Type: SubGenreCategory
 */
class SubGenreCategoryType
{
    /**
     * The text of the SubGenre.
     *
     * @var \DedexBundle\Entity\Ern431\SubGenreCategoryValueType[] $value
     */
    private $value = [
        
    ];

    /**
     * A Composite containing a Description of the SubGenre Category.
     *
     * @var \DedexBundle\Entity\Ern431\TextWithoutTerritoryType[] $description
     */
    private $description = [
        
    ];

    /**
     * Adds as value
     *
     * The text of the SubGenre.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\SubGenreCategoryValueType $value
     */
    public function addToValue(\DedexBundle\Entity\Ern431\SubGenreCategoryValueType $value)
    {
        $this->value[] = $value;
        return $this;
    }

    /**
     * isset value
     *
     * The text of the SubGenre.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValue($index)
    {
        return isset($this->value[$index]);
    }

    /**
     * unset value
     *
     * The text of the SubGenre.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValue($index)
    {
        unset($this->value[$index]);
    }

    /**
     * Gets as value
     *
     * The text of the SubGenre.
     *
     * @return \DedexBundle\Entity\Ern431\SubGenreCategoryValueType[]
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The text of the SubGenre.
     *
     * @param \DedexBundle\Entity\Ern431\SubGenreCategoryValueType[] $value
     * @return self
     */
    public function setValue(array $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Adds as description
     *
     * A Composite containing a Description of the SubGenre Category.
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
     * A Composite containing a Description of the SubGenre Category.
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
     * A Composite containing a Description of the SubGenre Category.
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
     * A Composite containing a Description of the SubGenre Category.
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
     * A Composite containing a Description of the SubGenre Category.
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

