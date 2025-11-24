# Galaxon PHP Libraries

A collection of PHP packages that extend the capabilities of PHP with useful utilities and value types.

## Packages

- **CodingStandard** - PHPCS rules for consistent code style across all packages. PSR-12 plus custom rules.
- **Core** - Foundational toolbox with classes for Angles, Floats, Integers, Types, and more.
- **Collections** - Collection classes for typed Sequence, Dictionary, and Set.
- **Color** - Color manipulation and conversion.
- **Math** - Mathematical value types Complex and Rational.

## Dependencies

```
CodingStandard (base - no dependencies)
       ↓
     Core (depends on CodingStandard)
       ↓
Collections, Color, Math (depend on Core and CodingStandard)
```

## Coding rules

- Follow PSR-12 coding standard first, Laravel second.
- Use lowerCamelCase for local variables, function parameters, properties, and methods.
- Include professional and clear PHPDoc comments.
- Comments should end with a period, question mark, exclamation mark or colon.

## Composer scripts

Core, Collections, Color, and Math all have the same composer scripts:

| Command | Description |
|---------|-------------|
| `composer fix` | Auto-fix coding style issues (PHPCBF) |
| `composer check` | Check coding style (PHPCS) |
| `composer analyse` | Run static analysis (PHPStan level 9) |
| `composer test` | Run tests with coverage (PHPUnit) |
| `composer coverage` | Check coverage meets threshold |
| `composer quality` | Run all of the above in sequence |

Run from within each package directory:

```bash
cd Core
composer test
composer analyse
```
