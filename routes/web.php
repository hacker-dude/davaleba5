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

// Route::get('/', function () {
//     return view('guest.index');
// });

Route::get('/', "ArticlesController@index")->name('index');
Route::get('/admin', "ArticlesController@create")->name('create');
Route::post('/admin/store', "ArticlesController@store")->name('store');
Route::post('/admin/destroy', "ArticlesController@destroy")->name('destroy');
Route::get('/admin/show/{id}',"ArticlesController@show")->name('show');
Route::get('/admin/edit/{id}',"ArticlesController@edit")->name('edit');
Route::post('/admin/store/comment', "ArticlesController@storeComment")->name('storeComment');
Route::post('/admin/update', "ArticlesController@update")->name('update');

