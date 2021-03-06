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
Route::get('/temp', 'ProjectsController@tempconverter');
Route::get('/clock', 'ProjectsController@clock');
Route::get('/calculator', 'ProjectsController@calculator');
Route::get('/unitconverter', 'ProjectsController@unitconverter');
Route::get('/rockpaperscissors', 'ProjectsController@rockpaperscissors');
Route::get('/bio', 'PagesController@bio');
Route::get('/test', 'PagesController@test');