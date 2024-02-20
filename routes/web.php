<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [MahasiswaController::class, 'view_data']);

Route::get('/data-mahasiswa', function () {
    return view('form');
});

Route::post('/data-baru', [MahasiswaController::class, 'data_baru']);