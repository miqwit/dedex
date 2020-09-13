<?php

namespace DedexBundle\Entity\Ern382;

/**
 * Class representing DetailedResourceContributorType
 *
 * A Composite containing details of the Name,
 *  Identifier and role(s) of a Contributor to a Resource.
 * XSD Type: DetailedResourceContributor
 */
class DetailedResourceContributorType
{

    /**
     * The number indicating the order of the
     *  ResourceContributor in a group of ResourceContributors that have contributed to a
     *  Resource. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Composite containing details of
     *  the PartyId for the Party. If no Namespace is given, the Identifier is a
     *  DdexPartyId (DPID). Note that DPIDs are not normally used to identify
     *  Artists, Producers or other Creators.
     *
     * @var \DedexBundle\Entity\Ern382\PartyIdType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * A Composite containing details of
     *  the PartyName(s).
     *
     * @var \DedexBundle\Entity\Ern382\PartyNameType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * A Composite containing details of a role
     *  played by the Contributor.
     *
     * @var \DedexBundle\Entity\Ern382\ResourceContributorRoleType[] $resourceContributorRole
     */
    private $resourceContributorRole = [
        
    ];

    /**
     * A Flag indicating whether the Contributor
     *  is a featured Artist (=true) or not (=false).
     *
     * @var bool $isFeaturedArtist
     */
    private $isFeaturedArtist = null;

    /**
     * A Flag indicating whether the Contributor
     *  is an Artist that has a contract for its part in creating the Resource (=true) or
     *  not (=false).
     *
     * @var bool $isContractedArtist
     */
    private $isContractedArtist = null;

    /**
     * A Type of musical instrument played by the
     *  Artist.
     *
     * @var string[] $instrumentType
     */
    private $instrumentType = [
        
    ];

    /**
     * A Composite containing details of the
     *  kinds of usage for which rights have been delegated by the
     *  Artist.
     *
     * @var \DedexBundle\Entity\Ern382\ArtistDelegatedUsageRightsType $artistDelegatedUsageRights
     */
    private $artistDelegatedUsageRights = null;

    /**
     * The sex of the
     *  Contributor.
     *
     * @var string $sex
     */
    private $sex = null;

    /**
     * The nationality of the
     *  Contributor.
     *
     * @var string[] $nationality
     */
    private $nationality = [
        
    ];

    /**
     * A Composite containing details of the Date
     *  and Place of birth. This is a string with the syntax
     *  YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern382\EventDateType $dateAndPlaceOfBirth
     */
    private $dateAndPlaceOfBirth = null;

    /**
     * A Composite containing details of the Date
     *  and Place of death. This is a string with the syntax
     *  YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern382\EventDateType $dateAndPlaceOfDeath
     */
    private $dateAndPlaceOfDeath = null;

    /**
     * A Composite containing details of the
     *  primary role played by the Artist in relation to other Artists.
     *
     * @var \DedexBundle\Entity\Ern382\ArtistRoleType $primaryRole
     */
    private $primaryRole = null;

    /**
     * A Composite containing details of the Date
     *  and Place of a Performance.
     *
     * @var \DedexBundle\Entity\Ern382\PerformanceType[] $performance
     */
    private $performance = [
        
    ];

    /**
     * A Type of (musical) instrument primarily
     *  played by the Artist.
     *
     * @var string $primaryInstrumentType
     */
    private $primaryInstrumentType = null;

    /**
     * A Composite containing details of a Type
     *  of an agreement that covers the Artist's participation in making a
     *  SoundRecording.
     *
     * @var \DedexBundle\Entity\Ern382\GoverningAgreementTypeType $governingAgreementType
     */
    private $governingAgreementType = null;

    /**
     * A Composite containing details of contact
     *  Identifiers of the Artist.
     *
     * @var \DedexBundle\Entity\Ern382\ContactIdType $contactInformation
     */
    private $contactInformation = null;

    /**
     * The country of main residency of the
     *  Artist.
     *
     * @var \DedexBundle\Entity\Ern382\AllTerritoryCodeType $territoryOfResidency
     */
    private $territoryOfResidency = null;

    /**
     * The country of whose citizenship the
     *  Artist has.
     *
     * @var \DedexBundle\Entity\Ern382\CurrentTerritoryCodeType $citizenship
     */
    private $citizenship = null;

    /**
     * A Composite containing details of the
     *  additional roles played by the Artist.
     *
     * @var \DedexBundle\Entity\Ern382\ArtistRoleType[] $additionalRoles
     */
    private $additionalRoles = [
        
    ];

    /**
     * A Composite containing details of a
     *  typical or main Genre relating to the Artist.
     *
     * @var \DedexBundle\Entity\Ern382\GenreType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * A Composite containing details of a
     *  membership in a collective rights management organization.
     *
     * @var \DedexBundle\Entity\Ern382\MembershipType[] $membership
     */
    private $membership = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the
     *  ResourceContributor in a group of ResourceContributors that have contributed to a
     *  Resource. This is represented in an XML schema as an XML Attribute.
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * The number indicating the order of the
     *  ResourceContributor in a group of ResourceContributors that have contributed to a
     *  Resource. This is represented in an XML schema as an XML Attribute.
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Adds as partyId
     *
     * A Composite containing details of
     *  the PartyId for the Party. If no Namespace is given, the Identifier is a
     *  DdexPartyId (DPID). Note that DPIDs are not normally used to identify
     *  Artists, Producers or other Creators.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\PartyIdType $partyId
     */
    public function addToPartyId(\DedexBundle\Entity\Ern382\PartyIdType $partyId)
    {
        $this->partyId[] = $partyId;
        return $this;
    }

    /**
     * isset partyId
     *
     * A Composite containing details of
     *  the PartyId for the Party. If no Namespace is given, the Identifier is a
     *  DdexPartyId (DPID). Note that DPIDs are not normally used to identify
     *  Artists, Producers or other Creators.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyId($index)
    {
        return isset($this->partyId[$index]);
    }

    /**
     * unset partyId
     *
     * A Composite containing details of
     *  the PartyId for the Party. If no Namespace is given, the Identifier is a
     *  DdexPartyId (DPID). Note that DPIDs are not normally used to identify
     *  Artists, Producers or other Creators.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyId($index)
    {
        unset($this->partyId[$index]);
    }

    /**
     * Gets as partyId
     *
     * A Composite containing details of
     *  the PartyId for the Party. If no Namespace is given, the Identifier is a
     *  DdexPartyId (DPID). Note that DPIDs are not normally used to identify
     *  Artists, Producers or other Creators.
     *
     * @return \DedexBundle\Entity\Ern382\PartyIdType[]
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A Composite containing details of
     *  the PartyId for the Party. If no Namespace is given, the Identifier is a
     *  DdexPartyId (DPID). Note that DPIDs are not normally used to identify
     *  Artists, Producers or other Creators.
     *
     * @param \DedexBundle\Entity\Ern382\PartyIdType[] $partyId
     * @return self
     */
    public function setPartyId(array $partyId)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Adds as partyName
     *
     * A Composite containing details of
     *  the PartyName(s).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\PartyNameType $partyName
     */
    public function addToPartyName(\DedexBundle\Entity\Ern382\PartyNameType $partyName)
    {
        $this->partyName[] = $partyName;
        return $this;
    }

    /**
     * isset partyName
     *
     * A Composite containing details of
     *  the PartyName(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyName($index)
    {
        return isset($this->partyName[$index]);
    }

    /**
     * unset partyName
     *
     * A Composite containing details of
     *  the PartyName(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyName($index)
    {
        unset($this->partyName[$index]);
    }

    /**
     * Gets as partyName
     *
     * A Composite containing details of
     *  the PartyName(s).
     *
     * @return \DedexBundle\Entity\Ern382\PartyNameType[]
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A Composite containing details of
     *  the PartyName(s).
     *
     * @param \DedexBundle\Entity\Ern382\PartyNameType[] $partyName
     * @return self
     */
    public function setPartyName(array $partyName)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Adds as resourceContributorRole
     *
     * A Composite containing details of a role
     *  played by the Contributor.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\ResourceContributorRoleType $resourceContributorRole
     */
    public function addToResourceContributorRole(\DedexBundle\Entity\Ern382\ResourceContributorRoleType $resourceContributorRole)
    {
        $this->resourceContributorRole[] = $resourceContributorRole;
        return $this;
    }

    /**
     * isset resourceContributorRole
     *
     * A Composite containing details of a role
     *  played by the Contributor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceContributorRole($index)
    {
        return isset($this->resourceContributorRole[$index]);
    }

    /**
     * unset resourceContributorRole
     *
     * A Composite containing details of a role
     *  played by the Contributor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceContributorRole($index)
    {
        unset($this->resourceContributorRole[$index]);
    }

    /**
     * Gets as resourceContributorRole
     *
     * A Composite containing details of a role
     *  played by the Contributor.
     *
     * @return \DedexBundle\Entity\Ern382\ResourceContributorRoleType[]
     */
    public function getResourceContributorRole()
    {
        return $this->resourceContributorRole;
    }

    /**
     * Sets a new resourceContributorRole
     *
     * A Composite containing details of a role
     *  played by the Contributor.
     *
     * @param \DedexBundle\Entity\Ern382\ResourceContributorRoleType[] $resourceContributorRole
     * @return self
     */
    public function setResourceContributorRole(array $resourceContributorRole)
    {
        $this->resourceContributorRole = $resourceContributorRole;
        return $this;
    }

    /**
     * Gets as isFeaturedArtist
     *
     * A Flag indicating whether the Contributor
     *  is a featured Artist (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsFeaturedArtist()
    {
        return $this->isFeaturedArtist;
    }

    /**
     * Sets a new isFeaturedArtist
     *
     * A Flag indicating whether the Contributor
     *  is a featured Artist (=true) or not (=false).
     *
     * @param bool $isFeaturedArtist
     * @return self
     */
    public function setIsFeaturedArtist($isFeaturedArtist)
    {
        $this->isFeaturedArtist = $isFeaturedArtist;
        return $this;
    }

    /**
     * Gets as isContractedArtist
     *
     * A Flag indicating whether the Contributor
     *  is an Artist that has a contract for its part in creating the Resource (=true) or
     *  not (=false).
     *
     * @return bool
     */
    public function getIsContractedArtist()
    {
        return $this->isContractedArtist;
    }

    /**
     * Sets a new isContractedArtist
     *
     * A Flag indicating whether the Contributor
     *  is an Artist that has a contract for its part in creating the Resource (=true) or
     *  not (=false).
     *
     * @param bool $isContractedArtist
     * @return self
     */
    public function setIsContractedArtist($isContractedArtist)
    {
        $this->isContractedArtist = $isContractedArtist;
        return $this;
    }

    /**
     * Adds as instrumentType
     *
     * A Type of musical instrument played by the
     *  Artist.
     *
     * @return self
     * @param string $instrumentType
     */
    public function addToInstrumentType($instrumentType)
    {
        $this->instrumentType[] = $instrumentType;
        return $this;
    }

    /**
     * isset instrumentType
     *
     * A Type of musical instrument played by the
     *  Artist.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstrumentType($index)
    {
        return isset($this->instrumentType[$index]);
    }

    /**
     * unset instrumentType
     *
     * A Type of musical instrument played by the
     *  Artist.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstrumentType($index)
    {
        unset($this->instrumentType[$index]);
    }

    /**
     * Gets as instrumentType
     *
     * A Type of musical instrument played by the
     *  Artist.
     *
     * @return string[]
     */
    public function getInstrumentType()
    {
        return $this->instrumentType;
    }

    /**
     * Sets a new instrumentType
     *
     * A Type of musical instrument played by the
     *  Artist.
     *
     * @param string[] $instrumentType
     * @return self
     */
    public function setInstrumentType(array $instrumentType)
    {
        $this->instrumentType = $instrumentType;
        return $this;
    }

    /**
     * Gets as artistDelegatedUsageRights
     *
     * A Composite containing details of the
     *  kinds of usage for which rights have been delegated by the
     *  Artist.
     *
     * @return \DedexBundle\Entity\Ern382\ArtistDelegatedUsageRightsType
     */
    public function getArtistDelegatedUsageRights()
    {
        return $this->artistDelegatedUsageRights;
    }

    /**
     * Sets a new artistDelegatedUsageRights
     *
     * A Composite containing details of the
     *  kinds of usage for which rights have been delegated by the
     *  Artist.
     *
     * @param \DedexBundle\Entity\Ern382\ArtistDelegatedUsageRightsType $artistDelegatedUsageRights
     * @return self
     */
    public function setArtistDelegatedUsageRights(\DedexBundle\Entity\Ern382\ArtistDelegatedUsageRightsType $artistDelegatedUsageRights)
    {
        $this->artistDelegatedUsageRights = $artistDelegatedUsageRights;
        return $this;
    }

    /**
     * Gets as sex
     *
     * The sex of the
     *  Contributor.
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Sets a new sex
     *
     * The sex of the
     *  Contributor.
     *
     * @param string $sex
     * @return self
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
        return $this;
    }

    /**
     * Adds as nationality
     *
     * The nationality of the
     *  Contributor.
     *
     * @return self
     * @param string $nationality
     */
    public function addToNationality($nationality)
    {
        $this->nationality[] = $nationality;
        return $this;
    }

    /**
     * isset nationality
     *
     * The nationality of the
     *  Contributor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNationality($index)
    {
        return isset($this->nationality[$index]);
    }

    /**
     * unset nationality
     *
     * The nationality of the
     *  Contributor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNationality($index)
    {
        unset($this->nationality[$index]);
    }

    /**
     * Gets as nationality
     *
     * The nationality of the
     *  Contributor.
     *
     * @return string[]
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Sets a new nationality
     *
     * The nationality of the
     *  Contributor.
     *
     * @param string $nationality
     * @return self
     */
    public function setNationality(array $nationality)
    {
        $this->nationality = $nationality;
        return $this;
    }

    /**
     * Gets as dateAndPlaceOfBirth
     *
     * A Composite containing details of the Date
     *  and Place of birth. This is a string with the syntax
     *  YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern382\EventDateType
     */
    public function getDateAndPlaceOfBirth()
    {
        return $this->dateAndPlaceOfBirth;
    }

    /**
     * Sets a new dateAndPlaceOfBirth
     *
     * A Composite containing details of the Date
     *  and Place of birth. This is a string with the syntax
     *  YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern382\EventDateType $dateAndPlaceOfBirth
     * @return self
     */
    public function setDateAndPlaceOfBirth(\DedexBundle\Entity\Ern382\EventDateType $dateAndPlaceOfBirth)
    {
        $this->dateAndPlaceOfBirth = $dateAndPlaceOfBirth;
        return $this;
    }

    /**
     * Gets as dateAndPlaceOfDeath
     *
     * A Composite containing details of the Date
     *  and Place of death. This is a string with the syntax
     *  YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern382\EventDateType
     */
    public function getDateAndPlaceOfDeath()
    {
        return $this->dateAndPlaceOfDeath;
    }

    /**
     * Sets a new dateAndPlaceOfDeath
     *
     * A Composite containing details of the Date
     *  and Place of death. This is a string with the syntax
     *  YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern382\EventDateType $dateAndPlaceOfDeath
     * @return self
     */
    public function setDateAndPlaceOfDeath(\DedexBundle\Entity\Ern382\EventDateType $dateAndPlaceOfDeath)
    {
        $this->dateAndPlaceOfDeath = $dateAndPlaceOfDeath;
        return $this;
    }

    /**
     * Gets as primaryRole
     *
     * A Composite containing details of the
     *  primary role played by the Artist in relation to other Artists.
     *
     * @return \DedexBundle\Entity\Ern382\ArtistRoleType
     */
    public function getPrimaryRole()
    {
        return $this->primaryRole;
    }

    /**
     * Sets a new primaryRole
     *
     * A Composite containing details of the
     *  primary role played by the Artist in relation to other Artists.
     *
     * @param \DedexBundle\Entity\Ern382\ArtistRoleType $primaryRole
     * @return self
     */
    public function setPrimaryRole(\DedexBundle\Entity\Ern382\ArtistRoleType $primaryRole)
    {
        $this->primaryRole = $primaryRole;
        return $this;
    }

    /**
     * Adds as performance
     *
     * A Composite containing details of the Date
     *  and Place of a Performance.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\PerformanceType $performance
     */
    public function addToPerformance(\DedexBundle\Entity\Ern382\PerformanceType $performance)
    {
        $this->performance[] = $performance;
        return $this;
    }

    /**
     * isset performance
     *
     * A Composite containing details of the Date
     *  and Place of a Performance.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPerformance($index)
    {
        return isset($this->performance[$index]);
    }

    /**
     * unset performance
     *
     * A Composite containing details of the Date
     *  and Place of a Performance.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPerformance($index)
    {
        unset($this->performance[$index]);
    }

    /**
     * Gets as performance
     *
     * A Composite containing details of the Date
     *  and Place of a Performance.
     *
     * @return \DedexBundle\Entity\Ern382\PerformanceType[]
     */
    public function getPerformance()
    {
        return $this->performance;
    }

    /**
     * Sets a new performance
     *
     * A Composite containing details of the Date
     *  and Place of a Performance.
     *
     * @param \DedexBundle\Entity\Ern382\PerformanceType[] $performance
     * @return self
     */
    public function setPerformance(array $performance)
    {
        $this->performance = $performance;
        return $this;
    }

    /**
     * Gets as primaryInstrumentType
     *
     * A Type of (musical) instrument primarily
     *  played by the Artist.
     *
     * @return string
     */
    public function getPrimaryInstrumentType()
    {
        return $this->primaryInstrumentType;
    }

    /**
     * Sets a new primaryInstrumentType
     *
     * A Type of (musical) instrument primarily
     *  played by the Artist.
     *
     * @param string $primaryInstrumentType
     * @return self
     */
    public function setPrimaryInstrumentType($primaryInstrumentType)
    {
        $this->primaryInstrumentType = $primaryInstrumentType;
        return $this;
    }

    /**
     * Gets as governingAgreementType
     *
     * A Composite containing details of a Type
     *  of an agreement that covers the Artist's participation in making a
     *  SoundRecording.
     *
     * @return \DedexBundle\Entity\Ern382\GoverningAgreementTypeType
     */
    public function getGoverningAgreementType()
    {
        return $this->governingAgreementType;
    }

    /**
     * Sets a new governingAgreementType
     *
     * A Composite containing details of a Type
     *  of an agreement that covers the Artist's participation in making a
     *  SoundRecording.
     *
     * @param \DedexBundle\Entity\Ern382\GoverningAgreementTypeType $governingAgreementType
     * @return self
     */
    public function setGoverningAgreementType(\DedexBundle\Entity\Ern382\GoverningAgreementTypeType $governingAgreementType)
    {
        $this->governingAgreementType = $governingAgreementType;
        return $this;
    }

    /**
     * Gets as contactInformation
     *
     * A Composite containing details of contact
     *  Identifiers of the Artist.
     *
     * @return \DedexBundle\Entity\Ern382\ContactIdType
     */
    public function getContactInformation()
    {
        return $this->contactInformation;
    }

    /**
     * Sets a new contactInformation
     *
     * A Composite containing details of contact
     *  Identifiers of the Artist.
     *
     * @param \DedexBundle\Entity\Ern382\ContactIdType $contactInformation
     * @return self
     */
    public function setContactInformation(\DedexBundle\Entity\Ern382\ContactIdType $contactInformation)
    {
        $this->contactInformation = $contactInformation;
        return $this;
    }

    /**
     * Gets as territoryOfResidency
     *
     * The country of main residency of the
     *  Artist.
     *
     * @return \DedexBundle\Entity\Ern382\AllTerritoryCodeType
     */
    public function getTerritoryOfResidency()
    {
        return $this->territoryOfResidency;
    }

    /**
     * Sets a new territoryOfResidency
     *
     * The country of main residency of the
     *  Artist.
     *
     * @param \DedexBundle\Entity\Ern382\AllTerritoryCodeType $territoryOfResidency
     * @return self
     */
    public function setTerritoryOfResidency(\DedexBundle\Entity\Ern382\AllTerritoryCodeType $territoryOfResidency)
    {
        $this->territoryOfResidency = $territoryOfResidency;
        return $this;
    }

    /**
     * Gets as citizenship
     *
     * The country of whose citizenship the
     *  Artist has.
     *
     * @return \DedexBundle\Entity\Ern382\CurrentTerritoryCodeType
     */
    public function getCitizenship()
    {
        return $this->citizenship;
    }

    /**
     * Sets a new citizenship
     *
     * The country of whose citizenship the
     *  Artist has.
     *
     * @param \DedexBundle\Entity\Ern382\CurrentTerritoryCodeType $citizenship
     * @return self
     */
    public function setCitizenship(\DedexBundle\Entity\Ern382\CurrentTerritoryCodeType $citizenship)
    {
        $this->citizenship = $citizenship;
        return $this;
    }

    /**
     * Adds as additionalRoles
     *
     * A Composite containing details of the
     *  additional roles played by the Artist.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\ArtistRoleType $additionalRoles
     */
    public function addToAdditionalRoles(\DedexBundle\Entity\Ern382\ArtistRoleType $additionalRoles)
    {
        $this->additionalRoles[] = $additionalRoles;
        return $this;
    }

    /**
     * isset additionalRoles
     *
     * A Composite containing details of the
     *  additional roles played by the Artist.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalRoles($index)
    {
        return isset($this->additionalRoles[$index]);
    }

    /**
     * unset additionalRoles
     *
     * A Composite containing details of the
     *  additional roles played by the Artist.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalRoles($index)
    {
        unset($this->additionalRoles[$index]);
    }

    /**
     * Gets as additionalRoles
     *
     * A Composite containing details of the
     *  additional roles played by the Artist.
     *
     * @return \DedexBundle\Entity\Ern382\ArtistRoleType[]
     */
    public function getAdditionalRoles()
    {
        return $this->additionalRoles;
    }

    /**
     * Sets a new additionalRoles
     *
     * A Composite containing details of the
     *  additional roles played by the Artist.
     *
     * @param \DedexBundle\Entity\Ern382\ArtistRoleType[] $additionalRoles
     * @return self
     */
    public function setAdditionalRoles(array $additionalRoles)
    {
        $this->additionalRoles = $additionalRoles;
        return $this;
    }

    /**
     * Adds as genre
     *
     * A Composite containing details of a
     *  typical or main Genre relating to the Artist.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\GenreType $genre
     */
    public function addToGenre(\DedexBundle\Entity\Ern382\GenreType $genre)
    {
        $this->genre[] = $genre;
        return $this;
    }

    /**
     * isset genre
     *
     * A Composite containing details of a
     *  typical or main Genre relating to the Artist.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGenre($index)
    {
        return isset($this->genre[$index]);
    }

    /**
     * unset genre
     *
     * A Composite containing details of a
     *  typical or main Genre relating to the Artist.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGenre($index)
    {
        unset($this->genre[$index]);
    }

    /**
     * Gets as genre
     *
     * A Composite containing details of a
     *  typical or main Genre relating to the Artist.
     *
     * @return \DedexBundle\Entity\Ern382\GenreType[]
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Sets a new genre
     *
     * A Composite containing details of a
     *  typical or main Genre relating to the Artist.
     *
     * @param \DedexBundle\Entity\Ern382\GenreType[] $genre
     * @return self
     */
    public function setGenre(array $genre)
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * Adds as membership
     *
     * A Composite containing details of a
     *  membership in a collective rights management organization.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\MembershipType $membership
     */
    public function addToMembership(\DedexBundle\Entity\Ern382\MembershipType $membership)
    {
        $this->membership[] = $membership;
        return $this;
    }

    /**
     * isset membership
     *
     * A Composite containing details of a
     *  membership in a collective rights management organization.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMembership($index)
    {
        return isset($this->membership[$index]);
    }

    /**
     * unset membership
     *
     * A Composite containing details of a
     *  membership in a collective rights management organization.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMembership($index)
    {
        unset($this->membership[$index]);
    }

    /**
     * Gets as membership
     *
     * A Composite containing details of a
     *  membership in a collective rights management organization.
     *
     * @return \DedexBundle\Entity\Ern382\MembershipType[]
     */
    public function getMembership()
    {
        return $this->membership;
    }

    /**
     * Sets a new membership
     *
     * A Composite containing details of a
     *  membership in a collective rights management organization.
     *
     * @param \DedexBundle\Entity\Ern382\MembershipType[] $membership
     * @return self
     */
    public function setMembership(array $membership)
    {
        $this->membership = $membership;
        return $this;
    }


}

