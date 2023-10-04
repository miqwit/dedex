<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing SalesReportingProxyReleaseIdType
 *
 * A ddex:Composite containing details of a ddex:SalesReportingProxyReleaseId.
 * XSD Type: SalesReportingProxyReleaseId
 */
class SalesReportingProxyReleaseIdType
{
    /**
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
     *
     * @var \DedexBundle\Entity\DdexC\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * A ddex:Composite containing the textual ddex:Description of the reason for the ddex:Identifier being used as a proxy.
     *
     * @var \DedexBundle\Entity\DdexC\ReasonType $reason
     */
    private $reason = null;

    /**
     * A ddex:Composite containing details of a ReasonType.
     *
     * @var \DedexBundle\Entity\DdexC\ReasonTypeType $reasonType
     */
    private $reasonType = null;

    /**
     * Gets as releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
     *
     * @return \DedexBundle\Entity\DdexC\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
     *
     * @param \DedexBundle\Entity\DdexC\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(\DedexBundle\Entity\DdexC\ReleaseIdType $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as reason
     *
     * A ddex:Composite containing the textual ddex:Description of the reason for the ddex:Identifier being used as a proxy.
     *
     * @return \DedexBundle\Entity\DdexC\ReasonType
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * A ddex:Composite containing the textual ddex:Description of the reason for the ddex:Identifier being used as a proxy.
     *
     * @param \DedexBundle\Entity\DdexC\ReasonType $reason
     * @return self
     */
    public function setReason(?\DedexBundle\Entity\DdexC\ReasonType $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Gets as reasonType
     *
     * A ddex:Composite containing details of a ReasonType.
     *
     * @return \DedexBundle\Entity\DdexC\ReasonTypeType
     */
    public function getReasonType()
    {
        return $this->reasonType;
    }

    /**
     * Sets a new reasonType
     *
     * A ddex:Composite containing details of a ReasonType.
     *
     * @param \DedexBundle\Entity\DdexC\ReasonTypeType $reasonType
     * @return self
     */
    public function setReasonType(\DedexBundle\Entity\DdexC\ReasonTypeType $reasonType)
    {
        $this->reasonType = $reasonType;
        return $this;
    }
}

