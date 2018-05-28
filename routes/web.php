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

Route::get('/home', 'HomeController@index')->name('home');

// Route Frontend

Route::get('/', 'LandingPageController@index');

Route::get('/test', 'TestController@index');

Route::post('/test', 'TestController@store');

Route::get('/results', 'ResultsController@index')->name('results');

Route::get('/contact', 'ContactController@index');

Route::post('/contact', 'ContactController@store');

Route::get('/historychart', 'HistorychartController@index');

Route::get('/historytree', 'HistorytreeController@index');

Route::get('/historylist', 'HistorylistController@index');

Route::get('/legalnotice', 'LegalNoticeController@index');

Route::get('/partners', 'PartnersController@index');

// Route Backend

Route::get('/admin', 'AdminController@index')->name('admin');

Route::post('/admin', 'AdminController@store');

Route::get('/users', 'UsersController@index');

Route::post('/users', 'UsersController@store');

Route::get('/userdelete', 'UsersController@delete');

Route::get('/userupdate', 'UserController@index');

Route::post('/userupdate', 'UserController@update');

Route::get('/classes', 'ClassesController@index');

Route::post('/classes', 'ClassesController@store');

Route::get('/classedelete', 'ClassesController@delete');

Route::get('/classeupdate', 'ClasseController@index');

Route::post('/classeupdate', 'ClasseController@update');

Route::get('/jobs', 'JobsController@index');

Route::post('/jobs', 'JobsController@store');

Route::get('/jobdelete', 'JobsController@delete');

Route::get('/jobupdate', 'JobController@index');

Route::post('/jobupdate', 'JobController@update');



