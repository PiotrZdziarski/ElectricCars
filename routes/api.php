<?php
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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//adverts
Route::post('/announcements', 'AdvertsController@index');
Route::post('/advanced_search', 'AdvertsController@advanced_search');

//comparision
Route::get('/comparision', 'ComparisionController@index');
Route::post('/comparision_add', 'ComparisionController@store');

Route::get('/testkurwa', 'ComparisionController@testkruwa');

Route::post('/testapi', 'ComparisionController@testapi');