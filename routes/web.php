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


Route::group(['middleware' => 'auth'], function() {
    //Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', 'SelectcourseController@index');
    Route::get('open', 'ShopController@index');
    Route::get('home', 'ShopController@index');
    Route::get('home/{product}', 'ShopController@show');
    
});
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
