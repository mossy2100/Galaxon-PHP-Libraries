# {TraitName}

{Brief one-line description of the trait.}

## Overview

{Detailed description of the trait's purpose, design philosophy, and what functionality it provides. Explain why the trait exists, what problem it solves, and how it fits into the larger design. This can be multiple paragraphs.}

The trait provides:
- `{method1}()` - {Brief description}
- `{method2}()` - {Brief description}
{...continue for all methods...}

## Abstract Methods

{Optional section - include if the trait defines abstract methods that must be implemented.}

### {methodName}()

```php
abstract public function {methodName}({parameters}): {returnType}
```

**You must implement this method.** {Description of what the method should do.}

**Parameters:**
- `${paramName}` ({type}) - {Description of the parameter}
{...continue for all parameters...}

**Returns:**
- `{returnType}` - {Description of return value}

**Implementation Guidelines:**
- {Bullet points with guidance for implementing this method}

{Repeat the ### {methodName}() section for each abstract method}

## Concrete Methods

{Optional section - include if the trait provides concrete method implementations.}

### {methodName}()

```php
public function {methodName}({parameters}): {returnType}
```

{Description of what the method does and how it works.}

**Parameters:**
- `${paramName}` ({type}) - {Description of the parameter}
{...continue for all parameters...}

**Returns:**
- `{returnType}` - {Description of return value}

{Optional sections as needed:}

**Throws:**
- `{ExceptionType}` - {When this exception is thrown}

**Behavior:**
- {Bullet points describing specific behaviors}

{Repeat the ### {methodName}() section for each concrete method}

## Examples

### {Example Title}

```php
use Galaxon\{Package}\{Namespace}\{TraitName};

class {ExampleClass}
{
    use {TraitName};

    {Example implementation code}
}

{Example usage code with var_dump() outputs as comments}
```

{Brief explanation of what the example demonstrates}

### {Another Example Title}

{Continue with more examples as needed}

## Relationship with Other Traits

{Explain how this trait relates to other traits in the hierarchy. Include information about:
- Which traits this trait extends/uses
- Which traits extend this trait
- When to use this trait vs related traits}

See [{RelatedTrait}.md]({RelatedTrait}.md) for {description}.

## Classes Using {TraitName}

- `Galaxon\{Package}\{ClassName}` - {Brief description of how/why this class uses the trait}
{...continue for all classes using this trait...}

## Best Practices

1. **{Practice Title}**: {Description of the best practice}
2. **{Practice Title}**: {Description of the best practice}
{...continue with numbered best practices...}

## Common Patterns

{Optional section - include if there are recurring implementation patterns}

### {Pattern Name}

```php
{Code showing the common pattern}
```

{Brief explanation of when to use this pattern}

## Common Pitfalls

{Optional section - include if there are common mistakes to avoid}

1. **{Pitfall Title}**: {Description of what to avoid and why}
{...continue with numbered pitfalls...}
