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


Route::get('/', 'App\Http\Controllers\StudentController@index')->name('students.index');
Route::get('create', 'App\Http\Controllers\StudentController@create')->name('students.create');
Route::post('add', 'App\Http\Controllers\StudentController@add')->name('students.add');
Route::get('edit/{id}', 'App\Http\Controllers\StudentController@edit')->name('students.edit');
Route::post('update/{id}', 'App\Http\Controllers\StudentController@update')->name('students.update');
Route::get('destroy/{id}', 'App\Http\Controllers\StudentController@destroy')->name('students.destroy');
Route::get('score', 'App\Http\Controllers\ScoreController@index')->name('scores.score');
Route::get('score/create', 'App\Http\Controllers\ScoreController@create')->name('scores.create');
Route::post('score/store', 'App\Http\Controllers\ScoreController@store')->name('scores.store');
Route::get('score/edit/{id}', 'App\Http\Controllers\ScoreController@edit')->name('scores.edit');
Route::post('score/update/{id}', 'App\Http\Controllers\ScoreController@update')->name('scores.update');
Route::get('score/destroy/{id}', 'App\Http\Controllers\ScoreController@destroy')->name('scores.destroy');
Route::get('score/{id}', 'App\Http\Controllers\ScoreController@detail_score')->name('scores.detail_score');
