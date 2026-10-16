<?php

namespace DedexBundle\Tests\Ern42;

use DedexBundle\Controller\ErnParserController;
use PHPUnit\Framework\TestCase;

class ParserTest extends TestCase {

  /**
   * Test ERN 42 is parsed correctly
   */
  public function testSample018Ern42() {
    $xml_path = "tests/Ern42/samples/ern42.xml";
    $parser_controller = new ErnParserController();
    // Set this to true to see logs from the parser
    $parser_controller->setDisplayLog(false);
    $ddex = $parser_controller->parse($xml_path);

    // ERN version is now 42. It is using classes with namespace 42.
    // ERN 42 does not have a getMessageSchemaVersionId() function
    $this->assertEquals('DedexBundle\Entity\Ern42\NewReleaseMessage', get_class($ddex));
  }

}
