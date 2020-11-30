<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/link', function () {
   symlink('', '');
   notify()->success('Delete The Route.', 'Linked!');
   return back();
});

//Route::get('/invoice', function () {
//    $order = \App\Models\Order::find(8);
//    return new App\Mail\InvoiceMail($order);
//});

// SSLCOMMERZ Start
//Route::get('/example1', 'SslCommerzPaymentController@exampleEasyCheckout');
//Route::get('/example2', 'SslCommerzPaymentController@exampleHostedCheckout');

Route::post('/pay', 'SslCommerzPaymentController@index');
//Route::post('/pay-via-ajax', 'SslCommerzPaymentController@payViaAjax');

Route::post('/success', 'SslCommerzPaymentController@success');
Route::post('/fail', 'SslCommerzPaymentController@fail');
Route::post('/cancel', 'SslCommerzPaymentController@cancel');

Route::post('/ipn', 'SslCommerzPaymentController@ipn');
//SSLCOMMERZ END

Route::group(['namespace' => 'Frontend'], function () {
    //Front Pages
    Route::get('/', 'PagesController@home')->name('home.page');
    Route::get('/about', 'PagesController@about')->name('about.page');
    Route::get('/all-services', 'PagesController@services')->name('all.services.page');
    Route::get('/web-development-prices-in-bangladesh', 'PagesController@prices')->name('prices.page');
    Route::get('/contact', 'PagesController@contact')->name('contact.page');
    Route::get('/cart', 'PagesController@cart')->name('cart.page');
    Route::get('/checkout', 'PagesController@checkout')->name('checkout.page');
    Route::get('/portfolio', 'PagesController@portfolio')->name('portfolio.page');
    //Contact Messages
    Route::get('/messages/delete/{id}', 'MessagesController@delete')->name('messages.delete');
    Route::resource('messages', 'MessagesController')->except('edit', 'update', 'destroy', 'create');
    //Carts
    Route::post('/carts/store', 'CartsController@store')->name('carts.store');
    Route::post('/carts/update', 'CartsController@update')->name('carts.update');
    Route::get('/carts/delete/{id}', 'CartsController@delete')->name('carts.delete');
});

Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function () {
    //Dashboard
    Route::get('/dashboard', 'DashboardController@dashboard')->name('admin.dashboard');
    //Contact Details
    Route::get('/contact-details', 'ContactController@index')->name('contact.details');
    Route::post('/contact-details/update/{id}', 'ContactController@update')->name('contact.details.update');
    //Services
    Route::get('/services/delete/{id}', 'ServicesController@delete')->name('services.delete');
    Route::resource('services', 'ServicesController')->except('show', 'destroy');
    //Team Members
    Route::get('/members/delete/{id}', 'MembersController@delete')->name('members.delete');
    Route::resource('members', 'MembersController')->except('show', 'destroy');
    //Clients
    Route::get('/clients/delete/{id}', 'ClientsController@delete')->name('clients.delete');
    Route::resource('clients', 'ClientsController')->except('show', 'destroy');
    //Facts
    Route::get('/facts', 'AboutPageController@facts')->name('facts.index');
    Route::post('/facts/update/{id}', 'AboutPageController@updateFacts')->name('facts.update');
    //As Regards Of TTL
    Route::get('/regards', 'AboutPageController@regards')->name('regards.index');
    Route::post('/regards/update/{id}', 'AboutPageController@updateRegards')->name('regards.update');
    //Why Choose Us
    Route::get('/choices/delete/{id}', 'ChoosesController@delete')->name('choices.delete');
    Route::resource('choices', 'ChoosesController')->except('show', 'destroy');
    //Project Categories
    Route::get('/categories/delete/{id}', 'CategoriesController@delete')->name('categories.delete');
    Route::resource('categories', 'CategoriesController')->except('show', 'destroy', 'create');
    //Projects
    Route::get('/projects/delete/{id}', 'ProjectsController@delete')->name('projects.delete');
    Route::resource('projects', 'ProjectsController')->except('show', 'destroy');
    //Packages
    Route::get('/packages/delete/{id}', 'PackagesController@delete')->name('packages.delete');
    Route::resource('packages', 'PackagesController')->except('show', 'destroy');
    //Orders
    Route::get('/orders/index', 'OrdersController@index')->name('orders.index');
    Route::get('/orders/pending', 'OrdersController@pending')->name('orders.pending');
    Route::get('/orders/failed', 'OrdersController@failed')->name('orders.failed');
    Route::get('/orders/canceled', 'OrdersController@canceled')->name('orders.canceled');
    Route::get('/orders/completed', 'OrdersController@completed')->name('orders.completed');
    Route::get('/orders/show/{id}', 'OrdersController@show')->name('orders.show');
    Route::get('/orders/complete/{id}', 'OrdersController@makeComplete')->name('orders.make.complete');
    Route::get('/orders/delete/{id}', 'OrdersController@delete')->name('orders.delete');
    Route::get('/orders/cancel/{id}', 'OrdersController@cancel')->name('orders.cancel');
    //Profile
    Route::get('/profile', 'ProfileController@profile')->name('profile');
    Route::post('/profile/update', 'ProfileController@update')->name('profile.update');
    //Settngs
    Route::get('/settings', 'SettingsController@index')->name('settings.index');
    Route::post('/settings/update/{id}', 'SettingsController@update')->name('settings.update');
});

