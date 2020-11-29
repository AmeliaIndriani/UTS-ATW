<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

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
Route::get('template', function () {
    return view('template.base');
});

Route::get('welcome', [HomeController::class, 'showwelcome']);
Route::get('beranda', [HomeController::class, 'showberanda']);
Route::get('home', [HomeController::class, 'showhome']);
Route::get('postblog', [HomeController::class, 'showpostblog']);
Route::resource('post',PostController::class);
// Route::get('post/create', [PostController::class, 'post/create']);
// Route::get('post/index', [PostController::class, 'post/index']);
// Route::get('post', [HomeController::class, 'showpost']);

    //login dan registrasi//
Route::resource('user',UserController::class);
Route::get('/login', [AuthController::class, 'showlogin']);
Route::post('/login', [AuthController::class, 'loginprocess']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('registrasi', [AuthController::class, 'showregistrasi']);
Route::post('registrasi', [AuthController::class, 'storeregistrasi']);