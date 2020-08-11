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

Route::get('teachers', 'TeacherController@index')->name('teachers-index');
Route::get('teachers/create', 'TeacherController@create')->name('teachercreate');
Route::post('teachers/create', 'TeacherController@store')->name('create');
Route::get('teachers/edit/{id}', 'TeacherController@edit')->name('teacheredit');
Route::post('teachers/update/{id}', 'TeacherController@update')->name('teacherupdate');
Route::get('teachers/delete/{id}', 'TeacherController@delete')->name('teacherdelete');
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('users/register', 'Auth\RegisterController@register');
Route::get('users/logout', 'Auth\LoginController@logout');
Route::get('users/login', 'Auth\LoginController@showLoginForm');
Route::post('users/login', 'Auth\LoginController@login')->name('login');

Route::group(array('prefix' => 'admin', 'namespace' => 'Admin'), function () {
    Route::get('users',	'UsersController@index');
    Route::get('roles',	'RolesController@index');
	Route::get('roles/create', 'RolesController@create');
    Route::post('roles/create', 'RolesController@store');
    Route::get('users/{id?}/edit', 'UsersController@edit');
    Route::post('users/{id?}/edit', 'UsersController@update');
});

//Route::resource('courses', 'Admin\CoursesController');

Route::get('categories', 'CategoryController@index');
Route::get('categories/create', 'CategoryController@create')->name('categorycreate');
Route::post('categories/create', 'CategoryController@store');
Route::get('categories/edit/{id}', 'CategoryController@edit');
Route::post('categories/edit/{id}', 'CategoryController@update');
Route::get('categories/delete/{id}', 'CategoryController@delete')->name('categorydelete');

Route::get('courses', 'CourseController@index')->name('course.index');
Route::get('courses/create', 'CourseController@create')->name('coursecreate');
Route::post('courses/create', 'CourseController@store');
Route::get('courses/edit/{id}', 'CourseController@edit');
Route::post('courses/edit/{id}', 'CourseController@update');
Route::get('courses/delete/{id}', 'CourseController@delete')->name('coursedelete');
