<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing RelatedLicenseOrClaimRequestIdType
 *
 * A ddex:Composite containing details of a RelatedLicenseOrClaimRequestId.
 * XSD Type: RelatedLicenseOrClaimRequestId
 */
class RelatedLicenseOrClaimRequestIdType
{
    /**
     * A ddex:Composite containing details of an ddex:Identifier of mwl:LicenseOrClaimRequest.
     *
     * @var \DedexBundle\Entity\DdexC\ProprietaryIdType $licenseOrClaimRequestId
     */
    private $licenseOrClaimRequestId = null;

    /**
     * A ddex:Composite containing details of a reason for an updated mwl:LicenseOrClaimRequest.
     *
     * @var \DedexBundle\Entity\DdexC\LicenseOrClaimRequestUpdateReasonType $licenseOrClaimRequestUpdateReason
     */
    private $licenseOrClaimRequestUpdateReason = null;

    /**
     * Gets as licenseOrClaimRequestId
     *
     * A ddex:Composite containing details of an ddex:Identifier of mwl:LicenseOrClaimRequest.
     *
     * @return \DedexBundle\Entity\DdexC\ProprietaryIdType
     */
    public function getLicenseOrClaimRequestId()
    {
        return $this->licenseOrClaimRequestId;
    }

    /**
     * Sets a new licenseOrClaimRequestId
     *
     * A ddex:Composite containing details of an ddex:Identifier of mwl:LicenseOrClaimRequest.
     *
     * @param \DedexBundle\Entity\DdexC\ProprietaryIdType $licenseOrClaimRequestId
     * @return self
     */
    public function setLicenseOrClaimRequestId(?\DedexBundle\Entity\DdexC\ProprietaryIdType $licenseOrClaimRequestId = null)
    {
        $this->licenseOrClaimRequestId = $licenseOrClaimRequestId;
        return $this;
    }

    /**
     * Gets as licenseOrClaimRequestUpdateReason
     *
     * A ddex:Composite containing details of a reason for an updated mwl:LicenseOrClaimRequest.
     *
     * @return \DedexBundle\Entity\DdexC\LicenseOrClaimRequestUpdateReasonType
     */
    public function getLicenseOrClaimRequestUpdateReason()
    {
        return $this->licenseOrClaimRequestUpdateReason;
    }

    /**
     * Sets a new licenseOrClaimRequestUpdateReason
     *
     * A ddex:Composite containing details of a reason for an updated mwl:LicenseOrClaimRequest.
     *
     * @param \DedexBundle\Entity\DdexC\LicenseOrClaimRequestUpdateReasonType $licenseOrClaimRequestUpdateReason
     * @return self
     */
    public function setLicenseOrClaimRequestUpdateReason(?\DedexBundle\Entity\DdexC\LicenseOrClaimRequestUpdateReasonType $licenseOrClaimRequestUpdateReason = null)
    {
        $this->licenseOrClaimRequestUpdateReason = $licenseOrClaimRequestUpdateReason;
        return $this;
    }
}

