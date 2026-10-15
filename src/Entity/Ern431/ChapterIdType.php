<?php

namespace DedexBundle\Entity\Ern431;

/**
 * Class representing ChapterIdType
 *
 * A Composite containing details of ChapterIds.
 * XSD Type: ChapterId
 */
class ChapterIdType
{
    /**
     * The ISRC (International Standard Recording Code as defined in ISO 3901) for the Chapter. An ISRC comprises four parts: two characters, followed by three alphanumeric characters, then two digits and five digits. DDEX will enforce the syntax [a-zA-Z]{2}[a-zA-Z0-9]{3}[0-9]{7} in the future.
     *
     * @var string $iSRC
     */
    private $iSRC = null;

    /**
     * The ISAN (International Standard Audiovisual Number as defined in ISO 15706) for the Chapter. An ISAN comprises four blocks of four hexadecimal charaters followed by a check character. DDEX will enforce the syntax [A-F0-9]{12} in the future.
     *
     * @var string $iSAN
     */
    private $iSAN = null;

    /**
     * The V-ISAN (Version Identifier of an International Standard Audiovisual Number as defined in ISO 15706-2) for the Chapter. A V-ISAN comprises four blocks of four hexadecimal charaters followed by a check character, followed by two further blocks of four hexadecimal characters, followed by a further check character. DDEX will enforce the syntax [A-F0-9]{24} in the future.
     *
     * @var string $vISAN
     */
    private $vISAN = null;

    /**
     * An Identifier of the Chapter assigned by the Entertainment Identifier Registry Association (EIDR).
     *
     * @var string[] $eIDR
     */
    private $eIDR = [
        
    ];

    /**
     * The ISWC (International Standard Musical Work Code defined in ISO 15707) identifying the Chapter. An ISWC comprises three parts: the letter 'T', followed by nine digits and then one check digit. DDEX will enforce the syntax [a-zA-Z][0-9]{10} in the future.
     *
     * @var string $iSWC
     */
    private $iSWC = null;

    /**
     * A Composite containing details of the CatalogNumber of the Chapter.
     *
     * @var \DedexBundle\Entity\Ern431\CatalogNumberType $catalogNumber
     */
    private $catalogNumber = null;

    /**
     * A Composite containing details of a ProprietaryIdentifier of the Chapter.
     *
     * @var \DedexBundle\Entity\Ern431\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * Gets as iSRC
     *
     * The ISRC (International Standard Recording Code as defined in ISO 3901) for the Chapter. An ISRC comprises four parts: two characters, followed by three alphanumeric characters, then two digits and five digits. DDEX will enforce the syntax [a-zA-Z]{2}[a-zA-Z0-9]{3}[0-9]{7} in the future.
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
     * The ISRC (International Standard Recording Code as defined in ISO 3901) for the Chapter. An ISRC comprises four parts: two characters, followed by three alphanumeric characters, then two digits and five digits. DDEX will enforce the syntax [a-zA-Z]{2}[a-zA-Z0-9]{3}[0-9]{7} in the future.
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
     * The ISAN (International Standard Audiovisual Number as defined in ISO 15706) for the Chapter. An ISAN comprises four blocks of four hexadecimal charaters followed by a check character. DDEX will enforce the syntax [A-F0-9]{12} in the future.
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
     * The ISAN (International Standard Audiovisual Number as defined in ISO 15706) for the Chapter. An ISAN comprises four blocks of four hexadecimal charaters followed by a check character. DDEX will enforce the syntax [A-F0-9]{12} in the future.
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
     * The V-ISAN (Version Identifier of an International Standard Audiovisual Number as defined in ISO 15706-2) for the Chapter. A V-ISAN comprises four blocks of four hexadecimal charaters followed by a check character, followed by two further blocks of four hexadecimal characters, followed by a further check character. DDEX will enforce the syntax [A-F0-9]{24} in the future.
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
     * The V-ISAN (Version Identifier of an International Standard Audiovisual Number as defined in ISO 15706-2) for the Chapter. A V-ISAN comprises four blocks of four hexadecimal charaters followed by a check character, followed by two further blocks of four hexadecimal characters, followed by a further check character. DDEX will enforce the syntax [A-F0-9]{24} in the future.
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
     * Adds as eIDR
     *
     * An Identifier of the Chapter assigned by the Entertainment Identifier Registry Association (EIDR).
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
     * An Identifier of the Chapter assigned by the Entertainment Identifier Registry Association (EIDR).
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
     * An Identifier of the Chapter assigned by the Entertainment Identifier Registry Association (EIDR).
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
     * An Identifier of the Chapter assigned by the Entertainment Identifier Registry Association (EIDR).
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
     * An Identifier of the Chapter assigned by the Entertainment Identifier Registry Association (EIDR).
     *
     * @param string[] $eIDR
     * @return self
     */
    public function setEIDR(?array $eIDR = null)
    {
        $this->eIDR = $eIDR;
        return $this;
    }

    /**
     * Gets as iSWC
     *
     * The ISWC (International Standard Musical Work Code defined in ISO 15707) identifying the Chapter. An ISWC comprises three parts: the letter 'T', followed by nine digits and then one check digit. DDEX will enforce the syntax [a-zA-Z][0-9]{10} in the future.
     *
     * @return string
     */
    public function getISWC()
    {
        return $this->iSWC;
    }

    /**
     * Sets a new iSWC
     *
     * The ISWC (International Standard Musical Work Code defined in ISO 15707) identifying the Chapter. An ISWC comprises three parts: the letter 'T', followed by nine digits and then one check digit. DDEX will enforce the syntax [a-zA-Z][0-9]{10} in the future.
     *
     * @param string $iSWC
     * @return self
     */
    public function setISWC($iSWC)
    {
        $this->iSWC = $iSWC;
        return $this;
    }

    /**
     * Gets as catalogNumber
     *
     * A Composite containing details of the CatalogNumber of the Chapter.
     *
     * @return \DedexBundle\Entity\Ern431\CatalogNumberType
     */
    public function getCatalogNumber()
    {
        return $this->catalogNumber;
    }

    /**
     * Sets a new catalogNumber
     *
     * A Composite containing details of the CatalogNumber of the Chapter.
     *
     * @param \DedexBundle\Entity\Ern431\CatalogNumberType $catalogNumber
     * @return self
     */
    public function setCatalogNumber(?\DedexBundle\Entity\Ern431\CatalogNumberType $catalogNumber = null)
    {
        $this->catalogNumber = $catalogNumber;
        return $this;
    }

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Chapter.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern431\ProprietaryIdType $proprietaryId
     */
    public function addToProprietaryId(\DedexBundle\Entity\Ern431\ProprietaryIdType $proprietaryId)
    {
        $this->proprietaryId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Chapter.
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
     * A Composite containing details of a ProprietaryIdentifier of the Chapter.
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
     * A Composite containing details of a ProprietaryIdentifier of the Chapter.
     *
     * @return \DedexBundle\Entity\Ern431\ProprietaryIdType[]
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Chapter.
     *
     * @param \DedexBundle\Entity\Ern431\ProprietaryIdType[] $proprietaryId
     * @return self
     */
    public function setProprietaryId(?array $proprietaryId = null)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }
}

