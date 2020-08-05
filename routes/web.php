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
    return view('home');
});

Route::get('teachers/index', 'TeacherController@index');
Route::get('teachers/create', 'TeacherController@create')->name('teachercreate');
Route::post('teachers/create', 'TeacherController@store')->name('create');
Route::get('teachers/edit/{id}', 'TeacherController@edit')->name('teacheredit');
Route::post('teachers/edit/{id}', 'TeacherController@update');
Route::get('teachers/delete/{id}', 'TeacherController@delete')->name('teacherdelete');