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
Route::get('/tracker-loan-compensation', 'HomeController@tracker_loan_compensation')->name('testimonials');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/blog/{link}', 'HomeController@blog_details')->name('blog');


Route::group(['middleware' => 'prevent-back-history'],function(){

    Auth::routes();

    Route::get('/home', 'BlogController@home')->name('home');
    Route::resource('/admin_blogs', 'BlogController');
//    Route::get('/blog_create', 'BlogController@create');
//    Route::post('/blog_create', 'BlogController@store');
//    Route::get('/blog_edit/{id}', 'BlogController@edit')->name('blog_edit');
//    Route::post('/blog_update', 'BlogController@update')->name('blog_update');

});


