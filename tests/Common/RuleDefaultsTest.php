<?php

namespace DedexBundle\Tests\Common;

use DedexBundle\Controller\ErnParserController;
use DedexBundle\Rule\AtLeastOneImage;
use PHPUnit\Framework\TestCase;

/**
 * Version-agnostic rule behaviour: a rule applies to every version the
 * parser supports unless it opts into a narrower set.
 */
class RuleDefaultsTest extends TestCase {

  /**
   * Rules apply by default to every version the parser supports
   */
  public function testRulesSupportAllParserVersionsByDefault() {
    $rule = new AtLeastOneImage();
    $this->assertEquals(ErnParserController::SUPPORTED_VERSIONS, $rule->getSupportedVersions());
  }
}
