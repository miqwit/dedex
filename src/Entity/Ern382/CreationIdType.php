<?php

namespace DedexBundle\Entity\Ern382;

/**
 * Class representing CreationIdType
 *
 * A Composite containing details of a
 *  CreationIds.
 * XSD Type: CreationId
 */
class CreationIdType
{

    /**
     * The ISWC (International Standard Musical
     *  Work Code defined in ISO 15707) identifying the MusicalWork. An ISWC comprises
     *  three parts: the letter 'T', followed by nine digits and then one check digit.
     *  DDEX will enforce the syntax [a-zA-Z][0-9]{10} using XML Schema in the
     *  future.
     *
     * @var string $iSWC
     */
    private $iSWC = null;

    /**
     * The MusicalWorkId identifying the
     *  MusicalWork within the catalog of its Composer (typically of classical music) as
     *  an opus number.
     *
     * @var string $opusNumber
     */
    private $opusNumber = null;

    /**
     * A MusicalWorkId identifying a MusicalWork
     *  within the catalog of its Composer (typically of classical music) according to a
     *  standardized numbering (e.g. 'K' numbers for Koechel's catalog of
     *  Mozart).
     *
     * @var string[] $composerCatalogNumber
     */
    private $composerCatalogNumber = [
        
    ];

    /**
     * The ISRC (International Standard Recording
     *  Code as defined in ISO 3901) for the Resource. An ISRC comprises four parts: two
     *  characters, followed by three alphanumeric characters, then two digits and five
     *  digits. DDEX will enforce the syntax [a-zA-Z]{2}[a-zA-Z0-9]{3}[0-9]{7} using XML
     *  Schema in the future.
     *
     * @var string $iSRC
     */
    private $iSRC = null;

    /**
     * The ISMN (International Standard Music
     *  Number defined in ISO 10957) for the Resource. An ISMN is a thirteen-digit number.
     *  Pre-2008 ISMNs, which had 10 characters and are now deprecated, are converted by
     *  replacing the initial letter ('M') with '979-0'. DDEX will enforce the syntax
     *  979[0-9]{9}[X0-9] using XML Schema in the future.
     *
     * @var string $iSMN
     */
    private $iSMN = null;

    /**
     * The ISAN (International Standard
     *  Audiovisual Number as defined in ISO 15706) for the Resource. An ISAN comprises
     *  four blocks of four hexadecimal charaters followed by a check character. DDEX will
     *  enforce the syntax [A-F0-9]{12} using XML Schema in the future.
     *
     * @var string $iSAN
     */
    private $iSAN = null;

    /**
     * The V-ISAN (Version Identifier of a
     *  International Standard Audiovisual Number as defined in ISO 15706-2) for the
     *  Resource. A V-ISAN comprises four blocks of four hexadecimal charaters followed by
     *  a check character, followed by two further blocks of four hexadecimal characters,
     *  followed by a further check character. DDEX will enforce the syntax [A-F0-9]{24}
     *  using XML Schema in the future.
     *
     * @var string $vISAN
     */
    private $vISAN = null;

    /**
     * The ISBN (International Standard Book
     *  Number defined in ISO 2108) for the Resource. An ISBN is a 13-digit number.
     *  Pre-2007, ISBNs, which had 10-digits and are now deprecated, are converted by
     *  adding the prefix '978' and re-calculating the check character. DDEX will enforce
     *  the syntax 97[8-9][0-9]{9}[X0-9] using XML Schema in the
     *  future.
     *
     * @var string $iSBN
     */
    private $iSBN = null;

    /**
     * The ISSN (International Standard Serial
     *  Number defined in ISO 3297) for the Resource. An ISSN comprises two groups of four
     *  digits, separated by a hyphen and a control digit. DDEX will enforce the syntax
     *  [0-9]{4}-[0-9]{3}[X0-9] using XML Schema in the future.
     *
     * @var string $iSSN
     */
    private $iSSN = null;

    /**
     * The SICI (Serial Item and Contribution
     *  Identifier defined in ANSI/NISO Z39.56-199) for the Resource. DDEX will enforce
     *  the syntax [0-9]{4}-[0-9]{3}[X0-9].+ using XML Schema in the
     *  future.
     *
     * @var string $sICI
     */
    private $sICI = null;

    /**
     * A Composite containing details of the
     *  CatalogNumber of the Resource.
     *
     * @var \DedexBundle\Entity\Ern382\CatalogNumberType $catalogNumber
     */
    private $catalogNumber = null;

    /**
     * A Composite containing details of a
     *  ProprietaryIdentifier of the Creation.
     *
     * @var \DedexBundle\Entity\Ern382\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * Gets as iSWC
     *
     * The ISWC (International Standard Musical
     *  Work Code defined in ISO 15707) identifying the MusicalWork. An ISWC comprises
     *  three parts: the letter 'T', followed by nine digits and then one check digit.
     *  DDEX will enforce the syntax [a-zA-Z][0-9]{10} using XML Schema in the
     *  future.
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
     * The ISWC (International Standard Musical
     *  Work Code defined in ISO 15707) identifying the MusicalWork. An ISWC comprises
     *  three parts: the letter 'T', followed by nine digits and then one check digit.
     *  DDEX will enforce the syntax [a-zA-Z][0-9]{10} using XML Schema in the
     *  future.
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
     * Gets as opusNumber
     *
     * The MusicalWorkId identifying the
     *  MusicalWork within the catalog of its Composer (typically of classical music) as
     *  an opus number.
     *
     * @return string
     */
    public function getOpusNumber()
    {
        return $this->opusNumber;
    }

    /**
     * Sets a new opusNumber
     *
     * The MusicalWorkId identifying the
     *  MusicalWork within the catalog of its Composer (typically of classical music) as
     *  an opus number.
     *
     * @param string $opusNumber
     * @return self
     */
    public function setOpusNumber($opusNumber)
    {
        $this->opusNumber = $opusNumber;
        return $this;
    }

    /**
     * Adds as composerCatalogNumber
     *
     * A MusicalWorkId identifying a MusicalWork
     *  within the catalog of its Composer (typically of classical music) according to a
     *  standardized numbering (e.g. 'K' numbers for Koechel's catalog of
     *  Mozart).
     *
     * @return self
     * @param string $composerCatalogNumber
     */
    public function addToComposerCatalogNumber($composerCatalogNumber)
    {
        $this->composerCatalogNumber[] = $composerCatalogNumber;
        return $this;
    }

    /**
     * isset composerCatalogNumber
     *
     * A MusicalWorkId identifying a MusicalWork
     *  within the catalog of its Composer (typically of classical music) according to a
     *  standardized numbering (e.g. 'K' numbers for Koechel's catalog of
     *  Mozart).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComposerCatalogNumber($index)
    {
        return isset($this->composerCatalogNumber[$index]);
    }

    /**
     * unset composerCatalogNumber
     *
     * A MusicalWorkId identifying a MusicalWork
     *  within the catalog of its Composer (typically of classical music) according to a
     *  standardized numbering (e.g. 'K' numbers for Koechel's catalog of
     *  Mozart).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComposerCatalogNumber($index)
    {
        unset($this->composerCatalogNumber[$index]);
    }

    /**
     * Gets as composerCatalogNumber
     *
     * A MusicalWorkId identifying a MusicalWork
     *  within the catalog of its Composer (typically of classical music) according to a
     *  standardized numbering (e.g. 'K' numbers for Koechel's catalog of
     *  Mozart).
     *
     * @return string[]
     */
    public function getComposerCatalogNumber()
    {
        return $this->composerCatalogNumber;
    }

    /**
     * Sets a new composerCatalogNumber
     *
     * A MusicalWorkId identifying a MusicalWork
     *  within the catalog of its Composer (typically of classical music) according to a
     *  standardized numbering (e.g. 'K' numbers for Koechel's catalog of
     *  Mozart).
     *
     * @param string[] $composerCatalogNumber
     * @return self
     */
    public function setComposerCatalogNumber(array $composerCatalogNumber)
    {
        $this->composerCatalogNumber = $composerCatalogNumber;
        return $this;
    }

    /**
     * Gets as iSRC
     *
     * The ISRC (International Standard Recording
     *  Code as defined in ISO 3901) for the Resource. An ISRC comprises four parts: two
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
     *  Code as defined in ISO 3901) for the Resource. An ISRC comprises four parts: two
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
     * Gets as iSMN
     *
     * The ISMN (International Standard Music
     *  Number defined in ISO 10957) for the Resource. An ISMN is a thirteen-digit number.
     *  Pre-2008 ISMNs, which had 10 characters and are now deprecated, are converted by
     *  replacing the initial letter ('M') with '979-0'. DDEX will enforce the syntax
     *  979[0-9]{9}[X0-9] using XML Schema in the future.
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
     * The ISMN (International Standard Music
     *  Number defined in ISO 10957) for the Resource. An ISMN is a thirteen-digit number.
     *  Pre-2008 ISMNs, which had 10 characters and are now deprecated, are converted by
     *  replacing the initial letter ('M') with '979-0'. DDEX will enforce the syntax
     *  979[0-9]{9}[X0-9] using XML Schema in the future.
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
     * The ISAN (International Standard
     *  Audiovisual Number as defined in ISO 15706) for the Resource. An ISAN comprises
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
     *  Audiovisual Number as defined in ISO 15706) for the Resource. An ISAN comprises
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
     *  Resource. A V-ISAN comprises four blocks of four hexadecimal charaters followed by
     *  a check character, followed by two further blocks of four hexadecimal characters,
     *  followed by a further check character. DDEX will enforce the syntax [A-F0-9]{24}
     *  using XML Schema in the future.
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
     *  Resource. A V-ISAN comprises four blocks of four hexadecimal charaters followed by
     *  a check character, followed by two further blocks of four hexadecimal characters,
     *  followed by a further check character. DDEX will enforce the syntax [A-F0-9]{24}
     *  using XML Schema in the future.
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
     * The ISBN (International Standard Book
     *  Number defined in ISO 2108) for the Resource. An ISBN is a 13-digit number.
     *  Pre-2007, ISBNs, which had 10-digits and are now deprecated, are converted by
     *  adding the prefix '978' and re-calculating the check character. DDEX will enforce
     *  the syntax 97[8-9][0-9]{9}[X0-9] using XML Schema in the
     *  future.
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
     * The ISBN (International Standard Book
     *  Number defined in ISO 2108) for the Resource. An ISBN is a 13-digit number.
     *  Pre-2007, ISBNs, which had 10-digits and are now deprecated, are converted by
     *  adding the prefix '978' and re-calculating the check character. DDEX will enforce
     *  the syntax 97[8-9][0-9]{9}[X0-9] using XML Schema in the
     *  future.
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
     * The ISSN (International Standard Serial
     *  Number defined in ISO 3297) for the Resource. An ISSN comprises two groups of four
     *  digits, separated by a hyphen and a control digit. DDEX will enforce the syntax
     *  [0-9]{4}-[0-9]{3}[X0-9] using XML Schema in the future.
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
     * The ISSN (International Standard Serial
     *  Number defined in ISO 3297) for the Resource. An ISSN comprises two groups of four
     *  digits, separated by a hyphen and a control digit. DDEX will enforce the syntax
     *  [0-9]{4}-[0-9]{3}[X0-9] using XML Schema in the future.
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
     * The SICI (Serial Item and Contribution
     *  Identifier defined in ANSI/NISO Z39.56-199) for the Resource. DDEX will enforce
     *  the syntax [0-9]{4}-[0-9]{3}[X0-9].+ using XML Schema in the
     *  future.
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
     * The SICI (Serial Item and Contribution
     *  Identifier defined in ANSI/NISO Z39.56-199) for the Resource. DDEX will enforce
     *  the syntax [0-9]{4}-[0-9]{3}[X0-9].+ using XML Schema in the
     *  future.
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
     * A Composite containing details of the
     *  CatalogNumber of the Resource.
     *
     * @return \DedexBundle\Entity\Ern382\CatalogNumberType
     */
    public function getCatalogNumber()
    {
        return $this->catalogNumber;
    }

    /**
     * Sets a new catalogNumber
     *
     * A Composite containing details of the
     *  CatalogNumber of the Resource.
     *
     * @param \DedexBundle\Entity\Ern382\CatalogNumberType $catalogNumber
     * @return self
     */
    public function setCatalogNumber(\DedexBundle\Entity\Ern382\CatalogNumberType $catalogNumber)
    {
        $this->catalogNumber = $catalogNumber;
        return $this;
    }

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of a
     *  ProprietaryIdentifier of the Creation.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern382\ProprietaryIdType $proprietaryId
     */
    public function addToProprietaryId(\DedexBundle\Entity\Ern382\ProprietaryIdType $proprietaryId)
    {
        $this->proprietaryId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset proprietaryId
     *
     * A Composite containing details of a
     *  ProprietaryIdentifier of the Creation.
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
     *  ProprietaryIdentifier of the Creation.
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
     *  ProprietaryIdentifier of the Creation.
     *
     * @return \DedexBundle\Entity\Ern382\ProprietaryIdType[]
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A Composite containing details of a
     *  ProprietaryIdentifier of the Creation.
     *
     * @param \DedexBundle\Entity\Ern382\ProprietaryIdType[] $proprietaryId
     * @return self
     */
    public function setProprietaryId(array $proprietaryId)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }


}

