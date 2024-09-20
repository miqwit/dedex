<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing GenreWithTerritoryType
 *
 * A Composite containing details of a Genre.
 * Explanatory Note: This Composite is named GenreWithTerritory to disambiguate it from the basic Genre Composite.
 * XSD Type: GenreWithTerritory
 */
class GenreWithTerritoryType
{
    /**
     * The Language and script for the Elements of the Genre as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Territory to which the Genre applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string $applicableTerritoryCode
     */
    private $applicableTerritoryCode = null;

    /**
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isDefault
     */
    private $isDefault = null;

    /**
     * A Description of a genre or style (such as Musical, literary or audio-visual) with which a Creation is associated.
     *
     * @var string $genreText
     */
    private $genreText = null;

    /**
     * A Description of a secondary genre or style with which a Creation is associated.
     *
     * @var string $subGenre
     */
    private $subGenre = null;

    /**
     * A Composite containing details of a Genre Category to which the Release belongs.
     *
     * @var \DedexBundle\Entity\Ern43\GenreCategoryType[] $genreCategory
     */
    private $genreCategory = [
        
    ];

    /**
     * A Composite containing details of a sub-genre of the Release.
     *
     * @var \DedexBundle\Entity\Ern43\SubGenreCategoryValueType[] $subGenreCategory
     */
    private $subGenreCategory = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the Genre as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The Language and script for the Elements of the Genre as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }

    /**
     * Gets as applicableTerritoryCode
     *
     * A Territory to which the Genre applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the Genre applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * Gets as isDefault
     *
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Sets a new isDefault
     *
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isDefault
     * @return self
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * Gets as genreText
     *
     * A Description of a genre or style (such as Musical, literary or audio-visual) with which a Creation is associated.
     *
     * @return string
     */
    public function getGenreText()
    {
        return $this->genreText;
    }

    /**
     * Sets a new genreText
     *
     * A Description of a genre or style (such as Musical, literary or audio-visual) with which a Creation is associated.
     *
     * @param string $genreText
     * @return self
     */
    public function setGenreText($genreText)
    {
        $this->genreText = $genreText;
        return $this;
    }

    /**
     * Gets as subGenre
     *
     * A Description of a secondary genre or style with which a Creation is associated.
     *
     * @return string
     */
    public function getSubGenre()
    {
        return $this->subGenre;
    }

    /**
     * Sets a new subGenre
     *
     * A Description of a secondary genre or style with which a Creation is associated.
     *
     * @param string $subGenre
     * @return self
     */
    public function setSubGenre($subGenre)
    {
        $this->subGenre = $subGenre;
        return $this;
    }

    /**
     * Adds as genreCategory
     *
     * A Composite containing details of a Genre Category to which the Release belongs.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\GenreCategoryType $genreCategory
     */
    public function addToGenreCategory(\DedexBundle\Entity\Ern43\GenreCategoryType $genreCategory)
    {
        $this->genreCategory[] = $genreCategory;
        return $this;
    }

    /**
     * isset genreCategory
     *
     * A Composite containing details of a Genre Category to which the Release belongs.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGenreCategory($index)
    {
        return isset($this->genreCategory[$index]);
    }

    /**
     * unset genreCategory
     *
     * A Composite containing details of a Genre Category to which the Release belongs.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGenreCategory($index)
    {
        unset($this->genreCategory[$index]);
    }

    /**
     * Gets as genreCategory
     *
     * A Composite containing details of a Genre Category to which the Release belongs.
     *
     * @return \DedexBundle\Entity\Ern43\GenreCategoryType[]
     */
    public function getGenreCategory()
    {
        return $this->genreCategory;
    }

    /**
     * Sets a new genreCategory
     *
     * A Composite containing details of a Genre Category to which the Release belongs.
     *
     * @param \DedexBundle\Entity\Ern43\GenreCategoryType[] $genreCategory
     * @return self
     */
    public function setGenreCategory(array $genreCategory = null)
    {
        $this->genreCategory = $genreCategory;
        return $this;
    }

    /**
     * Adds as value
     *
     * A Composite containing details of a sub-genre of the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\SubGenreCategoryValueType $value
     */
    public function addToSubGenreCategory(\DedexBundle\Entity\Ern43\SubGenreCategoryValueType $value)
    {
        $this->subGenreCategory[] = $value;
        return $this;
    }

    /**
     * isset subGenreCategory
     *
     * A Composite containing details of a sub-genre of the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubGenreCategory($index)
    {
        return isset($this->subGenreCategory[$index]);
    }

    /**
     * unset subGenreCategory
     *
     * A Composite containing details of a sub-genre of the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubGenreCategory($index)
    {
        unset($this->subGenreCategory[$index]);
    }

    /**
     * Gets as subGenreCategory
     *
     * A Composite containing details of a sub-genre of the Release.
     *
     * @return \DedexBundle\Entity\Ern43\SubGenreCategoryValueType[]
     */
    public function getSubGenreCategory()
    {
        return $this->subGenreCategory;
    }

    /**
     * Sets a new subGenreCategory
     *
     * A Composite containing details of a sub-genre of the Release.
     *
     * @param \DedexBundle\Entity\Ern43\SubGenreCategoryValueType[] $subGenreCategory
     * @return self
     */
    public function setSubGenreCategory(array $subGenreCategory = null)
    {
        $this->subGenreCategory = $subGenreCategory;
        return $this;
    }
}

