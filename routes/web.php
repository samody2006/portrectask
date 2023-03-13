<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LgaController;
use App\Http\Controllers\PuController;
use App\Http\Controllers\WardController;
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


Auth::routes();

Route::get('', [HomeController::class, 'index'])->name('home');
Route::resource('pollingunits', PuController::class);
Route::resource('lga', LgaController::class);
Route::post('lgaresults', [LgaController::class, 'sum'])->name('lgaresults');
Route::resource('wards', WardController::class);







