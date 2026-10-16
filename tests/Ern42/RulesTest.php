<?php

namespace DedexBundle\Tests\Ern42;

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
   * Test rules pass on valid ERN 4.2 XML
   */
  public function testRulesPassOnErn42() {
    $xml_path = "tests/Ern42/samples/ern42.xml";
    foreach ([
      new AtLeastOneSoundRecordingRule(Rule::LEVEL_ERROR),
      new AtLeastOneImage(Rule::LEVEL_ERROR),
      new AtLeastOneImageFrontCover(Rule::LEVEL_ERROR),
      new AllSoundRecordingsHaveIsrc(Rule::LEVEL_ERROR),
      new AtLeastOneAlbumRelease(Rule::LEVEL_ERROR),
      new OnlyOneMainRelease(Rule::LEVEL_ERROR),
      new AllResourcesUsedInReleases(Rule::LEVEL_ERROR),
      new AllReleasesUsedInDeals(Rule::LEVEL_ERROR),
    ] as $rule) {
      $parser = new ErnParserController();
      $parser->addRule($rule);
      $parser->parse($xml_path);
      $this->assertEquals("", $parser->getRuleMessages(), get_class($rule));
    }
  }

}
