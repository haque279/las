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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HomeController@index')->name('index');
Route::post('/', 'HomeController@request_callback')->name('request_callback');
Route::get('/contact-us', 'HomeController@contact_us')->name('contact-us');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/fees', 'HomeController@fees')->name('fees');
Route::get('/get-started', 'HomeController@get_started')->name('get-started');
Route::get('/our-clients', 'HomeController@our_clients')->name('our-clients');
Route::get('/resource', 'HomeController@resources')->name('resources');
Route::get('/terms-and-conditions', 'HomeController@terms_and_conditions')->name('terms-and-conditions');
Route::get('/testimonials', 'HomeController@testimonials')->name('testimonials');
