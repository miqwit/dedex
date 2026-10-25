<?php

namespace DedexBundle\Tests\Ern432;

use DedexBundle\Controller\ErnParserController;
use DedexBundle\Exception\RuleValidationException;
use DedexBundle\Rule\AllReleasesUsedInDeals;
use DedexBundle\Rule\AllResourceFileExist;
use DedexBundle\Rule\AllResourcesUsedInReleases;
use DedexBundle\Rule\AllSoundRecordingsHaveIsrc;
use DedexBundle\Rule\Rule;
use DedexBundle\Rule\RuleSet;
use PHPUnit\Framework\TestCase;

/**
 * Rules on ERN 4.3.2. Each test below is a regression test for #57; the
 * results of every rule on every 4.x sample are in
 * Common\RulesOnErn4xSamplesTest.
 */
class RulesTest extends TestCase {

  /**
   * @param Rule $rule
   * @param string $file sample file name in tests/Ern432/samples
   * @return string rule messages
   */
  private function parseWithRule(Rule $rule, string $file): string {
    $parser = new ErnParserController();
    $parser->addRule($rule);
    $parser->parse("tests/Ern432/samples/$file");
    return $parser->getRuleMessages();
  }

  /**
   * The whole MUSICAL_ALBUM rule set gives a result on a 4.3.2 album. Only
   * AllResourceFileExist warns, since the audio files are not shipped with
   * the sample.
   */
  public function testRuleSet() {
    $parser = new ErnParserController();
    $parser->addRuleSet(RuleSet::MUSICAL_ALBUM("tests/Ern432/samples"));
    $parser->parse("tests/Ern432/samples/ern432_brand_id.xml");

    $this->assertEquals(
            "\n- WARNING: Missing files described in the resource: File track_001.wav is missing. File track_002.wav is missing. File test_cover.jpg is missing.",
            $parser->getRuleMessages());
  }

  /**
   * ISRC is in SoundRecordingEdition/ResourceId since 4.3; 4.3.2 used to
   * fall back to getResourceId(), which doesn't exist any more
   */
  public function testIsrcInEditions() {
    $this->assertEquals("", $this->parseWithRule(new AllSoundRecordingsHaveIsrc(Rule::LEVEL_ERROR), "ern432_brand_id.xml"));
  }

  /**
   * Every edition of a SoundRecording must have an ISRC, not only the first
   */
  public function testIsrcMissingInSecondEdition() {
    $this->expectException(RuleValidationException::class);
    $this->expectExceptionMessage("All tracks (SoundRecording) must have an ISRC.");
    $this->parseWithRule(new AllSoundRecordingsHaveIsrc(Rule::LEVEL_ERROR), "ern432_edition_without_isrc.xml");
  }

  /**
   * The release-level cover is collected before the tracks of a sub-group:
   * the order must not matter
   */
  public function testResourcesUsedWhateverTheOrder() {
    $this->assertEquals("", $this->parseWithRule(new AllResourcesUsedInReleases(Rule::LEVEL_ERROR), "ern432_cover_linked_first.xml"));
  }

  /**
   * A per-track image linked from a ResourceGroupContentItem, and a booklet
   * (Text) linked from the group, are used
   */
  public function testResourcesLinkedFromContentItemsAreUsed() {
    $this->assertEquals("", $this->parseWithRule(new AllResourcesUsedInReleases(Rule::LEVEL_ERROR), "ern432_linked_in_content_item.xml"));
  }

  /**
   * Every resource type is checked, not only SoundRecordings and Images
   */
  public function testUnusedTextIsReported() {
    $this->assertEquals(
            "\n- WARNING: All resources must be used in releases. Resource A5 is not used in any release.",
            $this->parseWithRule(new AllResourcesUsedInReleases(), "ern432_unused_text.xml"));
  }

  /**
   * DealList is optional: without it, no release is used in a deal
   */
  public function testNoDealList() {
    $this->assertEquals(
            "\n- WARNING: All releases must be used in deals. Release R0 is not used in any deal. Release R1 is not used in any deal. Release R2 is not used in any deal.",
            $this->parseWithRule(new AllReleasesUsedInDeals(), "ern432_no_deal_list.xml"));
  }

  /**
   * A purge message has nothing to check: all rules pass
   */
  public function testPurgeMessage() {
    $parser = new ErnParserController();
    $parser->addRuleSet(RuleSet::MUSICAL_ALBUM("tests/Ern432/samples"));
    $parser->parse("tests/Ern432/samples/ern432_purge.xml");
    $this->assertEquals("", $parser->getRuleMessages());
  }

  /**
   * Files are checked from their URI: in a sub-folder of the root folder,
   * and not checked when the URI is remote (https://)
   */
  public function testFileUris() {
    $root = sys_get_temp_dir() . DIRECTORY_SEPARATOR . "dedex_432_" . uniqid();
    mkdir($root . DIRECTORY_SEPARATOR . "images", 0777, true);
    touch($root . DIRECTORY_SEPARATOR . "track_001.wav");
    try {
      // images/test_cover.jpg is missing; track_002.wav is remote
      $this->assertEquals(
              "\n- WARNING: Missing files described in the resource: File images/test_cover.jpg is missing.",
              $this->parseWithRule(new AllResourceFileExist(null, $root), "ern432_file_uris.xml"));

      touch($root . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR . "test_cover.jpg");
      $this->assertEquals("", $this->parseWithRule(new AllResourceFileExist(Rule::LEVEL_ERROR, $root), "ern432_file_uris.xml"));
    } finally {
      @unlink($root . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR . "test_cover.jpg");
      @unlink($root . DIRECTORY_SEPARATOR . "track_001.wav");
      @rmdir($root . DIRECTORY_SEPARATOR . "images");
      @rmdir($root);
    }
  }

  /**
   * A rule object can validate several messages: details of a previous
   * validation are not kept in the message
   */
  public function testRuleReusedOnSeveralMessages() {
    $rule = new AllReleasesUsedInDeals();
    $expected = "\n- WARNING: All releases must be used in deals. Release R0 is not used in any deal. Release R1 is not used in any deal. Release R2 is not used in any deal.";
    $this->assertEquals($expected, $this->parseWithRule($rule, "ern432_no_deal_list.xml"));
    $this->assertEquals($expected, $this->parseWithRule($rule, "ern432_no_deal_list.xml"));
  }
}
