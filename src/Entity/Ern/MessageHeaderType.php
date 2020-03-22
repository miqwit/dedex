<?php

namespace DedexBundle\Entity\Ern;

/**
 * Class representing MessageHeaderType
 *
 * A Composite placed at the beginning of each
 *  DdexMessage providing information about the Message, such as MessageSender,
 *  MessageRecipient and a Message creation time stamp.
 * XSD Type: MessageHeader
 */
class MessageHeaderType
{

    /**
     * The Language and script for the Elements of
     *  the MessageHeader as defined in IETF RfC 5646. The default is the same as indicated
     *  for the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A xs:string used to uniquely identify the
     *  thread of Messages of which the current Message is a part. The MessageThreadId
     *  shall be, in combination with the DdexPartyId (DPID) of the MessageSender,
     *  globally unique. Thus, a MessageSender shall never re-use a MessageThreadId. One
     *  example of such a 'thread' is the chain of NewReleaseMessages being sent from
     *  ReleaseCreator to wholesale ReleaseDistributor 1 to retail DSP when communicating
     *  information about the same Release(s). A common MessageThreadId will allow all
     *  these messages to be tied together.
     *
     * @var string $messageThreadId
     */
    private $messageThreadId = null;

    /**
     * A xs:string used to uniquely identify the
     *  current Message. The MessageId shall be, in combination with the DdexPartyId
     *  (DPID) of the MessageSender, globally unique. Thus, a MessageSender shall never
     *  re-use a MessageId.
     *
     * @var string $messageId
     */
    private $messageId = null;

    /**
     * The FileName, possibly including the
     *  FilePath, of the XML File containing the current Message.
     *
     * @var string $messageFileName
     */
    private $messageFileName = null;

    /**
     * A Composite containing details of the
     *  MessageSender.
     *
     * @var \DedexBundle\Entity\Ern\MessagingPartyType $messageSender
     */
    private $messageSender = null;

    /**
     * A Composite containing details of the
     *  Party on whose behalf the Message is sent.
     *
     * @var \DedexBundle\Entity\Ern\MessagingPartyType $sentOnBehalfOf
     */
    private $sentOnBehalfOf = null;

    /**
     * A Composite containing details of the
     *  MessageRecipient. Note that if multiple MessageRecipients are provided, all of
     *  them will be able to read this information.
     *
     * @var \DedexBundle\Entity\Ern\MessagingPartyType[] $messageRecipient
     */
    private $messageRecipient = [
        
    ];

    /**
     * The DateTime on which the Message was
     *  created (the only allowed format is ISO 8601:2004:
     *  YYYY-MM-DDThh:mm:ssTZD).
     *
     * @var \DateTime $messageCreatedDateTime
     */
    private $messageCreatedDateTime = null;

    /**
     * A Composite containing information about
     *  Parties in between the original MessageSender and ultimate
     *  MessageRecipient.
     *
     * @var \DedexBundle\Entity\Ern\MessageAuditTrailType $messageAuditTrail
     */
    private $messageAuditTrail = null;

    /**
     * A Composite containing a human-readable
     *  Comment about the Message.
     *
     * @var \DedexBundle\Entity\Ern\CommentType $comment
     */
    private $comment = null;

    /**
     * The indicator used to distinguish a live
     *  Message from a test Message.
     *
     * @var string $messageControlType
     */
    private $messageControlType = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of
     *  the MessageHeader as defined in IETF RfC 5646. The default is the same as indicated
     *  for the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
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
     * The Language and script for the Elements of
     *  the MessageHeader as defined in IETF RfC 5646. The default is the same as indicated
     *  for the containing composite. Language and Script are provided as
     *  lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  Attribute.
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
     * A xs:string used to uniquely identify the
     *  thread of Messages of which the current Message is a part. The MessageThreadId
     *  shall be, in combination with the DdexPartyId (DPID) of the MessageSender,
     *  globally unique. Thus, a MessageSender shall never re-use a MessageThreadId. One
     *  example of such a 'thread' is the chain of NewReleaseMessages being sent from
     *  ReleaseCreator to wholesale ReleaseDistributor 1 to retail DSP when communicating
     *  information about the same Release(s). A common MessageThreadId will allow all
     *  these messages to be tied together.
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
     * A xs:string used to uniquely identify the
     *  thread of Messages of which the current Message is a part. The MessageThreadId
     *  shall be, in combination with the DdexPartyId (DPID) of the MessageSender,
     *  globally unique. Thus, a MessageSender shall never re-use a MessageThreadId. One
     *  example of such a 'thread' is the chain of NewReleaseMessages being sent from
     *  ReleaseCreator to wholesale ReleaseDistributor 1 to retail DSP when communicating
     *  information about the same Release(s). A common MessageThreadId will allow all
     *  these messages to be tied together.
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
     * A xs:string used to uniquely identify the
     *  current Message. The MessageId shall be, in combination with the DdexPartyId
     *  (DPID) of the MessageSender, globally unique. Thus, a MessageSender shall never
     *  re-use a MessageId.
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
     * A xs:string used to uniquely identify the
     *  current Message. The MessageId shall be, in combination with the DdexPartyId
     *  (DPID) of the MessageSender, globally unique. Thus, a MessageSender shall never
     *  re-use a MessageId.
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
     * The FileName, possibly including the
     *  FilePath, of the XML File containing the current Message.
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
     * The FileName, possibly including the
     *  FilePath, of the XML File containing the current Message.
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
     * A Composite containing details of the
     *  MessageSender.
     *
     * @return \DedexBundle\Entity\Ern\MessagingPartyType
     */
    public function getMessageSender()
    {
        return $this->messageSender;
    }

    /**
     * Sets a new messageSender
     *
     * A Composite containing details of the
     *  MessageSender.
     *
     * @param \DedexBundle\Entity\Ern\MessagingPartyType $messageSender
     * @return self
     */
    public function setMessageSender(\DedexBundle\Entity\Ern\MessagingPartyType $messageSender)
    {
        $this->messageSender = $messageSender;
        return $this;
    }

    /**
     * Gets as sentOnBehalfOf
     *
     * A Composite containing details of the
     *  Party on whose behalf the Message is sent.
     *
     * @return \DedexBundle\Entity\Ern\MessagingPartyType
     */
    public function getSentOnBehalfOf()
    {
        return $this->sentOnBehalfOf;
    }

    /**
     * Sets a new sentOnBehalfOf
     *
     * A Composite containing details of the
     *  Party on whose behalf the Message is sent.
     *
     * @param \DedexBundle\Entity\Ern\MessagingPartyType $sentOnBehalfOf
     * @return self
     */
    public function setSentOnBehalfOf(\DedexBundle\Entity\Ern\MessagingPartyType $sentOnBehalfOf)
    {
        $this->sentOnBehalfOf = $sentOnBehalfOf;
        return $this;
    }

    /**
     * Adds as messageRecipient
     *
     * A Composite containing details of the
     *  MessageRecipient. Note that if multiple MessageRecipients are provided, all of
     *  them will be able to read this information.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern\MessagingPartyType $messageRecipient
     */
    public function addToMessageRecipient(\DedexBundle\Entity\Ern\MessagingPartyType $messageRecipient)
    {
        $this->messageRecipient[] = $messageRecipient;
        return $this;
    }

    /**
     * isset messageRecipient
     *
     * A Composite containing details of the
     *  MessageRecipient. Note that if multiple MessageRecipients are provided, all of
     *  them will be able to read this information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMessageRecipient($index)
    {
        return isset($this->messageRecipient[$index]);
    }

    /**
     * unset messageRecipient
     *
     * A Composite containing details of the
     *  MessageRecipient. Note that if multiple MessageRecipients are provided, all of
     *  them will be able to read this information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMessageRecipient($index)
    {
        unset($this->messageRecipient[$index]);
    }

    /**
     * Gets as messageRecipient
     *
     * A Composite containing details of the
     *  MessageRecipient. Note that if multiple MessageRecipients are provided, all of
     *  them will be able to read this information.
     *
     * @return \DedexBundle\Entity\Ern\MessagingPartyType[]
     */
    public function getMessageRecipient()
    {
        return $this->messageRecipient;
    }

    /**
     * Sets a new messageRecipient
     *
     * A Composite containing details of the
     *  MessageRecipient. Note that if multiple MessageRecipients are provided, all of
     *  them will be able to read this information.
     *
     * @param \DedexBundle\Entity\Ern\MessagingPartyType[] $messageRecipient
     * @return self
     */
    public function setMessageRecipient(array $messageRecipient)
    {
        $this->messageRecipient = $messageRecipient;
        return $this;
    }

    /**
     * Gets as messageCreatedDateTime
     *
     * The DateTime on which the Message was
     *  created (the only allowed format is ISO 8601:2004:
     *  YYYY-MM-DDThh:mm:ssTZD).
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
     * The DateTime on which the Message was
     *  created (the only allowed format is ISO 8601:2004:
     *  YYYY-MM-DDThh:mm:ssTZD).
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
     * A Composite containing information about
     *  Parties in between the original MessageSender and ultimate
     *  MessageRecipient.
     *
     * @return \DedexBundle\Entity\Ern\MessageAuditTrailType
     */
    public function getMessageAuditTrail()
    {
        return $this->messageAuditTrail;
    }

    /**
     * Sets a new messageAuditTrail
     *
     * A Composite containing information about
     *  Parties in between the original MessageSender and ultimate
     *  MessageRecipient.
     *
     * @param \DedexBundle\Entity\Ern\MessageAuditTrailType $messageAuditTrail
     * @return self
     */
    public function setMessageAuditTrail(\DedexBundle\Entity\Ern\MessageAuditTrailType $messageAuditTrail)
    {
        $this->messageAuditTrail = $messageAuditTrail;
        return $this;
    }

    /**
     * Gets as comment
     *
     * A Composite containing a human-readable
     *  Comment about the Message.
     *
     * @return \DedexBundle\Entity\Ern\CommentType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A Composite containing a human-readable
     *  Comment about the Message.
     *
     * @param \DedexBundle\Entity\Ern\CommentType $comment
     * @return self
     */
    public function setComment(\DedexBundle\Entity\Ern\CommentType $comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as messageControlType
     *
     * The indicator used to distinguish a live
     *  Message from a test Message.
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
     * The indicator used to distinguish a live
     *  Message from a test Message.
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

