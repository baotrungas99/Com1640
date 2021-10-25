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
Route::get('/detail-idea/{idea_slug}', 'HomeController@detail_idea');
// Route::post('ajaxLike', 'IdeasController@ajaxLike')->name('ajaxLike');
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

Route::post('/thumb-idea', 'IdeasController@thumb_idea');

Route::get('/review-ideas-by-deparment/{slug}', 'IdeasController@review_ideas_by_deparment');
//comment
Route::post('/add-comment', 'IdeasController@add_comment');

//like
// Route::get('/like/{user_id}','HomeController@like');
// Route::get('/dislike/{user_id}','HomeController@disLike');
Route::post('ajaxLike', 'HomeController@ajaxLike')->name('ajaxLike');

//topic and deadline
Route::get('/topic-ideas', 'IdeasController@add_topic');
Route::post('/insert-topic', 'IdeasController@insert_topic');
