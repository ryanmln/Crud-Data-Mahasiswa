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

Route::get('/','App\Http\Controllers\StudentsController@index');
Route::get('back','App\Http\Controllers\StudentsController@back');
Route::get('create','App\Http\Controllers\StudentsController@create');
Route::post('insert', 'App\Http\Controllers\StudentsController@insert');
Route::get('delete/{id}','App\Http\Controllers\StudentsController@delete');
Route::get('edit/{id}','App\Http\Controllers\StudentsController@edit');
Route::post('update/{id}', 'App\Http\Controllers\StudentsController@update');
Route::get('read/{id}','App\Http\Controllers\StudentsController@read');
