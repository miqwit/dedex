<?php

namespace DedexBundle\Entity\Ern;

/**
 * Class representing PurgedReleaseType
 *
 * A Composite containing details of a DDEX Release
 *  to be purged.
 * XSD Type: PurgedRelease
 */
class PurgedReleaseType
{

    /**
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid has to be used. If the Release contains only one
     *  SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release
     *  is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of
     *  the PhysicalProduct may be used instead.
     *
     * @var \DedexBundle\Entity\Ern\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * A Composite containing details of a Title
     *  of the Release.
     *
     * @var \DedexBundle\Entity\Ern\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing details of a
     *  Contributor to the Release.
     *
     * @var \DedexBundle\Entity\Ern\DetailedResourceContributorType[] $resourceContributor
     */
    private $resourceContributor = [
        
    ];

    /**
     * Gets as releaseId
     *
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid has to be used. If the Release contains only one
     *  SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release
     *  is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of
     *  the PhysicalProduct may be used instead.
     *
     * @return \DedexBundle\Entity\Ern\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid has to be used. If the Release contains only one
     *  SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release
     *  is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of
     *  the PhysicalProduct may be used instead.
     *
     * @param \DedexBundle\Entity\Ern\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(\DedexBundle\Entity\Ern\ReleaseIdType $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title
     *  of the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\TitleType $title
     */
    public function addToTitle(\DedexBundle\Entity\Ern\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title
     *  of the Release.
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
     * A Composite containing details of a Title
     *  of the Release.
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
     * A Composite containing details of a Title
     *  of the Release.
     *
     * @return \DedexBundle\Entity\Ern\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title
     *  of the Release.
     *
     * @param \DedexBundle\Entity\Ern\TitleType[] $title
     * @return self
     */
    public function setTitle(array $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as resourceContributor
     *
     * A Composite containing details of a
     *  Contributor to the Release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\DetailedResourceContributorType $resourceContributor
     */
    public function addToResourceContributor(\DedexBundle\Entity\Ern\DetailedResourceContributorType $resourceContributor)
    {
        $this->resourceContributor[] = $resourceContributor;
        return $this;
    }

    /**
     * isset resourceContributor
     *
     * A Composite containing details of a
     *  Contributor to the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceContributor($index)
    {
        return isset($this->resourceContributor[$index]);
    }

    /**
     * unset resourceContributor
     *
     * A Composite containing details of a
     *  Contributor to the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceContributor($index)
    {
        unset($this->resourceContributor[$index]);
    }

    /**
     * Gets as resourceContributor
     *
     * A Composite containing details of a
     *  Contributor to the Release.
     *
     * @return \DedexBundle\Entity\Ern\DetailedResourceContributorType[]
     */
    public function getResourceContributor()
    {
        return $this->resourceContributor;
    }

    /**
     * Sets a new resourceContributor
     *
     * A Composite containing details of a
     *  Contributor to the Release.
     *
     * @param \DedexBundle\Entity\Ern\DetailedResourceContributorType[] $resourceContributor
     * @return self
     */
    public function setResourceContributor(array $resourceContributor)
    {
        $this->resourceContributor = $resourceContributor;
        return $this;
    }


}

