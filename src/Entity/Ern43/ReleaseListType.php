<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing ReleaseListType
 *
 * A Composite containing details of one or more Releases.
 * XSD Type: ReleaseList
 */
class ReleaseListType
{
    /**
     * A Composite containing details of a DDEX Release.
     *
     * @var \DedexBundle\Entity\Ern43\ReleaseType $release
     */
    private $release = null;

    /**
     * A Composite containing details of a DDEX TrackRelease.
     *
     * @var \DedexBundle\Entity\Ern43\TrackReleaseType[] $trackRelease
     */
    private $trackRelease = [
        
    ];

    /**
     * A Composite containing details of a DDEX clip Release.
     *
     * @var \DedexBundle\Entity\Ern43\ClipReleaseType[] $clipRelease
     */
    private $clipRelease = [
        
    ];

    /**
     * Gets as release
     *
     * A Composite containing details of a DDEX Release.
     *
     * @return \DedexBundle\Entity\Ern43\ReleaseType
     */
    public function getRelease()
    {
        return $this->release;
    }

    /**
     * Sets a new release
     *
     * A Composite containing details of a DDEX Release.
     *
     * @param \DedexBundle\Entity\Ern43\ReleaseType $release
     * @return self
     */
    public function setRelease(?\DedexBundle\Entity\Ern43\ReleaseType $release = null)
    {
        $this->release = $release;
        return $this;
    }

    /**
     * Adds as trackRelease
     *
     * A Composite containing details of a DDEX TrackRelease.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\TrackReleaseType $trackRelease
     */
    public function addToTrackRelease(\DedexBundle\Entity\Ern43\TrackReleaseType $trackRelease)
    {
        $this->trackRelease[] = $trackRelease;
        return $this;
    }

    /**
     * isset trackRelease
     *
     * A Composite containing details of a DDEX TrackRelease.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTrackRelease($index)
    {
        return isset($this->trackRelease[$index]);
    }

    /**
     * unset trackRelease
     *
     * A Composite containing details of a DDEX TrackRelease.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTrackRelease($index)
    {
        unset($this->trackRelease[$index]);
    }

    /**
     * Gets as trackRelease
     *
     * A Composite containing details of a DDEX TrackRelease.
     *
     * @return \DedexBundle\Entity\Ern43\TrackReleaseType[]
     */
    public function getTrackRelease()
    {
        return $this->trackRelease;
    }

    /**
     * Sets a new trackRelease
     *
     * A Composite containing details of a DDEX TrackRelease.
     *
     * @param \DedexBundle\Entity\Ern43\TrackReleaseType[] $trackRelease
     * @return self
     */
    public function setTrackRelease(array $trackRelease = null)
    {
        $this->trackRelease = $trackRelease;
        return $this;
    }

    /**
     * Adds as clipRelease
     *
     * A Composite containing details of a DDEX clip Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\ClipReleaseType $clipRelease
     */
    public function addToClipRelease(\DedexBundle\Entity\Ern43\ClipReleaseType $clipRelease)
    {
        $this->clipRelease[] = $clipRelease;
        return $this;
    }

    /**
     * isset clipRelease
     *
     * A Composite containing details of a DDEX clip Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClipRelease($index)
    {
        return isset($this->clipRelease[$index]);
    }

    /**
     * unset clipRelease
     *
     * A Composite containing details of a DDEX clip Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClipRelease($index)
    {
        unset($this->clipRelease[$index]);
    }

    /**
     * Gets as clipRelease
     *
     * A Composite containing details of a DDEX clip Release.
     *
     * @return \DedexBundle\Entity\Ern43\ClipReleaseType[]
     */
    public function getClipRelease()
    {
        return $this->clipRelease;
    }

    /**
     * Sets a new clipRelease
     *
     * A Composite containing details of a DDEX clip Release.
     *
     * @param \DedexBundle\Entity\Ern43\ClipReleaseType[] $clipRelease
     * @return self
     */
    public function setClipRelease(array $clipRelease = null)
    {
        $this->clipRelease = $clipRelease;
        return $this;
    }
}

