<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing CollectionType
 *
 * A Composite containing details of a Collection.
 *  Collections referenced from Video Resources are of CollectionType VideoChapter .
 *  Collections referenced from a Release composite are of CollectionType Series, Season or
 *  Episode.
 * XSD Type: Collection
 */
class CollectionType
{
    /**
     * The Language and script for the Elements of
     *  the Collection as defined in IETF RfC 5646. The default is the same as indicated for
     *  the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of an
     *  Identifier of the Collection.
     *
     * @var \DedexBundle\Entity\Ern383\CollectionIdType[] $collectionId
     */
    private $collectionId = [
        
    ];

    /**
     * A Composite containing details of the Type
     *  of the Collection.
     *
     * @var \DedexBundle\Entity\Ern383\CollectionTypeType[] $collectionType
     */
    private $collectionType = [
        
    ];

    /**
     * The Identifier (specific to the Message)
     *  of the Collection within the Release which contains it. This is a
     *  LocalCollectionAnchor starting with the letter X.
     *
     * @var string $collectionReference
     */
    private $collectionReference = null;

    /**
     * A Reference for a Release (specific to
     *  this Message) that is represented by the Collection. This is a
     *  LocalReleaseAnchorReference starting with the letter R.
     *
     * @var string $equivalentReleaseReference
     */
    private $equivalentReleaseReference = null;

    /**
     * A Composite containing details of a Title
     *  of the Collection.
     *
     * @var \DedexBundle\Entity\Ern383\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * The number indicating the order of the
     *  Collection within all Collections at this level. The default value is 1, and the
     *  value must be incremented by 1 for each Collection occurring at a particular
     *  level.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Composite containing details a
     *  Contributor to the Collection.
     *
     * @var \DedexBundle\Entity\Ern383\DetailedResourceContributorType[] $contributor
     */
    private $contributor = [
        
    ];

    /**
     * A Composite containing details of a
     *  Character in the Collection. A Character may be described through Name, Identifier
     *  and Roles.
     *
     * @var \DedexBundle\Entity\Ern383\CharacterType[] $character
     */
    private $character = [
        
    ];

    /**
     * A Composite containing a list of
     *  CollectionCollectionReferences for a Collection (specific to this
     *  Message).
     *
     * @var \DedexBundle\Entity\Ern383\CollectionCollectionReferenceListType $collectionCollectionReferenceList
     */
    private $collectionCollectionReferenceList = null;

    /**
     * The Flag indicating whether the Collection
     *  is complete (=true) or not (=false). Only one of the Elements IsComplete here and
     *  in the CollectionDetailsByTerritory is valid for a given
     *  Collection.
     *
     * @var bool $isComplete
     */
    private $isComplete = null;

    /**
     * The sum of the Durations of all Resources
     *  contained in the Collection (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where
     *  lower case characters indicate variables, upper case characters are part of the
     *  xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The
     *  seconds section ss may include fractions (e.g. one minute and 30.5 seconds would
     *  be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The Duration of the musical content (using
     *  the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate
     *  variables, upper case characters are part of the xs:string, e.g. one hour, two
     *  minutes and three seconds would be PT1H2M3S). The seconds section ss may include
     *  fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S).
     *
     * @var \DateInterval $durationOfMusicalContent
     */
    private $durationOfMusicalContent = null;

    /**
     * A Composite containing details of the Date
     *  and Place of the Event in which the Collection was created. This is a string with
     *  the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern383\EventDateType $creationDate
     */
    private $creationDate = null;

    /**
     * A Composite containing details of the Date
     *  and Place of the Event in which the Collection was or will be first made available
     *  for Usage in its current form, whether for physical or electronic/online
     *  distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DedexBundle\Entity\Ern383\EventDateType $releaseDate
     */
    private $releaseDate = null;

    /**
     * A Composite containing details of the Date
     *  and Place of the Event in which the Collection was or will be first made available
     *  for Usage, whether for physical or electronic/online distribution (in ISO
     *  8601:2004 format: YYYY-MM-DD).
     *
     * @var \DedexBundle\Entity\Ern383\EventDateType $originalReleaseDate
     */
    private $originalReleaseDate = null;

    /**
     * The orignal Language of the Collection
     *  (represented by an ISO 639-2 LanguageCode).
     *
     * @var string $originalLanguage
     */
    private $originalLanguage = null;

    /**
     * A Composite containing details of
     *  Descriptors and other attributes of the Collection which may vary according to
     *  Territory of release.
     *
     * @var \DedexBundle\Entity\Ern383\CollectionDetailsByTerritoryType[] $collectionDetailsByTerritory
     */
    private $collectionDetailsByTerritory = [
        
    ];

    /**
     * A Composite containing a list of
     *  CollectionResourceReferences for a Resource (specific to this
     *  Message).
     *
     * @var \DedexBundle\Entity\Ern383\CollectionResourceReferenceType[] $collectionResourceReferenceList
     */
    private $collectionResourceReferenceList = null;

    /**
     * A Composite containing a list of
     *  CollectionWorkReferences for a Work (specific to this Message).
     *
     * @var \DedexBundle\Entity\Ern383\CollectionWorkReferenceType[] $collectionWorkReferenceList
     */
    private $collectionWorkReferenceList = null;

    /**
     * A Reference for an Image (specific to this
     *  Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
     *
     * @var string $representativeImageReference
     */
    private $representativeImageReference = null;

    /**
     * A Composite containing details of the
     *  PLine for the Collection.
     *
     * @var \DedexBundle\Entity\Ern383\PLineType[] $pLine
     */
    private $pLine = [
        
    ];

    /**
     * A Composite containing details of the
     *  CLine for the Collection.
     *
     * @var \DedexBundle\Entity\Ern383\CLineType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of
     *  the Collection as defined in IETF RfC 5646. The default is the same as indicated for
     *  the containing composite. Language and Script are provided as
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
     *  the Collection as defined in IETF RfC 5646. The default is the same as indicated for
     *  the containing composite. Language and Script are provided as
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
     * Adds as collectionId
     *
     * A Composite containing details of an
     *  Identifier of the Collection.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\CollectionIdType $collectionId
     */
    public function addToCollectionId(\DedexBundle\Entity\Ern383\CollectionIdType $collectionId)
    {
        $this->collectionId[] = $collectionId;
        return $this;
    }

    /**
     * isset collectionId
     *
     * A Composite containing details of an
     *  Identifier of the Collection.
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
     * A Composite containing details of an
     *  Identifier of the Collection.
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
     * A Composite containing details of an
     *  Identifier of the Collection.
     *
     * @return \DedexBundle\Entity\Ern383\CollectionIdType[]
     */
    public function getCollectionId()
    {
        return $this->collectionId;
    }

    /**
     * Sets a new collectionId
     *
     * A Composite containing details of an
     *  Identifier of the Collection.
     *
     * @param \DedexBundle\Entity\Ern383\CollectionIdType[] $collectionId
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
     * A Composite containing details of the Type
     *  of the Collection.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\CollectionTypeType $collectionType
     */
    public function addToCollectionType(\DedexBundle\Entity\Ern383\CollectionTypeType $collectionType)
    {
        $this->collectionType[] = $collectionType;
        return $this;
    }

    /**
     * isset collectionType
     *
     * A Composite containing details of the Type
     *  of the Collection.
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
     * A Composite containing details of the Type
     *  of the Collection.
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
     * A Composite containing details of the Type
     *  of the Collection.
     *
     * @return \DedexBundle\Entity\Ern383\CollectionTypeType[]
     */
    public function getCollectionType()
    {
        return $this->collectionType;
    }

    /**
     * Sets a new collectionType
     *
     * A Composite containing details of the Type
     *  of the Collection.
     *
     * @param \DedexBundle\Entity\Ern383\CollectionTypeType[] $collectionType
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
     * The Identifier (specific to the Message)
     *  of the Collection within the Release which contains it. This is a
     *  LocalCollectionAnchor starting with the letter X.
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
     * The Identifier (specific to the Message)
     *  of the Collection within the Release which contains it. This is a
     *  LocalCollectionAnchor starting with the letter X.
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
     * Gets as equivalentReleaseReference
     *
     * A Reference for a Release (specific to
     *  this Message) that is represented by the Collection. This is a
     *  LocalReleaseAnchorReference starting with the letter R.
     *
     * @return string
     */
    public function getEquivalentReleaseReference()
    {
        return $this->equivalentReleaseReference;
    }

    /**
     * Sets a new equivalentReleaseReference
     *
     * A Reference for a Release (specific to
     *  this Message) that is represented by the Collection. This is a
     *  LocalReleaseAnchorReference starting with the letter R.
     *
     * @param string $equivalentReleaseReference
     * @return self
     */
    public function setEquivalentReleaseReference($equivalentReleaseReference)
    {
        $this->equivalentReleaseReference = $equivalentReleaseReference;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title
     *  of the Collection.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\TitleType $title
     */
    public function addToTitle(\DedexBundle\Entity\Ern383\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title
     *  of the Collection.
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
     *  of the Collection.
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
     *  of the Collection.
     *
     * @return \DedexBundle\Entity\Ern383\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title
     *  of the Collection.
     *
     * @param \DedexBundle\Entity\Ern383\TitleType[] $title
     * @return self
     */
    public function setTitle(array $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the
     *  Collection within all Collections at this level. The default value is 1, and the
     *  value must be incremented by 1 for each Collection occurring at a particular
     *  level.
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
     *  Collection within all Collections at this level. The default value is 1, and the
     *  value must be incremented by 1 for each Collection occurring at a particular
     *  level.
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
     * Adds as contributor
     *
     * A Composite containing details a
     *  Contributor to the Collection.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\DetailedResourceContributorType $contributor
     */
    public function addToContributor(\DedexBundle\Entity\Ern383\DetailedResourceContributorType $contributor)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * isset contributor
     *
     * A Composite containing details a
     *  Contributor to the Collection.
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
     * A Composite containing details a
     *  Contributor to the Collection.
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
     * A Composite containing details a
     *  Contributor to the Collection.
     *
     * @return \DedexBundle\Entity\Ern383\DetailedResourceContributorType[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Sets a new contributor
     *
     * A Composite containing details a
     *  Contributor to the Collection.
     *
     * @param \DedexBundle\Entity\Ern383\DetailedResourceContributorType[] $contributor
     * @return self
     */
    public function setContributor(array $contributor = null)
    {
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * Adds as character
     *
     * A Composite containing details of a
     *  Character in the Collection. A Character may be described through Name, Identifier
     *  and Roles.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\CharacterType $character
     */
    public function addToCharacter(\DedexBundle\Entity\Ern383\CharacterType $character)
    {
        $this->character[] = $character;
        return $this;
    }

    /**
     * isset character
     *
     * A Composite containing details of a
     *  Character in the Collection. A Character may be described through Name, Identifier
     *  and Roles.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharacter($index)
    {
        return isset($this->character[$index]);
    }

    /**
     * unset character
     *
     * A Composite containing details of a
     *  Character in the Collection. A Character may be described through Name, Identifier
     *  and Roles.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharacter($index)
    {
        unset($this->character[$index]);
    }

    /**
     * Gets as character
     *
     * A Composite containing details of a
     *  Character in the Collection. A Character may be described through Name, Identifier
     *  and Roles.
     *
     * @return \DedexBundle\Entity\Ern383\CharacterType[]
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * Sets a new character
     *
     * A Composite containing details of a
     *  Character in the Collection. A Character may be described through Name, Identifier
     *  and Roles.
     *
     * @param \DedexBundle\Entity\Ern383\CharacterType[] $character
     * @return self
     */
    public function setCharacter(array $character = null)
    {
        $this->character = $character;
        return $this;
    }

    /**
     * Gets as collectionCollectionReferenceList
     *
     * A Composite containing a list of
     *  CollectionCollectionReferences for a Collection (specific to this
     *  Message).
     *
     * @return \DedexBundle\Entity\Ern383\CollectionCollectionReferenceListType
     */
    public function getCollectionCollectionReferenceList()
    {
        return $this->collectionCollectionReferenceList;
    }

    /**
     * Sets a new collectionCollectionReferenceList
     *
     * A Composite containing a list of
     *  CollectionCollectionReferences for a Collection (specific to this
     *  Message).
     *
     * @param \DedexBundle\Entity\Ern383\CollectionCollectionReferenceListType $collectionCollectionReferenceList
     * @return self
     */
    public function setCollectionCollectionReferenceList(?\DedexBundle\Entity\Ern383\CollectionCollectionReferenceListType $collectionCollectionReferenceList = null)
    {
        $this->collectionCollectionReferenceList = $collectionCollectionReferenceList;
        return $this;
    }

    /**
     * Gets as isComplete
     *
     * The Flag indicating whether the Collection
     *  is complete (=true) or not (=false). Only one of the Elements IsComplete here and
     *  in the CollectionDetailsByTerritory is valid for a given
     *  Collection.
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
     * The Flag indicating whether the Collection
     *  is complete (=true) or not (=false). Only one of the Elements IsComplete here and
     *  in the CollectionDetailsByTerritory is valid for a given
     *  Collection.
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
     * Gets as duration
     *
     * The sum of the Durations of all Resources
     *  contained in the Collection (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where
     *  lower case characters indicate variables, upper case characters are part of the
     *  xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The
     *  seconds section ss may include fractions (e.g. one minute and 30.5 seconds would
     *  be PT1M30.5S).
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The sum of the Durations of all Resources
     *  contained in the Collection (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where
     *  lower case characters indicate variables, upper case characters are part of the
     *  xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The
     *  seconds section ss may include fractions (e.g. one minute and 30.5 seconds would
     *  be PT1M30.5S).
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(?\DateInterval $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as durationOfMusicalContent
     *
     * The Duration of the musical content (using
     *  the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate
     *  variables, upper case characters are part of the xs:string, e.g. one hour, two
     *  minutes and three seconds would be PT1H2M3S). The seconds section ss may include
     *  fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S).
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
     * The Duration of the musical content (using
     *  the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate
     *  variables, upper case characters are part of the xs:string, e.g. one hour, two
     *  minutes and three seconds would be PT1H2M3S). The seconds section ss may include
     *  fractions (e.g. one minute and 30.5 seconds would be
     *  PT1M30.5S).
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
     * A Composite containing details of the Date
     *  and Place of the Event in which the Collection was created. This is a string with
     *  the syntax YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern383\EventDateType
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets a new creationDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the Collection was created. This is a string with
     *  the syntax YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern383\EventDateType $creationDate
     * @return self
     */
    public function setCreationDate(?\DedexBundle\Entity\Ern383\EventDateType $creationDate = null)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Gets as releaseDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the Collection was or will be first made available
     *  for Usage in its current form, whether for physical or electronic/online
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
     *  and Place of the Event in which the Collection was or will be first made available
     *  for Usage in its current form, whether for physical or electronic/online
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
     *  and Place of the Event in which the Collection was or will be first made available
     *  for Usage, whether for physical or electronic/online distribution (in ISO
     *  8601:2004 format: YYYY-MM-DD).
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
     *  and Place of the Event in which the Collection was or will be first made available
     *  for Usage, whether for physical or electronic/online distribution (in ISO
     *  8601:2004 format: YYYY-MM-DD).
     *
     * @param \DedexBundle\Entity\Ern383\EventDateType $originalReleaseDate
     * @return self
     */
    public function setOriginalReleaseDate(?\DedexBundle\Entity\Ern383\EventDateType $originalReleaseDate = null)
    {
        $this->originalReleaseDate = $originalReleaseDate;
        return $this;
    }

    /**
     * Gets as originalLanguage
     *
     * The orignal Language of the Collection
     *  (represented by an ISO 639-2 LanguageCode).
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
     * The orignal Language of the Collection
     *  (represented by an ISO 639-2 LanguageCode).
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
     * A Composite containing details of
     *  Descriptors and other attributes of the Collection which may vary according to
     *  Territory of release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\CollectionDetailsByTerritoryType $collectionDetailsByTerritory
     */
    public function addToCollectionDetailsByTerritory(\DedexBundle\Entity\Ern383\CollectionDetailsByTerritoryType $collectionDetailsByTerritory)
    {
        $this->collectionDetailsByTerritory[] = $collectionDetailsByTerritory;
        return $this;
    }

    /**
     * isset collectionDetailsByTerritory
     *
     * A Composite containing details of
     *  Descriptors and other attributes of the Collection which may vary according to
     *  Territory of release.
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
     * A Composite containing details of
     *  Descriptors and other attributes of the Collection which may vary according to
     *  Territory of release.
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
     * A Composite containing details of
     *  Descriptors and other attributes of the Collection which may vary according to
     *  Territory of release.
     *
     * @return \DedexBundle\Entity\Ern383\CollectionDetailsByTerritoryType[]
     */
    public function getCollectionDetailsByTerritory()
    {
        return $this->collectionDetailsByTerritory;
    }

    /**
     * Sets a new collectionDetailsByTerritory
     *
     * A Composite containing details of
     *  Descriptors and other attributes of the Collection which may vary according to
     *  Territory of release.
     *
     * @param \DedexBundle\Entity\Ern383\CollectionDetailsByTerritoryType[] $collectionDetailsByTerritory
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
     * A Composite containing a list of
     *  CollectionResourceReferences for a Resource (specific to this
     *  Message).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\CollectionResourceReferenceType $collectionResourceReference
     */
    public function addToCollectionResourceReferenceList(\DedexBundle\Entity\Ern383\CollectionResourceReferenceType $collectionResourceReference)
    {
        $this->collectionResourceReferenceList[] = $collectionResourceReference;
        return $this;
    }

    /**
     * isset collectionResourceReferenceList
     *
     * A Composite containing a list of
     *  CollectionResourceReferences for a Resource (specific to this
     *  Message).
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
     * A Composite containing a list of
     *  CollectionResourceReferences for a Resource (specific to this
     *  Message).
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
     * A Composite containing a list of
     *  CollectionResourceReferences for a Resource (specific to this
     *  Message).
     *
     * @return \DedexBundle\Entity\Ern383\CollectionResourceReferenceType[]
     */
    public function getCollectionResourceReferenceList()
    {
        return $this->collectionResourceReferenceList;
    }

    /**
     * Sets a new collectionResourceReferenceList
     *
     * A Composite containing a list of
     *  CollectionResourceReferences for a Resource (specific to this
     *  Message).
     *
     * @param \DedexBundle\Entity\Ern383\CollectionResourceReferenceType[] $collectionResourceReferenceList
     * @return self
     */
    public function setCollectionResourceReferenceList(array $collectionResourceReferenceList = null)
    {
        $this->collectionResourceReferenceList = $collectionResourceReferenceList;
        return $this;
    }

    /**
     * Adds as collectionWorkReference
     *
     * A Composite containing a list of
     *  CollectionWorkReferences for a Work (specific to this Message).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\CollectionWorkReferenceType $collectionWorkReference
     */
    public function addToCollectionWorkReferenceList(\DedexBundle\Entity\Ern383\CollectionWorkReferenceType $collectionWorkReference)
    {
        $this->collectionWorkReferenceList[] = $collectionWorkReference;
        return $this;
    }

    /**
     * isset collectionWorkReferenceList
     *
     * A Composite containing a list of
     *  CollectionWorkReferences for a Work (specific to this Message).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCollectionWorkReferenceList($index)
    {
        return isset($this->collectionWorkReferenceList[$index]);
    }

    /**
     * unset collectionWorkReferenceList
     *
     * A Composite containing a list of
     *  CollectionWorkReferences for a Work (specific to this Message).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCollectionWorkReferenceList($index)
    {
        unset($this->collectionWorkReferenceList[$index]);
    }

    /**
     * Gets as collectionWorkReferenceList
     *
     * A Composite containing a list of
     *  CollectionWorkReferences for a Work (specific to this Message).
     *
     * @return \DedexBundle\Entity\Ern383\CollectionWorkReferenceType[]
     */
    public function getCollectionWorkReferenceList()
    {
        return $this->collectionWorkReferenceList;
    }

    /**
     * Sets a new collectionWorkReferenceList
     *
     * A Composite containing a list of
     *  CollectionWorkReferences for a Work (specific to this Message).
     *
     * @param \DedexBundle\Entity\Ern383\CollectionWorkReferenceType[] $collectionWorkReferenceList
     * @return self
     */
    public function setCollectionWorkReferenceList(array $collectionWorkReferenceList = null)
    {
        $this->collectionWorkReferenceList = $collectionWorkReferenceList;
        return $this;
    }

    /**
     * Gets as representativeImageReference
     *
     * A Reference for an Image (specific to this
     *  Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
     *
     * @return string
     */
    public function getRepresentativeImageReference()
    {
        return $this->representativeImageReference;
    }

    /**
     * Sets a new representativeImageReference
     *
     * A Reference for an Image (specific to this
     *  Message). This is a LocalResourceAnchorReference starting with the letter
     *  A.
     *
     * @param string $representativeImageReference
     * @return self
     */
    public function setRepresentativeImageReference($representativeImageReference)
    {
        $this->representativeImageReference = $representativeImageReference;
        return $this;
    }

    /**
     * Adds as pLine
     *
     * A Composite containing details of the
     *  PLine for the Collection.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\PLineType $pLine
     */
    public function addToPLine(\DedexBundle\Entity\Ern383\PLineType $pLine)
    {
        $this->pLine[] = $pLine;
        return $this;
    }

    /**
     * isset pLine
     *
     * A Composite containing details of the
     *  PLine for the Collection.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPLine($index)
    {
        return isset($this->pLine[$index]);
    }

    /**
     * unset pLine
     *
     * A Composite containing details of the
     *  PLine for the Collection.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPLine($index)
    {
        unset($this->pLine[$index]);
    }

    /**
     * Gets as pLine
     *
     * A Composite containing details of the
     *  PLine for the Collection.
     *
     * @return \DedexBundle\Entity\Ern383\PLineType[]
     */
    public function getPLine()
    {
        return $this->pLine;
    }

    /**
     * Sets a new pLine
     *
     * A Composite containing details of the
     *  PLine for the Collection.
     *
     * @param \DedexBundle\Entity\Ern383\PLineType[] $pLine
     * @return self
     */
    public function setPLine(array $pLine = null)
    {
        $this->pLine = $pLine;
        return $this;
    }

    /**
     * Adds as cLine
     *
     * A Composite containing details of the
     *  CLine for the Collection.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\CLineType $cLine
     */
    public function addToCLine(\DedexBundle\Entity\Ern383\CLineType $cLine)
    {
        $this->cLine[] = $cLine;
        return $this;
    }

    /**
     * isset cLine
     *
     * A Composite containing details of the
     *  CLine for the Collection.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCLine($index)
    {
        return isset($this->cLine[$index]);
    }

    /**
     * unset cLine
     *
     * A Composite containing details of the
     *  CLine for the Collection.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCLine($index)
    {
        unset($this->cLine[$index]);
    }

    /**
     * Gets as cLine
     *
     * A Composite containing details of the
     *  CLine for the Collection.
     *
     * @return \DedexBundle\Entity\Ern383\CLineType[]
     */
    public function getCLine()
    {
        return $this->cLine;
    }

    /**
     * Sets a new cLine
     *
     * A Composite containing details of the
     *  CLine for the Collection.
     *
     * @param \DedexBundle\Entity\Ern383\CLineType[] $cLine
     * @return self
     */
    public function setCLine(array $cLine = null)
    {
        $this->cLine = $cLine;
        return $this;
    }
}

