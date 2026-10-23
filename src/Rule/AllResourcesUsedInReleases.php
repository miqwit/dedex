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
 * All the resources described must be used in releases. Otherwise, it is 
 * suspicious and probably an unexpected thing.
 * 
 * Also checks that all references used in releases are described in resources.
 *
 * @author Mickaël Arcos <@miqwit>
 */
class AllResourcesUsedInReleases extends Rule {
  protected $message = "All resources must be used in releases.";

  private function collectResourceRefsFromGroup($group, array &$refs): void {
    // Collect from content items, including the resources linked to an
    // item (like a per-track image)
    foreach ($group->getResourceGroupContentItem() as $item) {
      $ref = $item->getReleaseResourceReference();
      if ($ref !== null) {
        $refs[] = (string) $ref;
      }
      if (method_exists($item, 'getLinkedReleaseResourceReference')) {
        foreach ($item->getLinkedReleaseResourceReference() as $linked) {
          $refs[] = (string) $linked->value();
        }
      }
    }
    // Collect from linked resource references
    foreach ($group->getLinkedReleaseResourceReference() as $linked) {
      $refs[] = (string) $linked->value();
    }
    // Recurse into sub-groups
    foreach ($group->getResourceGroup() as $subGroup) {
      $this->collectResourceRefsFromGroup($subGroup, $refs);
    }
  }

  public function validates($newReleaseMessage): bool {
    // Nothing to check in a PurgeReleaseMessage
    if ($this->isPurgeMessage($newReleaseMessage)) {
      return true;
    }
    $this->resetMessage();
    $references = [];
    $references_used = [];
    $valid = true;
    
    // First get all resource references. ERN 3.x: SoundRecordings and Images.
    // ERN 4.x: every resource type.
    $resourceList = $newReleaseMessage->getResourceList();
    $resourceGetters = $this->isErn3x($resourceList)
        ? ['getSoundRecording', 'getImage']
        : ['getSoundRecording', 'getVideo', 'getImage', 'getText', 'getSheetMusic', 'getSoftware'];
    foreach ($resourceGetters as $getter) {
      foreach ($resourceList->$getter() as $resource) {
        $references[] = (string) $resource->getResourceReference();
      }
    }
    
    // Second, browse all releases to check all references are used at least once.
    // ERN 4.3 returns single Release object; other versions return array
    $releases = $newReleaseMessage->getReleaseList()->getRelease();
    if (!is_array($releases)) {
      $releases = $releases !== null ? [$releases] : [];
    }
    foreach ($releases as $rel) {
      // ERN 3.x uses getReleaseResourceReferenceList(); all 4.x use ResourceGroup
      if ($this->isErn3x($rel)) {
        foreach ($rel->getReleaseResourceReferenceList() as $rrrl) {
          $val = $rrrl->value();
          $references_used[] = $val;
        }
      } elseif ($rel->getResourceGroup() !== null) {
        $this->collectResourceRefsFromGroup($rel->getResourceGroup(), $references_used);
      }
    }
    // Include track releases (ERN 4.x — all 4.x versions have getTrackRelease, 3.x does not)
    $releaseList = $newReleaseMessage->getReleaseList();
    if (!$this->isErn3x($releaseList)) {
      foreach ($releaseList->getTrackRelease() as $tr) {
        $ref = $tr->getReleaseResourceReference();
        if ($ref !== null) {
          $references_used[] = (string) $ref;
        }
      }
    }
    $references_used = array_unique($references_used);
    
    // All references must be in references_used, whatever the order in
    // which releases list them
    $references_not_used = array_diff($references, $references_used);
    if (count($references_not_used) > 0) {
      $this->message .= " ".implode(", ", $references_not_used)." not used or not defined.";
      $valid = false;
    }
    
    return $valid;
  }
}
