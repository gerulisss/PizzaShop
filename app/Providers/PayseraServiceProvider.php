<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Paysera;

class PayseraServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Paysera::class, function () {
            return new Paysera ();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
