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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('site','SiteController');
Route::get('siteList',['as'=>'site.listAjax','uses'=>'SiteController@listAjax']);

Route::resource('employee','EmployeeController');
Route::get('employeeList',['as'=>'employee.listAjax','uses'=>'EmployeeController@listAjax']);
Route::get('getExport',['as'=>'employee.getExport','uses'=>'EmployeeController@getExport']);
Route::post('importEmployeeSave',['as'=>'employee.importEmployeeSave','uses'=>'EmployeeController@importEmployeeSave']);