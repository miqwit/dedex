<?php

namespace DedexBundle\Entity\DdexC;

/**
 * Class representing MessageHeaderType
 *
 * A ddex:Composite placed at the beginning of each ddex:DdexMessage providing information about the ddex:Message, such as ddex:MessageSender, ddex:MessageRecipient and a ddex:Message creation time stamp.
 * XSD Type: MessageHeader
 */
class MessageHeaderType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ddexC:MessageHeader as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A xs:string used to uniquely identify the thread of ddex:Messages of which the current ddex:Message is a part. One example of such a 'thread' is the chain of NewReleaseMessages being sent from ddex:ReleaseCreator to wholesale ddex:ReleaseDistributor 1 to retail ddex:DSP when communicating information about the same Release(s). A common ddex:MessageThreadId will allow all these messages to be tied together.
     *
     * @var string $messageThreadId
     */
    private $messageThreadId = null;

    /**
     * A xs:string used to uniquely identify the current ddex:Message.
     *
     * @var string $messageId
     */
    private $messageId = null;

    /**
     * The ddex:FileName, possibly including the ddex:FilePath, of the XML ddex:File containing the current ddex:Message.
     *
     * @var string $messageFileName
     */
    private $messageFileName = null;

    /**
     * A ddex:Composite containing details of the ddex:MessageSender.
     *
     * @var \DedexBundle\Entity\DdexC\MessagingPartyType $messageSender
     */
    private $messageSender = null;

    /**
     * A ddex:Composite containing details of the ddex:Party on whose behalf the ddex:Message is sent.
     *
     * @var \DedexBundle\Entity\DdexC\MessagingPartyType $sentOnBehalfOf
     */
    private $sentOnBehalfOf = null;

    /**
     * A ddex:Composite containing details of the ddex:MessageRecipient.
     *
     * @var \DedexBundle\Entity\DdexC\MessagingPartyType $messageRecipient
     */
    private $messageRecipient = null;

    /**
     * The ddex:DateTime on which the ddex:Message was created (the only allowed format is ISO 8601:2004: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @var \DateTime $messageCreatedDateTime
     */
    private $messageCreatedDateTime = null;

    /**
     * A ddex:Composite containing information about Parties in between the original ddex:MessageSender and ultimate ddex:MessageRecipient.
     *
     * @var \DedexBundle\Entity\DdexC\MessageAuditTrailType $messageAuditTrail
     */
    private $messageAuditTrail = null;

    /**
     * A ddex:Composite containing a human-readable ddex:Comment about the ddex:Message.
     *
     * @var \DedexBundle\Entity\DdexC\CommentType $comment
     */
    private $comment = null;

    /**
     * The indicator used to distinguish a live ddex:Message from a test ddex:Message.
     *
     * @var string $messageControlType
     */
    private $messageControlType = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddexC:MessageHeader as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddexC:MessageHeader as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }

    /**
     * Gets as messageThreadId
     *
     * A xs:string used to uniquely identify the thread of ddex:Messages of which the current ddex:Message is a part. One example of such a 'thread' is the chain of NewReleaseMessages being sent from ddex:ReleaseCreator to wholesale ddex:ReleaseDistributor 1 to retail ddex:DSP when communicating information about the same Release(s). A common ddex:MessageThreadId will allow all these messages to be tied together.
     *
     * @return string
     */
    public function getMessageThreadId()
    {
        return $this->messageThreadId;
    }

    /**
     * Sets a new messageThreadId
     *
     * A xs:string used to uniquely identify the thread of ddex:Messages of which the current ddex:Message is a part. One example of such a 'thread' is the chain of NewReleaseMessages being sent from ddex:ReleaseCreator to wholesale ddex:ReleaseDistributor 1 to retail ddex:DSP when communicating information about the same Release(s). A common ddex:MessageThreadId will allow all these messages to be tied together.
     *
     * @param string $messageThreadId
     * @return self
     */
    public function setMessageThreadId($messageThreadId)
    {
        $this->messageThreadId = $messageThreadId;
        return $this;
    }

    /**
     * Gets as messageId
     *
     * A xs:string used to uniquely identify the current ddex:Message.
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * Sets a new messageId
     *
     * A xs:string used to uniquely identify the current ddex:Message.
     *
     * @param string $messageId
     * @return self
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;
        return $this;
    }

    /**
     * Gets as messageFileName
     *
     * The ddex:FileName, possibly including the ddex:FilePath, of the XML ddex:File containing the current ddex:Message.
     *
     * @return string
     */
    public function getMessageFileName()
    {
        return $this->messageFileName;
    }

    /**
     * Sets a new messageFileName
     *
     * The ddex:FileName, possibly including the ddex:FilePath, of the XML ddex:File containing the current ddex:Message.
     *
     * @param string $messageFileName
     * @return self
     */
    public function setMessageFileName($messageFileName)
    {
        $this->messageFileName = $messageFileName;
        return $this;
    }

    /**
     * Gets as messageSender
     *
     * A ddex:Composite containing details of the ddex:MessageSender.
     *
     * @return \DedexBundle\Entity\DdexC\MessagingPartyType
     */
    public function getMessageSender()
    {
        return $this->messageSender;
    }

    /**
     * Sets a new messageSender
     *
     * A ddex:Composite containing details of the ddex:MessageSender.
     *
     * @param \DedexBundle\Entity\DdexC\MessagingPartyType $messageSender
     * @return self
     */
    public function setMessageSender(\DedexBundle\Entity\DdexC\MessagingPartyType $messageSender)
    {
        $this->messageSender = $messageSender;
        return $this;
    }

    /**
     * Gets as sentOnBehalfOf
     *
     * A ddex:Composite containing details of the ddex:Party on whose behalf the ddex:Message is sent.
     *
     * @return \DedexBundle\Entity\DdexC\MessagingPartyType
     */
    public function getSentOnBehalfOf()
    {
        return $this->sentOnBehalfOf;
    }

    /**
     * Sets a new sentOnBehalfOf
     *
     * A ddex:Composite containing details of the ddex:Party on whose behalf the ddex:Message is sent.
     *
     * @param \DedexBundle\Entity\DdexC\MessagingPartyType $sentOnBehalfOf
     * @return self
     */
    public function setSentOnBehalfOf(?\DedexBundle\Entity\DdexC\MessagingPartyType $sentOnBehalfOf = null)
    {
        $this->sentOnBehalfOf = $sentOnBehalfOf;
        return $this;
    }

    /**
     * Gets as messageRecipient
     *
     * A ddex:Composite containing details of the ddex:MessageRecipient.
     *
     * @return \DedexBundle\Entity\DdexC\MessagingPartyType
     */
    public function getMessageRecipient()
    {
        return $this->messageRecipient;
    }

    /**
     * Sets a new messageRecipient
     *
     * A ddex:Composite containing details of the ddex:MessageRecipient.
     *
     * @param \DedexBundle\Entity\DdexC\MessagingPartyType $messageRecipient
     * @return self
     */
    public function setMessageRecipient(\DedexBundle\Entity\DdexC\MessagingPartyType $messageRecipient)
    {
        $this->messageRecipient = $messageRecipient;
        return $this;
    }

    /**
     * Gets as messageCreatedDateTime
     *
     * The ddex:DateTime on which the ddex:Message was created (the only allowed format is ISO 8601:2004: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @return \DateTime
     */
    public function getMessageCreatedDateTime()
    {
        return $this->messageCreatedDateTime;
    }

    /**
     * Sets a new messageCreatedDateTime
     *
     * The ddex:DateTime on which the ddex:Message was created (the only allowed format is ISO 8601:2004: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @param \DateTime $messageCreatedDateTime
     * @return self
     */
    public function setMessageCreatedDateTime(\DateTime $messageCreatedDateTime)
    {
        $this->messageCreatedDateTime = $messageCreatedDateTime;
        return $this;
    }

    /**
     * Gets as messageAuditTrail
     *
     * A ddex:Composite containing information about Parties in between the original ddex:MessageSender and ultimate ddex:MessageRecipient.
     *
     * @return \DedexBundle\Entity\DdexC\MessageAuditTrailType
     */
    public function getMessageAuditTrail()
    {
        return $this->messageAuditTrail;
    }

    /**
     * Sets a new messageAuditTrail
     *
     * A ddex:Composite containing information about Parties in between the original ddex:MessageSender and ultimate ddex:MessageRecipient.
     *
     * @param \DedexBundle\Entity\DdexC\MessageAuditTrailType $messageAuditTrail
     * @return self
     */
    public function setMessageAuditTrail(?\DedexBundle\Entity\DdexC\MessageAuditTrailType $messageAuditTrail = null)
    {
        $this->messageAuditTrail = $messageAuditTrail;
        return $this;
    }

    /**
     * Gets as comment
     *
     * A ddex:Composite containing a human-readable ddex:Comment about the ddex:Message.
     *
     * @return \DedexBundle\Entity\DdexC\CommentType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A ddex:Composite containing a human-readable ddex:Comment about the ddex:Message.
     *
     * @param \DedexBundle\Entity\DdexC\CommentType $comment
     * @return self
     */
    public function setComment(?\DedexBundle\Entity\DdexC\CommentType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as messageControlType
     *
     * The indicator used to distinguish a live ddex:Message from a test ddex:Message.
     *
     * @return string
     */
    public function getMessageControlType()
    {
        return $this->messageControlType;
    }

    /**
     * Sets a new messageControlType
     *
     * The indicator used to distinguish a live ddex:Message from a test ddex:Message.
     *
     * @param string $messageControlType
     * @return self
     */
    public function setMessageControlType($messageControlType)
    {
        $this->messageControlType = $messageControlType;
        return $this;
    }
}

