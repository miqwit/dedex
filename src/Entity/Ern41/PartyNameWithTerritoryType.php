<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing PartyNameWithTerritoryType
 *
 * A Composite containing details of a PartyName. Name details for a Party typically either contain a FullName or a KeyName.
 * XSD Type: PartyNameWithTerritory
 */
class PartyNameWithTerritoryType
{

    /**
     * The Language and script for the Elements of the PartyName as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The Flag indicating whether this Name is a nickname (=true) or not (=false). A nickname is a substitute for the proper name (e.g. an affective or diminutive name) and not to be confused with a pseudonym or a stage name.
     *
     * @var bool $isNickname
     */
    private $isNickname = null;

    /**
     * The Flag indicating whether this Name is a stage name (=true) or not (=false).
     *
     * @var bool $isStageName
     */
    private $isStageName = null;

    /**
     * The Flag indicating whether this Name is a legal name (=true) or not (=false).
     *
     * @var bool $isLegalName
     */
    private $isLegalName = null;

    /**
     * A Territory to which the PartyName applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string $applicableTerritoryCode
     */
    private $applicableTerritoryCode = null;

    /**
     * A Composite containing the complete Name of the Party, in its normal form of presentation (e.g. John H. Smith, Acme Music Inc, the Beatles).
     *
     * @var \DedexBundle\Entity\Ern41\NameType $fullName
     */
    private $fullName = null;

    /**
     * The FullName transcribed using 7-bit ASCII code.
     *
     * @var string $fullNameAsciiTranscribed
     */
    private $fullNameAsciiTranscribed = null;

    /**
     * A Composite containing the complete Name of the Party in the form in which it normally appears in an alphabetic index, with the KeyName first (e.g. Smith, John H.; Beatles, The).
     *
     * @var \DedexBundle\Entity\Ern41\NameType $fullNameIndexed
     */
    private $fullNameIndexed = null;

    /**
     * A Composite containing the Name(s) preceding the KeyName in the FullName (and that is placed after it in a FullNameIndexed). Examples: 'George' in 'George Michael'; 'John Fitzgerald' in 'John Fitzgerald Kennedy'. Not all PartyNames have a NamesBeforeKeyName (e.g. Madonna, EMI Music Inc).
     *
     * @var \DedexBundle\Entity\Ern41\NameType $namesBeforeKeyName
     */
    private $namesBeforeKeyName = null;

    /**
     * A Composite containing the Part of a Name of the Party normally used to index an entry in an alphabetical list, such as 'Smith' (in John Smith) or 'Garcia Marquez' or 'Madonna' or 'Francis de Sales' (in Saint Francis de Sales). For persons, this normally corresponds to the 'family name' or names, which in Western name forms usually comes as a surname at the end of a FullName, and in Asian name forms often at the beginning of a FullName.
     *
     * @var \DedexBundle\Entity\Ern41\NameType $keyName
     */
    private $keyName = null;

    /**
     * A Composite containing the Name(s) following the KeyName. Example:'Ibrahim' (in Anwar Ibrahim). This is common, e.g., in many Asian personal name forms where a FullName begins with the KeyName, which is followed by other names.
     *
     * @var \DedexBundle\Entity\Ern41\NameType $namesAfterKeyName
     */
    private $namesAfterKeyName = null;

    /**
     * A Composite containing a short version of the PartyName (e.g. for use on devices with a small display).
     *
     * @var \DedexBundle\Entity\Ern41\NameType $abbreviatedName
     */
    private $abbreviatedName = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the PartyName as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the PartyName as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as isNickname
     *
     * The Flag indicating whether this Name is a nickname (=true) or not (=false). A nickname is a substitute for the proper name (e.g. an affective or diminutive name) and not to be confused with a pseudonym or a stage name.
     *
     * @return bool
     */
    public function getIsNickname()
    {
        return $this->isNickname;
    }

    /**
     * Sets a new isNickname
     *
     * The Flag indicating whether this Name is a nickname (=true) or not (=false). A nickname is a substitute for the proper name (e.g. an affective or diminutive name) and not to be confused with a pseudonym or a stage name.
     *
     * @param bool $isNickname
     * @return self
     */
    public function setIsNickname($isNickname)
    {
        $this->isNickname = $isNickname;
        return $this;
    }

    /**
     * Gets as isStageName
     *
     * The Flag indicating whether this Name is a stage name (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsStageName()
    {
        return $this->isStageName;
    }

    /**
     * Sets a new isStageName
     *
     * The Flag indicating whether this Name is a stage name (=true) or not (=false).
     *
     * @param bool $isStageName
     * @return self
     */
    public function setIsStageName($isStageName)
    {
        $this->isStageName = $isStageName;
        return $this;
    }

    /**
     * Gets as isLegalName
     *
     * The Flag indicating whether this Name is a legal name (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsLegalName()
    {
        return $this->isLegalName;
    }

    /**
     * Sets a new isLegalName
     *
     * The Flag indicating whether this Name is a legal name (=true) or not (=false).
     *
     * @param bool $isLegalName
     * @return self
     */
    public function setIsLegalName($isLegalName)
    {
        $this->isLegalName = $isLegalName;
        return $this;
    }

    /**
     * Gets as applicableTerritoryCode
     *
     * A Territory to which the PartyName applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string
     */
    public function getApplicableTerritoryCode()
    {
        return $this->applicableTerritoryCode;
    }

    /**
     * Sets a new applicableTerritoryCode
     *
     * A Territory to which the PartyName applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $applicableTerritoryCode
     * @return self
     */
    public function setApplicableTerritoryCode($applicableTerritoryCode)
    {
        $this->applicableTerritoryCode = $applicableTerritoryCode;
        return $this;
    }

    /**
     * Gets as fullName
     *
     * A Composite containing the complete Name of the Party, in its normal form of presentation (e.g. John H. Smith, Acme Music Inc, the Beatles).
     *
     * @return \DedexBundle\Entity\Ern41\NameType
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Sets a new fullName
     *
     * A Composite containing the complete Name of the Party, in its normal form of presentation (e.g. John H. Smith, Acme Music Inc, the Beatles).
     *
     * @param \DedexBundle\Entity\Ern41\NameType $fullName
     * @return self
     */
    public function setFullName(\DedexBundle\Entity\Ern41\NameType $fullName)
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * Gets as fullNameAsciiTranscribed
     *
     * The FullName transcribed using 7-bit ASCII code.
     *
     * @return string
     */
    public function getFullNameAsciiTranscribed()
    {
        return $this->fullNameAsciiTranscribed;
    }

    /**
     * Sets a new fullNameAsciiTranscribed
     *
     * The FullName transcribed using 7-bit ASCII code.
     *
     * @param string $fullNameAsciiTranscribed
     * @return self
     */
    public function setFullNameAsciiTranscribed($fullNameAsciiTranscribed)
    {
        $this->fullNameAsciiTranscribed = $fullNameAsciiTranscribed;
        return $this;
    }

    /**
     * Gets as fullNameIndexed
     *
     * A Composite containing the complete Name of the Party in the form in which it normally appears in an alphabetic index, with the KeyName first (e.g. Smith, John H.; Beatles, The).
     *
     * @return \DedexBundle\Entity\Ern41\NameType
     */
    public function getFullNameIndexed()
    {
        return $this->fullNameIndexed;
    }

    /**
     * Sets a new fullNameIndexed
     *
     * A Composite containing the complete Name of the Party in the form in which it normally appears in an alphabetic index, with the KeyName first (e.g. Smith, John H.; Beatles, The).
     *
     * @param \DedexBundle\Entity\Ern41\NameType $fullNameIndexed
     * @return self
     */
    public function setFullNameIndexed(\DedexBundle\Entity\Ern41\NameType $fullNameIndexed)
    {
        $this->fullNameIndexed = $fullNameIndexed;
        return $this;
    }

    /**
     * Gets as namesBeforeKeyName
     *
     * A Composite containing the Name(s) preceding the KeyName in the FullName (and that is placed after it in a FullNameIndexed). Examples: 'George' in 'George Michael'; 'John Fitzgerald' in 'John Fitzgerald Kennedy'. Not all PartyNames have a NamesBeforeKeyName (e.g. Madonna, EMI Music Inc).
     *
     * @return \DedexBundle\Entity\Ern41\NameType
     */
    public function getNamesBeforeKeyName()
    {
        return $this->namesBeforeKeyName;
    }

    /**
     * Sets a new namesBeforeKeyName
     *
     * A Composite containing the Name(s) preceding the KeyName in the FullName (and that is placed after it in a FullNameIndexed). Examples: 'George' in 'George Michael'; 'John Fitzgerald' in 'John Fitzgerald Kennedy'. Not all PartyNames have a NamesBeforeKeyName (e.g. Madonna, EMI Music Inc).
     *
     * @param \DedexBundle\Entity\Ern41\NameType $namesBeforeKeyName
     * @return self
     */
    public function setNamesBeforeKeyName(\DedexBundle\Entity\Ern41\NameType $namesBeforeKeyName)
    {
        $this->namesBeforeKeyName = $namesBeforeKeyName;
        return $this;
    }

    /**
     * Gets as keyName
     *
     * A Composite containing the Part of a Name of the Party normally used to index an entry in an alphabetical list, such as 'Smith' (in John Smith) or 'Garcia Marquez' or 'Madonna' or 'Francis de Sales' (in Saint Francis de Sales). For persons, this normally corresponds to the 'family name' or names, which in Western name forms usually comes as a surname at the end of a FullName, and in Asian name forms often at the beginning of a FullName.
     *
     * @return \DedexBundle\Entity\Ern41\NameType
     */
    public function getKeyName()
    {
        return $this->keyName;
    }

    /**
     * Sets a new keyName
     *
     * A Composite containing the Part of a Name of the Party normally used to index an entry in an alphabetical list, such as 'Smith' (in John Smith) or 'Garcia Marquez' or 'Madonna' or 'Francis de Sales' (in Saint Francis de Sales). For persons, this normally corresponds to the 'family name' or names, which in Western name forms usually comes as a surname at the end of a FullName, and in Asian name forms often at the beginning of a FullName.
     *
     * @param \DedexBundle\Entity\Ern41\NameType $keyName
     * @return self
     */
    public function setKeyName(\DedexBundle\Entity\Ern41\NameType $keyName)
    {
        $this->keyName = $keyName;
        return $this;
    }

    /**
     * Gets as namesAfterKeyName
     *
     * A Composite containing the Name(s) following the KeyName. Example:'Ibrahim' (in Anwar Ibrahim). This is common, e.g., in many Asian personal name forms where a FullName begins with the KeyName, which is followed by other names.
     *
     * @return \DedexBundle\Entity\Ern41\NameType
     */
    public function getNamesAfterKeyName()
    {
        return $this->namesAfterKeyName;
    }

    /**
     * Sets a new namesAfterKeyName
     *
     * A Composite containing the Name(s) following the KeyName. Example:'Ibrahim' (in Anwar Ibrahim). This is common, e.g., in many Asian personal name forms where a FullName begins with the KeyName, which is followed by other names.
     *
     * @param \DedexBundle\Entity\Ern41\NameType $namesAfterKeyName
     * @return self
     */
    public function setNamesAfterKeyName(\DedexBundle\Entity\Ern41\NameType $namesAfterKeyName)
    {
        $this->namesAfterKeyName = $namesAfterKeyName;
        return $this;
    }

    /**
     * Gets as abbreviatedName
     *
     * A Composite containing a short version of the PartyName (e.g. for use on devices with a small display).
     *
     * @return \DedexBundle\Entity\Ern41\NameType
     */
    public function getAbbreviatedName()
    {
        return $this->abbreviatedName;
    }

    /**
     * Sets a new abbreviatedName
     *
     * A Composite containing a short version of the PartyName (e.g. for use on devices with a small display).
     *
     * @param \DedexBundle\Entity\Ern41\NameType $abbreviatedName
     * @return self
     */
    public function setAbbreviatedName(\DedexBundle\Entity\Ern41\NameType $abbreviatedName)
    {
        $this->abbreviatedName = $abbreviatedName;
        return $this;
    }


}

