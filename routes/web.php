<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/ui', function () {
    return view('layouts.ui');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('donars','DonarController');
Route::resource('/patients','PatientController');
Route::resource('health_checks','HealthCheckController');
Route::resource('records','RecordController');