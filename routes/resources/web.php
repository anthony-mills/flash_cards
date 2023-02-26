<?php
Route::get('/resources/view', 'ResourceController@resourceCategory');

Route::get('/resources/view/{catId}', 'ResourceController@resourceCategory');
