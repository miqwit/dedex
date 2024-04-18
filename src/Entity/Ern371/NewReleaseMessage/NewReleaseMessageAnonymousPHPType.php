<?php

namespace DedexBundle\Entity\Ern371\NewReleaseMessage;

/**
 * Class representing NewReleaseMessageAnonymousPHPType
 */
class NewReleaseMessageAnonymousPHPType
{
    /**
     * The Identifier of the Version of the XML
     *  schema used for the Message. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $messageSchemaVersionId
     */
    private $messageSchemaVersionId = null;

    /**
     * The Identifier of the Version of the
     *  business profile used for the Message. This is represented in an XML schema as an
     *  XML Attribute.
     *
     * @var string $businessProfileVersionId
     */
    private $businessProfileVersionId = null;

    /**
     * The Identifier of the Version of the
     *  release profile used for the Message. This is represented in an XML schema as an
     *  XML Attribute.
     *
     * @var string $releaseProfileVersionId
     */
    private $releaseProfileVersionId = null;

    /**
     * The Language and script for the Elements
     *  of the NewReleaseMessage as defined in IETF RfC 5646. Language and Script are
     *  provided as lang[-scipt][-region][-variant]. This is represented in an XML schema
     *  as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the
     *  NewReleaseMessage.
     *
     * @var \DedexBundle\Entity\Ern371\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * The indicator which distinguishes
     *  whether the Message contains original data or updates to previously sent data.
     *  This element is deprecated. DDEX advises that it may be removed at a future
     *  date and therefore recommends against using it.
     *
     * @var string $updateIndicator
     */
    private $updateIndicator = null;

    /**
     * A Flag indicating whether the
     *  NewReleaseMessage is sent as part of a backfill activity (as opposed to
     *  providing ongoing deliveries of frontline Releases) (=True) or not (=False).
     *  When this element is not present, then no information on whether it is part of
     *  a backfill activity or not is provided.
     *
     * @var bool $isBackfill
     */
    private $isBackfill = null;

    /**
     * A Composite containing details of a
     *  Price change.
     *
     * @var \DedexBundle\Entity\Ern371\CatalogTransferType $catalogTransfer
     */
    private $catalogTransfer = null;

    /**
     * A Composite containing details of one
     *  or more MusicalWorks, a Performance of which is contained in the Resources of
     *  the NewReleaseMessage.
     *
     * @var \DedexBundle\Entity\Ern371\WorkListType $workList
     */
    private $workList = null;

    /**
     * A Composite containing details of one
     *  or more CueSheets contained in Releases for which data is provided in the
     *  NewReleaseMessage.
     *
     * @var \DedexBundle\Entity\Ern371\CueSheetType[] $cueSheetList
     */
    private $cueSheetList = null;

    /**
     * A Composite containing details of one
     *  or more Resources.
     *
     * @var \DedexBundle\Entity\Ern371\ResourceListType $resourceList
     */
    private $resourceList = null;

    /**
     * A Composite containing details of one
     *  or more Collections contained in Releases for which data is provided in the
     *  NewReleaseMessage.
     *
     * @var \DedexBundle\Entity\Ern371\CollectionListType $collectionList
     */
    private $collectionList = null;

    /**
     * A Composite containing details of one
     *  or more DDEX Releases contained in the NewReleaseMessage.
     *
     * @var \DedexBundle\Entity\Ern371\ReleaseListType $releaseList
     */
    private $releaseList = null;

    /**
     * A Composite containing details of one
     *  or more Deals governing the Usage of the Releases in the
     *  Message.
     *
     * @var \DedexBundle\Entity\Ern371\DealListType $dealList
     */
    private $dealList = null;

    /**
     * Gets as messageSchemaVersionId
     *
     * The Identifier of the Version of the XML
     *  schema used for the Message. This is represented in an XML schema as an XML
     *  Attribute.
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
     * The Identifier of the Version of the XML
     *  schema used for the Message. This is represented in an XML schema as an XML
     *  Attribute.
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
     * The Identifier of the Version of the
     *  business profile used for the Message. This is represented in an XML schema as an
     *  XML Attribute.
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
     * The Identifier of the Version of the
     *  business profile used for the Message. This is represented in an XML schema as an
     *  XML Attribute.
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
     * The Identifier of the Version of the
     *  release profile used for the Message. This is represented in an XML schema as an
     *  XML Attribute.
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
     * The Identifier of the Version of the
     *  release profile used for the Message. This is represented in an XML schema as an
     *  XML Attribute.
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
     * The Language and script for the Elements
     *  of the NewReleaseMessage as defined in IETF RfC 5646. Language and Script are
     *  provided as lang[-scipt][-region][-variant]. This is represented in an XML schema
     *  as an XML Attribute.
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
     * The Language and script for the Elements
     *  of the NewReleaseMessage as defined in IETF RfC 5646. Language and Script are
     *  provided as lang[-scipt][-region][-variant]. This is represented in an XML schema
     *  as an XML Attribute.
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
     * The MessageHeader for the
     *  NewReleaseMessage.
     *
     * @return \DedexBundle\Entity\Ern371\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the
     *  NewReleaseMessage.
     *
     * @param \DedexBundle\Entity\Ern371\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DedexBundle\Entity\Ern371\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Gets as updateIndicator
     *
     * The indicator which distinguishes
     *  whether the Message contains original data or updates to previously sent data.
     *  This element is deprecated. DDEX advises that it may be removed at a future
     *  date and therefore recommends against using it.
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
     * The indicator which distinguishes
     *  whether the Message contains original data or updates to previously sent data.
     *  This element is deprecated. DDEX advises that it may be removed at a future
     *  date and therefore recommends against using it.
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
     * Gets as isBackfill
     *
     * A Flag indicating whether the
     *  NewReleaseMessage is sent as part of a backfill activity (as opposed to
     *  providing ongoing deliveries of frontline Releases) (=True) or not (=False).
     *  When this element is not present, then no information on whether it is part of
     *  a backfill activity or not is provided.
     *
     * @return bool
     */
    public function getIsBackfill()
    {
        return $this->isBackfill;
    }

    /**
     * Sets a new isBackfill
     *
     * A Flag indicating whether the
     *  NewReleaseMessage is sent as part of a backfill activity (as opposed to
     *  providing ongoing deliveries of frontline Releases) (=True) or not (=False).
     *  When this element is not present, then no information on whether it is part of
     *  a backfill activity or not is provided.
     *
     * @param bool $isBackfill
     * @return self
     */
    public function setIsBackfill($isBackfill)
    {
        $this->isBackfill = $isBackfill;
        return $this;
    }

    /**
     * Gets as catalogTransfer
     *
     * A Composite containing details of a
     *  Price change.
     *
     * @return \DedexBundle\Entity\Ern371\CatalogTransferType
     */
    public function getCatalogTransfer()
    {
        return $this->catalogTransfer;
    }

    /**
     * Sets a new catalogTransfer
     *
     * A Composite containing details of a
     *  Price change.
     *
     * @param \DedexBundle\Entity\Ern371\CatalogTransferType $catalogTransfer
     * @return self
     */
    public function setCatalogTransfer(?\DedexBundle\Entity\Ern371\CatalogTransferType $catalogTransfer = null)
    {
        $this->catalogTransfer = $catalogTransfer;
        return $this;
    }

    /**
     * Gets as workList
     *
     * A Composite containing details of one
     *  or more MusicalWorks, a Performance of which is contained in the Resources of
     *  the NewReleaseMessage.
     *
     * @return \DedexBundle\Entity\Ern371\WorkListType
     */
    public function getWorkList()
    {
        return $this->workList;
    }

    /**
     * Sets a new workList
     *
     * A Composite containing details of one
     *  or more MusicalWorks, a Performance of which is contained in the Resources of
     *  the NewReleaseMessage.
     *
     * @param \DedexBundle\Entity\Ern371\WorkListType $workList
     * @return self
     */
    public function setWorkList(?\DedexBundle\Entity\Ern371\WorkListType $workList = null)
    {
        $this->workList = $workList;
        return $this;
    }

    /**
     * Adds as cueSheet
     *
     * A Composite containing details of one
     *  or more CueSheets contained in Releases for which data is provided in the
     *  NewReleaseMessage.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern371\CueSheetType $cueSheet
     */
    public function addToCueSheetList(\DedexBundle\Entity\Ern371\CueSheetType $cueSheet)
    {
        $this->cueSheetList[] = $cueSheet;
        return $this;
    }

    /**
     * isset cueSheetList
     *
     * A Composite containing details of one
     *  or more CueSheets contained in Releases for which data is provided in the
     *  NewReleaseMessage.
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
     * A Composite containing details of one
     *  or more CueSheets contained in Releases for which data is provided in the
     *  NewReleaseMessage.
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
     * A Composite containing details of one
     *  or more CueSheets contained in Releases for which data is provided in the
     *  NewReleaseMessage.
     *
     * @return \DedexBundle\Entity\Ern371\CueSheetType[]
     */
    public function getCueSheetList()
    {
        return $this->cueSheetList;
    }

    /**
     * Sets a new cueSheetList
     *
     * A Composite containing details of one
     *  or more CueSheets contained in Releases for which data is provided in the
     *  NewReleaseMessage.
     *
     * @param \DedexBundle\Entity\Ern371\CueSheetType[] $cueSheetList
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
     * A Composite containing details of one
     *  or more Resources.
     *
     * @return \DedexBundle\Entity\Ern371\ResourceListType
     */
    public function getResourceList()
    {
        return $this->resourceList;
    }

    /**
     * Sets a new resourceList
     *
     * A Composite containing details of one
     *  or more Resources.
     *
     * @param \DedexBundle\Entity\Ern371\ResourceListType $resourceList
     * @return self
     */
    public function setResourceList(\DedexBundle\Entity\Ern371\ResourceListType $resourceList)
    {
        $this->resourceList = $resourceList;
        return $this;
    }

    /**
     * Gets as collectionList
     *
     * A Composite containing details of one
     *  or more Collections contained in Releases for which data is provided in the
     *  NewReleaseMessage.
     *
     * @return \DedexBundle\Entity\Ern371\CollectionListType
     */
    public function getCollectionList()
    {
        return $this->collectionList;
    }

    /**
     * Sets a new collectionList
     *
     * A Composite containing details of one
     *  or more Collections contained in Releases for which data is provided in the
     *  NewReleaseMessage.
     *
     * @param \DedexBundle\Entity\Ern371\CollectionListType $collectionList
     * @return self
     */
    public function setCollectionList(?\DedexBundle\Entity\Ern371\CollectionListType $collectionList = null)
    {
        $this->collectionList = $collectionList;
        return $this;
    }

    /**
     * Gets as releaseList
     *
     * A Composite containing details of one
     *  or more DDEX Releases contained in the NewReleaseMessage.
     *
     * @return \DedexBundle\Entity\Ern371\ReleaseListType
     */
    public function getReleaseList()
    {
        return $this->releaseList;
    }

    /**
     * Sets a new releaseList
     *
     * A Composite containing details of one
     *  or more DDEX Releases contained in the NewReleaseMessage.
     *
     * @param \DedexBundle\Entity\Ern371\ReleaseListType $releaseList
     * @return self
     */
    public function setReleaseList(\DedexBundle\Entity\Ern371\ReleaseListType $releaseList)
    {
        $this->releaseList = $releaseList;
        return $this;
    }

    /**
     * Gets as dealList
     *
     * A Composite containing details of one
     *  or more Deals governing the Usage of the Releases in the
     *  Message.
     *
     * @return \DedexBundle\Entity\Ern371\DealListType
     */
    public function getDealList()
    {
        return $this->dealList;
    }

    /**
     * Sets a new dealList
     *
     * A Composite containing details of one
     *  or more Deals governing the Usage of the Releases in the
     *  Message.
     *
     * @param \DedexBundle\Entity\Ern371\DealListType $dealList
     * @return self
     */
    public function setDealList(?\DedexBundle\Entity\Ern371\DealListType $dealList = null)
    {
        $this->dealList = $dealList;
        return $this;
    }
}

