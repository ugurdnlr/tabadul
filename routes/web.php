<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.index');
})->name('home');
Route::get('/hakkimizda', function () {
    return view('pages.about');
});
Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/hizmetlerimiz', function () {
    return view('pages.our-services');
});

Route::get('/musterilerimiz', 'CustomerController@index');

Route::get('/blog/onurair', function () {
    return view('pages.advertisement.onur-air');
});
Route::get('/blog/pegasus', function () {
    return view('pages.advertisement.pegasus');
});
Route::get('/blog/sunexpress', function () {
    return view('pages.advertisement.sun-express');
});

Route::get('/ekibimiz', 'CastController@index');
Route::get('/lang/{lang}','LangController@index')->name('lang');

Route::get('/islerimiz', function () {
    return view('pages.portfolio');
});
