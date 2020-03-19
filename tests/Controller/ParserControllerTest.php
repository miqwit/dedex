<?php

namespace DedexBundle\Tests\Controller;

use DedexBundle\Controller\ParserController;
use PHPUnit\Framework\TestCase;

class ParserControllerTest extends TestCase {

	public function testCleanTag() {
		$parser_controller = new ParserController();
		$this->assertEquals("MYTAG", $parser_controller->cleanTag("MYTAG"));
		$this->assertEquals("MY_TAG", $parser_controller->cleanTag("MY:TAG"));
	}
	
	public function testSample001() {
		$xml_path = "tests/samples/001_audioalbum_complete.xml";
		$parser_controller = new ParserController();
		$ddex = $parser_controller->parse($xml_path);
		
		// ERN attributes
		$this->assertEquals("http://ddex.net/xml/ern/382", $ddex->getXmlns_Ern());
		$this->assertEquals("http://www.w3.org/2001/XMLSchema-instance", $ddex->getXmlns_Xs());
		$this->assertEquals("http://ddex.net/xml/ern/382 ", $ddex->getXs_SchemaLocation());
		$this->assertEquals("ern/382", $ddex->getMessageSchemaVersionId());
		$this->assertEquals("CommonReleaseTypesTypes/14/AudioAlbum", $ddex->getReleaseProfileVersionId());
		$this->assertEquals("en", $ddex->getLanguageAndScriptCode());

		// Message header
		$this->assertEquals("20170503144647-10", $ddex->getMessageHeader()->getMessageThreadId());
		$this->assertEquals("20170503144647-10", $ddex->getMessageHeader()->getMessageId());
		$this->assertEquals("PADPIDA2007061301U", $ddex->getMessageHeader()->getMessageSender()->getPartyId());
		$this->assertEquals("SCPP", $ddex->getMessageHeader()->getMessageSender()->getPartyName()->getFullName());
		$this->assertEquals("PADPIDA2007061302U", $ddex->getMessageHeader()->getMessageRecipient()->getPartyId());
		$this->assertEquals("SCPP2", $ddex->getMessageHeader()->getMessageRecipient()->getPartyName()->getFullName());

		// Is backfill
		$this->assertTrue($ddex->getIsBackfill());

		// Update indicator
		$this->assertEquals("OriginalMessage", $ddex->getUpdateIndicator());
		
		// Resources
		$this->assertCount(8, $ddex->getResourceList()->getResources());
		/* @var $resource_zero \DedexBundle\Entity\SoundRecording */
		$resource_zero = $ddex->getResourceList()->getResources()[0];
		$this->assertEquals("true", $resource_zero->getIsUpdated());
		$this->assertEquals("en", $resource_zero->getLanguageAndScriptCode());
		$this->assertEquals("PADPIDA2007061301U", $resource_zero->getSoundRecordingType()->getNamespace());
		$this->assertEquals("PADPIDA2007061301U", $resource_zero->getSoundRecordingType()->getNamespace());
		$this->assertEquals("MusicalWorkSoundRecording", $resource_zero->getSoundRecordingType()->getData());
		$this->assertEquals("true", $resource_zero->getIsArtistRelated());
		$this->assertEquals("false", $resource_zero->getSoundRecordingId()->getIsReplaced());
		$this->assertEquals("CASE00000001", $resource_zero->getSoundRecordingId()->getIsrc());
		$this->assertEquals("PADPIDA2007061301U", $resource_zero->getSoundRecordingId()->getCatalogNumber()->getNamespace());
		$this->assertEquals("123456", $resource_zero->getSoundRecordingId()->getCatalogNumber()->getData());
		$this->assertEquals("PADPIDA2007061301U", $resource_zero->getSoundRecordingId()->getProprietaryId()->getNamespace());
		$this->assertEquals("00010075760152", $resource_zero->getSoundRecordingId()->getProprietaryId()->getData());
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
		$this->assertEquals("PT13M31S", $resource_zero->getDuration());
		$this->assertEquals("false", $resource_zero->getCreationDate()->getIsApproximate());
		$this->assertEquals("false", $resource_zero->getCreationDate()->getIsBefore());
		$this->assertEquals("false", $resource_zero->getCreationDate()->getIsAfter());
		$this->assertEquals("FR", $resource_zero->getCreationDate()->getTerritoryCode());
		$this->assertEquals("2008-09-26", $resource_zero->getCreationDate()->getData());
		$this->assertEquals("false", $resource_zero->getMasteredDate()->getIsApproximate());
		$this->assertEquals("false", $resource_zero->getMasteredDate()->getIsBefore());
		$this->assertEquals("false", $resource_zero->getMasteredDate()->getIsAfter());
		$this->assertEquals("2008-09-27", $resource_zero->getMasteredDate()->getData());
		/* @var $srdbt_zero \DedexBundle\Entity\SoundRecordingDetailsByTerritory */
		$srdbt_zero = $resource_zero->getSoundRecordingDetailsByTerritorys()[0];
		$this->assertEquals("Worldwide", $srdbt_zero->getTerritoryCode());
		$this->assertCount(2, $srdbt_zero->getTitles());
		$this->assertEquals("FormalTitle", $srdbt_zero->getTitles()[0]->getTitleType());
		$this->assertEquals("Can you feel ...the Monkey Claw! formal", $srdbt_zero->getTitles()[0]->getTitleText());
		$this->assertEquals("DisplayTitle", $srdbt_zero->getTitles()[1]->getTitleType());
		$this->assertEquals("Can you feel ...the Monkey Claw!", $srdbt_zero->getTitles()[1]->getTitleText());
	}

}
