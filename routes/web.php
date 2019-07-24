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


Route::get('/', 'ShopController@intro'); 

Route::group(['middleware' => 'auth'], function() {
  // ログインしていないと表示できないページ↓
    Route::get('home', 'ShopController@index');
    Route::get('home/{product}', 'ShopController@show');
    Route::get('open', 'ShopController@index');
    Route::get('new-products', 'ShopController@create');
    Route::post('store-products', 'ShopController@store');
    Route::get('products/{product}/delete', 'ShopController@destroy');
    Route::post('store-orders', 'OrderController@store');
    Route::post('store-products', 'ShopController@store');
    Route::get('products/{product}/delete', 'ShopController@destroy');
    Route::get('check', 'CheckController@index');//お届け先フォームを呼び出す
    Route::post('check', 'CheckController@index');//お届け先フォームを呼び出す
    Route::post('confirm', 'CheckController@confirm')->name('check.confirm');//確認画面を呼び出す
    Route::post('thanks', 'CheckController@thanks')->name('check.thanks');//メールの送信とthanksページの表示
    Route::get('order', 'OrderController@index');
    Route::get('orders/{order}/delete', 'OrderController@destroy');
    Route::post('product/find', 'ShopController@find');//検索機能

    Route::get('product/{category}', 'CategoriesController@show'); //カテゴリ機能

    Route::get('order/decr/{id}/{amount}', [
    'uses' => 'OrderController@decr',
    'as' => 'order.decr'
    ]);
    Route::get('order/incr/{id}/{amount}', [
    'uses' => 'OrderController@incr',
    'as' => 'order.incr'
    ]);

    Route::post('store-cart', 'CartController@store');
    Route::get('cart', 'CartController@index');

    Route::get('explain', 'ShopController@explain');
    // Route::get('login.edit', 'Auth\LoginController@edit');

});



Auth::routes();

