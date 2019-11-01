<?php

namespace App\Providers;

use App\Http\repositories\AlcoholBottlesRepositories;
use App\Http\repositories\eloquent\AlcoholBottlesEloquent;
use App\Http\services\AlcoholBottlesServiceInterface;
use App\Http\services\implement\AlcoholBottlesService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->singleton(AlcoholBottlesServiceInterface::class,AlcoholBottlesService::class);
       $this->app->singleton(AlcoholBottlesRepositories::class,AlcoholBottlesEloquent::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
