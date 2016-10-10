<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MailServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Mail\MailContract',
<<<<<<< HEAD
        'App\Repositories\Mail\EloquentMailRepository');
=======
            'App\Repositories\Mail\EloquentMailRepository');
>>>>>>> 26797666d5230ed16e610fe330d2e487ed423617
    }
}
