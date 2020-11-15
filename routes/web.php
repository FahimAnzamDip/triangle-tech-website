<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::group(['namespace' => 'Frontend'], function () {
    //Front Pages
    Route::get('/', 'PagesController@home')->name('home.page');
    Route::get('/about', 'PagesController@about')->name('about.page');
    Route::get('/services', 'PagesController@services')->name('services.page');
    Route::get('/prices', 'PagesController@prices')->name('prices.page');
    Route::get('/contact', 'PagesController@contact')->name('contact.page');
    Route::get('/cart', 'PagesController@cart')->name('cart.page');
    Route::get('/checkout', 'PagesController@checkout')->name('checkout.page');
    //Contact Messages
    Route::get('/messages/delete/{id}', 'MessagesController@delete')->name('messages.delete');
    Route::resource('messages', 'MessagesController')->except('edit', 'update', 'destroy', 'create');
});

Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', 'DashboardController@dashboard')->name('admin.dashboard');
});

