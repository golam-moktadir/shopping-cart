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

Route::get('/','ProductController@getIndex');
Route::get('/add-to-cart/{id}','ProductController@getAddToCart');
Route::get('/shopping-cart','ProductController@getCart');
Route::get('/session','ProductController@getanother');

