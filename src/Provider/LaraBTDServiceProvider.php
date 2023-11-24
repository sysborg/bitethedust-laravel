<?php
namespace sysborg\LaraBTD\Provider;

use Illuminate\Support\ServiceProvider;
use sysborg\btd;

class LaraBTDServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('larabtd', function ($app) {
            return new btd();
        });
    }
}