<?php

Route::get('/' , 'ReviewController@index')->name('index');

Route::get('/show/{id}', 'ReviewController@show')->name('show');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/review', 'ReviewController@create')->name('create');
    
    Route::post('/review/store', 'ReviewController@store')->name('store');
});


Route::get('/home', 'HomeController@index')->name('home');
