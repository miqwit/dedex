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
