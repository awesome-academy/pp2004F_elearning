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

Route::get('teacher', 'TeacherShowController@show');
Route::get('teacher/detail/{id}', 'TeacherShowController@showDetail')->name('teacherDetail');

/*admin*/
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
Route::get('users/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('users/register', 'Auth\RegisterController@register');
Route::get('users/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('users/login', 'Auth\LoginController@showLoginForm')->name('login-form');
Route::post('users/login', 'Auth\LoginController@login')->name('login');

Route::group(array('prefix' => 'admin', 'namespace' => 'Admin'), function () {
    Route::get('users', 'UsersController@index')->name('user-index');
    Route::get('roles', 'RolesController@index')->name('roles');
    Route::get('roles/create', 'RolesController@create')->name('create-roles');
    Route::post('roles/create', 'RolesController@store');
    Route::get('users/{id?}/edit', 'UsersController@edit');
    Route::post('users/{id?}/edit', 'UsersController@update');
});

//Route::resource('courses', 'Admin\CoursesController');

Route::get('categories', 'CategoryController@index')->name('categoryIndex');
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

Route::get('course', 'CourseUserController@index')->name('courseuser.index');
Route::get('course/{id}', 'CourseUserController@show');
Route::post('course/{id}', 'CourseUserController@store')->name('cart.store');
Route::get('cart', 'CourseUserController@showcart')->name('order');
Route::post('cart', 'CourseUserController@storeorder')->name('order.store');
Route::get('cart/{id}', 'CourseUserController@dropcourse')->name('cart.dropcourse');

Route::get('cart/delete/{id}', 'CourseUserController@delete')->name('cartuserdelete');

Route::get('orders', 'OrderController@index')->name('order.index');

Route::get('orders/deny/{id}', 'OrderController@deny')->name('order.deny');
Route::get('orders/approve/{id}', 'OrderController@approve')->name('order.approve');

Route::get('refunds', 'RefundController@index')->name('refund.index');
Route::get('refunds/delete/{id}', 'RefundController@delete')->name('refund.delete');

Route::get('mycourse', 'MyCourseController@index')->name('mycourse.index');
Route::get('mycourse/course/{id}', 'MyCourseController@course')->name('mycourse.course');
Route::get('mycourse/course/{id}/lesson/{lesson_id}', 'MyCourseController@lesson')->name('mycourse.lesson');
Route::get('mycourse/course/{id}/lesson/{lesson_id}/exam', 'MyCourseController@exam')->name('mycourse.exam');
Route::post('mycourse/course/{id}/lesson/{lesson_id}/exam', 'MyCourseController@storeexam');

Route::get('lessons', 'LessonController@index')->name('lesson.index');
Route::get('lessons/create', 'LessonController@create')->name('lesson.create');
Route::post('lessons/create', 'LessonController@store')->name('lesson.store');
Route::get('lessons/edit/{id}', 'LessonController@edit');
Route::post('lessons/edit/{id}', 'LessonController@update');
Route::get('lessons/delete/{id}', 'LessonController@delete')->name('lesson.delete');

Route::get('questions', 'QuestionController@index')->name('question.index');
Route::get('questions/create', 'QuestionController@create')->name('question.create');
Route::post('questions/create', 'QuestionController@store');
Route::get('questions/edit/{id}', 'QuestionController@edit');
Route::post('questions/edit/{id}', 'QuestionController@update');
Route::get('questions/delete/{id}', 'QuestionController@delete')->name('question.delete');
Route::get('question/{id}/answer', 'QuestionController@answer')->name('question.answer');
Route::get('question/{id}/answer/create', 'QuestionController@answercreate')->name('question.answercreate');
Route::post('question/{id}/answer/create', 'QuestionController@answerstore')->name('question.answerstore');
Route::get('question/{id}/answer/edit/{answer_id}', 'QuestionController@answeredit')->name('question.answeredit');
Route::post('question/{id}/answer/edit/{answer_id}', 'QuestionController@answerupdate');
Route::get('question/{id}/answer/delete/{answer_id}', 'QuestionController@answerdetele')->name('question.answerdelete');

Route::get('answers', 'AnswerController@index')->name('answers.home');
Route::get('answers/create', 'AnswerController@create')->name('answer.create');
Route::post('answers/create', 'AnswerController@store');
Route::get('answers/edit/{id}', 'AnswerController@edit');
Route::post('answers/edit/{id}', 'AnswerController@update');
Route::get('answers/delete/{id}', 'AnswerController@delete')->name('answer.delete');

Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Route::get('menu', 'MenuController@index')->name('menuIndex');
Route::get('menu/create', 'MenuController@create')->name('menuCreate');
Route::post('menu/create', 'MenuController@store')->name('menuStore');
Route::get('menu/delete/{id}', 'MenuController@delete')->name('menuDelete');