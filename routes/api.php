<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

Route::post('/login', 'Auth\LoginController@loginByAPI');

Route::post('/register', 'Auth\RegisterController@registerByAPI');

Route::get('/test', function() {
    return [1, 2, 3];
});

Route::middleware(['auth:api'])->group(function () {
    // Users
    Route::get('/users/status', 'UserController@getStatus');
    Route::get('/users/getme', 'UserController@getMe');
    Route::get('/users', 'UserController@userList');
    Route::post('/users', 'UserController@store');
    Route::patch('/users/{user}', 'UserController@update');
    Route::delete('/users/{user}', 'UserController@destroy');

    // Shops
    Route::get('/shops', 'ShopController@index');
    Route::post('/shops', 'ShopController@store');
    Route::patch('/shops/{shop}', 'ShopController@update');
    Route::delete('/shops/{shop}', 'ShopController@destroy');

});
Route::post('/images', 'ImageController@store');
