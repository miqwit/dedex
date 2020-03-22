<?php

namespace DedexBundle\Entity\Ern;

/**
 * Class representing SoftwareType
 *
 * A Composite containing details of an item of
 *  Software.
 * XSD Type: Software
 */
class SoftwareType
{

    /**
     * The Flag indicating whether the Software
     *  Element was updated (=true) or not (=false). When this Boolean Flag is set to true,
     *  the MessageRecipient is expected to replace any previously provided Software data
     *  with the now provided data. This attribute is deprecated. DDEX advises that it may be
     *  removed at a future date and therefore recommends against using
     *  it.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * The Language and script for the Elements of
     *  the Software as defined in IETF RfC 5646. The default is the same as indicated for
     *  the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of the Type
     *  of the Software.
     *
     * @var \DedexBundle\Entity\Ern\SoftwareTypeType $softwareType
     */
    private $softwareType = null;

    /**
     * The Flag indicating whether the Software
     *  is related to an Artist (=true) or not (=false).
     *
     * @var bool $isArtistRelated
     */
    private $isArtistRelated = null;

    /**
     * A Composite containing details of
     *  Identifiers of the Software.
     *
     * @var \DedexBundle\Entity\Ern\ResourceProprietaryIdType[] $softwareId
     */
    private $softwareId = [
        
    ];

    /**
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the Software.
     *
     * @var \DedexBundle\Entity\Ern\MusicalWorkIdType[] $indirectSoftwareId
     */
    private $indirectSoftwareId = [
        
    ];

    /**
     * The Identifier (specific to the Message)
     *  of the Software within the Release which contains it. This is a
     *  LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A Composite containing details of one or
     *  more MusicalWorks contained in the Software.
     *
     * @var \DedexBundle\Entity\Ern\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     */
    private $resourceMusicalWorkReferenceList = null;

    /**
     * A Composite containing details of
     *  ResourceContainedResourceReferences referring to a Resource that is contained in
     *  the current Software.
     *
     * @var \DedexBundle\Entity\Ern\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     */
    private $resourceContainedResourceReferenceList = null;

    /**
     * A Composite containing details of a Title
     *  of the Software.
     *
     * @var \DedexBundle\Entity\Ern\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing details of the Date
     *  and Place of the Event in which the Software was created. This is a string with
     *  the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern\EventDateType $creationDate
     */
    private $creationDate = null;

    /**
     * A Composite containing details of the
     *  Software which may vary according to Territory of release.
     *
     * @var \DedexBundle\Entity\Ern\SoftwareDetailsByTerritoryType[] $softwareDetailsByTerritory
     */
    private $softwareDetailsByTerritory = [
        
    ];

    /**
     * Gets as isUpdated
     *
     * The Flag indicating whether the Software
     *  Element was updated (=true) or not (=false). When this Boolean Flag is set to true,
     *  the MessageRecipient is expected to replace any previously provided Software data
     *  with the now provided data. This attribute is deprecated. DDEX advises that it may be
     *  removed at a future date and therefore recommends against using
     *  it.
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
     * The Flag indicating whether the Software
     *  Element was updated (=true) or not (=false). When this Boolean Flag is set to true,
     *  the MessageRecipient is expected to replace any previously provided Software data
     *  with the now provided data. This attribute is deprecated. DDEX advises that it may be
     *  removed at a future date and therefore recommends against using
     *  it.
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
     *  the Software as defined in IETF RfC 5646. The default is the same as indicated for
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
     *  the Software as defined in IETF RfC 5646. The default is the same as indicated for
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
     * Gets as softwareType
     *
     * A Composite containing details of the Type
     *  of the Software.
     *
     * @return \DedexBundle\Entity\Ern\SoftwareTypeType
     */
    public function getSoftwareType()
    {
        return $this->softwareType;
    }

    /**
     * Sets a new softwareType
     *
     * A Composite containing details of the Type
     *  of the Software.
     *
     * @param \DedexBundle\Entity\Ern\SoftwareTypeType $softwareType
     * @return self
     */
    public function setSoftwareType(\DedexBundle\Entity\Ern\SoftwareTypeType $softwareType)
    {
        $this->softwareType = $softwareType;
        return $this;
    }

    /**
     * Gets as isArtistRelated
     *
     * The Flag indicating whether the Software
     *  is related to an Artist (=true) or not (=false).
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
     * The Flag indicating whether the Software
     *  is related to an Artist (=true) or not (=false).
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
     * Adds as softwareId
     *
     * A Composite containing details of
     *  Identifiers of the Software.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\ResourceProprietaryIdType $softwareId
     */
    public function addToSoftwareId(\DedexBundle\Entity\Ern\ResourceProprietaryIdType $softwareId)
    {
        $this->softwareId[] = $softwareId;
        return $this;
    }

    /**
     * isset softwareId
     *
     * A Composite containing details of
     *  Identifiers of the Software.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSoftwareId($index)
    {
        return isset($this->softwareId[$index]);
    }

    /**
     * unset softwareId
     *
     * A Composite containing details of
     *  Identifiers of the Software.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSoftwareId($index)
    {
        unset($this->softwareId[$index]);
    }

    /**
     * Gets as softwareId
     *
     * A Composite containing details of
     *  Identifiers of the Software.
     *
     * @return \DedexBundle\Entity\Ern\ResourceProprietaryIdType[]
     */
    public function getSoftwareId()
    {
        return $this->softwareId;
    }

    /**
     * Sets a new softwareId
     *
     * A Composite containing details of
     *  Identifiers of the Software.
     *
     * @param \DedexBundle\Entity\Ern\ResourceProprietaryIdType[] $softwareId
     * @return self
     */
    public function setSoftwareId(array $softwareId)
    {
        $this->softwareId = $softwareId;
        return $this;
    }

    /**
     * Adds as indirectSoftwareId
     *
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the Software.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\MusicalWorkIdType $indirectSoftwareId
     */
    public function addToIndirectSoftwareId(\DedexBundle\Entity\Ern\MusicalWorkIdType $indirectSoftwareId)
    {
        $this->indirectSoftwareId[] = $indirectSoftwareId;
        return $this;
    }

    /**
     * isset indirectSoftwareId
     *
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the Software.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndirectSoftwareId($index)
    {
        return isset($this->indirectSoftwareId[$index]);
    }

    /**
     * unset indirectSoftwareId
     *
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the Software.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndirectSoftwareId($index)
    {
        unset($this->indirectSoftwareId[$index]);
    }

    /**
     * Gets as indirectSoftwareId
     *
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the Software.
     *
     * @return \DedexBundle\Entity\Ern\MusicalWorkIdType[]
     */
    public function getIndirectSoftwareId()
    {
        return $this->indirectSoftwareId;
    }

    /**
     * Sets a new indirectSoftwareId
     *
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the Software.
     *
     * @param \DedexBundle\Entity\Ern\MusicalWorkIdType[] $indirectSoftwareId
     * @return self
     */
    public function setIndirectSoftwareId(array $indirectSoftwareId)
    {
        $this->indirectSoftwareId = $indirectSoftwareId;
        return $this;
    }

    /**
     * Gets as resourceReference
     *
     * The Identifier (specific to the Message)
     *  of the Software within the Release which contains it. This is a
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
     *  of the Software within the Release which contains it. This is a
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
     *  more MusicalWorks contained in the Software.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference
     */
    public function addToResourceMusicalWorkReferenceList(\DedexBundle\Entity\Ern\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference)
    {
        $this->resourceMusicalWorkReferenceList[] = $resourceMusicalWorkReference;
        return $this;
    }

    /**
     * isset resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or
     *  more MusicalWorks contained in the Software.
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
     *  more MusicalWorks contained in the Software.
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
     *  more MusicalWorks contained in the Software.
     *
     * @return \DedexBundle\Entity\Ern\ResourceMusicalWorkReferenceType[]
     */
    public function getResourceMusicalWorkReferenceList()
    {
        return $this->resourceMusicalWorkReferenceList;
    }

    /**
     * Sets a new resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or
     *  more MusicalWorks contained in the Software.
     *
     * @param \DedexBundle\Entity\Ern\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
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
     *  the current Software.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\ResourceContainedResourceReferenceType $resourceContainedResourceReference
     */
    public function addToResourceContainedResourceReferenceList(\DedexBundle\Entity\Ern\ResourceContainedResourceReferenceType $resourceContainedResourceReference)
    {
        $this->resourceContainedResourceReferenceList[] = $resourceContainedResourceReference;
        return $this;
    }

    /**
     * isset resourceContainedResourceReferenceList
     *
     * A Composite containing details of
     *  ResourceContainedResourceReferences referring to a Resource that is contained in
     *  the current Software.
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
     *  the current Software.
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
     *  the current Software.
     *
     * @return \DedexBundle\Entity\Ern\ResourceContainedResourceReferenceType[]
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
     *  the current Software.
     *
     * @param \DedexBundle\Entity\Ern\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
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
     *  of the Software.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\TitleType $title
     */
    public function addToTitle(\DedexBundle\Entity\Ern\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title
     *  of the Software.
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
     *  of the Software.
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
     *  of the Software.
     *
     * @return \DedexBundle\Entity\Ern\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title
     *  of the Software.
     *
     * @param \DedexBundle\Entity\Ern\TitleType[] $title
     * @return self
     */
    public function setTitle(array $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as creationDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the Software was created. This is a string with
     *  the syntax YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern\EventDateType
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets a new creationDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the Software was created. This is a string with
     *  the syntax YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern\EventDateType $creationDate
     * @return self
     */
    public function setCreationDate(\DedexBundle\Entity\Ern\EventDateType $creationDate)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Adds as softwareDetailsByTerritory
     *
     * A Composite containing details of the
     *  Software which may vary according to Territory of release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\SoftwareDetailsByTerritoryType $softwareDetailsByTerritory
     */
    public function addToSoftwareDetailsByTerritory(\DedexBundle\Entity\Ern\SoftwareDetailsByTerritoryType $softwareDetailsByTerritory)
    {
        $this->softwareDetailsByTerritory[] = $softwareDetailsByTerritory;
        return $this;
    }

    /**
     * isset softwareDetailsByTerritory
     *
     * A Composite containing details of the
     *  Software which may vary according to Territory of release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSoftwareDetailsByTerritory($index)
    {
        return isset($this->softwareDetailsByTerritory[$index]);
    }

    /**
     * unset softwareDetailsByTerritory
     *
     * A Composite containing details of the
     *  Software which may vary according to Territory of release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSoftwareDetailsByTerritory($index)
    {
        unset($this->softwareDetailsByTerritory[$index]);
    }

    /**
     * Gets as softwareDetailsByTerritory
     *
     * A Composite containing details of the
     *  Software which may vary according to Territory of release.
     *
     * @return \DedexBundle\Entity\Ern\SoftwareDetailsByTerritoryType[]
     */
    public function getSoftwareDetailsByTerritory()
    {
        return $this->softwareDetailsByTerritory;
    }

    /**
     * Sets a new softwareDetailsByTerritory
     *
     * A Composite containing details of the
     *  Software which may vary according to Territory of release.
     *
     * @param \DedexBundle\Entity\Ern\SoftwareDetailsByTerritoryType[] $softwareDetailsByTerritory
     * @return self
     */
    public function setSoftwareDetailsByTerritory(array $softwareDetailsByTerritory)
    {
        $this->softwareDetailsByTerritory = $softwareDetailsByTerritory;
        return $this;
    }


}

