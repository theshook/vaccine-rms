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

Route::get('/home', 'HomeController@home')->name('home')->middleware('auth');
Route::get('api/geojson', 'HomeController@getGeoJson')->name('home.geojson')->middleware('auth');


Route::get('/users/trashed', 'UsersController@trashed')->name('users.trashed');
Route::post('/users/restore/{user}', 'UsersController@restore')->name('users.restore');
Route::resource('/users', 'UsersController');

Route::resource('/babies', 'BabiesController');
Route::get('api/barangays', 'BabiesController@apiGetMunicipalBarangay')->name('api.barangays');


Route::resource('/schedules', 'ScheduleController');
Route::get('api/schedules', 'ScheduleController@apiLoadEvents')->name('api.schedules');

Route::resource('/vaccines', 'VaccineController');
