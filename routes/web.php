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

Route::get('teachers', 'TeacherController@index');
Route::get('teachers/create', 'TeacherController@create')->name('teachercreate');
Route::post('teachers/create', 'TeacherController@store')->name('create');
Route::get('teachers/edit/{id}', 'TeacherController@edit')->name('teacheredit');
Route::post('teachers/edit/{id}', 'TeacherController@update');
Route::get('teachers/delete/{id}', 'TeacherController@delete')->name('teacherdelete');
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('users/register', 'Auth\RegisterController@register');
Route::get('users/logout', 'Auth\LoginController@logout');
Route::get('users/login', 'Auth\LoginController@showLoginForm');
Route::post('users/login', 'Auth\LoginController@login')->name('login');

Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'), function () {
    Route::get('users',	'UsersController@index');
    Route::get('roles',	'RolesController@index');
	Route::get('roles/create', 'RolesController@create');
    Route::post('roles/create', 'RolesController@store');
    Route::get('users/{id?}/edit', 'UsersController@edit');
    Route::post('users/{id?}/edit', 'UsersController@update');
});
