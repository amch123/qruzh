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

Route::get('/', 'WelcomeController@index');

Route::get('/login', 'Auth\AuthController@index');

Route::post('user/login', 'Auth\AuthController@login');

Route::get('/register', 'UserController@create');

Route::get('/home', 'HomeController@index');

Route::get('/message', 'MessageController@create');

Route::post('/message/store', 'MessageController@store');

Route::get('/shop', 'ShopController@index');

Route::get('/auth/logout', 'Auth\LoginController@logout');

Route::get('/user/edit/{id}', 'UserController@edit');

Route::get('/blog', 'BlogController@index');

Route::get('/product', 'ProductController@index');
