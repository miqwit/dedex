<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing ReleaseIdType
 *
 * A Composite containing details of a ReleaseId. If available, a GRid should always to be used. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
 * XSD Type: ReleaseId
 */
class ReleaseIdType
{
    /**
     * The GRid identifying the Release. This is the preferred Element and is mandatory if a GRid is available. A GRid comprises four parts: the xs:string 'A1', followed by five alphanumeric characters, ten alphanumeric characters and and one alphanumeric character. DDEX will enforce the syntax [a-zA-Z0-9]{18} using XML Schema in the future.
     *
     * @var string $gRid
     */
    private $gRid = null;

    /**
     * An ICPN used as proxy for identification of the Release. Only applicable when the Release is an abstraction of a complete PhysicalProduct. This can be a UPC, EAN, JAN or any other bar code identifying the PhysicalProduct.
     *
     * @var string $iCPN
     */
    private $iCPN = null;

    /**
     * A Composite containing details of the CatalogNumber of the Release.
     *
     * @var \DedexBundle\Entity\Ern43\CatalogNumberType $catalogNumber
     */
    private $catalogNumber = null;

    /**
     * A Composite containing details of a ProprietaryIdentifier of the Release.
     *
     * @var \DedexBundle\Entity\Ern43\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * Gets as gRid
     *
     * The GRid identifying the Release. This is the preferred Element and is mandatory if a GRid is available. A GRid comprises four parts: the xs:string 'A1', followed by five alphanumeric characters, ten alphanumeric characters and and one alphanumeric character. DDEX will enforce the syntax [a-zA-Z0-9]{18} using XML Schema in the future.
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
     * The GRid identifying the Release. This is the preferred Element and is mandatory if a GRid is available. A GRid comprises four parts: the xs:string 'A1', followed by five alphanumeric characters, ten alphanumeric characters and and one alphanumeric character. DDEX will enforce the syntax [a-zA-Z0-9]{18} using XML Schema in the future.
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
     * Gets as iCPN
     *
     * An ICPN used as proxy for identification of the Release. Only applicable when the Release is an abstraction of a complete PhysicalProduct. This can be a UPC, EAN, JAN or any other bar code identifying the PhysicalProduct.
     *
     * @return string
     */
    public function getICPN()
    {
        return $this->iCPN;
    }

    /**
     * Sets a new iCPN
     *
     * An ICPN used as proxy for identification of the Release. Only applicable when the Release is an abstraction of a complete PhysicalProduct. This can be a UPC, EAN, JAN or any other bar code identifying the PhysicalProduct.
     *
     * @param string $iCPN
     * @return self
     */
    public function setICPN($iCPN)
    {
        $this->iCPN = $iCPN;
        return $this;
    }

    /**
     * Gets as catalogNumber
     *
     * A Composite containing details of the CatalogNumber of the Release.
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
     * A Composite containing details of the CatalogNumber of the Release.
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
     * A Composite containing details of a ProprietaryIdentifier of the Release.
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
     * A Composite containing details of a ProprietaryIdentifier of the Release.
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
     * A Composite containing details of a ProprietaryIdentifier of the Release.
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
     * A Composite containing details of a ProprietaryIdentifier of the Release.
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
     * A Composite containing details of a ProprietaryIdentifier of the Release.
     *
     * @param \DedexBundle\Entity\Ern43\ProprietaryIdType[] $proprietaryId
     * @return self
     */
    public function setProprietaryId(array $proprietaryId = null)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }
}

