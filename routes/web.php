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

 // homePage
Route::get('/', 'PagesController@index')->name('app.home');

// Dashboard
Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard');

//Company Routes
Route::get('company/create', 'CompanyController@create')->name('create-company');
Route::post('/company/add', 'CompanyController@store')->name('company.store');
Route::get('/company/view-company', 'CompanyController@index')->name('view-company');
Route::get('company/company-list/{id}', 'CompanyController@edit')->name('company-edit');
Route::post('company/company-list/{id}', 'CompanyController@update')->name('company-update');
Route::delete('company/company-list/{id}', 'CompanyController@destroy')->name('company.delete');

// Employee Routes
Route::get('/employee/create', 'EmployeeController@create')->name('create-employee');
Route::post('/employee/add', 'EmployeeController@store')->name('employee.store');
Route::get('/employee/view-employee', 'EmployeeController@index')->name('view-employee');
Route::get('/employee/employee-list/{id}', 'EmployeeController@edit')->name('employee-edit');
Route::post('/employee/employee-list/{id}', 'EmployeeController@update')->name('employee-update');
Route::delete('/employee/employee-list/{id}', 'EmployeeController@destroy')->name('employee.delete');