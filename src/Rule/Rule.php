<?php

/*
 * The MIT License
 *
 * Copyright 2020 Mickaël Arcos <miqwit>.
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
 * A rule is a small bit of code that will be run against the current XML file
 * to check that certain elements are there.
 *
 * @author Mickaël Arcos <@miqwit>
 */
abstract class Rule {
  
  /**
   * Will not raise an exception at the end of the parsing
   */
  const LEVEL_WARNING = "warning";
  
  /**
   * Will raise an exception at the end of the parsing
   */
  const LEVEL_ERROR = "error";
  
  /**
   * To which version this rule is applicable to
   * @var array 
   */
  protected $supported_versions = ["382", "41"];
  
  /**
   * Level of the rule.
   * It is recommended to create a rule as WARNING per default.
   * During instanciation, this rule can be overriden with ERROR.
   * 
   * @var int 
   */
  protected $level = Rule::LEVEL_WARNING;
  
  /**
   * Will display this error message when validation fails.
   * @var string 
   */
  protected $message = "";
  
  /**
   * Validates this rule agains the newReleaseMessage object.
   * This object can be of different types according to the version.
   */
  abstract protected function validates($newReleaseMessage): bool;
  
  /**
   * Pass level in the constructor to override default level
   * @param int|null $level
   */
  public function __construct(?string $level = null) {
    if ($level !== null) {
      $this->level = $level;
    }
  }
  
  /**
   * Return level of rule
   * @return int
   */
  public function getLevel(): string {
    return $this->level;
  }
  
  /**
   * 
   * @return string
   */
  public function getMessage(): string {
    return strtoupper($this->level).": ".$this->message;
  }
  
  /**
   * 
   * @return string[]
   */
  public function getSupportedVersions(): array {
    return $this->supported_versions;
  }
}
