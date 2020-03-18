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
	
	public function testDelivery001() {
		$xml_path = "tests/samples/Profile_AudioAlbum_WithBooklet.xml";
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
		$this->assertEquals("DPID_OF_THE_SENDER", $ddex->getMessageHeader()->getMessageSender()->getPartyId());
		$this->assertEquals("DPID_OF_THE_RECIPIENT", $ddex->getMessageHeader()->getMessageRecipient()->getPartyId());

		// Is backfill
		$this->assertTrue($ddex->getIsBackfill());

		// Update indicator
		$this->assertEquals(null, $ddex->getUpdateIndicator());
		
		// Resources
		$this->assertCount(8, $ddex->getResourceList()->getResources());
		$resource_zero = $ddex->getResourceList()->getResources()[0];
		$this->assertEquals("MusicalWorkSoundRecording", $resource_zero->getSoundRecordingType()->getData());
		$this->assertEquals("CASE00000001", $resource_zero->getSoundRecordingId()->getIsrc());
		$this->assertEquals("A1", $resource_zero->getResourceReference());
		$this->assertEquals("Can you feel ...the Monkey Claw!", $resource_zero->getReferenceTitle()->getTitleText());
	}

}
