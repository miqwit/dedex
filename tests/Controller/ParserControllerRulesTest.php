<?php

namespace DedexBundle\Tests\Controller;

use DedexBundle\Controller\ErnParserController;
use DedexBundle\Entity\Ern382\GenreType;
use DedexBundle\Entity\Ern382\ImageDetailsByTerritoryType;
use DedexBundle\Entity\Ern382\ImageType;
use DedexBundle\Entity\Ern382\IndirectResourceContributor;
use DedexBundle\Entity\Ern382\NewReleaseMessage;
use DedexBundle\Entity\Ern382\ReleaseDetailsByTerritoryType;
use DedexBundle\Entity\Ern382\ReleaseType;
use DedexBundle\Entity\Ern382\ResourceContributor;
use DedexBundle\Entity\Ern382\SoundRecordingDetailsByTerritoryType;
use DedexBundle\Entity\Ern382\TechnicalSoundRecordingDetailsType;
use DedexBundle\Exception\FileNotFoundException;
use DedexBundle\Exception\XmlLoadException;
use DedexBundle\Exception\XmlParseException;
use DedexBundle\Rule\AtLeastOneSoundRecordingRule;
use PHPUnit\Framework\TestCase;

class ParserControllerRulesTest extends TestCase {

  public function testErrorRule() {
    $xml_path = "tests/samples/006_zero_sound_recordings.xml";
    $parser_controller = new ErnParserController();
    $parser_controller->addRule(new AtLeastOneSoundRecordingRule());
    
    /* @var $ddex NewReleaseMessage */
    try {
      $ddex = $parser_controller->parse($xml_path);
      $this->assertTrue(false);
    } catch (\DedexBundle\Exception\RuleValidationException $ex) {
      $this->assertTrue(true);
    }
    
    // With no rules, it passes
    $parser_controller = new ErnParserController();
    $ddex = $parser_controller->parse($xml_path);
    $this->assertTrue(true);
  }

}
