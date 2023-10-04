<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing UserDefinedResourceType
 *
 * A ddex:Composite containing details of a ddex:UserDefinedResource.
 * XSD Type: UserDefinedResource
 */
class UserDefinedResourceType
{
    /**
     * The ddex:Flag indicating whether the ern:UserDefinedResource ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided ern:UserDefinedResource data with the now provided data.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * The ddex:Language and script for the ddex:Elements of the ern:UserDefinedResource as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of the ddex:Type of the ern:UserDefinedResource.
     *
     * @var \DedexBundle\Entity\DdexC\UserDefinedResourceTypeType $userDefinedResourceType
     */
    private $userDefinedResourceType = null;

    /**
     * The ddex:Flag indicating whether the ern:UserDefinedResource is related to an ddex:Artist (=True) or not (=False).
     *
     * @var bool $isArtistRelated
     */
    private $isArtistRelated = null;

    /**
     * A ddex:Composite containing details of ddex:Identifiers of the ern:UserDefinedResource.
     *
     * @var \DedexBundle\Entity\DdexC\UserDefinedResourceIdType[] $userDefinedResourceId
     */
    private $userDefinedResourceId = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:UserDefinedResource.
     *
     * @var \DedexBundle\Entity\DdexC\MusicalWorkIdType[] $indirectUserDefinedResourceId
     */
    private $indirectUserDefinedResourceId = [
        
    ];

    /**
     * The ddex:Identifier (specific to the ddex:Message) of the ern:UserDefinedResource within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:UserDefinedResource.
     *
     * @var \DedexBundle\Entity\DdexC\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     */
    private $resourceMusicalWorkReferenceList = null;

    /**
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:UserDefinedResource.
     *
     * @var \DedexBundle\Entity\DdexC\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     */
    private $resourceContainedResourceReferenceList = null;

    /**
     * A ddex:Composite containing details of a ddex:Title of the ern:UserDefinedResource.
     *
     * @var \DedexBundle\Entity\DdexC\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:UserDefinedValue.
     *
     * @var \DedexBundle\Entity\DdexC\UserDefinedValueType[] $userDefinedValue
     */
    private $userDefinedValue = [
        
    ];

    /**
     * A ddex:Composite containing details of the ern:UserDefinedResource which may vary according to ddex:Territory of release.
     *
     * @var \DedexBundle\Entity\Ern341\UserDefinedResourceDetailsByTerritoryType[] $userDefinedResourceDetailsByTerritory
     */
    private $userDefinedResourceDetailsByTerritory = [
        
    ];

    /**
     * Gets as isUpdated
     *
     * The ddex:Flag indicating whether the ern:UserDefinedResource ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided ern:UserDefinedResource data with the now provided data.
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
     * The ddex:Flag indicating whether the ern:UserDefinedResource ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided ern:UserDefinedResource data with the now provided data.
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
     * The ddex:Language and script for the ddex:Elements of the ern:UserDefinedResource as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ern:UserDefinedResource as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Composite containing details of the ddex:Type of the ern:UserDefinedResource.
     *
     * @return \DedexBundle\Entity\DdexC\UserDefinedResourceTypeType
     */
    public function getUserDefinedResourceType()
    {
        return $this->userDefinedResourceType;
    }

    /**
     * Sets a new userDefinedResourceType
     *
     * A ddex:Composite containing details of the ddex:Type of the ern:UserDefinedResource.
     *
     * @param \DedexBundle\Entity\DdexC\UserDefinedResourceTypeType $userDefinedResourceType
     * @return self
     */
    public function setUserDefinedResourceType(?\DedexBundle\Entity\DdexC\UserDefinedResourceTypeType $userDefinedResourceType = null)
    {
        $this->userDefinedResourceType = $userDefinedResourceType;
        return $this;
    }

    /**
     * Gets as isArtistRelated
     *
     * The ddex:Flag indicating whether the ern:UserDefinedResource is related to an ddex:Artist (=True) or not (=False).
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
     * The ddex:Flag indicating whether the ern:UserDefinedResource is related to an ddex:Artist (=True) or not (=False).
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
     * A ddex:Composite containing details of ddex:Identifiers of the ern:UserDefinedResource.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\UserDefinedResourceIdType $userDefinedResourceId
     */
    public function addToUserDefinedResourceId(\DedexBundle\Entity\DdexC\UserDefinedResourceIdType $userDefinedResourceId)
    {
        $this->userDefinedResourceId[] = $userDefinedResourceId;
        return $this;
    }

    /**
     * isset userDefinedResourceId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ern:UserDefinedResource.
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
     * A ddex:Composite containing details of ddex:Identifiers of the ern:UserDefinedResource.
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
     * A ddex:Composite containing details of ddex:Identifiers of the ern:UserDefinedResource.
     *
     * @return \DedexBundle\Entity\DdexC\UserDefinedResourceIdType[]
     */
    public function getUserDefinedResourceId()
    {
        return $this->userDefinedResourceId;
    }

    /**
     * Sets a new userDefinedResourceId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ern:UserDefinedResource.
     *
     * @param \DedexBundle\Entity\DdexC\UserDefinedResourceIdType[] $userDefinedResourceId
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
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:UserDefinedResource.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\MusicalWorkIdType $indirectUserDefinedResourceId
     */
    public function addToIndirectUserDefinedResourceId(\DedexBundle\Entity\DdexC\MusicalWorkIdType $indirectUserDefinedResourceId)
    {
        $this->indirectUserDefinedResourceId[] = $indirectUserDefinedResourceId;
        return $this;
    }

    /**
     * isset indirectUserDefinedResourceId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:UserDefinedResource.
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
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:UserDefinedResource.
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
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:UserDefinedResource.
     *
     * @return \DedexBundle\Entity\DdexC\MusicalWorkIdType[]
     */
    public function getIndirectUserDefinedResourceId()
    {
        return $this->indirectUserDefinedResourceId;
    }

    /**
     * Sets a new indirectUserDefinedResourceId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:UserDefinedResource.
     *
     * @param \DedexBundle\Entity\DdexC\MusicalWorkIdType[] $indirectUserDefinedResourceId
     * @return self
     */
    public function setIndirectUserDefinedResourceId(array $indirectUserDefinedResourceId = null)
    {
        $this->indirectUserDefinedResourceId = $indirectUserDefinedResourceId;
        return $this;
    }

    /**
     * Gets as resourceReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the ern:UserDefinedResource within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
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
     * The ddex:Identifier (specific to the ddex:Message) of the ern:UserDefinedResource within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:UserDefinedResource.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference
     */
    public function addToResourceMusicalWorkReferenceList(\DedexBundle\Entity\DdexC\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference)
    {
        $this->resourceMusicalWorkReferenceList[] = $resourceMusicalWorkReference;
        return $this;
    }

    /**
     * isset resourceMusicalWorkReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:UserDefinedResource.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:UserDefinedResource.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:UserDefinedResource.
     *
     * @return \DedexBundle\Entity\DdexC\ResourceMusicalWorkReferenceType[]
     */
    public function getResourceMusicalWorkReferenceList()
    {
        return $this->resourceMusicalWorkReferenceList;
    }

    /**
     * Sets a new resourceMusicalWorkReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:UserDefinedResource.
     *
     * @param \DedexBundle\Entity\DdexC\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     * @return self
     */
    public function setResourceMusicalWorkReferenceList(array $resourceMusicalWorkReferenceList = null)
    {
        $this->resourceMusicalWorkReferenceList = $resourceMusicalWorkReferenceList;
        return $this;
    }

    /**
     * Adds as resourceContainedResourceReference
     *
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:UserDefinedResource.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ResourceContainedResourceReferenceType $resourceContainedResourceReference
     */
    public function addToResourceContainedResourceReferenceList(\DedexBundle\Entity\DdexC\ResourceContainedResourceReferenceType $resourceContainedResourceReference)
    {
        $this->resourceContainedResourceReferenceList[] = $resourceContainedResourceReference;
        return $this;
    }

    /**
     * isset resourceContainedResourceReferenceList
     *
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:UserDefinedResource.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:UserDefinedResource.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:UserDefinedResource.
     *
     * @return \DedexBundle\Entity\DdexC\ResourceContainedResourceReferenceType[]
     */
    public function getResourceContainedResourceReferenceList()
    {
        return $this->resourceContainedResourceReferenceList;
    }

    /**
     * Sets a new resourceContainedResourceReferenceList
     *
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:UserDefinedResource.
     *
     * @param \DedexBundle\Entity\DdexC\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     * @return self
     */
    public function setResourceContainedResourceReferenceList(array $resourceContainedResourceReferenceList = null)
    {
        $this->resourceContainedResourceReferenceList = $resourceContainedResourceReferenceList;
        return $this;
    }

    /**
     * Adds as title
     *
     * A ddex:Composite containing details of a ddex:Title of the ern:UserDefinedResource.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:UserDefinedResource.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:UserDefinedResource.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:UserDefinedResource.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:UserDefinedResource.
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
     * Adds as userDefinedValue
     *
     * A ddex:Composite containing details of a ddex:UserDefinedValue.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\UserDefinedValueType $userDefinedValue
     */
    public function addToUserDefinedValue(\DedexBundle\Entity\DdexC\UserDefinedValueType $userDefinedValue)
    {
        $this->userDefinedValue[] = $userDefinedValue;
        return $this;
    }

    /**
     * isset userDefinedValue
     *
     * A ddex:Composite containing details of a ddex:UserDefinedValue.
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
     * A ddex:Composite containing details of a ddex:UserDefinedValue.
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
     * A ddex:Composite containing details of a ddex:UserDefinedValue.
     *
     * @return \DedexBundle\Entity\DdexC\UserDefinedValueType[]
     */
    public function getUserDefinedValue()
    {
        return $this->userDefinedValue;
    }

    /**
     * Sets a new userDefinedValue
     *
     * A ddex:Composite containing details of a ddex:UserDefinedValue.
     *
     * @param \DedexBundle\Entity\DdexC\UserDefinedValueType[] $userDefinedValue
     * @return self
     */
    public function setUserDefinedValue(array $userDefinedValue = null)
    {
        $this->userDefinedValue = $userDefinedValue;
        return $this;
    }

    /**
     * Adds as userDefinedResourceDetailsByTerritory
     *
     * A ddex:Composite containing details of the ern:UserDefinedResource which may vary according to ddex:Territory of release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\UserDefinedResourceDetailsByTerritoryType $userDefinedResourceDetailsByTerritory
     */
    public function addToUserDefinedResourceDetailsByTerritory(\DedexBundle\Entity\Ern341\UserDefinedResourceDetailsByTerritoryType $userDefinedResourceDetailsByTerritory)
    {
        $this->userDefinedResourceDetailsByTerritory[] = $userDefinedResourceDetailsByTerritory;
        return $this;
    }

    /**
     * isset userDefinedResourceDetailsByTerritory
     *
     * A ddex:Composite containing details of the ern:UserDefinedResource which may vary according to ddex:Territory of release.
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
     * A ddex:Composite containing details of the ern:UserDefinedResource which may vary according to ddex:Territory of release.
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
     * A ddex:Composite containing details of the ern:UserDefinedResource which may vary according to ddex:Territory of release.
     *
     * @return \DedexBundle\Entity\Ern341\UserDefinedResourceDetailsByTerritoryType[]
     */
    public function getUserDefinedResourceDetailsByTerritory()
    {
        return $this->userDefinedResourceDetailsByTerritory;
    }

    /**
     * Sets a new userDefinedResourceDetailsByTerritory
     *
     * A ddex:Composite containing details of the ern:UserDefinedResource which may vary according to ddex:Territory of release.
     *
     * @param \DedexBundle\Entity\Ern341\UserDefinedResourceDetailsByTerritoryType[] $userDefinedResourceDetailsByTerritory
     * @return self
     */
    public function setUserDefinedResourceDetailsByTerritory(array $userDefinedResourceDetailsByTerritory)
    {
        $this->userDefinedResourceDetailsByTerritory = $userDefinedResourceDetailsByTerritory;
        return $this;
    }
}

