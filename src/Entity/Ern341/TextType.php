<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing TextType
 *
 * A ddex:Composite containing details of a ddex:Text.
 * XSD Type: Text
 */
class TextType
{
    /**
     * The ddex:Flag indicating whether the ern:Text ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided ern:Text data with the now provided data.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * The ddex:Language and script for the ddex:Elements of the ern:Text as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of the ddex:Type of the ern:Text.
     *
     * @var \DedexBundle\Entity\DdexC\TextTypeType $textType
     */
    private $textType = null;

    /**
     * The ddex:Flag indicating whether the ern:Text is related to an ddex:Artist (=True) or not (=False).
     *
     * @var bool $isArtistRelated
     */
    private $isArtistRelated = null;

    /**
     * A ddex:Composite containing details of an ddex:Identifier of the ern:Text.
     *
     * @var \DedexBundle\Entity\DdexC\TextIdType[] $textId
     */
    private $textId = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:Text.
     *
     * @var \DedexBundle\Entity\DdexC\MusicalWorkIdType[] $indirectTextId
     */
    private $indirectTextId = [
        
    ];

    /**
     * The ddex:Identifier (specific to the ddex:Message) of the ern:Text within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:Text.
     *
     * @var \DedexBundle\Entity\DdexC\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     */
    private $resourceMusicalWorkReferenceList = null;

    /**
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:Text.
     *
     * @var \DedexBundle\Entity\DdexC\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     */
    private $resourceContainedResourceReferenceList = null;

    /**
     * A ddex:Composite containing details of a ddex:Title of the ern:Text.
     *
     * @var \DedexBundle\Entity\DdexC\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ern:Text was created.
     *
     * @var \DedexBundle\Entity\DdexC\EventDateType $creationDate
     */
    private $creationDate = null;

    /**
     * A ddex:Composite containing details of the ern:Text which may vary according to ddex:Territory of release.
     *
     * @var \DedexBundle\Entity\Ern341\TextDetailsByTerritoryType[] $textDetailsByTerritory
     */
    private $textDetailsByTerritory = [
        
    ];

    /**
     * Gets as isUpdated
     *
     * The ddex:Flag indicating whether the ern:Text ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided ern:Text data with the now provided data.
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
     * The ddex:Flag indicating whether the ern:Text ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided ern:Text data with the now provided data.
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
     * The ddex:Language and script for the ddex:Elements of the ern:Text as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ern:Text as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Gets as textType
     *
     * A ddex:Composite containing details of the ddex:Type of the ern:Text.
     *
     * @return \DedexBundle\Entity\DdexC\TextTypeType
     */
    public function getTextType()
    {
        return $this->textType;
    }

    /**
     * Sets a new textType
     *
     * A ddex:Composite containing details of the ddex:Type of the ern:Text.
     *
     * @param \DedexBundle\Entity\DdexC\TextTypeType $textType
     * @return self
     */
    public function setTextType(?\DedexBundle\Entity\DdexC\TextTypeType $textType = null)
    {
        $this->textType = $textType;
        return $this;
    }

    /**
     * Gets as isArtistRelated
     *
     * The ddex:Flag indicating whether the ern:Text is related to an ddex:Artist (=True) or not (=False).
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
     * The ddex:Flag indicating whether the ern:Text is related to an ddex:Artist (=True) or not (=False).
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
     * Adds as textId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ern:Text.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\TextIdType $textId
     */
    public function addToTextId(\DedexBundle\Entity\DdexC\TextIdType $textId)
    {
        $this->textId[] = $textId;
        return $this;
    }

    /**
     * isset textId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ern:Text.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTextId($index)
    {
        return isset($this->textId[$index]);
    }

    /**
     * unset textId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ern:Text.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTextId($index)
    {
        unset($this->textId[$index]);
    }

    /**
     * Gets as textId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ern:Text.
     *
     * @return \DedexBundle\Entity\DdexC\TextIdType[]
     */
    public function getTextId()
    {
        return $this->textId;
    }

    /**
     * Sets a new textId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ern:Text.
     *
     * @param \DedexBundle\Entity\DdexC\TextIdType[] $textId
     * @return self
     */
    public function setTextId(array $textId = null)
    {
        $this->textId = $textId;
        return $this;
    }

    /**
     * Adds as indirectTextId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:Text.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\MusicalWorkIdType $indirectTextId
     */
    public function addToIndirectTextId(\DedexBundle\Entity\DdexC\MusicalWorkIdType $indirectTextId)
    {
        $this->indirectTextId[] = $indirectTextId;
        return $this;
    }

    /**
     * isset indirectTextId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:Text.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndirectTextId($index)
    {
        return isset($this->indirectTextId[$index]);
    }

    /**
     * unset indirectTextId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:Text.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndirectTextId($index)
    {
        unset($this->indirectTextId[$index]);
    }

    /**
     * Gets as indirectTextId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:Text.
     *
     * @return \DedexBundle\Entity\DdexC\MusicalWorkIdType[]
     */
    public function getIndirectTextId()
    {
        return $this->indirectTextId;
    }

    /**
     * Sets a new indirectTextId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ern:Text.
     *
     * @param \DedexBundle\Entity\DdexC\MusicalWorkIdType[] $indirectTextId
     * @return self
     */
    public function setIndirectTextId(array $indirectTextId = null)
    {
        $this->indirectTextId = $indirectTextId;
        return $this;
    }

    /**
     * Gets as resourceReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the ern:Text within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
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
     * The ddex:Identifier (specific to the ddex:Message) of the ern:Text within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:Text.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:Text.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:Text.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:Text.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ern:Text.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:Text.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:Text.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:Text.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:Text.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ern:Text.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:Text.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:Text.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:Text.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:Text.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:Text.
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
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ern:Text was created.
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
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ern:Text was created.
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
     * Adds as textDetailsByTerritory
     *
     * A ddex:Composite containing details of the ern:Text which may vary according to ddex:Territory of release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\TextDetailsByTerritoryType $textDetailsByTerritory
     */
    public function addToTextDetailsByTerritory(\DedexBundle\Entity\Ern341\TextDetailsByTerritoryType $textDetailsByTerritory)
    {
        $this->textDetailsByTerritory[] = $textDetailsByTerritory;
        return $this;
    }

    /**
     * isset textDetailsByTerritory
     *
     * A ddex:Composite containing details of the ern:Text which may vary according to ddex:Territory of release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTextDetailsByTerritory($index)
    {
        return isset($this->textDetailsByTerritory[$index]);
    }

    /**
     * unset textDetailsByTerritory
     *
     * A ddex:Composite containing details of the ern:Text which may vary according to ddex:Territory of release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTextDetailsByTerritory($index)
    {
        unset($this->textDetailsByTerritory[$index]);
    }

    /**
     * Gets as textDetailsByTerritory
     *
     * A ddex:Composite containing details of the ern:Text which may vary according to ddex:Territory of release.
     *
     * @return \DedexBundle\Entity\Ern341\TextDetailsByTerritoryType[]
     */
    public function getTextDetailsByTerritory()
    {
        return $this->textDetailsByTerritory;
    }

    /**
     * Sets a new textDetailsByTerritory
     *
     * A ddex:Composite containing details of the ern:Text which may vary according to ddex:Territory of release.
     *
     * @param \DedexBundle\Entity\Ern341\TextDetailsByTerritoryType[] $textDetailsByTerritory
     * @return self
     */
    public function setTextDetailsByTerritory(array $textDetailsByTerritory)
    {
        $this->textDetailsByTerritory = $textDetailsByTerritory;
        return $this;
    }
}

