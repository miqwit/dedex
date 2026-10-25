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
 * All the releases described must be covered by a deal. Otherwise, it is 
 * suspicious and probably an unexpected thing.
 * 
 * Also checks that all releases used in deals are described in releases.
 *
 * @author Mickaël Arcos <@miqwit>
 */
class AllReleasesUsedInDeals extends Rule {
  protected $message = "All releases must be used in deals.";
  
  public function validates($newReleaseMessage): bool {
    $this->resetMessage();
    // Nothing to check in a PurgeReleaseMessage
    if ($this->isPurgeMessage($newReleaseMessage)) {
      return true;
    }

    // First get all release references, with the path of their release
    $references = [];  // reference => path
    foreach ($this->getReleasesWithPath($newReleaseMessage) as list($release, $path)) {
      // ERN 4.3 returns single string; other versions return array
      $refs = $release->getReleaseReference();
      if (!is_array($refs)) {
        $refs = $refs !== null ? [$refs] : [];
      }
      foreach ($refs as $ref) {
        if (!isset($references[(string) $ref])) {
          $references[(string) $ref] = $path;
        }
      }
    }
    // Include track releases (ERN 4.x — all 4.x versions have getTrackRelease, 3.x does not)
    $releaseList = $newReleaseMessage->getReleaseList();
    if (!$this->isErn3x($releaseList)) {
      foreach (array_values($releaseList->getTrackRelease()) as $i => $tr) {
        $refs = $tr->getReleaseReference();
        if (!is_array($refs)) {
          $refs = $refs !== null ? [$refs] : [];
        }
        foreach ($refs as $ref) {
          if (!isset($references[(string) $ref])) {
            $references[(string) $ref] = sprintf("ReleaseList/TrackRelease[%d]", $i + 1);
          }
        }
      }
    }
    
    // Second, browse all deals to check all references are used at least once.
    // ERN 4.1 and 4.1.1 return DealList as an array of ReleaseDeal; other
    // versions return a DealList object. DealList is optional: without it,
    // no release is used in a deal.
    $dealList = $newReleaseMessage->getDealList();
    if ($dealList === null) {
      $releaseDeals = [];
    } else {
      $releaseDeals = is_array($dealList) ? $dealList : $dealList->getReleaseDeal();
    }
    $references_used = [];
    foreach (array_values($releaseDeals) as $n => $rd) {
      foreach (array_values($rd->getDealReleaseReference()) as $m => $drr) {
        $ref = (string) $drr;
        if (!isset($references[$ref])) {
          $this->fail("Release $ref is used in a deal but not defined in the ReleaseList", $ref,
                  sprintf("DealList/ReleaseDeal[%d]/DealReleaseReference[%d]", $n + 1, $m + 1));
        }
        $references_used[$ref] = true;
      }
    }

    // All references must be used, whatever the order in which deals list them
    foreach ($references as $ref => $path) {
      if (!isset($references_used[$ref])) {
        $this->fail("Release $ref is not used in any deal", (string) $ref, $path);
      }
    }
    
    return count($this->getViolations()) === 0;
  }
}
