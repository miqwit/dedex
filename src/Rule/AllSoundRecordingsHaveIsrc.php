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
 * Check ISRC here are SoundRecording level only. ISRC could also be 
 * described at Release level
 * 
 * In ERN 4.3 and later, a SoundRecording can have several editions, each
 * with its own ResourceId. Every ResourceId of every edition must have an
 * ISRC, as an edition without one can't be identified.
 * 
 * @author Mickaël Arcos <@miqwit>
 */
class AllSoundRecordingsHaveIsrc extends Rule {
  protected $message = "All tracks (SoundRecording) must have an ISRC.";
  
  public function validates($newReleaseMessage): bool {
    $this->resetMessage();
    // Nothing to check in a PurgeReleaseMessage
    if ($this->isPurgeMessage($newReleaseMessage)) {
      return true;
    }
    
    foreach (array_values($newReleaseMessage->getResourceList()->getSoundRecording()) as $i => $sr) {
      $srPath = sprintf("ResourceList/SoundRecording[%d]", $i + 1);
      
      // Identifiers of the recording, each with its path [id, path].
      // ERN 3.x uses getSoundRecordingId(). ERN 4.3 and later store the
      // ResourceId in editions; earlier 4.x versions have getResourceId().
      $ids = [];
      $containerPath = $srPath;  // where an ISRC should be when there is no id
      if ($this->isErn3x($sr)) {
        foreach (array_values($sr->getSoundRecordingId()) as $j => $id) {
          $ids[] = [$id, sprintf("%s/SoundRecordingId[%d]", $srPath, $j + 1)];
        }
      } elseif (method_exists($sr, 'getSoundRecordingEdition')) {
        foreach (array_values($sr->getSoundRecordingEdition()) as $k => $edition) {
          $editionPath = sprintf("%s/SoundRecordingEdition[%d]", $srPath, $k + 1);
          if ($k === 0) {
            $containerPath = $editionPath;
          }
          foreach (array_values($edition->getResourceId()) as $j => $id) {
            $ids[] = [$id, sprintf("%s/ResourceId[%d]", $editionPath, $j + 1)];
          }
        }
      } else {
        foreach (array_values($sr->getResourceId()) as $j => $id) {
          $ids[] = [$id, sprintf("%s/ResourceId[%d]", $srPath, $j + 1)];
        }
      }
      
      // Path of the first identifier without ISRC, or of the element that
      // should contain one
      $missingPath = count($ids) === 0 ? $containerPath : null;
      foreach ($ids as list($id, $idPath)) {
        // ISRC is optional in SoundRecordingId (null when absent)
        if ($missingPath === null && empty(trim((string) $id->getISRC()))) {
          $missingPath = $idPath;
        }
      }
      
      if ($missingPath !== null) {
        $reference = (string) $sr->getResourceReference();
        $this->fail("SoundRecording $reference has no ISRC", $reference, $missingPath);
      }
    }
    
    return count($this->getViolations()) === 0;
  }
}
