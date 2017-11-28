<?php

Auth::routes();

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'WelcomeController@index')
    ->name('welcome')
;

Route::get('/home', 'HomeController@index')
    ->name('home')
;
