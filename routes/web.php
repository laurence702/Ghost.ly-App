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


// Route::get('/users/{id}/{name}', function($id,$name) {
//     return 'this is user '.$name.' with an id: '.$id;
// });
Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@index');
Route::get('/contact', 'PagesController@contact');
Route::get('/courses', 'PagesController@courses');

Route::get('/about', 'PagesController@about');
Route::resource('posts','PostsController');
