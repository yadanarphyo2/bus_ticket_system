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



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::Resource('/operators','OperatorController');
Route::Resource('/buses','BusController');
Route::Resource('/schedules','ScheduleController');
Route::Resource('/regions','RegionController');
Route::Resource('/subregions','SubregionController');
Route::Resource('/bookings','BookingController');

Route::middleware('role:admin')->group(function(){

Route::get('/dashboard', 'BackendController@dashboard')->name('dashboard');

});
Route::get('/', 'FrontendController@frontend')->name('frontend');



