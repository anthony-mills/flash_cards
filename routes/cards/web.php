<?php
/** Start the flash card selection and view related routes **/
Route::post('/', 'FlashSetController@showCards')->name('card.begin');
/** End the flash card selection and view related routes **/
