<?php

namespace Humayunjavaid\Lift;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Humayunjavaid\Lift\Commands\LiftCommand;

class LiftServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('liftup')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_liftup_table')
            ->hasCommand(LiftCommand::class);
    }
}
