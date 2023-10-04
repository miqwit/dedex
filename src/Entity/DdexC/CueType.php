<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing CueType
 *
 * A ddex:Composite containing details of a ddex:Cue.
 * XSD Type: Cue
 */
class CueType
{
    /**
     * A ddex:Composite containing details of a ddex:UseType of the ddexC:Cue. It can be expected that this element will be contractually mandatory in many communications of cue sheets to music rights societies.
     *
     * @var \DedexBundle\Entity\DdexC\CueUseTypeType $cueUseType
     */
    private $cueUseType = null;

    /**
     * A ddex:Composite containing details of a ddex:ThemeType for the ddex:Creation referenced in the ddexC:Cue.
     *
     * @var \DedexBundle\Entity\DdexC\CueThemeTypeType $cueThemeType
     */
    private $cueThemeType = null;

    /**
     * A ddex:Composite containing details of a ddex:VocalType for the ddex:Creation referenced in the ddexC:Cue.
     *
     * @var \DedexBundle\Entity\DdexC\CueVocalTypeType $cueVocalType
     */
    private $cueVocalType = null;

    /**
     * A ddex:Flag indicating whether a ddex:Creation contains dancing (=True) or not (=False).
     *
     * @var bool $isDance
     */
    private $isDance = null;

    /**
     * A ddex:Composite containing details of a ddex:VisualPerceptionType for the ddex:Creation referenced in the ddexC:Cue.
     *
     * @var \DedexBundle\Entity\DdexC\CueVisualPerceptionTypeType $cueVisualPerceptionType
     */
    private $cueVisualPerceptionType = null;

    /**
     * A ddex:Composite containing details of a ddex:CueOrigin for the ddexC:Cue. It can be expected that this element will be contractually mandatory in many communications of cue sheets to music rights societies.
     *
     * @var \DedexBundle\Entity\DdexC\CueOriginType $cueOrigin
     */
    private $cueOrigin = null;

    /**
     * A ddex:Composite containing a ddex:CueCreationReference for a ddex:Creation (specific to this ddex:Message).
     *
     * @var \DedexBundle\Entity\DdexC\CueCreationReferenceType[] $cueCreationReference
     */
    private $cueCreationReference = [
        
    ];

    /**
     * A ddex:Type of the ddex:Creation referenced in the ddexC:Cue.
     *
     * @var string $referencedCreationType
     */
    private $referencedCreationType = null;

    /**
     * A ddex:Composite containing details of a ddex:CreationIds.
     *
     * @var \DedexBundle\Entity\DdexC\CreationIdType $referencedCreationId
     */
    private $referencedCreationId = null;

    /**
     * A ddex:Composite containing details of a ddex:Title of the ddex:Creation referenced in the ddexC:Cue.
     *
     * @var \DedexBundle\Entity\DdexC\TitleType[] $referencedCreationTitle
     */
    private $referencedCreationTitle = [
        
    ];

    /**
     * A ddex:Composite containing details a ddex:Contributor of the ddex:Creation referenced in the ddexC:Cue.
     *
     * @var \DedexBundle\Entity\DdexC\ResourceContributorType[] $referencedCreationContributor
     */
    private $referencedCreationContributor = [
        
    ];

    /**
     * A ddex:Flag indicating whether whether the ddex:Creation referenced in the ddexC:Cue contains musical content such as a ddex:SoundRecording or a ddex:MusicalWork (=True) or not (=False).
     *
     * @var bool $hasMusicalContent
     */
    private $hasMusicalContent = null;

    /**
     * The start time of the ddex:Creation, measured from the start of the ddex:Resource from which the ddex:CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $startTime
     */
    private $startTime = null;

    /**
     * The ddex:Duration of the use of the ddex:Creation that is referenced in the ddex:CueCreationReference (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The end time of the ddex:Creation, measured from the start of the ddex:Resource from which the ddex:CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $endTime
     */
    private $endTime = null;

    /**
     * Gets as cueUseType
     *
     * A ddex:Composite containing details of a ddex:UseType of the ddexC:Cue. It can be expected that this element will be contractually mandatory in many communications of cue sheets to music rights societies.
     *
     * @return \DedexBundle\Entity\DdexC\CueUseTypeType
     */
    public function getCueUseType()
    {
        return $this->cueUseType;
    }

    /**
     * Sets a new cueUseType
     *
     * A ddex:Composite containing details of a ddex:UseType of the ddexC:Cue. It can be expected that this element will be contractually mandatory in many communications of cue sheets to music rights societies.
     *
     * @param \DedexBundle\Entity\DdexC\CueUseTypeType $cueUseType
     * @return self
     */
    public function setCueUseType(?\DedexBundle\Entity\DdexC\CueUseTypeType $cueUseType = null)
    {
        $this->cueUseType = $cueUseType;
        return $this;
    }

    /**
     * Gets as cueThemeType
     *
     * A ddex:Composite containing details of a ddex:ThemeType for the ddex:Creation referenced in the ddexC:Cue.
     *
     * @return \DedexBundle\Entity\DdexC\CueThemeTypeType
     */
    public function getCueThemeType()
    {
        return $this->cueThemeType;
    }

    /**
     * Sets a new cueThemeType
     *
     * A ddex:Composite containing details of a ddex:ThemeType for the ddex:Creation referenced in the ddexC:Cue.
     *
     * @param \DedexBundle\Entity\DdexC\CueThemeTypeType $cueThemeType
     * @return self
     */
    public function setCueThemeType(?\DedexBundle\Entity\DdexC\CueThemeTypeType $cueThemeType = null)
    {
        $this->cueThemeType = $cueThemeType;
        return $this;
    }

    /**
     * Gets as cueVocalType
     *
     * A ddex:Composite containing details of a ddex:VocalType for the ddex:Creation referenced in the ddexC:Cue.
     *
     * @return \DedexBundle\Entity\DdexC\CueVocalTypeType
     */
    public function getCueVocalType()
    {
        return $this->cueVocalType;
    }

    /**
     * Sets a new cueVocalType
     *
     * A ddex:Composite containing details of a ddex:VocalType for the ddex:Creation referenced in the ddexC:Cue.
     *
     * @param \DedexBundle\Entity\DdexC\CueVocalTypeType $cueVocalType
     * @return self
     */
    public function setCueVocalType(?\DedexBundle\Entity\DdexC\CueVocalTypeType $cueVocalType = null)
    {
        $this->cueVocalType = $cueVocalType;
        return $this;
    }

    /**
     * Gets as isDance
     *
     * A ddex:Flag indicating whether a ddex:Creation contains dancing (=True) or not (=False).
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
     * A ddex:Flag indicating whether a ddex:Creation contains dancing (=True) or not (=False).
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
     * Gets as cueVisualPerceptionType
     *
     * A ddex:Composite containing details of a ddex:VisualPerceptionType for the ddex:Creation referenced in the ddexC:Cue.
     *
     * @return \DedexBundle\Entity\DdexC\CueVisualPerceptionTypeType
     */
    public function getCueVisualPerceptionType()
    {
        return $this->cueVisualPerceptionType;
    }

    /**
     * Sets a new cueVisualPerceptionType
     *
     * A ddex:Composite containing details of a ddex:VisualPerceptionType for the ddex:Creation referenced in the ddexC:Cue.
     *
     * @param \DedexBundle\Entity\DdexC\CueVisualPerceptionTypeType $cueVisualPerceptionType
     * @return self
     */
    public function setCueVisualPerceptionType(?\DedexBundle\Entity\DdexC\CueVisualPerceptionTypeType $cueVisualPerceptionType = null)
    {
        $this->cueVisualPerceptionType = $cueVisualPerceptionType;
        return $this;
    }

    /**
     * Gets as cueOrigin
     *
     * A ddex:Composite containing details of a ddex:CueOrigin for the ddexC:Cue. It can be expected that this element will be contractually mandatory in many communications of cue sheets to music rights societies.
     *
     * @return \DedexBundle\Entity\DdexC\CueOriginType
     */
    public function getCueOrigin()
    {
        return $this->cueOrigin;
    }

    /**
     * Sets a new cueOrigin
     *
     * A ddex:Composite containing details of a ddex:CueOrigin for the ddexC:Cue. It can be expected that this element will be contractually mandatory in many communications of cue sheets to music rights societies.
     *
     * @param \DedexBundle\Entity\DdexC\CueOriginType $cueOrigin
     * @return self
     */
    public function setCueOrigin(?\DedexBundle\Entity\DdexC\CueOriginType $cueOrigin = null)
    {
        $this->cueOrigin = $cueOrigin;
        return $this;
    }

    /**
     * Adds as cueCreationReference
     *
     * A ddex:Composite containing a ddex:CueCreationReference for a ddex:Creation (specific to this ddex:Message).
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\CueCreationReferenceType $cueCreationReference
     */
    public function addToCueCreationReference(\DedexBundle\Entity\DdexC\CueCreationReferenceType $cueCreationReference)
    {
        $this->cueCreationReference[] = $cueCreationReference;
        return $this;
    }

    /**
     * isset cueCreationReference
     *
     * A ddex:Composite containing a ddex:CueCreationReference for a ddex:Creation (specific to this ddex:Message).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCueCreationReference($index)
    {
        return isset($this->cueCreationReference[$index]);
    }

    /**
     * unset cueCreationReference
     *
     * A ddex:Composite containing a ddex:CueCreationReference for a ddex:Creation (specific to this ddex:Message).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCueCreationReference($index)
    {
        unset($this->cueCreationReference[$index]);
    }

    /**
     * Gets as cueCreationReference
     *
     * A ddex:Composite containing a ddex:CueCreationReference for a ddex:Creation (specific to this ddex:Message).
     *
     * @return \DedexBundle\Entity\DdexC\CueCreationReferenceType[]
     */
    public function getCueCreationReference()
    {
        return $this->cueCreationReference;
    }

    /**
     * Sets a new cueCreationReference
     *
     * A ddex:Composite containing a ddex:CueCreationReference for a ddex:Creation (specific to this ddex:Message).
     *
     * @param \DedexBundle\Entity\DdexC\CueCreationReferenceType[] $cueCreationReference
     * @return self
     */
    public function setCueCreationReference(array $cueCreationReference = null)
    {
        $this->cueCreationReference = $cueCreationReference;
        return $this;
    }

    /**
     * Gets as referencedCreationType
     *
     * A ddex:Type of the ddex:Creation referenced in the ddexC:Cue.
     *
     * @return string
     */
    public function getReferencedCreationType()
    {
        return $this->referencedCreationType;
    }

    /**
     * Sets a new referencedCreationType
     *
     * A ddex:Type of the ddex:Creation referenced in the ddexC:Cue.
     *
     * @param string $referencedCreationType
     * @return self
     */
    public function setReferencedCreationType($referencedCreationType)
    {
        $this->referencedCreationType = $referencedCreationType;
        return $this;
    }

    /**
     * Gets as referencedCreationId
     *
     * A ddex:Composite containing details of a ddex:CreationIds.
     *
     * @return \DedexBundle\Entity\DdexC\CreationIdType
     */
    public function getReferencedCreationId()
    {
        return $this->referencedCreationId;
    }

    /**
     * Sets a new referencedCreationId
     *
     * A ddex:Composite containing details of a ddex:CreationIds.
     *
     * @param \DedexBundle\Entity\DdexC\CreationIdType $referencedCreationId
     * @return self
     */
    public function setReferencedCreationId(?\DedexBundle\Entity\DdexC\CreationIdType $referencedCreationId = null)
    {
        $this->referencedCreationId = $referencedCreationId;
        return $this;
    }

    /**
     * Adds as referencedCreationTitle
     *
     * A ddex:Composite containing details of a ddex:Title of the ddex:Creation referenced in the ddexC:Cue.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\TitleType $referencedCreationTitle
     */
    public function addToReferencedCreationTitle(\DedexBundle\Entity\DdexC\TitleType $referencedCreationTitle)
    {
        $this->referencedCreationTitle[] = $referencedCreationTitle;
        return $this;
    }

    /**
     * isset referencedCreationTitle
     *
     * A ddex:Composite containing details of a ddex:Title of the ddex:Creation referenced in the ddexC:Cue.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferencedCreationTitle($index)
    {
        return isset($this->referencedCreationTitle[$index]);
    }

    /**
     * unset referencedCreationTitle
     *
     * A ddex:Composite containing details of a ddex:Title of the ddex:Creation referenced in the ddexC:Cue.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferencedCreationTitle($index)
    {
        unset($this->referencedCreationTitle[$index]);
    }

    /**
     * Gets as referencedCreationTitle
     *
     * A ddex:Composite containing details of a ddex:Title of the ddex:Creation referenced in the ddexC:Cue.
     *
     * @return \DedexBundle\Entity\DdexC\TitleType[]
     */
    public function getReferencedCreationTitle()
    {
        return $this->referencedCreationTitle;
    }

    /**
     * Sets a new referencedCreationTitle
     *
     * A ddex:Composite containing details of a ddex:Title of the ddex:Creation referenced in the ddexC:Cue.
     *
     * @param \DedexBundle\Entity\DdexC\TitleType[] $referencedCreationTitle
     * @return self
     */
    public function setReferencedCreationTitle(array $referencedCreationTitle = null)
    {
        $this->referencedCreationTitle = $referencedCreationTitle;
        return $this;
    }

    /**
     * Adds as referencedCreationContributor
     *
     * A ddex:Composite containing details a ddex:Contributor of the ddex:Creation referenced in the ddexC:Cue.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ResourceContributorType $referencedCreationContributor
     */
    public function addToReferencedCreationContributor(\DedexBundle\Entity\DdexC\ResourceContributorType $referencedCreationContributor)
    {
        $this->referencedCreationContributor[] = $referencedCreationContributor;
        return $this;
    }

    /**
     * isset referencedCreationContributor
     *
     * A ddex:Composite containing details a ddex:Contributor of the ddex:Creation referenced in the ddexC:Cue.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferencedCreationContributor($index)
    {
        return isset($this->referencedCreationContributor[$index]);
    }

    /**
     * unset referencedCreationContributor
     *
     * A ddex:Composite containing details a ddex:Contributor of the ddex:Creation referenced in the ddexC:Cue.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferencedCreationContributor($index)
    {
        unset($this->referencedCreationContributor[$index]);
    }

    /**
     * Gets as referencedCreationContributor
     *
     * A ddex:Composite containing details a ddex:Contributor of the ddex:Creation referenced in the ddexC:Cue.
     *
     * @return \DedexBundle\Entity\DdexC\ResourceContributorType[]
     */
    public function getReferencedCreationContributor()
    {
        return $this->referencedCreationContributor;
    }

    /**
     * Sets a new referencedCreationContributor
     *
     * A ddex:Composite containing details a ddex:Contributor of the ddex:Creation referenced in the ddexC:Cue.
     *
     * @param \DedexBundle\Entity\DdexC\ResourceContributorType[] $referencedCreationContributor
     * @return self
     */
    public function setReferencedCreationContributor(array $referencedCreationContributor = null)
    {
        $this->referencedCreationContributor = $referencedCreationContributor;
        return $this;
    }

    /**
     * Gets as hasMusicalContent
     *
     * A ddex:Flag indicating whether whether the ddex:Creation referenced in the ddexC:Cue contains musical content such as a ddex:SoundRecording or a ddex:MusicalWork (=True) or not (=False).
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
     * A ddex:Flag indicating whether whether the ddex:Creation referenced in the ddexC:Cue contains musical content such as a ddex:SoundRecording or a ddex:MusicalWork (=True) or not (=False).
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
     * Gets as startTime
     *
     * The start time of the ddex:Creation, measured from the start of the ddex:Resource from which the ddex:CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The start time of the ddex:Creation, measured from the start of the ddex:Resource from which the ddex:CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The ddex:Duration of the use of the ddex:Creation that is referenced in the ddex:CueCreationReference (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The ddex:Duration of the use of the ddex:Creation that is referenced in the ddex:CueCreationReference (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The end time of the ddex:Creation, measured from the start of the ddex:Resource from which the ddex:CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The end time of the ddex:Creation, measured from the start of the ddex:Resource from which the ddex:CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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

