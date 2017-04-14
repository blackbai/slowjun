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



Auth::routes();

/**
 * @namespace Admin
 * @prefix m
 * @middleware auth
 * @desc 后台相关接口
 */
Route::group(['namespace'=>'Admin','prefix'=>'m','middleware'=>'auth'],function (){

    Route::get('/index','HomeController@index');//首页
    Route::get('/users','UserController@index');
    Route::get('/articles','ArticleController@list');
    Route::get('/article/{id}','ArticleController@show');
    Route::post('/article','ArticleController@create');
    Route::put('/article/{id}','ArticleController@update');
});

//首页
Route::get('/','HomeController@index');


Route::group();
