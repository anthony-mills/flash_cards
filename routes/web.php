<?php

use Illuminate\Support\Facades\Route;

Auth::routes([
  'register' => false,
  'reset' => false,
  'verify' => false,
]);

Route::get('/auth/change-password', 'Auth\ChangePasswordController@changePassword')->name('password.change');

Route::post('/auth/change-password', 'Auth\ChangePasswordController@updatePassword')->name('password.update');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

/** Start the card category related routes **/
Route::get('/card/categories/list', 'CategoryController@listCategories')->name('category.list');

Route::get('/card/categories/delete/{catId}', 'CategoryController@deleteCategory');

Route::get('/card/categories/create', 'CategoryController@createCategory')->name('category.create');

Route::post('/card/categories/create', 'CategoryController@saveCategory')->name('category.save');

Route::get('/card/category/{catId}', 'CategoryController@getCards');
/** End the card category related routes **/

require_once('cards/web.php');