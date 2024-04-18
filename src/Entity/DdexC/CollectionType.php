<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing CollectionType
 *
 * A ddex:Composite containing details of a ddex:Collection.
 * XSD Type: Collection
 */
class CollectionType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ddex:Collection as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:Collection.
     *
     * @var \DedexBundle\Entity\DdexC\CollectionIdType[] $collectionId
     */
    private $collectionId = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:Type of the ddex:Collection.
     *
     * @var \DedexBundle\Entity\DdexC\CollectionTypeType[] $collectionType
     */
    private $collectionType = [
        
    ];

    /**
     * The ddex:Identifier (specific to the ddex:Message) of the ddex:Collection within the ddex:Release which contains it. This is a ddex:LocalCollectionAnchor starting with the letter X.
     *
     * @var string $collectionReference
     */
    private $collectionReference = null;

    /**
     * A ddex:Composite containing details of a ddex:Title of the ddex:Collection.
     *
     * @var \DedexBundle\Entity\DdexC\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A ddex:Composite containing details a ddex:Contributor to the ddex:Collection.
     *
     * @var \DedexBundle\Entity\DdexC\ResourceContributorType[] $contributor
     */
    private $contributor = [
        
    ];

    /**
     * A ddex:Composite containing a list of ddex:CollectionCollectionReferences for a ddex:Collection (specific to this ddex:Message).
     *
     * @var \DedexBundle\Entity\DdexC\CollectionCollectionReferenceListType $collectionCollectionReferenceList
     */
    private $collectionCollectionReferenceList = null;

    /**
     * The ddex:Flag indicating whether the ddex:Collection is complete (=True) or not (=False). Only one of the Elements ddex:IsComplete here and in the ddexC:CollectionDetailsByTerritory is valid for a given ddexC:Collection.
     *
     * @var bool $isComplete
     */
    private $isComplete = null;

    /**
     * The ddex:Duration of the musical content (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $durationOfMusicalContent
     */
    private $durationOfMusicalContent = null;

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:Collection was created.
     *
     * @var \DedexBundle\Entity\DdexC\EventDateType $creationDate
     */
    private $creationDate = null;

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:Collection was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DedexBundle\Entity\DdexC\EventDateType $originalReleaseDate
     */
    private $originalReleaseDate = null;

    /**
     * The orignal ddex:Language of the ddex:Collection (represented by an ISO 639-2 iso639a2:LanguageCode).
     *
     * @var string $originalLanguage
     */
    private $originalLanguage = null;

    /**
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ddex:Collection which may vary according to ddex:Territory of release.
     *
     * @var \DedexBundle\Entity\DdexC\CollectionDetailsByTerritoryType[] $collectionDetailsByTerritory
     */
    private $collectionDetailsByTerritory = [
        
    ];

    /**
     * A ddex:Composite containing a list of ddex:CollectionResourceReferences for a ddex:Resource (specific to this ddex:Message).
     *
     * @var string[] $collectionResourceReferenceList
     */
    private $collectionResourceReferenceList = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddex:Collection as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ddex:Collection as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Adds as collectionId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:Collection.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\CollectionIdType $collectionId
     */
    public function addToCollectionId(\DedexBundle\Entity\DdexC\CollectionIdType $collectionId)
    {
        $this->collectionId[] = $collectionId;
        return $this;
    }

    /**
     * isset collectionId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:Collection.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCollectionId($index)
    {
        return isset($this->collectionId[$index]);
    }

    /**
     * unset collectionId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:Collection.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCollectionId($index)
    {
        unset($this->collectionId[$index]);
    }

    /**
     * Gets as collectionId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:Collection.
     *
     * @return \DedexBundle\Entity\DdexC\CollectionIdType[]
     */
    public function getCollectionId()
    {
        return $this->collectionId;
    }

    /**
     * Sets a new collectionId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:Collection.
     *
     * @param \DedexBundle\Entity\DdexC\CollectionIdType[] $collectionId
     * @return self
     */
    public function setCollectionId(array $collectionId)
    {
        $this->collectionId = $collectionId;
        return $this;
    }

    /**
     * Adds as collectionType
     *
     * A ddex:Composite containing details of the ddex:Type of the ddex:Collection.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\CollectionTypeType $collectionType
     */
    public function addToCollectionType(\DedexBundle\Entity\DdexC\CollectionTypeType $collectionType)
    {
        $this->collectionType[] = $collectionType;
        return $this;
    }

    /**
     * isset collectionType
     *
     * A ddex:Composite containing details of the ddex:Type of the ddex:Collection.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCollectionType($index)
    {
        return isset($this->collectionType[$index]);
    }

    /**
     * unset collectionType
     *
     * A ddex:Composite containing details of the ddex:Type of the ddex:Collection.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCollectionType($index)
    {
        unset($this->collectionType[$index]);
    }

    /**
     * Gets as collectionType
     *
     * A ddex:Composite containing details of the ddex:Type of the ddex:Collection.
     *
     * @return \DedexBundle\Entity\DdexC\CollectionTypeType[]
     */
    public function getCollectionType()
    {
        return $this->collectionType;
    }

    /**
     * Sets a new collectionType
     *
     * A ddex:Composite containing details of the ddex:Type of the ddex:Collection.
     *
     * @param \DedexBundle\Entity\DdexC\CollectionTypeType[] $collectionType
     * @return self
     */
    public function setCollectionType(array $collectionType = null)
    {
        $this->collectionType = $collectionType;
        return $this;
    }

    /**
     * Gets as collectionReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the ddex:Collection within the ddex:Release which contains it. This is a ddex:LocalCollectionAnchor starting with the letter X.
     *
     * @return string
     */
    public function getCollectionReference()
    {
        return $this->collectionReference;
    }

    /**
     * Sets a new collectionReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the ddex:Collection within the ddex:Release which contains it. This is a ddex:LocalCollectionAnchor starting with the letter X.
     *
     * @param string $collectionReference
     * @return self
     */
    public function setCollectionReference($collectionReference)
    {
        $this->collectionReference = $collectionReference;
        return $this;
    }

    /**
     * Adds as title
     *
     * A ddex:Composite containing details of a ddex:Title of the ddex:Collection.
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
     * A ddex:Composite containing details of a ddex:Title of the ddex:Collection.
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
     * A ddex:Composite containing details of a ddex:Title of the ddex:Collection.
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
     * A ddex:Composite containing details of a ddex:Title of the ddex:Collection.
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
     * A ddex:Composite containing details of a ddex:Title of the ddex:Collection.
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
     * Adds as contributor
     *
     * A ddex:Composite containing details a ddex:Contributor to the ddex:Collection.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ResourceContributorType $contributor
     */
    public function addToContributor(\DedexBundle\Entity\DdexC\ResourceContributorType $contributor)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * isset contributor
     *
     * A ddex:Composite containing details a ddex:Contributor to the ddex:Collection.
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
     * A ddex:Composite containing details a ddex:Contributor to the ddex:Collection.
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
     * A ddex:Composite containing details a ddex:Contributor to the ddex:Collection.
     *
     * @return \DedexBundle\Entity\DdexC\ResourceContributorType[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Sets a new contributor
     *
     * A ddex:Composite containing details a ddex:Contributor to the ddex:Collection.
     *
     * @param \DedexBundle\Entity\DdexC\ResourceContributorType[] $contributor
     * @return self
     */
    public function setContributor(array $contributor = null)
    {
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * Gets as collectionCollectionReferenceList
     *
     * A ddex:Composite containing a list of ddex:CollectionCollectionReferences for a ddex:Collection (specific to this ddex:Message).
     *
     * @return \DedexBundle\Entity\DdexC\CollectionCollectionReferenceListType
     */
    public function getCollectionCollectionReferenceList()
    {
        return $this->collectionCollectionReferenceList;
    }

    /**
     * Sets a new collectionCollectionReferenceList
     *
     * A ddex:Composite containing a list of ddex:CollectionCollectionReferences for a ddex:Collection (specific to this ddex:Message).
     *
     * @param \DedexBundle\Entity\DdexC\CollectionCollectionReferenceListType $collectionCollectionReferenceList
     * @return self
     */
    public function setCollectionCollectionReferenceList(?\DedexBundle\Entity\DdexC\CollectionCollectionReferenceListType $collectionCollectionReferenceList = null)
    {
        $this->collectionCollectionReferenceList = $collectionCollectionReferenceList;
        return $this;
    }

    /**
     * Gets as isComplete
     *
     * The ddex:Flag indicating whether the ddex:Collection is complete (=True) or not (=False). Only one of the Elements ddex:IsComplete here and in the ddexC:CollectionDetailsByTerritory is valid for a given ddexC:Collection.
     *
     * @return bool
     */
    public function getIsComplete()
    {
        return $this->isComplete;
    }

    /**
     * Sets a new isComplete
     *
     * The ddex:Flag indicating whether the ddex:Collection is complete (=True) or not (=False). Only one of the Elements ddex:IsComplete here and in the ddexC:CollectionDetailsByTerritory is valid for a given ddexC:Collection.
     *
     * @param bool $isComplete
     * @return self
     */
    public function setIsComplete($isComplete)
    {
        $this->isComplete = $isComplete;
        return $this;
    }

    /**
     * Gets as durationOfMusicalContent
     *
     * The ddex:Duration of the musical content (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @return \DateInterval
     */
    public function getDurationOfMusicalContent()
    {
        return $this->durationOfMusicalContent;
    }

    /**
     * Sets a new durationOfMusicalContent
     *
     * The ddex:Duration of the musical content (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @param \DateInterval $durationOfMusicalContent
     * @return self
     */
    public function setDurationOfMusicalContent(?\DateInterval $durationOfMusicalContent = null)
    {
        $this->durationOfMusicalContent = $durationOfMusicalContent;
        return $this;
    }

    /**
     * Gets as creationDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:Collection was created.
     *
     * @return \DedexBundle\Entity\DdexC\EventDateType
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets a new creationDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:Collection was created.
     *
     * @param \DedexBundle\Entity\DdexC\EventDateType $creationDate
     * @return self
     */
    public function setCreationDate(?\DedexBundle\Entity\DdexC\EventDateType $creationDate = null)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Gets as originalReleaseDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:Collection was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return \DedexBundle\Entity\DdexC\EventDateType
     */
    public function getOriginalReleaseDate()
    {
        return $this->originalReleaseDate;
    }

    /**
     * Sets a new originalReleaseDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:Collection was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param \DedexBundle\Entity\DdexC\EventDateType $originalReleaseDate
     * @return self
     */
    public function setOriginalReleaseDate(?\DedexBundle\Entity\DdexC\EventDateType $originalReleaseDate = null)
    {
        $this->originalReleaseDate = $originalReleaseDate;
        return $this;
    }

    /**
     * Gets as originalLanguage
     *
     * The orignal ddex:Language of the ddex:Collection (represented by an ISO 639-2 iso639a2:LanguageCode).
     *
     * @return string
     */
    public function getOriginalLanguage()
    {
        return $this->originalLanguage;
    }

    /**
     * Sets a new originalLanguage
     *
     * The orignal ddex:Language of the ddex:Collection (represented by an ISO 639-2 iso639a2:LanguageCode).
     *
     * @param string $originalLanguage
     * @return self
     */
    public function setOriginalLanguage($originalLanguage)
    {
        $this->originalLanguage = $originalLanguage;
        return $this;
    }

    /**
     * Adds as collectionDetailsByTerritory
     *
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ddex:Collection which may vary according to ddex:Territory of release.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\CollectionDetailsByTerritoryType $collectionDetailsByTerritory
     */
    public function addToCollectionDetailsByTerritory(\DedexBundle\Entity\DdexC\CollectionDetailsByTerritoryType $collectionDetailsByTerritory)
    {
        $this->collectionDetailsByTerritory[] = $collectionDetailsByTerritory;
        return $this;
    }

    /**
     * isset collectionDetailsByTerritory
     *
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ddex:Collection which may vary according to ddex:Territory of release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCollectionDetailsByTerritory($index)
    {
        return isset($this->collectionDetailsByTerritory[$index]);
    }

    /**
     * unset collectionDetailsByTerritory
     *
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ddex:Collection which may vary according to ddex:Territory of release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCollectionDetailsByTerritory($index)
    {
        unset($this->collectionDetailsByTerritory[$index]);
    }

    /**
     * Gets as collectionDetailsByTerritory
     *
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ddex:Collection which may vary according to ddex:Territory of release.
     *
     * @return \DedexBundle\Entity\DdexC\CollectionDetailsByTerritoryType[]
     */
    public function getCollectionDetailsByTerritory()
    {
        return $this->collectionDetailsByTerritory;
    }

    /**
     * Sets a new collectionDetailsByTerritory
     *
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the ddex:Collection which may vary according to ddex:Territory of release.
     *
     * @param \DedexBundle\Entity\DdexC\CollectionDetailsByTerritoryType[] $collectionDetailsByTerritory
     * @return self
     */
    public function setCollectionDetailsByTerritory(array $collectionDetailsByTerritory = null)
    {
        $this->collectionDetailsByTerritory = $collectionDetailsByTerritory;
        return $this;
    }

    /**
     * Adds as collectionResourceReference
     *
     * A ddex:Composite containing a list of ddex:CollectionResourceReferences for a ddex:Resource (specific to this ddex:Message).
     *
     * @return self
     * @param string $collectionResourceReference
     */
    public function addToCollectionResourceReferenceList($collectionResourceReference)
    {
        $this->collectionResourceReferenceList[] = $collectionResourceReference;
        return $this;
    }

    /**
     * isset collectionResourceReferenceList
     *
     * A ddex:Composite containing a list of ddex:CollectionResourceReferences for a ddex:Resource (specific to this ddex:Message).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCollectionResourceReferenceList($index)
    {
        return isset($this->collectionResourceReferenceList[$index]);
    }

    /**
     * unset collectionResourceReferenceList
     *
     * A ddex:Composite containing a list of ddex:CollectionResourceReferences for a ddex:Resource (specific to this ddex:Message).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCollectionResourceReferenceList($index)
    {
        unset($this->collectionResourceReferenceList[$index]);
    }

    /**
     * Gets as collectionResourceReferenceList
     *
     * A ddex:Composite containing a list of ddex:CollectionResourceReferences for a ddex:Resource (specific to this ddex:Message).
     *
     * @return string[]
     */
    public function getCollectionResourceReferenceList()
    {
        return $this->collectionResourceReferenceList;
    }

    /**
     * Sets a new collectionResourceReferenceList
     *
     * A ddex:Composite containing a list of ddex:CollectionResourceReferences for a ddex:Resource (specific to this ddex:Message).
     *
     * @param string $collectionResourceReferenceList
     * @return self
     */
    public function setCollectionResourceReferenceList(array $collectionResourceReferenceList = null)
    {
        $this->collectionResourceReferenceList = $collectionResourceReferenceList;
        return $this;
    }
}

