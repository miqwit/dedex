<?php

namespace DedexBundle\Tests\Controller;

use DedexBundle\Controller\ErnParserController;
use DedexBundle\Entity\Ern382\DisplayArtist;
use DedexBundle\Entity\Ern382\FeaturedArtist;
use DedexBundle\Entity\Ern382\HostSoundCarrier;
use DedexBundle\Entity\Ern382\IndirectResourceContributor;
use DedexBundle\Entity\Ern382\ResourceContributor;
use DedexBundle\Entity\Ern382\RightsController;
use DedexBundle\Entity\Ern382\SoundRecording;
use DedexBundle\Entity\Ern382\SoundRecordingDetailsByTerritory;
use PHPUnit\Framework\TestCase;

class ParserControllerTest extends TestCase {

	public function testCleanTag() {
		$parser_controller = new ErnParserController();
		$this->assertEquals("MYTAG", $parser_controller->cleanTag("MYTAG"));
		$this->assertEquals("MY_TAG", $parser_controller->cleanTag("MY:TAG"));
	}
	
	public function testSample001() {
//    phpinfo();die();
		$xml_path = "tests/samples/001_audioalbum_complete.xml";
		$parser_controller = new ErnParserController();
    $parser_controller->setDisplayLog(true);
		$ddex = $parser_controller->parse($xml_path);
		
		// ERN attributes
//		$this->assertEquals("http://ddex.net/xml/ern/382", $ddex->getXmlns_Ern());
//		$this->assertEquals("http://www.w3.org/2001/XMLSchema-instance", $ddex->getXmlns_Xs());
//		$this->assertEquals("http://ddex.net/xml/ern/382", $ddex->getXs_SchemaLocation());
		$this->assertEquals("ern/382", $ddex->getMessageSchemaVersionId());
		$this->assertEquals("CommonReleaseTypesTypes/14/AudioAlbum", $ddex->getReleaseProfileVersionId());
		$this->assertEquals("en", $ddex->getLanguageAndScriptCode());

		// Message header
		$this->assertEquals("20170503144647-10", $ddex->getMessageHeader()->getMessageThreadId());
		$this->assertEquals("20170503144647-10", $ddex->getMessageHeader()->getMessageId());
		$this->assertEquals("PADPIDA2007061301U", $ddex->getMessageHeader()->getMessageSender()->getPartyId()[0]->value());
		$this->assertEquals("SCPP", $ddex->getMessageHeader()->getMessageSender()->getPartyName()->getFullName());
		$this->assertEquals("PADPIDA2007061302U", $ddex->getMessageHeader()->getMessageRecipient()[0]->getPartyId()[0]->value());
		$this->assertEquals("SCPP2", $ddex->getMessageHeader()->getMessageRecipient()[0]->getPartyName()->getFullName());

		// Is backfill
		$this->assertEquals("true", $ddex->getIsBackfill());

		// Update indicator
		$this->assertEquals("OriginalMessage", $ddex->getUpdateIndicator());
		
		// Resources
		$this->assertCount(6, $ddex->getResourceList()->getSoundRecording());
		/* @var $resource_zero \DedexBundle\Entity\Ern382\Ern\SoundRecordingType */
		$resource_zero = $ddex->getResourceList()->getSoundRecording()[0];
		$this->assertEquals("true", $resource_zero->getIsUpdated());
		$this->assertEquals("en", $resource_zero->getLanguageAndScriptCode());
		$this->assertEquals("PADPIDA2007061301U", $resource_zero->getSoundRecordingType()->getNamespace());
		$this->assertEquals("MusicalWorkSoundRecording", $resource_zero->getSoundRecordingType()->value());
		$this->assertEquals("true", $resource_zero->getIsArtistRelated());
		$this->assertEquals("false", $resource_zero->getSoundRecordingId()[0]->getIsReplaced());
		$this->assertEquals("CASE00000001", $resource_zero->getSoundRecordingId()[0]->getIsrc());
		$this->assertEquals("PADPIDA2007061301U", $resource_zero->getSoundRecordingId()[0]->getCatalogNumber()->getNamespace());
		$this->assertEquals("123456", $resource_zero->getSoundRecordingId()[0]->getCatalogNumber()->value());
		$this->assertEquals("PADPIDA2007061301U", $resource_zero->getSoundRecordingId()[0]->getProprietaryId()[0]->getNamespace());
		$this->assertEquals("00010075760152", $resource_zero->getSoundRecordingId()[0]->getProprietaryId()[0]->value());
		$this->assertEquals("A1", $resource_zero->getResourceReference());
		$this->assertEquals("Can you feel ...the Monkey Claw!", $resource_zero->getReferenceTitle()->getTitleText());
		$this->assertEquals("false", $resource_zero->getIsMedley());
		$this->assertEquals("false", $resource_zero->getIsPotpourri());
		$this->assertEquals("false", $resource_zero->getIsInstrumental());
		$this->assertEquals("false", $resource_zero->getIsHiddenResource());
		$this->assertEquals("false", $resource_zero->getIsBonusResource());
		$this->assertEquals("false", $resource_zero->getIsComputerGenerated());
		$this->assertEquals("true", $resource_zero->getNoSilenceBefore());
		$this->assertEquals("true", $resource_zero->getNoSilenceAfter());
		$this->assertEquals("PT13M31S", $resource_zero->getDuration()->format("PT%iM%sS"));
		$this->assertEquals("false", $resource_zero->getCreationDate()->getIsApproximate());
		$this->assertEquals("false", $resource_zero->getCreationDate()->getIsBefore());
		$this->assertEquals("false", $resource_zero->getCreationDate()->getIsAfter());
		$this->assertEquals("FR", $resource_zero->getCreationDate()->getTerritoryCode());
		$this->assertEquals("2008-09-26", $resource_zero->getCreationDate()->value());
		$this->assertEquals("false", $resource_zero->getMasteredDate()->getIsApproximate());
		$this->assertEquals("false", $resource_zero->getMasteredDate()->getIsBefore());
		$this->assertEquals("false", $resource_zero->getMasteredDate()->getIsAfter());
		$this->assertEquals("2008-09-27", $resource_zero->getMasteredDate()->value());
		/* @var $srdbt_zero SoundRecordingDetailsByTerritory */
		$srdbt_zero = $resource_zero->getSoundRecordingDetailsByTerritory()[0];
		$this->assertEquals("Worldwide", $srdbt_zero->getTerritoryCode());
		$this->assertCount(2, $srdbt_zero->getTitles());
		$this->assertEquals("FormalTitle", $srdbt_zero->getTitles()[0]->getTitleType());
		$this->assertEquals("Can you feel ...the Monkey Claw! formal", $srdbt_zero->getTitles()[0]->getTitleText());
		$this->assertEquals("DisplayTitle", $srdbt_zero->getTitles()[1]->getTitleType());
		$this->assertEquals("Can you feel ...the Monkey Claw!", $srdbt_zero->getTitles()[1]->getTitleText());
		
		$this->assertCount(2, $srdbt_zero->getDisplayArtists());
		$this->assertEquals("1", $srdbt_zero->getDisplayArtists()[0]->getSequenceNumber());
		$this->assertEquals("Monkey Claw", $srdbt_zero->getDisplayArtists()[0]->getPartyName()->getFullName());
		$this->assertEquals("PADPIDA2007061301U", $srdbt_zero->getDisplayArtists()[0]->getPartyId()->getProprietaryId()->getNamespace());
		$this->assertEquals("6687769", $srdbt_zero->getDisplayArtists()[0]->getPartyId()->getProprietaryId()->value());
		$this->assertEquals("MainArtist", $srdbt_zero->getDisplayArtists()[0]->getArtistRole());
		$this->assertEquals("2", $srdbt_zero->getDisplayArtists()[1]->getSequenceNumber());
		$this->assertEquals("Second Artist", $srdbt_zero->getDisplayArtists()[1]->getPartyName()->getFullName());
		$this->assertEquals("PADPIDA2007061301U", $srdbt_zero->getDisplayArtists()[1]->getPartyId()->getProprietaryId()->getNamespace());
		$this->assertEquals("6687759", $srdbt_zero->getDisplayArtists()[1]->getPartyId()->getProprietaryId()->value());
		$this->assertEquals("MainArtist", $srdbt_zero->getDisplayArtists()[1]->getArtistRole());
		
		// Display composers
		$this->assertCount(2, $srdbt_zero->getDisplayComposers());
		$this->assertEquals("0", $srdbt_zero->getDisplayComposers()[0]->getSequenceNumber());
		$this->assertEquals("BONDU PIERRE", $srdbt_zero->getDisplayComposers()[0]->getPartyName()->getFullName());
		$this->assertEquals("PADPIDA2007061301U", $srdbt_zero->getDisplayComposers()[0]->getPartyId()->getProprietaryId()->getNamespace());
		$this->assertEquals("71166", $srdbt_zero->getDisplayComposers()[0]->getPartyId()->getProprietaryId()->value());
		$this->assertEquals("1", $srdbt_zero->getDisplayComposers()[1]->getSequenceNumber());
		$this->assertEquals("Frederic Chopin", $srdbt_zero->getDisplayComposers()[1]->getPartyName()->getFullName());
		$this->assertEquals("PADPIDA2007061301U", $srdbt_zero->getDisplayComposers()[1]->getPartyId()->getProprietaryId()->getNamespace());
		$this->assertEquals("71167", $srdbt_zero->getDisplayComposers()[1]->getPartyId()->getProprietaryId()->value());

		// Initial producer
		$this->assertEquals("UNIVERSAL MUSIC FRANCE", $srdbt_zero->getInitialProducer()->getPartyName()->getFullName());
		$this->assertEquals("PADPIDA2007061301U", $srdbt_zero->getInitialProducer()->getPartyId()->getProprietaryId()->getNamespace());
		$this->assertEquals("1", $srdbt_zero->getInitialProducer()->getPartyId()->getProprietaryId()->value());
		$this->assertEquals("FR", $srdbt_zero->getInitialProducer()->getTerritoryCode());
		
		// Rights controllers
		$this->assertCount(2, $srdbt_zero->getRightsControllers());
		/* @var $rctrl_one RightsController */
		$rctrl_one = $srdbt_zero->getRightsControllers()[0];
		$this->assertEquals("LeftRight", $rctrl_one->getPartyName()->getFullName());
		$this->assertEquals("10", $rctrl_one->getRightSharePercentage());
		$this->assertEquals("OriginalCopyrightOwner", $rctrl_one->getRightsControllerRole());
		$this->assertCount(3, $rctrl_one->getDelegatedUsageRights()->getUseTypes());
		$this->assertEquals("Broadcast", $rctrl_one->getDelegatedUsageRights()->getUseTypes()[0]);
		$this->assertEquals("Simulcast", $rctrl_one->getDelegatedUsageRights()->getUseTypes()[1]);
		$this->assertEquals("PerformInPublic", $rctrl_one->getDelegatedUsageRights()->getUseTypes()[2]);
		$this->assertEquals("2008-09-26", $rctrl_one->getDelegatedUsageRights()->getPeriodOfRightsDelegation()->getStartDate());
		$this->assertEquals("FR", $rctrl_one->getDelegatedUsageRights()->getTerritoryOfRightsDelegation());
		/* @var $rctrl_two RightsController */
		$rctrl_two = $srdbt_zero->getRightsControllers()[1];
		$this->assertEquals("LeftRight", $rctrl_two->getPartyName()->getFullName());
		$this->assertEquals("50", $rctrl_two->getRightSharePercentage());
		$this->assertEquals("JP", $rctrl_two->getDelegatedUsageRights()->getTerritoryOfRightsDelegation());
		
		// Resource Contributors
		$this->assertCount(2, $srdbt_zero->getResourceContributors());
		/* @var $rescont_one ResourceContributor */
		$rescont_one = $srdbt_zero->getResourceContributors()[0];
		$this->assertEquals("1", $rescont_one->getSequenceNumber());
		$this->assertEquals("Chris Martin", $rescont_one->getPartyName()->getFullName());
		$this->assertEquals("true", $rescont_one->getPartyId()->getIsISNI());
		$this->assertEquals("0000000114707136", $rescont_one->getPartyId()->value());
		$this->assertEquals("Member", $rescont_one->getResourceContributorRole());
		/* @var $rescont_two ResourceContributor */
		$rescont_two = $srdbt_zero->getResourceContributors()[1];
		$this->assertEquals("2", $rescont_two->getSequenceNumber());
		$this->assertEquals("Markus Dravs", $rescont_two->getPartyName()->getFullName());
		$this->assertEquals("Producer", $rescont_two->getResourceContributorRole());
		
		// Indirect Resource Contributors
		$this->assertCount(2, $srdbt_zero->getIndirectResourceContributors());
		/* @var $resindcont_one IndirectResourceContributor */
		$resindcont_one = $srdbt_zero->getIndirectResourceContributors()[0];
		$this->assertEquals("1", $resindcont_one->getSequenceNumber());
		$this->assertEquals("Chris Martin", $resindcont_one->getPartyName()->getFullName());
		$this->assertEquals("true", $resindcont_one->getPartyId()->getIsISNI());
		$this->assertEquals("0000000114707136", $resindcont_one->getPartyId()->value());
		$this->assertEquals("ComposerLyricist", $resindcont_one->getIndirectResourceContributorRole());
		/* @var $resindcont_two IndirectResourceContributor */
		$resindcont_two = $srdbt_zero->getIndirectResourceContributors()[1];
		$this->assertEquals("2", $resindcont_two->getSequenceNumber());
		$this->assertEquals("Chris Martin 2", $resindcont_two->getPartyName()->getFullName());
		$this->assertEquals("true", $resindcont_two->getPartyId()->getIsISNI());
		$this->assertEquals("0000000114707136", $resindcont_two->getPartyId()->value());
		$this->assertEquals("ComposerLyricist", $resindcont_two->getIndirectResourceContributorRole());
		
		// Featured artists
		$this->assertCount(2, $srdbt_zero->getFeaturedArtists());
		/* @var $feat_one FeaturedArtist */
		$feat_one = $srdbt_zero->getFeaturedArtists()[0];
		$this->assertCount(2, $feat_one->getInstrumentTypes());
		$this->assertEquals("VOC", $feat_one->getInstrumentTypes()[0]);
		$this->assertEquals("DRU", $feat_one->getInstrumentTypes()[1]);
		$this->assertEquals("Female", $feat_one->getSex());
		$this->assertEquals("GB", $feat_one->getDateAndPlaceOfBirth()->getTerritoryCode());
		$this->assertEquals("1986-08-02", $feat_one->getDateAndPlaceOfBirth()->value());
		$this->assertEquals("GB", $feat_one->getTerritoryOfResidency());
		$this->assertCount(2, $feat_one->getPartyIds());
		$this->assertEquals("IPN", $feat_one->getPartyIds()[0]->getNamespace());
		$this->assertEquals("12345678", $feat_one->getPartyIds()[0]->value());
		$this->assertEquals("LocalPerformerId", $feat_one->getPartyIds()[1]->getNamespace());
		$this->assertEquals("12345678", $feat_one->getPartyIds()[1]->value());
		$this->assertEquals("Jane Doe", $feat_one->getPartyName()->getFullName());
		$this->assertEquals("Jane", $feat_one->getPartyName()->getNamesBeforeKeyName());
		$this->assertEquals("Doe", $feat_one->getPartyName()->getKeyName());
		$this->assertEquals("SDEGRoleCode", $feat_one->getArtistRole()->getNamespace());
		$this->assertEquals("MU", $feat_one->getArtistRole()->getUserDefinedValue());
		$this->assertEquals("UserDefined", $feat_one->getArtistRole()->value());
		$this->assertEquals("GB", $feat_one->getTerritoryOfPerformance());
		$this->assertEquals("2014-06-10", $feat_one->getPerformanceDate());
		
		// Host sound carriers
		$this->assertCount(2, $srdbt_zero->getHostSoundCarriers());
		/* @var $hsc_one HostSoundCarrier */
		$hsc_one = $srdbt_zero->getHostSoundCarriers()[0];
		$this->assertEquals("FRUM70701194", $hsc_one->getReleaseId()->getISRC());
		$this->assertEquals("0042288237846", $hsc_one->getReleaseId()->getICPN());
		$this->assertEquals("PADPIDA2007061301U", $hsc_one->getReleaseId()->getCatalogNumber()->getNamespace());
		$this->assertEquals("0042288237846", $hsc_one->getReleaseId()->getCatalogNumber()->value());
		$this->assertEquals("PADPIDA2007061301U", $hsc_one->getReleaseId()->getProprietaryId()->getNamespace());
		$this->assertEquals("5993921", $hsc_one->getReleaseId()->getProprietaryId()->value());
		$this->assertEquals("DisplayTitle", $hsc_one->getTitle()->getTitleType());
		$this->assertEquals("STUDIOLIVE", $hsc_one->getTitle()->getTitleText());
		$this->assertCount(2, $hsc_one->getDisplayArtists());
		/* @var $art_one DisplayArtist */
		$art_one = $hsc_one->getDisplayArtists()[0];
		$this->assertEquals("0", $art_one->getSequenceNumber());
		$this->assertEquals("KATERINE", $art_one->getPartyName()->getFullName());
		$this->assertEquals("PADPIDA2007061301U", $art_one->getPartyId()->getProprietaryId()->getNamespace());
		$this->assertEquals("6687769", $art_one->getPartyId()->getProprietaryId()->value());
		$this->assertEquals("MainArtist", $art_one->getArtistRole());
		// Do not test artist 2
		$this->assertEquals("8", $hsc_one->getTrackNumber());
		$this->assertEquals("1", $hsc_one->getSideNumber());
		$this->assertEquals("CD", $hsc_one->getCarrierType());
		$this->assertEquals("15", $hsc_one->getNumberOfSoundRecordingsClaimedInCarrier());
		$this->assertEquals("NotCompiled", $hsc_one->getCompilationType());
		$this->assertEquals("true", $hsc_one->getIsPhysicalDistribution());
		$this->assertEquals("false", $hsc_one->getIsHiddenResource());
		$this->assertEquals("false", $hsc_one->getIsBonusResource());
		$this->assertEquals("false", $hsc_one->getIsInternalCompilation());
		
		
		// PLine
		$pline = $srdbt_zero->getPLine();
		$this->assertEquals("2010", $pline->getYear());
		$this->assertEquals("UNIVERSAL MUSIC FRANCE", $pline->getPLineCompany());
		$this->assertEquals("(P) 2010 Iron Crown Music", $pline->getPLineText());
		
	}

	public function testXsdObjects() {
		$xml_path = "tests/samples/001_audioalbum_complete.xml";
		$parser_controller = new ErnParserController();
		$ern = $parser_controller->parse($xml_path);
		
		// Message header
		$this->assertEquals("ern/382", $ern->getMessageSchemaVersionId());
		$this->assertEquals("20170503144647-10", $ern->getMessageHeader()->getMessageThreadId());
		
		$this->assertCount(6, $ern->getResourceList()->getSoundRecording());

	}
}
