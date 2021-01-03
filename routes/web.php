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
Route::post('update_event','App\Http\Controllers\EventController@update_event');
Route::post('save_event','App\Http\Controllers\EventController@save_event');
Route::post('update_event_status','App\Http\Controllers\EventController@update_event_status');
Route::post('delete_event','App\Http\Controllers\EventController@delete_event');
Route::get('news','App\Http\Controllers\NewsController@index');
Route::get('add-news','App\Http\Controllers\NewsController@add_news');
Route::post('update_news','App\Http\Controllers\NewsController@update_news');
Route::post('save_news','App\Http\Controllers\NewsController@save_news');
Route::post('update_news_status','App\Http\Controllers\NewsController@update_news_status');
Route::post('delete_news','App\Http\Controllers\NewsController@delete_news');

Route::get('about_vidyapati','App\Http\Controllers\AboutController@about_vidyapati');
Route::get('add_about_vidyapati','App\Http\Controllers\AboutController@add_about_vidyapati');
Route::post('save_about_vidyapati','App\Http\Controllers\AboutController@save_about_vidyapati');
Route::post('delete_about_vidyapati_description','App\Http\Controllers\AboutController@delete_about_vidyapati_description');
Route::post('update_about_vidyapati','App\Http\Controllers\AboutController@update_about_vidyapati');

Route::get('about_temple','App\Http\Controllers\AboutController@about_temple');
Route::get('add_about_temple','App\Http\Controllers\AboutController@add_about_temple');
Route::post('save_about_temple','App\Http\Controllers\AboutController@save_about_temple');
Route::post('delete_about_temple_description','App\Http\Controllers\AboutController@delete_about_temple_description');
Route::post('update_about_temple','App\Http\Controllers\AboutController@update_about_temple');


 
Route::get('/','App\Http\Controllers\FrontendController@index');
Route::get('contact_us','App\Http\Controllers\FrontendController@contact_us');
Route::get('history','App\Http\Controllers\FrontendController@history');
Route::get('near_by_place','App\Http\Controllers\FrontendController@near_by_place');

