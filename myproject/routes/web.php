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

Route::get('/', function () {
    return view('index');
});
//Route::get('/search', 'HomeController@diseasesGuide');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/search', 'HomeController@diseasesGuide')->name('search');
Route::get('/addDisease', 'HomeController@addDisease');
Route::post('categoryAdd', 'HomeController@categoryAdd')->name('categoryAdd');
