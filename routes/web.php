<?php
​
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
​
Route::get('/', function () {
  return view('welcome');
});
​
Route::get('home', 'ShopController@index');
Route::get('home/{product}', 'ShopController@show');
Route::get('new-products', 'ShopController@create');
Route::post('store-products', 'ShopController@store');
Route::get('products/{product}/delete', 'ShopController@destroy');
Route::post('store-oreders', 'OrderController@store');