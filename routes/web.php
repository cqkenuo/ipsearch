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

Route::get('/', 'IpController@searchIp');

Route::get('/search', 'IpController@searchIp');


Route::post('/search','IpController@search');
Route::post('/searchByType','IpController@searchByType');
//Route::post('/ads','IpController@advancedSearchTest');
Route::post('/advance','IpController@advancedSearch');
