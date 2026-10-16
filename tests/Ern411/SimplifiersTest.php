<?php

namespace DedexBundle\Tests\Ern411;

use DedexBundle\Controller\ErnParserController;
use DedexBundle\Simplifiers\SimpleAlbum;
use DedexBundle\Simplifiers\SimpleTrack;
use PHPUnit\Framework\TestCase;

class SimplifiersTest extends TestCase {

  /**
   * Test SimpleAlbum with ERN 4.1.1.
   */
  public function testSimpleAlbum411() {
    $parser = new ErnParserController();
    $ern = $parser->parse("tests/Ern411/samples/ern411.xml");

    $album = new SimpleAlbum($ern, $parser->getVersion());

    // Album deal
    $albumDeal = $album->getDeal();
    $this->assertNotNull($albumDeal);

    // The album deal is for Japan only, from 2004-04-01
    $this->assertEquals(1, count($albumDeal->getTerritories()));
    $this->assertEquals("JP", $albumDeal->getTerritories()[0]);
    $this->assertEquals("2004-04-01", $albumDeal->getStartDate()->format('Y-m-d'));

    // Tracks deal
    $track01 = $album->getTracksPerCd()[1][1];
    /* @var $track01 SimpleTrack */
    $deal01 = $track01->getDeal();
    $this->assertNotNull($deal01);

    $track02 = $album->getTracksPerCd()[1][2];
    /* @var $track02 SimpleTrack */
    $deal02 = $track02->getDeal();
    $this->assertNotNull($deal02);

    // Loop over deal01 and deal02
    foreach (array($deal01, $deal02) as $deal) {
      $this->assertCount(1, $deal->getTerritories());
      $this->assertEquals("JP", $deal->getTerritories()[0]);
      $this->assertEquals("2004-04-01", $deal->getStartDate()->format('Y-m-d'));
      $this->assertCount(3, $deal->getCommercialModelTypes());
      $this->assertContains("AsPerContract", $deal->getCommercialModelTypes());
      $this->assertContains("SubscriptionModel", $deal->getCommercialModelTypes());
      $this->assertContains("AdvertisementSupportedModel", $deal->getCommercialModelTypes());
    }
  }

}
