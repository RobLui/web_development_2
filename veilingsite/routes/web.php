<?php

Auth::routes();

Route::get('/', 'WelcomeController@index')
    ->name('welcome')
;

Route::get('/home', 'HomeController@index')
    ->name('home')
;

Route::get('/art', 'ArtController@index')
    ->name('art')
;

Route::get('/isearch', 'IsearchController@index')
    ->name('isearch')
;

Route::get('/myauctions', 'myAuctionsController@index')
    ->name('myauctions')
;

Route::get('/mybids', 'myBidsController@index')
    ->name('mybids')
;

Route::get('/contact', 'ContactController@index')
    ->name('contact')
;
