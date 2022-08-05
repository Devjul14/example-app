<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Book;
use App\Models\Category;
use App\Models\Pelayanan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardBookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\Testapicontroller;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
        "title" => "Home",
        "active" => "home"
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

// Route::get('/book/{author:username}', [AuthorController::class, 'show']);
// Route::get('/authors/{category:nama}', [CategoryController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/books', DashboardBookController::class)->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
Route::get('/dashboard/books/checkSlug', [DashboardBookController::class, 'checkSlug'])->middleware('auth');
Route::get('/dashboard/book/excel', [DashboardBookController::class, 'excel'])->middleware('auth');
Route::get('/dashboard/book/excel2', [DashboardBookController::class, 'excel2'])->middleware('auth');
// end dashboard

//example api
Route::get('/testapi', [TestapiController::class, 'index'])->middleware('admin');
Route::get('/testapi/{id}', [TestapiController::class, 'show'])->middleware('admin');
Route::get('/testapi/{id}/edit', [TestapiController::class, 'edit'])->middleware('admin');
Route::post('/testapi/{id}/update', [TestapiController::class, 'update'])->middleware('admin');
Route::get('/testapi/delete/{id}', [TestapiController::class, 'delete'])->middleware('admin');
