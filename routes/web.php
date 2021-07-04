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

/*Route::get('/', function () {
    return view('welcome');
});*/


// home routing
Route::get('/', 'HomeController@index');

// author routing
Route::get('/new-author/{id}','AuthorController@index');
Route::post('/author/new','AuthorController@store');

// login
Route::get('/login', 'LoginController@index');
Route::post('/authentication', 'LoginController@login');

// article
    //create index page
 Route::get('/new-article/{id}','ArticleController@craftindex');
    // save article
 Route::post('/article-create', 'ArticleController@createarticle');
    // articles front
 Route::get('/article', 'ArticleController@index');
    // article's detail
 Route::get('/regarder-article-{id}', 'ArticleController@article');