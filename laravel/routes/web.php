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

//闭包函数
Route::any('closure','StudyController@closure')->name('closure');

//在array_amp函数中使用闭包
Route::any('map','StudyController@map')->name('map');