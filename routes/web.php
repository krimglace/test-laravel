<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\kategoriprodukController;
use App\Http\Controllers\variasiprodukController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\gambarprodukController;

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

Route::get('/', [homeController::class, 'index']);
Route::resource('kategori', kategoriprodukController::class);
Route::resource('variasi', variasiprodukController::class);
Route::resource('produk', produkController::class);
Route::resource('gambar', gambarprodukController::class);
