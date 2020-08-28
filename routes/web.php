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






Route::middleware('role:admin')->group(function(){
Route::get('/dashboard', 'BackendController@dashboard')->name('dashboard');

});

Route::Resource('/operators','OperatorController');
Route::Resource('/buses','BusController');
Route::Resource('/regions','RegionController');
Route::Resource('/subregions','SubregionController');
Route::Resource('/schedules','ScheduleController');

Route::get('/', 'FrontendController@frontend')->name('frontend');
Route::post('/index', 'FrontendController@index')->name('index');
Route::get('/contact', 'FrontendController@contact')->name('contact');

Route::post('/selectseat/{id}', 'FrontendController@selectseat')->name('selectseat');
Route::post('/customer/{id}', 'FrontendController@customer')->name('customer');
Route::Resource('/bookings','BookingController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Route::post('/getItem','FrontendController@getItem')->name('getItem');
Route::post('getsubregion','SubregionController@getsubregion')->name('busroute');
Route::post('getdata','ScheduleController@getdata')->name('getdata');
Route::post('getoperator','ScheduleController@getoperator')->name('getoperator');
Route::post('/customerstore','FrontendController@customerstore')->name('customerstore');


