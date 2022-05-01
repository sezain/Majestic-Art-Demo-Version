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
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('about', function () {
    return view('about');
});
Route::get('board-members', function () {
    return view('board-members');
});
Route::get('our-web-developer', function () {
    return view('our-web-developer');
});
Route::get('services', function () {
    return view('services');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('renaissance-art', function () {
    return view('renaissance-art');
});

Route::get('medieval-art', function () {
    return view('medieval-art');
});

Route::get('modern-art', function () {
    return view('modern-art');
});

Route::get('postmodern-art', function () {
    return view('postmodern-art');
});

Route::get('indian-art', function () {
    return view('indian-art');
});

Route::get('islamic-art', function () {
    return view('islamic-art');
});

Route::get('western-art', function () {
    return view('western-art');
});

Route::get('collection', function () {
    return view('collection');
});

Route::post('contact', 'HomeController@contact');
Route::get('news/{slug?}', 'HomeController@blog');
Route::get('art/{slug?}', 'ArtController@art');
Route::get('medieval-art/{slug?}', 'ArtController@medievalart');
Route::get('islamic-ind-art/{slug?}', 'ArtController@islamicindart');
Route::get('western-art/{slug?}', 'ArtController@westernart');
Route::get('arts/{slug?}', 'ArtController@category');

// Events
Route::get('events/{slug?}', 'EventController@index');
Route::get('exhibitions/{slug?}', 'ExhibitionsController@index');

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
});
