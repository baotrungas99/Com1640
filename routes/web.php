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
//home
Route::get('/', 'HomeController@index');
Route::get('/Homepage', 'HomeController@index');

//login-logout
Route::get('/login', 'LoginController@login');
route::get('/logout', 'LoginController@login');

//admin
Route::get('/dashboard', 'LoginController@dashboard');
