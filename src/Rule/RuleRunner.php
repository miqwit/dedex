<?php

/*
 * The MIT License
 *
 * Copyright 2026 Mickaël Arcos <miqwit>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace DedexBundle\Rule;

/**
 * Runs rules on a parsed message and returns one RuleResult per rule.
 *
 * The parser uses it at the end of parse(). Callers that already have a
 * parsed message (from a cache, for example) can use it directly:
 *
 *     $results = RuleRunner::run(RuleSet::MUSICAL_ALBUM($root), $ern, $version);
 *
 * It never throws: a rule that throws gives a FAILED result with a
 * "Rule crashed" violation, and the other rules still run.
 *
 * @author Mickaël Arcos <@miqwit>
 */
final class RuleRunner {

  /**
   * @param Rule[] $rules
   * @param object $ern the parsed message (NewReleaseMessage or PurgeReleaseMessage)
   * @param string $version ERN version of the message, like "432"
   * @return RuleResult[] one per rule, in the same order
   */
  public static function run(array $rules, $ern, string $version): array {
    $results = [];
    foreach ($rules as $rule) {
      $results[] = self::runOne($rule, $ern, $version);
    }
    return $results;
  }

  /**
   * @param Rule $rule
   * @param object $ern
   * @param string $version
   * @return RuleResult
   */
  public static function runOne(Rule $rule, $ern, string $version): RuleResult {
    if (!in_array($version, $rule->getSupportedVersions())) {
      return new RuleResult($rule, RuleResult::SKIPPED);
    }

    // check() never throws: a crash is recorded as a violation
    $violations = $rule->check($ern);
    $status = count($violations) > 0 ? RuleResult::FAILED : RuleResult::PASSED;
    return new RuleResult($rule, $status, $violations, $rule->getThrowable());
  }
}
