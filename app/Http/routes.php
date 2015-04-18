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

# general routing
Route::get('/', 'HomeController@index');

# accounts
Route::get('account/new', 'AccountController@typeSelect');
Route::get('account/new/{type}', 'AccountController@create');
Route::post('account/store', 'AccountController@store');