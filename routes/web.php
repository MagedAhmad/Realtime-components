<?php

use Illuminate\Support\Facades\Route;

Route::resource('component', 'ComponentController');
Route::get('component/{slug}/download', 'ComponentController@download');
Route::post('component/rate', 'RatingController@store');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
