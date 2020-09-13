<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing DetailedCueType
 *
 * A Composite containing details of a Cue.
 * XSD Type: DetailedCue
 */
class DetailedCueType
{

    /**
     * A Composite containing details of a UseType of the Cue. It can be expected that this element will be contractually mandatory in many communications of cue sheets to music rights societies.
     *
     * @var \DedexBundle\Entity\Ern\CueUseTypeType $cueUseType
     */
    private $cueUseType = null;

    /**
     * A Composite containing details of a ThemeType for the Creation referenced in the Cue.
     *
     * @var \DedexBundle\Entity\Ern\CueThemeTypeType $cueThemeType
     */
    private $cueThemeType = null;

    /**
     * A Composite containing details of a VocalType for the Creation referenced in the Cue.
     *
     * @var \DedexBundle\Entity\Ern\CueVocalTypeType $cueVocalType
     */
    private $cueVocalType = null;

    /**
     * A Composite containing details of a VisualPerceptionType for the Creation referenced in the Cue.
     *
     * @var \DedexBundle\Entity\Ern\CueVisualPerceptionTypeType $cueVisualPerceptionType
     */
    private $cueVisualPerceptionType = null;

    /**
     * A Composite containing details of a CueOrigin for the Cue. It can be expected that this element will be contractually mandatory in many communications of cue sheets to music rights societies.
     *
     * @var \DedexBundle\Entity\Ern\CueOriginType $cueOrigin
     */
    private $cueOrigin = null;

    /**
     * A Composite containing details of a ResourceId.
     *
     * @var \DedexBundle\Entity\Ern\ResourceIdType $resourceId
     */
    private $resourceId = null;

    /**
     * A Composite containing details of a WorkId.
     *
     * @var \DedexBundle\Entity\Ern\MusicalWorkIdType $workId
     */
    private $workId = null;

    /**
     * A Composite containing details of a Title of the Work referenced in the Cue, as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @var \DedexBundle\Entity\Ern\DisplayTitleTextType[] $displayTitleText
     */
    private $displayTitleText = [
        
    ];

    /**
     * A Composite containing details of a Title of the Work referenced in the Cue, as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @var \DedexBundle\Entity\Ern\DisplayTitleType[] $displayTitle
     */
    private $displayTitle = [
        
    ];

    /**
     * A Composite containing details of an AdditionalTitle of the Work referenced in the Cue. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @var \DedexBundle\Entity\Ern\AdditionalTitleType[] $additionalTitle
     */
    private $additionalTitle = [
        
    ];

    /**
     * A Composite containing details of a Contributor of the Work referenced in the Cue.
     *
     * @var \DedexBundle\Entity\Ern\ContributorType[] $contributor
     */
    private $contributor = [
        
    ];

    /**
     * A Flag indicating whether a Creation contains dancing (=true) or not (=false).
     *
     * @var bool $isDance
     */
    private $isDance = null;

    /**
     * A Flag indicating whether whether the Creation referenced in the Cue contains musical content such as a SoundRecording or a MusicalWork (=true) or not (=false).
     *
     * @var bool $hasMusicalContent
     */
    private $hasMusicalContent = null;

    /**
     * A Composite containing details of the PLine for the Cue.
     *
     * @var \DedexBundle\Entity\Ern\PLineType[] $pLine
     */
    private $pLine = [
        
    ];

    /**
     * A Composite containing details of the CLine for the Cue.
     *
     * @var \DedexBundle\Entity\Ern\CLineType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * The start time of the Creation, measured from the start of the Resource from which the CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $startTime
     */
    private $startTime = null;

    /**
     * The Duration of the use of the Creation that is referenced in the CueCreationReference (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The end time of the Creation, measured from the start of the Resource from which the CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $endTime
     */
    private $endTime = null;

    /**
     * Gets as cueUseType
     *
     * A Composite containing details of a UseType of the Cue. It can be expected that this element will be contractually mandatory in many communications of cue sheets to music rights societies.
     *
     * @return \DedexBundle\Entity\Ern\CueUseTypeType
     */
    public function getCueUseType()
    {
        return $this->cueUseType;
    }

    /**
     * Sets a new cueUseType
     *
     * A Composite containing details of a UseType of the Cue. It can be expected that this element will be contractually mandatory in many communications of cue sheets to music rights societies.
     *
     * @param \DedexBundle\Entity\Ern\CueUseTypeType $cueUseType
     * @return self
     */
    public function setCueUseType(\DedexBundle\Entity\Ern\CueUseTypeType $cueUseType)
    {
        $this->cueUseType = $cueUseType;
        return $this;
    }

    /**
     * Gets as cueThemeType
     *
     * A Composite containing details of a ThemeType for the Creation referenced in the Cue.
     *
     * @return \DedexBundle\Entity\Ern\CueThemeTypeType
     */
    public function getCueThemeType()
    {
        return $this->cueThemeType;
    }

    /**
     * Sets a new cueThemeType
     *
     * A Composite containing details of a ThemeType for the Creation referenced in the Cue.
     *
     * @param \DedexBundle\Entity\Ern\CueThemeTypeType $cueThemeType
     * @return self
     */
    public function setCueThemeType(\DedexBundle\Entity\Ern\CueThemeTypeType $cueThemeType)
    {
        $this->cueThemeType = $cueThemeType;
        return $this;
    }

    /**
     * Gets as cueVocalType
     *
     * A Composite containing details of a VocalType for the Creation referenced in the Cue.
     *
     * @return \DedexBundle\Entity\Ern\CueVocalTypeType
     */
    public function getCueVocalType()
    {
        return $this->cueVocalType;
    }

    /**
     * Sets a new cueVocalType
     *
     * A Composite containing details of a VocalType for the Creation referenced in the Cue.
     *
     * @param \DedexBundle\Entity\Ern\CueVocalTypeType $cueVocalType
     * @return self
     */
    public function setCueVocalType(\DedexBundle\Entity\Ern\CueVocalTypeType $cueVocalType)
    {
        $this->cueVocalType = $cueVocalType;
        return $this;
    }

    /**
     * Gets as cueVisualPerceptionType
     *
     * A Composite containing details of a VisualPerceptionType for the Creation referenced in the Cue.
     *
     * @return \DedexBundle\Entity\Ern\CueVisualPerceptionTypeType
     */
    public function getCueVisualPerceptionType()
    {
        return $this->cueVisualPerceptionType;
    }

    /**
     * Sets a new cueVisualPerceptionType
     *
     * A Composite containing details of a VisualPerceptionType for the Creation referenced in the Cue.
     *
     * @param \DedexBundle\Entity\Ern\CueVisualPerceptionTypeType $cueVisualPerceptionType
     * @return self
     */
    public function setCueVisualPerceptionType(\DedexBundle\Entity\Ern\CueVisualPerceptionTypeType $cueVisualPerceptionType)
    {
        $this->cueVisualPerceptionType = $cueVisualPerceptionType;
        return $this;
    }

    /**
     * Gets as cueOrigin
     *
     * A Composite containing details of a CueOrigin for the Cue. It can be expected that this element will be contractually mandatory in many communications of cue sheets to music rights societies.
     *
     * @return \DedexBundle\Entity\Ern\CueOriginType
     */
    public function getCueOrigin()
    {
        return $this->cueOrigin;
    }

    /**
     * Sets a new cueOrigin
     *
     * A Composite containing details of a CueOrigin for the Cue. It can be expected that this element will be contractually mandatory in many communications of cue sheets to music rights societies.
     *
     * @param \DedexBundle\Entity\Ern\CueOriginType $cueOrigin
     * @return self
     */
    public function setCueOrigin(\DedexBundle\Entity\Ern\CueOriginType $cueOrigin)
    {
        $this->cueOrigin = $cueOrigin;
        return $this;
    }

    /**
     * Gets as resourceId
     *
     * A Composite containing details of a ResourceId.
     *
     * @return \DedexBundle\Entity\Ern\ResourceIdType
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * Sets a new resourceId
     *
     * A Composite containing details of a ResourceId.
     *
     * @param \DedexBundle\Entity\Ern\ResourceIdType $resourceId
     * @return self
     */
    public function setResourceId(\DedexBundle\Entity\Ern\ResourceIdType $resourceId)
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * Gets as workId
     *
     * A Composite containing details of a WorkId.
     *
     * @return \DedexBundle\Entity\Ern\MusicalWorkIdType
     */
    public function getWorkId()
    {
        return $this->workId;
    }

    /**
     * Sets a new workId
     *
     * A Composite containing details of a WorkId.
     *
     * @param \DedexBundle\Entity\Ern\MusicalWorkIdType $workId
     * @return self
     */
    public function setWorkId(\DedexBundle\Entity\Ern\MusicalWorkIdType $workId)
    {
        $this->workId = $workId;
        return $this;
    }

    /**
     * Adds as displayTitleText
     *
     * A Composite containing details of a Title of the Work referenced in the Cue, as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\DisplayTitleTextType $displayTitleText
     */
    public function addToDisplayTitleText(\DedexBundle\Entity\Ern\DisplayTitleTextType $displayTitleText)
    {
        $this->displayTitleText[] = $displayTitleText;
        return $this;
    }

    /**
     * isset displayTitleText
     *
     * A Composite containing details of a Title of the Work referenced in the Cue, as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
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
     * A Composite containing details of a Title of the Work referenced in the Cue, as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
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
     * A Composite containing details of a Title of the Work referenced in the Cue, as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @return \DedexBundle\Entity\Ern\DisplayTitleTextType[]
     */
    public function getDisplayTitleText()
    {
        return $this->displayTitleText;
    }

    /**
     * Sets a new displayTitleText
     *
     * A Composite containing details of a Title of the Work referenced in the Cue, as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @param \DedexBundle\Entity\Ern\DisplayTitleTextType[] $displayTitleText
     * @return self
     */
    public function setDisplayTitleText(array $displayTitleText)
    {
        $this->displayTitleText = $displayTitleText;
        return $this;
    }

    /**
     * Adds as displayTitle
     *
     * A Composite containing details of a Title of the Work referenced in the Cue, as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\DisplayTitleType $displayTitle
     */
    public function addToDisplayTitle(\DedexBundle\Entity\Ern\DisplayTitleType $displayTitle)
    {
        $this->displayTitle[] = $displayTitle;
        return $this;
    }

    /**
     * isset displayTitle
     *
     * A Composite containing details of a Title of the Work referenced in the Cue, as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
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
     * A Composite containing details of a Title of the Work referenced in the Cue, as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
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
     * A Composite containing details of a Title of the Work referenced in the Cue, as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @return \DedexBundle\Entity\Ern\DisplayTitleType[]
     */
    public function getDisplayTitle()
    {
        return $this->displayTitle;
    }

    /**
     * Sets a new displayTitle
     *
     * A Composite containing details of a Title of the Work referenced in the Cue, as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @param \DedexBundle\Entity\Ern\DisplayTitleType[] $displayTitle
     * @return self
     */
    public function setDisplayTitle(array $displayTitle)
    {
        $this->displayTitle = $displayTitle;
        return $this;
    }

    /**
     * Adds as additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the Work referenced in the Cue. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\AdditionalTitleType $additionalTitle
     */
    public function addToAdditionalTitle(\DedexBundle\Entity\Ern\AdditionalTitleType $additionalTitle)
    {
        $this->additionalTitle[] = $additionalTitle;
        return $this;
    }

    /**
     * isset additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the Work referenced in the Cue. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
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
     * A Composite containing details of an AdditionalTitle of the Work referenced in the Cue. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
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
     * A Composite containing details of an AdditionalTitle of the Work referenced in the Cue. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return \DedexBundle\Entity\Ern\AdditionalTitleType[]
     */
    public function getAdditionalTitle()
    {
        return $this->additionalTitle;
    }

    /**
     * Sets a new additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the Work referenced in the Cue. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param \DedexBundle\Entity\Ern\AdditionalTitleType[] $additionalTitle
     * @return self
     */
    public function setAdditionalTitle(array $additionalTitle)
    {
        $this->additionalTitle = $additionalTitle;
        return $this;
    }

    /**
     * Adds as contributor
     *
     * A Composite containing details of a Contributor of the Work referenced in the Cue.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\ContributorType $contributor
     */
    public function addToContributor(\DedexBundle\Entity\Ern\ContributorType $contributor)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * isset contributor
     *
     * A Composite containing details of a Contributor of the Work referenced in the Cue.
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
     * A Composite containing details of a Contributor of the Work referenced in the Cue.
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
     * A Composite containing details of a Contributor of the Work referenced in the Cue.
     *
     * @return \DedexBundle\Entity\Ern\ContributorType[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Sets a new contributor
     *
     * A Composite containing details of a Contributor of the Work referenced in the Cue.
     *
     * @param \DedexBundle\Entity\Ern\ContributorType[] $contributor
     * @return self
     */
    public function setContributor(array $contributor)
    {
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * Gets as isDance
     *
     * A Flag indicating whether a Creation contains dancing (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsDance()
    {
        return $this->isDance;
    }

    /**
     * Sets a new isDance
     *
     * A Flag indicating whether a Creation contains dancing (=true) or not (=false).
     *
     * @param bool $isDance
     * @return self
     */
    public function setIsDance($isDance)
    {
        $this->isDance = $isDance;
        return $this;
    }

    /**
     * Gets as hasMusicalContent
     *
     * A Flag indicating whether whether the Creation referenced in the Cue contains musical content such as a SoundRecording or a MusicalWork (=true) or not (=false).
     *
     * @return bool
     */
    public function getHasMusicalContent()
    {
        return $this->hasMusicalContent;
    }

    /**
     * Sets a new hasMusicalContent
     *
     * A Flag indicating whether whether the Creation referenced in the Cue contains musical content such as a SoundRecording or a MusicalWork (=true) or not (=false).
     *
     * @param bool $hasMusicalContent
     * @return self
     */
    public function setHasMusicalContent($hasMusicalContent)
    {
        $this->hasMusicalContent = $hasMusicalContent;
        return $this;
    }

    /**
     * Adds as pLine
     *
     * A Composite containing details of the PLine for the Cue.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\PLineType $pLine
     */
    public function addToPLine(\DedexBundle\Entity\Ern\PLineType $pLine)
    {
        $this->pLine[] = $pLine;
        return $this;
    }

    /**
     * isset pLine
     *
     * A Composite containing details of the PLine for the Cue.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPLine($index)
    {
        return isset($this->pLine[$index]);
    }

    /**
     * unset pLine
     *
     * A Composite containing details of the PLine for the Cue.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPLine($index)
    {
        unset($this->pLine[$index]);
    }

    /**
     * Gets as pLine
     *
     * A Composite containing details of the PLine for the Cue.
     *
     * @return \DedexBundle\Entity\Ern\PLineType[]
     */
    public function getPLine()
    {
        return $this->pLine;
    }

    /**
     * Sets a new pLine
     *
     * A Composite containing details of the PLine for the Cue.
     *
     * @param \DedexBundle\Entity\Ern\PLineType[] $pLine
     * @return self
     */
    public function setPLine(array $pLine)
    {
        $this->pLine = $pLine;
        return $this;
    }

    /**
     * Adds as cLine
     *
     * A Composite containing details of the CLine for the Cue.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\CLineType $cLine
     */
    public function addToCLine(\DedexBundle\Entity\Ern\CLineType $cLine)
    {
        $this->cLine[] = $cLine;
        return $this;
    }

    /**
     * isset cLine
     *
     * A Composite containing details of the CLine for the Cue.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCLine($index)
    {
        return isset($this->cLine[$index]);
    }

    /**
     * unset cLine
     *
     * A Composite containing details of the CLine for the Cue.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCLine($index)
    {
        unset($this->cLine[$index]);
    }

    /**
     * Gets as cLine
     *
     * A Composite containing details of the CLine for the Cue.
     *
     * @return \DedexBundle\Entity\Ern\CLineType[]
     */
    public function getCLine()
    {
        return $this->cLine;
    }

    /**
     * Sets a new cLine
     *
     * A Composite containing details of the CLine for the Cue.
     *
     * @param \DedexBundle\Entity\Ern\CLineType[] $cLine
     * @return self
     */
    public function setCLine(array $cLine)
    {
        $this->cLine = $cLine;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * The start time of the Creation, measured from the start of the Resource from which the CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * The start time of the Creation, measured from the start of the Resource from which the CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @param \DateInterval $startTime
     * @return self
     */
    public function setStartTime(\DateInterval $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The Duration of the use of the Creation that is referenced in the CueCreationReference (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * The Duration of the use of the Creation that is referenced in the CueCreationReference (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * The end time of the Creation, measured from the start of the Resource from which the CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * The end time of the Creation, measured from the start of the Resource from which the CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @param \DateInterval $endTime
     * @return self
     */
    public function setEndTime(\DateInterval $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }


}

