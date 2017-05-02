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

Route::get('/', 'PagesController@getWelcome');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('reserve', 'PagesController@getBuyTrip');



Route::get('search_results', 'PagesController@getSearchResult');

Route::get('myReservation', 'PagesController@myReservation');

Route::get('notification', 'PagesController@getNotify');
Route::get('about', 'PagesController@getAbout');


