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

//Posts処理一覧
Route::get('/', 'PostsController@index')->name('/');
Route::get('/create','PostsController@create')->name('create');
Route::post('/store','PostsController@store')->name('posts.store');
Route::get('/edit/{post_id}','PostsController@edit')->name('posts.edit');
Route::put('/update/{post_id}','PostsController@update')->name('posts.update');
Route::delete('/destroy/{post_id}','PostsController@destroy')->name('posts.destroy');