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
Route::get('', 'HomeController@index');
Route::get('contacts/create', 'ContactController@create');
Route::post ('contacts', 'ContactController@show');
Route::get('/products/create', 'ProductController@create');
Route::post('/products', 'ProductController@store');
Route::get('/products', 'ProductController@index');
Route::get('books/create', 'BookController@create');
Route::get('books', 'BookController@index');
Route::post('books', 'BookController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
