<?php

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

Route::get('/schedules/{year?}', [ScheduleController::class, 'index'])->name('schedules.index');
Route::post('/schedules/{year}', [ScheduleController::class, 'store'])->name('schedules.store');

Route::resource('/perspectives', PerspectiveController::class);
Route::resource('/kpis', KpiController::class);
