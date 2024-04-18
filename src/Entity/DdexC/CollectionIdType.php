<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing CollectionIdType
 *
 * A ddex:Composite containing details of a CollectionId.
 * XSD Type: CollectionId
 */
class CollectionIdType
{
    /**
     * The ddex:Flag indicating whether this ddex:Identifier is old and has been replaced by a new one (=True) or not (=False). The ddex:Flag may only be set to True when the new ddex:Identifier is also provided. If the ddex:Flag is not set, this ddex:Identifier is deemed to be the current one.
     *
     * @var bool $isReplaced
     */
    private $isReplaced = null;

    /**
     * The ddex:GRid identifying the ddex:Collection. This is the preferred ddex:Element and is mandatory if a ddex:GRid is available. A ddex:GRid comprises four parts: the xs:string 'A1', followed by five alphanumeric characters, ten alphanumeric characters and and one alphanumeric character.
     *
     * @var string $gRid
     */
    private $gRid = null;

    /**
     * The ddex:ISRC (International Standard ddex:Recording Code as defined in ISO 3901) for the ddex:Collection. An ddex:ISRC comprises four parts: two characters, followed by three alphanumeric characters, then two digits and five digits.
     *
     * @var string $iSRC
     */
    private $iSRC = null;

    /**
     * The ddex:ISAN (International Standard Audiovisual Number as defined in ISO 15706) for the ddex:Collection. An ddex:ISAN comprises four blocks of four hexadecimal charaters followed by a check character.
     *
     * @var string $iSAN
     */
    private $iSAN = null;

    /**
     * The V-ISAN (Version ddex:Identifier of a International Standard Audiovisual Number as defined in ISO 15706-2) for the ddex:Collection. A V-ISAN comprises four blocks of four hexadecimal charaters followed by a check character, followed by two further blocks of four hexadecimal characters, followed by a further check character.
     *
     * @var string $vISAN
     */
    private $vISAN = null;

    /**
     * A ddex:Composite containing details of the ddex:ICPN used as proxy for identification of the ddex:Collection. Only applicable when the ddex:Collection is an abstraction of a complete ddex:PhysicalProduct. An ddex:ICPN comprises 12 or 13 digits, depending whether it is an ddex:EAN (13) or a ddex:UPC (12).
     *
     * @var \DedexBundle\Entity\DdexC\ICPNType $iCPN
     */
    private $iCPN = null;

    /**
     * A ddex:Composite containing details of the ddex:CatalogNumber of the ddex:Collection.
     *
     * @var \DedexBundle\Entity\DdexC\CatalogNumberType $catalogNumber
     */
    private $catalogNumber = null;

    /**
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:Collection (usually one per society involved in the messaging).
     *
     * @var \DedexBundle\Entity\DdexC\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * Gets as isReplaced
     *
     * The ddex:Flag indicating whether this ddex:Identifier is old and has been replaced by a new one (=True) or not (=False). The ddex:Flag may only be set to True when the new ddex:Identifier is also provided. If the ddex:Flag is not set, this ddex:Identifier is deemed to be the current one.
     *
     * @return bool
     */
    public function getIsReplaced()
    {
        return $this->isReplaced;
    }

    /**
     * Sets a new isReplaced
     *
     * The ddex:Flag indicating whether this ddex:Identifier is old and has been replaced by a new one (=True) or not (=False). The ddex:Flag may only be set to True when the new ddex:Identifier is also provided. If the ddex:Flag is not set, this ddex:Identifier is deemed to be the current one.
     *
     * @param bool $isReplaced
     * @return self
     */
    public function setIsReplaced($isReplaced)
    {
        $this->isReplaced = $isReplaced;
        return $this;
    }

    /**
     * Gets as gRid
     *
     * The ddex:GRid identifying the ddex:Collection. This is the preferred ddex:Element and is mandatory if a ddex:GRid is available. A ddex:GRid comprises four parts: the xs:string 'A1', followed by five alphanumeric characters, ten alphanumeric characters and and one alphanumeric character.
     *
     * @return string
     */
    public function getGRid()
    {
        return $this->gRid;
    }

    /**
     * Sets a new gRid
     *
     * The ddex:GRid identifying the ddex:Collection. This is the preferred ddex:Element and is mandatory if a ddex:GRid is available. A ddex:GRid comprises four parts: the xs:string 'A1', followed by five alphanumeric characters, ten alphanumeric characters and and one alphanumeric character.
     *
     * @param string $gRid
     * @return self
     */
    public function setGRid($gRid)
    {
        $this->gRid = $gRid;
        return $this;
    }

    /**
     * Gets as iSRC
     *
     * The ddex:ISRC (International Standard ddex:Recording Code as defined in ISO 3901) for the ddex:Collection. An ddex:ISRC comprises four parts: two characters, followed by three alphanumeric characters, then two digits and five digits.
     *
     * @return string
     */
    public function getISRC()
    {
        return $this->iSRC;
    }

    /**
     * Sets a new iSRC
     *
     * The ddex:ISRC (International Standard ddex:Recording Code as defined in ISO 3901) for the ddex:Collection. An ddex:ISRC comprises four parts: two characters, followed by three alphanumeric characters, then two digits and five digits.
     *
     * @param string $iSRC
     * @return self
     */
    public function setISRC($iSRC)
    {
        $this->iSRC = $iSRC;
        return $this;
    }

    /**
     * Gets as iSAN
     *
     * The ddex:ISAN (International Standard Audiovisual Number as defined in ISO 15706) for the ddex:Collection. An ddex:ISAN comprises four blocks of four hexadecimal charaters followed by a check character.
     *
     * @return string
     */
    public function getISAN()
    {
        return $this->iSAN;
    }

    /**
     * Sets a new iSAN
     *
     * The ddex:ISAN (International Standard Audiovisual Number as defined in ISO 15706) for the ddex:Collection. An ddex:ISAN comprises four blocks of four hexadecimal charaters followed by a check character.
     *
     * @param string $iSAN
     * @return self
     */
    public function setISAN($iSAN)
    {
        $this->iSAN = $iSAN;
        return $this;
    }

    /**
     * Gets as vISAN
     *
     * The V-ISAN (Version ddex:Identifier of a International Standard Audiovisual Number as defined in ISO 15706-2) for the ddex:Collection. A V-ISAN comprises four blocks of four hexadecimal charaters followed by a check character, followed by two further blocks of four hexadecimal characters, followed by a further check character.
     *
     * @return string
     */
    public function getVISAN()
    {
        return $this->vISAN;
    }

    /**
     * Sets a new vISAN
     *
     * The V-ISAN (Version ddex:Identifier of a International Standard Audiovisual Number as defined in ISO 15706-2) for the ddex:Collection. A V-ISAN comprises four blocks of four hexadecimal charaters followed by a check character, followed by two further blocks of four hexadecimal characters, followed by a further check character.
     *
     * @param string $vISAN
     * @return self
     */
    public function setVISAN($vISAN)
    {
        $this->vISAN = $vISAN;
        return $this;
    }

    /**
     * Gets as iCPN
     *
     * A ddex:Composite containing details of the ddex:ICPN used as proxy for identification of the ddex:Collection. Only applicable when the ddex:Collection is an abstraction of a complete ddex:PhysicalProduct. An ddex:ICPN comprises 12 or 13 digits, depending whether it is an ddex:EAN (13) or a ddex:UPC (12).
     *
     * @return \DedexBundle\Entity\DdexC\ICPNType
     */
    public function getICPN()
    {
        return $this->iCPN;
    }

    /**
     * Sets a new iCPN
     *
     * A ddex:Composite containing details of the ddex:ICPN used as proxy for identification of the ddex:Collection. Only applicable when the ddex:Collection is an abstraction of a complete ddex:PhysicalProduct. An ddex:ICPN comprises 12 or 13 digits, depending whether it is an ddex:EAN (13) or a ddex:UPC (12).
     *
     * @param \DedexBundle\Entity\DdexC\ICPNType $iCPN
     * @return self
     */
    public function setICPN(?\DedexBundle\Entity\DdexC\ICPNType $iCPN = null)
    {
        $this->iCPN = $iCPN;
        return $this;
    }

    /**
     * Gets as catalogNumber
     *
     * A ddex:Composite containing details of the ddex:CatalogNumber of the ddex:Collection.
     *
     * @return \DedexBundle\Entity\DdexC\CatalogNumberType
     */
    public function getCatalogNumber()
    {
        return $this->catalogNumber;
    }

    /**
     * Sets a new catalogNumber
     *
     * A ddex:Composite containing details of the ddex:CatalogNumber of the ddex:Collection.
     *
     * @param \DedexBundle\Entity\DdexC\CatalogNumberType $catalogNumber
     * @return self
     */
    public function setCatalogNumber(?\DedexBundle\Entity\DdexC\CatalogNumberType $catalogNumber = null)
    {
        $this->catalogNumber = $catalogNumber;
        return $this;
    }

    /**
     * Adds as proprietaryId
     *
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:Collection (usually one per society involved in the messaging).
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ProprietaryIdType $proprietaryId
     */
    public function addToProprietaryId(\DedexBundle\Entity\DdexC\ProprietaryIdType $proprietaryId)
    {
        $this->proprietaryId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset proprietaryId
     *
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:Collection (usually one per society involved in the messaging).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProprietaryId($index)
    {
        return isset($this->proprietaryId[$index]);
    }

    /**
     * unset proprietaryId
     *
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:Collection (usually one per society involved in the messaging).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProprietaryId($index)
    {
        unset($this->proprietaryId[$index]);
    }

    /**
     * Gets as proprietaryId
     *
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:Collection (usually one per society involved in the messaging).
     *
     * @return \DedexBundle\Entity\DdexC\ProprietaryIdType[]
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:Collection (usually one per society involved in the messaging).
     *
     * @param \DedexBundle\Entity\DdexC\ProprietaryIdType[] $proprietaryId
     * @return self
     */
    public function setProprietaryId(array $proprietaryId = null)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }
}

