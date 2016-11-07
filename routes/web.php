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
Route::group(['middleware'=>['web'], 'prefix'=>'admin', 'namespace'=>'Admin'], function(){
    Route::get('/', function () {
        return view('welcome');
    });

    // login page
    Route::get('getcode','LoginController@getcode'); // check verification code
    Route::get('crypt','LoginController@crypt');
    Route::any('login','LoginController@login');
    Route::get('code','LoginController@code');//  verification code
});

Route::group(['middleware'=>['web','admin.login'], 'prefix'=>'admin', 'namespace'=>'Admin'], function(){
    // index page
    Route::any('index','IndexController@index');
    Route::any('info','IndexController@info');
    Route::any('logout','LoginController@logout');
});

