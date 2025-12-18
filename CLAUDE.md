# Galaxon PHP Libraries

A collection of PHP packages that extend the capabilities of PHP with useful utilities and value types.

## Packages

- **CodingStandard** - PHPCS rules for consistent code style across all packages. PSR-12 plus custom rules.
- **Core** - Foundational toolbox with classes for Angles, Floats, Integers, Types, and more.
- **Collections** - Collection classes for typed Sequence, Dictionary, and Set.
- **Color** - Color manipulation and conversion.
- **Math** - Mathematical value types Complex and Rational.
- **Units** - Several measurement types with unit conversion.

## Dependencies

```
CodingStandard (base - no dependencies)
       ↓
     Core (no runtime dependencies)
       ↓
     ┌─┴───────┐
     ↓         ↓
Collections   Units
              ↓
           ┌──┴──┐
           ↓     ↓
         Math  Color
```

Note: CodingStandard is used by all packages in `require-dev`, but not as a runtime dependency.

## Coding rules

- ALWAYS CHECK WITH ME before editing files! I like to discuss changes and have a plan first.
- Follow PSR-12 coding standard first, Laravel second.
- Use lowerCamelCase for local variables, function parameters, properties, and methods.
- Use single quotes for strings unless they contain a single quote or require the specific features of double-quoted strings.
- Include professional and clear PHPDoc comments.
- Comments should end with a period, question mark, exclamation mark or colon, except for region or other headings.

## Checklist for pushing to GitHub

1. Review changes by comparing current files with the main branch.
2. Check tests have been added or updated to cover new functionality. (check with me before editing files)
3. Make sure the markdown file for the class and README.md are up to date. (check with me)
4. Do we need a new version?
   1. Compare the changes with the CHANGELOG.
   2. Consider if we need a new release number, and ask about this.
   3. If so:
      1. Update the CHANGELOG.md with a new version number and details. (review with me)
      2. Tag the release with the new version number.
5. Commit changes and push to GitHub.

## Composer and code quality tools configuration

Core, Collections, Color, Math, and Units - essentially all packages other than CodingStandard - should have
basically the same configuration for composer, phpcs, phpstan, and phpunit.

The composer scripts should include:

| Command | Description |
|---------|-------------|
| `composer fix` | Auto-fix coding style issues (PHPCBF) |
| `composer check` | Check coding style (PHPCS) |
| `composer analyze` | Run static analysis (PHPStan level 9) |
| `composer test` | Run tests with coverage (PHPUnit) |
| `composer coverage` | Check coverage meets threshold |
| `composer quality` | Run all of the above in sequence |

Run from within each package directory:

```bash
cd Core
composer test
composer analyze
```
