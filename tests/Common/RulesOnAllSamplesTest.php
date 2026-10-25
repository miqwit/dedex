<?php

namespace DedexBundle\Tests\Common;

use DedexBundle\Controller\ErnParserController;
use DedexBundle\Rule\Rule;
use DedexBundle\Rule\RuleSet;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

/**
 * Safety net for the rules: every rule of src/Rule runs on every sample of
 * every supported version. Rules have different code paths per version, and
 * a path that is never run is a path that crashes in production (see #57).
 *
 * Nothing is listed by hand: adding a rule, a sample or a version adds it
 * to these tests.
 */
class RulesOnAllSamplesTest extends TestCase {

  public static function sampleProvider(): array {
    $data = [];
    foreach (Samples::all() as $sample) {
      $data[$sample] = [$sample];
    }
    return $data;
  }

  /**
   * No rule may throw on a parsed message, whatever its version or type
   * (NewReleaseMessage or PurgeReleaseMessage). A rule must return a bool,
   * and give the same message when it validates the same message twice.
   */
  #[DataProvider('sampleProvider')]
  public function testNoRuleCrashes(string $sample) {
    $parser = new ErnParserController();
    if (in_array($sample, Samples::UNPARSEABLE)) {
      $this->expectException(\Exception::class);
      $parser->parse($sample);
      return;
    }
    $ern = $parser->parse($sample);

    foreach (Samples::ruleClasses() as $class) {
      $rule = Samples::newRule($class, dirname($sample));
      $context = Samples::shortName($class) . " on $sample";
      try {
        $first = $rule->validates($ern);
        $first_message = $rule->getMessage();
        $second = $rule->validates($ern);
      } catch (\Throwable $e) {
        $this->fail("$context throws " . get_class($e) . ": " . $e->getMessage()
                . "\n" . $e->getFile() . ":" . $e->getLine());
      }
      $this->assertIsBool($first, $context);
      $this->assertSame($first, $second, $context);
      $this->assertSame($first_message, $rule->getMessage(), "$context: message must not grow when the rule is reused");
    }
  }

  /**
   * The whole MUSICAL_ALBUM rule set goes through parse() without error
   * on every sample: rules are warnings by default.
   */
  #[DataProvider('sampleProvider')]
  public function testRuleSetThroughParser(string $sample) {
    if (in_array($sample, Samples::UNPARSEABLE)) {
      $this->markTestSkipped("Not meant to be parsed");
    }
    $parser = new ErnParserController();
    $parser->addRuleSet(RuleSet::MUSICAL_ALBUM(dirname($sample)));
    $parser->parse($sample);
    $this->assertStringNotContainsString("ERROR", $parser->getRuleMessages());
  }

  /**
   * Rules can only be tested on a version that has samples. Every version
   * the parser supports must have at least one parseable sample.
   */
  public function testEverySupportedVersionHasSamples() {
    $versions = array_unique(array_values(Samples::parseableWithVersion()));
    foreach (ErnParserController::SUPPORTED_VERSIONS as $version) {
      $this->assertContains($version, $versions, "No parseable sample for ERN $version in tests/Ern$version/samples");
    }
  }

  /**
   * Samples are discovered by folder, and rules by file: make sure both
   * discoveries find something, so that the tests above can't pass empty.
   */
  public function testDiscovery() {
    $this->assertGreaterThan(40, count(Samples::all()));
    $this->assertContains(\DedexBundle\Rule\AllResourceFileExist::class, Samples::ruleClasses());
    $this->assertNotContains(Rule::class, Samples::ruleClasses());
    // Every rule of the rule set is discovered
    foreach (RuleSet::MUSICAL_ALBUM() as $rule) {
      $this->assertContains(get_class($rule), Samples::ruleClasses());
    }
  }
}
