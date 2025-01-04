<?php

namespace DedexBundle\Entity\Ern383;

/**
 * Class representing CollectionIdType
 *
 * A Composite containing details of a
 *  CollectionId.
 * XSD Type: CollectionId
 */
class CollectionIdType
{
    /**
     * The Flag indicating whether this Identifier
     *  is old and has been replaced by a new one (=true) or not (=false). The Flag may only
     *  be set to True when the new Identifier is also provided. If the Flag is not set, this
     *  Identifier is deemed to be the current one.
     *
     * @var bool $isReplaced
     */
    private $isReplaced = null;

    /**
     * The GRid identifying the Collection. This
     *  is the preferred Element and is mandatory if a GRid is available. A GRid comprises
     *  four parts: the xs:string 'A1', followed by five alphanumeric characters, ten
     *  alphanumeric characters and and one alphanumeric character. DDEX will enforce the
     *  syntax [a-zA-Z0-9]{18} using XML Schema in the future.
     *
     * @var string $gRid
     */
    private $gRid = null;

    /**
     * The ISRC (International Standard Recording
     *  Code as defined in ISO 3901) for the Collection. An ISRC comprises four parts: two
     *  characters, followed by three alphanumeric characters, then two digits and five
     *  digits. DDEX will enforce the syntax [a-zA-Z]{2}[a-zA-Z0-9]{3}[0-9]{7} using XML
     *  Schema in the future.
     *
     * @var string $iSRC
     */
    private $iSRC = null;

    /**
     * The ISAN (International Standard
     *  Audiovisual Number as defined in ISO 15706) for the Collection. An ISAN comprises
     *  four blocks of four hexadecimal charaters followed by a check character. DDEX will
     *  enforce the syntax [A-F0-9]{12} using XML Schema in the future.
     *
     * @var string $iSAN
     */
    private $iSAN = null;

    /**
     * The V-ISAN (Version Identifier of a
     *  International Standard Audiovisual Number as defined in ISO 15706-2) for the
     *  Collection. A V-ISAN comprises four blocks of four hexadecimal charaters followed
     *  by a check character, followed by two further blocks of four hexadecimal
     *  characters, followed by a further check character. DDEX will enforce the syntax
     *  [A-F0-9]{24} using XML Schema in the future.
     *
     * @var string $vISAN
     */
    private $vISAN = null;

    /**
     * A Composite containing details of the ICPN
     *  used as proxy for identification of the Collection. Only applicable when the
     *  Collection is an abstraction of a complete PhysicalProduct. An ICPN comprises 12
     *  or 13 digits, depending whether it is an EAN (13) or a UPC (12). DDEX will enforce
     *  the syntax [0-9]{12,13} using XML Schema in the future.
     *
     * @var \DedexBundle\Entity\Ern383\ICPNType $iCPN
     */
    private $iCPN = null;

    /**
     * A Composite containing details of the
     *  CatalogNumber of the Collection.
     *
     * @var \DedexBundle\Entity\Ern383\CatalogNumberType $catalogNumber
     */
    private $catalogNumber = null;

    /**
     * A Composite containing details of a
     *  ProprietaryIdentifier of the Collection (usually one per society involved in the
     *  messaging).
     *
     * @var \DedexBundle\Entity\Ern383\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * Gets as isReplaced
     *
     * The Flag indicating whether this Identifier
     *  is old and has been replaced by a new one (=true) or not (=false). The Flag may only
     *  be set to True when the new Identifier is also provided. If the Flag is not set, this
     *  Identifier is deemed to be the current one.
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
     * The Flag indicating whether this Identifier
     *  is old and has been replaced by a new one (=true) or not (=false). The Flag may only
     *  be set to True when the new Identifier is also provided. If the Flag is not set, this
     *  Identifier is deemed to be the current one.
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
     * The GRid identifying the Collection. This
     *  is the preferred Element and is mandatory if a GRid is available. A GRid comprises
     *  four parts: the xs:string 'A1', followed by five alphanumeric characters, ten
     *  alphanumeric characters and and one alphanumeric character. DDEX will enforce the
     *  syntax [a-zA-Z0-9]{18} using XML Schema in the future.
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
     * The GRid identifying the Collection. This
     *  is the preferred Element and is mandatory if a GRid is available. A GRid comprises
     *  four parts: the xs:string 'A1', followed by five alphanumeric characters, ten
     *  alphanumeric characters and and one alphanumeric character. DDEX will enforce the
     *  syntax [a-zA-Z0-9]{18} using XML Schema in the future.
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
     * The ISRC (International Standard Recording
     *  Code as defined in ISO 3901) for the Collection. An ISRC comprises four parts: two
     *  characters, followed by three alphanumeric characters, then two digits and five
     *  digits. DDEX will enforce the syntax [a-zA-Z]{2}[a-zA-Z0-9]{3}[0-9]{7} using XML
     *  Schema in the future.
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
     * The ISRC (International Standard Recording
     *  Code as defined in ISO 3901) for the Collection. An ISRC comprises four parts: two
     *  characters, followed by three alphanumeric characters, then two digits and five
     *  digits. DDEX will enforce the syntax [a-zA-Z]{2}[a-zA-Z0-9]{3}[0-9]{7} using XML
     *  Schema in the future.
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
     * The ISAN (International Standard
     *  Audiovisual Number as defined in ISO 15706) for the Collection. An ISAN comprises
     *  four blocks of four hexadecimal charaters followed by a check character. DDEX will
     *  enforce the syntax [A-F0-9]{12} using XML Schema in the future.
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
     * The ISAN (International Standard
     *  Audiovisual Number as defined in ISO 15706) for the Collection. An ISAN comprises
     *  four blocks of four hexadecimal charaters followed by a check character. DDEX will
     *  enforce the syntax [A-F0-9]{12} using XML Schema in the future.
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
     * The V-ISAN (Version Identifier of a
     *  International Standard Audiovisual Number as defined in ISO 15706-2) for the
     *  Collection. A V-ISAN comprises four blocks of four hexadecimal charaters followed
     *  by a check character, followed by two further blocks of four hexadecimal
     *  characters, followed by a further check character. DDEX will enforce the syntax
     *  [A-F0-9]{24} using XML Schema in the future.
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
     * The V-ISAN (Version Identifier of a
     *  International Standard Audiovisual Number as defined in ISO 15706-2) for the
     *  Collection. A V-ISAN comprises four blocks of four hexadecimal charaters followed
     *  by a check character, followed by two further blocks of four hexadecimal
     *  characters, followed by a further check character. DDEX will enforce the syntax
     *  [A-F0-9]{24} using XML Schema in the future.
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
     * A Composite containing details of the ICPN
     *  used as proxy for identification of the Collection. Only applicable when the
     *  Collection is an abstraction of a complete PhysicalProduct. An ICPN comprises 12
     *  or 13 digits, depending whether it is an EAN (13) or a UPC (12). DDEX will enforce
     *  the syntax [0-9]{12,13} using XML Schema in the future.
     *
     * @return \DedexBundle\Entity\Ern383\ICPNType
     */
    public function getICPN()
    {
        return $this->iCPN;
    }

    /**
     * Sets a new iCPN
     *
     * A Composite containing details of the ICPN
     *  used as proxy for identification of the Collection. Only applicable when the
     *  Collection is an abstraction of a complete PhysicalProduct. An ICPN comprises 12
     *  or 13 digits, depending whether it is an EAN (13) or a UPC (12). DDEX will enforce
     *  the syntax [0-9]{12,13} using XML Schema in the future.
     *
     * @param \DedexBundle\Entity\Ern383\ICPNType $iCPN
     * @return self
     */
    public function setICPN(?\DedexBundle\Entity\Ern383\ICPNType $iCPN = null)
    {
        $this->iCPN = $iCPN;
        return $this;
    }

    /**
     * Gets as catalogNumber
     *
     * A Composite containing details of the
     *  CatalogNumber of the Collection.
     *
     * @return \DedexBundle\Entity\Ern383\CatalogNumberType
     */
    public function getCatalogNumber()
    {
        return $this->catalogNumber;
    }

    /**
     * Sets a new catalogNumber
     *
     * A Composite containing details of the
     *  CatalogNumber of the Collection.
     *
     * @param \DedexBundle\Entity\Ern383\CatalogNumberType $catalogNumber
     * @return self
     */
    public function setCatalogNumber(?\DedexBundle\Entity\Ern383\CatalogNumberType $catalogNumber = null)
    {
        $this->catalogNumber = $catalogNumber;
        return $this;
    }

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of a
     *  ProprietaryIdentifier of the Collection (usually one per society involved in the
     *  messaging).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern383\ProprietaryIdType $proprietaryId
     */
    public function addToProprietaryId(\DedexBundle\Entity\Ern383\ProprietaryIdType $proprietaryId)
    {
        $this->proprietaryId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset proprietaryId
     *
     * A Composite containing details of a
     *  ProprietaryIdentifier of the Collection (usually one per society involved in the
     *  messaging).
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
     * A Composite containing details of a
     *  ProprietaryIdentifier of the Collection (usually one per society involved in the
     *  messaging).
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
     * A Composite containing details of a
     *  ProprietaryIdentifier of the Collection (usually one per society involved in the
     *  messaging).
     *
     * @return \DedexBundle\Entity\Ern383\ProprietaryIdType[]
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A Composite containing details of a
     *  ProprietaryIdentifier of the Collection (usually one per society involved in the
     *  messaging).
     *
     * @param \DedexBundle\Entity\Ern383\ProprietaryIdType[] $proprietaryId
     * @return self
     */
    public function setProprietaryId(array $proprietaryId = null)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }
}

