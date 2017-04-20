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
Route::group(['namespace'=>'Admin','middleware'=>'auth'],function (){

    Route::get('/index','HomeController@index');

    //系统设置
    Route::post('/setting','SettingController@update')->name('admin.setting');
    Route::get('/setting','SettingController@index')->name('admin.setting');

    //用户
    Route::get('/users','UserController@index');
    Route::post('/user','UserController@create');
    Route::put('/user/{id}','UserController@edit');
    Route::delete('/user/{id}','UserController@delete');

    //文章
    Route::get('/articles','ArticleController@index')->name('article.list');
});


Route::get('/','HomeController@index');
//文章接口
//Route::get('/article/create','Admin\ArticleController@create')->name('article.create');
//Route::post('/article','Admin\ArticleController@store')->name('article.store');
//Route::get('/article/{id}/edit','Admin\ArticleController@edit')->name('article.edit');
//Route::post('/article/{id}','Admin\ArticleController@update')->name('article.update');

//Route::get('/test','Auth\LoginController');
