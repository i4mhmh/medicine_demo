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

Route::get('/', function () {
    return view('welcome');
});

Route::any('/home', function () {
    echo 'welcome to my home';
});

Route::group(['prefix' => 'admin'],function(){
    Route::get('demo',function(){
        echo 'a';
    });
});

Route::get('/home/test/test1','TestController@test1');
Route::get('/home/test/test2','home\TestController@demo');

Route::group(['prefix' => 'home/test'],function(){
    Route::get('add','TestController@add');
    Route::get('del','TestController@del');
    Route::get('update','TestController@update');
    Route::get('search','TestController@search');

});

Route::group(['prefix' => 'db'], function () {
    Route::get('add','db\TestController@add');
    Route::get('update','db\TestController@update');
    Route::get('select','db\TestController@select');
    Route::get('del','db\TestController@del');
});