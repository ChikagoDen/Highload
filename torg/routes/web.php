<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/logger', [\App\Http\Controllers\LoggerController::class, 'index'])->name('logger');
Route::get('/sort', [\App\Http\Controllers\LoggerController::class, 'babelSort'])->name('sort');
