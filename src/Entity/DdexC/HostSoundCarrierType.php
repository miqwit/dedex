<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing HostSoundCarrierType
 *
 * A ddex:Composite containing details of a ddex:HostSoundCarrier of a ddex:SoundRecording. This ddex:Composite exists in the Release Notification Message Suite Standard to support the identification and matching of ddex:SoundRecording information.
 * XSD Type: HostSoundCarrier
 */
class HostSoundCarrierType
{
    /**
     * A ddex:Composite containing details of ddex:ReleaseIds of the ddexC:HostSoundCarrier. If available, a ddex:GRid has to be used. If the ddexC:HostSoundCarrier contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead.
     *
     * @var \DedexBundle\Entity\DdexC\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ddexC:HostSoundCarrier.
     *
     * @var \DedexBundle\Entity\DdexC\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A ddex:Composite containing details of a ddex:Title of the ddexC:HostSoundCarrier.
     *
     * @var \DedexBundle\Entity\DdexC\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddexC:HostSoundCarrier. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @var \DedexBundle\Entity\DdexC\ArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:AdministratingRecordCompany for the Rights in the ddexC:HostSoundCarrier.
     *
     * @var \DedexBundle\Entity\DdexC\AdministratingRecordCompanyType[] $administratingRecordCompany
     */
    private $administratingRecordCompany = [
        
    ];

    /**
     * The ddex:TrackNumber of the ddex:SoundRecording within the ddexC:HostSoundCarrier.
     *
     * @var string $trackNumber
     */
    private $trackNumber = null;

    /**
     * The ddex:SequenceNumber within the ddex:Set of the volume containing the ddex:SoundRecording, where the ddexC:HostSoundCarrier is a ddex:Set (such as a 'box set' of CDs).
     *
     * @var string $volumeNumberInSet
     */
    private $volumeNumberInSet = null;

    /**
     * Adds as releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds of the ddexC:HostSoundCarrier. If available, a ddex:GRid has to be used. If the ddexC:HostSoundCarrier contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ReleaseIdType $releaseId
     */
    public function addToReleaseId(\DedexBundle\Entity\DdexC\ReleaseIdType $releaseId)
    {
        $this->releaseId[] = $releaseId;
        return $this;
    }

    /**
     * isset releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds of the ddexC:HostSoundCarrier. If available, a ddex:GRid has to be used. If the ddexC:HostSoundCarrier contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead.
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
     * A ddex:Composite containing details of ddex:ReleaseIds of the ddexC:HostSoundCarrier. If available, a ddex:GRid has to be used. If the ddexC:HostSoundCarrier contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead.
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
     * A ddex:Composite containing details of ddex:ReleaseIds of the ddexC:HostSoundCarrier. If available, a ddex:GRid has to be used. If the ddexC:HostSoundCarrier contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead.
     *
     * @return \DedexBundle\Entity\DdexC\ReleaseIdType[]
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds of the ddexC:HostSoundCarrier. If available, a ddex:GRid has to be used. If the ddexC:HostSoundCarrier contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead.
     *
     * @param \DedexBundle\Entity\DdexC\ReleaseIdType[] $releaseId
     * @return self
     */
    public function setReleaseId(array $releaseId = null)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as rightsAgreementId
     *
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ddexC:HostSoundCarrier.
     *
     * @return \DedexBundle\Entity\DdexC\RightsAgreementIdType
     */
    public function getRightsAgreementId()
    {
        return $this->rightsAgreementId;
    }

    /**
     * Sets a new rightsAgreementId
     *
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ddexC:HostSoundCarrier.
     *
     * @param \DedexBundle\Entity\DdexC\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DedexBundle\Entity\DdexC\RightsAgreementIdType $rightsAgreementId = null)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }

    /**
     * Adds as title
     *
     * A ddex:Composite containing details of a ddex:Title of the ddexC:HostSoundCarrier.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\TitleType $title
     */
    public function addToTitle(\DedexBundle\Entity\DdexC\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A ddex:Composite containing details of a ddex:Title of the ddexC:HostSoundCarrier.
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
     * A ddex:Composite containing details of a ddex:Title of the ddexC:HostSoundCarrier.
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
     * A ddex:Composite containing details of a ddex:Title of the ddexC:HostSoundCarrier.
     *
     * @return \DedexBundle\Entity\DdexC\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A ddex:Composite containing details of a ddex:Title of the ddexC:HostSoundCarrier.
     *
     * @param \DedexBundle\Entity\DdexC\TitleType[] $title
     * @return self
     */
    public function setTitle(array $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as displayArtist
     *
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddexC:HostSoundCarrier. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ArtistType $displayArtist
     */
    public function addToDisplayArtist(\DedexBundle\Entity\DdexC\ArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddexC:HostSoundCarrier. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
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
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddexC:HostSoundCarrier. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
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
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddexC:HostSoundCarrier. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @return \DedexBundle\Entity\DdexC\ArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddexC:HostSoundCarrier. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @param \DedexBundle\Entity\DdexC\ArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist = null)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Adds as administratingRecordCompany
     *
     * A ddex:Composite containing details of the ddex:AdministratingRecordCompany for the Rights in the ddexC:HostSoundCarrier.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\AdministratingRecordCompanyType $administratingRecordCompany
     */
    public function addToAdministratingRecordCompany(\DedexBundle\Entity\DdexC\AdministratingRecordCompanyType $administratingRecordCompany)
    {
        $this->administratingRecordCompany[] = $administratingRecordCompany;
        return $this;
    }

    /**
     * isset administratingRecordCompany
     *
     * A ddex:Composite containing details of the ddex:AdministratingRecordCompany for the Rights in the ddexC:HostSoundCarrier.
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
     * A ddex:Composite containing details of the ddex:AdministratingRecordCompany for the Rights in the ddexC:HostSoundCarrier.
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
     * A ddex:Composite containing details of the ddex:AdministratingRecordCompany for the Rights in the ddexC:HostSoundCarrier.
     *
     * @return \DedexBundle\Entity\DdexC\AdministratingRecordCompanyType[]
     */
    public function getAdministratingRecordCompany()
    {
        return $this->administratingRecordCompany;
    }

    /**
     * Sets a new administratingRecordCompany
     *
     * A ddex:Composite containing details of the ddex:AdministratingRecordCompany for the Rights in the ddexC:HostSoundCarrier.
     *
     * @param \DedexBundle\Entity\DdexC\AdministratingRecordCompanyType[] $administratingRecordCompany
     * @return self
     */
    public function setAdministratingRecordCompany(array $administratingRecordCompany = null)
    {
        $this->administratingRecordCompany = $administratingRecordCompany;
        return $this;
    }

    /**
     * Gets as trackNumber
     *
     * The ddex:TrackNumber of the ddex:SoundRecording within the ddexC:HostSoundCarrier.
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
     * The ddex:TrackNumber of the ddex:SoundRecording within the ddexC:HostSoundCarrier.
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
     * The ddex:SequenceNumber within the ddex:Set of the volume containing the ddex:SoundRecording, where the ddexC:HostSoundCarrier is a ddex:Set (such as a 'box set' of CDs).
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
     * The ddex:SequenceNumber within the ddex:Set of the volume containing the ddex:SoundRecording, where the ddexC:HostSoundCarrier is a ddex:Set (such as a 'box set' of CDs).
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

