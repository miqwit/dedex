<?php

namespace DedexBundle\Entity\Ern341\NewReleaseMessage;

/**
 * Class representing NewReleaseMessageAnonymousPHPType
 */
class NewReleaseMessageAnonymousPHPType
{
    /**
     * The ddex:Identifier of the ddex:Version of the XML schema used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $messageSchemaVersionId
     */
    private $messageSchemaVersionId = null;

    /**
     * The ddex:Identifier of the ddex:Version of the business profile used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $businessProfileVersionId
     */
    private $businessProfileVersionId = null;

    /**
     * The ddex:Identifier of the ddex:Version of the release profile used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $releaseProfileVersionId
     */
    private $releaseProfileVersionId = null;

    /**
     * The ddex:Language and script for the ddex:Elements of the ern:NewReleaseMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the ern:NewReleaseMessage.
     *
     * @var \DedexBundle\Entity\DdexC\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * The indicator which distinguishes whether the ddex:Message contains original data or updates to previously sent data.
     *
     * @var string $updateIndicator
     */
    private $updateIndicator = null;

    /**
     * A ddex:Composite containing details of a ddex:Price change.
     *
     * @var \DedexBundle\Entity\Ern341\CatalogTransferType $catalogTransfer
     */
    private $catalogTransfer = null;

    /**
     * A ddex:Composite containing details of one or more ddex:MusicalWorks, a ddex:Performance of which is contained in the ddex:Resources of the ern:NewReleaseMessage.
     *
     * @var \DedexBundle\Entity\DdexC\WorkListType $workList
     */
    private $workList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which data is provided in the ern:NewReleaseMessage.
     *
     * @var \DedexBundle\Entity\Ern341\CueSheetType[] $cueSheetList
     */
    private $cueSheetList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Resources.
     *
     * @var \DedexBundle\Entity\Ern341\ResourceListType $resourceList
     */
    private $resourceList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Collections contained in ddex:Releases for which data is provided in the ern:NewReleaseMessage.
     *
     * @var \DedexBundle\Entity\Ern341\CollectionListType $collectionList
     */
    private $collectionList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:DDEX ddex:Releases contained in the ern:NewReleaseMessage.
     *
     * @var \DedexBundle\Entity\Ern341\ReleaseListType $releaseList
     */
    private $releaseList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Deals governing the Usage of the ddex:Releases in the ddex:Message.
     *
     * @var \DedexBundle\Entity\Ern341\DealListType $dealList
     */
    private $dealList = null;

    /**
     * Gets as messageSchemaVersionId
     *
     * The ddex:Identifier of the ddex:Version of the XML schema used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getMessageSchemaVersionId()
    {
        return $this->messageSchemaVersionId;
    }

    /**
     * Sets a new messageSchemaVersionId
     *
     * The ddex:Identifier of the ddex:Version of the XML schema used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $messageSchemaVersionId
     * @return self
     */
    public function setMessageSchemaVersionId($messageSchemaVersionId)
    {
        $this->messageSchemaVersionId = $messageSchemaVersionId;
        return $this;
    }

    /**
     * Gets as businessProfileVersionId
     *
     * The ddex:Identifier of the ddex:Version of the business profile used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getBusinessProfileVersionId()
    {
        return $this->businessProfileVersionId;
    }

    /**
     * Sets a new businessProfileVersionId
     *
     * The ddex:Identifier of the ddex:Version of the business profile used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $businessProfileVersionId
     * @return self
     */
    public function setBusinessProfileVersionId($businessProfileVersionId)
    {
        $this->businessProfileVersionId = $businessProfileVersionId;
        return $this;
    }

    /**
     * Gets as releaseProfileVersionId
     *
     * The ddex:Identifier of the ddex:Version of the release profile used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Identifier of the ddex:Version of the release profile used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ern:NewReleaseMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ern:NewReleaseMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The MessageHeader for the ern:NewReleaseMessage.
     *
     * @return \DedexBundle\Entity\DdexC\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the ern:NewReleaseMessage.
     *
     * @param \DedexBundle\Entity\DdexC\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DedexBundle\Entity\DdexC\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Gets as updateIndicator
     *
     * The indicator which distinguishes whether the ddex:Message contains original data or updates to previously sent data.
     *
     * @return string
     */
    public function getUpdateIndicator()
    {
        return $this->updateIndicator;
    }

    /**
     * Sets a new updateIndicator
     *
     * The indicator which distinguishes whether the ddex:Message contains original data or updates to previously sent data.
     *
     * @param string $updateIndicator
     * @return self
     */
    public function setUpdateIndicator($updateIndicator)
    {
        $this->updateIndicator = $updateIndicator;
        return $this;
    }

    /**
     * Gets as catalogTransfer
     *
     * A ddex:Composite containing details of a ddex:Price change.
     *
     * @return \DedexBundle\Entity\Ern341\CatalogTransferType
     */
    public function getCatalogTransfer()
    {
        return $this->catalogTransfer;
    }

    /**
     * Sets a new catalogTransfer
     *
     * A ddex:Composite containing details of a ddex:Price change.
     *
     * @param \DedexBundle\Entity\Ern341\CatalogTransferType $catalogTransfer
     * @return self
     */
    public function setCatalogTransfer(?\DedexBundle\Entity\Ern341\CatalogTransferType $catalogTransfer = null)
    {
        $this->catalogTransfer = $catalogTransfer;
        return $this;
    }

    /**
     * Gets as workList
     *
     * A ddex:Composite containing details of one or more ddex:MusicalWorks, a ddex:Performance of which is contained in the ddex:Resources of the ern:NewReleaseMessage.
     *
     * @return \DedexBundle\Entity\DdexC\WorkListType
     */
    public function getWorkList()
    {
        return $this->workList;
    }

    /**
     * Sets a new workList
     *
     * A ddex:Composite containing details of one or more ddex:MusicalWorks, a ddex:Performance of which is contained in the ddex:Resources of the ern:NewReleaseMessage.
     *
     * @param \DedexBundle\Entity\DdexC\WorkListType $workList
     * @return self
     */
    public function setWorkList(?\DedexBundle\Entity\DdexC\WorkListType $workList = null)
    {
        $this->workList = $workList;
        return $this;
    }

    /**
     * Adds as cueSheet
     *
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which data is provided in the ern:NewReleaseMessage.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\CueSheetType $cueSheet
     */
    public function addToCueSheetList(\DedexBundle\Entity\Ern341\CueSheetType $cueSheet)
    {
        $this->cueSheetList[] = $cueSheet;
        return $this;
    }

    /**
     * isset cueSheetList
     *
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which data is provided in the ern:NewReleaseMessage.
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
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which data is provided in the ern:NewReleaseMessage.
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
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which data is provided in the ern:NewReleaseMessage.
     *
     * @return \DedexBundle\Entity\Ern341\CueSheetType[]
     */
    public function getCueSheetList()
    {
        return $this->cueSheetList;
    }

    /**
     * Sets a new cueSheetList
     *
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which data is provided in the ern:NewReleaseMessage.
     *
     * @param \DedexBundle\Entity\Ern341\CueSheetType[] $cueSheetList
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
     * A ddex:Composite containing details of one or more ddex:Resources.
     *
     * @return \DedexBundle\Entity\Ern341\ResourceListType
     */
    public function getResourceList()
    {
        return $this->resourceList;
    }

    /**
     * Sets a new resourceList
     *
     * A ddex:Composite containing details of one or more ddex:Resources.
     *
     * @param \DedexBundle\Entity\Ern341\ResourceListType $resourceList
     * @return self
     */
    public function setResourceList(\DedexBundle\Entity\Ern341\ResourceListType $resourceList)
    {
        $this->resourceList = $resourceList;
        return $this;
    }

    /**
     * Gets as collectionList
     *
     * A ddex:Composite containing details of one or more ddex:Collections contained in ddex:Releases for which data is provided in the ern:NewReleaseMessage.
     *
     * @return \DedexBundle\Entity\Ern341\CollectionListType
     */
    public function getCollectionList()
    {
        return $this->collectionList;
    }

    /**
     * Sets a new collectionList
     *
     * A ddex:Composite containing details of one or more ddex:Collections contained in ddex:Releases for which data is provided in the ern:NewReleaseMessage.
     *
     * @param \DedexBundle\Entity\Ern341\CollectionListType $collectionList
     * @return self
     */
    public function setCollectionList(?\DedexBundle\Entity\Ern341\CollectionListType $collectionList = null)
    {
        $this->collectionList = $collectionList;
        return $this;
    }

    /**
     * Gets as releaseList
     *
     * A ddex:Composite containing details of one or more ddex:DDEX ddex:Releases contained in the ern:NewReleaseMessage.
     *
     * @return \DedexBundle\Entity\Ern341\ReleaseListType
     */
    public function getReleaseList()
    {
        return $this->releaseList;
    }

    /**
     * Sets a new releaseList
     *
     * A ddex:Composite containing details of one or more ddex:DDEX ddex:Releases contained in the ern:NewReleaseMessage.
     *
     * @param \DedexBundle\Entity\Ern341\ReleaseListType $releaseList
     * @return self
     */
    public function setReleaseList(\DedexBundle\Entity\Ern341\ReleaseListType $releaseList)
    {
        $this->releaseList = $releaseList;
        return $this;
    }

    /**
     * Gets as dealList
     *
     * A ddex:Composite containing details of one or more ddex:Deals governing the Usage of the ddex:Releases in the ddex:Message.
     *
     * @return \DedexBundle\Entity\Ern341\DealListType
     */
    public function getDealList()
    {
        return $this->dealList;
    }

    /**
     * Sets a new dealList
     *
     * A ddex:Composite containing details of one or more ddex:Deals governing the Usage of the ddex:Releases in the ddex:Message.
     *
     * @param \DedexBundle\Entity\Ern341\DealListType $dealList
     * @return self
     */
    public function setDealList(?\DedexBundle\Entity\Ern341\DealListType $dealList = null)
    {
        $this->dealList = $dealList;
        return $this;
    }
}

