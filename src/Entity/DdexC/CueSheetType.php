<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing CueSheetType
 *
 * A ddex:Composite containing details of a ddex:CueSheet.
 * XSD Type: CueSheet
 */
class CueSheetType
{
    /**
     * A ddex:Composite containing details of a ddex:CueSheetId of the ddexC:CueSheet.
     *
     * @var \DedexBundle\Entity\DdexC\ProprietaryIdType[] $cueSheetId
     */
    private $cueSheetId = [
        
    ];

    /**
     * The ddex:Identifier (specific to the ddex:Message) of the ddexC:CueSheet within the ddex:Release which contains it. This is a ddex:LocalCueSheetAnchor starting with the letter Q.
     *
     * @var string $cueSheetReference
     */
    private $cueSheetReference = null;

    /**
     * A ddex:Composite containing details of a ddex:Type of the ddexC:CueSheet.
     *
     * @var \DedexBundle\Entity\DdexC\CueSheetTypeType $cueSheetType
     */
    private $cueSheetType = null;

    /**
     * A ddex:Composite containing details of a ddex:Cue.
     *
     * @var \DedexBundle\Entity\DdexC\CueType[] $cue
     */
    private $cue = [
        
    ];

    /**
     * Adds as cueSheetId
     *
     * A ddex:Composite containing details of a ddex:CueSheetId of the ddexC:CueSheet.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ProprietaryIdType $cueSheetId
     */
    public function addToCueSheetId(\DedexBundle\Entity\DdexC\ProprietaryIdType $cueSheetId)
    {
        $this->cueSheetId[] = $cueSheetId;
        return $this;
    }

    /**
     * isset cueSheetId
     *
     * A ddex:Composite containing details of a ddex:CueSheetId of the ddexC:CueSheet.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCueSheetId($index)
    {
        return isset($this->cueSheetId[$index]);
    }

    /**
     * unset cueSheetId
     *
     * A ddex:Composite containing details of a ddex:CueSheetId of the ddexC:CueSheet.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCueSheetId($index)
    {
        unset($this->cueSheetId[$index]);
    }

    /**
     * Gets as cueSheetId
     *
     * A ddex:Composite containing details of a ddex:CueSheetId of the ddexC:CueSheet.
     *
     * @return \DedexBundle\Entity\DdexC\ProprietaryIdType[]
     */
    public function getCueSheetId()
    {
        return $this->cueSheetId;
    }

    /**
     * Sets a new cueSheetId
     *
     * A ddex:Composite containing details of a ddex:CueSheetId of the ddexC:CueSheet.
     *
     * @param \DedexBundle\Entity\DdexC\ProprietaryIdType[] $cueSheetId
     * @return self
     */
    public function setCueSheetId(array $cueSheetId = null)
    {
        $this->cueSheetId = $cueSheetId;
        return $this;
    }

    /**
     * Gets as cueSheetReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the ddexC:CueSheet within the ddex:Release which contains it. This is a ddex:LocalCueSheetAnchor starting with the letter Q.
     *
     * @return string
     */
    public function getCueSheetReference()
    {
        return $this->cueSheetReference;
    }

    /**
     * Sets a new cueSheetReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the ddexC:CueSheet within the ddex:Release which contains it. This is a ddex:LocalCueSheetAnchor starting with the letter Q.
     *
     * @param string $cueSheetReference
     * @return self
     */
    public function setCueSheetReference($cueSheetReference)
    {
        $this->cueSheetReference = $cueSheetReference;
        return $this;
    }

    /**
     * Gets as cueSheetType
     *
     * A ddex:Composite containing details of a ddex:Type of the ddexC:CueSheet.
     *
     * @return \DedexBundle\Entity\DdexC\CueSheetTypeType
     */
    public function getCueSheetType()
    {
        return $this->cueSheetType;
    }

    /**
     * Sets a new cueSheetType
     *
     * A ddex:Composite containing details of a ddex:Type of the ddexC:CueSheet.
     *
     * @param \DedexBundle\Entity\DdexC\CueSheetTypeType $cueSheetType
     * @return self
     */
    public function setCueSheetType(\DedexBundle\Entity\DdexC\CueSheetTypeType $cueSheetType)
    {
        $this->cueSheetType = $cueSheetType;
        return $this;
    }

    /**
     * Adds as cue
     *
     * A ddex:Composite containing details of a ddex:Cue.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\CueType $cue
     */
    public function addToCue(\DedexBundle\Entity\DdexC\CueType $cue)
    {
        $this->cue[] = $cue;
        return $this;
    }

    /**
     * isset cue
     *
     * A ddex:Composite containing details of a ddex:Cue.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCue($index)
    {
        return isset($this->cue[$index]);
    }

    /**
     * unset cue
     *
     * A ddex:Composite containing details of a ddex:Cue.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCue($index)
    {
        unset($this->cue[$index]);
    }

    /**
     * Gets as cue
     *
     * A ddex:Composite containing details of a ddex:Cue.
     *
     * @return \DedexBundle\Entity\DdexC\CueType[]
     */
    public function getCue()
    {
        return $this->cue;
    }

    /**
     * Sets a new cue
     *
     * A ddex:Composite containing details of a ddex:Cue.
     *
     * @param \DedexBundle\Entity\DdexC\CueType[] $cue
     * @return self
     */
    public function setCue(array $cue)
    {
        $this->cue = $cue;
        return $this;
    }
}

