<?php

use Illuminate\Support\Facades\Route;
Route::resource('Product', ProductController::class);

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

Route::get('/', function () {
    return view('home');
});
Route::get('/product', 'App\Http\Controllers\ProductController@index');
Route::get('/edit/{product}', 'App\Http\Controllers\ProductController@edit');
Route::patch('/edit/{product}', 'App\Http\Controllers\ProductController@update');
Route::delete('/delete/{product}', 'App\Http\Controllers\ProductController@destroy');
Route::get('/product/create', 'App\Http\Controllers\ProductController@create');
Route::post('/product/store', 'App\Http\Controllers\ProductController@store');
Route::get('/order', 'App\Http\Controllers\ProductController@order');
Route::get('/proses_order/{product}', 'App\Http\Controllers\ProductController@show');
Route::post('/order/store', 'App\Http\Controllers\ProductController@store2');
Route::get('/order/index', 'App\Http\Controllers\ProductController@tampil');
