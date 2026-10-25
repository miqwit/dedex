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

use DedexBundle\Controller\ErnParserController;

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
   * To which version this rule is applicable to. All versions supported by
   * the parser by default; a rule can override it to restrict itself.
   * @var array
   */
  protected $supported_versions = ErnParserController::SUPPORTED_VERSIONS;
  
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
   * The message as declared by the rule, before validates() adds details
   * to it. Used to reset the message when a rule object validates several
   * messages. Captured on the first reset, so that a message set in the
   * constructor of a subclass is kept.
   * @var string|null
   */
  private $base_message = null;
  
  /**
   * Problems found by the last validation
   * @var Violation[]
   */
  private $violations = [];
  
  /**
   * What the rule threw during the last check(), if it crashed
   * @var \Throwable|null
   */
  private $throwable = null;
  
  /**
   * Validates this rule agains the newReleaseMessage object.
   * This object can be of different types according to the version.
   * 
   * Rules call fail() for each problem they find, and return false when
   * they found one. Rules that only return false (without calling fail())
   * still work: check() then records their message as one violation.
   * 
   * New code should call check(), which runs this on a fresh state.
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
   * Reset the state left by a previous validation: details added to the
   * message, and violations. Rules call this at the start of validates(),
   * so that a rule object can validate several messages. check() calls it
   * too.
   */
  protected function resetMessage(): void {
    if ($this->base_message === null) {
      $this->base_message = $this->message;
    } else {
      $this->message = $this->base_message;
    }
    $this->violations = [];
    $this->throwable = null;
  }
  
  /**
   * Record one problem. Call it once per problem found, so that callers
   * get one Violation per resource, release or file.
   * 
   * @param string $message one problem, short and self-contained, without
   *   final period, like "Resource A9 is not used in any release"
   * @param string|null $subject the DDEX reference or id it is about, like "A9"
   * @param string|null $path where it is in the XML (see Violation)
   */
  protected function fail(string $message, ?string $subject = null, ?string $path = null): void {
    $this->violations[] = new Violation($this->getName(), $this->level, $message, $subject, $path);
  }
  
  /**
   * Run the rule on a fresh state and return its violations: empty when the
   * rule passes. It never throws: if the rule throws, the throwable is
   * recorded as a "Rule crashed" violation and available with getThrowable().
   * 
   * @param object $newReleaseMessage the parsed message
   * @return Violation[]
   */
  public function check($newReleaseMessage): array {
    $this->resetMessage();
    try {
      $valid = $this->validates($newReleaseMessage);
    } catch (\Throwable $throwable) {
      $this->throwable = $throwable;
      $this->fail("Rule crashed: " . get_class($throwable) . ": " . $throwable->getMessage());
      return $this->violations;
    }
    if (!$valid && count($this->violations) === 0) {
      // Rule that only returns false: its message is the violation
      $this->fail($this->message);
    }
    return $this->violations;
  }
  
  /**
   * @return Violation[] problems found by the last validation
   */
  public function getViolations(): array {
    return $this->violations;
  }
  
  /**
   * @return \Throwable|null what the rule threw during the last check()
   */
  public function getThrowable(): ?\Throwable {
    return $this->throwable;
  }
  
  /**
   * @return string short class name of the rule, like "AllResourcesUsedInReleases"
   */
  public function getName(): string {
    return (new \ReflectionClass($this))->getShortName();
  }
  
  /**
   * Return level of rule
   * @return int
   */
  public function getLevel(): string {
    return $this->level;
  }
  
  /**
   * The message of the rule with its level, like "WARNING: ...".
   * After a validation that found problems, the message of each violation
   * follows the rule message, like
   * "WARNING: All resources must be used in releases. Resource A9 is not used in any release."
   * 
   * @return string
   */
  public function getMessage(): string {
    $message = $this->message;
    $details = [];
    foreach ($this->violations as $violation) {
      if ($violation->getMessage() !== $this->message) {
        $details[] = $violation->getMessage();
      }
    }
    if (count($details) > 0) {
      if ($message === "") {
        $message = implode(". ", $details) . ".";
      } else {
        $separator = preg_match('/[.:]$/', $message) ? " " : ". ";
        $message .= $separator . implode(". ", $details) . ".";
      }
    }
    return strtoupper($this->level).": ".$message;
  }
  
  /**
   * 
   * @return string[]
   */
  public function getSupportedVersions(): array {
    return $this->supported_versions;
  }

  /**
   * Check if a DDEX object (message, release, resource...) comes from an
   * ERN 3.x entity namespace, like \DedexBundle\Entity\Ern382.
   * ERN 3.x and 4.x structures differ, so rules use this to pick the right accessors.
   *
   * @param object $ddexObject
   * @return bool
   */
  protected function isErn3x($ddexObject): bool {
    return strpos(get_class($ddexObject), 'DedexBundle\\Entity\\Ern3') === 0;
  }

  /**
   * Resources of every type in a ResourceList, ERN 3.x and 4.x alike,
   * indexed by type (the element name in the XML), like
   * ["SoundRecording" => [...], "Video" => [...], ...].
   * MIDI and UserDefinedResource only exist in ERN 3.x: a type that the
   * version doesn't have is skipped.
   *
   * @param object $resourceList
   * @return array[]
   */
  protected function getResourcesByType($resourceList): array {
    $resources = [];
    foreach (["SoundRecording", "MIDI", "Video", "Image", "Text", "SheetMusic", "Software", "UserDefinedResource"] as $type) {
      $getter = "get$type";
      if (method_exists($resourceList, $getter)) {
        $resources[$type] = $resourceList->$getter();
      }
    }
    return $resources;
  }

  /**
   * Releases of a NewReleaseMessage (not TrackReleases), each with its path
   * in the XML (see Violation). ERN 4.3 and later have a single Release, at
   * "ReleaseList/Release"; other versions have a list, at
   * "ReleaseList/Release[n]".
   *
   * @param object $newReleaseMessage
   * @return array[] list of [release object, path]
   */
  protected function getReleasesWithPath($newReleaseMessage): array {
    $releases = $newReleaseMessage->getReleaseList()->getRelease();
    if (!is_array($releases)) {
      return $releases !== null ? [[$releases, "ReleaseList/Release"]] : [];
    }
    $result = [];
    foreach (array_values($releases) as $i => $release) {
      $result[] = [$release, sprintf("ReleaseList/Release[%d]", $i + 1)];
    }
    return $result;
  }

  /**
   * Check if the parsed message is a PurgeReleaseMessage, in any version.
   * A purge message only identifies the release to remove: it has no
   * resources, releases or deals, so content rules have nothing to check
   * and must pass.
   *
   * @param object $message as given to validates()
   * @return bool
   */
  protected function isPurgeMessage($message): bool {
    $class = get_class($message);
    return substr($class, -strlen('\\PurgeReleaseMessage')) === '\\PurgeReleaseMessage';
  }
}
