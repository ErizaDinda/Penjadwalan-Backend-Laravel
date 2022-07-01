<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\DosenController;
use App\http\Controllers\HariController;
use App\http\Controllers\JamController;
use App\http\Controllers\MatkulController;
use App\http\Controllers\RuangController;
use App\http\Controllers\UserController;
use App\http\Controllers\PengampuController;
use App\http\Controllers\JadkulController;
use App\http\Controllers\WktTdkBersediaController;

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

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth:api');

//crud dosen
Route::resource('/dosen', DosenController::class);

//crud hari
Route::resource('/hari', HariController::class);

//crud jam
Route::resource('/jam', JamController::class);

//crud matkul
Route::resource('/matkul', MatkulController::class);

//crud ruang
Route::resource('/ruang', RuangController::class);

//crud user
Route::resource('/user', UserController::class);  

//crud pengampu
Route::resource('/pengampu', PengampuController::class);  

//crud jadkul
Route::resource('/jadkul', JadkulController::class);  

//crud waktu tdk tersedia
Route::resource('/wkt_tdk_bersedia', WktTdkBersediaController::class);  


