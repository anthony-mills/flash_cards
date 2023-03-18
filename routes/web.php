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

Route::middleware('auth')->group(function () {
    // User routes related to learning resources
    require_once('resources/web.php');

    // Routes restricted to users with learning_resources role
    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('/learning_resources/dashboard', 'AdminController@dashboard')->name('learning_resources-dashboard');

        require_once('card_feedback/admin_web.php');
        require_once('cards/admin_web.php');
        require_once('categories/admin_web.php');
        require_once('resources/admin_web.php');
        require_once('users/admin_web.php');
    });
});
