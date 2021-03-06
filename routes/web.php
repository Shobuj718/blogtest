<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/posts', 'PostController@index')->name('post.index');
Route::get('/create-post', 'PostController@create')->name('create.post');
Route::post('/store-post', 'PostController@store')->name('store.post');
Route::get('/show/{id}', 'PostController@show')->name('post.show');

Route::post('comment-store', 'CommentController@store')->name('comment.store');

});
