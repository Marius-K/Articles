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
Route::get('/', 'ArticleController@index')->name('articles');
Route::get('/home', 'ArticleController@index');
Route::get('/article/{article}', 'ArticleController@show');

Route::get('/article/{article}/edit', 'ArticleController@edit');
Route::put('/article/{article}/edit', 'ArticleController@update');
Route::get('/article/{article}/delete', 'ArticleController@destroy');
Route::get('/new-article', function () {
    return view('add');
});
Route::post('/new-article', 'ArticleController@store');



