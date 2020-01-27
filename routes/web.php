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
Route::get('/products.manage', 'ProductsController@manage');
Route::get('/products.add', function(){
    return view('products.add');
});
Route::post('/products.add', 'ProductsController@add');
