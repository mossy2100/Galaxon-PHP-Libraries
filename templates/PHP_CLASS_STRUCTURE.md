# PHP Class Structure Template

This template defines the standard region organization for PHP classes in Galaxon packages.

## Region Order

Use the following regions in this order. Include only the regions that apply to your class.

```php
<?php

declare(strict_types=1);

namespace Galaxon\{Package};

use {ImportedClasses};

/**
 * {Class description.}
 */
class {ClassName}
{
    use {TraitName};

    // region Constants

    public const {TYPE} {CONSTANT_NAME} = {value};

    // endregion

    // region Properties

    /**
     * {Property description.}
     */
    public {type} ${propertyName};

    // endregion

    // region Property hooks

    /**
     * {Computed property description.}
     */
    public {type} ${propertyName} {
        get {
            return {expression};
        }
    }

    // endregion

    // region Constructor

    /**
     * Constructor.
     */
    public function __construct({parameters})
    {
        // ...
    }

    // endregion

    // region Factory methods

    /**
     * {Factory method description.}
     */
    public static function {methodName}({parameters}): self
    {
        // ...
    }

    // endregion

    // region Modification methods

    // Methods that change the object's state (add, remove, set, clear, etc.)
    // Return $this for chaining or void

    // endregion

    // region Inspection methods

    // Methods that return information about the object (non-mutating)
    // Typically return bool, int, or scalar values
    // Examples: empty(), count(), contains(), keyExists()

    // endregion

    // region Comparison methods

    // Methods that compare with other objects
    // Return bool or int (-1, 0, 1)
    // Examples: equal(), compare(), lessThan(), greaterThan()

    // endregion

    // region Arithmetic methods

    // Mathematical operations (for math-related classes)
    // Examples: add(), sub(), mul(), div(), neg(), abs(), pow()

    // endregion

    // region Transformation methods

    // Methods that return new instances with transformed data
    // Examples: filter(), map(), sort(), reverse(), flip()

    // endregion

    // region Aggregation methods

    // Methods that reduce a collection to a single value
    // Examples: sum(), product(), average(), min(), max(), reduce()

    // endregion

    // region Sorting methods

    // Methods specifically for sorting
    // Examples: sort(), sortByKey(), sortByValue()

    // endregion

    // region Formatting methods

    // Methods for formatting output
    // Examples: format(), formatAs{Type}()

    // endregion

    // region Interface implementations

    // Group by interface, each with its own sub-region if needed

    // region ArrayAccess implementation

    public function offsetExists(mixed $offset): bool { }
    public function offsetGet(mixed $offset): mixed { }
    public function offsetSet(mixed $offset, mixed $value): void { }
    public function offsetUnset(mixed $offset): void { }

    // endregion

    // region Countable implementation

    public function count(): int { }

    // endregion

    // region IteratorAggregate implementation

    public function getIterator(): Traversable { }

    // endregion

    // region Stringable implementation

    public function __toString(): string { }

    // endregion

    // endregion

    // region Conversion methods

    // Methods that convert to other types
    // Examples: toArray(), toFloat(), toInt(), toSequence(), toDictionary()
    // Note: __toString() goes in Stringable implementation, not here

    // endregion

    // region Helper methods

    // Internal helper methods (private or protected)
    // Can subdivide if needed:
    // - Private instance methods
    // - Private static methods

    // endregion
}
```

## Standard Region Names

Use these exact region names for consistency across all packages:

### Structure Regions
| Region           | Use For |
|------------------|---------|
| `Constants`      | Class constants |
| `Properties`     | Instance and static properties |
| `Property hooks` | Properties with get/set hooks (PHP 8.4+) |

### Constructor & Factory Regions
| Region | Use For |
|--------|---------|
| `Constructor` | The `__construct()` method only |
| `Factory methods` | Static methods that create instances (`fromX()`, `parse()`, `create()`, etc.) |

### Public Method Regions
| Region                             | Use For                                | Typical Returns           |
|------------------------------------|----------------------------------------|---------------------------|
| `Modification methods`             | Change object state                    | `$this`, `static`, `void` |
| `Inspection methods`               | Query object state (non-mutating)      | `bool`, `int`, scalar     |
| `Validation methods`               | Check if argument is valid (may throw) | `bool`, `void`            |
| `Comparison methods`<sup>1</sup>   | Compare with other objects             | `bool`, `int`             |
| `Extraction methods`               | Extract information from the object    | varies                    |
| `Transformation methods`           | Create new instances with changes      | `self`, `static`          |
| `Aggregation methods` <sup>2</sup> | Reduce to single value                 | scalar, object            |
| `Sorting methods`                  | Reorder elements                       | `$this`, `static`         |
| `Formatting methods`               | Format for display                     | `string`                  |
| `Conversion methods` <sup>3</sup>  | Convert to other types                 | varies                    |

<sup>1</sup> Includes `equal()`, `compare()`, `lessThan()`, `greaterThan()`, etc. from the traits `Equatable`, `Comparable`, `ApproxEquatable`, and `ApproxComparable`, plus possible others (e.g. `subset()`).

<sup>2</sup> Should include `count()` from the `Countable` interface, if implemented.

<sup>3</sup> Should include `__toString()` from the `Stringable` interface, if implemented.

#### Mathematical methods

Additional regions for mathematical classes.

| Region                  | Use For                  | Typical Returns           |
|-------------------------|--------------------------|---------------------------|
| `Arithmetic methods`    | Math operations          | `self`, `static`, numeric |
| `Trigonometric methods` | Trigonometric operations | numeric                   |
| `Hyperbolic methods`    | Hyperbolic operations    | numeric                   |
| `Random methods`        | Random operations        | numeric                   |

### Overrides Regions

This includes abstract method implementations and overrides from:
- the parent class
- traits

This excludes, however, methods from the `Equatable` and `Comparable` (etc.) traits, which are bundled as `Comparison methods`.

| Region                      | Trait/Base class |
|-----------------------------|------------------|
| `Parent class methods`      | varies           |
| `{TraitName} trait methods` | varies           |

### Interface Implementation Regions

Some common ones:

| Region                             | Interface           |
|------------------------------------|---------------------|
| `Countable implementation`         | `Countable`         |
| `ArrayAccess implementation`       | `ArrayAccess`       |
| `IteratorAggregate implementation` | `IteratorAggregate` |
| `JsonSerializable implementation`  | `JsonSerializable`  |

### Helper Region
| Region | Use For |
|--------|---------|
| `Helper methods` | Internal implementation details |

This group may be broken down into `Static` and `Instance` helper methods.

## Guidelines

### When to Use Regions

- **Always use regions** for classes with more than ~5 methods
- **Skip regions** for very small classes (e.g., simple DTOs, value objects with only properties and constructor)

### Region Naming

- Use **lowercase** for the first word after "region" (e.g., `// region Factory methods`)
- Use **singular** for implementation regions (e.g., `ArrayAccess implementation`, not `ArrayAccess implementations`)
- Be **consistent** - if one class uses `Arithmetic methods`, don't use `Arithmetic operations` in another

### Avoiding Redundant Regions

Don't create regions like:
- `// region Methods` (too vague)
- `// region Public methods` (visibility isn't a useful grouping)
- `// region Getters and setters` (use Properties with hooks instead, or Inspection methods)
