<?php

use Illuminate\Http\Request;

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

Route::group(['prefix' => 'v1'], function () {
    Route::post('login', 'AuthApi\AuthController@login');

    Route::group(['middleware' => ['jwt.auth']], function () {
        Route::prefix('login')->group(function () {
            Route::post('/refresh', 'AuthApi\AuthController@refresh');
            Route::post('logout', 'AuthApi\AuthController@logout');
            Route::post('/me', 'AuthApi\AuthController@me');
        });

        Route::prefix('module')->group(function () {
            Route::get('/', 'ModuleController@index');
        });

        Route::prefix('sede')->group(function () {
            Route::get('/', 'SedeController@index');
        });

        Route::prefix('prestacion')->group(function () {
            Route::get('/', 'PrestacionController@index');
        });
    });
});
