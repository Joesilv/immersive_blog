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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home', 'HomeController@index');

Route::post('/posts', 'Controller@posts')->name('posts');

Route::get('/edit', 'HomeController@edit')->name('edit');

Route::get('/editInfo', 'HomeController@editInfo')->name('editInfo');
Route::post('/editInfo', 'HomeController@editInfo')->name('editInfo');
Route::get('/createPost', 'HomeController@createPost')->name('createPost');