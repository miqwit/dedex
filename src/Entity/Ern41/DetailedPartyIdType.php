<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing DetailedPartyIdType
 *
 * A Composite containing details of a PartyId.
 * XSD Type: DetailedPartyId
 */
class DetailedPartyIdType
{

    /**
     * An International Standard Name Identifier, the ISO 27729 Standard Identifier for names. DDEX will enforce the syntax [0-9]{15}[X0-9] using XML Schema in the future.
     *
     * @var string $iSNI
     */
    private $iSNI = null;

    /**
     * An Identifier of a Party according to the DdexPartyId standard DDEX-DPID.
     *
     * @var string $dPID
     */
    private $dPID = null;

    /**
     * An Interested Party Identifier, a CISAC standard Identifier.
     *
     * @var string $ipiNameNumber
     */
    private $ipiNameNumber = null;

    /**
     * An International Performer Number, an IPDA Identifier.
     *
     * @var string $iPN
     */
    private $iPN = null;

    /**
     * A CISAC Society Identifier, a CISAC standard Identifier for music rights societies.
     *
     * @var string $cisacSocietyId
     */
    private $cisacSocietyId = null;

    /**
     * A Composite containing details of a ProprietaryIdentifier of the Party.
     *
     * @var \DedexBundle\Entity\Ern\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * Gets as iSNI
     *
     * An International Standard Name Identifier, the ISO 27729 Standard Identifier for names. DDEX will enforce the syntax [0-9]{15}[X0-9] using XML Schema in the future.
     *
     * @return string
     */
    public function getISNI()
    {
        return $this->iSNI;
    }

    /**
     * Sets a new iSNI
     *
     * An International Standard Name Identifier, the ISO 27729 Standard Identifier for names. DDEX will enforce the syntax [0-9]{15}[X0-9] using XML Schema in the future.
     *
     * @param string $iSNI
     * @return self
     */
    public function setISNI($iSNI)
    {
        $this->iSNI = $iSNI;
        return $this;
    }

    /**
     * Gets as dPID
     *
     * An Identifier of a Party according to the DdexPartyId standard DDEX-DPID.
     *
     * @return string
     */
    public function getDPID()
    {
        return $this->dPID;
    }

    /**
     * Sets a new dPID
     *
     * An Identifier of a Party according to the DdexPartyId standard DDEX-DPID.
     *
     * @param string $dPID
     * @return self
     */
    public function setDPID($dPID)
    {
        $this->dPID = $dPID;
        return $this;
    }

    /**
     * Gets as ipiNameNumber
     *
     * An Interested Party Identifier, a CISAC standard Identifier.
     *
     * @return string
     */
    public function getIpiNameNumber()
    {
        return $this->ipiNameNumber;
    }

    /**
     * Sets a new ipiNameNumber
     *
     * An Interested Party Identifier, a CISAC standard Identifier.
     *
     * @param string $ipiNameNumber
     * @return self
     */
    public function setIpiNameNumber($ipiNameNumber)
    {
        $this->ipiNameNumber = $ipiNameNumber;
        return $this;
    }

    /**
     * Gets as iPN
     *
     * An International Performer Number, an IPDA Identifier.
     *
     * @return string
     */
    public function getIPN()
    {
        return $this->iPN;
    }

    /**
     * Sets a new iPN
     *
     * An International Performer Number, an IPDA Identifier.
     *
     * @param string $iPN
     * @return self
     */
    public function setIPN($iPN)
    {
        $this->iPN = $iPN;
        return $this;
    }

    /**
     * Gets as cisacSocietyId
     *
     * A CISAC Society Identifier, a CISAC standard Identifier for music rights societies.
     *
     * @return string
     */
    public function getCisacSocietyId()
    {
        return $this->cisacSocietyId;
    }

    /**
     * Sets a new cisacSocietyId
     *
     * A CISAC Society Identifier, a CISAC standard Identifier for music rights societies.
     *
     * @param string $cisacSocietyId
     * @return self
     */
    public function setCisacSocietyId($cisacSocietyId)
    {
        $this->cisacSocietyId = $cisacSocietyId;
        return $this;
    }

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Party.
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
     * A Composite containing details of a ProprietaryIdentifier of the Party.
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
     * A Composite containing details of a ProprietaryIdentifier of the Party.
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
     * A Composite containing details of a ProprietaryIdentifier of the Party.
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
     * A Composite containing details of a ProprietaryIdentifier of the Party.
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

