<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing TextIdType
 *
 * A ddex:Composite containing details of ddex:Identifiers of a ddex:Text.
 * XSD Type: TextId
 */
class TextIdType
{
    /**
     * The ddex:Flag indicating whether this ddex:Identifier is old and has been replaced by a new one (=True) or not (=False). The ddex:Flag may only be set to True when the new ddex:Identifier is also provided. If the ddex:Flag is not set, this ddex:Identifier is deemed to be the current one.
     *
     * @var bool $isReplaced
     */
    private $isReplaced = null;

    /**
     * The ddex:ISBN (International Standard Book Number defined in ISO 2108) for the ddex:Text. An ddex:ISBN is a 13-digit number. Pre-2007, ddex:ISBNs, which had 10-digits and are now deprecated, are converted by adding the prefix '978' and re-calculating the check character.
     *
     * @var string $iSBN
     */
    private $iSBN = null;

    /**
     * The ddex:ISSN (International Standard Serial Number defined in ISO 3297) identifying the ddex:Text. An ddex:ISSN comprises two groups of four digits, separated by a hyphen and a control digit.
     *
     * @var string $iSSN
     */
    private $iSSN = null;

    /**
     * The ddex:SICI (Serial Item and Contribution ddex:Identifier defined in ANSI/NISO Z39.56-199) for the ddex:Text.
     *
     * @var string $sICI
     */
    private $sICI = null;

    /**
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:Text (usually one per society involved in the messaging).
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
     * Gets as iSBN
     *
     * The ddex:ISBN (International Standard Book Number defined in ISO 2108) for the ddex:Text. An ddex:ISBN is a 13-digit number. Pre-2007, ddex:ISBNs, which had 10-digits and are now deprecated, are converted by adding the prefix '978' and re-calculating the check character.
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
     * The ddex:ISBN (International Standard Book Number defined in ISO 2108) for the ddex:Text. An ddex:ISBN is a 13-digit number. Pre-2007, ddex:ISBNs, which had 10-digits and are now deprecated, are converted by adding the prefix '978' and re-calculating the check character.
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
     * The ddex:ISSN (International Standard Serial Number defined in ISO 3297) identifying the ddex:Text. An ddex:ISSN comprises two groups of four digits, separated by a hyphen and a control digit.
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
     * The ddex:ISSN (International Standard Serial Number defined in ISO 3297) identifying the ddex:Text. An ddex:ISSN comprises two groups of four digits, separated by a hyphen and a control digit.
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
     * The ddex:SICI (Serial Item and Contribution ddex:Identifier defined in ANSI/NISO Z39.56-199) for the ddex:Text.
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
     * The ddex:SICI (Serial Item and Contribution ddex:Identifier defined in ANSI/NISO Z39.56-199) for the ddex:Text.
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
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:Text (usually one per society involved in the messaging).
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
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:Text (usually one per society involved in the messaging).
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
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:Text (usually one per society involved in the messaging).
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
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:Text (usually one per society involved in the messaging).
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
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:Text (usually one per society involved in the messaging).
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

