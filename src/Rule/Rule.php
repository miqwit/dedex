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
   * messages.
   * @var string
   */
  private $base_message = "";
  
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
    $this->base_message = $this->message;
  }
  
  /**
   * Rules adding details to their message must call this at the start of
   * validates(), so that details from a previous validation don't remain.
   */
  protected function resetMessage(): void {
    $this->message = $this->base_message;
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
   * Check if the parsed message is a PurgeReleaseMessage, in any version.
   * A purge message only identifies the release to remove: it has no
   * resources, releases or deals, so content rules have nothing to check
   * and must pass.
   *
   * @param object $message as given to validates()
   * @return bool
   */
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

  protected function isPurgeMessage($message): bool {
    $class = get_class($message);
    return substr($class, -strlen('\\PurgeReleaseMessage')) === '\\PurgeReleaseMessage';
  }
}
