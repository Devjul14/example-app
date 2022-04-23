<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\CategoryController;
use App\Models\Pelayanan;
use App\Models\Book;
use App\Models\Category;
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
    return view("home", [
        "title" => "Home"
    ]);
});

Route::get('/profil', function () {
    return view("profil", [
        "title" => "Profil",
        "no_reg" => 20220303213645,
        "no_rm" => 204563,
        "nama" => "YUYUN"
    ]);
});

Route::get('/fasilitas', function () {
    return view("fasilitas", [
        "title" => "Fasilitas"
    ]);
});

Route::get('/layanan', [PelayananController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category:nama}', [CategoryController::class, 'show']);
Route::get('/book', [BookController::class, 'index']);
Route::get('/book/{book:slug}', [BookController::class, 'show']);
Route::get('/authors/{author:username}', [AuthorController::class, 'show']);
// Route::get('/authors/{category:nama}', [CategoryController::class, 'show']);
