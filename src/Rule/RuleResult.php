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
 * Result of one rule on one message: passed, failed (with its violations)
 * or skipped (the rule does not apply to this ERN version).
 *
 * @author Mickaël Arcos <@miqwit>
 */
final class RuleResult {

  const PASSED = "passed";
  const FAILED = "failed";
  const SKIPPED = "skipped";

  /**
   * @var Rule
   */
  private $rule;

  /**
   * One of PASSED, FAILED, SKIPPED
   * @var string
   */
  private $status;

  /**
   * @var Violation[]
   */
  private $violations;

  /**
   * Set when the rule threw while validating
   * @var \Throwable|null
   */
  private $throwable;

  /**
   * Message of the rule after this run, as returned by Rule::getMessage()
   * @var string
   */
  private $message;

  /**
   * @param Rule $rule
   * @param string $status one of PASSED, FAILED, SKIPPED
   * @param Violation[] $violations
   * @param \Throwable|null $throwable
   */
  public function __construct(Rule $rule, string $status, array $violations = [], ?\Throwable $throwable = null) {
    $this->rule = $rule;
    $this->status = $status;
    $this->violations = $violations;
    $this->throwable = $throwable;
    $this->message = $rule->getMessage();
  }

  public function getRule(): Rule {
    return $this->rule;
  }

  /**
   * @return string one of PASSED, FAILED, SKIPPED
   */
  public function getStatus(): string {
    return $this->status;
  }

  public function isPassed(): bool {
    return $this->status === self::PASSED;
  }

  public function isFailed(): bool {
    return $this->status === self::FAILED;
  }

  public function isSkipped(): bool {
    return $this->status === self::SKIPPED;
  }

  /**
   * @return Violation[] empty unless the rule failed
   */
  public function getViolations(): array {
    return $this->violations;
  }

  /**
   * @return \Throwable|null what the rule threw, if it crashed
   */
  public function getThrowable(): ?\Throwable {
    return $this->throwable;
  }

  /**
   * The message of the rule for this run, with its level, like
   * "WARNING: All resources must be used in releases. Resource A9 is not used in any release."
   * A rule object can be run again on another message: this one does not change.
   *
   * @return string
   */
  public function getMessage(): string {
    return $this->message;
  }
}
