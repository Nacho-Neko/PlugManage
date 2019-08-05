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

Route::middleware('auth:web-api')->group(function () {
    Route::get('/info','Api\BaseController@info');


    Route::group(array('prefix'=>'{gameid}'),function($postId)
    {
        Route::get('/GetPlugs','Api\BaseController@info');
        Route::get('/info','Api\BaseController@info');

        Route::get('/login', 'Api\Game\Game_304930@login');

        Route::get('/get_plug', 'Api\Game\Game_304930@GetPlug');


    });
});

