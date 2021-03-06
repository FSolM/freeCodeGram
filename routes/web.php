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

Route::get('/', 'PostsController@index');

Auth::routes();

// Profile Routes
Route::get('/profile/{user}', 'ProfilesController@show')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');

Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

// Posts Routes
Route::get('/p/create', 'PostsController@create');
Route::get('/p/{post}', 'PostsController@show');

Route::post('/p', 'PostsController@store');

// Follow Functionality Routes
Route::post('/follow/{user}', 'FollowersController@store');
