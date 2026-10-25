<?php

namespace DedexBundle\Tests\Ern381;

use DedexBundle\Controller\ErnParserController;
use DedexBundle\Exception\RuleValidationException;
use DedexBundle\Rule\AllReleasesUsedInDeals;
use DedexBundle\Rule\AllResourceFileExist;
use DedexBundle\Rule\AllResourcesUsedInReleases;
use DedexBundle\Rule\AllSoundRecordingsHaveIsrc;
use DedexBundle\Rule\AtLeastOneImageFrontCover;
use DedexBundle\Rule\Rule;
use DedexBundle\Rule\RuleSet;
use PHPUnit\Framework\TestCase;

/**
 * The rules below have different code paths for ERN 3.x and 4.x. They must
 * take the 3.x path for 3.8.1 entities.
 */
class RulesTest extends TestCase {

  /**
   * @param Rule $rule
   * @param string $file sample file name in tests/Ern381/samples
   * @return ErnParserController the parser, after parsing
   */
  private function parseWithRule(Rule $rule, string $file): ErnParserController {
    $parser = new ErnParserController();
    $parser->addRule($rule);
    $parser->parse("tests/Ern381/samples/$file");
    return $parser;
  }

  /**
   * The whole MUSICAL_ALBUM rule set passes on a complete 3.8.1 album.
   * Only AllResourceFileExist warns, since the audio files are not shipped
   * with the sample.
   */
  public function testRuleSetAllGood() {
    $parser = new ErnParserController();
    $parser->addRuleSet(RuleSet::MUSICAL_ALBUM("tests/Ern381/samples/"));
    $parser->parse("tests/Ern381/samples/ern381_audio_album.xml");

    $messages = $parser->getRuleMessages();
    $this->assertStringContainsString("WARNING: Missing files described in the resource", $messages);
    $this->assertStringNotContainsString("ERROR", $messages);
    $this->assertEquals(1, substr_count($messages, "\n- "), $messages);
  }

  public function testRuleAllSoundRecordingsHaveIsrc() {
    $this->parseWithRule(new AllSoundRecordingsHaveIsrc(Rule::LEVEL_ERROR), "ern381_audio_album.xml");

    $this->expectException(RuleValidationException::class);
    $this->parseWithRule(new AllSoundRecordingsHaveIsrc(Rule::LEVEL_ERROR), "ern381_missing_isrc.xml");
  }

  public function testRuleAtLeastOneImageFrontCover() {
    $this->parseWithRule(new AtLeastOneImageFrontCover(Rule::LEVEL_ERROR), "ern381_audio_album.xml");

    $this->expectException(RuleValidationException::class);
    $this->parseWithRule(new AtLeastOneImageFrontCover(Rule::LEVEL_ERROR), "ern381_image_not_front_cover.xml");
  }

  public function testRuleAllResourcesUsedInReleases() {
    $this->parseWithRule(new AllResourcesUsedInReleases(Rule::LEVEL_ERROR), "ern381_audio_album.xml");

    $this->expectException(RuleValidationException::class);
    $this->parseWithRule(new AllResourcesUsedInReleases(Rule::LEVEL_ERROR), "ern381_resource_unused.xml");
  }

  public function testRuleAllReleasesUsedInDeals() {
    $this->parseWithRule(new AllReleasesUsedInDeals(Rule::LEVEL_ERROR), "ern381_audio_album.xml");

    $this->expectException(RuleValidationException::class);
    $this->parseWithRule(new AllReleasesUsedInDeals(Rule::LEVEL_ERROR), "ern381_track_release_without_deal.xml");
  }

  /**
   * Every resource type is checked, as in ERN 4.x, not only SoundRecordings
   * and Images: the music video A5 is used by the album, the booklet A6
   * (a Text resource) is not used by any release
   */
  public function testUnusedResourceOfAnyType() {
    $parser = $this->parseWithRule(new AllResourcesUsedInReleases(), "ern381_video_and_unused_booklet.xml");
    $this->assertEquals("\n- WARNING: All resources must be used in releases. A6 not used or not defined.", $parser->getRuleMessages());
  }

  /**
   * Files of every resource type are checked, as in ERN 4.x: here the
   * video and the booklet, besides the audio and the cover
   */
  public function testFilesOfEveryResourceType() {
    $root = sys_get_temp_dir() . DIRECTORY_SEPARATOR . "dedex_381_" . uniqid();
    $files = ["3610159000010_01_01.flac", "3610159000010_01_02.flac", "3610159000010_01_03.flac",
      "3610159000010_video_01.mp4", "3610159000010.jpg"];
    mkdir($root . DIRECTORY_SEPARATOR . "resources", 0777, true);
    foreach ($files as $file) {
      touch($root . DIRECTORY_SEPARATOR . "resources" . DIRECTORY_SEPARATOR . $file);
    }
    try {
      // Only the booklet is missing
      $parser = $this->parseWithRule(new AllResourceFileExist(null, $root), "ern381_video_and_unused_booklet.xml");
      $this->assertEquals("\n- WARNING: Missing files described in the resource: 3610159000010_booklet.pdf", $parser->getRuleMessages());

      // Without the video either
      unlink($root . DIRECTORY_SEPARATOR . "resources" . DIRECTORY_SEPARATOR . "3610159000010_video_01.mp4");
      $parser = $this->parseWithRule(new AllResourceFileExist(null, $root), "ern381_video_and_unused_booklet.xml");
      $this->assertEquals("\n- WARNING: Missing files described in the resource: 3610159000010_video_01.mp4 3610159000010_booklet.pdf", $parser->getRuleMessages());

      // All files
      $files[] = "3610159000010_video_01.mp4";
      $files[] = "3610159000010_booklet.pdf";
      foreach ($files as $file) {
        touch($root . DIRECTORY_SEPARATOR . "resources" . DIRECTORY_SEPARATOR . $file);
      }
      $parser = $this->parseWithRule(new AllResourceFileExist(Rule::LEVEL_ERROR, $root), "ern381_video_and_unused_booklet.xml");
      $this->assertEquals("", $parser->getRuleMessages());
    } finally {
      foreach ($files as $file) {
        @unlink($root . DIRECTORY_SEPARATOR . "resources" . DIRECTORY_SEPARATOR . $file);
      }
      @rmdir($root . DIRECTORY_SEPARATOR . "resources");
      @rmdir($root);
    }
  }

}
