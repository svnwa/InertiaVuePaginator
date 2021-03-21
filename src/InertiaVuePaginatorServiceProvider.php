<?php

namespace Svnwa\InertiaVuePaginator;

use Illuminate\Support\ServiceProvider;

class InertiaVuePaginatorServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/inertiavuepaginator.php', 'inertiavuepaginator');

        // Register the service the package provides.
        $this->app->singleton('inertiavuepaginator', function ($app) {
            return new InertiaVuePaginator;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['inertiavuepaginator'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/inertiavuepaginator.php' => config_path('inertiavuepaginator.php'),
        ], 'inertiavuepaginator.config');

        $this->publishes([
            __DIR__.'/../Components' => resource_path('js/Components'),
        ], 'inertiavuepaginator');

    }
}
