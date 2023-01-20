<?php
Route::get('/users/list', 'UsersController@listUsers')->name('users.list');

Route::get('/users/details/{userId}', 'UsersController@userDetails')->name('users.details');
