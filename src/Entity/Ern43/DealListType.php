<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing DealListType
 *
 * A Composite containing details of one or more Deals.
 * XSD Type: DealList
 */
class DealListType
{
    /**
     * A Composite containing details of one or more Deals pertaining to one or more Releases.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/multiple-deals-for-one-release
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/newreleasemessage-with-no-deal
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/complex-deals-can-be-dangerous
     *
     * @var \DedexBundle\Entity\Ern43\ReleaseDealType[] $releaseDeal
     */
    private $releaseDeal = [
        
    ];

    /**
     * A Composite containing details of a set of Dates specifying when a Release can be shown to Consumers.
     *
     * @var \DedexBundle\Entity\Ern43\ReleaseVisibilityType[] $releaseVisibility
     */
    private $releaseVisibility = [
        
    ];

    /**
     * A Composite containing details of a set of Dates specifying when a TrackRelease can be shown to Consumers.
     *
     * @var \DedexBundle\Entity\Ern43\TrackReleaseVisibilityType[] $trackReleaseVisibility
     */
    private $trackReleaseVisibility = [
        
    ];

    /**
     * Adds as releaseDeal
     *
     * A Composite containing details of one or more Deals pertaining to one or more Releases.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/multiple-deals-for-one-release
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/newreleasemessage-with-no-deal
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/complex-deals-can-be-dangerous
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\ReleaseDealType $releaseDeal
     */
    public function addToReleaseDeal(\DedexBundle\Entity\Ern43\ReleaseDealType $releaseDeal)
    {
        $this->releaseDeal[] = $releaseDeal;
        return $this;
    }

    /**
     * isset releaseDeal
     *
     * A Composite containing details of one or more Deals pertaining to one or more Releases.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/multiple-deals-for-one-release
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/newreleasemessage-with-no-deal
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/complex-deals-can-be-dangerous
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseDeal($index)
    {
        return isset($this->releaseDeal[$index]);
    }

    /**
     * unset releaseDeal
     *
     * A Composite containing details of one or more Deals pertaining to one or more Releases.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/multiple-deals-for-one-release
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/newreleasemessage-with-no-deal
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/complex-deals-can-be-dangerous
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseDeal($index)
    {
        unset($this->releaseDeal[$index]);
    }

    /**
     * Gets as releaseDeal
     *
     * A Composite containing details of one or more Deals pertaining to one or more Releases.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/multiple-deals-for-one-release
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/newreleasemessage-with-no-deal
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/complex-deals-can-be-dangerous
     *
     * @return \DedexBundle\Entity\Ern43\ReleaseDealType[]
     */
    public function getReleaseDeal()
    {
        return $this->releaseDeal;
    }

    /**
     * Sets a new releaseDeal
     *
     * A Composite containing details of one or more Deals pertaining to one or more Releases.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/multiple-deals-for-one-release
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/newreleasemessage-with-no-deal
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/complex-deals-can-be-dangerous
     *
     * @param \DedexBundle\Entity\Ern43\ReleaseDealType[] $releaseDeal
     * @return self
     */
    public function setReleaseDeal(array $releaseDeal)
    {
        $this->releaseDeal = $releaseDeal;
        return $this;
    }

    /**
     * Adds as releaseVisibility
     *
     * A Composite containing details of a set of Dates specifying when a Release can be shown to Consumers.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\ReleaseVisibilityType $releaseVisibility
     */
    public function addToReleaseVisibility(\DedexBundle\Entity\Ern43\ReleaseVisibilityType $releaseVisibility)
    {
        $this->releaseVisibility[] = $releaseVisibility;
        return $this;
    }

    /**
     * isset releaseVisibility
     *
     * A Composite containing details of a set of Dates specifying when a Release can be shown to Consumers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseVisibility($index)
    {
        return isset($this->releaseVisibility[$index]);
    }

    /**
     * unset releaseVisibility
     *
     * A Composite containing details of a set of Dates specifying when a Release can be shown to Consumers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseVisibility($index)
    {
        unset($this->releaseVisibility[$index]);
    }

    /**
     * Gets as releaseVisibility
     *
     * A Composite containing details of a set of Dates specifying when a Release can be shown to Consumers.
     *
     * @return \DedexBundle\Entity\Ern43\ReleaseVisibilityType[]
     */
    public function getReleaseVisibility()
    {
        return $this->releaseVisibility;
    }

    /**
     * Sets a new releaseVisibility
     *
     * A Composite containing details of a set of Dates specifying when a Release can be shown to Consumers.
     *
     * @param \DedexBundle\Entity\Ern43\ReleaseVisibilityType[] $releaseVisibility
     * @return self
     */
    public function setReleaseVisibility(array $releaseVisibility = null)
    {
        $this->releaseVisibility = $releaseVisibility;
        return $this;
    }

    /**
     * Adds as trackReleaseVisibility
     *
     * A Composite containing details of a set of Dates specifying when a TrackRelease can be shown to Consumers.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\TrackReleaseVisibilityType $trackReleaseVisibility
     */
    public function addToTrackReleaseVisibility(\DedexBundle\Entity\Ern43\TrackReleaseVisibilityType $trackReleaseVisibility)
    {
        $this->trackReleaseVisibility[] = $trackReleaseVisibility;
        return $this;
    }

    /**
     * isset trackReleaseVisibility
     *
     * A Composite containing details of a set of Dates specifying when a TrackRelease can be shown to Consumers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTrackReleaseVisibility($index)
    {
        return isset($this->trackReleaseVisibility[$index]);
    }

    /**
     * unset trackReleaseVisibility
     *
     * A Composite containing details of a set of Dates specifying when a TrackRelease can be shown to Consumers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTrackReleaseVisibility($index)
    {
        unset($this->trackReleaseVisibility[$index]);
    }

    /**
     * Gets as trackReleaseVisibility
     *
     * A Composite containing details of a set of Dates specifying when a TrackRelease can be shown to Consumers.
     *
     * @return \DedexBundle\Entity\Ern43\TrackReleaseVisibilityType[]
     */
    public function getTrackReleaseVisibility()
    {
        return $this->trackReleaseVisibility;
    }

    /**
     * Sets a new trackReleaseVisibility
     *
     * A Composite containing details of a set of Dates specifying when a TrackRelease can be shown to Consumers.
     *
     * @param \DedexBundle\Entity\Ern43\TrackReleaseVisibilityType[] $trackReleaseVisibility
     * @return self
     */
    public function setTrackReleaseVisibility(array $trackReleaseVisibility = null)
    {
        $this->trackReleaseVisibility = $trackReleaseVisibility;
        return $this;
    }
}

