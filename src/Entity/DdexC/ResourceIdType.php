<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing ResourceIdType
 *
 * A ddex:Composite containing details of ddex:ResourceIds.
 * XSD Type: ResourceId
 */
class ResourceIdType
{
    /**
     * The ddex:Flag indicating whether this ddex:Identifier is old and has been replaced by a new one (=True) or not (=False). The ddex:Flag may only be set to True when the new ddex:Identifier is also provided. If the ddex:Flag is not set, this ddex:Identifier is deemed to be the current one.
     *
     * @var bool $isReplaced
     */
    private $isReplaced = null;

    /**
     * The ddex:ISRC (International Standard ddex:Recording Code as defined in ISO 3901) for the ddex:Resource. An ddex:ISRC comprises four parts: two characters, followed by three alphanumeric characters, then two digits and five digits.
     *
     * @var string $iSRC
     */
    private $iSRC = null;

    /**
     * The ddex:ISMN (International Standard Music Number defined in ISO 10957) for the ddex:Resource. An ddex:ISMN is a thirteen-digit number. Pre-2008 ddex:ISMNs, which had 10 characters and are now deprecated, are converted by replacing the initial letter ('M') with '979-0'.
     *
     * @var string $iSMN
     */
    private $iSMN = null;

    /**
     * The ddex:ISAN (International Standard Audiovisual Number as defined in ISO 15706) for the ddex:Resource. An ddex:ISAN comprises four blocks of four hexadecimal charaters followed by a check character.
     *
     * @var string $iSAN
     */
    private $iSAN = null;

    /**
     * The V-ISAN (Version ddex:Identifier of a International Standard Audiovisual Number as defined in ISO 15706-2) for the ddex:Resource. A V-ISAN comprises four blocks of four hexadecimal charaters followed by a check character, followed by two further blocks of four hexadecimal characters, followed by a further check character.
     *
     * @var string $vISAN
     */
    private $vISAN = null;

    /**
     * The ddex:ISBN (International Standard Book Number defined in ISO 2108) for the ddex:Resource. An ddex:ISBN is a 13-digit number. Pre-2007, ddex:ISBNs, which had 10-digits and are now deprecated, are converted by adding the prefix '978' and re-calculating the check character.
     *
     * @var string $iSBN
     */
    private $iSBN = null;

    /**
     * The ddex:ISSN (International Standard Serial Number defined in ISO 3297) for the ddex:Resource. An ddex:ISSN comprises two groups of four digits, separated by a hyphen and a control digit.
     *
     * @var string $iSSN
     */
    private $iSSN = null;

    /**
     * The ddex:SICI (Serial Item and Contribution ddex:Identifier defined in ANSI/NISO Z39.56-199) for the ddex:Resource.
     *
     * @var string $sICI
     */
    private $sICI = null;

    /**
     * A ddex:Composite containing details of the ddex:CatalogNumber of the ddex:Resource.
     *
     * @var \DedexBundle\Entity\DdexC\CatalogNumberType $catalogNumber
     */
    private $catalogNumber = null;

    /**
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:Resource.
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
     * Gets as iSRC
     *
     * The ddex:ISRC (International Standard ddex:Recording Code as defined in ISO 3901) for the ddex:Resource. An ddex:ISRC comprises four parts: two characters, followed by three alphanumeric characters, then two digits and five digits.
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
     * The ddex:ISRC (International Standard ddex:Recording Code as defined in ISO 3901) for the ddex:Resource. An ddex:ISRC comprises four parts: two characters, followed by three alphanumeric characters, then two digits and five digits.
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
     * The ddex:ISMN (International Standard Music Number defined in ISO 10957) for the ddex:Resource. An ddex:ISMN is a thirteen-digit number. Pre-2008 ddex:ISMNs, which had 10 characters and are now deprecated, are converted by replacing the initial letter ('M') with '979-0'.
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
     * The ddex:ISMN (International Standard Music Number defined in ISO 10957) for the ddex:Resource. An ddex:ISMN is a thirteen-digit number. Pre-2008 ddex:ISMNs, which had 10 characters and are now deprecated, are converted by replacing the initial letter ('M') with '979-0'.
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
     * The ddex:ISAN (International Standard Audiovisual Number as defined in ISO 15706) for the ddex:Resource. An ddex:ISAN comprises four blocks of four hexadecimal charaters followed by a check character.
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
     * The ddex:ISAN (International Standard Audiovisual Number as defined in ISO 15706) for the ddex:Resource. An ddex:ISAN comprises four blocks of four hexadecimal charaters followed by a check character.
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
     * The V-ISAN (Version ddex:Identifier of a International Standard Audiovisual Number as defined in ISO 15706-2) for the ddex:Resource. A V-ISAN comprises four blocks of four hexadecimal charaters followed by a check character, followed by two further blocks of four hexadecimal characters, followed by a further check character.
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
     * The V-ISAN (Version ddex:Identifier of a International Standard Audiovisual Number as defined in ISO 15706-2) for the ddex:Resource. A V-ISAN comprises four blocks of four hexadecimal charaters followed by a check character, followed by two further blocks of four hexadecimal characters, followed by a further check character.
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
     * The ddex:ISBN (International Standard Book Number defined in ISO 2108) for the ddex:Resource. An ddex:ISBN is a 13-digit number. Pre-2007, ddex:ISBNs, which had 10-digits and are now deprecated, are converted by adding the prefix '978' and re-calculating the check character.
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
     * The ddex:ISBN (International Standard Book Number defined in ISO 2108) for the ddex:Resource. An ddex:ISBN is a 13-digit number. Pre-2007, ddex:ISBNs, which had 10-digits and are now deprecated, are converted by adding the prefix '978' and re-calculating the check character.
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
     * The ddex:ISSN (International Standard Serial Number defined in ISO 3297) for the ddex:Resource. An ddex:ISSN comprises two groups of four digits, separated by a hyphen and a control digit.
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
     * The ddex:ISSN (International Standard Serial Number defined in ISO 3297) for the ddex:Resource. An ddex:ISSN comprises two groups of four digits, separated by a hyphen and a control digit.
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
     * The ddex:SICI (Serial Item and Contribution ddex:Identifier defined in ANSI/NISO Z39.56-199) for the ddex:Resource.
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
     * The ddex:SICI (Serial Item and Contribution ddex:Identifier defined in ANSI/NISO Z39.56-199) for the ddex:Resource.
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
     * A ddex:Composite containing details of the ddex:CatalogNumber of the ddex:Resource.
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
     * A ddex:Composite containing details of the ddex:CatalogNumber of the ddex:Resource.
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
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:Resource.
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
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:Resource.
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
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:Resource.
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
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:Resource.
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
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:Resource.
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

