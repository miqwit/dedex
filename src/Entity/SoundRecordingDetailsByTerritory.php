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
 * Each SoundRecording node must include one or more 
 * SoundRecordingDetailsByTerritory nodes.  The first 
 * SoundRecordingDetailsByTerritory node includes data which would apply for 
 * this SoundRecording in all territories as a default, unless specifically 
 * overridden by further information provided in subsequent 
 * SoundRecordingDetailsByTerritory nodes. Most implementers of the MLC message 
 * currently specify that only one SoundRecordingDetailsByTerritory node should 
 * be supplied per SoundRecording. (This does not preclude the delivery of 
 * multi-territory rights ownership information.)
 * 
 * @link https://kb.ddex.net/pages/viewpage.action?pageId=9505800
 * @link https://kb.ddex.net/pages/viewpage.action?pageId=13477806
 *
 * @author Mickaël Arcos <miqwit>
 */
class SoundRecordingDetailsByTerritory extends Multiple {

	function __construct() {
		$this->InitialProducer = new InitialProducer();
	}

	/**
	 * TerritoryCode – This defines the territory or territories covered by this 
	 * node.  ‘Worldwide’ is defined as an allowed value.  When listing an 
	 * exception (i.e. to Worldwide) an ExcludedTerritoryCode should be used. 
	 * 
	 * @link https://kb.ddex.net/pages/viewpage.action?pageId=9505800
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

	/**
	 * Title –  In SoundRecordingDetailsByTerritory’ this tag can be used to 
	 * express the title in another language, or an alternative title applicable 
	 * in a given territory.  This is in accordance with ERN-3 profile rules.  
	 * See also: Title LanguageAndScriptCode/TitleText/SubTitle.
	 * 
	 * @link https://kb.ddex.net/pages/viewpage.action?pageId=9505800
	 * 
	 * @var array 
	 */
	private array $titles = [];

	public function getTitles(): array {
		return $this->titles;
	}

	public function createTitle(): Title {
		$title = new Title();
		$this->titles[] = $title;
		return $title;
	}

	/**
	 * DisplayArtist – This is the artist name as associated with the recording.  
	 * (See also the HostSoundCarrier node for artist name as associated with a 
	 * given release on which the sound recording appears).  The “artist name” 
	 * element is solely descriptive information (i.e. does not convey or 
	 * necessarily imply information about rights, performances or contributions.)  
	 * MLCs use this for matching to usage.
	 * 
	 * Example of a band name DisplayArtist: “The Weeknd”
	 * Example of several artists as DisplayArtist: “The Beatles & Tony Sheridan”
	 * Example of a ‘virtual’ band DisplayArtist: “Gorillaz”.
	 * 
	 * When the DisplayArtist is provided, the following are mandatory:
	 * FullName
	 * RoleCode
	 * 
	 * MainArtist is a RoleCode and only applies to DisplayArtist.  MainArtist is 
	 * the principal credited artist associated with a resource.
	 * Note that the DisplayArtist composite may occur several times with the tag 
	 * SequenceNumber set to different integer values.  The SequenceNumber value 
	 * is used as part of the enumeration of the artists to whom the recording is 
	 * associated.
	 * 
	 * @link https://kb.ddex.net/pages/viewpage.action?pageId=9505800
	 * 
	 * @var array
	 */
	private array $DisplayArtists = [];

	function getDisplayArtists(): array {
		return $this->DisplayArtists;
	}

	public function createDisplayArtist(): DisplayArtist {
		$artist = new DisplayArtist();
		$this->DisplayArtists[] = $artist;
		return $artist;
	}

	/**
	 * DisplayComposer is mandatory when the Genre is ‘Classical’.  
	 * (IndirectResourceContributor could also be used in MLC 1.3.1, but it is to 
	 * be removed in MLC 1.4). For classical recordings, this is needed (along with 
	 * the work title) in order to disambiguate the recording and to match usage.
	 * 
	 * When the DisplayComposer is provided, the following are mandatory:
	 *   FullName
	 *   RoleCode
	 * 
	 * @link https://kb.ddex.net/pages/viewpage.action?pageId=9505800
	 * 
	 * @var array
	 */
	private array $DisplayComposers = [];

	function getDisplayComposers(): array {
		return $this->DisplayComposers;
	}

	public function createDisplayComposer(): DisplayComposer {
		$entity = new DisplayComposer();
		$this->DisplayComposers[] = $entity;
		return $entity;
	}

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
	 * @var InitialProducer
	 */
	private InitialProducer $InitialProducer;

	public function getInitialProducer(): InitialProducer {
		return $this->InitialProducer;
	}

	public function setInitialProducer(InitialProducer $InitialProducer): void {
		$this->InitialProducer = $InitialProducer;
	}

	/**
	 * RightsController - This is mandatory along with the following fields
	 *   PartyName/FullName
	 *   PartyId/ProprietaryId with sender’s proprietary ID.  Local producer ID 
	 * is always used by MLCs.
	 *   PartyId/ProprietaryId with recipient’s proprietary ID
	 *   RightsControllerType – This is mandatory for PPL.  Type of rights holder 
	 * can be OriginalCopyrightOwner, SuccessorInTitle, or ExclusiveLicensee as 
	 * defined by the DDEX AVS.
	 *   RightSharePercentage.  The percentage of rights owned between the start 
	 * and end dates of ownership. (12.5 = 12.5%).
	 *   DelegatedUsageRights
	 *   UsageType.  The type of use for which the recording may be licensed.  
	 * This takes a value from the DDEX AVS.
	 *   PeriodOfRightsDelegation/StartDate
	 *   TerritoryOfRightsDelegation  expressed as ISO 3166-1 alpha-2 codes or 
	 * Worldwide.
	 * 
	 * @link https://kb.ddex.net/pages/viewpage.action?pageId=9505800
	 * 
	 * @var array
	 */
	private array $RightsControllers = [];

	/**
	 * @return RightsController[]
	 */
	public function getRightsControllers(): array {
		return $this->RightsControllers;
	}

	public function createRightsController(): RightsController {
		$entity = new RightsController();
		$this->RightsControllers[] = $entity;
		return $entity;
	}

	/**
	 * This is a single string providing how the label wishes the artist name 
	 * should be displayed. This field may well contain, in one string, multiple 
	 * artists’ names (e.g. Coldplay vs. Swedish House Mafia).
	 * Typically a DSP would be expected to use the string as provided when 
	 * displaying the Release or Resource. However, there may be circumstances 
	 * where a DSP wishes to not follow the label’s lead (e.g. when preparing 
	 * content for a device with limited display capabilities).
	 * 
	 * @link https://kb.ddex.net/pages/viewpage.action?pageId=7210962
	 * 
	 * @var string
	 */
	private string $DisplayArtistName;

	public function getDisplayArtistName(): string {
		return $this->DisplayArtistName;
	}

	public function setDisplayArtistName(string $DisplayArtistName): void {
		$this->DisplayArtistName = $DisplayArtistName;
	}

	/**
	 * ResourceContributor (in ERN-4: Contributor) – For each sound recording[3] 
	 * a label may wish to communicate direct contributors, i.e. individuals that 
	 * were in the studio when the recording or mixing took place. In the above 
	 * example there would have been seven individuals: Chris Martin, 
	 * Guy Berryman, Jonny Buckland, Will Champion from Coldplay, and Axwell, 
	 * Steve Angello and Sebastian Ingrosso from the Swedish House Mafia.
	 * 
	 * Resource contributors are, however, not limited to the musicians. Studio 
	 * engineers as well as other studio personnel can also be communicated in 
	 * this manner. Metadata for the Coldplay/Swedish House Mafia’s recording of 
	 * “Every Teardrop Is a Waterfall” thus might include the producers (Markus 
	 * Dravs, Daniel Green and Rik Simpson). Whether a label will provide such 
	 * names is, however, up to them.
	 * 
	 * Individual artists that are also listed as a DisplayArtist are typically 
	 * not repeated in the ResourceContributor section, as all the information 
	 * about their contribution would already have been provided through the 
	 * DisplayArtist composite.
	 * 
	 * While possible, it is normally not recommended that DSPs use 
	 * ResourceContributor information to create individual artist pages. 
	 * However, DSPs might want to consider linking to an existing artist page.
	 * 
	 * Composers and arrangers are, however, no direct contributor roles. If an 
	 * individual has contributed to writing the song, that person should be 
	 * communicated as an indirect contributor.
	 * 
	 * @link https://kb.ddex.net/pages/viewpage.action?pageId=7210962
	 * 
	 * @var array
	 */
	private array $ResourceContributors = [];

	public function getResourceContributors(): array {
		return $this->ResourceContributors;
	}

	public function createResourceContributor(): ResourceContributor {
		$entity = new ResourceContributor();
		$this->ResourceContributors[] = $entity;
		return $entity;
	}

	/**
	 * IndirectResourceContributor – For each sound recording[4] a label may 
	 * wish to also communicate indirect contributors, i.e. the writers of the 
	 * song(s) that have been recorded. Looking at Coldplay and the Swedish House 
	 * Mafia’s song “Every Teardrop Is a Waterfall”, these would be Guy Berryman, 
	 * Jonny Buckland, Will Champion, Chris Martin, Peter Allen and Adrienne 
	 * Anderson.
	 * 
	 * While possible, it is normally not recommended that DSPs use 
	 * IndirectResourceContributor information to create individual artist pages. 
	 * However, DSPs might want to consider linking to an existing artist page. 
	 * Of course if it is a famous IndirectResourceContributor composer, this may 
	 * not apply.
	 * 
	 * Note that IndirectResourceContributors only exist in ERN-3. In ERN-4 
	 * writers et al are communicated in the ResourceContributor tag.
	 * 
	 * @link https://kb.ddex.net/pages/viewpage.action?pageId=7210962
	 * 
	 * @var array
	 */
	private array $IndirectResourceContributors = [];

	public function getIndirectResourceContributors(): array {
		return $this->IndirectResourceContributors;
	}

	public function createIndirectResourceContributor(): IndirectResourceContributor {
		$entity = new IndirectResourceContributor();
		$this->IndirectResourceContributors[] = $entity;
		return $entity;
	}

}
