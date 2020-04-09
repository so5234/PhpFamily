<?php

use Illuminate\Support\Facades\Route;

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
//文章列表页面
Route::get('index','ActController@index')->name('index');
//文章详情页面
Route::get('index/{post}','ActController@show')->name('show');
//创建文章
Route::get('index/create','ActController@create');
Route::post('index','ActController@store');
//编辑文章
Route::get('index/{post}/edit','ActController@deit');
Route::put('index/{post}','ActController@update');
//删除文章
Route::get('index/delete','ActController@delete');