<?php
Route::get('/resources/view', 'ResourceController@resourceCategory');

Route::get('/resources/category/{catId}', 'ResourceController@resourceCategory');
