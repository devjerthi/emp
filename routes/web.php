<?php
use APP\Http\Controller\LoginController;
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

Route::get('/dashboard','DashboardController@dashboard');

Route::resource('employe',EmployeeController::class);

//Route::get('create','EmployeeController@create');

Route::resource('departments',DepartmentController::class);

//Route::resource('homedashboard',DashboardController::class);

Route::get('/login','LoginController@login');
//Route::post('/dashboard','LoginController@submit_login');

Route::get('/attendance','ReportController@attendance');