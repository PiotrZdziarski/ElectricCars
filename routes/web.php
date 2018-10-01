<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'SitesController@home');

Auth::routes();

//cars
Route::get('/cars', 'SitesController@cars');
Route::get('/car/{id}', 'SitesController@car');

//adverts
Route::get('/adverts', 'SitesController@adverts');
Route::get('/advert/{id}', 'SitesController@advert');