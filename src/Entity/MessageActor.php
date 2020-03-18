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
 * The name of the MLC or company sending/receiving the message.
 * 
 * @link https://kb.ddex.net/display/HBK/Implementation%3A+Message+Header 
 * official doccumentation
 *
 * @author Mickaël Arcos <miqwit>
 */
class MessageActor {
	
	function __construct() {
		$this->partyName = new MessageActorPartyName();
	}
	
	/**
	 * Both sender and receiver will have a unique PartyId assigned by DDEX 
	 * (i.e. a DPID) when the implementation license was put in place 
	 * (free of charge).
	 * 
	 * @var string 
	 */
	private string $partyId;
	
	function getPartyId(): string {
		return $this->partyId;
	}

	function setPartyId(string $partyId): void {
		$this->partyId = $partyId;
	}

	/**
	 * Detailed party name of actor
	 * @var MessageActorPartyName 
	 */
	private MessageActorPartyName $partyName;
	
	function getPartyName(): MessageActorPartyName {
		return $this->partyName;
	}

	function setPartyName(MessageActorPartyName $partyName): void {
		$this->partyName = $partyName;
	}

}
