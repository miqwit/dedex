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
 * The RightsController composite can communicate information about who owns 
 * what right in a sound recording. It sits, in ERN-3 and MLC versions 1.1 
 * through 1.4  in the SoundRecordingDetailsByTerritory composite. The 
 * RightsController composite has one subelement to define the territorial 
 * scope of the rights that are controlled. This means that there are two 
 * territory codes that govern this composite. These two have, however, 
 * different meanings:
 * 
 *  - The territory code above the RightsController composite (i.e. the one on 
 * SoundRecordingDetailsByTerritory level) defines for which country the 
 * RightsController composite should be provided. It is mainly to enable to the 
 * communication of different names/spellings of the RightsControllers. This 
 * feature is no longer available in ERN-4.
 *  - The territory code inside the RightsController composite defines for 
 * which country the named RightsController owns the rights.
 * 
 * @link https://kb.ddex.net/display/3di/Territorial+RightsController+Information
 *
 * @author Mickaël Arcos <miqwit>
 */
class RightsController extends Multiple {

	function __construct() {
		$this->PartyName = new PartyName();
		$this->DelegatedUsageRights = new DelegatedUsageRights();
	}

	/**
	 *
	 * @var PartyName
	 */
	private PartyName $PartyName;

	public function getPartyName(): PartyName {
		return $this->PartyName;
	}

	public function setPartyName(PartyName $PartyName): void {
		$this->PartyName = $PartyName;
	}

	/**
	 * The percentage of rights owned between the start and end dates of 
	 * ownership. (12.5 = 12.5%).
	 * 
	 * @link https://kb.ddex.net/pages/viewpage.action?pageId=9505800
	 * 
	 * @var string
	 */
	private string $RightSharePercentage;

	public function getRightSharePercentage(): string {
		return $this->RightSharePercentage;
	}

	public function setRightSharePercentage(string $RightSharePercentage): void {
		$this->RightSharePercentage = $RightSharePercentage;
	}

	/**
	 * @var DelegatedUsageRights
	 */
	private DelegatedUsageRights $DelegatedUsageRights;

	public function getDelegatedUsageRights(): DelegatedUsageRights {
		return $this->DelegatedUsageRights;
	}

	public function setDelegatedUsageRights(DelegatedUsageRights $DelegatedUsageRights): void {
		$this->DelegatedUsageRights = $DelegatedUsageRights;
	}

	/**
	 * This is mandatory for PPL.  Type of rights holder can be 
	 * OriginalCopyrightOwner, SuccessorInTitle, or ExclusiveLicensee as 
	 * defined by the DDEX AVS.
	 * 
	 * @link https://kb.ddex.net/pages/viewpage.action?pageId=9505800
	 * 
	 * @var string
	 */
	private string $RightsControllerRole;

	public function getRightsControllerRole(): string {
		return $this->RightsControllerRole;
	}

	public function setRightsControllerRole(string $RightsControllerRole): void {
		$this->RightsControllerRole = $RightsControllerRole;
	}

}
