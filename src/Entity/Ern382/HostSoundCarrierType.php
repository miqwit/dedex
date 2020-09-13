<?php

namespace DedexBundle\Entity\Ern382;

/**
 * Class representing HostSoundCarrierType
 *
 * A Composite containing details of a
 *  HostSoundCarrier of a SoundRecording. This Composite exists in the Release Notification
 *  Message Suite Standard to support the identification and matching of SoundRecording
 *  information.
 * XSD Type: HostSoundCarrier
 */
class HostSoundCarrierType
{

    /**
     * A Composite containing details of
     *  ReleaseIds of the HostSoundCarrier. If available, a GRid has to be used. If the
     *  HostSoundCarrier contains only one SoundRecording, the ISRC of the SoundRecording
     *  may be used instead.
     *
     * @var \DedexBundle\Entity\Ern382\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * A Composite containing details of
     *  Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s)
     *  used in the HostSoundCarrier.
     *
     * @var \DedexBundle\Entity\Ern382\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A Composite containing details of a Title
     *  of the HostSoundCarrier.
     *
     * @var \DedexBundle\Entity\Ern382\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing details of the
     *  DisplayArtist for the HostSoundCarrier. The DisplayArtist may be described through
     *  Name, Identifier and Roles.
     *
     * @var \DedexBundle\Entity\Ern382\ArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * A Composite containing details of the
     *  AdministratingRecordCompany for the Rights in the
     *  HostSoundCarrier.
     *
     * @var \DedexBundle\Entity\Ern382\AdministratingRecordCompanyType[] $administratingRecordCompany
     */
    private $administratingRecordCompany = [
        
    ];

    /**
     * The TrackNumber of the SoundRecording
     *  within the HostSoundCarrier.
     *
     * @var string $trackNumber
     */
    private $trackNumber = null;

    /**
     * The SequenceNumber within the Set of the
     *  volume containing the SoundRecording, where the HostSoundCarrier is a Set (such as
     *  a 'box set' of CDs).
     *
     * @var string $volumeNumberInSet
     */
    private $volumeNumberInSet = null;

    /**
     * Adds as releaseId
     *
     * A Composite containing details of
     *  ReleaseIds of the HostSoundCarrier. If available, a GRid has to be used. If the
     *  HostSoundCarrier contains only one SoundRecording, the ISRC of the SoundRecording
     *  may be used instead.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\ReleaseIdType $releaseId
     */
    public function addToReleaseId(\DedexBundle\Entity\Ern382\ReleaseIdType $releaseId)
    {
        $this->releaseId[] = $releaseId;
        return $this;
    }

    /**
     * isset releaseId
     *
     * A Composite containing details of
     *  ReleaseIds of the HostSoundCarrier. If available, a GRid has to be used. If the
     *  HostSoundCarrier contains only one SoundRecording, the ISRC of the SoundRecording
     *  may be used instead.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseId($index)
    {
        return isset($this->releaseId[$index]);
    }

    /**
     * unset releaseId
     *
     * A Composite containing details of
     *  ReleaseIds of the HostSoundCarrier. If available, a GRid has to be used. If the
     *  HostSoundCarrier contains only one SoundRecording, the ISRC of the SoundRecording
     *  may be used instead.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseId($index)
    {
        unset($this->releaseId[$index]);
    }

    /**
     * Gets as releaseId
     *
     * A Composite containing details of
     *  ReleaseIds of the HostSoundCarrier. If available, a GRid has to be used. If the
     *  HostSoundCarrier contains only one SoundRecording, the ISRC of the SoundRecording
     *  may be used instead.
     *
     * @return \DedexBundle\Entity\Ern382\ReleaseIdType[]
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of
     *  ReleaseIds of the HostSoundCarrier. If available, a GRid has to be used. If the
     *  HostSoundCarrier contains only one SoundRecording, the ISRC of the SoundRecording
     *  may be used instead.
     *
     * @param \DedexBundle\Entity\Ern382\ReleaseIdType[] $releaseId
     * @return self
     */
    public function setReleaseId(array $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as rightsAgreementId
     *
     * A Composite containing details of
     *  Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s)
     *  used in the HostSoundCarrier.
     *
     * @return \DedexBundle\Entity\Ern382\RightsAgreementIdType
     */
    public function getRightsAgreementId()
    {
        return $this->rightsAgreementId;
    }

    /**
     * Sets a new rightsAgreementId
     *
     * A Composite containing details of
     *  Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s)
     *  used in the HostSoundCarrier.
     *
     * @param \DedexBundle\Entity\Ern382\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(\DedexBundle\Entity\Ern382\RightsAgreementIdType $rightsAgreementId)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title
     *  of the HostSoundCarrier.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\TitleType $title
     */
    public function addToTitle(\DedexBundle\Entity\Ern382\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title
     *  of the HostSoundCarrier.
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
     *  of the HostSoundCarrier.
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
     *  of the HostSoundCarrier.
     *
     * @return \DedexBundle\Entity\Ern382\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title
     *  of the HostSoundCarrier.
     *
     * @param \DedexBundle\Entity\Ern382\TitleType[] $title
     * @return self
     */
    public function setTitle(array $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as displayArtist
     *
     * A Composite containing details of the
     *  DisplayArtist for the HostSoundCarrier. The DisplayArtist may be described through
     *  Name, Identifier and Roles.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\ArtistType $displayArtist
     */
    public function addToDisplayArtist(\DedexBundle\Entity\Ern382\ArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A Composite containing details of the
     *  DisplayArtist for the HostSoundCarrier. The DisplayArtist may be described through
     *  Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayArtist($index)
    {
        return isset($this->displayArtist[$index]);
    }

    /**
     * unset displayArtist
     *
     * A Composite containing details of the
     *  DisplayArtist for the HostSoundCarrier. The DisplayArtist may be described through
     *  Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayArtist($index)
    {
        unset($this->displayArtist[$index]);
    }

    /**
     * Gets as displayArtist
     *
     * A Composite containing details of the
     *  DisplayArtist for the HostSoundCarrier. The DisplayArtist may be described through
     *  Name, Identifier and Roles.
     *
     * @return \DedexBundle\Entity\Ern382\ArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A Composite containing details of the
     *  DisplayArtist for the HostSoundCarrier. The DisplayArtist may be described through
     *  Name, Identifier and Roles.
     *
     * @param \DedexBundle\Entity\Ern382\ArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Adds as administratingRecordCompany
     *
     * A Composite containing details of the
     *  AdministratingRecordCompany for the Rights in the
     *  HostSoundCarrier.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\AdministratingRecordCompanyType $administratingRecordCompany
     */
    public function addToAdministratingRecordCompany(\DedexBundle\Entity\Ern382\AdministratingRecordCompanyType $administratingRecordCompany)
    {
        $this->administratingRecordCompany[] = $administratingRecordCompany;
        return $this;
    }

    /**
     * isset administratingRecordCompany
     *
     * A Composite containing details of the
     *  AdministratingRecordCompany for the Rights in the
     *  HostSoundCarrier.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdministratingRecordCompany($index)
    {
        return isset($this->administratingRecordCompany[$index]);
    }

    /**
     * unset administratingRecordCompany
     *
     * A Composite containing details of the
     *  AdministratingRecordCompany for the Rights in the
     *  HostSoundCarrier.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdministratingRecordCompany($index)
    {
        unset($this->administratingRecordCompany[$index]);
    }

    /**
     * Gets as administratingRecordCompany
     *
     * A Composite containing details of the
     *  AdministratingRecordCompany for the Rights in the
     *  HostSoundCarrier.
     *
     * @return \DedexBundle\Entity\Ern382\AdministratingRecordCompanyType[]
     */
    public function getAdministratingRecordCompany()
    {
        return $this->administratingRecordCompany;
    }

    /**
     * Sets a new administratingRecordCompany
     *
     * A Composite containing details of the
     *  AdministratingRecordCompany for the Rights in the
     *  HostSoundCarrier.
     *
     * @param \DedexBundle\Entity\Ern382\AdministratingRecordCompanyType[] $administratingRecordCompany
     * @return self
     */
    public function setAdministratingRecordCompany(array $administratingRecordCompany)
    {
        $this->administratingRecordCompany = $administratingRecordCompany;
        return $this;
    }

    /**
     * Gets as trackNumber
     *
     * The TrackNumber of the SoundRecording
     *  within the HostSoundCarrier.
     *
     * @return string
     */
    public function getTrackNumber()
    {
        return $this->trackNumber;
    }

    /**
     * Sets a new trackNumber
     *
     * The TrackNumber of the SoundRecording
     *  within the HostSoundCarrier.
     *
     * @param string $trackNumber
     * @return self
     */
    public function setTrackNumber($trackNumber)
    {
        $this->trackNumber = $trackNumber;
        return $this;
    }

    /**
     * Gets as volumeNumberInSet
     *
     * The SequenceNumber within the Set of the
     *  volume containing the SoundRecording, where the HostSoundCarrier is a Set (such as
     *  a 'box set' of CDs).
     *
     * @return string
     */
    public function getVolumeNumberInSet()
    {
        return $this->volumeNumberInSet;
    }

    /**
     * Sets a new volumeNumberInSet
     *
     * The SequenceNumber within the Set of the
     *  volume containing the SoundRecording, where the HostSoundCarrier is a Set (such as
     *  a 'box set' of CDs).
     *
     * @param string $volumeNumberInSet
     * @return self
     */
    public function setVolumeNumberInSet($volumeNumberInSet)
    {
        $this->volumeNumberInSet = $volumeNumberInSet;
        return $this;
    }


}

