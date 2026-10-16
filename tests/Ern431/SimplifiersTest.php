<?php

namespace DedexBundle\Tests\Ern431;

use DedexBundle\Controller\ErnParserController;
use DedexBundle\Simplifiers\SimpleAlbum;
use PHPUnit\Framework\TestCase;

class SimplifiersTest extends TestCase {

  /**
   * Test SimpleAlbum with ERN 4.3.1 (DisplayGenre, Role/Value, ...)
   */
  public function testSimpleAlbumErn431() {
    $parser = new ErnParserController();
    $ern = $parser->parse("tests/Ern431/samples/ern431_album.xml");
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
    $ern = $parser->parse("tests/Ern431/samples/ern431_new_features.xml");
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
    $ern = $parser->parse("tests/Ern431/samples/ern431_real_world_single.xml");
    $album = new SimpleAlbum($ern, $parser->getVersion());
    $track = $album->getTracksPerCd()[1][1];
    $roles = array_map(function ($a) { return $a->getRole(); }, $track->getArtistsFromResourceContributors());
    $this->assertContains("Composer", $roles);
  }

}
