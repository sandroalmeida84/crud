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

Route::get('/', [App\Http\Controllers\UsersController::class, 'index']);
Route::get('/criar', [App\Http\Controllers\UsersController::class, 'criar']);
Route::post('/novo', [App\Http\Controllers\UsersController::class, 'novo']);
Route::get('/editar/{id}', [App\Http\Controllers\UsersController::class, 'editar']);
Route::post('/editar/{id}', [App\Http\Controllers\UsersController::class, 'update'])->name('atualizarDados');
Route::get('/delete/{id}', [App\Http\Controllers\UsersController::class, 'delete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
