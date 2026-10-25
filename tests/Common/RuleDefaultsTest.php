<?php

namespace DedexBundle\Tests\Common;

use DedexBundle\Controller\ErnParserController;
use DedexBundle\Rule\AtLeastOneImage;
use PHPUnit\Framework\TestCase;

/**
 * Version-agnostic rule behaviour: a rule applies to every version the
 * parser supports unless it opts into a narrower set.
 */
class RuleDefaultsTest extends TestCase {

  /**
   * Rules apply by default to every version the parser supports
   */
  public function testRulesSupportAllParserVersionsByDefault() {
    $rule = new AtLeastOneImage();
    $this->assertEquals(ErnParserController::SUPPORTED_VERSIONS, $rule->getSupportedVersions());
  }

  /**
   * Rules pick ERN 3.x or 4.x accessors from the entity namespace of the
   * DDEX object, for every 3.x version (not only 3.8.2).
   */
  public function testIsErn3x() {
    $rule = new class extends AtLeastOneImage {
      public function is3x($ddexObject): bool {
        return $this->isErn3x($ddexObject);
      }
    };

    $this->assertTrue($rule->is3x(new \DedexBundle\Entity\Ern381\SoundRecordingType()));
    $this->assertTrue($rule->is3x(new \DedexBundle\Entity\Ern382\SoundRecordingType()));
    $this->assertFalse($rule->is3x(new \DedexBundle\Entity\Ern411\SoundRecordingType()));
    $this->assertFalse($rule->is3x(new \DedexBundle\Entity\Ern432\SoundRecordingType()));
  }

  /**
   * Rules look at the same resource types in ERN 3.x and 4.x: every type
   * the version has. MIDI and UserDefinedResource only exist in 3.x.
   */
  public function testResourcesByTypeIsTheSameFor3xAnd4x() {
    $rule = new class extends AtLeastOneImage {
      public function types($resourceList): array {
        return array_keys($this->getResourcesByType($resourceList));
      }
    };

    $all = ["SoundRecording", "MIDI", "Video", "Image", "Text", "SheetMusic", "Software", "UserDefinedResource"];
    $this->assertSame($all, $rule->types(new \DedexBundle\Entity\Ern381\ResourceListType()));
    $this->assertSame($all, $rule->types(new \DedexBundle\Entity\Ern382\ResourceListType()));

    $all4x = ["SoundRecording", "Video", "Image", "Text", "SheetMusic", "Software"];
    foreach (["Ern41", "Ern411", "Ern42", "Ern43", "Ern431", "Ern432"] as $version) {
      $class = "\\DedexBundle\\Entity\\$version\\ResourceListType";
      $this->assertSame($all4x, $rule->types(new $class()), $version);
    }
  }
}
