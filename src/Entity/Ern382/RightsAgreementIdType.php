<?php

namespace DedexBundle\Entity\Ern382;

/**
 * Class representing RightsAgreementIdType
 *
 * A Composite containing details of Identifiers of
 *  a License, Claim, RightShare or contract.
 * XSD Type: RightsAgreementId
 */
class RightsAgreementIdType
{

    /**
     * A MusicalWork License Identifier
     *  identifying a License. If the Composite is meant to describe a Claim, RightShare
     *  or contract, then the License relates to that Claim, RightShare or contract. A
     *  MWLI comprises four parts: one of the xs:strings 'M1' or 'M2' or 'M3' or 'M4',
     *  followed by five alphanumeric characters, ten alphanumeric characters and one
     *  alphanumeric check character.
     *
     * @var string[] $mWLI
     */
    private $mWLI = [
        
    ];

    /**
     * A Composite containing details of a
     *  ProprietaryIdentifier of the License, Claim, RightShare or
     *  contract.
     *
     * @var \DedexBundle\Entity\Ern382\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * Adds as mWLI
     *
     * A MusicalWork License Identifier
     *  identifying a License. If the Composite is meant to describe a Claim, RightShare
     *  or contract, then the License relates to that Claim, RightShare or contract. A
     *  MWLI comprises four parts: one of the xs:strings 'M1' or 'M2' or 'M3' or 'M4',
     *  followed by five alphanumeric characters, ten alphanumeric characters and one
     *  alphanumeric check character.
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
     * A MusicalWork License Identifier
     *  identifying a License. If the Composite is meant to describe a Claim, RightShare
     *  or contract, then the License relates to that Claim, RightShare or contract. A
     *  MWLI comprises four parts: one of the xs:strings 'M1' or 'M2' or 'M3' or 'M4',
     *  followed by five alphanumeric characters, ten alphanumeric characters and one
     *  alphanumeric check character.
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
     * A MusicalWork License Identifier
     *  identifying a License. If the Composite is meant to describe a Claim, RightShare
     *  or contract, then the License relates to that Claim, RightShare or contract. A
     *  MWLI comprises four parts: one of the xs:strings 'M1' or 'M2' or 'M3' or 'M4',
     *  followed by five alphanumeric characters, ten alphanumeric characters and one
     *  alphanumeric check character.
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
     * A MusicalWork License Identifier
     *  identifying a License. If the Composite is meant to describe a Claim, RightShare
     *  or contract, then the License relates to that Claim, RightShare or contract. A
     *  MWLI comprises four parts: one of the xs:strings 'M1' or 'M2' or 'M3' or 'M4',
     *  followed by five alphanumeric characters, ten alphanumeric characters and one
     *  alphanumeric check character.
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
     * A MusicalWork License Identifier
     *  identifying a License. If the Composite is meant to describe a Claim, RightShare
     *  or contract, then the License relates to that Claim, RightShare or contract. A
     *  MWLI comprises four parts: one of the xs:strings 'M1' or 'M2' or 'M3' or 'M4',
     *  followed by five alphanumeric characters, ten alphanumeric characters and one
     *  alphanumeric check character.
     *
     * @param string[] $mWLI
     * @return self
     */
    public function setMWLI(array $mWLI)
    {
        $this->mWLI = $mWLI;
        return $this;
    }

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of a
     *  ProprietaryIdentifier of the License, Claim, RightShare or
     *  contract.
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
     *  ProprietaryIdentifier of the License, Claim, RightShare or
     *  contract.
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
     *  ProprietaryIdentifier of the License, Claim, RightShare or
     *  contract.
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
     *  ProprietaryIdentifier of the License, Claim, RightShare or
     *  contract.
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
     *  ProprietaryIdentifier of the License, Claim, RightShare or
     *  contract.
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

