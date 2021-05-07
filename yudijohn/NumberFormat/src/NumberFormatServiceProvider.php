<?php

namespace yudijohn\NumberFormat;

use Illuminate\Support\ServiceProvider;

class NumberFormatServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__ . '/helpers/helpers.php';
    }
}