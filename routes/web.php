<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Algorithm;
use App\Http\Controllers\Training;
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
Route::resource('/training', Training::class);
// Route::get('/', [Home::class, 'home'])->name('home');
Route::post('/training', [Training::class, 'store'])->name('Training.store');
Route::post('/algorithm/upload', [Algorithm::class, 'upload']);
Route::get('/result', [Algorithm::class, 'result']);
