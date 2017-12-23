<?php


use Illuminate\Support\Facades\Session;

Auth::routes();

//Route::get('setlocale/{locale}', function ($locale) {
//    if (in_array($locale, \Illuminate\Config\::get('app.locales'))) {
//        Session::put('locale', $locale);
//    }
//    return redirect()->back();
//});

Route::post('/search', 'ArtController@searchfunction')
    ->name('search')
;

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

// AUCTIONSq
Route::get('/auction/show/{id}', 'AuctionController@show')
    ->name('show_auction')
;

Route::post('/auction/create', 'AuctionController@postcreate')
    ->name('create_auction')
;

Route::get('/auction/create', 'AuctionController@create')
    ->name('create_auction')
;


Route::get('/auction/edit/{id}', 'AuctionController@edit')
    ->name('edit_auction')
;




