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
    return view('job/create');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('create_job', 'JobController@store')->name('Job');
// Route::get('/JobCreate', 'HomeController@index')->name('Job');