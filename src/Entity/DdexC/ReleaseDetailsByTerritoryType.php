<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing ReleaseDetailsByTerritoryType
 *
 * A ddex:Composite containing details of ddex:Descriptors and other attributes of a ddex:Release which may vary according to ddex:Territory of release.
 * XSD Type: ReleaseDetailsByTerritory
 */
class ReleaseDetailsByTerritoryType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ddexC:ReleaseSummaryDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @var string[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A ddex:Composite containing the ddex:Name to be used by a ddex:DSP when presenting ddex:Artist details of the ddex:Release to a ddex:Consumer.
     *
     * @var \DedexBundle\Entity\DdexC\NameType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
     *
     * @var \DedexBundle\Entity\DdexC\LabelNameType[] $labelName
     */
    private $labelName = [
        
    ];

    /**
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ddex:Release.
     *
     * @var \DedexBundle\Entity\DdexC\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A ddex:Composite containing details of a ddex:Title of the ddex:Release.
     *
     * @var \DedexBundle\Entity\DdexC\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddex:Release. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @var \DedexBundle\Entity\DdexC\ArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * The ddex:Flag indicating whether the ddex:Release is a multiartist compilation (=True) or not (=False).
     *
     * @var bool $isMultiArtistCompilation
     */
    private $isMultiArtistCompilation = null;

    /**
     * A ddex:Composite containing details of the ddex:AdministratingRecordCompany for the ddex:Release.
     *
     * @var \DedexBundle\Entity\DdexC\AdministratingRecordCompanyType[] $administratingRecordCompany
     */
    private $administratingRecordCompany = [
        
    ];

    /**
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ddex:Release to ddex:Consumers. This overrides the ddex:ReleaseType specified globally for the ddex:Release.
     *
     * @var \DedexBundle\Entity\DdexC\ReleaseTypeType[] $releaseType
     */
    private $releaseType = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Release (or a ddex:PhysicalProduct or a ddex:DigitalProduct derived from such a ddex:Release) which is related to this ddex:Release.
     *
     * @var \DedexBundle\Entity\DdexC\RelatedReleaseType[] $relatedRelease
     */
    private $relatedRelease = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddexC:ReleaseSummaryDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ddexC:ReleaseSummaryDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Adds as territoryCode
     *
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @return self
     * @param string $territoryCode
     */
    public function addToTerritoryCode($territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryCode($index)
    {
        return isset($this->territoryCode[$index]);
    }

    /**
     * unset territoryCode
     *
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryCode($index)
    {
        unset($this->territoryCode[$index]);
    }

    /**
     * Gets as territoryCode
     *
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @return string[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @param string $territoryCode
     * @return self
     */
    public function setTerritoryCode(array $territoryCode = null)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Adds as excludedTerritoryCode
     *
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @return self
     * @param string $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode($excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludedTerritoryCode($index)
    {
        return isset($this->excludedTerritoryCode[$index]);
    }

    /**
     * unset excludedTerritoryCode
     *
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludedTerritoryCode($index)
    {
        unset($this->excludedTerritoryCode[$index]);
    }

    /**
     * Gets as excludedTerritoryCode
     *
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @return string[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @param string $excludedTerritoryCode
     * @return self
     */
    public function setExcludedTerritoryCode(array $excludedTerritoryCode = null)
    {
        $this->excludedTerritoryCode = $excludedTerritoryCode;
        return $this;
    }

    /**
     * Adds as displayArtistName
     *
     * A ddex:Composite containing the ddex:Name to be used by a ddex:DSP when presenting ddex:Artist details of the ddex:Release to a ddex:Consumer.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\NameType $displayArtistName
     */
    public function addToDisplayArtistName(\DedexBundle\Entity\DdexC\NameType $displayArtistName)
    {
        $this->displayArtistName[] = $displayArtistName;
        return $this;
    }

    /**
     * isset displayArtistName
     *
     * A ddex:Composite containing the ddex:Name to be used by a ddex:DSP when presenting ddex:Artist details of the ddex:Release to a ddex:Consumer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayArtistName($index)
    {
        return isset($this->displayArtistName[$index]);
    }

    /**
     * unset displayArtistName
     *
     * A ddex:Composite containing the ddex:Name to be used by a ddex:DSP when presenting ddex:Artist details of the ddex:Release to a ddex:Consumer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayArtistName($index)
    {
        unset($this->displayArtistName[$index]);
    }

    /**
     * Gets as displayArtistName
     *
     * A ddex:Composite containing the ddex:Name to be used by a ddex:DSP when presenting ddex:Artist details of the ddex:Release to a ddex:Consumer.
     *
     * @return \DedexBundle\Entity\DdexC\NameType[]
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A ddex:Composite containing the ddex:Name to be used by a ddex:DSP when presenting ddex:Artist details of the ddex:Release to a ddex:Consumer.
     *
     * @param \DedexBundle\Entity\DdexC\NameType[] $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(array $displayArtistName = null)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as labelName
     *
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\LabelNameType $labelName
     */
    public function addToLabelName(\DedexBundle\Entity\DdexC\LabelNameType $labelName)
    {
        $this->labelName[] = $labelName;
        return $this;
    }

    /**
     * isset labelName
     *
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLabelName($index)
    {
        return isset($this->labelName[$index]);
    }

    /**
     * unset labelName
     *
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLabelName($index)
    {
        unset($this->labelName[$index]);
    }

    /**
     * Gets as labelName
     *
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
     *
     * @return \DedexBundle\Entity\DdexC\LabelNameType[]
     */
    public function getLabelName()
    {
        return $this->labelName;
    }

    /**
     * Sets a new labelName
     *
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
     *
     * @param \DedexBundle\Entity\DdexC\LabelNameType[] $labelName
     * @return self
     */
    public function setLabelName(array $labelName = null)
    {
        $this->labelName = $labelName;
        return $this;
    }

    /**
     * Gets as rightsAgreementId
     *
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ddex:Release.
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
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ddex:Release.
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
     * A ddex:Composite containing details of a ddex:Title of the ddex:Release.
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
     * A ddex:Composite containing details of a ddex:Title of the ddex:Release.
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
     * A ddex:Composite containing details of a ddex:Title of the ddex:Release.
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
     * A ddex:Composite containing details of a ddex:Title of the ddex:Release.
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
     * A ddex:Composite containing details of a ddex:Title of the ddex:Release.
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
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddex:Release. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
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
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddex:Release. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
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
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddex:Release. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
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
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddex:Release. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
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
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddex:Release. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @param \DedexBundle\Entity\DdexC\ArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Gets as isMultiArtistCompilation
     *
     * The ddex:Flag indicating whether the ddex:Release is a multiartist compilation (=True) or not (=False).
     *
     * @return bool
     */
    public function getIsMultiArtistCompilation()
    {
        return $this->isMultiArtistCompilation;
    }

    /**
     * Sets a new isMultiArtistCompilation
     *
     * The ddex:Flag indicating whether the ddex:Release is a multiartist compilation (=True) or not (=False).
     *
     * @param bool $isMultiArtistCompilation
     * @return self
     */
    public function setIsMultiArtistCompilation($isMultiArtistCompilation)
    {
        $this->isMultiArtistCompilation = $isMultiArtistCompilation;
        return $this;
    }

    /**
     * Adds as administratingRecordCompany
     *
     * A ddex:Composite containing details of the ddex:AdministratingRecordCompany for the ddex:Release.
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
     * A ddex:Composite containing details of the ddex:AdministratingRecordCompany for the ddex:Release.
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
     * A ddex:Composite containing details of the ddex:AdministratingRecordCompany for the ddex:Release.
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
     * A ddex:Composite containing details of the ddex:AdministratingRecordCompany for the ddex:Release.
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
     * A ddex:Composite containing details of the ddex:AdministratingRecordCompany for the ddex:Release.
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
     * Adds as releaseType
     *
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ddex:Release to ddex:Consumers. This overrides the ddex:ReleaseType specified globally for the ddex:Release.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ReleaseTypeType $releaseType
     */
    public function addToReleaseType(\DedexBundle\Entity\DdexC\ReleaseTypeType $releaseType)
    {
        $this->releaseType[] = $releaseType;
        return $this;
    }

    /**
     * isset releaseType
     *
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ddex:Release to ddex:Consumers. This overrides the ddex:ReleaseType specified globally for the ddex:Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseType($index)
    {
        return isset($this->releaseType[$index]);
    }

    /**
     * unset releaseType
     *
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ddex:Release to ddex:Consumers. This overrides the ddex:ReleaseType specified globally for the ddex:Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseType($index)
    {
        unset($this->releaseType[$index]);
    }

    /**
     * Gets as releaseType
     *
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ddex:Release to ddex:Consumers. This overrides the ddex:ReleaseType specified globally for the ddex:Release.
     *
     * @return \DedexBundle\Entity\DdexC\ReleaseTypeType[]
     */
    public function getReleaseType()
    {
        return $this->releaseType;
    }

    /**
     * Sets a new releaseType
     *
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ddex:Release to ddex:Consumers. This overrides the ddex:ReleaseType specified globally for the ddex:Release.
     *
     * @param \DedexBundle\Entity\DdexC\ReleaseTypeType[] $releaseType
     * @return self
     */
    public function setReleaseType(array $releaseType = null)
    {
        $this->releaseType = $releaseType;
        return $this;
    }

    /**
     * Adds as relatedRelease
     *
     * A ddex:Composite containing details of a ddex:Release (or a ddex:PhysicalProduct or a ddex:DigitalProduct derived from such a ddex:Release) which is related to this ddex:Release.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\RelatedReleaseType $relatedRelease
     */
    public function addToRelatedRelease(\DedexBundle\Entity\DdexC\RelatedReleaseType $relatedRelease)
    {
        $this->relatedRelease[] = $relatedRelease;
        return $this;
    }

    /**
     * isset relatedRelease
     *
     * A ddex:Composite containing details of a ddex:Release (or a ddex:PhysicalProduct or a ddex:DigitalProduct derived from such a ddex:Release) which is related to this ddex:Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedRelease($index)
    {
        return isset($this->relatedRelease[$index]);
    }

    /**
     * unset relatedRelease
     *
     * A ddex:Composite containing details of a ddex:Release (or a ddex:PhysicalProduct or a ddex:DigitalProduct derived from such a ddex:Release) which is related to this ddex:Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedRelease($index)
    {
        unset($this->relatedRelease[$index]);
    }

    /**
     * Gets as relatedRelease
     *
     * A ddex:Composite containing details of a ddex:Release (or a ddex:PhysicalProduct or a ddex:DigitalProduct derived from such a ddex:Release) which is related to this ddex:Release.
     *
     * @return \DedexBundle\Entity\DdexC\RelatedReleaseType[]
     */
    public function getRelatedRelease()
    {
        return $this->relatedRelease;
    }

    /**
     * Sets a new relatedRelease
     *
     * A ddex:Composite containing details of a ddex:Release (or a ddex:PhysicalProduct or a ddex:DigitalProduct derived from such a ddex:Release) which is related to this ddex:Release.
     *
     * @param \DedexBundle\Entity\DdexC\RelatedReleaseType[] $relatedRelease
     * @return self
     */
    public function setRelatedRelease(array $relatedRelease = null)
    {
        $this->relatedRelease = $relatedRelease;
        return $this;
    }
}

