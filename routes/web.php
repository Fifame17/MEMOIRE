<?php

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

Route::get('/deuxiemepage', function () {
    return ['priserdv'=> true];
});


Route::get('/premierepage', function () {
    return view('page1');
});


Route::get('/troisiemepage', function () {
    return view('page3');
});

Route::get('/reel', function () {
    return view('page');
});








