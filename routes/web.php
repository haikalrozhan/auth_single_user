<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

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

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('dashboard', [WebsiteController::class, 'dashboard'])->name('dashboard');
Route::get('login', [WebsiteController::class, 'login'])->name('login');
Route::get('register', [WebsiteController::class, 'register'])->name('register');
Route::get('logout', [WebsiteController::class, 'logout'])->name('logout');
