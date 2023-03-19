<?php
/** Start the flash card management related routes **/
Route::get('/card/edit/{cardId}', 'FlashCardController@editCard')->name('card.edit');

Route::get('/flash-card/create', 'FlashCardController@createCard')->name('card.create');

Route::post('/flash-card/create', 'FlashCardController@saveCard')->name('card.save');

Route::get('/flash-card/delete/{cardId}', 'FlashCardController@deleteCard');
/** End the flash card management related routes **/

/** Start the card category related routes **/
Route::get('/categories/list', 'CategoryController@listCategories')->name('category.list');

Route::get('/categories/delete/{catId}', 'CategoryController@deleteCategory');

Route::get('/categories/create', 'CategoryController@createCategory')->name('category.create');

Route::post('/categories/create', 'CategoryController@saveCategory')->name('category.save');

Route::get('/categories/category/{catId}', 'CategoryController@getCards');
/** End the card category related routes **/
