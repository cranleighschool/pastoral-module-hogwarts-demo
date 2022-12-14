<?php

namespace FredBradley\HogwartsDemo;

use FredBradley\HogwartsDemo\Commands\HogwartsDemoCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class HogwartsDemoServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('pastoral-module-hogwarts-demo')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_pastoral-module-hogwarts-demo_table')
            ->hasCommand(HogwartsDemoCommand::class);
    }
}
