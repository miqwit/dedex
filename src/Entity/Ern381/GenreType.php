<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing GenreType
 *
 * A Composite containing details of a Genre.
 * XSD Type: Genre
 */
class GenreType
{
    /**
     * The Language and script for the Elements of the Genre as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing a Description of a genre or style (such as Musical, literary or audio-visual) with which a Creation is associated.
     *
     * @var \DedexBundle\Entity\Ern381\DescriptionType $genreText
     */
    private $genreText = null;

    /**
     * A Composite containing a Description of a secondary genre or style with which a Creation is associated.
     *
     * @var \DedexBundle\Entity\Ern381\DescriptionType $subGenre
     */
    private $subGenre = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the Genre as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the Genre as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as genreText
     *
     * A Composite containing a Description of a genre or style (such as Musical, literary or audio-visual) with which a Creation is associated.
     *
     * @return \DedexBundle\Entity\Ern381\DescriptionType
     */
    public function getGenreText()
    {
        return $this->genreText;
    }

    /**
     * Sets a new genreText
     *
     * A Composite containing a Description of a genre or style (such as Musical, literary or audio-visual) with which a Creation is associated.
     *
     * @param \DedexBundle\Entity\Ern381\DescriptionType $genreText
     * @return self
     */
    public function setGenreText(\DedexBundle\Entity\Ern381\DescriptionType $genreText)
    {
        $this->genreText = $genreText;
        return $this;
    }

    /**
     * Gets as subGenre
     *
     * A Composite containing a Description of a secondary genre or style with which a Creation is associated.
     *
     * @return \DedexBundle\Entity\Ern381\DescriptionType
     */
    public function getSubGenre()
    {
        return $this->subGenre;
    }

    /**
     * Sets a new subGenre
     *
     * A Composite containing a Description of a secondary genre or style with which a Creation is associated.
     *
     * @param \DedexBundle\Entity\Ern381\DescriptionType $subGenre
     * @return self
     */
    public function setSubGenre(?\DedexBundle\Entity\Ern381\DescriptionType $subGenre = null)
    {
        $this->subGenre = $subGenre;
        return $this;
    }
}

