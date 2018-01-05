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
Route::group(['prefix' => 'admin','namespace'=>'admin'], function () {
    Route::get('/users', 'UsersController@index')->name('admin.users.list');
    Route::get('/users/create', 'UsersController@create')->name('admin.users.create');
    Route::post('/users/create', 'UsersController@store')->name('admin.users.store');
    Route::get('/users/delete/{id}','UsersController@delete')->name('admin.users.delete');
    Route::get('/users/edit/{id}','UsersController@edit')->name('admin.users.edit');
    Route::post('/users/edit/{id}','UsersController@update')->name('admin.users.update');
});