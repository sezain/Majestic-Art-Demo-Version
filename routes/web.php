<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'HomeController@index')->name('home');
Route::get('about', 'AboutController@index')->name('about');
Route::get('board-members', 'BoardMembersController@index')->name('board-members');

// Collection
Route::get('collection', 'CollectionController@index')->name('collection');

// Services
Route::get('services', 'ServicesController@index')->name('services');
Route::get('service/{slug}', 'ServicesController@service')->name('service');

// News
Route::get('news', 'NewsController@index')->name('news');
Route::get('news/{slug?}', 'NewsController@article')->name('article');

// Events
Route::get('events/{slug?}', 'EventController@index')->name('events');
Route::get('exhibitions/{slug?}', 'ExhibitionsController@index');

// Contact
Route::get('contact', 'ContactController@index')->name('contact');
Route::post('sendmail', 'ContactController@sendmail')->name('sendmail');


// Newsletter
Route::post('subscribe', 'NewsletterEmailsController@subscribe')->name('subscribe');
Route::get('unsubscribe/{token}', 'NewsletterEmailsController@unsubscribe')->name('unsubscribe');







Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
Route::prefix('admin')->group(function () {
    Route::get('/', 'admin\HomeController@index');
// Admin section
    Route::get('/customers', 'admin\CustomerController@index');
    Route::get('/create-customer', 'admin\CustomerController@create');
    Route::post('/create-customer', 'admin\CustomerController@store');
    Route::get('/edit-customer/{id?}', 'admin\CustomerController@edit');
    Route::post('/edit-customer', 'admin\CustomerController@update');
    Route::get('/customer-delete/{id}', 'admin\CustomerController@destroy');
    
    // Categories
    Route::resource('categories','admin\CategoryController');
    
    // Events
    Route::get('/events', 'admin\EventController@index');
    Route::get('/create-event', 'admin\EventController@create');
    Route::post('/create-event', 'admin\EventController@store');
    Route::get('/edit-event/{id?}', 'admin\EventController@edit');
    Route::post('/edit-event', 'admin\EventController@update');
    Route::get('/delete-event/{id}', 'admin\EventController@destroy');

    // Exhibitions
    Route::get('/exhibitions', 'admin\ExhibitionsController@index');
    Route::get('/create-exhibition', 'admin\ExhibitionsController@create');
    Route::post('/create-exhibition', 'admin\ExhibitionsController@store');
    Route::get('/edit-exhibition/{id?}', 'admin\ExhibitionsController@edit');
    Route::post('/edit-exhibition', 'admin\ExhibitionsController@update');
    Route::get('/delete-exhibition/{id}', 'admin\ExhibitionsController@destroy');

    // News
    Route::get('/blogs', 'admin\BlogController@index');
    Route::get('/create-blog', 'admin\BlogController@create');
    Route::post('/create-blog', 'admin\BlogController@store');
    Route::get('/edit-blog/{id?}', 'admin\BlogController@edit');
    Route::post('/edit-blog', 'admin\BlogController@update');
    Route::get('/delete-blog/{id}', 'admin\BlogController@destroy');
    
    // Arts Work
    Route::get('/arts', 'admin\ArtController@index');
    Route::get('/create-art', 'admin\ArtController@create');
    Route::post('/create-art', 'admin\ArtController@store');
    Route::get('/edit-art/{id?}', 'admin\ArtController@edit');
    Route::post('/edit-art', 'admin\ArtController@update');
    Route::get('/delete-art/{id}', 'admin\ArtController@destroy');
    
    // SEO material
    Route::get('/seo', 'admin\SeoMaterialController@index');
    Route::get('/create-seo', 'admin\SeoMaterialController@create');
    Route::post('/create-seo', 'admin\SeoMaterialController@store');
    Route::get('/edit-seo/{id?}', 'admin\SeoMaterialController@edit');
    Route::post('/edit-seo', 'admin\SeoMaterialController@update');
    Route::get('/delete-seo/{id}', 'admin\SeoMaterialController@destroy');

    // SEO material
    Route::get('/artist', 'admin\ArtistController@index');
    Route::get('/create-artist', 'admin\ArtistController@create');
    Route::post('/create-artist', 'admin\ArtistController@store');
    Route::get('/edit-artist/{id?}', 'admin\ArtistController@edit');
    Route::post('/edit-artist', 'admin\ArtistController@update');
    Route::get('/delete-artist/{id}', 'admin\ArtistController@destroy');

    // Services
    Route::get('/service', 'admin\ServiceController@index');
    Route::get('/create-service', 'admin\ServiceController@create');
    Route::post('/create-service', 'admin\ServiceController@store');
    Route::get('/edit-service/{id?}', 'admin\ServiceController@edit');
    Route::post('/edit-service', 'admin\ServiceController@update');
    Route::get('/delete-service/{id}', 'admin\ServiceController@destroy');
});