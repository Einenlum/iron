# Iron

[![CircleCI](https://circleci.com/gh/Einenlum/iron.svg?style=svg)](https://circleci.com/gh/Einenlum/iron)
[![Latest Stable Version](https://poser.pugx.org/einenlum/iron/v/stable)](https://packagist.org/packages/einenlum/iron)
[![Latest Unstable Version](https://poser.pugx.org/einenlum/iron/v/unstable)](https://packagist.org/packages/einenlum/iron)

A Carbon-like tool done the right way.

## Install

`composer require einenlum/iron:dev-master`

## Usage

```php
<?php
use Iron\Iron;

// Can be constructed with a \DateTime or \DateTimeImmutable object
$iron = Iron::from(new \DateTimeImmutable());

// A \DateTimeImmutable object, two days later
$later = $iron->addDays(2)->toDateTimeImmutable();
```

## Available methods

- [toDateTime](doc/methods.md#todatetime)
- [toDateTimeImmutable](doc/methods.md#todatetimeimmutable)
- [toDateTimeMutable](doc/methods.md#todatetimemutable)

And every method (and getter) available in [Carbon](https://github.com/briannesbitt/Carbon) on the `CarbonImmutable` objects.

## Why?

[Carbon](https://github.com/briannesbitt/Carbon) is a really useful tool. I'm just not really happy with the implementation they chose. Extending the native `\DateTime` class seems dangerous ([here is some documentation](https://github.com/getify/You-Dont-Know-JS/blob/master/types%20%26%20grammar/apA.md#native-prototypes) about this problem in JS, but it works for PHP too). We should not extend the behavior of code we don't own. Also, being able to pass a `Carbon` object to a method waiting for a native `\DateTime` object, seems wrong to me.

Here we use `Iron` to manipulate data in a fluent API using an `\ImmutableDateTime` object under the hood and we finally return a native PHP `\DateTimeImmutable` (or `\DateTime`) object.

**For now it just wraps carbon calls and getters. Next step will be for sure to implement here all the methods we need to get rid of Carbon in the end.**

## Tests

This project is tested thanks to PHPSpec and PHPUnit. To run the tests:

`composer test`

## CS Fixing

Coding Standards are checked and fixed thanks to PHP-CS-Fixer. To fix your code, just run `composer cs-fix`.

## Contributing

Please, feel free to contribute and improve this project.

## License

MIT.
