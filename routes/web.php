<?php

use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\BusinessHourController;
use App\Http\Controllers\Admin\ConsultationController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\FournisseurController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\PdfController;
use App\Http\Controllers\Admin\StockController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Mail\MailController;
use App\Models\BusinessHour;
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
    $businessHours = BusinessHour::all();
    return view('landing.index', compact('businessHours'));
})->name("home");

Route::get('/home-appointment', [AppointmentController::class, 'create_appointment'])->name("home-appointment");
Route::post('/home-appointment', [AppointmentController::class, 'confirm_appointment'])->name("confirm-appointment");
Route::post('/submit-appointment', [AppointmentController::class, 'store'])->name("store-appointment");
Route::get('/about', function () {
    return view('landing.about');
})->name("about");

Route::get('/contact', function () {
    return view('landing.contact');
})->name("contact");

// Contact Mail
Route::post('/contact', [MailController::class, 'contact'])->name("contact-mail");

Route::middleware("admin")->prefix("admin")->name("admin.")->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('patient', PatientController::class);
    Route::resource('employee', EmployeeController::class);
    Route::resource('fournisseur', FournisseurController::class);
    Route::resource('stock', StockController::class);
    Route::resource('appointments', AppointmentController::class);
    Route::resource('consultation', ConsultationController::class);
    Route::controller(PdfController::class)->name("pdf.")->group(function () {
        Route::get('generate-pdf/{id}', [PdfController::class, 'generatePdf'])->name('generatePdf');
        // Route::get('/pdf', 'test')->name('test');
    });
    Route::get('/business-hours', [BusinessHourController::class, 'index'])->name('business-hours.index');
    Route::post('/business-hours', [BusinessHourController::class, 'update'])->name('business-hours.update');
});
// Route::post('appointments.stote', [AppointmentController::class, 'store'])->name("Appointment.store");

Route::controller(HomeController::class)->group(function () {
    Route::post('AddAppointement', 'AddAppointement')->name("AddAppointement");
});
Route::get('/admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'authenticate'])->name('admin.authenticate');

// Search routes
Route::get('patient/search', [PatientController::class, 'search'])->name('patient.search');
Route::get('appointment/search', [AppointmentController::class, 'search'])->name('appointment.search');
Route::get('consultation/search', [ConsultationController::class, 'search'])->name('consultation.search');
Route::get('employee/search', [EmployeeController::class, 'search'])->name('employee.search');
Route::get('fournisseur/search', [FournisseurController::class, 'search'])->name('fournisseur.search');
Route::get('stock/search', [StockController::class, 'search'])->name('stock.search');
