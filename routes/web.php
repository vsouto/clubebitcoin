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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('sobre', 'HomeController@sobre')->name('sobre');

// Posts
Route::get('posts/', ['as' => 'posts.index', 'uses' => 'PostsController@index']);
Route::get('events/', ['as' => 'events.index', 'uses' => 'EventsController@index']);
Route::get('posts/{slug}', ['as' => 'posts.show', 'uses' => 'PostsController@show']);

// Categories
Route::get('categories/{slug}', ['as' => 'categories.show', 'uses' => 'CategoriesController@show']);

// Users
Route::get('users/{slug}', ['as' => 'users.show', 'uses' => 'UsersController@show']);

// Tests
Route::get('test', ['as' => 'test', 'uses' => 'CoinsController@test']);

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
