<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth'],function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/category','CategoryController');
    Route::resource('post', 'PostController');
    Route::resource('tag', 'TagController');

    //user edit profile
    Route::get('user/{id}', 'UserController@edit');
    Route::post('user/{id}','UserController@update');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


