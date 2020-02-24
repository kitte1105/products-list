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

Route::redirect('/', '/products.manage', 301);
Route::get('/products.manage', 'ProductsController@manage')->name('products.manage');
Route::get('/products.view', 'ProductsController@view')->name('products.view');
Route::get('/products.add', function(){
    return view('products.update', ['mode' => 'add']);
}) -> name('products.add');
Route::get('/products.update', 'ProductsController@update')->name('products.update');

Route::post('/products.add', 'ProductsController@add');
Route::post('/products.update', 'ProductsController@store');
