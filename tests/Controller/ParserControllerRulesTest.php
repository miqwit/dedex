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
use DedexBundle\Exception\RuleValidationException;
use DedexBundle\Exception\XmlLoadException;
use DedexBundle\Exception\XmlParseException;
use DedexBundle\Rule\AllReleasesUsedInDeals;
use DedexBundle\Rule\AllResourceFileExist;
use DedexBundle\Rule\AllResourcesUsedInReleases;
use DedexBundle\Rule\AllSoundRecordingsHaveIsrc;
use DedexBundle\Rule\AtLeastOneAlbumRelease;
use DedexBundle\Rule\AtLeastOneImage;
use DedexBundle\Rule\AtLeastOneImageFrontCover;
use DedexBundle\Rule\AtLeastOneSoundRecordingRule;
use DedexBundle\Rule\OnlyOneMainRelease;
use DedexBundle\Rule\Rule;
use PHPUnit\Framework\TestCase;

class ParserControllerRulesTest extends TestCase {

  public function testErrorRule() {
    $xml_path = "tests/samples/006_zero_sound_recordings.xml";
    $parser_controller = new ErnParserController();
    $parser_controller->addRule(new AtLeastOneSoundRecordingRule(Rule::LEVEL_ERROR));
    
    /* @var $ddex NewReleaseMessage */
    try {
      $ddex = $parser_controller->parse($xml_path);
      $this->assertTrue(false);
    } catch (RuleValidationException $ex) {
      $this->assertTrue(true);
    }
    
    // With no rules, it passes
    $parser_controller = new ErnParserController();
    $ddex = $parser_controller->parse($xml_path);
    $this->assertTrue(true);
  }
  
  /**
   * A rule by default ERROR will raise exception. 
   * If this rule is overridden by WARNING, will not raise exception
   */
  public function testOverrideLevel() {
    $xml_path = "tests/samples/006_zero_sound_recordings.xml";
    $parser_controller = new ErnParserController();
    $parser_controller->addRule(new AtLeastOneSoundRecordingRule(Rule::LEVEL_ERROR));
    
    // Raise exception because ERROR
    /* @var $ddex NewReleaseMessage */
    try {
      $ddex = $parser_controller->parse($xml_path);
      $this->assertTrue(false);
    } catch (RuleValidationException $ex) {
      $this->assertTrue(true);
    }
    
    // Does not raise exception because just WARNING
    $parser_controller = new ErnParserController();
    $parser_controller->addRule(new AtLeastOneSoundRecordingRule(Rule::LEVEL_WARNING));
    $ddex = $parser_controller->parse($xml_path);
    $this->assertTrue(true);
    
    // Check the warning message
    $this->assertContains("Must have at least one SoundRecording", $parser_controller->getRuleMessages());
  }
  
  /**
   * XML must describe one image
   */
  public function testRuleNoImage() {
    $xml_path = "tests/samples/007_zero_image.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AtLeastOneImage(Rule::LEVEL_ERROR));
    
    
    /* @var $ddex NewReleaseMessage */
    try {
      $ddex = $parser->parse($xml_path);
      $this->assertTrue(false);
    } catch (RuleValidationException $ex) {
      $this->assertTrue(true);
    }
  }
  
  /**
   * XML must describe one image of type FrontCoverImage
   */
  public function testRuleNoImageFrontCover() {
    $xml_path = "tests/samples/008_one_image_not_front.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AtLeastOneImageFrontCover(Rule::LEVEL_ERROR));
    
    
    /* @var $ddex NewReleaseMessage */
    try {
      $ddex = $parser->parse($xml_path);
      $this->assertTrue(false);
    } catch (RuleValidationException $ex) {
      $this->assertTrue(true);
    }
  }
  
  /**
   * Audio files and image files described in ResourceList must exist
   */
  public function testRuleMissingFile() {
    $xml_path = "tests/samples/with_assets/001_complete/001_audioalbum_complete.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AllResourceFileExist(Rule::LEVEL_ERROR, "tests/samples/with_assets/001_complete/"));
    
    /* @var $ddex NewReleaseMessage */
    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true);
    
    // Here, one audio file is missing
    
    $xml_path = "tests/samples/with_assets/002_missing_audio/001_audioalbum_complete.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AllResourceFileExist(Rule::LEVEL_ERROR, "tests/samples/with_assets/002_missing_audio/"));
    
    /* @var $ddex NewReleaseMessage */
    try {
      $ddex = $parser->parse($xml_path);
      $this->assertTrue(false);
    } catch (RuleValidationException $ex) {
      $this->assertTrue(true);
    }
    
    // Here, the image file is missing (in fact, wrong extension jpg instead of jpeg)
    
    $xml_path = "tests/samples/with_assets/002_missing_audio/001_audioalbum_complete.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AllResourceFileExist(Rule::LEVEL_ERROR, "tests/samples/with_assets/003_image_wrong_ext/"));
    
    /* @var $ddex NewReleaseMessage */
    try {
      $ddex = $parser->parse($xml_path);
      $this->assertTrue(false);
    } catch (RuleValidationException $ex) {
      $this->assertTrue(true);
    }
  }
  
  /**
   * XML must describe one image of type FrontCoverImage
   */
  public function testRuleOneMainRelease() {
    $xml_path = "tests/samples/001_audioalbum_complete.xml";
    $parser = new ErnParserController();
    $parser->addRule(new OnlyOneMainRelease(Rule::LEVEL_ERROR));
    
    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true);
    
    // No main release
    $xml_path = "tests/samples/009_no_main_release.xml";
    $parser = new ErnParserController();
    $parser->addRule(new OnlyOneMainRelease(Rule::LEVEL_ERROR));
    try {
      $ddex = $parser->parse($xml_path);
      $this->assertTrue(false);
    } catch (RuleValidationException $ex) {
      $this->assertTrue(true);
    }
  }
  
  /**
   * XML must describe one image of type FrontCoverImage
   */
  public function testRuleOneAlbumRelease() {
    $xml_path = "tests/samples/001_audioalbum_complete.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AtLeastOneAlbumRelease(Rule::LEVEL_ERROR));
    
    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true);
    
    // No main release
    $xml_path = "tests/samples/010_no_album_release.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AtLeastOneAlbumRelease(Rule::LEVEL_ERROR));
    try {
      $ddex = $parser->parse($xml_path);
      $this->assertTrue(false);
    } catch (RuleValidationException $ex) {
      $this->assertTrue(true);
    }
  }
  
  /**
   * All resources must be used
   */
  public function testRuleAllResourcesUsed() {
    $xml_path = "tests/samples/001_audioalbum_complete.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AllResourcesUsedInReleases(Rule::LEVEL_ERROR));
    
    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true);
    
    // A2 is unused
    /* @var $ddex NewReleaseMessage */
    $xml_path = "tests/samples/011_one_resource_unused.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AllResourcesUsedInReleases(Rule::LEVEL_ERROR));
    try {
      $ddex = $parser->parse($xml_path);
      $this->assertTrue(false);
    } catch (RuleValidationException $ex) {
      $this->assertContains("A2 not used or not defined", $parser->getRuleMessages());
      $this->assertTrue(true);
    }
  }
  
  /**
   * All resources must be used
   */
  public function testRuleAllSoundRecordingIsrc() {
    $xml_path = "tests/samples/001_audioalbum_complete.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AllSoundRecordingsHaveIsrc(Rule::LEVEL_ERROR));
    
    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true);
    
    // A3 has no ISRC
    /* @var $ddex NewReleaseMessage */
    $xml_path = "tests/samples/012_missing_isrc.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AllSoundRecordingsHaveIsrc(Rule::LEVEL_ERROR));
    try {
      $ddex = $parser->parse($xml_path);
      $this->assertTrue(false);
    } catch (RuleValidationException $ex) {
      $this->assertTrue(true);
    }
    
    // A2 has empty ISRC
    /* @var $ddex NewReleaseMessage */
    $xml_path = "tests/samples/013_isrc_empty_string.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AllSoundRecordingsHaveIsrc(Rule::LEVEL_ERROR));
    try {
      $ddex = $parser->parse($xml_path);
      $this->assertTrue(false);
    } catch (RuleValidationException $ex) {
      $this->assertTrue(true);
    }
    
    // On another file
    $xml_path = "tests/samples/with_assets/004_complete/1199119911991.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AllSoundRecordingsHaveIsrc(Rule::LEVEL_ERROR));
    
    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true);
  }
  
  
  
  /**
   * All resources must be used
   */
  public function testRuleAllReleasesCoveredByDeal() {
    $xml_path = "tests/samples/with_assets/004_complete/1199119911991.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AllReleasesUsedInDeals(Rule::LEVEL_ERROR));
    
    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true);
    
    // R9 has no deal
    /* @var $ddex NewReleaseMessage */
    $xml_path = "tests/samples/014_missing_deal.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AllReleasesUsedInDeals(Rule::LEVEL_ERROR));
    try {
      $ddex = $parser->parse($xml_path);
      $this->assertTrue(false);
    } catch (RuleValidationException $ex) {
      $this->assertContains("R9 not used in deals or not defined in ReleaseList", $parser->getRuleMessages());
      $this->assertTrue(true);
    }
  }

}
