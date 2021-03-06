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

Route::get('/', 'HomeController@index');
Route::post('signup', 'RegistrationController@post');
Route::get('login', 'LoginController@index');
Route::post('login', 'LoginController@post');
Route::get('logout', 'LogoutController@logout');
Route::get('dashboard', 'DashboardController@index');