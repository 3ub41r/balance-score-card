<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Approver\KpiController as ApproverKpiController;
use App\Http\Controllers\ChangeYearController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\KpiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerspectiveController;
use App\Http\Controllers\Pic\KpiController as PicKpiController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Semua yang login sahaja boleh access routes dalam group ni
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['isAdmin']], function () {
        Route::get('/dashboard', AdminController::class)->name('admin-dashboard');

        Route::get('/schedules', [ScheduleController::class, 'index'])->name('schedules.index');
        Route::post('/schedules', [ScheduleController::class, 'store'])->name('schedules.store');
        
        Route::resource('/perspectives', PerspectiveController::class);
        Route::resource('/kpis', KpiController::class);
        Route::resource('/divisions', DivisionController::class);
    });

    Route::get('/', DashboardController::class)->name('dashboard');

    Route::get('/change-year/{year}', ChangeYearController::class)->name('change-year');
    
    Route::prefix('/pic')->group(function () {
        Route::get('/kpis', [PicKpiController::class, 'index'])->name('pic.kpis.index');
        Route::post('/kpis', [PicKpiController::class, 'store'])->name('pic.kpis.store');
    
        Route::post('/kpis/{division}/submit', [PicKpiController::class, 'submit'])->name('pic.kpis.submit');
    });
    
    Route::prefix('/approver')->group(function () {
        Route::get('/kpis', [ApproverKpiController::class, 'index'])->name('approver.kpis.index');
        Route::post('/kpis/{division}/approve', [ApproverKpiController::class, 'approve'])->name('approver.kpis.approve');
        // Route::post('/kpis', [PicKpiController::class, 'store'])->name('approver.kpis.store');
    
        // Route::post('/kpis/{division}/submit', [PicKpiController::class, 'submit'])->name('approver.kpis.submit');
    });
});



Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->name('login.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');