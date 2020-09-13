<?php

namespace DedexBundle\Entity\Ern382;

/**
 * Class representing MusicalWorkContributorType
 *
 * A Composite containing details a
 *  MusicalWorkContributor.
 * XSD Type: MusicalWorkContributor
 */
class MusicalWorkContributorType
{

    /**
     * The number indicating the order of the
     *  MusicalWorkContributor in a group of MusicalWorkContributors that have contributed to
     *  a MusicalWork. This is represented in an XML schema as an XML Attribute.
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
     *  played by the Contributor in relation to the MusicalWork. Note: This can be used
     *  in a DdexMessage in relation to any Work, Performance or Fixation any of which may
     *  form the whole or part of the Resource itself. Example: if an
     *  'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a
     *  performer of a Resource (e.g. a SoundRecording) expressing the
     *  MusicalWork.
     *
     * @var \DedexBundle\Entity\Ern382\MusicalWorkContributorRoleType[] $musicalWorkContributorRole
     */
    private $musicalWorkContributorRole = [
        
    ];

    /**
     * A Composite containing details of a
     *  society affiliation for the MusicalWorkContributor.
     *
     * @var \DedexBundle\Entity\Ern382\SocietyAffiliationType[] $societyAffiliation
     */
    private $societyAffiliation = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the
     *  MusicalWorkContributor in a group of MusicalWorkContributors that have contributed to
     *  a MusicalWork. This is represented in an XML schema as an XML Attribute.
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
     *  MusicalWorkContributor in a group of MusicalWorkContributors that have contributed to
     *  a MusicalWork. This is represented in an XML schema as an XML Attribute.
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
     * Adds as musicalWorkContributorRole
     *
     * A Composite containing details of a role
     *  played by the Contributor in relation to the MusicalWork. Note: This can be used
     *  in a DdexMessage in relation to any Work, Performance or Fixation any of which may
     *  form the whole or part of the Resource itself. Example: if an
     *  'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a
     *  performer of a Resource (e.g. a SoundRecording) expressing the
     *  MusicalWork.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\MusicalWorkContributorRoleType $musicalWorkContributorRole
     */
    public function addToMusicalWorkContributorRole(\DedexBundle\Entity\Ern382\MusicalWorkContributorRoleType $musicalWorkContributorRole)
    {
        $this->musicalWorkContributorRole[] = $musicalWorkContributorRole;
        return $this;
    }

    /**
     * isset musicalWorkContributorRole
     *
     * A Composite containing details of a role
     *  played by the Contributor in relation to the MusicalWork. Note: This can be used
     *  in a DdexMessage in relation to any Work, Performance or Fixation any of which may
     *  form the whole or part of the Resource itself. Example: if an
     *  'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a
     *  performer of a Resource (e.g. a SoundRecording) expressing the
     *  MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicalWorkContributorRole($index)
    {
        return isset($this->musicalWorkContributorRole[$index]);
    }

    /**
     * unset musicalWorkContributorRole
     *
     * A Composite containing details of a role
     *  played by the Contributor in relation to the MusicalWork. Note: This can be used
     *  in a DdexMessage in relation to any Work, Performance or Fixation any of which may
     *  form the whole or part of the Resource itself. Example: if an
     *  'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a
     *  performer of a Resource (e.g. a SoundRecording) expressing the
     *  MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicalWorkContributorRole($index)
    {
        unset($this->musicalWorkContributorRole[$index]);
    }

    /**
     * Gets as musicalWorkContributorRole
     *
     * A Composite containing details of a role
     *  played by the Contributor in relation to the MusicalWork. Note: This can be used
     *  in a DdexMessage in relation to any Work, Performance or Fixation any of which may
     *  form the whole or part of the Resource itself. Example: if an
     *  'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a
     *  performer of a Resource (e.g. a SoundRecording) expressing the
     *  MusicalWork.
     *
     * @return \DedexBundle\Entity\Ern382\MusicalWorkContributorRoleType[]
     */
    public function getMusicalWorkContributorRole()
    {
        return $this->musicalWorkContributorRole;
    }

    /**
     * Sets a new musicalWorkContributorRole
     *
     * A Composite containing details of a role
     *  played by the Contributor in relation to the MusicalWork. Note: This can be used
     *  in a DdexMessage in relation to any Work, Performance or Fixation any of which may
     *  form the whole or part of the Resource itself. Example: if an
     *  'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a
     *  performer of a Resource (e.g. a SoundRecording) expressing the
     *  MusicalWork.
     *
     * @param \DedexBundle\Entity\Ern382\MusicalWorkContributorRoleType[] $musicalWorkContributorRole
     * @return self
     */
    public function setMusicalWorkContributorRole(array $musicalWorkContributorRole)
    {
        $this->musicalWorkContributorRole = $musicalWorkContributorRole;
        return $this;
    }

    /**
     * Adds as societyAffiliation
     *
     * A Composite containing details of a
     *  society affiliation for the MusicalWorkContributor.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\SocietyAffiliationType $societyAffiliation
     */
    public function addToSocietyAffiliation(\DedexBundle\Entity\Ern382\SocietyAffiliationType $societyAffiliation)
    {
        $this->societyAffiliation[] = $societyAffiliation;
        return $this;
    }

    /**
     * isset societyAffiliation
     *
     * A Composite containing details of a
     *  society affiliation for the MusicalWorkContributor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSocietyAffiliation($index)
    {
        return isset($this->societyAffiliation[$index]);
    }

    /**
     * unset societyAffiliation
     *
     * A Composite containing details of a
     *  society affiliation for the MusicalWorkContributor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSocietyAffiliation($index)
    {
        unset($this->societyAffiliation[$index]);
    }

    /**
     * Gets as societyAffiliation
     *
     * A Composite containing details of a
     *  society affiliation for the MusicalWorkContributor.
     *
     * @return \DedexBundle\Entity\Ern382\SocietyAffiliationType[]
     */
    public function getSocietyAffiliation()
    {
        return $this->societyAffiliation;
    }

    /**
     * Sets a new societyAffiliation
     *
     * A Composite containing details of a
     *  society affiliation for the MusicalWorkContributor.
     *
     * @param \DedexBundle\Entity\Ern382\SocietyAffiliationType[] $societyAffiliation
     * @return self
     */
    public function setSocietyAffiliation(array $societyAffiliation)
    {
        $this->societyAffiliation = $societyAffiliation;
        return $this;
    }


}

