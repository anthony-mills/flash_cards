<?php

use Illuminate\Support\Facades\Route;

Auth::routes([
  'register' => false,
  'reset' => false,
  'verify' => false,
]);

Route::get('/auth/change-password', 'Auth\ChangePasswordController@changePassword')->name('password.change');

Route::post('/auth/change-password', 'Auth\ChangePasswordController@updatePassword')->name('password.update');

/** Start the flash card selection and view related routes **/
Route::get('/', 'FlashSetController@beginSet')->name('card.select');

Route::post('/', 'FlashSetController@showCards')->name('card.begin');
/** End the flash card selection and view related routes **/

/** Start the flash card management related routes **/
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
