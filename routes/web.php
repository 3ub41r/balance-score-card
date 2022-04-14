<?php

use App\Http\Controllers\ChangeYearController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\KpiController;
use App\Http\Controllers\PerspectiveController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/schedules', [ScheduleController::class, 'index'])->name('schedules.index');
Route::post('/schedules', [ScheduleController::class, 'store'])->name('schedules.store');

Route::resource('/perspectives', PerspectiveController::class);
Route::resource('/kpis', KpiController::class);
Route::resource('/divisions', DivisionController::class);

Route::get('/change-year/{year}', ChangeYearController::class)->name('change-year');
