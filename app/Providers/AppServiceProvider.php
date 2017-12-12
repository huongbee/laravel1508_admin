<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\FoodType;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $loaiSP = FoodType::all();
        View::share(['loaiSP'=>$loaiSP]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
