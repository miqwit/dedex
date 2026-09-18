## [2.3.0] - 2026-09-18
### Changed
- Bump minimum PHP version to 7.4 for runtime (was 7.2, never actually worked below 7.4)
- Dev tooling now requires PHP 8.1+ (phpunit/phpunit ^10.5)
### Fixed
- ParserControllerErrorsTest class name mismatch (tests were silently not running)
### Added
- CI matrix testing PHP 8.1-8.4 with prefer-lowest/prefer-stable
