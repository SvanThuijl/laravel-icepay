<?php

namespace Svanthuijl\Icepay\Providers;

use Illuminate\Support\ServiceProvider;
use Svanthuijl\Icepay\Services\IcepayService;

class IcepayServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(IcepayService::class, function ($app) {
            return new IcepayService();
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/services.php' => config_path('services.php'),
        ]);
    }
}
