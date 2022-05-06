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

Auth::routes();

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('board-members', function () {
    return view('board-members');
})->name('board-members');

Route::get('services', function () {
    return view('services');
})->name('services');

Route::get('contact', function () {
    return view('contact');
});



Route::get('collection', function () {
    return view('collection');
})->name('collection');

Route::post('contact', 'HomeController@contact')->name('contact');

// News
Route::get('news', 'NewsController@index')->name('news');
Route::get('news/{slug?}', 'NewsController@article')->name('article');

// Events
Route::get('events/{slug?}', 'EventController@index')->name('events');
Route::get('exhibitions/{slug?}', 'ExhibitionsController@index');

// Newsletter
Route::post('subscribe', 'NewsletterEmailsController@subscribe')->name('subscribe');
Route::get('unsubscribe/{token}', 'NewsletterEmailsController@unsubscribe')->name('unsubscribe');

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
});