<?php

use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\ConsultationController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\FournisseurController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\PdfController;
use App\Http\Controllers\Admin\StockController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing.index');
});

Route::middleware("admin")->prefix("admin")->name("admin.")->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('patient', PatientController::class);
    Route::resource('employee', EmployeeController::class);
    Route::resource('fournisseur', FournisseurController::class);
    Route::resource('stock', StockController::class);
    Route::resource('appointments', AppointmentController::class)->except("store");
    Route::resource('consultation', ConsultationController::class);
    Route::controller(PdfController::class)->name("pdf.")->group(function(){
        Route::get('/pdf', 'test')->name('test');
    });
});
// Route::post('appointments.stote', [AppointmentController::class, 'store'])->name("Appointment.store");

Route::controller(HomeController::class)->group(function () {
    Route::post('AddAppointement', 'AddAppointement')->name("AddAppointement");
});


Route::get('/admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'authenticate'])->name('admin.authenticate');
