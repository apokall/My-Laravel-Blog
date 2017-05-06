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

Route::get('/about-me', function () {
    return view('about-me');
});

Route::get('/blog',['uses'=>'Admin\Core@getArticles','as'=>'articles','middleware']);
Route::get('/blog/{id}', ['uses'=>'Admin\CoreResource@getArticle','as'=>'article']);

//list pages
Route::resource('/pages','Admin\CoreResource');
