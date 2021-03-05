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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();
Route::get('/',"WelcomeController@homePageShow");
Route::get('/admin',"AdminController@index");
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/main', 'MainController@index')->name('main');
Route::post('/booking/form','BookingController@store')->name('test');

Route::get('/mybooking','BookingController@show');
Route::get('/cancledbooking','BookingController@showCancled');
Route::get('/date/form','User1Controller@index')->name('test');
Route::post('/date/form','BookingController@datepic')->name('test');
Route::post('/admin','AdminController@store')->name('admin');
Route::post('/mybooking','BookingController@deleteRow')->name('test');
Route::post('/welcome/form','WelcomeController@show')->name('welcome');

