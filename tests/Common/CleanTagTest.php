<?php

namespace DedexBundle\Tests\Common;

use DedexBundle\Controller\ErnParserController;
use PHPUnit\Framework\TestCase;

/**
 * Version-agnostic parser helper behaviour that is not tied to any ERN
 * version (tag sanitisation).
 */
class CleanTagTest extends TestCase {

  public function testCleanTag() {
    $parser_controller = new ErnParserController();
    $this->assertEquals("MYTAG", $parser_controller->cleanTag("MYTAG"));
    $this->assertEquals("MY_TAG", $parser_controller->cleanTag("MY:TAG"));
  }
}
