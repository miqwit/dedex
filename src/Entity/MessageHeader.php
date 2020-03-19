<?php

/*
 * The MIT License
 *
 * Copyright 2020 Mickaël Arcos <miqwit>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace DedexBundle\Entity;

/**
 * The Message Header indicates the sender and recipient of the Message. 
 * The sender and recipient are each named and defined by a unique DDEX 
 * Party ID (DPID). The Message Header also provides a date & timestamp of 
 * when the message was created.
 * 
 * @link https://kb.ddex.net/display/HBK/Implementation%3A+Message+Header 
 * official documentation
 *
 * @author Mickaël Arcos <miqwit>
 */
class MessageHeader {
	
	function __construct() {
		$this->messageSender = new MessageActor();
		$this->messageRecipient = new MessageActor();
	}

	
	/**
	 * Set this to the same value as the batch folder name.
	 * 
	 * @var string
	 */
	private string $messageThreadId;
	
	function getMessageThreadId(): string {
		return $this->messageThreadId;
	}

	function setMessageThreadId(string $messageThreadId): void {
		$this->messageThreadId = $messageThreadId;
	}

	/**
	 * Set this to an integer value, incremented sequentially for each distinct 
	 * message.
	 * 
	 * @var string
	 */
	private string $messageId;
	
	function getMessageId(): string {
		return $this->messageId;
	}

	function setMessageId(string $messageId): void {
		$this->messageId = $messageId;
	}

	/**
	 * The file name of the message file (including the sequence number in the 
	 * batch).
	 * 
	 * @var string
	 */
	private string $messageFileName;
	
	function getMessageFileName(): string {
		return $this->messageFileName;
	}

	function setMessageFileName(string $messageFileName): void {
		$this->messageFileName = $messageFileName;
	}

	/**
	 * The message creation date and time in ISO 8601 format.
	 * Like 2017-05-03T14:46:47.877000+02:00.
	 * 
	 * @var string
	 */
	private string $messageCreatedDateTime;
	
	function getMessageCreatedDateTime(): string {
		return $this->messageCreatedDateTime;
	}

	function setMessageCreatedDateTime(string $messageCreatedDateTime): void {
		$this->messageCreatedDateTime = $messageCreatedDateTime;
	}

	/**
	 * Type of message. The ‘LiveMessage’ value declares that this is real 
	 * data (as opposed to a test).
	 * 
	 * @var string
	 */
	private string $messageControlType;
	
	function getMessageControlType(): string {
		return $this->messageControlType;
	}

	function setMessageControlType(string $messageControlType): void {
		$this->messageControlType = $messageControlType;
	}
	
	/**
	 * The sender of the message.
	 * @var MessageActor
	 */
	private MessageActor $messageSender;

	function getMessageSender(): MessageActor {
		return $this->messageSender;
	}

	function setMessageSender(MessageActor $messageSender): void {
		$this->messageSender = $messageSender;
	}

	/**
	 * The recipient of the message.
	 * @var MessageActor
	 */
	private MessageActor $messageRecipient;
	
	function getMessageRecipient(): MessageActor {
		return $this->messageRecipient;
	}

	function setMessageRecipient(MessageActor $messageRecipient): void {
		$this->messageRecipient = $messageRecipient;
	}


}
