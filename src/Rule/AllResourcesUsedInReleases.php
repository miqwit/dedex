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

  /**
   * Collect resource references used in a 4.x ResourceGroup and its
   * sub-groups, with the path of each reference.
   *
   * @param object $group
   * @param string $path path of the group
   * @param array $refs [reference, path] pairs, completed by this function
   */
  private function collectResourceRefsFromGroup($group, string $path, array &$refs): void {
    // Content items, including the resources linked to an item (like a
    // per-track image)
    foreach (array_values($group->getResourceGroupContentItem()) as $i => $item) {
      $itemPath = sprintf("%s/ResourceGroupContentItem[%d]", $path, $i + 1);
      $ref = $item->getReleaseResourceReference();
      if ($ref !== null) {
        $refs[] = [(string) $ref, "$itemPath/ReleaseResourceReference"];
      }
      if (method_exists($item, 'getLinkedReleaseResourceReference')) {
        foreach (array_values($item->getLinkedReleaseResourceReference()) as $j => $linked) {
          $refs[] = [(string) $linked->value(), sprintf("%s/LinkedReleaseResourceReference[%d]", $itemPath, $j + 1)];
        }
      }
    }
    // Resources linked to the group (like the release cover)
    foreach (array_values($group->getLinkedReleaseResourceReference()) as $j => $linked) {
      $refs[] = [(string) $linked->value(), sprintf("%s/LinkedReleaseResourceReference[%d]", $path, $j + 1)];
    }
    // Sub-groups
    foreach (array_values($group->getResourceGroup()) as $k => $subGroup) {
      $this->collectResourceRefsFromGroup($subGroup, sprintf("%s/ResourceGroup[%d]", $path, $k + 1), $refs);
    }
  }

  public function validates($newReleaseMessage): bool {
    $this->resetMessage();
    // Nothing to check in a PurgeReleaseMessage
    if ($this->isPurgeMessage($newReleaseMessage)) {
      return true;
    }

    // First get all declared resources, of every resource type, with their path
    $declared = [];  // reference => path
    foreach ($this->getResourcesByType($newReleaseMessage->getResourceList()) as $type => $resources) {
      foreach (array_values($resources) as $i => $resource) {
        $reference = (string) $resource->getResourceReference();
        if (!isset($declared[$reference])) {
          $declared[$reference] = sprintf("ResourceList/%s[%d]", $type, $i + 1);
        }
      }
    }

    // Second, collect all references used by releases, with their path
    $used = [];  // [reference, path] pairs
    foreach ($this->getReleasesWithPath($newReleaseMessage) as list($release, $releasePath)) {
      // ERN 3.x uses getReleaseResourceReferenceList(); all 4.x use ResourceGroup
      if ($this->isErn3x($release)) {
        foreach (array_values($release->getReleaseResourceReferenceList()) as $j => $rrr) {
          $used[] = [(string) $rrr->value(), sprintf("%s/ReleaseResourceReferenceList/ReleaseResourceReference[%d]", $releasePath, $j + 1)];
        }
      } elseif ($release->getResourceGroup() !== null) {
        $this->collectResourceRefsFromGroup($release->getResourceGroup(), "$releasePath/ResourceGroup", $used);
      }
    }
    // Include track releases (ERN 4.x — all 4.x versions have getTrackRelease, 3.x does not)
    $releaseList = $newReleaseMessage->getReleaseList();
    if (!$this->isErn3x($releaseList)) {
      foreach (array_values($releaseList->getTrackRelease()) as $i => $tr) {
        $ref = $tr->getReleaseResourceReference();
        if ($ref !== null) {
          $used[] = [(string) $ref, sprintf("ReleaseList/TrackRelease[%d]/ReleaseResourceReference", $i + 1)];
        }
      }
    }

    // Every declared resource must be used, whatever the order in which
    // releases list them
    $usedReferences = array_column($used, 0);
    foreach ($declared as $reference => $path) {
      if (!in_array($reference, $usedReferences, true)) {
        $this->fail("Resource $reference is not used in any release", $reference, $path);
      }
    }

    // Every used reference must be declared (reported once per reference)
    $reported = [];
    foreach ($used as list($reference, $path)) {
      if (!isset($declared[$reference]) && !isset($reported[$reference])) {
        $this->fail("Resource $reference is used in a release but not defined in the ResourceList", $reference, $path);
        $reported[$reference] = true;
      }
    }

    return count($this->getViolations()) === 0;
  }
}
