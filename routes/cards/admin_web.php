<?php
/** Start the flash card management related routes **/
Route::get('/flash-card/edit/{cardId}', 'FlashCardController@editCard')->name('flashcard.edit');

Route::get('/flash-card/create', 'FlashCardController@createCard')->name('flashcard.create');

Route::post('/flash-card/create', 'FlashCardController@saveCard')->name('flashcard.save');

Route::get('/flash-card/delete/{cardId}', 'FlashCardController@deleteCard');
/** End the flash card management related routes **/

/** Start the quiz card management related routes **/
Route::get('/quiz-card/create', 'QuizCardController@createCard')->name('quizcard.create');

Route::post('/quiz-card/create', 'QuizCardController@saveCard')->name('quizcard.save');

Route::get('/quiz-card/edit/{cardId}', 'QuizCardController@editCard')->name('quizcard.edit');

Route::get('/quiz-card/delete/{cardId}', 'QuizCardController@deleteCard');
/** End the quiz card management related routes **/

/** Start the card category related routes **/
Route::get('/categories/list', 'CategoryController@listCategories')->name('category.list');

Route::get('/categories/delete/{catId}', 'CategoryController@deleteCategory');

Route::get('/categories/create', 'CategoryController@createCategory')->name('category.create');

Route::post('/categories/create', 'CategoryController@saveCategory')->name('category.save');

Route::get('/categories/category/{catId}', 'CategoryController@getCards');
/** End the card category related routes **/
