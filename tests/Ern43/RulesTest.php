<?php

namespace DedexBundle\Tests\Ern43;

use DedexBundle\Controller\ErnParserController;
use DedexBundle\Rule\AllReleasesUsedInDeals;
use DedexBundle\Rule\AllResourcesUsedInReleases;
use DedexBundle\Rule\AllSoundRecordingsHaveIsrc;
use DedexBundle\Rule\AtLeastOneAlbumRelease;
use DedexBundle\Rule\AtLeastOneImage;
use DedexBundle\Rule\AtLeastOneImageFrontCover;
use DedexBundle\Rule\AtLeastOneSoundRecordingRule;
use DedexBundle\Rule\OnlyOneMainRelease;
use DedexBundle\Rule\Rule;
use PHPUnit\Framework\TestCase;

class RulesTest extends TestCase {

  /**
   * Test rules pass on valid ERN 4.3 XML
   */
  public function testRulesPassOnErn43() {
    $xml_path = "tests/Ern43/samples/ern43.xml";

    // Test each rule individually
    $parser = new ErnParserController();
    $parser->addRule(new AtLeastOneSoundRecordingRule(Rule::LEVEL_ERROR));
    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true);

    $parser = new ErnParserController();
    $parser->addRule(new AtLeastOneImage(Rule::LEVEL_ERROR));
    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true);

    $parser = new ErnParserController();
    $parser->addRule(new AtLeastOneImageFrontCover(Rule::LEVEL_ERROR));
    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true);

    $parser = new ErnParserController();
    $parser->addRule(new AllSoundRecordingsHaveIsrc(Rule::LEVEL_ERROR));
    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true);

    $parser = new ErnParserController();
    $parser->addRule(new OnlyOneMainRelease(Rule::LEVEL_ERROR));
    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true);

    $parser = new ErnParserController();
    $parser->addRule(new AtLeastOneAlbumRelease(Rule::LEVEL_ERROR));
    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true);

    $parser = new ErnParserController();
    $parser->addRule(new AllResourcesUsedInReleases(Rule::LEVEL_ERROR));
    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true);

    $parser = new ErnParserController();
    $parser->addRule(new AllReleasesUsedInDeals(Rule::LEVEL_ERROR));
    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true);
  }

}
