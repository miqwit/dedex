<?php

namespace DedexBundle\Entity\Ern411;

/**
 * Class representing ChapterListType
 *
 * A Composite containing details of one or more Chapters.
 * XSD Type: ChapterList
 */
class ChapterListType
{

    /**
     * The Language and script for the Elements of the ChapterList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of a Chapter contained in a Resource.
     *
     * @var \DedexBundle\Entity\Ern411\ChapterType[] $chapter
     */
    private $chapter = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the ChapterList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the ChapterList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Adds as chapter
     *
     * A Composite containing details of a Chapter contained in a Resource.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\ChapterType $chapter
     */
    public function addToChapter(\DedexBundle\Entity\Ern411\ChapterType $chapter)
    {
        $this->chapter[] = $chapter;
        return $this;
    }

    /**
     * isset chapter
     *
     * A Composite containing details of a Chapter contained in a Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChapter($index)
    {
        return isset($this->chapter[$index]);
    }

    /**
     * unset chapter
     *
     * A Composite containing details of a Chapter contained in a Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChapter($index)
    {
        unset($this->chapter[$index]);
    }

    /**
     * Gets as chapter
     *
     * A Composite containing details of a Chapter contained in a Resource.
     *
     * @return \DedexBundle\Entity\Ern411\ChapterType[]
     */
    public function getChapter()
    {
        return $this->chapter;
    }

    /**
     * Sets a new chapter
     *
     * A Composite containing details of a Chapter contained in a Resource.
     *
     * @param \DedexBundle\Entity\Ern411\ChapterType[] $chapter
     * @return self
     */
    public function setChapter(array $chapter)
    {
        $this->chapter = $chapter;
        return $this;
    }


}

