<?php

namespace App\Providers;

use App\Models\Employee;
use App\Models\Fournisseur;
use App\Models\Appointment;
use App\Models\Consultation;
use App\Models\Patient;
use App\Models\Stock;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        View::composer(["admin.layouts.menu"], function ($view) {
            $view->with("Patient_count", Patient::count());
            $view->with("Employee_count", Employee::count());
            $view->with("Fournisseur_count", Fournisseur::count());
            $view->with("Stock_count", Stock::count());
            $view->with("Appointment_count", Appointment::count());
            $view->with("ConsultationCount", Consultation::count());
        });
    }
}
