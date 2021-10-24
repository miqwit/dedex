<?php

namespace DedexBundle\Tests\Controller;

use DedexBundle\Controller\ErnParserController;
use DedexBundle\Entity\Ern382\GenreType;
use DedexBundle\Entity\Ern382\ImageDetailsByTerritoryType;
use DedexBundle\Entity\Ern382\ImageType;
use DedexBundle\Entity\Ern382\IndirectResourceContributor;
use DedexBundle\Entity\Ern382\NewReleaseMessage;
use DedexBundle\Entity\Ern382\ReleaseDetailsByTerritoryType;
use DedexBundle\Entity\Ern382\ReleaseType;
use DedexBundle\Entity\Ern382\ResourceContributor;
use DedexBundle\Entity\Ern382\SoundRecordingDetailsByTerritoryType;
use DedexBundle\Entity\Ern382\TechnicalSoundRecordingDetailsType;
use DedexBundle\Exception\FileNotFoundException;
use DedexBundle\Exception\XmlLoadException;
use DedexBundle\Exception\XmlParseException;
use PHPUnit\Framework\TestCase;

class ParserControllerTest extends TestCase {

  public function testCleanTag() {
    $parser_controller = new ErnParserController();
    $this->assertEquals("MYTAG", $parser_controller->cleanTag("MYTAG"));
    $this->assertEquals("MY_TAG", $parser_controller->cleanTag("MY:TAG"));
  }

  public function testSample001() {
    $xml_path = "tests/samples/001_audioalbum_complete.xml";
    $parser_controller = new ErnParserController();
    // Set this to true to see logs from the parser
    $parser_controller->setDisplayLog(false);
    /* @var $ddex NewReleaseMessage */
    $ddex = $parser_controller->parse($xml_path);

    // ERN attributes
    $this->assertEquals("ern/382", $ddex->getMessageSchemaVersionId());
    $this->assertEquals("CommonReleaseTypesTypes/14/AudioAlbumMusicOnly", $ddex->getReleaseProfileVersionId());
    $this->assertEquals("en", $ddex->getLanguageAndScriptCode());

    // Message header
    $this->assertEquals(null, $ddex->getMessageHeader()->getMessageThreadId());
    $this->assertEquals(null, $ddex->getMessageHeader()->getMessageId());
    $this->assertEquals("DPID_OF_THE_SENDER", $ddex->getMessageHeader()->getMessageSender()->getPartyId()[0]->value());
    $this->assertEquals("DPID_OF_THE_RECIPIENT", $ddex->getMessageHeader()->getMessageRecipient()[0]->getPartyId()[0]->value());
    $this->assertEquals("2012-12-11T15:50:00+00:00", $ddex->getMessageHeader()->getMessageCreatedDateTime()->format("Y-m-d\TH:i:sP"));

    // Is backfill
    $this->assertEquals("true", $ddex->getIsBackfill());

    // Resources
    
    // SoundRecording
    $this->assertCount(6, $ddex->getResourceList()->getSoundRecording());
    /* @var $resource_zero \DedexBundle\Entity\Ern382\Ern\SoundRecordingType */
    $resource_zero = $ddex->getResourceList()->getSoundRecording()[0];
    $this->assertEquals("MusicalWorkSoundRecording", $resource_zero->getSoundRecordingType()->value());
    $this->assertEquals("CASE00000001", $resource_zero->getSoundRecordingId()[0]->getIsrc());
    $this->assertEquals("T1234567890", $resource_zero->getIndirectSoundRecordingId()[0]->getIswc());
    $this->assertEquals("A1", $resource_zero->getResourceReference());
    $this->assertEquals("Can you feel ...the Monkey Claw!", $resource_zero->getReferenceTitle()->getTitleText());
    $this->assertEquals("PT13M31S", $resource_zero->getDuration()->format("PT%iM%sS"));
    /* @var $srdbt_zero SoundRecordingDetailsByTerritoryType */
    $srdbt_zero = $resource_zero->getSoundRecordingDetailsByTerritory()[0];
    $this->assertEquals("Worldwide", $srdbt_zero->getTerritoryCode()[0]);
    $this->assertCount(2, $srdbt_zero->getTitle());
    $this->assertEquals("FormalTitle", $srdbt_zero->getTitle()[0]->getTitleType());
    $this->assertEquals("Can you feel ...the Monkey Claw! formal", $srdbt_zero->getTitle()[0]->getTitleText()->value());
    $this->assertEquals("DisplayTitle", $srdbt_zero->getTitle()[1]->getTitleType());
    $this->assertEquals("Can you feel ...the Monkey Claw!", $srdbt_zero->getTitle()[1]->getTitleText());

    $this->assertCount(2, $srdbt_zero->getDisplayArtist());
    $this->assertEquals("1", $srdbt_zero->getDisplayArtist()[0]->getSequenceNumber());
    $this->assertEquals("Monkey Claw", $srdbt_zero->getDisplayArtist()[0]->getPartyName()[0]->getFullName());
    $this->assertEquals("MainArtist", $srdbt_zero->getDisplayArtist()[0]->getArtistRole()[0]);
    $this->assertEquals("2", $srdbt_zero->getDisplayArtist()[1]->getSequenceNumber());
    $this->assertEquals("Second Artist", $srdbt_zero->getDisplayArtist()[1]->getPartyName()[0]->getFullName());
    $this->assertEquals("MainArtist", $srdbt_zero->getDisplayArtist()[1]->getArtistRole()[0]);

    // Resource Contributors
    $this->assertCount(1, $srdbt_zero->getResourceContributor());
    /* @var $rescont_one ResourceContributor */
    $rescont_one = $srdbt_zero->getResourceContributor()[0];
    $this->assertEquals("1", $rescont_one->getSequenceNumber());
    $this->assertEquals("Steve Albino", $rescont_one->getPartyName()[0]->getFullName());
    $this->assertEquals("Producer", $rescont_one->getResourceContributorRole()[0]);

    // Indirect Resource Contributors
    $this->assertCount(1, $srdbt_zero->getIndirectResourceContributor());
    /* @var $resindcont_one IndirectResourceContributor */
    $resindcont_one = $srdbt_zero->getIndirectResourceContributor()[0];
    $this->assertEquals("1", $resindcont_one->getSequenceNumber());
    $this->assertEquals("Bob Black", $resindcont_one->getPartyName()[0]->getFullName());
    $this->assertEquals("Composer", $resindcont_one->getIndirectResourceContributorRole()[0]);
    
    // ResourceReleaseDate
    $this->assertEquals("2011", $srdbt_zero->getResourceReleaseDate());

    // PLine
    $pline = $srdbt_zero->getPLine()[0];
    $this->assertEquals("2010", $pline->getYear());
    $this->assertEquals("(P) 2010 Iron Crown Music", $pline->getPLineText());
    
    // Genres
    $this->assertCount(1, $srdbt_zero->getGenre());
    /* @var $genre GenreType */
    $genre = $srdbt_zero->getGenre()[0];
    $this->assertEquals("Metal", $genre->getGenreText());
    $this->assertEquals("Progressive Metal", $genre->getSubGenre());
    
    // ParentalWarningType
    $this->assertCount(1, $srdbt_zero->getParentalWarningType());
    $this->assertEquals("NotExplicit", $srdbt_zero->getParentalWarningType()[0]);
    
    // TechnicalSoundRecordingDetails
    $this->assertCount(1, $srdbt_zero->getTechnicalSoundRecordingDetails());
    /* @var $technicalSRD TechnicalSoundRecordingDetailsType */
    $technicalSRD = $srdbt_zero->getTechnicalSoundRecordingDetails()[0];
    $this->assertEquals("T1", $technicalSRD->getTechnicalResourceDetailsReference());
    $this->assertEquals("A1UCASE0000000401X_01_01.wav", $technicalSRD->getFile()[0]->getFileName());
    
    // Image
    $this->assertCount(1, $ddex->getResourceList()->getImage());
    /* @var $image ImageType */
    $image = $ddex->getResourceList()->getImage()[0];
    $this->assertEquals("FrontCoverImage", $image->getImageType());
    $this->assertCount(1, $image->getImageId());
    $this->assertCount(1, $image->getImageId()[0]->getProprietaryId());
    $this->assertEquals("DPID:PADPIDA0000000001A", $image->getImageId()[0]->getProprietaryId()[0]->getNamespace());
    $this->assertEquals("A7", $image->getResourceReference());
    
    // ImageDetailsByTerritory
    $this->assertCount(1, $image->getImageDetailsByTerritory());
    /* @var $image_dbt ImageDetailsByTerritoryType */
    $image_dbt = $image->getImageDetailsByTerritory()[0];
    $this->assertCount(1, $image_dbt->getTerritoryCode());
    $this->assertEquals("Worldwide", $image_dbt->getTerritoryCode()[0]);
    $this->assertCount(1, $image_dbt->getParentalWarningType());
    $this->assertEquals("NotExplicit", $image_dbt->getParentalWarningType()[0]->value());
    $this->assertCount(1, $image_dbt->getTechnicalImageDetails());
    $this->assertEquals("T7", $image_dbt->getTechnicalImageDetails()[0]->getTechnicalResourceDetailsReference());
    $this->assertCount(1, $image_dbt->getTechnicalImageDetails()[0]->getFile());
    $this->assertEquals("A1UCASE0000000401X.jpeg", $image_dbt->getTechnicalImageDetails()[0]->getFile()[0]->getFileName());
    
    // Releases
    $this->assertCount(7, $ddex->getReleaseList()->getRelease());
    
    // Main release
    /* @var $main_release ReleaseType */
    $main_release = $ddex->getReleaseList()->getRelease()[0];
    $this->assertEquals("true", $main_release->getIsMainRelease());
    $this->assertCount(1, $main_release->getReleaseId());
    $this->assertEquals("A1UCASE0000000401X", $main_release->getReleaseId()[0]->getGRid());
    $this->assertCount(1, $main_release->getReleaseReference());
    $this->assertEquals("R0", $main_release->getReleaseReference()[0]);
    $this->assertEquals("A Monkey Claw in a Velvet Glove", $main_release->getReferenceTitle()->getTitleText());
    
    // Check first and last reference in list
    $this->assertCount(7, $main_release->getReleaseResourceReferenceList());
    $this->assertEquals("PrimaryResource", $main_release->getReleaseResourceReferenceList()[0]->getReleaseResourceType());
    $this->assertEquals("A1", $main_release->getReleaseResourceReferenceList()[0]->value());
    $this->assertEquals("SecondaryResource", $main_release->getReleaseResourceReferenceList()[6]->getReleaseResourceType());
    $this->assertEquals("A7", $main_release->getReleaseResourceReferenceList()[6]->value());

    $this->assertCount(1, $main_release->getReleaseType());
    $this->assertEquals("Album", $main_release->getReleaseType()[0]);

    $this->assertCount(1, $main_release->getReleaseDetailsByTerritory());
    /* @var $release_dbt ReleaseDetailsByTerritoryType */
    $release_dbt = $main_release->getReleaseDetailsByTerritory()[0];
    $this->assertCount(1, $release_dbt->getTerritoryCode());
    $this->assertEquals("Worldwide", $release_dbt->getTerritoryCode()[0]);
    $this->assertCount(1, $release_dbt->getDisplayArtistName());
    $this->assertEquals("Monkey Claw", $release_dbt->getDisplayArtistName()[0]);
    $this->assertCount(1, $release_dbt->getLabelName());
    $this->assertEquals("Iron Crown Music", $release_dbt->getLabelName()[0]);
    
    $this->assertCount(2, $release_dbt->getTitle());
    $this->assertEquals("FormalTitle", $release_dbt->getTitle()[0]->getTitleType());  
    $this->assertEquals("A Monkey Claw in a Velvet Glove formal", $release_dbt->getTitle()[0]->getTitleText()->value());  
    $this->assertEquals("DisplayTitle", $release_dbt->getTitle()[1]->getTitleType());  
    $this->assertEquals("A Monkey Claw in a Velvet Glove", $release_dbt->getTitle()[1]->getTitleText()->value());
    
    $this->assertCount(1, $release_dbt->getDisplayArtist());
    $this->assertEquals("1", $release_dbt->getDisplayArtist()[0]->getSequenceNumber());
  }

  /**
   * Test ERN 411 is parsed correctly
   */
  public function testSample015Ern411() {
    $xml_path = "tests/samples/015_ern411.xml";
    $parser_controller = new ErnParserController();
    // Set this to true to see logs from the parser
    $parser_controller->setDisplayLog(false);
    /* @var $ddex NewReleaseMessage */
    $ddex = $parser_controller->parse($xml_path);

    // ERN version is now 411
    $this->assertEquals("ern/411", $ddex->getMessageSchemaVersionId());
  }

}
