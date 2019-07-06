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
  // ログインしていないと表示できないページ↓
    Route::get('/', 'SelectcourseController@index');
    Route::get('home', 'ShopController@index');
    Route::get('home/{product}', 'ShopController@show');
    Route::get('open', 'ShopController@index');
    Route::get('new-products', 'ShopController@create');
    Route::post('store-products', 'ShopController@store');
    Route::get('products/{product}/delete', 'ShopController@destroy');
    Route::post('store-orders', 'OrderController@store');
    Route::post('store-products', 'ShopController@store');
    Route::get('products/{product}/delete', 'ShopController@destroy');
    Route::get('check', 'CheckController@index'); 
    Route::get('order', 'OrderController@index');
    Route::get('orders/{order}/delete', 'OrderController@destroy');
    Route::post('product/find', 'ShopController@find'); 
    
});



Auth::routes();

