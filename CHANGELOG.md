## [Unreleased]
### Added
- ERN 3.8.1 support (`Ern381` entities generated with xsd2php, namespace `http://ddex.net/xml/ern/381`), added to `ErnParserController::SUPPORTED_VERSIONS` (#53)
- `xsd/release_notification/381/` schema, with its AVS import pointed to a local `avs_20161006.xsd` so validation works offline, and `config/xsd2php.381.yaml`
- `tests/Ern381` (parser, simplifiers, rules) with samples covering the 3.8.1 specifics: deal display/preview start date-times, `PreOrderPreviewDateTime`, one `Condition` per `RightsClaimPolicy` and no `ReferenceCreation`
- `tests/Ern382` test for several `Condition`s with `ReferenceCreation` in a `RightsClaimPolicy` (3.8.2 only)
- `tests/Common/RulesOnAllSamplesTest`: every rule runs on every sample of every version and must not throw; every supported version must have a sample (#57)
- `tests/Common/RulesOnErn4xSamplesTest`: expected result of every rule on every ERN 4.x sample, and `AllResourceFileExist` checked against the `File/URI` elements of each sample (#57)
- `tests/Ern41` sample (4.1 had none), `tests/Ern432/RulesTest` and 4.3.2 samples for each rule fix, and a 3.8.1 sample with a video and an unused booklet (#57)
### Changed
- Rules and simplifiers detect ERN 3.x with a new `isErn3x()` helper (entity namespace starts with `Ern3`) instead of `instanceof \DedexBundle\Entity\Ern382\...`, so they apply to every 3.x version
### Fixed
- `AllSoundRecordingsHaveIsrc` no longer calls `trim(null)` (deprecated) when a `SoundRecordingId` has no ISRC
- `AllResourceFileExist` crashed on every ERN 4.x message: it now checks the `File/URI` of every 4.x resource type (editions and clips included), relative to the root folder, and skips remote URIs. On ERN 3.x it now checks the files of every resource type too (Video, Text, MIDI, SheetMusic, Software, UserDefinedResource), not only SoundRecordings and Images (#57)
- `AllSoundRecordingsHaveIsrc` crashed on ERN 4.3.2: it now finds the ISRC in the editions of any 4.3+ version, and checks every edition, not only the first (#57)
- `AllResourcesUsedInReleases` reported false warnings with an empty list on ERN 4.x: the comparison no longer depends on order, and resources linked from a `ResourceGroupContentItem` count as used. Every resource type is now checked, in ERN 3.x and 4.x alike, not only SoundRecordings and Images (#57)
- `AllReleasesUsedInDeals` crashed on a message without `DealList` (optional in every version): it now reports every release as not used in deals (#57)
- Every rule crashed on a `PurgeReleaseMessage`: rules now pass on purge messages, which have nothing to check (#57)
- `AtLeastOneImage` said "Must have at least one SoundRecording" instead of "Must have at least one Image" (#57)
- Rule messages no longer keep the details of a previous validation when a rule object validates several messages (#57)

## [2.5.0]
### Added
- ERN 4.3.2 support (`Ern432` entities, namespace `http://ddex.net/xml/ern/432`), added to `ErnParserController::SUPPORTED_VERSIONS`
- `xsd/release_notification/432/` schema (derived from 4.3.1 with the single 4.3.2 corrective change) and `tests/Ern432` with a sample exercising the fix
### Changed
- `Brand/BrandId` is now typed as `ProprietaryId` (string value + required `@Namespace`) on ERN 4.3.2, instead of the empty `ProprietaryIdentifier` type of 4.3.1; the unused `ProprietaryIdentifier` type was removed
- `config/xsd2php.yaml` now targets 4.3.2 (see `CONTRIBUTE.md`)

## [2.4.1] - 2026-10-16
### Changed
- Test suite reorganised so each ERN version has its own folder under `tests/` (`Ern382`, `Ern411`, `Ern42`, `Ern43`, `Ern431`), each holding its own samples and `ParserTest`/`RulesTest`/`SimplifiersTest`
- Version-agnostic tests moved to `tests/Common` (parser error handling, tag cleaning, default rule versions, version comparison helpers)
- Test sample files renamed to drop their numeric prefixes; the `with_assets` fixture folders renamed to describe their scenario (`complete_wav`, `missing_audio`, `image_wrong_ext`, `complete_flac`)

## [2.4.0]

### Added
- ERN 4.3.1 support (`Ern431` entities generated from the official DDEX XSD, namespace `http://ddex.net/xml/ern/431`, AVS v12)
- `config/xsd2php.yaml` used to generate entity classes
- Test samples 030 to 033 for ERN 4.3.1
### Changed
- `SimpleAlbum::getGenre()`/`getSubGenre()` read `DisplayGenre` on ERN 4.3.1 (`Genre` before)
- Contributor roles are read from `Role/Value` on ERN 4.3.1 (Role became a composite)
- `SimpleEntity::buildPartyIndex()` supports the PartyList composite of ERN 4.3.1 (Party + Brand)
- `AllSoundRecordingsHaveIsrc` and default `Rule` supported versions include 4.3.1
- Rules apply by default to every version listed in the new `ErnParserController::SUPPORTED_VERSIONS` constant, so they now also run on ERN 4.2
- ERN version comparison in simplifiers no longer relies on a hard-coded version list
### Fixed
- `AllReleasesUsedInDeals` failed when deals list releases in a different order than the ReleaseList, and crashed on ERN 4.1 and 4.1.1 (DealList is an array there)

## [2.3.1] - 2026-10-15
### Fixed
- ERN 4.1 and 4.1.1 deals not attached to the album and tracks, so every release was reported as a takedown (#46)
- ERN 3.8.2 `SimpleAlbum` crash (TypeError) when the message has no TrackRelease (#45)
- ERN 3.8.2 `SimpleAlbum` "Undefined array key" warning when no deal references the album; the album is now treated as a takedown (#45)
- `xml_parser_free()` deprecation warning on PHP 8.5; it is now only called on PHP < 8.0
### Changed
- `ext-xml` is now an explicit requirement in `composer.json`
### Added
- `DDEX_CHANGELOG.md` documenting changes between DDEX ERN versions

## [2.3.0] - 2026-09-18
### Changed
- Bump minimum PHP version to 7.4 for runtime (was 7.2, never actually worked below 7.4)
- Dev tooling now requires PHP 8.1+ (phpunit/phpunit ^10.5)
### Fixed
- ParserControllerErrorsTest class name mismatch (tests were silently not running)
### Added
- CI matrix testing PHP 8.1-8.4 with prefer-lowest/prefer-stable
