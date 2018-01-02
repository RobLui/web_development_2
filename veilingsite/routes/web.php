<?php


use Illuminate\Support\Facades\Session;

//Auth::routes();


// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')
    ->name('login');
$this->post('login', 'Auth\LoginController@login')
    ->name('login');
$this->post('logout', 'Auth\LoginController@logout')
    ->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');

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
    ->middleware('auth')
    ->name('myauctions')
;

Route::get('/mybids', 'myBidsController@index')
    ->middleware('auth')
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

Route::post('/auction/create', 'AuctionController@postcreate')
    ->middleware('auth')
    ->name('create_auction')
;

Route::get('/auction/create', 'AuctionController@create')
    ->middleware('auth')
    ->name('create_auction')
;

Route::get('/auction/edit/{id}', 'AuctionController@edit')
    ->middleware('auth')
    ->name('edit_auction')
;

Route::get('/mywatchlist', 'MyWatchlistController@index')
    ->name('my_watchlist')
;

// PROFILE
Route::get('/profile', 'ProfileController@index')
    ->name('profile')
;

