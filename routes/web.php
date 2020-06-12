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

Route::get('', function () {
    return view('/index');
});

Route::get('/blog', 'PageController@blogPagina');

Route::get('/course', 'CourseController@course');

Route::post('/blog', 'BlogController@store')
    ->middleware('auth');

Route::get('/blog/create', 'BlogController@create')
    ->middleware('auth');

Route::get('/blog/{id}', 'BlogController@blog')->name('article.blog');

Route::get('/blog/{id}/edit', 'BlogController@edit')
    ->middleware('auth');

Route::put('/blog/{id}', 'BlogController@update')
    ->middleware('auth');

Route::get('/{home}', 'PageController@pagina');


Route::get('/home', 'HomeController@index')->name('home');
