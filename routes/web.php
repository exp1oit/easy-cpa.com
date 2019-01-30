<?php

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
Route::get('/', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

Route::get('/users', "OffestsController@index")->name('users')->middleware('verified');

Route::get('/admin', 'AdminController@index');

Route::get('/offers', 'AdminController@offers');

Route::get('/offer/{id}', 'AdminController@offer');

Route::get('/lead/form', 'AdminController@formLead');