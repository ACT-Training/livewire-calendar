<?php

namespace ACTTraining\LivewireCalendar;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ACTTraining\LivewireCalendar\Commands\LivewireCalendarCommand;

class LivewireCalendarServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('livewire-calendar')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_livewire-calendar_table')
            ->hasCommand(LivewireCalendarCommand::class);
    }
}
