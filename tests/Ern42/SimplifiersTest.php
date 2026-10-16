<?php

namespace DedexBundle\Tests\Ern42;

use DedexBundle\Controller\ErnParserController;
use DedexBundle\Simplifiers\SimpleAlbum;
use DedexBundle\Simplifiers\SimpleTrack;
use PHPUnit\Framework\TestCase;

class SimplifiersTest extends TestCase {

  /**
   * Test SimpleAlbum with ERN 4.2 sample, verifying PartyList resolution
   */
  public function testSimpleAlbumErn42() {
    $parser = new ErnParserController();
    $ern = $parser->parse("tests/Ern42/samples/ern42.xml");

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

}
