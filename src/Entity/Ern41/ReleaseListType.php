<?php

namespace DedexBundle\Entity\Ern41;

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
     * @var \DedexBundle\Entity\Ern\ReleaseType $release
     */
    private $release = null;

    /**
     * A Composite containing details of a DDEX TrackRelease.
     *
     * @var \DedexBundle\Entity\Ern\TrackReleaseType[] $trackRelease
     */
    private $trackRelease = [
        
    ];

    /**
     * Gets as release
     *
     * A Composite containing details of a DDEX Release.
     *
     * @return \DedexBundle\Entity\Ern\ReleaseType
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
     * @param \DedexBundle\Entity\Ern\ReleaseType $release
     * @return self
     */
    public function setRelease(\DedexBundle\Entity\Ern\ReleaseType $release)
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
     * @param \DedexBundle\Entity\Ern\TrackReleaseType $trackRelease
     */
    public function addToTrackRelease(\DedexBundle\Entity\Ern\TrackReleaseType $trackRelease)
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
     * @return \DedexBundle\Entity\Ern\TrackReleaseType[]
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
     * @param \DedexBundle\Entity\Ern\TrackReleaseType[] $trackRelease
     * @return self
     */
    public function setTrackRelease(array $trackRelease)
    {
        $this->trackRelease = $trackRelease;
        return $this;
    }


}

