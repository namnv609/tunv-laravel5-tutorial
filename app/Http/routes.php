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
Route::get('/', 'ArticlesController@index');
Route::get('home', 'HomeController@index');
Route::get('articles', 'ArticlesController@index');
Route::get('article/{id}', 'ArticlesController@show')->where('id', '^[0-9]+$');
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    # Article category
    Route::get('categories', 'Admin\CategoriesController@index');
    Route::get('category/{id}', 'Admin\CategoriesController@show')->where('id', '^[0-9]+$');
    Route::get('category/create', 'Admin\CategoriesController@create')->where('id', '^[0-9]+$');
    Route::get('category/{id}/edit', 'Admin\CategoriesController@edit')->where('id', '^[0-9]+$');
    Route::get('category/{id}/delete', 'Admin\CategoriesController@delete')->where('id', '^[0-9]+$');
    Route::resource('category', 'Admin\CategoriesController');
});
