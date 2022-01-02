<?php

namespace Quadrogod\Abc\Cms;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Регистрация любых служб приложения.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Загрузка любых служб приложения.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'abc');
        //
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/abc.php' => config_path('abc.php'),
                __DIR__ . '/../resources/views' => resource_path('views/vendor/abc'),
            ]);
        }
    }
}
