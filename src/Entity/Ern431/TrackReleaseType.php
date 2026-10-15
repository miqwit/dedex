<?php

namespace DedexBundle\Entity\Ern431;

/**
 * Class representing TrackReleaseType
 *
 * A Composite containing details of a DDEX TrackRelease.
 * XSD Type: TrackRelease
 */
class TrackReleaseType
{
    /**
     * The Flag indicating whether the Release is a main one as defined in the relevant Profile Standard (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isMainRelease
     */
    private $isMainRelease = null;

    /**
     * The Identifier (specific to the Message) of the Release. Used to link the Release to one or more Deal(s). This is a LocalReleaseAnchor starting with the letter R.
     *
     * @var string $releaseReference
     */
    private $releaseReference = null;

    /**
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @var \DedexBundle\Entity\Ern431\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @var \DedexBundle\Entity\Ern431\DisplayTitleTextType[] $displayTitleText
     */
    private $displayTitleText = [
        
    ];

    /**
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @var \DedexBundle\Entity\Ern431\DisplayTitleType[] $displayTitle
     */
    private $displayTitle = [
        
    ];

    /**
     * A Composite containing details of a FormalTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @var \DedexBundle\Entity\Ern431\DisplayTitleType[] $formalTitle
     */
    private $formalTitle = [
        
    ];

    /**
     * A Composite containing details of a GroupingTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @var \DedexBundle\Entity\Ern431\DisplayTitleType[] $groupingTitle
     */
    private $groupingTitle = [
        
    ];

    /**
     * A ReleaseResourceReference for the Release (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter A.
     *
     * @var string $releaseResourceReference
     */
    private $releaseResourceReference = null;

    /**
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this Release. Example: an Image or Text associated with a SoundRecording. This LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @var \DedexBundle\Entity\Ern431\LinkedReleaseResourceReferenceType[] $linkedReleaseResourceReference
     */
    private $linkedReleaseResourceReference = [
        
    ];

    /**
     * A Reference for a label of the Release (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var \DedexBundle\Entity\Ern431\ReleaseLabelReferenceWithPartyType[] $releaseLabelReference
     */
    private $releaseLabelReference = [
        
    ];

    /**
     * A Composite containing details of a Genre considered appropriate for marketing the Release by the publishing record company often in conjunction with the display artist(s).
     *
     * @var \DedexBundle\Entity\Ern431\GenreWithTerritoryType[] $displayGenre
     */
    private $displayGenre = [
        
    ];

    /**
     * A Reference for a set of visibility dates (specific to this Message) that applies to this Release. This defines when the Release can be shown to Consumers, not when a Consumer can get access to the Release. This is a LocalVisibilityAnchorReference starting with the letter V.
     *
     * @var string[] $releaseVisibilityReference
     */
    private $releaseVisibilityReference = [
        
    ];

    /**
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to this Release.
     *
     * @var \DedexBundle\Entity\Ern431\RelatedReleaseType[] $relatedRelease
     */
    private $relatedRelease = [
        
    ];

    /**
     * A Composite containing details of a Resource which is related to this Release.
     *
     * @var \DedexBundle\Entity\Ern431\RelatedResourceType[] $relatedResource
     */
    private $relatedResource = [
        
    ];

    /**
     * A URL of a sub-site or channel in the DSP’s system, where the Release should be made available to Consumers.
     *
     * @var string $targetURL
     */
    private $targetURL = null;

    /**
     * A Composite containing details of a Description of the Release containing Keywords.
     *
     * @var \DedexBundle\Entity\Ern431\KeywordsWithTerritoryType[] $keywords
     */
    private $keywords = [
        
    ];

    /**
     * A Composite containing details of a Synopsis of the Release.
     *
     * @var \DedexBundle\Entity\Ern431\SynopsisWithTerritoryType[] $synopsis
     */
    private $synopsis = [
        
    ];

    /**
     * A Composite containing a Comment about the promotion and marketing of the Release.
     *
     * @var \DedexBundle\Entity\Ern431\MarketingCommentType[] $marketingComment
     */
    private $marketingComment = [
        
    ];

    /**
     * Gets as isMainRelease
     *
     * The Flag indicating whether the Release is a main one as defined in the relevant Profile Standard (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsMainRelease()
    {
        return $this->isMainRelease;
    }

    /**
     * Sets a new isMainRelease
     *
     * The Flag indicating whether the Release is a main one as defined in the relevant Profile Standard (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isMainRelease
     * @return self
     */
    public function setIsMainRelease($isMainRelease)
    {
        $this->isMainRelease = $isMainRelease;
        return $this;
    }

    /**
     * Gets as releaseReference
     *
     * The Identifier (specific to the Message) of the Release. Used to link the Release to one or more Deal(s). This is a LocalReleaseAnchor starting with the letter R.
     *
     * @return string
     */
    public function getReleaseReference()
    {
        return $this->releaseReference;
    }

    /**
     * Sets a new releaseReference
     *
     * The Identifier (specific to the Message) of the Release. Used to link the Release to one or more Deal(s). This is a LocalReleaseAnchor starting with the letter R.
     *
     * @param string $releaseReference
     * @return self
     */
    public function setReleaseReference($releaseReference)
    {
        $this->releaseReference = $releaseReference;
        return $this;
    }

    /**
     * Gets as releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @return \DedexBundle\Entity\Ern431\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @param \DedexBundle\Entity\Ern431\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(\DedexBundle\Entity\Ern431\ReleaseIdType $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Adds as displayTitleText
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\DisplayTitleTextType $displayTitleText
     */
    public function addToDisplayTitleText(\DedexBundle\Entity\Ern431\DisplayTitleTextType $displayTitleText)
    {
        $this->displayTitleText[] = $displayTitleText;
        return $this;
    }

    /**
     * isset displayTitleText
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
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
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
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
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @return \DedexBundle\Entity\Ern431\DisplayTitleTextType[]
     */
    public function getDisplayTitleText()
    {
        return $this->displayTitleText;
    }

    /**
     * Sets a new displayTitleText
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @param \DedexBundle\Entity\Ern431\DisplayTitleTextType[] $displayTitleText
     * @return self
     */
    public function setDisplayTitleText(?array $displayTitleText = null)
    {
        $this->displayTitleText = $displayTitleText;
        return $this;
    }

    /**
     * Adds as displayTitle
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\DisplayTitleType $displayTitle
     */
    public function addToDisplayTitle(\DedexBundle\Entity\Ern431\DisplayTitleType $displayTitle)
    {
        $this->displayTitle[] = $displayTitle;
        return $this;
    }

    /**
     * isset displayTitle
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
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
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
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
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @return \DedexBundle\Entity\Ern431\DisplayTitleType[]
     */
    public function getDisplayTitle()
    {
        return $this->displayTitle;
    }

    /**
     * Sets a new displayTitle
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @param \DedexBundle\Entity\Ern431\DisplayTitleType[] $displayTitle
     * @return self
     */
    public function setDisplayTitle(?array $displayTitle = null)
    {
        $this->displayTitle = $displayTitle;
        return $this;
    }

    /**
     * Adds as formalTitle
     *
     * A Composite containing details of a FormalTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\DisplayTitleType $formalTitle
     */
    public function addToFormalTitle(\DedexBundle\Entity\Ern431\DisplayTitleType $formalTitle)
    {
        $this->formalTitle[] = $formalTitle;
        return $this;
    }

    /**
     * isset formalTitle
     *
     * A Composite containing details of a FormalTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFormalTitle($index)
    {
        return isset($this->formalTitle[$index]);
    }

    /**
     * unset formalTitle
     *
     * A Composite containing details of a FormalTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFormalTitle($index)
    {
        unset($this->formalTitle[$index]);
    }

    /**
     * Gets as formalTitle
     *
     * A Composite containing details of a FormalTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return \DedexBundle\Entity\Ern431\DisplayTitleType[]
     */
    public function getFormalTitle()
    {
        return $this->formalTitle;
    }

    /**
     * Sets a new formalTitle
     *
     * A Composite containing details of a FormalTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param \DedexBundle\Entity\Ern431\DisplayTitleType[] $formalTitle
     * @return self
     */
    public function setFormalTitle(?array $formalTitle = null)
    {
        $this->formalTitle = $formalTitle;
        return $this;
    }

    /**
     * Adds as groupingTitle
     *
     * A Composite containing details of a GroupingTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\DisplayTitleType $groupingTitle
     */
    public function addToGroupingTitle(\DedexBundle\Entity\Ern431\DisplayTitleType $groupingTitle)
    {
        $this->groupingTitle[] = $groupingTitle;
        return $this;
    }

    /**
     * isset groupingTitle
     *
     * A Composite containing details of a GroupingTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGroupingTitle($index)
    {
        return isset($this->groupingTitle[$index]);
    }

    /**
     * unset groupingTitle
     *
     * A Composite containing details of a GroupingTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGroupingTitle($index)
    {
        unset($this->groupingTitle[$index]);
    }

    /**
     * Gets as groupingTitle
     *
     * A Composite containing details of a GroupingTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return \DedexBundle\Entity\Ern431\DisplayTitleType[]
     */
    public function getGroupingTitle()
    {
        return $this->groupingTitle;
    }

    /**
     * Sets a new groupingTitle
     *
     * A Composite containing details of a GroupingTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param \DedexBundle\Entity\Ern431\DisplayTitleType[] $groupingTitle
     * @return self
     */
    public function setGroupingTitle(?array $groupingTitle = null)
    {
        $this->groupingTitle = $groupingTitle;
        return $this;
    }

    /**
     * Gets as releaseResourceReference
     *
     * A ReleaseResourceReference for the Release (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter A.
     *
     * @return string
     */
    public function getReleaseResourceReference()
    {
        return $this->releaseResourceReference;
    }

    /**
     * Sets a new releaseResourceReference
     *
     * A ReleaseResourceReference for the Release (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter A.
     *
     * @param string $releaseResourceReference
     * @return self
     */
    public function setReleaseResourceReference($releaseResourceReference)
    {
        $this->releaseResourceReference = $releaseResourceReference;
        return $this;
    }

    /**
     * Adds as linkedReleaseResourceReference
     *
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this Release. Example: an Image or Text associated with a SoundRecording. This LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\LinkedReleaseResourceReferenceType $linkedReleaseResourceReference
     */
    public function addToLinkedReleaseResourceReference(\DedexBundle\Entity\Ern431\LinkedReleaseResourceReferenceType $linkedReleaseResourceReference)
    {
        $this->linkedReleaseResourceReference[] = $linkedReleaseResourceReference;
        return $this;
    }

    /**
     * isset linkedReleaseResourceReference
     *
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this Release. Example: an Image or Text associated with a SoundRecording. This LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkedReleaseResourceReference($index)
    {
        return isset($this->linkedReleaseResourceReference[$index]);
    }

    /**
     * unset linkedReleaseResourceReference
     *
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this Release. Example: an Image or Text associated with a SoundRecording. This LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkedReleaseResourceReference($index)
    {
        unset($this->linkedReleaseResourceReference[$index]);
    }

    /**
     * Gets as linkedReleaseResourceReference
     *
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this Release. Example: an Image or Text associated with a SoundRecording. This LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @return \DedexBundle\Entity\Ern431\LinkedReleaseResourceReferenceType[]
     */
    public function getLinkedReleaseResourceReference()
    {
        return $this->linkedReleaseResourceReference;
    }

    /**
     * Sets a new linkedReleaseResourceReference
     *
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this Release. Example: an Image or Text associated with a SoundRecording. This LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @param \DedexBundle\Entity\Ern431\LinkedReleaseResourceReferenceType[] $linkedReleaseResourceReference
     * @return self
     */
    public function setLinkedReleaseResourceReference(?array $linkedReleaseResourceReference = null)
    {
        $this->linkedReleaseResourceReference = $linkedReleaseResourceReference;
        return $this;
    }

    /**
     * Adds as releaseLabelReference
     *
     * A Reference for a label of the Release (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\ReleaseLabelReferenceWithPartyType $releaseLabelReference
     */
    public function addToReleaseLabelReference(\DedexBundle\Entity\Ern431\ReleaseLabelReferenceWithPartyType $releaseLabelReference)
    {
        $this->releaseLabelReference[] = $releaseLabelReference;
        return $this;
    }

    /**
     * isset releaseLabelReference
     *
     * A Reference for a label of the Release (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseLabelReference($index)
    {
        return isset($this->releaseLabelReference[$index]);
    }

    /**
     * unset releaseLabelReference
     *
     * A Reference for a label of the Release (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseLabelReference($index)
    {
        unset($this->releaseLabelReference[$index]);
    }

    /**
     * Gets as releaseLabelReference
     *
     * A Reference for a label of the Release (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return \DedexBundle\Entity\Ern431\ReleaseLabelReferenceWithPartyType[]
     */
    public function getReleaseLabelReference()
    {
        return $this->releaseLabelReference;
    }

    /**
     * Sets a new releaseLabelReference
     *
     * A Reference for a label of the Release (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param \DedexBundle\Entity\Ern431\ReleaseLabelReferenceWithPartyType[] $releaseLabelReference
     * @return self
     */
    public function setReleaseLabelReference(array $releaseLabelReference)
    {
        $this->releaseLabelReference = $releaseLabelReference;
        return $this;
    }

    /**
     * Adds as displayGenre
     *
     * A Composite containing details of a Genre considered appropriate for marketing the Release by the publishing record company often in conjunction with the display artist(s).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\GenreWithTerritoryType $displayGenre
     */
    public function addToDisplayGenre(\DedexBundle\Entity\Ern431\GenreWithTerritoryType $displayGenre)
    {
        $this->displayGenre[] = $displayGenre;
        return $this;
    }

    /**
     * isset displayGenre
     *
     * A Composite containing details of a Genre considered appropriate for marketing the Release by the publishing record company often in conjunction with the display artist(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayGenre($index)
    {
        return isset($this->displayGenre[$index]);
    }

    /**
     * unset displayGenre
     *
     * A Composite containing details of a Genre considered appropriate for marketing the Release by the publishing record company often in conjunction with the display artist(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayGenre($index)
    {
        unset($this->displayGenre[$index]);
    }

    /**
     * Gets as displayGenre
     *
     * A Composite containing details of a Genre considered appropriate for marketing the Release by the publishing record company often in conjunction with the display artist(s).
     *
     * @return \DedexBundle\Entity\Ern431\GenreWithTerritoryType[]
     */
    public function getDisplayGenre()
    {
        return $this->displayGenre;
    }

    /**
     * Sets a new displayGenre
     *
     * A Composite containing details of a Genre considered appropriate for marketing the Release by the publishing record company often in conjunction with the display artist(s).
     *
     * @param \DedexBundle\Entity\Ern431\GenreWithTerritoryType[] $displayGenre
     * @return self
     */
    public function setDisplayGenre(array $displayGenre)
    {
        $this->displayGenre = $displayGenre;
        return $this;
    }

    /**
     * Adds as releaseVisibilityReference
     *
     * A Reference for a set of visibility dates (specific to this Message) that applies to this Release. This defines when the Release can be shown to Consumers, not when a Consumer can get access to the Release. This is a LocalVisibilityAnchorReference starting with the letter V.
     *
     * @return self
     * @param string $releaseVisibilityReference
     */
    public function addToReleaseVisibilityReference($releaseVisibilityReference)
    {
        $this->releaseVisibilityReference[] = $releaseVisibilityReference;
        return $this;
    }

    /**
     * isset releaseVisibilityReference
     *
     * A Reference for a set of visibility dates (specific to this Message) that applies to this Release. This defines when the Release can be shown to Consumers, not when a Consumer can get access to the Release. This is a LocalVisibilityAnchorReference starting with the letter V.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseVisibilityReference($index)
    {
        return isset($this->releaseVisibilityReference[$index]);
    }

    /**
     * unset releaseVisibilityReference
     *
     * A Reference for a set of visibility dates (specific to this Message) that applies to this Release. This defines when the Release can be shown to Consumers, not when a Consumer can get access to the Release. This is a LocalVisibilityAnchorReference starting with the letter V.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseVisibilityReference($index)
    {
        unset($this->releaseVisibilityReference[$index]);
    }

    /**
     * Gets as releaseVisibilityReference
     *
     * A Reference for a set of visibility dates (specific to this Message) that applies to this Release. This defines when the Release can be shown to Consumers, not when a Consumer can get access to the Release. This is a LocalVisibilityAnchorReference starting with the letter V.
     *
     * @return string[]
     */
    public function getReleaseVisibilityReference()
    {
        return $this->releaseVisibilityReference;
    }

    /**
     * Sets a new releaseVisibilityReference
     *
     * A Reference for a set of visibility dates (specific to this Message) that applies to this Release. This defines when the Release can be shown to Consumers, not when a Consumer can get access to the Release. This is a LocalVisibilityAnchorReference starting with the letter V.
     *
     * @param string $releaseVisibilityReference
     * @return self
     */
    public function setReleaseVisibilityReference(?array $releaseVisibilityReference = null)
    {
        $this->releaseVisibilityReference = $releaseVisibilityReference;
        return $this;
    }

    /**
     * Adds as relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to this Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\RelatedReleaseType $relatedRelease
     */
    public function addToRelatedRelease(\DedexBundle\Entity\Ern431\RelatedReleaseType $relatedRelease)
    {
        $this->relatedRelease[] = $relatedRelease;
        return $this;
    }

    /**
     * isset relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to this Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedRelease($index)
    {
        return isset($this->relatedRelease[$index]);
    }

    /**
     * unset relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to this Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedRelease($index)
    {
        unset($this->relatedRelease[$index]);
    }

    /**
     * Gets as relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to this Release.
     *
     * @return \DedexBundle\Entity\Ern431\RelatedReleaseType[]
     */
    public function getRelatedRelease()
    {
        return $this->relatedRelease;
    }

    /**
     * Sets a new relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to this Release.
     *
     * @param \DedexBundle\Entity\Ern431\RelatedReleaseType[] $relatedRelease
     * @return self
     */
    public function setRelatedRelease(?array $relatedRelease = null)
    {
        $this->relatedRelease = $relatedRelease;
        return $this;
    }

    /**
     * Adds as relatedResource
     *
     * A Composite containing details of a Resource which is related to this Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\RelatedResourceType $relatedResource
     */
    public function addToRelatedResource(\DedexBundle\Entity\Ern431\RelatedResourceType $relatedResource)
    {
        $this->relatedResource[] = $relatedResource;
        return $this;
    }

    /**
     * isset relatedResource
     *
     * A Composite containing details of a Resource which is related to this Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedResource($index)
    {
        return isset($this->relatedResource[$index]);
    }

    /**
     * unset relatedResource
     *
     * A Composite containing details of a Resource which is related to this Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedResource($index)
    {
        unset($this->relatedResource[$index]);
    }

    /**
     * Gets as relatedResource
     *
     * A Composite containing details of a Resource which is related to this Release.
     *
     * @return \DedexBundle\Entity\Ern431\RelatedResourceType[]
     */
    public function getRelatedResource()
    {
        return $this->relatedResource;
    }

    /**
     * Sets a new relatedResource
     *
     * A Composite containing details of a Resource which is related to this Release.
     *
     * @param \DedexBundle\Entity\Ern431\RelatedResourceType[] $relatedResource
     * @return self
     */
    public function setRelatedResource(?array $relatedResource = null)
    {
        $this->relatedResource = $relatedResource;
        return $this;
    }

    /**
     * Gets as targetURL
     *
     * A URL of a sub-site or channel in the DSP’s system, where the Release should be made available to Consumers.
     *
     * @return string
     */
    public function getTargetURL()
    {
        return $this->targetURL;
    }

    /**
     * Sets a new targetURL
     *
     * A URL of a sub-site or channel in the DSP’s system, where the Release should be made available to Consumers.
     *
     * @param string $targetURL
     * @return self
     */
    public function setTargetURL($targetURL)
    {
        $this->targetURL = $targetURL;
        return $this;
    }

    /**
     * Adds as keywords
     *
     * A Composite containing details of a Description of the Release containing Keywords.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\KeywordsWithTerritoryType $keywords
     */
    public function addToKeywords(\DedexBundle\Entity\Ern431\KeywordsWithTerritoryType $keywords)
    {
        $this->keywords[] = $keywords;
        return $this;
    }

    /**
     * isset keywords
     *
     * A Composite containing details of a Description of the Release containing Keywords.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKeywords($index)
    {
        return isset($this->keywords[$index]);
    }

    /**
     * unset keywords
     *
     * A Composite containing details of a Description of the Release containing Keywords.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKeywords($index)
    {
        unset($this->keywords[$index]);
    }

    /**
     * Gets as keywords
     *
     * A Composite containing details of a Description of the Release containing Keywords.
     *
     * @return \DedexBundle\Entity\Ern431\KeywordsWithTerritoryType[]
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets a new keywords
     *
     * A Composite containing details of a Description of the Release containing Keywords.
     *
     * @param \DedexBundle\Entity\Ern431\KeywordsWithTerritoryType[] $keywords
     * @return self
     */
    public function setKeywords(?array $keywords = null)
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * Adds as synopsis
     *
     * A Composite containing details of a Synopsis of the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\SynopsisWithTerritoryType $synopsis
     */
    public function addToSynopsis(\DedexBundle\Entity\Ern431\SynopsisWithTerritoryType $synopsis)
    {
        $this->synopsis[] = $synopsis;
        return $this;
    }

    /**
     * isset synopsis
     *
     * A Composite containing details of a Synopsis of the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSynopsis($index)
    {
        return isset($this->synopsis[$index]);
    }

    /**
     * unset synopsis
     *
     * A Composite containing details of a Synopsis of the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSynopsis($index)
    {
        unset($this->synopsis[$index]);
    }

    /**
     * Gets as synopsis
     *
     * A Composite containing details of a Synopsis of the Release.
     *
     * @return \DedexBundle\Entity\Ern431\SynopsisWithTerritoryType[]
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Sets a new synopsis
     *
     * A Composite containing details of a Synopsis of the Release.
     *
     * @param \DedexBundle\Entity\Ern431\SynopsisWithTerritoryType[] $synopsis
     * @return self
     */
    public function setSynopsis(?array $synopsis = null)
    {
        $this->synopsis = $synopsis;
        return $this;
    }

    /**
     * Adds as marketingComment
     *
     * A Composite containing a Comment about the promotion and marketing of the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\MarketingCommentType $marketingComment
     */
    public function addToMarketingComment(\DedexBundle\Entity\Ern431\MarketingCommentType $marketingComment)
    {
        $this->marketingComment[] = $marketingComment;
        return $this;
    }

    /**
     * isset marketingComment
     *
     * A Composite containing a Comment about the promotion and marketing of the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMarketingComment($index)
    {
        return isset($this->marketingComment[$index]);
    }

    /**
     * unset marketingComment
     *
     * A Composite containing a Comment about the promotion and marketing of the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMarketingComment($index)
    {
        unset($this->marketingComment[$index]);
    }

    /**
     * Gets as marketingComment
     *
     * A Composite containing a Comment about the promotion and marketing of the Release.
     *
     * @return \DedexBundle\Entity\Ern431\MarketingCommentType[]
     */
    public function getMarketingComment()
    {
        return $this->marketingComment;
    }

    /**
     * Sets a new marketingComment
     *
     * A Composite containing a Comment about the promotion and marketing of the Release.
     *
     * @param \DedexBundle\Entity\Ern431\MarketingCommentType[] $marketingComment
     * @return self
     */
    public function setMarketingComment(?array $marketingComment = null)
    {
        $this->marketingComment = $marketingComment;
        return $this;
    }
}

