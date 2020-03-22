<?php

namespace DedexBundle\Entity\Ern;

/**
 * Class representing ReferenceTitleType
 *
 * A Composite containing details of a
 *  ReferenceTitle.
 * XSD Type: ReferenceTitle
 */
class ReferenceTitleType
{

    /**
     * The Language and script for the Elements of
     *  the ReferenceTitle as defined in IETF RfC 5646. The default is the same as indicated
     *  for the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing the text of the
     *  ReferenceTitle.
     *
     * @var \DedexBundle\Entity\Ern\TitleTextType $titleText
     */
    private $titleText = null;

    /**
     * A Composite containing details of a
     *  SubTitle of the ReferenceTitle, including Titles of Versions used to differentiate
     *  different versions of the same Title, as required by the GRid and ISRC
     *  ReferenceDescriptiveMetadataSets (where the SubTitle is called Version
     *  Title).
     *
     * @var \DedexBundle\Entity\Ern\SubTitleType $subTitle
     */
    private $subTitle = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of
     *  the ReferenceTitle as defined in IETF RfC 5646. The default is the same as indicated
     *  for the containing composite. Language and Script are provided as
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
     *  the ReferenceTitle as defined in IETF RfC 5646. The default is the same as indicated
     *  for the containing composite. Language and Script are provided as
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
     * Gets as titleText
     *
     * A Composite containing the text of the
     *  ReferenceTitle.
     *
     * @return \DedexBundle\Entity\Ern\TitleTextType
     */
    public function getTitleText()
    {
        return $this->titleText;
    }

    /**
     * Sets a new titleText
     *
     * A Composite containing the text of the
     *  ReferenceTitle.
     *
     * @param \DedexBundle\Entity\Ern\TitleTextType $titleText
     * @return self
     */
    public function setTitleText(\DedexBundle\Entity\Ern\TitleTextType $titleText)
    {
        $this->titleText = $titleText;
        return $this;
    }

    /**
     * Gets as subTitle
     *
     * A Composite containing details of a
     *  SubTitle of the ReferenceTitle, including Titles of Versions used to differentiate
     *  different versions of the same Title, as required by the GRid and ISRC
     *  ReferenceDescriptiveMetadataSets (where the SubTitle is called Version
     *  Title).
     *
     * @return \DedexBundle\Entity\Ern\SubTitleType
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * Sets a new subTitle
     *
     * A Composite containing details of a
     *  SubTitle of the ReferenceTitle, including Titles of Versions used to differentiate
     *  different versions of the same Title, as required by the GRid and ISRC
     *  ReferenceDescriptiveMetadataSets (where the SubTitle is called Version
     *  Title).
     *
     * @param \DedexBundle\Entity\Ern\SubTitleType $subTitle
     * @return self
     */
    public function setSubTitle(\DedexBundle\Entity\Ern\SubTitleType $subTitle)
    {
        $this->subTitle = $subTitle;
        return $this;
    }


}

