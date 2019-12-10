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
Route::get('/blog', 'PageController@blog')->name('blog');
Route::get('/blog/{slug}', 'PageController@blog_single')->name('blog_single');
Route::get('/history', 'PageController@history')->name('history');
Route::get('/history/{slug}', 'PageController@history_single')->name('history_single');

Auth::routes(['verify' => true]);

Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

Route::namespace('Admin')
->prefix('admin')
->name('admin.')
->group(function(){
    Route::resource('/users', 'UserController', ['except' => ['show']]);
    Route::resource('/posts', 'PostController');
});
