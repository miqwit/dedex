<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing DetailedCueSheetType
 *
 * A Composite containing details of a CueSheet.
 * XSD Type: DetailedCueSheet
 */
class DetailedCueSheetType
{

    /**
     * A Composite containing details of a CueSheetId of the CueSheet.
     *
     * @var \DedexBundle\Entity\Ern41\ProprietaryIdType[] $cueSheetId
     */
    private $cueSheetId = [
        
    ];

    /**
     * The Identifier (specific to the Message) of the CueSheet within the Release which contains it. This is a LocalCueSheetAnchor starting with the letter Q.
     *
     * @var string $cueSheetReference
     */
    private $cueSheetReference = null;

    /**
     * A Composite containing details of a Type of the CueSheet.
     *
     * @var \DedexBundle\Entity\Ern41\CueSheetTypeType $cueSheetType
     */
    private $cueSheetType = null;

    /**
     * A Composite containing details of a Cue.
     *
     * @var \DedexBundle\Entity\Ern41\DetailedCueType[] $cue
     */
    private $cue = [
        
    ];

    /**
     * Adds as cueSheetId
     *
     * A Composite containing details of a CueSheetId of the CueSheet.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\ProprietaryIdType $cueSheetId
     */
    public function addToCueSheetId(\DedexBundle\Entity\Ern41\ProprietaryIdType $cueSheetId)
    {
        $this->cueSheetId[] = $cueSheetId;
        return $this;
    }

    /**
     * isset cueSheetId
     *
     * A Composite containing details of a CueSheetId of the CueSheet.
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
     * A Composite containing details of a CueSheetId of the CueSheet.
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
     * A Composite containing details of a CueSheetId of the CueSheet.
     *
     * @return \DedexBundle\Entity\Ern41\ProprietaryIdType[]
     */
    public function getCueSheetId()
    {
        return $this->cueSheetId;
    }

    /**
     * Sets a new cueSheetId
     *
     * A Composite containing details of a CueSheetId of the CueSheet.
     *
     * @param \DedexBundle\Entity\Ern41\ProprietaryIdType[] $cueSheetId
     * @return self
     */
    public function setCueSheetId(array $cueSheetId)
    {
        $this->cueSheetId = $cueSheetId;
        return $this;
    }

    /**
     * Gets as cueSheetReference
     *
     * The Identifier (specific to the Message) of the CueSheet within the Release which contains it. This is a LocalCueSheetAnchor starting with the letter Q.
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
     * The Identifier (specific to the Message) of the CueSheet within the Release which contains it. This is a LocalCueSheetAnchor starting with the letter Q.
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
     * A Composite containing details of a Type of the CueSheet.
     *
     * @return \DedexBundle\Entity\Ern41\CueSheetTypeType
     */
    public function getCueSheetType()
    {
        return $this->cueSheetType;
    }

    /**
     * Sets a new cueSheetType
     *
     * A Composite containing details of a Type of the CueSheet.
     *
     * @param \DedexBundle\Entity\Ern41\CueSheetTypeType $cueSheetType
     * @return self
     */
    public function setCueSheetType(\DedexBundle\Entity\Ern41\CueSheetTypeType $cueSheetType)
    {
        $this->cueSheetType = $cueSheetType;
        return $this;
    }

    /**
     * Adds as cue
     *
     * A Composite containing details of a Cue.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\DetailedCueType $cue
     */
    public function addToCue(\DedexBundle\Entity\Ern41\DetailedCueType $cue)
    {
        $this->cue[] = $cue;
        return $this;
    }

    /**
     * isset cue
     *
     * A Composite containing details of a Cue.
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
     * A Composite containing details of a Cue.
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
     * A Composite containing details of a Cue.
     *
     * @return \DedexBundle\Entity\Ern41\DetailedCueType[]
     */
    public function getCue()
    {
        return $this->cue;
    }

    /**
     * Sets a new cue
     *
     * A Composite containing details of a Cue.
     *
     * @param \DedexBundle\Entity\Ern41\DetailedCueType[] $cue
     * @return self
     */
    public function setCue(array $cue)
    {
        $this->cue = $cue;
        return $this;
    }


}

