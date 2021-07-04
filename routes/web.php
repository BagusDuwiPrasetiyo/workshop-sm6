<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Algorithm;
use App\Http\Controllers\Training;
use App\Http\Controllers\Testing;
use App\Http\Controllers\Dashboard;
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

Route::resource('/', Algorithm::class);

// data training
Route::resource('/training', Training::class);
Route::get('/training/get_data/{kode}', [Training::class, 'getUserData']);
Route::get('/training/delete/{kode}', [Training::class, 'destroy']);
Route::post('/training', [Training::class, 'store'])->name('Training.store');
Route::put('/training', [Training::class, 'update'])->name('Training.update');

//data testing
Route::resource('/testing', Testing::class);
Route::post('/testing', [Testing::class, 'store'])->name('Testing.store');

//saved testing
Route::get('/stored_data', [Testing::class, 'saved']);

Route::post('/algorithm/upload', [Algorithm::class, 'upload']);
Route::get('/result', [Algorithm::class, 'result']);

//Dashboard
Route::resource('/', Dashboard::class);
