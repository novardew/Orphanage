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
    return view('home');
});

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::get('/dashboard','DashboardController@index');

Route::get('/karya','KaryaController@index');
Route::post('/karya/create','KaryaController@create')->middleware('auth');
Route::get('/karya/{id}/edit','KaryaController@edit')->middleware('auth');
Route::post('/karya/{id}/update','KaryaController@update')->middleware('auth');
Route::get('/karya/{id}/delete','KaryaController@delete')->middleware('auth');

Route::get('/panti','PantiController@index')->middleware('auth');
Route::post('/panti/create','PantiController@create')->middleware('auth');
Route::get('/panti/{id}/edit','PantiController@edit')->middleware('auth');
Route::post('/panti/{id}/update','PantiController@update')->middleware('auth');
Route::get('/panti/{id}/delete','PantiController@delete')->middleware('auth');
Route::get('/panti/{id}/profile','PantiController@profile');

Route::get('/adminpanti','AdminpantiController@index')->middleware('auth');

Route::get('/kunjung','KunjungController@index')->middleware('auth');
Route::post('/kunjung/create','KunjungController@create')->name('kunjung.create')->middleware('auth');
