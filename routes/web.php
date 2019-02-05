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

// Route::get('/users', "OffestsController@index")->name('users')->middleware('verified');

Route::get('/admin', 'AdminController@index');

Route::get('user/offers', 'AdminController@offers');

Route::get('user/offer/{id}', 'AdminController@offer');

Route::get('/lead/form', 'AdminController@formLead');


Route::get('user/my-offers', 'UserController@myoffer')->name('user-offers');

Route::get('user/my-leads', 'UserController@myleads')->name('user-leads');

Route::get('/user/{id}/profile', 'UserController@profile')->name('profile');

Route::put('/user/{id}/profile', 'UserController@updateProfile');

Route::resource('admin/user', 'UserController');

Route::resource('lead', 'LeadController');

Route::resource('offer', 'OfferController');

Route::get('/offer/{offer_id}/lead', 'LeadController@create');