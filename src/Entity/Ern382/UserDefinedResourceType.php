<?php

namespace DedexBundle\Entity\Ern382;

/**
 * Class representing UserDefinedResourceType
 *
 * A Composite containing details of a
 *  UserDefinedResource.
 * XSD Type: UserDefinedResource
 */
class UserDefinedResourceType
{

    /**
     * The Flag indicating whether the
     *  UserDefinedResource Element was updated (=true) or not (=false). When this Boolean
     *  Flag is set to true, the MessageRecipient is expected to replace any previously
     *  provided UserDefinedResource data with the now provided data. This attribute is
     *  deprecated. DDEX advises that it may be removed at a future date and therefore
     *  recommends against using it.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * The Language and script for the Elements of
     *  the UserDefinedResource as defined in IETF RfC 5646. The default is the same as
     *  indicated for the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of the Type
     *  of the UserDefinedResource.
     *
     * @var \DedexBundle\Entity\Ern382\UserDefinedResourceTypeType $userDefinedResourceType
     */
    private $userDefinedResourceType = null;

    /**
     * The Flag indicating whether the
     *  UserDefinedResource is related to an Artist (=true) or not
     *  (=false).
     *
     * @var bool $isArtistRelated
     */
    private $isArtistRelated = null;

    /**
     * A Composite containing details of
     *  Identifiers of the UserDefinedResource.
     *
     * @var \DedexBundle\Entity\Ern382\ResourceProprietaryIdType[] $userDefinedResourceId
     */
    private $userDefinedResourceId = [
        
    ];

    /**
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the UserDefinedResource.
     *
     * @var \DedexBundle\Entity\Ern382\MusicalWorkIdType[] $indirectUserDefinedResourceId
     */
    private $indirectUserDefinedResourceId = [
        
    ];

    /**
     * The Identifier (specific to the Message)
     *  of the UserDefinedResource within the Release which contains it. This is a
     *  LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A Composite containing details of one or
     *  more MusicalWorks contained in the UserDefinedResource.
     *
     * @var \DedexBundle\Entity\Ern382\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     */
    private $resourceMusicalWorkReferenceList = null;

    /**
     * A Composite containing details of
     *  ResourceContainedResourceReferences referring to a Resource that is contained in
     *  the current UserDefinedResource.
     *
     * @var \DedexBundle\Entity\Ern382\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     */
    private $resourceContainedResourceReferenceList = null;

    /**
     * A Composite containing details of a Title
     *  of the UserDefinedResource.
     *
     * @var \DedexBundle\Entity\Ern382\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing details of a
     *  UserDefinedValue.
     *
     * @var \DedexBundle\Entity\Ern382\UserDefinedValueType[] $userDefinedValue
     */
    private $userDefinedValue = [
        
    ];

    /**
     * A Composite containing details of the Date
     *  and Place of the Event in which the UserDefinedResource was created. This is a
     *  string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern382\EventDateType $creationDate
     */
    private $creationDate = null;

    /**
     * A Composite containing details of the
     *  UserDefinedResource which may vary according to Territory of
     *  release.
     *
     * @var \DedexBundle\Entity\Ern382\UserDefinedResourceDetailsByTerritoryType[] $userDefinedResourceDetailsByTerritory
     */
    private $userDefinedResourceDetailsByTerritory = [
        
    ];

    /**
     * Gets as isUpdated
     *
     * The Flag indicating whether the
     *  UserDefinedResource Element was updated (=true) or not (=false). When this Boolean
     *  Flag is set to true, the MessageRecipient is expected to replace any previously
     *  provided UserDefinedResource data with the now provided data. This attribute is
     *  deprecated. DDEX advises that it may be removed at a future date and therefore
     *  recommends against using it.
     *
     * @return bool
     */
    public function getIsUpdated()
    {
        return $this->isUpdated;
    }

    /**
     * Sets a new isUpdated
     *
     * The Flag indicating whether the
     *  UserDefinedResource Element was updated (=true) or not (=false). When this Boolean
     *  Flag is set to true, the MessageRecipient is expected to replace any previously
     *  provided UserDefinedResource data with the now provided data. This attribute is
     *  deprecated. DDEX advises that it may be removed at a future date and therefore
     *  recommends against using it.
     *
     * @param bool $isUpdated
     * @return self
     */
    public function setIsUpdated($isUpdated)
    {
        $this->isUpdated = $isUpdated;
        return $this;
    }

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of
     *  the UserDefinedResource as defined in IETF RfC 5646. The default is the same as
     *  indicated for the containing composite. Language and Script are provided as
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
     *  the UserDefinedResource as defined in IETF RfC 5646. The default is the same as
     *  indicated for the containing composite. Language and Script are provided as
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
     * Gets as userDefinedResourceType
     *
     * A Composite containing details of the Type
     *  of the UserDefinedResource.
     *
     * @return \DedexBundle\Entity\Ern382\UserDefinedResourceTypeType
     */
    public function getUserDefinedResourceType()
    {
        return $this->userDefinedResourceType;
    }

    /**
     * Sets a new userDefinedResourceType
     *
     * A Composite containing details of the Type
     *  of the UserDefinedResource.
     *
     * @param \DedexBundle\Entity\Ern382\UserDefinedResourceTypeType $userDefinedResourceType
     * @return self
     */
    public function setUserDefinedResourceType(\DedexBundle\Entity\Ern382\UserDefinedResourceTypeType $userDefinedResourceType)
    {
        $this->userDefinedResourceType = $userDefinedResourceType;
        return $this;
    }

    /**
     * Gets as isArtistRelated
     *
     * The Flag indicating whether the
     *  UserDefinedResource is related to an Artist (=true) or not
     *  (=false).
     *
     * @return bool
     */
    public function getIsArtistRelated()
    {
        return $this->isArtistRelated;
    }

    /**
     * Sets a new isArtistRelated
     *
     * The Flag indicating whether the
     *  UserDefinedResource is related to an Artist (=true) or not
     *  (=false).
     *
     * @param bool $isArtistRelated
     * @return self
     */
    public function setIsArtistRelated($isArtistRelated)
    {
        $this->isArtistRelated = $isArtistRelated;
        return $this;
    }

    /**
     * Adds as userDefinedResourceId
     *
     * A Composite containing details of
     *  Identifiers of the UserDefinedResource.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\ResourceProprietaryIdType $userDefinedResourceId
     */
    public function addToUserDefinedResourceId(\DedexBundle\Entity\Ern382\ResourceProprietaryIdType $userDefinedResourceId)
    {
        $this->userDefinedResourceId[] = $userDefinedResourceId;
        return $this;
    }

    /**
     * isset userDefinedResourceId
     *
     * A Composite containing details of
     *  Identifiers of the UserDefinedResource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserDefinedResourceId($index)
    {
        return isset($this->userDefinedResourceId[$index]);
    }

    /**
     * unset userDefinedResourceId
     *
     * A Composite containing details of
     *  Identifiers of the UserDefinedResource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserDefinedResourceId($index)
    {
        unset($this->userDefinedResourceId[$index]);
    }

    /**
     * Gets as userDefinedResourceId
     *
     * A Composite containing details of
     *  Identifiers of the UserDefinedResource.
     *
     * @return \DedexBundle\Entity\Ern382\ResourceProprietaryIdType[]
     */
    public function getUserDefinedResourceId()
    {
        return $this->userDefinedResourceId;
    }

    /**
     * Sets a new userDefinedResourceId
     *
     * A Composite containing details of
     *  Identifiers of the UserDefinedResource.
     *
     * @param \DedexBundle\Entity\Ern382\ResourceProprietaryIdType[] $userDefinedResourceId
     * @return self
     */
    public function setUserDefinedResourceId(array $userDefinedResourceId)
    {
        $this->userDefinedResourceId = $userDefinedResourceId;
        return $this;
    }

    /**
     * Adds as indirectUserDefinedResourceId
     *
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the UserDefinedResource.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\MusicalWorkIdType $indirectUserDefinedResourceId
     */
    public function addToIndirectUserDefinedResourceId(\DedexBundle\Entity\Ern382\MusicalWorkIdType $indirectUserDefinedResourceId)
    {
        $this->indirectUserDefinedResourceId[] = $indirectUserDefinedResourceId;
        return $this;
    }

    /**
     * isset indirectUserDefinedResourceId
     *
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the UserDefinedResource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndirectUserDefinedResourceId($index)
    {
        return isset($this->indirectUserDefinedResourceId[$index]);
    }

    /**
     * unset indirectUserDefinedResourceId
     *
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the UserDefinedResource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndirectUserDefinedResourceId($index)
    {
        unset($this->indirectUserDefinedResourceId[$index]);
    }

    /**
     * Gets as indirectUserDefinedResourceId
     *
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the UserDefinedResource.
     *
     * @return \DedexBundle\Entity\Ern382\MusicalWorkIdType[]
     */
    public function getIndirectUserDefinedResourceId()
    {
        return $this->indirectUserDefinedResourceId;
    }

    /**
     * Sets a new indirectUserDefinedResourceId
     *
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the UserDefinedResource.
     *
     * @param \DedexBundle\Entity\Ern382\MusicalWorkIdType[] $indirectUserDefinedResourceId
     * @return self
     */
    public function setIndirectUserDefinedResourceId(array $indirectUserDefinedResourceId)
    {
        $this->indirectUserDefinedResourceId = $indirectUserDefinedResourceId;
        return $this;
    }

    /**
     * Gets as resourceReference
     *
     * The Identifier (specific to the Message)
     *  of the UserDefinedResource within the Release which contains it. This is a
     *  LocalResourceAnchor starting with the letter A.
     *
     * @return string
     */
    public function getResourceReference()
    {
        return $this->resourceReference;
    }

    /**
     * Sets a new resourceReference
     *
     * The Identifier (specific to the Message)
     *  of the UserDefinedResource within the Release which contains it. This is a
     *  LocalResourceAnchor starting with the letter A.
     *
     * @param string $resourceReference
     * @return self
     */
    public function setResourceReference($resourceReference)
    {
        $this->resourceReference = $resourceReference;
        return $this;
    }

    /**
     * Adds as resourceMusicalWorkReference
     *
     * A Composite containing details of one or
     *  more MusicalWorks contained in the UserDefinedResource.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference
     */
    public function addToResourceMusicalWorkReferenceList(\DedexBundle\Entity\Ern382\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference)
    {
        $this->resourceMusicalWorkReferenceList[] = $resourceMusicalWorkReference;
        return $this;
    }

    /**
     * isset resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or
     *  more MusicalWorks contained in the UserDefinedResource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceMusicalWorkReferenceList($index)
    {
        return isset($this->resourceMusicalWorkReferenceList[$index]);
    }

    /**
     * unset resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or
     *  more MusicalWorks contained in the UserDefinedResource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceMusicalWorkReferenceList($index)
    {
        unset($this->resourceMusicalWorkReferenceList[$index]);
    }

    /**
     * Gets as resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or
     *  more MusicalWorks contained in the UserDefinedResource.
     *
     * @return \DedexBundle\Entity\Ern382\ResourceMusicalWorkReferenceType[]
     */
    public function getResourceMusicalWorkReferenceList()
    {
        return $this->resourceMusicalWorkReferenceList;
    }

    /**
     * Sets a new resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or
     *  more MusicalWorks contained in the UserDefinedResource.
     *
     * @param \DedexBundle\Entity\Ern382\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     * @return self
     */
    public function setResourceMusicalWorkReferenceList(array $resourceMusicalWorkReferenceList)
    {
        $this->resourceMusicalWorkReferenceList = $resourceMusicalWorkReferenceList;
        return $this;
    }

    /**
     * Adds as resourceContainedResourceReference
     *
     * A Composite containing details of
     *  ResourceContainedResourceReferences referring to a Resource that is contained in
     *  the current UserDefinedResource.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\ResourceContainedResourceReferenceType $resourceContainedResourceReference
     */
    public function addToResourceContainedResourceReferenceList(\DedexBundle\Entity\Ern382\ResourceContainedResourceReferenceType $resourceContainedResourceReference)
    {
        $this->resourceContainedResourceReferenceList[] = $resourceContainedResourceReference;
        return $this;
    }

    /**
     * isset resourceContainedResourceReferenceList
     *
     * A Composite containing details of
     *  ResourceContainedResourceReferences referring to a Resource that is contained in
     *  the current UserDefinedResource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceContainedResourceReferenceList($index)
    {
        return isset($this->resourceContainedResourceReferenceList[$index]);
    }

    /**
     * unset resourceContainedResourceReferenceList
     *
     * A Composite containing details of
     *  ResourceContainedResourceReferences referring to a Resource that is contained in
     *  the current UserDefinedResource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceContainedResourceReferenceList($index)
    {
        unset($this->resourceContainedResourceReferenceList[$index]);
    }

    /**
     * Gets as resourceContainedResourceReferenceList
     *
     * A Composite containing details of
     *  ResourceContainedResourceReferences referring to a Resource that is contained in
     *  the current UserDefinedResource.
     *
     * @return \DedexBundle\Entity\Ern382\ResourceContainedResourceReferenceType[]
     */
    public function getResourceContainedResourceReferenceList()
    {
        return $this->resourceContainedResourceReferenceList;
    }

    /**
     * Sets a new resourceContainedResourceReferenceList
     *
     * A Composite containing details of
     *  ResourceContainedResourceReferences referring to a Resource that is contained in
     *  the current UserDefinedResource.
     *
     * @param \DedexBundle\Entity\Ern382\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     * @return self
     */
    public function setResourceContainedResourceReferenceList(array $resourceContainedResourceReferenceList)
    {
        $this->resourceContainedResourceReferenceList = $resourceContainedResourceReferenceList;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title
     *  of the UserDefinedResource.
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
     *  of the UserDefinedResource.
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
     *  of the UserDefinedResource.
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
     *  of the UserDefinedResource.
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
     *  of the UserDefinedResource.
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
     * Adds as userDefinedValue
     *
     * A Composite containing details of a
     *  UserDefinedValue.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\UserDefinedValueType $userDefinedValue
     */
    public function addToUserDefinedValue(\DedexBundle\Entity\Ern382\UserDefinedValueType $userDefinedValue)
    {
        $this->userDefinedValue[] = $userDefinedValue;
        return $this;
    }

    /**
     * isset userDefinedValue
     *
     * A Composite containing details of a
     *  UserDefinedValue.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserDefinedValue($index)
    {
        return isset($this->userDefinedValue[$index]);
    }

    /**
     * unset userDefinedValue
     *
     * A Composite containing details of a
     *  UserDefinedValue.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserDefinedValue($index)
    {
        unset($this->userDefinedValue[$index]);
    }

    /**
     * Gets as userDefinedValue
     *
     * A Composite containing details of a
     *  UserDefinedValue.
     *
     * @return \DedexBundle\Entity\Ern382\UserDefinedValueType[]
     */
    public function getUserDefinedValue()
    {
        return $this->userDefinedValue;
    }

    /**
     * Sets a new userDefinedValue
     *
     * A Composite containing details of a
     *  UserDefinedValue.
     *
     * @param \DedexBundle\Entity\Ern382\UserDefinedValueType[] $userDefinedValue
     * @return self
     */
    public function setUserDefinedValue(array $userDefinedValue)
    {
        $this->userDefinedValue = $userDefinedValue;
        return $this;
    }

    /**
     * Gets as creationDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the UserDefinedResource was created. This is a
     *  string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern382\EventDateType
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets a new creationDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the UserDefinedResource was created. This is a
     *  string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern382\EventDateType $creationDate
     * @return self
     */
    public function setCreationDate(\DedexBundle\Entity\Ern382\EventDateType $creationDate)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Adds as userDefinedResourceDetailsByTerritory
     *
     * A Composite containing details of the
     *  UserDefinedResource which may vary according to Territory of
     *  release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\UserDefinedResourceDetailsByTerritoryType $userDefinedResourceDetailsByTerritory
     */
    public function addToUserDefinedResourceDetailsByTerritory(\DedexBundle\Entity\Ern382\UserDefinedResourceDetailsByTerritoryType $userDefinedResourceDetailsByTerritory)
    {
        $this->userDefinedResourceDetailsByTerritory[] = $userDefinedResourceDetailsByTerritory;
        return $this;
    }

    /**
     * isset userDefinedResourceDetailsByTerritory
     *
     * A Composite containing details of the
     *  UserDefinedResource which may vary according to Territory of
     *  release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserDefinedResourceDetailsByTerritory($index)
    {
        return isset($this->userDefinedResourceDetailsByTerritory[$index]);
    }

    /**
     * unset userDefinedResourceDetailsByTerritory
     *
     * A Composite containing details of the
     *  UserDefinedResource which may vary according to Territory of
     *  release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserDefinedResourceDetailsByTerritory($index)
    {
        unset($this->userDefinedResourceDetailsByTerritory[$index]);
    }

    /**
     * Gets as userDefinedResourceDetailsByTerritory
     *
     * A Composite containing details of the
     *  UserDefinedResource which may vary according to Territory of
     *  release.
     *
     * @return \DedexBundle\Entity\Ern382\UserDefinedResourceDetailsByTerritoryType[]
     */
    public function getUserDefinedResourceDetailsByTerritory()
    {
        return $this->userDefinedResourceDetailsByTerritory;
    }

    /**
     * Sets a new userDefinedResourceDetailsByTerritory
     *
     * A Composite containing details of the
     *  UserDefinedResource which may vary according to Territory of
     *  release.
     *
     * @param \DedexBundle\Entity\Ern382\UserDefinedResourceDetailsByTerritoryType[] $userDefinedResourceDetailsByTerritory
     * @return self
     */
    public function setUserDefinedResourceDetailsByTerritory(array $userDefinedResourceDetailsByTerritory)
    {
        $this->userDefinedResourceDetailsByTerritory = $userDefinedResourceDetailsByTerritory;
        return $this;
    }


}

