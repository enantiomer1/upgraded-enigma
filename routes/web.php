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

Auth::routes(['verify' => true]);

Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

Route::namespace('Admin')
->prefix('admin')
->name('admin.')
->group(function(){
    Route::resource('/users', 'UserController', ['except' => ['show']]);
    Route::resource('/posts', 'PostController');
});
