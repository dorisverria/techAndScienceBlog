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

Route::get('/', [
    'uses' => 'ApplicationController@getLandingPage',
    'as' => 'application.landing_page'
]);

Route::get('/home', [
    'uses' => 'QuackController@getIndex',
    'as' => 'application.index', 
    'middleware' => 'auth'
]);

Route::get('/quack/{id}', [
    'uses' => 'QuackController@getQuack',
    'as' => 'application.quack',
    'middleware' => 'auth'
]);

Route::get('/myQuacks', [
    'uses' => 'QuackController@getMyQuacks',
    'as' => 'application.myQuacks',
    'middleware' => 'auth'
]);

Route::get('/createQuack', [
    'uses' => 'QuackController@getCreateQuack',
    'as' => 'application.createQuack',
    'middleware' => 'auth'
]);

Route::post('/createQuack', [
    'uses' => 'QuackController@postCreateQuack',
    'as' => 'application.createdQuack',
    'middleware' => 'auth'
]);

Route::get('/editQuack/{id}', [
    'uses' => 'QuackController@getEditQuack',
    'as' => 'application.editQuack',
    'middleware' => 'auth'
]);

Route::post('/editQuack/{id}', [
    'uses' => 'QuackController@postEditQuack',
    'as' => 'application.editedQuack',
    'middleware' => 'auth'
]);

Route::post('/deleteQuack', [
    'uses' => 'QuackController@deleteQuack',
    'as' => 'application.deleteQuack',
    'middleware' => 'auth'
]);

Route::get('/signup', [
    'uses' => 'UserController@getSignup',
    'as' => 'user.signup',
    'middleware' => 'guest'
]);

Route::post('/signup', [
    'uses' => 'UserController@postSignup',
    'as' => 'user.signup',
    'middleware' => 'guest'
]);

Route::get('/login', [
    'uses' => 'UserController@getLogin',
    'as' => 'user.login',
    'middleware' => 'guest'
]);

Route::post('/login', [
    'uses' => 'UserController@postLogin',
    'as' => 'user.login',
    'middleware' => 'guest'
]);

Route::get('/logout', [
    'uses' => 'UserController@getLogout', 
    'as' => 'user.logout',
    'middleware' => 'auth'
]);

Route::get('/userList', [
    'uses' => 'UserController@getUserList',
    'as' => 'user.getList',
    'middleware' => 'auth'
]);