<?php

namespace DedexBundle\Entity\Ern43\NewReleaseMessage;

/**
 * Class representing NewReleaseMessageAnonymousPHPType
 */
class NewReleaseMessageAnonymousPHPType
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
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $avsVersionId
     */
    private $avsVersionId = null;

    /**
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the NewReleaseMessage.
     *
     * @var \DedexBundle\Entity\Ern43\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of Release administration.
     *
     * @var \DedexBundle\Entity\Ern43\ReleaseAdminType[] $releaseAdmin
     */
    private $releaseAdmin = [
        
    ];

    /**
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @var \DedexBundle\Entity\Ern43\PartyType[] $partyList
     */
    private $partyList = null;

    /**
     * A Composite containing details of one or more CueSheets contained in Releases for which data is provided in the NewReleaseMessage.
     *
     * @var \DedexBundle\Entity\Ern43\CueSheetType[] $cueSheetList
     */
    private $cueSheetList = null;

    /**
     * A Composite containing details of one or more Resources.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/sequencing-resources
     *
     * @var \DedexBundle\Entity\Ern43\ResourceListType $resourceList
     */
    private $resourceList = null;

    /**
     * A Composite containing details of one or more Chapters contained in Releases for which data is provided in the NewReleaseMessage.
     *
     * @var \DedexBundle\Entity\Ern43\ChapterListType $chapterList
     */
    private $chapterList = null;

    /**
     * A Composite containing details of one or more DDEX Releases contained in the NewReleaseMessage.
     *
     * @var \DedexBundle\Entity\Ern43\ReleaseListType $releaseList
     */
    private $releaseList = null;

    /**
     * A Composite containing details of one or more Deals governing the Usage of the Releases in the Message.
     *
     * @var \DedexBundle\Entity\Ern43\DealListType $dealList
     */
    private $dealList = null;

    /**
     * A Composite containing details of one or more XML documents communicated with the Message.
     *
     * @var \DedexBundle\Entity\Ern43\FileType[] $supplementalDocumentList
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
     * Gets as avsVersionId
     *
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getAvsVersionId()
    {
        return $this->avsVersionId;
    }

    /**
     * Sets a new avsVersionId
     *
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $avsVersionId
     * @return self
     */
    public function setAvsVersionId($avsVersionId)
    {
        $this->avsVersionId = $avsVersionId;
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
     * @return \DedexBundle\Entity\Ern43\MessageHeaderType
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
     * @param \DedexBundle\Entity\Ern43\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DedexBundle\Entity\Ern43\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Adds as releaseAdmin
     *
     * A Composite containing details of Release administration.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\ReleaseAdminType $releaseAdmin
     */
    public function addToReleaseAdmin(\DedexBundle\Entity\Ern43\ReleaseAdminType $releaseAdmin)
    {
        $this->releaseAdmin[] = $releaseAdmin;
        return $this;
    }

    /**
     * isset releaseAdmin
     *
     * A Composite containing details of Release administration.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseAdmin($index)
    {
        return isset($this->releaseAdmin[$index]);
    }

    /**
     * unset releaseAdmin
     *
     * A Composite containing details of Release administration.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseAdmin($index)
    {
        unset($this->releaseAdmin[$index]);
    }

    /**
     * Gets as releaseAdmin
     *
     * A Composite containing details of Release administration.
     *
     * @return \DedexBundle\Entity\Ern43\ReleaseAdminType[]
     */
    public function getReleaseAdmin()
    {
        return $this->releaseAdmin;
    }

    /**
     * Sets a new releaseAdmin
     *
     * A Composite containing details of Release administration.
     *
     * @param \DedexBundle\Entity\Ern43\ReleaseAdminType[] $releaseAdmin
     * @return self
     */
    public function setReleaseAdmin(array $releaseAdmin = null)
    {
        $this->releaseAdmin = $releaseAdmin;
        return $this;
    }

    /**
     * Adds as party
     *
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\PartyType $party
     */
    public function addToPartyList(\DedexBundle\Entity\Ern43\PartyType $party)
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
     * @return \DedexBundle\Entity\Ern43\PartyType[]
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
     * @param \DedexBundle\Entity\Ern43\PartyType[] $partyList
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
     * @param \DedexBundle\Entity\Ern43\CueSheetType $cueSheet
     */
    public function addToCueSheetList(\DedexBundle\Entity\Ern43\CueSheetType $cueSheet)
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
     * @return \DedexBundle\Entity\Ern43\CueSheetType[]
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
     * @param \DedexBundle\Entity\Ern43\CueSheetType[] $cueSheetList
     * @return self
     */
    public function setCueSheetList(array $cueSheetList = null)
    {
        $this->cueSheetList = $cueSheetList;
        return $this;
    }

    /**
     * Gets as resourceList
     *
     * A Composite containing details of one or more Resources.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/sequencing-resources
     *
     * @return \DedexBundle\Entity\Ern43\ResourceListType
     */
    public function getResourceList()
    {
        return $this->resourceList;
    }

    /**
     * Sets a new resourceList
     *
     * A Composite containing details of one or more Resources.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/sequencing-resources
     *
     * @param \DedexBundle\Entity\Ern43\ResourceListType $resourceList
     * @return self
     */
    public function setResourceList(\DedexBundle\Entity\Ern43\ResourceListType $resourceList)
    {
        $this->resourceList = $resourceList;
        return $this;
    }

    /**
     * Gets as chapterList
     *
     * A Composite containing details of one or more Chapters contained in Releases for which data is provided in the NewReleaseMessage.
     *
     * @return \DedexBundle\Entity\Ern43\ChapterListType
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
     * @param \DedexBundle\Entity\Ern43\ChapterListType $chapterList
     * @return self
     */
    public function setChapterList(?\DedexBundle\Entity\Ern43\ChapterListType $chapterList = null)
    {
        $this->chapterList = $chapterList;
        return $this;
    }

    /**
     * Gets as releaseList
     *
     * A Composite containing details of one or more DDEX Releases contained in the NewReleaseMessage.
     *
     * @return \DedexBundle\Entity\Ern43\ReleaseListType
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
     * @param \DedexBundle\Entity\Ern43\ReleaseListType $releaseList
     * @return self
     */
    public function setReleaseList(\DedexBundle\Entity\Ern43\ReleaseListType $releaseList)
    {
        $this->releaseList = $releaseList;
        return $this;
    }

    /**
     * Gets as dealList
     *
     * A Composite containing details of one or more Deals governing the Usage of the Releases in the Message.
     *
     * @return \DedexBundle\Entity\Ern43\DealListType
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
     * @param \DedexBundle\Entity\Ern43\DealListType $dealList
     * @return self
     */
    public function setDealList(?\DedexBundle\Entity\Ern43\DealListType $dealList = null)
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
     * @param \DedexBundle\Entity\Ern43\FileType $supplementalDocument
     */
    public function addToSupplementalDocumentList(\DedexBundle\Entity\Ern43\FileType $supplementalDocument)
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
     * @return \DedexBundle\Entity\Ern43\FileType[]
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
     * @param \DedexBundle\Entity\Ern43\FileType[] $supplementalDocumentList
     * @return self
     */
    public function setSupplementalDocumentList(array $supplementalDocumentList = null)
    {
        $this->supplementalDocumentList = $supplementalDocumentList;
        return $this;
    }
}

