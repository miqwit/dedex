<?php

namespace DedexBundle\Entity\Ern381;

/**
 * Class representing TextIdType
 *
 * A Composite containing details of Identifiers of a Text.
 * XSD Type: TextId
 */
class TextIdType
{
    /**
     * The Flag indicating whether this Identifier is old and has been replaced by a new one (=true) or not (=false). The Flag may only be set to True when the new Identifier is also provided. If the Flag is not set, this Identifier is deemed to be the current one.
     *
     * @var bool $isReplaced
     */
    private $isReplaced = null;

    /**
     * The ISBN (International Standard Book Number defined in ISO 2108) for the Text. An ISBN is a 13-digit number. Pre-2007, ISBNs, which had 10-digits and are now deprecated, are converted by adding the prefix '978' and re-calculating the check character. DDEX will enforce the syntax 97[8-9][0-9]{9}[X0-9] using XML Schema in the future.
     *
     * @var string $iSBN
     */
    private $iSBN = null;

    /**
     * The ISSN (International Standard Serial Number defined in ISO 3297) identifying the Text. An ISSN comprises two groups of four digits, separated by a hyphen and a control digit. DDEX will enforce the syntax [0-9]{4}-[0-9]{3}[X0-9] using XML Schema in the future.
     *
     * @var string $iSSN
     */
    private $iSSN = null;

    /**
     * The SICI (Serial Item and Contribution Identifier defined in ANSI/NISO Z39.56-199) for the Text. DDEX will enforce the syntax [0-9]{4}-[0-9]{3}[X0-9].+ using XML Schema in the future.
     *
     * @var string $sICI
     */
    private $sICI = null;

    /**
     * A Composite containing details of a ProprietaryIdentifier of the Text (usually one per society involved in the messaging).
     *
     * @var \DedexBundle\Entity\Ern381\ProprietaryIdType[] $proprietaryId
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
     * Gets as iSBN
     *
     * The ISBN (International Standard Book Number defined in ISO 2108) for the Text. An ISBN is a 13-digit number. Pre-2007, ISBNs, which had 10-digits and are now deprecated, are converted by adding the prefix '978' and re-calculating the check character. DDEX will enforce the syntax 97[8-9][0-9]{9}[X0-9] using XML Schema in the future.
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
     * The ISBN (International Standard Book Number defined in ISO 2108) for the Text. An ISBN is a 13-digit number. Pre-2007, ISBNs, which had 10-digits and are now deprecated, are converted by adding the prefix '978' and re-calculating the check character. DDEX will enforce the syntax 97[8-9][0-9]{9}[X0-9] using XML Schema in the future.
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
     * The ISSN (International Standard Serial Number defined in ISO 3297) identifying the Text. An ISSN comprises two groups of four digits, separated by a hyphen and a control digit. DDEX will enforce the syntax [0-9]{4}-[0-9]{3}[X0-9] using XML Schema in the future.
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
     * The ISSN (International Standard Serial Number defined in ISO 3297) identifying the Text. An ISSN comprises two groups of four digits, separated by a hyphen and a control digit. DDEX will enforce the syntax [0-9]{4}-[0-9]{3}[X0-9] using XML Schema in the future.
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
     * The SICI (Serial Item and Contribution Identifier defined in ANSI/NISO Z39.56-199) for the Text. DDEX will enforce the syntax [0-9]{4}-[0-9]{3}[X0-9].+ using XML Schema in the future.
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
     * The SICI (Serial Item and Contribution Identifier defined in ANSI/NISO Z39.56-199) for the Text. DDEX will enforce the syntax [0-9]{4}-[0-9]{3}[X0-9].+ using XML Schema in the future.
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
     * Adds as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Text (usually one per society involved in the messaging).
     *
     * @return self
     * @param \DedexBundle\Entity\Ern381\ProprietaryIdType $proprietaryId
     */
    public function addToProprietaryId(\DedexBundle\Entity\Ern381\ProprietaryIdType $proprietaryId)
    {
        $this->proprietaryId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Text (usually one per society involved in the messaging).
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
     * A Composite containing details of a ProprietaryIdentifier of the Text (usually one per society involved in the messaging).
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
     * A Composite containing details of a ProprietaryIdentifier of the Text (usually one per society involved in the messaging).
     *
     * @return \DedexBundle\Entity\Ern381\ProprietaryIdType[]
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Text (usually one per society involved in the messaging).
     *
     * @param \DedexBundle\Entity\Ern381\ProprietaryIdType[] $proprietaryId
     * @return self
     */
    public function setProprietaryId(array $proprietaryId = null)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }
}

