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
/* Comparision store in web.php because it uses Session */
/* Comparision delete in web.php because it uses Session */

Route::get('/testkurwa', 'ComparisionController@testkruwa');

Route::post('/testapi', 'ComparisionController@testapi');