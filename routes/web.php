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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'DashboardController@index')->name('home');

Route::get('/forgot_password', 'HomeController@forgot_password')->name('forgot_password');
Route::get('/blank_page', 'HomeController@blank_page')->name('blank_page');
Route::get('/chart', 'HomeController@chart')->name('chart');
Route::get('/table', 'HomeController@table')->name('table');
