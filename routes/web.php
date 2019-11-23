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

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');


Route::get('/users/trashed', 'UsersController@trashed')->name('users.trashed');
Route::post('/users/restore/{user}', 'UsersController@restore')->name('users.restore');
Route::resource('/users', 'UsersController');

Route::resource('/babies', 'BabiesController');
Route::get('api/barangays/{municipal_id}', 'BabiesController@apiGetMunicipalBarangay')->name('api.barangays');
