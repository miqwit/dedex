<?php

namespace DedexBundle\Tests\Common;

use DedexBundle\Controller\ErnParserController;
use DedexBundle\Exception\FileNotFoundException;
use DedexBundle\Exception\VersionNotSupportedException;
use DedexBundle\Exception\XmlLoadException;
use DedexBundle\Exception\XmlParseException;
use DedexBundle\Exception\XsdCompliantException;
use PHPUnit\Framework\TestCase;

/**
 * Version-agnostic parser error handling (missing file, malformed XML,
 * unsupported version, missing namespace, XSD validation failure).
 */
class ParserErrorsTest extends TestCase {

  public function testFileNotFound() {
    $parser = new ErnParserController();
    try {
      $parser->parse("/this/file/does/not/exist/379187");
      $this->assertFalse(true);
    } catch (FileNotFoundException $ex) {
      $this->assertTrue(true);
    }
  }

  public function testXmlLoadError() {
    $parser = new ErnParserController();
    try {
      $parser->parse("tests/Common/samples/erroneous_xml.xml");
      $this->assertFalse(true);
    } catch (XmlParseException $ex) {
      $this->assertTrue(true);
    }
  }

  public function testVersionNotSupported() {
    $parser = new ErnParserController();
    try {
      $parser->parse("tests/Common/samples/version_not_supported.xml");
      $this->assertFalse(true);
    } catch (VersionNotSupportedException $ex) {
      $this->assertTrue(true);
    }
  }

  public function testXmlnsErnMissing() {
    $parser = new ErnParserController();
    try {
      $parser->parse("tests/Common/samples/xmlns_ern_missing.xml");
      $this->assertFalse(true);
    } catch (XmlLoadException $ex) {
      $this->assertTrue(true);
    }
  }

  public function testNotValidXsd() {
    $parser = new ErnParserController();
    $parser->setXsdValidation(true);
    try {
      $parser->parse("tests/Common/samples/not_valid_xsd.xml");
      $this->assertFalse(true);
    } catch (XsdCompliantException $ex) {
      $this->assertStringContainsString('This XML file tests/Common/samples/not_valid_xsd.xml does not validates XSD', $ex->getMessage());
      $this->assertStringContainsString("xsd/release_notification/382/release-notification.xsd. Error: XMLReader::read(): Element 'FakeTag': This element is not expected. Expected is one of ( SoundRecordingType, IsArtistRelated, SoundRecordingId ).", $ex->getMessage());
    }

    // If setXsdValidation is not set, will raise another error later
    $parser->setXsdValidation(false);
    try {
      $parser->parse("tests/Common/samples/not_valid_xsd.xml");
    } catch (\Exception $ex) {
      $expected_message = "No functions found for this tag: FakeTag. Path is NewReleaseMessage,ResourceList,SoundRecording";
      $this->assertEquals($expected_message, $ex->getMessage());
    }
  }
}
