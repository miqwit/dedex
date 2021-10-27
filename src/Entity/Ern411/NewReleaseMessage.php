<?php

namespace DedexBundle\Entity\Ern411;

/**
 * Class representing NewReleaseMessage
 *
 * A Message in the Release Notification Message Suite Standard, containing details of a new Release.
 */
class NewReleaseMessage
{

    /**
     * The Identifier of the Version of the release profile used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $releaseProfileVersionId
     */
    private $releaseProfileVersionId = null;

    /**
     * The Identifier of the Version of the release profile variant used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $releaseProfileVariantVersionId
     */
    private $releaseProfileVariantVersionId = null;

    /**
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the NewReleaseMessage.
     *
     * @var \DedexBundle\Entity\Ern411\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @var \DedexBundle\Entity\Ern411\PartyType[] $partyList
     */
    private $partyList = null;

    /**
     * A Composite containing details of one or more CueSheets contained in Releases for which data is provided in the NewReleaseMessage.
     *
     * @var \DedexBundle\Entity\Ern411\DetailedCueSheetType[] $cueSheetList
     */
    private $cueSheetList = null;

    /**
     * A Composite containing details of one or more Resources.
     *
     * @var \DedexBundle\Entity\Ern411\ResourceListType $resourceList
     */
    private $resourceList = null;

    /**
     * A Composite containing details of one or more Chapters contained in Releases for which data is provided in the NewReleaseMessage.
     *
     * @var \DedexBundle\Entity\Ern411\ChapterListType $chapterList
     */
    private $chapterList = null;

    /**
     * A Composite containing details of one or more DDEX Releases contained in the NewReleaseMessage.
     *
     * @var \DedexBundle\Entity\Ern411\ReleaseListType $releaseList
     */
    private $releaseList = null;

    /**
     * A Composite containing details of one or more Deals governing the Usage of the Releases in the Message.
     *
     * @var \DedexBundle\Entity\Ern411\ReleaseDealType[] $dealList
     */
    private $dealList = null;

    /**
     * A Composite containing details of one or more XML documents communicated with the Message.
     *
     * @var \DedexBundle\Entity\Ern411\FileType[] $supplementalDocumentList
     */
    private $supplementalDocumentList = null;

    /**
     * Gets as releaseProfileVersionId
     *
     * The Identifier of the Version of the release profile used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getReleaseProfileVersionId()
    {
        return $this->releaseProfileVersionId;
    }

    /**
     * Sets a new releaseProfileVersionId
     *
     * The Identifier of the Version of the release profile used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $releaseProfileVersionId
     * @return self
     */
    public function setReleaseProfileVersionId($releaseProfileVersionId)
    {
        $this->releaseProfileVersionId = $releaseProfileVersionId;
        return $this;
    }

    /**
     * Gets as releaseProfileVariantVersionId
     *
     * The Identifier of the Version of the release profile variant used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getReleaseProfileVariantVersionId()
    {
        return $this->releaseProfileVariantVersionId;
    }

    /**
     * Sets a new releaseProfileVariantVersionId
     *
     * The Identifier of the Version of the release profile variant used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $releaseProfileVariantVersionId
     * @return self
     */
    public function setReleaseProfileVariantVersionId($releaseProfileVariantVersionId)
    {
        $this->releaseProfileVariantVersionId = $releaseProfileVariantVersionId;
        return $this;
    }

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as messageHeader
     *
     * The MessageHeader for the NewReleaseMessage.
     *
     * @return \DedexBundle\Entity\Ern411\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the NewReleaseMessage.
     *
     * @param \DedexBundle\Entity\Ern411\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DedexBundle\Entity\Ern411\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Adds as party
     *
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\PartyType $party
     */
    public function addToPartyList(\DedexBundle\Entity\Ern411\PartyType $party)
    {
        $this->partyList[] = $party;
        return $this;
    }

    /**
     * isset partyList
     *
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyList($index)
    {
        return isset($this->partyList[$index]);
    }

    /**
     * unset partyList
     *
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyList($index)
    {
        unset($this->partyList[$index]);
    }

    /**
     * Gets as partyList
     *
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @return \DedexBundle\Entity\Ern411\PartyType[]
     */
    public function getPartyList()
    {
        return $this->partyList;
    }

    /**
     * Sets a new partyList
     *
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @param \DedexBundle\Entity\Ern411\PartyType[] $partyList
     * @return self
     */
    public function setPartyList(array $partyList)
    {
        $this->partyList = $partyList;
        return $this;
    }

    /**
     * Adds as cueSheet
     *
     * A Composite containing details of one or more CueSheets contained in Releases for which data is provided in the NewReleaseMessage.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\DetailedCueSheetType $cueSheet
     */
    public function addToCueSheetList(\DedexBundle\Entity\Ern411\DetailedCueSheetType $cueSheet)
    {
        $this->cueSheetList[] = $cueSheet;
        return $this;
    }

    /**
     * isset cueSheetList
     *
     * A Composite containing details of one or more CueSheets contained in Releases for which data is provided in the NewReleaseMessage.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCueSheetList($index)
    {
        return isset($this->cueSheetList[$index]);
    }

    /**
     * unset cueSheetList
     *
     * A Composite containing details of one or more CueSheets contained in Releases for which data is provided in the NewReleaseMessage.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCueSheetList($index)
    {
        unset($this->cueSheetList[$index]);
    }

    /**
     * Gets as cueSheetList
     *
     * A Composite containing details of one or more CueSheets contained in Releases for which data is provided in the NewReleaseMessage.
     *
     * @return \DedexBundle\Entity\Ern411\DetailedCueSheetType[]
     */
    public function getCueSheetList()
    {
        return $this->cueSheetList;
    }

    /**
     * Sets a new cueSheetList
     *
     * A Composite containing details of one or more CueSheets contained in Releases for which data is provided in the NewReleaseMessage.
     *
     * @param \DedexBundle\Entity\Ern411\DetailedCueSheetType[] $cueSheetList
     * @return self
     */
    public function setCueSheetList(array $cueSheetList)
    {
        $this->cueSheetList = $cueSheetList;
        return $this;
    }

    /**
     * Gets as resourceList
     *
     * A Composite containing details of one or more Resources.
     *
     * @return \DedexBundle\Entity\Ern411\ResourceListType
     */
    public function getResourceList()
    {
        return $this->resourceList;
    }

    /**
     * Sets a new resourceList
     *
     * A Composite containing details of one or more Resources.
     *
     * @param \DedexBundle\Entity\Ern411\ResourceListType $resourceList
     * @return self
     */
    public function setResourceList(\DedexBundle\Entity\Ern411\ResourceListType $resourceList)
    {
        $this->resourceList = $resourceList;
        return $this;
    }

    /**
     * Gets as chapterList
     *
     * A Composite containing details of one or more Chapters contained in Releases for which data is provided in the NewReleaseMessage.
     *
     * @return \DedexBundle\Entity\Ern411\ChapterListType
     */
    public function getChapterList()
    {
        return $this->chapterList;
    }

    /**
     * Sets a new chapterList
     *
     * A Composite containing details of one or more Chapters contained in Releases for which data is provided in the NewReleaseMessage.
     *
     * @param \DedexBundle\Entity\Ern411\ChapterListType $chapterList
     * @return self
     */
    public function setChapterList(\DedexBundle\Entity\Ern411\ChapterListType $chapterList)
    {
        $this->chapterList = $chapterList;
        return $this;
    }

    /**
     * Gets as releaseList
     *
     * A Composite containing details of one or more DDEX Releases contained in the NewReleaseMessage.
     *
     * @return \DedexBundle\Entity\Ern411\ReleaseListType
     */
    public function getReleaseList()
    {
        return $this->releaseList;
    }

    /**
     * Sets a new releaseList
     *
     * A Composite containing details of one or more DDEX Releases contained in the NewReleaseMessage.
     *
     * @param \DedexBundle\Entity\Ern411\ReleaseListType $releaseList
     * @return self
     */
    public function setReleaseList(\DedexBundle\Entity\Ern411\ReleaseListType $releaseList)
    {
        $this->releaseList = $releaseList;
        return $this;
    }

    /**
     * Adds as releaseDeal
     *
     * A Composite containing details of one or more Deals governing the Usage of the Releases in the Message.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\ReleaseDealType $releaseDeal
     */
    public function addToDealList(\DedexBundle\Entity\Ern411\ReleaseDealType $releaseDeal)
    {
        $this->dealList[] = $releaseDeal;
        return $this;
    }

    /**
     * isset dealList
     *
     * A Composite containing details of one or more Deals governing the Usage of the Releases in the Message.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDealList($index)
    {
        return isset($this->dealList[$index]);
    }

    /**
     * unset dealList
     *
     * A Composite containing details of one or more Deals governing the Usage of the Releases in the Message.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDealList($index)
    {
        unset($this->dealList[$index]);
    }

    /**
     * Gets as dealList
     *
     * A Composite containing details of one or more Deals governing the Usage of the Releases in the Message.
     *
     * @return \DedexBundle\Entity\Ern411\ReleaseDealType[]
     */
    public function getDealList()
    {
        return $this->dealList;
    }

    /**
     * Sets a new dealList
     *
     * A Composite containing details of one or more Deals governing the Usage of the Releases in the Message.
     *
     * @param \DedexBundle\Entity\Ern411\ReleaseDealType[] $dealList
     * @return self
     */
    public function setDealList(array $dealList)
    {
        $this->dealList = $dealList;
        return $this;
    }

    /**
     * Adds as supplementalDocument
     *
     * A Composite containing details of one or more XML documents communicated with the Message.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\FileType $supplementalDocument
     */
    public function addToSupplementalDocumentList(\DedexBundle\Entity\Ern411\FileType $supplementalDocument)
    {
        $this->supplementalDocumentList[] = $supplementalDocument;
        return $this;
    }

    /**
     * isset supplementalDocumentList
     *
     * A Composite containing details of one or more XML documents communicated with the Message.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupplementalDocumentList($index)
    {
        return isset($this->supplementalDocumentList[$index]);
    }

    /**
     * unset supplementalDocumentList
     *
     * A Composite containing details of one or more XML documents communicated with the Message.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupplementalDocumentList($index)
    {
        unset($this->supplementalDocumentList[$index]);
    }

    /**
     * Gets as supplementalDocumentList
     *
     * A Composite containing details of one or more XML documents communicated with the Message.
     *
     * @return \DedexBundle\Entity\Ern411\FileType[]
     */
    public function getSupplementalDocumentList()
    {
        return $this->supplementalDocumentList;
    }

    /**
     * Sets a new supplementalDocumentList
     *
     * A Composite containing details of one or more XML documents communicated with the Message.
     *
     * @param \DedexBundle\Entity\Ern411\FileType[] $supplementalDocumentList
     * @return self
     */
    public function setSupplementalDocumentList(array $supplementalDocumentList)
    {
        $this->supplementalDocumentList = $supplementalDocumentList;
        return $this;
    }


}

