<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiKategoriProdukController;
use App\Http\Controllers\ApiProdukController;
use App\Http\Controllers\ApiGambarProdukController;
use App\Http\Controllers\ApiVariasiProdukController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/apiproduk', [ApiProdukController::class, 'index']);
Route::get('/apikategori/', [ApiKategoriProdukController::class, 'index']);
Route::get('/apivariasi/', [ApiVariasiProdukController::class, 'index']);
Route::get('/apigambar/', [ApiGambarProdukController::class, 'index']);
