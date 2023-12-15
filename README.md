# A Livewire wrapper for FullCalendar.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/act-training/livewire-calendar.svg?style=flat-square)](https://packagist.org/packages/act-training/livewire-calendar)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/act-training/livewire-calendar/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/act-training/livewire-calendar/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/act-training/livewire-calendar/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/act-training/livewire-calendar/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/act-training/livewire-calendar.svg?style=flat-square)](https://packagist.org/packages/act-training/livewire-calendar)

Livewire Calendar is an easy way to make use of [FullCalendar](https://fullcalendar.io/) in your Laravel applications.

## Installation

You can install the package via composer:

```bash
composer require act-training/livewire-calendar
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="livewire-calendar-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="livewire-calendar-views"
```

## Usage

```php
$livewireCalendar = new ACTTraining\LivewireCalendar();
echo $livewireCalendar->echoPhrase('Hello, ACTTraining!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Simon Barrett](https://github.com/SimonBarrettACT)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
