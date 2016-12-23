<?php

namespace Lari\Shopalike;

use Illuminate\Support\ServiceProvider;

class ShopalikeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // load migrations
        $this->loadMigrationsFrom(__DIR__.'/../migrations');
        // load views
        $this->loadViewsFrom(__DIR__.'/../views', 'shopalike');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
