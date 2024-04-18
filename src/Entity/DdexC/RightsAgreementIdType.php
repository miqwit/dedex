<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing RightsAgreementIdType
 *
 * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract.
 * XSD Type: RightsAgreementId
 */
class RightsAgreementIdType
{
    /**
     * A ddex:MusicalWork ddex:License ddex:Identifier identifying a ddex:License. If the ddex:Composite is meant to describe a ddex:Claim, ddex:RightShare or contract, then the ddex:License relates to that ddex:Claim, ddex:RightShare or contract. A ddex:MWLI comprises four parts: one of the xs:strings 'M1' or 'M2' or 'M3' or 'M4', followed by five alphanumeric characters, ten alphanumeric characters and one alphanumeric check character.
     *
     * @var string[] $mWLI
     */
    private $mWLI = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:License, ddex:Claim, ddex:RightShare or contract.
     *
     * @var \DedexBundle\Entity\DdexC\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * Adds as mWLI
     *
     * A ddex:MusicalWork ddex:License ddex:Identifier identifying a ddex:License. If the ddex:Composite is meant to describe a ddex:Claim, ddex:RightShare or contract, then the ddex:License relates to that ddex:Claim, ddex:RightShare or contract. A ddex:MWLI comprises four parts: one of the xs:strings 'M1' or 'M2' or 'M3' or 'M4', followed by five alphanumeric characters, ten alphanumeric characters and one alphanumeric check character.
     *
     * @return self
     * @param string $mWLI
     */
    public function addToMWLI($mWLI)
    {
        $this->mWLI[] = $mWLI;
        return $this;
    }

    /**
     * isset mWLI
     *
     * A ddex:MusicalWork ddex:License ddex:Identifier identifying a ddex:License. If the ddex:Composite is meant to describe a ddex:Claim, ddex:RightShare or contract, then the ddex:License relates to that ddex:Claim, ddex:RightShare or contract. A ddex:MWLI comprises four parts: one of the xs:strings 'M1' or 'M2' or 'M3' or 'M4', followed by five alphanumeric characters, ten alphanumeric characters and one alphanumeric check character.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMWLI($index)
    {
        return isset($this->mWLI[$index]);
    }

    /**
     * unset mWLI
     *
     * A ddex:MusicalWork ddex:License ddex:Identifier identifying a ddex:License. If the ddex:Composite is meant to describe a ddex:Claim, ddex:RightShare or contract, then the ddex:License relates to that ddex:Claim, ddex:RightShare or contract. A ddex:MWLI comprises four parts: one of the xs:strings 'M1' or 'M2' or 'M3' or 'M4', followed by five alphanumeric characters, ten alphanumeric characters and one alphanumeric check character.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMWLI($index)
    {
        unset($this->mWLI[$index]);
    }

    /**
     * Gets as mWLI
     *
     * A ddex:MusicalWork ddex:License ddex:Identifier identifying a ddex:License. If the ddex:Composite is meant to describe a ddex:Claim, ddex:RightShare or contract, then the ddex:License relates to that ddex:Claim, ddex:RightShare or contract. A ddex:MWLI comprises four parts: one of the xs:strings 'M1' or 'M2' or 'M3' or 'M4', followed by five alphanumeric characters, ten alphanumeric characters and one alphanumeric check character.
     *
     * @return string[]
     */
    public function getMWLI()
    {
        return $this->mWLI;
    }

    /**
     * Sets a new mWLI
     *
     * A ddex:MusicalWork ddex:License ddex:Identifier identifying a ddex:License. If the ddex:Composite is meant to describe a ddex:Claim, ddex:RightShare or contract, then the ddex:License relates to that ddex:Claim, ddex:RightShare or contract. A ddex:MWLI comprises four parts: one of the xs:strings 'M1' or 'M2' or 'M3' or 'M4', followed by five alphanumeric characters, ten alphanumeric characters and one alphanumeric check character.
     *
     * @param string[] $mWLI
     * @return self
     */
    public function setMWLI(array $mWLI = null)
    {
        $this->mWLI = $mWLI;
        return $this;
    }

    /**
     * Adds as proprietaryId
     *
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:License, ddex:Claim, ddex:RightShare or contract.
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
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:License, ddex:Claim, ddex:RightShare or contract.
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
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:License, ddex:Claim, ddex:RightShare or contract.
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
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:License, ddex:Claim, ddex:RightShare or contract.
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
     * A ddex:Composite containing details of a ddex:ProprietaryIdentifier of the ddex:License, ddex:Claim, ddex:RightShare or contract.
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

