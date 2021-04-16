<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/menu', [HomeController::class, 'menu']);

Route::get('/today-special', [HomeController::class, 'todayspecial']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/informasi1', [HomeController::class, 'informasi1']);

Route::get('/informasi2', [HomeController::class, 'informasi2']);

Route::get('/respon', [HomeController::class, 'respon']);
