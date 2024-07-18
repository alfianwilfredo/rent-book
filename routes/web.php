<?php

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

Route::get('/', 'App\Http\Controllers\LoginController@index');
Route::get('/register', 'App\Http\Controllers\RegisterController@index');
Route::post('/register-user', "App\Http\Controllers\RegisterController@store")->name('register.user');
