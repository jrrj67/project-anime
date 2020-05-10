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
Route::get('/', 'HomeController@index')->name('home');

Route::get('naruto-shippuden/episodes/{page}', 'NarutoShippudenController@show')->name('naruto-shippuden-episodes');

Route::get('naruto-shippuden/watch/{id}', 'NarutoShippudenController@watch')->name('naruto-shippuden-watch');
