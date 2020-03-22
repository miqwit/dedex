<?php

namespace DedexBundle\Entity\Ern;

/**
 * Class representing SalesReportingProxyReleaseIdType
 *
 * A Composite containing details of a
 *  SalesReportingProxyReleaseId.
 * XSD Type: SalesReportingProxyReleaseId
 */
class SalesReportingProxyReleaseIdType
{

    /**
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid should always be used.
     *
     * @var \DedexBundle\Entity\Ern\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * A Composite containing the textual
     *  Description of the reason for the Identifier being used as a
     *  proxy.
     *
     * @var \DedexBundle\Entity\Ern\ReasonType $reason
     */
    private $reason = null;

    /**
     * A Composite containing details of a
     *  ReasonType.
     *
     * @var \DedexBundle\Entity\Ern\ReasonTypeType $reasonType
     */
    private $reasonType = null;

    /**
     * Gets as releaseId
     *
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid should always be used.
     *
     * @return \DedexBundle\Entity\Ern\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid should always be used.
     *
     * @param \DedexBundle\Entity\Ern\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(\DedexBundle\Entity\Ern\ReleaseIdType $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as reason
     *
     * A Composite containing the textual
     *  Description of the reason for the Identifier being used as a
     *  proxy.
     *
     * @return \DedexBundle\Entity\Ern\ReasonType
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * A Composite containing the textual
     *  Description of the reason for the Identifier being used as a
     *  proxy.
     *
     * @param \DedexBundle\Entity\Ern\ReasonType $reason
     * @return self
     */
    public function setReason(\DedexBundle\Entity\Ern\ReasonType $reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Gets as reasonType
     *
     * A Composite containing details of a
     *  ReasonType.
     *
     * @return \DedexBundle\Entity\Ern\ReasonTypeType
     */
    public function getReasonType()
    {
        return $this->reasonType;
    }

    /**
     * Sets a new reasonType
     *
     * A Composite containing details of a
     *  ReasonType.
     *
     * @param \DedexBundle\Entity\Ern\ReasonTypeType $reasonType
     * @return self
     */
    public function setReasonType(\DedexBundle\Entity\Ern\ReasonTypeType $reasonType)
    {
        $this->reasonType = $reasonType;
        return $this;
    }


}

