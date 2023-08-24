<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing SheetMusicType
 *
 * A Composite containing details of a
 *  SheetMusic.
 * XSD Type: SheetMusic
 */
class SheetMusicType
{
    /**
     * The Flag indicating whether the SheetMusic
     *  Element was updated (=true) or not (=false). When this Boolean Flag is set to true,
     *  the MessageRecipient is expected to replace any previously provided SheetMusic data
     *  with the now provided data. This attribute is deprecated. DDEX advises that it may be
     *  removed at a future date and therefore recommends against using
     *  it.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * The Language and script for the Elements of
     *  the SheetMusic as defined in IETF RfC 5646. The default is the same as indicated for
     *  the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of the Type
     *  of the SheetMusic.
     *
     * @var \DedexBundle\Entity\Ern383\SheetMusicTypeType $sheetMusicType
     */
    private $sheetMusicType = null;

    /**
     * The Flag indicating whether the SheetMusic
     *  is related to an Artist (=true) or not (=false).
     *
     * @var bool $isArtistRelated
     */
    private $isArtistRelated = null;

    /**
     * A Composite containing details of
     *  Identifiers of the SheetMusic.
     *
     * @var \DedexBundle\Entity\Ern383\SheetMusicIdType[] $sheetMusicId
     */
    private $sheetMusicId = [
        
    ];

    /**
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the SheetMusic.
     *
     * @var \DedexBundle\Entity\Ern383\MusicalWorkIdType[] $indirectSheetMusicId
     */
    private $indirectSheetMusicId = [
        
    ];

    /**
     * The Identifier (specific to the Message)
     *  of the SheetMusic within the Release which contains it. This is a
     *  LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * The Language of the lyrics of the
     *  SheetMusic (represented by an ISO 639-2 LanguageCode).
     *
     * @var string $languageOfLyrics
     */
    private $languageOfLyrics = null;

    /**
     * A Composite containing details of
     *  Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s)
     *  related to the SheetMusic.
     *
     * @var \DedexBundle\Entity\Ern383\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A Composite containing details of one or
     *  more MusicalWorks contained in the SheetMusic.
     *
     * @var \DedexBundle\Entity\Ern383\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     */
    private $resourceMusicalWorkReferenceList = null;

    /**
     * A Composite containing details of
     *  ResourceContainedResourceReferences referring to a Resource that is contained in
     *  the current SheetMusic.
     *
     * @var \DedexBundle\Entity\Ern383\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     */
    private $resourceContainedResourceReferenceList = null;

    /**
     * A Composite containing details of the
     *  ReferenceTitle of the SheetMusic.
     *
     * @var \DedexBundle\Entity\Ern383\ReferenceTitleType $referenceTitle
     */
    private $referenceTitle = null;

    /**
     * A Composite containing details of the Date
     *  and Place of the Event in which the SheetMusic was created. This is a string with
     *  the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern383\EventDateType $creationDate
     */
    private $creationDate = null;

    /**
     * A Composite containing details of the
     *  SheetMusic which may vary according to Territory of release.
     *
     * @var \DedexBundle\Entity\Ern383\SheetMusicDetailsByTerritoryType[] $sheetMusicDetailsByTerritory
     */
    private $sheetMusicDetailsByTerritory = [
        
    ];

    /**
     * Gets as isUpdated
     *
     * The Flag indicating whether the SheetMusic
     *  Element was updated (=true) or not (=false). When this Boolean Flag is set to true,
     *  the MessageRecipient is expected to replace any previously provided SheetMusic data
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
     * The Flag indicating whether the SheetMusic
     *  Element was updated (=true) or not (=false). When this Boolean Flag is set to true,
     *  the MessageRecipient is expected to replace any previously provided SheetMusic data
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
     *  the SheetMusic as defined in IETF RfC 5646. The default is the same as indicated for
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
     *  the SheetMusic as defined in IETF RfC 5646. The default is the same as indicated for
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
     * Gets as sheetMusicType
     *
     * A Composite containing details of the Type
     *  of the SheetMusic.
     *
     * @return \DedexBundle\Entity\Ern383\SheetMusicTypeType
     */
    public function getSheetMusicType()
    {
        return $this->sheetMusicType;
    }

    /**
     * Sets a new sheetMusicType
     *
     * A Composite containing details of the Type
     *  of the SheetMusic.
     *
     * @param \DedexBundle\Entity\Ern383\SheetMusicTypeType $sheetMusicType
     * @return self
     */
    public function setSheetMusicType(?\DedexBundle\Entity\Ern383\SheetMusicTypeType $sheetMusicType = null)
    {
        $this->sheetMusicType = $sheetMusicType;
        return $this;
    }

    /**
     * Gets as isArtistRelated
     *
     * The Flag indicating whether the SheetMusic
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
     * The Flag indicating whether the SheetMusic
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
     * Adds as sheetMusicId
     *
     * A Composite containing details of
     *  Identifiers of the SheetMusic.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\SheetMusicIdType $sheetMusicId
     */
    public function addToSheetMusicId(\DedexBundle\Entity\Ern383\SheetMusicIdType $sheetMusicId)
    {
        $this->sheetMusicId[] = $sheetMusicId;
        return $this;
    }

    /**
     * isset sheetMusicId
     *
     * A Composite containing details of
     *  Identifiers of the SheetMusic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSheetMusicId($index)
    {
        return isset($this->sheetMusicId[$index]);
    }

    /**
     * unset sheetMusicId
     *
     * A Composite containing details of
     *  Identifiers of the SheetMusic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSheetMusicId($index)
    {
        unset($this->sheetMusicId[$index]);
    }

    /**
     * Gets as sheetMusicId
     *
     * A Composite containing details of
     *  Identifiers of the SheetMusic.
     *
     * @return \DedexBundle\Entity\Ern383\SheetMusicIdType[]
     */
    public function getSheetMusicId()
    {
        return $this->sheetMusicId;
    }

    /**
     * Sets a new sheetMusicId
     *
     * A Composite containing details of
     *  Identifiers of the SheetMusic.
     *
     * @param \DedexBundle\Entity\Ern383\SheetMusicIdType[] $sheetMusicId
     * @return self
     */
    public function setSheetMusicId(array $sheetMusicId)
    {
        $this->sheetMusicId = $sheetMusicId;
        return $this;
    }

    /**
     * Adds as indirectSheetMusicId
     *
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the SheetMusic.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\MusicalWorkIdType $indirectSheetMusicId
     */
    public function addToIndirectSheetMusicId(\DedexBundle\Entity\Ern383\MusicalWorkIdType $indirectSheetMusicId)
    {
        $this->indirectSheetMusicId[] = $indirectSheetMusicId;
        return $this;
    }

    /**
     * isset indirectSheetMusicId
     *
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the SheetMusic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndirectSheetMusicId($index)
    {
        return isset($this->indirectSheetMusicId[$index]);
    }

    /**
     * unset indirectSheetMusicId
     *
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the SheetMusic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndirectSheetMusicId($index)
    {
        unset($this->indirectSheetMusicId[$index]);
    }

    /**
     * Gets as indirectSheetMusicId
     *
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the SheetMusic.
     *
     * @return \DedexBundle\Entity\Ern383\MusicalWorkIdType[]
     */
    public function getIndirectSheetMusicId()
    {
        return $this->indirectSheetMusicId;
    }

    /**
     * Sets a new indirectSheetMusicId
     *
     * A Composite containing details of a
     *  MusicalWorkId of a MusicalWork used in the SheetMusic.
     *
     * @param \DedexBundle\Entity\Ern383\MusicalWorkIdType[] $indirectSheetMusicId
     * @return self
     */
    public function setIndirectSheetMusicId(array $indirectSheetMusicId = null)
    {
        $this->indirectSheetMusicId = $indirectSheetMusicId;
        return $this;
    }

    /**
     * Gets as resourceReference
     *
     * The Identifier (specific to the Message)
     *  of the SheetMusic within the Release which contains it. This is a
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
     *  of the SheetMusic within the Release which contains it. This is a
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
     * Gets as languageOfLyrics
     *
     * The Language of the lyrics of the
     *  SheetMusic (represented by an ISO 639-2 LanguageCode).
     *
     * @return string
     */
    public function getLanguageOfLyrics()
    {
        return $this->languageOfLyrics;
    }

    /**
     * Sets a new languageOfLyrics
     *
     * The Language of the lyrics of the
     *  SheetMusic (represented by an ISO 639-2 LanguageCode).
     *
     * @param string $languageOfLyrics
     * @return self
     */
    public function setLanguageOfLyrics($languageOfLyrics)
    {
        $this->languageOfLyrics = $languageOfLyrics;
        return $this;
    }

    /**
     * Gets as rightsAgreementId
     *
     * A Composite containing details of
     *  Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s)
     *  related to the SheetMusic.
     *
     * @return \DedexBundle\Entity\Ern383\RightsAgreementIdType
     */
    public function getRightsAgreementId()
    {
        return $this->rightsAgreementId;
    }

    /**
     * Sets a new rightsAgreementId
     *
     * A Composite containing details of
     *  Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s)
     *  related to the SheetMusic.
     *
     * @param \DedexBundle\Entity\Ern383\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DedexBundle\Entity\Ern383\RightsAgreementIdType $rightsAgreementId = null)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }

    /**
     * Adds as resourceMusicalWorkReference
     *
     * A Composite containing details of one or
     *  more MusicalWorks contained in the SheetMusic.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference
     */
    public function addToResourceMusicalWorkReferenceList(\DedexBundle\Entity\Ern383\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference)
    {
        $this->resourceMusicalWorkReferenceList[] = $resourceMusicalWorkReference;
        return $this;
    }

    /**
     * isset resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or
     *  more MusicalWorks contained in the SheetMusic.
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
     *  more MusicalWorks contained in the SheetMusic.
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
     *  more MusicalWorks contained in the SheetMusic.
     *
     * @return \DedexBundle\Entity\Ern383\ResourceMusicalWorkReferenceType[]
     */
    public function getResourceMusicalWorkReferenceList()
    {
        return $this->resourceMusicalWorkReferenceList;
    }

    /**
     * Sets a new resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or
     *  more MusicalWorks contained in the SheetMusic.
     *
     * @param \DedexBundle\Entity\Ern383\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
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
     * A Composite containing details of
     *  ResourceContainedResourceReferences referring to a Resource that is contained in
     *  the current SheetMusic.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\ResourceContainedResourceReferenceType $resourceContainedResourceReference
     */
    public function addToResourceContainedResourceReferenceList(\DedexBundle\Entity\Ern383\ResourceContainedResourceReferenceType $resourceContainedResourceReference)
    {
        $this->resourceContainedResourceReferenceList[] = $resourceContainedResourceReference;
        return $this;
    }

    /**
     * isset resourceContainedResourceReferenceList
     *
     * A Composite containing details of
     *  ResourceContainedResourceReferences referring to a Resource that is contained in
     *  the current SheetMusic.
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
     *  the current SheetMusic.
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
     *  the current SheetMusic.
     *
     * @return \DedexBundle\Entity\Ern383\ResourceContainedResourceReferenceType[]
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
     *  the current SheetMusic.
     *
     * @param \DedexBundle\Entity\Ern383\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     * @return self
     */
    public function setResourceContainedResourceReferenceList(array $resourceContainedResourceReferenceList = null)
    {
        $this->resourceContainedResourceReferenceList = $resourceContainedResourceReferenceList;
        return $this;
    }

    /**
     * Gets as referenceTitle
     *
     * A Composite containing details of the
     *  ReferenceTitle of the SheetMusic.
     *
     * @return \DedexBundle\Entity\Ern383\ReferenceTitleType
     */
    public function getReferenceTitle()
    {
        return $this->referenceTitle;
    }

    /**
     * Sets a new referenceTitle
     *
     * A Composite containing details of the
     *  ReferenceTitle of the SheetMusic.
     *
     * @param \DedexBundle\Entity\Ern383\ReferenceTitleType $referenceTitle
     * @return self
     */
    public function setReferenceTitle(\DedexBundle\Entity\Ern383\ReferenceTitleType $referenceTitle)
    {
        $this->referenceTitle = $referenceTitle;
        return $this;
    }

    /**
     * Gets as creationDate
     *
     * A Composite containing details of the Date
     *  and Place of the Event in which the SheetMusic was created. This is a string with
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
     *  and Place of the Event in which the SheetMusic was created. This is a string with
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
     * Adds as sheetMusicDetailsByTerritory
     *
     * A Composite containing details of the
     *  SheetMusic which may vary according to Territory of release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\SheetMusicDetailsByTerritoryType $sheetMusicDetailsByTerritory
     */
    public function addToSheetMusicDetailsByTerritory(\DedexBundle\Entity\Ern383\SheetMusicDetailsByTerritoryType $sheetMusicDetailsByTerritory)
    {
        $this->sheetMusicDetailsByTerritory[] = $sheetMusicDetailsByTerritory;
        return $this;
    }

    /**
     * isset sheetMusicDetailsByTerritory
     *
     * A Composite containing details of the
     *  SheetMusic which may vary according to Territory of release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSheetMusicDetailsByTerritory($index)
    {
        return isset($this->sheetMusicDetailsByTerritory[$index]);
    }

    /**
     * unset sheetMusicDetailsByTerritory
     *
     * A Composite containing details of the
     *  SheetMusic which may vary according to Territory of release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSheetMusicDetailsByTerritory($index)
    {
        unset($this->sheetMusicDetailsByTerritory[$index]);
    }

    /**
     * Gets as sheetMusicDetailsByTerritory
     *
     * A Composite containing details of the
     *  SheetMusic which may vary according to Territory of release.
     *
     * @return \DedexBundle\Entity\Ern383\SheetMusicDetailsByTerritoryType[]
     */
    public function getSheetMusicDetailsByTerritory()
    {
        return $this->sheetMusicDetailsByTerritory;
    }

    /**
     * Sets a new sheetMusicDetailsByTerritory
     *
     * A Composite containing details of the
     *  SheetMusic which may vary according to Territory of release.
     *
     * @param \DedexBundle\Entity\Ern383\SheetMusicDetailsByTerritoryType[] $sheetMusicDetailsByTerritory
     * @return self
     */
    public function setSheetMusicDetailsByTerritory(array $sheetMusicDetailsByTerritory)
    {
        $this->sheetMusicDetailsByTerritory = $sheetMusicDetailsByTerritory;
        return $this;
    }
}

