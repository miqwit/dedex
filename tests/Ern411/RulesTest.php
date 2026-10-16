<?php

namespace DedexBundle\Tests\Ern411;

use DedexBundle\Controller\ErnParserController;
use DedexBundle\Rule\AllReleasesUsedInDeals;
use DedexBundle\Rule\Rule;
use PHPUnit\Framework\TestCase;

class RulesTest extends TestCase {

  /**
   * ERN 4.1.1 has DealList as an array of ReleaseDeal, and the sample lists
   * deals in a different order than releases (track releases first, album
   * release R0 last).
   */
  public function testRuleAllReleasesCoveredByDealErn411() {
    $parser = new ErnParserController();
    $parser->addRule(new AllReleasesUsedInDeals(Rule::LEVEL_ERROR));
    $parser->parse("tests/Ern411/samples/ern411.xml");
    $this->assertEquals("", $parser->getRuleMessages());
  }

}
