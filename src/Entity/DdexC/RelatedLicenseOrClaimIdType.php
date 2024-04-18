<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing RelatedLicenseOrClaimIdType
 *
 * A ddex:Composite containing details of a RelatedLicenseOrClaimId.
 * XSD Type: RelatedLicenseOrClaimId
 */
class RelatedLicenseOrClaimIdType
{
    /**
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim.
     *
     * @var \DedexBundle\Entity\DdexC\RightsAgreementIdType $licenseOrClaimId
     */
    private $licenseOrClaimId = null;

    /**
     * A ddex:Composite containing details of a reason for an updated mwl:LicenseOrClaim.
     *
     * @var \DedexBundle\Entity\DdexC\LicenseOrClaimUpdateReasonType $licenseOrClaimUpdateReason
     */
    private $licenseOrClaimUpdateReason = null;

    /**
     * Gets as licenseOrClaimId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim.
     *
     * @return \DedexBundle\Entity\DdexC\RightsAgreementIdType
     */
    public function getLicenseOrClaimId()
    {
        return $this->licenseOrClaimId;
    }

    /**
     * Sets a new licenseOrClaimId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim.
     *
     * @param \DedexBundle\Entity\DdexC\RightsAgreementIdType $licenseOrClaimId
     * @return self
     */
    public function setLicenseOrClaimId(?\DedexBundle\Entity\DdexC\RightsAgreementIdType $licenseOrClaimId = null)
    {
        $this->licenseOrClaimId = $licenseOrClaimId;
        return $this;
    }

    /**
     * Gets as licenseOrClaimUpdateReason
     *
     * A ddex:Composite containing details of a reason for an updated mwl:LicenseOrClaim.
     *
     * @return \DedexBundle\Entity\DdexC\LicenseOrClaimUpdateReasonType
     */
    public function getLicenseOrClaimUpdateReason()
    {
        return $this->licenseOrClaimUpdateReason;
    }

    /**
     * Sets a new licenseOrClaimUpdateReason
     *
     * A ddex:Composite containing details of a reason for an updated mwl:LicenseOrClaim.
     *
     * @param \DedexBundle\Entity\DdexC\LicenseOrClaimUpdateReasonType $licenseOrClaimUpdateReason
     * @return self
     */
    public function setLicenseOrClaimUpdateReason(?\DedexBundle\Entity\DdexC\LicenseOrClaimUpdateReasonType $licenseOrClaimUpdateReason = null)
    {
        $this->licenseOrClaimUpdateReason = $licenseOrClaimUpdateReason;
        return $this;
    }
}

