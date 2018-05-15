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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route Frontend

Route::get('/', 'LandingPageController@index');

Route::get('/test', 'TestController@index');

Route::post('/test', 'TestController@store');

Route::get('/results', 'ResultsController@index');

Route::get('/contact', 'ContactController@index');

Route::post('/contact', 'ContactController@store');

// Route Backend

Route::get('/admin', 'AdminController@index');

Route::post('/admin', 'AdminController@store');

Route::get('/users', 'UsersController@index');

Route::post('/users', 'UsersController@store');

Route::get('/classes', 'ClassesController@index');

Route::post('/classes', 'ClassesController@store');

Route::get('/jobs', 'JobsController@index');

Route::post('/jobs', 'JobsController@store');