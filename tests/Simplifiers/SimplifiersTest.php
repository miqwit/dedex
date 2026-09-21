<?php

namespace DedexBundle\Tests\Controller;

use DedexBundle\Controller\ErnParserController;
use DedexBundle\Simplifiers\SimpleAlbum;
use DedexBundle\Simplifiers\SimpleTrack;
use PHPUnit\Framework\TestCase;

class SimplifiersTest extends TestCase {

  public function testSimpleAlbum() {
    $parser = new ErnParserController();
    $ern = $parser->parse("tests/samples/with_assets/004_complete/1199119911991.xml");

    $album = new SimpleAlbum($ern, $parser->getVersion());

    // Album
    $this->assertEquals("Album Title", $album->getTitle());
    $this->assertCount(1, $album->getArtists());
    $this->assertEquals("Artist 1", $album->getArtists()[0]->getName());
    $this->assertEquals("MainArtist", $album->getArtists()[0]->getRole());
    $this->assertEquals("NotExplicit", $album->getParentalWarningType());
    $this->assertEquals(2013, $album->getPLineYear());
    $this->assertEquals("2013 Label 1", $album->getPLineText());
    $this->assertEquals(2013, $album->getCLineYear());
    $this->assertEquals("2013 Label 1", $album->getCLineText());

    // Album deal
    $this->assertContains("PayAsYouGoModel", $album->getDeal()->getCommercialModelTypes());
    $this->assertContains("AdvertisementSupportedModel", $album->getDeal()->getCommercialModelTypes());
    $this->assertContains("SubscriptionModel", $album->getDeal()->getCommercialModelTypes());
    $this->assertContains("PermanentDownload", $album->getDeal()->getUseTypes());
    $this->assertContains("OnDemandStream", $album->getDeal()->getUseTypes());
    $this->assertContains("NonInteractiveStream", $album->getDeal()->getUseTypes());
    $this->assertContains("InternetAndMobile", $album->getDeal()->getDistributionChannelTypes());
    $this->assertStringContainsString("Worldwide", $album->getDeal()->getTerritories()[0]);
    $this->assertEquals("2017-01-01", $album->getDeal()->getStartDate()->format("Y-m-d"));
    $this->assertEquals(null, $album->getDeal()->getEndDate());

    // Image
    $this->assertEquals("1199119911991_FrontCoverImage.jpg", $album->getImageFrontCover()->getFileName());
    $this->assertEquals("assets/1199119911991_FrontCoverImage.jpg", $album->getImageFrontCover()->getFullPath());
    $this->assertEquals("AABBCCDDEEFF11223344556677889900", $album->getImageFrontCover()->getHashSum());
    $this->assertEquals("MD5", $album->getImageFrontCover()->getHashSumAlgorithm());

    // Tracks
    $tracks = $album->getTracksPerCd();
    $this->assertCount(1, $tracks);
    $this->assertCount(9, $tracks[1]);
    $this->assertEquals("1199119911991_001.flac", $tracks[1][1]->getFileName());
    $this->assertEquals("assets/1199119911991_001.flac", $tracks[1][1]->getFullPath());
    $this->assertEquals("1199119911991_002.flac", $tracks[1][2]->getFileName());
    $this->assertEquals("1199119911991_003.flac", $tracks[1][3]->getFileName());
    $this->assertEquals("1199119911991_004.flac", $tracks[1][4]->getFileName());
    $this->assertEquals("1199119911991_005.flac", $tracks[1][5]->getFileName());
    $this->assertEquals("1199119911991_006.flac", $tracks[1][6]->getFileName());
    $this->assertEquals("1199119911991_007.flac", $tracks[1][7]->getFileName());
    $this->assertEquals("1199119911991_008.flac", $tracks[1][8]->getFileName());
    $this->assertEquals("1199119911991_009.flac", $tracks[1][9]->getFileName());

    /* @var $track SimpleTrack */
    $track = $tracks[1][1];
    $this->assertEquals("BE0000000001", $track->getIsrc());
    $this->assertEquals("Track Title 1", $track->getTitle());
    $this->assertEquals("PT0H8M7S", $track->getDurationIso());
    $this->assertEquals(487, $track->getDurationInSeconds());
    $this->assertEquals("AABBCCDDEEFF11223344556677889900", $track->getHashSum());
    $this->assertEquals("MD5", $track->getHashSumAlgorithm());

    // Artists
    $this->assertCount(3, $track->getArtists());
    $this->assertEquals("Artist 1", $track->getArtists()[0]->getName());
    $this->assertEquals("MainArtist", $track->getArtists()[0]->getRole());
    $this->assertEquals("Artist 2", $track->getArtists()[1]->getName());
    $this->assertEquals("Conductor", $track->getArtists()[1]->getRole());
    $this->assertEquals("Composer 1", $track->getArtists()[2]->getName());
    $this->assertEquals("Composer", $track->getArtists()[2]->getRole());

    $this->assertEquals("Label 1", $track->getLabelName());
    $this->assertEquals(2013, $track->getPLineYear());
    $this->assertEquals("2013 Label 1", $track->getPLineText());
    $this->assertEquals("Classical", $track->getGenre());
    $this->assertEquals(null, $track->getSubGenre());
    $this->assertEquals("NotExplicit", $track->getParentalWarningType());

    // Track deal
    $this->assertContains("PayAsYouGoModel", $track->getDeal()->getCommercialModelTypes());
  }
  
  public function testResourcePath() {
    $parser = new ErnParserController();
    $ern = $parser->parse("tests/samples/016_utf8_artists.xml");

    $album = new SimpleAlbum($ern, $parser->getVersion());
    $this->assertEquals("resources/763331950658_01_01.mp3", $album->getTracksPerCd()[1][1]->getFullPath());
  }
	
	/**
	 * Test the tag PurgedRelease
	 */
	public function testSample017PurgedAlbum() {
		$xml_path = "tests/samples/017_purged_release.xml";
    $parser_controller = new ErnParserController();
    // Set this to true to see logs from the parser
    $parser_controller->setDisplayLog(false);
    /* @var $ddex NewReleaseMessage */
    $ddex = $parser_controller->parse($xml_path);

		$album = new SimpleAlbum($ddex, $parser_controller->getVersion());
		$this->assertTrue($album->isTakedown());
		$this->assertTrue($album->isPurge());
	}

  /**
   * Test SimpleAlbum with ERN 4.3 data - comprehensive test matching depth of testSimpleAlbum
   */
  public function testSimpleAlbumErn43() {
    $parser = new ErnParserController();
    $ern = $parser->parse("tests/samples/018_ern43.xml");

    $album = new SimpleAlbum($ern, $parser->getVersion());

    // Album title
    $this->assertEquals("Test Album ERN43", $album->getTitle());

    // ICPN
    $this->assertEquals("1234567890123", $album->getIcpn());

    // Label name (resolved via PartyList)
    $this->assertEquals("Test Label", $album->getLabelName());

    // PLine
    $this->assertEquals(2024, $album->getPLineYear());
    $this->assertEquals("(P) 2024 Test Label", $album->getPLineText());

    // CLine
    $this->assertEquals(2024, $album->getCLineYear());
    $this->assertEquals("(C) 2024 Test Label", $album->getCLineText());

    // Artists (from DisplayArtistName resolved via PartyList)
    $artists = $album->getArtists();
    $this->assertCount(1, $artists);
    $this->assertEquals("Test Artist", $artists[0]->getName());
    $this->assertEquals("MainArtist", $artists[0]->getRole());

    // Genre
    $this->assertEquals("Pop", $album->getGenre());

    // Parental warning
    $this->assertEquals("NotExplicit", $album->getParentalWarningType());

    // Original release date
    $this->assertEquals("2024-01-15", $album->getOriginalReleaseDate()->format("Y-m-d"));

    // Deal
    $deal = $album->getDeal();
    $this->assertNotNull($deal);
    $this->assertContains("SubscriptionModel", $deal->getCommercialModelTypes());
    $this->assertContains("OnDemandStream", $deal->getUseTypes());
    $this->assertContains("Worldwide", $deal->getTerritories());
    $this->assertEquals("2024-01-15", $deal->getStartDate()->format("Y-m-d"));
    $this->assertEquals(null, $deal->getEndDate());

    // Image front cover
    $image = $album->getImageFrontCover();
    $this->assertNotNull($image);
    $this->assertEquals("test_cover.jpg", $image->getFileName());

    // Tracks
    $tracks = $album->getTracksPerCd();
    $this->assertCount(1, $tracks); // 1 CD
    $this->assertCount(2, $tracks[1]); // 2 tracks on CD 1

    // Track 1 - detailed
    /* @var $track1 SimpleTrack */
    $track1 = $tracks[1][1];
    $this->assertEquals("Track One", $track1->getTitle());
    $this->assertEquals("TEST00000001", $track1->getIsrc());
    $this->assertEquals("track_001.wav", $track1->getFileName());
    $this->assertEquals("PT0H3M30S", $track1->getDurationIso());
    $this->assertEquals(210, $track1->getDurationInSeconds());

    // Track 1 artists
    $trackArtists = $track1->getArtists();
    $this->assertNotEmpty($trackArtists);
    $this->assertEquals("Test Artist", $trackArtists[0]->getName());
    $this->assertEquals("MainArtist", $trackArtists[0]->getRole());

    // Track 1 PLine
    $this->assertEquals(2024, $track1->getPLineYear());
    $this->assertEquals("(P) 2024 Test Label", $track1->getPLineText());

    // Track 2
    $track2 = $tracks[1][2];
    $this->assertEquals("Track Two", $track2->getTitle());
    $this->assertEquals("TEST00000002", $track2->getIsrc());
    $this->assertEquals("track_002.wav", $track2->getFileName());
    $this->assertEquals("PT0H4M15S", $track2->getDurationIso());
    $this->assertEquals(255, $track2->getDurationInSeconds());
  }

  /**
   * Test SimpleAlbum with ERN 4.3 real-world single (sample 019)
   */
  public function testSimpleAlbumErn43RealWorldSingle() {
    $parser = new ErnParserController();
    $ern = $parser->parse("tests/samples/019_ern_43.xml");

    $album = new SimpleAlbum($ern, $parser->getVersion());

    // Album title
    $this->assertEquals("Sakura", $album->getTitle());

    // ICPN
    $this->assertEquals("5063642055734", $album->getIcpn());

    // Label name (resolved via PartyList: PLabel → Sky High Trance)
    $this->assertEquals("Sky High Trance", $album->getLabelName());

    // PLine and CLine
    $this->assertEquals(2025, $album->getPLineYear());
    $this->assertEquals("(P) 2025 Sky High Trance", $album->getPLineText());
    $this->assertEquals(2025, $album->getCLineYear());
    $this->assertEquals("(C) 2025 Sky High Trance", $album->getCLineText());

    // Artists
    $artists = $album->getArtists();
    $this->assertNotEmpty($artists);
    $this->assertEquals("Lucas Avery", $artists[0]->getName());
    $this->assertEquals("MainArtist", $artists[0]->getRole());

    // Genre
    $this->assertEquals("Trance", $album->getGenre());

    // Parental warning
    $this->assertEquals("NotExplicit", $album->getParentalWarningType());

    // Deal with multiple commercial models and use types
    $deal = $album->getDeal();
    $this->assertNotNull($deal);
    $this->assertContains("SubscriptionModel", $deal->getCommercialModelTypes());
    $this->assertContains("AdvertisementSupportedModel", $deal->getCommercialModelTypes());
    $this->assertContains("OnDemandStream", $deal->getUseTypes());
    $this->assertContains("NonInteractiveStream", $deal->getUseTypes());
    $this->assertContains("Worldwide", $deal->getTerritories());
    $this->assertEquals("2025-01-24", $deal->getStartDate()->format("Y-m-d"));

    // Image front cover
    $image = $album->getImageFrontCover();
    $this->assertNotNull($image);
    $this->assertEquals("5063642055734_T3.jpg", $image->getFileName());

    // Tracks (2 tracks on 1 CD)
    $tracks = $album->getTracksPerCd();
    $this->assertCount(1, $tracks);
    $this->assertCount(2, $tracks[1]);

    // Track 1 - with contributor
    $track1 = $tracks[1][1];
    $this->assertEquals("Sakura", $track1->getTitle());
    $this->assertEquals("GXF3D2400001", $track1->getIsrc());
    $this->assertEquals("5063642055734_T1_001.wav", $track1->getFileName());
    $this->assertEquals("PT0H4M39S", $track1->getDurationIso());
    $this->assertEquals(279, $track1->getDurationInSeconds());

    // Track 1 artists (display artist + contributor)
    $trackArtists = $track1->getArtists();
    $this->assertGreaterThanOrEqual(1, count($trackArtists));
    $this->assertEquals("Lucas Avery", $trackArtists[0]->getName());

    // Track 2
    $track2 = $tracks[1][2];
    $this->assertEquals("Sakura", $track2->getTitle());
    $this->assertEquals("GXF3D2400002", $track2->getIsrc());
    $this->assertEquals("5063642055734_T2_002.wav", $track2->getFileName());
  }

  /**
   * Test SimpleAlbum with ERN 4.3 full audio album (sample 020)
   * Japanese J-Pop album with 21 tracks, multi-script titles
   */
  public function testSimpleAlbumErn43Audio() {
    $parser = new ErnParserController();
    $ern = $parser->parse("tests/samples/020_ern43_audio.xml");

    $album = new SimpleAlbum($ern, $parser->getVersion());

    // Album title (default display title)
    $this->assertEquals("Yume no Hajmari", $album->getTitle());

    // ICPN
    $this->assertEquals("00094631432057", $album->getIcpn());

    // Label name (resolved via PartyList: PEMI -> EMI MUSIC JAPAN INC.)
    $labelName = $album->getLabelName();
    $this->assertNotEmpty($labelName);

    // Artists
    $artists = $album->getArtists();
    $this->assertNotEmpty($artists);
    $this->assertEquals("Saeko Shu", $artists[0]->getName());
    $this->assertEquals("MainArtist", $artists[0]->getRole());

    // Genre
    $this->assertEquals("J-Pop", $album->getGenre());

    // Parental warning
    $this->assertEquals("NoAdviceAvailable", $album->getParentalWarningType());

    // Not a takedown
    $this->assertFalse($album->isTakedown());

    // Tracks (21 tracks on 1 CD)
    $tracks = $album->getTracksPerCd();
    $this->assertCount(1, $tracks);
    $this->assertCount(21, $tracks[1]);

    // Track 1
    /* @var $track1 SimpleTrack */
    $track1 = $tracks[1][1];
    $this->assertEquals("Yume no Lullaby", $track1->getTitle());
    $this->assertEquals("JPTO09404900", $track1->getIsrc());
    $this->assertEquals("PT0H2M28S", $track1->getDurationIso());
    $this->assertEquals(148, $track1->getDurationInSeconds());

    // Track 1 artists
    $trackArtists = $track1->getArtists();
    $this->assertNotEmpty($trackArtists);
    $this->assertEquals("Saeko Shu", $trackArtists[0]->getName());

    // Track 1 PLine (from sound recording)
    $this->assertEquals(1994, $track1->getPLineYear());
    $this->assertStringContainsString("EMI Music Japan", $track1->getPLineText());
  }

  /**
   * Test SimpleAlbum with ERN 4.3 mixed media bundle (sample 022)
   * German pop album with audio + video + booklet, multi-component ResourceGroup
   */
  public function testSimpleAlbumErn43MixedMedia() {
    $parser = new ErnParserController();
    $ern = $parser->parse("tests/samples/022_ern43_mixed_media.xml");

    $album = new SimpleAlbum($ern, $parser->getVersion());

    // Album title
    $this->assertEquals("Einfach Anna!", $album->getTitle());

    // ICPN
    $this->assertEquals("05099907138655", $album->getIcpn());

    // Artists
    $artists = $album->getArtists();
    $this->assertNotEmpty($artists);
    $this->assertEquals("Anna-Maria Zimmermann", $artists[0]->getName());
    $this->assertEquals("MainArtist", $artists[0]->getRole());

    // Genre
    $this->assertEquals("German Pop", $album->getGenre());

    // Parental warning
    $this->assertEquals("NotExplicit", $album->getParentalWarningType());

    // Not a takedown
    $this->assertFalse($album->isTakedown());

    // Image front cover
    $image = $album->getImageFrontCover();
    $this->assertNotNull($image);

    // Tracks - mixed media with sound recordings
    $tracks = $album->getTracksPerCd();
    $this->assertNotEmpty($tracks);

    // First track
    $track1 = $tracks[1][1];
    $this->assertNotEmpty($track1->getTitle());
    $this->assertNotEmpty($track1->getIsrc());

    // Track artists
    $trackArtists = $track1->getArtists();
    $this->assertNotEmpty($trackArtists);
    $this->assertEquals("Anna-Maria Zimmermann", $trackArtists[0]->getName());
  }

  /**
   * Test SimpleAlbum with ERN 4.3 simple audio single (sample 023)
   * Classical crossover single with fractional-second duration
   */
  public function testSimpleAlbumErn43SimpleAudioSingle() {
    $parser = new ErnParserController();
    $ern = $parser->parse("tests/samples/023_ern43_simple_audio_single.xml");

    $album = new SimpleAlbum($ern, $parser->getVersion());

    // Album title (DisplayTitleText is "RIOPY: I Love You")
    $this->assertEquals("RIOPY: I Love You", $album->getTitle());

    // No ICPN in main ReleaseId (only GRid + ProprietaryId; ICPN is in RelatedRelease)
    $this->assertNull($album->getIcpn());

    // Artists
    $artists = $album->getArtists();
    $this->assertNotEmpty($artists);
    $this->assertEquals("RIOPY", $artists[0]->getName());
    $this->assertEquals("MainArtist", $artists[0]->getRole());

    // Genre
    $this->assertEquals("Classical", $album->getGenre());

    // Parental warning
    $this->assertEquals("NoAdviceAvailable", $album->getParentalWarningType());

    // PLine/CLine (from release)
    $this->assertEquals(2015, $album->getPLineYear());
    $this->assertStringContainsString("Parlophone", $album->getPLineText());
    $this->assertEquals(2017, $album->getCLineYear());
    $this->assertStringContainsString("Parlophone", $album->getCLineText());

    // Deal
    $deal = $album->getDeal();
    $this->assertNotNull($deal);
    $this->assertContains("AdvertisementSupportedModel", $deal->getCommercialModelTypes());
    $this->assertContains("OnDemandStream", $deal->getUseTypes());
    $this->assertEquals("2017-04-25", $deal->getStartDate()->format("Y-m-d"));

    // Tracks (1 track single)
    $tracks = $album->getTracksPerCd();
    $this->assertCount(1, $tracks);
    $this->assertCount(1, $tracks[1]);

    // Track 1 - fractional duration PT4M23.583S truncated to PT4M23S
    $track1 = $tracks[1][1];
    $this->assertEquals("RIOPY: I Love You", $track1->getTitle());
    $this->assertEquals("GBAYC1700598", $track1->getIsrc());
    $this->assertEquals("PT0H4M23S", $track1->getDurationIso());
    $this->assertEquals(263, $track1->getDurationInSeconds());
  }

  /**
   * Test SimpleAlbum with ERN 4.3 ringtone release (sample 025)
   * Country ringtone release (30-second clip)
   */
  public function testSimpleAlbumErn43Ringtone() {
    $parser = new ErnParserController();
    $ern = $parser->parse("tests/samples/025_ern43_ringtone.xml");

    $album = new SimpleAlbum($ern, $parser->getVersion());

    // Album title
    $this->assertEquals("Middle of a Memory", $album->getTitle());

    // No ICPN in main ReleaseId (only GRid + ProprietaryId)
    $this->assertNull($album->getIcpn());

    // Artists
    $artists = $album->getArtists();
    $this->assertNotEmpty($artists);
    $this->assertEquals("Cole Swindell", $artists[0]->getName());

    // Genre
    $this->assertEquals("Country", $album->getGenre());

    // PLine/CLine from release
    $this->assertEquals(2015, $album->getPLineYear());
    $this->assertEquals(2016, $album->getCLineYear());

    // Deal
    $deal = $album->getDeal();
    $this->assertNotNull($deal);
    $this->assertEquals("2017-01-09", $deal->getStartDate()->format("Y-m-d"));

    // Tracks (1 ringtone track)
    $tracks = $album->getTracksPerCd();
    $this->assertCount(1, $tracks);
    $this->assertCount(1, $tracks[1]);

    $track1 = $tracks[1][1];
    $this->assertEquals("Middle of a Memory", $track1->getTitle());
    $this->assertEquals("USWB11700001", $track1->getIsrc());
    $this->assertEquals("PT0H0M30S", $track1->getDurationIso());
    $this->assertEquals(30, $track1->getDurationInSeconds());
  }

  /**
   * Test SimpleAlbum with ERN 4.3 real-world LabelGrid single (sample 029)
   * 2-track single with contributor, 3 deals, ReleaseLabelReference,
   * image in ResourceGroupContentItem (not LinkedReleaseResourceReference)
   */
  public function testSimpleAlbumErn43Sample029SingleInlineImage() {
    $parser = new ErnParserController();
    $ern = $parser->parse("tests/samples/029_ern43_single_inline_image.xml");

    $album = new SimpleAlbum($ern, $parser->getVersion());

    // Album title
    $this->assertEquals("Summer Breeze", $album->getTitle());

    // ICPN
    $this->assertEquals("9876543210123", $album->getIcpn());

    // CatalogNumber
    $this->assertEquals("TEST-001", (string) $album->getCatalogNumber());

    // Label name (resolved via PartyList: P1 → Test Label)
    $this->assertEquals("Test Label", $album->getLabelName());

    // PLine and CLine
    $this->assertEquals(2024, $album->getPLineYear());
    $this->assertEquals("Test Label", $album->getPLineText());
    $this->assertEquals(2024, $album->getCLineYear());
    $this->assertEquals("Test Label", $album->getCLineText());

    // Artists
    $artists = $album->getArtists();
    $this->assertNotEmpty($artists);
    $this->assertEquals("Test Artist", $artists[0]->getName());
    $this->assertEquals("MainArtist", $artists[0]->getRole());

    // Genre + SubGenre
    $this->assertEquals("Electronic", $album->getGenre());
    $this->assertEquals("Trance", $album->getSubGenre());

    // Parental warning
    $this->assertEquals("NotExplicit", $album->getParentalWarningType());

    // Original release date
    $this->assertEquals("2024-06-15", $album->getOriginalReleaseDate()->format("Y-m-d"));

    // Not a takedown
    $this->assertFalse($album->isTakedown());

    // Deal (from first Deal element: SubscriptionModel)
    $deal = $album->getDeal();
    $this->assertNotNull($deal);
    $this->assertContains("SubscriptionModel", $deal->getCommercialModelTypes());
    $this->assertContains("Worldwide", $deal->getTerritories());
    $this->assertEquals("2024-06-15", $deal->getStartDate()->format("Y-m-d"));

    // Image front cover (inline in ResourceGroupContentItem, not LinkedReleaseResourceReference)
    $image = $album->getImageFrontCover();
    $this->assertNotNull($image);
    $this->assertEquals("9876543210123.jpg", $image->getFileName());

    // Tracks (2 tracks on 1 CD, image filtered out)
    $tracks = $album->getTracksPerCd();
    $this->assertCount(1, $tracks);
    $this->assertCount(2, $tracks[1]);

    // Track 1: Summer Breeze (Radio Edit)
    $track1 = $tracks[1][1];
    $this->assertEquals("Summer Breeze", $track1->getTitle());
    $this->assertEquals("TEST43S00001", $track1->getIsrc());
    $this->assertEquals("PT0H2M45S", $track1->getDurationIso());
    $this->assertEquals(165, $track1->getDurationInSeconds());

    // Track 1 artists
    $trackArtists = $track1->getArtists();
    $this->assertNotEmpty($trackArtists);
    $this->assertEquals("Test Artist", $trackArtists[0]->getName());

    // Track 1 hash sum (ERN 4.3 DetailedHashSum compat)
    $this->assertEquals("aa11bb22cc33dd44ee55ff6677889900", $track1->getHashSum());
    $this->assertEquals("MD5", $track1->getHashSumAlgorithm());

    // Track 2: Summer Breeze (original)
    $track2 = $tracks[1][2];
    $this->assertEquals("Summer Breeze", $track2->getTitle());
    $this->assertEquals("TEST43S00002", $track2->getIsrc());
    $this->assertEquals("PT0H4M39S", $track2->getDurationIso());
    $this->assertEquals(279, $track2->getDurationInSeconds());

    // Track 2 hash sum
    $this->assertEquals("11aa22bb33cc44dd55ee66ff77889900", $track2->getHashSum());
    $this->assertEquals("MD5", $track2->getHashSumAlgorithm());
  }

  /**
   * Test SimpleAlbum with ERN 4.3 DJ mix (sample 027)
   * DJ mix with 1 main mix + 8 supplemental source tracks, Nu Disco genre
   */
  public function testSimpleAlbumErn43DjMix() {
    $parser = new ErnParserController();
    $ern = $parser->parse("tests/samples/027_ern43_dj_mix.xml");

    $album = new SimpleAlbum($ern, $parser->getVersion());

    // Album title
    $this->assertEquals("MMix", $album->getTitle());

    // ICPN
    $this->assertEquals("123123123123", $album->getIcpn());

    // Label
    $this->assertEquals("DubSetMedia", $album->getLabelName());

    // Artists
    $artists = $album->getArtists();
    $this->assertNotEmpty($artists);
    $this->assertEquals("Monkey Claw", $artists[0]->getName());

    // Genre
    $this->assertEquals("Nu Disco", $album->getGenre());

    // PLine/CLine
    $this->assertEquals(2017, $album->getPLineYear());
    $this->assertStringContainsString("Dubset", $album->getPLineText());
    $this->assertEquals(2017, $album->getCLineYear());
    $this->assertStringContainsString("Dubset", $album->getCLineText());

    // Not a takedown
    $this->assertFalse($album->isTakedown());

    // Tracks
    $tracks = $album->getTracksPerCd();
    $this->assertNotEmpty($tracks);

    // Main mix track (CD 1 — flat ResourceGroup defaults to CD 1)
    $track1 = $tracks[1][1];
    $this->assertEquals("MMix", $track1->getTitle());
    $this->assertEquals("USWE34255410", $track1->getIsrc());
    $this->assertEquals("PT0H12M31S", $track1->getDurationIso());
    $this->assertEquals(751, $track1->getDurationInSeconds());
  }

	/**
	 * Test SimpleAlbum with ERN 4.2 sample, verifying PartyList resolution
	 */
	public function testSimpleAlbumErn42() {
		$parser = new ErnParserController();
		$ern = $parser->parse("tests/samples/018_ern42.xml");

		$album = new SimpleAlbum($ern, $parser->getVersion());

		// Album title from DisplayTitleText fallback
		$this->assertEquals("Yume no Hajmari", $album->getTitle());

		// Album artists resolved from PartyList
		$this->assertCount(1, $album->getArtists());
		$this->assertEquals("Saeko Shu", $album->getArtists()[0]->getName());
		$this->assertEquals("MainArtist", $album->getArtists()[0]->getRole());

        // No Album catalog number provided
        $this->assertNull($album->getCatalogNumber());

        // No Cline, Pline
        $this->assertNull($album->getCLineText());
        $this->assertNull($album->getPLineText());

        // Parental warning
        $this->assertEquals("NoAdviceAvailable", $album->getParentalWarningType());

        // Genre & Subgenre
        $this->assertEquals("J-Pop", $album->getGenre());
        $this->assertNull($album->getSubGenre());

        // Original Release Date
        $this->assertNull($album->getOriginalReleaseDate());

        // ICPN
        $this->assertEquals("00094631432057", $album->getIcpn());

        // Image Front Cover
        $image = $album->getImageFrontCover();
        $this->assertEquals("0094631432057.jpg", $image->getFileName());

		// Tracks
		$tracks = $album->getTracksPerCd();
		$this->assertCount(1, $tracks);
		$this->assertCount(21, $tracks[1]);

		/* @var $track SimpleTrack */
		$track = $tracks[1][1];

		// Track title from DisplayTitleText fallback
		$this->assertEquals("Yume no Lullaby", $track->getTitle());

		// Track display artist resolved from PartyList
		$this->assertCount(1, $track->getDisplayArtists());
		$this->assertEquals("Saeko Shu", $track->getDisplayArtists()[0]->getName());
		$this->assertEquals("MainArtist", $track->getDisplayArtists()[0]->getRole());

		// Track contributors resolved from PartyList
		$contributors = $track->getArtistsFromResourceContributors();
		$this->assertCount(1, $contributors);
		$this->assertEquals("Saeko Shu", $contributors[0]->getName());
		$this->assertEquals("Artist", $contributors[0]->getRole());

        // Get the deal of this Album
        $deal = $album->getDeal();
        $this->assertNotNull($deal);
        $this->assertEquals(["JP"], $deal->getTerritories());
        $this->assertEquals("2004-04-01", $deal->getStartDate()->format("Y-m-d"));
        $this->assertEquals(["PayAsYouGoModel"], $deal->getCommercialModelTypes());
        $this->assertEquals(["PermanentDownload", "ConditionalDownload"], $deal->getUseTypes());
	}


  /**
   * Test SimpleAlbum with ERN 4.3.1 (DisplayGenre, Role/Value, ...)
   */
  public function testSimpleAlbumErn431() {
    $parser = new ErnParserController();
    $ern = $parser->parse("tests/samples/030_ern431_album.xml");
    $this->assertEquals("431", $parser->getVersion());

    $album = new SimpleAlbum($ern, $parser->getVersion());
    $this->assertEquals("Test Album ERN431", $album->getTitle());
    $this->assertEquals("1234567890123", $album->getIcpn());
    $this->assertEquals("Test Label", $album->getLabelName());
    $this->assertEquals(2024, $album->getPLineYear());
    $this->assertEquals("(C) 2024 Test Label", $album->getCLineText());
    // DisplayGenre
    $this->assertEquals("Pop", $album->getGenre());
    $this->assertEquals("NotExplicit", $album->getParentalWarningType());
    $this->assertEquals("Test Artist", $album->getArtists()[0]->getName());
    $this->assertEquals("MainArtist", $album->getArtists()[0]->getRole());

    $tracks = $album->getTracksPerCd();
    $this->assertCount(2, $tracks[1]);
    $this->assertEquals("Track One", $tracks[1][1]->getTitle());
    $this->assertEquals("TEST00000001", $tracks[1][1]->getIsrc());
    $this->assertEquals(210, $tracks[1][1]->getDurationInSeconds());
    $this->assertEquals("test_cover.jpg", $album->getImageFrontCover()->getFileName());
  }

  /**
   * ERN 4.3.1 contributors: role is read from Role/Value
   */
  public function testSimpleTrackContributorsErn431() {
    $parser = new ErnParserController();
    $ern = $parser->parse("tests/samples/033_ern431_new_features.xml");
    $album = new SimpleAlbum($ern, $parser->getVersion());

    $track1 = $album->getTracksPerCd()[1][1];
    $contributors = $track1->getArtistsFromResourceContributors();
    // Contributor 1 has a party reference; contributor 2 is a
    // SpecialContributor (no party) and is skipped as it has no name
    $this->assertNotEmpty($contributors);
    $this->assertEquals("Test Artist", $contributors[0]->getName());
    $this->assertEquals("AssociatedPerformer", $contributors[0]->getRole());
    $this->assertEquals("Test Album ERN431", $album->getTitle());
  }

  /**
   * ERN 4.3.1 real-world single: contributors with Role/Value
   */
  public function testSimpleAlbumErn431RealWorldSingle() {
    $parser = new ErnParserController();
    $ern = $parser->parse("tests/samples/031_ern431_real_world_single.xml");
    $album = new SimpleAlbum($ern, $parser->getVersion());
    $track = $album->getTracksPerCd()[1][1];
    $roles = array_map(function ($a) { return $a->getRole(); }, $track->getArtistsFromResourceContributors());
    $this->assertContains("Composer", $roles);
  }

}
