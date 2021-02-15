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
    return view('master');
});

Route::get('/Home','App\Http\Controllers\MasterController@Home');
Route::get('/Services','App\Http\Controllers\MasterController@Services');
Route::get('/ContactUs','App\Http\Controllers\MasterController@Contact');
Route::get('/JoinUs','App\Http\Controllers\MasterController@Join');
