<?php

use Illuminate\Support\Facades\Route;

Auth::routes([
  'register' => true,
  'reset' => true,
  'verify' => false,
]);

Route::get('/auth/change-password', 'Auth\ChangePasswordController@changePassword')->name('password.change');

Route::post('/auth/change-password', 'Auth\ChangePasswordController@updatePassword')->name('password.update');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

// Web routes related to flash cards and their management
require_once('cards/web.php');

// Web routes related to learning resources and their management
require_once('categories/web.php');

// Web routes related to learning resources and their management
require_once('resources/web.php');
