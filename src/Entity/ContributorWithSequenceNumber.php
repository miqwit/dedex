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
 * Description of ContributorWithSequenceNumber
 *
 * @author Mickaël Arcos <miqwit>
 */
class ContributorWithSequenceNumber extends ContributorWithPartyId {

	/**
	 * Note that the DisplayArtist composite may occur several times with the tag 
	 * SequenceNumber set to different integer values.  The SequenceNumber value 
	 * is used as part of the enumeration of the artists to whom the recording is 
	 * associated.
	 * 
	 * @link https://kb.ddex.net/pages/viewpage.action?pageId=9505800
	 * 
	 * @var string
	 */
	private string $SequenceNumber = "";

	function getSequenceNumber(): string {
		return $this->SequenceNumber;
	}

	function setSequenceNumber(string $SequenceNumber): void {
		$this->SequenceNumber = $SequenceNumber;
	}
}
