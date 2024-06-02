<?php

namespace App\Providers;

use App\Models\BusinessHour;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class BusinessHourServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('landing.layouts.Footer', function ($view) {
            $businessHours = BusinessHour::all();
            $view->with('businessHours', $businessHours);
        });
    }
}
