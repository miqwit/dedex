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
 * One problem found by a rule: what failed, about which element, and where
 * it is in the XML.
 *
 * The path is relative to the message root element, with no leading slash
 * ("" is the root itself). Segments are element local names, without
 * namespace prefix, separated by "/". A segment may have a 1-based position
 * among same-named siblings, like "SoundRecording[3]"; no position means [1].
 * For example: "ResourceList/SoundRecording[3]/SoundRecordingEdition/ResourceId".
 * When an element is missing, the path points at the element that should
 * contain it.
 *
 * The equivalent XPath is "/*" followed by "/*[local-name()='Segment'][n]"
 * for each segment.
 *
 * @author Mickaël Arcos <@miqwit>
 */
final class Violation {

  /**
   * Short class name of the rule, like "AllResourcesUsedInReleases"
   * @var string
   */
  private $rule;

  /**
   * Rule::LEVEL_WARNING or Rule::LEVEL_ERROR
   * @var string
   */
  private $level;

  /**
   * One problem, like "Resource A9 is not used in any release"
   * @var string
   */
  private $message;

  /**
   * The DDEX reference or id the problem is about, like "A9", "R3" or a file URI
   * @var string|null
   */
  private $subject;

  /**
   * Where the problem is in the XML (see the class description)
   * @var string|null
   */
  private $path;

  public function __construct(string $rule, string $level, string $message, ?string $subject = null, ?string $path = null) {
    $this->rule = $rule;
    $this->level = $level;
    $this->message = $message;
    $this->subject = $subject;
    $this->path = $path;
  }

  public function getRule(): string {
    return $this->rule;
  }

  public function getLevel(): string {
    return $this->level;
  }

  public function getMessage(): string {
    return $this->message;
  }

  public function getSubject(): ?string {
    return $this->subject;
  }

  public function getPath(): ?string {
    return $this->path;
  }

  public function __toString(): string {
    return strtoupper($this->level) . ": " . $this->message;
  }
}
