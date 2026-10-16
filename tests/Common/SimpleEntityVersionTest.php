<?php

namespace DedexBundle\Tests\Common;

use DedexBundle\Simplifiers\SimpleEntity;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class SimpleEntityVersionTest extends TestCase {

  /**
   * SimpleEntity exposing its protected version helpers.
   */
  private function entity() {
    return new class extends SimpleEntity {
      public function atLeast(string $version, string $reference): bool {
        return $this->isVersionAtLeast($version, $reference);
      }
      public function is43OrLater(string $version): bool {
        return $this->isVersion43OrLater($version);
      }
      public function is431OrLater(string $version): bool {
        return $this->isVersion431OrLater($version);
      }
    };
  }

  public function testVersionsWithDifferentLengthsCompareByDigitPlace() {
    $entity = $this->entity();

    // Shorter strings are right padded: "4" is 400, "41" is 410
    $this->assertTrue($entity->atLeast("4", "382"));
    $this->assertTrue($entity->atLeast("41", "382"));
    $this->assertTrue($entity->atLeast("431", "43"));
    $this->assertTrue($entity->atLeast("44", "431"));
    $this->assertTrue($entity->atLeast("411", "41"));

    $this->assertFalse($entity->atLeast("382", "41"));
    $this->assertFalse($entity->atLeast("43", "431"));
    $this->assertFalse($entity->atLeast("42", "43"));

    // Same version, with or without trailing zeros
    $this->assertTrue($entity->atLeast("43", "43"));
    $this->assertTrue($entity->atLeast("43", "430"));
    $this->assertTrue($entity->atLeast("430", "43"));
  }

  public function testIsVersion43OrLater() {
    $entity = $this->entity();

    foreach (["43", "431", "432", "44", "5"] as $version) {
      $this->assertTrue($entity->is43OrLater($version), $version);
    }
    foreach (["382", "41", "411", "42"] as $version) {
      $this->assertFalse($entity->is43OrLater($version), $version);
    }
  }

  public function testIsVersion431OrLater() {
    $entity = $this->entity();

    foreach (["431", "432", "44", "5"] as $version) {
      $this->assertTrue($entity->is431OrLater($version), $version);
    }
    foreach (["382", "41", "411", "42", "43"] as $version) {
      $this->assertFalse($entity->is431OrLater($version), $version);
    }
  }

  public function testInvalidVersionIsRejected() {
    foreach (["", "4.3", "4311", "ern/43"] as $version) {
      try {
        $this->entity()->atLeast($version, "43");
        $this->fail("Expected an exception for version '$version'");
      } catch (InvalidArgumentException $ex) {
        $this->assertStringContainsString("Invalid ERN version", $ex->getMessage());
      }
    }
  }

}
