<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::group(['middleware'=>['web']], function(){
    Route::get('/', function () {
        return view('welcome');
    });

    // login page
    Route::any('admin/login','Admin\LoginController@login');
    Route::get('admin/code','Admin\LoginController@code');//  verification code
    Route::get('admin/getcode','Admin\LoginController@getcode'); // check verification code
    Route::get('admin/crypt','Admin\LoginController@crypt');

    // index page
    Route::any('admin/index','Admin\IndexController@index');
    Route::any('admin/info','Admin\IndexController@info');
});

