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
            $config = [
            'projectid'     => 161878,
            'sign_password' => '05d0a348b55f087fd24e61004a977853',
            'accepturl'     => route('accept'),
            'cancelurl'     => route('cancel'),
            'callbackurl'   => route('callback'),
            ];

            return new Paysera($config);
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
