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

Route::get('/detail', 'DetailController@index')
    ->name('detail')
;

Route::get('/home/faq', 'FaqController@index')
    ->name('detail')
;

// AUCTIONS
Route::get('/auction/show/{id}', 'AuctionController@show')
    ->name('show_auction')
;

Route::get('/auction/create', 'AuctionController@create')
    ->name('create_auction')
;

Route::get('/auction/edit/{id}', 'AuctionController@edit')
    ->name('edit_auction')
;




