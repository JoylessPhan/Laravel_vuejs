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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::resource('request-off', 'Api\RequestController');
//Route::resource('search', 'Api\RequestController');
//Route::resource('request-ot', 'Api\RequestController');
//Route::resource('request/show/:id', 'Api\RequestController');
