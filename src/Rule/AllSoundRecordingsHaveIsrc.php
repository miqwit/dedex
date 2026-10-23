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
    // Nothing to check in a PurgeReleaseMessage
    if ($this->isPurgeMessage($newReleaseMessage)) {
      return true;
    }
    /* @var $newReleaseMessage \DedexBundle\Entity\Ern382\NewReleaseMessage */
    $valid = true;
    
    foreach ($newReleaseMessage->getResourceList()->getSoundRecording() as $sr) {
      // ERN 3.x uses getSoundRecordingId(). ERN 4.3 and later store the
      // ResourceId in editions; earlier 4.x versions have getResourceId().
      if ($this->isErn3x($sr)) {
        $ids = $sr->getSoundRecordingId();
      } elseif (method_exists($sr, 'getSoundRecordingEdition')) {
        $ids = [];
        foreach ($sr->getSoundRecordingEdition() as $edition) {
          $ids = array_merge($ids, $edition->getResourceId());
        }
      } else {
        $ids = $sr->getResourceId();
      }
      if (empty($ids)) {
        return false;
      }

      foreach ($ids as $sri) {
        $isrc = $sri->getISRC();

        // ISRC is optional in SoundRecordingId (null when absent)
        if (empty(trim((string) $isrc))) {
          return false;
        }
      }
    }
    
    return true;
  }
}
