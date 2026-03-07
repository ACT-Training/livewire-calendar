# Changelog

All notable changes to `livewire-calendar` will be documented in this file.

## Livewire 4 Modernisation - 2026-03-07

### Breaking Changes

- Renamed abstract method `getEventsProperty()` to `events()` — consuming apps must update their override (#7)
- Blade view now calls `$this->events()` as a method instead of accessing it as a computed property

### Changes

- Upgraded dev dependencies to Laravel 11 / Pest 3 / PHPStan 2
- Simplified CI test matrix (PHP 8.2–8.4, Ubuntu only)
- Fixed PHPStan workflow and config for PHPStan 2

#### Migration

In your class that extends `LivewireCalendar`, rename:

```php
// Before
public function getEventsProperty(): array

// After
public function events(): array

```
## Initial Release - 2023-12-16

**Full Changelog**: https://github.com/ACT-Training/livewire-calendar/commits/0.1.0
