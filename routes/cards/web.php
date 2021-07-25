<?php
/** Start the flash card selection and view related routes **/
Route::get('/', 'FlashSetController@beginSet')->name('card.select');

Route::post('/', 'FlashSetController@showCards')->name('card.begin');
/** End the flash card selection and view related routes **/

/** Start the flash card management related routes **/
Route::get('/card/edit/{cardId}', 'CardController@editCard')->name('card.edit');

Route::get('/card/create', 'CardController@createCard')->name('card.create');

Route::post('/card/create', 'CardController@saveCard')->name('card.save');

Route::get('/card/delete/{cardId}', 'CardController@deleteCard');

Route::get('/card/feedback/view', 'CardController@viewFeedback')->name('card.feedback');

Route::get('/card/feedback/delete/{commentId}', 'CardController@deleteFeedback');
/** End the flash card management related routes **/