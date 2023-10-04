<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing RelatedReleaseType
 *
 * A Composite containing details of a Release (or
 *  a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to a
 *  Resource, Release or Product.
 * XSD Type: RelatedRelease
 */
class RelatedReleaseType
{
    /**
     * The Language and script for the Elements of
     *  the ReleatedRelease as defined in IETF RfC 5646. The default is the same as indicated
     *  for the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid shall always to be used. If the Release contains
     *  only one SoundRecording, the ISRC of the SoundRecording may be used instead. If
     *  the Release is an abstraction of a complete PhysicalProduct (such as a CD Album),
     *  the ICPN of the PhysicalProduct may be used instead. More than one of these
     *  identifiers may be provided.
     *
     * @var \DedexBundle\Entity\Ern383\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * A Composite containing details of the
     *  ReferenceTitle of the Release.
     *
     * @var \DedexBundle\Entity\Ern383\ReferenceTitleType $referenceTitle
     */
    private $referenceTitle = null;

    /**
     * A Composite containing summary details of
     *  Descriptors and other attributes of the Release which may vary according to
     *  Territory of Release. Territory of Release may be the world.
     *
     * @var \DedexBundle\Entity\Ern383\ReleaseSummaryDetailsByTerritoryType[] $releaseSummaryDetailsByTerritory
     */
    private $releaseSummaryDetailsByTerritory = [
        
    ];

    /**
     * A Composite containing details of
     *  Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s)
     *  used in the Release.
     *
     * @var \DedexBundle\Entity\Ern383\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A Composite containing details of the Type
     *  of the relationship between the two Releases.
     *
     * @var \DedexBundle\Entity\Ern383\ReleaseRelationshipTypeType $releaseRelationshipType
     */
    private $releaseRelationshipType = null;

    /**
     * A Composite containing details of the Date
     *  and Place of the Event in which the related Release was or will be first made
     *  available for Usage in its current form, whether for physical or electronic/online
     *  distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DedexBundle\Entity\Ern383\EventDateType $releaseDate
     */
    private $releaseDate = null;

    /**
     * A Composite containing details of the Date
     *  and Place of the Event in which the collection of tracks for the Release (e.g. the
     *  equivalent physical album on vinyl) was or will be first made available for Usage,
     *  whether for physical or electronic/online distribution (in ISO 8601:2004 format:
     *  YYYY-MM-DD).
     *
     * @var \DedexBundle\Entity\Ern383\EventDateType $originalReleaseDate
     */
    private $originalReleaseDate = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of
     *  the ReleatedRelease as defined in IETF RfC 5646. The default is the same as indicated
     *  for the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The Language and script for the Elements of
     *  the ReleatedRelease as defined in IETF RfC 5646. The default is the same as indicated
     *  for the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }

    /**
     * Adds as releaseId
     *
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid shall always to be used. If the Release contains
     *  only one SoundRecording, the ISRC of the SoundRecording may be used instead. If
     *  the Release is an abstraction of a complete PhysicalProduct (such as a CD Album),
     *  the ICPN of the PhysicalProduct may be used instead. More than one of these
     *  identifiers may be provided.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\ReleaseIdType $releaseId
     */
    public function addToReleaseId(\DedexBundle\Entity\Ern383\ReleaseIdType $releaseId)
    {
        $this->releaseId[] = $releaseId;
        return $this;
    }

    /**
     * isset releaseId
     *
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid shall always to be used. If the Release contains
     *  only one SoundRecording, the ISRC of the SoundRecording may be used instead. If
     *  the Release is an abstraction of a complete PhysicalProduct (such as a CD Album),
     *  the ICPN of the PhysicalProduct may be used instead. More than one of these
     *  identifiers may be provided.
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
     *  ReleaseIds. If available, a GRid shall always to be used. If the Release contains
     *  only one SoundRecording, the ISRC of the SoundRecording may be used instead. If
     *  the Release is an abstraction of a complete PhysicalProduct (such as a CD Album),
     *  the ICPN of the PhysicalProduct may be used instead. More than one of these
     *  identifiers may be provided.
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
     *  ReleaseIds. If available, a GRid shall always to be used. If the Release contains
     *  only one SoundRecording, the ISRC of the SoundRecording may be used instead. If
     *  the Release is an abstraction of a complete PhysicalProduct (such as a CD Album),
     *  the ICPN of the PhysicalProduct may be used instead. More than one of these
     *  identifiers may be provided.
     *
     * @return \DedexBundle\Entity\Ern383\ReleaseIdType[]
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid shall always to be used. If the Release contains
     *  only one SoundRecording, the ISRC of the SoundRecording may be used instead. If
     *  the Release is an abstraction of a complete PhysicalProduct (such as a CD Album),
     *  the ICPN of the PhysicalProduct may be used instead. More than one of these
     *  identifiers may be provided.
     *
     * @param \DedexBundle\Entity\Ern383\ReleaseIdType[] $releaseId
     * @return self
     */
    public function setReleaseId(array $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as referenceTitle
     *
     * A Composite containing details of the
     *  ReferenceTitle of the Release.
     *
     * @return \DedexBundle\Entity\Ern383\ReferenceTitleType
     */
    public function getReferenceTitle()
    {
        return $this->referenceTitle;
    }

    /**
     * Sets a new referenceTitle
     *
     * A Composite containing details of the
     *  ReferenceTitle of the Release.
     *
     * @param \DedexBundle\Entity\Ern383\ReferenceTitleType $referenceTitle
     * @return self
     */
    public function setReferenceTitle(?\DedexBundle\Entity\Ern383\ReferenceTitleType $referenceTitle = null)
    {
        $this->referenceTitle = $referenceTitle;
        return $this;
    }

    /**
     * Adds as releaseSummaryDetailsByTerritory
     *
     * A Composite containing summary details of
     *  Descriptors and other attributes of the Release which may vary according to
     *  Territory of Release. Territory of Release may be the world.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\ReleaseSummaryDetailsByTerritoryType $releaseSummaryDetailsByTerritory
     */
    public function addToReleaseSummaryDetailsByTerritory(\DedexBundle\Entity\Ern383\ReleaseSummaryDetailsByTerritoryType $releaseSummaryDetailsByTerritory)
    {
        $this->releaseSummaryDetailsByTerritory[] = $releaseSummaryDetailsByTerritory;
        return $this;
    }

    /**
     * isset releaseSummaryDetailsByTerritory
     *
     * A Composite containing summary details of
     *  Descriptors and other attributes of the Release which may vary according to
     *  Territory of Release. Territory of Release may be the world.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseSummaryDetailsByTerritory($index)
    {
        return isset($this->releaseSummaryDetailsByTerritory[$index]);
    }

    /**
     * unset releaseSummaryDetailsByTerritory
     *
     * A Composite containing summary details of
     *  Descriptors and other attributes of the Release which may vary according to
     *  Territory of Release. Territory of Release may be the world.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseSummaryDetailsByTerritory($index)
    {
        unset($this->releaseSummaryDetailsByTerritory[$index]);
    }

    /**
     * Gets as releaseSummaryDetailsByTerritory
     *
     * A Composite containing summary details of
     *  Descriptors and other attributes of the Release which may vary according to
     *  Territory of Release. Territory of Release may be the world.
     *
     * @return \DedexBundle\Entity\Ern383\ReleaseSummaryDetailsByTerritoryType[]
     */
    public function getReleaseSummaryDetailsByTerritory()
    {
        return $this->releaseSummaryDetailsByTerritory;
    }

    /**
     * Sets a new releaseSummaryDetailsByTerritory
     *
     * A Composite containing summary details of
     *  Descriptors and other attributes of the Release which may vary according to
     *  Territory of Release. Territory of Release may be the world.
     *
     * @param \DedexBundle\Entity\Ern383\ReleaseSummaryDetailsByTerritoryType[] $releaseSummaryDetailsByTerritory
     * @return self
     */
    public function setReleaseSummaryDetailsByTerritory(array $releaseSummaryDetailsByTerritory = null)
    {
        $this->releaseSummaryDetailsByTerritory = $releaseSummaryDetailsByTerritory;
        return $this;
    }

    /**
     * Gets as rightsAgreementId
     *
     * A Composite containing details of
     *  Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s)
     *  used in the Release.
     *
     * @return \DedexBundle\Entity\Ern383\RightsAgreementIdType
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
     *  used in the Release.
     *
     * @param \DedexBundle\Entity\Ern383\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DedexBundle\Entity\Ern383\RightsAgreementIdType $rightsAgreementId = null)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }

    /**
     * Gets as releaseRelationshipType
     *
     * A Composite containing details of the Type
     *  of the relationship between the two Releases.
     *
     * @return \DedexBundle\Entity\Ern383\ReleaseRelationshipTypeType
     */
    public function getReleaseRelationshipType()
    {
        return $this->releaseRelationshipType;
    }

    /**
     * Sets a new releaseRelationshipType
     *
     * A Composite containing details of the Type
     *  of the relationship between the two Releases.
     *
     * @param \DedexBundle\Entity\Ern383\ReleaseRelationshipTypeType $releaseRelationshipType
     * @return self
     */
    public function setReleaseRelationshipType(\DedexBundle\Entity\Ern383\ReleaseRelationshipTypeType $releaseRelationshipType)
    {
        $this->releaseRelationshipType = $releaseRelationshipType;
        return $this;
    }

    /**
     * Gets as releaseDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the related Release was or will be first made
     *  available for Usage in its current form, whether for physical or electronic/online
     *  distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return \DedexBundle\Entity\Ern383\EventDateType
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Sets a new releaseDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the related Release was or will be first made
     *  available for Usage in its current form, whether for physical or electronic/online
     *  distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param \DedexBundle\Entity\Ern383\EventDateType $releaseDate
     * @return self
     */
    public function setReleaseDate(?\DedexBundle\Entity\Ern383\EventDateType $releaseDate = null)
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    /**
     * Gets as originalReleaseDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the collection of tracks for the Release (e.g. the
     *  equivalent physical album on vinyl) was or will be first made available for Usage,
     *  whether for physical or electronic/online distribution (in ISO 8601:2004 format:
     *  YYYY-MM-DD).
     *
     * @return \DedexBundle\Entity\Ern383\EventDateType
     */
    public function getOriginalReleaseDate()
    {
        return $this->originalReleaseDate;
    }

    /**
     * Sets a new originalReleaseDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the collection of tracks for the Release (e.g. the
     *  equivalent physical album on vinyl) was or will be first made available for Usage,
     *  whether for physical or electronic/online distribution (in ISO 8601:2004 format:
     *  YYYY-MM-DD).
     *
     * @param \DedexBundle\Entity\Ern383\EventDateType $originalReleaseDate
     * @return self
     */
    public function setOriginalReleaseDate(?\DedexBundle\Entity\Ern383\EventDateType $originalReleaseDate = null)
    {
        $this->originalReleaseDate = $originalReleaseDate;
        return $this;
    }
}

