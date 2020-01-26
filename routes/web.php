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

Route::get('/bigbook', 'PageController@bigbook')->name('bigbook');
Route::get('/12and12', 'PageController@twelve_and_twelve')->name('12and12');

Route::get('/preamble', 'PageController@preamble')->name('preamble');
Route::get('/12steps', 'PageController@steps')->name('12steps');
Route::get('/12traditions', 'PageController@traditions')->name('12traditions');

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

Route::get('/speakers', 'SpeakerController@speakers')->name('speakers');
Route::get('/speakers/index', 'SpeakerController@index')->name('speakers.all');
Route::get('/speakers/sandyb', 'SpeakerController@sandyb')->name('speakers.sandy');
Route::get('/speakers/clarence_snyder', 'SpeakerController@clarence')->name('speakers.clarence');
Route::get('/speakers/joe_and_charlie', 'SpeakerController@joe_charlie')->name('speakers.joe_charlie');
Route::get('/speakers/funny', 'SpeakerController@funny')->name('speakers.funny');
Route::get('/speakers/top50', 'SpeakerController@top50')->name('speakers.top50');

Route::get('contact', 'ContactController@show')->name('contact');
Route::post('contact/send', 'ContactController@send')->name('contact.send');

Auth::routes(['verify' => true]);

Route::get('/profile', 'ProfileController@edit')->name('profile.edit');
Route::put('/profile', 'ProfileController@update')->name('profile.update');
Route::put('/profile/password', 'ProfileController@password')->name('profile.password');

Route::namespace('Admin')
->prefix('admin')
->name('admin.')
->group(function(){
    Route::resource('/users', 'UserController', ['except' => ['show']]);
    Route::resource('/posts', 'PostController', ['except' => ['show']]);
    Route::resource('/speakers', 'SpeakerController', ['except' => ['show']]);
    Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
});
