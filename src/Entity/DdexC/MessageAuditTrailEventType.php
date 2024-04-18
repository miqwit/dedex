<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing MessageAuditTrailEventType
 *
 * A ddex:Composite containing details of a ddex:Party handling a ddex:Message and the ddex:Time at which the handling took place.
 * XSD Type: MessageAuditTrailEvent
 */
class MessageAuditTrailEventType
{
    /**
     * A ddex:Composite containing details of a ddex:MessagingParty.
     *
     * @var \DedexBundle\Entity\DdexC\MessagingPartyType $messagingPartyDescriptor
     */
    private $messagingPartyDescriptor = null;

    /**
     * The ddex:DateTime at which the ddex:Message was handled by the ddex:MessagingParty (the only allowed format is ISO 8601:2004: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @var \DateTime $dateTime
     */
    private $dateTime = null;

    /**
     * Gets as messagingPartyDescriptor
     *
     * A ddex:Composite containing details of a ddex:MessagingParty.
     *
     * @return \DedexBundle\Entity\DdexC\MessagingPartyType
     */
    public function getMessagingPartyDescriptor()
    {
        return $this->messagingPartyDescriptor;
    }

    /**
     * Sets a new messagingPartyDescriptor
     *
     * A ddex:Composite containing details of a ddex:MessagingParty.
     *
     * @param \DedexBundle\Entity\DdexC\MessagingPartyType $messagingPartyDescriptor
     * @return self
     */
    public function setMessagingPartyDescriptor(\DedexBundle\Entity\DdexC\MessagingPartyType $messagingPartyDescriptor)
    {
        $this->messagingPartyDescriptor = $messagingPartyDescriptor;
        return $this;
    }

    /**
     * Gets as dateTime
     *
     * The ddex:DateTime at which the ddex:Message was handled by the ddex:MessagingParty (the only allowed format is ISO 8601:2004: YYYY-MM-DDThh:mm:ssTZD).
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
     * The ddex:DateTime at which the ddex:Message was handled by the ddex:MessagingParty (the only allowed format is ISO 8601:2004: YYYY-MM-DDThh:mm:ssTZD).
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

