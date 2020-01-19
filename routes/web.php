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


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('classes', 'ClassesController');

Route::resource('classRooms', 'ClassRoomController');

Route::resource('levels', 'LevelsController');

Route::resource('batches', 'BatchesController');

Route::resource('shifts', 'ShiftsController');

Route::resource('courses', 'CoursesController');

Route::resource('faculties', 'FacultiesController');

Route::resource('times', 'TimesController');

Route::resource('academics', 'AcademicsController');

Route::resource('days', 'DaysController');

Route::resource('classAssignings', 'ClassAssigningsController');

Route::resource('classSchedulings', 'ClassSchedulingsController');

Route::resource('transactions', 'TransactionsController');

Route::resource('attendances', 'AttendancesController');

Route::resource('admisions', 'AdmisionsController');

Route::resource('teachers', 'TeachersController');

Route::resource('users', 'UsersController');

Route::resource('roles', 'RolesController');