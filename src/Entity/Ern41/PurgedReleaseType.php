<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing PurgedReleaseType
 *
 * A Composite containing details of a DDEX Release to be purged.
 * XSD Type: PurgedRelease
 */
class PurgedReleaseType
{

    /**
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @var \DedexBundle\Entity\Ern41\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * A Composite containing details of a Title of the Release.
     *
     * @var \DedexBundle\Entity\Ern41\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing details of a Contributor to the Release.
     *
     * @var \DedexBundle\Entity\Ern41\DetailedResourceContributorType[] $contributor
     */
    private $contributor = [
        
    ];

    /**
     * Gets as releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @return \DedexBundle\Entity\Ern41\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @param \DedexBundle\Entity\Ern41\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(\DedexBundle\Entity\Ern41\ReleaseIdType $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title of the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\TitleType $title
     */
    public function addToTitle(\DedexBundle\Entity\Ern41\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title of the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTitle($index)
    {
        return isset($this->title[$index]);
    }

    /**
     * unset title
     *
     * A Composite containing details of a Title of the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTitle($index)
    {
        unset($this->title[$index]);
    }

    /**
     * Gets as title
     *
     * A Composite containing details of a Title of the Release.
     *
     * @return \DedexBundle\Entity\Ern41\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title of the Release.
     *
     * @param \DedexBundle\Entity\Ern41\TitleType[] $title
     * @return self
     */
    public function setTitle(array $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as contributor
     *
     * A Composite containing details of a Contributor to the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern41\DetailedResourceContributorType $contributor
     */
    public function addToContributor(\DedexBundle\Entity\Ern41\DetailedResourceContributorType $contributor)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * isset contributor
     *
     * A Composite containing details of a Contributor to the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContributor($index)
    {
        return isset($this->contributor[$index]);
    }

    /**
     * unset contributor
     *
     * A Composite containing details of a Contributor to the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContributor($index)
    {
        unset($this->contributor[$index]);
    }

    /**
     * Gets as contributor
     *
     * A Composite containing details of a Contributor to the Release.
     *
     * @return \DedexBundle\Entity\Ern41\DetailedResourceContributorType[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Sets a new contributor
     *
     * A Composite containing details of a Contributor to the Release.
     *
     * @param \DedexBundle\Entity\Ern41\DetailedResourceContributorType[] $contributor
     * @return self
     */
    public function setContributor(array $contributor)
    {
        $this->contributor = $contributor;
        return $this;
    }


}

