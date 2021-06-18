<?php

namespace App\Providers;

use App\Buy\InterfaceTypeClass;
use App\Buy\PayPal_pay;
use App\Buy\ZarinPal_pay;
use App\View\DataAll;
use App\View\DataView;
use Illuminate\Support\Facades\Schema;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        (new DataAll())->Data();
        $this->app->bind(InterfaceTypeClass::class , function (){
            return new ZarinPal_pay();
        });
    }
}
