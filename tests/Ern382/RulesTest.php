<?php

namespace DedexBundle\Tests\Ern382;

use DedexBundle\Controller\ErnParserController;
use DedexBundle\Entity\Ern382\NewReleaseMessage;
use DedexBundle\Exception\RuleValidationException;
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
use DedexBundle\Rule\RuleSet;
use PHPUnit\Framework\TestCase;

class RulesTest extends TestCase {

  public function testErrorRule() {
    $xml_path = "tests/Ern382/samples/zero_sound_recordings.xml";
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
    $xml_path = "tests/Ern382/samples/zero_sound_recordings.xml";
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
    $this->assertStringContainsString("Must have at least one SoundRecording", $parser_controller->getRuleMessages());
  }

  /**
   * XML must describe one image
   */
  public function testRuleNoImage() {
    $xml_path = "tests/Ern382/samples/zero_image.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AtLeastOneImage(Rule::LEVEL_ERROR));


    /* @var $ddex NewReleaseMessage */
    try {
      $ddex = $parser->parse($xml_path);
      $this->assertTrue(false);
    } catch (RuleValidationException $ex) {
      $this->assertStringContainsString("ERROR: Must have at least one Image", $ex->getMessage());
    }
  }

  /**
   * XML must describe one image of type FrontCoverImage
   */
  public function testRuleNoImageFrontCover() {
    $xml_path = "tests/Ern382/samples/one_image_not_front.xml";
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
    $xml_path = "tests/Ern382/samples/with_assets/complete_wav/001_audioalbum_complete.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AllResourceFileExist(Rule::LEVEL_ERROR, "tests/Ern382/samples/with_assets/complete_wav/"));

    /* @var $ddex NewReleaseMessage */
    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true);

    // Here, one audio file is missing

    $xml_path = "tests/Ern382/samples/with_assets/missing_audio/001_audioalbum_complete.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AllResourceFileExist(Rule::LEVEL_ERROR, "tests/Ern382/samples/with_assets/missing_audio/"));

    /* @var $ddex NewReleaseMessage */
    try {
      $ddex = $parser->parse($xml_path);
      $this->assertTrue(false);
    } catch (RuleValidationException $ex) {
      $this->assertTrue(true);
    }

    // Here, the image file is missing (in fact, wrong extension jpg instead of jpeg)

    $xml_path = "tests/Ern382/samples/with_assets/missing_audio/001_audioalbum_complete.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AllResourceFileExist(Rule::LEVEL_ERROR, "tests/Ern382/samples/with_assets/image_wrong_ext/"));

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
    $xml_path = "tests/Ern382/samples/audioalbum_complete.xml";
    $parser = new ErnParserController();
    $parser->addRule(new OnlyOneMainRelease(Rule::LEVEL_ERROR));

    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true);

    // No main release
    $xml_path = "tests/Ern382/samples/no_main_release.xml";
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
    $xml_path = "tests/Ern382/samples/audioalbum_complete.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AtLeastOneAlbumRelease(Rule::LEVEL_ERROR));

    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true);

    // No main release
    $xml_path = "tests/Ern382/samples/no_album_release.xml";
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
    $xml_path = "tests/Ern382/samples/audioalbum_complete.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AllResourcesUsedInReleases(Rule::LEVEL_ERROR));

    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true);

    // A2 is unused
    /* @var $ddex NewReleaseMessage */
    $xml_path = "tests/Ern382/samples/one_resource_unused.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AllResourcesUsedInReleases(Rule::LEVEL_ERROR));
    try {
      $ddex = $parser->parse($xml_path);
      $this->assertTrue(false);
    } catch (RuleValidationException $ex) {
      $this->assertStringContainsString("Resource A2 is not used in any release", $parser->getRuleMessages());
      $this->assertTrue(true);
    }
  }

  /**
   * All resources must be used
   */
  public function testRuleAllSoundRecordingIsrc() {
    $xml_path = "tests/Ern382/samples/audioalbum_complete.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AllSoundRecordingsHaveIsrc(Rule::LEVEL_ERROR));

    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true);

    // A3 has no ISRC
    /* @var $ddex NewReleaseMessage */
    $xml_path = "tests/Ern382/samples/missing_isrc.xml";
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
    $xml_path = "tests/Ern382/samples/isrc_empty_string.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AllSoundRecordingsHaveIsrc(Rule::LEVEL_ERROR));
    try {
      $ddex = $parser->parse($xml_path);
      $this->assertTrue(false);
    } catch (RuleValidationException $ex) {
      $this->assertTrue(true);
    }

    // On another file
    $xml_path = "tests/Ern382/samples/with_assets/complete_flac/1199119911991.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AllSoundRecordingsHaveIsrc(Rule::LEVEL_ERROR));

    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true);
  }



  /**
   * All resources must be used
   */
  public function testRuleAllReleasesCoveredByDeal() {
    $xml_path = "tests/Ern382/samples/with_assets/complete_flac/1199119911991.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AllReleasesUsedInDeals(Rule::LEVEL_ERROR));

    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true);

    // R9 has no deal
    /* @var $ddex NewReleaseMessage */
    $xml_path = "tests/Ern382/samples/missing_deal.xml";
    $parser = new ErnParserController();
    $parser->addRule(new AllReleasesUsedInDeals(Rule::LEVEL_ERROR));
    try {
      $ddex = $parser->parse($xml_path);
      $this->assertTrue(false);
    } catch (RuleValidationException $ex) {
      $this->assertStringContainsString("Release R9 is not used in any deal", $parser->getRuleMessages());
      $this->assertTrue(true);
    }
  }

  /**
   * All resources must be used
   */
  public function testRuleSetAllReleasesCoveredByDeal() {
    // R9 has no deal
    /* @var $ddex NewReleaseMessage */
    $xml_path = "tests/Ern382/samples/missing_deal.xml";
    $parser = new ErnParserController();

    $parser->addRuleSet(RuleSet::MUSICAL_ALBUM());

    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true); // Will pass because all rules are WARNING

    $this->assertStringContainsString("Release R9 is not used in any deal", $parser->getRuleMessages());
  }

  /**
   * RuleSet all good
   */
  public function testRuleSetAllGood() {
    // R9 has no deal
    /* @var $ddex NewReleaseMessage */
    $xml_path = "tests/Ern382/samples/with_assets/complete_flac/1199119911991.xml";
    $parser = new ErnParserController();

    $parser->addRuleSet(RuleSet::MUSICAL_ALBUM("tests/Ern382/samples/with_assets/complete_flac/"));

    $ddex = $parser->parse($xml_path);
    $this->assertTrue(true); // Will pass because all rules are WARNING

    $this->assertEquals("", $parser->getRuleMessages());
  }

}
