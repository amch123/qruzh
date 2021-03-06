<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/auth/logout', 'Auth\AuthController@logout');

Route::get('/', 'WelcomeController@index');

Route::get('/home', 'HomeController@index');

Route::get('/message', 'MessageController@index');

Route::get('/message/create', 'MessageController@create');

Route::post('/message/store', 'MessageController@store');

Route::get('/shop', 'ShopController@index');

Route::get('/user/edit/{id}', 'UserController@edit');

Route::get('/blog', 'BlogController@index');

Route::get('/product', 'ProductController@index');

Route::get('/product/show/{id}', 'ProductController@show');

Route::get('/wholesale', 'WholesaleController@index');

Route::get('/branch', 'BranchController@index');

Route::get('/setting', 'SettingController@index');

Route::post('/cart/store', 'CartController@store');
