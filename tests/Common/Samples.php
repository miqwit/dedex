<?php

namespace DedexBundle\Tests\Common;

use DedexBundle\Controller\ErnParserController;
use DedexBundle\Rule\Rule;
use ReflectionClass;

/**
 * Discovers the test samples of every ERN version and the rules of the
 * library, so that tests run on all of them without listing them by hand:
 * a new sample, version or rule is picked up automatically.
 */
class Samples {

  /**
   * Samples that are not meant to be parsed: parsing them must throw.
   * Paths relative to the project root.
   */
  public const UNPARSEABLE = [
    // ReferenceCreation does not exist in 3.8.1 (tested in Ern381\ParserTest)
    "tests/Ern381/samples/ern381_reference_creation.xml",
  ];

  /**
   * @return string[] every XML file in tests/Ern*\/samples, sub-folders
   *   included, relative to the project root and sorted
   */
  public static function all(): array {
    $files = [];
    foreach (glob("tests/Ern*/samples", GLOB_ONLYDIR) as $dir) {
      $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($dir, \FilesystemIterator::SKIP_DOTS));
      foreach ($iterator as $file) {
        if (strtolower($file->getExtension()) === "xml") {
          $files[] = str_replace(DIRECTORY_SEPARATOR, "/", $file->getPathname());
        }
      }
    }
    sort($files);
    return $files;
  }

  /**
   * @return string[] samples that parse, indexed by sample, with their ERN
   *   version as detected by the parser (like "432")
   */
  public static function parseableWithVersion(): array {
    static $versions = null;
    if ($versions === null) {
      $versions = [];
      foreach (self::all() as $sample) {
        if (in_array($sample, self::UNPARSEABLE)) {
          continue;
        }
        $parser = new ErnParserController();
        $parser->parse($sample);
        $versions[$sample] = $parser->getVersion();
      }
    }
    return $versions;
  }

  /**
   * @return string[] parseable samples of ERN 4.x
   */
  public static function ern4x(): array {
    return array_keys(array_filter(self::parseableWithVersion(), function ($version) {
      return strpos($version, "4") === 0;
    }));
  }

  /**
   * @return string[] class names of every concrete rule in src/Rule
   */
  public static function ruleClasses(): array {
    $classes = [];
    foreach (glob(__DIR__ . "/../../src/Rule/*.php") as $file) {
      $class = "DedexBundle\\Rule\\" . basename($file, ".php");
      if (!class_exists($class)) {
        continue;
      }
      $reflection = new ReflectionClass($class);
      if ($reflection->isSubclassOf(Rule::class) && !$reflection->isAbstract()) {
        $classes[] = $class;
      }
    }
    sort($classes);
    return $classes;
  }

  /**
   * @param string $class a rule class name
   * @param string $root_folder for rules looking for files
   * @return Rule a new rule, with its default level
   */
  public static function newRule(string $class, string $root_folder): Rule {
    if ($class === \DedexBundle\Rule\AllResourceFileExist::class) {
      return new $class(null, $root_folder);
    }
    return new $class();
  }

  /**
   * @param string $class
   * @return string the class name without its namespace
   */
  public static function shortName(string $class): string {
    return (new ReflectionClass($class))->getShortName();
  }
}
