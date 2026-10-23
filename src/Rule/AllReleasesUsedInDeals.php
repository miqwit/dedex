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
    // Nothing to check in a PurgeReleaseMessage
    if ($this->isPurgeMessage($newReleaseMessage)) {
      return true;
    }
    $this->resetMessage();
    $references = [];
    $references_used = [];
    $valid = true;

    // First get all release references
    // ERN 4.3 returns single Release object; other versions return array
    $releases = $newReleaseMessage->getReleaseList()->getRelease();
    if (!is_array($releases)) {
      $releases = $releases !== null ? [$releases] : [];
    }
    foreach ($releases as $r) {
      // ERN 4.3 returns single string; other versions return array
      $refs = $r->getReleaseReference();
      if (!is_array($refs)) {
        $refs = $refs !== null ? [$refs] : [];
      }
      foreach ($refs as $rr) {
        $references[] = $rr;
      }
    }
    // Include track releases (ERN 4.x — all 4.x versions have getTrackRelease, 3.x does not)
    $releaseList = $newReleaseMessage->getReleaseList();
    if (!$this->isErn3x($releaseList)) {
      foreach ($releaseList->getTrackRelease() as $tr) {
        $ref = $tr->getReleaseReference();
        if (!is_array($ref)) {
          $ref = $ref !== null ? [$ref] : [];
        }
        foreach ($ref as $rr) {
          $references[] = $rr;
        }
      }
    }
    
    // Second, browse all releases to check all references are used at least once.
    // ERN 4.1 and 4.1.1 return DealList as an array of ReleaseDeal; other
    // versions return a DealList object. DealList is optional: without it,
    // no release is used in a deal.
    $dealList = $newReleaseMessage->getDealList();
    if ($dealList === null) {
      $releaseDeals = [];
    } else {
      $releaseDeals = is_array($dealList) ? $dealList : $dealList->getReleaseDeal();
    }
    foreach ($releaseDeals as $rd) {
      foreach ($rd->getDealReleaseReference() as $drr) {
        $val = $drr;
        
        if (!in_array($val, $references)) {
          $this->message .= " The reference $val is used in a deal and has not been described.";
          $valid = false;
        }
        
        $references_used[] = $val;
      }
    }
    // All references must be in references_used, whatever the order in which
    // deals list them
    $references_not_used = array_diff($references, $references_used);
    if (count($references_not_used) > 0) {
      $this->message .= " ".implode(", ", $references_not_used)." not used in deals or not defined in ReleaseList.";
      $valid = false;
    }
    
    return $valid;
  }
}
