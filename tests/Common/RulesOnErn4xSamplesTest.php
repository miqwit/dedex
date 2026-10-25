<?php

namespace DedexBundle\Tests\Common;

use DedexBundle\Controller\ErnParserController;
use DedexBundle\Rule\AllResourceFileExist;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

/**
 * Expected result of every rule on every ERN 4.x sample.
 *
 * Not crashing is not enough: a rule can return a wrong result on a version
 * it doesn't understand (see #57). So each 4.x sample lists the rules it is
 * expected to fail, with their exact violations (subject and path); every
 * other rule must pass.
 *
 * Adding a 4.x sample makes testEvery4xSampleHasExpectedResults fail until
 * the sample is added to EXPECTED_FAILURES (with [] if all rules pass).
 * Adding a rule runs it on all samples: it must pass on each of them, or be
 * listed below.
 *
 * AllResourceFileExist depends on files on disk, not only on the XML: it is
 * tested by testAllResourceFileExist instead.
 */
class RulesOnErn4xSamplesTest extends TestCase {

  /**
   * Sample => [rule short name => its violations, as "subject @ path"
   * ("@ path" when the violation has no subject)].
   */
  private const EXPECTED_FAILURES = [
    "tests/Ern41/samples/ern41.xml" => [],
    "tests/Ern411/samples/ern411.xml" => [],
    "tests/Ern42/samples/ern42.xml" => [],

    "tests/Ern43/samples/ern43.xml" => [],
    "tests/Ern43/samples/ern43_audio.xml" => [],
    // Track releases R1 to R12 have no deal; the release-level cover is
    // linked before the tracks (#57, 3a)
    "tests/Ern43/samples/ern43_classical.xml" => [
      "AllReleasesUsedInDeals" => [
        "R1 @ ReleaseList/TrackRelease[1]",
        "R2 @ ReleaseList/TrackRelease[2]",
        "R3 @ ReleaseList/TrackRelease[3]",
        "R4 @ ReleaseList/TrackRelease[4]",
        "R5 @ ReleaseList/TrackRelease[5]",
        "R6 @ ReleaseList/TrackRelease[6]",
        "R7 @ ReleaseList/TrackRelease[7]",
        "R8 @ ReleaseList/TrackRelease[8]",
        "R9 @ ReleaseList/TrackRelease[9]",
        "R10 @ ReleaseList/TrackRelease[10]",
        "R11 @ ReleaseList/TrackRelease[11]",
        "R12 @ ReleaseList/TrackRelease[12]",
      ],
    ],
    // A2 to A9 are mixed into A1, without ISRC and not in any release
    "tests/Ern43/samples/ern43_dj_mix.xml" => [
      "AllResourcesUsedInReleases" => [
        "A2 @ ResourceList/SoundRecording[2]",
        "A3 @ ResourceList/SoundRecording[3]",
        "A4 @ ResourceList/SoundRecording[4]",
        "A5 @ ResourceList/SoundRecording[5]",
        "A6 @ ResourceList/SoundRecording[6]",
        "A7 @ ResourceList/SoundRecording[7]",
        "A8 @ ResourceList/SoundRecording[8]",
        "A9 @ ResourceList/SoundRecording[9]",
      ],
      "AllSoundRecordingsHaveIsrc" => [
        "A2 @ ResourceList/SoundRecording[2]/SoundRecordingEdition[1]/ResourceId[1]",
        "A3 @ ResourceList/SoundRecording[3]/SoundRecordingEdition[1]/ResourceId[1]",
        "A4 @ ResourceList/SoundRecording[4]/SoundRecordingEdition[1]/ResourceId[1]",
        "A5 @ ResourceList/SoundRecording[5]/SoundRecordingEdition[1]/ResourceId[1]",
        "A6 @ ResourceList/SoundRecording[6]/SoundRecordingEdition[1]/ResourceId[1]",
        "A7 @ ResourceList/SoundRecording[7]/SoundRecordingEdition[1]/ResourceId[1]",
        "A8 @ ResourceList/SoundRecording[8]/SoundRecordingEdition[1]/ResourceId[1]",
        "A9 @ ResourceList/SoundRecording[9]/SoundRecordingEdition[1]/ResourceId[1]",
      ],
      "AtLeastOneAlbumRelease" => ["@ ReleaseList"],
    ],
    // Video only: no SoundRecording
    "tests/Ern43/samples/ern43_longform_video.xml" => [
      "AtLeastOneAlbumRelease" => ["@ ReleaseList"],
      "AtLeastOneSoundRecordingRule" => ["@ ResourceList"],
    ],
    // A19 to A21 are linked from content items (#57, 3b); Bundle release
    "tests/Ern43/samples/ern43_mixed_media.xml" => [
      "AllReleasesUsedInDeals" => [
        "R7 @ ReleaseList/TrackRelease[7]",
        "R14 @ ReleaseList/TrackRelease[14]",
      ],
      "AtLeastOneAlbumRelease" => ["@ ReleaseList"],
    ],
    // A2 is linked from a content item (#57, 3b)
    "tests/Ern43/samples/ern43_ringtone.xml" => [
      "AtLeastOneAlbumRelease" => ["@ ReleaseList"],
    ],
    // A2 is linked from a content item (#57, 3b)
    "tests/Ern43/samples/ern43_simple_audio_single.xml" => [
      "AtLeastOneAlbumRelease" => ["@ ReleaseList"],
    ],
    // Video only: no SoundRecording, and no front cover
    "tests/Ern43/samples/ern43_simple_video_single.xml" => [
      "AtLeastOneAlbumRelease" => ["@ ReleaseList"],
      "AtLeastOneImageFrontCover" => ["@ ResourceList"],
      "AtLeastOneSoundRecordingRule" => ["@ ResourceList"],
    ],
    "tests/Ern43/samples/ern43_single_inline_image.xml" => [
      "AllReleasesUsedInDeals" => [
        "RT1 @ ReleaseList/TrackRelease[1]",
        "RT2 @ ReleaseList/TrackRelease[2]",
      ],
      "AtLeastOneAlbumRelease" => ["@ ReleaseList"],
    ],
    // Video only; A4 and A5 are linked from content items (#57, 3b)
    "tests/Ern43/samples/ern43_video.xml" => [
      "AllReleasesUsedInDeals" => [
        "R1 @ ReleaseList/TrackRelease[1]",
        "R2 @ ReleaseList/TrackRelease[2]",
      ],
      "AtLeastOneAlbumRelease" => ["@ ReleaseList"],
      "AtLeastOneSoundRecordingRule" => ["@ ResourceList"],
    ],
    "tests/Ern43/samples/ern_43.xml" => [
      "AtLeastOneAlbumRelease" => ["@ ReleaseList"],
    ],

    "tests/Ern431/samples/ern431_album.xml" => [],
    "tests/Ern431/samples/ern431_classical.xml" => [
      "AllReleasesUsedInDeals" => [
        "R1 @ ReleaseList/TrackRelease[1]",
        "R2 @ ReleaseList/TrackRelease[2]",
        "R3 @ ReleaseList/TrackRelease[3]",
        "R4 @ ReleaseList/TrackRelease[4]",
        "R5 @ ReleaseList/TrackRelease[5]",
        "R6 @ ReleaseList/TrackRelease[6]",
        "R7 @ ReleaseList/TrackRelease[7]",
        "R8 @ ReleaseList/TrackRelease[8]",
        "R9 @ ReleaseList/TrackRelease[9]",
        "R10 @ ReleaseList/TrackRelease[10]",
        "R11 @ ReleaseList/TrackRelease[11]",
        "R12 @ ReleaseList/TrackRelease[12]",
      ],
    ],
    "tests/Ern431/samples/ern431_new_features.xml" => [],
    "tests/Ern431/samples/ern431_real_world_single.xml" => [
      "AtLeastOneAlbumRelease" => ["@ ReleaseList"],
    ],
    // Not XSD valid (BrandId/@Namespace), but parseable
    "tests/Ern431/samples/invalid_brand_id.xml" => [],

    "tests/Ern432/samples/ern432_brand_id.xml" => [],
    "tests/Ern432/samples/ern432_cover_linked_first.xml" => [],
    // A deal references R9, which is not in the ReleaseList
    "tests/Ern432/samples/ern432_deal_unknown_release.xml" => [
      "AllReleasesUsedInDeals" => ["R9 @ DealList/ReleaseDeal[2]/DealReleaseReference[3]"],
    ],
    "tests/Ern432/samples/ern432_edition_without_isrc.xml" => [
      "AllSoundRecordingsHaveIsrc" => ["A1 @ ResourceList/SoundRecording[1]/SoundRecordingEdition[2]/ResourceId[1]"],
    ],
    "tests/Ern432/samples/ern432_file_uris.xml" => [],
    "tests/Ern432/samples/ern432_linked_in_content_item.xml" => [],
    "tests/Ern432/samples/ern432_no_deal_list.xml" => [
      "AllReleasesUsedInDeals" => [
        "R0 @ ReleaseList/Release",
        "R1 @ ReleaseList/TrackRelease[1]",
        "R2 @ ReleaseList/TrackRelease[2]",
      ],
    ],
    "tests/Ern432/samples/ern432_purge.xml" => [],
    "tests/Ern432/samples/ern432_unused_text.xml" => [
      "AllResourcesUsedInReleases" => ["A5 @ ResourceList/Text[1]"],
    ],
  ];

  public static function ern4xSampleProvider(): array {
    $data = [];
    foreach (Samples::ern4x() as $sample) {
      $data[$sample] = [$sample];
    }
    return $data;
  }

  public function testEvery4xSampleHasExpectedResults() {
    $missing = array_diff(Samples::ern4x(), array_keys(self::EXPECTED_FAILURES));
    $this->assertEquals([], array_values($missing), "Add these samples to EXPECTED_FAILURES");

    $unknown = array_diff(array_keys(self::EXPECTED_FAILURES), Samples::ern4x());
    $this->assertEquals([], array_values($unknown), "These samples are not parseable 4.x samples any more");
  }

  #[DataProvider('ern4xSampleProvider')]
  public function testRuleResults(string $sample) {
    $expected = self::EXPECTED_FAILURES[$sample] ?? [];
    $parser = new ErnParserController();
    $ern = $parser->parse($sample);

    $actual = [];
    foreach (Samples::ruleClasses() as $class) {
      if ($class === AllResourceFileExist::class) {
        continue;
      }
      $rule = Samples::newRule($class, dirname($sample));
      foreach ($rule->check($ern) as $violation) {
        $actual[Samples::shortName($class)][] = trim($violation->getSubject() . " @ " . $violation->getPath());
      }
    }
    ksort($expected);
    ksort($actual);
    $this->assertEquals($expected, $actual);
  }

  /**
   * AllResourceFileExist must check exactly the local files of the message.
   * The expected files are read from the XML with XPath, independently of
   * the entity classes: every File/URI under ResourceList, whatever the
   * resource type, edition or clip, except remote URIs.
   *
   * The rule runs on a temporary root folder:
   * - empty: all files are reported missing (or the rule passes if there are none)
   * - with all files but the first one: only the first one is reported
   * - with all files: the rule passes
   */
  #[DataProvider('ern4xSampleProvider')]
  public function testAllResourceFileExist(string $sample) {
    $parser = new ErnParserController();
    $ern = $parser->parse($sample);

    $dom = new \DOMDocument();
    $dom->load($sample);
    $xpath = new \DOMXPath($dom);
    $uris = [];
    foreach ($xpath->query("//*[local-name()='ResourceList']//*[local-name()='File']/*[local-name()='URI']") as $node) {
      $uri = trim($node->textContent);
      if (!preg_match('#^[a-z][a-z0-9+.-]*://#i', $uri)) {
        $uris[] = $uri;
      }
    }
    $uris = array_values(array_unique($uris));

    $root = sys_get_temp_dir() . DIRECTORY_SEPARATOR . "dedex_files_" . uniqid();
    mkdir($root);
    try {
      $rule = new AllResourceFileExist(null, $root);

      // Empty folder
      $this->assertEqualsCanonicalizing($uris, $this->missingFiles($rule->check($ern), $sample));

      // All files but the first one
      foreach (array_slice($uris, 1) as $uri) {
        $this->touch($root, $uri);
      }
      if (count($uris) > 0) {
        $this->assertEquals([$uris[0]], $this->missingFiles($rule->check($ern), $sample));
        $this->touch($root, $uris[0]);
      }

      // All files
      $this->assertEquals([], $rule->check($ern), $rule->getMessage());
    } finally {
      $this->removeDir($root);
    }
  }

  /**
   * @param \DedexBundle\Rule\Violation[] $violations of AllResourceFileExist
   * @param string $sample
   * @return string[] the missing files, after checking that each violation
   *   points to the URI element of its file
   */
  private function missingFiles(array $violations, string $sample): array {
    $files = [];
    foreach ($violations as $violation) {
      $this->assertSame("File {$violation->getSubject()} is missing", $violation->getMessage());
      $this->assertStringEndsWith("/File/URI", $violation->getPath());
      $nodes = Samples::resolvePath($sample, $violation->getPath());
      $this->assertCount(1, $nodes, $violation->getPath());
      $this->assertSame($violation->getSubject(), trim($nodes[0]->textContent));
      $files[] = $violation->getSubject();
    }
    return $files;
  }

  private function touch(string $root, string $uri): void {
    $path = $root . DIRECTORY_SEPARATOR . $uri;
    if (!is_dir(dirname($path))) {
      mkdir(dirname($path), 0777, true);
    }
    touch($path);
  }

  private function removeDir(string $dir): void {
    $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($dir, \FilesystemIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::CHILD_FIRST);
    foreach ($iterator as $file) {
      $file->isDir() ? rmdir($file->getPathname()) : unlink($file->getPathname());
    }
    rmdir($dir);
  }
}
