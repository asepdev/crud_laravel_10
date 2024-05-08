<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa/index', [MahasiswaController::class,'index']);
Route::get('/mahasiswa/tambah', [MahasiswaController::class,'tambah']);
Route::post('/mahasiswa/tambah_data', [MahasiswaController::class,'tambah_data']);
Route::get('/mahasiswa/ubah', [MahasiswaController::class,'ubah']);