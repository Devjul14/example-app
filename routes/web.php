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

Route::get('/', function () {
    return view("home");
});

Route::get('/pasien', function () {
    return view("pasien", [
        "no_reg" => 20220303213645,
        "no_rm" => 204563,
        "nama" => "YUYUN"
    ]);
});

Route::get('/dokter', function () {
    return view("dokter");
});
