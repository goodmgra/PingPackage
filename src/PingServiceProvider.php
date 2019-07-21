<?php

namespace Airranged\PingPackage;

use Illuminate\Support\ServiceProvider;
use Airranged\PingPackage\Ping;

class PingServiceProvider extends ServiceProvider
{
    /**
       * Indicates if loading of the provider is deferred.
       *
       * @var bool
       */
    protected $defer = true;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('airranged.ping', function () {
            return new Ping();
        });

        $this->app->alias('airranged.ping', Ping::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['ping'];
    }
}
