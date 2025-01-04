<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing VideoIdType
 *
 * A Composite containing details of Identifiers of a Video.
 * XSD Type: VideoId
 */
class VideoIdType
{
    /**
     * The Flag indicating whether this Identifier is old and has been replaced by a new one (=true) or not (=false). The Flag may only be set to True when the new Identifier is also provided. If the Flag is not set, this Identifier is deemed to be the current one.
     *
     * @var bool $isReplaced
     */
    private $isReplaced = null;

    /**
     * The ISRC (International Standard Recording Code as defined in ISO 3901) for the Video. An ISRC comprises four parts: two characters, followed by three alphanumeric characters, then two digits and five digits. DDEX will enforce the syntax [a-zA-Z]{2}[a-zA-Z0-9]{3}[0-9]{7} using XML Schema in the future.
     *
     * @var string $iSRC
     */
    private $iSRC = null;

    /**
     * The ISAN (International Standard Audiovisual Number as defined in ISO 15706) for the Video. An ISAN comprises four blocks of four hexadecimal charaters followed by a check character. DDEX will enforce the syntax [A-F0-9]{12} using XML Schema in the future.
     *
     * @var string $iSAN
     */
    private $iSAN = null;

    /**
     * The V-ISAN (Version Identifier of a International Standard Audiovisual Number as defined in ISO 15706-2) for the Video. A V-ISAN comprises four blocks of four hexadecimal charaters followed by a check character, followed by two further blocks of four hexadecimal characters, followed by a further check character. DDEX will enforce the syntax [A-F0-9]{24} using XML Schema in the future.
     *
     * @var string $vISAN
     */
    private $vISAN = null;

    /**
     * A Composite containing details of the CatalogNumber of the Video.
     *
     * @var \DedexBundle\Entity\Ern43\CatalogNumberType $catalogNumber
     */
    private $catalogNumber = null;

    /**
     * A Composite containing details of a ProprietaryIdentifier of the Video (usually one per society involved in the messaging).
     *
     * @var \DedexBundle\Entity\Ern43\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * An Identifier of the Video assigned by the Entertainment Identifier Registry Association (EIDR).
     *
     * @var string[] $eIDR
     */
    private $eIDR = [
        
    ];

    /**
     * Gets as isReplaced
     *
     * The Flag indicating whether this Identifier is old and has been replaced by a new one (=true) or not (=false). The Flag may only be set to True when the new Identifier is also provided. If the Flag is not set, this Identifier is deemed to be the current one.
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
     * The Flag indicating whether this Identifier is old and has been replaced by a new one (=true) or not (=false). The Flag may only be set to True when the new Identifier is also provided. If the Flag is not set, this Identifier is deemed to be the current one.
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
     * Gets as iSRC
     *
     * The ISRC (International Standard Recording Code as defined in ISO 3901) for the Video. An ISRC comprises four parts: two characters, followed by three alphanumeric characters, then two digits and five digits. DDEX will enforce the syntax [a-zA-Z]{2}[a-zA-Z0-9]{3}[0-9]{7} using XML Schema in the future.
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
     * The ISRC (International Standard Recording Code as defined in ISO 3901) for the Video. An ISRC comprises four parts: two characters, followed by three alphanumeric characters, then two digits and five digits. DDEX will enforce the syntax [a-zA-Z]{2}[a-zA-Z0-9]{3}[0-9]{7} using XML Schema in the future.
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
     * The ISAN (International Standard Audiovisual Number as defined in ISO 15706) for the Video. An ISAN comprises four blocks of four hexadecimal charaters followed by a check character. DDEX will enforce the syntax [A-F0-9]{12} using XML Schema in the future.
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
     * The ISAN (International Standard Audiovisual Number as defined in ISO 15706) for the Video. An ISAN comprises four blocks of four hexadecimal charaters followed by a check character. DDEX will enforce the syntax [A-F0-9]{12} using XML Schema in the future.
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
     * The V-ISAN (Version Identifier of a International Standard Audiovisual Number as defined in ISO 15706-2) for the Video. A V-ISAN comprises four blocks of four hexadecimal charaters followed by a check character, followed by two further blocks of four hexadecimal characters, followed by a further check character. DDEX will enforce the syntax [A-F0-9]{24} using XML Schema in the future.
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
     * The V-ISAN (Version Identifier of a International Standard Audiovisual Number as defined in ISO 15706-2) for the Video. A V-ISAN comprises four blocks of four hexadecimal charaters followed by a check character, followed by two further blocks of four hexadecimal characters, followed by a further check character. DDEX will enforce the syntax [A-F0-9]{24} using XML Schema in the future.
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
     * Gets as catalogNumber
     *
     * A Composite containing details of the CatalogNumber of the Video.
     *
     * @return \DedexBundle\Entity\Ern43\CatalogNumberType
     */
    public function getCatalogNumber()
    {
        return $this->catalogNumber;
    }

    /**
     * Sets a new catalogNumber
     *
     * A Composite containing details of the CatalogNumber of the Video.
     *
     * @param \DedexBundle\Entity\Ern43\CatalogNumberType $catalogNumber
     * @return self
     */
    public function setCatalogNumber(?\DedexBundle\Entity\Ern43\CatalogNumberType $catalogNumber = null)
    {
        $this->catalogNumber = $catalogNumber;
        return $this;
    }

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Video (usually one per society involved in the messaging).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern43\ProprietaryIdType $proprietaryId
     */
    public function addToProprietaryId(\DedexBundle\Entity\Ern43\ProprietaryIdType $proprietaryId)
    {
        $this->proprietaryId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Video (usually one per society involved in the messaging).
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
     * A Composite containing details of a ProprietaryIdentifier of the Video (usually one per society involved in the messaging).
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
     * A Composite containing details of a ProprietaryIdentifier of the Video (usually one per society involved in the messaging).
     *
     * @return \DedexBundle\Entity\Ern43\ProprietaryIdType[]
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Video (usually one per society involved in the messaging).
     *
     * @param \DedexBundle\Entity\Ern43\ProprietaryIdType[] $proprietaryId
     * @return self
     */
    public function setProprietaryId(array $proprietaryId = null)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }

    /**
     * Adds as eIDR
     *
     * An Identifier of the Video assigned by the Entertainment Identifier Registry Association (EIDR).
     *
     * @return self
     * @param string $eIDR
     */
    public function addToEIDR($eIDR)
    {
        $this->eIDR[] = $eIDR;
        return $this;
    }

    /**
     * isset eIDR
     *
     * An Identifier of the Video assigned by the Entertainment Identifier Registry Association (EIDR).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEIDR($index)
    {
        return isset($this->eIDR[$index]);
    }

    /**
     * unset eIDR
     *
     * An Identifier of the Video assigned by the Entertainment Identifier Registry Association (EIDR).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEIDR($index)
    {
        unset($this->eIDR[$index]);
    }

    /**
     * Gets as eIDR
     *
     * An Identifier of the Video assigned by the Entertainment Identifier Registry Association (EIDR).
     *
     * @return string[]
     */
    public function getEIDR()
    {
        return $this->eIDR;
    }

    /**
     * Sets a new eIDR
     *
     * An Identifier of the Video assigned by the Entertainment Identifier Registry Association (EIDR).
     *
     * @param string[] $eIDR
     * @return self
     */
    public function setEIDR(array $eIDR = null)
    {
        $this->eIDR = $eIDR;
        return $this;
    }
}

