<?php

use App\Http\Controllers\API\MahasiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/show/{id}', [MahasiswaController::class, 'show']);
Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update']);
Route::get('/mahasiswa/destroy/{id}', [MahasiswaController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
