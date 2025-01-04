<?php

namespace DedexBundle\Entity\Ern43;

/**
 * Class representing MessageAuditTrailEventType
 *
 * A Composite containing details of a Party handling a Message and the Time at which the handling took place.
 * XSD Type: MessageAuditTrailEvent
 */
class MessageAuditTrailEventType
{
    /**
     * A Composite containing details of a MessagingParty.
     *
     * @var \DedexBundle\Entity\Ern43\MessagingPartyWithoutCodeType $messagingPartyDescriptor
     */
    private $messagingPartyDescriptor = null;

    /**
     * The DateTime at which the Message was handled by the MessagingParty (the only allowed format is ISO 8601: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @var \DateTime $dateTime
     */
    private $dateTime = null;

    /**
     * Gets as messagingPartyDescriptor
     *
     * A Composite containing details of a MessagingParty.
     *
     * @return \DedexBundle\Entity\Ern43\MessagingPartyWithoutCodeType
     */
    public function getMessagingPartyDescriptor()
    {
        return $this->messagingPartyDescriptor;
    }

    /**
     * Sets a new messagingPartyDescriptor
     *
     * A Composite containing details of a MessagingParty.
     *
     * @param \DedexBundle\Entity\Ern43\MessagingPartyWithoutCodeType $messagingPartyDescriptor
     * @return self
     */
    public function setMessagingPartyDescriptor(\DedexBundle\Entity\Ern43\MessagingPartyWithoutCodeType $messagingPartyDescriptor)
    {
        $this->messagingPartyDescriptor = $messagingPartyDescriptor;
        return $this;
    }

    /**
     * Gets as dateTime
     *
     * The DateTime at which the Message was handled by the MessagingParty (the only allowed format is ISO 8601: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Sets a new dateTime
     *
     * The DateTime at which the Message was handled by the MessagingParty (the only allowed format is ISO 8601: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @param \DateTime $dateTime
     * @return self
     */
    public function setDateTime(\DateTime $dateTime)
    {
        $this->dateTime = $dateTime;
        return $this;
    }
}

