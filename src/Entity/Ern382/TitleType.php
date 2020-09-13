<?php

namespace DedexBundle\Entity\Ern382;

/**
 * Class representing TitleType
 *
 * A Composite containing details of a
 *  Title.
 * XSD Type: Title
 */
class TitleType
{

    /**
     * The Language and script for the Elements of
     *  the Title as defined in IETF RfC 5646. The default is the same as indicated for the
     *  containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Type of the Title which defines its origin
     *  or the function it fulfils in relation to a Creation. Note: A Title may fulfil more
     *  than one role. Example: 'Help' may be both the OriginalTitle and the DisplayTitle for
     *  the well-known Beatles song. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $titleType
     */
    private $titleType = null;

    /**
     * A Composite containing the text of the
     *  Title.
     *
     * @var \DedexBundle\Entity\Ern382\TitleTextType $titleText
     */
    private $titleText = null;

    /**
     * A Composite containing details of a
     *  SubTitle of the Title, including Titles of Versions used to differentiate
     *  different versions of the same Title, as required by the GRid and ISRC
     *  ReferenceDescriptiveMetadataSets.
     *
     * @var \DedexBundle\Entity\Ern382\TypedSubTitleType[] $subTitle
     */
    private $subTitle = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of
     *  the Title as defined in IETF RfC 5646. The default is the same as indicated for the
     *  containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
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
     * The Language and script for the Elements of
     *  the Title as defined in IETF RfC 5646. The default is the same as indicated for the
     *  containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
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
     * Gets as titleType
     *
     * A Type of the Title which defines its origin
     *  or the function it fulfils in relation to a Creation. Note: A Title may fulfil more
     *  than one role. Example: 'Help' may be both the OriginalTitle and the DisplayTitle for
     *  the well-known Beatles song. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @return string
     */
    public function getTitleType()
    {
        return $this->titleType;
    }

    /**
     * Sets a new titleType
     *
     * A Type of the Title which defines its origin
     *  or the function it fulfils in relation to a Creation. Note: A Title may fulfil more
     *  than one role. Example: 'Help' may be both the OriginalTitle and the DisplayTitle for
     *  the well-known Beatles song. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @param string $titleType
     * @return self
     */
    public function setTitleType($titleType)
    {
        $this->titleType = $titleType;
        return $this;
    }

    /**
     * Gets as titleText
     *
     * A Composite containing the text of the
     *  Title.
     *
     * @return \DedexBundle\Entity\Ern382\TitleTextType
     */
    public function getTitleText()
    {
        return $this->titleText;
    }

    /**
     * Sets a new titleText
     *
     * A Composite containing the text of the
     *  Title.
     *
     * @param \DedexBundle\Entity\Ern382\TitleTextType $titleText
     * @return self
     */
    public function setTitleText(\DedexBundle\Entity\Ern382\TitleTextType $titleText)
    {
        $this->titleText = $titleText;
        return $this;
    }

    /**
     * Adds as subTitle
     *
     * A Composite containing details of a
     *  SubTitle of the Title, including Titles of Versions used to differentiate
     *  different versions of the same Title, as required by the GRid and ISRC
     *  ReferenceDescriptiveMetadataSets.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\TypedSubTitleType $subTitle
     */
    public function addToSubTitle(\DedexBundle\Entity\Ern382\TypedSubTitleType $subTitle)
    {
        $this->subTitle[] = $subTitle;
        return $this;
    }

    /**
     * isset subTitle
     *
     * A Composite containing details of a
     *  SubTitle of the Title, including Titles of Versions used to differentiate
     *  different versions of the same Title, as required by the GRid and ISRC
     *  ReferenceDescriptiveMetadataSets.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubTitle($index)
    {
        return isset($this->subTitle[$index]);
    }

    /**
     * unset subTitle
     *
     * A Composite containing details of a
     *  SubTitle of the Title, including Titles of Versions used to differentiate
     *  different versions of the same Title, as required by the GRid and ISRC
     *  ReferenceDescriptiveMetadataSets.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubTitle($index)
    {
        unset($this->subTitle[$index]);
    }

    /**
     * Gets as subTitle
     *
     * A Composite containing details of a
     *  SubTitle of the Title, including Titles of Versions used to differentiate
     *  different versions of the same Title, as required by the GRid and ISRC
     *  ReferenceDescriptiveMetadataSets.
     *
     * @return \DedexBundle\Entity\Ern382\TypedSubTitleType[]
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * Sets a new subTitle
     *
     * A Composite containing details of a
     *  SubTitle of the Title, including Titles of Versions used to differentiate
     *  different versions of the same Title, as required by the GRid and ISRC
     *  ReferenceDescriptiveMetadataSets.
     *
     * @param \DedexBundle\Entity\Ern382\TypedSubTitleType[] $subTitle
     * @return self
     */
    public function setSubTitle(array $subTitle)
    {
        $this->subTitle = $subTitle;
        return $this;
    }


}

