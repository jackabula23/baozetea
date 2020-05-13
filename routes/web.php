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

Route::any('products', 'productsController@products');
Route::any('single', 'productController@single');
Route::any('checkout', 'productController@checkout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'BooksController@index');
Route::get('/cart', 'BooksController@cart');
Route::get('/increase-one-item/{id}', 'BooksController@increaseByOne');
Route::get('/decrease-one-item/{id}', 'BooksController@decreaseByOne');
Route::get('/remove-item/{id}', 'BooksController@removeItem');
Route::get('/add-to-cart/{id}', 'BooksController@getAddToCart');
Route::get('/clear-cart', 'BooksController@clearCart');

Route::get('/products', 'ProductsController@products');
Route::get('/cart', 'ProductsController@cart');
Route::get('/increase-one-item/{id}', 'ProductsController@increaseByOne');
Route::get('/decrease-one-item/{id}', 'ProductsController@decreaseByOne');
Route::get('/remove-item/{id}', 'ProductsController@removeItem');
Route::get('/add-to-cart/{id}', 'ProductsController@getAddToCart');
Route::get('/clear-cart', 'ProductsController@clearCart');

Route::get('/order/new', 'OrdersController@new');
Route::post('/orders', 'OrdersController@store');
Route::get('/orders', 'OrdersController@index');
Route::get('/confirm-orders/{order}', 'OrdersController@confirm');
Route::post('/callback', 'OrdersController@callback');
Route::get('/success', 'OrdersController@redirectFromECpay');