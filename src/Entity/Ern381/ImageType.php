<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing ImageType
 *
 * A Composite containing details of an Image.
 * XSD Type: Image
 */
class ImageType
{
    /**
     * The Flag indicating whether the Image Element was updated (=true) or not (=false). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided Image data with the now provided data. This attribute is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * The Language and script for the Elements of the Image as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of the Type of the Image.
     *
     * @var \DedexBundle\Entity\Ern381\ImageTypeType $imageType
     */
    private $imageType = null;

    /**
     * The Flag indicating whether the Image is related to an Artist (=true) or not (=false).
     *
     * @var bool $isArtistRelated
     */
    private $isArtistRelated = null;

    /**
     * A Composite containing details of Identifiers of the Image.
     *
     * @var \DedexBundle\Entity\Ern381\ResourceProprietaryIdType[] $imageId
     */
    private $imageId = [
        
    ];

    /**
     * The Identifier (specific to the Message) of the Image within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A Composite containing details of a Title of the Image.
     *
     * @var \DedexBundle\Entity\Ern381\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing details of the Date and Place of the Event in which the Image was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DedexBundle\Entity\Ern381\EventDateType $creationDate
     */
    private $creationDate = null;

    /**
     * A Composite containing details of the Image which may vary according to Territory of release.
     *
     * @var \DedexBundle\Entity\Ern381\ImageDetailsByTerritoryType[] $imageDetailsByTerritory
     */
    private $imageDetailsByTerritory = [
        
    ];

    /**
     * Gets as isUpdated
     *
     * The Flag indicating whether the Image Element was updated (=true) or not (=false). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided Image data with the now provided data. This attribute is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
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
     * The Flag indicating whether the Image Element was updated (=true) or not (=false). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided Image data with the now provided data. This attribute is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
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
     * The Language and script for the Elements of the Image as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the Image as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * A Composite containing details of the Type of the Image.
     *
     * @return \DedexBundle\Entity\Ern381\ImageTypeType
     */
    public function getImageType()
    {
        return $this->imageType;
    }

    /**
     * Sets a new imageType
     *
     * A Composite containing details of the Type of the Image.
     *
     * @param \DedexBundle\Entity\Ern381\ImageTypeType $imageType
     * @return self
     */
    public function setImageType(?\DedexBundle\Entity\Ern381\ImageTypeType $imageType = null)
    {
        $this->imageType = $imageType;
        return $this;
    }

    /**
     * Gets as isArtistRelated
     *
     * The Flag indicating whether the Image is related to an Artist (=true) or not (=false).
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
     * The Flag indicating whether the Image is related to an Artist (=true) or not (=false).
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
     * A Composite containing details of Identifiers of the Image.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\ResourceProprietaryIdType $imageId
     */
    public function addToImageId(\DedexBundle\Entity\Ern381\ResourceProprietaryIdType $imageId)
    {
        $this->imageId[] = $imageId;
        return $this;
    }

    /**
     * isset imageId
     *
     * A Composite containing details of Identifiers of the Image.
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
     * A Composite containing details of Identifiers of the Image.
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
     * A Composite containing details of Identifiers of the Image.
     *
     * @return \DedexBundle\Entity\Ern381\ResourceProprietaryIdType[]
     */
    public function getImageId()
    {
        return $this->imageId;
    }

    /**
     * Sets a new imageId
     *
     * A Composite containing details of Identifiers of the Image.
     *
     * @param \DedexBundle\Entity\Ern381\ResourceProprietaryIdType[] $imageId
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
     * The Identifier (specific to the Message) of the Image within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
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
     * The Identifier (specific to the Message) of the Image within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
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
     * A Composite containing details of a Title of the Image.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\TitleType $title
     */
    public function addToTitle(\DedexBundle\Entity\Ern381\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title of the Image.
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
     * A Composite containing details of a Title of the Image.
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
     * A Composite containing details of a Title of the Image.
     *
     * @return \DedexBundle\Entity\Ern381\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title of the Image.
     *
     * @param \DedexBundle\Entity\Ern381\TitleType[] $title
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
     * A Composite containing details of the Date and Place of the Event in which the Image was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DedexBundle\Entity\Ern381\EventDateType
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets a new creationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Image was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DedexBundle\Entity\Ern381\EventDateType $creationDate
     * @return self
     */
    public function setCreationDate(?\DedexBundle\Entity\Ern381\EventDateType $creationDate = null)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Adds as imageDetailsByTerritory
     *
     * A Composite containing details of the Image which may vary according to Territory of release.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\ImageDetailsByTerritoryType $imageDetailsByTerritory
     */
    public function addToImageDetailsByTerritory(\DedexBundle\Entity\Ern381\ImageDetailsByTerritoryType $imageDetailsByTerritory)
    {
        $this->imageDetailsByTerritory[] = $imageDetailsByTerritory;
        return $this;
    }

    /**
     * isset imageDetailsByTerritory
     *
     * A Composite containing details of the Image which may vary according to Territory of release.
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
     * A Composite containing details of the Image which may vary according to Territory of release.
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
     * A Composite containing details of the Image which may vary according to Territory of release.
     *
     * @return \DedexBundle\Entity\Ern381\ImageDetailsByTerritoryType[]
     */
    public function getImageDetailsByTerritory()
    {
        return $this->imageDetailsByTerritory;
    }

    /**
     * Sets a new imageDetailsByTerritory
     *
     * A Composite containing details of the Image which may vary according to Territory of release.
     *
     * @param \DedexBundle\Entity\Ern381\ImageDetailsByTerritoryType[] $imageDetailsByTerritory
     * @return self
     */
    public function setImageDetailsByTerritory(array $imageDetailsByTerritory)
    {
        $this->imageDetailsByTerritory = $imageDetailsByTerritory;
        return $this;
    }
}

