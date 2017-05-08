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
Route::get('/',['uses'=>'MainController@show','as'=>'main']);

Route::get('/blog',['uses'=>'Blog\BlogController@show','as'=>'blog']);
Route::get('/about-me',['uses'=>'Pages\AboutMeController@show','as'=>'about-me']);

//list blog articles
// Route::get('/blog',['uses'=>'Admin\Core@getArticles','as'=>'articles','middleware']);
// Route::get('/blog/{id}', ['uses'=>'Admin\Core@getArticle','as'=>'article']);

//list pages
Route::get('pages/add','Admin\CoreResource@add');
Route::resource('/pages','Admin\CoreResource');
