# {ClassName}

{Brief one-line description of the class.}

## Overview

{Detailed description of the class's purpose, design philosophy, and what functionality it provides. Explain why the class exists, what problem it solves, and how it fits into the package. This can be multiple paragraphs.}

{Optional - If the class has key features, list them as a bullet list:}

### Key features

- {Feature 1}
- {Feature 2}
- {...continue for all key features...}

{Optional - Note about immutability or other design decisions:}

All {modification methods / operations} return new instances, maintaining immutability.

## Properties

{Optional section - include if the class has public or protected-set properties.}

### {propertyName}

```php
{visibility} {type} ${propertyName}
```

{Description of what the property represents and how it's used.}

{Optional - Additional details about access, caching, or special behavior.}

{Repeat the ### {propertyName} section for each property}

## Constants

{Optional section - include if the class has public constants.}

### {CONSTANT_NAME}

```php
public const {type} {CONSTANT_NAME} = {value};
```

{Description of what the constant represents and when to use it.}

{Repeat the ### {CONSTANT_NAME} section for each constant}

## Constructor

### __construct()

```php
public function __construct({parameters})
```

{Description of what the constructor does.}

**Parameters:**
- `${paramName}` ({type}) - {Description of the parameter} (default: {defaultValue})
{...continue for all parameters...}

**Throws:**
- `{ExceptionType}` - {When this exception is thrown}
{...continue for all exceptions...}

**Examples:**
```php
// {Example description}
${varName} = new {ClassName}({args});

// {Another example description}
${varName} = new {ClassName}({args});
```

## Factory Methods

{Optional section - include if the class has static factory methods.}

### {methodName}()

```php
public static function {methodName}({parameters}): self
```

{Description of what the factory method does.}

**Parameters:**
- `${paramName}` ({type}) - {Description of the parameter}
{...continue for all parameters...}

**Returns:**
- `self` - {Description of what is returned}

**Throws:**
- `{ExceptionType}` - {When this exception is thrown}

**Examples:**
```php
// {Example description}
${varName} = {ClassName}::{methodName}({args});
```

{Repeat the ### {methodName}() section for each factory method}

## {Category} Methods

{Group related methods under descriptive H2 headings such as:
- Inspection Methods
- Comparison Methods
- Arithmetic Operations
- Transformation Methods
- Aggregation Methods
- etc.}

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

**Throws:**
- `{ExceptionType}` - {When this exception is thrown}

**Behavior:**
{Optional - Include if there are specific behaviors to document:}
- {Bullet points describing specific behaviors, edge cases, or special handling}

**Examples:**
```php
// {Example description}
${varName} = ${instance}->{methodName}({args});
{output/result as comment if helpful}

// {Another example description}
${varName} = ${instance}->{methodName}({args});
```

{Repeat the ### {methodName}() section for each method in this category}

{Repeat the ## {Category} Methods section for each logical grouping}

## Conversion Methods

{Include if the class has methods for converting to other types.}

### __toString()

```php
public function __toString(): string
```

{Description of the string format.}

**Format:**
- {Description of format, e.g., "Real numbers: \"5\", \"-3.14\""}
- {Continue for all format variations}

**Examples:**
```php
echo new {ClassName}({args}); // "{expected output}"
echo new {ClassName}({args}); // "{expected output}"
```

### toArray()

```php
public function toArray(): array
```

{Description of what array format is returned.}

**Returns:**
- `array` - {Description of array structure}

**Example:**
```php
${varName} = new {ClassName}({args});
$array = ${varName}->toArray();
// {Result description}
```

{Include other to{Type}() methods as needed: toDictionary(), toSequence(), etc.}

## Interface Implementations

{Optional section - include if the class implements notable interfaces like ArrayAccess, Countable, etc.}

### ArrayAccess

{Description of how array-style access works:}

```php
${varName} = new {ClassName}({args});

// {Access description}
${varName}[{key}] = {value};
echo ${varName}[{key}];

// {Check existence}
var_dump(isset(${varName}[{key}]));

// {Unset behavior}
unset(${varName}[{key}]);
```

{Note any special behaviors or restrictions}

### Iteration

{Description of how foreach iteration works:}

```php
${varName} = new {ClassName}({args});

foreach (${varName} as {$value or $key => $value}) {
    // {Description of what is iterated}
}
```

## Usage Examples

{Practical examples showing how to use the class in real scenarios.}

### {Example Title}

```php
use Galaxon\{Package}\{ClassName};

// {Description of what this example demonstrates}
{Example code with comments explaining key steps}
```

{Brief explanation of what the example demonstrates and key takeaways.}

### {Another Example Title}

```php
{More example code}
```

{Continue with more examples as needed. Good examples include:
- Basic usage
- Common operations
- Integration with other classes
- Error handling
- Performance considerations}

## See Also

{Optional section - include links to related documentation.}

- **[{RelatedClass}]({RelatedClass}.md)** - {Brief description of relationship}
- **[{RelatedTrait}](Traits/{RelatedTrait}.md)** - {Brief description of relationship}
- **{External concept or documentation}** - {Brief description}
