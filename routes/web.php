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

Auth::routes();

Route::get('/', function () {
	if (Auth::check()) {
         return Redirect::to('/home');
    } else {
         return view('welcome');
    }
});

//Web service routes start
Route::post('webservice', 'WebserviceController@index');

Route::get('logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');

// Site Routes
Route::resource('site','SiteController');
Route::get('siteDelete/{id}',['as'=>'site.siteDelete','uses'=>'SiteController@destroy']);
Route::get('siteList',['as'=>'site.listAjax','uses'=>'SiteController@listAjax']);
Route::post('removeSiteEmployee',['as'=>'site.removeSiteEmployee','uses'=>'SiteController@removeSiteEmployee']);

// Employee Routes
Route::resource('employee','EmployeeController');
Route::get('employeeList',['as'=>'employee.listAjax','uses'=>'EmployeeController@listAjax']);
Route::get('employeeDelete/{id}',['as'=>'employee.employeeDelete','uses'=>'EmployeeController@destroy']);
Route::get('getExport',['as'=>'employee.getExport','uses'=>'EmployeeController@getExport']);
Route::post('importEmployeeSave',['as'=>'employee.importEmployeeSave','uses'=>'EmployeeController@importEmployeeSave']);
Route::post('addSiteEmployee',['as'=>'employee.addSiteEmployee','uses'=>'EmployeeController@addSiteEmployee']);
Route::post('employee/removeSiteEmployee',['as'=>'employee.removeSiteEmployee','uses'=>'EmployeeController@removeSiteEmployee']);
Route::post('getSiteName',['as'=>'employee.getSiteName','uses'=>'EmployeeController@getSiteName']);

// Get city list
Route::get('getCityList','SiteController@getCityList');

// Temperary View Routes
Route::get('/activity', function () {
    return view('activity.index');
});
Route::get('/create-invite', function () {
    return view('createInvite.index');
});
Route::get('/venues', function () {
    return view('venues.index');
});