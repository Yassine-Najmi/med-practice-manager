<?php

use App\Http\Controllers\Admin\FournisseurController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('fournisseur', FournisseurController::class);
});


Route::get('/admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'authenticate'])->name('admin.authenticate');
