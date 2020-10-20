<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\MoviesController@index');
Route::get('/list-movies', 'App\Http\Controllers\MoviesController@listMovies');
Route::get('/add-movie', 'App\Http\Controllers\MoviesController@addMovie');
Route::get('/delete/{id}', 'App\Http\Controllers\MoviesController@deleteMovie');