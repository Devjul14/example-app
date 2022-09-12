<?php

// use App\Http\Controllers\api\LoginController;
// use App\Http\Controllers\api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/register', 'App\Http\Controllers\api\LoginController@register');
Route::post('/login', 'App\Http\Controllers\api\LoginController@login');
// Route::prefix('/test')->group(function () {
//     Route::middleware('auth:api')->get('/all', 'App\Http\Controllers\api\UserController@index');
// });

Route::middleware('auth:api')->group(function () {
    Route::get('get-user', 'App\Http\Controllers\api\UserController@index');

    Route::resource('books', 'App\Http\Controllers\api\BookController');
    // Route::put('/update/{id}', 'App\Http\Controllers\api\BookController');
});
