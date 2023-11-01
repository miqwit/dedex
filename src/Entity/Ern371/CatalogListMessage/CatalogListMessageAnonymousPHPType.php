<?php

namespace DedexBundle\Entity\Ern371\CatalogListMessage;

/**
 * Class representing CatalogListMessageAnonymousPHPType
 */
class CatalogListMessageAnonymousPHPType
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
     *  of the CatalogListMessage as defined in IETF RfC 5646. Language and Script are
     *  provided as lang[-scipt][-region][-variant]. This is represented in an XML schema
     *  as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the
     *  CatalogListMessage.
     *
     * @var \DedexBundle\Entity\Ern371\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * The DateTime at which the catalog will
     *  become available (the only allowed format is ISO 8601:2004:
     *  YYYY-MM-DDThh:mm:ssTZD).
     *
     * @var \DateTime $publicationDate
     */
    private $publicationDate = null;

    /**
     * A Composite containing details of a
     *  Release which is an item of the catalog.
     *
     * @var \DedexBundle\Entity\Ern371\CatalogItemType[] $catalogItem
     */
    private $catalogItem = [
        
    ];

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
     *  of the CatalogListMessage as defined in IETF RfC 5646. Language and Script are
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
     *  of the CatalogListMessage as defined in IETF RfC 5646. Language and Script are
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
     *  CatalogListMessage.
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
     *  CatalogListMessage.
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
     * Gets as publicationDate
     *
     * The DateTime at which the catalog will
     *  become available (the only allowed format is ISO 8601:2004:
     *  YYYY-MM-DDThh:mm:ssTZD).
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
     * The DateTime at which the catalog will
     *  become available (the only allowed format is ISO 8601:2004:
     *  YYYY-MM-DDThh:mm:ssTZD).
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
     * A Composite containing details of a
     *  Release which is an item of the catalog.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern371\CatalogItemType $catalogItem
     */
    public function addToCatalogItem(\DedexBundle\Entity\Ern371\CatalogItemType $catalogItem)
    {
        $this->catalogItem[] = $catalogItem;
        return $this;
    }

    /**
     * isset catalogItem
     *
     * A Composite containing details of a
     *  Release which is an item of the catalog.
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
     * A Composite containing details of a
     *  Release which is an item of the catalog.
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
     * A Composite containing details of a
     *  Release which is an item of the catalog.
     *
     * @return \DedexBundle\Entity\Ern371\CatalogItemType[]
     */
    public function getCatalogItem()
    {
        return $this->catalogItem;
    }

    /**
     * Sets a new catalogItem
     *
     * A Composite containing details of a
     *  Release which is an item of the catalog.
     *
     * @param \DedexBundle\Entity\Ern371\CatalogItemType[] $catalogItem
     * @return self
     */
    public function setCatalogItem(array $catalogItem)
    {
        $this->catalogItem = $catalogItem;
        return $this;
    }
}

