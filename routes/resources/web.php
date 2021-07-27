<?php
Route::get('/resource/create', 'ResourceController@createResource')->name('resource.create');

Route::post('/resource/save', 'ResourceController@saveResource')->name('resource.save');

Route::get('/resources/category/{catId}', 'ResourceController@resourceCategory');

Route::get('/resource/delete/{resourceId}', 'ResourceController@deleteResource');
