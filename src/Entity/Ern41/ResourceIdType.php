<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing ResourceIdType
 *
 * A Composite containing details of ResourceIds.
 * XSD Type: ResourceId
 */
class ResourceIdType
{

    /**
     * The Flag indicating whether this Identifier is old and has been replaced by a new one (=true) or not (=false). The Flag may only be set to True when the new Identifier is also provided. If the Flag is not set, this Identifier is deemed to be the current one.
     *
     * @var bool $isReplaced
     */
    private $isReplaced = null;

    /**
     * The ISRC (International Standard Recording Code as defined in ISO 3901) for the Resource. An ISRC comprises four parts: two characters, followed by three alphanumeric characters, then two digits and five digits. DDEX will enforce the syntax [a-zA-Z]{2}[a-zA-Z0-9]{3}[0-9]{7} using XML Schema in the future.
     *
     * @var string $iSRC
     */
    private $iSRC = null;

    /**
     * The ISMN (International Standard Music Number defined in ISO 10957) for the Resource. An ISMN is a thirteen-digit number. Pre-2008 ISMNs, which had 10 characters and are now deprecated, are converted by replacing the initial letter ('M') with '979-0'. DDEX will enforce the syntax 979[0-9]{9}[X0-9] using XML Schema in the future.
     *
     * @var string $iSMN
     */
    private $iSMN = null;

    /**
     * The ISAN (International Standard Audiovisual Number as defined in ISO 15706) for the Resource. An ISAN comprises four blocks of four hexadecimal charaters followed by a check character. DDEX will enforce the syntax [A-F0-9]{12} using XML Schema in the future.
     *
     * @var string $iSAN
     */
    private $iSAN = null;

    /**
     * The V-ISAN (Version Identifier of a International Standard Audiovisual Number as defined in ISO 15706-2) for the Resource. A V-ISAN comprises four blocks of four hexadecimal charaters followed by a check character, followed by two further blocks of four hexadecimal characters, followed by a further check character. DDEX will enforce the syntax [A-F0-9]{24} using XML Schema in the future.
     *
     * @var string $vISAN
     */
    private $vISAN = null;

    /**
     * The ISBN (International Standard Book Number defined in ISO 2108) for the Resource. An ISBN is a 13-digit number. Pre-2007, ISBNs, which had 10-digits and are now deprecated, are converted by adding the prefix '978' and re-calculating the check character. DDEX will enforce the syntax 97[8-9][0-9]{9}[X0-9] using XML Schema in the future.
     *
     * @var string $iSBN
     */
    private $iSBN = null;

    /**
     * The ISSN (International Standard Serial Number defined in ISO 3297) for the Resource. An ISSN comprises two groups of four digits, separated by a hyphen and a control digit. DDEX will enforce the syntax [0-9]{4}-[0-9]{3}[X0-9] using XML Schema in the future.
     *
     * @var string $iSSN
     */
    private $iSSN = null;

    /**
     * The SICI (Serial Item and Contribution Identifier defined in ANSI/NISO Z39.56-199) for the Resource. DDEX will enforce the syntax [0-9]{4}-[0-9]{3}[X0-9].+ using XML Schema in the future.
     *
     * @var string $sICI
     */
    private $sICI = null;

    /**
     * A Composite containing details of the CatalogNumber of the Resource.
     *
     * @var \DedexBundle\Entity\Ern\CatalogNumberType $catalogNumber
     */
    private $catalogNumber = null;

    /**
     * A Composite containing details of a ProprietaryIdentifier of the Resource.
     *
     * @var \DedexBundle\Entity\Ern\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
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
     * The ISRC (International Standard Recording Code as defined in ISO 3901) for the Resource. An ISRC comprises four parts: two characters, followed by three alphanumeric characters, then two digits and five digits. DDEX will enforce the syntax [a-zA-Z]{2}[a-zA-Z0-9]{3}[0-9]{7} using XML Schema in the future.
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
     * The ISRC (International Standard Recording Code as defined in ISO 3901) for the Resource. An ISRC comprises four parts: two characters, followed by three alphanumeric characters, then two digits and five digits. DDEX will enforce the syntax [a-zA-Z]{2}[a-zA-Z0-9]{3}[0-9]{7} using XML Schema in the future.
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
     * Gets as iSMN
     *
     * The ISMN (International Standard Music Number defined in ISO 10957) for the Resource. An ISMN is a thirteen-digit number. Pre-2008 ISMNs, which had 10 characters and are now deprecated, are converted by replacing the initial letter ('M') with '979-0'. DDEX will enforce the syntax 979[0-9]{9}[X0-9] using XML Schema in the future.
     *
     * @return string
     */
    public function getISMN()
    {
        return $this->iSMN;
    }

    /**
     * Sets a new iSMN
     *
     * The ISMN (International Standard Music Number defined in ISO 10957) for the Resource. An ISMN is a thirteen-digit number. Pre-2008 ISMNs, which had 10 characters and are now deprecated, are converted by replacing the initial letter ('M') with '979-0'. DDEX will enforce the syntax 979[0-9]{9}[X0-9] using XML Schema in the future.
     *
     * @param string $iSMN
     * @return self
     */
    public function setISMN($iSMN)
    {
        $this->iSMN = $iSMN;
        return $this;
    }

    /**
     * Gets as iSAN
     *
     * The ISAN (International Standard Audiovisual Number as defined in ISO 15706) for the Resource. An ISAN comprises four blocks of four hexadecimal charaters followed by a check character. DDEX will enforce the syntax [A-F0-9]{12} using XML Schema in the future.
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
     * The ISAN (International Standard Audiovisual Number as defined in ISO 15706) for the Resource. An ISAN comprises four blocks of four hexadecimal charaters followed by a check character. DDEX will enforce the syntax [A-F0-9]{12} using XML Schema in the future.
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
     * The V-ISAN (Version Identifier of a International Standard Audiovisual Number as defined in ISO 15706-2) for the Resource. A V-ISAN comprises four blocks of four hexadecimal charaters followed by a check character, followed by two further blocks of four hexadecimal characters, followed by a further check character. DDEX will enforce the syntax [A-F0-9]{24} using XML Schema in the future.
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
     * The V-ISAN (Version Identifier of a International Standard Audiovisual Number as defined in ISO 15706-2) for the Resource. A V-ISAN comprises four blocks of four hexadecimal charaters followed by a check character, followed by two further blocks of four hexadecimal characters, followed by a further check character. DDEX will enforce the syntax [A-F0-9]{24} using XML Schema in the future.
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
     * Gets as iSBN
     *
     * The ISBN (International Standard Book Number defined in ISO 2108) for the Resource. An ISBN is a 13-digit number. Pre-2007, ISBNs, which had 10-digits and are now deprecated, are converted by adding the prefix '978' and re-calculating the check character. DDEX will enforce the syntax 97[8-9][0-9]{9}[X0-9] using XML Schema in the future.
     *
     * @return string
     */
    public function getISBN()
    {
        return $this->iSBN;
    }

    /**
     * Sets a new iSBN
     *
     * The ISBN (International Standard Book Number defined in ISO 2108) for the Resource. An ISBN is a 13-digit number. Pre-2007, ISBNs, which had 10-digits and are now deprecated, are converted by adding the prefix '978' and re-calculating the check character. DDEX will enforce the syntax 97[8-9][0-9]{9}[X0-9] using XML Schema in the future.
     *
     * @param string $iSBN
     * @return self
     */
    public function setISBN($iSBN)
    {
        $this->iSBN = $iSBN;
        return $this;
    }

    /**
     * Gets as iSSN
     *
     * The ISSN (International Standard Serial Number defined in ISO 3297) for the Resource. An ISSN comprises two groups of four digits, separated by a hyphen and a control digit. DDEX will enforce the syntax [0-9]{4}-[0-9]{3}[X0-9] using XML Schema in the future.
     *
     * @return string
     */
    public function getISSN()
    {
        return $this->iSSN;
    }

    /**
     * Sets a new iSSN
     *
     * The ISSN (International Standard Serial Number defined in ISO 3297) for the Resource. An ISSN comprises two groups of four digits, separated by a hyphen and a control digit. DDEX will enforce the syntax [0-9]{4}-[0-9]{3}[X0-9] using XML Schema in the future.
     *
     * @param string $iSSN
     * @return self
     */
    public function setISSN($iSSN)
    {
        $this->iSSN = $iSSN;
        return $this;
    }

    /**
     * Gets as sICI
     *
     * The SICI (Serial Item and Contribution Identifier defined in ANSI/NISO Z39.56-199) for the Resource. DDEX will enforce the syntax [0-9]{4}-[0-9]{3}[X0-9].+ using XML Schema in the future.
     *
     * @return string
     */
    public function getSICI()
    {
        return $this->sICI;
    }

    /**
     * Sets a new sICI
     *
     * The SICI (Serial Item and Contribution Identifier defined in ANSI/NISO Z39.56-199) for the Resource. DDEX will enforce the syntax [0-9]{4}-[0-9]{3}[X0-9].+ using XML Schema in the future.
     *
     * @param string $sICI
     * @return self
     */
    public function setSICI($sICI)
    {
        $this->sICI = $sICI;
        return $this;
    }

    /**
     * Gets as catalogNumber
     *
     * A Composite containing details of the CatalogNumber of the Resource.
     *
     * @return \DedexBundle\Entity\Ern\CatalogNumberType
     */
    public function getCatalogNumber()
    {
        return $this->catalogNumber;
    }

    /**
     * Sets a new catalogNumber
     *
     * A Composite containing details of the CatalogNumber of the Resource.
     *
     * @param \DedexBundle\Entity\Ern\CatalogNumberType $catalogNumber
     * @return self
     */
    public function setCatalogNumber(\DedexBundle\Entity\Ern\CatalogNumberType $catalogNumber)
    {
        $this->catalogNumber = $catalogNumber;
        return $this;
    }

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Resource.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\ProprietaryIdType $proprietaryId
     */
    public function addToProprietaryId(\DedexBundle\Entity\Ern\ProprietaryIdType $proprietaryId)
    {
        $this->proprietaryId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Resource.
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
     * A Composite containing details of a ProprietaryIdentifier of the Resource.
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
     * A Composite containing details of a ProprietaryIdentifier of the Resource.
     *
     * @return \DedexBundle\Entity\Ern\ProprietaryIdType[]
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Resource.
     *
     * @param \DedexBundle\Entity\Ern\ProprietaryIdType[] $proprietaryId
     * @return self
     */
    public function setProprietaryId(array $proprietaryId)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }


}

