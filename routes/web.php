<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ComponentController@index');
Route::resource('component', 'ComponentController');
Route::get('component/{slug}/download', 'ComponentController@download');

Route::get('profile/{user}', 'ProfileController@show');
Route::patch('profile/{user}', 'ProfileController@update');

Route::post('component/rate', 'RatingController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
