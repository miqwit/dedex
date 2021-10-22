<?php

namespace DedexBundle\Entity\Ern41;

/**
 * Class representing AdministratingRecordCompanyWithReferenceType
 *
 * A Composite containing details of an AdministratingRecordCompany.
 * XSD Type: AdministratingRecordCompanyWithReference
 */
class AdministratingRecordCompanyWithReferenceType
{

    /**
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $recordCompanyPartyReference
     */
    private $recordCompanyPartyReference = null;

    /**
     * The role played by the Party responsible for administering Rights in a Resource or a Release.
     *
     * @var \DedexBundle\Entity\Ern41\AdministratingRecordCompanyRoleType $role
     */
    private $role = null;

    /**
     * Gets as recordCompanyPartyReference
     *
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string
     */
    public function getRecordCompanyPartyReference()
    {
        return $this->recordCompanyPartyReference;
    }

    /**
     * Sets a new recordCompanyPartyReference
     *
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $recordCompanyPartyReference
     * @return self
     */
    public function setRecordCompanyPartyReference($recordCompanyPartyReference)
    {
        $this->recordCompanyPartyReference = $recordCompanyPartyReference;
        return $this;
    }

    /**
     * Gets as role
     *
     * The role played by the Party responsible for administering Rights in a Resource or a Release.
     *
     * @return \DedexBundle\Entity\Ern41\AdministratingRecordCompanyRoleType
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * The role played by the Party responsible for administering Rights in a Resource or a Release.
     *
     * @param \DedexBundle\Entity\Ern41\AdministratingRecordCompanyRoleType $role
     * @return self
     */
    public function setRole(\DedexBundle\Entity\Ern41\AdministratingRecordCompanyRoleType $role)
    {
        $this->role = $role;
        return $this;
    }


}

