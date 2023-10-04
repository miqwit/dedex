<?php

namespace DedexBundle\Entity\Ern341\CatalogListMessage;

/**
 * Class representing CatalogListMessageAnonymousPHPType
 */
class CatalogListMessageAnonymousPHPType
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
     * The ddex:Language and script for the ddex:Elements of the ern:CatalogListMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the ern:CatalogListMessage.
     *
     * @var \DedexBundle\Entity\DdexC\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * The ddex:DateTime at which the catalog will become available (the only allowed format is ISO 8601:2004: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @var \DateTime $publicationDate
     */
    private $publicationDate = null;

    /**
     * A ddex:Composite containing details of a ddex:Release which is an item of the catalog.
     *
     * @var \DedexBundle\Entity\Ern341\CatalogItemType[] $catalogItem
     */
    private $catalogItem = [
        
    ];

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
     * The ddex:Language and script for the ddex:Elements of the ern:CatalogListMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ern:CatalogListMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The MessageHeader for the ern:CatalogListMessage.
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
     * The MessageHeader for the ern:CatalogListMessage.
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
     * Gets as publicationDate
     *
     * The ddex:DateTime at which the catalog will become available (the only allowed format is ISO 8601:2004: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @return \DateTime
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * Sets a new publicationDate
     *
     * The ddex:DateTime at which the catalog will become available (the only allowed format is ISO 8601:2004: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @param \DateTime $publicationDate
     * @return self
     */
    public function setPublicationDate(\DateTime $publicationDate)
    {
        $this->publicationDate = $publicationDate;
        return $this;
    }

    /**
     * Adds as catalogItem
     *
     * A ddex:Composite containing details of a ddex:Release which is an item of the catalog.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\CatalogItemType $catalogItem
     */
    public function addToCatalogItem(\DedexBundle\Entity\Ern341\CatalogItemType $catalogItem)
    {
        $this->catalogItem[] = $catalogItem;
        return $this;
    }

    /**
     * isset catalogItem
     *
     * A ddex:Composite containing details of a ddex:Release which is an item of the catalog.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCatalogItem($index)
    {
        return isset($this->catalogItem[$index]);
    }

    /**
     * unset catalogItem
     *
     * A ddex:Composite containing details of a ddex:Release which is an item of the catalog.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCatalogItem($index)
    {
        unset($this->catalogItem[$index]);
    }

    /**
     * Gets as catalogItem
     *
     * A ddex:Composite containing details of a ddex:Release which is an item of the catalog.
     *
     * @return \DedexBundle\Entity\Ern341\CatalogItemType[]
     */
    public function getCatalogItem()
    {
        return $this->catalogItem;
    }

    /**
     * Sets a new catalogItem
     *
     * A ddex:Composite containing details of a ddex:Release which is an item of the catalog.
     *
     * @param \DedexBundle\Entity\Ern341\CatalogItemType[] $catalogItem
     * @return self
     */
    public function setCatalogItem(array $catalogItem)
    {
        $this->catalogItem = $catalogItem;
        return $this;
    }
}

