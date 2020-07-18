<?php

use Illuminate\Support\Facades\Route;

Route::put('component/{slug}', 'ComponentController@update');
Route::get('/', function() {
    return redirect('/component');
});
Route::resource('component', 'ComponentController');
Route::get('component/{slug}/download', 'ComponentController@download');

Route::get('profile/{user}', 'ProfileController@show');
Route::patch('profile/{user}', 'ProfileController@update');

Route::post('component/rate', 'RatingController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
