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
Route::get('/posts','ActController@index')->name('posts');
//文章详情页面
Route::get('/posts/{post}','ActController@show');
//创建文章
Route::get('/posts/create','ActController@create')->name('create');
Route::post('/posts','ActController@store');
//编辑文章
Route::get('/posts/{post}/edit','ActController@deit');
Route::put('/posts/{post}','ActController@update');
//删除文章
Route::get('/posts/delete','ActController@delete');