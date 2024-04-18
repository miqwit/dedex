<?php

namespace DedexBundle\Entity\Ern371;

/**
 * Class representing MembershipType
 *
 * A Composite containing details of a membership
 *  in a collective rights management organization.
 * XSD Type: Membership
 */
class MembershipType
{
    /**
     * A Composite containing details of the
     *  collective rights management organization.
     *
     * @var \DedexBundle\Entity\Ern371\PartyDescriptorType $organization
     */
    private $organization = null;

    /**
     * A Type of membership.
     *
     * @var string $membershipType
     */
    private $membershipType = null;

    /**
     * The StartDate of the membership. This is a
     *  string with the syntax YYYY[-MM[-DD]].
     *
     * @var string $startDate
     */
    private $startDate = null;

    /**
     * The EndDate of the membership. This is a
     *  string with the syntax YYYY[-MM[-DD]].
     *
     * @var string $endDate
     */
    private $endDate = null;

    /**
     * Gets as organization
     *
     * A Composite containing details of the
     *  collective rights management organization.
     *
     * @return \DedexBundle\Entity\Ern371\PartyDescriptorType
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Sets a new organization
     *
     * A Composite containing details of the
     *  collective rights management organization.
     *
     * @param \DedexBundle\Entity\Ern371\PartyDescriptorType $organization
     * @return self
     */
    public function setOrganization(\DedexBundle\Entity\Ern371\PartyDescriptorType $organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Gets as membershipType
     *
     * A Type of membership.
     *
     * @return string
     */
    public function getMembershipType()
    {
        return $this->membershipType;
    }

    /**
     * Sets a new membershipType
     *
     * A Type of membership.
     *
     * @param string $membershipType
     * @return self
     */
    public function setMembershipType($membershipType)
    {
        $this->membershipType = $membershipType;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * The StartDate of the membership. This is a
     *  string with the syntax YYYY[-MM[-DD]].
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * The StartDate of the membership. This is a
     *  string with the syntax YYYY[-MM[-DD]].
     *
     * @param string $startDate
     * @return self
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * The EndDate of the membership. This is a
     *  string with the syntax YYYY[-MM[-DD]].
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * The EndDate of the membership. This is a
     *  string with the syntax YYYY[-MM[-DD]].
     *
     * @param string $endDate
     * @return self
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }
}

