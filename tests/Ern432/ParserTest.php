<?php

namespace DedexBundle\Tests\Ern432;

use DedexBundle\Controller\ErnParserController;
use PHPUnit\Framework\TestCase;

class ParserTest extends TestCase {

  /**
   * ERN 4.3.2: version detection and entity namespace.
   *
   * 4.3.2 is a corrective release over 4.3.1; a 4.3.2 message must be
   * detected as "432" and use the Ern432 entity classes.
   */
  public function testVersionDetection() {
    $parser = new ErnParserController();
    $parser->setDisplayLog(false);
    $parser->setXsdValidation(true);
    $ddex = $parser->parse("tests/Ern432/samples/ern432_brand_id.xml");

    $this->assertEquals("432", $parser->getVersion());
    $this->assertEquals('DedexBundle\Entity\Ern432\NewReleaseMessage', get_class($ddex));
    $this->assertEquals("Test432", $ddex->getMessageHeader()->getMessageThreadId());
  }

  /**
   * The one 4.3.2 fix: Brand/BrandId is typed as ProprietaryId (string value
   * + required @Namespace) instead of the empty ProprietaryIdentifier type of
   * 4.3.1. A BrandId can therefore carry a value and a Namespace, and the XML
   * validates against the 4.3.2 XSD (setXsdValidation(true) below).
   */
  public function testBrandIdHasValueAndNamespace() {
    $parser = new ErnParserController();
    $parser->setDisplayLog(false);
    $parser->setXsdValidation(true);
    $ddex = $parser->parse("tests/Ern432/samples/ern432_brand_id.xml");

    $brands = $ddex->getPartyList()->getBrand();
    $this->assertCount(1, $brands);
    $this->assertEquals("PBrand1", $brands[0]->getBrandReference());
    $this->assertEquals("Test Brand", (string) $brands[0]->getBrandName()[0]->getFullName());

    // BrandId now holds a value and a Namespace (impossible in 4.3.1)
    $brandIds = $brands[0]->getBrandId();
    $this->assertCount(1, $brandIds);
    $this->assertInstanceOf('DedexBundle\Entity\Ern432\ProprietaryIdType', $brandIds[0]);
    $this->assertEquals("brand-0042", $brandIds[0]->value());
    $this->assertEquals("PADPIDA2014120301R", $brandIds[0]->getNamespace());
  }

  /**
   * The empty ProprietaryIdentifier type of 4.3.1 was removed in 4.3.2.
   */
  public function testProprietaryIdentifierTypeRemoved() {
    $this->assertFalse(
      class_exists('DedexBundle\Entity\Ern432\ProprietaryIdentifierType'),
      "ProprietaryIdentifierType should not exist in Ern432"
    );
  }

}
