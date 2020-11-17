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
    Route::get('/all-services', 'PagesController@services')->name('all.services.page');
    Route::get('/prices', 'PagesController@prices')->name('prices.page');
    Route::get('/contact', 'PagesController@contact')->name('contact.page');
    Route::get('/cart', 'PagesController@cart')->name('cart.page');
    Route::get('/checkout', 'PagesController@checkout')->name('checkout.page');
    //Contact Messages
    Route::get('/messages/delete/{id}', 'MessagesController@delete')->name('messages.delete');
    Route::resource('messages', 'MessagesController')->except('edit', 'update', 'destroy', 'create');
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
});

