<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing SoftwareType
 *
 * A ddex:Composite containing details of an item of ddex:Software.
 * XSD Type: Software
 */
class SoftwareType
{
    /**
     * The ddex:Flag indicating whether the ern:Software ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided ern:Software data with the now provided data.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * The ddex:Language and script for the ddex:Elements of the ern:Software as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of the ddex:Type of the ern:Software.
     *
     * @var \DedexBundle\Entity\DdexC\SoftwareTypeType $softwareType
     */
    private $softwareType = null;

    /**
     * The ddex:Flag indicating whether the ern:Software is related to an ddex:Artist (=True) or not (=False).
     *
     * @var bool $isArtistRelated
     */
    private $isArtistRelated = null;

    /**
     * A ddex:Composite containing details of ddex:Identifiers of the ern:Software.
     *
     * @var \DedexBundle\Entity\DdexC\SoftwareIdType[] $softwareId
     */
    private $softwareId = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:Software.
     *
     * @var \DedexBundle\Entity\DdexC\MusicalWorkIdType[] $indirectSoftwareId
     */
    private $indirectSoftwareId = [
        
    ];

    /**
     * The ddex:Identifier (specific to the ddex:Message) of the ern:Software within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:Software.
     *
     * @var \DedexBundle\Entity\DdexC\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     */
    private $resourceMusicalWorkReferenceList = null;

    /**
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:Software.
     *
     * @var \DedexBundle\Entity\DdexC\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     */
    private $resourceContainedResourceReferenceList = null;

    /**
     * A ddex:Composite containing details of a ddex:Title of the ern:Software.
     *
     * @var \DedexBundle\Entity\DdexC\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ern:Software was created.
     *
     * @var \DedexBundle\Entity\DdexC\EventDateType $creationDate
     */
    private $creationDate = null;

    /**
     * A ddex:Composite containing details of the ern:Software which may vary according to ddex:Territory of release.
     *
     * @var \DedexBundle\Entity\Ern341\SoftwareDetailsByTerritoryType[] $softwareDetailsByTerritory
     */
    private $softwareDetailsByTerritory = [
        
    ];

    /**
     * Gets as isUpdated
     *
     * The ddex:Flag indicating whether the ern:Software ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided ern:Software data with the now provided data.
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
     * The ddex:Flag indicating whether the ern:Software ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided ern:Software data with the now provided data.
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
     * The ddex:Language and script for the ddex:Elements of the ern:Software as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ern:Software as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Composite containing details of the ddex:Type of the ern:Software.
     *
     * @return \DedexBundle\Entity\DdexC\SoftwareTypeType
     */
    public function getSoftwareType()
    {
        return $this->softwareType;
    }

    /**
     * Sets a new softwareType
     *
     * A ddex:Composite containing details of the ddex:Type of the ern:Software.
     *
     * @param \DedexBundle\Entity\DdexC\SoftwareTypeType $softwareType
     * @return self
     */
    public function setSoftwareType(?\DedexBundle\Entity\DdexC\SoftwareTypeType $softwareType = null)
    {
        $this->softwareType = $softwareType;
        return $this;
    }

    /**
     * Gets as isArtistRelated
     *
     * The ddex:Flag indicating whether the ern:Software is related to an ddex:Artist (=True) or not (=False).
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
     * The ddex:Flag indicating whether the ern:Software is related to an ddex:Artist (=True) or not (=False).
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
     * A ddex:Composite containing details of ddex:Identifiers of the ern:Software.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\SoftwareIdType $softwareId
     */
    public function addToSoftwareId(\DedexBundle\Entity\DdexC\SoftwareIdType $softwareId)
    {
        $this->softwareId[] = $softwareId;
        return $this;
    }

    /**
     * isset softwareId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ern:Software.
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
     * A ddex:Composite containing details of ddex:Identifiers of the ern:Software.
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
     * A ddex:Composite containing details of ddex:Identifiers of the ern:Software.
     *
     * @return \DedexBundle\Entity\DdexC\SoftwareIdType[]
     */
    public function getSoftwareId()
    {
        return $this->softwareId;
    }

    /**
     * Sets a new softwareId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ern:Software.
     *
     * @param \DedexBundle\Entity\DdexC\SoftwareIdType[] $softwareId
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
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:Software.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\MusicalWorkIdType $indirectSoftwareId
     */
    public function addToIndirectSoftwareId(\DedexBundle\Entity\DdexC\MusicalWorkIdType $indirectSoftwareId)
    {
        $this->indirectSoftwareId[] = $indirectSoftwareId;
        return $this;
    }

    /**
     * isset indirectSoftwareId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:Software.
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
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:Software.
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
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:Software.
     *
     * @return \DedexBundle\Entity\DdexC\MusicalWorkIdType[]
     */
    public function getIndirectSoftwareId()
    {
        return $this->indirectSoftwareId;
    }

    /**
     * Sets a new indirectSoftwareId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:Software.
     *
     * @param \DedexBundle\Entity\DdexC\MusicalWorkIdType[] $indirectSoftwareId
     * @return self
     */
    public function setIndirectSoftwareId(array $indirectSoftwareId = null)
    {
        $this->indirectSoftwareId = $indirectSoftwareId;
        return $this;
    }

    /**
     * Gets as resourceReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the ern:Software within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
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
     * The ddex:Identifier (specific to the ddex:Message) of the ern:Software within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:Software.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:Software.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:Software.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:Software.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:Software.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:Software.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:Software.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:Software.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:Software.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:Software.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:Software.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:Software.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:Software.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:Software.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:Software.
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
     * Gets as creationDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ern:Software was created.
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
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ern:Software was created.
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
     * Adds as softwareDetailsByTerritory
     *
     * A ddex:Composite containing details of the ern:Software which may vary according to ddex:Territory of release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\SoftwareDetailsByTerritoryType $softwareDetailsByTerritory
     */
    public function addToSoftwareDetailsByTerritory(\DedexBundle\Entity\Ern341\SoftwareDetailsByTerritoryType $softwareDetailsByTerritory)
    {
        $this->softwareDetailsByTerritory[] = $softwareDetailsByTerritory;
        return $this;
    }

    /**
     * isset softwareDetailsByTerritory
     *
     * A ddex:Composite containing details of the ern:Software which may vary according to ddex:Territory of release.
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
     * A ddex:Composite containing details of the ern:Software which may vary according to ddex:Territory of release.
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
     * A ddex:Composite containing details of the ern:Software which may vary according to ddex:Territory of release.
     *
     * @return \DedexBundle\Entity\Ern341\SoftwareDetailsByTerritoryType[]
     */
    public function getSoftwareDetailsByTerritory()
    {
        return $this->softwareDetailsByTerritory;
    }

    /**
     * Sets a new softwareDetailsByTerritory
     *
     * A ddex:Composite containing details of the ern:Software which may vary according to ddex:Territory of release.
     *
     * @param \DedexBundle\Entity\Ern341\SoftwareDetailsByTerritoryType[] $softwareDetailsByTerritory
     * @return self
     */
    public function setSoftwareDetailsByTerritory(array $softwareDetailsByTerritory)
    {
        $this->softwareDetailsByTerritory = $softwareDetailsByTerritory;
        return $this;
    }
}

