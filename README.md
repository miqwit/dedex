# DeDEX

[![CI](https://github.com/miqwit/dedex/actions/workflows/ci.yml/badge.svg)](https://github.com/miqwit/dedex/actions/workflows/ci.yml)
[![Latest Version](https://img.shields.io/packagist/v/miqwit/dedex.svg)](https://packagist.org/packages/miqwit/dedex)
[![Total Downloads](https://img.shields.io/packagist/dt/miqwit/dedex.svg)](https://packagist.org/packages/miqwit/dedex)
[![PHP Version](https://img.shields.io/packagist/php-v/miqwit/dedex.svg)](https://packagist.org/packages/miqwit/dedex)
[![License](https://img.shields.io/github/license/miqwit/dedex.svg)](https://github.com/miqwit/dedex/blob/master/LICENSE)

-----
ℹ️ 🇨🇦 I will be at the 16-19 November Toronto, Canada 46th Plenary Meeting. Meet me there!
-----

DeDEX is a DDEX XML file parser. DDEX is a standard used in the music industry to deliver rich media content. See more info at [ddex.net](https://ddex.net/). This covers only the ERN (Electronic Release Notification) standard, for the following versions.

Supported versions:
- `3.8.1`
- `3.8.2`
- `4.1`
- `4.1.1`
- `4.2`
- `4.3`
- `4.3.1`
- `4.3.2`

**Simple Entities** speak your language and will make you smoothly parse your first ERNs.

**Rule** (and **Rules Set**) contain the minimal consistent information YOU need in your system. XML may be valid, but inaccurate for your needs.

I created this DDEX ERN parser that is as convenient as I always hoped for.

✍️ [Contribute](CONTRIBUTE.md) here if you feel like it. Make DeDEX the first repo you contribute to! 🙌

⭐️ If you find this work useful, please star the repository.

🐘 [DeDEX on packagist](https://packagist.org/packages/miqwit/dedex).

## Installation

```
composer require miqwit/dedex
```

⚠️  Runtime: PHP 7.4+. As per composer configuration, development and test tools need 8.1+ to work. It is not maintained for 7.4+ versions.

## Usage

### Convert a DDEX file to a SimpleAlbum

```php
use DedexBundle\Controller\ErnParserController;
use DedexBundle\Simplifiers\SimpleAlbum;

$xml_path = "tests/Ern382/samples/with_assets/complete_flac/1199119911991.xml";
$parser = new ErnParserController();
$ern = $parser->parse($xml_path);
$album = new SimpleAlbum($ern);

// Then you can access high level property of this album
$release_date = $album->getOriginalReleaseDate();
$artists_at_album_level = $album->getArtists();
$tracks_for_cd_1 = $album->getTracksPerCd()[1];

// You can also access exact XML mapping by getting 
// ddex objects at album or track level
$ddex_release = $album->getDdexRelease();
$ddex_release->getReleaseId()[0]->getICPN()->value(); // direct access
$ddex_track = $tracks_for_cd_1[1]->getDdexSoundRecording()->getDuration(); // direct access
```

### Parse a file without XSD validation

```php
use DedexBundle\Controller\ErnParserController;

$xml_path = "tests/Ern382/samples/audioalbum_complete.xml";
$parser = new ErnParserController();
$ern = $parser->parse($xml_path);

// Then you can access properties of the ERN
$created_at = $ern->getMessageHeader()->getMessageCreatedDateTime();
```

### Parse a file with XSD validation

XSD validation will load all XML and XSD in memory, making this library less efficient. Use with care. Is not adapted to gigantic files.

```php
use DedexBundle\Controller\ErnParserController;

$xml_path = "tests/Ern382/samples/audioalbum_complete.xml";
$parser = new ErnParserController();
$parser->setXsdValidation(true);
$ern = $parser->parse($xml_path);
```

### Parse a file with Rules

```php
use DedexBundle\Controller\ErnParserController;
use DedexBundle\Rule\AtLeastOneImage;
use DedexBundle\Exception\RuleValidationException;

$xml_path = "tests/Ern382/samples/audioalbum_complete.xml";
$parser = new ErnParserController();
$parser->addRule(new AtLeastOneImage(Rule::LEVEL_ERROR));
// ... can add multiple rules one by one
// ... or multiple rules with $parser->addRuleSet([])
$ern = $parser->parse($xml_path);  // will raise an RuleValidationException if rule is broken
```

### Read rule results

Each rule gives a result (passed, failed or skipped), and a failed rule gives one `Violation` per problem: what failed, about which element (`getSubject()`, like `A9`), and where it is in the XML (`getPath()`).

```php
use DedexBundle\Controller\ErnParserController;
use DedexBundle\Rule\RuleSet;

$parser = new ErnParserController();
$parser->setThrowOnRuleError(false);  // parse() returns the message even if an ERROR rule fails
$parser->addRuleSet(RuleSet::MUSICAL_ALBUM("path/to/assets"));
$ern = $parser->parse($xml_path);

foreach ($parser->getRuleResults() as $result) {
  echo $result->getRule()->getName(), ": ", $result->getStatus(), "\n";  // passed, failed or skipped
  foreach ($result->getViolations() as $violation) {
    echo "  ", $violation, "\n";                 // WARNING: Resource A9 is not used in any release
    echo "  ", $violation->getSubject(), "\n";   // A9
    echo "  ", $violation->getPath(), "\n";      // ResourceList/Image[2]
  }
}
```

A path is relative to the root element of the message, with element local names separated by `/` and an optional 1-based position among same-named siblings, like `ResourceList/SoundRecording[3]/SoundRecordingEdition/ResourceId`. The equivalent XPath is `/*` followed by `/*[local-name()='Segment'][n]` for each segment.

Rules can also run on a message that is already parsed: `RuleRunner::run($rules, $ern, $version)`.

### Write a rule

Extend `Rule`, call `fail()` for each problem, and return whether the message passes:

```php
use DedexBundle\Rule\Rule;

class AllSoundRecordingsHaveDuration extends Rule {
  protected $message = "All SoundRecordings must have a duration.";

  public function validates($newReleaseMessage): bool {
    $this->resetMessage();
    foreach (array_values($newReleaseMessage->getResourceList()->getSoundRecording()) as $i => $sr) {
      if ($sr->getDuration() === null) {
        $ref = $sr->getResourceReference();
        $this->fail("SoundRecording $ref has no duration", $ref, sprintf("ResourceList/SoundRecording[%d]", $i + 1));
      }
    }
    return count($this->getViolations()) === 0;
  }
}
```

A rule that only returns `false` (without calling `fail()`) still works: its message becomes its single violation.

## Parser config

Here are handy function from the parser.

`$parser=new ErnParserController();`

```php
$parser->setDisplayLog(true);
```

Displays parsing logs. For debugging purpose mainly. (default: `false`)

```php
$parser->setXsdValidation(true);
``` 

Validates XML against XSD. (default: `false` because will load XSD and XML in memory)

```php
$parser->getRuleMessages();
```

Returns a formatted string (with new lines) of all the errors generated by the rule checking. To be called when parsing ended. 
If one of the `ERROR` rules fail, the parser will throw an exception with these messages. 

```php
$parser->getRuleResults();
```

Returns one `RuleResult` per rule, in the order they were added, with its status and its violations (see [Read rule results](#read-rule-results)). Available after parsing, even when parse() threw.

```php
$parser->setThrowOnRuleError(false);
```

With `false`, `parse()` does not throw when an `ERROR` rule fails: read the failures with `getRuleResults()` or `getRuleMessages()`. (default: `true`)

```php
$parser->addRuleSet();
```

Will store a set of Rule (array). For example, each provider could be check with a specific rule set.

# Standard updates

## Official email in September 2024

>  From March 1, 2025, all the versions 3 as well as version 4.0 of the Electronic Release Notification standard, their respective profiles, and choreographies will no longer be supported. This means that from that date, no further updates, bug fixes, or AVS additions will be made to these versions of the ERN standard. Also, the XML schemas and all articles or implementation advice about ERN- 3 and ERN 4.0 will be removed from all DDEX websites. All schemas, standard texts, and supporting information about ERN -4.1, 4.2, and, of course, 4.3.1 will remain.
