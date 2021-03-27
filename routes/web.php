<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\CustomerController; 

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test', [App\Http\Controllers\HomeController::class, 'test'])->name('test');
Route::get('/icons', [App\Http\Controllers\HomeController::class, 'icon'])->name('icons');
Route::get('/notifications', [App\Http\Controllers\HomeController::class, 'notification'])->name('notifications');

Route::resource('/customers',App\Http\Controllers\CustomerController::class);
//Route::resource('/customers',CustomerController::class);