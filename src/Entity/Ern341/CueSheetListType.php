<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing CueSheetListType
 *
 * A ddex:Composite containing details of one or more ddex:CueSheets.
 * XSD Type: CueSheetList
 */
class CueSheetListType
{
    /**
     * A ddex:Composite containing details of a ddex:CueSheet contained in a ddex:Resource.
     *
     * @var \DedexBundle\Entity\Ern341\CueSheetType[] $cueSheet
     */
    private $cueSheet = [
        
    ];

    /**
     * Adds as cueSheet
     *
     * A ddex:Composite containing details of a ddex:CueSheet contained in a ddex:Resource.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\CueSheetType $cueSheet
     */
    public function addToCueSheet(\DedexBundle\Entity\Ern341\CueSheetType $cueSheet)
    {
        $this->cueSheet[] = $cueSheet;
        return $this;
    }

    /**
     * isset cueSheet
     *
     * A ddex:Composite containing details of a ddex:CueSheet contained in a ddex:Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCueSheet($index)
    {
        return isset($this->cueSheet[$index]);
    }

    /**
     * unset cueSheet
     *
     * A ddex:Composite containing details of a ddex:CueSheet contained in a ddex:Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCueSheet($index)
    {
        unset($this->cueSheet[$index]);
    }

    /**
     * Gets as cueSheet
     *
     * A ddex:Composite containing details of a ddex:CueSheet contained in a ddex:Resource.
     *
     * @return \DedexBundle\Entity\Ern341\CueSheetType[]
     */
    public function getCueSheet()
    {
        return $this->cueSheet;
    }

    /**
     * Sets a new cueSheet
     *
     * A ddex:Composite containing details of a ddex:CueSheet contained in a ddex:Resource.
     *
     * @param \DedexBundle\Entity\Ern341\CueSheetType[] $cueSheet
     * @return self
     */
    public function setCueSheet(array $cueSheet)
    {
        $this->cueSheet = $cueSheet;
        return $this;
    }
}

