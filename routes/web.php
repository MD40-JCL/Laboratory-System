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

// Route::get('/home', 'HomeController@index')->name('home');

Route::resource('home','HomeController');
Route::resource('dashboard','DashboardController');
Route::resource('dailytask','DailyTaskController');
Route::resource('product','ProductController');
Route::resource('sop','SopController');
Route::resource('method','MethodController');
Route::resource('specification','SpecificationController');
Route::resource('parameter','ParameterController');
Route::resource('grade','GradeController');


// Product controllers
Route::resource('inprogress','InprogressController');
Route::resource('product','ProductController');
Route::resource('result','ResultController');
Route::resource('pending','PendingController');
Route::resource('kiln','KilnController');

// Sample controllers
Route::resource('sample','SampleController');
Route::resource('addNewSample','AddNewSampleController');
Route::resource('dailySample','DailySampleController');
Route::resource('retaining', 'RetainingController');

// Lab Staff
Route::resource('employee','EmployeeController');





// Kool Reports
Route::get('/report', "ReportController@index");