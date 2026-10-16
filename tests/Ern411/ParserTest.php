<?php

namespace DedexBundle\Tests\Ern411;

use DedexBundle\Controller\ErnParserController;
use PHPUnit\Framework\TestCase;

class ParserTest extends TestCase {

  /**
   * Test ERN 411 is parsed correctly
   */
  public function testSample015Ern411() {
    $xml_path = "tests/Ern411/samples/ern411.xml";
    $parser_controller = new ErnParserController();
    // Set this to true to see logs from the parser
    $parser_controller->setDisplayLog(false);
    $ddex = $parser_controller->parse($xml_path);

    // ERN version is now 411. It is using classes with namespace 411.
    // ERN 411 does not have a getMessageSchemaVersionId() function
    $this->assertEquals('DedexBundle\Entity\Ern411\NewReleaseMessage', get_class($ddex));
  }

}
