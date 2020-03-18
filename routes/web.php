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

Auth::routes();

Route::get('/', 'HomeController@index')
    ->name('home')->middleware('auth');
Route::get('/articles', 'ArticleController@index')->name('articles')->middleware('auth');
Route::get('/articles/{article}', 'ArticleController@show')->name('article')->middleware('auth');
Route::get('/articles/new/article', 'ArticleController@create')->name('article.new')->middleware('auth');
Route::post('/articles/new/article/save', 'ArticleController@store')->name('article.create')->middleware('auth');
Route::get('/articles/edit/{article}', 'ArticleController@edit')->name('article.edit')->middleware('auth');
Route::get('/articles/article-{article}-remove/{article}/remove-now', 'ArticleController@destroy')->name('article.remove')->middleware('auth');
