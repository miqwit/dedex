<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing PartyType
 *
 * A Composite containing details of a Party.
 * XSD Type: Party
 */
class PartyType
{
    /**
     * The Identifier (specific to the Message) of the Party. This is a LocalPartyAnchor starting with the letter P.
     *
     * @var string $partyReference
     */
    private $partyReference = null;

    /**
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @var \DedexBundle\Entity\Ern43\DetailedPartyIdType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * A Composite containing details of the PartyName(s).
     *
     * @var \DedexBundle\Entity\Ern43\PartyNameWithTerritoryType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * A Composite containing details of an affiliation for the Party.
     *
     * @var \DedexBundle\Entity\Ern43\AffiliationType[] $affiliation
     */
    private $affiliation = [
        
    ];

    /**
     * A Composite containing details of a PartyRelatedPartyReference referring to a Party that is related to the current Party. This can be used to express, for instance, relationships between a band and its members or between a label and its parent company.
     *
     * @var \DedexBundle\Entity\Ern43\RelatedPartyType[] $relatedParty
     */
    private $relatedParty = [
        
    ];

    /**
     * A URL of a WebPage for the Artist.
     *
     * @var string[] $artistProfilePage
     */
    private $artistProfilePage = [
        
    ];

    /**
     * Gets as partyReference
     *
     * The Identifier (specific to the Message) of the Party. This is a LocalPartyAnchor starting with the letter P.
     *
     * @return string
     */
    public function getPartyReference()
    {
        return $this->partyReference;
    }

    /**
     * Sets a new partyReference
     *
     * The Identifier (specific to the Message) of the Party. This is a LocalPartyAnchor starting with the letter P.
     *
     * @param string $partyReference
     * @return self
     */
    public function setPartyReference($partyReference)
    {
        $this->partyReference = $partyReference;
        return $this;
    }

    /**
     * Adds as partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\DetailedPartyIdType $partyId
     */
    public function addToPartyId(\DedexBundle\Entity\Ern43\DetailedPartyIdType $partyId)
    {
        $this->partyId[] = $partyId;
        return $this;
    }

    /**
     * isset partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
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
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
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
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return \DedexBundle\Entity\Ern43\DetailedPartyIdType[]
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @param \DedexBundle\Entity\Ern43\DetailedPartyIdType[] $partyId
     * @return self
     */
    public function setPartyId(array $partyId = null)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Adds as partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\PartyNameWithTerritoryType $partyName
     */
    public function addToPartyName(\DedexBundle\Entity\Ern43\PartyNameWithTerritoryType $partyName)
    {
        $this->partyName[] = $partyName;
        return $this;
    }

    /**
     * isset partyName
     *
     * A Composite containing details of the PartyName(s).
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
     * A Composite containing details of the PartyName(s).
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
     * A Composite containing details of the PartyName(s).
     *
     * @return \DedexBundle\Entity\Ern43\PartyNameWithTerritoryType[]
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @param \DedexBundle\Entity\Ern43\PartyNameWithTerritoryType[] $partyName
     * @return self
     */
    public function setPartyName(array $partyName = null)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Adds as affiliation
     *
     * A Composite containing details of an affiliation for the Party.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\AffiliationType $affiliation
     */
    public function addToAffiliation(\DedexBundle\Entity\Ern43\AffiliationType $affiliation)
    {
        $this->affiliation[] = $affiliation;
        return $this;
    }

    /**
     * isset affiliation
     *
     * A Composite containing details of an affiliation for the Party.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAffiliation($index)
    {
        return isset($this->affiliation[$index]);
    }

    /**
     * unset affiliation
     *
     * A Composite containing details of an affiliation for the Party.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAffiliation($index)
    {
        unset($this->affiliation[$index]);
    }

    /**
     * Gets as affiliation
     *
     * A Composite containing details of an affiliation for the Party.
     *
     * @return \DedexBundle\Entity\Ern43\AffiliationType[]
     */
    public function getAffiliation()
    {
        return $this->affiliation;
    }

    /**
     * Sets a new affiliation
     *
     * A Composite containing details of an affiliation for the Party.
     *
     * @param \DedexBundle\Entity\Ern43\AffiliationType[] $affiliation
     * @return self
     */
    public function setAffiliation(array $affiliation = null)
    {
        $this->affiliation = $affiliation;
        return $this;
    }

    /**
     * Adds as relatedParty
     *
     * A Composite containing details of a PartyRelatedPartyReference referring to a Party that is related to the current Party. This can be used to express, for instance, relationships between a band and its members or between a label and its parent company.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\RelatedPartyType $relatedParty
     */
    public function addToRelatedParty(\DedexBundle\Entity\Ern43\RelatedPartyType $relatedParty)
    {
        $this->relatedParty[] = $relatedParty;
        return $this;
    }

    /**
     * isset relatedParty
     *
     * A Composite containing details of a PartyRelatedPartyReference referring to a Party that is related to the current Party. This can be used to express, for instance, relationships between a band and its members or between a label and its parent company.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedParty($index)
    {
        return isset($this->relatedParty[$index]);
    }

    /**
     * unset relatedParty
     *
     * A Composite containing details of a PartyRelatedPartyReference referring to a Party that is related to the current Party. This can be used to express, for instance, relationships between a band and its members or between a label and its parent company.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedParty($index)
    {
        unset($this->relatedParty[$index]);
    }

    /**
     * Gets as relatedParty
     *
     * A Composite containing details of a PartyRelatedPartyReference referring to a Party that is related to the current Party. This can be used to express, for instance, relationships between a band and its members or between a label and its parent company.
     *
     * @return \DedexBundle\Entity\Ern43\RelatedPartyType[]
     */
    public function getRelatedParty()
    {
        return $this->relatedParty;
    }

    /**
     * Sets a new relatedParty
     *
     * A Composite containing details of a PartyRelatedPartyReference referring to a Party that is related to the current Party. This can be used to express, for instance, relationships between a band and its members or between a label and its parent company.
     *
     * @param \DedexBundle\Entity\Ern43\RelatedPartyType[] $relatedParty
     * @return self
     */
    public function setRelatedParty(array $relatedParty = null)
    {
        $this->relatedParty = $relatedParty;
        return $this;
    }

    /**
     * Adds as artistProfilePage
     *
     * A URL of a WebPage for the Artist.
     *
     * @return self
     * @param string $artistProfilePage
     */
    public function addToArtistProfilePage($artistProfilePage)
    {
        $this->artistProfilePage[] = $artistProfilePage;
        return $this;
    }

    /**
     * isset artistProfilePage
     *
     * A URL of a WebPage for the Artist.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArtistProfilePage($index)
    {
        return isset($this->artistProfilePage[$index]);
    }

    /**
     * unset artistProfilePage
     *
     * A URL of a WebPage for the Artist.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArtistProfilePage($index)
    {
        unset($this->artistProfilePage[$index]);
    }

    /**
     * Gets as artistProfilePage
     *
     * A URL of a WebPage for the Artist.
     *
     * @return string[]
     */
    public function getArtistProfilePage()
    {
        return $this->artistProfilePage;
    }

    /**
     * Sets a new artistProfilePage
     *
     * A URL of a WebPage for the Artist.
     *
     * @param string[] $artistProfilePage
     * @return self
     */
    public function setArtistProfilePage(array $artistProfilePage = null)
    {
        $this->artistProfilePage = $artistProfilePage;
        return $this;
    }
}

