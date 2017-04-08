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


//Route::get('/',function (){
//    return view('welcome');
//});
//
//Route::get('/hello/{name}',function($name){
//    return "Hello {$name}!";
//})->where('name','\w+');
//
//Route::get('/hello/{name}/usr/{usr}',function($name,$usr){
//    return "hello {$name},{$usr}";
//});
//
//
//
//Route::post('/hello',function(){
//    return "Hello Laravel[POST]!";
//});
////Route::get('/', 'TestController@index');
//
//Route::resource('test','Test1Controller');
//

//Route::get('/hello/laravel',['as'=>'l',function(){
//    return 'hello laravel';
//}]);
//
//Route::get('/test',function(){
//    return redirect()->route('l');
//});
//
//Route::group(['as'=>'admin::'], function(){
//    Route::get('home', ['as'=>'home', function(){
//        return 'home';
//    }]);
//});
//
//Route::get('/test1',function(){
//    return route('admin::home');
//});
//
//Route::group(['middleware'=>'test'],function(){
//    Route::get('/write',function(){
//        return 'sb';
//    });
//
//    Route::get('update',function (){
//
//    });
//});
//
//Route::get('/age/refuse',['as'=>'refuse',function(){
//    return 'sb count let in';
//}]);
//
//Route::group(['prefix'=>'laravel'],function(){
//
//    Route::get('/test1',function (){
//        return 'test1';
//    });
//
//    Route::get('/test2',function (){
//        return 'test2';
//    });
//
//});


//Route::resoure('post','PostController');
//Route::get('/post_get','PostController@create');


Route::get('/test','TestController@index');
Route::post('/post','PostsController@create');
Route::get('/post/{id}','PostsController@getPost');


Route::resource('tag','TagController');
Route::get('/user','PostsController@getUser');












Auth::routes();

Route::get('/home', 'HomeController@index');
