<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing CueSheetListType
 *
 * A Composite containing details of one or more
 *  CueSheets.
 * XSD Type: CueSheetList
 */
class CueSheetListType
{
    /**
     * A Composite containing details of a
     *  CueSheet contained in a Resource.
     *
     * @var \DedexBundle\Entity\Ern383\CueSheetType[] $cueSheet
     */
    private $cueSheet = [
        
    ];

    /**
     * Adds as cueSheet
     *
     * A Composite containing details of a
     *  CueSheet contained in a Resource.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\CueSheetType $cueSheet
     */
    public function addToCueSheet(\DedexBundle\Entity\Ern383\CueSheetType $cueSheet)
    {
        $this->cueSheet[] = $cueSheet;
        return $this;
    }

    /**
     * isset cueSheet
     *
     * A Composite containing details of a
     *  CueSheet contained in a Resource.
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
     * A Composite containing details of a
     *  CueSheet contained in a Resource.
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
     * A Composite containing details of a
     *  CueSheet contained in a Resource.
     *
     * @return \DedexBundle\Entity\Ern383\CueSheetType[]
     */
    public function getCueSheet()
    {
        return $this->cueSheet;
    }

    /**
     * Sets a new cueSheet
     *
     * A Composite containing details of a
     *  CueSheet contained in a Resource.
     *
     * @param \DedexBundle\Entity\Ern383\CueSheetType[] $cueSheet
     * @return self
     */
    public function setCueSheet(array $cueSheet)
    {
        $this->cueSheet = $cueSheet;
        return $this;
    }
}

