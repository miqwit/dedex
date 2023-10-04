<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing TitleType
 *
 * A ddex:Composite containing details of a ddex:Title.
 * XSD Type: Title
 */
class TitleType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ddexC:Title as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Type of the ddexC:Title which defines its origin or the function it fulfils in relation to a ddex:Creation. Note: A ddexC:Title may fulfil more than one role. Example: 'Help' may be both the ddex:OriginalTitle and the ddex:DisplayTitle for the well-known Beatles song. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $titleType
     */
    private $titleType = null;

    /**
     * A ddex:Composite containing the text of the ddexC:Title.
     *
     * @var \DedexBundle\Entity\DdexC\TitleTextType $titleText
     */
    private $titleText = null;

    /**
     * A ddex:Composite containing details of a ddex:SubTitle of the ddexC:Title, including ddex:Titles of ddex:Versions used to differentiate different versions of the same ddex:Title, as required by the ddex:GRid and ddex:ISRC ddex:ReferenceDescriptiveMetadataSets.
     *
     * @var \DedexBundle\Entity\DdexC\TypedSubTitleType[] $subTitle
     */
    private $subTitle = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddexC:Title as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ddexC:Title as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Type of the ddexC:Title which defines its origin or the function it fulfils in relation to a ddex:Creation. Note: A ddexC:Title may fulfil more than one role. Example: 'Help' may be both the ddex:OriginalTitle and the ddex:DisplayTitle for the well-known Beatles song. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Type of the ddexC:Title which defines its origin or the function it fulfils in relation to a ddex:Creation. Note: A ddexC:Title may fulfil more than one role. Example: 'Help' may be both the ddex:OriginalTitle and the ddex:DisplayTitle for the well-known Beatles song. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Composite containing the text of the ddexC:Title.
     *
     * @return \DedexBundle\Entity\DdexC\TitleTextType
     */
    public function getTitleText()
    {
        return $this->titleText;
    }

    /**
     * Sets a new titleText
     *
     * A ddex:Composite containing the text of the ddexC:Title.
     *
     * @param \DedexBundle\Entity\DdexC\TitleTextType $titleText
     * @return self
     */
    public function setTitleText(\DedexBundle\Entity\DdexC\TitleTextType $titleText)
    {
        $this->titleText = $titleText;
        return $this;
    }

    /**
     * Adds as subTitle
     *
     * A ddex:Composite containing details of a ddex:SubTitle of the ddexC:Title, including ddex:Titles of ddex:Versions used to differentiate different versions of the same ddex:Title, as required by the ddex:GRid and ddex:ISRC ddex:ReferenceDescriptiveMetadataSets.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\TypedSubTitleType $subTitle
     */
    public function addToSubTitle(\DedexBundle\Entity\DdexC\TypedSubTitleType $subTitle)
    {
        $this->subTitle[] = $subTitle;
        return $this;
    }

    /**
     * isset subTitle
     *
     * A ddex:Composite containing details of a ddex:SubTitle of the ddexC:Title, including ddex:Titles of ddex:Versions used to differentiate different versions of the same ddex:Title, as required by the ddex:GRid and ddex:ISRC ddex:ReferenceDescriptiveMetadataSets.
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
     * A ddex:Composite containing details of a ddex:SubTitle of the ddexC:Title, including ddex:Titles of ddex:Versions used to differentiate different versions of the same ddex:Title, as required by the ddex:GRid and ddex:ISRC ddex:ReferenceDescriptiveMetadataSets.
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
     * A ddex:Composite containing details of a ddex:SubTitle of the ddexC:Title, including ddex:Titles of ddex:Versions used to differentiate different versions of the same ddex:Title, as required by the ddex:GRid and ddex:ISRC ddex:ReferenceDescriptiveMetadataSets.
     *
     * @return \DedexBundle\Entity\DdexC\TypedSubTitleType[]
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * Sets a new subTitle
     *
     * A ddex:Composite containing details of a ddex:SubTitle of the ddexC:Title, including ddex:Titles of ddex:Versions used to differentiate different versions of the same ddex:Title, as required by the ddex:GRid and ddex:ISRC ddex:ReferenceDescriptiveMetadataSets.
     *
     * @param \DedexBundle\Entity\DdexC\TypedSubTitleType[] $subTitle
     * @return self
     */
    public function setSubTitle(array $subTitle = null)
    {
        $this->subTitle = $subTitle;
        return $this;
    }
}

