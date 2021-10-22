<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing TitleType
 *
 * A Composite containing details of a Title.
 * XSD Type: Title
 */
class TitleType
{

    /**
     * The Language and script for the Elements of the Title as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Type of the Title which defines its origin or the function it fulfils in relation to a Creation. Note: A Title may fulfil more than one role. Example: 'Help' may be both the OriginalTitle and the DisplayTitle for the well-known Beatles song. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $titleType
     */
    private $titleType = null;

    /**
     * The text of the Title.
     *
     * @var string $titleText
     */
    private $titleText = null;

    /**
     * A SubTitle of the Title, including Titles of Versions used to differentiate different versions of the same Title, as required by the GRid and ISRC ReferenceDescriptiveMetadataSets.
     *
     * @var string $subTitle
     */
    private $subTitle = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the Title as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the Title as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * A Type of the Title which defines its origin or the function it fulfils in relation to a Creation. Note: A Title may fulfil more than one role. Example: 'Help' may be both the OriginalTitle and the DisplayTitle for the well-known Beatles song. This is represented in an XML schema as an XML Attribute.
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
     * A Type of the Title which defines its origin or the function it fulfils in relation to a Creation. Note: A Title may fulfil more than one role. Example: 'Help' may be both the OriginalTitle and the DisplayTitle for the well-known Beatles song. This is represented in an XML schema as an XML Attribute.
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
     * The text of the Title.
     *
     * @return string
     */
    public function getTitleText()
    {
        return $this->titleText;
    }

    /**
     * Sets a new titleText
     *
     * The text of the Title.
     *
     * @param string $titleText
     * @return self
     */
    public function setTitleText($titleText)
    {
        $this->titleText = $titleText;
        return $this;
    }

    /**
     * Gets as subTitle
     *
     * A SubTitle of the Title, including Titles of Versions used to differentiate different versions of the same Title, as required by the GRid and ISRC ReferenceDescriptiveMetadataSets.
     *
     * @return string
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * Sets a new subTitle
     *
     * A SubTitle of the Title, including Titles of Versions used to differentiate different versions of the same Title, as required by the GRid and ISRC ReferenceDescriptiveMetadataSets.
     *
     * @param string $subTitle
     * @return self
     */
    public function setSubTitle($subTitle)
    {
        $this->subTitle = $subTitle;
        return $this;
    }


}

