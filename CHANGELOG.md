## [Unreleased]
### Added
- ERN 4.3.1 support (`Ern431` entities generated from the official DDEX XSD, namespace `http://ddex.net/xml/ern/431`, AVS v12)
- `config/xsd2php.yaml` used to generate entity classes
- Test samples 030 to 033 for ERN 4.3.1
### Changed
- `SimpleAlbum::getGenre()`/`getSubGenre()` read `DisplayGenre` on ERN 4.3.1 (`Genre` before)
- Contributor roles are read from `Role/Value` on ERN 4.3.1 (Role became a composite)
- `SimpleEntity::buildPartyIndex()` supports the PartyList composite of ERN 4.3.1 (Party + Brand)
- `AllSoundRecordingsHaveIsrc` and default `Rule` supported versions include 4.3.1

## [2.3.0] - 2026-09-18
### Changed
- Bump minimum PHP version to 7.4 for runtime (was 7.2, never actually worked below 7.4)
- Dev tooling now requires PHP 8.1+ (phpunit/phpunit ^10.5)
### Fixed
- ParserControllerErrorsTest class name mismatch (tests were silently not running)
### Added
- CI matrix testing PHP 8.1-8.4 with prefer-lowest/prefer-stable
