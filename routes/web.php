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
	$title='Fuck shit';
	return view('pages.index')->with('title',$title);
});
Route::get('/form', 'CoursesController@index');
Route::get('/courses/{course}/showlessons', 'CoursesController@showlessons')->name('courses.showlessons');
Route::resource('courses','CoursesController');
Route::resource('lessonunits','LessonUnitController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
