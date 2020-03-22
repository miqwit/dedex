<?php

namespace DedexBundle\Entity\Ern;

/**
 * Class representing VideoCueSheetReferenceType
 *
 * A Composite containing a
 *  VideoCueSheetReference.
 * XSD Type: VideoCueSheetReference
 */
class VideoCueSheetReferenceType
{

    /**
     * A Reference for a CueSheet (specific to
     *  this Message). This is a LocalCueSheetAnchorReference starting with the letter
     *  Q.
     *
     * @var string $videoCueSheetReference
     */
    private $videoCueSheetReference = null;

    /**
     * Gets as videoCueSheetReference
     *
     * A Reference for a CueSheet (specific to
     *  this Message). This is a LocalCueSheetAnchorReference starting with the letter
     *  Q.
     *
     * @return string
     */
    public function getVideoCueSheetReference()
    {
        return $this->videoCueSheetReference;
    }

    /**
     * Sets a new videoCueSheetReference
     *
     * A Reference for a CueSheet (specific to
     *  this Message). This is a LocalCueSheetAnchorReference starting with the letter
     *  Q.
     *
     * @param string $videoCueSheetReference
     * @return self
     */
    public function setVideoCueSheetReference($videoCueSheetReference)
    {
        $this->videoCueSheetReference = $videoCueSheetReference;
        return $this;
    }


}

