<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing ChapterType
 *
 * A Composite containing details of a Chapter. Chapters referenced from Video Resources are of ChapterType VideoChapter. Chapters referenced from a Release composite are of ChapterType Series, Season or Episode.
 * XSD Type: Chapter
 */
class ChapterType
{
    /**
     * The Language and script for the Elements of the Collection as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The Identifier (specific to the Message) of the Chapter within the Release which contains it. This is a LocalCollectionAnchor starting with the letter X.
     *
     * @var string $chapterReference
     */
    private $chapterReference = null;

    /**
     * A Composite containing details of an Identifier of the Chapter.
     *
     * @var \DedexBundle\Entity\Ern43\ProprietaryIdType[] $chapterId
     */
    private $chapterId = [
        
    ];

    /**
     * A Composite containing details of a Title of the Chapter as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     *
     * @var \DedexBundle\Entity\Ern43\DisplayTitleTextType[] $displayTitleText
     */
    private $displayTitleText = [
        
    ];

    /**
     * A Composite containing details of a Title of the Chapter as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @var \DedexBundle\Entity\Ern43\DisplayTitleType[] $displayTitle
     */
    private $displayTitle = [
        
    ];

    /**
     * A Composite containing details of an AdditionalTitle of the Chapter. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @var \DedexBundle\Entity\Ern43\AdditionalTitleType[] $additionalTitle
     */
    private $additionalTitle = [
        
    ];

    /**
     * The number indicating the order of the Chapter within all Chapters at this level. The default value is 1, and the value must be incremented by 1 for each Chapter occurring at a particular level.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Composite containing details of a Contributor to the Chapter. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @var \DedexBundle\Entity\Ern43\ContributorType[] $contributor
     */
    private $contributor = [
        
    ];

    /**
     * A Composite containing details of a Character in the Chapter. A Character may be described through Name, Identifier and Roles. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @var \DedexBundle\Entity\Ern43\CharacterType[] $character
     */
    private $character = [
        
    ];

    /**
     * A Reference for an Image (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @var string $representativeImageReference
     */
    private $representativeImageReference = null;

    /**
     * The start time of the Chapter, measured from the start of the Resource that contains it (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $startTime
     */
    private $startTime = null;

    /**
     * The Duration of the use of the Chapter (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The end time of the Chapter, measured from the start of the Resource that contains it (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $endTime
     */
    private $endTime = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the Collection as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the Collection as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as chapterReference
     *
     * The Identifier (specific to the Message) of the Chapter within the Release which contains it. This is a LocalCollectionAnchor starting with the letter X.
     *
     * @return string
     */
    public function getChapterReference()
    {
        return $this->chapterReference;
    }

    /**
     * Sets a new chapterReference
     *
     * The Identifier (specific to the Message) of the Chapter within the Release which contains it. This is a LocalCollectionAnchor starting with the letter X.
     *
     * @param string $chapterReference
     * @return self
     */
    public function setChapterReference($chapterReference)
    {
        $this->chapterReference = $chapterReference;
        return $this;
    }

    /**
     * Adds as chapterId
     *
     * A Composite containing details of an Identifier of the Chapter.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\ProprietaryIdType $chapterId
     */
    public function addToChapterId(\DedexBundle\Entity\Ern43\ProprietaryIdType $chapterId)
    {
        $this->chapterId[] = $chapterId;
        return $this;
    }

    /**
     * isset chapterId
     *
     * A Composite containing details of an Identifier of the Chapter.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChapterId($index)
    {
        return isset($this->chapterId[$index]);
    }

    /**
     * unset chapterId
     *
     * A Composite containing details of an Identifier of the Chapter.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChapterId($index)
    {
        unset($this->chapterId[$index]);
    }

    /**
     * Gets as chapterId
     *
     * A Composite containing details of an Identifier of the Chapter.
     *
     * @return \DedexBundle\Entity\Ern43\ProprietaryIdType[]
     */
    public function getChapterId()
    {
        return $this->chapterId;
    }

    /**
     * Sets a new chapterId
     *
     * A Composite containing details of an Identifier of the Chapter.
     *
     * @param \DedexBundle\Entity\Ern43\ProprietaryIdType[] $chapterId
     * @return self
     */
    public function setChapterId(array $chapterId = null)
    {
        $this->chapterId = $chapterId;
        return $this;
    }

    /**
     * Adds as displayTitleText
     *
     * A Composite containing details of a Title of the Chapter as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\DisplayTitleTextType $displayTitleText
     */
    public function addToDisplayTitleText(\DedexBundle\Entity\Ern43\DisplayTitleTextType $displayTitleText)
    {
        $this->displayTitleText[] = $displayTitleText;
        return $this;
    }

    /**
     * isset displayTitleText
     *
     * A Composite containing details of a Title of the Chapter as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayTitleText($index)
    {
        return isset($this->displayTitleText[$index]);
    }

    /**
     * unset displayTitleText
     *
     * A Composite containing details of a Title of the Chapter as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayTitleText($index)
    {
        unset($this->displayTitleText[$index]);
    }

    /**
     * Gets as displayTitleText
     *
     * A Composite containing details of a Title of the Chapter as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     *
     * @return \DedexBundle\Entity\Ern43\DisplayTitleTextType[]
     */
    public function getDisplayTitleText()
    {
        return $this->displayTitleText;
    }

    /**
     * Sets a new displayTitleText
     *
     * A Composite containing details of a Title of the Chapter as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
     *
     * @param \DedexBundle\Entity\Ern43\DisplayTitleTextType[] $displayTitleText
     * @return self
     */
    public function setDisplayTitleText(array $displayTitleText = null)
    {
        $this->displayTitleText = $displayTitleText;
        return $this;
    }

    /**
     * Adds as displayTitle
     *
     * A Composite containing details of a Title of the Chapter as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\DisplayTitleType $displayTitle
     */
    public function addToDisplayTitle(\DedexBundle\Entity\Ern43\DisplayTitleType $displayTitle)
    {
        $this->displayTitle[] = $displayTitle;
        return $this;
    }

    /**
     * isset displayTitle
     *
     * A Composite containing details of a Title of the Chapter as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayTitle($index)
    {
        return isset($this->displayTitle[$index]);
    }

    /**
     * unset displayTitle
     *
     * A Composite containing details of a Title of the Chapter as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayTitle($index)
    {
        unset($this->displayTitle[$index]);
    }

    /**
     * Gets as displayTitle
     *
     * A Composite containing details of a Title of the Chapter as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @return \DedexBundle\Entity\Ern43\DisplayTitleType[]
     */
    public function getDisplayTitle()
    {
        return $this->displayTitle;
    }

    /**
     * Sets a new displayTitle
     *
     * A Composite containing details of a Title of the Chapter as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @param \DedexBundle\Entity\Ern43\DisplayTitleType[] $displayTitle
     * @return self
     */
    public function setDisplayTitle(array $displayTitle = null)
    {
        $this->displayTitle = $displayTitle;
        return $this;
    }

    /**
     * Adds as additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the Chapter. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\AdditionalTitleType $additionalTitle
     */
    public function addToAdditionalTitle(\DedexBundle\Entity\Ern43\AdditionalTitleType $additionalTitle)
    {
        $this->additionalTitle[] = $additionalTitle;
        return $this;
    }

    /**
     * isset additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the Chapter. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalTitle($index)
    {
        return isset($this->additionalTitle[$index]);
    }

    /**
     * unset additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the Chapter. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalTitle($index)
    {
        unset($this->additionalTitle[$index]);
    }

    /**
     * Gets as additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the Chapter. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return \DedexBundle\Entity\Ern43\AdditionalTitleType[]
     */
    public function getAdditionalTitle()
    {
        return $this->additionalTitle;
    }

    /**
     * Sets a new additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the Chapter. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param \DedexBundle\Entity\Ern43\AdditionalTitleType[] $additionalTitle
     * @return self
     */
    public function setAdditionalTitle(array $additionalTitle = null)
    {
        $this->additionalTitle = $additionalTitle;
        return $this;
    }

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the Chapter within all Chapters at this level. The default value is 1, and the value must be incremented by 1 for each Chapter occurring at a particular level.
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * The number indicating the order of the Chapter within all Chapters at this level. The default value is 1, and the value must be incremented by 1 for each Chapter occurring at a particular level.
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Adds as contributor
     *
     * A Composite containing details of a Contributor to the Chapter. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\ContributorType $contributor
     */
    public function addToContributor(\DedexBundle\Entity\Ern43\ContributorType $contributor)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * isset contributor
     *
     * A Composite containing details of a Contributor to the Chapter. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContributor($index)
    {
        return isset($this->contributor[$index]);
    }

    /**
     * unset contributor
     *
     * A Composite containing details of a Contributor to the Chapter. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContributor($index)
    {
        unset($this->contributor[$index]);
    }

    /**
     * Gets as contributor
     *
     * A Composite containing details of a Contributor to the Chapter. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return \DedexBundle\Entity\Ern43\ContributorType[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Sets a new contributor
     *
     * A Composite containing details of a Contributor to the Chapter. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param \DedexBundle\Entity\Ern43\ContributorType[] $contributor
     * @return self
     */
    public function setContributor(array $contributor = null)
    {
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * Adds as character
     *
     * A Composite containing details of a Character in the Chapter. A Character may be described through Name, Identifier and Roles. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\CharacterType $character
     */
    public function addToCharacter(\DedexBundle\Entity\Ern43\CharacterType $character)
    {
        $this->character[] = $character;
        return $this;
    }

    /**
     * isset character
     *
     * A Composite containing details of a Character in the Chapter. A Character may be described through Name, Identifier and Roles. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharacter($index)
    {
        return isset($this->character[$index]);
    }

    /**
     * unset character
     *
     * A Composite containing details of a Character in the Chapter. A Character may be described through Name, Identifier and Roles. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharacter($index)
    {
        unset($this->character[$index]);
    }

    /**
     * Gets as character
     *
     * A Composite containing details of a Character in the Chapter. A Character may be described through Name, Identifier and Roles. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return \DedexBundle\Entity\Ern43\CharacterType[]
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * Sets a new character
     *
     * A Composite containing details of a Character in the Chapter. A Character may be described through Name, Identifier and Roles. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param \DedexBundle\Entity\Ern43\CharacterType[] $character
     * @return self
     */
    public function setCharacter(array $character = null)
    {
        $this->character = $character;
        return $this;
    }

    /**
     * Gets as representativeImageReference
     *
     * A Reference for an Image (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @return string
     */
    public function getRepresentativeImageReference()
    {
        return $this->representativeImageReference;
    }

    /**
     * Sets a new representativeImageReference
     *
     * A Reference for an Image (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @param string $representativeImageReference
     * @return self
     */
    public function setRepresentativeImageReference($representativeImageReference)
    {
        $this->representativeImageReference = $representativeImageReference;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * The start time of the Chapter, measured from the start of the Resource that contains it (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @return \DateInterval
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * The start time of the Chapter, measured from the start of the Resource that contains it (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @param \DateInterval $startTime
     * @return self
     */
    public function setStartTime(?\DateInterval $startTime = null)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The Duration of the use of the Chapter (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The Duration of the use of the Chapter (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(?\DateInterval $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * The end time of the Chapter, measured from the start of the Resource that contains it (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @return \DateInterval
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * The end time of the Chapter, measured from the start of the Resource that contains it (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @param \DateInterval $endTime
     * @return self
     */
    public function setEndTime(?\DateInterval $endTime = null)
    {
        $this->endTime = $endTime;
        return $this;
    }
}

