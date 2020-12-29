<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\Alert;
use Illuminate\Support\Facades\Auth;
use App\Services\Auth\JwtGuard;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component(Alert::class, 'package-alert');


        Auth::extend('jwt', function ($app, $name, array $config) {
            // 返回一个 Illuminate\Contracts\Auth\Guard 实例...

            return new JwtGuard(Auth::createUserProvider($config['provider']));
        });

    }
}
