<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Models\Settings;

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
        $get_settings = Settings::get()->toArray();
        $settings = [];
        foreach ($get_settings as $key => $value) {
            $settings[$value["variable"]] = $value["value"];
        }
        View::share( 'settings', $settings );
    }
}
