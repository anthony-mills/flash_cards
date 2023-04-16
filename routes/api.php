<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/card/tags', 'ApiController@getTags')->name('card.tags');

Route::post('/store/feedback', 'Api\CardController@storeFeedback')->name('store.feedback');

// Routes restricted to users with learning_resources role
Route::group(['middleware' => ['role:admin|user']], function () {
    Route::post('/user/save_card', 'Api\CardController@addReviewCard');
});
