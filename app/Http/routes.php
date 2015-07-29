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


Route::get('/',['middleware' => 'auth', 'uses' => 'UserController@index']);
Route::post('/home', 'UserController@login');

Route::get('/signin', ['as' => 'signin', 'uses' =>'UserController@signin']);

Route::post('/signin', 'UserController@create');

Route::post('/login', 'UserController@login');

Route::get('/login', 'UserController@formLogin');
Route::get('/deconnexion', 'UserController@deconnexion');

//Route::get('/profil', 'UserController@show');
//Route::get('/accueil', 'UserController@getUsers');

Route::get('/profil/edit/{id?}', 'UserController@edit');

Route::get('/profil/{id?}', 'UserController@show');