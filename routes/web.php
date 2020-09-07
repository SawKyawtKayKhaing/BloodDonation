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

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('donars','DonarController');
Route::resource('organizations','OrganizationController');
Route::resource('admins','AdminController');
Route::resource('members','MemberController');
Route::resource('neededbloods','NeededBloodController');
Route::resource('bloods','BloodController');
Route::resource('hospitals','HospitalController');
Route::resource('labs','LabController');
Route::resource('accepts','AcceptController');