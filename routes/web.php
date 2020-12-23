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
Route::get('login','App\Http\Controllers\AdminController@login')->name('admin_login_page');
Route::get('forgot-password','App\Http\Controllers\AdminController@forgot_password')->name('admin_forgot_password_page');
Route::get('dashboard','App\Http\Controllers\AdminController@dashboard')->name('dashboard');

 
Route::get('/', function () {
    return view('welcome');
});

