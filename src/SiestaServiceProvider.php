<?php

namespace Castlebranch\Siesta;

use Illuminate\Support\ServiceProvider;

/**
 * Class SiestaServiceProvider
 *
 * @package Castlebranch\Siesta
 */
class SiestaServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->bind(\Castlebranch\Siesta\Controller::class);
    }

    public function boot()
    {

    }

    /**
     * Register the ApiScribe
     */
    private function registerApiScribe()
    {
        $this->app->singleton('command.castlebranch.scribe.api', function ($app) {
            return $app['Castlebranch\Roboscribe\Commands\ApiScribe'];
        });

        $this->commands('command.castlebranch.scribe.api');
    }

    /**
     * Register the CoverageScribe
     */
    private function registerCoverageScribe()
    {
        $this->app->singleton('command.castlebranch.scribe.coverage', function ($app) {
            return $app['Castlebranch\Roboscribe\Commands\CoverageScribe'];
        });

        $this->commands('command.castlebranch.scribe.coverage');
    }

    /**
     * Register the FrameworkScribe
     */
    private function registerFrameworkScribe()
    {
        $this->app->singleton('command.castlebranch.scribe.framework', function ($app) {
            return $app['Castlebranch\Roboscribe\Commands\FrameworkScribe'];
        });

        $this->commands('command.castlebranch.scribe.framework');

    }
}
