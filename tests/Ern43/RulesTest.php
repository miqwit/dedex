<?php

namespace DedexBundle\Tests\Ern43;

use DedexBundle\Controller\ErnParserController;
use DedexBundle\Rule\AllReleasesUsedInDeals;
use DedexBundle\Rule\AllResourcesUsedInReleases;
use DedexBundle\Rule\AllSoundRecordingsHaveIsrc;
use DedexBundle\Rule\AtLeastOneAlbumRelease;
use DedexBundle\Rule\AtLeastOneImage;
use DedexBundle\Rule\AtLeastOneImageFrontCover;
use DedexBundle\Rule\AtLeastOneSoundRecordingRule;
use DedexBundle\Rule\OnlyOneMainRelease;
use DedexBundle\Rule\Rule;
use PHPUnit\Framework\TestCase;

class RulesTest extends TestCase {

  /**
   * Test rules pass on valid ERN 4.3 XML
   */
  public function testRulesPassOnErn43() {
    $xml_path = "tests/Ern43/samples/ern43.xml";
    foreach ([
      new AtLeastOneSoundRecordingRule(Rule::LEVEL_ERROR),
      new AtLeastOneImage(Rule::LEVEL_ERROR),
      new AtLeastOneImageFrontCover(Rule::LEVEL_ERROR),
      new AllSoundRecordingsHaveIsrc(Rule::LEVEL_ERROR),
      new OnlyOneMainRelease(Rule::LEVEL_ERROR),
      new AtLeastOneAlbumRelease(Rule::LEVEL_ERROR),
      new AllResourcesUsedInReleases(Rule::LEVEL_ERROR),
      new AllReleasesUsedInDeals(Rule::LEVEL_ERROR),
    ] as $rule) {
      $parser = new ErnParserController();
      $parser->addRule($rule);
      $parser->parse($xml_path);
      $this->assertEquals("", $parser->getRuleMessages(), get_class($rule));
    }
  }

  /**
   * The release-level cover (A0) is linked in the parent ResourceGroup,
   * before the sub-groups of tracks: references are found in a different
   * order than resources are declared (#57)
   */
  public function testResourcesUsedWhateverTheOrder() {
    $parser = new ErnParserController();
    $parser->addRule(new AllResourcesUsedInReleases(Rule::LEVEL_ERROR));
    $parser->parse("tests/Ern43/samples/ern43_classical.xml");
    $this->assertEquals("", $parser->getRuleMessages());
  }

  /**
   * Resources linked from a ResourceGroupContentItem (like the image of a
   * track or video) are used (#57)
   */
  public function testResourcesLinkedFromContentItemsAreUsed() {
    foreach (["ern43_simple_audio_single.xml", "ern43_ringtone.xml", "ern43_video.xml", "ern43_mixed_media.xml"] as $file) {
      $parser = new ErnParserController();
      $parser->addRule(new AllResourcesUsedInReleases(Rule::LEVEL_ERROR));
      $parser->parse("tests/Ern43/samples/$file");
      $this->assertEquals("", $parser->getRuleMessages(), $file);
    }
  }

  /**
   * SoundRecordings mixed into a DJ mix are not in any release
   */
  public function testUnusedSoundRecordingsAreReported() {
    $parser = new ErnParserController();
    $parser->addRule(new AllResourcesUsedInReleases());
    $parser->parse("tests/Ern43/samples/ern43_dj_mix.xml");
    $this->assertStringContainsString("Resource A2 is not used in any release. Resource A3 is not used in any release. Resource A4 is not used in any release. Resource A5 is not used in any release. Resource A6 is not used in any release. Resource A7 is not used in any release. Resource A8 is not used in any release. Resource A9 is not used in any release.", $parser->getRuleMessages());
  }

}
