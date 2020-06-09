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
Route::get('contacts/create', 'ContactController@create');
Route::post('contacts', 'ContactController@show');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/products/create', 'ProductController@create');
Route::post('/products', 'ProductController@store');
Route::get('/products', 'ProductController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
