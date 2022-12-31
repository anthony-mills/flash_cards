<?php
/** Start the flash card selection and view related routes **/
Route::get('/', 'FlashSetController@beginSet')->name('card.select');

Route::post('/', 'FlashSetController@showCards')->name('card.begin');
/** End the flash card selection and view related routes **/
