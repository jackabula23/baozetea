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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::any('index', 'indexController@index');
Route::any('about', 'indexController@about');
Route::any('contact', 'indexController@contact');
Route::any('faq', 'indexController@faq');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
