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
Route::post('submit_forgot_password','App\Http\Controllers\AdminController@submit_forgot_password');
Route::get('dashboard','App\Http\Controllers\AdminController@dashboard')->name('dashboard');
Route::post('submit_login','App\Http\Controllers\AdminController@submit_login');
Route::get('logout','App\Http\Controllers\AdminController@logout');
Route::get('events','App\Http\Controllers\EventController@index');
Route::get('add-event','App\Http\Controllers\EventController@add_event');
Route::post('save_event','App\Http\Controllers\EventController@save_event');

Route::get('/', function () {
    return view('welcome');
});

