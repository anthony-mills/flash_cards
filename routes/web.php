<?php

use Illuminate\Support\Facades\Route;

Auth::routes([
  'register' => false,
  'reset' => false,
  'verify' => false,
]);


/** Start the flash card management related routes **/
Route::get('/', 'CardController@beginSet')->name('card.select');

Route::post('/', 'CardController@showCards')->name('card.begin');

Route::get('/card/edit/{cardId}', 'CardController@editCard')->name('card.edit');

Route::get('/card/create', 'CardController@createCard')->name('card.create');

Route::post('/card/create', 'CardController@saveCard')->name('card.save');

Route::get('/card/delete/{cardId}', 'CardController@deleteCard');
/** End the flash card management related routes **/

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

/** Start the card category related routes **/
Route::get('/card/categories/list', 'CategoryController@listCategories')->name('category.list');

Route::get('/card/categories/delete/{catId}', 'CategoryController@deleteCategory');

Route::get('/card/categories/create', 'CategoryController@createCategory')->name('category.create');

Route::post('/card/categories/create', 'CategoryController@saveCategory')->name('category.save');

Route::get('/card/category/{catId}', 'CategoryController@getCards');
/** End the card category related routes **/