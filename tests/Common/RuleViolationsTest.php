<?php

namespace DedexBundle\Tests\Common;

use DedexBundle\Controller\ErnParserController;
use DedexBundle\Exception\RuleValidationException;
use DedexBundle\Rule\AllReleasesUsedInDeals;
use DedexBundle\Rule\AllResourceFileExist;
use DedexBundle\Rule\AllResourcesUsedInReleases;
use DedexBundle\Rule\AllSoundRecordingsHaveIsrc;
use DedexBundle\Rule\AtLeastOneImage;
use DedexBundle\Rule\OnlyOneMainRelease;
use DedexBundle\Rule\Rule;
use DedexBundle\Rule\RuleResult;
use DedexBundle\Rule\RuleRunner;
use DedexBundle\Rule\Violation;
use PHPUnit\Framework\TestCase;

/**
 * Structured rule results (#58): one Violation per problem with its subject
 * and path, a RuleResult per rule, and a non-throwing parse mode.
 *
 * The violations of every rule on every 4.x sample are in
 * RulesOnErn4xSamplesTest, and RulesOnAllSamplesTest checks that every
 * violation path resolves to one element.
 */
class RuleViolationsTest extends TestCase {

  /**
   * @param Rule $rule
   * @param string $sample
   * @return Violation[]
   */
  private function check(Rule $rule, string $sample): array {
    $parser = new ErnParserController();
    return $rule->check($parser->parse($sample));
  }

  /**
   * @param Violation[] $violations
   * @return string[] "subject @ path: message" for each violation
   */
  private function describe(array $violations): array {
    return array_map(function (Violation $v) {
      return trim($v->getSubject() . " @ " . $v->getPath()) . ": " . $v->getMessage();
    }, $violations);
  }

  public function testViolation() {
    $violation = new Violation("AllResourcesUsedInReleases", Rule::LEVEL_ERROR,
            "Resource A9 is not used in any release", "A9", "ResourceList/Image[2]");
    $this->assertSame("AllResourcesUsedInReleases", $violation->getRule());
    $this->assertSame(Rule::LEVEL_ERROR, $violation->getLevel());
    $this->assertSame("Resource A9 is not used in any release", $violation->getMessage());
    $this->assertSame("A9", $violation->getSubject());
    $this->assertSame("ResourceList/Image[2]", $violation->getPath());
    $this->assertSame("ERROR: Resource A9 is not used in any release", (string) $violation);

    $violation = new Violation("AtLeastOneImage", Rule::LEVEL_WARNING, "Must have at least one Image");
    $this->assertNull($violation->getSubject());
    $this->assertNull($violation->getPath());
  }

  /**
   * One violation per unused resource, at the resource
   */
  public function testUnusedResources() {
    $expected = [];
    foreach (range(2, 9) as $n) {
      $expected[] = "A$n @ ResourceList/SoundRecording[$n]: Resource A$n is not used in any release";
    }
    $this->assertSame($expected, $this->describe($this->check(new AllResourcesUsedInReleases(), "tests/Ern43/samples/ern43_dj_mix.xml")));
  }

  /**
   * A reference to a resource that is not declared is reported at the
   * referring element
   */
  public function testUndeclaredResource() {
    $this->assertSame(
            ["A7 @ ReleaseList/Release[1]/ReleaseResourceReferenceList/ReleaseResourceReference[7]: Resource A7 is used in a release but not defined in the ResourceList"],
            $this->describe($this->check(new AllResourcesUsedInReleases(), "tests/Ern382/samples/zero_image.xml")));
  }

  public function testDealWithUnknownRelease() {
    $this->assertSame(
            ["R9 @ DealList/ReleaseDeal[2]/DealReleaseReference[3]: Release R9 is used in a deal but not defined in the ReleaseList"],
            $this->describe($this->check(new AllReleasesUsedInDeals(), "tests/Ern432/samples/ern432_deal_unknown_release.xml")));
  }

  public function testReleasesWithoutDeal() {
    $this->assertSame([
      "R0 @ ReleaseList/Release: Release R0 is not used in any deal",
      "R1 @ ReleaseList/TrackRelease[1]: Release R1 is not used in any deal",
      "R2 @ ReleaseList/TrackRelease[2]: Release R2 is not used in any deal",
    ], $this->describe($this->check(new AllReleasesUsedInDeals(), "tests/Ern432/samples/ern432_no_deal_list.xml")));
  }

  /**
   * The path points to the first identifier without ISRC: here the
   * ResourceId of the second edition
   */
  public function testIsrcMissing() {
    $this->assertSame(
            ["A1 @ ResourceList/SoundRecording[1]/SoundRecordingEdition[2]/ResourceId[1]: SoundRecording A1 has no ISRC"],
            $this->describe($this->check(new AllSoundRecordingsHaveIsrc(), "tests/Ern432/samples/ern432_edition_without_isrc.xml")));
    $this->assertSame(
            ["A2 @ ResourceList/SoundRecording[2]/SoundRecordingId[1]: SoundRecording A2 has no ISRC"],
            $this->describe($this->check(new AllSoundRecordingsHaveIsrc(), "tests/Ern381/samples/ern381_missing_isrc.xml")));
  }

  public function testMainReleases() {
    $this->assertSame([
      "R1 @ ReleaseList/Release[2]: Release R1 is also marked as main release",
      "R2 @ ReleaseList/Release[3]: Release R2 is also marked as main release",
    ], $this->describe($this->check(new OnlyOneMainRelease(), "tests/Ern381/samples/ern381_three_main_releases.xml")));
    $this->assertSame(
            ["@ ReleaseList: No release is marked as main release"],
            $this->describe($this->check(new OnlyOneMainRelease(), "tests/Ern382/samples/no_main_release.xml")));
  }

  /**
   * A rule with a single check gives one violation, with the rule message,
   * and its message is not repeated in getMessage()
   */
  public function testSingleCheckRule() {
    $rule = new AtLeastOneImage();
    $this->assertSame(["@ ResourceList: Must have at least one Image"],
            $this->describe($this->check($rule, "tests/Ern382/samples/zero_image.xml")));
    $this->assertSame("WARNING: Must have at least one Image", $rule->getMessage());
  }

  /**
   * ERN 3.x files: the subject is FilePath/FileName (FileName when there is
   * no FilePath), the path points to FileName
   */
  public function testMissingFile3x() {
    $sample = "tests/Ern382/samples/with_assets/missing_audio/001_audioalbum_complete.xml";
    $this->assertSame(
            ["A1UCASE0000000401X_01_04.wav @ ResourceList/SoundRecording[4]/SoundRecordingDetailsByTerritory[1]/TechnicalSoundRecordingDetails[1]/File[1]/FileName: File A1UCASE0000000401X_01_04.wav is missing"],
            $this->describe($this->check(new AllResourceFileExist(null, dirname($sample)), $sample)));
  }

  /**
   * The rule message is followed by each violation
   */
  public function testGetMessageListsViolations() {
    $rule = new AllReleasesUsedInDeals(Rule::LEVEL_ERROR);
    $this->check($rule, "tests/Ern432/samples/ern432_no_deal_list.xml");
    $this->assertSame("ERROR: All releases must be used in deals. Release R0 is not used in any deal. "
            . "Release R1 is not used in any deal. Release R2 is not used in any deal.", $rule->getMessage());
  }

  /**
   * A rule object run on a second message keeps nothing from the first
   */
  public function testReuse() {
    $rule = new AllReleasesUsedInDeals();
    $this->assertCount(3, $this->check($rule, "tests/Ern432/samples/ern432_no_deal_list.xml"));
    $this->assertSame([], $this->check($rule, "tests/Ern432/samples/ern432_brand_id.xml"));
    $this->assertSame([], $rule->getViolations());
    $this->assertSame("WARNING: All releases must be used in deals.", $rule->getMessage());
  }

  /**
   * A purge message has nothing to check: every rule passes
   */
  public function testPurgeMessage() {
    $this->assertSame([], $this->check(new AllResourcesUsedInReleases(), "tests/Ern432/samples/ern432_purge.xml"));
    $this->assertSame([], $this->check(new AtLeastOneImage(), "tests/Ern432/samples/ern432_purge.xml"));
  }

  /**
   * getRuleResults() gives one result per rule, in order: passed, failed,
   * skipped, and crashed rules (failed with their throwable). A crash does
   * not stop the other rules.
   */
  public function testRuleResults() {
    $parser = new ErnParserController();
    $parser->addRule(new AtLeastOneImage());
    $parser->addRule(new AllResourcesUsedInReleases());
    $parser->addRule(new Only382Rule());
    $parser->addRule(new CrashingRule());
    $parser->addRule(new AllReleasesUsedInDeals());
    $parser->parse("tests/Ern432/samples/ern432_unused_text.xml");

    $results = $parser->getRuleResults();
    $this->assertSame([RuleResult::PASSED, RuleResult::FAILED, RuleResult::SKIPPED, RuleResult::FAILED, RuleResult::PASSED],
            array_map(function (RuleResult $r) { return $r->getStatus(); }, $results));

    $this->assertTrue($results[0]->isPassed());
    $this->assertSame([], $results[0]->getViolations());
    $this->assertInstanceOf(AtLeastOneImage::class, $results[0]->getRule());

    $this->assertTrue($results[1]->isFailed());
    $this->assertSame(["A5 @ ResourceList/Text[1]: Resource A5 is not used in any release"], $this->describe($results[1]->getViolations()));
    $this->assertSame("WARNING: All resources must be used in releases. Resource A5 is not used in any release.", $results[1]->getMessage());
    $this->assertNull($results[1]->getThrowable());

    $this->assertTrue($results[2]->isSkipped());
    $this->assertSame([], $results[2]->getViolations());

    $this->assertTrue($results[3]->isFailed());
    $this->assertInstanceOf(\LogicException::class, $results[3]->getThrowable());
    $this->assertCount(1, $results[3]->getViolations());
    $this->assertSame("Rule crashed: LogicException: Something went wrong", $results[3]->getViolations()[0]->getMessage());
    $this->assertSame("CrashingRule", $results[3]->getViolations()[0]->getRule());

    // The crash and the failure are in the messages, as warnings
    $this->assertSame("\n- WARNING: All resources must be used in releases. Resource A5 is not used in any release."
            . "\n- WARNING: Crashing rule. Rule crashed: LogicException: Something went wrong.", $parser->getRuleMessages());
  }

  /**
   * By default an ERROR rule that fails makes parse() throw, as before.
   * Results are still available after the exception.
   */
  public function testErrorThrowsByDefault() {
    $parser = new ErnParserController();
    $parser->addRule(new AllResourcesUsedInReleases(Rule::LEVEL_ERROR));
    try {
      $parser->parse("tests/Ern432/samples/ern432_unused_text.xml");
      $this->fail("RuleValidationException expected");
    } catch (RuleValidationException $ex) {
      $this->assertSame("Some rules with level ERROR did not pass.\n"
              . "\n- ERROR: All resources must be used in releases. Resource A5 is not used in any release.", $ex->getMessage());
    }
    $this->assertTrue($parser->getRuleResults()[0]->isFailed());
    $this->assertSame(Rule::LEVEL_ERROR, $parser->getRuleResults()[0]->getViolations()[0]->getLevel());
  }

  /**
   * With setThrowOnRuleError(false), parse() returns the message
   */
  public function testNonThrowingMode() {
    $parser = new ErnParserController();
    $parser->setThrowOnRuleError(false);
    $parser->addRule(new AllResourcesUsedInReleases(Rule::LEVEL_ERROR));
    $ern = $parser->parse("tests/Ern432/samples/ern432_unused_text.xml");

    $this->assertInstanceOf(\DedexBundle\Entity\Ern432\NewReleaseMessage::class, $ern);
    $this->assertTrue($parser->getRuleResults()[0]->isFailed());
    $this->assertSame("\n- ERROR: All resources must be used in releases. Resource A5 is not used in any release.", $parser->getRuleMessages());
  }

  /**
   * Results and messages are those of the last parse
   */
  public function testParserReuse() {
    $parser = new ErnParserController();
    $parser->addRule(new AllResourcesUsedInReleases());
    $parser->parse("tests/Ern432/samples/ern432_unused_text.xml");
    $this->assertNotSame("", $parser->getRuleMessages());

    $parser->parse("tests/Ern432/samples/ern432_brand_id.xml");
    $this->assertSame("", $parser->getRuleMessages());
    $this->assertTrue($parser->getRuleResults()[0]->isPassed());
  }

  /**
   * Rules can run on an already parsed message
   */
  public function testRuleRunner() {
    $parser = new ErnParserController();
    $ern = $parser->parse("tests/Ern432/samples/ern432_unused_text.xml");

    $results = RuleRunner::run([new AtLeastOneImage(), new AllResourcesUsedInReleases(), new Only382Rule()], $ern, $parser->getVersion());
    $this->assertCount(3, $results);
    $this->assertTrue($results[0]->isPassed());
    $this->assertTrue($results[1]->isFailed());
    $this->assertTrue($results[2]->isSkipped());
  }

  /**
   * A rule written before violations existed (returns false and builds its
   * message) works as before: same messages, same exception. Its message is
   * reset between runs, and a message set in its constructor is kept.
   */
  public function testLegacyRule() {
    $parser = new ErnParserController();
    $parser->addRule(new LegacyRule());
    $parser->parse("tests/Ern432/samples/ern432_brand_id.xml");
    $this->assertSame("\n- WARNING: Legacy rule failed: R0", $parser->getRuleMessages());

    $result = $parser->getRuleResults()[0];
    $this->assertTrue($result->isFailed());
    $this->assertCount(1, $result->getViolations());
    $this->assertSame("Legacy rule failed: R0", $result->getViolations()[0]->getMessage());
    $this->assertNull($result->getViolations()[0]->getSubject());
    $this->assertNull($result->getViolations()[0]->getPath());

    // Same rule object, second parse: the message does not grow
    $parser->parse("tests/Ern432/samples/ern432_brand_id.xml");
    $this->assertSame("\n- WARNING: Legacy rule failed: R0", $parser->getRuleMessages());

    // ERROR level still throws, with the same text
    $parser = new ErnParserController();
    $parser->addRule(new LegacyRule(Rule::LEVEL_ERROR));
    $this->expectException(RuleValidationException::class);
    $this->expectExceptionMessage("- ERROR: Legacy rule failed: R0");
    $parser->parse("tests/Ern432/samples/ern432_brand_id.xml");
  }

  public function testLegacyRuleMessageSetInConstructor() {
    $rule = new LegacyRule(null, "Custom text");
    $rule->check((new ErnParserController())->parse("tests/Ern432/samples/ern432_brand_id.xml"));
    $this->assertSame("WARNING: Custom text: R0", $rule->getMessage());
  }
}

/**
 * Applies to ERN 3.8.2 only
 */
class Only382Rule extends Rule {
  protected $supported_versions = ["382"];
  protected $message = "Only for 3.8.2";

  public function validates($newReleaseMessage): bool {
    return false;
  }
}

/**
 * Throws while validating
 */
class CrashingRule extends Rule {
  protected $message = "Crashing rule";

  public function validates($newReleaseMessage): bool {
    throw new \LogicException("Something went wrong");
  }
}

/**
 * Written the old way: appends details to its message and returns false,
 * without calling fail() or resetMessage()
 */
class LegacyRule extends Rule {
  protected $message = "Legacy rule failed";

  public function __construct(?string $level = null, ?string $message = null) {
    parent::__construct($level);
    if ($message !== null) {
      $this->message = $message;
    }
  }

  public function validates($newReleaseMessage): bool {
    $this->message .= ": " . $newReleaseMessage->getReleaseList()->getRelease()->getReleaseReference();
    return false;
  }
}
