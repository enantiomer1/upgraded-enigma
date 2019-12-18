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

Route::get('/', 'PageController@home')->name('home');

Route::get('/search', 'PageController@search')->name('search');
Route::get('/search/{slug}', 'PageController@search_single')->name('search_single');

Route::get('/blog', 'PageController@blog')->name('blog');
Route::get('/blog/{slug}', 'PageController@blog_single')->name('blog_single');

Route::get('/history', 'PageController@history')->name('history');
Route::get('/history/{slug}', 'PageController@history_single')->name('history_single');

Route::get('/literature', 'PageController@literature')->name('literature');
Route::get('/literature/{slug}', 'PageController@literature_single')->name('literature_single');

Route::get('/prayers', 'PageController@prayers')->name('prayers');
Route::get('/prayers/{slug}', 'PageController@prayers_single')->name('prayers_single');

Auth::routes(['verify' => true]);

Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

Route::namespace('Admin')
->prefix('admin')
->name('admin.')
->group(function(){
    Route::resource('/users', 'UserController', ['except' => ['show']]);
    Route::resource('/posts', 'PostController');
});
