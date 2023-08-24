<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing ImageType
 *
 * A ddex:Composite containing details of an ddex:Image.
 * XSD Type: Image
 */
class ImageType
{
    /**
     * The ddex:Flag indicating whether the ern:Image ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided ern:Image data with the now provided data.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * The ddex:Language and script for the ddex:Elements of the ern:Image as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of the ddex:Type of the ern:Image.
     *
     * @var \DedexBundle\Entity\DdexC\ImageTypeType $imageType
     */
    private $imageType = null;

    /**
     * The ddex:Flag indicating whether the ern:Image is related to an ddex:Artist (=True) or not (=False).
     *
     * @var bool $isArtistRelated
     */
    private $isArtistRelated = null;

    /**
     * A ddex:Composite containing details of ddex:Identifiers of the ern:Image.
     *
     * @var \DedexBundle\Entity\DdexC\ImageIdType[] $imageId
     */
    private $imageId = [
        
    ];

    /**
     * The ddex:Identifier (specific to the ddex:Message) of the ern:Image within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A ddex:Composite containing details of a ddex:Title of the ern:Image.
     *
     * @var \DedexBundle\Entity\DdexC\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ern:Image was created.
     *
     * @var \DedexBundle\Entity\DdexC\EventDateType $creationDate
     */
    private $creationDate = null;

    /**
     * A ddex:Composite containing details of the ern:Image which may vary according to ddex:Territory of release.
     *
     * @var \DedexBundle\Entity\Ern341\ImageDetailsByTerritoryType[] $imageDetailsByTerritory
     */
    private $imageDetailsByTerritory = [
        
    ];

    /**
     * Gets as isUpdated
     *
     * The ddex:Flag indicating whether the ern:Image ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided ern:Image data with the now provided data.
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
     * The ddex:Flag indicating whether the ern:Image ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided ern:Image data with the now provided data.
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
     * The ddex:Language and script for the ddex:Elements of the ern:Image as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ern:Image as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Gets as imageType
     *
     * A ddex:Composite containing details of the ddex:Type of the ern:Image.
     *
     * @return \DedexBundle\Entity\DdexC\ImageTypeType
     */
    public function getImageType()
    {
        return $this->imageType;
    }

    /**
     * Sets a new imageType
     *
     * A ddex:Composite containing details of the ddex:Type of the ern:Image.
     *
     * @param \DedexBundle\Entity\DdexC\ImageTypeType $imageType
     * @return self
     */
    public function setImageType(?\DedexBundle\Entity\DdexC\ImageTypeType $imageType = null)
    {
        $this->imageType = $imageType;
        return $this;
    }

    /**
     * Gets as isArtistRelated
     *
     * The ddex:Flag indicating whether the ern:Image is related to an ddex:Artist (=True) or not (=False).
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
     * The ddex:Flag indicating whether the ern:Image is related to an ddex:Artist (=True) or not (=False).
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
     * Adds as imageId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ern:Image.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ImageIdType $imageId
     */
    public function addToImageId(\DedexBundle\Entity\DdexC\ImageIdType $imageId)
    {
        $this->imageId[] = $imageId;
        return $this;
    }

    /**
     * isset imageId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ern:Image.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImageId($index)
    {
        return isset($this->imageId[$index]);
    }

    /**
     * unset imageId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ern:Image.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImageId($index)
    {
        unset($this->imageId[$index]);
    }

    /**
     * Gets as imageId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ern:Image.
     *
     * @return \DedexBundle\Entity\DdexC\ImageIdType[]
     */
    public function getImageId()
    {
        return $this->imageId;
    }

    /**
     * Sets a new imageId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ern:Image.
     *
     * @param \DedexBundle\Entity\DdexC\ImageIdType[] $imageId
     * @return self
     */
    public function setImageId(array $imageId)
    {
        $this->imageId = $imageId;
        return $this;
    }

    /**
     * Gets as resourceReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the ern:Image within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
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
     * The ddex:Identifier (specific to the ddex:Message) of the ern:Image within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
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
     * Adds as title
     *
     * A ddex:Composite containing details of a ddex:Title of the ern:Image.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:Image.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:Image.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:Image.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:Image.
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
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ern:Image was created.
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
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ern:Image was created.
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
     * Adds as imageDetailsByTerritory
     *
     * A ddex:Composite containing details of the ern:Image which may vary according to ddex:Territory of release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\ImageDetailsByTerritoryType $imageDetailsByTerritory
     */
    public function addToImageDetailsByTerritory(\DedexBundle\Entity\Ern341\ImageDetailsByTerritoryType $imageDetailsByTerritory)
    {
        $this->imageDetailsByTerritory[] = $imageDetailsByTerritory;
        return $this;
    }

    /**
     * isset imageDetailsByTerritory
     *
     * A ddex:Composite containing details of the ern:Image which may vary according to ddex:Territory of release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImageDetailsByTerritory($index)
    {
        return isset($this->imageDetailsByTerritory[$index]);
    }

    /**
     * unset imageDetailsByTerritory
     *
     * A ddex:Composite containing details of the ern:Image which may vary according to ddex:Territory of release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImageDetailsByTerritory($index)
    {
        unset($this->imageDetailsByTerritory[$index]);
    }

    /**
     * Gets as imageDetailsByTerritory
     *
     * A ddex:Composite containing details of the ern:Image which may vary according to ddex:Territory of release.
     *
     * @return \DedexBundle\Entity\Ern341\ImageDetailsByTerritoryType[]
     */
    public function getImageDetailsByTerritory()
    {
        return $this->imageDetailsByTerritory;
    }

    /**
     * Sets a new imageDetailsByTerritory
     *
     * A ddex:Composite containing details of the ern:Image which may vary according to ddex:Territory of release.
     *
     * @param \DedexBundle\Entity\Ern341\ImageDetailsByTerritoryType[] $imageDetailsByTerritory
     * @return self
     */
    public function setImageDetailsByTerritory(array $imageDetailsByTerritory)
    {
        $this->imageDetailsByTerritory = $imageDetailsByTerritory;
        return $this;
    }
}

