# IDEAS

## Date

A Date class could allow for easy date manipulation, including:
- Date::today()
- Date::tomorrow()
- Date::yesterday()
- Date::add()
- Date::sub()
- Date::diff()
- startOfWeek()
- year()
- month()
- day()
- dayOfWeek()
- week()
- startOfWeek()
- endOfWeek()
- startOfMonth()
- endOfMonth()
- startOfYear()
- endOfYear()
- Operator - (Date - Date or Date - int days)
- Operator + (Date + int days)
- Operator ==, ===, !=, !==
- Operator <, >, <=, >=
- toJulianDayNumber()
- fromJulianDayNumber()
- toRataDie()
- fromRateDie()
- toUnixDayNumber()
- fromUnixDayNumber()
- age()
- toDateTime()
- fromDateTime()
- hasLeapSecond()
- parse()
- format()
- __toString()

Not sure of usefulness though.

Where would it go? It would need its own package, I think. "Time".

Add a DayOfWeek enum:
```php
enum DayOfWeek: int
{
    case Monday = 1;
    case Tuesday = 2;
    case Wednesday = 3;
    case Thursday = 4;
    case Friday = 5;
    case Saturday = 6;
    case Sunday = 7;
}
```
Could add a method to get the day of the week in any language, leveraging PHP's built-in localisation functions.
Months, too.
