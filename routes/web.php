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
Route::get('/show-by-category/{slug}', 'HomeController@show_by_category');
//login
Route::get('/login', 'LoginController@login');


//user-login
Route::post('/dashboard', 'UserController@dashboard');
route::get('/logout', 'UserController@logout');
// dashboard-login
Route::get('/show-dashboard', 'LoginController@show_dashboard');
//category-ideas
Route::get('/category-ideas', 'CategoryController@category_ideas');
Route::post('/insert-category', 'CategoryController@insert_category');
Route::get('/list-category-ideas', 'CategoryController@list_category_ideas');
Route::get('/delete-category-ideas/{id}', 'CategoryController@delete_category_ideas');

//ideas

Route::get('/submit-idea', 'IdeasController@submit_idea');
Route::post('/insert-idea', 'IdeasController@insert_idea');
