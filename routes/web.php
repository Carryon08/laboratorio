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
Route::get('/user-create', 'UserController@create')->name('user.create');
Route::get('/user/{id}/files','FileController@index')->name('files.index');
Route::get('/files/{id}/create','FileController@create')->name('files.create');
Route::get('/files/download/{file}', 'FileController@download')->name('files.download');
Route::resource('file','FileController');

Route::middleware(['IsAdmin'])->group(function () {
    Route::resource('user', 'UserController');
});
