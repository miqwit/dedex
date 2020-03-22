<?php

namespace DedexBundle\Entity\Ern;

/**
 * Class representing ReleaseIdType
 *
 * A Composite containing details of a ReleaseId.
 *  If available, a GRid should always to be used. If the Release contains only one
 *  SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an
 *  abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the
 *  PhysicalProduct may be used instead.
 * XSD Type: ReleaseId
 */
class ReleaseIdType
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
     * The GRid identifying the Release. This is
     *  the preferred Element and is mandatory if a GRid is available. A GRid comprises
     *  four parts: the xs:string 'A1', followed by five alphanumeric characters, ten
     *  alphanumeric characters and and one alphanumeric character. DDEX will enforce the
     *  syntax [a-zA-Z0-9]{18} using XML Schema in the future.
     *
     * @var string $gRid
     */
    private $gRid = null;

    /**
     * The ISRC (International Standard Recording
     *  Code as defined in ISO 3901) used as proxy for identification of the Release. Only
     *  applicable when the Release only contains one SoundRecording or one
     *  MusicalWorkVideo. An ISRC comprises four parts: two characters, followed by three
     *  alphanumeric characters, then two digits and five digits. DDEX will enforce the
     *  syntax [a-zA-Z]{2}[a-zA-Z0-9]{3}[0-9]{7} using XML Schema in the
     *  future.
     *
     * @var string $iSRC
     */
    private $iSRC = null;

    /**
     * A Composite containing details of the ICPN
     *  used as proxy for identification of the Release. Only applicable when the Release
     *  is an abstraction of a complete PhysicalProduct. An ICPN comprises 12 or 13
     *  digits, depending whether it is an EAN (13) or a UPC (12). DDEX will enforce the
     *  syntax [0-9]{12,13} using XML Schema in the future.
     *
     * @var \DedexBundle\Entity\Ern\ICPNType $iCPN
     */
    private $iCPN = null;

    /**
     * A Composite containing details of the
     *  CatalogNumber of the Release.
     *
     * @var \DedexBundle\Entity\Ern\CatalogNumberType $catalogNumber
     */
    private $catalogNumber = null;

    /**
     * A Composite containing details of a
     *  ProprietaryIdentifier of the Release.
     *
     * @var \DedexBundle\Entity\Ern\ProprietaryIdType[] $proprietaryId
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
     * The GRid identifying the Release. This is
     *  the preferred Element and is mandatory if a GRid is available. A GRid comprises
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
     * The GRid identifying the Release. This is
     *  the preferred Element and is mandatory if a GRid is available. A GRid comprises
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
     *  Code as defined in ISO 3901) used as proxy for identification of the Release. Only
     *  applicable when the Release only contains one SoundRecording or one
     *  MusicalWorkVideo. An ISRC comprises four parts: two characters, followed by three
     *  alphanumeric characters, then two digits and five digits. DDEX will enforce the
     *  syntax [a-zA-Z]{2}[a-zA-Z0-9]{3}[0-9]{7} using XML Schema in the
     *  future.
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
     *  Code as defined in ISO 3901) used as proxy for identification of the Release. Only
     *  applicable when the Release only contains one SoundRecording or one
     *  MusicalWorkVideo. An ISRC comprises four parts: two characters, followed by three
     *  alphanumeric characters, then two digits and five digits. DDEX will enforce the
     *  syntax [a-zA-Z]{2}[a-zA-Z0-9]{3}[0-9]{7} using XML Schema in the
     *  future.
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
     * Gets as iCPN
     *
     * A Composite containing details of the ICPN
     *  used as proxy for identification of the Release. Only applicable when the Release
     *  is an abstraction of a complete PhysicalProduct. An ICPN comprises 12 or 13
     *  digits, depending whether it is an EAN (13) or a UPC (12). DDEX will enforce the
     *  syntax [0-9]{12,13} using XML Schema in the future.
     *
     * @return \DedexBundle\Entity\Ern\ICPNType
     */
    public function getICPN()
    {
        return $this->iCPN;
    }

    /**
     * Sets a new iCPN
     *
     * A Composite containing details of the ICPN
     *  used as proxy for identification of the Release. Only applicable when the Release
     *  is an abstraction of a complete PhysicalProduct. An ICPN comprises 12 or 13
     *  digits, depending whether it is an EAN (13) or a UPC (12). DDEX will enforce the
     *  syntax [0-9]{12,13} using XML Schema in the future.
     *
     * @param \DedexBundle\Entity\Ern\ICPNType $iCPN
     * @return self
     */
    public function setICPN(\DedexBundle\Entity\Ern\ICPNType $iCPN)
    {
        $this->iCPN = $iCPN;
        return $this;
    }

    /**
     * Gets as catalogNumber
     *
     * A Composite containing details of the
     *  CatalogNumber of the Release.
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
     * A Composite containing details of the
     *  CatalogNumber of the Release.
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
     * A Composite containing details of a
     *  ProprietaryIdentifier of the Release.
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
     * A Composite containing details of a
     *  ProprietaryIdentifier of the Release.
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
     *  ProprietaryIdentifier of the Release.
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
     *  ProprietaryIdentifier of the Release.
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
     * A Composite containing details of a
     *  ProprietaryIdentifier of the Release.
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

