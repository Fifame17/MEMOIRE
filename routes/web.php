<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\DoctorController;


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

Route::get('/deuxiemepage', function () {
    return view('priserdv');
});


Route::get('/', function () {
    return view('page1');
});


Route::get('/troisiemepage', function () {
    return view('page3');
});


Route::resource('patients', PatientController::class);
Route::resource('services', ServiceController::class);
Route::resource('administrators', AdministratorController::class);
Route::resource('doctors', DoctorController::class);










