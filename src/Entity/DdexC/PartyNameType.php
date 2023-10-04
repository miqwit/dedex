<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing PartyNameType
 *
 * A ddex:Composite containing details of a ddex:PartyName. ddex:Name details for a ddex:Party typically either contain a ddex:FullName or a ddex:KeyName.
 * XSD Type: PartyName
 */
class PartyNameType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ddexC:PartyName as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing the complete ddex:Name of the ddex:Party, in its normal form of presentation (e.g. John H. Smith, Acme Music Inc, A ddex:Composite containing the Beatles).
     *
     * @var \DedexBundle\Entity\DdexC\NameType $fullName
     */
    private $fullName = null;

    /**
     * The ddex:FullName transcribed using 7-bit ddex:ASCII code.
     *
     * @var string $fullNameAsciiTranscribed
     */
    private $fullNameAsciiTranscribed = null;

    /**
     * A ddex:Composite containing the complete ddex:Name of the ddex:Party in the form in which it normally appears in an alphabetic index, with the ddex:KeyName first (e.g. Smith, John H.; Beatles, A ddex:Composite containing the).
     *
     * @var \DedexBundle\Entity\DdexC\NameType $fullNameIndexed
     */
    private $fullNameIndexed = null;

    /**
     * A ddex:Composite containing the Name(s) preceding the ddex:KeyName in the ddex:FullName (and that is placed after it in a ddex:FullNameIndexed). Examples: 'George' in 'George Michael'; 'John Fitzgerald' in 'John Fitzgerald Kennedy'. Not all ddex:PartyNames have a ddex:NamesBeforeKeyName (e.g. Madonna, EMI Music Inc).
     *
     * @var \DedexBundle\Entity\DdexC\NameType $namesBeforeKeyName
     */
    private $namesBeforeKeyName = null;

    /**
     * A ddex:Composite containing the ddex:Part of a ddex:Name of the ddex:Party normally used to index an entry in an alphabetical list, such as 'Smith' (in John Smith) or 'Garcia Marquez' or 'Madonna' or 'Francis de Sales' (in Saint Francis de Sales). For persons, this normally corresponds to the 'family name' or names, which in Western name forms usually comes as a surname at the end of a ddex:FullName, and in Asian name forms often at the beginning of a ddex:FullName.
     *
     * @var \DedexBundle\Entity\DdexC\NameType $keyName
     */
    private $keyName = null;

    /**
     * A ddex:Composite containing the Name(s) following the ddex:KeyName. Example:'Ibrahim' (in Anwar Ibrahim). This is common, e.g., in many Asian personal name forms where a ddex:FullName begins with the ddex:KeyName, which is followed by other names.
     *
     * @var \DedexBundle\Entity\DdexC\NameType $namesAfterKeyName
     */
    private $namesAfterKeyName = null;

    /**
     * A ddex:Composite containing a short version of the ddexC:PartyName (e.g. for use on devices with a small display).
     *
     * @var \DedexBundle\Entity\DdexC\NameType $abbreviatedName
     */
    private $abbreviatedName = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddexC:PartyName as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ddexC:PartyName as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Gets as fullName
     *
     * A ddex:Composite containing the complete ddex:Name of the ddex:Party, in its normal form of presentation (e.g. John H. Smith, Acme Music Inc, A ddex:Composite containing the Beatles).
     *
     * @return \DedexBundle\Entity\DdexC\NameType
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Sets a new fullName
     *
     * A ddex:Composite containing the complete ddex:Name of the ddex:Party, in its normal form of presentation (e.g. John H. Smith, Acme Music Inc, A ddex:Composite containing the Beatles).
     *
     * @param \DedexBundle\Entity\DdexC\NameType $fullName
     * @return self
     */
    public function setFullName(\DedexBundle\Entity\DdexC\NameType $fullName)
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * Gets as fullNameAsciiTranscribed
     *
     * The ddex:FullName transcribed using 7-bit ddex:ASCII code.
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
     * The ddex:FullName transcribed using 7-bit ddex:ASCII code.
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
     * A ddex:Composite containing the complete ddex:Name of the ddex:Party in the form in which it normally appears in an alphabetic index, with the ddex:KeyName first (e.g. Smith, John H.; Beatles, A ddex:Composite containing the).
     *
     * @return \DedexBundle\Entity\DdexC\NameType
     */
    public function getFullNameIndexed()
    {
        return $this->fullNameIndexed;
    }

    /**
     * Sets a new fullNameIndexed
     *
     * A ddex:Composite containing the complete ddex:Name of the ddex:Party in the form in which it normally appears in an alphabetic index, with the ddex:KeyName first (e.g. Smith, John H.; Beatles, A ddex:Composite containing the).
     *
     * @param \DedexBundle\Entity\DdexC\NameType $fullNameIndexed
     * @return self
     */
    public function setFullNameIndexed(?\DedexBundle\Entity\DdexC\NameType $fullNameIndexed = null)
    {
        $this->fullNameIndexed = $fullNameIndexed;
        return $this;
    }

    /**
     * Gets as namesBeforeKeyName
     *
     * A ddex:Composite containing the Name(s) preceding the ddex:KeyName in the ddex:FullName (and that is placed after it in a ddex:FullNameIndexed). Examples: 'George' in 'George Michael'; 'John Fitzgerald' in 'John Fitzgerald Kennedy'. Not all ddex:PartyNames have a ddex:NamesBeforeKeyName (e.g. Madonna, EMI Music Inc).
     *
     * @return \DedexBundle\Entity\DdexC\NameType
     */
    public function getNamesBeforeKeyName()
    {
        return $this->namesBeforeKeyName;
    }

    /**
     * Sets a new namesBeforeKeyName
     *
     * A ddex:Composite containing the Name(s) preceding the ddex:KeyName in the ddex:FullName (and that is placed after it in a ddex:FullNameIndexed). Examples: 'George' in 'George Michael'; 'John Fitzgerald' in 'John Fitzgerald Kennedy'. Not all ddex:PartyNames have a ddex:NamesBeforeKeyName (e.g. Madonna, EMI Music Inc).
     *
     * @param \DedexBundle\Entity\DdexC\NameType $namesBeforeKeyName
     * @return self
     */
    public function setNamesBeforeKeyName(?\DedexBundle\Entity\DdexC\NameType $namesBeforeKeyName = null)
    {
        $this->namesBeforeKeyName = $namesBeforeKeyName;
        return $this;
    }

    /**
     * Gets as keyName
     *
     * A ddex:Composite containing the ddex:Part of a ddex:Name of the ddex:Party normally used to index an entry in an alphabetical list, such as 'Smith' (in John Smith) or 'Garcia Marquez' or 'Madonna' or 'Francis de Sales' (in Saint Francis de Sales). For persons, this normally corresponds to the 'family name' or names, which in Western name forms usually comes as a surname at the end of a ddex:FullName, and in Asian name forms often at the beginning of a ddex:FullName.
     *
     * @return \DedexBundle\Entity\DdexC\NameType
     */
    public function getKeyName()
    {
        return $this->keyName;
    }

    /**
     * Sets a new keyName
     *
     * A ddex:Composite containing the ddex:Part of a ddex:Name of the ddex:Party normally used to index an entry in an alphabetical list, such as 'Smith' (in John Smith) or 'Garcia Marquez' or 'Madonna' or 'Francis de Sales' (in Saint Francis de Sales). For persons, this normally corresponds to the 'family name' or names, which in Western name forms usually comes as a surname at the end of a ddex:FullName, and in Asian name forms often at the beginning of a ddex:FullName.
     *
     * @param \DedexBundle\Entity\DdexC\NameType $keyName
     * @return self
     */
    public function setKeyName(?\DedexBundle\Entity\DdexC\NameType $keyName = null)
    {
        $this->keyName = $keyName;
        return $this;
    }

    /**
     * Gets as namesAfterKeyName
     *
     * A ddex:Composite containing the Name(s) following the ddex:KeyName. Example:'Ibrahim' (in Anwar Ibrahim). This is common, e.g., in many Asian personal name forms where a ddex:FullName begins with the ddex:KeyName, which is followed by other names.
     *
     * @return \DedexBundle\Entity\DdexC\NameType
     */
    public function getNamesAfterKeyName()
    {
        return $this->namesAfterKeyName;
    }

    /**
     * Sets a new namesAfterKeyName
     *
     * A ddex:Composite containing the Name(s) following the ddex:KeyName. Example:'Ibrahim' (in Anwar Ibrahim). This is common, e.g., in many Asian personal name forms where a ddex:FullName begins with the ddex:KeyName, which is followed by other names.
     *
     * @param \DedexBundle\Entity\DdexC\NameType $namesAfterKeyName
     * @return self
     */
    public function setNamesAfterKeyName(?\DedexBundle\Entity\DdexC\NameType $namesAfterKeyName = null)
    {
        $this->namesAfterKeyName = $namesAfterKeyName;
        return $this;
    }

    /**
     * Gets as abbreviatedName
     *
     * A ddex:Composite containing a short version of the ddexC:PartyName (e.g. for use on devices with a small display).
     *
     * @return \DedexBundle\Entity\DdexC\NameType
     */
    public function getAbbreviatedName()
    {
        return $this->abbreviatedName;
    }

    /**
     * Sets a new abbreviatedName
     *
     * A ddex:Composite containing a short version of the ddexC:PartyName (e.g. for use on devices with a small display).
     *
     * @param \DedexBundle\Entity\DdexC\NameType $abbreviatedName
     * @return self
     */
    public function setAbbreviatedName(?\DedexBundle\Entity\DdexC\NameType $abbreviatedName = null)
    {
        $this->abbreviatedName = $abbreviatedName;
        return $this;
    }
}

