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

Route::get('/', 'DoctorController@index');

Route::get('doctors/{doctor}/show', 'DoctorController@show');
Route::get('/create', 'DoctorController@create');
Route::post('/store', 'DoctorController@store');
Route::get('/{doctor}/edit', 'DoctorController@edit');
Route::patch('/{doctor}/update', 'DoctorController@update');
Route::delete('/{doctor}/delete', 'DoctorController@destroy');


Route::get('appointment/create', 'AppointmentController@create');
Route::post('appointment/store', 'AppointmentController@store');
Route::get('appointment/{appointment}/edit', 'AppointmentController@edit');
Route::patch('appointment/{appointment}/update', 'AppointmentController@update');
Route::delete('appointment/{appointment}/delete', 'AppointmentController@destroy');
