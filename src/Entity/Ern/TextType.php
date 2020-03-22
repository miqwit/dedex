<?php

namespace DedexBundle\Entity\Ern;

/**
 * Class representing TextType
 *
 * A Composite containing details of a
 *  Text.
 * XSD Type: Text
 */
class TextType
{

    /**
     * The Flag indicating whether the Text Element
     *  was updated (=true) or not (=false). When this Boolean Flag is set to true, the
     *  MessageRecipient is expected to replace any previously provided Text data with the
     *  now provided data. This attribute is deprecated. DDEX advises that it may be removed
     *  at a future date and therefore recommends against using it.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * The Language and script for the Elements of
     *  the Text as defined in IETF RfC 5646. The default is the same as indicated for the
     *  containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of the Type
     *  of the Text.
     *
     * @var \DedexBundle\Entity\Ern\TextTypeType $textType
     */
    private $textType = null;

    /**
     * The Flag indicating whether the Text is
     *  related to an Artist (=true) or not (=false).
     *
     * @var bool $isArtistRelated
     */
    private $isArtistRelated = null;

    /**
     * A Composite containing details of an
     *  Identifier of the Text.
     *
     * @var \DedexBundle\Entity\Ern\TextIdType[] $textId
     */
    private $textId = [
        
    ];

    /**
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the Text.
     *
     * @var \DedexBundle\Entity\Ern\MusicalWorkIdType[] $indirectTextId
     */
    private $indirectTextId = [
        
    ];

    /**
     * The Identifier (specific to the Message)
     *  of the Text within the Release which contains it. This is a LocalResourceAnchor
     *  starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A Composite containing details of one or
     *  more MusicalWorks contained in the Text.
     *
     * @var \DedexBundle\Entity\Ern\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     */
    private $resourceMusicalWorkReferenceList = null;

    /**
     * A Composite containing details of
     *  ResourceContainedResourceReferences referring to a Resource that is contained in
     *  the current Text.
     *
     * @var \DedexBundle\Entity\Ern\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     */
    private $resourceContainedResourceReferenceList = null;

    /**
     * A Composite containing details of a Title
     *  of the Text.
     *
     * @var \DedexBundle\Entity\Ern\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing details of the Date
     *  and Place of the Event in which the Text was created. This is a string with the
     *  syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern\EventDateType $creationDate
     */
    private $creationDate = null;

    /**
     * A Composite containing details of the Text
     *  which may vary according to Territory of release.
     *
     * @var \DedexBundle\Entity\Ern\TextDetailsByTerritoryType[] $textDetailsByTerritory
     */
    private $textDetailsByTerritory = [
        
    ];

    /**
     * Gets as isUpdated
     *
     * The Flag indicating whether the Text Element
     *  was updated (=true) or not (=false). When this Boolean Flag is set to true, the
     *  MessageRecipient is expected to replace any previously provided Text data with the
     *  now provided data. This attribute is deprecated. DDEX advises that it may be removed
     *  at a future date and therefore recommends against using it.
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
     * The Flag indicating whether the Text Element
     *  was updated (=true) or not (=false). When this Boolean Flag is set to true, the
     *  MessageRecipient is expected to replace any previously provided Text data with the
     *  now provided data. This attribute is deprecated. DDEX advises that it may be removed
     *  at a future date and therefore recommends against using it.
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
     *  the Text as defined in IETF RfC 5646. The default is the same as indicated for the
     *  containing composite. Language and Script are provided as
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
     *  the Text as defined in IETF RfC 5646. The default is the same as indicated for the
     *  containing composite. Language and Script are provided as
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
     * Gets as textType
     *
     * A Composite containing details of the Type
     *  of the Text.
     *
     * @return \DedexBundle\Entity\Ern\TextTypeType
     */
    public function getTextType()
    {
        return $this->textType;
    }

    /**
     * Sets a new textType
     *
     * A Composite containing details of the Type
     *  of the Text.
     *
     * @param \DedexBundle\Entity\Ern\TextTypeType $textType
     * @return self
     */
    public function setTextType(\DedexBundle\Entity\Ern\TextTypeType $textType)
    {
        $this->textType = $textType;
        return $this;
    }

    /**
     * Gets as isArtistRelated
     *
     * The Flag indicating whether the Text is
     *  related to an Artist (=true) or not (=false).
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
     * The Flag indicating whether the Text is
     *  related to an Artist (=true) or not (=false).
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
     * A Composite containing details of an
     *  Identifier of the Text.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\TextIdType $textId
     */
    public function addToTextId(\DedexBundle\Entity\Ern\TextIdType $textId)
    {
        $this->textId[] = $textId;
        return $this;
    }

    /**
     * isset textId
     *
     * A Composite containing details of an
     *  Identifier of the Text.
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
     * A Composite containing details of an
     *  Identifier of the Text.
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
     * A Composite containing details of an
     *  Identifier of the Text.
     *
     * @return \DedexBundle\Entity\Ern\TextIdType[]
     */
    public function getTextId()
    {
        return $this->textId;
    }

    /**
     * Sets a new textId
     *
     * A Composite containing details of an
     *  Identifier of the Text.
     *
     * @param \DedexBundle\Entity\Ern\TextIdType[] $textId
     * @return self
     */
    public function setTextId(array $textId)
    {
        $this->textId = $textId;
        return $this;
    }

    /**
     * Adds as indirectTextId
     *
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the Text.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\MusicalWorkIdType $indirectTextId
     */
    public function addToIndirectTextId(\DedexBundle\Entity\Ern\MusicalWorkIdType $indirectTextId)
    {
        $this->indirectTextId[] = $indirectTextId;
        return $this;
    }

    /**
     * isset indirectTextId
     *
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the Text.
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
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the Text.
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
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the Text.
     *
     * @return \DedexBundle\Entity\Ern\MusicalWorkIdType[]
     */
    public function getIndirectTextId()
    {
        return $this->indirectTextId;
    }

    /**
     * Sets a new indirectTextId
     *
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the Text.
     *
     * @param \DedexBundle\Entity\Ern\MusicalWorkIdType[] $indirectTextId
     * @return self
     */
    public function setIndirectTextId(array $indirectTextId)
    {
        $this->indirectTextId = $indirectTextId;
        return $this;
    }

    /**
     * Gets as resourceReference
     *
     * The Identifier (specific to the Message)
     *  of the Text within the Release which contains it. This is a LocalResourceAnchor
     *  starting with the letter A.
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
     *  of the Text within the Release which contains it. This is a LocalResourceAnchor
     *  starting with the letter A.
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
     *  more MusicalWorks contained in the Text.
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
     *  more MusicalWorks contained in the Text.
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
     *  more MusicalWorks contained in the Text.
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
     *  more MusicalWorks contained in the Text.
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
     *  more MusicalWorks contained in the Text.
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
     *  the current Text.
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
     *  the current Text.
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
     *  the current Text.
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
     *  the current Text.
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
     *  the current Text.
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
     *  of the Text.
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
     *  of the Text.
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
     *  of the Text.
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
     *  of the Text.
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
     *  of the Text.
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
     *  and Place of the Event in which the Text was created. This is a string with the
     *  syntax YYYY[-MM[-DD]].
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
     *  and Place of the Event in which the Text was created. This is a string with the
     *  syntax YYYY[-MM[-DD]].
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
     * Adds as textDetailsByTerritory
     *
     * A Composite containing details of the Text
     *  which may vary according to Territory of release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\TextDetailsByTerritoryType $textDetailsByTerritory
     */
    public function addToTextDetailsByTerritory(\DedexBundle\Entity\Ern\TextDetailsByTerritoryType $textDetailsByTerritory)
    {
        $this->textDetailsByTerritory[] = $textDetailsByTerritory;
        return $this;
    }

    /**
     * isset textDetailsByTerritory
     *
     * A Composite containing details of the Text
     *  which may vary according to Territory of release.
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
     * A Composite containing details of the Text
     *  which may vary according to Territory of release.
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
     * A Composite containing details of the Text
     *  which may vary according to Territory of release.
     *
     * @return \DedexBundle\Entity\Ern\TextDetailsByTerritoryType[]
     */
    public function getTextDetailsByTerritory()
    {
        return $this->textDetailsByTerritory;
    }

    /**
     * Sets a new textDetailsByTerritory
     *
     * A Composite containing details of the Text
     *  which may vary according to Territory of release.
     *
     * @param \DedexBundle\Entity\Ern\TextDetailsByTerritoryType[] $textDetailsByTerritory
     * @return self
     */
    public function setTextDetailsByTerritory(array $textDetailsByTerritory)
    {
        $this->textDetailsByTerritory = $textDetailsByTerritory;
        return $this;
    }


}

