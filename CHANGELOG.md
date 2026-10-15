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
