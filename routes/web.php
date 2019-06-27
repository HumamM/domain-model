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

Route::get('/', 'PagesController@index'); 
Route::get('/form', 'CoursesController@index');
Route::get('/courses/{course}/showlessons', 'CoursesController@showlessons')->name('courses.showlessons');
Route::get('/courses/{course}/lessons', 'CoursesController@lessons')->name('courses.lessons');
Route::resource('courses','CoursesController');
Route::resource('lessonunits','LessonUnitController');
Route::get('{course}/lesson_units/create','LessonUnitController@create')->name('create.lessonunit');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
