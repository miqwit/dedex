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
   * Test that artists with UTF-8 names in it are parsed properly, such 
   * as Zvečansko kolo or Šumadijsko lagano kolo.
   * @see https://github.com/miqwit/dedex/issues/6
   */
  public function testSample016Utf8Artist() {
    $xml_path = "tests/samples/016_utf8_artists.xml";
    $parser_controller = new ErnParserController();
    // Set this to true to see logs from the parser
    $parser_controller->setDisplayLog(false);
    /* @var $ddex NewReleaseMessage */
    $ddex = $parser_controller->parse($xml_path);
    
    
    // In first sound recording, check that display artist is Mirko Kordić
    /* @var $resource_zero \DedexBundle\Entity\Ern382\Ern\SoundRecordingType */
    $resource_zero = $ddex->getResourceList()->getSoundRecording()[0];
    /* @var $srdbt_zero SoundRecordingDetailsByTerritoryType */
    $srdbt_zero = $resource_zero->getSoundRecordingDetailsByTerritory()[0];
    $this->assertEquals("Mirko Kordić", $srdbt_zero->getDisplayArtist()[0]->getPartyName()[0]->getFullName());
    $this->assertEquals("N. Áutor", $srdbt_zero->getResourceContributor()[1]->getPartyName()[0]->getFullName());
    
    // Check that Reference Title of Sound Recording 3 (idx 2) is Zvečansko kolo
    /* @var $resource_two \DedexBundle\Entity\Ern382\SoundRecordingType */
    $resource_two = $ddex->getResourceList()->getSoundRecording()[2];
    $this->assertEquals("Zvečansko kolo", $resource_two->getReferenceTitle()->getTitleText());
    
    // Check that Reference Title of Sound Recording 4 (idx 3) is Šumadijsko lagano kolo
    /* @var $resource_three \DedexBundle\Entity\Ern382\SoundRecordingType */
    $resource_three = $ddex->getResourceList()->getSoundRecording()[3];
    $this->assertEquals("Šumadijsko lagano kolo", $resource_three->getReferenceTitle()->getTitleText());
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

        // ERN version is now 411. It is using classes with namespace 411.
        // ERN 411 does not have a getMessageSchemaVersionId() function
        $this->assertEquals('DedexBundle\Entity\Ern411\NewReleaseMessage', get_class($ddex));
    }

    /**
     * Test ERN 42 is parsed correctly
     */
    public function testSample015Ern42() {
        $xml_path = "tests/samples/018_ern42.xml";
        $parser_controller = new ErnParserController();
        // Set this to true to see logs from the parser
        $parser_controller->setDisplayLog(false);
        /* @var $ddex NewReleaseMessage */
        $ddex = $parser_controller->parse($xml_path);

        // ERN version is now 42. It is using classes with namespace 42.
        // ERN 42 does not have a getMessageSchemaVersionId() function
        $this->assertEquals('DedexBundle\Entity\Ern42\NewReleaseMessage', get_class($ddex));
    }

  /**
   * Test ERN 43 is parsed correctly - comprehensive test matching depth of testSample001
   */
  public function testSample018Ern43() {
    $xml_path = "tests/samples/018_ern43.xml";
    $parser_controller = new ErnParserController();
    $parser_controller->setDisplayLog(false);
    $ddex = $parser_controller->parse($xml_path);

    // ERN version is 43. It uses classes with namespace Ern43.
    $this->assertEquals('DedexBundle\Entity\Ern43\NewReleaseMessage', get_class($ddex));

    // Message header
    $this->assertEquals("Test43", $ddex->getMessageHeader()->getMessageThreadId());
    $this->assertEquals("Test43.1", $ddex->getMessageHeader()->getMessageId());
    $this->assertEquals("PADPIDA2024021301T", $ddex->getMessageHeader()->getMessageSender()->getPartyId());
    $this->assertEquals("Test Sender", $ddex->getMessageHeader()->getMessageSender()->getPartyName()->getFullName());
    $this->assertEquals("PADPIDA2024021302R", $ddex->getMessageHeader()->getMessageRecipient()[0]->getPartyId());
    $this->assertEquals("Test Recipient", $ddex->getMessageHeader()->getMessageRecipient()[0]->getPartyName()->getFullName());
    $this->assertEquals("2024-01-15T10:00:00+00:00", $ddex->getMessageHeader()->getMessageCreatedDateTime()->format("Y-m-d\TH:i:sP"));

    // Resources
    $this->assertCount(2, $ddex->getResourceList()->getSoundRecording());
    $this->assertCount(1, $ddex->getResourceList()->getImage());

    // First sound recording
    $sr0 = $ddex->getResourceList()->getSoundRecording()[0];
    $this->assertEquals("A1", $sr0->getResourceReference());
    $this->assertEquals("MusicalWorkSoundRecording", (string) $sr0->getType());
    $this->assertEquals("TEST00000001", $sr0->getSoundRecordingEdition()[0]->getResourceId()[0]->getISRC());
    $this->assertEquals("Track One", (string) $sr0->getDisplayTitleText()[0]);
    $this->assertEquals("PT0H3M30S", $sr0->getDuration()->format("PT%hH%iM%sS"));
    $this->assertEquals("NotExplicit", (string) $sr0->getParentalWarningType()[0]);

    // Sound recording display artist (resolved via PartyList)
    $this->assertCount(1, $sr0->getDisplayArtist());
    $this->assertEquals("Test Artist", $this->resolvePartyName($ddex, $sr0->getDisplayArtist()[0]->getArtistPartyReference()));
    $this->assertEquals("MainArtist", (string) $sr0->getDisplayArtist()[0]->getDisplayArtistRole());

    // Sound recording PLine (from SoundRecordingEdition)
    $pline = $sr0->getSoundRecordingEdition()[0]->getPLine()[0];
    $this->assertEquals("2024", $pline->getYear());
    $this->assertEquals("(P) 2024 Test Label", $pline->getPLineText());

    // Sound recording technical details (inside edition for ERN 4.3)
    $techDetails = $sr0->getSoundRecordingEdition()[0]->getTechnicalDetails();
    $this->assertCount(1, $techDetails);
    $this->assertEquals("T1", $techDetails[0]->getTechnicalResourceDetailsReference());
    $this->assertEquals("track_001.wav", $techDetails[0]->getDeliveryFile()[0]->getFile()->getURI());

    // Second sound recording
    $sr1 = $ddex->getResourceList()->getSoundRecording()[1];
    $this->assertEquals("A2", $sr1->getResourceReference());
    $this->assertEquals("TEST00000002", $sr1->getSoundRecordingEdition()[0]->getResourceId()[0]->getISRC());
    $this->assertEquals("Track Two", (string) $sr1->getDisplayTitleText()[0]);
    $this->assertEquals("PT0H4M15S", $sr1->getDuration()->format("PT%hH%iM%sS"));

    // Image
    $image = $ddex->getResourceList()->getImage()[0];
    $this->assertEquals("A3", $image->getResourceReference());
    $this->assertEquals("FrontCoverImage", (string) $image->getType());
    $this->assertEquals("test_cover.jpg", $image->getTechnicalDetails()[0]->getFile()->getURI());

    // Releases (1 main release + 2 track releases)
    $release = $ddex->getReleaseList()->getRelease();
    $this->assertNotNull($release);
    $this->assertCount(2, $ddex->getReleaseList()->getTrackRelease());

    // Main release
    $this->assertEquals("R0", $release->getReleaseReference());
    $this->assertEquals("Album", (string) $release->getReleaseType()[0]);
    $this->assertEquals("1234567890123", $release->getReleaseId()->getICPN());
    $this->assertEquals("Test Album ERN43", (string) $release->getDisplayTitleText()[0]);

    // Release display artist (resolved via PartyList)
    $this->assertCount(1, $release->getDisplayArtist());
    $this->assertEquals("Test Artist", $this->resolvePartyName($ddex, $release->getDisplayArtist()[0]->getArtistPartyReference()));
    $this->assertEquals("MainArtist", (string) $release->getDisplayArtist()[0]->getDisplayArtistRole());

    // Release label (resolved via PartyList: PLabel1 → Test Label)
    $this->assertEquals("Test Label", $this->resolvePartyName($ddex, $release->getReleaseLabelReference()[0]->value()));

    // Release genre
    $this->assertCount(1, $release->getGenre());
    $this->assertEquals("Pop", (string) $release->getGenre()[0]->getGenreText());

    // Release PLine
    $this->assertEquals("2024", $release->getPLine()[0]->getYear());
    $this->assertEquals("(P) 2024 Test Label", $release->getPLine()[0]->getPLineText());

    // Release CLine
    $this->assertEquals("2024", $release->getCLine()[0]->getYear());
    $this->assertEquals("(C) 2024 Test Label", $release->getCLine()[0]->getCLineText());

    // Release parental warning
    $this->assertEquals("NotExplicit", (string) $release->getParentalWarningType()[0]);

    // Release original release date
    $this->assertEquals("2024-01-15", $release->getOriginalReleaseDate()[0]->value());
  }

  /**
   * Test ERN 4.3 real-world single with contributors, catalog number, party resolution
   */
  public function testSample019Ern43RealWorldSingle() {
    $xml_path = "tests/samples/019_ern_43.xml";
    $parser_controller = new ErnParserController();
    $parser_controller->setDisplayLog(false);
    $ddex = $parser_controller->parse($xml_path);

    $this->assertEquals('DedexBundle\Entity\Ern43\NewReleaseMessage', get_class($ddex));

    // Message header
    $this->assertEquals("KinjariInc_01kgag5tybcbnkf2pjfygm4fy8", $ddex->getMessageHeader()->getMessageThreadId());
    $this->assertEquals("PADPIDA20250314036", $ddex->getMessageHeader()->getMessageSender()->getPartyId());
    $this->assertEquals("Kinjari, Inc.", $ddex->getMessageHeader()->getMessageSender()->getPartyName()->getFullName());

    // Resources
    $this->assertCount(2, $ddex->getResourceList()->getSoundRecording());
    $this->assertCount(1, $ddex->getResourceList()->getImage());

    // First sound recording (A1)
    $sr0 = $ddex->getResourceList()->getSoundRecording()[0];
    $this->assertEquals("A1", $sr0->getResourceReference());
    $this->assertEquals("GXF3D2400001", $sr0->getSoundRecordingEdition()[0]->getResourceId()[0]->getISRC());
    $this->assertEquals("Sakura", (string) $sr0->getDisplayTitleText()[0]);
    $this->assertEquals("PT0H4M39S", $sr0->getDuration()->format("PT%hH%iM%sS"));

    // Display artist resolved from PartyList (P1 → Lucas Avery)
    $this->assertCount(1, $sr0->getDisplayArtist());
    $this->assertEquals("Lucas Avery", $this->resolvePartyName($ddex, $sr0->getDisplayArtist()[0]->getArtistPartyReference()));
    $this->assertEquals("MainArtist", (string) $sr0->getDisplayArtist()[0]->getDisplayArtistRole());

    // Contributor resolved from PartyList (P2 → Luke Hebblethwaite, Composer)
    $contributors = $sr0->getContributor();
    $this->assertCount(1, $contributors);
    $this->assertEquals("Luke Hebblethwaite", $this->resolvePartyName($ddex, $contributors[0]->getContributorPartyReference()));
    $this->assertEquals("Composer", (string) $contributors[0]->getRole()[0]);

    // PLine from SoundRecordingEdition
    $this->assertEquals("2025", $sr0->getSoundRecordingEdition()[0]->getPLine()[0]->getYear());
    $this->assertEquals("(P) 2025 Sky High Trance", $sr0->getSoundRecordingEdition()[0]->getPLine()[0]->getPLineText());

    // Technical details and file (inside edition for ERN 4.3)
    $this->assertEquals("5063642055734_T1_001.wav", $sr0->getSoundRecordingEdition()[0]->getTechnicalDetails()[0]->getDeliveryFile()[0]->getFile()->getURI());

    // Second sound recording (A2) - Radio Edit
    $sr1 = $ddex->getResourceList()->getSoundRecording()[1];
    $this->assertEquals("GXF3D2400002", $sr1->getSoundRecordingEdition()[0]->getResourceId()[0]->getISRC());
    $this->assertEquals("Sakura", (string) $sr1->getDisplayTitleText()[0]);

    // Image (FrontCoverImage)
    $image = $ddex->getResourceList()->getImage()[0];
    $this->assertEquals("A3", $image->getResourceReference());
    $this->assertEquals("FrontCoverImage", (string) $image->getType());
    $this->assertEquals("5063642055734_T3.jpg", $image->getTechnicalDetails()[0]->getFile()->getURI());

    // Releases: 1 main + 2 track releases
    $release = $ddex->getReleaseList()->getRelease();
    $this->assertNotNull($release);
    $this->assertCount(2, $ddex->getReleaseList()->getTrackRelease());

    // Main release (Single type)
    $this->assertEquals("R0", $release->getReleaseReference());
    $this->assertEquals("Single", (string) $release->getReleaseType()[0]);
    $this->assertEquals("5063642055734", $release->getReleaseId()->getICPN());

    // Catalog number
    $this->assertEquals("SKT-001", (string) $release->getReleaseId()->getCatalogNumber());

    // Label resolved from PartyList (PLabel → Sky High Trance)
    $this->assertEquals("Sky High Trance", $this->resolvePartyName($ddex, $release->getReleaseLabelReference()[0]->value()));

    // Genre
    $this->assertEquals("Trance", (string) $release->getGenre()[0]->getGenreText());

    // Release PLine and CLine
    $this->assertEquals("2025", $release->getPLine()[0]->getYear());
    $this->assertEquals("(P) 2025 Sky High Trance", $release->getPLine()[0]->getPLineText());
    $this->assertEquals("2025", $release->getCLine()[0]->getYear());
    $this->assertEquals("(C) 2025 Sky High Trance", $release->getCLine()[0]->getCLineText());
  }

  /**
   * Test ERN 4.3 large audio album with Japanese multi-script party names
   */
  public function testSample020Ern43LargeAlbum() {
    $xml_path = "tests/samples/020_ern43_audio.xml";
    $parser_controller = new ErnParserController();
    $parser_controller->setDisplayLog(false);
    $ddex = $parser_controller->parse($xml_path);

    $this->assertEquals('DedexBundle\Entity\Ern43\NewReleaseMessage', get_class($ddex));

    // 21 sound recordings, 1 image
    $this->assertCount(21, $ddex->getResourceList()->getSoundRecording());
    $this->assertCount(1, $ddex->getResourceList()->getImage());

    // First sound recording with Japanese title
    $sr0 = $ddex->getResourceList()->getSoundRecording()[0];
    $this->assertEquals("A1", $sr0->getResourceReference());
    $this->assertEquals("Yume no Lullaby", (string) $sr0->getDisplayTitleText()[0]);
    $this->assertEquals("JPTO09404900", $sr0->getSoundRecordingEdition()[0]->getResourceId()[0]->getISRC());

    // Artist resolved from PartyList (PSaekoShu → Saeko Shu)
    $this->assertCount(1, $sr0->getDisplayArtist());
    $this->assertEquals("Saeko Shu", $this->resolvePartyName($ddex, $sr0->getDisplayArtist()[0]->getArtistPartyReference()));
  }

  /**
   * Test ERN 4.3 video release with multi-territory deals
   */
  public function testSample021Ern43Video() {
    $xml_path = "tests/samples/021_ern43_video.xml";
    $parser_controller = new ErnParserController();
    $parser_controller->setDisplayLog(false);
    $ddex = $parser_controller->parse($xml_path);

    $this->assertEquals('DedexBundle\Entity\Ern43\NewReleaseMessage', get_class($ddex));

    // No sound recordings in a video release
    $this->assertCount(0, $ddex->getResourceList()->getSoundRecording());

    // 2 Videos, 3 Images
    $this->assertCount(2, $ddex->getResourceList()->getVideo());
    $this->assertCount(3, $ddex->getResourceList()->getImage());

    // First video
    $video0 = $ddex->getResourceList()->getVideo()[0];
    $this->assertEquals("A1", $video0->getResourceReference());

    // Images - FrontCoverImage and 2 VideoScreenCapture
    $images = $ddex->getResourceList()->getImage();
    $this->assertEquals("FrontCoverImage", (string) $images[0]->getType());
    $this->assertEquals("VideoScreenCapture", (string) $images[1]->getType());
    $this->assertEquals("VideoScreenCapture", (string) $images[2]->getType());

    // Main release (VideoAlbum type)
    $release = $ddex->getReleaseList()->getRelease();
    $this->assertNotNull($release);
    $this->assertCount(2, $ddex->getReleaseList()->getTrackRelease());
    $this->assertEquals("VideoAlbum", (string) $release->getReleaseType()[0]);
    $this->assertEquals("05099962136853", $release->getReleaseId()->getICPN());

    // Label resolved from PartyList (PCAPITOL → Capitol Records)
    $this->assertEquals("Capitol Records", $this->resolvePartyName($ddex, $release->getReleaseLabelReference()[0]->value()));

    // Display artist
    $this->assertEquals("Lolita Jolie", $this->resolvePartyName($ddex, $release->getDisplayArtist()[0]->getArtistPartyReference()));
  }

  /**
   * Test ERN 4.3 classical album with many contributors
   */
  public function testSample028Ern43Classical() {
    $xml_path = "tests/samples/028_ern43_classical.xml";
    $parser_controller = new ErnParserController();
    $parser_controller->setDisplayLog(false);
    $ddex = $parser_controller->parse($xml_path);

    $this->assertEquals('DedexBundle\Entity\Ern43\NewReleaseMessage', get_class($ddex));

    // 12 sound recordings, 1 image
    $this->assertCount(12, $ddex->getResourceList()->getSoundRecording());
    $this->assertCount(1, $ddex->getResourceList()->getImage());

    // First sound recording - Vivaldi concerto
    $sr0 = $ddex->getResourceList()->getSoundRecording()[0];
    $this->assertEquals("A1", $sr0->getResourceReference());
    $this->assertEquals("DE0000311111", $sr0->getSoundRecordingEdition()[0]->getResourceId()[0]->getISRC());

    // 3 display artists resolved via PartyList
    $artists = $sr0->getDisplayArtist();
    $this->assertCount(3, $artists);
    $this->assertEquals("The English Concert", $this->resolvePartyName($ddex, $artists[0]->getArtistPartyReference()));
    $this->assertEquals("Simon Standage", $this->resolvePartyName($ddex, $artists[1]->getArtistPartyReference()));
    $this->assertEquals("Trevor Pinnock", $this->resolvePartyName($ddex, $artists[2]->getArtistPartyReference()));

    // 4 contributors: Vivaldi (Composer), English Concert (Orchestra), Pinnock (Soloist), Standage (Soloist)
    $contributors = $sr0->getContributor();
    $this->assertCount(4, $contributors);
    $this->assertEquals("Antonio Vivaldi", $this->resolvePartyName($ddex, $contributors[0]->getContributorPartyReference()));
    $this->assertEquals("Composer", (string) $contributors[0]->getRole()[0]);
    $this->assertEquals("The English Concert", $this->resolvePartyName($ddex, $contributors[1]->getContributorPartyReference()));
    $this->assertEquals("Orchestra", (string) $contributors[1]->getRole()[0]);

    // Technical details with hash sum (inside edition for ERN 4.3)
    $techDetails = $sr0->getSoundRecordingEdition()[0]->getTechnicalDetails();
    $this->assertCount(1, $techDetails);
    $this->assertEquals("resources/1.flac", $techDetails[0]->getDeliveryFile()[0]->getFile()->getURI());
  }

  /**
   * Test ERN 4.3 Mixed Media bundle (sample 022)
   * Audio + Video + Images + Text (PDF booklet), multi-territory deals
   */
  public function testSample022Ern43MixedMedia() {
    $xml_path = "tests/samples/022_ern43_mixed_media.xml";
    $parser_controller = new ErnParserController();
    $parser_controller->setDisplayLog(false);
    $ddex = $parser_controller->parse($xml_path);

    $this->assertEquals('DedexBundle\Entity\Ern43\NewReleaseMessage', get_class($ddex));

    // MessageHeader
    $header = $ddex->getMessageHeader();
    $this->assertEquals("PADPIDA2013042401U", $header->getMessageSender()->getPartyId());
    $this->assertEquals("UniversalMusicGroup", $header->getMessageSender()->getPartyName()->getFullName());
    $this->assertEquals("PADPIDA2009101501Y", $header->getMessageRecipient()[0]->getPartyId());

    // PartyList: 3 parties
    $parties = $ddex->getPartyList();
    $this->assertCount(3, $parties);

    // ResourceList: 14 SoundRecordings + 3 Videos + 4 Images + 1 Text = 22 resources
    $soundRecordings = $ddex->getResourceList()->getSoundRecording();
    $this->assertCount(14, $soundRecordings);
    $videos = $ddex->getResourceList()->getVideo();
    $this->assertCount(3, $videos);
    $images = $ddex->getResourceList()->getImage();
    $this->assertCount(4, $images);
    $texts = $ddex->getResourceList()->getText();
    $this->assertCount(1, $texts);

    // First sound recording details
    $sr0 = $soundRecordings[0];
    $this->assertEquals("A1", $sr0->getResourceReference());
    $this->assertEquals("DEC610900439", $sr0->getSoundRecordingEdition()[0]->getResourceId()[0]->getISRC());
    $this->assertEquals("1000 Träume weit (Tornero)", (string) $sr0->getDisplayTitleText()[0]);
    $this->assertEquals("PT0H4M10S", $sr0->getDuration()->format("PT%hH%iM%sS"));

    // Display artist resolved via PartyList
    $artists = $sr0->getDisplayArtist();
    $this->assertCount(1, $artists);
    $this->assertEquals("Anna-Maria Zimmermann", $this->resolvePartyName($ddex, $artists[0]->getArtistPartyReference()));
    $this->assertEquals("MainArtist", (string) $artists[0]->getDisplayArtistRole());

    // First video resource
    $vid0 = $videos[0];
    $this->assertEquals("A15", $vid0->getResourceReference());
    $this->assertEquals("ShortFormMusicalWorkVideo", (string) $vid0->getType());

    // Text resource (PDF booklet)
    $text0 = $texts[0];
    $this->assertEquals("A22", $text0->getResourceReference());

    // Image types: 1 FrontCoverImage + 3 VideoScreenCapture
    $this->assertEquals("FrontCoverImage", (string) $images[0]->getType());

    // Releases: 1 main release + 17 track releases
    $mainRelease = $ddex->getReleaseList()->getRelease();
    $this->assertNotNull($mainRelease);
    $this->assertEquals("Bundle", (string) $mainRelease->getReleaseType()[0]);
    $this->assertEquals("05099907138655", (string) $mainRelease->getReleaseId()->getICPN());
    $this->assertEquals("Einfach Anna!", (string) $mainRelease->getDisplayTitleText()[0]);

    // Label resolved via PartyList: PEMI -> EMI
    $labelRef = $mainRelease->getReleaseLabelReference();
    $this->assertNotEmpty($labelRef);
    $this->assertEquals("EMI", $this->resolvePartyName($ddex, $labelRef[0]->value()));

    // Genre
    $this->assertEquals("German Pop", (string) $mainRelease->getGenre()[0]->getGenreText());

    // Track releases
    $trackReleases = $ddex->getReleaseList()->getTrackRelease();
    $this->assertCount(17, $trackReleases);
  }

  /**
   * Test ERN 4.3 Simple Audio Single (sample 023)
   * Single sound recording + image, FLAC codec, fractional duration, Classical genre
   */
  public function testSample023Ern43SimpleAudioSingle() {
    $xml_path = "tests/samples/023_ern43_simple_audio_single.xml";
    $parser_controller = new ErnParserController();
    $parser_controller->setDisplayLog(false);
    $ddex = $parser_controller->parse($xml_path);

    $this->assertEquals('DedexBundle\Entity\Ern43\NewReleaseMessage', get_class($ddex));

    // MessageHeader
    $header = $ddex->getMessageHeader();
    $this->assertEquals("PADPIDA2007050901U", $header->getMessageSender()->getPartyId());
    $this->assertEquals("Warner Music Group", $header->getMessageSender()->getPartyName()->getFullName());

    // PartyList: 3 parties
    $parties = $ddex->getPartyList();
    $this->assertCount(3, $parties);

    // ResourceList: 1 SoundRecording + 1 Image
    $soundRecordings = $ddex->getResourceList()->getSoundRecording();
    $this->assertCount(1, $soundRecordings);
    $images = $ddex->getResourceList()->getImage();
    $this->assertCount(1, $images);

    // Sound recording details
    $sr0 = $soundRecordings[0];
    $this->assertEquals("A1", $sr0->getResourceReference());
    $this->assertEquals("GBAYC1700598", $sr0->getSoundRecordingEdition()[0]->getResourceId()[0]->getISRC());
    $this->assertEquals("RIOPY: I Love You", (string) $sr0->getDisplayTitleText()[0]);
    // Fractional duration
    // Fractional seconds stripped: PT4M23.583S → PT4M23S
    $this->assertEquals("PT0H4M23S", $sr0->getDuration()->format("PT%hH%iM%sS"));

    // Display artist
    $artists = $sr0->getDisplayArtist();
    $this->assertCount(1, $artists);
    $this->assertEquals("RIOPY", $this->resolvePartyName($ddex, $artists[0]->getArtistPartyReference()));

    // PLine (inside edition for ERN 4.3)
    $pline = $sr0->getSoundRecordingEdition()[0]->getPLine()[0];
    $this->assertEquals("2015", $pline->getYear());

    // Image: FrontCoverImage
    $this->assertEquals("FrontCoverImage", (string) $images[0]->getType());

    // Release: SingleResourceRelease
    $mainRelease = $ddex->getReleaseList()->getRelease();
    $this->assertNotNull($mainRelease);
    $this->assertEquals("SingleResourceRelease", (string) $mainRelease->getReleaseType()[0]);

    // GRid on release
    $this->assertEquals("A10302B0003989564F", (string) $mainRelease->getReleaseId()->getGRid());

    // Display artist on release
    $releaseArtists = $mainRelease->getDisplayArtist();
    $this->assertCount(1, $releaseArtists);
    $this->assertEquals("RIOPY", $this->resolvePartyName($ddex, $releaseArtists[0]->getArtistPartyReference()));
    $this->assertEquals("MainArtist", (string) $releaseArtists[0]->getDisplayArtistRole());

    // Label: Warner Classics
    $labelRef = $mainRelease->getReleaseLabelReference();
    $this->assertNotEmpty($labelRef);
    $this->assertEquals("Warner Classics", $this->resolvePartyName($ddex, $labelRef[0]->value()));

    // Genre + SubGenre
    $this->assertEquals("Classical", (string) $mainRelease->getGenre()[0]->getGenreText());
    $this->assertEquals("Classical Crossover", $mainRelease->getGenre()[0]->getSubGenre());

    // PLine/CLine on release
    $this->assertEquals("2015", $mainRelease->getPLine()[0]->getYear());
    $this->assertEquals("2017", $mainRelease->getCLine()[0]->getYear());

    // ParentalWarningType
    $this->assertEquals("NoAdviceAvailable", (string) $mainRelease->getParentalWarningType()[0]);
  }

  /**
   * Test ERN 4.3 Simple Video Single (sample 024)
   * Video resource + VideoScreenCapture image, Explicit content, South Africa territory
   */
  public function testSample024Ern43SimpleVideoSingle() {
    $xml_path = "tests/samples/024_ern43_simple_video_single.xml";
    $parser_controller = new ErnParserController();
    $parser_controller->setDisplayLog(false);
    $ddex = $parser_controller->parse($xml_path);

    $this->assertEquals('DedexBundle\Entity\Ern43\NewReleaseMessage', get_class($ddex));

    // MessageHeader
    $header = $ddex->getMessageHeader();
    $this->assertEquals("Warner Music Group", $header->getMessageSender()->getPartyName()->getFullName());

    // PartyList: 3 parties (Ash, Deceptikonz, WM South Africa)
    $parties = $ddex->getPartyList();
    $this->assertCount(3, $parties);

    // ResourceList: 0 SoundRecordings, 1 Video, 1 Image
    $soundRecordings = $ddex->getResourceList()->getSoundRecording();
    $this->assertCount(0, $soundRecordings);
    $videos = $ddex->getResourceList()->getVideo();
    $this->assertCount(1, $videos);
    $images = $ddex->getResourceList()->getImage();
    $this->assertCount(1, $images);

    // Video resource details
    $vid0 = $videos[0];
    $this->assertEquals("A1", $vid0->getResourceReference());
    $this->assertEquals("ShortFormMusicalWorkVideo", (string) $vid0->getType());
    $this->assertEquals("Been Waiting", (string) $vid0->getDisplayTitleText()[0]);
    // Fractional seconds stripped: PT3M26.2S → PT3M26S
    $this->assertEquals("PT0H3M26S", $vid0->getDuration()->format("PT%hH%iM%sS"));

    // Video ISRC via VideoEdition
    $this->assertEquals("ZA34L1600009", $vid0->getVideoEdition()[0]->getResourceId()[0]->getISRC());

    // Image: VideoScreenCapture
    $this->assertEquals("VideoScreenCapture", (string) $images[0]->getType());

    // Release: SingleResourceRelease (Video)
    $mainRelease = $ddex->getReleaseList()->getRelease();
    $this->assertNotNull($mainRelease);
    $this->assertEquals("SingleResourceRelease", (string) $mainRelease->getReleaseType()[0]);
    $this->assertEquals("Been Waiting", (string) $mainRelease->getDisplayTitleText()[0]);

    // Display artist
    $releaseArtists = $mainRelease->getDisplayArtist();
    $this->assertCount(1, $releaseArtists);
    $this->assertEquals("Ash", $this->resolvePartyName($ddex, $releaseArtists[0]->getArtistPartyReference()));

    // Label: WM South Africa
    $labelRef = $mainRelease->getReleaseLabelReference();
    $this->assertNotEmpty($labelRef);
    $this->assertEquals("WM South Africa", $this->resolvePartyName($ddex, $labelRef[0]->value()));

    // Genre: R&B
    $this->assertEquals("R&B", (string) $mainRelease->getGenre()[0]->getGenreText());

    // Explicit content
    $this->assertEquals("Explicit", (string) $mainRelease->getParentalWarningType()[0]);

    // PLine/CLine
    $this->assertEquals("2016", $mainRelease->getPLine()[0]->getYear());
    $this->assertEquals("2016", $mainRelease->getCLine()[0]->getYear());
  }

  /**
   * Test ERN 4.3 Ringtone (sample 025)
   * 30-second ringtone, 15 contributors, Country genre, 2 technical detail sets
   */
  public function testSample025Ern43Ringtone() {
    $xml_path = "tests/samples/025_ern43_ringtone.xml";
    $parser_controller = new ErnParserController();
    $parser_controller->setDisplayLog(false);
    $ddex = $parser_controller->parse($xml_path);

    $this->assertEquals('DedexBundle\Entity\Ern43\NewReleaseMessage', get_class($ddex));

    // PartyList: 17 parties (artist + 14 contributors + 2 labels)
    $parties = $ddex->getPartyList();
    $this->assertCount(17, $parties);

    // ResourceList: 1 SoundRecording + 1 Image
    $soundRecordings = $ddex->getResourceList()->getSoundRecording();
    $this->assertCount(1, $soundRecordings);
    $images = $ddex->getResourceList()->getImage();
    $this->assertCount(1, $images);

    // Sound recording: 30-second ringtone
    $sr0 = $soundRecordings[0];
    $this->assertEquals("A1", $sr0->getResourceReference());
    $this->assertEquals("USWB11700001", $sr0->getSoundRecordingEdition()[0]->getResourceId()[0]->getISRC());
    $this->assertEquals("Middle of a Memory", (string) $sr0->getDisplayTitleText()[0]);
    $this->assertEquals("PT0H0M30S", $sr0->getDuration()->format("PT%hH%iM%sS"));

    // 15 contributors on this track
    $contributors = $sr0->getContributor();
    $this->assertCount(15, $contributors);

    // Image: FrontCoverImage
    $this->assertEquals("FrontCoverImage", (string) $images[0]->getType());

    // Release: RingtoneRelease
    $mainRelease = $ddex->getReleaseList()->getRelease();
    $this->assertEquals("RingtoneRelease", (string) $mainRelease->getReleaseType()[0]);
    $this->assertEquals("Middle of a Memory", (string) $mainRelease->getDisplayTitleText()[0]);

    // GRid
    $this->assertEquals("A10302B0003814379B", (string) $mainRelease->getReleaseId()->getGRid());

    // Display artist: Cole Swindell (resolved via PartyList)
    $releaseArtists = $mainRelease->getDisplayArtist();
    $this->assertCount(1, $releaseArtists);
    $partyRef = $releaseArtists[0]->getArtistPartyReference();
    $this->assertNotEmpty($partyRef);
    $artistName = null;
    foreach ($ddex->getPartyList() as $party) {
      if ($party->getPartyReference() === $partyRef) {
        $artistName = $party->getPartyName()[0]->getFullName();
        break;
      }
    }
    $this->assertEquals("Cole Swindell", $artistName);

    // Label: resolved via ReleaseLabelReference + PartyList
    $labelRef = $mainRelease->getReleaseLabelReference();
    $this->assertNotEmpty($labelRef);

    // Genre: Country
    $this->assertEquals("Country", (string) $mainRelease->getGenre()[0]->getGenreText());

    // PLine
    $this->assertEquals("2015", $mainRelease->getPLine()[0]->getYear());
  }

  /**
   * Test ERN 4.3 Longform Musical Work Video (sample 026)
   * Concert film + trailer, 14 images, CueSheet, Chapters, Easy Listening
   */
  public function testSample026Ern43LongformVideo() {
    $xml_path = "tests/samples/026_ern43_longform_video.xml";
    $parser_controller = new ErnParserController();
    $parser_controller->setDisplayLog(false);
    $ddex = $parser_controller->parse($xml_path);

    $this->assertEquals('DedexBundle\Entity\Ern43\NewReleaseMessage', get_class($ddex));

    // MessageHeader
    $header = $ddex->getMessageHeader();
    $this->assertEquals("Digiplug", $header->getMessageSender()->getPartyName()->getFullName());

    // PartyList: 4 parties
    $parties = $ddex->getPartyList();
    $this->assertCount(4, $parties);

    // ResourceList: 0 SoundRecordings, 2 Videos, 14 Images
    $soundRecordings = $ddex->getResourceList()->getSoundRecording();
    $this->assertCount(0, $soundRecordings);
    $videos = $ddex->getResourceList()->getVideo();
    $this->assertCount(2, $videos);
    $images = $ddex->getResourceList()->getImage();
    $this->assertCount(14, $images);

    // Video 1: Trailer
    $trailer = null;
    $concert = null;
    foreach ($videos as $v) {
      if ($v->getResourceReference() === "A15") $trailer = $v;
      if ($v->getResourceReference() === "A16") $concert = $v;
    }
    $this->assertNotNull($trailer);
    $this->assertNotNull($concert);
    $this->assertEquals("LongFormMusicalWorkVideo", (string) $trailer->getType());
    $this->assertEquals("PT0H1M0S", $trailer->getDuration()->format("PT%hH%iM%sS"));
    $this->assertEquals("PT0H50M37S", $concert->getDuration()->format("PT%hH%iM%sS"));

    // Trailer has 3 display artists (main + 2 featured) - resolved via ArtistPartyReference
    $trailerArtists = $trailer->getDisplayArtist();
    $this->assertCount(3, $trailerArtists);
    $this->assertEquals("PPatrizioBuanne", $trailerArtists[0]->getArtistPartyReference());
    $this->assertEquals("MainArtist", $trailerArtists[0]->getDisplayArtistRole());
    $this->assertEquals("FeaturedArtist", $trailerArtists[1]->getDisplayArtistRole());

    // Images: 13 VideoScreenCapture + 1 FrontCoverImage
    $frontCovers = array_filter($images, fn($img) => (string) $img->getType() === "FrontCoverImage");
    $screenCaptures = array_filter($images, fn($img) => (string) $img->getType() === "VideoScreenCapture");
    $this->assertCount(1, $frontCovers);
    $this->assertCount(13, $screenCaptures);

    // Release: LongFormMusicalWorkVideoRelease
    $mainRelease = $ddex->getReleaseList()->getRelease();
    $this->assertEquals("LongFormMusicalWorkVideoRelease", (string) $mainRelease->getReleaseType()[0]);
    $this->assertEquals("00602537022502", (string) $mainRelease->getReleaseId()->getICPN());
    $this->assertStringContainsString("The Italian", (string) $mainRelease->getDisplayTitleText()[0]);

    // Display artist on release (resolved via PartyList)
    $releaseArtists = $mainRelease->getDisplayArtist();
    $this->assertCount(1, $releaseArtists);
    $partyRef = $releaseArtists[0]->getArtistPartyReference();
    $this->assertNotEmpty($partyRef);
    $artistName = null;
    foreach ($ddex->getPartyList() as $party) {
      if ($party->getPartyReference() === $partyRef) {
        $artistName = $party->getPartyName()[0]->getFullName();
        break;
      }
    }
    $this->assertEquals("Patrizio Buanne", $artistName);

    // Label: resolved via ReleaseLabelReference + PartyList
    $labelRef = (string) $mainRelease->getReleaseLabelReference()[0];
    $this->assertNotEmpty($labelRef);
    $labelName = null;
    foreach ($ddex->getPartyList() as $party) {
      if ($party->getPartyReference() === $labelRef) {
        $labelName = $party->getPartyName()[0]->getFullName();
        break;
      }
    }
    $this->assertEquals("Universal Music Ltd.", $labelName);

    // Genre: Easy Listening
    $this->assertEquals("Easy Listening", (string) $mainRelease->getGenre()[0]->getGenreText());
  }

  /**
   * Test ERN 4.3 DJ Mix (sample 027)
   * 1 main mix + 8 supplemental source tracks, Nu Disco genre, HasContentFrom relationships
   */
  /**
   * Test ERN 4.3 real-world LabelGrid single (sample 029)
   * 2 sound recordings + 1 image, Single release type, 3 deals, contributor
   */
  public function testSample029Ern43SingleInlineImage() {
    $xml_path = "tests/samples/029_ern43_single_inline_image.xml";
    $parser_controller = new ErnParserController();
    $parser_controller->setDisplayLog(true);
    $parser_controller->setXsdValidation(true);
    $ddex = $parser_controller->parse($xml_path);

    $this->assertEquals('DedexBundle\Entity\Ern43\NewReleaseMessage', get_class($ddex));

    // MessageHeader
    $header = $ddex->getMessageHeader();
    $this->assertEquals("PADPIDA2024021301T", $header->getMessageSender()->getPartyId());
    $this->assertEquals("Test Sender", $header->getMessageSender()->getPartyName()->getFullName());
    $this->assertEquals("PADPIDA2024021302R", $header->getMessageRecipient()[0]->getPartyId());
    $this->assertEquals("Test Recipient", $header->getMessageRecipient()[0]->getPartyName()->getFullName());

    // PartyList: 3 parties (label, artist, contributor)
    $parties = $ddex->getPartyList();
    $this->assertCount(3, $parties);

    // ResourceList: 2 SoundRecordings + 1 Image
    $soundRecordings = $ddex->getResourceList()->getSoundRecording();
    $this->assertCount(2, $soundRecordings);
    $images = $ddex->getResourceList()->getImage();
    $this->assertCount(1, $images);

    // Sound recording 1 (A1): Summer Breeze (Radio Edit)
    $sr0 = $soundRecordings[0];
    $this->assertEquals("A1", $sr0->getResourceReference());
    $this->assertEquals("TEST43S00001", $sr0->getSoundRecordingEdition()[0]->getResourceId()[0]->getISRC());
    $this->assertEquals("Summer Breeze", (string) $sr0->getDisplayTitleText()[0]);
    $this->assertEquals("Radio Edit", $sr0->getDisplayTitle()[0]->getSubTitle()[0]);
    $this->assertEquals("PT0H2M45S", $sr0->getDuration()->format("PT%hH%iM%sS"));

    // Display artist
    $artists = $sr0->getDisplayArtist();
    $this->assertCount(1, $artists);
    $this->assertEquals("MainArtist", $artists[0]->getDisplayArtistRole());

    // Contributor
    $contributors = $sr0->getContributor();
    $this->assertCount(1, $contributors);

    // PLine from SoundRecordingEdition
    $pline = $sr0->getSoundRecordingEdition()[0]->getPLine()[0];
    $this->assertEquals("2024", $pline->getYear());
    $this->assertEquals("Test Label", $pline->getPLineText());

    // Sound recording 2 (A2): Summer Breeze (original)
    $sr1 = $soundRecordings[1];
    $this->assertEquals("A2", $sr1->getResourceReference());
    $this->assertEquals("TEST43S00002", $sr1->getSoundRecordingEdition()[0]->getResourceId()[0]->getISRC());
    $this->assertEquals("Summer Breeze", (string) $sr1->getDisplayTitleText()[0]);
    $this->assertEquals("PT0H4M39S", $sr1->getDuration()->format("PT%hH%iM%sS"));

    // Image: FrontCoverImage
    $this->assertEquals("FrontCoverImage", (string) $images[0]->getType());

    // Release: Single
    $mainRelease = $ddex->getReleaseList()->getRelease();
    $this->assertEquals("9876543210123", (string) $mainRelease->getReleaseId()->getICPN());
    $this->assertEquals("Summer Breeze", (string) $mainRelease->getDisplayTitleText()[0]);

    // Genre + SubGenre
    $this->assertEquals("Electronic", (string) $mainRelease->getGenre()[0]->getGenreText());
    $this->assertEquals("Trance", $mainRelease->getGenre()[0]->getSubGenre());

    // PLine/CLine on release
    $this->assertEquals("2024", $mainRelease->getPLine()[0]->getYear());
    $this->assertEquals("Test Label", $mainRelease->getPLine()[0]->getPLineText());
    $this->assertEquals("2024", $mainRelease->getCLine()[0]->getYear());
    $this->assertEquals("Test Label", $mainRelease->getCLine()[0]->getCLineText());

    // OriginalReleaseDate
    $this->assertStringContainsString("2024-06-15", (string) $mainRelease->getOriginalReleaseDate()[0]);

    // ParentalWarningType
    $this->assertEquals("NotExplicit", (string) $mainRelease->getParentalWarningType()[0]);

    // Track releases
    $trackReleases = $ddex->getReleaseList()->getTrackRelease();
    $this->assertCount(2, $trackReleases);

    // DealList: 1 ReleaseDeal with 3 Deal elements
    $releaseDeals = $ddex->getDealList()->getReleaseDeal();
    $this->assertCount(1, $releaseDeals);
    $deals = $releaseDeals[0]->getDeal();
    $this->assertCount(3, $deals);
    $this->assertEquals("SubscriptionModel", (string) $deals[0]->getDealTerms()->getCommercialModelType()[0]);
    $this->assertEquals("AdvertisementSupportedModel", (string) $deals[1]->getDealTerms()->getCommercialModelType()[0]);
    $this->assertEquals("PayAsYouGoModel", (string) $deals[2]->getDealTerms()->getCommercialModelType()[0]);
    $this->assertEquals("PermanentDownload", (string) $deals[2]->getDealTerms()->getUseType()[0]);
  }

  public function testSample027Ern43DjMix() {
    $xml_path = "tests/samples/027_ern43_dj_mix.xml";
    $parser_controller = new ErnParserController();
    $parser_controller->setDisplayLog(false);
    $ddex = $parser_controller->parse($xml_path);

    $this->assertEquals('DedexBundle\Entity\Ern43\NewReleaseMessage', get_class($ddex));

    // PartyList: 10 parties (DJ + 8 source artists + label)
    $parties = $ddex->getPartyList();
    $this->assertCount(10, $parties);

    // ResourceList: 9 SoundRecordings (1 mix + 8 supplemental) + 1 Image
    $soundRecordings = $ddex->getResourceList()->getSoundRecording();
    $this->assertCount(9, $soundRecordings);
    $images = $ddex->getResourceList()->getImage();
    $this->assertCount(1, $images);

    // Main mix (A1): not supplemental
    $mix = $soundRecordings[0];
    $this->assertEquals("A1", $mix->getResourceReference());
    $this->assertEquals("USWE34255410", $mix->getSoundRecordingEdition()[0]->getResourceId()[0]->getISRC());
    $this->assertEquals("MMix", (string) $mix->getDisplayTitleText()[0]);
    $this->assertEquals("PT0H12M31S", $mix->getDuration()->format("PT%hH%iM%sS"));

    // Mix display artist (resolved via PartyList)
    $mixArtists = $mix->getDisplayArtist();
    $this->assertCount(1, $mixArtists);
    $partyRef = $mixArtists[0]->getArtistPartyReference();
    $this->assertNotEmpty($partyRef);
    $artistName = null;
    foreach ($ddex->getPartyList() as $party) {
      if ($party->getPartyReference() === $partyRef) {
        $artistName = $party->getPartyName()[0]->getFullName();
        break;
      }
    }
    $this->assertEquals("Original Spinner", $artistName);

    // Supplemental tracks (A2-A9): source content
    $sr1 = $soundRecordings[1];
    $this->assertEquals("A2", $sr1->getResourceReference());
    $this->assertEquals("Fall Back 2U", (string) $sr1->getDisplayTitleText()[0]);

    $sr8 = $soundRecordings[8];
    $this->assertEquals("A9", $sr8->getResourceReference());
    $this->assertEquals("Get it", (string) $sr8->getDisplayTitleText()[0]);

    // Image: FrontCoverImage
    $this->assertEquals("FrontCoverImage", (string) $images[0]->getType());

    // Release: DjMix type
    $mainRelease = $ddex->getReleaseList()->getRelease();
    $this->assertEquals("DjMix", (string) $mainRelease->getReleaseType()[0]);
    $this->assertEquals("123123123123", (string) $mainRelease->getReleaseId()->getICPN());
    $this->assertEquals("MMix", (string) $mainRelease->getDisplayTitleText()[0]);

    // Label: DubSetMedia (resolved via ReleaseLabelReference + PartyList)
    $labelRef = (string) $mainRelease->getReleaseLabelReference()[0];
    $this->assertNotEmpty($labelRef);
    $labelName = null;
    foreach ($ddex->getPartyList() as $party) {
      if ($party->getPartyReference() === $labelRef) {
        $labelName = $party->getPartyName()[0]->getFullName();
        break;
      }
    }
    $this->assertEquals("DubSetMedia", $labelName);

    // Genre: Nu Disco
    $this->assertEquals("Nu Disco", (string) $mainRelease->getGenre()[0]->getGenreText());

    // PLine/CLine
    $this->assertEquals("2017", $mainRelease->getPLine()[0]->getYear());
    $this->assertEquals("2017", $mainRelease->getCLine()[0]->getYear());

    // OriginalReleaseDate
    $this->assertStringContainsString("2017-01-02", (string) $mainRelease->getOriginalReleaseDate()[0]);

    // ParentalWarningType
    $this->assertEquals("NotExplicit", (string) $mainRelease->getParentalWarningType()[0]);
  }

  /**
   * ERN 4.3.1: version detection, entity namespace and the 4.3.1-specific
   * elements (DisplayGenre, FormalTitle, GroupingTitle, Role/Value)
   */
  public function testSample030Ern431() {
    $xml_path = "tests/samples/030_ern431_album.xml";
    $parser_controller = new ErnParserController();
    $parser_controller->setDisplayLog(false);
    $parser_controller->setXsdValidation(true);
    $ddex = $parser_controller->parse($xml_path);

    // ERN version is 431. It uses classes with namespace Ern431.
    $this->assertEquals("431", $parser_controller->getVersion());
    $this->assertEquals('DedexBundle\Entity\Ern431\NewReleaseMessage', get_class($ddex));

    $this->assertEquals("Test431", $ddex->getMessageHeader()->getMessageThreadId());
    $this->assertCount(2, $ddex->getResourceList()->getSoundRecording());
    $this->assertCount(1, $ddex->getResourceList()->getImage());
    $this->assertCount(2, $ddex->getReleaseList()->getTrackRelease());

    $release = $ddex->getReleaseList()->getRelease();
    $this->assertEquals("Test Album ERN431", (string) $release->getDisplayTitleText()[0]);

    // Genre is renamed DisplayGenre in 4.3.1
    $this->assertCount(1, $release->getDisplayGenre());
    $this->assertEquals("Pop", (string) $release->getDisplayGenre()[0]->getGenreText());
    $this->assertFalse(method_exists($release, "getGenre"));
    $this->assertFalse(method_exists($release, "getAdditionalTitle"));
    $this->assertEquals("2024", $release->getPLine()[0]->getYear());
    $this->assertEquals("NotExplicit", (string) $release->getParentalWarningType()[0]);
  }

  /**
   * ERN 4.3.1 real-world single: Role is a composite (Role/Value)
   */
  public function testSample031Ern431RealWorldSingle() {
    $parser_controller = new ErnParserController();
    $parser_controller->setDisplayLog(false);
    $parser_controller->setXsdValidation(true);
    $ddex = $parser_controller->parse("tests/samples/031_ern431_real_world_single.xml");

    $this->assertEquals('DedexBundle\Entity\Ern431\NewReleaseMessage', get_class($ddex));
    $sr = $ddex->getResourceList()->getSoundRecording()[0];
    $role = $sr->getContributor()[0]->getRole()[0];
    $this->assertInstanceOf('DedexBundle\Entity\Ern431\ContributorRoleType', $role);
    $this->assertEquals("Composer", (string) $role->getValue());
  }

  /**
   * ERN 4.3.1 classical: FormalTitle replaces AdditionalTitle[@TitleType=FormalTitle]
   */
  public function testSample032Ern431Classical() {
    $parser_controller = new ErnParserController();
    $parser_controller->setDisplayLog(false);
    $parser_controller->setXsdValidation(true);
    $ddex = $parser_controller->parse("tests/samples/032_ern431_classical.xml");

    $sr = $ddex->getResourceList()->getSoundRecording()[0];
    $this->assertCount(1, $sr->getFormalTitle());
    $this->assertStringContainsString("La Primavera", (string) $sr->getFormalTitle()[0]->getTitleText());
    $this->assertNotEmpty($sr->getContributor());
  }

  /**
   * ERN 4.3.1 new optional elements: Brand, ContainsAI, AiContribution,
   * SpecialContributor, SpecialDisplayArtist, Role/InstrumentType,
   * FormalTitle, GroupingTitle, optional ParentalWarningType.
   */
  public function testSample033Ern431NewFeatures() {
    $parser_controller = new ErnParserController();
    $parser_controller->setDisplayLog(false);
    $parser_controller->setXsdValidation(true);
    $ddex = $parser_controller->parse("tests/samples/033_ern431_new_features.xml");

    // Brand
    $brands = $ddex->getPartyList()->getBrand();
    $this->assertCount(1, $brands);
    $this->assertEquals("PBrand1", $brands[0]->getBrandReference());
    $this->assertEquals("Test Brand", (string) $brands[0]->getBrandName()[0]->getFullName());

    // Release titles
    $release = $ddex->getReleaseList()->getRelease();
    $this->assertEquals("Test Album ERN431 (Formal)", (string) $release->getFormalTitle()[0]->getTitleText());
    $this->assertEquals("Test Grouping", (string) $release->getGroupingTitle()[0]->getTitleText());
    // Special display artist
    $this->assertCount(2, $release->getDisplayArtist());
    $this->assertEquals("VariousArtists", (string) $release->getDisplayArtist()[1]->getSpecialDisplayArtist());
    // ParentalWarningType is optional in 4.3.1
    $this->assertEmpty($release->getParentalWarningType());

    // Sound recording: AI flag, contributors, parental warning with standard
    $sr = $ddex->getResourceList()->getSoundRecording()[0];
    $this->assertEquals("Partly", (string) $sr->getContainsAI());
    $this->assertEquals("RiaaPal", (string) $sr->getParentalWarningType()[0]->getParentalWarningStandard());
    $c1 = $sr->getContributor()[0];
    $this->assertEquals("AssociatedPerformer", (string) $c1->getRole()[0]->getValue());
    $this->assertEquals("Guitar", (string) $c1->getRole()[0]->getInstrumentType()[0]);
    $this->assertEquals("None", (string) $c1->getAiContribution());
    $c2 = $sr->getContributor()[1];
    $this->assertEquals("Traditional", (string) $c2->getSpecialContributor());
    $this->assertEmpty($ddex->getResourceList()->getSoundRecording()[1]->getParentalWarningType());
  }

  /**
   * A 4.3 file must still be detected as 43 (not 431)
   */
  public function testErn43IsNotDetectedAs431() {
    $parser_controller = new ErnParserController();
    $ddex = $parser_controller->parse("tests/samples/018_ern43.xml");
    $this->assertEquals("43", $parser_controller->getVersion());
    $this->assertEquals('DedexBundle\Entity\Ern43\NewReleaseMessage', get_class($ddex));
  }

  /**
   * Helper: resolve a party reference to its full name via the PartyList.
   */
  private function resolvePartyName($ddex, string $partyRef): ?string {
    foreach ($ddex->getPartyList() as $party) {
      if ($party->getPartyReference() === $partyRef) {
        return (string) $party->getPartyName()[0]->getFullName();
      }
    }
    return null;
  }

}
