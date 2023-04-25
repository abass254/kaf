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
    return view('home');
});

Route::get('/about-us', function () {
    return view('static.about_us');
});
Route::get('/contact-us', function () {
    return view('static.contact_us');
});
Route::get('/what-we-do', function () {
    return view('static.what_we_do');
});
Route::get('/shop', function () {
    return view('static.shop');
});
Route::get('/volunteers', function () {
    return view('static.volunteers');
});
Route::get('/events', function () {
    return view('static.coming_soon');
});
Route::get('/news', function () {
    return view('static.coming_soon');
});
Route::get('/protection', function () {
    return view('static.coming_soon');
});
Route::get('/cccm', function () {
    return view('static.coming_soon');
});
Route::get('/wash', function () {
    return view('static.coming_soon');
});
Route::get('/health', function () {
    return view('static.coming_soon');
});
Route::get('/fsl', function () {
    return view('static.coming_soon');
});
Route::get('/education', function () {
    return view('static.coming_soon');
});
Route::get('/logistic_and_supply', function () {
    return view('static.coming_soon');
});
Route::get('/test', 'TestController@TestMethod');