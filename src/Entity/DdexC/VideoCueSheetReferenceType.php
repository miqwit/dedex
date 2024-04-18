<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing VideoCueSheetReferenceType
 *
 * A ddex:Composite containing a ddex:VideoCueSheetReference.
 * XSD Type: VideoCueSheetReference
 */
class VideoCueSheetReferenceType
{
    /**
     * A ddex:Reference for a ddex:CueSheet (specific to this ddex:Message). This is a ddex:LocalCueSheetAnchorReference starting with the letter Q.
     *
     * @var string $videoCueSheetReference
     */
    private $videoCueSheetReference = null;

    /**
     * Gets as videoCueSheetReference
     *
     * A ddex:Reference for a ddex:CueSheet (specific to this ddex:Message). This is a ddex:LocalCueSheetAnchorReference starting with the letter Q.
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
     * A ddex:Reference for a ddex:CueSheet (specific to this ddex:Message). This is a ddex:LocalCueSheetAnchorReference starting with the letter Q.
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

