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
Route::get('email', 'EmailController@sendEmail');

Route::get('/posts/','PostsController@index');
Route::get('/posts-cache/','PostsCacheController@index');
Route::get('/categories/','CategoriesController@index');
Route::get('/authors/','AuthorsController@index');
Route::get('/posts-el/','PostsEagerLoadingController@index');
Route::get('/posts-el-cache/','PostsEagerLoadingCacheController@index');
Route::get('image/index', 'ImageController@index');
Route::post('image/upload', 'ImageController@upload');

Route::get('transport/', 'TransportController@show');

Route::post('transport/create', 'TransportController@create');

Route::get('owner/{id}', 'OwnerController@show');
Route::post('owner/edit/{id}','OwnerController@edit');
Route::get('owner', 'OwnerController@index');
