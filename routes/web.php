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

Route::get('', function () {
    return view('/index');
});

Route::get('/blog', 'PageController@blogPagina');

Route::get('/course', 'CourseController@course');

Route::post('/blog', 'BlogController@store');

Route::get('/blog/create', 'BlogController@create');

Route::get('/blog/{id}', 'BlogController@blog')->name('article.blog');

Route::get('/blog/{id}/edit', 'BlogController@edit');

Route::put('/blog/{id}', 'BlogController@update');

Route::get('/{home}', 'PageController@pagina');


