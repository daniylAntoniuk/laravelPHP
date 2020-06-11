<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::resource('/products', 'ProductController');
//Route::get('product/{id}','ProductController@getProd');
Route::resource('/category', 'CategoryController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('products/change/{id}', 'ProductController@edit')->middleware('auth');
Route::get('products/delete/{id}', 'ProductController@destroy')->middleware('auth');
Route::post('products/upload', 'ProductController@upload');
Route::get('products/removeImage/{id}', 'ProductController@removeImage')->middleware('auth');

