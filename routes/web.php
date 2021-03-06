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

Route::get('/', 'PagesController@home');

Route::get('/clock', 'PagesController@goClock');

Route::get('/ticTacToe', 'PagesController@ticTacToe');

Route::get('/calculator', 'PagesController@calculator');

Route::get('/restaurant', 'PagesController@restaurant');

Route::get('/crud', 'PagesController@crud');

Route::get('/weather', 'PagesController@weather');

Route::get('/MindReader', 'PagesController@MindReader');