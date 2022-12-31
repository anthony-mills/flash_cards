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

    // Routes restricted to users with admin role
    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('/admin/dashboard', 'HomeController@admin')->name('admin-dashboard');

        require_once('categories/admin_web.php');
        require_once('resources/admin_web.php');
        require_once('cards/admin_web.php');
    });
});
