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
 * InitialProducer – DDEX defines the term InitialProducer as being a party 
 * that initiates the creation of the SoundRecording.  This is the legal entity 
 * responsible for the creation of the recording.  This term relates to a 
 * definition “producer of phonograms” in the WIPO Performances and Phonograms 
 * Treaty, being “the person, or the legal entity, who or which takes the 
 * initiative and has the responsibility for the first fixation of the sounds 
 * of a performance or other sounds, or the representations of sounds.”  MLCs 
 * sometimes term this party ‘commissioning producer’.
 * 
 * @link https://kb.ddex.net/pages/viewpage.action?pageId=9505800
 * 
 * Models this XML structure:
 * <InitialProducer>
 *   <PartyName>
 *     <FullName>UNIVERSAL MUSIC FRANCE</FullName>
 *   </PartyName>
 *   <PartyId>
 *     <ProprietaryId Namespace="PADPIDA2007061301U">1</ProprietaryId>
 *   </PartyId>
 *   <TerritoryCode>FR</TerritoryCode>
 * </InitialProducer>
 *
 * @author Mickaël Arcos <miqwit>
 */
class InitialProducer extends ContributorWithPartyId {

	/**
	 *
	 * @var string
	 */
	private string $TerritoryCode;

	public function getTerritoryCode(): string {
		return $this->TerritoryCode;
	}

	public function setTerritoryCode(string $TerritoryCode): void {
		$this->TerritoryCode = $TerritoryCode;
	}

}
