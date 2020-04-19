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

Route::get('/', 'CardController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/** Start the flash card related routes **/
Route::get('/card/create', 'CardController@createCard')->name('card.create');

Route::post('/card/create', 'CardController@saveCard')->name('card.save');
/** End the flash card related routes **/

/** Start the card category related routes **/
Route::get('/card/categories/list', 'CategoryController@listCategories')->name('category.list');

Route::get('/card/categories/delete/{catId}', 'CategoryController@deleteCategory');

Route::get('/card/categories/create', 'CategoryController@createCategory')->name('category.create');

Route::post('/card/categories/create', 'CategoryController@saveCategory')->name('category.save');
/** End the card category related routes **/