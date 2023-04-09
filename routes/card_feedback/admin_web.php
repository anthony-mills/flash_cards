<?php
/** Start the flash card feedback management related routes **/
Route::get('/card/feedback/view', 'CardFeedbackController@viewFeedback')->name('card.feedback');

Route::get('/card/feedback/delete/{commentId}', 'CardFeedbackController@deleteFeedback');
/** End the flash card feedback management related routes **/
