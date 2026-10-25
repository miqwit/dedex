<?php

namespace DedexBundle\Tests\Ern381;

use DedexBundle\Controller\ErnParserController;
use DedexBundle\Simplifiers\SimpleAlbum;
use PHPUnit\Framework\TestCase;

class SimplifiersTest extends TestCase {

  /**
   * @param string $file sample file name in tests/Ern381/samples
   * @return SimpleAlbum
   */
  private function album(string $file): SimpleAlbum {
    $parser = new ErnParserController();
    $ern = $parser->parse("tests/Ern381/samples/$file");
    return new SimpleAlbum($ern, $parser->getVersion());
  }

  public function testSimpleAlbum() {
    $album = $this->album("ern381_audio_album.xml");

    // Album
    $this->assertEquals("Northern Lights", $album->getTitle());
    $this->assertEquals("3610159000010", $album->getIcpn());
    $this->assertEquals("EXR017", $album->getCatalogNumber());
    $this->assertEquals("Example Records", $album->getLabelName());
    $this->assertEquals("Electronic", $album->getGenre());
    $this->assertEquals("Ambient", $album->getSubGenre());
    $this->assertEquals("NotExplicit", $album->getParentalWarningType());
    $this->assertEquals("2017-03-10", $album->getOriginalReleaseDate()->format("Y-m-d"));
    $this->assertEquals(2017, $album->getPLineYear());
    $this->assertEquals("(P) 2017 Example Records", $album->getPLineText());
    $this->assertEquals("(C) 2017 Example Records", $album->getCLineText());
    $this->assertCount(1, $album->getArtists());
    $this->assertEquals("The Example Ensemble", $album->getArtists()[0]->getName());
    $this->assertEquals("MainArtist", $album->getArtists()[0]->getRole());
    $this->assertFalse($album->isTakedown());

    // Album deal: the first Deal of the ReleaseDeal (the pre-order deal comes second)
    $deal = $album->getDeal();
    $this->assertEquals(["PayAsYouGoModel", "SubscriptionModel"], $deal->getCommercialModelTypes());
    $this->assertEquals(["PermanentDownload", "OnDemandStream"], $deal->getUseTypes());
    $this->assertEquals(["InternetAndMobile"], $deal->getDistributionChannelTypes());
    $this->assertEquals(["FR", "BE", "CH"], $deal->getTerritories());
    $this->assertEquals("2017-03-10", $deal->getStartDate()->format("Y-m-d"));
    $this->assertNull($deal->getEndDate());

    // Image
    $this->assertEquals("3610159000010.jpg", $album->getImageFrontCover()->getFileName());
    $this->assertEquals("resources/3610159000010.jpg", $album->getImageFrontCover()->getFullPath());

    // Tracks
    $tracks = $album->getTracksPerCd();
    $this->assertCount(1, $tracks);
    $this->assertCount(3, $tracks[1]);

    $this->assertEquals("Aurora", $tracks[1][1]->getTitle());
    $this->assertEquals("FRX811700001", $tracks[1][1]->getIsrc());
    $this->assertEquals(252, $tracks[1][1]->getDurationInSeconds());
    $this->assertEquals("resources/3610159000010_01_01.flac", $tracks[1][1]->getFullPath());
    $this->assertEquals("Polar Night", $tracks[1][2]->getTitle());
    // Fractional seconds (PT5M47.500S) are dropped
    $this->assertEquals(347, $tracks[1][2]->getDurationInSeconds());
    $this->assertEquals("Midnight Sun", $tracks[1][3]->getTitle());
    $this->assertEquals(238, $tracks[1][3]->getDurationInSeconds());

    // Contributors, including a UserDefined role
    $contributors = $tracks[1][1]->getArtistsFromResourceContributors();
    $this->assertCount(1, $contributors);
    $this->assertEquals("Lena Varga", $contributors[0]->getName());
    $this->assertEquals("Producer", $contributors[0]->getRole());
    $contributors = $tracks[1][3]->getArtistsFromResourceContributors();
    $this->assertEquals("Tomas Berg", $contributors[0]->getName());
    $this->assertEquals("MixingEngineer", $contributors[0]->getRole());
    $indirect = $tracks[1][1]->getArtistsFromIndirectResourceContributors();
    $this->assertEquals("Mira Holm", $indirect[0]->getName());
    $this->assertEquals("Composer", $indirect[0]->getRole());

    // Track deals
    $this->assertEquals(["FR", "BE", "CH"], $tracks[1][1]->getDeal()->getTerritories());
    $this->assertEquals("2017-03-10", $tracks[1][3]->getDeal()->getStartDate()->format("Y-m-d"));
  }

  public function testPurgedAlbum() {
    $album = $this->album("ern381_purged_release.xml");

    $this->assertTrue($album->isPurge());
    $this->assertTrue($album->isTakedown());
  }

}
