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

Route::get('/', 'IndexController@index')->name('home');
Route::get('/products', 'ProductController@index')->name('products');
Route::get('/products/{slug}', 'ProductController@show')->name('product.show');
Route::get('/contacts', 'ContactController@index')->name('contacts');
Route::get('/gallery', 'GalleryController@index')->name('gallery');
Route::get('/3d-model', 'ModelController@index')->name('models');
Route::get('/technical-information', 'TechnicalInformationController@index')->name('info');
Route::post('/product/property/save/{id}', 'ProductController@store');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

